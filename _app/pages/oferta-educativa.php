<?php
$title = 'UNEG - Oferta Educativa';
$active = 'oferta';
require __DIR__ . '/partials/header.php';
?>
<main class="max-w-7xl mx-auto px-4 py-10">
  <section class="relative overflow-hidden rounded-2xl bg-gradient-to-r from-[#1f56ad] via-[#2f6bd0] to-[#5a8fe0] text-white">
    <div class="absolute inset-0 opacity-20 bg-[radial-gradient(circle_at_top,rgba(255,255,255,0.35),transparent_55%)]"></div>
    <div class="relative px-6 py-14 text-center">
      <p class="text-sm tracking-[0.35em] uppercase">Universidad de Negocios ISEC</p>
      <h1 class="mt-4 text-3xl sm:text-5xl font-semibold">Oferta Educativa</h1>
      <p class="mt-4 text-base sm:text-lg">
        Educación profesional de alto nivel y docentes con experiencia profesional en cada área del conocimiento
      </p>
    </div>
  </section>

  <section class="mt-12 text-center">
    <h2 class="text-xl sm:text-2xl font-semibold text-[#0b2c65]">
      Oferta Educativa Universidad de Negocios ISEC | Programas Académicos y Planes de Estudio
    </h2>
    <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 justify-items-center">
      <a href="<?php echo $base; ?>/nivel-medio-superior" class="w-full max-w-xs rounded-xl border border-slate-200 bg-white px-8 py-6 text-center font-semibold text-[#0b2c65] shadow-sm transition hover:-translate-y-0.5 hover:shadow-md">
        <div class="mx-auto h-14 w-14 rounded-full bg-[#0b2c65] text-white flex items-center justify-center mb-3">
          <i class="text-2xl" data-lucide="school"></i>
        </div>
        Nivel Medio Superior
      </a>
      <a href="<?php echo $base; ?>/licenciaturas" class="w-full max-w-xs rounded-xl border border-slate-200 bg-white px-8 py-6 text-center font-semibold text-[#0b2c65] shadow-sm transition hover:-translate-y-0.5 hover:shadow-md">
        <div class="mx-auto h-14 w-14 rounded-full bg-[#0b2c65] text-white flex items-center justify-center mb-3">
          <i class="text-2xl" data-lucide="graduation-cap"></i>
        </div>
        Licenciaturas
      </a>
      <a href="<?php echo $base; ?>/maestrias" class="w-full max-w-xs rounded-xl border border-slate-200 bg-white px-8 py-6 text-center font-semibold text-[#0b2c65] shadow-sm transition hover:-translate-y-0.5 hover:shadow-md">
        <div class="mx-auto h-14 w-14 rounded-full bg-[#0b2c65] text-white flex items-center justify-center mb-3">
          <i class="text-2xl" data-lucide="medal"></i>
        </div>
        Maestrías
      </a>
      <a href="<?php echo $base; ?>/doctorados" class="w-full max-w-xs rounded-xl border border-slate-200 bg-white px-8 py-6 text-center font-semibold text-[#0b2c65] shadow-sm transition hover:-translate-y-0.5 hover:shadow-md">
        <div class="mx-auto h-14 w-14 rounded-full bg-[#0b2c65] text-white flex items-center justify-center mb-3">
          <i class="text-2xl" data-lucide="book"></i>
        </div>
        Doctorados
      </a>
      <a href="<?php echo $base; ?>/cursos" class="w-full max-w-xs rounded-xl border border-slate-200 bg-white px-8 py-6 text-center font-semibold text-[#0b2c65] shadow-sm transition hover:-translate-y-0.5 hover:shadow-md">
        <div class="mx-auto h-14 w-14 rounded-full bg-[#0b2c65] text-white flex items-center justify-center mb-3">
          <i class="text-2xl" data-lucide="lightbulb"></i>
        </div>
        Cursos IXU
      </a>
    </div>
  </section>
</main>
<?php
require __DIR__ . '/partials/footer.php';
?>
