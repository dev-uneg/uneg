<?php
declare(strict_types=1);

require __DIR__ . '/../../helpers/leads_db.php';
require __DIR__ . '/../../helpers/turnstile.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit('Metodo no permitido');
}

$base = rtrim(dirname($_SERVER['SCRIPT_NAME'] ?? ''), '/');
$base = $base === '.' ? '' : $base;

$redirectWithError = static function (string $reason, string $logDetail = '') use ($base): void {
    try {
        $debugId = strtoupper(bin2hex(random_bytes(4)));
    } catch (Throwable $e) {
        $debugId = strtoupper(substr(md5(uniqid('', true)), 0, 8));
    }
    if ($logDetail !== '') {
        error_log(sprintf('Buzon rector error [%s] %s', $debugId, $logDetail));
        $line = sprintf(
            "[%s] Buzon rector error [%s] reason=%s ip=%s detail=%s\n",
            date('Y-m-d H:i:s'),
            $debugId,
            $reason,
            (string) ($_SERVER['REMOTE_ADDR'] ?? 'N/D'),
            $logDetail
        );
        @file_put_contents(__DIR__ . '/../../storage/forms.log', $line, FILE_APPEND);
    }

    $query = http_build_query([
        'error' => '1',
        'reason' => $reason,
        'debug_id' => $debugId,
    ]);
    header('Location: ' . $base . '/comunidad/buzon-del-rector?' . $query, true, 302);
    exit;
};

$turnstileToken = trim((string) ($_POST['cf-turnstile-response'] ?? ''));
if ($turnstileToken === '') {
    $redirectWithError('turnstile_missing', 'Falta token de Turnstile.');
}

$turnstileResponse = verify_turnstile_token($turnstileToken, (string) ($_SERVER['REMOTE_ADDR'] ?? ''));
if (!($turnstileResponse['success'] ?? false)) {
    $codes = $turnstileResponse['error-codes'] ?? [];
    $codesList = is_array($codes) ? implode(', ', array_map('strval', $codes)) : '';
    $redirectWithError('turnstile_invalid', 'Turnstile rechazado. Códigos: ' . $codesList);
}

$nombre = trim((string) ($_POST['nombre'] ?? ''));
$correo = trim((string) ($_POST['correo'] ?? ''));
$asunto = trim((string) ($_POST['asunto'] ?? ''));
$mensaje = trim((string) ($_POST['mensaje'] ?? ''));

if ($nombre === '' || $correo === '' || $asunto === '' || $mensaje === '') {
    $redirectWithError('missing_fields', 'Faltan campos obligatorios.');
}

if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
    $redirectWithError('invalid_email', 'Correo inválido: ' . $correo);
}

$id = buzon_rector_db_insert([
    'nombre' => $nombre,
    'correo' => $correo,
    'asunto' => $asunto,
    'mensaje' => $mensaje,
    'ip' => $_SERVER['REMOTE_ADDR'] ?? null,
    'user_agent' => $_SERVER['HTTP_USER_AGENT'] ?? null,
    'created_at' => date('c'),
]);

if (!$id) {
    $redirectWithError('db_insert_failed', 'No se pudo guardar el mensaje en BD.');
}

$safeNombre = str_replace(["\r", "\n"], ' ', $nombre);
$safeCorreo = str_replace(["\r", "\n"], '', $correo);
$safeAsunto = str_replace(["\r", "\n"], ' ', $asunto);
$relayUrl = trim((string) (getenv('BUZON_POST_URL') ?: 'https://delvalle.qodexia.site/buzon-uneg-relay-mailer.php'));
$payload = [
    'nombre' => $safeNombre,
    'correo' => $safeCorreo,
    'asunto' => $safeAsunto,
    'mensaje' => $mensaje,
    'ip' => (string) ($_SERVER['REMOTE_ADDR'] ?? ''),
    'created_at' => date('c'),
];

$ch = curl_init($relayUrl);
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_HTTPHEADER => ['Content-Type: application/json', 'Accept: application/json'],
    CURLOPT_POSTFIELDS => json_encode($payload, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
    CURLOPT_TIMEOUT => 12,
]);
$raw = curl_exec($ch);
if ($raw === false) {
    $curlError = curl_error($ch);
    curl_close($ch);
    $redirectWithError('relay_failed', 'POST a relay falló por cURL: ' . $curlError);
}
$status = (int) curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);
if ($status < 200 || $status >= 300) {
    $redirectWithError('relay_failed', 'POST a relay respondió HTTP ' . $status . '. Body: ' . (string) $raw);
}

$decoded = json_decode((string) $raw, true);
if (is_array($decoded) && isset($decoded['ok']) && !$decoded['ok']) {
    $relayError = (string) ($decoded['error'] ?? 'Error no especificado en relay.');
    $redirectWithError('relay_failed', 'POST a relay devolvió ok=false: ' . $relayError);
}

header('Location: ' . $base . '/gracias?origen=buzon', true, 302);
exit;
