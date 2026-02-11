<?php
$title = 'UNEG - Recorrido Virtual';
$active = 'recorrido';
require __DIR__ . '/partials/header.php';
?>
<main class="max-w-7xl mx-auto px-4 py-10">
  <section class="relative overflow-hidden rounded-2xl bg-gradient-to-r from-[#1f56ad] via-[#2f6bd0] to-[#5a8fe0] text-white">
    <div class="absolute inset-0 opacity-20 bg-[radial-gradient(circle_at_top,rgba(255,255,255,0.35),transparent_55%)]"></div>
    <div class="relative px-6 py-14 text-center">
      <p class="text-sm tracking-[0.35em] uppercase">Universidad de Negocios ISEC</p>
      <h1 class="mt-4 text-3xl sm:text-5xl font-semibold">Recorrido Virtual</h1>
      <p class="mt-4 text-base sm:text-lg">
        Conoce la Universidad de Negocios ISEC de forma virtual.
      </p>
    </div>
  </section>

  <section class="mt-10">
    <div class="w-full rounded-2xl border border-slate-200 shadow-sm overflow-hidden">
      <iframe
        id="recorrido"
        width="1280"
        height="600"
        allowfullscreen
        src="https://tourmkr.com/F1WcjpHzDt"
        class="w-full"
        title="Recorrido Virtual ISEC"
      ></iframe>
    </div>
  </section>
</main>
<script>
  const resizeRecorrido = () => {
    const iframe = document.getElementById('recorrido');
    if (!iframe) return;
    const width = iframe.clientWidth || 0;
    if (width > 0 && width < 1280) {
      iframe.style.height = `${Math.round(width * 0.46875)}px`;
    } else if (width >= 1280) {
      iframe.style.height = '600px';
    }
  };

  window.addEventListener('resize', resizeRecorrido);
  window.addEventListener('DOMContentLoaded', resizeRecorrido);
</script>
<?php
require __DIR__ . '/partials/footer.php';
?>
