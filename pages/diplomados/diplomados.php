<?php
$title = 'Diplomados | UNEG';
$active = 'oferta';
require __DIR__ . '/../partials/header.php';
?>

<main class="max-w-7xl mx-auto px-4 py-10">
  <section class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
    <img src="<?php echo $assetBase; ?>/imgs/nms/cch/hero.png" alt="Diplomados" class="block w-full h-auto" loading="eager">
    <div class="bg-[#0b2c65] text-white">
      <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 px-5 py-4 text-sm">
        <div class="flex items-center gap-3">
          <span class="inline-flex h-9 w-9 items-center justify-center rounded-full bg-white/15">
            <i class="ri-school-line text-lg"></i>
          </span>
          <div>
            <p class="font-semibold">Modalidad Flexible</p>
            <p class="text-white/70 text-xs">Diplomados</p>
          </div>
        </div>
        <div class="flex items-center gap-3">
          <span class="inline-flex h-9 w-9 items-center justify-center rounded-full bg-white/15">
            <i class="ri-time-line text-lg"></i>
          </span>
          <div>
            <p class="font-semibold">Horarios Ejecutivos</p>
            <p class="text-white/70 text-xs">Entre semana y sábado</p>
          </div>
        </div>
        <div class="flex items-center gap-3">
          <span class="inline-flex h-9 w-9 items-center justify-center rounded-full bg-white/15">
            <i class="ri-medal-line text-lg"></i>
          </span>
          <div>
            <p class="font-semibold">Certificación</p>
            <p class="text-white/70 text-xs">Programas especializados</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="mt-10 text-center">
    <h1 class="text-2xl sm:text-3xl font-semibold text-[#0b2c65]">Diplomados</h1>
    <p class="mt-2 text-slate-600">Contenido en construcción para Diplomados.</p>
  </section>

  <section class="mt-8">
    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm text-center text-slate-500">IMG</div>
  </section>
</main>

<?php require __DIR__ . '/../partials/footer.php'; ?>
