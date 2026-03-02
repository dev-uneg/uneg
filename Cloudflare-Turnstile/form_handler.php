<?php
require_once __DIR__ . '/turnstile_config.php';

const DEFAULT_TURNSTILE_SECRET = '1x0000000000000000000000000000000AA';

// Valida el token recibido desde el widget contra el endpoint oficial de Cloudflare.
function verifyTurnstile(string $token, string $remoteIp = ''): array
{
    $secret = turnstileConfig('TURNSTILE_SECRET_KEY', DEFAULT_TURNSTILE_SECRET);
    $endpoint = 'https://challenges.cloudflare.com/turnstile/v0/siteverify';
    $payload = [
        'secret' => $secret,
        'response' => $token,
    ];

    if ($remoteIp !== '') {
        $payload['remoteip'] = $remoteIp;
    }

    // Request server-to-server exigido por Turnstile para confirmar que el token es valido.
    $ch = curl_init($endpoint);
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => http_build_query($payload),
        CURLOPT_HTTPHEADER => ['Content-Type: application/x-www-form-urlencoded'],
        CURLOPT_TIMEOUT => 10,
    ]);

    $raw = curl_exec($ch);

    if ($raw === false) {
        $error = curl_error($ch);
        curl_close($ch);
        return ['success' => false, 'error-codes' => ['curl-error: ' . $error]];
    }

    curl_close($ch);

    $decoded = json_decode($raw, true);
    if (!is_array($decoded)) {
        return ['success' => false, 'error-codes' => ['invalid-json-response']];
    }

    return $decoded;
}

// Evita acceso directo: este archivo solo procesa envios del formulario.
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

$nombre = trim((string)($_POST['nombre'] ?? ''));
$email = trim((string)($_POST['email'] ?? ''));
$token = trim((string)($_POST['cf-turnstile-response'] ?? ''));
$remoteIp = $_SERVER['REMOTE_ADDR'] ?? '';

$errors = [];
// Validaciones basicas del formulario antes de consultar a Cloudflare.
if ($nombre === '') {
    $errors[] = 'Nombre requerido.';
}
if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Email invalido.';
}
if ($token === '') {
    $errors[] = 'Completa el desafio de Turnstile.';
}

$result = null;
// Solo verifica Turnstile si no hubo errores locales.
if ($errors === []) {
    $result = verifyTurnstile($token, $remoteIp);
    if (!($result['success'] ?? false)) {
        $codes = $result['error-codes'] ?? [];
        $errors[] = 'Turnstile rechazo la validacion: ' . implode(', ', $codes);
    }
}
?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultado del formulario</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    body { font-family: 'Figtree', sans-serif; }
  </style>
</head>
<body class="min-h-screen bg-slate-100 text-slate-900">
  <main class="mx-auto max-w-xl px-4 py-12">
    <div class="rounded-2xl bg-white p-6 shadow-sm ring-1 ring-slate-200">
      <h1 class="text-2xl font-bold">Resultado</h1>

      <?php if ($errors !== []): ?>
        <div class="mt-4 rounded-lg bg-red-50 p-4 text-red-800 ring-1 ring-red-200">
          <p class="font-semibold">Hubo errores:</p>
          <ul class="mt-2 list-disc pl-5">
            <?php foreach ($errors as $err): ?>
              <li><?= htmlspecialchars($err, ENT_QUOTES, 'UTF-8') ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
      <?php else: ?>
        <div class="mt-4 rounded-lg bg-emerald-50 p-4 text-emerald-800 ring-1 ring-emerald-200">
          <p class="font-semibold">Turnstile validado correctamente.</p>
          <p class="mt-2 text-sm">Datos recibidos:</p>
          <ul class="mt-2 space-y-1 text-sm">
            <li><span class="font-semibold">Nombre:</span> <?= htmlspecialchars($nombre, ENT_QUOTES, 'UTF-8') ?></li>
            <li><span class="font-semibold">Email:</span> <?= htmlspecialchars($email, ENT_QUOTES, 'UTF-8') ?></li>
          </ul>
        </div>
      <?php endif; ?>

      <a
        href="index.php"
        class="mt-6 inline-block rounded-lg bg-slate-900 px-4 py-2 font-semibold text-white transition hover:bg-slate-700"
      >
        Volver
      </a>
    </div>
  </main>
</body>
</html>
