<?php
$title = 'Licenciatura en Pedagogía | UNEG';
$active = 'oferta';
$bodyClass = 'bg-slate-50 page-gray';
require __DIR__ . '/../partials/header.php';
?>

<div class="-mx-6 bg-slate-50">
<main class="max-w-7xl mx-auto px-4 py-10">
<section class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
    <img src="<?php echo $assetBase; ?>/imgs/licenciaturas/pedagogia/hero-pedagogia.png" alt="Pedagogía" class="block w-full h-auto" loading="eager">
  <div class="bg-[#0b2c65] text-white">
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 px-5 py-4 text-sm">
      <div class="flex items-center gap-3">
        <span class="inline-flex h-9 w-9 items-center justify-center rounded-full bg-white/15">
          <i class="ri-school-line text-lg"></i>
        </span>
        <div>
          <p class="font-semibold">Modalidad Presencial</p>
          <p class="text-white/70 text-xs">Licenciaturas</p>
        </div>
      </div>
      <div class="flex items-center gap-3">
        <span class="inline-flex h-9 w-9 items-center justify-center rounded-full bg-white/15">
          <i class="ri-time-line text-lg"></i>
        </span>
        <div>
          <p class="font-semibold">Horarios Flexibles</p>
          <p class="text-white/70 text-xs">Lunes a viernes</p>
        </div>
      </div>
      <div class="flex items-center gap-3">
        <span class="inline-flex h-9 w-9 items-center justify-center rounded-full bg-white/15">
          <i class="ri-medal-line text-lg"></i>
        </span>
        <div>
          <p class="font-semibold">Validez Oficial</p>
          <p class="text-white/70 text-xs">RVOE / UNAM</p>
        </div>
      </div>
    </div>
  </div>
