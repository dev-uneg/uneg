<?php
$title = 'UNEG - IXU';
$active = 'ixu';
require __DIR__ . '/partials/header.php';
?>
<main class="max-w-7xl mx-auto px-4 py-10">
  <section class="relative overflow-hidden rounded-2xl border border-slate-200 shadow-sm">
    <img src="<?php echo $assetBase; ?>/_imgs/ixu/hero.webp" alt="IXU" class="block w-full h-auto">
    <div class="absolute inset-0"></div>
  </section>

  <section class="mt-12 text-center">
    <h2 class="text-xl sm:text-2xl font-semibold text-[#0b2c65]">Oferta IXU</h2>
    <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 gap-6 justify-items-center">
      <a href="<?php echo $base; ?>/diplomados" class="w-full max-w-xs rounded-xl border border-slate-200 bg-white px-8 py-6 text-center font-semibold text-[#0b2c65] shadow-sm transition hover:-translate-y-0.5 hover:shadow-md">
        <div class="mx-auto h-14 w-14 rounded-full bg-[#0b2c65] text-white flex items-center justify-center mb-3">
          <i class="ri-medal-line text-2xl"></i>
        </div>
        Diplomados
      </a>
      <a href="<?php echo $base; ?>/cursos" class="w-full max-w-xs rounded-xl border border-slate-200 bg-white px-8 py-6 text-center font-semibold text-[#0b2c65] shadow-sm transition hover:-translate-y-0.5 hover:shadow-md">
        <div class="mx-auto h-14 w-14 rounded-full bg-[#0b2c65] text-white flex items-center justify-center mb-3">
          <i class="ri-book-3-line text-2xl"></i>
        </div>
        Cursos
      </a>
    </div>
  </section>

  <section class="mt-12">
    <h2 class="text-xl sm:text-2xl font-semibold text-[#0b2c65] text-center">Conoce IXU</h2>
    <div class="mt-6 w-full">
      <iframe
        class="w-full rounded-2xl border border-slate-200 shadow-sm aspect-video"
        src="https://www.youtube.com/embed/0PsB08OydSs?rel=0"
        title="Video IXU"
        frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        allowfullscreen
      ></iframe>
    </div>
  </section>
</main>
<?php
require __DIR__ . '/partials/footer.php';
?>
