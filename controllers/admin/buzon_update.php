<?php
declare(strict_types=1);

session_start();
require __DIR__ . '/../../helpers/admin_auth.php';
require __DIR__ . '/../../helpers/leads_db.php';

admin_require_auth();

$base = admin_base_path();
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ' . $base . '/admin/buzon-rector', true, 302);
    exit;
}

$csrf = (string) ($_POST['csrf'] ?? '');
if ($csrf === '' || !hash_equals((string) ($_SESSION['leads_csrf'] ?? ''), $csrf)) {
    header('Location: ' . $base . '/admin/buzon-rector', true, 302);
    exit;
}

$id = (int) ($_POST['id'] ?? 0);
if ($id <= 0) {
    header('Location: ' . $base . '/admin/buzon-rector', true, 302);
    exit;
}

$nombre = trim((string) ($_POST['nombre'] ?? ''));
$correo = trim((string) ($_POST['correo'] ?? ''));
$asunto = trim((string) ($_POST['asunto'] ?? ''));
$mensaje = trim((string) ($_POST['mensaje'] ?? ''));

if ($nombre === '' || $correo === '' || $asunto === '' || $mensaje === '') {
    header('Location: ' . $base . '/admin/buzon-rector/edit?id=' . $id . '&error=1', true, 302);
    exit;
}

$pdo = leads_db();
$stmt = $pdo->prepare('UPDATE buzon_rector SET
    nombre = :nombre,
    correo = :correo,
    asunto = :asunto,
    mensaje = :mensaje
    WHERE id = :id');
$stmt->execute([
    ':nombre' => $nombre,
    ':correo' => $correo,
    ':asunto' => $asunto,
    ':mensaje' => $mensaje,
    ':id' => $id,
]);

header('Location: ' . $base . '/admin/buzon-rector?updated=1', true, 302);
exit;
