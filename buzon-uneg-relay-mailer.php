<?php
declare(strict_types=1);

header('Content-Type: application/json; charset=UTF-8');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['ok' => false, 'error' => 'Metodo no permitido']);
    exit;
}

$autoloadPaths = [
    __DIR__ . '/vendor/autoload.php',
    dirname(__DIR__) . '/vendor/autoload.php',
];
$autoloadLoaded = false;
foreach ($autoloadPaths as $autoload) {
    if (is_file($autoload)) {
        require_once $autoload;
        $autoloadLoaded = true;
        break;
    }
}
if (!$autoloadLoaded) {
    http_response_code(500);
    echo json_encode(['ok' => false, 'error' => 'No se encontro vendor/autoload.php']);
    exit;
}

if (!class_exists(\PHPMailer\PHPMailer\PHPMailer::class)) {
    http_response_code(500);
    echo json_encode(['ok' => false, 'error' => 'PHPMailer no disponible']);
    exit;
}

$raw = file_get_contents('php://input');
$input = [];
if (is_string($raw) && trim($raw) !== '') {
    $decoded = json_decode($raw, true);
    if (is_array($decoded)) {
        $input = $decoded;
    }
}
if ($input === []) {
    $input = $_POST;
}

$nombre = trim((string) ($input['nombre'] ?? ''));
$correo = trim((string) ($input['correo'] ?? ''));
$asunto = trim((string) ($input['asunto'] ?? ''));
$mensaje = trim((string) ($input['mensaje'] ?? ''));
$ip = trim((string) ($input['ip'] ?? ''));
$createdAt = trim((string) ($input['created_at'] ?? date('c')));

if ($nombre === '' || $correo === '' || $asunto === '' || $mensaje === '') {
    http_response_code(400);
    echo json_encode(['ok' => false, 'error' => 'Faltan campos requeridos']);
    exit;
}
if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(['ok' => false, 'error' => 'Correo invalido']);
    exit;
}

$smtpHost = 'smtp.gmail.com';
$smtpPort = 587;
$smtpEncryption = 'tls'; // tls o ssl
$smtpUsername = 'webs.delvalle@gmail.com';
$smtpPassword = 'fkylmccydjpbkiqz';
$fromEmail = 'webs.delvalle@gmail.com';
$fromName = 'UNEG Buzon Relay';

$recipients = [
    ['email' => 'gabriel.riancho@uneg.edu.mx', 'name' => ''],
    ['email' => 'elizabeth.cisneros@uneg.edu.mx', 'name' => ''],
    ['email' => 'jair.uneg@gmail.com', 'name' => ''],
];

if ($smtpPassword === 'PON_AQUI_TU_APP_PASSWORD') {
    http_response_code(500);
    echo json_encode(['ok' => false, 'error' => 'Configura smtpUsername/smtpPassword en buzon-uneg-relay-mailer.php']);
    exit;
}

$safeNombre = str_replace(["\r", "\n"], ' ', $nombre);
$safeCorreo = str_replace(["\r", "\n"], '', $correo);
$safeAsunto = str_replace(["\r", "\n"], ' ', $asunto);
$subject = 'Buzon del Rector - ' . $safeAsunto;
$plainBody = "Nuevo mensaje recibido desde el Buzon del Rector:\n\n"
    . "Nombre: {$safeNombre}\n"
    . "Correo: {$safeCorreo}\n"
    . "Asunto: {$safeAsunto}\n\n"
    . "Mensaje:\n{$mensaje}\n\n"
    . "Fecha: {$createdAt}\n"
    . "IP: " . ($ip !== '' ? $ip : 'N/D') . "\n";

try {
    $mail = new \PHPMailer\PHPMailer\PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = $smtpHost;
    $mail->SMTPAuth = true;
    $mail->Username = $smtpUsername;
    $mail->Password = $smtpPassword;
    $mail->Port = $smtpPort;
    $mail->CharSet = 'UTF-8';
    $mail->SMTPSecure = strtolower($smtpEncryption) === 'ssl'
        ? \PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_SMTPS
        : \PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;

    $mail->setFrom($fromEmail, $fromName);
    foreach ($recipients as $to) {
        $toEmail = trim((string) ($to['email'] ?? ''));
        if ($toEmail === '') {
            continue;
        }
        $toName = trim((string) ($to['name'] ?? ''));
        $mail->addAddress($toEmail, $toName);
    }
    $mail->addReplyTo($safeCorreo, $safeNombre);

    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = nl2br(htmlspecialchars($plainBody, ENT_QUOTES, 'UTF-8'));
    $mail->AltBody = $plainBody;
    $mail->send();

    echo json_encode(['ok' => true]);
    exit;
} catch (\PHPMailer\PHPMailer\Exception $e) {
    http_response_code(500);
    echo json_encode(['ok' => false, 'error' => $e->getMessage()]);
    exit;
}
