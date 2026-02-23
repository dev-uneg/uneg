<?php
$title = 'Reglamentos | UNEG';
$active = 'comunidad';
require __DIR__ . '/../partials/header.php';
?>
<main class="max-w-7xl mx-auto px-4 py-10">
  <section class="relative overflow-hidden rounded-2xl bg-gradient-to-r from-[#1f56ad] via-[#2f6bd0] to-[#5a8fe0] text-white">
    <div class="absolute inset-0 opacity-20 bg-[radial-gradient(circle_at_top,rgba(255,255,255,0.35),transparent_55%)]"></div>
    <div class="relative px-6 py-12 text-center">
      <p class="text-sm tracking-[0.35em] uppercase">Universidad de Negocios ISEC</p>
      <h1 class="mt-4 text-3xl sm:text-5xl font-semibold">Reglamentos</h1>
      <p class="mt-4 text-base sm:text-lg">Consulta los reglamentos institucionales en PDF.</p>
    </div>
  </section>

  <section class="mt-10">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      <a href="<?php echo $assetBase; ?>/assets/docs/Reglamento-Escolar-UNEG-2025.pdf" target="_blank" rel="noopener" class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm hover:shadow-md transition">
        <div class="mx-auto h-14 w-14 rounded-full bg-[#0b2c65] text-white flex items-center justify-center">
          <i class="ri-file-pdf-line text-2xl"></i>
        </div>
        <h3 class="mt-5 text-center font-semibold text-[#0b2c65]">Reglamento general para estudios de bachillerato técnico, licenciatura y posgrado</h3>
        <p class="mt-2 text-center text-sm text-slate-500">Abrir PDF</p>
      </a>
      <a href="<?php echo $assetBase; ?>/assets/docs/reglamento-de-biblioteca-adrian-mora-duhart.pdf" target="_blank" rel="noopener" class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm hover:shadow-md transition">
        <div class="mx-auto h-14 w-14 rounded-full bg-[#0b2c65] text-white flex items-center justify-center">
          <i class="ri-book-2-line text-2xl"></i>
        </div>
        <h3 class="mt-5 text-center font-semibold text-[#0b2c65]">Reglamento de Biblioteca Adrián Mora Duhart</h3>
        <p class="mt-2 text-center text-sm text-slate-500">Abrir PDF</p>
      </a>
      <a href="<?php echo $assetBase; ?>/assets/docs/reglamento-general-para-estudios-de-licenciatura-y-posgrado.pdf" target="_blank" rel="noopener" class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm hover:shadow-md transition">
        <div class="mx-auto h-14 w-14 rounded-full bg-[#0b2c65] text-white flex items-center justify-center">
          <i class="ri-file-list-3-line text-2xl"></i>
        </div>
        <h3 class="mt-5 text-center font-semibold text-[#0b2c65]">Reglamento general para estudios de licenciatura y posgrado</h3>
        <p class="mt-2 text-center text-sm text-slate-500">Abrir PDF</p>
      </a>
    </div>
  </section>
</main>
<?php require __DIR__ . '/../partials/footer.php'; ?>
