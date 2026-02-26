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
  <title>Panel Admin | UNEG</title>
  <link rel="stylesheet" href="<?php echo $assetBase; ?>/_assets/css/output.css">
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
  <main class="mx-auto w-full max-w-7xl px-4 py-10">
    <section class="flex flex-wrap items-center justify-between gap-4">
      <div>
        <h1 class="text-3xl font-semibold text-[#0b2c65]">Panel de Formularios</h1>
        <p class="mt-1 text-sm text-slate-500">Administra leads, egresados y buzón del rector.</p>
      </div>
      <a class="inline-flex items-center gap-2 rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm font-semibold text-slate-700 hover:border-slate-300" href="<?php echo $base; ?>/admin/logout">
        <?php echo uneg_icon('log-out', 'h-4 w-4'); ?>
        Salir
      </a>
    </section>

    <section class="mt-8 grid grid-cols-1 gap-6 md:grid-cols-3">
      <a href="<?php echo $base; ?>/admin/leads" class="group rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition hover:-translate-y-1 hover:shadow-md">
        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#0b2c65] text-white">
          <?php echo uneg_icon('users', 'h-6 w-6'); ?>
        </div>
        <h2 class="mt-4 text-lg font-semibold text-[#0b2c65]">Leads</h2>
        <p class="mt-1 text-sm text-slate-600">Registros generales de formularios conectados al flujo actual.</p>
        <p class="mt-4 text-2xl font-bold text-slate-800"><?php echo $leadsCount; ?></p>
      </a>

      <a href="<?php echo $base; ?>/admin/egresados" class="group rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition hover:-translate-y-1 hover:shadow-md">
        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#14532d] text-white">
          <?php echo uneg_icon('graduation-cap', 'h-6 w-6'); ?>
        </div>
        <h2 class="mt-4 text-lg font-semibold text-[#0b2c65]">Egresados</h2>
        <p class="mt-1 text-sm text-slate-600">Tabla CRUD del formulario de egresados.</p>
        <p class="mt-4 text-2xl font-bold text-slate-800"><?php echo $egresadosCount; ?></p>
      </a>

      <a href="<?php echo $base; ?>/admin/buzon-rector" class="group rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition hover:-translate-y-1 hover:shadow-md">
        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#7c2d12] text-white">
          <?php echo uneg_icon('mailbox', 'h-6 w-6'); ?>
        </div>
        <h2 class="mt-4 text-lg font-semibold text-[#0b2c65]">Buzón del Rector</h2>
        <p class="mt-1 text-sm text-slate-600">Tabla CRUD de mensajes enviados al rector.</p>
        <p class="mt-4 text-2xl font-bold text-slate-800"><?php echo $buzonCount; ?></p>
      </a>
    </section>
  </main>
</body>
</html>
