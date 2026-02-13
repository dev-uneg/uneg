<?php
$title = 'Inicio | UNEG';
$active = 'inicio';
$bodyClass = 'bg-slate-50';
require __DIR__ . '/partials/header.php';

$popupEnabled = true;
$filename = 'uneg_pop-up.png';
?>

<?php if ($popupEnabled): ?>
<div id="home-popup" class="fixed inset-0 z-50 hidden">
  <div id="home-popup-backdrop" class="absolute inset-0 bg-slate-900/70"></div>
  <div class="relative h-full w-full flex items-center justify-center p-4">
    <div id="home-popup-panel" class="relative w-full max-w-3xl scale-90 rounded-2xl bg-white shadow-2xl overflow-hidden">
      <button id="home-popup-close" class="absolute right-3 top-3 h-9 w-9 rounded-full bg-white/90 text-slate-800 shadow-md hover:bg-white" aria-label="Cerrar popup">
        <span class="sr-only">Cerrar</span>
        <span aria-hidden="true" class="text-xl leading-none">&times;</span>
      </button>
      <img src="<?php echo $assetBase; ?>/imgs/pop-ups/<?php echo htmlspecialchars($filename); ?>" alt="Información destacada UNEG" class="w-full h-auto block">
    </div>
  </div>
</div>
<?php endif; ?>

<style>
  .fade-slider {
    position: relative;
  }
  .fade-slide {
    position: absolute;
    inset: 0;
    opacity: 0;
    transition: opacity 0.7s ease;
    pointer-events: none;
  }
  .fade-slide.is-active {
    opacity: 1;
    pointer-events: auto;
  }
</style>

