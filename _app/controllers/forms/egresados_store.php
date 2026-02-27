<?php
declare(strict_types=1);

require __DIR__ . '/../../helpers/leads_db.php';
require __DIR__ . '/../../helpers/rate_limit_forms.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit('Metodo no permitido');
}

$base = rtrim(dirname($_SERVER['SCRIPT_NAME'] ?? ''), '/');
$base = $base === '.' ? '' : $base;

$rateLimit = forms_rate_limit_check($_SERVER['REQUEST_URI'] ?? '');
if (!$rateLimit['allowed']) {
    $wait = (int) ($rateLimit['retry_after'] ?? 60);
    header('Location: ' . $base . '/egresados/dejanos-saber?error=1&wait=' . $wait, true, 302);
    exit;
}

$honeypot = trim((string) ($_POST['company_website'] ?? ''));
if ($honeypot !== '') {
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
    $trabajando === ''
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

header('Location: ' . $base . '/egresados/dejanos-saber?ok=1', true, 302);
exit;
