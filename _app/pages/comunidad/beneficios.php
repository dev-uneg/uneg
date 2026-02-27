<?php
$title = 'Beneficios | UNEG';
$active = 'comunidad';
require __DIR__ . '/../partials/header.php';
?>
<main class="max-w-7xl mx-auto px-4 py-10">
  <section class="relative overflow-hidden rounded-2xl bg-gradient-to-r from-[#1f56ad] via-[#2f6bd0] to-[#5a8fe0] text-white">
    <div class="absolute inset-0 opacity-20 bg-[radial-gradient(circle_at_top,rgba(255,255,255,0.35),transparent_55%)]"></div>
    <div class="relative px-6 py-12 text-center">
      <p class="text-sm tracking-[0.35em] uppercase">Universidad de Negocios ISEC</p>
      <h1 class="mt-4 text-3xl sm:text-5xl font-semibold">Beneficios</h1>
      <p class="mt-4 text-base sm:text-lg">Para poder acceder a los beneficios regístrate aquí.</p>
    </div>
  </section>

  <section class="mt-10">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-0 rounded-2xl border border-slate-200 bg-white overflow-hidden">
      <div class="p-6 text-center transition hover:bg-slate-50 border-b sm:border-r border-slate-200">
        <div class="mx-auto h-14 w-14 rounded-full bg-[#0b2c65] text-white flex items-center justify-center">
          <i class="text-2xl" data-lucide="graduation-cap"></i>
        </div>
        <h3 class="mt-3 font-semibold text-[#0b2c65]">Continúa tu Formación Académica</h3>
      </div>
      <div class="p-6 text-center transition hover:bg-slate-50 border-b lg:border-b sm:border-r border-slate-200">
        <div class="mx-auto h-14 w-14 rounded-full bg-[#0b2c65] text-white flex items-center justify-center">
          <i class="text-2xl" data-lucide="mail"></i>
        </div>
        <h3 class="mt-3 font-semibold text-[#0b2c65]">Correo Institucional</h3>
        <p class="mt-2 text-sm text-slate-600">Que además te proporciona Office 365 sin costo adicional.</p>
      </div>
      <div class="p-6 text-center transition hover:bg-slate-50 border-b border-slate-200 lg:border-b">
        <div class="mx-auto h-14 w-14 rounded-full bg-[#0b2c65] text-white flex items-center justify-center">
          <i class="text-2xl" data-lucide="briefcase"></i>
        </div>
        <h3 class="mt-3 font-semibold text-[#0b2c65]">Bolsa de Trabajo</h3>
      </div>
      <div class="p-6 text-center transition hover:bg-slate-50 border-b border-slate-200 sm:border-l lg:border-b">
        <div class="mx-auto h-14 w-14 rounded-full bg-[#0b2c65] text-white flex items-center justify-center">
          <i class="text-2xl" data-lucide="tag"></i>
        </div>
        <h3 class="mt-3 font-semibold text-[#0b2c65]">Descuentos Especiales</h3>
      </div>
    </div>
  </section>
</main>
<?php require __DIR__ . '/../partials/footer.php'; ?>
