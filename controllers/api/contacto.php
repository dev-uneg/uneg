<?php
declare(strict_types=1);

// Este archivo es el controlador del endpoint /api/contacto.
// Su razón de existir es centralizar la lógica de envío de TODOS los forms del sitio:
// valida los datos obligatorios, guarda el lead en SQLite y luego crea la Persona
// en Pipedrive (y su nota). Al final responde en JSON o redirige a /gracias según el tipo de request.

require __DIR__ . '/../../helpers/leads_db.php';

// Respuesta JSON estandar.
function respond_json(int $status, array $payload): void
{
    http_response_code($status);
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($payload);
    exit;
}

// Deteccion simple: si el navegador espera HTML, redirigimos.
function is_html_request(): bool
{
    $accept = $_SERVER['HTTP_ACCEPT'] ?? '';
    return strpos($accept, 'text/html') !== false;
}

// Redireccion a pagina de gracias o regreso con error.
function redirect_with_status(string $status): void
{
    $base = rtrim(dirname($_SERVER['SCRIPT_NAME'] ?? ''), '/');
    $base = $base === '.' ? '' : $base;
    if ($status === 'ok') {
        $location = $base . '/gracias';
    } else {
        $location = $base . '/contacto?error=1';
    }
    header('Location: ' . $location, true, 302);
    exit;
}

// Respuesta de error para HTML o JSON.
function fail_request(string $message, int $status = 400): void
{
    if (is_html_request()) {
        redirect_with_status('error');
    }

    respond_json($status, [
        'success' => false,
        'message' => $message,
    ]);
}

// Cliente sencillo para Pipedrive (POST JSON con x-api-token).
function pipedrive_request(string $endpoint, string $token, array $payload): array
{
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
}

// Solo aceptamos POST.
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    fail_request('Metodo no permitido.', 405);
}

$honeypot = trim((string) ($_POST['company_website'] ?? ''));
if ($honeypot !== '') {
    fail_request('Solicitud invalida.', 400);
}

// Captura y limpia campos del formulario.
$fullName = trim((string) ($_POST['full_name'] ?? ''));
$email = trim((string) ($_POST['email'] ?? ''));
$phone = trim((string) ($_POST['phone'] ?? ''));
$interest = trim((string) ($_POST['interest'] ?? ''));
$source = trim((string) ($_POST['source'] ?? ''));
$message = trim((string) ($_POST['message'] ?? ''));
$channel = trim((string) ($_POST['channel'] ?? ''));
$medium = trim((string) ($_POST['medium'] ?? ''));
$privacyAccepted = isset($_POST['privacy']);

// Validaciones basicas.
if ($fullName === '' || $email === '' || $phone === '' || $interest === '' || !$privacyAccepted) {
    fail_request('Faltan campos obligatorios.');
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    fail_request('Correo invalido.');
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
    fail_request('No se pudo guardar el lead en base de datos.', 500);
}

// Carga token desde config local o variable de entorno.
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
    fail_request('Falta configurar el API token de Pipedrive.', 500);
}

// Nombre completo para la Persona.
$name = $fullName;

// Medio por defecto si no llega desde el form.
if ($medium === '') {
    $medium = 'Sitio web';
}

// Payload principal para crear Persona.
$personPayload = [
    'name' => $name,
    'email' => [[
        'value' => $email,
        'primary' => true,
    ]],
    'phone' => [[
        'value' => $phone,
        'primary' => true,
    ]],
    // Oferta WEB (campo personalizado en Pipedrive).
    'cd1724715699c7674b53fd7e5918a1c853fa340f' => $interest,
    // Medio (campo personalizado en Pipedrive).
    '1cd81947451e14a3c30084a31db4d6eef6fef63e' => $medium,
];

// Crear Persona en Pipedrive.
$personResponse = pipedrive_request('https://api.pipedrive.com/v1/persons', $token, $personPayload);

if (!$personResponse['ok'] || !($personResponse['data']['success'] ?? false)) {
    leads_db_update($leadId ?? 0, [
        'status' => 'pipedrive_failed',
        'error_message' => (string) ($personResponse['error'] ?? 'Pipedrive error'),
    ]);
    fail_request('No se pudo crear el contacto en Pipedrive.', 502);
}

$personId = $personResponse['data']['data']['id'] ?? null;
leads_db_update($leadId ?? 0, [
    'status' => 'pipedrive_ok',
    'pipedrive_person_id' => $personId ? (string) $personId : null,
]);

// Nota con campos extra (interes, canal, medio, etc.).
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

    $notePayload = [
        'person_id' => $personId,
        'content' => implode("\n", $noteLines),
    ];

    pipedrive_request('https://api.pipedrive.com/v1/notes', $token, $notePayload);
}

// Respuesta final segun tipo de cliente.
if (is_html_request()) {
    redirect_with_status('ok');
}

respond_json(200, [
    'success' => true,
    'person_id' => $personId,
]);
