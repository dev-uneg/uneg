<?php
$title = 'Bolsa de Trabajo | UNEG';
$active = 'comunidad';
require __DIR__ . '/../partials/header.php';
?>
<main class="max-w-7xl mx-auto px-4 py-10">
  <section class="relative overflow-hidden rounded-2xl bg-gradient-to-r from-[#1f56ad] via-[#2f6bd0] to-[#5a8fe0] text-white">
    <div class="absolute inset-0 opacity-20 bg-[radial-gradient(circle_at_top,rgba(255,255,255,0.35),transparent_55%)]"></div>
    <div class="relative px-6 py-12 text-center">
      <p class="text-sm tracking-[0.35em] uppercase">Universidad de Negocios ISEC</p>
      <h1 class="mt-4 text-3xl sm:text-5xl font-semibold">Bolsa de Trabajo</h1>
      <p class="mt-4 text-base sm:text-lg">Aquí te mostramos nuestra bolsa de trabajo.</p>
    </div>
  </section>

  <section class="mt-10 text-center">
    <p class="text-slate-600">Consulta las vacantes disponibles en PDF.</p>
    <div class="mt-6 flex justify-center">
      <a href="<?php echo $assetBase; ?>/assets/docs/ENERO-VACANTES-UNEG.pdf" target="_blank" rel="noopener" class="inline-flex items-center gap-2 rounded-xl bg-[#0b2c65] px-6 py-3 text-white font-semibold shadow-sm hover:bg-[#0a2552]">
        <i class="ri-file-pdf-line text-xl"></i>
        Ver PDF
      </a>
    </div>
  </section>

  <section class="mt-10">
    <div
      class="rounded-2xl border border-slate-200 bg-white shadow-sm overflow-hidden"
      style="height: calc(100vh - 320px); min-height: 720px;"
    >
      <iframe
        title="Bolsa de Trabajo - Vacantes"
        src="<?php echo $assetBase; ?>/assets/docs/ENERO-VACANTES-UNEG.pdf#view=FitH"
        class="w-full h-full"
        style="border: 0;"
        loading="lazy"
      ></iframe>
    </div>
  </section>
</main>
<?php require __DIR__ . '/../partials/footer.php'; ?>
