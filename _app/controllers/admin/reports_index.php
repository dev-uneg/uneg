<?php
declare(strict_types=1);

session_start();
require __DIR__ . '/../../helpers/admin_auth.php';
require __DIR__ . '/../../helpers/admin_async.php';
require __DIR__ . '/../../helpers/leads_db.php';

admin_require_auth();

$base = admin_base_path();

if (!admin_is_async_request()) {
    $pageTitle = 'Reportes | UNEG';
    require __DIR__ . '/../../pages/admin/partials/async-shell.php';
    exit;
}

$dbError = '';
$rows = [];
$tz = new DateTimeZone('America/Mexico_City');

try {
    $pdo = leads_db();
    $monthRows = $pdo->query(
        "SELECT
            DATE_FORMAT(created_at, '%Y-%m') AS ym,
            DATE_FORMAT(created_at, '%Y-%m-01') AS month_start,
            COUNT(*) AS leads_total
         FROM leads
         GROUP BY ym, month_start
         ORDER BY ym DESC
         LIMIT 24"
    )->fetchAll(PDO::FETCH_ASSOC);

    $engagementRows = $pdo->query(
        "SELECT
            DATE_FORMAT(day_key, '%Y-%m') AS ym,
            SUM(page_views) AS page_views_total
         FROM web_engagement_daily
         WHERE page_path NOT LIKE '/uneg/%'
           AND page_path NOT LIKE '%/home-des%'
           AND page_path NOT LIKE '%/page_des/%'
         GROUP BY ym"
    )->fetchAll(PDO::FETCH_ASSOC);
    $engagementByYm = [];
    foreach ($engagementRows as $row) {
        $engagementByYm[(string) ($row['ym'] ?? '')] = (int) ($row['page_views_total'] ?? 0);
    }

    $monthNames = [
        1 => 'enero', 2 => 'febrero', 3 => 'marzo', 4 => 'abril', 5 => 'mayo', 6 => 'junio',
        7 => 'julio', 8 => 'agosto', 9 => 'septiembre', 10 => 'octubre', 11 => 'noviembre', 12 => 'diciembre',
    ];
    $currentYm = (new DateTimeImmutable('now', $tz))->format('Y-m');

    foreach ($monthRows as $row) {
        $ym = (string) ($row['ym'] ?? '');
        if (!preg_match('/^\d{4}-\d{2}$/', $ym)) {
            continue;
        }
        $monthDate = DateTimeImmutable::createFromFormat('Y-m-d', (string) ($row['month_start'] ?? ''), $tz);
        $monthLabel = $ym;
        if ($monthDate instanceof DateTimeImmutable) {
            $monthLabel = ucfirst(($monthNames[(int) $monthDate->format('n')] ?? '') . ' ' . $monthDate->format('Y'));
        }

        $rows[] = [
            'name' => 'Reporte Mensual de Performance Web y CRO (UNEG)',
            'period' => $monthLabel,
            'ym' => $ym,
            'leads' => (int) ($row['leads_total'] ?? 0),
            'page_views' => $engagementByYm[$ym] ?? 0,
            'status' => $ym === $currentYm ? 'En progreso' : 'Finalizado',
        ];
    }

    foreach ($engagementByYm as $ym => $pageViewsTotal) {
        $alreadyExists = false;
        foreach ($rows as $existingRow) {
            if ((string) ($existingRow['ym'] ?? '') === $ym) {
                $alreadyExists = true;
                break;
            }
        }
        if ($alreadyExists || !preg_match('/^\d{4}-\d{2}$/', $ym)) {
            continue;
        }

        $monthDate = DateTimeImmutable::createFromFormat('Y-m-d', $ym . '-01', $tz);
        $monthLabel = $ym;
        if ($monthDate instanceof DateTimeImmutable) {
            $monthLabel = ucfirst(($monthNames[(int) $monthDate->format('n')] ?? '') . ' ' . $monthDate->format('Y'));
        }

        $rows[] = [
            'name' => 'Reporte Mensual de Performance Web y CRO (UNEG)',
            'period' => $monthLabel,
            'ym' => $ym,
            'leads' => 0,
            'page_views' => (int) $pageViewsTotal,
            'status' => $ym === $currentYm ? 'En progreso' : 'Finalizado',
        ];
    }

    usort($rows, static function (array $a, array $b): int {
        return strcmp((string) ($b['ym'] ?? ''), (string) ($a['ym'] ?? ''));
    });
} catch (Throwable $e) {
    $dbError = 'No se pudo consultar la BD para construir el listado de reportes.';
}

ob_start();
require __DIR__ . '/../../pages/admin/reports/index.php';
$fullPageHtml = (string) ob_get_clean();
echo admin_extract_body_html($fullPageHtml);
