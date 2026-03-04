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

    $toBool = static function ($value, bool $default): bool {
        if (is_bool($value)) {
            return $value;
        }
        if (is_int($value)) {
            return $value !== 0;
        }
        if (is_string($value)) {
            $raw = strtolower(trim($value));
            if ($raw === '') {
                return $default;
            }
            if (in_array($raw, ['1', 'true', 'on', 'yes'], true)) {
                return true;
            }
            if (in_array($raw, ['0', 'false', 'off', 'no'], true)) {
                return false;
            }
        }
        return $default;
    };

    $smtpAuthEnv = getenv('SMTP_AUTH');
    if (is_string($smtpAuthEnv) && trim($smtpAuthEnv) !== '') {
        $smtpAuth = $toBool($smtpAuthEnv, true);
    } else {
        $smtpAuth = $toBool($localConfig['smtp_auth'] ?? true, true);
    }
    $fallbackMailEnv = getenv('MAIL_FALLBACK_ENABLED');
    if (is_string($fallbackMailEnv) && trim($fallbackMailEnv) !== '') {
        $fallbackMail = $toBool($fallbackMailEnv, true);
    } else {
        $fallbackMail = $toBool($localConfig['mail_fallback_enabled'] ?? true, true);
    }

    $resolved = [
        'host' => $get('SMTP_HOST', 'host', 'smtp.gmail.com'),
        'port' => $port,
        'encryption' => strtolower($get('SMTP_ENCRYPTION', 'encryption', 'tls')),
        'username' => $username,
        'password' => $get('SMTP_PASSWORD', 'password', ''),
        'smtp_auth' => $smtpAuth,
        'mail_fallback_enabled' => $fallbackMail,
        'from_email' => $fromEmail,
        'from_name' => $get('SMTP_FROM_NAME', 'from_name', 'UNEG Sitio Web'),
        'relay_url' => $get('MAIL_RELAY_URL', 'relay_url', ''),
        'relay_token' => $get('MAIL_RELAY_TOKEN', 'relay_token', ''),
        'relay_timeout' => (int) $get('MAIL_RELAY_TIMEOUT', 'relay_timeout', '12'),
        'recipients' => $recipients,
    ];

    foreach ($localConfig as $key => $value) {
        if (!is_string($key) || strpos($key, 'recipients_') !== 0 || !is_array($value)) {
            continue;
        }
        $groupRecipients = [];
        foreach ($value as $item) {
            if (!is_array($item)) {
                continue;
            }
            $mail = trim((string) ($item['email'] ?? ''));
            if ($mail === '') {
                continue;
            }
            $groupRecipients[] = [
                'email' => $mail,
                'name' => trim((string) ($item['name'] ?? '')),
            ];
        }
        if ($groupRecipients !== []) {
            $resolved[$key] = $groupRecipients;
        }
    }

    return $resolved;
}

