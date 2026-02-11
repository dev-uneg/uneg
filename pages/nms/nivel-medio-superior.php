<?php
$title = 'Nivel Medio Superior | UNEG';
$active = 'oferta';
require __DIR__ . '/../partials/header.php';
?>

<main class="max-w-7xl mx-auto px-4 py-10">
  <section class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
    <img src="<?php echo $assetBase; ?>/imgs/nms/cch/hero.png" alt="Nivel Medio Superior - Modalidad presencial" class="block w-full h-auto" loading="eager">
    <div class="bg-[#0b2c65] text-white">
      <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 px-5 py-4 text-sm">
        <div class="flex items-center gap-3">
          <span class="inline-flex h-9 w-9 items-center justify-center rounded-full bg-white/15">
            <i class="ri-school-line text-lg"></i>
          </span>
          <div>
            <p class="font-semibold">Modalidad Presencial</p>
            <p class="text-white/70 text-xs">Nivel Medio Superior</p>
          </div>
        </div>
        <div class="flex items-center gap-3">
          <span class="inline-flex h-9 w-9 items-center justify-center rounded-full bg-white/15">
            <i class="ri-time-line text-lg"></i>
          </span>
          <div>
            <p class="font-semibold">16:00 a 21:00 hrs</p>
            <p class="text-white/70 text-xs">Lunes a viernes</p>
          </div>
        </div>
        <div class="flex items-center gap-3">
          <span class="inline-flex h-9 w-9 items-center justify-center rounded-full bg-white/15">
            <i class="ri-medal-line text-lg"></i>
          </span>
          <div>
            <p class="font-semibold">Certificación UNAM</p>
            <p class="text-white/70 text-xs">Validez oficial</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="mt-10 text-center">
    <h2 class="text-xl sm:text-2xl font-semibold text-[#0b2c65]">
      ¿Bachilleratos en CDMX? Conoce el plan de estudios de la Universidad de Negocios ISEC
    </h2>
    <p class="mt-2 text-slate-600">
      Sigue en tu camino hacia el éxito con el plan de estudios de nuestros bachilleratos en CDMX.
    </p>
  </section>

  <section class="mt-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
    <article class="rounded-xl border border-slate-200 bg-white p-6 text-center shadow-sm">
      <div class="mx-auto h-20 w-20 rounded-full bg-slate-100 flex items-center justify-center text-slate-500">IMG</div>
      <h3 class="mt-4 font-semibold text-[#0b2c65]">Bachillerato en Línea</h3>
      <p class="mt-1 text-xs text-slate-500">Programa B@ISEC</p>
    </article>
    <article class="rounded-xl border border-slate-200 bg-white p-6 text-center shadow-sm">
      <div class="mx-auto h-20 w-20 rounded-full bg-slate-100 flex items-center justify-center text-slate-500">IMG</div>
      <h3 class="mt-4 font-semibold text-[#0b2c65]">Bachillerato Técnico en Administración de Empresas Turísticas</h3>
      <p class="mt-1 text-xs text-slate-500">IPN A-RVOE-DG-NMS/33/99</p>
    </article>
    <article class="rounded-xl border border-slate-200 bg-white p-6 text-center shadow-sm">
      <div class="mx-auto h-20 w-20 rounded-full bg-slate-100 flex items-center justify-center text-slate-500">IMG</div>
      <h3 class="mt-4 font-semibold text-[#0b2c65]">Curso CENEVAL</h3>
    </article>
    <article class="rounded-xl border border-slate-200 bg-white p-6 text-center shadow-sm">
      <div class="mx-auto h-20 w-20 rounded-full bg-slate-100 flex items-center justify-center text-slate-500">IMG</div>
      <h3 class="mt-4 font-semibold text-[#0b2c65]">Curso COLBACH</h3>
    </article>
  </section>

  <section class="mt-8">
    <div class="w-48 h-64 rounded-xl border border-slate-200 bg-slate-100 flex items-center justify-center text-slate-500 shadow-sm">Imagen</div>
  </section>
</main>

<?php require __DIR__ . '/../partials/footer.php'; ?>
