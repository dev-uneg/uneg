<?php
$title = 'Egresados | UNEG';
$active = 'egresados';
require __DIR__ . '/partials/header.php';
?>

<main class="max-w-7xl mx-auto px-4 py-10">
  <section class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
    <img src="<?php echo $assetBase; ?>/imgs/egresados/hero.png" alt="Egresados ISEC" class="block w-full h-auto" loading="eager">
    <div class="bg-[#0b2c65] text-white">
      <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 px-5 py-4 text-sm">
        <div class="flex items-center gap-3">
          <span class="inline-flex h-9 w-9 items-center justify-center rounded-full bg-white/15">
            <i class="ri-school-line text-lg"></i>
          </span>
          <div>
            <p class="font-semibold">Comunidad</p>
            <p class="text-white/70 text-xs">Egresados ISEC</p>
          </div>
        </div>
        <div class="flex items-center gap-3">
          <span class="inline-flex h-9 w-9 items-center justify-center rounded-full bg-white/15">
            <i class="ri-time-line text-lg"></i>
          </span>
          <div>
            <p class="font-semibold">Red de Profesionales</p>
            <p class="text-white/70 text-xs">Con orgullo ISEC</p>
          </div>
        </div>
        <div class="flex items-center gap-3">
          <span class="inline-flex h-9 w-9 items-center justify-center rounded-full bg-white/15">
            <i class="ri-medal-line text-lg"></i>
          </span>
          <div>
            <p class="font-semibold">Beneficios</p>
            <p class="text-white/70 text-xs">Apoyos para egresados</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="mt-10 text-center">
    <h1 class="text-2xl sm:text-3xl font-semibold text-[#0b2c65]">Egresados | Red de Profesionales Universidad de Negocios ISEC</h1>
  </section>

  <section class="mt-8">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-0 rounded-2xl border border-slate-200 bg-white overflow-hidden">
      <a class="p-6 text-center transition hover:bg-slate-50 border-b sm:border-r border-slate-200 block" href="<?php echo $base; ?>/egresados/dejanos-saber">
        <div class="mx-auto h-14 w-14 rounded-full bg-[#0b2c65] text-white flex items-center justify-center"><i class="ri-user-star-line text-2xl"></i></div>
        <h3 class="mt-3 font-semibold text-[#0b2c65]">Déjanos Saber de Ti</h3>
        <p class="mt-2 text-sm text-slate-600">Queremos saber que has hecho</p>
      </a>
      <a class="p-6 text-center transition hover:bg-slate-50 border-b lg:border-b sm:border-r border-slate-200 block" href="<?php echo $base; ?>/comunidad/bolsa-de-trabajo">
        <div class="mx-auto h-14 w-14 rounded-full bg-[#0b2c65] text-white flex items-center justify-center"><i class="ri-briefcase-4-line text-2xl"></i></div>
        <h3 class="mt-3 font-semibold text-[#0b2c65]">Bolsa de Trabajo</h3>
        <p class="mt-2 text-sm text-slate-600">Aquí te mostramos nuestra bolsa de trabajo</p>
      </a>
      <div class="p-6 text-center transition hover:bg-slate-50 border-b border-slate-200 lg:border-b">
        <div class="mx-auto h-14 w-14 rounded-full bg-[#0b2c65] text-white flex items-center justify-center"><i class="ri-graduation-cap-line text-2xl"></i></div>
        <h3 class="mt-3 font-semibold text-[#0b2c65]">E-Learning</h3>
      </div>

      <a class="p-6 text-center transition hover:bg-slate-50 border-b sm:border-r border-slate-200 block" href="<?php echo $base; ?>/comunidad/buzon-del-rector">
        <div class="mx-auto h-14 w-14 rounded-full bg-[#0b2c65] text-white flex items-center justify-center"><i class="ri-mail-open-line text-2xl"></i></div>
        <h3 class="mt-3 font-semibold text-[#0b2c65]">Buzón del Rector</h3>
        <p class="mt-2 text-sm text-slate-600">Comunicación directa para brindarte la mejor atención y un servicio personalizado</p>
      </a>
      <div class="p-6 text-center transition hover:bg-slate-50 border-b lg:border-b sm:border-r border-slate-200">
        <div class="mx-auto h-14 w-14 rounded-full bg-[#0b2c65] text-white flex items-center justify-center"><i class="ri-gift-line text-2xl"></i></div>
        <h3 class="mt-3 font-semibold text-[#0b2c65]">Beneficios</h3>
        <p class="mt-2 text-sm text-slate-600">Consulta aquí todos beneficios que recibes por ser egresado ISEC</p>
      </div>
      <a class="p-6 text-center transition hover:bg-slate-50 border-b border-slate-200 lg:border-b block" href="<?php echo $base; ?>/oferta-educativa">
        <div class="mx-auto h-14 w-14 rounded-full bg-[#0b2c65] text-white flex items-center justify-center"><i class="ri-book-open-line text-2xl"></i></div>
        <h3 class="mt-3 font-semibold text-[#0b2c65]">Oferta Educativa para Egresados</h3>
        <p class="mt-2 text-sm text-slate-600">Continua tu formación académica y profesional con nosotros</p>
      </a>

      <a class="p-6 text-center transition hover:bg-slate-50 border-t border-slate-200 sm:border-t-0 block" href="https://uneg.edu.mx/comunidad/egresados/buzon-del-rector">
        <div class="mx-auto h-14 w-14 rounded-full bg-[#0b2c65] text-white flex items-center justify-center"><i class="ri-mail-line text-2xl"></i></div>
        <h3 class="mt-3 font-semibold text-[#0b2c65]">Office 365</h3>
        <p class="mt-2 text-sm text-slate-600">Acceder a correo electrónico</p>
      </a>
    </div>
  </section>
</main>

<?php require __DIR__ . '/partials/footer.php'; ?>
