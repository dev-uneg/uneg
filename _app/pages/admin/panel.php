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
  <title>Panel Admin | UNEG</title>
  <link rel="stylesheet" href="<?php echo $assetBase; ?>/_assets/css/output.css">
  <link rel="stylesheet" href="<?php echo $assetBase; ?>/_assets/admin-fonts.css">
  <script defer src="<?php echo $assetBase; ?>/_assets/js/lucide-loader.js?v=4"></script>
</head>
<body class="min-h-screen bg-slate-50 text-slate-900">
  <?php require __DIR__ . '/partials/sidebar.php'; ?>
  <main class="admin-main">
    <?php
      $headerBadgeIcon = 'layout-grid';
      $headerBadgeText = 'Administración · UNEG';
      $headerBadgeClass = 'bg-slate-100 text-slate-700';
      $headerTitleIcon = 'layout-dashboard';
      $headerTitleIconClass = 'h-7 w-7 text-slate-700';
      $headerTitle = 'Panel de Formularios';
      $headerSubtitle = 'Administra leads, egresados y buzón del rector.';
      $headerActionsHtml = '<a class="inline-flex items-center gap-2 rounded-lg border border-slate-300 bg-white px-3 py-2 text-sm font-semibold text-slate-700 hover:bg-slate-100" href="' . htmlspecialchars($base, ENT_QUOTES, 'UTF-8') . '/admin/logout">' . uneg_icon('log-out', 'h-4 w-4') . 'Salir</a>';
      require __DIR__ . '/partials/page-header.php';
    ?>

    <?php if (!empty($dbError)): ?>
      <section class="mt-6 rounded-2xl border border-amber-200 bg-amber-50 px-4 py-3 text-sm text-amber-800">
        <?php echo htmlspecialchars((string) $dbError, ENT_QUOTES, 'UTF-8'); ?>
      </section>
    <?php endif; ?>

    <section class="mt-8 grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
      <a href="<?php echo $base; ?>/admin/leads" class="group rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition hover:-translate-y-1 hover:shadow-md">
        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-emerald-600 text-white">
          <?php echo uneg_icon('users', 'h-6 w-6'); ?>
        </div>
        <h2 class="mt-4 text-lg font-semibold text-slate-900">Leads</h2>
        <p class="mt-1 text-sm text-slate-600">Registros enviados desde formularios de captación de UNEG.</p>
        <p class="mt-4 text-2xl font-bold text-slate-800"><?php echo $leadsCount; ?></p>
      </a>

      <a href="<?php echo $base; ?>/admin/buzon-rector" class="group rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition hover:-translate-y-1 hover:shadow-md">
        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-sky-700 text-white">
          <?php echo uneg_icon('mailbox', 'h-6 w-6'); ?>
        </div>
        <h2 class="mt-4 text-lg font-semibold text-slate-900">Buzón del Rector</h2>
        <p class="mt-1 text-sm text-slate-600">Mensajes enviados desde el formulario institucional.</p>
        <p class="mt-4 text-2xl font-bold text-slate-800"><?php echo $buzonCount; ?></p>
      </a>

      <a href="<?php echo $base; ?>/admin/egresados" class="group rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition hover:-translate-y-1 hover:shadow-md">
        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-indigo-700 text-white">
          <?php echo uneg_icon('graduation-cap', 'h-6 w-6'); ?>
        </div>
        <h2 class="mt-4 text-lg font-semibold text-slate-900">Egresados</h2>
        <p class="mt-1 text-sm text-slate-600">Tabla CRUD del formulario de egresados.</p>
        <p class="mt-4 text-2xl font-bold text-slate-800"><?php echo $egresadosCount; ?></p>
      </a>

      <a href="<?php echo $base; ?>/admin/reports" class="group rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition hover:-translate-y-1 hover:shadow-md">
        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-emerald-700 text-white">
          <?php echo uneg_icon('file-text', 'h-6 w-6'); ?>
        </div>
        <h2 class="mt-4 text-lg font-semibold text-slate-900">Reportes</h2>
        <p class="mt-1 text-sm text-slate-600">Listado de reportes mensuales de performance y CRO para UNEG.</p>
        <p class="mt-4 text-2xl font-bold text-slate-800"><?php echo $reportsCount; ?></p>
      </a>

    </section>
  </main>
</body>
</html>
