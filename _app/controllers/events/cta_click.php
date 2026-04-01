<?php
declare(strict_types=1);

require __DIR__ . '/../../helpers/leads_db.php';

if (($_SERVER['REQUEST_METHOD'] ?? '') !== 'POST') {
    http_response_code(405);
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode(['success' => false, 'message' => 'Metodo no permitido']);
    exit;
}

$raw = file_get_contents('php://input');
$payload = [];
if (is_string($raw) && trim($raw) !== '') {
    $decoded = json_decode($raw, true);
    if (is_array($decoded)) {
        $payload = $decoded;
    }
}
if ($payload === []) {
    $payload = $_POST;
}

$pagePath = trim((string) ($payload['page_path'] ?? ($_SERVER['HTTP_X_PAGE_PATH'] ?? '')));
$clickLabel = trim((string) ($payload['click_label'] ?? ($payload['offer_name'] ?? ($_SERVER['HTTP_X_OFFER_NAME'] ?? ''))));
$referrerUrl = trim((string) ($payload['referrer_url'] ?? ($_SERVER['HTTP_REFERER'] ?? '')));

$userAgent = (string) ($_SERVER['HTTP_USER_AGENT'] ?? '');
$ua = strtolower($userAgent);
$deviceType = 'desktop';
if (strpos($ua, 'tablet') !== false || strpos($ua, 'ipad') !== false) {
    $deviceType = 'tablet';
} elseif (
    strpos($ua, 'mobile') !== false ||
    strpos($ua, 'android') !== false ||
    strpos($ua, 'iphone') !== false
) {
    $deviceType = 'mobile';
}

$inserted = cta_click_db_insert([
    'page_path' => $pagePath,
    'click_label' => $clickLabel,
    'device_type' => $deviceType,
    'referrer_url' => $referrerUrl,
    'ip' => $_SERVER['REMOTE_ADDR'] ?? null,
    'user_agent' => $userAgent !== '' ? $userAgent : null,
    'created_at' => date('c'),
]);

if (!$inserted) {
    http_response_code(500);
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode(['success' => false, 'message' => 'No se pudo registrar el evento']);
    exit;
}

http_response_code(204);
exit;
