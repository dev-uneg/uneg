<?php
declare(strict_types=1);

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

function mailer_config(): array
{
    static $resolved = null;
    if ($resolved !== null) {
        return $resolved;
    }

    $localConfig = [];
    $localPath = __DIR__ . '/../config/mailer.local.php';
    if (is_file($localPath)) {
        $loaded = require $localPath;
        if (is_array($loaded)) {
            $localConfig = $loaded;
        }
    }

    $get = static function (string $envKey, string $configKey, string $default = '') use ($localConfig): string {
        $env = getenv($envKey);
        if (is_string($env) && trim($env) !== '') {
            return trim($env);
        }

        $value = $localConfig[$configKey] ?? '';
        if (is_string($value) && trim($value) !== '') {
            return trim($value);
        }

        return $default;
    };

    $username = $get('SMTP_USERNAME', 'username', '');
    $fromEmail = $get('SMTP_FROM_EMAIL', 'from_email', $username);
    $port = (int) $get('SMTP_PORT', 'port', '587');
    if ($port <= 0) {
        $port = 587;
    }

    $recipients = [];
    $rawRecipients = getenv('SMTP_TO_EMAILS');
    if (is_string($rawRecipients) && trim($rawRecipients) !== '') {
        foreach (explode(',', $rawRecipients) as $item) {
            $mail = trim($item);
            if ($mail !== '') {
                $recipients[] = ['email' => $mail, 'name' => ''];
            }
        }
    } elseif (isset($localConfig['recipients']) && is_array($localConfig['recipients'])) {
        foreach ($localConfig['recipients'] as $item) {
            if (!is_array($item)) {
                continue;
            }
            $mail = trim((string) ($item['email'] ?? ''));
            if ($mail === '') {
                continue;
            }
            $recipients[] = [
                'email' => $mail,
                'name' => trim((string) ($item['name'] ?? '')),
            ];
        }
    }
    if ($recipients === []) {
        $recipients = [
            ['email' => 'gabriel.riancho@uneg.edu.mx', 'name' => ''],
            ['email' => 'elizabeth.cisneros@uneg.edu.mx', 'name' => ''],
        ];
    }

    $resolved = [
        'host' => $get('SMTP_HOST', 'host', 'smtp.gmail.com'),
        'port' => $port,
        'encryption' => strtolower($get('SMTP_ENCRYPTION', 'encryption', 'tls')),
        'username' => $username,
        'password' => $get('SMTP_PASSWORD', 'password', ''),
        'from_email' => $fromEmail,
        'from_name' => $get('SMTP_FROM_NAME', 'from_name', 'UNEG Sitio Web'),
        'recipients' => $recipients,
    ];

    return $resolved;
}

function send_smtp_notification(
    string $subject,
    string $plainBody,
    string $replyEmail = '',
    string $replyName = '',
    string $recipientGroup = 'default'
): array
{
    $cfg = mailer_config();
    $password = trim((string) ($cfg['password'] ?? ''));
    if ($password === '' || stripos($password, 'PON_AQUI') !== false) {
        return [
            'ok' => false,
            'error' => 'SMTP password no configurado.',
        ];
    }

    $recipients = [];
    $groupKey = $recipientGroup !== '' && $recipientGroup !== 'default'
        ? 'recipients_' . $recipientGroup
        : 'recipients';
    if (isset($cfg[$groupKey]) && is_array($cfg[$groupKey])) {
        $recipients = $cfg[$groupKey];
    } elseif (isset($cfg['recipients']) && is_array($cfg['recipients'])) {
        $recipients = $cfg['recipients'];
    }

    $htmlBody = nl2br(htmlspecialchars($plainBody, ENT_QUOTES, 'UTF-8'));

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = (string) $cfg['host'];
        $mail->SMTPAuth = true;
        $mail->Username = (string) $cfg['username'];
        $mail->Password = $password;
        $mail->Port = (int) $cfg['port'];
        $mail->CharSet = 'UTF-8';

        $encryption = (string) ($cfg['encryption'] ?? 'tls');
        $mail->SMTPSecure = $encryption === 'ssl'
            ? PHPMailer::ENCRYPTION_SMTPS
            : PHPMailer::ENCRYPTION_STARTTLS;

        $mail->setFrom((string) $cfg['from_email'], (string) $cfg['from_name']);
        foreach ($recipients as $recipient) {
            if (!is_array($recipient)) {
                continue;
            }
            $toEmail = trim((string) ($recipient['email'] ?? ''));
            if ($toEmail === '') {
                continue;
            }
            $toName = trim((string) ($recipient['name'] ?? ''));
            $mail->addAddress($toEmail, $toName);
        }
        if ($replyEmail !== '') {
            $mail->addReplyTo($replyEmail, $replyName !== '' ? $replyName : $replyEmail);
        }

        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $htmlBody;
        $mail->AltBody = $plainBody;
        $mail->send();

        return [
            'ok' => true,
            'error' => null,
        ];
    } catch (Exception $e) {
        return [
            'ok' => false,
            'error' => $e->getMessage(),
        ];
    }
}
