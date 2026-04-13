<?php
declare(strict_types=1);

session_start();
require __DIR__ . '/../../helpers/admin_auth.php';
require __DIR__ . '/../../helpers/admin_async.php';
require __DIR__ . '/../../helpers/leads_db.php';

admin_require_auth();

$base = admin_base_path();

if (!admin_is_async_request()) {
    $pageTitle = 'Reporte Mensual | UNEG';
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
$prevStart = $monthStart->modify('-1 month');
$prevEnd = $prevStart->modify('last day of this month')->setTime(23, 59, 59);
$monthStartDate = $monthStart->format('Y-m-d');
$monthEndDate = $monthEnd->format('Y-m-d');
$prevStartDate = $prevStart->format('Y-m-d');
$prevEndDate = $prevEnd->format('Y-m-d');

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
$monthSlug = strtolower(($monthNames[(int) $monthStart->format('n')] ?? 'mes') . '-' . $monthStart->format('Y'));

$pageSpeedSnapshot = null;
$pageSpeedMessage = '';
$pageSpeedFile = __DIR__ . '/../../data/reports/pagespeed/' . $monthSlug . '.json';
if (is_file($pageSpeedFile)) {
    $rawSnapshot = (string) file_get_contents($pageSpeedFile);
    $decodedSnapshot = json_decode($rawSnapshot, true);
    if (is_array($decodedSnapshot)) {
        $pageSpeedSnapshot = $decodedSnapshot;
    } else {
        $pageSpeedMessage = 'No se pudo leer la captura de PageSpeed de este periodo.';
    }
} else {
    $pageSpeedMessage = 'Sin captura de PageSpeed para este periodo.';
}

$summary = [
    'total_leads' => 0,
    'prev_total_leads' => 0,
    'growth_pct' => null,
    'pipedrive_ok' => 0,
    'pipedrive_failed' => 0,
    'received' => 0,
    'delivery_pct' => 0.0,
    'universidad_leads' => 0,
    'without_page_path' => 0,
    'whatsapp_clicks' => 0,
    'cta_clicks' => 0,
];

$dailyLabels = [];
$dailyValues = [];
$interestLabels = [];
$interestValues = [];
$sourceLabels = [];
$sourceValues = [];
$statusLabels = ['Pipedrive OK', 'Pipedrive error'];
$statusValues = [0, 0];
$topPages = [];
$whatsDailyLabels = [];
$whatsDailyValues = [];
$whatsTopPages = [];
$planDailyLabels = [];
$planDailyValues = [];
$planTopOffers = [];
$planTopPages = [];
$planDeviceLabels = [];
$planDeviceValues = [];
$sourceTrackingStart = null;
try {
    $pdo = leads_db();

    $countSql = 'SELECT COUNT(*) FROM leads WHERE created_day BETWEEN :from_day AND :to_day';

    $currentStmt = $pdo->prepare($countSql);
    $currentStmt->execute([
        ':from_day' => $monthStartDate,
        ':to_day' => $monthEndDate,
    ]);
    $summary['total_leads'] = (int) $currentStmt->fetchColumn();

    $prevStmt = $pdo->prepare($countSql);
    $prevStmt->execute([
        ':from_day' => $prevStartDate,
        ':to_day' => $prevEndDate,
    ]);
    $summary['prev_total_leads'] = (int) $prevStmt->fetchColumn();

    if ($summary['prev_total_leads'] > 0) {
        $summary['growth_pct'] = (($summary['total_leads'] - $summary['prev_total_leads']) / $summary['prev_total_leads']) * 100;
    }

    $statusStmt = $pdo->prepare('SELECT status, COUNT(*) AS total FROM leads WHERE created_day BETWEEN :from_day AND :to_day GROUP BY status');
    $statusStmt->execute([
        ':from_day' => $monthStartDate,
        ':to_day' => $monthEndDate,
    ]);
    foreach ($statusStmt->fetchAll(PDO::FETCH_ASSOC) as $row) {
        $status = (string) ($row['status'] ?? '');
        $total = (int) ($row['total'] ?? 0);
        if ($status === 'pipedrive_ok') {
            $summary['pipedrive_ok'] = $total;
            $statusValues[0] = $total;
        } elseif ($status === 'pipedrive_failed') {
            $summary['pipedrive_failed'] = $total;
            $statusValues[1] = $total;
        }
    }

    $summary['delivery_pct'] = $summary['total_leads'] > 0
        ? ($summary['pipedrive_ok'] / $summary['total_leads']) * 100
        : 0.0;

    $segmentStmt = $pdo->prepare(
        "SELECT
            SUM(CASE WHEN
                page_path LIKE '/licenciaturas%' OR
                page_path LIKE '/maestrias%' OR
                page_path LIKE '/doctorados%' OR
                page_path LIKE '/lp-licenciaturas%' OR
                page_path LIKE '/lp-maestrias%'
                THEN 1 ELSE 0 END) AS universidad_total,
            SUM(CASE WHEN
                page_path IS NULL OR page_path = '' THEN 1 ELSE 0 END) AS sin_ruta_total
         FROM leads
         WHERE created_day BETWEEN :from_day AND :to_day"
    );
    $segmentStmt->execute([
        ':from_day' => $monthStartDate,
        ':to_day' => $monthEndDate,
    ]);
    $segment = $segmentStmt->fetch(PDO::FETCH_ASSOC) ?: [];
    $summary['universidad_leads'] = (int) ($segment['universidad_total'] ?? 0);

    $withoutPageStmt = $pdo->prepare(
        "SELECT COUNT(*)
         FROM leads
         WHERE created_day BETWEEN :from_day AND :to_day
           AND (page_path IS NULL OR page_path = '')"
    );
    $withoutPageStmt->execute([
        ':from_day' => $monthStartDate,
        ':to_day' => $monthEndDate,
    ]);
    $summary['without_page_path'] = (int) $withoutPageStmt->fetchColumn();

    $dailyStmt = $pdo->prepare('SELECT created_day AS day_key, COUNT(*) AS total FROM leads WHERE created_day BETWEEN :from_day AND :to_day GROUP BY created_day ORDER BY day_key ASC');
    $dailyStmt->execute([
        ':from_day' => $monthStartDate,
        ':to_day' => $monthEndDate,
    ]);

    $dailyMap = [];
    foreach ($dailyStmt->fetchAll(PDO::FETCH_ASSOC) as $row) {
        $dailyMap[(string) ($row['day_key'] ?? '')] = (int) ($row['total'] ?? 0);
    }

    $cursor = $monthStart;
    while ($cursor <= $monthEnd) {
        $key = $cursor->format('Y-m-d');
        $dailyLabels[] = $cursor->format('d M');
        $dailyValues[] = $dailyMap[$key] ?? 0;
        $cursor = $cursor->modify('+1 day');
    }

    $interestStmt = $pdo->prepare(
        "SELECT
            interest AS raw_label,
            COUNT(*) AS total
         FROM leads
         WHERE created_day BETWEEN :from_day AND :to_day
         GROUP BY interest
         ORDER BY total DESC
         LIMIT 8"
    );
    $interestStmt->execute([
        ':from_day' => $monthStartDate,
        ':to_day' => $monthEndDate,
    ]);
    foreach ($interestStmt->fetchAll(PDO::FETCH_ASSOC) as $row) {
        $rawLabel = (string) ($row['raw_label'] ?? '');
        $interestLabels[] = $rawLabel !== '' ? $rawLabel : 'Sin especificar';
        $interestValues[] = (int) ($row['total'] ?? 0);
    }

    $sourceStmt = $pdo->prepare(
        "SELECT
            source AS raw_label,
            COUNT(*) AS total
         FROM leads
         WHERE created_day BETWEEN :from_day AND :to_day
         GROUP BY source
         ORDER BY total DESC
         LIMIT 8"
    );
    $sourceStmt->execute([
        ':from_day' => $monthStartDate,
        ':to_day' => $monthEndDate,
    ]);
    foreach ($sourceStmt->fetchAll(PDO::FETCH_ASSOC) as $row) {
        $rawLabel = (string) ($row['raw_label'] ?? '');
        $sourceLabels[] = trim($rawLabel) !== '' ? $rawLabel : 'Sin dato';
        $sourceValues[] = (int) ($row['total'] ?? 0);
    }

    $sourceStartStmt = $pdo->query(
        "SELECT MIN(created_at)
         FROM leads
         WHERE source IS NOT NULL
           AND TRIM(source) <> ''"
    );
    $sourceStartRaw = (string) ($sourceStartStmt->fetchColumn() ?? '');
    if ($sourceStartRaw !== '') {
        try {
            $sourceStartDate = new DateTimeImmutable($sourceStartRaw, new DateTimeZone('America/Mexico_City'));
            $sourceTrackingStart = $sourceStartDate->format('d/m/Y');
        } catch (Throwable $e) {
            $sourceTrackingStart = $sourceStartRaw;
        }
    }

    $pagesStmt = $pdo->prepare(
        "SELECT
            page_path AS raw_label,
            COUNT(*) AS total
         FROM leads
         WHERE created_day BETWEEN :from_day AND :to_day
         GROUP BY page_path
         ORDER BY total DESC
         LIMIT 10"
    );
    $pagesStmt->execute([
        ':from_day' => $monthStartDate,
        ':to_day' => $monthEndDate,
    ]);
    foreach ($pagesStmt->fetchAll(PDO::FETCH_ASSOC) as $row) {
        $rawLabel = (string) ($row['raw_label'] ?? '');
        $topPages[] = [
            'label' => $rawLabel !== '' ? $rawLabel : '(sin página)',
            'total' => (int) ($row['total'] ?? 0),
        ];
    }

    $whatsCountStmt = $pdo->prepare(
        'SELECT COUNT(*) FROM whatsapp_clicks WHERE created_day BETWEEN :from_day AND :to_day'
    );
    $whatsCountStmt->execute([
        ':from_day' => $monthStartDate,
        ':to_day' => $monthEndDate,
    ]);
    $summary['whatsapp_clicks'] = (int) $whatsCountStmt->fetchColumn();

    $whatsDailyStmt = $pdo->prepare(
        'SELECT created_day AS day_key, COUNT(*) AS total
         FROM whatsapp_clicks
         WHERE created_day BETWEEN :from_day AND :to_day
         GROUP BY created_day
         ORDER BY day_key ASC'
    );
    $whatsDailyStmt->execute([
        ':from_day' => $monthStartDate,
        ':to_day' => $monthEndDate,
    ]);

    $whatsDailyMap = [];
    foreach ($whatsDailyStmt->fetchAll(PDO::FETCH_ASSOC) as $row) {
        $whatsDailyMap[(string) ($row['day_key'] ?? '')] = (int) ($row['total'] ?? 0);
    }

    $whatsCursor = $monthStart;
    while ($whatsCursor <= $monthEnd) {
        $whatsKey = $whatsCursor->format('Y-m-d');
        $whatsDailyLabels[] = $whatsCursor->format('d M');
        $whatsDailyValues[] = $whatsDailyMap[$whatsKey] ?? 0;
        $whatsCursor = $whatsCursor->modify('+1 day');
    }

    $whatsTopPagesStmt = $pdo->prepare(
        "SELECT
            page_path AS raw_label,
            COUNT(*) AS total
         FROM whatsapp_clicks
         WHERE created_day BETWEEN :from_day AND :to_day
         GROUP BY page_path
         ORDER BY total DESC
         LIMIT 8"
    );
    $whatsTopPagesStmt->execute([
        ':from_day' => $monthStartDate,
        ':to_day' => $monthEndDate,
    ]);
    foreach ($whatsTopPagesStmt->fetchAll(PDO::FETCH_ASSOC) as $row) {
        $rawLabel = (string) ($row['raw_label'] ?? '');
        $whatsTopPages[] = [
            'label' => $rawLabel !== '' ? $rawLabel : '(sin página)',
            'total' => (int) ($row['total'] ?? 0),
        ];
    }

    $planCountStmt = $pdo->prepare(
        'SELECT COUNT(*) FROM cta_clicks WHERE created_day BETWEEN :from_day AND :to_day'
    );
    $planCountStmt->execute([
        ':from_day' => $monthStartDate,
        ':to_day' => $monthEndDate,
    ]);
    $summary['cta_clicks'] = (int) $planCountStmt->fetchColumn();

    $planDailyStmt = $pdo->prepare(
        'SELECT created_day AS day_key, COUNT(*) AS total
         FROM cta_clicks
         WHERE created_day BETWEEN :from_day AND :to_day
         GROUP BY created_day
         ORDER BY day_key ASC'
    );
    $planDailyStmt->execute([
        ':from_day' => $monthStartDate,
        ':to_day' => $monthEndDate,
    ]);
    $planDailyMap = [];
    foreach ($planDailyStmt->fetchAll(PDO::FETCH_ASSOC) as $row) {
        $planDailyMap[(string) ($row['day_key'] ?? '')] = (int) ($row['total'] ?? 0);
    }
    $planCursor = $monthStart;
    while ($planCursor <= $monthEnd) {
        $planKey = $planCursor->format('Y-m-d');
        $planDailyLabels[] = $planCursor->format('d M');
        $planDailyValues[] = $planDailyMap[$planKey] ?? 0;
        $planCursor = $planCursor->modify('+1 day');
    }

    $planOfferStmt = $pdo->prepare(
        "SELECT
            click_label AS raw_label,
            COUNT(*) AS total
         FROM cta_clicks
         WHERE created_day BETWEEN :from_day AND :to_day
         GROUP BY click_label
         ORDER BY total DESC
         LIMIT 8"
    );
    $planOfferStmt->execute([
        ':from_day' => $monthStartDate,
        ':to_day' => $monthEndDate,
    ]);
    foreach ($planOfferStmt->fetchAll(PDO::FETCH_ASSOC) as $row) {
        $rawLabel = (string) ($row['raw_label'] ?? '');
        $planTopOffers[] = [
            'label' => $rawLabel !== '' ? $rawLabel : 'Sin etiqueta',
            'total' => (int) ($row['total'] ?? 0),
        ];
    }

    $planPagesStmt = $pdo->prepare(
        "SELECT
            page_path AS raw_label,
            COUNT(*) AS total
         FROM cta_clicks
         WHERE created_day BETWEEN :from_day AND :to_day
         GROUP BY page_path
         ORDER BY total DESC
         LIMIT 8"
    );
    $planPagesStmt->execute([
        ':from_day' => $monthStartDate,
        ':to_day' => $monthEndDate,
    ]);
    foreach ($planPagesStmt->fetchAll(PDO::FETCH_ASSOC) as $row) {
        $rawLabel = (string) ($row['raw_label'] ?? '');
        $planTopPages[] = [
            'label' => $rawLabel !== '' ? $rawLabel : '(sin página)',
            'total' => (int) ($row['total'] ?? 0),
        ];
    }

    $planDeviceStmt = $pdo->prepare(
        "SELECT
            device_type AS raw_label,
            COUNT(*) AS total
         FROM cta_clicks
         WHERE created_day BETWEEN :from_day AND :to_day
         GROUP BY device_type
         ORDER BY total DESC"
    );
    $planDeviceStmt->execute([
        ':from_day' => $monthStartDate,
        ':to_day' => $monthEndDate,
    ]);
    foreach ($planDeviceStmt->fetchAll(PDO::FETCH_ASSOC) as $row) {
        $rawLabel = (string) ($row['raw_label'] ?? '');
        $planDeviceLabels[] = $rawLabel !== '' ? $rawLabel : 'desconocido';
        $planDeviceValues[] = (int) ($row['total'] ?? 0);
    }

} catch (Throwable $e) {
    $dbError = 'No se pudo construir el reporte con datos de la base de datos.';
}

$requirements = [
    [
        'item' => 'LCP, INP/FID, CLS y 404',
        'available' => $pageSpeedSnapshot !== null,
        'detail' => $pageSpeedSnapshot !== null
            ? 'Disponible parcial: métricas PageSpeed (móvil/escritorio) cargadas por periodo.'
            : 'Pendiente para este periodo: falta captura de PageSpeed.',
    ],
    [
        'item' => 'Tasa de conversión por landing',
        'available' => true,
        'detail' => 'Disponible parcial: hoy se reporta volumen de leads por landing.',
    ],
    [
        'item' => 'Fallas en formularios',
        'available' => true,
        'detail' => 'Disponible por status de envío a Pipedrive (pipedrive_failed).',
    ],
    [
        'item' => 'Eventos GA4 (generate_lead, whatsapp_click, cta_click)',
        'available' => true,
        'detail' => 'Disponible: se implementó con código dentro del sitio web (sin GA4 de Analytics) el 31/03/2026 para generate_lead, whatsapp_click y cta_click.',
    ],
    [
        'item' => 'Bitácora A/B testing',
        'available' => false,
        'detail' => 'Sin estrategia activa por ahora; puede implementarse en el siguiente ciclo.',
    ],
];

ob_start();
require __DIR__ . '/../../pages/admin/reports/uneg-mensual.php';
$fullPageHtml = (string) ob_get_clean();
echo admin_extract_body_html($fullPageHtml);
