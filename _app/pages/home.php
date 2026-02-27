<?php
$title = 'Inicio | UNEG';
$metaDescription = 'Universidad de Negocios ISEC en CDMX: conoce nuestra oferta educativa, recorridos, noticias y blog.';
$active = 'inicio';
$bodyClass = 'bg-slate-50';
require __DIR__ . '/partials/header.php';

// Popup temporalmente deshabilitado.
// Si se vuelve a activar, usar estas variables y el bloque comentado abajo.
// $popupEnabled = true;
// $filename = 'uneg_pop-up.png';
?>

<?php
/*
// POPUP temporalmente deshabilitado. Se deja el bloque por si se usa después.
if ($popupEnabled): ?>
<div id="home-popup" class="fixed inset-0 z-50 hidden">
  <div id="home-popup-backdrop" class="absolute inset-0 bg-slate-900/70"></div>
  <div class="relative h-full w-full flex items-center justify-center p-4">
    <div id="home-popup-panel" class="relative w-full max-w-3xl scale-90 rounded-2xl bg-white shadow-2xl overflow-hidden">
      <button id="home-popup-close" class="absolute right-3 top-3 h-9 w-9 rounded-full bg-white/90 text-slate-800 shadow-md hover:bg-white" aria-label="Cerrar popup">
        <span class="sr-only">Cerrar</span>
        <span aria-hidden="true" class="text-xl leading-none">&times;</span>
      </button>
      <img src="<?php echo $assetBase; ?>/_imgs/pop-ups/<?php echo htmlspecialchars($filename); ?>" alt="Información destacada UNEG" class="w-full h-auto block">
    </div>
  </div>
</div>
<?php endif;
*/
?>

