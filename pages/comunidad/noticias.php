<?php
$title = 'Noticias | UNEG';
$active = 'comunidad';
require __DIR__ . '/../partials/header.php';
?>
<style>
  .news-accordion {
    display: flex;
    gap: 10px;
    height: 420px;
  }
  .news-panel {
    position: relative;
    flex: 1;
    border-radius: 18px;
    overflow: hidden;
    transition: flex 0.5s ease;
    min-width: 0;
  }
  .news-panel::before {
    content: "";
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, rgba(5, 25, 66, 0.75), rgba(5, 25, 66, 0.35));
    z-index: 1;
  }
  .news-panel img {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    filter: blur(6px) saturate(0.9);
    transform: scale(1.04);
    transition: filter 0.5s ease, transform 0.5s ease;
  }
  .news-panel .content {
    position: relative;
    z-index: 2;
    height: 100%;
    padding: 26px 22px;
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    color: #fff;
    text-align: left;
  }
  .news-panel h2 {
    font-size: 1.5rem;
    font-weight: 700;
    line-height: 1.2;
  }
  .news-panel p {
    margin-top: 8px;
    font-size: 0.95rem;
    color: rgba(255, 255, 255, 0.85);
  }
  .news-panel .btn {
    margin-top: 14px;
    align-self: flex-start;
    background: #0b2c65;
    color: #fff;
    padding: 8px 16px;
    border-radius: 8px;
    font-weight: 600;
    font-size: 0.9rem;
  }
  .news-panel:hover {
    flex: 3;
  }
  .news-panel:hover img {
    filter: blur(0px) saturate(1);
    transform: scale(1.0);
  }
  @media (max-width: 1024px) {
    .news-accordion {
      height: auto;
      flex-direction: column;
    }
    .news-panel {
      min-height: 220px;
    }
    .news-panel:hover {
      flex: 1;
    }
  }
</style>

