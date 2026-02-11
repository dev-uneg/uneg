<?php
$title = 'Alumnos | UNEG';
$active = 'comunidad';
require __DIR__ . '/../partials/header.php';
?>

<main class="max-w-7xl mx-auto px-4 py-10">
  <section class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
    <img src="<?php echo $assetBase; ?>/imgs/nms/cch/hero.png" alt="Alumnos ISEC" class="block w-full h-auto" loading="eager">
    <div class="bg-[#0b2c65] text-white">
      <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 px-5 py-4 text-sm">
        <div class="flex items-center gap-3">
          <span class="inline-flex h-9 w-9 items-center justify-center rounded-full bg-white/15">
            <i class="ri-school-line text-lg"></i>
          </span>
          <div>
            <p class="font-semibold">Comunidad</p>
            <p class="text-white/70 text-xs">Alumnos ISEC</p>
          </div>
        </div>
        <div class="flex items-center gap-3">
          <span class="inline-flex h-9 w-9 items-center justify-center rounded-full bg-white/15">
            <i class="ri-time-line text-lg"></i>
          </span>
          <div>
            <p class="font-semibold">Atención</p>
            <p class="text-white/70 text-xs">Recursos y servicios</p>
          </div>
        </div>
        <div class="flex items-center gap-3">
          <span class="inline-flex h-9 w-9 items-center justify-center rounded-full bg-white/15">
            <i class="ri-medal-line text-lg"></i>
          </span>
          <div>
            <p class="font-semibold">Accesos</p>
            <p class="text-white/70 text-xs">Información académica</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="mt-10">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-0 rounded-2xl border border-slate-200 bg-white overflow-hidden">
      <div class="p-6 text-center transition hover:bg-slate-50 border-b sm:border-r border-slate-200">
        <div class="mx-auto h-14 w-14 rounded-full bg-[#0b2c65] text-white flex items-center justify-center"><i class="ri-file-text-line text-2xl"></i></div>
        <h3 class="mt-3 font-semibold text-[#0b2c65]">Reglamento general</h3>
        <p class="mt-2 text-sm text-slate-600">Para estudios de bachillerato técnico, licenciatura y posgrado</p>
      </div>
      <div class="p-6 text-center transition hover:bg-slate-50 border-b sm:border-r border-slate-200">
        <div class="mx-auto h-14 w-14 rounded-full bg-[#0b2c65] text-white flex items-center justify-center"><i class="ri-mail-line text-2xl"></i></div>
        <h3 class="mt-3 font-semibold text-[#0b2c65]">Office 365</h3>
        <p class="mt-2 text-sm text-slate-600">Acceder a correo electrónico</p>
      </div>
      <div class="p-6 text-center transition hover:bg-slate-50 border-b border-slate-200">
        <div class="mx-auto h-14 w-14 rounded-full bg-[#0b2c65] text-white flex items-center justify-center"><i class="ri-calendar-2-line text-2xl"></i></div>
        <h3 class="mt-3 font-semibold text-[#0b2c65]">Calendario Académico</h3>
        <p class="mt-2 text-sm text-slate-600">Consultar los calendarios para las diferentes modalidades y niveles</p>
      </div>

      <div class="p-6 text-center transition hover:bg-slate-50 border-b sm:border-r border-slate-200">
        <div class="mx-auto h-14 w-14 rounded-full bg-[#0b2c65] text-white flex items-center justify-center"><i class="ri-door-line text-2xl"></i></div>
        <h3 class="mt-3 font-semibold text-[#0b2c65]">Portal Escolar</h3>
      </div>
      <div class="p-6 text-center transition hover:bg-slate-50 border-b sm:border-r border-slate-200">
        <div class="mx-auto h-14 w-14 rounded-full bg-[#0b2c65] text-white flex items-center justify-center"><i class="ri-book-2-line text-2xl"></i></div>
        <h3 class="mt-3 font-semibold text-[#0b2c65]">Recursos y Servicios Adicionales</h3>
        <p class="mt-2 text-sm text-slate-600">Consultar los recursos disponibles para estudiantes ISEC</p>
      </div>
      <div class="p-6 text-center transition hover:bg-slate-50 border-b border-slate-200">
        <div class="mx-auto h-14 w-14 rounded-full bg-[#0b2c65] text-white flex items-center justify-center"><i class="ri-send-plane-line text-2xl"></i></div>
        <h3 class="mt-3 font-semibold text-[#0b2c65]">Buzón del Rector</h3>
        <p class="mt-2 text-sm text-slate-600">Comunicación directa para brindarte la mejor atención y un servicio personalizado</p>
      </div>

      <div class="p-6 text-center transition hover:bg-slate-50 border-b sm:border-r border-slate-200">
        <div class="mx-auto h-14 w-14 rounded-full bg-[#0b2c65] text-white flex items-center justify-center"><i class="ri-calendar-event-line text-2xl"></i></div>
        <h3 class="mt-3 font-semibold text-[#0b2c65]">Eventos</h3>
        <p class="mt-2 text-sm text-slate-600">Consultar aquí todos eventos próximos para estudiantes ISEC</p>
      </div>
      <div class="p-6 text-center transition hover:bg-slate-50 border-b sm:border-r border-slate-200">
        <div class="mx-auto h-14 w-14 rounded-full bg-[#0b2c65] text-white flex items-center justify-center"><i class="ri-hand-heart-line text-2xl"></i></div>
        <h3 class="mt-3 font-semibold text-[#0b2c65]">Servicio Social</h3>
        <p class="mt-2 text-sm text-slate-600">Informes para realizar tu Servicio Social</p>
      </div>
      <div class="p-6 text-center transition hover:bg-slate-50">
        <div class="mx-auto h-14 w-14 rounded-full bg-[#0b2c65] text-white flex items-center justify-center"><i class="ri-briefcase-4-line text-2xl"></i></div>
        <h3 class="mt-3 font-semibold text-[#0b2c65]">Bolsa de Trabajo</h3>
        <p class="mt-2 text-sm text-slate-600">Aquí te mostramos nuestra bolsa de trabajo</p>
      </div>

      <div class="p-6 text-center transition hover:bg-slate-50 border-b border-slate-200 sm:border-t-0 sm:border-r border-slate-200">
        <div class="mx-auto h-14 w-14 rounded-full bg-[#0b2c65] text-white flex items-center justify-center"><i class="ri-music-2-line text-2xl"></i></div>
        <h3 class="mt-3 font-semibold text-[#0b2c65]">Himno ISEC</h3>
      </div>
      <div class="p-6 text-center transition hover:bg-slate-50 border-b border-slate-200 sm:border-t-0 sm:border-r border-slate-200">
        <div class="mx-auto h-14 w-14 rounded-full bg-[#0b2c65] text-white flex items-center justify-center"><i class="ri-brain-line text-2xl"></i></div>
        <h3 class="mt-3 font-semibold text-[#0b2c65]">Facultad de Psicología</h3>
        <p class="mt-2 text-sm text-slate-600">Campos Clínicos, Servicio Social, Titulación e Idioma</p>
      </div>
      <div class="p-6 text-center transition hover:bg-slate-50 border-b border-slate-200 sm:border-t-0">
        <div class="mx-auto h-14 w-14 rounded-full bg-[#0b2c65] text-white flex items-center justify-center"><i class="ri-book-mark-line text-2xl"></i></div>
        <h3 class="mt-3 font-semibold text-[#0b2c65]">Facultad de Pedagogía</h3>
        <p class="mt-2 text-sm text-slate-600">Servicio Social, Titulación e Idioma</p>
      </div>
    </div>
  </section>
</main>

<?php require __DIR__ . '/../partials/footer.php'; ?>
