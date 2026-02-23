<?php
$title = 'Comunidad | UNEG';
$active = 'comunidad';
require __DIR__ . '/partials/header.php';
?>
<main class="max-w-7xl mx-auto px-4 py-10">
  <section class="relative overflow-hidden rounded-2xl bg-gradient-to-r from-[#1f56ad] via-[#2f6bd0] to-[#5a8fe0] text-white">
    <div class="absolute inset-0 opacity-20 bg-[radial-gradient(circle_at_top,rgba(255,255,255,0.35),transparent_55%)]"></div>
    <div class="relative px-6 py-14 text-center">
      <p class="text-sm tracking-[0.35em] uppercase">Universidad de Negocios ISEC</p>
      <h1 class="mt-4 text-3xl sm:text-5xl font-semibold">Comunidad</h1>
      <p class="mt-4 text-base sm:text-lg">Espacios y recursos para alumnos, docentes y egresados.</p>
    </div>
  </section>

  <section class="mt-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
    <a href="<?php echo $base; ?>/comunidad/alumnos" class="rounded-2xl border border-slate-200 bg-white p-6 text-center shadow-sm transition hover:-translate-y-0.5 hover:shadow-md">
      <div class="mx-auto h-14 w-14 rounded-full bg-[#0b2c65] text-white flex items-center justify-center">
        <i class="ri-graduation-cap-line text-2xl"></i>
      </div>
      <h2 class="mt-4 text-xl font-semibold text-[#0b2c65]">Alumnos</h2>
      <p class="mt-2 text-sm text-slate-600">Información y recursos para estudiantes.</p>
    </a>
    <a href="<?php echo $base; ?>/comunidad/docentes" class="rounded-2xl border border-slate-200 bg-white p-6 text-center shadow-sm transition hover:-translate-y-0.5 hover:shadow-md">
      <div class="mx-auto h-14 w-14 rounded-full bg-[#0b2c65] text-white flex items-center justify-center">
        <i class="ri-team-line text-2xl"></i>
      </div>
      <h2 class="mt-4 text-xl font-semibold text-[#0b2c65]">Docentes</h2>
      <p class="mt-2 text-sm text-slate-600">Herramientas y espacios para profesores.</p>
    </a>
    <a href="<?php echo $base; ?>/comunidad/noticias" class="rounded-2xl border border-slate-200 bg-white p-6 text-center shadow-sm transition hover:-translate-y-0.5 hover:shadow-md">
      <div class="mx-auto h-14 w-14 rounded-full bg-[#0b2c65] text-white flex items-center justify-center">
        <i class="ri-newspaper-line text-2xl"></i>
      </div>
      <h2 class="mt-4 text-xl font-semibold text-[#0b2c65]">Noticias</h2>
      <p class="mt-2 text-sm text-slate-600">Comunicados y vida en el campus.</p>
    </a>
    <a href="<?php echo $base; ?>/blog" class="rounded-2xl border border-slate-200 bg-white p-6 text-center shadow-sm transition hover:-translate-y-0.5 hover:shadow-md">
      <div class="mx-auto h-14 w-14 rounded-full bg-[#0b2c65] text-white flex items-center justify-center">
        <i class="ri-article-line text-2xl"></i>
      </div>
      <h2 class="mt-4 text-xl font-semibold text-[#0b2c65]">Blog</h2>
      <p class="mt-2 text-sm text-slate-600">Artículos y contenido de interés.</p>
    </a>
    <a href="<?php echo $base; ?>/comunidad/buzon-del-rector" class="rounded-2xl border border-slate-200 bg-white p-6 text-center shadow-sm transition hover:-translate-y-0.5 hover:shadow-md">
      <div class="mx-auto h-14 w-14 rounded-full bg-[#0b2c65] text-white flex items-center justify-center">
        <i class="ri-mail-send-line text-2xl"></i>
      </div>
      <h2 class="mt-4 text-xl font-semibold text-[#0b2c65]">Buzón del Rector</h2>
      <p class="mt-2 text-sm text-slate-600">Comunicación directa con rectoría.</p>
    </a>
  </section>
</main>
<?php require __DIR__ . '/partials/footer.php'; ?>
