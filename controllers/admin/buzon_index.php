<?php
declare(strict_types=1);

session_start();
require __DIR__ . '/../../helpers/admin_auth.php';
require __DIR__ . '/../../helpers/leads_db.php';
require __DIR__ . '/../../helpers/date.php';

admin_require_auth();

$base = admin_base_path();
$perPageOptions = [20, 50, 100, 200];
$dateFrom = trim((string) ($_GET['from'] ?? ''));
$dateTo = trim((string) ($_GET['to'] ?? ''));
$hasDateFilter = ($dateFrom !== '' || $dateTo !== '');
$perPage = (int) ($_GET['per_page'] ?? 20);
if (!in_array($perPage, $perPageOptions, true)) {
    $perPage = 20;
}

$page = max(1, (int) ($_GET['page'] ?? 1));
$offset = ($page - 1) * $perPage;

$pdo = leads_db();
$where = [];
$params = [];
if ($dateFrom !== '') {
    $where[] = 'datetime(created_at) >= datetime(:from)';
    $params[':from'] = $dateFrom . ' 00:00:00';
}
if ($dateTo !== '') {
    $where[] = 'datetime(created_at) <= datetime(:to)';
    $params[':to'] = $dateTo . ' 23:59:59';
}
$whereSql = $where ? (' WHERE ' . implode(' AND ', $where)) : '';

$countStmt = $pdo->prepare('SELECT COUNT(*) FROM buzon_rector' . $whereSql);
$countStmt->execute($params);
$total = (int) $countStmt->fetchColumn();
$totalPages = max(1, (int) ceil($total / $perPage));
if ($page > $totalPages) {
    $page = $totalPages;
    $offset = ($page - 1) * $perPage;
}

$stmt = $pdo->prepare('SELECT * FROM buzon_rector' . $whereSql . ' ORDER BY datetime(created_at) DESC LIMIT :limit OFFSET :offset');
foreach ($params as $key => $value) {
    $stmt->bindValue($key, $value);
}
$stmt->bindValue(':limit', $perPage, PDO::PARAM_INT);
$stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

$csrf = admin_csrf_token();

require __DIR__ . '/../../pages/admin/buzon.php';
