<?php
declare(strict_types=1);
$base = rtrim(dirname($_SERVER['SCRIPT_NAME'] ?? '/'), '/');
$base = $base === '.' ? '' : $base;
$assetBase = $base === '' ? '' : $base;
require_once __DIR__ . '/../../helpers/icons.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Acceso Admin | UNEG</title>
  <link rel="stylesheet" href="<?php echo $assetBase; ?>/_assets/css/output.css">
  <link rel="stylesheet" href="<?php echo $assetBase; ?>/_assets/vendor/remixicon/remixicon.min.css">
  <style>
    @font-face {
      font-family: 'Figtree';
      src: url('<?php echo $assetBase; ?>/_assets/fonts/Figtree-wght.ttf') format('truetype');
      font-weight: 100 900;
      font-style: normal;
      font-display: swap;
    }
    @font-face {
      font-family: 'Figtree';
      src: url('<?php echo $assetBase; ?>/_assets/fonts/Figtree-Italic-wght.ttf') format('truetype');
      font-weight: 100 900;
      font-style: italic;
      font-display: swap;
    }
    body { font-family: 'Figtree', sans-serif; }
  </style>
</head>
<body class="min-h-screen bg-slate-50 text-slate-900">
  <main class="mx-auto flex min-h-screen max-w-5xl items-center justify-center px-4 py-10">
    <section class="w-full max-w-md rounded-3xl border border-slate-200 bg-white p-8 shadow-sm">
      <div class="flex items-center gap-3">
        <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-[#0b2c65] text-white">
          <?php echo uneg_icon('shield-check', 'h-6 w-6'); ?>
        </div>
        <div>
          <h1 class="text-xl font-semibold text-[#0b2c65]">Acceso Admin</h1>
          <p class="text-sm text-slate-500">Panel privado de formularios</p>
        </div>
      </div>

      <?php if ($error !== ''): ?>
        <div class="mt-6 rounded-xl border border-rose-200 bg-rose-50 px-4 py-3 text-sm text-rose-700">
          <?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?>
          <?php if (!empty($waitSeconds)): ?>
            <div id="login-rate-wait" class="mt-2 font-semibold" data-seconds="<?php echo (int) $waitSeconds; ?>">
              Tiempo restante: <?php echo (int) $waitSeconds; ?>s
            </div>
          <?php endif; ?>
        </div>
      <?php endif; ?>

      <form class="mt-6 space-y-4" method="post" action="<?php echo $base; ?>/admin/login">
        <label class="block text-sm font-medium text-slate-700" for="password">Contraseña</label>
        <div class="relative">
          <input id="password" name="password" type="password" required class="w-full rounded-xl border border-slate-200 px-4 py-3 pr-12 text-sm focus:border-[#0b2c65] focus:outline-none focus:ring-2 focus:ring-[#0b2c65]/20" placeholder="Ingresa tu contraseña">
          <span class="pointer-events-none absolute right-4 top-1/2 -translate-y-1/2 text-slate-400">
            <?php echo uneg_icon('key-round', 'h-5 w-5'); ?>
          </span>
        </div>
        <button type="submit" class="w-full rounded-xl bg-[#0b2c65] px-4 py-3 text-sm font-semibold text-white shadow-sm transition hover:bg-[#09306e]">Entrar</button>
      </form>
    </section>
  </main>
  <script>
    (function () {
      const el = document.getElementById('login-rate-wait');
      if (!el) return;
      let remaining = Number(el.getAttribute('data-seconds') || 0);
      if (!Number.isFinite(remaining) || remaining <= 0) return;
      const timer = setInterval(() => {
        remaining -= 1;
        if (remaining <= 0) {
          el.textContent = 'Ya puedes volver a intentar.';
          clearInterval(timer);
          return;
        }
        el.textContent = 'Tiempo restante: ' + remaining + 's';
      }, 1000);
    })();
  </script>
</body>
</html>
