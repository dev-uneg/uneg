<?php
declare(strict_types=1);

session_start();
require __DIR__ . '/../../helpers/admin_auth.php';
require __DIR__ . '/../../helpers/leads_db.php';

admin_require_auth();

$dateFrom = trim((string) ($_GET['from'] ?? ''));
$dateTo = trim((string) ($_GET['to'] ?? ''));

if ($dateFrom === '' && $dateTo === '') {
    $base = admin_base_path();
    header('Location: ' . $base . '/admin/buzon-rector', true, 302);
    exit;
}

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
$stmt = $pdo->prepare('SELECT * FROM buzon_rector' . $whereSql . ' ORDER BY datetime(created_at) DESC');
$stmt->execute($params);
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename="buzon_rector_filtrado.csv"');

$out = fopen('php://output', 'w');
fputcsv($out, [
    'id',
    'created_at',
    'nombre',
    'correo',
    'asunto',
    'mensaje',
]);

foreach ($rows as $row) {
    fputcsv($out, [
        $row['id'] ?? '',
        $row['created_at'] ?? '',
        $row['nombre'] ?? '',
        $row['correo'] ?? '',
        $row['asunto'] ?? '',
        $row['mensaje'] ?? '',
    ]);
}

fclose($out);
exit;
