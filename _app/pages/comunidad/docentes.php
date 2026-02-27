<?php
$title = 'Docentes | UNEG';
$active = 'comunidad';
require __DIR__ . '/../partials/header.php';
?>
<main class="max-w-7xl mx-auto px-4 py-10">
  <section class="overflow-hidden rounded-2xl border border-slate-200 bg-[linear-gradient(110deg,#082a63_0%,#0b2c65_40%,#1348a7_100%)] shadow-sm">
    <div class="px-6 py-10 sm:px-10 sm:py-14 lg:px-14 lg:py-16 text-white">
      <p class="text-lg sm:text-2xl font-medium tracking-wide">VOCACIÓN AUTÉNTICA</p>
      <h2 class="mt-3 text-5xl sm:text-6xl lg:text-7xl font-black leading-none text-[#80d7ff]">DOCENTES UNEG</h2>
      <p class="mt-6 max-w-4xl text-xl sm:text-2xl lg:text-3xl font-medium leading-tight">
        AQUÍ ENCONTRARÁS TODO LO RELACIONADO CON LOS DOCENTES DE LA UNIVERSIDAD DE NEGOCIOS ISEC
      </p>
    </div>
  </section>
  <section class="mt-10 text-center">
    <h1 class="text-2xl sm:text-3xl font-semibold text-[#0b2c65]">Docentes | Información y Recursos para Profesores</h1>
  </section>
  <section class="mt-8">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-0 rounded-2xl border border-slate-200 bg-white overflow-hidden">
      <a href="https://login.microsoftonline.com/login.srf" target="_blank" rel="noopener" class="p-6 text-center transition hover:bg-slate-50 border-b sm:border-r border-slate-200 block">
        <div class="mx-auto h-14 w-14 rounded-full bg-[#0b2c65] text-white flex items-center justify-center"><i class="text-2xl" data-lucide="mail"></i></div>
        <h3 class="mt-3 font-semibold text-[#0b2c65]">Office 365</h3>
        <p class="mt-2 text-sm text-slate-600">Acceder a correo electrónico</p>
      </a>
      <a href="<?php echo $base; ?>/comunidad/calendario-academico" class="p-6 text-center transition hover:bg-slate-50 border-b lg:border-b sm:border-r border-slate-200 block">
        <div class="mx-auto h-14 w-14 rounded-full bg-[#0b2c65] text-white flex items-center justify-center"><i class="text-2xl" data-lucide="calendar"></i></div>
        <h3 class="mt-3 font-semibold text-[#0b2c65]">Calendario Académico</h3>
        <p class="mt-2 text-sm text-slate-600">Consultar calendarios para diferentes modalidades y niveles</p>
      </a>
      <a href="https://uneg.academic.lat/Autenticacion.aspx" target="_blank" rel="noopener" class="p-6 text-center transition hover:bg-slate-50 border-b border-slate-200 lg:border-b block">
        <div class="mx-auto h-14 w-14 rounded-full bg-[#0b2c65] text-white flex items-center justify-center"><i class="text-2xl" data-lucide="book-open"></i></div>
        <h3 class="mt-3 font-semibold text-[#0b2c65]">Portal Escolar</h3>
      </a>

      <a href="<?php echo $base; ?>/comunidad/eventos-docentes" class="p-6 text-center transition hover:bg-slate-50 border-b sm:border-r border-slate-200 block">
        <div class="mx-auto h-14 w-14 rounded-full bg-[#0b2c65] text-white flex items-center justify-center"><i class="text-2xl" data-lucide="list-checks"></i></div>
        <h3 class="mt-3 font-semibold text-[#0b2c65]">Eventos Docentes</h3>
        <p class="mt-2 text-sm text-slate-600">Consultar próximas actividades</p>
      </a>
      <a href="<?php echo $base; ?>/comunidad/buzon-del-rector" class="p-6 text-center transition hover:bg-slate-50 border-b lg:border-b sm:border-r border-slate-200 block">
        <div class="mx-auto h-14 w-14 rounded-full bg-[#0b2c65] text-white flex items-center justify-center"><i class="text-2xl" data-lucide="send"></i></div>
        <h3 class="mt-3 font-semibold text-[#0b2c65]">Buzón del Rector</h3>
        <p class="mt-2 text-sm text-slate-600">Comunicación directa para brindarte la mejor atención</p>
      </a>
      <div class="p-6 text-center transition hover:bg-slate-50 border-b border-slate-200 lg:border-b">
        <div class="mx-auto h-14 w-14 rounded-full bg-[#0b2c65] text-white flex items-center justify-center"><i class="text-2xl" data-lucide="earth"></i></div>
        <h3 class="mt-3 font-semibold text-[#0b2c65]">E-Learning</h3>
      </div>

      <a href="<?php echo $base; ?>/comunidad/claustro-docente" class="p-6 text-center transition hover:bg-slate-50 border-slate-200">
        <div class="mx-auto h-14 w-14 rounded-full bg-[#0b2c65] text-white flex items-center justify-center"><i class="text-2xl" data-lucide="user"></i></div>
        <h3 class="mt-3 font-semibold text-[#0b2c65]">Nuestro Claustro Docente</h3>
      </a>
    </div>
  </section>
</main>
<?php require __DIR__ . '/../partials/footer.php'; ?>
