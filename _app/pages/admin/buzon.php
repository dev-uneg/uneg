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
  <title>Buzón del Rector | Admin UNEG</title>
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
        <h1 class="text-2xl font-semibold text-[#0b2c65]">Buzón del Rector</h1>
        <p class="mt-1 text-sm text-slate-500">Total: <?php echo $total; ?> registros</p>
      </div>
      <div class="flex flex-wrap items-center gap-3">
        <form method="get" action="<?php echo $base; ?>/admin/buzon-rector" class="flex flex-wrap items-center gap-2 text-sm text-slate-600">
          <div class="flex flex-wrap items-center gap-2 rounded-xl border border-slate-200 bg-white px-3 py-2">
            <label class="text-xs font-semibold text-slate-500">Desde</label>
            <input type="date" name="from" value="<?php echo htmlspecialchars($dateFrom, ENT_QUOTES, 'UTF-8'); ?>" class="text-xs text-slate-700 outline-none">
            <span class="text-slate-300">|</span>
            <label class="text-xs font-semibold text-slate-500">Hasta</label>
            <input type="date" name="to" value="<?php echo htmlspecialchars($dateTo, ENT_QUOTES, 'UTF-8'); ?>" class="text-xs text-slate-700 outline-none">
          </div>
          <button type="submit" class="inline-flex items-center justify-center rounded-lg bg-[#0b2c65] p-2 text-white hover:bg-[#09306e]" aria-label="Filtrar">
            <?php echo uneg_icon('filter', 'h-4 w-4'); ?>
          </button>
          <input type="hidden" name="per_page" value="<?php echo $perPage; ?>">
          <input type="hidden" name="page" value="1">
        </form>
        <a class="inline-flex items-center justify-center rounded-lg border border-slate-200 bg-white p-2 text-slate-600 hover:border-slate-300 <?php echo $hasDateFilter ? '' : 'pointer-events-none opacity-40'; ?>" href="<?php echo $base; ?>/admin/buzon-rector/export?from=<?php echo urlencode($dateFrom); ?>&to=<?php echo urlencode($dateTo); ?>" aria-label="Exportar CSV">
          <?php echo uneg_icon('download', 'h-4 w-4'); ?>
        </a>
        <a class="inline-flex items-center gap-2 rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm font-semibold text-slate-700 hover:border-slate-300" href="<?php echo $base; ?>/admin/panel">
          <?php echo uneg_icon('layout-grid', 'h-4 w-4'); ?> Panel
        </a>
        <a class="inline-flex items-center justify-center rounded-lg border border-slate-200 bg-white p-2 text-slate-600 hover:border-slate-300" href="<?php echo $base; ?>/admin/logout" aria-label="Salir">
          <?php echo uneg_icon('log-out', 'h-4 w-4'); ?>
        </a>
      </div>
    </section>

    <section class="mt-6 overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
      <div class="overflow-x-auto">
        <table class="min-w-full text-left text-sm">
          <thead class="bg-slate-100 text-slate-600">
            <tr>
              <th class="px-4 py-3 font-semibold">Fecha</th>
              <th class="px-4 py-3 font-semibold">Nombre</th>
              <th class="px-4 py-3 font-semibold">Correo</th>
              <th class="px-4 py-3 font-semibold">Asunto</th>
              <th class="px-4 py-3 font-semibold">Mensaje</th>
              <th class="px-4 py-3 font-semibold">Acciones</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-slate-100">
            <?php
            $truncate = static function (string $value, int $limit = 120): string {
              $value = trim(preg_replace('/\s+/u', ' ', $value) ?? $value);
              if (function_exists('mb_strlen') && function_exists('mb_substr')) {
                if (mb_strlen($value, 'UTF-8') <= $limit) {
                  return $value;
                }
                return rtrim(mb_substr($value, 0, $limit, 'UTF-8')) . '...';
              }
              if (strlen($value) <= $limit) {
                return $value;
              }
              return rtrim(substr($value, 0, $limit)) . '...';
            };
            ?>
            <?php if ($rows === []): ?>
              <tr><td colspan="6" class="px-4 py-6 text-center text-slate-500">Sin registros todavía.</td></tr>
            <?php endif; ?>
            <?php foreach ($rows as $row): ?>
              <tr class="hover:bg-slate-50 align-top">
                <td class="px-4 py-3 text-slate-500"><?php echo htmlspecialchars(format_mx_datetime((string) ($row['created_at'] ?? '')), ENT_QUOTES, 'UTF-8'); ?></td>
                <td class="px-4 py-3 font-medium text-slate-800"><?php echo htmlspecialchars((string) ($row['nombre'] ?? ''), ENT_QUOTES, 'UTF-8'); ?></td>
                <td class="px-4 py-3 text-slate-600"><?php echo htmlspecialchars((string) ($row['correo'] ?? ''), ENT_QUOTES, 'UTF-8'); ?></td>
                <td class="px-4 py-3 text-slate-600"><?php echo htmlspecialchars((string) ($row['asunto'] ?? ''), ENT_QUOTES, 'UTF-8'); ?></td>
                <td class="px-4 py-3 text-slate-600 max-w-md"><?php echo htmlspecialchars($truncate((string) ($row['mensaje'] ?? '')), ENT_QUOTES, 'UTF-8'); ?></td>
                <td class="px-4 py-3">
                  <div class="flex items-center gap-2">
                    <a class="inline-flex items-center justify-center rounded-md border border-slate-200 bg-white p-2 text-slate-600 hover:border-slate-300" href="<?php echo $base; ?>/admin/buzon-rector/show?id=<?php echo (int) $row['id']; ?>" aria-label="Ver">
                      <?php echo uneg_icon('eye', 'h-4 w-4'); ?>
                    </a>
                    <form method="post" action="<?php echo $base; ?>/admin/buzon-rector/delete" onsubmit="return confirm('¿Eliminar este registro?');">
                      <input type="hidden" name="id" value="<?php echo (int) $row['id']; ?>">
                      <input type="hidden" name="csrf" value="<?php echo htmlspecialchars($csrf, ENT_QUOTES, 'UTF-8'); ?>">
                      <button class="inline-flex items-center justify-center rounded-md border border-rose-200 bg-rose-50 p-2 text-rose-600 hover:border-rose-300" aria-label="Eliminar">
                        <?php echo uneg_icon('trash-2', 'h-4 w-4'); ?>
                      </button>
                    </form>
                  </div>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </section>

    <section class="mt-6 flex flex-wrap items-center justify-between gap-3 text-sm text-slate-600">
      <form method="get" action="<?php echo $base; ?>/admin/buzon-rector" class="flex items-center gap-2">
        <label for="per_page" class="font-medium">Ver</label>
        <select id="per_page" name="per_page" class="rounded-lg border border-slate-200 bg-white px-3 py-2" onchange="this.form.submit()">
          <?php foreach ($perPageOptions as $opt): ?>
            <option value="<?php echo $opt; ?>" <?php echo $opt === $perPage ? 'selected' : ''; ?>><?php echo $opt; ?></option>
          <?php endforeach; ?>
        </select>
        <?php if ($dateFrom !== ''): ?>
          <input type="hidden" name="from" value="<?php echo htmlspecialchars($dateFrom, ENT_QUOTES, 'UTF-8'); ?>">
        <?php endif; ?>
        <?php if ($dateTo !== ''): ?>
          <input type="hidden" name="to" value="<?php echo htmlspecialchars($dateTo, ENT_QUOTES, 'UTF-8'); ?>">
        <?php endif; ?>
        <input type="hidden" name="page" value="1">
      </form>
      <div>Página <?php echo $page; ?> de <?php echo $totalPages; ?></div>
      <div class="flex items-center gap-2">
        <?php if ($page > 1): ?>
          <a class="rounded-lg border border-slate-200 bg-white px-3 py-1.5 font-semibold hover:border-slate-300" href="<?php echo $base; ?>/admin/buzon-rector?page=<?php echo $page - 1; ?>&per_page=<?php echo $perPage; ?>&from=<?php echo urlencode($dateFrom); ?>&to=<?php echo urlencode($dateTo); ?>">Anterior</a>
        <?php endif; ?>
        <?php if ($page < $totalPages): ?>
          <a class="rounded-lg border border-slate-200 bg-white px-3 py-1.5 font-semibold hover:border-slate-300" href="<?php echo $base; ?>/admin/buzon-rector?page=<?php echo $page + 1; ?>&per_page=<?php echo $perPage; ?>&from=<?php echo urlencode($dateFrom); ?>&to=<?php echo urlencode($dateTo); ?>">Siguiente</a>
        <?php endif; ?>
      </div>
    </section>
  </main>
</body>
</html>
