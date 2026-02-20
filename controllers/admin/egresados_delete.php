<?php
declare(strict_types=1);

session_start();
require __DIR__ . '/../../helpers/admin_auth.php';
require __DIR__ . '/../../helpers/leads_db.php';

admin_require_auth();

$base = admin_base_path();
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ' . $base . '/admin/egresados', true, 302);
    exit;
}

$csrf = (string) ($_POST['csrf'] ?? '');
if ($csrf === '' || !hash_equals((string) ($_SESSION['leads_csrf'] ?? ''), $csrf)) {
    header('Location: ' . $base . '/admin/egresados', true, 302);
    exit;
}

$id = (int) ($_POST['id'] ?? 0);
if ($id > 0) {
    $pdo = leads_db();
    $stmt = $pdo->prepare('DELETE FROM egresados WHERE id = :id');
    $stmt->execute([':id' => $id]);
}

header('Location: ' . $base . '/admin/egresados', true, 302);
exit;
