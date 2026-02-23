<?php
$title = 'Recursos y Servicios | UNEG';
$active = 'comunidad';
require __DIR__ . '/../partials/header.php';
?>
<main class="max-w-7xl mx-auto px-4 py-10">
  <section class="relative overflow-hidden rounded-2xl bg-gradient-to-r from-[#1f56ad] via-[#2f6bd0] to-[#5a8fe0] text-white">
    <div class="absolute inset-0 opacity-20 bg-[radial-gradient(circle_at_top,rgba(255,255,255,0.35),transparent_55%)]"></div>
    <div class="relative px-6 py-12 text-center">
      <p class="text-sm tracking-[0.35em] uppercase">Universidad de Negocios ISEC</p>
      <h1 class="mt-4 text-3xl sm:text-5xl font-semibold">Recursos y Servicios Adicionales</h1>
      <p class="mt-4 text-base sm:text-lg">Herramientas y recursos para estudiantes ISEC.</p>
    </div>
  </section>

  <section class="mt-10">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-0 rounded-2xl border border-slate-200 bg-white overflow-hidden">
      <a href="http://impreweb.ddns.net:48110/PMPWeb/" target="_blank" rel="noopener" class="p-8 text-center border-b sm:border-r border-slate-200 hover:bg-slate-50 transition">
        <div class="mx-auto h-16 w-16 rounded-full bg-[#0b2c65] text-white flex items-center justify-center">
          <i class="ri-printer-line text-2xl"></i>
        </div>
        <h3 class="mt-4 font-semibold text-[#0b2c65]">Kiosko de Impresión</h3>
      </a>
      <a href="https://login.microsoftonline.com/login.srf" target="_blank" rel="noopener" class="p-8 text-center border-b lg:border-b sm:border-r border-slate-200 hover:bg-slate-50 transition">
        <div class="mx-auto h-16 w-16 rounded-full bg-[#0b2c65] text-white flex items-center justify-center">
          <i class="ri-mail-line text-2xl"></i>
        </div>
        <h3 class="mt-4 font-semibold text-[#0b2c65]">Office 365</h3>
      </a>
      <div class="p-8 text-center border-b border-slate-200 lg:border-b">
        <div class="mx-auto h-16 w-16 rounded-full bg-[#0b2c65] text-white flex items-center justify-center">
          <i class="ri-earth-line text-2xl"></i>
        </div>
        <h3 class="mt-4 font-semibold text-[#0b2c65]">E-Learning</h3>
      </div>

      <a href="https://uneg.academic.lat/Autenticacion.aspx" target="_blank" rel="noopener" class="p-8 text-center border-b sm:border-r border-slate-200 hover:bg-slate-50 transition">
        <div class="mx-auto h-16 w-16 rounded-full bg-[#0b2c65] text-white flex items-center justify-center">
          <i class="ri-computer-line text-2xl"></i>
        </div>
        <h3 class="mt-4 font-semibold text-[#0b2c65]">Portal Escolar</h3>
      </a>
      <a href="<?php echo $base; ?>/comunidad/reglamentos" class="p-8 text-center border-b lg:border-b sm:border-r border-slate-200 hover:bg-slate-50 transition">
        <div class="mx-auto h-16 w-16 rounded-full bg-[#0b2c65] text-white flex items-center justify-center">
          <i class="ri-file-list-3-line text-2xl"></i>
        </div>
        <h3 class="mt-4 font-semibold text-[#0b2c65]">Reglamentos</h3>
      </a>
      <a href="<?php echo $base; ?>/comunidad/beneficios" class="p-8 text-center border-slate-200 hover:bg-slate-50 transition">
        <div class="mx-auto h-16 w-16 rounded-full bg-[#0b2c65] text-white flex items-center justify-center">
          <i class="ri-price-tag-3-line text-2xl"></i>
        </div>
        <h3 class="mt-4 font-semibold text-[#0b2c65]">Beneficios</h3>
      </a>
    </div>
  </section>
</main>
<?php require __DIR__ . '/../partials/footer.php'; ?>
