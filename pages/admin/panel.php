<?php
declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Panel Admin | UNEG</title>
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
  <main class="mx-auto w-full max-w-7xl px-4 py-10">
    <section class="flex flex-wrap items-center justify-between gap-4">
      <div>
        <h1 class="text-3xl font-semibold text-[#0b2c65]">Panel de Formularios</h1>
        <p class="mt-1 text-sm text-slate-500">Administra leads, egresados y buzón del rector.</p>
      </div>
      <a class="inline-flex items-center gap-2 rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm font-semibold text-slate-700 hover:border-slate-300" href="<?php echo $base; ?>/admin/logout">
        <i data-lucide="log-out" class="h-4 w-4"></i>
        Salir
      </a>
    </section>

    <section class="mt-8 grid grid-cols-1 gap-6 md:grid-cols-3">
      <a href="<?php echo $base; ?>/admin/leads" class="group rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition hover:-translate-y-1 hover:shadow-md">
        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#0b2c65] text-white">
          <i data-lucide="users" class="h-6 w-6"></i>
        </div>
        <h2 class="mt-4 text-lg font-semibold text-[#0b2c65]">Leads</h2>
        <p class="mt-1 text-sm text-slate-600">Registros generales de formularios conectados al flujo actual.</p>
        <p class="mt-4 text-2xl font-bold text-slate-800"><?php echo $leadsCount; ?></p>
      </a>

      <a href="<?php echo $base; ?>/admin/egresados" class="group rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition hover:-translate-y-1 hover:shadow-md">
        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#14532d] text-white">
          <i data-lucide="graduation-cap" class="h-6 w-6"></i>
        </div>
        <h2 class="mt-4 text-lg font-semibold text-[#0b2c65]">Egresados</h2>
        <p class="mt-1 text-sm text-slate-600">Tabla CRUD del formulario de egresados.</p>
        <p class="mt-4 text-2xl font-bold text-slate-800"><?php echo $egresadosCount; ?></p>
      </a>

      <a href="<?php echo $base; ?>/admin/buzon-rector" class="group rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition hover:-translate-y-1 hover:shadow-md">
        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#7c2d12] text-white">
          <i data-lucide="mailbox" class="h-6 w-6"></i>
        </div>
        <h2 class="mt-4 text-lg font-semibold text-[#0b2c65]">Buzón del Rector</h2>
        <p class="mt-1 text-sm text-slate-600">Tabla CRUD de mensajes enviados al rector.</p>
        <p class="mt-4 text-2xl font-bold text-slate-800"><?php echo $buzonCount; ?></p>
      </a>
    </section>
  </main>
  <script>
    lucide.createIcons();
  </script>
</body>
</html>
