<?php
declare(strict_types=1);

/**
 * Rate limit por IP con ventana fija (fixed window).
 *
 * - Guarda contadores en archivo JSON dentro de /tmp.
 * - Usa flock() para evitar condiciones de carrera.
 * - Devuelve si la solicitud puede pasar y cuantos segundos faltan para reintentar.
 */

function rate_limit_client_ip(): string
{
    $ip = trim((string) ($_SERVER['REMOTE_ADDR'] ?? ''));
    return $ip !== '' ? $ip : 'unknown';
}

function rate_limit_state_file(string $bucket): string
{
    $safe = preg_replace('/[^a-z0-9_\-]/i', '_', $bucket);
    return rtrim(sys_get_temp_dir(), DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR . 'uneg_rate_limit_' . $safe . '.json';
}

function rate_limit_consume(string $bucket, string $subject, int $maxAttempts, int $windowSeconds): array
{
    $now = time();
    $windowSeconds = max(1, $windowSeconds);
    $maxAttempts = max(1, $maxAttempts);
    $key = hash('sha256', $subject);
    $file = rate_limit_state_file($bucket);

    $fh = @fopen($file, 'c+');
    if (!$fh) {
        // Fail-open controlado: no bloquear si no se puede usar el archivo temporal.
        return ['allowed' => true, 'remaining' => $maxAttempts, 'retry_after' => 0];
    }

    if (!flock($fh, LOCK_EX)) {
        fclose($fh);
        return ['allowed' => true, 'remaining' => $maxAttempts, 'retry_after' => 0];
    }

    $raw = stream_get_contents($fh);
    $state = json_decode($raw ?: '{}', true);
    if (!is_array($state)) {
        $state = [];
    }

    // Limpieza simple de entradas viejas.
    foreach ($state as $k => $entry) {
        $start = (int) ($entry['start'] ?? 0);
        if ($start <= 0 || ($now - $start) >= $windowSeconds) {
            unset($state[$k]);
        }
    }

    $entry = $state[$key] ?? ['start' => $now, 'count' => 0];
    $start = (int) ($entry['start'] ?? $now);
    $count = (int) ($entry['count'] ?? 0);

    if (($now - $start) >= $windowSeconds) {
        $start = $now;
        $count = 0;
    }

    if ($count >= $maxAttempts) {
        $retryAfter = max(1, $windowSeconds - ($now - $start));
        // Persistimos estado tal cual para mantener bloqueo.
        $state[$key] = ['start' => $start, 'count' => $count];
        ftruncate($fh, 0);
        rewind($fh);
        fwrite($fh, json_encode($state));
        fflush($fh);
        flock($fh, LOCK_UN);
        fclose($fh);
        return ['allowed' => false, 'remaining' => 0, 'retry_after' => $retryAfter];
    }

    $count++;
    $state[$key] = ['start' => $start, 'count' => $count];

    ftruncate($fh, 0);
    rewind($fh);
    fwrite($fh, json_encode($state));
    fflush($fh);
    flock($fh, LOCK_UN);
    fclose($fh);

    return [
        'allowed' => true,
        'remaining' => max(0, $maxAttempts - $count),
        'retry_after' => 0,
    ];
}

function rate_limit_reset(string $bucket, string $subject): void
{
    $file = rate_limit_state_file($bucket);
    if (!is_file($file)) {
        return;
    }

    $fh = @fopen($file, 'c+');
    if (!$fh) {
        return;
    }
    if (!flock($fh, LOCK_EX)) {
        fclose($fh);
        return;
    }

    $state = json_decode(stream_get_contents($fh) ?: '{}', true);
    if (!is_array($state)) {
        $state = [];
    }
    $key = hash('sha256', $subject);
    unset($state[$key]);

    ftruncate($fh, 0);
    rewind($fh);
    fwrite($fh, json_encode($state));
    fflush($fh);
    flock($fh, LOCK_UN);
    fclose($fh);
}
