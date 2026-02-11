<?php
$title = 'Acerca de Universidad de Negocios ISEC | Nuestra Historia y Valores';
$active = 'acerca';
require __DIR__ . '/partials/header.php';
?>

<main class="max-w-7xl mx-auto px-4 py-10">
  <div class="relative h-[500px] w-full overflow-hidden rounded-2xl border border-slate-200 shadow-sm">
    <div id="about-slider" class="h-full w-full">
      <div class="about-slide h-full w-full bg-[#0d4fb6] text-white flex items-center justify-center text-3xl font-semibold">Slide 1</div>
      <div class="about-slide hidden h-full w-full bg-[#f2c027] text-slate-900 flex items-center justify-center text-3xl font-semibold">Slide 2</div>
      <div class="about-slide hidden h-full w-full bg-[#0b2c65] text-white flex items-center justify-center text-3xl font-semibold">Slide 3</div>
    </div>
    <button id="about-prev" class="absolute left-4 top-1/2 -translate-y-1/2 h-9 w-9 rounded-full bg-white/25 text-white shadow-md backdrop-blur hover:bg-white/35" aria-label="Anterior">
      <svg class="h-5 w-5 mx-auto" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
        <path d="M15 18l-6-6 6-6"></path>
      </svg>
    </button>
    <button id="about-next" class="absolute right-4 top-1/2 -translate-y-1/2 h-9 w-9 rounded-full bg-white/25 text-white shadow-md backdrop-blur hover:bg-white/35" aria-label="Siguiente">
      <svg class="h-5 w-5 mx-auto" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
        <path d="M9 6l6 6-6 6"></path>
      </svg>
    </button>
  </div>

  <section class="mt-12">
    <h1 class="text-2xl sm:text-3xl font-semibold text-[#0b2c65] text-center">
      Acerca de Universidad de Negocios ISEC | Nuestra Historia y Valores
    </h1>

    <div class="mt-10">
      <h2 class="text-2xl font-semibold text-[#0b2c65]">Misión</h2>
      <div class="mt-4 border-l-4 border-slate-200 pl-6 text-lg text-slate-700 font-semibold">
        Atender las necesidades de educación orientada a negocios y ser factores de cambio de las futuras generaciones, con aplicación inmediata de conocimientos a favor de la sociedad y obtener mejores niveles de vida.
      </div>
      <p class="mt-6 text-slate-600 leading-relaxed">
        El compromiso que desde 1954 la Universidad de Negocios ISEC asume frente al mundo, ha sido uno de los baluartes por los cuales, el Instituto Politécnico Nacional y la Universidad Nacional Autónoma de México, dos Instituciones del más elevado nivel y reconocidas internacionalmente, han confiado en nosotros incorporando los estudios de Bachillerato Técnico y las Licenciaturas en Pedagogía y Psicología respectivamente, considerándonos una Institución distinguida por el respeto, lealtad y responsabilidad en el cumplimiento que exige la incorporación de estudios pertinentes y alineados a estas dos casas de estudios. Las demás Licenciaturas, Maestrías y Posgrados cuentan con incorporación a la SEP.
      </p>
    </div>
  </section>

  <section class="mt-14 rounded-2xl bg-[#0b2c65] text-white px-6 py-10">
    <h2 class="text-center text-2xl sm:text-3xl font-semibold">Declaración de principios</h2>
    <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-8 text-base leading-relaxed">
      <ul class="space-y-6">
        <li class="flex gap-3"><span class="text-white">✓</span>Los valores espirituales son razones fundamentales del SER, la moral, la ética, la verdad, la justicia, la inteligencia, la libertad y el respeto a los demás.</li>
        <li class="flex gap-3"><span class="text-white">✓</span>El conocimiento es un proceso comprensivo de información actualizada que permite opinar y aplicarlo en beneficio a la comunidad.</li>
        <li class="flex gap-3"><span class="text-white">✓</span>Todos los seres humanos son dignos y tienen derecho a la educación sin distinciones de sexo, credos, ni ideologías políticas.</li>
      </ul>
      <ul class="space-y-6">
        <li class="flex gap-3"><span class="text-white">✓</span>El docente es un SER en busca de la verdad, con sólidos principios morales y dispuesto a transmitir sabiduría y experiencias.</li>
        <li class="flex gap-3"><span class="text-white">✓</span>Nuestro hábito es la disciplina.</li>
        <li class="flex gap-3"><span class="text-white">✓</span>La tarea educativa es la más alta responsabilidad del ser humano y el mejor camino para el cambio y encontrar líderes morales de progreso.</li>
      </ul>
    </div>

    <div class="mt-10 border-t border-white/20 pt-10">
      <h2 class="text-center text-2xl sm:text-3xl font-semibold">Fundamentos filosóficos SER INTEGRAL</h2>
      <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-8 text-base leading-relaxed">
        <p class="text-lg font-semibold">
          Nuestros fundamentos filosóficos, descansan sobre la base del dilecto proceder que demanda la formación integral de los seres humanos. El conocimiento pertinente es lo que en realidad genera una visión transformadora en nuestros estudiantes, siendo íntegros en todos sus procesos de consolidación en cada uno de sus proyectos formativos.
        </p>
        <ul class="space-y-6">
          <li class="flex gap-3"><span class="text-white">✓</span>Atención con calidad y vocación de servicio.</li>
          <li class="flex gap-3"><span class="text-white">✓</span>Integración del hombre a la cultura.</li>
          <li class="flex gap-3"><span class="text-white">✓</span>Educación pertinente.</li>
          <li class="flex gap-3"><span class="text-white">✓</span>Formación humana integral.</li>
          <li class="flex gap-3"><span class="text-white">✓</span>Fortalecimiento de valores.</li>
          <li class="flex gap-3"><span class="text-white">✓</span>Cuidar el medio ambiente y la ecología.</li>
        </ul>
      </div>
    </div>
  </section>

  <section class="mt-14 overflow-hidden rounded-2xl border border-slate-200 bg-white">
    <div class="bg-gradient-to-r from-[#0b2c65] to-[#1d4c8f] text-white px-6 py-10 text-center">
      <p class="text-sm tracking-[0.4em]">FILOSOFÍA</p>
      <h2 class="mt-2 text-3xl sm:text-4xl font-semibold">SER DENTRO DEL DEBER SER</h2>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 px-6 py-10">
      <div>
        <h3 class="text-xl font-semibold text-slate-900">Filosofía Institucional</h3>
        <p class="mt-4 text-slate-600 italic">
          La búsqueda de la razón es justamente la introyeción axiológica del reconocimiento del buen ser, la distinción entre lo bueno y lo malo resulta a última instancia la finalidad principal en la conformación y la transformación de la conciencia humana.
        </p>
      </div>
      <div>
        <h3 class="text-xl font-semibold text-slate-900">Prestigio y Calidad Educativa</h3>
        <p class="mt-4 text-slate-600">
          La Universidad de Negocios ISEC cuenta con una gran trayectoria en la formación de profesionistas competentes para enfrentar con éxito los retos que la sociedad les impone.
        </p>
        <p class="mt-4 text-slate-600">
          Contamos con planes de estudio con alto nivel académico y amplio contenido práctico.
        </p>
      </div>
    </div>
  </section>

  <section class="mt-14">
    <style>
      .timeline-rail {
        position: relative;
      }
      .timeline-rail::before {
        content: '';
        position: absolute;
        left: 0;
        right: 0;
        top: 50%;
        height: 2px;
        background: #dbe2f1;
      }
      .timeline-track {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(90px, 1fr));
        gap: 12px;
        position: relative;
        z-index: 1;
      }
      .timeline-chip {
        position: relative;
        border: 2px solid #0b2c65;
        color: #0b2c65;
        background: #fff;
        transition: all 160ms ease;
        width: 100%;
        text-align: center;
      }
      .timeline-chip.active {
        background: #0b2c65;
        color: #fff;
      }
    </style>
    <div class="rounded-2xl border border-slate-200 bg-slate-50 px-6 py-10">
      <h2 class="text-center text-2xl sm:text-3xl font-semibold text-[#0b2c65]">Historia del Colegio</h2>
      <p class="mt-2 text-center text-slate-600">Pasa el mouse sobre un año para ver el contenido.</p>

      <div class="mt-8 timeline-rail">
        <div class="timeline-track py-6">
          <button class="timeline-chip px-4 py-2 rounded-lg font-semibold" data-year="1954" data-title="Fundación" data-body="Test: Nace la institución y comienza nuestra historia." data-default="true">1954</button>
          <button class="timeline-chip px-4 py-2 rounded-lg font-semibold" data-year="1960" data-title="Primeros programas" data-body="Test: Programas académicos con enfoque empresarial.">1960</button>
          <button class="timeline-chip px-4 py-2 rounded-lg font-semibold" data-year="1976" data-title="Consolidación" data-body="Test: Identidad institucional y valores sólidos.">1976</button>
          <button class="timeline-chip px-4 py-2 rounded-lg font-semibold" data-year="1989" data-title="Expansión" data-body="Test: Crecemos en infraestructura y oferta educativa.">1989</button>
          <button class="timeline-chip px-4 py-2 rounded-lg font-semibold" data-year="1999" data-title="Innovación" data-body="Test: Actualización académica y tecnológica.">1999</button>
          <button class="timeline-chip px-4 py-2 rounded-lg font-semibold" data-year="2006" data-title="Crecimiento" data-body="Test: Nuevas metas y programas.">2006</button>
          <button class="timeline-chip px-4 py-2 rounded-lg font-semibold" data-year="2018" data-title="Actualidad" data-body="Test: Comunidad fuerte y visión global.">2018</button>
          <button class="timeline-chip px-4 py-2 rounded-lg font-semibold" data-year="2024" data-title="Futuro" data-body="Test: Preparados para nuevos retos.">2024</button>
        </div>
      </div>

      <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-6 items-center">
        <div class="md:col-span-2 rounded-2xl bg-white border border-slate-200 p-8 shadow-sm">
          <div class="flex items-center gap-2 text-sm uppercase tracking-[0.3em] text-slate-500">
            <i class="ri-history-line"></i>
            Historia
          </div>
          <h3 id="history-year" class="mt-2 text-3xl font-semibold text-[#0b2c65]">1954</h3>
          <h4 id="history-title" class="mt-2 text-xl font-semibold text-slate-800">
            <i class="ri-flag-2-line mr-2 text-slate-400"></i>
            Fundación
          </h4>
          <p id="history-body" class="mt-3 text-slate-600">Test: Nace la institución y comienza nuestra historia.</p>
        </div>
        <div class="rounded-2xl bg-white border border-slate-200 p-6 shadow-sm flex items-center justify-center text-slate-500 min-h-[200px]">
          Imagen
        </div>
      </div>
    </div>
  </section>
