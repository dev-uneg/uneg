<?php
// Obtiene un valor de config para Turnstile con este orden:
// 1) variables de entorno del sistema, 2) .env local, 3) keys.txt (legacy), 4) default.
function turnstileConfig(string $key, string $default = ''): string
{
    static $keys = null;

    if ($keys === null) {
        $keys = [];

        // Carga claves desde .env del proyecto.
        $envPath = __DIR__ . '/.env';
        if (is_file($envPath)) {
            $keys = array_merge($keys, parseSimpleEnv($envPath));
        }

        // Fallback legacy: allows older local setup to keep working.
        $legacyPath = __DIR__ . '/keys.txt';
        if (is_file($legacyPath)) {
            $legacy = parse_ini_file($legacyPath, false, INI_SCANNER_RAW);
        if (is_array($legacy)) {
                $keys = array_merge($keys, $legacy);
            }
        }
    }

    // Prioridad máxima: env vars exportadas en el servidor.
    $value = getenv($key);
    if (is_string($value) && $value !== '') {
        return $value;
    }

    $fromFile = $keys[$key] ?? '';
    if (is_string($fromFile) && $fromFile !== '') {
        return $fromFile;
    }

    return $default;
}

// Parser sencillo para archivos .env tipo KEY=VALUE.
function parseSimpleEnv(string $filePath): array
{
    $result = [];
    $lines = file($filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    if ($lines === false) {
        return $result;
    }

    foreach ($lines as $line) {
        $trimmed = trim($line);
        if ($trimmed === '' || str_starts_with($trimmed, '#')) {
            continue;
        }

        $pair = explode('=', $trimmed, 2);
        if (count($pair) !== 2) {
            continue;
        }

        $name = trim($pair[0]);
        $value = trim($pair[1]);
        if ($name === '') {
            continue;
        }

        $result[$name] = trim($value, "\"'");
    }

    return $result;
}
