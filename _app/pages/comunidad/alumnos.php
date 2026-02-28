<?php
$title = 'Alumnos | UNEG';
$active = 'comunidad';
require __DIR__ . '/../partials/header.php';
?>
<main class="max-w-7xl mx-auto px-4 py-10">
  <section class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
    <img src="<?php echo $assetBase; ?>/_imgs/comunidad/alumnos/hero-alumnos.webp" alt="Alumnos ISEC" class="block w-full h-auto" loading="eager">
  </section>
  <section class="mt-10 text-center">
    <h1 class="text-2xl sm:text-3xl font-semibold text-[#0b2c65]">Alumnos ISEC</h1>
    <p class="mt-3 text-slate-600">Información y recursos para estudiantes.</p>
  </section>
  <section class="mt-8">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-0 rounded-2xl border border-slate-200 bg-white overflow-hidden">
      <a href="<?php echo $base; ?>/comunidad/reglamento-general" class="p-6 text-center transition hover:bg-slate-50 border-b sm:border-r border-slate-200">
        <div class="mx-auto h-14 w-14 rounded-full bg-[#0b2c65] text-white flex items-center justify-center"><i class="text-2xl" data-lucide="graduation-cap"></i></div>
        <h3 class="mt-3 font-semibold text-[#0b2c65]">Reglamento General</h3>
        <p class="mt-2 text-sm text-slate-600">Para estudios de bachillerato técnico, licenciatura y posgrado</p>
      </a>
      <a href="https://login.microsoftonline.com/common/oauth2/v2.0/authorize?client_id=4765445b-32c6-49b0-83e6-1d93765276ca&redirect_uri=https%3A%2F%2Fwww.office.com%2Flandingv2&response_type=code%20id_token&scope=openid%20profile%20https%3A%2F%2Fwww.office.com%2Fv2%2FOfficeHome.All&response_mode=form_post&nonce=639078376282838516.ZGI1YWNhNmItYmNhYS00ZjMwLWEwMDYtZTMwYzhiNDQyZGRkZTNmMjBlNzItY2JkMi00NWMzLTliYjMtZWM5YjI3ZjI0OGI0&ui_locales=es-ES&mkt=es-ES&client-request-id=6666c38c-865a-47ab-8acd-53d6f7a9c537&state=emfKGd9YQVQMNIjKmhAoO3M4f-D3qf9tT2rqMl_EwQRfCi1b0u_eq-XsZIMmE2M-N3G6pg8zrBbB0mxtX3rS5BUQmyf4jmjzNsOq4rM5bWYo4j57eBeawYHM9bGF0f53CXEKZf0BWFY_DdKgEQcsIuJyVnGTryrtpkkY6BcYqCDbQmURHsbNN8Rk1Afxpy9zc20RqIYdW9ucTc0SZwpe-sjOH0_R8Odmws73H8MPwS0lbAUetbAuH09nUxT8HkXtVNAPj6E7EWLoMU6c2XpxEcNUj1Urrz5i5QNHRnd7yi5eE2GTFzaIMW4O8q32wSRk1PWiV6MibHPHEwOVMpal0LGxutBlAlT69qXfo1ldIEMTUg9ARbf2KvZTAixEPsolsLyWNt6hNgfVmF3pNpNFSkY6yEwcjWTgU3A1fAEk7xEvj2IFVMu68uEUawB1HdjyjUEmB0CF_YtBE_g75mUe_A&x-client-SKU=ID_NET8_0&x-client-ver=8.14.0.0" target="_blank" rel="noopener" class="p-6 text-center transition hover:bg-slate-50 border-b lg:border-b sm:border-r border-slate-200">
        <div class="mx-auto h-14 w-14 rounded-full bg-[#0b2c65] text-white flex items-center justify-center"><i class="text-2xl" data-lucide="mail"></i></div>
        <h3 class="mt-3 font-semibold text-[#0b2c65]">Office 365</h3>
        <p class="mt-2 text-sm text-slate-600">Acceder a correo electrónico</p>
      </a>
      <a href="<?php echo $base; ?>/comunidad/calendario-academico" class="p-6 text-center transition hover:bg-slate-50 border-b border-slate-200 lg:border-b">
        <div class="mx-auto h-14 w-14 rounded-full bg-[#0b2c65] text-white flex items-center justify-center"><i class="text-2xl" data-lucide="calendar"></i></div>
        <h3 class="mt-3 font-semibold text-[#0b2c65]">Calendario Académico</h3>
        <p class="mt-2 text-sm text-slate-600">Consultar calendarios por modalidad y nivel</p>
      </a>

      <a href="https://uneg.academic.lat/" target="_blank" rel="noopener" class="p-6 text-center transition hover:bg-slate-50 border-b sm:border-r border-slate-200">
        <div class="mx-auto h-14 w-14 rounded-full bg-[#0b2c65] text-white flex items-center justify-center"><i class="text-2xl" data-lucide="book-open"></i></div>
        <h3 class="mt-3 font-semibold text-[#0b2c65]">Portal Escolar</h3>
      </a>
      <a href="<?php echo $base; ?>/comunidad/recursos-servicios" class="p-6 text-center transition hover:bg-slate-50 border-b lg:border-b sm:border-r border-slate-200">
        <div class="mx-auto h-14 w-14 rounded-full bg-[#0b2c65] text-white flex items-center justify-center"><i class="text-2xl" data-lucide="cloud"></i></div>
        <h3 class="mt-3 font-semibold text-[#0b2c65]">Recursos y Servicios Adicionales</h3>
        <p class="mt-2 text-sm text-slate-600">Consultar recursos disponibles para estudiantes ISEC</p>
      </a>
      <a href="<?php echo $base; ?>/comunidad/buzon-del-rector" class="p-6 text-center transition hover:bg-slate-50 border-b border-slate-200 lg:border-b">
        <div class="mx-auto h-14 w-14 rounded-full bg-[#0b2c65] text-white flex items-center justify-center"><i class="text-2xl" data-lucide="send"></i></div>
        <h3 class="mt-3 font-semibold text-[#0b2c65]">Buzón del Rector</h3>
        <p class="mt-2 text-sm text-slate-600">Comunicación directa para brindarte la mejor atención</p>
      </a>

      <a href="<?php echo $base; ?>/comunidad/eventos" class="p-6 text-center transition hover:bg-slate-50 border-b sm:border-r border-slate-200">
        <div class="mx-auto h-14 w-14 rounded-full bg-[#0b2c65] text-white flex items-center justify-center"><i class="text-2xl" data-lucide="calendar-days"></i></div>
        <h3 class="mt-3 font-semibold text-[#0b2c65]">Eventos</h3>
        <p class="mt-2 text-sm text-slate-600">Consultar eventos próximos para estudiantes ISEC</p>
      </a>
      <a href="<?php echo $base; ?>/comunidad/servicio-social" class="p-6 text-center transition hover:bg-slate-50 border-b sm:border-r border-slate-200">
        <div class="mx-auto h-14 w-14 rounded-full bg-[#0b2c65] text-white flex items-center justify-center"><i class="text-2xl" data-lucide="briefcase"></i></div>
        <h3 class="mt-3 font-semibold text-[#0b2c65]">Servicio Social</h3>
        <p class="mt-2 text-sm text-slate-600">Informes para realizar tu Servicio Social</p>
      </a>
      <a href="<?php echo $base; ?>/comunidad/bolsa-de-trabajo" class="p-6 text-center transition hover:bg-slate-50 border-b border-slate-200">
        <div class="mx-auto h-14 w-14 rounded-full bg-[#0b2c65] text-white flex items-center justify-center"><i class="text-2xl" data-lucide="briefcase"></i></div>
        <h3 class="mt-3 font-semibold text-[#0b2c65]">Bolsa de Trabajo</h3>
        <p class="mt-2 text-sm text-slate-600">Aquí te mostramos nuestra bolsa de trabajo</p>
      </a>
      <a href="<?php echo $base; ?>/comunidad/himno-isec" class="p-6 text-center transition hover:bg-slate-50 border-t border-slate-200 sm:border-t-0 sm:border-r">
        <div class="mx-auto h-14 w-14 rounded-full bg-[#0b2c65] text-white flex items-center justify-center"><i class="text-2xl" data-lucide="music"></i></div>
        <h3 class="mt-3 font-semibold text-[#0b2c65]">Himno ISEC</h3>
      </a>
      <div class="p-6 text-center transition hover:bg-slate-50 border-t border-slate-200 sm:border-t-0 sm:border-r">
        <div class="mx-auto h-14 w-14 rounded-full bg-[#0b2c65] text-white flex items-center justify-center"><i class="text-2xl" data-lucide="brain"></i></div>
        <h3 class="mt-3 font-semibold text-[#0b2c65]">Facultad de Psicología</h3>
        <p class="mt-2 text-sm text-slate-600">Campos Clínicos, Servicio Social, Titulación e Idioma</p>
      </div>
      <div class="p-6 text-center transition hover:bg-slate-50 border-t border-slate-200 sm:border-t-0">
        <div class="mx-auto h-14 w-14 rounded-full bg-[#0b2c65] text-white flex items-center justify-center"><i class="text-2xl" data-lucide="book-open"></i></div>
        <h3 class="mt-3 font-semibold text-[#0b2c65]">Facultad de Pedagogía</h3>
        <p class="mt-2 text-sm text-slate-600">Servicio Social, Titulación e Idioma</p>
      </div>
    </div>
  </section>
</main>
<?php require __DIR__ . '/../partials/footer.php'; ?>
