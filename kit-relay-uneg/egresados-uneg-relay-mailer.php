<?php
declare(strict_types=1);

header('Content-Type: application/json; charset=UTF-8');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['ok' => false, 'error' => 'Metodo no permitido']);
    exit;
}

$phpMailerBase = __DIR__ . '/vendor/phpmailer/phpmailer/src';
if (!is_file($phpMailerBase . '/Exception.php') || !is_file($phpMailerBase . '/PHPMailer.php') || !is_file($phpMailerBase . '/SMTP.php')) {
    http_response_code(500);
    echo json_encode(['ok' => false, 'error' => 'No se encontro PHPMailer local en /vendor/phpmailer/phpmailer/src']);
    exit;
}
require_once $phpMailerBase . '/Exception.php';
require_once $phpMailerBase . '/PHPMailer.php';
require_once $phpMailerBase . '/SMTP.php';

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
$apellidoPaterno = trim((string) ($input['apellido_paterno'] ?? ''));
$apellidoMaterno = trim((string) ($input['apellido_materno'] ?? ''));
$anioIngreso = trim((string) ($input['anio_ingreso'] ?? ''));
$anioEgreso = trim((string) ($input['anio_egreso'] ?? ''));
$nivelEgreso = trim((string) ($input['nivel_egreso'] ?? ''));
$carreraEgreso = trim((string) ($input['carrera_egreso'] ?? ''));
$telefono = trim((string) ($input['telefono'] ?? ''));
$correo = trim((string) ($input['correo'] ?? ''));
$trabajando = trim((string) ($input['trabajando'] ?? ''));
$empresa = trim((string) ($input['empresa'] ?? ''));
$cargo = trim((string) ($input['cargo'] ?? ''));
$nombreCompleto = trim((string) ($input['nombre_completo'] ?? ($nombre . ' ' . $apellidoPaterno . ' ' . $apellidoMaterno)));
$ip = trim((string) ($input['ip'] ?? ''));
$createdAt = trim((string) ($input['created_at'] ?? date('c')));

if (
    $nombre === '' ||
    $apellidoPaterno === '' ||
    $apellidoMaterno === '' ||
    $anioIngreso === '' ||
    $anioEgreso === '' ||
    $nivelEgreso === '' ||
    $carreraEgreso === '' ||
    $telefono === '' ||
    $correo === '' ||
    $trabajando === '' ||
    $empresa === '' ||
    $cargo === ''
) {
    http_response_code(400);
    echo json_encode(['ok' => false, 'error' => 'Faltan campos requeridos de egresados']);
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
$fromName = 'UNEG Egresados Relay';

$recipients = [
    ['email' => 'elizabeth.cisneros@uneg.edu.mx', 'name' => ''],
    ['email' => 'jair.uneg@gmail.com', 'name' => ''],
];

if ($smtpPassword === 'PON_AQUI_TU_APP_PASSWORD') {
    http_response_code(500);
    echo json_encode(['ok' => false, 'error' => 'Configura smtpPassword en egresados-uneg-relay-mailer.php']);
    exit;
}

$safeNombreCompleto = str_replace(["\r", "\n"], ' ', $nombreCompleto);
$safeCorreo = str_replace(["\r", "\n"], '', $correo);
$subject = 'Egresados - Nuevo registro';
$plainBody = "Nuevo registro recibido desde Egresados:\n\n"
    . "Nombre: {$safeNombreCompleto}\n"
    . "Anio de ingreso: {$anioIngreso}\n"
    . "Anio de egreso: {$anioEgreso}\n"
    . "Nivel de egreso: {$nivelEgreso}\n"
    . "Carrera de egreso: {$carreraEgreso}\n"
    . "Telefono: {$telefono}\n"
    . "Correo: {$safeCorreo}\n"
    . "Trabajando: {$trabajando}\n"
    . "Empresa: {$empresa}\n"
    . "Cargo: {$cargo}\n\n"
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
    $mail->addReplyTo($safeCorreo, $safeNombreCompleto);

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

