<?php
declare(strict_types=1);

require __DIR__ . '/../../helpers/leads_db.php';
require __DIR__ . '/../../helpers/rate_limit_forms.php';

$base = rtrim(dirname($_SERVER['SCRIPT_NAME'] ?? ''), '/');
$base = $base === '.' ? '' : $base;
$isHtmlRequest = strpos($_SERVER['HTTP_ACCEPT'] ?? '', 'text/html') !== false;

$respondJson = static function (int $status, array $payload): void {
    http_response_code($status);
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($payload);
    exit;
};

$fail = static function (string $message, int $status = 400) use ($base, $isHtmlRequest, $respondJson): void {
    if ($isHtmlRequest) {
        header('Location: ' . $base . '/contacto?error=1', true, 302);
        exit;
    }

    $respondJson($status, [
        'success' => false,
        'message' => $message,
    ]);
};

$pipedriveRequest = static function (string $endpoint, string $token, array $payload): array {
    $ch = curl_init($endpoint);
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_HTTPHEADER => [
            'Content-Type: application/json',
            'Accept: application/json',
            'x-api-token: ' . $token,
        ],
        CURLOPT_POSTFIELDS => json_encode($payload),
        CURLOPT_TIMEOUT => 15,
    ]);

    $response = curl_exec($ch);
    $error = curl_error($ch);
    $status = (int) curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($response === false) {
        return [
            'ok' => false,
            'status' => 500,
            'error' => $error ?: 'No se pudo conectar con Pipedrive.',
            'data' => null,
        ];
    }

    $data = json_decode($response, true);

    return [
        'ok' => $status >= 200 && $status < 300,
        'status' => $status,
        'error' => $data['error'] ?? null,
        'data' => $data,
    ];
};

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    $fail('Metodo no permitido.', 405);
}

$rateLimit = forms_rate_limit_check($_SERVER['REQUEST_URI'] ?? '');
if (!$rateLimit['allowed']) {
    $wait = (int) ($rateLimit['retry_after'] ?? 60);
    $fail('Demasiados intentos. Intenta nuevamente en ' . $wait . ' segundos.', 429);
}

$honeypot = trim((string) ($_POST['company_website'] ?? ''));
if ($honeypot !== '') {
    $fail('Solicitud invalida.', 400);
}

$fullName = trim((string) ($_POST['full_name'] ?? ''));
$email = trim((string) ($_POST['email'] ?? ''));
$phone = trim((string) ($_POST['phone'] ?? ''));
$interest = trim((string) ($_POST['interest'] ?? ''));
$source = trim((string) ($_POST['source'] ?? ''));
$message = trim((string) ($_POST['message'] ?? ''));
$channel = trim((string) ($_POST['channel'] ?? ''));
$medium = trim((string) ($_POST['medium'] ?? ''));
$privacyAccepted = isset($_POST['privacy']);

if ($fullName === '' || $email === '' || $phone === '' || $interest === '' || !$privacyAccepted) {
    $fail('Faltan campos obligatorios.');
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $fail('Correo invalido.');
}

$leadId = leads_db_insert([
    'full_name' => $fullName,
    'email' => $email,
    'phone' => $phone,
    'interest' => $interest,
    'source' => $source,
    'message' => $message,
    'channel' => $channel,
    'medium' => $medium,
    'pipedrive_person_id' => null,
    'status' => 'received',
    'error_message' => null,
    'ip' => $_SERVER['REMOTE_ADDR'] ?? null,
    'user_agent' => $_SERVER['HTTP_USER_AGENT'] ?? null,
    'created_at' => date('c'),
]);

if (!$leadId) {
    $fail('No se pudo guardar el lead en base de datos.', 500);
}

$config = [];
$configPath = __DIR__ . '/../../config/pipedrive.local.php';
if (file_exists($configPath)) {
    $config = require $configPath;
}

$token = (string) ($config['api_token'] ?? getenv('PIPEDRIVE_API_TOKEN') ?? '');
if ($token === '' || $token === 'PON_AQUI_TU_TOKEN') {
    leads_db_update($leadId, [
        'status' => 'pipedrive_failed',
        'error_message' => 'Falta configurar el API token de Pipedrive.',
    ]);
    $fail('Falta configurar el API token de Pipedrive.', 500);
}

if ($medium === '') {
    $medium = 'Sitio web';
}

$personPayload = [
    'name' => $fullName,
    'email' => [[
        'value' => $email,
        'primary' => true,
    ]],
    'phone' => [[
        'value' => $phone,
        'primary' => true,
    ]],
    'cd1724715699c7674b53fd7e5918a1c853fa340f' => $interest,
    '1cd81947451e14a3c30084a31db4d6eef6fef63e' => $medium,
];

$personResponse = $pipedriveRequest('https://api.pipedrive.com/v1/persons', $token, $personPayload);

if (!$personResponse['ok'] || !($personResponse['data']['success'] ?? false)) {
    leads_db_update($leadId, [
        'status' => 'pipedrive_failed',
        'error_message' => (string) ($personResponse['error'] ?? 'Pipedrive error'),
    ]);
    $fail('No se pudo crear el contacto en Pipedrive.', 502);
}

$personId = $personResponse['data']['data']['id'] ?? null;
leads_db_update($leadId, [
    'status' => 'pipedrive_ok',
    'pipedrive_person_id' => $personId ? (string) $personId : null,
]);

if ($personId && ($interest !== '' || $source !== '' || $message !== '' || $channel !== '' || $medium !== '')) {
    $noteLines = [];
    if ($channel !== '') {
        $noteLines[] = 'Canal: ' . $channel;
    }
    if ($medium !== '') {
        $noteLines[] = 'Medio: ' . $medium;
    }
    if ($interest !== '') {
        $noteLines[] = 'Interes: ' . $interest;
    }
    if ($source !== '') {
        $noteLines[] = 'Como nos conociste: ' . $source;
    }
    if ($message !== '') {
        $noteLines[] = 'Mensaje: ' . $message;
    }

    $pipedriveRequest('https://api.pipedrive.com/v1/notes', $token, [
        'person_id' => $personId,
        'content' => implode("\n", $noteLines),
    ]);
}

if ($isHtmlRequest) {
    header('Location: ' . $base . '/gracias', true, 302);
    exit;
}

$respondJson(200, [
    'success' => true,
    'person_id' => $personId,
]);