function send_http_mail_relay(
    string $relayUrl,
    string $relayToken,
    string $subject,
    string $plainBody,
    string $replyEmail = '',
    string $replyName = '',
    string $recipientGroup = 'default',
    int $timeout = 12
): array
{
    if ($relayUrl === '') {
        return [
            'ok' => false,
            'error' => 'Relay URL no configurado.',
        ];
    }
    if ($relayToken === '') {
        return [
            'ok' => false,
            'error' => 'Relay token no configurado.',
        ];
    }

    $payload = [
        'subject' => $subject,
        'plain_body' => $plainBody,
        'reply_email' => $replyEmail,
        'reply_name' => $replyName,
        'recipient_group' => $recipientGroup !== '' ? $recipientGroup : 'default',
        'sent_at' => date('c'),
    ];

    $ch = curl_init($relayUrl);
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_HTTPHEADER => [
            'Content-Type: application/json',
            'Accept: application/json',
            'Authorization: Bearer ' . $relayToken,
        ],
        CURLOPT_POSTFIELDS => json_encode($payload, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
        CURLOPT_TIMEOUT => $timeout > 0 ? $timeout : 12,
    ]);

    $raw = curl_exec($ch);
    if ($raw === false) {
        $error = curl_error($ch);
        curl_close($ch);
        return [
            'ok' => false,
            'error' => 'Relay cURL error: ' . $error,
        ];
    }

    $status = (int) curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    $decoded = json_decode($raw, true);
    if ($status < 200 || $status >= 300) {
        $message = is_array($decoded) ? (string) ($decoded['error'] ?? $decoded['message'] ?? 'HTTP error ' . $status) : 'HTTP error ' . $status;
        return [
            'ok' => false,
            'error' => 'Relay rechazo solicitud: ' . $message,
        ];
    }

    if (!is_array($decoded)) {
        return [
            'ok' => true,
            'error' => null,
        ];
    }

    if (!($decoded['ok'] ?? true)) {
        return [
            'ok' => false,
            'error' => (string) ($decoded['error'] ?? 'Relay respondió error.'),
        ];
    }

    return [
        'ok' => true,
        'error' => null,
    ];
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
    $relayUrl = trim((string) ($cfg['relay_url'] ?? ''));
    $relayToken = trim((string) ($cfg['relay_token'] ?? ''));
    if ($relayUrl !== '' && $relayToken !== '') {
        return send_http_mail_relay(
            $relayUrl,
            $relayToken,
            $subject,
            $plainBody,
            $replyEmail,
            $replyName,
            $recipientGroup,
            (int) ($cfg['relay_timeout'] ?? 12)
        );
    }

    $smtpAuth = (bool) ($cfg['smtp_auth'] ?? true);
    $password = trim((string) ($cfg['password'] ?? ''));
    if ($smtpAuth && ($password === '' || stripos($password, 'PON_AQUI') !== false)) {
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
        $mail->SMTPAuth = $smtpAuth;
        if ($smtpAuth) {
            $mail->Username = (string) $cfg['username'];
            $mail->Password = $password;
        }
        $mail->Port = (int) $cfg['port'];
        $mail->CharSet = 'UTF-8';

        $encryption = (string) ($cfg['encryption'] ?? 'tls');
        if ($encryption === 'ssl') {
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        } elseif ($encryption === 'tls') {
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        } else {
            $mail->SMTPSecure = '';
            $mail->SMTPAutoTLS = false;
        }

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
        if ((bool) ($cfg['mail_fallback_enabled'] ?? true)) {
            try {
                $mailFallback = new PHPMailer(true);
                $mailFallback->isMail();
                $mailFallback->CharSet = 'UTF-8';
                $mailFallback->setFrom((string) $cfg['from_email'], (string) $cfg['from_name']);
                foreach ($recipients as $recipient) {
                    if (!is_array($recipient)) {
                        continue;
                    }
                    $toEmail = trim((string) ($recipient['email'] ?? ''));
                    if ($toEmail === '') {
                        continue;
                    }
                    $toName = trim((string) ($recipient['name'] ?? ''));
                    $mailFallback->addAddress($toEmail, $toName);
                }
                if ($replyEmail !== '') {
                    $mailFallback->addReplyTo($replyEmail, $replyName !== '' ? $replyName : $replyEmail);
                }
                $mailFallback->isHTML(true);
                $mailFallback->Subject = $subject;
                $mailFallback->Body = $htmlBody;
                $mailFallback->AltBody = $plainBody;
                $mailFallback->send();

                return [
                    'ok' => true,
                    'error' => null,
                ];
            } catch (Exception $fallbackException) {
                return [
                    'ok' => false,
                    'error' => 'SMTP fallo: ' . $e->getMessage() . ' | mail() fallo: ' . $fallbackException->getMessage(),
                ];
            }
        }

        return [
            'ok' => false,
            'error' => $e->getMessage(),
        ];
    }
}