<main class="max-w-7xl mx-auto px-4 py-10">
  <div class="relative h-[500px] w-full overflow-hidden rounded-2xl border border-slate-200 shadow-sm">
    <div id="home-slider" class="fade-slider h-full w-full">
      <div class="home-slide fade-slide is-active h-full w-full">
        <img src="<?php echo $assetBase; ?>/imgs/nms/cch/hero.png" alt="CCH ISEC" class="absolute inset-0 h-full w-full object-cover">
      </div>
      <div class="home-slide fade-slide h-full w-full">
        <iframe
          id="home-hero-video"
          class="absolute inset-0 h-full w-full"
          data-src-desktop="https://www.youtube.com/embed/Im1-iJwNVWI?rel=0&autoplay=1&mute=1&playsinline=1"
          data-src-mobile="https://www.youtube.com/embed/Im1-iJwNVWI?rel=0&playsinline=1"
          title="Video institucional UNEG"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          allowfullscreen
        ></iframe>
      </div>
      <div class="home-slide fade-slide h-full w-full">
        <img src="<?php echo $assetBase; ?>/imgs/home/hero.png" alt="Universidad de Negocios ISEC" class="absolute inset-0 h-full w-full object-cover">
      </div>
    </div>
    <button id="home-prev" class="absolute left-4 top-1/2 -translate-y-1/2 h-9 w-9 rounded-full bg-white/25 text-white shadow-md backdrop-blur hover:bg-white/35" aria-label="Anterior">
      <svg class="h-5 w-5 mx-auto" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
        <path d="M15 18l-6-6 6-6"></path>
      </svg>
    </button>
    <button id="home-next" class="absolute right-4 top-1/2 -translate-y-1/2 h-9 w-9 rounded-full bg-white/25 text-white shadow-md backdrop-blur hover:bg-white/35" aria-label="Siguiente">
      <svg class="h-5 w-5 mx-auto" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
        <path d="M9 6l6 6-6 6"></path>
      </svg>
    </button>
  </div>
  <section class="mt-10 text-center">
    <h2 class="text-2xl sm:text-3xl font-semibold text-[#0b2c65]">
      Universidad de Negocios ISEC: Preparatorias y Universidades en CDMX
    </h2>
    <p class="mt-3 text-slate-600">
      Si buscas una opción ideal en Universidades en CDMX, has llegado al sitio correcto. En la Universidad de Negocios ISEC, contamos con planes de estudio especializados.
    </p>
    <h3 class="mt-8 text-xl sm:text-2xl font-semibold text-slate-700">Recorrido Virtual</h3>
    <p class="mt-2 text-slate-600">
      Conoce la Universidad de Negocios ISEC de forma virtual mediante este recorrido
    </p>
  </section>
  <div class="mt-10 w-full">
    <iframe id="travel" width="1280" height="600" allowfullscreen src="https://tourmkr.com/F1WcjpHzDt" class="w-full rounded-2xl border border-slate-200 shadow-sm"></iframe>
  </div>
  <section class="mt-14">
    <h2 class="text-2xl sm:text-3xl font-semibold text-[#0b2c65] text-center">
      Sigue leyendo sobre lo que las Universidades Privadas en CDMX tienen para ti
    </h2>
    <?php
      $homeBlogPosts = require __DIR__ . '/blog/_posts.php';
      $homeBlogPosts = array_map(function ($p) use ($base, $assetBase) {
        $p['href'] = $base . $p['href'];
        $p['image'] = $assetBase . $p['image'];
        return $p;
      }, $homeBlogPosts);
      shuffle($homeBlogPosts);
      $homeBlogPosts = array_slice($homeBlogPosts, 0, 3);
    ?>
    <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-6">
      <?php foreach ($homeBlogPosts as $post): ?>
        <article class="rounded-2xl border border-slate-200 shadow-sm overflow-hidden bg-white">
          <a href="<?php echo $post['href']; ?>" class="block">
            <div class="h-44 w-full bg-slate-100 overflow-hidden">
              <img src="<?php echo $post['image']; ?>" alt="<?php echo htmlspecialchars($post['title']); ?>" class="h-full w-full object-cover">
            </div>
            <div class="p-5">
              <span class="inline-flex items-center rounded-md bg-[#0d4fb6] px-4 py-2 text-sm font-semibold text-white">Leer más</span>
              <p class="mt-4 text-sm text-slate-500"><?php echo htmlspecialchars($post['date']); ?> · Blog, Comunidad ISEC</p>
              <h3 class="mt-2 text-lg font-semibold text-slate-900"><?php echo htmlspecialchars($post['title']); ?></h3>
              <p class="mt-2 text-sm text-slate-600"><?php echo htmlspecialchars($post['excerpt']); ?></p>
            </div>
          </a>
        </article>
      <?php endforeach; ?>
    </div>
  </section>
  <section class="mt-14">
    <div class="text-slate-700 leading-relaxed">
      <p>
        Al elegir ser parte de la Universidad de Negocios ISEC, no solo estás tomando un camino directo a alcanzar tus sueños o tu éxito futuro, sino que pertenecerás a la generación que le da la bienvenida a una nueva estructura y comienza a elegir Universidades en línea sin la idea de que cuentan con una validez menor.
      </p>
      <p class="mt-6">
        Si estás buscando Universidades de Negocios Internacionales con especialidades enfocadas totalmente al mundo empresarial: ¡La Universidad ISEC es tu mejor opción!
      </p>
    </div>
    <div class="mt-10 rounded-xl bg-[#0b2c65] text-white px-6 py-6 text-center text-lg font-semibold relative">
      Enlaces de interés:
      <span class="absolute left-1/2 -bottom-3 h-6 w-6 -translate-x-1/2 rotate-45 bg-[#0b2c65]"></span>
    </div>
    <div class="mt-8 relative">
      <button class="absolute -left-4 top-1/2 -translate-y-1/2 h-9 w-9 rounded-full bg-white shadow-md border border-slate-200 text-slate-600 hover:bg-slate-50" aria-label="Anterior">
        <svg class="h-4 w-4 mx-auto" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
          <path d="M15 18l-6-6 6-6"></path>
        </svg>
      </button>
      <button class="absolute -right-4 top-1/2 -translate-y-1/2 h-9 w-9 rounded-full bg-white shadow-md border border-slate-200 text-slate-600 hover:bg-slate-50" aria-label="Siguiente">
        <svg class="h-4 w-4 mx-auto" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
          <path d="M9 6l6 6-6 6"></path>
        </svg>
      </button>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <a href="https://uneg.edu.mx/comunidad/alumnos/e-learning" class="rounded-2xl border border-slate-200 bg-white p-6 flex flex-col items-center justify-center text-center shadow-sm min-h-[180px] hover:bg-slate-50 transition-colors">
          <img src="<?php echo $assetBase; ?>/imgs/home/ChatGPT%20Image%2011%20feb%202026,%2004_58_18%20p.m..png" alt="Office 365" class="h-20 w-20 rounded-full object-contain">
          <p class="mt-4 text-sm font-semibold text-slate-700">OFFICE 365</p>
        </a>
        <div class="rounded-2xl border border-slate-200 bg-white p-6 flex flex-col items-center justify-center text-center shadow-sm min-h-[180px]">
          <img src="<?php echo $assetBase; ?>/imgs/home/ChatGPT%20Image%2011%20feb%202026,%2004_58_21%20p.m..png" alt="E-learning" class="h-20 w-20 rounded-full object-contain">
          <p class="mt-4 text-sm font-semibold text-slate-700">E-LEARNING</p>
        </div>
        <a href="<?php echo $base; ?>/comunidad/reglamentos" class="rounded-2xl border border-slate-200 bg-white p-6 flex flex-col items-center justify-center text-center shadow-sm min-h-[180px] hover:bg-slate-50 transition-colors">
          <img src="<?php echo $assetBase; ?>/imgs/home/ChatGPT%20Image%2011%20feb%202026,%2004_58_27%20p.m..png" alt="Reglamentos" class="h-20 w-20 rounded-full object-contain">
          <p class="mt-4 text-sm font-semibold text-slate-700">REGLAMENTOS</p>
        </a>
        <a href="http://impreweb.ddns.net:48110/PMPWeb/" class="rounded-2xl border border-slate-200 bg-white p-6 flex flex-col items-center justify-center text-center shadow-sm min-h-[180px] hover:bg-slate-50 transition-colors">
          <img src="<?php echo $assetBase; ?>/imgs/home/ChatGPT%20Image%2011%20feb%202026,%2004_58_30%20p.m..png" alt="Kiosko de impresión" class="h-20 w-20 rounded-full object-contain">
          <p class="mt-4 text-sm font-semibold text-slate-700">KIOSKO DE IMPRESIÓN</p>
        </a>
      </div>
    </div>
  </section>
