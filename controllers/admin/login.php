<?php
declare(strict_types=1);

session_start();
require __DIR__ . '/../../helpers/admin_auth.php';

$base = admin_base_path();
$error = '';

if (admin_is_authenticated()) {
    header('Location: ' . $base . '/admin/leads', true, 302);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $password = trim((string) ($_POST['password'] ?? ''));
    if (admin_verify_password($password)) {
        session_regenerate_id(true);
        $_SESSION['leads_auth'] = true;
        admin_csrf_token();
        header('Location: ' . $base . '/admin/leads', true, 302);
        exit;
    }
    $error = 'Contraseña incorrecta.';
}

require __DIR__ . '/../../pages/admin/leads-login.php';
