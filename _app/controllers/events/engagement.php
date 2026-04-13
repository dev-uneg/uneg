<?php
declare(strict_types=1);

require __DIR__ . '/../../helpers/leads_db.php';

function engagement_url_host(string $url): string
{
    $host = parse_url($url, PHP_URL_HOST);
    return is_string($host) ? strtolower(trim($host)) : '';
}

function engagement_host_allowed(string $host): bool
{
    $value = strtolower(trim($host));
    if ($value === '') {
        return false;
    }

    $allowed = [
        'uneg.edu.mx',
        'www.uneg.edu.mx',
        'localhost',
        '127.0.0.1',
    ];

    if (in_array($value, $allowed, true)) {
        return true;
    }

    return str_ends_with($value, '.uneg.edu.mx');
}

function engagement_contains_suspicious_payload(?string $value): bool
{
    $raw = strtolower(trim((string) $value));
    if ($raw === '') {
        return false;
    }

    $needles = [
        'sleep(',
        'waitfor',
        'pg_sleep',
        'dbms_pipe',
        'benchmark(',
        ' union select',
        "' or ",
        '" or ',
        ' xor(',
        '/*',
        '*/',
        '--',
    ];

    foreach ($needles as $needle) {
        if (strpos($raw, $needle) !== false) {
            return true;
        }
    }

    return false;
}

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

$eventName = trim((string) ($payload['event_name'] ?? ''));
$pagePath = engagement_normalize_page_path((string) ($payload['page_path'] ?? '/'));
$sessionToken = substr(trim((string) ($payload['session_token'] ?? '')), 0, 80);
$durationMs = isset($payload['duration_ms']) ? (int) $payload['duration_ms'] : null;
$scrollPct = isset($payload['scroll_pct']) ? (int) $payload['scroll_pct'] : null;

$ip = (string) ($_SERVER['REMOTE_ADDR'] ?? '');
$userAgent = (string) ($_SERVER['HTTP_USER_AGENT'] ?? '');
$originHost = engagement_url_host((string) ($_SERVER['HTTP_ORIGIN'] ?? ''));
$refererHost = engagement_url_host((string) ($_SERVER['HTTP_REFERER'] ?? ''));
$isSourceTrusted = engagement_host_allowed($originHost) || engagement_host_allowed($refererHost);
if (!$isSourceTrusted) {
    http_response_code(204);
    exit;
}

if (!in_array($eventName, engagement_allowed_events(), true)) {
    http_response_code(204);
    exit;
}

if (preg_match('~^/[A-Za-z0-9/_\\-\\.]*$~', $pagePath) !== 1 || page_path_is_dev_noise($pagePath)) {
    http_response_code(204);
    exit;
}

if (
    engagement_contains_suspicious_payload($eventName)
    || engagement_contains_suspicious_payload($pagePath)
    || engagement_contains_suspicious_payload($userAgent)
) {
    http_response_code(204);
    exit;
}

if (engagement_is_suspected_bot($userAgent)) {
    http_response_code(204);
    exit;
}

$ipHash = engagement_hash_nullable($ip);
if (engagement_event_is_rate_limited($ipHash, 60, 180)) {
    http_response_code(429);
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode(['success' => false, 'message' => 'Rate limit exceeded']);
    exit;
}

$sessionTokenValid = $sessionToken !== ''
    && preg_match('/^[A-Za-z0-9_-]{12,80}$/', $sessionToken) === 1;

$dedupEvents = ['engaged_10s', 'scroll_50', 'scroll_90', 'time_on_page'];
if ($sessionTokenValid && in_array($eventName, $dedupEvents, true)) {
    if (engagement_event_exists_today($eventName, $pagePath, $sessionToken)) {
        http_response_code(204);
        exit;
    }
}

$inserted = engagement_event_db_insert([
    'event_name' => $eventName,
    'page_path' => $pagePath,
    'session_token' => $sessionTokenValid ? $sessionToken : null,
    'scroll_pct' => $scrollPct,
    'engagement_ms' => $durationMs,
    'ip_hash' => $ipHash,
    'user_agent_hash' => engagement_hash_nullable($userAgent),
    'is_bot' => 0,
    'created_at' => date('c'),
]);

if (!$inserted) {
    http_response_code(500);
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode(['success' => false, 'message' => 'No se pudo registrar el evento']);
    exit;
}

try {
    if (random_int(1, 100) === 1) {
        engagement_cleanup_raw_days(90);
    }
} catch (Throwable $e) {
}

http_response_code(204);
exit;
