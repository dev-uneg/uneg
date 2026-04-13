<?php
declare(strict_types=1);

$engagementRate = $summary['page_views'] > 0
    ? (($summary['engaged_10s'] / $summary['page_views']) * 100)
    : 0.0;
$scrollDepthRate = $summary['page_views'] > 0
    ? (($summary['scroll_90'] / $summary['page_views']) * 100)
    : 0.0;
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Reporte Engagement | <?php echo htmlspecialchars($monthLabel, ENT_QUOTES, 'UTF-8'); ?></title>
  <link rel="stylesheet" href="<?php echo $base; ?>/_assets/css/output.css">
  <link rel="stylesheet" href="<?php echo $base; ?>/_assets/admin-fonts.css">
  <script defer src="<?php echo $base; ?>/_assets/js/lucide-loader.js?v=4"></script>
</head>
<body class="min-h-screen bg-slate-50 text-slate-900">
  <?php require __DIR__ . '/../partials/sidebar.php'; ?>
  <main class="admin-main">
    <?php
      ob_start();
    ?>
    <form method="get" action="<?php echo $base; ?>/admin/reports/engagement-mensual" class="inline-flex items-center gap-2 rounded-xl border border-slate-200 bg-white px-3 py-2 text-sm">
      <label for="ym" class="font-semibold text-slate-600">Periodo</label>
      <input id="ym" name="ym" type="month" value="<?php echo htmlspecialchars($ym, ENT_QUOTES, 'UTF-8'); ?>" class="rounded-md border border-slate-200 px-2 py-1 text-slate-700">
      <button type="submit" class="rounded-md bg-[#0b2c65] px-3 py-1.5 text-xs font-semibold text-white hover:bg-[#092653]">Ver</button>
    </form>
    <a href="<?php echo $base; ?>/admin/reports" class="inline-flex items-center gap-2 rounded-lg border border-slate-300 bg-white px-3 py-2 text-sm font-semibold text-slate-700 hover:bg-slate-100">
      <i data-lucide="file-text" class="h-4 w-4"></i>
      Reportes
    </a>
    <?php
      $headerActionsHtml = (string) ob_get_clean();
      $headerBadgeIcon = 'line-chart';
      $headerBadgeText = 'Métricas Web · Engagement';
      $headerBadgeClass = 'bg-teal-100 text-teal-800';
      $headerTitleIcon = 'line-chart';
      $headerTitleIconClass = 'h-7 w-7 text-teal-700';
      $headerTitle = 'Reporte Mensual de Engagement';
      $headerSubtitle = $monthLabel . ' · ' . $periodLabel;
      require __DIR__ . '/../partials/page-header.php';
    ?>

    <?php if ($dbError !== ''): ?>
      <section class="mt-6 rounded-2xl border border-rose-200 bg-rose-50 px-4 py-3 text-sm text-rose-800">
        <?php echo htmlspecialchars($dbError, ENT_QUOTES, 'UTF-8'); ?>
      </section>
    <?php endif; ?>

    <section class="mt-8 grid grid-cols-1 gap-4 md:grid-cols-2 xl:grid-cols-5">
      <article class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
        <p class="text-xs font-semibold uppercase tracking-wide text-slate-500">Page Views</p>
        <p class="mt-2 text-3xl font-bold text-slate-900"><?php echo (int) $summary['page_views']; ?></p>
      </article>
      <article class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
        <p class="text-xs font-semibold uppercase tracking-wide text-slate-500">Engaged 10s</p>
        <p class="mt-2 text-3xl font-bold text-emerald-700"><?php echo (int) $summary['engaged_10s']; ?></p>
      </article>
      <article class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
        <p class="text-xs font-semibold uppercase tracking-wide text-slate-500">Tasa de engagement</p>
        <p class="mt-2 text-3xl font-bold text-slate-900"><?php echo number_format($engagementRate, 1); ?>%</p>
      </article>
      <article class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
        <p class="text-xs font-semibold uppercase tracking-wide text-slate-500">Scroll 90%</p>
        <p class="mt-2 text-3xl font-bold text-slate-900"><?php echo (int) $summary['scroll_90']; ?></p>
        <p class="mt-2 text-xs text-slate-500"><?php echo number_format($scrollDepthRate, 1); ?>% del total de views</p>
      </article>
      <article class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
        <p class="text-xs font-semibold uppercase tracking-wide text-slate-500">Tiempo promedio</p>
        <p class="mt-2 text-3xl font-bold text-slate-900"><?php echo number_format((float) $summary['avg_time_sec'], 1); ?>s</p>
        <p class="mt-2 text-xs text-slate-500"><?php echo (int) $summary['time_samples']; ?> muestras válidas</p>
      </article>
    </section>

    <section class="mt-6 grid grid-cols-1 gap-6 xl:grid-cols-3">
      <article class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm xl:col-span-2">
        <h2 class="text-lg font-semibold text-slate-800">Tendencia diaria</h2>
        <p class="mt-1 text-xs text-slate-500">Comparativo de <code>page_view</code> vs <code>engaged_10s</code>.</p>
        <div class="mt-4 h-[300px]"><canvas id="engagementDailyChart"></canvas></div>
      </article>
      <article class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
        <h2 class="text-lg font-semibold text-slate-800">Cobertura</h2>
        <div class="mt-4 space-y-3 text-sm text-slate-700">
          <div class="rounded-lg border border-slate-200 bg-slate-50 px-3 py-2">
            <p class="text-xs uppercase tracking-wide text-slate-500">Páginas con eventos</p>
            <p class="mt-1 text-2xl font-bold text-slate-900"><?php echo (int) $summary['pages_tracked']; ?></p>
          </div>
          <div class="rounded-lg border border-slate-200 bg-slate-50 px-3 py-2">
            <p class="text-xs uppercase tracking-wide text-slate-500">Scroll 50%</p>
            <p class="mt-1 text-2xl font-bold text-slate-900"><?php echo (int) $summary['scroll_50']; ?></p>
          </div>
          <div class="rounded-lg border border-slate-200 bg-slate-50 px-3 py-2">
            <p class="text-xs uppercase tracking-wide text-slate-500">Rango de limpieza</p>
            <p class="mt-1 text-sm font-semibold text-slate-700">Crudo retenido 90 días</p>
          </div>
        </div>
      </article>
    </section>

    <section class="mt-6 overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
      <div class="border-b border-slate-200 px-5 py-4">
        <h2 class="text-lg font-semibold text-slate-800">Top páginas por engagement</h2>
      </div>
      <div class="overflow-x-auto">
        <table class="min-w-full text-left text-sm">
          <thead class="bg-slate-100 text-slate-700">
            <tr>
              <th class="px-4 py-3 font-semibold">Página</th>
              <th class="px-4 py-3 font-semibold">Page Views</th>
              <th class="px-4 py-3 font-semibold">Engaged 10s</th>
              <th class="px-4 py-3 font-semibold">Scroll 90%</th>
              <th class="px-4 py-3 font-semibold">Tiempo prom.</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-slate-100">
            <?php if ($topPages === []): ?>
              <tr><td colspan="5" class="px-4 py-4 text-slate-500">Sin datos de engagement para el periodo.</td></tr>
            <?php endif; ?>
            <?php foreach ($topPages as $row): ?>
              <tr>
                <td class="px-4 py-3 font-medium text-slate-800"><?php echo htmlspecialchars((string) $row['page_path'], ENT_QUOTES, 'UTF-8'); ?></td>
                <td class="px-4 py-3 font-semibold text-slate-900"><?php echo (int) $row['page_views']; ?></td>
                <td class="px-4 py-3"><?php echo (int) $row['engaged_10s']; ?></td>
                <td class="px-4 py-3"><?php echo (int) $row['scroll_90']; ?></td>
                <td class="px-4 py-3"><?php echo number_format((float) $row['avg_time_sec'], 1); ?>s</td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </section>
  </main>

  <script>
    const dailyLabels = <?php echo json_encode($dailyLabels, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); ?>;
    const dailyPageViews = <?php echo json_encode($dailyPageViews, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); ?>;
    const dailyEngaged = <?php echo json_encode($dailyEngaged, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); ?>;

    new Chart(document.getElementById('engagementDailyChart'), {
      type: 'line',
      data: {
        labels: dailyLabels,
        datasets: [
          {
            label: 'Page Views',
            data: dailyPageViews,
            borderColor: '#0b2c65',
            backgroundColor: 'rgba(11, 44, 101, 0.12)',
            fill: true,
            tension: 0.35,
            borderWidth: 2
          },
          {
            label: 'Engaged 10s',
            data: dailyEngaged,
            borderColor: '#0d9488',
            backgroundColor: 'rgba(13, 148, 136, 0.10)',
            fill: true,
            tension: 0.35,
            borderWidth: 2
          }
        ]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        interaction: {
          mode: 'index',
          intersect: false
        },
        plugins: {
          legend: { position: 'bottom' }
        },
        scales: {
          x: { grid: { color: 'rgba(148, 163, 184, 0.2)' } },
          y: { beginAtZero: true, grid: { color: 'rgba(148, 163, 184, 0.2)' } }
        }
      }
    });
  </script>
</body>
</html>
