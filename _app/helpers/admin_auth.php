<?php
declare(strict_types=1);

/**
 * Helper de autenticacion para el panel de administracion.
 *
 * Centraliza funciones comunes de login: calcula el base path del proyecto,
 * obtiene y valida la contraseña de admin, protege rutas privadas por sesion
 * y genera token CSRF para formularios sensibles (eliminaciones, cambios, etc.).
 *
 * Se usa en controllers de /admin para evitar duplicar logica de seguridad.
 */
function admin_base_path(): string
{
    $base = rtrim(dirname($_SERVER['SCRIPT_NAME'] ?? ''), '/');
    return $base === '.' ? '' : $base;
}

function admin_password(): string
{
    $configPath = __DIR__ . '/../config/leads.local.php';
    if (file_exists($configPath)) {
        $config = require $configPath;
        if (is_array($config) && !empty($config['password'])) {
            return (string) $config['password'];
        }
    }

    return (string) (getenv('LEADS_PASSWORD') ?: '');
}

function admin_is_authenticated(): bool
{
    return !empty($_SESSION['leads_auth']);
}

function admin_require_auth(): void
{
    if (!admin_is_authenticated()) {
        $base = admin_base_path();
        header('Location: ' . $base . '/admin/login', true, 302);
        exit;
    }
}

function admin_verify_password(string $input): bool
{
    $stored = admin_password();
    if ($stored === '') {
        return false;
    }

    return hash_equals($stored, $input);
}

function admin_csrf_token(): string
{
    if (empty($_SESSION['leads_csrf'])) {
        $_SESSION['leads_csrf'] = bin2hex(random_bytes(16));
    }

    return (string) $_SESSION['leads_csrf'];
}
