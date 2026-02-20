<?php
declare(strict_types=1);

require __DIR__ . '/../../helpers/leads_db.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit('Metodo no permitido');
}

$base = rtrim(dirname($_SERVER['SCRIPT_NAME'] ?? ''), '/');
$base = $base === '.' ? '' : $base;

$honeypot = trim((string) ($_POST['company_website'] ?? ''));
if ($honeypot !== '') {
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

header('Location: ' . $base . '/comunidad/buzon-del-rector?ok=1', true, 302);
exit;
