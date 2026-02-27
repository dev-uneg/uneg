<?php
declare(strict_types=1);

session_start();
require __DIR__ . '/../../helpers/admin_auth.php';
require __DIR__ . '/../../helpers/rate_limit_login.php';

$base = admin_base_path();
$error = '';
$waitSeconds = 0;

if (admin_is_authenticated()) {
    header('Location: ' . $base . '/admin/panel', true, 302);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $limit = login_rate_limit_check();
    if (!$limit['allowed']) {
        $waitSeconds = (int) ($limit['retry_after'] ?? 60);
        $error = 'Demasiados intentos. Intenta nuevamente en ' . $waitSeconds . ' segundos.';
    } else {
        $password = trim((string) ($_POST['password'] ?? ''));
        if (admin_verify_password($password)) {
            login_rate_limit_reset();
            session_regenerate_id(true);
            $_SESSION['leads_auth'] = true;
            admin_csrf_token();
            header('Location: ' . $base . '/admin/panel', true, 302);
            exit;
        }
        $error = 'Contraseña incorrecta.';
    }
}

require __DIR__ . '/../../pages/admin/leads-login.php';
