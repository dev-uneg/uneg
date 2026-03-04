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

$redirectWithError = static function (string $reason, string $logDetail = '') use ($base): void {
    try {
        $debugId = strtoupper(bin2hex(random_bytes(4)));
    } catch (Throwable $e) {
        $debugId = strtoupper(substr(md5(uniqid('', true)), 0, 8));
    }
    if ($logDetail !== '') {
        error_log(sprintf('Buzon rector error [%s] %s', $debugId, $logDetail));
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
    $mailError = (string) ($mailResult['error'] ?? 'Error SMTP desconocido');
    $redirectWithError('smtp_failed', 'SMTP buzon rector fallo: ' . $mailError);
}

header('Location: ' . $base . '/gracias?origen=buzon', true, 302);
exit;