</main>

<script>
  const aboutSlides = Array.from(document.querySelectorAll('#about-slider .about-slide'));
  const aboutPrev = document.getElementById('about-prev');
  const aboutNext = document.getElementById('about-next');
  let aboutCurrent = 0;
  let aboutTimer = null;

  const showAboutSlide = (index) => {
    aboutSlides.forEach((slide, i) => {
      slide.classList.toggle('hidden', i !== index);
    });
  };

  if (aboutSlides.length) {
    showAboutSlide(aboutCurrent);
    if (aboutPrev) {
      aboutPrev.addEventListener('click', () => {
        aboutCurrent = (aboutCurrent - 1 + aboutSlides.length) % aboutSlides.length;
        showAboutSlide(aboutCurrent);
      });
    }
    if (aboutNext) {
      aboutNext.addEventListener('click', () => {
        aboutCurrent = (aboutCurrent + 1) % aboutSlides.length;
        showAboutSlide(aboutCurrent);
      });
    }
    aboutTimer = setInterval(() => {
      aboutCurrent = (aboutCurrent + 1) % aboutSlides.length;
      showAboutSlide(aboutCurrent);
    }, 5000);
  }
</script>
<script>
  const chips = document.querySelectorAll('.timeline-chip');
  const yearEl = document.getElementById('history-year');
  const titleEl = document.getElementById('history-title');
  const bodyEl = document.getElementById('history-body');

  const activateChip = (chip) => {
    if (!chip || !yearEl || !titleEl || !bodyEl) return;
    chips.forEach((c) => c.classList.remove('active'));
    chip.classList.add('active');
    yearEl.textContent = chip.dataset.year || '';
    titleEl.textContent = chip.dataset.title || '';
    bodyEl.textContent = chip.dataset.body || '';
  };

  chips.forEach((chip) => {
    chip.addEventListener('mouseenter', () => activateChip(chip));
    chip.addEventListener('focus', () => activateChip(chip));
  });

  const defaultChip = document.querySelector('.timeline-chip[data-default=\"true\"]') || chips[0];
  activateChip(defaultChip);
</script>

<?php require __DIR__ . '/partials/footer.php'; ?>
