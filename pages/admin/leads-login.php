<?php
declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Acceso Leads | UNEG</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@400;500;600;700&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/lucide@latest"></script>
  <style>
    body { font-family: 'Figtree', sans-serif; }
  </style>
</head>
<body class="min-h-screen bg-slate-50 text-slate-900">
  <main class="mx-auto flex min-h-screen max-w-5xl items-center justify-center px-4 py-10">
    <section class="w-full max-w-md rounded-3xl border border-slate-200 bg-white p-8 shadow-sm">
      <div class="flex items-center gap-3">
        <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-[#0b2c65] text-white">
          <i data-lucide="shield-check" class="h-6 w-6"></i>
        </div>
        <div>
          <h1 class="text-xl font-semibold text-[#0b2c65]">Acceso a Leads</h1>
          <p class="text-sm text-slate-500">Panel privado de formularios</p>
        </div>
      </div>

      <?php if ($error !== ''): ?>
        <div class="mt-6 rounded-xl border border-rose-200 bg-rose-50 px-4 py-3 text-sm text-rose-700">
          <?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?>
        </div>
      <?php endif; ?>

      <form class="mt-6 space-y-4" method="post" action="<?php echo $base; ?>/admin/leads-login">
        <label class="block text-sm font-medium text-slate-700" for="password">Contraseña</label>
        <div class="relative">
          <input id="password" name="password" type="password" required class="w-full rounded-xl border border-slate-200 px-4 py-3 pr-12 text-sm focus:border-[#0b2c65] focus:outline-none focus:ring-2 focus:ring-[#0b2c65]/20" placeholder="Ingresa tu contraseña">
          <span class="pointer-events-none absolute right-4 top-1/2 -translate-y-1/2 text-slate-400">
            <i data-lucide="key-round" class="h-5 w-5"></i>
          </span>
        </div>
        <button type="submit" class="w-full rounded-xl bg-[#0b2c65] px-4 py-3 text-sm font-semibold text-white shadow-sm transition hover:bg-[#09306e]">Entrar</button>
      </form>
    </section>
  </main>
  <script>
    lucide.createIcons();
  </script>
</body>
</html>
