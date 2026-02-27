<?php
declare(strict_types=1);

session_start();
require __DIR__ . '/../../helpers/admin_auth.php';
require __DIR__ . '/../../helpers/leads_db.php';

admin_require_auth();

$base = admin_base_path();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ' . $base . '/admin/leads', true, 302);
    exit;
}

$csrf = (string) ($_POST['csrf'] ?? '');
if ($csrf === '' || !hash_equals((string) ($_SESSION['leads_csrf'] ?? ''), $csrf)) {
    header('Location: ' . $base . '/admin/leads', true, 302);
    exit;
}

/** @var mixed $rawIds */
$rawIds = $_POST['ids'] ?? [];
$ids = [];
if (is_array($rawIds)) {
    foreach ($rawIds as $rawId) {
        $id = (int) $rawId;
        if ($id > 0) {
            $ids[] = $id;
        }
    }
}

$singleId = (int) ($_POST['id'] ?? 0);
if ($singleId > 0) {
    $ids[] = $singleId;
}

$ids = array_values(array_unique($ids));
if ($ids !== []) {
    $pdo = leads_db();
    $placeholders = implode(',', array_fill(0, count($ids), '?'));
    $stmt = $pdo->prepare('DELETE FROM leads WHERE id IN (' . $placeholders . ')');
    $stmt->execute($ids);
}

header('Location: ' . $base . '/admin/leads', true, 302);
exit;
