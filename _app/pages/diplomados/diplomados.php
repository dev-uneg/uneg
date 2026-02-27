<?php
$title = 'Diplomados | UNEG';
$active = 'ixu';
require __DIR__ . '/../partials/header.php';
?>

<main class="max-w-7xl mx-auto px-4 py-10">
  <section class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
    <img src="<?php echo $assetBase; ?>/_imgs/diplomados/hero.webp" alt="Diplomados" class="block w-full h-auto" loading="eager">
    <div class="bg-[#0b2c65] text-white">
      <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 px-5 py-4 text-sm">
        <div class="flex items-center gap-3">
          <span class="inline-flex h-9 w-9 items-center justify-center rounded-full bg-white/15">
            <i class="text-lg" data-lucide="school"></i>
          </span>
          <div>
            <p class="font-semibold">Modalidad Flexible</p>
            <p class="text-white/70 text-xs">Diplomados</p>
          </div>
        </div>
        <div class="flex items-center gap-3">
          <span class="inline-flex h-9 w-9 items-center justify-center rounded-full bg-white/15">
            <i class="text-lg" data-lucide="clock-3"></i>
          </span>
          <div>
            <p class="font-semibold">Horarios Ejecutivos</p>
            <p class="text-white/70 text-xs">Entre semana y sábado</p>
          </div>
        </div>
        <div class="flex items-center gap-3">
          <span class="inline-flex h-9 w-9 items-center justify-center rounded-full bg-white/15">
            <i class="text-lg" data-lucide="medal"></i>
          </span>
          <div>
            <p class="font-semibold">Certificación</p>
            <p class="text-white/70 text-xs">Programas especializados</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="mt-10 text-center">
    <h1 class="text-2xl sm:text-3xl font-semibold text-[#0b2c65]">Diplomados</h1>
    <p class="mt-2 text-slate-600">Contenido en construcción para Diplomados.</p>
  </section>

  <section class="mt-8">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
      <button type="button" class="group rounded-2xl border border-slate-200 bg-white p-4 shadow-sm transition hover:-translate-y-0.5 hover:shadow-md" data-lightbox-src="<?php echo $assetBase; ?>/_imgs/ixu/diplomados/Diplomado-en-Normas-de-Informacion-Financiera-2.webp">
        <img src="<?php echo $assetBase; ?>/_imgs/ixu/diplomados/Diplomado-en-Normas-de-Informacion-Financiera-2.webp" alt="Diplomado en Normas de Información Financiera" class="w-full h-56 object-contain">
        <p class="mt-3 text-sm font-semibold text-[#0b2c65]">Diplomado en Normas de Información Financiera</p>
        <p class="mt-1 text-xs text-slate-500">Click para ver en grande</p>
      </button>
    </div>
  </section>
</main>

<div id="ixu-lightbox" class="fixed inset-0 z-50 hidden items-center justify-center bg-slate-900/80 p-4">
  <button id="ixu-lightbox-close" class="absolute top-4 right-4 h-10 w-10 rounded-full bg-white/90 text-slate-800 shadow-md" aria-label="Cerrar">
    <i class="text-2xl" data-lucide="x"></i>
  </button>
  <img id="ixu-lightbox-img" src="" alt="Vista previa" class="max-h-[85vh] max-w-[90vw] rounded-2xl bg-white p-2 shadow-2xl">
</div>

<script>
  const lightbox = document.getElementById('ixu-lightbox');
  const lightboxImg = document.getElementById('ixu-lightbox-img');
  const lightboxClose = document.getElementById('ixu-lightbox-close');
  const lightboxTriggers = document.querySelectorAll('[data-lightbox-src]');

  const openLightbox = (src) => {
    if (!lightbox || !lightboxImg) return;
    lightboxImg.src = src;
    lightbox.classList.remove('hidden');
    lightbox.classList.add('flex');
  };

  const closeLightbox = () => {
    if (!lightbox) return;
    lightbox.classList.add('hidden');
    lightbox.classList.remove('flex');
    if (lightboxImg) lightboxImg.src = '';
  };

  lightboxTriggers.forEach((trigger) => {
    trigger.addEventListener('click', () => {
      const src = trigger.getAttribute('data-lightbox-src');
      if (src) openLightbox(src);
    });
  });

  if (lightbox) {
    lightbox.addEventListener('click', (event) => {
      if (event.target === lightbox) closeLightbox();
    });
  }
  if (lightboxClose) {
    lightboxClose.addEventListener('click', closeLightbox);
  }
  document.addEventListener('keydown', (event) => {
    if (event.key === 'Escape') closeLightbox();
  });
</script>

<?php require __DIR__ . '/../partials/footer.php'; ?>
