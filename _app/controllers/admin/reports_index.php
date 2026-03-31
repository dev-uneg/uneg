<?php
declare(strict_types=1);

session_start();
require __DIR__ . '/../../helpers/admin_auth.php';
require __DIR__ . '/../../helpers/leads_db.php';

admin_require_auth();

$base = admin_base_path();
$dbError = '';
$reportRows = [];

$monthNames = [
    1 => 'enero',
    2 => 'febrero',
    3 => 'marzo',
    4 => 'abril',
    5 => 'mayo',
    6 => 'junio',
    7 => 'julio',
    8 => 'agosto',
    9 => 'septiembre',
    10 => 'octubre',
    11 => 'noviembre',
    12 => 'diciembre',
];

try {
    $pdo = leads_db();
    $stmt = $pdo->query("SELECT DATE_FORMAT(created_at, '%Y-%m') AS ym, COUNT(*) AS total FROM leads GROUP BY ym ORDER BY ym DESC LIMIT 24");
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $currentYm = (new DateTimeImmutable('now', new DateTimeZone('America/Mexico_City')))->format('Y-m');

    foreach ($rows as $row) {
        $ym = (string) ($row['ym'] ?? '');
        if (!preg_match('/^\d{4}-\d{2}$/', $ym)) {
            continue;
        }

        $year = (int) substr($ym, 0, 4);
        $month = (int) substr($ym, 5, 2);
        $monthLabel = ucfirst(($monthNames[$month] ?? 'Mes') . ' ' . $year);

        $reportRows[] = [
            'title' => 'Reporte Mensual de Performance Web y CRO (UNEG)',
            'period' => $monthLabel,
            'ym' => $ym,
            'leads_total' => (int) ($row['total'] ?? 0),
            'status' => $ym === $currentYm ? 'En progreso' : 'Finalizado',
            'status_class' => $ym === $currentYm
                ? 'bg-amber-100 text-amber-800 border border-amber-200'
                : 'bg-emerald-100 text-emerald-800 border border-emerald-200',
            'url' => $base . '/admin/reports/uneg-mensual?ym=' . urlencode($ym),
        ];
    }

    if ($reportRows === []) {
        $now = new DateTimeImmutable('now', new DateTimeZone('America/Mexico_City'));
        $currentYm = $now->format('Y-m');
        $month = (int) $now->format('n');
        $year = (int) $now->format('Y');
        $reportRows[] = [
            'title' => 'Reporte Mensual de Performance Web y CRO (UNEG)',
            'period' => ucfirst(($monthNames[$month] ?? 'Mes') . ' ' . $year),
            'ym' => $currentYm,
            'leads_total' => 0,
            'status' => 'En progreso',
            'status_class' => 'bg-amber-100 text-amber-800 border border-amber-200',
            'url' => $base . '/admin/reports/uneg-mensual?ym=' . urlencode($currentYm),
        ];
    }
} catch (Throwable $e) {
    $dbError = 'No se pudo consultar la BD para construir el listado de reportes.';
}

require __DIR__ . '/../../pages/admin/reports/index.php';
