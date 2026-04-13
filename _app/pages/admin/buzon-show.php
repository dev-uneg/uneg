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
  <title>Detalle Buzón del Rector | Admin UNEG</title>
  <link rel="stylesheet" href="<?php echo $assetBase; ?>/_assets/css/output.css">
  <link rel="stylesheet" href="<?php echo $assetBase; ?>/_assets/admin-fonts.css">
  <script defer src="<?php echo $assetBase; ?>/_assets/js/lucide-loader.js?v=4"></script>
</head>
<body class="min-h-screen bg-slate-50 text-slate-900">
  <?php require __DIR__ . '/partials/sidebar.php'; ?>
  <main class="admin-main">
    <?php
      $headerBadgeIcon = 'mail-search';
      $headerBadgeText = 'Detalle · Buzón';
      $headerBadgeClass = 'bg-sky-100 text-sky-800';
      $headerTitleIcon = 'message-square-text';
      $headerTitleIconClass = 'h-7 w-7 text-sky-700';
      $headerTitle = 'Detalle de mensaje';
      $headerSubtitle = 'Consulta completa del mensaje institucional.';
      $headerActionsHtml = '<a class="inline-flex items-center gap-2 rounded-lg border border-slate-300 bg-white px-3 py-2 text-sm font-semibold text-slate-700 hover:bg-slate-100" href="' . htmlspecialchars($base, ENT_QUOTES, 'UTF-8') . '/admin/buzon-rector">' . uneg_icon('arrow-left', 'h-4 w-4') . 'Volver</a>';
      require __DIR__ . '/partials/page-header.php';
    ?>

    <section class="mt-6 rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
      <dl class="grid grid-cols-1 gap-4 sm:grid-cols-2">
        <div><dt class="text-xs font-semibold uppercase tracking-wide text-slate-500">Fecha</dt><dd class="mt-1 text-sm text-slate-800"><?php echo htmlspecialchars(format_mx_datetime((string) ($row['created_at'] ?? '')), ENT_QUOTES, 'UTF-8'); ?></dd></div>
        <div><dt class="text-xs font-semibold uppercase tracking-wide text-slate-500">Nombre</dt><dd class="mt-1 text-sm text-slate-800"><?php echo htmlspecialchars((string) ($row['nombre'] ?? ''), ENT_QUOTES, 'UTF-8'); ?></dd></div>
        <div><dt class="text-xs font-semibold uppercase tracking-wide text-slate-500">Correo</dt><dd class="mt-1 text-sm text-slate-800"><?php echo htmlspecialchars((string) ($row['correo'] ?? ''), ENT_QUOTES, 'UTF-8'); ?></dd></div>
        <div><dt class="text-xs font-semibold uppercase tracking-wide text-slate-500">Asunto</dt><dd class="mt-1 text-sm text-slate-800"><?php echo htmlspecialchars((string) ($row['asunto'] ?? ''), ENT_QUOTES, 'UTF-8'); ?></dd></div>
        <div class="sm:col-span-2"><dt class="text-xs font-semibold uppercase tracking-wide text-slate-500">Mensaje</dt><dd class="mt-1 text-sm text-slate-800 whitespace-pre-wrap"><?php echo htmlspecialchars((string) ($row['mensaje'] ?? ''), ENT_QUOTES, 'UTF-8'); ?></dd></div>
      </dl>
    </section>
  </main>
</body>
</html>
