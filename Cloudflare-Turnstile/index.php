<?php
require_once __DIR__ . '/turnstile_config.php';

$siteKey = turnstileConfig('TURNSTILE_SITE_KEY', '1x00000000000000000000AA');
?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Test Cloudflare Turnstile</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>
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
      <h1 class="text-2xl font-bold">Test Cloudflare Turnstile</h1>
      <p class="mt-2 text-sm text-slate-600">
        Formulario de prueba para validar Turnstile desde PHP.
      </p>

      <div class="mt-4 rounded-lg bg-amber-50 p-3 text-sm text-amber-800 ring-1 ring-amber-200">
        Usa variables de entorno: <code class="font-mono">TURNSTILE_SITE_KEY</code> y
        <code class="font-mono">TURNSTILE_SECRET_KEY</code>. Si no existen, el demo usa claves de prueba de Cloudflare.
      </div>

      <form class="mt-6 space-y-4" method="POST" action="form_handler.php">
        <div>
          <label for="nombre" class="mb-1 block text-sm font-semibold">Nombre</label>
          <input
            id="nombre"
            name="nombre"
            type="text"
            required
            class="w-full rounded-lg border border-slate-300 px-3 py-2 outline-none transition focus:border-blue-500 focus:ring-2 focus:ring-blue-200"
            placeholder="Tu nombre"
          >
        </div>

        <div>
          <label for="email" class="mb-1 block text-sm font-semibold">Email</label>
          <input
            id="email"
            name="email"
            type="email"
            required
            class="w-full rounded-lg border border-slate-300 px-3 py-2 outline-none transition focus:border-blue-500 focus:ring-2 focus:ring-blue-200"
            placeholder="correo@ejemplo.com"
          >
        </div>

        <div class="cf-turnstile" data-sitekey="<?= htmlspecialchars($siteKey, ENT_QUOTES, 'UTF-8') ?>"></div>

        <button
          type="submit"
          class="w-full rounded-lg bg-slate-900 px-4 py-2 font-semibold text-white transition hover:bg-slate-700"
        >
          Enviar prueba
        </button>
      </form>
    </div>
  </main>
</body>
</html>
