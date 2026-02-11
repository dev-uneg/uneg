<?php
$title = 'Doctorados | UNEG';
$active = 'oferta';
require __DIR__ . '/partials/header.php';
?>

<main class="max-w-7xl mx-auto px-4 py-10">
  <section class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
    <img src="<?php echo $assetBase; ?>/imgs/nms/cch/hero.png" alt="Doctorados" class="block w-full h-auto" loading="eager">
    <div class="bg-[#0b2c65] text-white">
      <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 px-5 py-4 text-sm">
        <div class="flex items-center gap-3">
          <span class="inline-flex h-9 w-9 items-center justify-center rounded-full bg-white/15">
            <i class="ri-school-line text-lg"></i>
          </span>
          <div>
            <p class="font-semibold">Modalidad Presencial</p>
            <p class="text-white/70 text-xs">Doctorados</p>
          </div>
        </div>
        <div class="flex items-center gap-3">
          <span class="inline-flex h-9 w-9 items-center justify-center rounded-full bg-white/15">
            <i class="ri-time-line text-lg"></i>
          </span>
          <div>
            <p class="font-semibold">Horarios Flexibles</p>
            <p class="text-white/70 text-xs">Lunes a viernes</p>
          </div>
        </div>
        <div class="flex items-center gap-3">
          <span class="inline-flex h-9 w-9 items-center justify-center rounded-full bg-white/15">
            <i class="ri-medal-line text-lg"></i>
          </span>
          <div>
            <p class="font-semibold">Validez Oficial</p>
            <p class="text-white/70 text-xs">RVOE / UNAM</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="mt-10 text-center">
    <h1 class="text-2xl sm:text-3xl font-semibold text-[#0b2c65]">Conoce los Doctorados en CDMX de la Universidad de Negocios ISEC</h1>
    <p class="mt-2 text-slate-600">
      Descubre en la Universidad de Negocios ISEC un espacio óptimo para obtener un grado académico más alto. Conoce la oferta de nuestros Doctorados en CDMX. ¡Inscríbete hoy mismo!
    </p>
  </section>

  <section class="mt-10 grid grid-cols-1 sm:grid-cols-2 gap-8">
    <article class="rounded-xl border border-slate-200 bg-white p-6 text-center shadow-sm">
      <div class="mx-auto h-28 w-28 rounded-full bg-slate-100 flex items-center justify-center text-slate-500">IMG</div>
      <h3 class="mt-4 font-semibold text-[#0b2c65]">Doctorado en Administración de Negocios</h3>
      <p class="mt-1 text-xs text-slate-500">SEP RVOE 20110798</p>
    </article>
    <article class="rounded-xl border border-slate-200 bg-white p-6 text-center shadow-sm">
      <div class="mx-auto h-28 w-28 rounded-full bg-slate-100 flex items-center justify-center text-slate-500">IMG</div>
      <h3 class="mt-4 font-semibold text-[#0b2c65]">Doctorado en Educación, Sistema de Aprendizaje en Línea</h3>
      <p class="mt-1 text-xs text-slate-500">RVOE SEP 20160644</p>
    </article>
  </section>
</main>

<?php require __DIR__ . '/partials/footer.php'; ?>
