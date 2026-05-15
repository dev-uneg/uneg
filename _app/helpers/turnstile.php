<?php
declare(strict_types=1);

const TURNSTILE_DEFAULT_SITE_KEY = '1x00000000000000000000AA';
const TURNSTILE_DEFAULT_SECRET_KEY = '1x0000000000000000000000000000000AA';

function turnstile_config(string $key, string $default = ''): string
{
    $value = getenv($key);

    if (is_string($value) && $value !== '') {
        return $value;
    }

    static $config = null;

    if ($config === null) {
        $config = [];

        $path = __DIR__ . '/../config/turnstile.local.php';

        if (is_file($path)) {
            $loaded = require $path;

            if (is_array($loaded)) {
                $config = $loaded;
            }
        }
    }

    if (
        isset($config[$key]) &&
        is_string($config[$key]) &&
        $config[$key] !== ''
    ) {
        return $config[$key];
    }

    $map = [
        'TURNSTILE_SITE_KEY' => 'site_key',
        'TURNSTILE_SECRET_KEY' => 'secret_key',
    ];

    $alias = $map[$key] ?? null;

    if (
        $alias !== null &&
        isset($config[$alias]) &&
        is_string($config[$alias]) &&
        $config[$alias] !== ''
    ) {
        return $config[$alias];
    }

    return $default;
}

function turnstile_site_key(): string
{
    return turnstile_config(
        'TURNSTILE_SITE_KEY',
        TURNSTILE_DEFAULT_SITE_KEY
    );
}

function turnstile_secret_key(): string
{
    return turnstile_config(
        'TURNSTILE_SECRET_KEY',
        TURNSTILE_DEFAULT_SECRET_KEY
    );
}

/*
|--------------------------------------------------------------------------
| VALIDACION TEMPORAL DESACTIVADA
|--------------------------------------------------------------------------
| Esto permite que todos los formularios funcionen aunque
| Cloudflare Turnstile este fallando.
|
| Cuando se recupere acceso a Cloudflare o se arreglen las keys,
| se puede restaurar la funcion original.
|--------------------------------------------------------------------------
*/

function verify_turnstile_token(string $token, string $remoteIp = ''): array
{
    return [
        'success' => true
    ];
}
