<?php
declare(strict_types=1);

session_start();
require __DIR__ . '/../../helpers/admin_auth.php';
require __DIR__ . '/../../helpers/admin_async.php';
require __DIR__ . '/../../helpers/leads_db.php';
require __DIR__ . '/../../helpers/date.php';

admin_require_auth();

$base = admin_base_path();

if (!admin_is_async_request()) {
    $pageTitle = 'Leads | UNEG';
    require __DIR__ . '/../../pages/admin/partials/async-shell.php';
    exit;
}

$perPageOptions = [20, 50, 100, 200];
$dateFrom = trim((string) ($_GET['from'] ?? ''));
$dateTo = trim((string) ($_GET['to'] ?? ''));
$q = trim((string) ($_GET['q'] ?? ''));
$hasDateFilter = ($dateFrom !== '' || $dateTo !== '');

$perPage = (int) ($_GET['per_page'] ?? 20);
if (!in_array($perPage, $perPageOptions, true)) {
    $perPage = 20;
}

$page = max(1, (int) ($_GET['page'] ?? 1));
$offset = ($page - 1) * $perPage;
$queryError = '';

$pdo = leads_db();
$where = [];
$params = [];
if ($dateFrom !== '') {
    $where[] = 'created_at >= :from';
    $params[':from'] = $dateFrom . ' 00:00:00';
}
if ($dateTo !== '') {
    $where[] = 'created_at <= :to';
    $params[':to'] = $dateTo . ' 23:59:59';
}
if ($q !== '') {
    $where[] = '(full_name LIKE :q1 OR email LIKE :q2 OR interest LIKE :q3)';
    $params[':q1'] = '%' . $q . '%';
    $params[':q2'] = '%' . $q . '%';
    $params[':q3'] = '%' . $q . '%';
}

$whereSql = $where ? (' WHERE ' . implode(' AND ', $where)) : '';
$total = 0;
$totalPages = 1;
$rows = [];

try {
    $countStmt = $pdo->prepare('SELECT COUNT(*) FROM leads' . $whereSql);
    $countStmt->execute($params);
    $total = (int) $countStmt->fetchColumn();
    $totalPages = max(1, (int) ceil($total / $perPage));
    if ($page > $totalPages) {
        $page = $totalPages;
        $offset = ($page - 1) * $perPage;
    }

    $stmt = $pdo->prepare('SELECT * FROM leads' . $whereSql . ' ORDER BY created_at DESC LIMIT :limit OFFSET :offset');
    foreach ($params as $key => $value) {
        $stmt->bindValue($key, $value);
    }
    $stmt->bindValue(':limit', $perPage, PDO::PARAM_INT);
    $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (Throwable $e) {
    $queryError = 'Leads query failed: ' . $e->getMessage();
    error_log($queryError);
}

$csrf = admin_csrf_token();

ob_start();
require __DIR__ . '/../../pages/admin/leads.php';
$fullPageHtml = (string) ob_get_clean();
echo admin_extract_body_html($fullPageHtml);