<main class="w-full px-0 pb-10">
  <div class="relative left-1/2 right-1/2 -ml-[50vw] -mr-[50vw] h-[700px] lg:h-[600px] w-screen overflow-hidden">
    <div id="home-slider" class="relative h-full w-full">
      <div class="home-slide absolute inset-0 h-full w-full opacity-100 pointer-events-auto transition-opacity duration-700">
        <div class="absolute inset-0 bg-[linear-gradient(90deg,#231a8f_0%,#2b29a3_52%,#3148cf_100%)] pointer-events-none"></div>
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_28%_34%,rgba(255,255,255,0.10),transparent_45%),radial-gradient(circle_at_78%_72%,rgba(255,255,255,0.08),transparent_40%)] pointer-events-none"></div>
        <div class="relative z-10 h-full w-full">
          <div class="h-full max-w-7xl mx-auto px-3 pt-6 pb-16 sm:px-4 sm:py-10 lg:py-6">
            <div class="h-full grid grid-cols-1 lg:grid-cols-2 items-center gap-4 sm:gap-6 lg:gap-0 lg:items-stretch">
              <div class="flex items-center text-center lg:items-center lg:text-left text-white px-3 sm:px-6 lg:h-full lg:px-8">
                <div class="w-full">
                  <h2 class="text-5xl sm:text-5xl md:text-6xl lg:text-7xl font-extrabold leading-none tracking-tight">
                    En <span class="text-white">C</span><span class="text-[#f5ad28]">CH</span> <span class="text-white">ISEC</span>
                  </h2>
                  <p class="mt-2 sm:mt-4 text-xl sm:text-2xl md:text-3xl font-semibold text-white/95">contamos con una</p>
                  <p class="mt-1 sm:mt-2 text-5xl sm:text-5xl md:text-6xl font-black text-[#f5c44d] tracking-[0.04em] sm:tracking-[0.08em]">MODALIDAD</p>
                  <p class="mt-1 text-4xl sm:text-4xl md:text-5xl font-black text-white tracking-[0.04em] sm:tracking-[0.08em]">PRESENCIAL</p>
                  <p class="mt-2 sm:mt-3 text-3xl sm:text-3xl md:text-4xl font-bold text-[#f5c44d]">16:00 hrs a 21:00 hrs</p>
                  <p class="mt-3 sm:mt-6 text-xl sm:text-base md:text-xl text-white/95">
                    Creemos que <span class="text-[#f5c44d] font-semibold">tu futuro no tiene horario</span>, solo ganas, actitud y decisión de empezar hoy.
                  </p>
                  <a
                    href="<?php echo $base; ?>/cch-isec"
                    class="mt-4 sm:mt-6 inline-flex items-center justify-center rounded-md bg-[#f5c44d] px-6 py-3 text-base sm:text-lg font-semibold text-[#14215a] shadow-md transition-colors hover:bg-[#ffd46f]"
                  >
                    Más información sobre CCH ISEC
                  </a>
                </div>
              </div>
              <div class="mt-2 flex w-full items-center justify-center overflow-hidden px-3 sm:mt-0 sm:px-6 lg:h-full lg:px-8">
                <div class="flex w-full max-w-[380px] items-center justify-center sm:max-w-[380px] lg:h-full lg:max-w-[420px]">
                  <div class="flex h-[180px] w-full min-h-0 items-center justify-center rounded-xl p-2 sm:aspect-[3/1] sm:h-auto sm:p-4 lg:aspect-auto lg:h-full">
                    <img
                      src="<?php echo $assetBase; ?>/_imgs/home/si-somos-unam.webp"
                      alt="Sí somos UNAM"
                      class="h-full w-full object-contain scale-[1.28] sm:scale-100"
                      width="1024"
                      height="1024"
                      loading="eager"
                      fetchpriority="high"
                      decoding="async"
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="home-slide absolute inset-0 h-full w-full opacity-0 pointer-events-none transition-opacity duration-700">
        <div class="absolute inset-0 bg-[linear-gradient(90deg,#231a8f_0%,#2b29a3_52%,#3148cf_100%)] pointer-events-none"></div>
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_28%_34%,rgba(255,255,255,0.10),transparent_45%),radial-gradient(circle_at_78%_72%,rgba(255,255,255,0.08),transparent_40%)] pointer-events-none"></div>
        <div class="relative z-10 h-full w-full">
          <div class="h-full max-w-7xl mx-auto px-3 pt-6 pb-16 sm:px-4 sm:py-10 lg:py-6">
          <div class="h-full grid grid-cols-1 lg:grid-cols-2 gap-4 sm:gap-6 lg:gap-0 items-center">
            <div class="flex items-center text-center text-white px-3 sm:px-6 lg:h-full lg:px-8">
              <div class="w-full">
              <p class="text-2xl sm:text-4xl md:text-5xl font-extrabold leading-tight text-[#f5c44d]">Aquí sí marcamos la</p>
              <p class="mt-1 text-4xl sm:text-6xl md:text-7xl font-black leading-none tracking-tight text-white">DIFERENCIA</p>
              <div class="mt-3 sm:mt-4 h-[3px] w-full max-w-xl bg-[#2951ff] mx-auto"></div>
              <ul class="mt-3 sm:mt-4 space-y-2 sm:space-y-3 text-[#0f2463] font-semibold text-sm sm:text-lg md:text-xl max-w-xl mx-auto">
                <li class="rounded-full bg-white px-3 sm:px-5 py-2 flex items-center justify-center gap-2">
                  <i class="shrink-0 text-[20px] leading-none text-[#1d4ed8]" data-lucide="check" aria-hidden="true"></i>
                  <span>Atención y seguimiento académico personalizado</span>
                </li>
                <li class="rounded-full bg-white px-3 sm:px-5 py-2 flex items-center justify-center gap-2">
                  <i class="shrink-0 text-[20px] leading-none text-[#1d4ed8]" data-lucide="check" aria-hidden="true"></i>
                  <span>Profesores altamente calificados</span>
                </li>
                <li class="rounded-full bg-white px-3 sm:px-5 py-2 flex items-center justify-center gap-2">
                  <i class="shrink-0 text-[20px] leading-none text-[#1d4ed8]" data-lucide="check" aria-hidden="true"></i>
                  <span>Instalaciones de vanguardia</span>
                </li>
              </ul>
              </div>
            </div>
            <div class="flex w-full items-center justify-center px-3 sm:px-6 lg:h-full lg:px-8">
              <div class="relative w-[84vw] max-w-[320px] aspect-square sm:h-[340px] sm:w-[340px] sm:max-w-none lg:h-[500px] lg:w-[500px] max-w-full overflow-hidden rounded-[24px] border border-white/20 bg-[#1c2a9b] shadow-[0_20px_48px_rgba(8,12,58,0.45)]">
                <img src="<?php echo $assetBase; ?>/_imgs/home/estudiantes.webp" alt="Estudiantes UNEG" class="h-full w-full object-contain object-center" loading="lazy" decoding="async">
                <div class="pointer-events-none absolute inset-0 ring-1 ring-inset ring-white/10"></div>
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
      <div class="home-slide absolute inset-0 h-full w-full opacity-0 pointer-events-none transition-opacity duration-700">
        <div class="absolute inset-0 bg-[linear-gradient(90deg,#0b2c65_0%,#0f3f97_55%,#1a56c9_100%)]"></div>
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_32%_30%,rgba(255,255,255,0.14),transparent_45%),radial-gradient(circle_at_72%_70%,rgba(255,255,255,0.10),transparent_40%)]"></div>
        <div data-video-poster class="relative z-10 h-full w-full flex flex-col items-center justify-center text-white text-center px-6 lg:hidden">
          <p class="text-xl sm:text-2xl md:text-3xl font-bold">Video UNEG - Egresados</p>
          <button type="button" class="mt-5 inline-flex h-[72px] w-[72px] items-center justify-center rounded-full border border-white/45 bg-white/20 text-white shadow-[0_10px_30px_rgba(0,0,0,0.25)] backdrop-blur-[6px]" data-video-play aria-label="Reproducir video">
            <i class="h-8 w-8 ml-1" data-lucide="play" aria-hidden="true"></i>
          </button>
        </div>
        <div data-video-wrap class="absolute inset-0 overflow-hidden hidden lg:block">
          <iframe
            id="home-hero-video-2"
            class="absolute left-1/2 top-1/2 h-full w-full -translate-x-1/2 -translate-y-1/2 scale-[1.08] lg:scale-[1.38]"
          data-src-desktop="https://www.youtube.com/embed/WISrteD5h-g?rel=0&autoplay=1&playsinline=1&mute=1&loop=1&playlist=WISrteD5h-g"
          data-src-mobile="https://www.youtube.com/embed/WISrteD5h-g?rel=0&autoplay=1&playsinline=1&loop=1&playlist=WISrteD5h-g"
          title="Video UNEG - Egresados"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          allowfullscreen
          ></iframe>
        </div>
      </div>
      <div class="home-slide absolute inset-0 h-full w-full opacity-0 pointer-events-none transition-opacity duration-700">
        <div class="absolute inset-0 bg-[linear-gradient(90deg,#0b2c65_0%,#0f3f97_55%,#1a56c9_100%)]"></div>
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_28%_32%,rgba(255,255,255,0.14),transparent_45%),radial-gradient(circle_at_74%_68%,rgba(255,255,255,0.10),transparent_40%)]"></div>
        <div data-video-poster class="relative z-10 h-full w-full flex flex-col items-center justify-center text-white text-center px-6 lg:hidden">
          <p class="text-xl sm:text-2xl md:text-3xl font-bold">Video institucional UNEG</p>
          <button type="button" class="mt-5 inline-flex h-[72px] w-[72px] items-center justify-center rounded-full border border-white/45 bg-white/20 text-white shadow-[0_10px_30px_rgba(0,0,0,0.25)] backdrop-blur-[6px]" data-video-play aria-label="Reproducir video">
            <i class="h-8 w-8 ml-1" data-lucide="play" aria-hidden="true"></i>
          </button>
        </div>
        <div data-video-wrap class="absolute inset-0 overflow-hidden hidden lg:block">
          <iframe
            id="home-hero-video"
            class="absolute left-1/2 top-1/2 h-full w-full -translate-x-1/2 -translate-y-1/2 scale-[1.08] lg:scale-[1.38]"
          data-src-desktop="https://www.youtube.com/embed/Im1-iJwNVWI?rel=0&autoplay=1&playsinline=1&mute=1&loop=1&playlist=Im1-iJwNVWI"
          data-src-mobile="https://www.youtube.com/embed/Im1-iJwNVWI?rel=0&autoplay=1&playsinline=1&loop=1&playlist=Im1-iJwNVWI"
          title="Video institucional UNEG"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          allowfullscreen
          ></iframe>
        </div>
      </div>
    </div>
    <button id="home-prev" class="absolute z-50 left-3 sm:left-4 top-1/2 -translate-y-1/2 h-9 w-9 rounded-full bg-white/25 text-white shadow-md backdrop-blur hover:bg-white/35 flex items-center justify-center" aria-label="Anterior">
      <i class="text-[22px] leading-none" data-lucide="chevron-left" aria-hidden="true"></i>
    </button>
    <button id="home-next" class="absolute z-50 right-3 sm:right-4 top-1/2 -translate-y-1/2 h-9 w-9 rounded-full bg-white/25 text-white shadow-md backdrop-blur hover:bg-white/35 flex items-center justify-center" aria-label="Siguiente">
      <i class="text-[22px] leading-none" data-lucide="chevron-right" aria-hidden="true"></i>
    </button>
    <div id="home-dots" class="pointer-events-none absolute bottom-3 sm:bottom-2 left-1/2 z-50 -translate-x-1/2 flex items-center gap-2" aria-hidden="true"></div>
  </div>
  <div class="max-w-7xl mx-auto px-4">
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
    <iframe id="travel" width="1280" height="600" title="Recorrido virtual de la Universidad de Negocios ISEC" allowfullscreen loading="lazy" src="https://tourmkr.com/F1WcjpHzDt" class="w-full rounded-2xl border border-slate-200 shadow-sm"></iframe>
  </div>
  <section class="mt-14">
    <h2 class="text-2xl sm:text-3xl font-semibold text-[#0b2c65] text-center">
      Sigue leyendo sobre lo que las Universidades Privadas en CDMX tienen para ti
    </h2>
    <?php
      $newsPosts = require __DIR__ . '/comunidad/noticias/_posts.php';
      $newsPosts = array_map(function ($p) use ($base, $assetBase) {
        $p['href'] = $base . $p['href'];
        $p['image'] = $assetBase . $p['image'];
        $p['meta'] = 'Noticias, Comunidad ISEC';
        return $p;
      }, $newsPosts);

      $blogPosts = require __DIR__ . '/blog/_posts.php';
      $blogPosts = array_map(function ($p) use ($base, $assetBase) {
        $p['href'] = $base . $p['href'];
        $p['image'] = $assetBase . $p['image'];
        $p['meta'] = 'Blog, Comunidad ISEC';
        return $p;
      }, $blogPosts);

      $latestNews = $newsPosts[0] ?? null;
      $latestBlogs = array_slice($blogPosts, -2);
      $homePosts = [];
      if ($latestNews) {
        $homePosts[] = $latestNews;
      }
      $homePosts = array_merge($homePosts, $latestBlogs);
    ?>
    <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-6">
      <?php foreach ($homePosts as $post): ?>
        <article class="rounded-2xl border border-slate-200 shadow-sm overflow-hidden bg-white">
          <a href="<?php echo $post['href']; ?>" class="block">
            <div class="h-56 md:h-64 w-full bg-slate-100 overflow-hidden">
              <img src="<?php echo $post['image']; ?>" alt="<?php echo htmlspecialchars($post['title']); ?>" class="h-full w-full object-cover" loading="lazy" decoding="async">
            </div>
            <div class="p-5">
              <span class="inline-flex items-center rounded-md bg-[#0d4fb6] px-4 py-2 text-sm font-semibold text-white">Leer más</span>
              <p class="mt-4 text-sm text-slate-500"><?php echo htmlspecialchars($post['date']); ?> · <?php echo htmlspecialchars($post['meta']); ?></p>
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
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <a href="https://uneg.edu.mx/comunidad/alumnos/e-learning" target="_blank" rel="noopener noreferrer" class="rounded-2xl border border-slate-200 bg-white p-6 flex flex-col items-center justify-center text-center shadow-sm min-h-[180px] hover:bg-slate-50 transition-colors">
          <img src="<?php echo $assetBase; ?>/_imgs/home/ChatGPT%20Image%2011%20feb%202026,%2004_58_18%20p.m..webp" alt="Office 365" class="h-20 w-20 rounded-full object-contain" loading="lazy" decoding="async">
          <p class="mt-4 text-sm font-semibold text-slate-700">OFFICE 365</p>
        </a>
        <div class="rounded-2xl border border-slate-200 bg-white p-6 flex flex-col items-center justify-center text-center shadow-sm min-h-[180px]">
          <img src="<?php echo $assetBase; ?>/_imgs/home/ChatGPT%20Image%2011%20feb%202026,%2004_58_21%20p.m..webp" alt="E-learning" class="h-20 w-20 rounded-full object-contain" loading="lazy" decoding="async">
          <p class="mt-4 text-sm font-semibold text-slate-700">E-LEARNING</p>
        </div>
        <a href="<?php echo $base; ?>/comunidad/reglamentos" target="_blank" rel="noopener noreferrer" class="rounded-2xl border border-slate-200 bg-white p-6 flex flex-col items-center justify-center text-center shadow-sm min-h-[180px] hover:bg-slate-50 transition-colors">
          <img src="<?php echo $assetBase; ?>/_imgs/home/ChatGPT%20Image%2011%20feb%202026,%2004_58_27%20p.m..webp" alt="Reglamentos" class="h-20 w-20 rounded-full object-contain" loading="lazy" decoding="async">
          <p class="mt-4 text-sm font-semibold text-slate-700">REGLAMENTOS</p>
        </a>
        <a href="http://impreweb.ddns.net:48110/PMPWeb/" target="_blank" rel="noopener noreferrer" class="rounded-2xl border border-slate-200 bg-white p-6 flex flex-col items-center justify-center text-center shadow-sm min-h-[180px] hover:bg-slate-50 transition-colors">
          <img src="<?php echo $assetBase; ?>/_imgs/home/ChatGPT%20Image%2011%20feb%202026,%2004_58_30%20p.m..webp" alt="Kiosko de impresión" class="h-20 w-20 rounded-full object-contain" loading="lazy" decoding="async">
          <p class="mt-4 text-sm font-semibold text-slate-700">KIOSKO DE IMPRESIÓN</p>
        </a>
      </div>
    </div>
  </section>
  </div>
