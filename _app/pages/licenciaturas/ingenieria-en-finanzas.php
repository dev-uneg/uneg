<?php
$title = 'Ingeniería en Finanzas | UNEG';
$active = 'oferta';
$bodyClass = 'bg-slate-50 page-gray';
require __DIR__ . '/../partials/header.php';
?>

<div class="-mx-6 bg-slate-50">
<main class="max-w-7xl mx-auto px-4 py-10">
<section class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
    <img src="<?php echo $assetBase; ?>/_imgs/licenciaturas/ingenieria-en-finanzas/hero-ingenieria-finanzas.webp" alt="Ingeniería en Finanzas" class="block w-full h-auto" loading="eager">
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
    <h1 class="text-2xl sm:text-3xl font-semibold text-[#0b2c65]">¿Licenciatura en Finanzas? Conoce nuestra Licenciatura en Ingeniería en Finanzas</h1>
    <p class="mt-2 text-slate-600">
      Si te interesa estudiar una Licenciatura en Finanzas, el plan de estudios de nuestra Licenciatura en Ingeniería en Finanzas es para ti. ¡Inscríbete hoy mismo!
    </p>
  </section>

  <section class="mt-10 grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
    <div class="text-center lg:text-left">
      <h2 class="text-2xl sm:text-3xl font-semibold text-[#0b2c65]">
        Preparación de líderes capaces de identificar y desarrollar sólidas estrategias que permitan instrumentar proyectos de expansión y crecimiento del sector público y privado haciendo uso eficiente de los recursos financieros disponibles.
      </h2>
    </div>
    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
      <h3 class="text-xl font-semibold text-[#0b2c65] text-center">Inscríbete Ahora</h3>
      <?php if (isset($_GET['error'])): ?>
        <div class="mt-4 rounded-lg border border-rose-200 bg-rose-50 px-4 py-3 text-sm text-rose-800">
          No se pudo enviar tu informacion. Revisa los campos e intentalo de nuevo.
        </div>
      <?php endif; ?>
      <form class="mt-6 grid grid-cols-1 sm:grid-cols-2 gap-4 text-sm" method="post" action="<?php echo $base; ?>/api/forms/licenciaturas-ingenieria-en-finanzas" autocomplete="on">
        <input class="w-full rounded-md border border-slate-300 px-3 py-2 sm:col-span-2 col-span-1" name="full_name" placeholder="Nombre completo*" type="text" required />
        <input class="w-full rounded-md border border-slate-300 px-3 py-2" name="email" placeholder="Correo Electrónico*" type="email" required />
        <input class="w-full rounded-md border border-slate-300 px-3 py-2" name="phone" placeholder="Teléfono*" type="tel" required />
        <input type="hidden" name="interest" value="Licenciatura en Ingeniería en Finanzas" />
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
      <div class="bg-gradient-to-r from-[#E35D49] via-[#E35D49] to-[#E35D49] text-white">
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
            <a href="<?php echo $assetBase; ?>/_assets/planes-de-estudio/UNEG-Plan-De-Estudios-Finanzas.pdf" target="_blank" rel="noopener noreferrer" class="mt-1 inline-flex items-center gap-2 text-sm font-semibold text-white/90 underline-offset-4 transition hover:text-white hover:underline focus:outline-none focus-visible:ring-2 focus-visible:ring-white/80">Ver plan <i class="ri-external-link-line text-base" aria-hidden="true"></i></a>
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
              <li>Interés en invertir eficazmente e incrementar la economía empresarial.</li>
              <li>Interés en desarrollar habilidades para planear, desarrollar y dirigir estrategias que hagan crecer empresas o instituciones.</li>
              <li>Capacidad de aprovechar al máximo todos los recursos y el tener sólido control sobre los aspectos financieros y administrativos.</li>
            </ul>
          </div>

          <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm">
            <div class="h-10 w-10 rounded-full bg-slate-100 flex items-center justify-center text-[#0b2c65]">
              <i class="ri-graduation-cap-line text-xl"></i>
            </div>
            <h4 class="mt-3 font-semibold">Perfil de egreso</h4>
            <p class="mt-2 text-sm text-slate-600">Al egresar de esta Licenciatura tendrás habilidades para:</p>
            <ul class="mt-3 space-y-2 text-sm text-[#0b2c65]">
              <li>Cambiar la visión proyectiva de negocios.</li>
              <li>Realizar nuevos modelos de desarrollo empresarial.</li>
              <li>Manejar escenarios de contingencia y volatilidad.</li>
              <li>Comprender la analítica del entorno.</li>
              <li>Desarrollar habilidades para la toma de decisiones.</li>
            </ul>
          </div>

          <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm">
            <div class="h-10 w-10 rounded-full bg-slate-100 flex items-center justify-center text-[#0b2c65]">
              <i class="ri-briefcase-4-line text-xl"></i>
            </div>
            <h4 class="mt-3 font-semibold">Campo de Trabajo</h4>
            <p class="mt-2 text-sm text-slate-600">Profesionalmente te desarrollarás en:</p>
            <ul class="mt-3 space-y-2 text-sm text-[#0b2c65]">
              <li>Contador General.</li>
              <li>Director de Finanzas.</li>
              <li>Tesorero.</li>
              <li>Gerente de Impuestos.</li>
              <li>Director de Presupuestos.</li>
              <li>Entre otros.</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="mt-12">
    <h2 class="text-center text-2xl sm:text-3xl font-semibold text-[#0b2c65]">Plan de Estudios Licenciatura en Ingeniería en Finanzas</h2>
    <div class="mt-6 grid grid-cols-1 md:grid-cols-3 gap-6">
      <div class="rounded-xl border border-slate-200 bg-white p-4">
        <div class="grid grid-cols-2 md:grid-cols-1 gap-2 text-sm">
          <button class="sem-btn rounded-md border border-slate-200 px-3 py-2 text-left font-semibold text-[#0b2c65]" data-sem="s1">Primer Cuatrimestre</button>
          <button class="sem-btn rounded-md border border-slate-200 px-3 py-2 text-left" data-sem="s2">Segundo Cuatrimestre</button>
          <button class="sem-btn rounded-md border border-slate-200 px-3 py-2 text-left" data-sem="s3">Tercer Cuatrimestre</button>
          <button class="sem-btn rounded-md border border-slate-200 px-3 py-2 text-left" data-sem="s4">Cuarto Cuatrimestre</button>
          <button class="sem-btn rounded-md border border-slate-200 px-3 py-2 text-left" data-sem="s5">Quinto Cuatrimestre</button>
          <button class="sem-btn rounded-md border border-slate-200 px-3 py-2 text-left" data-sem="s6">Sexto Cuatrimestre</button>
          <button class="sem-btn rounded-md border border-slate-200 px-3 py-2 text-left" data-sem="s7">Séptimo Cuatrimestre</button>
          <button class="sem-btn rounded-md border border-slate-200 px-3 py-2 text-left" data-sem="s8">Octavo Cuatrimestre</button>
          <button class="sem-btn rounded-md border border-slate-200 px-3 py-2 text-left" data-sem="s9">Noveno Cuatrimestre</button>
        </div>
      </div>
      <div class="md:col-span-2 rounded-xl border border-slate-200 bg-white p-6">
        <ul class="sem-panel list-disc list-inside space-y-2 text-slate-600" data-sem-panel="s1">
          <li>Razonamiento Matemático para Negocios</li>
          <li>Administración Contemporánea</li>
          <li>Derecho Mercantil y Societario</li>
          <li>Informática para Negocios</li>
          <li>Contabilidad para Negocios</li>
          <li>Microeconomía</li>
          <li>Lengua Extranjera I (Inglés)</li>
        </ul>
        <ul class="sem-panel hidden list-disc list-inside space-y-2 text-slate-600" data-sem-panel="s2">
          <li>Matemáticas Financieras</li>
          <li>Algoritmos y Programación</li>
          <li>Comunicación y Liderazgo</li>
          <li>Ética y Valores en los Negocios</li>
          <li>Cultura General</li>
          <li>Macroeconomía</li>
          <li>Lengua Extranjera II (Inglés)</li>
        </ul>
        <ul class="sem-panel hidden list-disc list-inside space-y-2 text-slate-600" data-sem-panel="s3">
          <li>Contabilidad de Costos</li>
          <li>Legislación Laboral</li>
          <li>Planeación Financiera para Mercadotecnia</li>
          <li>Planeación Estratégica</li>
          <li>Administración de Operaciones</li>
          <li>Finanzas</li>
          <li>Lengua Extranjera III (Inglés)</li>
        </ul>
        <ul class="sem-panel hidden list-disc list-inside space-y-2 text-slate-600" data-sem-panel="s4">
          <li>Probabilidad y Estadística Aplicada a los Negocios</li>
          <li>Simulador de Negocios</li>
          <li>Derecho Corporativo</li>
          <li>Tecnologías y Soluciones para Negocios</li>
          <li>Economía Internacional</li>
          <li>Instituciones Financieras</li>
          <li>Lengua Extranjera IV (Inglés)</li>
        </ul>
        <ul class="sem-panel hidden list-disc list-inside space-y-2 text-slate-600" data-sem-panel="s5">
          <li>Cálculo Diferencial e Integral</li>
          <li>Derecho Fiscal</li>
          <li>Finanzas Corporativas</li>
          <li>Finanzas Públicas</li>
          <li>Contabilidad Internacional</li>
          <li>Evaluación de Estados Financieros</li>
          <li>Lengua Extranjera V (Inglés)</li>
        </ul>
        <ul class="sem-panel hidden list-disc list-inside space-y-2 text-slate-600" data-sem-panel="s6">
          <li>Análisis Numérico Multivariado</li>
          <li>Conocimiento y Desarrollo de Franquicias</li>
          <li>Finanzas Internacionales</li>
          <li>Mercado de Dinero</li>
          <li>Bursatilidad</li>
          <li>Econometría</li>
          <li>Lengua Extranjera VI (Inglés)</li>
        </ul>
        <ul class="sem-panel hidden list-disc list-inside space-y-2 text-slate-600" data-sem-panel="s7">
          <li>Administración de Portafolios de Inversión</li>
          <li>Mercado de Derivados</li>
          <li>Planeación Fiscal</li>
          <li>Auditoría Administrativa y Financiera</li>
          <li>Proyectos de Inversión</li>
          <li>Fluctuaciones Financieras</li>
          <li>Lengua Extranjera VII (Inglés)</li>
        </ul>
        <ul class="sem-panel hidden list-disc list-inside space-y-2 text-slate-600" data-sem-panel="s8">
          <li>Minería de Datos y Analítica</li>
          <li>Responsabilidad Social Corporativa</li>
          <li>Automatización de Procesos Financieros</li>
          <li>Análisis de Rentabilidad Empresarial</li>
          <li>Evaluación de Proyectos de Inversión</li>
          <li>Prevención de delitos financieros</li>
          <li>Lengua Extranjera VIII (Inglés)</li>
        </ul>
        <ul class="sem-panel hidden list-disc list-inside space-y-2 text-slate-600" data-sem-panel="s9">
          <li>Emprendimiento Empresarial</li>
          <li>Banca y Finanzas</li>
          <li>Seminario de Finanzas</li>
          <li>Competencias y Certificaciones</li>
          <li>Ingeniería Financiera</li>
          <li>Planeación y Control Financiero</li>
          <li>Lengua Extranjera IX (Inglés)</li>
        </ul>
      </div>
    </div>
  </section>

  <section class="mt-12">
    <div class="relative w-full overflow-hidden rounded-2xl border border-slate-200 bg-slate-100 shadow-sm">
      <div class="aspect-video w-full">
        <iframe
          class="h-full w-full"
          src="https://www.youtube.com/embed/knP7-_2hoBg"
          title="Ingeniería en Finanzas"
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
          <summary class="font-semibold cursor-pointer">¿En qué consiste la carrera de finanzas?</summary>
          <p class="mt-2 text-slate-600 text-sm">
            La carrera de Ingeniería en Finanzas de Universidad ISEC está dividida en 9 cuatrimestres a través de los cuales el alumno recibe diversos enfoques, además de asignaturas que lo dotan de mayor competitividad, para comprender cómo funciona la economía en distintos niveles regionales, es por ello que se llevan asignaturas distintos tipos, enfocadas en las ciencias económicas.
          </p>
          <p class="mt-2 text-slate-600 text-sm">
            Además, el alumno recibirá clases de lengua extranjera desde el primer cuatrimestre y a lo largo de toda la licenciatura. Conoce el plan de estudios de la carrera de Finanzas y conoce todo lo mencionado, con más detalle.
          </p>
        </details>

        <details class="rounded-lg border border-slate-200 bg-white px-4 py-3">
          <summary class="font-semibold cursor-pointer">¿Para qué sirve la carrera de finanzas?</summary>
          <p class="mt-2 text-slate-600 text-sm">
            Gracias al aprendizaje de las tecnologías de vanguardia, se puede llevar a cabo la óptima gestión de los productos y servicios financieros, cumpliendo con los estándares éticos a nivel nacional e internacional.
          </p>
          <p class="mt-2 text-slate-600 text-sm">
            Quien ejerce la licenciatura de finanzas, tiene la capacidad de administrar los riesgos de inversión, de administrar el financiamiento y la operación, dependiendo de los diversos escenarios económicos y la normatividad vigente del territorio o medio en el que se lleva a cabo.
          </p>
        </details>

        <details class="rounded-lg border border-slate-200 bg-white px-4 py-3">
          <summary class="font-semibold cursor-pointer">¿Cuánto dura la carrera de finanzas?</summary>
          <p class="mt-2 text-slate-600 text-sm">
            La carrera de Ingeniería en Finanzas tiene una duración de 9 cuatrimestres. En cada cuatrimestre se imparten 7 asignaturas de ciencias y ciencias sociales para fortalecer el enfoque del alumnado. Asimismo, entre las materias del cuatrimestre se encuentra la asignatura de lengua extranjera, con el objetivo de darle mayor amplitud de conocimiento al alumno, y también aumentar sus oportunidades.
          </p>
          <p class="mt-2 text-slate-600 text-sm">
            En la Universidad de Negocios ISEC, hay dos horarios, el matutino, que abarca desde las 7:00 am a las 13:00 horas y el vespertino, que abarca desde las 18:00 a las 22:00 horas.
          </p>
        </details>

        <details class="rounded-lg border border-slate-200 bg-white px-4 py-3">
          <summary class="font-semibold cursor-pointer">Especialidades en finanzas</summary>
          <p class="mt-2 text-slate-600 text-sm">
            Los distintos tipos de especialidades en finanzas que existen, son las siguientes:
          </p>
          <ul class="mt-2 space-y-1 text-sm text-slate-600">
            <li>Finanzas públicas.</li>
            <li>Finanzas corporativas.</li>
            <li>Mercado financiero.</li>
            <li>Contabilidad.</li>
            <li>Inteligencia de negocios y emprendimiento.</li>
            <li>Banca y finanzas.</li>
          </ul>
          <p class="mt-2 text-slate-600 text-sm">
            Si eres egresado de la Universidad de Negocios ISEC o te graduaste en alguna otra universidad, UNEG también pone a tu disposición los posgrados para poder especializarse en finanzas. Una de las opciones disponibles es la Maestría en Finanzas, de la cual puedes revisar el plan de estudios. Asimismo, está a disposición el plan de estudios de la Maestría en Fiscal. Ambas especialidades tienen una duración de cuatro cuatrimestres y se imparten los sábados de 7:00 am hasta las 13:00 horas.
          </p>
        </details>

        <details class="rounded-lg border border-slate-200 bg-white px-4 py-3">
          <summary class="font-semibold cursor-pointer">¿Qué hace un licenciado en finanzas?</summary>
          <p class="mt-2 text-slate-600 text-sm">
            Como egresado de la licenciatura en Ingeniería en Finanzas, podrás tomar decisiones razonadas desde tu perspectiva profesional, sobre financiamiento, inversión y administración de riesgos en áreas como fondos de inversión, seguros, bolsa de valores, inversión y más áreas que tienen presencia, en el ámbito privado o público, como la Secretaría de Hacienda y Crédito Público, el Banco de México, etcétera.
          </p>
          <p class="mt-2 text-slate-600 text-sm">
            Si quieres saber más acerca de ISEC, ingresa al sitio web y entérate de la gran oferta educativa y los planes de estudio disponibles para ti.
          </p>
        </details>

        <details class="rounded-lg border border-slate-200 bg-white px-4 py-3">
          <summary class="font-semibold cursor-pointer">¿Cuánto gana un licenciado en finanzas?</summary>
          <p class="mt-2 text-slate-600 text-sm">
            Un licenciado en finanzas puede ocupar distintas posiciones en el sector público y privado; sin embargo, la percepción salarial depende de su puesto en la jerarquía de la entidad en la que labore y la entidad misma en la que preste sus servicios.
          </p>
          <p class="mt-2 text-slate-600 text-sm">
            El promedio salarial de un licenciado en finanzas es de $9.05K, de acuerdo con la Secretaría de Gobernación. Por otro lado, los Asesores y Analistas en Finanzas son los que mostraron ingresos más cuantiosos, siendo $59.4K el promedio.
          </p>
        </details>

        <details class="rounded-lg border border-slate-200 bg-white px-4 py-3">
          <summary class="font-semibold cursor-pointer">¡Estás a un CLIC para el gran paso!</summary>
          <p class="mt-2 text-slate-600 text-sm">¡Estás a un CLIC para el gran paso!</p>
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
