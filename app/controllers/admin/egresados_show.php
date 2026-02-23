<?php
declare(strict_types=1);

session_start();
require __DIR__ . '/../../helpers/admin_auth.php';
require __DIR__ . '/../../helpers/leads_db.php';
require __DIR__ . '/../../helpers/date.php';

admin_require_auth();

$base = admin_base_path();
$id = (int) ($_GET['id'] ?? 0);
if ($id <= 0) {
    header('Location: ' . $base . '/admin/egresados', true, 302);
    exit;
}

$pdo = leads_db();
$stmt = $pdo->prepare('SELECT * FROM egresados WHERE id = :id LIMIT 1');
$stmt->execute([':id' => $id]);
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$row) {
    header('Location: ' . $base . '/admin/egresados', true, 302);
    exit;
}

require __DIR__ . '/../../pages/admin/egresados-show.php';
