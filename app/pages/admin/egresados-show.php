<?php
declare(strict_types=1);
$base = rtrim(dirname($_SERVER['SCRIPT_NAME'] ?? '/'), '/');
$base = $base === '.' ? '' : $base;
$assetBase = $base === '' ? '' : $base;
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Detalle Egresado | Admin UNEG</title>
  <link rel="stylesheet" href="<?php echo $assetBase; ?>/assets/css/output.css">
  <style>
    @font-face {
      font-family: 'Figtree';
      src: url('<?php echo $assetBase; ?>/assets/fonts/Figtree-wght.ttf') format('truetype');
      font-weight: 100 900;
      font-style: normal;
      font-display: swap;
    }
    @font-face {
      font-family: 'Figtree';
      src: url('<?php echo $assetBase; ?>/assets/fonts/Figtree-Italic-wght.ttf') format('truetype');
      font-weight: 100 900;
      font-style: italic;
      font-display: swap;
    }
    body { font-family: 'Figtree', sans-serif; }
  </style>
</head>
<body class="min-h-screen bg-slate-50 text-slate-900">
  <main class="mx-auto w-full max-w-5xl px-4 py-10">
    <section class="flex flex-wrap items-center justify-between gap-4">
      <div>
        <h1 class="text-2xl font-semibold text-[#0b2c65]">Detalle de egresado</h1>
        <p class="mt-1 text-sm text-slate-500">Consulta de solo lectura</p>
      </div>
      <a class="rounded-lg border border-slate-200 bg-white px-4 py-2 text-sm font-semibold text-slate-700 hover:border-slate-300" href="<?php echo $base; ?>/admin/egresados">Volver</a>
    </section>

    <section class="mt-6 rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
      <dl class="grid grid-cols-1 gap-4 sm:grid-cols-2">
        <div><dt class="text-xs font-semibold uppercase tracking-wide text-slate-500">Fecha</dt><dd class="mt-1 text-sm text-slate-800"><?php echo htmlspecialchars(format_mx_datetime((string) ($row['created_at'] ?? '')), ENT_QUOTES, 'UTF-8'); ?></dd></div>
        <div><dt class="text-xs font-semibold uppercase tracking-wide text-slate-500">Nombre completo</dt><dd class="mt-1 text-sm text-slate-800"><?php echo htmlspecialchars(trim(($row['nombre'] ?? '') . ' ' . ($row['apellido_paterno'] ?? '') . ' ' . ($row['apellido_materno'] ?? '')), ENT_QUOTES, 'UTF-8'); ?></dd></div>
        <div><dt class="text-xs font-semibold uppercase tracking-wide text-slate-500">Correo</dt><dd class="mt-1 text-sm text-slate-800"><?php echo htmlspecialchars((string) ($row['correo'] ?? ''), ENT_QUOTES, 'UTF-8'); ?></dd></div>
        <div><dt class="text-xs font-semibold uppercase tracking-wide text-slate-500">Teléfono</dt><dd class="mt-1 text-sm text-slate-800"><?php echo htmlspecialchars((string) ($row['telefono'] ?? ''), ENT_QUOTES, 'UTF-8'); ?></dd></div>
        <div><dt class="text-xs font-semibold uppercase tracking-wide text-slate-500">Nivel de egreso</dt><dd class="mt-1 text-sm text-slate-800"><?php echo htmlspecialchars((string) ($row['nivel_egreso'] ?? ''), ENT_QUOTES, 'UTF-8'); ?></dd></div>
        <div><dt class="text-xs font-semibold uppercase tracking-wide text-slate-500">Carrera de egreso</dt><dd class="mt-1 text-sm text-slate-800"><?php echo htmlspecialchars((string) ($row['carrera_egreso'] ?? ''), ENT_QUOTES, 'UTF-8'); ?></dd></div>
        <div><dt class="text-xs font-semibold uppercase tracking-wide text-slate-500">Año de ingreso</dt><dd class="mt-1 text-sm text-slate-800"><?php echo htmlspecialchars((string) ($row['anio_ingreso'] ?? ''), ENT_QUOTES, 'UTF-8'); ?></dd></div>
        <div><dt class="text-xs font-semibold uppercase tracking-wide text-slate-500">Año de egreso</dt><dd class="mt-1 text-sm text-slate-800"><?php echo htmlspecialchars((string) ($row['anio_egreso'] ?? ''), ENT_QUOTES, 'UTF-8'); ?></dd></div>
        <div><dt class="text-xs font-semibold uppercase tracking-wide text-slate-500">Actualmente trabajando</dt><dd class="mt-1 text-sm text-slate-800"><?php echo (($row['trabajando'] ?? '') === 'si') ? 'Sí' : 'No'; ?></dd></div>
        <div><dt class="text-xs font-semibold uppercase tracking-wide text-slate-500">Empresa</dt><dd class="mt-1 text-sm text-slate-800"><?php echo htmlspecialchars((string) ($row['empresa'] ?? ''), ENT_QUOTES, 'UTF-8'); ?></dd></div>
        <div class="sm:col-span-2"><dt class="text-xs font-semibold uppercase tracking-wide text-slate-500">Cargo</dt><dd class="mt-1 text-sm text-slate-800"><?php echo htmlspecialchars((string) ($row['cargo'] ?? ''), ENT_QUOTES, 'UTF-8'); ?></dd></div>
      </dl>
    </section>
  </main>
</body>
</html>
