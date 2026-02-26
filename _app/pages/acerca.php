<?php
$title = 'Acerca de Universidad de Negocios ISEC | Nuestra Historia y Valores';
$active = 'acerca';
require __DIR__ . '/partials/header.php';
?>

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
  .video-cover-embed {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 100%;
    height: 100%;
    transform: translate(-50%, -50%) scale(1.38);
  }
  .video-cover-frame {
    position: absolute;
    inset: 0;
    overflow: hidden;
  }
</style>

<main class="max-w-7xl mx-auto px-4 py-10">
  <div class="relative h-[500px] w-full overflow-hidden rounded-2xl border border-slate-200 shadow-sm">
    <div id="about-slider" class="fade-slider h-full w-full">
      <div class="about-slide fade-slide is-active h-full w-full">
        <div class="video-cover-frame absolute inset-0 overflow-hidden">
          <iframe
            id="about-hero-video"
            class="video-cover-embed"
          data-src-desktop="https://www.youtube.com/embed/WISrteD5h-g?rel=0&autoplay=1&mute=1&playsinline=1"
          data-src-mobile="https://www.youtube.com/embed/WISrteD5h-g?rel=0&playsinline=1"
          title="Video UNEG - Egresados"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          allowfullscreen
          ></iframe>
        </div>
      </div>
      <div class="about-slide fade-slide h-full w-full">
        <img src="<?php echo $assetBase; ?>/_imgs/acerca/slide-1.webp" alt="Acerca de ISEC" class="absolute inset-0 h-full w-full object-cover">
      </div>
      <div class="about-slide fade-slide h-full w-full">
        <img src="<?php echo $assetBase; ?>/_imgs/acerca/slide-2.webp" alt="Comunidad ISEC" class="absolute inset-0 h-full w-full object-cover">
      </div>
      <div class="about-slide fade-slide h-full w-full">
        <img src="<?php echo $assetBase; ?>/_imgs/acerca/slide-3.webp" alt="Campus ISEC" class="absolute inset-0 h-full w-full object-cover">
      </div>
      <div class="about-slide fade-slide h-full w-full">
        <img src="<?php echo $assetBase; ?>/_imgs/acerca/slide-4.webp" alt="Vida universitaria ISEC" class="absolute inset-0 h-full w-full object-cover">
      </div>
    </div>
    <button id="about-prev" class="absolute left-4 top-1/2 -translate-y-1/2 h-9 w-9 rounded-full bg-white/25 text-white shadow-md backdrop-blur hover:bg-white/35" aria-label="Anterior">
      <i class="ri-arrow-left-line text-[22px] leading-none" aria-hidden="true"></i>
    </button>
    <button id="about-next" class="absolute right-4 top-1/2 -translate-y-1/2 h-9 w-9 rounded-full bg-white/25 text-white shadow-md backdrop-blur hover:bg-white/35" aria-label="Siguiente">
      <i class="ri-arrow-right-line text-[22px] leading-none" aria-hidden="true"></i>
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
      .timeline-vertical {
        position: relative;
        margin-top: 28px;
      }
      .timeline-vertical {
        position: relative;
      }
      .timeline-vertical::before {
        content: '';
        position: absolute;
        left: 96px;
        top: 0;
        bottom: 0;
        width: 2px;
        background: #dbe2f1;
      }
      .timeline-item {
        position: relative;
        display: grid;
        grid-template-columns: 70px 36px 1fr;
        gap: 8px;
        align-items: center;
        padding: 14px 0 22px;
      }
      .timeline-year {
        font-weight: 700;
        color: #0b2c65;
        text-align: right;
        font-size: 1rem;
      }
      .timeline-dot {
        width: 16px;
        height: 16px;
        border-radius: 999px;
        background: #0b2c65;
        box-shadow: 0 0 0 6px #e6eefc;
        justify-self: center;
      }
      .timeline-card {
        margin-top: 0;
      }
      .timeline-card {
        background: #fff;
        border: 1px solid #e2e8f0;
        border-radius: 16px;
        padding: 16px 18px;
        box-shadow: 0 1px 2px rgba(15, 23, 42, 0.05);
      }
      .timeline-card h3 {
        color: #0b2c65;
        font-weight: 700;
      }
      .timeline-card p {
        margin-top: 6px;
        color: #475569;
        font-size: 0.95rem;
      }
      @media (max-width: 640px) {
        .timeline-vertical::before {
          left: 12px;
        }
        .timeline-item {
          grid-template-columns: 24px 1fr;
          gap: 12px;
          align-items: flex-start;
        }
        .timeline-year {
          grid-column: 2;
          text-align: left;
          font-size: 0.95rem;
          margin-top: 2px;
        }
        .timeline-dot {
          margin-top: 8px;
        }
      }
    </style>
    <div class="rounded-2xl border border-slate-200 bg-slate-50 px-6 py-10">
      <h2 class="text-center text-2xl sm:text-3xl font-semibold text-[#0b2c65]">Historia del Colegio</h2>
      <p class="mt-2 text-center text-slate-600">Conoce los momentos clave en la historia de ISEC.</p>

      <div class="timeline-vertical">
        <div class="timeline-item">
          <div class="timeline-year">1954</div>
          <div class="timeline-dot"></div>
          <div class="timeline-card">
            <h3>Inauguración</h3>
            <p>Inauguración del Instituto Superior de Estudios Comerciales el 20 de abril de 1954.</p>
          </div>
        </div>
        <div class="timeline-item">
          <div class="timeline-year">1955</div>
          <div class="timeline-dot"></div>
          <div class="timeline-card">
            <h3>Especialidades</h3>
            <p>El Instituto se abre paso en el mundo empresarial en el año 1955 al crear tres especialidades en la rama.</p>
          </div>
        </div>
        <div class="timeline-item">
          <div class="timeline-year">1960</div>
          <div class="timeline-dot"></div>
          <div class="timeline-card">
            <h3>Nuevo espacio</h3>
            <p>En 1960, ISEC ocupa un nuevo espacio en la calle Londres No. 37, Col. Juárez.</p>
          </div>
        </div>
        <div class="timeline-item">
          <div class="timeline-year">1967</div>
          <div class="timeline-dot"></div>
          <div class="timeline-card">
            <h3>Primer edificio</h3>
            <p>El 18 de noviembre de 1967, se inauguró el primer edificio "ad hoc" en las instalaciones de Mier y Pesado.</p>
          </div>
        </div>
        <div class="timeline-item">
          <div class="timeline-year">1968</div>
          <div class="timeline-dot"></div>
          <div class="timeline-card">
            <h3>RVOE SEP</h3>
            <p>El 9 de abril de 1968, se obtiene el Reconocimiento de Validez Oficial de Estudios Superiores por parte de la SEP (Acuerdo 430) para la carrera de Administración de Empresas.</p>
          </div>
        </div>
        <div class="timeline-item">
          <div class="timeline-year">1976</div>
          <div class="timeline-dot"></div>
          <div class="timeline-card">
            <h3>RVOE SEP</h3>
            <p>El 22 de julio de 1976, se obtiene el Reconocimiento de Validez Oficial de Estudios Superiores por parte de la SEP (Acuerdo 8714) para la carrera de Contador Público.</p>
          </div>
        </div>
        <div class="timeline-item">
          <div class="timeline-year">1985</div>
          <div class="timeline-dot"></div>
          <div class="timeline-card">
            <h3>RVOE y predio</h3>
            <p>El 29 de abril de 1985, se obtiene el Reconocimiento de Validez Oficial de Estudios Superiores por parte de la SEP (Acuerdo 85401) para la carrera de Administración de Empresas. El 13 de mayo del mismo año, se adquiere el predio de Mier y Pesado No. 235 para la construcción de aulas.</p>
          </div>
        </div>
        <div class="timeline-item">
          <div class="timeline-year">1989</div>
          <div class="timeline-dot"></div>
          <div class="timeline-card">
            <h3>RVOE SEP</h3>
            <p>El 29 de abril de 1989, se obtiene el Reconocimiento de Validez Oficial de Estudios Superiores por parte de la SEP (Acuerdo 85402) para la carrera de Contador Público.</p>
          </div>
        </div>
        <div class="timeline-item">
          <div class="timeline-year">1990</div>
          <div class="timeline-dot"></div>
          <div class="timeline-card">
            <h3>Casa Blanca</h3>
            <p>El 15 de noviembre de 1990, se adquiere el espacio que ahora ocupan las instalaciones deportivas y la llamada Casa Blanca.</p>
          </div>
        </div>
        <div class="timeline-item">
          <div class="timeline-year">1994</div>
          <div class="timeline-dot"></div>
          <div class="timeline-card">
            <h3>Rango universitario</h3>
            <p>El 24 de mayo de 1994, se le otorga el rango de Universidad a “ISEC”. El 28 de octubre, se obtiene el Reconocimiento de Validez Oficial de Estudios Superiores por parte de la SEP (Acuerdo 942165) para la carrera de Derecho.</p>
          </div>
        </div>
        <div class="timeline-item">
          <div class="timeline-year">1995</div>
          <div class="timeline-dot"></div>
          <div class="timeline-card">
            <h3>RVOE SEP</h3>
            <p>El 22 de febrero de 1995, se obtiene el Reconocimiento de Validez Oficial de Estudios Superiores por parte de la SEP (Acuerdos 952029, 952030, 952031, 952032, 952033 y 952034) para las carreras de Mercadotecnia, Finanzas, Contador Público, Administración de Empresas, Informática y Relaciones Industriales. El 27 de junio del mismo año, se obtiene el Reconocimiento de Validez Oficial de Estudios Superiores por parte de la SEP con los (Acuerdos 953243 y 953242) para las Especialidades en Finanzas e Impuestos.</p>
          </div>
        </div>
        <div class="timeline-item">
          <div class="timeline-year">1996</div>
          <div class="timeline-dot"></div>
          <div class="timeline-card">
            <h3>Biblioteca</h3>
            <p>El 7 de febrero de 1996, se inaugura la Biblioteca “Adrián Mora Duhart”.</p>
          </div>
        </div>
        <div class="timeline-item">
          <div class="timeline-year">1997</div>
          <div class="timeline-dot"></div>
          <div class="timeline-card">
            <h3>Especialidades</h3>
            <p>El 18 de julio de 1997, se obtiene el Reconocimiento de Validez Oficial de Estudios Superiores por parte de la SEP (Acuerdos 973191, 973192 y 973193) para: Especialidad en Telecomunicaciones y Redes, Especialidad en Sistemas Expertos y Especialidad en Administración por Calidad Total.</p>
          </div>
        </div>
        <div class="timeline-item">
          <div class="timeline-year">1999</div>
          <div class="timeline-dot"></div>
          <div class="timeline-card">
            <h3>RVOE e IPN</h3>
            <p>El 08 de febrero de 1999, se obtiene la validez oficial por parte de la SEP (Acuerdo 994070) para la Maestría en Administración de Negocios. Posteriormente, el 15 de septiembre del mismo año, se obtiene la validez oficial de estudios por parte del IPN: Acuerdo A-RVOE-DG-NP/35/99 Licenciatura en Turismo; Acuerdo A-RVOE-DG-NP/36/99 Licenciatura en Contador Público; Acuerdo A-RVOE-DG-NP/37/99 Licenciatura en Negocios Internacionales; Acuerdo A-RVOE-DG-NP/38/99 Maestría en Desarrollo Educativo; Acuerdo A-RVOE-DG-NP/39/99 Doctorado en Ciencias con Especialidad en Ciencias Sociales y Administrativas.</p>
          </div>
        </div>
        <div class="timeline-item">
          <div class="timeline-year">2002</div>
          <div class="timeline-dot"></div>
          <div class="timeline-card">
            <h3>RVOE SEP</h3>
            <p>El 15 de julio del 2002, se obtiene el Reconocimiento de Validez Oficial de Estudios Superiores por parte de la SEP (Acuerdo 2022128) para la Licenciatura en Turismo. El 4 de junio del mismo año, se obtiene la Clave de Incorporación por parte de la UNAM (Acuerdo 23/20 Clave 3125-25) para la Licenciatura en Psicología.</p>
          </div>
        </div>
        <div class="timeline-item">
          <div class="timeline-year">2003</div>
          <div class="timeline-dot"></div>
          <div class="timeline-card">
            <h3>Acreditación</h3>
            <p>El 27 de febrero del 2003, la FIMPES otorga el dictamen de acreditación “Lisa y Llana”. El 20 de agosto del mismo año, se obtiene el Reconocimiento de Validez Oficial de Estudios Superiores por parte de la SEP (Acuerdo 2003220) para la Maestría en Docencia.</p>
          </div>
        </div>
        <div class="timeline-item">
          <div class="timeline-year">2006</div>
          <div class="timeline-dot"></div>
          <div class="timeline-card">
            <h3>Edificio Inteligente</h3>
            <p>En 2006 se Inaugura el Edificio Inteligente ubicado en Mier y Pesado 210.</p>
          </div>
        </div>
        <div class="timeline-item">
          <div class="timeline-year">2018</div>
          <div class="timeline-dot"></div>
          <div class="timeline-card">
            <h3>Campus Fortaleza</h3>
            <p>En 2018 se Inaugura el Campus Fortaleza.</p>
          </div>
        </div>
        <div class="timeline-item">
          <div class="timeline-year">2024</div>
          <div class="timeline-dot"></div>
          <div class="timeline-card">
            <h3>70 Aniversario</h3>
            <p>Celebración del 70 Aniversario de la Unidad de Negocios ISEC. Se obtiene el Reconocimiento de Validez Oficial de Estudios Superiores por parte del IPN (Acuerdo A-RVOE-DG-NS/04-2024) para la Ingeniería en Inteligencia Artificial.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<script>
  const aboutSlides = Array.from(document.querySelectorAll('#about-slider .about-slide'));
  const aboutPrev = document.getElementById('about-prev');
  const aboutNext = document.getElementById('about-next');
  const aboutSlider = document.getElementById('about-slider');
  const aboutVideos = Array.from(document.querySelectorAll('#about-slider iframe[data-src-desktop]'));
  let aboutCurrent = 0;
  let aboutTimer = null;
  let aboutPaused = false;
  const aboutDurations = [46000, 6500, 6500, 6500, 6500];

  const showAboutSlide = (index) => {
    aboutSlides.forEach((slide, i) => {
      slide.classList.toggle('is-active', i === index);
    });
  };

  const setAboutVideoSource = () => {
    const isDesktop = window.matchMedia('(min-width: 1024px)').matches;
    aboutVideos.forEach((video) => {
      const targetSrc = isDesktop ? video.dataset.srcDesktop : video.dataset.srcMobile;
      if (targetSrc && video.src !== targetSrc) {
        video.src = targetSrc;
      }
    });
  };

  if (aboutSlides.length) {
    setAboutVideoSource();
    showAboutSlide(aboutCurrent);
    const scheduleAboutNext = () => {
      if (aboutTimer) {
        clearTimeout(aboutTimer);
      }
      if (aboutPaused) return;
      const duration = aboutDurations[aboutCurrent] || 6500;
      aboutTimer = setTimeout(() => {
        aboutCurrent = (aboutCurrent + 1) % aboutSlides.length;
        showAboutSlide(aboutCurrent);
        scheduleAboutNext();
      }, duration);
    };
    scheduleAboutNext();
    if (aboutPrev) {
      aboutPrev.addEventListener('click', () => {
        aboutCurrent = (aboutCurrent - 1 + aboutSlides.length) % aboutSlides.length;
        showAboutSlide(aboutCurrent);
        scheduleAboutNext();
      });
    }
    if (aboutNext) {
      aboutNext.addEventListener('click', () => {
        aboutCurrent = (aboutCurrent + 1) % aboutSlides.length;
        showAboutSlide(aboutCurrent);
        scheduleAboutNext();
      });
    }
    if (aboutSlider) {
      aboutSlider.addEventListener('mouseenter', () => {
        aboutPaused = true;
        if (aboutTimer) {
          clearTimeout(aboutTimer);
        }
      });
      aboutSlider.addEventListener('mouseleave', () => {
        aboutPaused = false;
        scheduleAboutNext();
      });
    }
    window.addEventListener('resize', setAboutVideoSource);
  }
</script>
<?php require __DIR__ . '/partials/footer.php'; ?>
