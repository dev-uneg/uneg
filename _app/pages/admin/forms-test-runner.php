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
  <title>Pruebas de Formularios | UNEG Admin</title>
  <link rel="stylesheet" href="<?php echo $assetBase; ?>/_assets/css/output.css">
  <script defer src="<?php echo $assetBase; ?>/_assets/js/lucide-loader.js?v=3"></script>
  <style>
    @font-face {
      font-family: 'Figtree';
      src: url('<?php echo $assetBase; ?>/_assets/fonts/Figtree-wght.ttf') format('truetype');
      font-weight: 100 900;
      font-style: normal;
      font-display: swap;
    }
    body { font-family: 'Figtree', sans-serif; }
  </style>
</head>
<body class="min-h-screen bg-slate-50 text-slate-900">
  <main class="mx-auto w-full max-w-7xl px-4 py-10">
    <section class="flex flex-wrap items-center justify-between gap-4">
      <div>
        <p class="text-xs font-semibold uppercase tracking-wide text-slate-500">QA Interno</p>
        <h1 class="mt-1 text-3xl font-semibold text-[#0b2c65]">Pruebas de Formularios</h1>
        <p class="mt-2 text-sm text-slate-600">Envio secuencial de prueba con payload fijo para validar respuesta por endpoint.</p>
      </div>
      <a href="<?php echo htmlspecialchars((string) $base, ENT_QUOTES, 'UTF-8'); ?>/admin/panel" class="inline-flex items-center gap-2 rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm font-semibold text-slate-700 hover:border-slate-300">
        <?php echo uneg_icon('layout-grid', 'h-4 w-4'); ?>
        Panel
      </a>
    </section>

    <section class="mt-6 rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
      <?php if ($error !== ''): ?>
        <div class="mb-4 rounded-lg border border-rose-200 bg-rose-50 px-3 py-2 text-sm text-rose-700">
          <?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?>
        </div>
      <?php endif; ?>

      <form method="post" action="<?php echo htmlspecialchars((string) $base, ENT_QUOTES, 'UTF-8'); ?>/admin/forms-test-runner" class="space-y-5">
        <input type="hidden" name="csrf" value="<?php echo htmlspecialchars($csrf, ENT_QUOTES, 'UTF-8'); ?>">

        <div>
          <label for="turnstile_token" class="mb-1 block text-sm font-semibold text-slate-700">Token Turnstile (opcional)</label>
          <input id="turnstile_token" name="turnstile_token" value="<?php echo htmlspecialchars($turnstileToken, ENT_QUOTES, 'UTF-8'); ?>" class="w-full rounded-lg border border-slate-300 px-3 py-2 text-sm" placeholder="Si no se envia, algunos forms pueden fallar por validacion de seguridad.">
        </div>

        <div>
          <div class="mb-2 flex items-center justify-between gap-2">
            <p class="text-sm font-semibold text-slate-700">Selecciona formularios</p>
            <button type="button" id="toggleAll" class="rounded-md border border-slate-300 px-2 py-1 text-xs font-semibold text-slate-700">Seleccionar todos</button>
          </div>
          <div class="grid grid-cols-1 gap-2 md:grid-cols-2 xl:grid-cols-3">
            <?php foreach ($formsCatalog as $path => $label): ?>
              <label class="inline-flex items-center gap-2 rounded-lg border border-slate-200 bg-slate-50 px-3 py-2 text-sm">
                <input type="checkbox" name="forms[]" value="<?php echo htmlspecialchars($path, ENT_QUOTES, 'UTF-8'); ?>" <?php echo in_array($path, $selectedForms, true) ? 'checked' : ''; ?>>
                <span class="font-medium text-slate-800"><?php echo htmlspecialchars($label, ENT_QUOTES, 'UTF-8'); ?></span>
                <span class="text-xs text-slate-500"><?php echo htmlspecialchars($path, ENT_QUOTES, 'UTF-8'); ?></span>
              </label>
            <?php endforeach; ?>
          </div>
        </div>

        <div class="rounded-lg border border-amber-200 bg-amber-50 px-3 py-2 text-xs text-amber-800">
          Payload fijo: <code>full_name=TEST - test</code>, <code>email=test@test.com</code>, <code>phone=5500550055</code>.
        </div>

        <button type="submit" class="inline-flex items-center gap-2 rounded-lg bg-[#0b2c65] px-4 py-2 text-sm font-semibold text-white hover:bg-[#12397f]">
          <?php echo uneg_icon('send', 'h-4 w-4'); ?>
          Enviar prueba
        </button>
      </form>
    </section>

    <?php if ($results !== []): ?>
      <section class="mt-6 rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
        <h2 class="text-lg font-semibold text-[#0b2c65]">Reporte</h2>
        <div class="mt-3 overflow-x-auto">
          <table class="min-w-full divide-y divide-slate-200 text-sm">
            <thead class="bg-slate-50 text-left text-xs font-semibold uppercase tracking-wide text-slate-500">
              <tr>
                <th class="px-3 py-2">Formulario</th>
                <th class="px-3 py-2">Endpoint</th>
                <th class="px-3 py-2">Estado</th>
                <th class="px-3 py-2">HTTP</th>
                <th class="px-3 py-2">Motivo</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
              <?php foreach ($results as $row): ?>
                <tr>
                  <td class="px-3 py-2 font-medium text-slate-900"><?php echo htmlspecialchars((string) $row['name'], ENT_QUOTES, 'UTF-8'); ?></td>
                  <td class="px-3 py-2 text-slate-600"><?php echo htmlspecialchars((string) $row['path'], ENT_QUOTES, 'UTF-8'); ?></td>
                  <td class="px-3 py-2">
                    <?php if (($row['status'] ?? '') === 'ok'): ?>
                      <span class="rounded-full bg-emerald-50 px-2 py-0.5 text-xs font-semibold text-emerald-700">ok</span>
                    <?php else: ?>
                      <span class="rounded-full bg-rose-50 px-2 py-0.5 text-xs font-semibold text-rose-700">error</span>
                    <?php endif; ?>
                  </td>
                  <td class="px-3 py-2"><?php echo (int) ($row['http_code'] ?? 0); ?></td>
                  <td class="px-3 py-2 text-slate-700"><?php echo htmlspecialchars((string) ($row['reason'] ?? ''), ENT_QUOTES, 'UTF-8'); ?></td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </section>
    <?php endif; ?>
  </main>

  <script>
    (() => {
      const button = document.getElementById('toggleAll');
      if (!button) return;
      button.addEventListener('click', () => {
        const boxes = Array.from(document.querySelectorAll('input[type="checkbox"][name="forms[]"]'));
        const allChecked = boxes.every((box) => box.checked);
        boxes.forEach((box) => {
          box.checked = !allChecked;
        });
        button.textContent = allChecked ? 'Seleccionar todos' : 'Quitar todos';
      });
    })();
  </script>
</body>
</html>