<main class="max-w-7xl mx-auto px-4 py-10">
  <section class="text-center">
    <p class="text-sm tracking-[0.35em] uppercase text-[#0b2c65]">Universidad de Negocios ISEC</p>
    <h1 class="mt-3 text-3xl sm:text-5xl font-semibold text-[#0b2c65]">Noticias</h1>
    <p class="mt-3 text-base sm:text-lg text-slate-600">Comunicados, eventos y vida en el campus.</p>
  </section>

  <section class="mt-8">
    <div class="news-accordion">
      <article class="news-panel">
        <img src="<?php echo $assetBase; ?>/imgs/acerca/slide-1.png" alt="Comunicados de Rectoría">
        <div class="content">
          <h2>Comunicados de Rectoría</h2>
          <p>Información oficial y anuncios institucionales.</p>
          <a class="btn" href="<?php echo $base; ?>/comunidad/noticias">Ver Comunicados</a>
        </div>
      </article>
      <article class="news-panel">
        <img src="<?php echo $assetBase; ?>/imgs/acerca/slide-2.png" alt="Eventos de Nuestra Comunidad">
        <div class="content">
          <h2>Eventos de Nuestra Comunidad</h2>
          <p>Actividades, ferias y encuentros académicos.</p>
          <a class="btn" href="<?php echo $base; ?>/comunidad/noticias">Ver Eventos</a>
        </div>
      </article>
      <article class="news-panel">
        <img src="<?php echo $assetBase; ?>/imgs/acerca/slide-3.png" alt="Vida en el Campus">
        <div class="content">
          <h2>Vida en el Campus</h2>
          <p>Momentos y experiencias dentro de ISEC.</p>
          <a class="btn" href="<?php echo $base; ?>/comunidad/noticias">Ver Campus</a>
        </div>
      </article>
      <article class="news-panel">
        <img src="<?php echo $assetBase; ?>/imgs/acerca/slide-4.png" alt="Tips para la Vida Académica">
        <div class="content">
          <h2>Tips para la Vida Académica</h2>
          <p>Consejos y recursos para tu día a día.</p>
          <a class="btn" href="<?php echo $base; ?>/comunidad/noticias">Ver Tips</a>
        </div>
      </article>
      <article class="news-panel">
        <img src="<?php echo $assetBase; ?>/imgs/home/hero.png" alt="Video Blog UNEG ISEC">
        <div class="content">
          <h2>Video Blog UNEG ISEC</h2>
          <p>Historias, cápsulas y entrevistas.</p>
          <a class="btn" href="<?php echo $base; ?>/comunidad/noticias">Ver Video Blog</a>
        </div>
      </article>
    </div>
  </section>

  <section class="mt-12">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
      <article class="rounded-2xl border border-slate-200 bg-white shadow-sm overflow-hidden">
        <div class="h-40 w-full bg-slate-100 flex items-center justify-center text-slate-500">IMG</div>
        <div class="p-5">
          <p class="text-xs text-slate-500">Noticias · 11 febrero, 2026</p>
          <h3 class="mt-2 text-base font-semibold text-[#0b2c65]">Comunicado institucional</h3>
          <p class="mt-2 text-sm text-slate-600">Anuncios oficiales de rectoría y dirección académica.</p>
        </div>
      </article>
      <article class="rounded-2xl border border-slate-200 bg-white shadow-sm overflow-hidden">
        <div class="h-40 w-full bg-slate-100 flex items-center justify-center text-slate-500">IMG</div>
        <div class="p-5">
          <p class="text-xs text-slate-500">Noticias · 11 febrero, 2026</p>
          <h3 class="mt-2 text-base font-semibold text-[#0b2c65]">Evento de comunidad</h3>
          <p class="mt-2 text-sm text-slate-600">Actividades, ferias y encuentros académicos.</p>
        </div>
      </article>
      <article class="rounded-2xl border border-slate-200 bg-white shadow-sm overflow-hidden">
        <div class="h-40 w-full bg-slate-100 flex items-center justify-center text-slate-500">IMG</div>
        <div class="p-5">
          <p class="text-xs text-slate-500">Noticias · 11 febrero, 2026</p>
          <h3 class="mt-2 text-base font-semibold text-[#0b2c65]">Vida en el campus</h3>
          <p class="mt-2 text-sm text-slate-600">Momentos y experiencias dentro de ISEC.</p>
        </div>
      </article>
      <article class="rounded-2xl border border-slate-200 bg-white shadow-sm overflow-hidden">
        <div class="h-40 w-full bg-slate-100 flex items-center justify-center text-slate-500">IMG</div>
        <div class="p-5">
          <p class="text-xs text-slate-500">Noticias · 11 febrero, 2026</p>
          <h3 class="mt-2 text-base font-semibold text-[#0b2c65]">Tips académicos</h3>
          <p class="mt-2 text-sm text-slate-600">Consejos y recursos para tu día a día.</p>
        </div>
      </article>

      <article class="rounded-2xl border border-slate-200 bg-white shadow-sm overflow-hidden">
        <div class="h-40 w-full bg-slate-100 flex items-center justify-center text-slate-500">IMG</div>
        <div class="p-5">
          <p class="text-xs text-slate-500">Noticias · 11 febrero, 2026</p>
          <h3 class="mt-2 text-base font-semibold text-[#0b2c65]">Video blog UNEG ISEC</h3>
          <p class="mt-2 text-sm text-slate-600">Historias, cápsulas y entrevistas destacadas.</p>
        </div>
      </article>
      <article class="rounded-2xl border border-slate-200 bg-white shadow-sm overflow-hidden">
        <div class="h-40 w-full bg-slate-100 flex items-center justify-center text-slate-500">IMG</div>
        <div class="p-5">
          <p class="text-xs text-slate-500">Noticias · 11 febrero, 2026</p>
          <h3 class="mt-2 text-base font-semibold text-[#0b2c65]">Boletín informativo</h3>
          <p class="mt-2 text-sm text-slate-600">Actualizaciones clave para la comunidad ISEC.</p>
        </div>
      </article>
      <article class="rounded-2xl border border-slate-200 bg-white shadow-sm overflow-hidden">
        <div class="h-40 w-full bg-slate-100 flex items-center justify-center text-slate-500">IMG</div>
        <div class="p-5">
          <p class="text-xs text-slate-500">Noticias · 11 febrero, 2026</p>
          <h3 class="mt-2 text-base font-semibold text-[#0b2c65]">Reconocimiento académico</h3>
          <p class="mt-2 text-sm text-slate-600">Logros y reconocimientos de alumnos y docentes.</p>
        </div>
      </article>
      <article class="rounded-2xl border border-slate-200 bg-white shadow-sm overflow-hidden">
        <div class="h-40 w-full bg-slate-100 flex items-center justify-center text-slate-500">IMG</div>
        <div class="p-5">
          <p class="text-xs text-slate-500">Noticias · 11 febrero, 2026</p>
          <h3 class="mt-2 text-base font-semibold text-[#0b2c65]">Convocatoria interna</h3>
          <p class="mt-2 text-sm text-slate-600">Participa en convocatorias y programas institucionales.</p>
        </div>
      </article>

      <article class="rounded-2xl border border-slate-200 bg-white shadow-sm overflow-hidden">
        <div class="h-40 w-full bg-slate-100 flex items-center justify-center text-slate-500">IMG</div>
        <div class="p-5">
          <p class="text-xs text-slate-500">Noticias · 11 febrero, 2026</p>
          <h3 class="mt-2 text-base font-semibold text-[#0b2c65]">Talleres y conferencias</h3>
          <p class="mt-2 text-sm text-slate-600">Agenda de talleres y conferencias para docentes.</p>
        </div>
      </article>
      <article class="rounded-2xl border border-slate-200 bg-white shadow-sm overflow-hidden">
        <div class="h-40 w-full bg-slate-100 flex items-center justify-center text-slate-500">IMG</div>
        <div class="p-5">
          <p class="text-xs text-slate-500">Noticias · 11 febrero, 2026</p>
          <h3 class="mt-2 text-base font-semibold text-[#0b2c65]">Vida universitaria</h3>
          <p class="mt-2 text-sm text-slate-600">Actividades culturales y deportivas del campus.</p>
        </div>
      </article>
      <article class="rounded-2xl border border-slate-200 bg-white shadow-sm overflow-hidden">
        <div class="h-40 w-full bg-slate-100 flex items-center justify-center text-slate-500">IMG</div>
        <div class="p-5">
          <p class="text-xs text-slate-500">Noticias · 11 febrero, 2026</p>
          <h3 class="mt-2 text-base font-semibold text-[#0b2c65]">Becas y apoyos</h3>
          <p class="mt-2 text-sm text-slate-600">Información de becas, descuentos y apoyos.</p>
        </div>
      </article>
      <article class="rounded-2xl border border-slate-200 bg-white shadow-sm overflow-hidden">
        <div class="h-40 w-full bg-slate-100 flex items-center justify-center text-slate-500">IMG</div>
        <div class="p-5">
          <p class="text-xs text-slate-500">Noticias · 11 febrero, 2026</p>
          <h3 class="mt-2 text-base font-semibold text-[#0b2c65]">Investigación y docencia</h3>
          <p class="mt-2 text-sm text-slate-600">Proyectos académicos y logros de investigación.</p>
        </div>
      </article>

      <article class="rounded-2xl border border-slate-200 bg-white shadow-sm overflow-hidden">
        <div class="h-40 w-full bg-slate-100 flex items-center justify-center text-slate-500">IMG</div>
        <div class="p-5">
          <p class="text-xs text-slate-500">Noticias · 11 febrero, 2026</p>
          <h3 class="mt-2 text-base font-semibold text-[#0b2c65]">Avisos administrativos</h3>
          <p class="mt-2 text-sm text-slate-600">Fechas clave, trámites y comunicados internos.</p>
        </div>
      </article>
      <article class="rounded-2xl border border-slate-200 bg-white shadow-sm overflow-hidden">
        <div class="h-40 w-full bg-slate-100 flex items-center justify-center text-slate-500">IMG</div>
        <div class="p-5">
          <p class="text-xs text-slate-500">Noticias · 11 febrero, 2026</p>
          <h3 class="mt-2 text-base font-semibold text-[#0b2c65]">Orgullo ISEC</h3>
          <p class="mt-2 text-sm text-slate-600">Historias de éxito y egresados destacados.</p>
        </div>
      </article>
      <article class="rounded-2xl border border-slate-200 bg-white shadow-sm overflow-hidden">
        <div class="h-40 w-full bg-slate-100 flex items-center justify-center text-slate-500">IMG</div>
        <div class="p-5">
          <p class="text-xs text-slate-500">Noticias · 11 febrero, 2026</p>
          <h3 class="mt-2 text-base font-semibold text-[#0b2c65]">Proyectos estudiantiles</h3>
          <p class="mt-2 text-sm text-slate-600">Trabajo y proyectos de la comunidad estudiantil.</p>
        </div>
      </article>
      <article class="rounded-2xl border border-slate-200 bg-white shadow-sm overflow-hidden">
        <div class="h-40 w-full bg-slate-100 flex items-center justify-center text-slate-500">IMG</div>
        <div class="p-5">
          <p class="text-xs text-slate-500">Noticias · 11 febrero, 2026</p>
          <h3 class="mt-2 text-base font-semibold text-[#0b2c65]">Comunidad en acción</h3>
          <p class="mt-2 text-sm text-slate-600">Participación en actividades y servicio social.</p>
        </div>
      </article>
    </div>
  </section>
</main>
<?php require __DIR__ . '/../partials/footer.php'; ?>
