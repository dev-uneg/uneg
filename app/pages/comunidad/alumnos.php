<?php
$title = 'Alumnos | UNEG';
$active = 'comunidad';
require __DIR__ . '/../partials/header.php';
?>
<main class="max-w-7xl mx-auto px-4 py-10">
  <section class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
    <img src="<?php echo $assetBase; ?>/imgs/comunidad/alumnos/hero-alumnos.png" alt="Alumnos ISEC" class="block w-full h-auto" loading="eager">
  </section>
  <section class="mt-10 text-center">
    <h1 class="text-2xl sm:text-3xl font-semibold text-[#0b2c65]">Alumnos ISEC</h1>
    <p class="mt-3 text-slate-600">Información y recursos para estudiantes.</p>
  </section>
  <section class="mt-8">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-0 rounded-2xl border border-slate-200 bg-white overflow-hidden">
      <a href="<?php echo $base; ?>/comunidad/reglamento-general" class="p-6 text-center transition hover:bg-slate-50 border-b sm:border-r border-slate-200">
        <div class="mx-auto h-14 w-14 rounded-full bg-[#0b2c65] text-white flex items-center justify-center"><i class="ri-graduation-cap-line text-2xl"></i></div>
        <h3 class="mt-3 font-semibold text-[#0b2c65]">Reglamento General</h3>
        <p class="mt-2 text-sm text-slate-600">Para estudios de bachillerato técnico, licenciatura y posgrado</p>
      </a>
      <a href="https://www.office.com/" target="_blank" rel="noopener" class="p-6 text-center transition hover:bg-slate-50 border-b lg:border-b sm:border-r border-slate-200">
        <div class="mx-auto h-14 w-14 rounded-full bg-[#0b2c65] text-white flex items-center justify-center"><i class="ri-mail-line text-2xl"></i></div>
        <h3 class="mt-3 font-semibold text-[#0b2c65]">Office 365</h3>
        <p class="mt-2 text-sm text-slate-600">Acceder a correo electrónico</p>
      </a>
      <a href="<?php echo $base; ?>/comunidad/calendario-academico" class="p-6 text-center transition hover:bg-slate-50 border-b border-slate-200 lg:border-b">
        <div class="mx-auto h-14 w-14 rounded-full bg-[#0b2c65] text-white flex items-center justify-center"><i class="ri-calendar-line text-2xl"></i></div>
        <h3 class="mt-3 font-semibold text-[#0b2c65]">Calendario Académico</h3>
        <p class="mt-2 text-sm text-slate-600">Consultar calendarios por modalidad y nivel</p>
      </a>

      <a href="https://uneg.academic.lat/" target="_blank" rel="noopener" class="p-6 text-center transition hover:bg-slate-50 border-b sm:border-r border-slate-200">
        <div class="mx-auto h-14 w-14 rounded-full bg-[#0b2c65] text-white flex items-center justify-center"><i class="ri-book-2-line text-2xl"></i></div>
        <h3 class="mt-3 font-semibold text-[#0b2c65]">Portal Escolar</h3>
      </a>
      <a href="<?php echo $base; ?>/comunidad/recursos-servicios" class="p-6 text-center transition hover:bg-slate-50 border-b lg:border-b sm:border-r border-slate-200">
        <div class="mx-auto h-14 w-14 rounded-full bg-[#0b2c65] text-white flex items-center justify-center"><i class="ri-cloud-line text-2xl"></i></div>
        <h3 class="mt-3 font-semibold text-[#0b2c65]">Recursos y Servicios Adicionales</h3>
        <p class="mt-2 text-sm text-slate-600">Consultar recursos disponibles para estudiantes ISEC</p>
      </a>
      <a href="<?php echo $base; ?>/comunidad/buzon-del-rector" class="p-6 text-center transition hover:bg-slate-50 border-b border-slate-200 lg:border-b">
        <div class="mx-auto h-14 w-14 rounded-full bg-[#0b2c65] text-white flex items-center justify-center"><i class="ri-send-plane-line text-2xl"></i></div>
        <h3 class="mt-3 font-semibold text-[#0b2c65]">Buzón del Rector</h3>
        <p class="mt-2 text-sm text-slate-600">Comunicación directa para brindarte la mejor atención</p>
      </a>

      <a href="<?php echo $base; ?>/comunidad/eventos" class="p-6 text-center transition hover:bg-slate-50 border-b sm:border-r border-slate-200">
        <div class="mx-auto h-14 w-14 rounded-full bg-[#0b2c65] text-white flex items-center justify-center"><i class="ri-calendar-event-line text-2xl"></i></div>
        <h3 class="mt-3 font-semibold text-[#0b2c65]">Eventos</h3>
        <p class="mt-2 text-sm text-slate-600">Consultar eventos próximos para estudiantes ISEC</p>
      </a>
      <a href="<?php echo $base; ?>/comunidad/servicio-social" class="p-6 text-center transition hover:bg-slate-50 border-b sm:border-r border-slate-200">
        <div class="mx-auto h-14 w-14 rounded-full bg-[#0b2c65] text-white flex items-center justify-center"><i class="ri-briefcase-4-line text-2xl"></i></div>
        <h3 class="mt-3 font-semibold text-[#0b2c65]">Servicio Social</h3>
        <p class="mt-2 text-sm text-slate-600">Informes para realizar tu Servicio Social</p>
      </a>
      <a href="<?php echo $base; ?>/comunidad/bolsa-de-trabajo" class="p-6 text-center transition hover:bg-slate-50 border-b border-slate-200">
        <div class="mx-auto h-14 w-14 rounded-full bg-[#0b2c65] text-white flex items-center justify-center"><i class="ri-briefcase-line text-2xl"></i></div>
        <h3 class="mt-3 font-semibold text-[#0b2c65]">Bolsa de Trabajo</h3>
        <p class="mt-2 text-sm text-slate-600">Aquí te mostramos nuestra bolsa de trabajo</p>
      </a>
      <a href="<?php echo $base; ?>/comunidad/himno-isec" class="p-6 text-center transition hover:bg-slate-50 border-t border-slate-200 sm:border-t-0 sm:border-r">
        <div class="mx-auto h-14 w-14 rounded-full bg-[#0b2c65] text-white flex items-center justify-center"><i class="ri-music-2-line text-2xl"></i></div>
        <h3 class="mt-3 font-semibold text-[#0b2c65]">Himno ISEC</h3>
      </a>
      <div class="p-6 text-center transition hover:bg-slate-50 border-t border-slate-200 sm:border-t-0 sm:border-r">
        <div class="mx-auto h-14 w-14 rounded-full bg-[#0b2c65] text-white flex items-center justify-center"><i class="ri-brain-line text-2xl"></i></div>
        <h3 class="mt-3 font-semibold text-[#0b2c65]">Facultad de Psicología</h3>
        <p class="mt-2 text-sm text-slate-600">Campos Clínicos, Servicio Social, Titulación e Idioma</p>
      </div>
      <div class="p-6 text-center transition hover:bg-slate-50 border-t border-slate-200 sm:border-t-0">
        <div class="mx-auto h-14 w-14 rounded-full bg-[#0b2c65] text-white flex items-center justify-center"><i class="ri-book-2-line text-2xl"></i></div>
        <h3 class="mt-3 font-semibold text-[#0b2c65]">Facultad de Pedagogía</h3>
        <p class="mt-2 text-sm text-slate-600">Servicio Social, Titulación e Idioma</p>
      </div>
    </div>
  </section>
</main>
<?php require __DIR__ . '/../partials/footer.php'; ?>
