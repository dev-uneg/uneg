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
  <title>Pruebas de Formularios | Admin UNEG</title>
  <link rel="stylesheet" href="<?php echo $assetBase; ?>/_assets/css/output.css">
  <script defer src="<?php echo $assetBase; ?>/_assets/js/lucide-loader.js?v=2"></script>
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
        <h1 class="text-2xl font-semibold text-[#0b2c65]">Pruebas de Formularios</h1>
        <p class="mt-1 text-sm text-slate-500">Ejecuta envíos de prueba y valida BD + Pipedrive por formulario.</p>
      </div>
      <div class="flex flex-wrap items-center gap-3">
        <a class="inline-flex items-center gap-2 rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm font-semibold text-slate-700 hover:border-slate-300" href="<?php echo $base; ?>/admin/panel">
          <?php echo uneg_icon('layout-grid', 'h-4 w-4'); ?> Panel
        </a>
      </div>
    </section>

    <section class="mt-6 rounded-2xl border border-amber-200 bg-amber-50 p-4 text-sm text-amber-800">
      Esta prueba realiza envíos reales. Los formularios tipo lead crearán registros y pueden crear contactos en Pipedrive.
    </section>

    <section class="mt-6 rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
      <form method="post" action="<?php echo $base; ?>/admin/form-tests" id="form-tests-runner">
        <input type="hidden" name="csrf" value="<?php echo htmlspecialchars($csrf, ENT_QUOTES, 'UTF-8'); ?>">
        <button type="submit" id="run-tests-btn" class="inline-flex items-center gap-2 rounded-lg bg-[#0b2c65] px-4 py-2.5 text-sm font-semibold text-white hover:bg-[#09306e] disabled:cursor-not-allowed disabled:opacity-70">
          <span id="run-tests-icon"><?php echo uneg_icon('check', 'h-4 w-4'); ?></span>
          <span id="run-tests-label">Ejecutar test</span>
        </button>
        <p id="run-tests-progress" class="mt-3 hidden text-sm text-slate-500" aria-live="polite">Ejecutando pruebas<span id="run-tests-dots">.</span></p>
        <?php if (!empty($ranAt)): ?>
          <p class="mt-3 text-sm text-slate-500">Última ejecución: <?php echo htmlspecialchars((string) $ranAt, ENT_QUOTES, 'UTF-8'); ?></p>
        <?php endif; ?>
      </form>
    </section>

    <?php if ($results !== []): ?>
      <section class="mt-6 overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
        <div class="overflow-x-auto">
          <table class="min-w-full text-left text-sm">
            <thead class="bg-slate-100 text-slate-600">
              <tr>
                <th class="px-4 py-3 font-semibold">Formulario</th>
                <th class="px-4 py-3 font-semibold">Endpoint</th>
                <th class="px-4 py-3 font-semibold">HTTP</th>
                <th class="px-4 py-3 font-semibold">BD</th>
                <th class="px-4 py-3 font-semibold">Pipedrive</th>
                <th class="px-4 py-3 font-semibold">Detalle</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
              <?php foreach ($results as $row): ?>
                <?php
                  $ok = !empty($row['ok']);
                  $bg = $ok ? 'bg-emerald-50' : 'bg-rose-50';
                  $text = $ok ? 'text-emerald-700' : 'text-rose-700';
                ?>
                <tr class="<?php echo $bg; ?>">
                  <td class="px-4 py-3 font-semibold <?php echo $text; ?>"><?php echo htmlspecialchars((string) $row['label'], ENT_QUOTES, 'UTF-8'); ?></td>
                  <td class="px-4 py-3 text-slate-600"><?php echo htmlspecialchars((string) $row['endpoint'], ENT_QUOTES, 'UTF-8'); ?></td>
                  <td class="px-4 py-3 text-slate-700"><?php echo htmlspecialchars((string) $row['http_status'], ENT_QUOTES, 'UTF-8'); ?></td>
                  <td class="px-4 py-3 text-slate-700"><?php echo htmlspecialchars((string) $row['db_status'], ENT_QUOTES, 'UTF-8'); ?></td>
                  <td class="px-4 py-3 text-slate-700"><?php echo htmlspecialchars((string) $row['pipedrive_status'], ENT_QUOTES, 'UTF-8'); ?></td>
                  <td class="px-4 py-3 text-slate-700"><?php echo htmlspecialchars((string) $row['message'], ENT_QUOTES, 'UTF-8'); ?></td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </section>
    <?php endif; ?>
  </main>
  <script>
    (function () {
      var form = document.getElementById('form-tests-runner');
      var button = document.getElementById('run-tests-btn');
      var icon = document.getElementById('run-tests-icon');
      var label = document.getElementById('run-tests-label');
      var progress = document.getElementById('run-tests-progress');
      var dots = document.getElementById('run-tests-dots');
      if (!form || !button || !icon || !label || !progress || !dots) return;

      var timer = null;
      form.addEventListener('submit', function () {
        button.disabled = true;
        icon.innerHTML = '';
        label.textContent = 'Ejecutando...';
        progress.classList.remove('hidden');

        var step = 1;
        timer = window.setInterval(function () {
          step = step >= 4 ? 1 : step + 1;
          dots.textContent = '.'.repeat(step);
        }, 350);
      });
    })();
  </script>
</body>
</html>