</section>

  <section class="mt-10 text-center">
    <h1 class="text-2xl sm:text-3xl font-semibold text-[#0b2c65]">Licenciatura en Pedagogía | Formación de Líderes Educativos</h1>
  </section>

  <section class="mt-10 grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
    <div class="text-center lg:text-left">
      <h2 class="text-2xl sm:text-3xl font-semibold text-[#0b2c65]">
        Estudios orientados a la creación y aplicación de estrategias encaminadas a solucionar las dificultades educativas del país a través de un enfoque teórico-metodológico apoyado de las tecnologías de la información.
      </h2>
    </div>
    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
      <h3 class="text-xl font-semibold text-[#0b2c65] text-center">Inscríbete Ahora</h3>
      <form class="mt-6 grid grid-cols-1 sm:grid-cols-2 gap-4 text-sm" method="post" action="<?php echo $base; ?>/api/contacto" autocomplete="on">
        <input class="w-full rounded-md border border-slate-300 px-3 py-2 sm:col-span-2 col-span-1" name="full_name" placeholder="Nombre completo*" type="text" required />
        <input class="w-full rounded-md border border-slate-300 px-3 py-2" name="email" placeholder="Correo Electrónico*" type="email" required />
        <input class="w-full rounded-md border border-slate-300 px-3 py-2" name="phone" placeholder="Teléfono*" type="tel" required />
        <input type="hidden" name="interest" value="Licenciatura en Pedagogía" />
        <label class="col-span-1 sm:col-span-2 text-xs text-slate-500 flex items-center gap-2">
          <input type="checkbox" name="privacy" value="1" class="h-4 w-4" required />
          He leído y acepto el <span class="font-semibold text-slate-700">Aviso de Privacidad</span>
        </label>
        <button class="col-span-1 sm:col-span-2 rounded-md bg-[#0b2c65] px-4 py-2 text-white font-semibold">Enviar</button>
      </form>
      <p class="mt-4 text-sm text-slate-600 text-center">
        Tus datos están seguros. Un asesor te contactará para resolver dudas y acompañarte en tu inscripción.
      </p>
    </div>
  </section>

  <section class="mt-10">
    <div class="overflow-hidden rounded-2xl shadow-sm">
      <div class="bg-gradient-to-r from-[#6CB001] via-[#6CB001] to-[#6CB001] text-white">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 px-6 py-8">
          <div class="text-left">
            <p class="text-sm uppercase tracking-[0.2em] text-white/80">Perfil de Ingreso/Egreso</p>
            <h3 class="mt-2 text-2xl sm:text-3xl font-semibold">¿Qué requiero?</h3>
            <button class="mt-3 inline-flex items-center gap-2 text-sm font-semibold text-white/90 hover:text-white">Conocer más <span aria-hidden="true">+</span></button>
          </div>
          <div class="text-center">
            <div class="mx-auto inline-flex h-12 w-12 items-center justify-center rounded-full bg-white/15">
              <i class="ri-graduation-cap-line text-2xl"></i>
            </div>
            <p class="mt-3 text-lg font-semibold">Plan de Estudios</p>
            <button class="mt-1 text-sm text-white/80 hover:text-white">Ver plan</button>
          </div>
          <div class="text-center">
            <div class="mx-auto inline-flex h-12 w-12 items-center justify-center rounded-full bg-white/15">
              <i class="ri-time-line text-2xl"></i>
            </div>
            <p class="mt-3 text-lg font-semibold">Horarios</p>
            <button class="mt-1 text-sm text-white/80 hover:text-white">Ver horarios</button>
          </div>
          <div class="text-center">
            <div class="mx-auto inline-flex h-12 w-12 items-center justify-center rounded-full bg-white/15">
              <i class="ri-mail-line text-2xl"></i>
            </div>
            <p class="mt-3 text-lg font-semibold">Inscríbete Ahora</p>
            <button class="mt-1 text-sm text-white/80 hover:text-white">Contactar</button>
          </div>
        </div>
      </div>
      <div class="bg-[#f1f5f9] px-6 py-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
          <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm">
            <div class="h-10 w-10 rounded-full bg-slate-100 flex items-center justify-center text-[#0b2c65]">
              <i class="ri-folder-2-line text-xl"></i>
            </div>
            <h4 class="mt-3 font-semibold">Requisitos</h4>
            <p class="mt-2 text-sm text-slate-600">Para cursar esta licenciatura deberás contar con los siguientes documentos:</p>
            <ul class="mt-3 space-y-2 text-sm text-[#0b2c65]">
              <li>Acta de nacimiento (Original y 2 copias).</li>
              <li>Certificado de Secundaria (Original y 2 copias).</li>
              <li>Certificado de Nivel Medio Superior (Original y 2 copias).</li>
              <li>2 fotografías blanco y negro papel mate.</li>
              <li>CURP (Original y 2 Copias).</li>
              <li>Comprobante de Domicilio.</li>
            </ul>
          </div>

          <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm">
            <div class="h-10 w-10 rounded-full bg-slate-100 flex items-center justify-center text-[#0b2c65]">
              <i class="ri-checkbox-circle-line text-xl"></i>
            </div>
            <h4 class="mt-3 font-semibold">Perfil de ingreso</h4>
            <p class="mt-2 text-sm text-slate-600">Como aspirante de esta licenciatura deberás cubrir el siguiente perfil:</p>
            <ul class="mt-3 space-y-2 text-sm text-[#0b2c65]">
              <li>Capacidad de entablar relaciones personales y grupales.</li>
              <li>Interés y vocación de servicio.</li>
              <li>Inclinación por problemáticas humanas relacionadas con el ámbito socio educativo.</li>
              <li>Apego por las áreas de docencia e investigación.</li>
              <li>Responsabilidad y compromiso social.</li>
            </ul>
          </div>

          <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm">
            <div class="h-10 w-10 rounded-full bg-slate-100 flex items-center justify-center text-[#0b2c65]">
              <i class="ri-graduation-cap-line text-xl"></i>
            </div>
            <h4 class="mt-3 font-semibold">Perfil de egreso</h4>
            <p class="mt-2 text-sm text-slate-600">Al egresar de esta Licenciatura, tendrás habilidades para:</p>
            <ul class="mt-3 space-y-2 text-sm text-[#0b2c65]">
              <li>Analizar aspectos sociales, culturales y políticos en el mundo de la educación.</li>
              <li>Correlacionar enfoques teórico-metodológicos para sustentar las bases de una teoría pedagógica, que resuelva problemas de esta área del conocimiento.</li>
              <li>Identificar e interpretar problemáticas educativas.</li>
              <li>Planear, diseñar, evaluar e implementar planes y programas de estudio en cualquier modalidad educativa.</li>
              <li>Usar críticamente las nuevas tecnologías en el desarrollo de programas educativos.</li>
            </ul>
          </div>

          <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm">
            <div class="h-10 w-10 rounded-full bg-slate-100 flex items-center justify-center text-[#0b2c65]">
              <i class="ri-briefcase-4-line text-xl"></i>
            </div>
            <h4 class="mt-3 font-semibold">Campo de Trabajo</h4>
            <p class="mt-2 text-sm text-slate-600">Profesionalmente te desarrollarás en:</p>
            <ul class="mt-3 space-y-2 text-sm text-[#0b2c65]">
              <li>Instituciones del sector público, particularmente: SEP, IMSS, DIF, y en general cualquier instancia de este sector en actividades propias de la carrera.</li>
              <li>Instituciones privadas como: Centros Escolares, Centros de Investigación y en general en las empresas que requieran de programas de capacitación y actualización de personal.</li>
              <li>Medios de comunicación, sobre todo en programas cuyo fin es educar.</li>
              <li>Investigación educativa.</li>
              <li>Cursos de capacitación.</li>
              <li>Museos.</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="mt-12">
    <h2 class="text-center text-2xl sm:text-3xl font-semibold text-[#0b2c65]">Plan de Estudios Licenciatura en Pedagogía</h2>
    <div class="mt-6 grid grid-cols-1 md:grid-cols-3 gap-6">
      <div class="rounded-xl border border-slate-200 bg-white p-4">
        <div class="grid grid-cols-2 md:grid-cols-1 gap-2 text-sm">
          <button class="sem-btn rounded-md border border-slate-200 px-3 py-2 text-left font-semibold text-[#0b2c65]" data-sem="s1">Primer Semestre</button>
          <button class="sem-btn rounded-md border border-slate-200 px-3 py-2 text-left" data-sem="s2">Segundo Semestre</button>
          <button class="sem-btn rounded-md border border-slate-200 px-3 py-2 text-left" data-sem="s3">Tercer Semestre</button>
          <button class="sem-btn rounded-md border border-slate-200 px-3 py-2 text-left" data-sem="s4">Cuarto Semestre</button>
          <button class="sem-btn rounded-md border border-slate-200 px-3 py-2 text-left" data-sem="s5">Quinto Semestre</button>
          <button class="sem-btn rounded-md border border-slate-200 px-3 py-2 text-left" data-sem="s6">Sexto Semestre</button>
          <button class="sem-btn rounded-md border border-slate-200 px-3 py-2 text-left" data-sem="s7">Séptimo Semestre</button>
          <button class="sem-btn rounded-md border border-slate-200 px-3 py-2 text-left" data-sem="s8">Octavo Semestre</button>
        </div>
      </div>
      <div class="md:col-span-2 rounded-xl border border-slate-200 bg-white p-6">
        <ul class="sem-panel list-disc list-inside space-y-2 text-slate-600" data-sem-panel="s1">
          <li>Filosofía de la Educación I</li>
          <li>Historia de la Educación y la Pedagogía I</li>
          <li>Investigación Pedagógica I</li>
          <li>Psicología y Educación I</li>
          <li>Sociología y Educación I</li>
          <li>Teoría Pedagógica I</li>
        </ul>
        <ul class="sem-panel hidden list-disc list-inside space-y-2 text-slate-600" data-sem-panel="s2">
          <li>Filosofía de la Educación II</li>
          <li>Historia de la Educación y la Pedagogía II</li>
          <li>Investigación Pedagógica II</li>
          <li>Psicología y Educación II</li>
          <li>Sociología y Educación II</li>
          <li>Teoría Pedagógica II</li>
        </ul>
        <ul class="sem-panel hidden list-disc list-inside space-y-2 text-slate-600" data-sem-panel="s3">
          <li>Didáctica I</li>
          <li>Economía y Educación</li>
          <li>Historia de la Educación y la Pedagogía III</li>
          <li>Investigación Pedagógica III</li>
          <li>Legislación y Política Educativas</li>
          <li>Psicología y Educación III</li>
        </ul>
        <ul class="sem-panel hidden list-disc list-inside space-y-2 text-slate-600" data-sem-panel="s4">
          <li>Comunicación y Educación</li>
          <li>Didáctica II</li>
          <li>Historia de la Educación y la Pedagogía IV</li>
          <li>Investigación Pedagógica IV</li>
          <li>Orientación Educativa</li>
          <li>Sistema Educativo Nacional</li>
        </ul>
        <ul class="sem-panel hidden list-disc list-inside space-y-2 text-slate-600" data-sem-panel="s5">
          <li>Diseño y Evaluación de Planes y Programas de Estudio</li>
          <li>Educación no Formal I</li>
          <li>Investigación Pedagógica V</li>
          <li>Organismos y Sistemas Internacionales de Educación</li>
          <li>Organización y Administración Educativas</li>
          <li>Problemas Contemporáneos de la Educación I</li>
        </ul>
        <ul class="sem-panel hidden list-disc list-inside space-y-2 text-slate-600" data-sem-panel="s6">
          <li>Educación no Formal II</li>
          <li>Investigación Pedagógica IV</li>
          <li>Planeación y Evaluación Educativas</li>
          <li>Tecnologías en la Educación</li>
          <li>Textos Clásicos III</li>
          <li>Problemas Contemporáneos de la Educación II</li>
        </ul>
        <ul class="sem-panel hidden list-disc list-inside space-y-2 text-slate-600" data-sem-panel="s7">
          <li>Identidad y Vinculación Profesional I</li>
          <li>Taller de Psicopedagogía I</li>
          <li>Seminario de Psicología y Educación I</li>
          <li>Seminario de Investigación Pedagógica I</li>
          <li>Seminario de Sociología y Educación I</li>
          <li>Seminario en Educación y América Latina I</li>
        </ul>
        <ul class="sem-panel hidden list-disc list-inside space-y-2 text-slate-600" data-sem-panel="s8">
          <li>Identidad y Vinculación Profesional II</li>
          <li>Taller de Psicopedagogía II</li>
          <li>Seminario de Psicología y Educación II</li>
          <li>Seminario de Investigación Pedagógica II</li>
          <li>Seminario de Sociología y Educación II</li>
          <li>Seminario en Educación y América Latina II</li>
        </ul>
      </div>
    </div>
  </section>

  <section class="mt-12">
    <div class="relative w-full overflow-hidden rounded-2xl border border-slate-200 bg-slate-100 shadow-sm">
      <div class="aspect-video w-full">
        <iframe
          class="h-full w-full"
          src="https://www.youtube.com/embed/IOeiSXvfbg4"
          title="Pedagogía"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          allowfullscreen
        ></iframe>
      </div>
    </div>
  </section>

  <section class="mt-12">
    <div class="max-w-3xl mx-auto">
      <h2 class="text-center text-2xl sm:text-3xl font-semibold text-[#0b2c65]">Preguntas frecuentes</h2>
      <div class="mt-6 space-y-3">
        <details class="rounded-lg border border-slate-200 bg-white px-4 py-3">
          <summary class="font-semibold cursor-pointer">¿En qué consiste la carrera de Pedagogía?</summary>
          <p class="mt-2 text-slate-600 text-sm">
            El estudiante de pedagogía de la Universidad de Negocios ISEC, estudia de forma integral la educación con el objetivo de describir, comprender, explicar, evaluar, idear estrategias e intervenir en el fortalecimiento y perfeccionamiento de los procesos educativos, analizando y proponiendo alternativas que procuren resolver problemáticas enmarcadas en el aspecto educativo, atendiendo a diversos sectores de la sociedad.
          </p>
        </details>

        <details class="rounded-lg border border-slate-200 bg-white px-4 py-3">
          <summary class="font-semibold cursor-pointer">¿Para qué sirve la carrera de Pedagogía?</summary>
          <p class="mt-2 text-slate-600 text-sm">
            La carrera de pedagogía es fundamental para la transmisión de conocimientos, visualización de problemáticas y creación de estrategias para el desarrollo humano y la resolución de problemas que requieren un nuevo enfoque en la educación u otros procesos organizacionales. Este aspecto genera que puedan desenvolverse en distintos ambientes laborales, tanto en el sector privado como en el público.
          </p>
        </details>

        <details class="rounded-lg border border-slate-200 bg-white px-4 py-3">
          <summary class="font-semibold cursor-pointer">¿Cuánto dura la carrera de Pedagogía?</summary>
          <p class="mt-2 text-slate-600 text-sm">
            La carrera de pedagogía tiene una duración de 8 semestres, a través de los cuales se imparten 7 materias en cada uno de los semestres. Asimismo, en el plan de estudios de la carrera de pedagogía, se contempla la enseñanza de la lengua extranjera, para aumentar las oportunidades del alumno al momento de insertarse en las actividades profesionales.
          </p>
          <p class="mt-2 text-slate-600 text-sm">
            En la Universidad de Negocios ISEC, hay dos horarios, el matutino, que abarca desde las 7:00 am a las 13:00 horas y el vespertino, que abarca desde las 18:00 a las 22:00 horas.
          </p>
        </details>

        <details class="rounded-lg border border-slate-200 bg-white px-4 py-3">
          <summary class="font-semibold cursor-pointer">Ramas de la Pedagogía</summary>
          <p class="mt-2 text-slate-600 text-sm">
            Existen diversas ramas de la pedagogía que tienen distintos enfoques para que puedan ajustarse a contextos específicos de necesidades educativas y del desarrollo social. Algunas de ellas son las siguientes:
          </p>
          <ul class="mt-2 space-y-1 text-sm text-slate-600">
            <li>Pedagogía descriptiva.</li>
            <li>Pedagogía normativa.</li>
            <li>Pedagogía infantil.</li>
            <li>Pedagogía musical.</li>
            <li>Pedagogía terapéutica.</li>
            <li>Pedagogía social.</li>
            <li>Pedagogía psicológica.</li>
          </ul>
          <p class="mt-2 text-slate-600 text-sm">
            Puedes elegir entre estas especialidades durante el proceso de la licenciatura, para ir reforzando el enfoque que le quieres dar en el futuro a tu vida profesional.
          </p>
        </details>

        <details class="rounded-lg border border-slate-200 bg-white px-4 py-3">
          <summary class="font-semibold cursor-pointer">¿Qué hace un licenciado en Pedagogía?</summary>
          <p class="mt-2 text-slate-600 text-sm">
            El egresado de pedagogía tiene la facultad de realizar actividades en el sector educativo a través de instituciones públicas o en entidades privadas. Puede desenvolverse profesionalmente en cuestiones de la enseñanza, desde el nivel preescolar, hasta el nivel superior.
          </p>
          <p class="mt-2 text-slate-600 text-sm">
            De igual manera, puede desempeñar posiciones clave en otro tipo de instituciones como asociaciones civiles, organismos gubernamentales, medios de comunicación, centros de investigación, empresas privadas, etcétera.
          </p>
          <p class="mt-2 text-slate-600 text-sm">
            Conoce más acerca de ISEC y adéntrate en todas las aptitudes que puedes desarrollar en esta universidad.
          </p>
        </details>

        <details class="rounded-lg border border-slate-200 bg-white px-4 py-3">
          <summary class="font-semibold cursor-pointer">¿Cuánto gana un licenciado en Pedagogía?</summary>
          <p class="mt-2 text-slate-600 text-sm">
            Los profesionales, auxiliares y/o técnicos de pedagogía en educación, tienen una percepción salarial que depende de la zona geográfica en la que ejerzan, dentro de la República Mexicana; sin embargo, el promedio entre todas estas zonas oscila en los $9,596 K. A su vez, los pedagogos también pueden trabajar por proyecto, generando ganancias de hasta $113,700 anuales.
          </p>
        </details>
      </div>
    </div>
  </section>
</main>
</div>

<script>
  const semButtons = document.querySelectorAll('.sem-btn');
  const semPanels = document.querySelectorAll('.sem-panel');

  const setSem = (sem) => {
    semButtons.forEach((btn) => {
      const active = btn.dataset.sem === sem;
      btn.classList.toggle('bg-[#0b2c65]', active);
      btn.classList.toggle('text-white', active);
      btn.classList.toggle('font-semibold', active);
    });
    semPanels.forEach((panel) => {
      panel.classList.toggle('hidden', panel.dataset.semPanel !== sem);
    });
  };

  semButtons.forEach((btn) => {
    btn.addEventListener('click', () => setSem(btn.dataset.sem));
  });

  setSem('s1');
</script>

<style>
  body.page-gray footer { margin-top: 0; }
</style>

<?php require __DIR__ . '/../partials/footer.php'; ?>
