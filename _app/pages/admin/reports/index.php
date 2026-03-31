<?php
declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Reportes | UNEG</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            sans: ['Figtree', 'ui-sans-serif', 'system-ui', 'sans-serif']
          }
        }
      }
    };
  </script>
  <style>
    @font-face {
      font-family: 'Figtree';
      src: url('<?php echo $base; ?>/_assets/fonts/Figtree-wght.ttf') format('truetype');
      font-weight: 100 900;
      font-style: normal;
      font-display: swap;
    }
    @font-face {
      font-family: 'Figtree';
      src: url('<?php echo $base; ?>/_assets/fonts/Figtree-Italic-wght.ttf') format('truetype');
      font-weight: 100 900;
      font-style: italic;
      font-display: swap;
    }
  </style>
</head>
<body class="min-h-screen bg-slate-50 text-slate-900">
  <div id="page-loader" class="fixed inset-0 z-50 flex items-center justify-center bg-slate-50/95 backdrop-blur-sm transition-opacity duration-300">
    <div class="flex flex-col items-center gap-4">
      <div class="relative h-16 w-16">
        <span class="absolute inset-0 rounded-full border-4 border-slate-200"></span>
        <span class="absolute inset-0 rounded-full border-4 border-transparent border-t-[#0b2c65] animate-spin"></span>
      </div>
      <div class="text-center">
        <p class="text-sm font-semibold text-slate-700">Cargando reportes</p>
        <p class="mt-1 text-xs text-slate-500">Preparando datos y métricas...</p>
      </div>
    </div>
  </div>

  <main id="page-content" class="mx-auto w-full max-w-7xl px-4 py-10 opacity-0 transition-opacity duration-300">
    <section class="flex flex-wrap items-center justify-between gap-4">
      <div>
        <h1 class="text-3xl font-semibold text-[#0b2c65]">Reportes</h1>
        <p class="mt-1 text-sm text-slate-600">Listado de reportes mensuales de performance web y CRO.</p>
      </div>
      <div class="flex items-center gap-2">
        <a href="<?php echo $base; ?>/admin/panel" class="inline-flex items-center gap-2 rounded-lg border border-slate-300 bg-white px-3 py-2 text-sm font-semibold text-slate-700 hover:bg-slate-100">
          <i data-lucide="layout-grid" class="h-4 w-4"></i>
          Panel
        </a>
        <a href="<?php echo $base; ?>/admin/logout" class="inline-flex items-center gap-2 rounded-lg border border-slate-300 bg-white px-3 py-2 text-sm font-semibold text-slate-700 hover:bg-slate-100">
          <i data-lucide="log-out" class="h-4 w-4"></i>
          Salir
        </a>
      </div>
    </section>

    <?php if ($dbError !== ''): ?>
      <section class="mt-6 rounded-2xl border border-rose-200 bg-rose-50 px-4 py-3 text-sm text-rose-800">
        <?php echo htmlspecialchars($dbError, ENT_QUOTES, 'UTF-8'); ?>
      </section>
    <?php endif; ?>

    <section class="mt-8 overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
      <div class="border-b border-slate-200 px-5 py-4">
        <h2 class="text-lg font-semibold text-slate-800">Histórico de reportes</h2>
      </div>
      <div class="overflow-x-auto">
        <table class="min-w-full text-left text-sm">
          <thead class="bg-slate-100 text-slate-700">
            <tr>
              <th class="px-4 py-3 font-semibold">Reporte</th>
              <th class="px-4 py-3 font-semibold">Periodo</th>
              <th class="px-4 py-3 font-semibold">Leads</th>
              <th class="px-4 py-3 font-semibold">Estado</th>
              <th class="px-4 py-3 font-semibold">Acción</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-slate-100">
            <?php foreach ($reportRows as $report): ?>
              <tr class="hover:bg-slate-50">
                <td class="px-4 py-3 font-medium text-slate-900"><?php echo htmlspecialchars((string) $report['title'], ENT_QUOTES, 'UTF-8'); ?></td>
                <td class="px-4 py-3 text-slate-700"><?php echo htmlspecialchars((string) $report['period'], ENT_QUOTES, 'UTF-8'); ?></td>
                <td class="px-4 py-3 text-slate-700"><?php echo (int) $report['leads_total']; ?></td>
                <td class="px-4 py-3">
                  <span class="inline-flex rounded-full px-3 py-1 text-xs font-semibold <?php echo htmlspecialchars((string) $report['status_class'], ENT_QUOTES, 'UTF-8'); ?>">
                    <?php echo htmlspecialchars((string) $report['status'], ENT_QUOTES, 'UTF-8'); ?>
                  </span>
                </td>
                <td class="px-4 py-3">
                  <a href="<?php echo htmlspecialchars((string) $report['url'], ENT_QUOTES, 'UTF-8'); ?>" class="inline-flex items-center gap-2 rounded-lg bg-[#0b2c65] px-3 py-2 text-xs font-semibold text-white hover:bg-[#0a2552]">
                    <i data-lucide="file-text" class="h-4 w-4"></i>
                    Abrir reporte
                  </a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </section>
  </main>

  <script src="https://unpkg.com/lucide@0.468.0/dist/umd/lucide.min.js"></script>
  <script>
    function hidePageLoader() {
      const loader = document.getElementById('page-loader');
      const content = document.getElementById('page-content');
      if (content) content.classList.remove('opacity-0');
      if (!loader) return;
      loader.classList.add('opacity-0');
      setTimeout(() => loader.remove(), 300);
    }

    window.addEventListener('load', hidePageLoader);
    setTimeout(hidePageLoader, 1200);
    window.lucide?.createIcons();
  </script>
</body>
</html>
