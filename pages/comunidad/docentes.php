<?php
$title = 'Docentes | UNEG';
$active = 'comunidad';
require __DIR__ . '/../partials/header.php';
?>

<main class="max-w-7xl mx-auto px-4 py-10">
  <section class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
    <img src="<?php echo $assetBase; ?>/imgs/nms/cch/hero.png" alt="Docentes" class="block w-full h-auto" loading="eager">
    <div class="bg-[#0b2c65] text-white">
      <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 px-5 py-4 text-sm">
        <div class="flex items-center gap-3">
          <span class="inline-flex h-9 w-9 items-center justify-center rounded-full bg-white/15">
            <i class="ri-school-line text-lg"></i>
          </span>
          <div>
            <p class="font-semibold">Comunidad</p>
            <p class="text-white/70 text-xs">Docentes</p>
          </div>
        </div>
        <div class="flex items-center gap-3">
          <span class="inline-flex h-9 w-9 items-center justify-center rounded-full bg-white/15">
            <i class="ri-time-line text-lg"></i>
          </span>
          <div>
            <p class="font-semibold">Actualización</p>
            <p class="text-white/70 text-xs">Recursos docentes</p>
          </div>
        </div>
        <div class="flex items-center gap-3">
          <span class="inline-flex h-9 w-9 items-center justify-center rounded-full bg-white/15">
            <i class="ri-medal-line text-lg"></i>
          </span>
          <div>
            <p class="font-semibold">Soporte</p>
            <p class="text-white/70 text-xs">Información académica</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="mt-10 text-center">
    <h1 class="text-2xl sm:text-2xl font-semibold text-[#0b2c65]">Docentes | Información y Recursos para Profesores</h1>
  </section>

  <section class="mt-8">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-0 rounded-2xl border border-slate-200 bg-white overflow-hidden">
      <div class="p-6 text-center transition hover:bg-slate-50 border-b sm:border-r border-slate-200">
        <div class="mx-auto h-14 w-14 rounded-full bg-[#0b2c65] text-white flex items-center justify-center"><i class="ri-mail-line text-2xl"></i></div>
        <h3 class="mt-3 font-semibold text-[#0b2c65]">Office 365</h3>
        <p class="mt-2 text-sm text-slate-600">Acceder a correo electrónico</p>
      </div>
      <div class="p-6 text-center transition hover:bg-slate-50 border-b sm:border-r border-slate-200">
        <div class="mx-auto h-14 w-14 rounded-full bg-[#0b2c65] text-white flex items-center justify-center"><i class="ri-calendar-2-line text-2xl"></i></div>
        <h3 class="mt-3 font-semibold text-[#0b2c65]">Calendario Académico</h3>
        <p class="mt-2 text-sm text-slate-600">Consultar los calendarios para las diferentes modalidades y niveles</p>
      </div>
      <div class="p-6 text-center transition hover:bg-slate-50 border-b border-slate-200">
        <div class="mx-auto h-14 w-14 rounded-full bg-[#0b2c65] text-white flex items-center justify-center"><i class="ri-door-line text-2xl"></i></div>
        <h3 class="mt-3 font-semibold text-[#0b2c65]">Portal Escolar</h3>
      </div>

      <div class="p-6 text-center transition hover:bg-slate-50 border-b sm:border-r border-slate-200">
        <div class="mx-auto h-14 w-14 rounded-full bg-[#0b2c65] text-white flex items-center justify-center"><i class="ri-calendar-event-line text-2xl"></i></div>
        <h3 class="mt-3 font-semibold text-[#0b2c65]">Eventos Docentes</h3>
        <p class="mt-2 text-sm text-slate-600">Consultar próximas actividades</p>
      </div>
      <div class="p-6 text-center transition hover:bg-slate-50 border-b sm:border-r border-slate-200">
        <div class="mx-auto h-14 w-14 rounded-full bg-[#0b2c65] text-white flex items-center justify-center"><i class="ri-send-plane-line text-2xl"></i></div>
        <h3 class="mt-3 font-semibold text-[#0b2c65]">Buzón del Rector</h3>
        <p class="mt-2 text-sm text-slate-600">Comunicación directa para brindarte la mejor atención y un servicio personalizado</p>
      </div>
      <div class="p-6 text-center transition hover:bg-slate-50 border-b border-slate-200">
        <div class="mx-auto h-14 w-14 rounded-full bg-[#0b2c65] text-white flex items-center justify-center"><i class="ri-computer-line text-2xl"></i></div>
        <h3 class="mt-3 font-semibold text-[#0b2c65]">E-Learning</h3>
      </div>

      <div class="p-6 text-center transition hover:bg-slate-50 border-b border-slate-200 sm:border-t-0 sm:border-r border-slate-200">
        <div class="mx-auto h-14 w-14 rounded-full bg-[#0b2c65] text-white flex items-center justify-center"><i class="ri-team-line text-2xl"></i></div>
        <h3 class="mt-3 font-semibold text-[#0b2c65]">Nuestro Claustro Docente</h3>
      </div>
    </div>
  </section>
</main>

<?php require __DIR__ . '/../partials/footer.php'; ?>
