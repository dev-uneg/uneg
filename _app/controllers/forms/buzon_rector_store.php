<?php
declare(strict_types=1);

require __DIR__ . '/../../helpers/leads_db.php';
require __DIR__ . '/../../helpers/turnstile.php';
require __DIR__ . '/../../helpers/mailer.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit('Metodo no permitido');
}

$base = rtrim(dirname($_SERVER['SCRIPT_NAME'] ?? ''), '/');
$base = $base === '.' ? '' : $base;

$turnstileToken = trim((string) ($_POST['cf-turnstile-response'] ?? ''));
if ($turnstileToken === '') {
    header('Location: ' . $base . '/comunidad/buzon-del-rector?error=1', true, 302);
    exit;
}

$turnstileResponse = verify_turnstile_token($turnstileToken, (string) ($_SERVER['REMOTE_ADDR'] ?? ''));
if (!($turnstileResponse['success'] ?? false)) {
    header('Location: ' . $base . '/comunidad/buzon-del-rector?error=1', true, 302);
    exit;
}

$nombre = trim((string) ($_POST['nombre'] ?? ''));
$correo = trim((string) ($_POST['correo'] ?? ''));
$asunto = trim((string) ($_POST['asunto'] ?? ''));
$mensaje = trim((string) ($_POST['mensaje'] ?? ''));

if ($nombre === '' || $correo === '' || $asunto === '' || $mensaje === '') {
    header('Location: ' . $base . '/comunidad/buzon-del-rector?error=1', true, 302);
    exit;
}

if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
    header('Location: ' . $base . '/comunidad/buzon-del-rector?error=1', true, 302);
    exit;
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
    header('Location: ' . $base . '/comunidad/buzon-del-rector?error=1', true, 302);
    exit;
}

$safeNombre = str_replace(["\r", "\n"], ' ', $nombre);
$safeCorreo = str_replace(["\r", "\n"], '', $correo);
$safeAsunto = str_replace(["\r", "\n"], ' ', $asunto);
$asuntoMail = 'Buzon del Rector - ' . $safeAsunto;
$cuerpo = "Nuevo mensaje recibido desde el Buzon del Rector:\n\n"
    . "Nombre: {$safeNombre}\n"
    . "Correo: {$safeCorreo}\n"
    . "Asunto: {$safeAsunto}\n\n"
    . "Mensaje:\n{$mensaje}\n\n"
    . "Fecha: " . date('Y-m-d H:i:s') . "\n"
    . "IP: " . ($_SERVER['REMOTE_ADDR'] ?? 'N/D') . "\n";

$mailResult = send_smtp_notification($asuntoMail, $cuerpo, $safeCorreo, $safeNombre, 'buzon');
if (!($mailResult['ok'] ?? false)) {
    error_log('SMTP buzon rector fallo: ' . (string) ($mailResult['error'] ?? 'Error SMTP desconocido'));
    header('Location: ' . $base . '/comunidad/buzon-del-rector?error=1', true, 302);
    exit;
}

header('Location: ' . $base . '/gracias?origen=buzon', true, 302);
exit;