</main>

<script>
  const popup = document.getElementById('home-popup');
  const popupClose = document.getElementById('home-popup-close');
  const popupBackdrop = document.getElementById('home-popup-backdrop');
  const popupPanel = document.getElementById('home-popup-panel');
  if (popup) {
    popup.classList.remove('hidden');
    const closePopup = () => popup.classList.add('hidden');
    if (popupBackdrop) {
      popupBackdrop.addEventListener('click', closePopup);
    }
    popup.addEventListener('click', (event) => {
      if (popupPanel && !popupPanel.contains(event.target)) {
        closePopup();
      }
    });
    if (popupClose) {
      popupClose.addEventListener('click', closePopup);
    }
    document.addEventListener('keydown', (event) => {
      if (event.key === 'Escape') {
        closePopup();
      }
    });
  }
</script>
<script>
  const resizeTravel = () => {
    const iframe = document.getElementById('travel');
    if (!iframe) return;
    const width = iframe.clientWidth || 0;
    if (width > 0 && width < 1280) {
      iframe.style.height = `${Math.round(width * 0.46875)}px`;
    } else if (width >= 1280) {
      iframe.style.height = '600px';
    }
  };

  window.addEventListener('resize', resizeTravel);
  window.addEventListener('DOMContentLoaded', resizeTravel);
</script>
<script>
  const slider = document.getElementById('home-slider');
  const slides = Array.from(document.querySelectorAll('#home-slider .home-slide'));
  const prevBtn = document.getElementById('home-prev');
  const nextBtn = document.getElementById('home-next');
  const heroVideo = document.getElementById('home-hero-video');
  const slideDurations = [46000, 7000, 7000];
  let current = 0;
  let autoTimer = null;
  let paused = false;

  const setVideoSource = () => {
    if (!heroVideo) return;
    const isDesktop = window.matchMedia('(min-width: 1024px)').matches;
    const targetSrc = isDesktop ? heroVideo.dataset.srcDesktop : heroVideo.dataset.srcMobile;
    if (targetSrc && heroVideo.src !== targetSrc) {
      heroVideo.src = targetSrc;
    }
  };

  const showSlide = (index) => {
    slides.forEach((slide, i) => {
      slide.classList.toggle('is-active', i === index);
    });
  };

  const scheduleNext = () => {
    if (autoTimer) {
      clearTimeout(autoTimer);
    }
    if (paused || !slides.length) return;
    const duration = slideDurations[current] || 7000;
    autoTimer = setTimeout(() => {
      current = (current + 1) % slides.length;
      showSlide(current);
      scheduleNext();
    }, duration);
  };

  if (slides.length) {
    setVideoSource();
    showSlide(current);
    scheduleNext();

    if (prevBtn) {
      prevBtn.addEventListener('click', () => {
        current = (current - 1 + slides.length) % slides.length;
        showSlide(current);
        scheduleNext();
      });
    }
    if (nextBtn) {
      nextBtn.addEventListener('click', () => {
        current = (current + 1) % slides.length;
        showSlide(current);
        scheduleNext();
      });
    }

    if (slider) {
      slider.addEventListener('mouseenter', () => {
        paused = true;
        if (autoTimer) {
          clearTimeout(autoTimer);
        }
      });
      slider.addEventListener('mouseleave', () => {
        paused = false;
        scheduleNext();
      });
    }

    window.addEventListener('resize', setVideoSource);
  }
</script>

<?php require __DIR__ . '/partials/footer.php'; ?>
