<?php
$title = 'Licenciatura en Derecho SUA | UNEG';
$active = 'oferta';
$bodyClass = 'bg-slate-50 page-gray';
require __DIR__ . '/../partials/header.php';
?>

<div class="-mx-6 bg-slate-50">
<main class="max-w-7xl mx-auto px-4 py-10">
<section class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
    <img src="<?php echo $assetBase; ?>/_imgs/licenciaturas/derecho-sua/hero-sua-derecho.webp" alt="Contaduría Pública Estratégica" class="block w-full h-auto" loading="eager">
  <div class="bg-[#0b2c65] text-white">
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 px-5 py-4 text-sm">
      <div class="flex items-center gap-3">
        <span class="inline-flex h-9 w-9 items-center justify-center rounded-full bg-white/15">
          <i class="text-lg" data-lucide="school"></i>
        </span>
        <div>
          <p class="font-semibold">Modalidad Presencial</p>
          <p class="text-white/70 text-xs">Licenciaturas</p>
        </div>
      </div>
      <div class="flex items-center gap-3">
        <span class="inline-flex h-9 w-9 items-center justify-center rounded-full bg-white/15">
          <i class="text-lg" data-lucide="clock-3"></i>
        </span>
        <div>
          <p class="font-semibold">Horarios Flexibles</p>
          <p class="text-white/70 text-xs">Lunes a viernes</p>
        </div>
      </div>
      <div class="flex items-center gap-3">
        <span class="inline-flex h-9 w-9 items-center justify-center rounded-full bg-white/15">
          <i class="text-lg" data-lucide="medal"></i>
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
    <h1 class="text-2xl sm:text-3xl font-semibold text-[#0b2c65]">Conoce nuestra Licenciatura en Derecho SUA</h1>
    <p class="mt-2 text-slate-600">
      Prepárate en el análisis e interpretación del marco jurídico con un plan sabatino diseñado para tu desarrollo profesional.
    </p>
  </section>

  <section class="mt-10 grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
    <div class="text-center lg:text-left">
      <h2 class="text-2xl sm:text-3xl font-semibold text-[#0b2c65]">
        Adquiere bases sólidas en derecho civil, mercantil, laboral y fiscal para desempeñarte con visión legal integral.
      </h2>
    </div>
    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
      <h3 class="text-xl font-semibold text-[#0b2c65] text-center">Inscríbete Ahora</h3>
      <?php if (isset($_GET['error'])): ?>
        <div class="mt-4 rounded-lg border border-rose-200 bg-rose-50 px-4 py-3 text-sm text-rose-800">
          No se pudo enviar tu informacion. Revisa los campos e intentalo de nuevo.
        </div>
      <?php endif; ?>
      <form class="mt-6 grid grid-cols-1 sm:grid-cols-2 gap-4 text-sm" method="post" action="<?php echo $base; ?>/api/forms/licenciaturas-derecho-sua" autocomplete="on">
        <input class="w-full rounded-md border border-slate-300 px-3 py-2 sm:col-span-2 col-span-1" name="full_name" placeholder="Nombre completo*" type="text" required />
        <input class="w-full rounded-md border border-slate-300 px-3 py-2" name="email" placeholder="Correo Electrónico*" type="email" required />
        <input class="w-full rounded-md border border-slate-300 px-3 py-2" name="phone" placeholder="Teléfono*" type="tel" required />
        <input type="hidden" name="interest" value="Licenciatura en Derecho (SUA)" />
        <label class="col-span-1 sm:col-span-2 text-xs text-slate-500 flex items-center gap-2">
          <input type="checkbox" name="privacy" value="1" class="h-4 w-4" required />
          He leído y acepto el aviso de privacidad
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
      <div class="bg-gradient-to-r from-[#560000] via-[#560000] to-[#560000] text-white">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 px-6 py-8">
          <div class="text-left">
            <p class="text-sm uppercase tracking-[0.2em] text-white/80">Perfil de Ingreso/Egreso</p>
            <h3 class="mt-2 text-2xl sm:text-3xl font-semibold">¿Qué requiero?</h3>
            <button class="mt-3 inline-flex items-center gap-2 text-sm font-semibold text-white/90 hover:text-white">Conocer más <span aria-hidden="true">+</span></button>
          </div>
          <div class="text-center">
            <div class="mx-auto inline-flex h-12 w-12 items-center justify-center rounded-full bg-white/15">
              <i class="text-2xl" data-lucide="graduation-cap"></i>
            </div>
            <p class="mt-3 text-lg font-semibold">Plan de Estudios</p>
            <a href="<?php echo $assetBase; ?>/_assets/planes-de-estudio/UNEG-Plan-De-Estudios-Derecho-SUA.pdf" target="_blank" rel="noopener noreferrer" class="mt-1 inline-flex items-center gap-2 text-sm font-semibold text-white/90 underline-offset-4 transition hover:text-white hover:underline focus:outline-none focus-visible:ring-2 focus-visible:ring-white/80">Ver plan <i class="text-base" data-lucide="external-link" aria-hidden="true"></i></a>
          </div>
          <div class="text-center">
            <div class="mx-auto inline-flex h-12 w-12 items-center justify-center rounded-full bg-white/15">
              <i class="text-2xl" data-lucide="clock-3"></i>
            </div>
            <p class="mt-3 text-lg font-semibold">Horarios</p>
            <button class="mt-1 text-sm text-white/80 hover:text-white">Ver horarios</button>
          </div>
          <div class="text-center">
            <div class="mx-auto inline-flex h-12 w-12 items-center justify-center rounded-full bg-white/15">
              <i class="text-2xl" data-lucide="mail"></i>
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
              <i class="text-xl" data-lucide="folder"></i>
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
              <i class="text-xl" data-lucide="check-circle"></i>
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
              <i class="text-xl" data-lucide="graduation-cap"></i>
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
              <i class="text-xl" data-lucide="briefcase"></i>
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
    <h2 class="text-center text-2xl sm:text-3xl font-semibold text-[#0b2c65]">Plan de Estudios Licenciatura en Contaduría Pública Estratégica en Informática</h2>
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
          <li>Microeconomía</li>
          <li>Administración Contemporánea</li>
          <li>Redacción de Informes</li>
          <li>Informática para Negocios</li>
          <li>Contabilidad para Negocios</li>
          <li>Lengua Extranjera I (Inglés)</li>
        </ul>
        <ul class="sem-panel hidden list-disc list-inside space-y-2 text-slate-600" data-sem-panel="s2">
          <li>Probabilidad y Estadística</li>
          <li>Macroeconomía</li>
          <li>Derecho Civil</li>
          <li>Comunicación y Liderazgo</li>
          <li>Cultura General</li>
          <li>Contabilidad Administrativa</li>
          <li>Lengua Extranjera II (Inglés)</li>
        </ul>
        <ul class="sem-panel hidden list-disc list-inside space-y-2 text-slate-600" data-sem-panel="s3">
          <li>Matemáticas Financieras</li>
          <li>Derecho Mercantil y Societario</li>
          <li>Sistemas Contables I</li>
          <li>Contabilidad Intermedia I</li>
          <li>Contabilidad de Costos</li>
          <li>Derecho Fiscal</li>
          <li>Lengua Extranjera III (Inglés)</li>
        </ul>
        <ul class="sem-panel hidden list-disc list-inside space-y-2 text-slate-600" data-sem-panel="s4">
          <li>Derecho Laboral</li>
          <li>Sistemas Contables II</li>
          <li>Contabilidad Intermedia II</li>
          <li>Costos para la toma de Decisiones</li>
          <li>Comercio Exterior y Ley Aduanera</li>
          <li>Administración Financiera</li>
          <li>Lengua Extranjera IV (Inglés)</li>
        </ul>
        <ul class="sem-panel hidden list-disc list-inside space-y-2 text-slate-600" data-sem-panel="s5">
          <li>Ética y Valores en los Negocios</li>
          <li>Contabilidad Avanzada I</li>
          <li>Administración Estratégica de Costos</li>
          <li>Estudio de las Normas Internacionales de Auditoria</li>
          <li>Impuestos Personas Morales</li>
          <li>Finanzas Corporativas</li>
          <li>Lengua Extranjera V (Inglés)</li>
        </ul>
        <ul class="sem-panel hidden list-disc list-inside space-y-2 text-slate-600" data-sem-panel="s6">
          <li>Investigación de Operaciones</li>
          <li>Contabilidad Avanzada II</li>
          <li>Presupuestos</li>
          <li>Auditoria Administrativa y Control Interno</li>
          <li>Impuestos Personas Físicas</li>
          <li>Finanzas Bursátiles</li>
          <li>Lengua Extranjera VI (Inglés)</li>
        </ul>
        <ul class="sem-panel hidden list-disc list-inside space-y-2 text-slate-600" data-sem-panel="s7">
          <li>Informática Contable</li>
          <li>Contabilidad Internacional</li>
          <li>Auditoria Operacional</li>
          <li>Impuestos Indirectos</li>
          <li>Seguridad Social</li>
          <li>Proyectos Internacionales de Inversión</li>
          <li>Lengua Extranjera VII (Inglés)</li>
        </ul>
        <ul class="sem-panel hidden list-disc list-inside space-y-2 text-slate-600" data-sem-panel="s8">
          <li>Responsabilidad Social Corporativa</li>
          <li>Taller de Imagen Pública</li>
          <li>Análisis de la Información Financiera</li>
          <li>Gobierno Corporativo</li>
          <li>Impuestos Internacionales</li>
          <li>Finanzas Internacionales</li>
          <li>Lengua Extranjera VIII (Inglés)</li>
        </ul>
        <ul class="sem-panel hidden list-disc list-inside space-y-2 text-slate-600" data-sem-panel="s9">
          <li>Desarrollo Sustentable</li>
          <li>Emprendimiento Empresarial</li>
          <li>Contabilidad Gubernamental</li>
          <li>Dictamen Fiscal</li>
          <li>Estrategias Fiscales</li>
          <li>Riesgos</li>
          <li>Lengua Extranjera IX (Inglés)</li>
        </ul>
      </div>
    </div>
  </section>

  <section class="mt-12">
    <div class="max-w-3xl mx-auto">
      <h2 class="text-center text-2xl sm:text-3xl font-semibold text-[#0b2c65]">Preguntas frecuentes</h2>
      <div class="mt-6 space-y-3">
        <details class="rounded-lg border border-slate-200 bg-white px-4 py-3">
          <summary class="font-semibold cursor-pointer">¿Por qué estudiar la licenciatura en Derecho Sabatino (SUA) en ISEC?</summary>
          <p class="mt-2 text-slate-600 text-sm">
            En la Universidad de Negocios ISEC puedes llevar a cabo tus demás actividades mientras te profesionalizas en el sistema abierto para convertirte en un agente de cambio de la realidad social y el funcionamiento de las instituciones. El profesional en Derecho tiene la facultad de analizar, reformar o utilizar las leyes en favor de la ciudadanía y que de este modo se logre la justicia día con día.
          </p>
        </details>

        <details class="rounded-lg border border-slate-200 bg-white px-4 py-3">
          <summary class="font-semibold cursor-pointer">¿En qué consiste la carrera de Derecho?</summary>
          <p class="mt-2 text-slate-600 text-sm">
            La licenciatura de Derecho es un grado académico a través del cual se prepara a los estudiantes para que puedan comprender, interpretar y aplicar las leyes y normativas jurídicas mediante diversas metodologías con el objetivo de contribuir a la transformación de la sociedad.
          </p>
          <p class="mt-2 text-slate-600 text-sm">
            Los alumnos van desarrollando habilidades relacionadas con el análisis crítico, argumentación y la resolución de problemáticas legales, procurando la ética profesional y responsabilidad social.
          </p>
        </details>

        <details class="rounded-lg border border-slate-200 bg-white px-4 py-3">
          <summary class="font-semibold cursor-pointer">Ramas de la carrera de Derecho</summary>
          <p class="mt-2 text-slate-600 text-sm">
            Las ramas del Derecho abarcan distintos sectores relevantes que se desligan de dos pilares, el Derecho público y el Derecho privado.
          </p>
          <ul class="mt-2 space-y-1 text-sm text-slate-600">
            <li>Derecho administrativo.</li>
            <li>Derecho constitucional.</li>
            <li>Derecho internacional público.</li>
            <li>Derecho penal.</li>
            <li>Derecho fiscal o tributario.</li>
            <li>Derecho laboral.</li>
            <li>Derecho procesal.</li>
            <li>Derecho ambiental.</li>
            <li>Derecho civil.</li>
            <li>Derecho mercantil o comercial.</li>
            <li>Derecho internacional privado.</li>
            <li>Derecho fiscal.</li>
          </ul>
        </details>

        <details class="rounded-lg border border-slate-200 bg-white px-4 py-3">
          <summary class="font-semibold cursor-pointer">¿Para qué sirve la carrera de Derecho?</summary>
          <p class="mt-2 text-slate-600 text-sm">
            La carrera de Derecho sirve para formar profesionales que estén capacitados para aplicar las leyes en diversos contextos sociales a nivel nacional e internacional, de este modo se puede garantizar justicia y orden en la sociedad dependiendo del rol profesional que desempeñen al momento de ejercer, ya sea como jueces, fiscales, asesores, abogados y más.
          </p>
        </details>

        <details class="rounded-lg border border-slate-200 bg-white px-4 py-3">
          <summary class="font-semibold cursor-pointer">¿Cuánto dura la carrera de Derecho?</summary>
          <p class="mt-2 text-slate-600 text-sm">
            La carrera de Derecho Sistema Abierto en la Universidad de Negocios ISEC, tiene una duración de 10 semestres en los que cada uno está constituido por seis materias.
          </p>
          <p class="mt-2 text-slate-600 text-sm">
            Las clases se imparten cada sábado de 7:00 am hasta las 15:00 horas, asimismo, durante el tiempo de duración de la licenciatura, el estudiante podrá llevar un equilibrio entre la vida académica y sus demás actividades, recibiendo la misma calidad educativa que en el sistema escolarizado.
          </p>
        </details>

        <details class="rounded-lg border border-slate-200 bg-white px-4 py-3">
          <summary class="font-semibold cursor-pointer">¿Qué hace un licenciado en Derecho?</summary>
          <p class="mt-2 text-slate-600 text-sm">
            El licenciado en Derecho, egresado de la Universidad de Negocios ISEC, está facultado para defender los derechos de los individuos y organizaciones, además, contribuye al desarrollo de las políticas públicas, la mediación de conflictos y la promoción de la justicia social.
          </p>
          <p class="mt-2 text-slate-600 text-sm">
            En la licenciatura, el egresado habrá aprendido a implementar el análisis crítico, argumentación y resolución de problemas que son esenciales para la práctica legal y la reformación del marco jurídico para volverlo más sólido y justo.
          </p>
        </details>

        <details class="rounded-lg border border-slate-200 bg-white px-4 py-3">
          <summary class="font-semibold cursor-pointer">¿Cuánto gana un licenciado en Derecho?</summary>
          <p class="mt-2 text-slate-600 text-sm">
            De acuerdo con el portal oficial de México, el promedio salarial de un egresado de Derecho que ejerce, es de $10 K MX.
          </p>
        </details>

        <details class="rounded-lg border border-slate-200 bg-white px-4 py-3">
          <summary class="font-semibold cursor-pointer">¿Por qué estudiar una licenciatura en modalidad sabatina?</summary>
          <p class="mt-2 text-slate-600 text-sm">
            La licenciatura en Derecho, modalidad sabatina, permite que aquellos estudiantes que ya tienen actividades laborales, que ya formaron una familia o que simplemente gustan más de este sistema porque son autodidactas, puedan profesionalizarse y aumentar sus oportunidades como egresados.
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
