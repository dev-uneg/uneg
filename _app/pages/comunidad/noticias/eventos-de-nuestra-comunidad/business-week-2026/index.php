<?php
$title = 'Business Week 2026 | UNEG';
$active = 'comunidad';
require __DIR__ . '/../../../../partials/header.php';
?>
<main class="max-w-7xl mx-auto px-4 py-10">
  <section class="text-center">
    <p class="text-sm tracking-[0.35em] uppercase text-[#0b2c65]">Universidad de Negocios ISEC</p>
    <h1 class="mt-3 text-3xl sm:text-5xl font-semibold text-[#0b2c65]">Business Week 2026: formación integral con visión profesional</h1>
    <p class="mt-3 text-base sm:text-lg text-slate-600">Por Universidad de Negocios ISEC · 24 marzo, 2026 · Publicado en Comunidad ISEC, Eventos de Nuestra Comunidad</p>
  </section>

  <section class="mt-10 grid grid-cols-1 lg:grid-cols-[minmax(0,1fr)_320px] gap-8 overflow-visible">
    <article class="rounded-2xl border border-slate-200 bg-white shadow-sm overflow-hidden">
      <div id="business-week-carousel" class="relative">
        <div class="overflow-hidden">
          <div class="bw-track flex transition-transform duration-500 ease-in-out">
            <div class="min-w-full">
              <img src="<?php echo $assetBase; ?>/_imgs/noticias/eventos/business-week-2026-1-opt.webp?v=20260324b" alt="Business Week 2026 - Imagen 1" class="w-full h-auto block">
            </div>
            <div class="min-w-full">
              <img src="<?php echo $assetBase; ?>/_imgs/noticias/eventos/business-week-2026-2-opt.webp?v=20260324b" alt="Business Week 2026 - Imagen 2" class="w-full h-auto block">
            </div>
            <div class="min-w-full">
              <img src="<?php echo $assetBase; ?>/_imgs/noticias/eventos/business-week-2026-3-opt.webp?v=20260324b" alt="Business Week 2026 - Imagen 3" class="w-full h-auto block">
            </div>
          </div>
        </div>

        <button type="button" class="bw-prev absolute left-3 top-1/2 -translate-y-1/2 z-10 h-10 w-10 rounded-full bg-white/90 text-[#0b2c65] shadow flex items-center justify-center" aria-label="Imagen anterior">
          <i data-lucide="chevron-left" class="h-5 w-5"></i>
        </button>
        <button type="button" class="bw-next absolute right-3 top-1/2 -translate-y-1/2 z-10 h-10 w-10 rounded-full bg-white/90 text-[#0b2c65] shadow flex items-center justify-center" aria-label="Imagen siguiente">
          <i data-lucide="chevron-right" class="h-5 w-5"></i>
        </button>

        <div class="bw-dots absolute bottom-4 left-1/2 -translate-x-1/2 z-10 flex items-center gap-2" aria-label="Paginación de imágenes">
          <button type="button" class="h-2.5 w-2.5 rounded-full bg-white/80 ring-2 ring-white" data-index="0" aria-label="Ir a imagen 1"></button>
          <button type="button" class="h-2.5 w-2.5 rounded-full bg-white/50" data-index="1" aria-label="Ir a imagen 2"></button>
          <button type="button" class="h-2.5 w-2.5 rounded-full bg-white/50" data-index="2" aria-label="Ir a imagen 3"></button>
        </div>
      </div>

      <div class="p-6 text-slate-700 leading-relaxed">
        <h2 class="text-xl font-semibold text-[#0b2c65]">Business Week 2026</h2>
        <p class="mt-3">La Business Week 2026 realizada en la Universidad de Negocios ISEC fue un evento académico enfocado en fortalecer la formación integral de los estudiantes de Licenciatura mediante la vinculación con el entorno profesional.</p>
        <p class="mt-3">Durante esta semana, se llevaron a cabo diversas conferencias y actividades en las que participaron ponentes especializados en áreas como Tecnología, ámbito Legal, sector Turístico, Marketing, Negocios Internacionales y Finanzas, lo que permitió a los alumnos conocer diferentes perspectivas del mundo laboral y empresarial.</p>
        <p class="mt-3">Así mismo, la participación de profesionistas con experiencia y egresados de la misma institución enriqueció el evento, ya que compartieron casos reales, conocimientos prácticos y recomendaciones para el desarrollo profesional.</p>
        <p class="mt-3">Este tipo de iniciativas refuerzan la importancia de la preparación multidisciplinaria en carreras como Administración, Derecho, Mercadotecnia y Negocios Internacionales, áreas que forman parte de la oferta académica de la Universidad.</p>
        <p class="mt-3 font-medium text-[#0b2c65]">Con acciones como Business Week 2026, la Universidad de Negocios ISEC reafirma su compromiso con una educación conectada con los retos y oportunidades del mundo actual.</p>
      </div>
    </article>

    <?php
      $categorias = require __DIR__ . '/../../_categorias.php';
      $posts = require __DIR__ . '/../../_posts.php';
      $posts = array_map(function ($p) use ($base) {
        $p['href'] = $base . $p['href'];
        return $p;
      }, $posts);
      $selfHref = $base . '/comunidad/noticias/eventos-de-nuestra-comunidad/business-week-2026';
      $otherNewsPool = array_values(array_filter($posts, function ($p) use ($selfHref) {
        return $p['category'] === 'eventos-de-nuestra-comunidad' && $p['href'] !== $selfHref;
      }));
      shuffle($otherNewsPool);
      $otherNews = array_slice($otherNewsPool, 0, 3);

      $sidebarQuery = '';
      $sidebarCategorySlug = 'eventos-de-nuestra-comunidad';
      $sidebarCategories = $categorias;
      $sidebarOtherNews = $otherNews;
      require __DIR__ . '/../../_sidebar.php';
    ?>
  </section>
</main>

<script>
  (function () {
    const root = document.getElementById('business-week-carousel');
    if (!root) return;

    const track = root.querySelector('.bw-track');
    const prev = root.querySelector('.bw-prev');
    const next = root.querySelector('.bw-next');
    const dots = Array.from(root.querySelectorAll('.bw-dots [data-index]'));
    const total = dots.length;
    let current = 0;

    const render = () => {
      track.style.transform = `translateX(-${current * 100}%)`;
      dots.forEach((dot, index) => {
        dot.classList.toggle('bg-white/80', index === current);
        dot.classList.toggle('ring-2', index === current);
        dot.classList.toggle('ring-white', index === current);
        dot.classList.toggle('bg-white/50', index !== current);
      });
    };

    prev.addEventListener('click', () => {
      current = (current - 1 + total) % total;
      render();
    });

    next.addEventListener('click', () => {
      current = (current + 1) % total;
      render();
    });

    dots.forEach((dot, index) => {
      dot.addEventListener('click', () => {
        current = index;
        render();
      });
    });

    render();
  })();
</script>
<?php require __DIR__ . '/../../../../partials/footer.php'; ?>
