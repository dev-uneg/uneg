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
    header('Location: ' . $base . '/admin/egresados', true, 302);
    exit;
}

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

$whereSql = $where ? (' WHERE ' . implode(' AND ', $where)) : '';
$stmt = $pdo->prepare('SELECT * FROM egresados' . $whereSql . ' ORDER BY created_at DESC');
$stmt->execute($params);
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename="egresados_filtrados.csv"');

$out = fopen('php://output', 'w');
fputcsv($out, [
    'id',
    'created_at',
    'nombre',
    'apellido_paterno',
    'apellido_materno',
    'correo',
    'telefono',
    'nivel_egreso',
    'carrera_egreso',
    'anio_ingreso',
    'anio_egreso',
    'trabajando',
    'empresa',
    'cargo',
]);

foreach ($rows as $row) {
    fputcsv($out, [
        $row['id'] ?? '',
        $row['created_at'] ?? '',
        $row['nombre'] ?? '',
        $row['apellido_paterno'] ?? '',
        $row['apellido_materno'] ?? '',
        $row['correo'] ?? '',
        $row['telefono'] ?? '',
        $row['nivel_egreso'] ?? '',
        $row['carrera_egreso'] ?? '',
        $row['anio_ingreso'] ?? '',
        $row['anio_egreso'] ?? '',
        $row['trabajando'] ?? '',
        $row['empresa'] ?? '',
        $row['cargo'] ?? '',
    ]);
}

fclose($out);
exit;
