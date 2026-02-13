<?php
$title = 'Calendario Académico | UNEG';
$active = 'comunidad';
require __DIR__ . '/../partials/header.php';
?>
<main class="max-w-7xl mx-auto px-4 py-10">
  <section class="relative overflow-hidden rounded-2xl bg-gradient-to-r from-[#1f56ad] via-[#2f6bd0] to-[#5a8fe0] text-white">
    <div class="absolute inset-0 opacity-20 bg-[radial-gradient(circle_at_top,rgba(255,255,255,0.35),transparent_55%)]"></div>
    <div class="relative px-6 py-12 text-center">
      <p class="text-sm tracking-[0.35em] uppercase">Universidad de Negocios ISEC</p>
      <h1 class="mt-4 text-3xl sm:text-5xl font-semibold">Calendario Académico</h1>
      <p class="mt-4 text-base sm:text-lg">Consulta los calendarios por modalidad y nivel.</p>
    </div>
  </section>

  <section class="mt-10">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
      <a href="<?php echo $assetBase; ?>/imgs/calendarios/calendario-bachillerato-tecnico.jpg" target="_blank" rel="noopener" class="rounded-2xl border border-slate-200 bg-white p-6 text-center shadow-sm transition hover:-translate-y-0.5 hover:shadow-md">
        <img src="<?php echo $assetBase; ?>/imgs/calendarios/calendario-bachillerato-tecnico.jpg" alt="Calendario Académico Bachillerato Técnico" class="mx-auto h-20 w-20 object-contain">
        <h3 class="mt-4 font-semibold text-[#0b2c65]">UNEG</h3>
        <p class="mt-2 text-sm text-slate-600">Calendario Académico Bachillerato Técnico</p>
      </a>
      <a href="<?php echo $assetBase; ?>/imgs/calendarios/Calendario-cuatrimestrales.webp" target="_blank" rel="noopener" class="rounded-2xl border border-slate-200 bg-white p-6 text-center shadow-sm transition hover:-translate-y-0.5 hover:shadow-md">
        <img src="<?php echo $assetBase; ?>/imgs/calendarios/Calendario-cuatrimestrales.webp" alt="Calendario Académico Licenciaturas Cuatrimestrales" class="mx-auto h-20 w-20 object-contain">
        <h3 class="mt-4 font-semibold text-[#0b2c65]">UNEG</h3>
        <p class="mt-2 text-sm text-slate-600">Calendario Académico Licenciaturas Cuatrimestrales</p>
      </a>
      <a href="<?php echo $assetBase; ?>/imgs/calendarios/calendario_psicologia.jpg" target="_blank" rel="noopener" class="rounded-2xl border border-slate-200 bg-white p-6 text-center shadow-sm transition hover:-translate-y-0.5 hover:shadow-md">
        <img src="<?php echo $assetBase; ?>/imgs/calendarios/calendario_psicologia.jpg" alt="Calendario Académico Licenciaturas UNAM Psicología" class="mx-auto h-20 w-20 object-contain">
        <h3 class="mt-4 font-semibold text-[#0b2c65]">UNEG</h3>
        <p class="mt-2 text-sm text-slate-600">Calendario Académico Licenciaturas UNAM Psicología</p>
      </a>
      <a href="<?php echo $assetBase; ?>/imgs/calendarios/ISEC_Lic.ADM_.NEGOCIOS.jpg" target="_blank" rel="noopener" class="rounded-2xl border border-slate-200 bg-white p-6 text-center shadow-sm transition hover:-translate-y-0.5 hover:shadow-md">
        <img src="<?php echo $assetBase; ?>/imgs/calendarios/ISEC_Lic.ADM_.NEGOCIOS.jpg" alt="Calendario Académico Licenciatura Administración SUA" class="mx-auto h-20 w-20 object-contain">
        <h3 class="mt-4 font-semibold text-[#0b2c65]">UNEG</h3>
        <p class="mt-2 text-sm text-slate-600">Calendario Académico Licenciatura Administración SUA</p>
      </a>

      <a href="<?php echo $assetBase; ?>/imgs/calendarios/Calendario-Maestrias-1.jpg" target="_blank" rel="noopener" class="rounded-2xl border border-slate-200 bg-white p-6 text-center shadow-sm transition hover:-translate-y-0.5 hover:shadow-md">
        <img src="<?php echo $assetBase; ?>/imgs/calendarios/Calendario-Maestrias-1.jpg" alt="Calendario Académico Maestrías" class="mx-auto h-20 w-20 object-contain">
        <h3 class="mt-4 font-semibold text-[#0b2c65]">UNEG</h3>
        <p class="mt-2 text-sm text-slate-600">Calendario Académico Maestrías</p>
      </a>
      <a href="<?php echo $assetBase; ?>/imgs/calendarios/ISEC_CALENDARIO_DOCTORADO.png" target="_blank" rel="noopener" class="rounded-2xl border border-slate-200 bg-white p-6 text-center shadow-sm transition hover:-translate-y-0.5 hover:shadow-md">
        <img src="<?php echo $assetBase; ?>/imgs/calendarios/ISEC_CALENDARIO_DOCTORADO.png" alt="Calendario Académico Doctorado" class="mx-auto h-20 w-20 object-contain">
        <h3 class="mt-4 font-semibold text-[#0b2c65]">UNEG</h3>
        <p class="mt-2 text-sm text-slate-600">Calendario Académico Doctorado</p>
      </a>
      <a href="<?php echo $assetBase; ?>/imgs/calendarios/Calendario-Inteligencia-Artificial-1.webp" target="_blank" rel="noopener" class="rounded-2xl border border-slate-200 bg-white p-6 text-center shadow-sm transition hover:-translate-y-0.5 hover:shadow-md">
        <img src="<?php echo $assetBase; ?>/imgs/calendarios/Calendario-Inteligencia-Artificial-1.webp" alt="Calendario Académico Ingeniería en Inteligencia Artificial" class="mx-auto h-20 w-20 object-contain">
        <h3 class="mt-4 font-semibold text-[#0b2c65]">UNEG</h3>
        <p class="mt-2 text-sm text-slate-600">Calendario Académico Ingeniería en Inteligencia Artificial</p>
      </a>
    </div>
  </section>
</main>
<?php require __DIR__ . '/../partials/footer.php'; ?>
