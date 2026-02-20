<?php
declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Editar Buzón | Admin UNEG</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@400;500;600;700&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body { font-family: 'Figtree', sans-serif; }
  </style>
</head>
<body class="min-h-screen bg-slate-50 text-slate-900">
  <main class="mx-auto w-full max-w-4xl px-4 py-10">
    <h1 class="text-2xl font-semibold text-[#0b2c65]">Editar mensaje del buzón</h1>
    <?php if (isset($_GET['error'])): ?>
      <div class="mt-4 rounded-xl border border-rose-200 bg-rose-50 px-4 py-3 text-sm text-rose-700">Completa los campos obligatorios.</div>
    <?php endif; ?>

    <form class="mt-6 grid grid-cols-1 gap-4 rounded-2xl border border-slate-200 bg-white p-6 shadow-sm" method="post" action="<?php echo $base; ?>/admin/buzon-rector/update">
      <input type="hidden" name="id" value="<?php echo (int) $row['id']; ?>">
      <input type="hidden" name="csrf" value="<?php echo htmlspecialchars($csrf, ENT_QUOTES, 'UTF-8'); ?>">

      <label class="text-sm font-medium text-slate-700">Nombre
        <input class="mt-1 w-full rounded-lg border border-slate-200 px-3 py-2" name="nombre" required value="<?php echo htmlspecialchars((string) $row['nombre'], ENT_QUOTES, 'UTF-8'); ?>">
      </label>
      <label class="text-sm font-medium text-slate-700">Correo
        <input type="email" class="mt-1 w-full rounded-lg border border-slate-200 px-3 py-2" name="correo" required value="<?php echo htmlspecialchars((string) $row['correo'], ENT_QUOTES, 'UTF-8'); ?>">
      </label>
      <label class="text-sm font-medium text-slate-700">Asunto
        <input class="mt-1 w-full rounded-lg border border-slate-200 px-3 py-2" name="asunto" required value="<?php echo htmlspecialchars((string) $row['asunto'], ENT_QUOTES, 'UTF-8'); ?>">
      </label>
      <label class="text-sm font-medium text-slate-700">Mensaje
        <textarea class="mt-1 w-full rounded-lg border border-slate-200 px-3 py-2" name="mensaje" rows="6" required><?php echo htmlspecialchars((string) $row['mensaje'], ENT_QUOTES, 'UTF-8'); ?></textarea>
      </label>

      <div class="flex items-center gap-3 pt-2">
        <button class="rounded-lg bg-[#0b2c65] px-4 py-2 text-sm font-semibold text-white hover:bg-[#09306e]" type="submit">Guardar cambios</button>
        <a class="rounded-lg border border-slate-200 bg-white px-4 py-2 text-sm font-semibold text-slate-700 hover:border-slate-300" href="<?php echo $base; ?>/admin/buzon-rector">Cancelar</a>
      </div>
    </form>
  </main>
</body>
</html>
