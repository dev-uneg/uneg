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
    header('Location: ' . $base . '/egresados/dejanos-saber?error=1', true, 302);
    exit;
}

$turnstileResponse = verify_turnstile_token($turnstileToken, (string) ($_SERVER['REMOTE_ADDR'] ?? ''));
if (!($turnstileResponse['success'] ?? false)) {
    header('Location: ' . $base . '/egresados/dejanos-saber?error=1', true, 302);
    exit;
}

$nombre = trim((string) ($_POST['nombre'] ?? ''));
$apellidoPaterno = trim((string) ($_POST['apellido_paterno'] ?? ''));
$apellidoMaterno = trim((string) ($_POST['apellido_materno'] ?? ''));
$anioIngreso = trim((string) ($_POST['anio_ingreso'] ?? ''));
$anioEgreso = trim((string) ($_POST['anio_egreso'] ?? ''));
$nivelEgreso = trim((string) ($_POST['nivel_egreso'] ?? ''));
$carreraEgreso = trim((string) ($_POST['carrera_egreso'] ?? ''));
$telefono = trim((string) ($_POST['telefono'] ?? ''));
$correo = trim((string) ($_POST['correo'] ?? ''));
$trabajandoRaw = trim((string) ($_POST['trabajando'] ?? ''));
$trabajando = strtolower(str_replace('í', 'i', $trabajandoRaw));
if ($trabajando === 'si') {
    $trabajando = 'si';
} elseif ($trabajando === 'no') {
    $trabajando = 'no';
} else {
    $trabajando = '';
}
$empresa = trim((string) ($_POST['empresa'] ?? ''));
$cargo = trim((string) ($_POST['cargo'] ?? ''));

if (
    $nombre === '' ||
    $apellidoPaterno === '' ||
    $apellidoMaterno === '' ||
    $anioIngreso === '' ||
    $anioEgreso === '' ||
    $nivelEgreso === '' ||
    $carreraEgreso === '' ||
    $telefono === '' ||
    $correo === '' ||
    $trabajando === '' ||
    $empresa === '' ||
    $cargo === ''
) {
    header('Location: ' . $base . '/egresados/dejanos-saber?error=1', true, 302);
    exit;
}

if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
    header('Location: ' . $base . '/egresados/dejanos-saber?error=1', true, 302);
    exit;
}

$id = egresados_db_insert([
    'nombre' => $nombre,
    'apellido_paterno' => $apellidoPaterno,
    'apellido_materno' => $apellidoMaterno,
    'anio_ingreso' => $anioIngreso,
    'anio_egreso' => $anioEgreso,
    'nivel_egreso' => $nivelEgreso,
    'carrera_egreso' => $carreraEgreso,
    'telefono' => $telefono,
    'correo' => $correo,
    'trabajando' => $trabajando,
    'empresa' => $empresa,
    'cargo' => $cargo,
    'ip' => $_SERVER['REMOTE_ADDR'] ?? null,
    'user_agent' => $_SERVER['HTTP_USER_AGENT'] ?? null,
    'created_at' => date('c'),
]);

if (!$id) {
    header('Location: ' . $base . '/egresados/dejanos-saber?error=1', true, 302);
    exit;
}

$nombreCompleto = trim($nombre . ' ' . $apellidoPaterno . ' ' . $apellidoMaterno);
$asuntoMail = 'Egresados - Nuevo registro';
$cuerpo = "Nuevo registro recibido desde Egresados:\n\n"
    . "Nombre: {$nombreCompleto}\n"
    . "Anio de ingreso: {$anioIngreso}\n"
    . "Anio de egreso: {$anioEgreso}\n"
    . "Nivel de egreso: {$nivelEgreso}\n"
    . "Carrera de egreso: {$carreraEgreso}\n"
    . "Telefono: {$telefono}\n"
    . "Correo: {$correo}\n"
    . "Trabajando: {$trabajando}\n"
    . "Empresa: {$empresa}\n"
    . "Cargo: {$cargo}\n\n"
    . "Fecha: " . date('Y-m-d H:i:s') . "\n"
    . "IP: " . ($_SERVER['REMOTE_ADDR'] ?? 'N/D') . "\n";

$mailResult = send_smtp_notification($asuntoMail, $cuerpo, $correo, $nombreCompleto, 'egresados');
if (!($mailResult['ok'] ?? false)) {
    error_log('SMTP egresados fallo: ' . (string) ($mailResult['error'] ?? 'Error SMTP desconocido'));
    header('Location: ' . $base . '/egresados/dejanos-saber?error=1', true, 302);
    exit;
}

header('Location: ' . $base . '/egresados/dejanos-saber?ok=1', true, 302);
exit;
