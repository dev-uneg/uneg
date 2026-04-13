<?php
declare(strict_types=1);

session_start();
require __DIR__ . '/../../helpers/admin_auth.php';
require __DIR__ . '/../../helpers/admin_async.php';
require __DIR__ . '/../../helpers/leads_db.php';

admin_require_auth();

$base = admin_base_path();

if (!admin_is_async_request()) {
    $pageTitle = 'Reporte Engagement | UNEG';
    require __DIR__ . '/../../pages/admin/partials/async-shell.php';
    exit;
}

$dbError = '';

$tz = new DateTimeZone('America/Mexico_City');
$ym = trim((string) ($_GET['ym'] ?? ''));
if (!preg_match('/^\d{4}-\d{2}$/', $ym)) {
    $ym = (new DateTimeImmutable('now', $tz))->format('Y-m');
}

$monthStart = DateTimeImmutable::createFromFormat('Y-m-d H:i:s', $ym . '-01 00:00:00', $tz);
if (!$monthStart instanceof DateTimeImmutable) {
    $monthStart = new DateTimeImmutable('first day of this month 00:00:00', $tz);
}
$monthEnd = $monthStart->modify('last day of this month')->setTime(23, 59, 59);
$monthStartDate = $monthStart->format('Y-m-d');
$monthEndDate = $monthEnd->format('Y-m-d');

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
$monthLabel = ucfirst(($monthNames[(int) $monthStart->format('n')] ?? 'Mes') . ' ' . $monthStart->format('Y'));
$periodLabel = $monthStart->format('d/m/Y') . ' - ' . $monthEnd->format('d/m/Y');

$summary = [
    'page_views' => 0,
    'engaged_10s' => 0,
    'scroll_50' => 0,
    'scroll_90' => 0,
    'avg_time_sec' => 0.0,
    'time_samples' => 0,
    'pages_tracked' => 0,
];
$dailyLabels = [];
$dailyPageViews = [];
$dailyEngaged = [];
$topPages = [];

try {
    $pdo = leads_db();
    engagement_rebuild_daily_range($monthStartDate, $monthEndDate);
    $excludeDevPagesWhere = "AND page_path NOT LIKE '/uneg/%' AND page_path NOT LIKE '%/home-des%' AND page_path NOT LIKE '%/page_des/%'";

    $summaryStmt = $pdo->prepare(
        'SELECT
            COALESCE(SUM(page_views), 0) AS page_views,
            COALESCE(SUM(engaged_10s), 0) AS engaged_10s,
            COALESCE(SUM(scroll_50), 0) AS scroll_50,
            COALESCE(SUM(scroll_90), 0) AS scroll_90,
            COALESCE(ROUND(AVG(NULLIF(avg_time_on_page_ms, 0))), 0) AS avg_time_ms,
            COALESCE(SUM(time_on_page_samples), 0) AS time_samples,
            COUNT(DISTINCT page_path) AS pages_tracked
         FROM web_engagement_daily
         WHERE day_key BETWEEN :from_day AND :to_day
           ' . $excludeDevPagesWhere
    );
    $summaryStmt->execute([
        ':from_day' => $monthStartDate,
        ':to_day' => $monthEndDate,
    ]);
    $summaryRow = $summaryStmt->fetch(PDO::FETCH_ASSOC) ?: [];
    $summary['page_views'] = (int) ($summaryRow['page_views'] ?? 0);
    $summary['engaged_10s'] = (int) ($summaryRow['engaged_10s'] ?? 0);
    $summary['scroll_50'] = (int) ($summaryRow['scroll_50'] ?? 0);
    $summary['scroll_90'] = (int) ($summaryRow['scroll_90'] ?? 0);
    $summary['avg_time_sec'] = ((int) ($summaryRow['avg_time_ms'] ?? 0)) / 1000;
    $summary['time_samples'] = (int) ($summaryRow['time_samples'] ?? 0);
    $summary['pages_tracked'] = (int) ($summaryRow['pages_tracked'] ?? 0);

    $dailyStmt = $pdo->prepare(
        'SELECT
            day_key,
            SUM(page_views) AS page_views,
            SUM(engaged_10s) AS engaged_10s
         FROM web_engagement_daily
         WHERE day_key BETWEEN :from_day AND :to_day
           ' . $excludeDevPagesWhere . '
         GROUP BY day_key
         ORDER BY day_key ASC'
    );
    $dailyStmt->execute([
        ':from_day' => $monthStartDate,
        ':to_day' => $monthEndDate,
    ]);
    $dailyMap = [];
    foreach ($dailyStmt->fetchAll(PDO::FETCH_ASSOC) as $row) {
        $dailyMap[(string) ($row['day_key'] ?? '')] = [
            'page_views' => (int) ($row['page_views'] ?? 0),
            'engaged_10s' => (int) ($row['engaged_10s'] ?? 0),
        ];
    }

    $cursor = $monthStart;
    while ($cursor <= $monthEnd) {
        $key = $cursor->format('Y-m-d');
        $dailyLabels[] = $cursor->format('d M');
        $dailyPageViews[] = (int) ($dailyMap[$key]['page_views'] ?? 0);
        $dailyEngaged[] = (int) ($dailyMap[$key]['engaged_10s'] ?? 0);
        $cursor = $cursor->modify('+1 day');
    }

    $topStmt = $pdo->prepare(
        'SELECT
            page_path,
            SUM(page_views) AS page_views,
            SUM(engaged_10s) AS engaged_10s,
            SUM(scroll_90) AS scroll_90,
            ROUND(AVG(NULLIF(avg_time_on_page_ms, 0))) AS avg_time_ms
         FROM web_engagement_daily
         WHERE day_key BETWEEN :from_day AND :to_day
           ' . $excludeDevPagesWhere . '
         GROUP BY page_path
         ORDER BY page_views DESC
         LIMIT 12'
    );
    $topStmt->execute([
        ':from_day' => $monthStartDate,
        ':to_day' => $monthEndDate,
    ]);

    foreach ($topStmt->fetchAll(PDO::FETCH_ASSOC) as $row) {
        $topPages[] = [
            'page_path' => (string) ($row['page_path'] ?? '/'),
            'page_views' => (int) ($row['page_views'] ?? 0),
            'engaged_10s' => (int) ($row['engaged_10s'] ?? 0),
            'scroll_90' => (int) ($row['scroll_90'] ?? 0),
            'avg_time_sec' => ((int) ($row['avg_time_ms'] ?? 0)) / 1000,
        ];
    }

    engagement_cleanup_raw_days(90);
} catch (Throwable $e) {
    $dbError = 'No se pudo construir el reporte de engagement.';
}

ob_start();
require __DIR__ . '/../../pages/admin/reports/engagement-mensual.php';
$fullPageHtml = (string) ob_get_clean();
echo admin_extract_body_html($fullPageHtml);
