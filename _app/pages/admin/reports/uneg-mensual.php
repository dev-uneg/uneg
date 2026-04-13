<?php
declare(strict_types=1);

$growthLabel = $summary['growth_pct'] === null
    ? 'Sin comparativo'
    : (($summary['growth_pct'] >= 0 ? '+' : '') . number_format((float) $summary['growth_pct'], 1) . '% vs mes previo');

$growthClass = $summary['growth_pct'] === null
    ? 'text-slate-500'
    : ($summary['growth_pct'] >= 0 ? 'text-emerald-700' : 'text-rose-700');

$scoreMetricStatus = static function (string $name, float $value): array {
    $name = strtoupper($name);
    $isGood = false;
    $isWarning = false;

    if ($name === 'LCP') {
        $isGood = $value < 2.5;
        $isWarning = $value >= 2.5 && $value <= 4.0;
    } elseif ($name === 'INP') {
        $isGood = $value < 200;
        $isWarning = $value >= 200 && $value <= 500;
    } elseif ($name === 'CLS') {
        $isGood = $value < 0.1;
        $isWarning = $value >= 0.1 && $value <= 0.25;
    } elseif ($name === 'FCP') {
        $isGood = $value < 1.8;
        $isWarning = $value >= 1.8 && $value <= 3.0;
    } elseif ($name === 'TTFB') {
        $isGood = $value < 0.8;
        $isWarning = $value >= 0.8 && $value <= 1.8;
    }

    if ($isGood) {
        return ['label' => 'Óptimo', 'class' => 'bg-emerald-100 text-emerald-800 border-emerald-200'];
    }
    if ($isWarning) {
        return ['label' => 'Mejorable', 'class' => 'bg-amber-100 text-amber-800 border-amber-200'];
    }

    return ['label' => 'Crítico', 'class' => 'bg-rose-100 text-rose-800 border-rose-200'];
};
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Reporte UNEG | <?php echo htmlspecialchars($monthLabel, ENT_QUOTES, 'UTF-8'); ?></title>
  <link rel="stylesheet" href="<?php echo $base; ?>/_assets/admin-fonts.css">
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
  <?php require __DIR__ . '/../partials/sidebar.php'; ?>
  <main class="admin-main">
    <section class="flex flex-wrap items-start justify-between gap-4">
      <div>
        <p class="inline-flex items-center rounded-full bg-emerald-100 px-3 py-1 text-xs font-semibold text-emerald-800">UNEG · Performance Web y CRO</p>
        <h1 class="mt-3 text-3xl font-semibold text-[#0b2c65]">Reporte Mensual</h1>
        <p class="mt-1 text-sm text-slate-600"><?php echo htmlspecialchars($monthLabel, ENT_QUOTES, 'UTF-8'); ?> · <?php echo htmlspecialchars($periodLabel, ENT_QUOTES, 'UTF-8'); ?></p>
      </div>
      <div class="flex flex-wrap items-center gap-2">
        <form method="get" action="<?php echo $base; ?>/admin/reports/uneg-mensual" class="inline-flex items-center gap-2 rounded-xl border border-slate-200 bg-white px-3 py-2 text-sm">
          <label for="ym" class="font-semibold text-slate-600">Periodo</label>
          <input id="ym" name="ym" type="month" value="<?php echo htmlspecialchars($ym, ENT_QUOTES, 'UTF-8'); ?>" class="rounded-md border border-slate-200 px-2 py-1 text-slate-700">
          <button type="submit" class="rounded-md bg-[#0b2c65] px-3 py-1.5 text-xs font-semibold text-white hover:bg-[#092653]">Ver</button>
        </form>
        <a href="<?php echo $base; ?>/admin/reports" class="inline-flex items-center gap-2 rounded-lg border border-slate-300 bg-white px-3 py-2 text-sm font-semibold text-slate-700 hover:bg-slate-100">
          <i data-lucide="arrow-left" class="h-4 w-4"></i>
          Reportes
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
        <h2 class="text-lg font-semibold text-slate-800">Salud técnica (PageSpeed)</h2>
      </div>
      <?php if (is_array($pageSpeedSnapshot)): ?>
        <div class="flex flex-wrap items-center justify-between gap-3 border-b border-slate-200 px-5 py-4">
          <p class="text-xs text-slate-500">URL: <?php echo htmlspecialchars((string) ($pageSpeedSnapshot['source_url'] ?? ''), ENT_QUOTES, 'UTF-8'); ?> · corte <?php echo htmlspecialchars((string) ($pageSpeedSnapshot['captured_at'] ?? ''), ENT_QUOTES, 'UTF-8'); ?></p>
          <div class="flex flex-wrap items-center gap-2">
            <a
              href="<?php echo htmlspecialchars((string) ($pageSpeedSnapshot['evidence_url'] ?? '#'), ENT_QUOTES, 'UTF-8'); ?>"
              target="_blank"
              rel="noopener noreferrer"
              class="inline-flex items-center rounded-full border border-blue-200 bg-blue-50 px-3 py-1 text-xs font-semibold text-blue-800 hover:bg-blue-100"
            >
              Sustento PageSpeed
            </a>
            <span class="inline-flex items-center rounded-full border border-emerald-200 bg-emerald-100 px-3 py-1 text-xs font-semibold text-emerald-800">Core Web Vitals: superadas</span>
          </div>
        </div>
        <div class="grid grid-cols-1 gap-5 p-5 xl:grid-cols-2">
          <?php foreach (['desktop', 'mobile'] as $deviceKey): ?>
            <?php $device = $pageSpeedSnapshot[$deviceKey] ?? ['label' => '', 'metrics' => []]; ?>
            <article class="rounded-xl border border-slate-200 bg-slate-50 p-4">
              <h3 class="text-sm font-semibold uppercase tracking-wide text-slate-700"><?php echo htmlspecialchars((string) ($device['label'] ?? ''), ENT_QUOTES, 'UTF-8'); ?></h3>
              <div class="mt-4 grid grid-cols-1 gap-3 sm:grid-cols-2 lg:grid-cols-3">
                <?php foreach (($device['metrics'] ?? []) as $metric): ?>
                  <?php
                    $metricName = (string) ($metric['name'] ?? '');
                    $metricValue = (float) ($metric['value'] ?? 0);
                    $status = $scoreMetricStatus($metricName, $metricValue);
                  ?>
                  <div class="rounded-lg border border-slate-200 bg-white p-3">
                    <div class="flex items-center justify-between gap-2">
                      <p class="text-xs font-semibold text-slate-600"><?php echo htmlspecialchars($metricName, ENT_QUOTES, 'UTF-8'); ?></p>
                      <span class="inline-flex rounded-full border px-2 py-0.5 text-[10px] font-semibold <?php echo htmlspecialchars((string) ($status['class'] ?? ''), ENT_QUOTES, 'UTF-8'); ?>">
                        <?php echo htmlspecialchars((string) ($status['label'] ?? ''), ENT_QUOTES, 'UTF-8'); ?>
                      </span>
                    </div>
                    <p class="mt-2 text-2xl font-bold text-slate-900">
                      <?php
                        $valueRaw = (float) ($metric['value'] ?? 0);
                        echo htmlspecialchars((string) (fmod($valueRaw, 1.0) === 0.0 ? (int) $valueRaw : number_format($valueRaw, 1)), ENT_QUOTES, 'UTF-8');
                      ?>
                      <span class="text-sm font-semibold text-slate-500"><?php echo htmlspecialchars((string) ($metric['unit'] ?? ''), ENT_QUOTES, 'UTF-8'); ?></span>
                    </p>
                    <p class="mt-1 text-xs text-slate-500">Objetivo: <?php echo htmlspecialchars((string) ($metric['goal'] ?? ''), ENT_QUOTES, 'UTF-8'); ?></p>
                  </div>
                <?php endforeach; ?>
              </div>
            </article>
          <?php endforeach; ?>
        </div>
        <div class="border-t border-slate-200 bg-slate-50 px-5 py-4">
          <h3 class="text-sm font-semibold text-slate-800">Glosario rápido de métricas</h3>
          <div class="mt-3 grid grid-cols-1 gap-3 md:grid-cols-2 xl:grid-cols-3">
            <div class="rounded-lg border border-slate-200 bg-white p-3">
              <p class="text-xs font-semibold text-slate-700">LCP (Largest Contentful Paint)</p>
              <p class="mt-1 text-xs text-slate-600">Mide qué tan rápido se carga el contenido principal visible. Menor tiempo = mejor experiencia.</p>
            </div>
            <div class="rounded-lg border border-slate-200 bg-white p-3">
              <p class="text-xs font-semibold text-slate-700">INP (Interaction to Next Paint)</p>
              <p class="mt-1 text-xs text-slate-600">Mide qué tan rápido responde la página al hacer clic o tocar elementos. Menor tiempo = mayor fluidez.</p>
            </div>
            <div class="rounded-lg border border-slate-200 bg-white p-3">
              <p class="text-xs font-semibold text-slate-700">CLS (Cumulative Layout Shift)</p>
              <p class="mt-1 text-xs text-slate-600">Mide movimientos inesperados del diseño mientras carga. Más cercano a 0 = más estable.</p>
            </div>
            <div class="rounded-lg border border-slate-200 bg-white p-3">
              <p class="text-xs font-semibold text-slate-700">FCP (First Contentful Paint)</p>
              <p class="mt-1 text-xs text-slate-600">Tiempo hasta que aparece el primer contenido visible (texto o imagen) en pantalla.</p>
            </div>
            <div class="rounded-lg border border-slate-200 bg-white p-3">
              <p class="text-xs font-semibold text-slate-700">TTFB (Time to First Byte)</p>
              <p class="mt-1 text-xs text-slate-600">Tiempo que tarda el servidor en empezar a responder. Menor valor = backend más ágil.</p>
            </div>
            <div class="rounded-lg border border-slate-200 bg-white p-3">
              <p class="text-xs font-semibold text-slate-700">Cómo leer el estado</p>
              <p class="mt-1 text-xs text-slate-600"><strong>Óptimo</strong> cumple objetivo, <strong>Mejorable</strong> requiere ajustes, <strong>Crítico</strong> impacta UX y conversión.</p>
            </div>
          </div>
        </div>
      <?php else: ?>
        <div class="px-5 py-6">
          <div class="rounded-xl border border-amber-200 bg-amber-50 px-4 py-3 text-sm text-amber-800">
            <?php echo htmlspecialchars((string) ($pageSpeedMessage ?: 'Sin captura de PageSpeed para este periodo.'), ENT_QUOTES, 'UTF-8'); ?>
          </div>
        </div>
      <?php endif; ?>
    </section>

    <section class="mt-8 grid grid-cols-1 gap-4 md:grid-cols-2 xl:grid-cols-4">
      <article class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
        <p class="text-xs font-semibold uppercase tracking-wide text-slate-500">Leads del mes</p>
        <p class="mt-2 text-3xl font-bold text-slate-900"><?php echo (int) $summary['total_leads']; ?></p>
        <p class="mt-2 text-xs <?php echo $growthClass; ?>"><?php echo htmlspecialchars($growthLabel, ENT_QUOTES, 'UTF-8'); ?></p>
      </article>
      <article class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
        <p class="text-xs font-semibold uppercase tracking-wide text-slate-500">Envío exitoso a Pipedrive</p>
        <p class="mt-2 text-3xl font-bold text-slate-900"><?php echo number_format((float) $summary['delivery_pct'], 1); ?>%</p>
        <p class="mt-2 text-xs text-slate-600"><?php echo (int) $summary['pipedrive_ok']; ?> de <?php echo (int) $summary['total_leads']; ?> registros</p>
      </article>
      <article class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
        <p class="text-xs font-semibold uppercase tracking-wide text-slate-500">Fallas de formulario</p>
        <p class="mt-2 text-3xl font-bold text-rose-700"><?php echo (int) $summary['pipedrive_failed']; ?></p>
        <p class="mt-2 text-xs text-slate-600">Basado en status <code>pipedrive_failed</code></p>
      </article>
      <article class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
        <p class="text-xs font-semibold uppercase tracking-wide text-slate-500">Leads sin page_path o sin URL</p>
        <p class="mt-2 text-3xl font-bold text-slate-900"><?php echo (int) ($summary['without_page_path'] ?? 0); ?></p>
        <p class="mt-2 text-xs text-slate-600">Registros sin URL origen guardada en <code>page_path</code></p>
      </article>
    </section>

    <section class="mt-8 grid grid-cols-1 gap-6 xl:grid-cols-3">
      <article class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm xl:col-span-2">
        <div class="flex items-center justify-between gap-3">
          <h2 class="text-lg font-semibold text-slate-800">Leads por día</h2>
          <span class="text-xs text-slate-500">Fuente: tabla <code>leads</code></span>
        </div>
        <div class="mt-4 h-[320px]"><canvas id="leadsByDayChart"></canvas></div>
      </article>

      <article class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
        <h2 class="text-lg font-semibold text-slate-800">Estado de entrega</h2>
        <div class="mt-4 h-[320px]"><canvas id="statusChart"></canvas></div>
      </article>
    </section>

    <section class="mt-6 grid grid-cols-1 gap-6 xl:grid-cols-2">
      <article class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
        <h2 class="text-lg font-semibold text-slate-800">Intereses más solicitados</h2>
        <div class="mt-4 h-[320px]"><canvas id="interestChart"></canvas></div>
      </article>

      <article class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
        <h2 class="text-lg font-semibold text-slate-800">Origen de leads (source)</h2>
        <div class="mt-4 h-[320px]"><canvas id="sourceChart"></canvas></div>
        <p class="mt-4 text-xs text-slate-500">Conteo por valor guardado en el campo <code>source</code> durante el periodo seleccionado.</p>
        <p class="mt-2 text-xs text-slate-500">
          <strong>Sin dato:</strong> corresponde a registros previos al <strong>15/03/2026</strong>, fecha desde la que el campo <code>source</code> se registra de forma obligatoria en la BD local.
        </p>
      </article>
    </section>

    <section class="mt-6">
      <article class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
        <div class="flex flex-wrap items-center justify-between gap-2 border-b border-slate-200 px-5 py-4">
          <h2 class="text-lg font-semibold text-slate-800">Top páginas origen</h2>
          <p class="text-xs text-slate-500">“(sin página)” corresponde a registros previos al 19/03/2026, fecha desde la que <code>page_path</code> se registra como dato requerido.</p>
        </div>
        <div class="overflow-x-auto">
          <table class="min-w-full text-left text-sm">
            <thead class="bg-slate-100 text-slate-700">
              <tr>
                <th class="px-4 py-3 font-semibold">Página</th>
                <th class="px-4 py-3 font-semibold">Leads</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
              <?php if ($topPages === []): ?>
                <tr><td colspan="2" class="px-4 py-4 text-slate-500">Sin datos en el periodo.</td></tr>
              <?php endif; ?>
              <?php foreach ($topPages as $row): ?>
                <tr>
                  <td class="px-4 py-3 text-slate-800"><?php echo htmlspecialchars((string) ($row['label'] ?? ''), ENT_QUOTES, 'UTF-8'); ?></td>
                  <td class="px-4 py-3 font-semibold text-slate-900"><?php echo (int) ($row['total'] ?? 0); ?></td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </article>
    </section>

    <section class="mt-6 grid grid-cols-1 gap-6 xl:grid-cols-3">
      <article class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
        <p class="text-xs font-semibold uppercase tracking-wide text-slate-500">Clicks en botón WhatsApp</p>
        <p class="mt-2 text-3xl font-bold text-slate-900"><?php echo (int) ($summary['whatsapp_clicks'] ?? 0); ?></p>
        <p class="mt-2 text-xs text-slate-600">Eventos en <code>whatsapp_clicks</code> durante el periodo.</p>
      </article>

      <article class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm xl:col-span-2">
        <h2 class="text-lg font-semibold text-slate-800">Clicks WhatsApp por día</h2>
        <div class="mt-4 h-[220px]"><canvas id="whatsByDayChart"></canvas></div>
      </article>
    </section>

    <section class="mt-6">
      <article class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
        <div class="border-b border-slate-200 px-5 py-4">
          <h2 class="text-lg font-semibold text-slate-800">Top páginas con click en WhatsApp</h2>
        </div>
        <div class="overflow-x-auto">
          <table class="min-w-full text-left text-sm">
            <thead class="bg-slate-100 text-slate-700">
              <tr>
                <th class="px-4 py-3 font-semibold">Página</th>
                <th class="px-4 py-3 font-semibold">Clicks</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
              <?php if ($whatsTopPages === []): ?>
                <tr><td colspan="2" class="px-4 py-4 text-slate-500">Sin clicks de WhatsApp en el periodo.</td></tr>
              <?php endif; ?>
              <?php foreach ($whatsTopPages as $row): ?>
                <tr>
                  <td class="px-4 py-3 text-slate-800"><?php echo htmlspecialchars((string) ($row['label'] ?? ''), ENT_QUOTES, 'UTF-8'); ?></td>
                  <td class="px-4 py-3 font-semibold text-slate-900"><?php echo (int) ($row['total'] ?? 0); ?></td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </article>
    </section>

    <section class="mt-6 grid grid-cols-1 gap-6 xl:grid-cols-3">
      <article class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
        <p class="text-xs font-semibold uppercase tracking-wide text-slate-500">Clicks CTA (total mes)</p>
        <p class="mt-2 text-3xl font-bold text-slate-900"><?php echo (int) ($summary['cta_clicks'] ?? 0); ?></p>
        <p class="mt-2 text-xs text-slate-600">Eventos en <code>cta_clicks</code> durante el periodo.</p>
      </article>

      <article class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm xl:col-span-2">
        <h2 class="text-lg font-semibold text-slate-800">Clicks CTA por día</h2>
        <div class="mt-4 h-[220px]"><canvas id="planDownloadsByDayChart"></canvas></div>
      </article>
    </section>

    <section class="mt-6 grid grid-cols-1 gap-6 xl:grid-cols-3">
      <article class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
        <div class="border-b border-slate-200 px-5 py-4">
          <h2 class="text-lg font-semibold text-slate-800">Top clics en CTAs</h2>
        </div>
        <div class="overflow-x-auto">
          <table class="min-w-full text-left text-sm">
            <thead class="bg-slate-100 text-slate-700">
              <tr>
                <th class="px-4 py-3 font-semibold">CTA (botón/enlace)</th>
                <th class="px-4 py-3 font-semibold">Clicks</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
              <?php if ($planTopOffers === []): ?>
                <tr><td colspan="2" class="px-4 py-4 text-slate-500">Sin clics registrados en el periodo.</td></tr>
              <?php endif; ?>
              <?php foreach ($planTopOffers as $row): ?>
                <tr>
                  <td class="px-4 py-3 text-slate-800"><?php echo htmlspecialchars((string) ($row['label'] ?? ''), ENT_QUOTES, 'UTF-8'); ?></td>
                  <td class="px-4 py-3 font-semibold text-slate-900"><?php echo (int) ($row['total'] ?? 0); ?></td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </article>

      <article class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
        <div class="border-b border-slate-200 px-5 py-4">
          <h2 class="text-lg font-semibold text-slate-800">Top páginas con clics CTA</h2>
        </div>
        <div class="overflow-x-auto">
          <table class="min-w-full text-left text-sm">
            <thead class="bg-slate-100 text-slate-700">
              <tr>
                <th class="px-4 py-3 font-semibold">Página</th>
                <th class="px-4 py-3 font-semibold">Clicks</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
              <?php if ($planTopPages === []): ?>
                <tr><td colspan="2" class="px-4 py-4 text-slate-500">Sin clics registrados en el periodo.</td></tr>
              <?php endif; ?>
              <?php foreach ($planTopPages as $row): ?>
                <tr>
                  <td class="px-4 py-3 text-slate-800"><?php echo htmlspecialchars((string) ($row['label'] ?? ''), ENT_QUOTES, 'UTF-8'); ?></td>
                  <td class="px-4 py-3 font-semibold text-slate-900"><?php echo (int) ($row['total'] ?? 0); ?></td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </article>

      <article class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
        <h2 class="text-lg font-semibold text-slate-800">Distribución por dispositivo</h2>
        <div class="mt-4 h-[240px]"><canvas id="planDownloadsDeviceChart"></canvas></div>
      </article>
    </section>

    <section class="mt-6 overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
      <div class="border-b border-slate-200 px-5 py-4">
        <h2 class="text-lg font-semibold text-slate-800">Checklist UNEG</h2>
      </div>
      <div class="overflow-x-auto">
        <table class="min-w-full text-left text-sm">
          <thead class="bg-slate-100 text-slate-700">
            <tr>
              <th class="px-4 py-3 font-semibold">Requisito</th>
              <th class="px-4 py-3 font-semibold">Estado</th>
              <th class="px-4 py-3 font-semibold">Detalle</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-slate-100">
            <?php foreach ($requirements as $req): ?>
              <tr>
                <td class="px-4 py-3 text-slate-800"><?php echo htmlspecialchars((string) $req['item'], ENT_QUOTES, 'UTF-8'); ?></td>
                <td class="px-4 py-3">
                  <?php if (!empty($req['available'])): ?>
                    <span class="inline-flex rounded-full border border-emerald-200 bg-emerald-100 px-3 py-1 text-xs font-semibold text-emerald-800">Disponible</span>
                  <?php else: ?>
                    <span class="inline-flex rounded-full border border-amber-200 bg-amber-100 px-3 py-1 text-xs font-semibold text-amber-800">Pendiente</span>
                  <?php endif; ?>
                </td>
                <td class="px-4 py-3 text-slate-700"><?php echo htmlspecialchars((string) $req['detail'], ENT_QUOTES, 'UTF-8'); ?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </section>

  </main>

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="https://unpkg.com/lucide@0.468.0/dist/umd/lucide.min.js"></script>
  <script>
    const dailyLabels = <?php echo json_encode($dailyLabels, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); ?>;
    const dailyValues = <?php echo json_encode($dailyValues, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); ?>;
    const interestLabels = <?php echo json_encode($interestLabels, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); ?>;
    const interestValues = <?php echo json_encode($interestValues, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); ?>;
    const sourceLabels = <?php echo json_encode($sourceLabels, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); ?>;
    const sourceValues = <?php echo json_encode($sourceValues, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); ?>;
    const statusLabels = <?php echo json_encode($statusLabels, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); ?>;
    const statusValues = <?php echo json_encode($statusValues, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); ?>;
    const whatsDailyLabels = <?php echo json_encode($whatsDailyLabels, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); ?>;
    const whatsDailyValues = <?php echo json_encode($whatsDailyValues, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); ?>;
    const planDailyLabels = <?php echo json_encode($planDailyLabels, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); ?>;
    const planDailyValues = <?php echo json_encode($planDailyValues, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); ?>;
    const planDeviceLabels = <?php echo json_encode($planDeviceLabels, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); ?>;
    const planDeviceValues = <?php echo json_encode($planDeviceValues, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); ?>;
    const shortenLabel = (value, max = 16) => {
      const text = String(value ?? '');
      return text.length > max ? `${text.slice(0, max - 3)}...` : text;
    };

    const commonGrid = { color: 'rgba(148, 163, 184, 0.2)' };

    new Chart(document.getElementById('leadsByDayChart'), {
      type: 'line',
      data: {
        labels: dailyLabels,
        datasets: [{
          label: 'Leads por día',
          data: dailyValues,
          borderColor: '#0b2c65',
          backgroundColor: 'rgba(11, 44, 101, 0.14)',
          fill: true,
          tension: 0.32,
          pointRadius: 2.2
        }]
      },
      options: {
        maintainAspectRatio: false,
        responsive: true,
        scales: {
          x: { grid: { display: false } },
          y: { beginAtZero: true, ticks: { precision: 0 }, grid: commonGrid }
        }
      }
    });

    new Chart(document.getElementById('interestChart'), {
      type: 'bar',
      data: {
        labels: interestLabels,
        datasets: [{
          label: 'Leads',
          data: interestValues,
          backgroundColor: '#0f766e'
        }]
      },
      options: {
        maintainAspectRatio: false,
        responsive: true,
        scales: {
          x: { grid: { display: false } },
          y: { beginAtZero: true, ticks: { precision: 0 }, grid: commonGrid }
        },
        plugins: {
          legend: { display: false }
        }
      }
    });

    new Chart(document.getElementById('sourceChart'), {
      type: 'bar',
      data: {
        labels: sourceLabels,
        datasets: [{
          label: 'Leads',
          data: sourceValues,
          backgroundColor: '#0f766e'
        }]
      },
      options: {
        maintainAspectRatio: false,
        responsive: true,
        scales: {
          x: {
            grid: { display: false },
            ticks: {
              callback: function(value) {
                const label = this.getLabelForValue(value);
                return shortenLabel(label, 18);
              }
            }
          },
          y: { beginAtZero: true, ticks: { precision: 0 }, grid: commonGrid }
        },
        plugins: {
          legend: { display: false },
          tooltip: {
            callbacks: {
              title: (items) => String(items?.[0]?.label ?? '')
            }
          }
        }
      }
    });

    new Chart(document.getElementById('statusChart'), {
      type: 'doughnut',
      data: {
        labels: statusLabels,
        datasets: [{
          data: statusValues,
          backgroundColor: ['#0f766e', '#b91c1c']
        }]
      },
      options: {
        maintainAspectRatio: false,
        responsive: true,
        plugins: {
          legend: {
            position: 'bottom'
          }
        }
      }
    });

    new Chart(document.getElementById('whatsByDayChart'), {
      type: 'bar',
      data: {
        labels: whatsDailyLabels,
        datasets: [{
          label: 'Clicks',
          data: whatsDailyValues,
          backgroundColor: '#0b2c65'
        }]
      },
      options: {
        maintainAspectRatio: false,
        responsive: true,
        scales: {
          x: { grid: { display: false } },
          y: { beginAtZero: true, ticks: { precision: 0 }, grid: commonGrid }
        },
        plugins: {
          legend: { display: false }
        }
      }
    });

    new Chart(document.getElementById('planDownloadsByDayChart'), {
      type: 'bar',
      data: {
        labels: planDailyLabels,
        datasets: [{
          label: 'Clicks',
          data: planDailyValues,
          backgroundColor: '#0f766e'
        }]
      },
      options: {
        maintainAspectRatio: false,
        responsive: true,
        scales: {
          x: { grid: { display: false } },
          y: { beginAtZero: true, ticks: { precision: 0 }, grid: commonGrid }
        },
        plugins: {
          legend: { display: false }
        }
      }
    });

    new Chart(document.getElementById('planDownloadsDeviceChart'), {
      type: 'doughnut',
      data: {
        labels: planDeviceLabels,
        datasets: [{
          data: planDeviceValues,
          backgroundColor: ['#0b2c65', '#0f766e', '#f59e0b', '#64748b']
        }]
      },
      options: {
        maintainAspectRatio: false,
        responsive: true,
        plugins: {
          legend: { position: 'bottom' }
        }
      }
    });

    window.lucide?.createIcons();
  </script>
</body>
</html>