</main>

<?php
/*
// JS del popup temporalmente deshabilitado.
?>
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
<?php
*/
?>
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
  const dotsWrap = document.getElementById('home-dots');
  const videoPlayButtons = Array.from(document.querySelectorAll('#home-slider [data-video-play]'));
  const slideDurations = [7000, 7000, 7000, 7000];
  let current = 0;
  let autoTimer = null;
  let paused = false;
  let dots = [];

  const setupDots = () => {
    if (!dotsWrap) return;
    dotsWrap.innerHTML = '';
    dots = slides.map(() => {
      const dot = document.createElement('span');
      dot.className = 'h-2.5 w-2.5 rounded-full bg-white/45 transition-all duration-300';
      dotsWrap.appendChild(dot);
      return dot;
    });
  };

  const resetVideoInSlide = (slide) => {
    const videoWrap = slide.querySelector('[data-video-wrap]');
    const poster = slide.querySelector('[data-video-poster]');
    const video = slide.querySelector('iframe[data-src-desktop]');
    if (!videoWrap || !poster || !video) return;
    video.src = 'about:blank';
    videoWrap.classList.add('hidden');
    poster.classList.remove('hidden');
  };

  const showSlide = (index) => {
    const isDesktop = window.matchMedia('(min-width: 1024px)').matches;
    slides.forEach((slide, i) => {
      const isActive = i === index;
      slide.classList.toggle('opacity-100', isActive);
      slide.classList.toggle('pointer-events-auto', isActive);
      slide.classList.toggle('opacity-0', !isActive);
      slide.classList.toggle('pointer-events-none', !isActive);
      if (!isActive) {
        resetVideoInSlide(slide);
        return;
      }

      if (isDesktop) {
        const video = slide.querySelector('iframe[data-src-desktop]');
        const poster = slide.querySelector('[data-video-poster]');
        const videoWrap = slide.querySelector('[data-video-wrap]');
        if (video && poster && videoWrap) {
          const targetSrc = video.dataset.srcDesktop;
          video.src = 'about:blank';
          if (targetSrc) {
            video.src = targetSrc;
          }
          poster.classList.add('hidden');
          videoWrap.classList.remove('hidden');
        }
      }
    });
    dots.forEach((dot, i) => {
      dot.className = i === index
        ? 'h-2.5 w-6 rounded-full bg-[#f5c44d] transition-all duration-300'
        : 'h-2.5 w-2.5 rounded-full bg-white/45 transition-all duration-300';
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
    setupDots();
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

    window.addEventListener('resize', () => {
      showSlide(current);
    });

    videoPlayButtons.forEach((button) => {
      button.addEventListener('click', () => {
        const slide = button.closest('.home-slide');
        if (!slide) return;
        const video = slide.querySelector('iframe[data-src-desktop]');
        const poster = slide.querySelector('[data-video-poster]');
        const videoWrap = slide.querySelector('[data-video-wrap]');
        if (!video || !poster || !videoWrap) return;
        const isDesktop = window.matchMedia('(min-width: 1024px)').matches;
        const targetSrc = isDesktop ? video.dataset.srcDesktop : video.dataset.srcMobile;
        if (targetSrc) {
          video.src = targetSrc;
        }
        poster.classList.add('hidden');
        videoWrap.classList.remove('hidden');
      });
    });
  }
</script>

<?php require __DIR__ . '/partials/footer.php'; ?>
