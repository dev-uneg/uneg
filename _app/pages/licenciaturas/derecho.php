<?php
$title = 'Contaduría Pública Estratégica | UNEG';
$active = 'oferta';
$bodyClass = 'bg-slate-50 page-gray';
require __DIR__ . '/../partials/header.php';
?>

<div class="-mx-6 bg-slate-50">
<main class="max-w-7xl mx-auto px-4 py-10">
<section class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
    <img src="<?php echo $assetBase; ?>/_imgs/licenciaturas/derecho/hero-derecho.webp" alt="Contaduría Pública Estratégica" class="block w-full h-auto" loading="eager">
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
    <h1 class="text-2xl sm:text-3xl font-semibold text-[#0b2c65]">Licenciatura en Derecho: Educación profesional enfocada a negocios</h1>
    <p class="mt-2 text-slate-600">
      El plan de estudios de nuestra Licenciatura en Derecho es 100% especializado, para que logres desempeñarte de manera sobresaliente en el rubro. ¡Sé parte de la Facultad de Derecho de la Universidad de Negocios ISEC!
    </p>
  </section>

  <section class="mt-10 grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
    <div class="text-center lg:text-left">
      <h2 class="text-2xl sm:text-3xl font-semibold text-[#0b2c65]">
        Adquisición de conocimientos de la Ciencia Jurídica para fomentar el desarrollo a través de la práctica de los ordenamientos jurídicos en favor de la justicia y las leyes, dentro de las organizaciones del sector público y privado.
      </h2>
    </div>
    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
      <h3 class="text-xl font-semibold text-[#0b2c65] text-center">Inscríbete Ahora</h3>
      <?php if (isset($_GET['error'])): ?>
        <div class="mt-4 rounded-lg border border-rose-200 bg-rose-50 px-4 py-3 text-sm text-rose-800">
          No se pudo enviar tu informacion. Revisa los campos e intentalo de nuevo.
        </div>
      <?php endif; ?>
      <form class="mt-6 grid grid-cols-1 sm:grid-cols-2 gap-4 text-sm" method="post" action="<?php echo $base; ?>/api/forms/licenciaturas-derecho" autocomplete="on">
        <input class="w-full rounded-md border border-slate-300 px-3 py-2 sm:col-span-2 col-span-1" name="full_name" placeholder="Nombre completo*" type="text" required />
        <input class="w-full rounded-md border border-slate-300 px-3 py-2" name="email" placeholder="Correo Electrónico*" type="email" required />
        <input class="w-full rounded-md border border-slate-300 px-3 py-2" name="phone" placeholder="Teléfono*" type="tel" required />
        <input type="hidden" name="interest" value="Licenciatura en Derecho" />
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
      <div class="bg-gradient-to-r from-[#a11212] via-[#c81e1e] to-[#f87171] text-white">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 px-6 py-8">
          <div class="text-left">
            <p class="text-sm uppercase tracking-[0.2em] text-white">Perfil de Ingreso/Egreso</p>
            <h3 class="mt-2 text-2xl sm:text-3xl font-semibold">¿Qué requiero?</h3>
            <button class="mt-3 inline-flex items-center gap-2 text-sm font-semibold text-white/90 hover:text-white">Conocer más <span aria-hidden="true">+</span></button>
          </div>
          <div class="text-center">
            <div class="mx-auto inline-flex h-12 w-12 items-center justify-center rounded-full bg-white/15">
              <i class="ri-graduation-cap-line text-2xl"></i>
            </div>
            <p class="mt-3 text-lg font-semibold">Plan de Estudios</p>
            <a href="<?php echo $assetBase; ?>/_assets/planes-de-estudio/UNEG-Plan-De-Estudios-Derecho.pdf" target="_blank" rel="noopener noreferrer" class="mt-1 inline-flex items-center gap-2 text-sm font-semibold text-white/90 underline-offset-4 transition hover:text-white hover:underline focus:outline-none focus-visible:ring-2 focus-visible:ring-white/80">Ver plan <i class="ri-external-link-line text-base" aria-hidden="true"></i></a>
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
    <h2 class="text-center text-2xl sm:text-3xl font-semibold text-[#0b2c65]">Plan de Estudios Licenciatura en Derecho</h2>
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
          <li>Introducción al Estudio del Derecho</li>
          <li>Derecho Romano I</li>
          <li>Deontología Jurídica</li>
          <li>Informática para Negocios</li>
          <li>Teoría General del Estado</li>
          <li>Lengua Extranjera I (Inglés)</li>
        </ul>
        <ul class="sem-panel hidden list-disc list-inside space-y-2 text-slate-600" data-sem-panel="s2">
          <li>Acto Jurídico y Personas</li>
          <li>Derecho Romano II</li>
          <li>Comunicación y Liderazgo</li>
          <li>Cultura General</li>
          <li>Ética y Valores en los Negocios</li>
          <li>Teoría General del Proceso</li>
          <li>Lengua Extranjera II (Inglés)</li>
        </ul>
        <ul class="sem-panel hidden list-disc list-inside space-y-2 text-slate-600" data-sem-panel="s3">
          <li>Bienes y Derechos Reales</li>
          <li>Teoría Económica y Sociedades Mercantiles</li>
          <li>Derecho Constitucional</li>
          <li>Teoría de las Obligaciones</li>
          <li>Teoría Política</li>
          <li>Derecho Penal</li>
          <li>Lengua Extranjera III (Inglés)</li>
        </ul>
        <ul class="sem-panel hidden list-disc list-inside space-y-2 text-slate-600" data-sem-panel="s4">
          <li>Contratos Civiles</li>
          <li>Títulos de Crédito</li>
          <li>Derecho Procesal Penal</li>
          <li>Derecho Administrativo I</li>
          <li>Derecho Familiar</li>
          <li>Derechos Humanos y Garantías</li>
          <li>Lengua Extranjera IV (Inglés)</li>
        </ul>
        <ul class="sem-panel hidden list-disc list-inside space-y-2 text-slate-600" data-sem-panel="s5">
          <li>Derecho Procesal Civil</li>
          <li>Contratos Mercantiles</li>
          <li>Derecho Fiscal</li>
          <li>Derecho Administrativo II</li>
          <li>Derecho Individual y Colectivo de Trabajo</li>
          <li>Práctica Forense del Procedimiento Penal</li>
          <li>Lengua Extranjera V (Inglés)</li>
        </ul>
        <ul class="sem-panel hidden list-disc list-inside space-y-2 text-slate-600" data-sem-panel="s6">
          <li>Práctica Forense de Derecho Privado</li>
          <li>Derecho Procesal Mercantil</li>
          <li>Derecho Procesal Fiscal</li>
          <li>Juicio de Amparo</li>
          <li>Derecho de Trabajo</li>
          <li>Derecho a la Seguridad Social</li>
          <li>Lengua Extranjera VI (Inglés)</li>
        </ul>
        <ul class="sem-panel hidden list-disc list-inside space-y-2 text-slate-600" data-sem-panel="s7">
          <li>Derecho Sucesorio</li>
          <li>Régimen Jurídico de Comercio Exterior</li>
          <li>Derecho Notarial y Registral</li>
          <li>Práctica Forense de Amparo</li>
          <li>Derecho Internacional Público</li>
          <li>Práctica Forense en Materia de Juicios Orales I</li>
          <li>Lengua Extranjera VII (Inglés)</li>
        </ul>
        <ul class="sem-panel hidden list-disc list-inside space-y-2 text-slate-600" data-sem-panel="s8">
          <li>Derecho Bancario y Bursátil</li>
          <li>Derecho Agrario</li>
          <li>Derecho Ambiental</li>
          <li>Derecho Internacional Privado</li>
          <li>Práctica Forense en Materia de Juicios Orales II</li>
          <li>Responsabilidad Social Corporativa</li>
          <li>Lengua Extranjera VIII (Inglés)</li>
        </ul>
        <ul class="sem-panel hidden list-disc list-inside space-y-2 text-slate-600" data-sem-panel="s9">
          <li>Taller Sobre Imagen Pública</li>
          <li>Emprendimiento Empresarial</li>
          <li>Filosofía del Derecho</li>
          <li>Expresión Jurídica</li>
          <li>Argumentación Jurídica</li>
          <li>Aportación Jurídica Documental</li>
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
          src="https://www.youtube.com/embed/jsReMtqe7tc"
          title="Derecho"
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
          <summary class="font-semibold cursor-pointer">¿En qué consiste la carrera en Derecho?</summary>
          <p class="mt-2 text-slate-600 text-sm">
            La licenciatura en Derecho es un programa universitario que introduce a los estudiantes al estudio del sistema legal de su país, abordando aspectos como la teoría jurídica, la legislación, la jurisprudencia y la resolución de conflictos.
          </p>
          <p class="mt-2 text-slate-600 text-sm">Los estudiantes aprenden a:</p>
          <ul class="mt-2 space-y-1 text-sm text-slate-600">
            <li>Analizar casos.</li>
            <li>Argumentar de manera lógica.</li>
            <li>Aplicar el Derecho a situaciones concretas.</li>
          </ul>
          <p class="mt-2 text-slate-600 text-sm">
            Los aspirantes en esta profesión deben poseer una conciencia social desarrollada, ya que tienen el peso sobre ellos de garantizar la equidad y la justicia. Durante su formación académica, los aspirantes a abogados desarrollan capacidades para examinar contextos legales, reconocer las normativas pertinentes y proceder conforme a los preceptos jurídicos establecidos.
          </p>
          <p class="mt-2 text-slate-600 text-sm">
            Además, es fundamental que mantengan una conducta íntegra y ética en todo momento.
          </p>
        </details>

        <details class="rounded-lg border border-slate-200 bg-white px-4 py-3">
          <summary class="font-semibold cursor-pointer">¿Para qué sirve la carrera de Derecho?</summary>
          <p class="mt-2 text-slate-600 text-sm">
            Esta carrera puede proporcionar a los aspirantes una base sólida para una gran variedad de trayectorias profesionales. Los graduados pueden ejercer como abogados en diferentes áreas del derecho, trabajar en el sector público como jueces, fiscales o funcionarios gubernamentales o bien, incursionar en campos relacionados con:
          </p>
          <ul class="mt-2 space-y-1 text-sm text-slate-600">
            <li>La consultoría legal.</li>
            <li>La gestión de recursos humanos.</li>
            <li>La política.</li>
          </ul>
        </details>

        <details class="rounded-lg border border-slate-200 bg-white px-4 py-3">
          <summary class="font-semibold cursor-pointer">¿Cuánto dura la carrera de Derecho?</summary>
          <p class="mt-2 text-slate-600 text-sm">
            Dependiendo del programa y la institución educativa, pueden ser unos 3 o 5 años aproximadamente; considerando un tiempo completo.
          </p>
          <p class="mt-2 text-slate-600 text-sm">
            La duración promedio de la carrera es de 9 cuatrimestres, con 7 asignaturas en cada cuatrimestre.
          </p>
        </details>

        <details class="rounded-lg border border-slate-200 bg-white px-4 py-3">
          <summary class="font-semibold cursor-pointer">Ramas de la carrera en Derecho</summary>
          <p class="mt-2 text-slate-600 text-sm">
            Existen 2 principales:
          </p>
          <ul class="mt-2 space-y-1 text-sm text-slate-600">
            <li>Derecho privado: se enfoca en las necesidades particulares de las personas.</li>
            <li>Derecho público: se centra en las relaciones entre los individuos y el Estado, de aquí se desprenden más subdivisiones, como:</li>
            <li>Derecho Civil.</li>
            <li>Derecho Laboral.</li>
            <li>Derecho Penal.</li>
            <li>Derecho Comercial.</li>
            <li>Derecho Internacional.</li>
            <li>Derecho Constitucional.</li>
            <li>Derecho Ambiental, etc.</li>
          </ul>
          <p class="mt-2 text-slate-600 text-sm">
            Cada una de estas ramas aborda aspectos específicos del ordenamiento jurídico y ofrece oportunidades únicas de praxis y especialidad.
          </p>
        </details>

        <details class="rounded-lg border border-slate-200 bg-white px-4 py-3">
          <summary class="font-semibold cursor-pointer">¿Qué hace un licenciado en Derecho?</summary>
          <p class="mt-2 text-slate-600 text-sm">
            Desde representar a clientes en litigios y negociaciones hasta asesorar empresas sobre el cumplimiento legal, los abogados utilizan su conocimiento del derecho para resolver conflictos, proteger los derechos individuales y contribuir al funcionamiento justo de la sociedad.
          </p>
          <p class="mt-2 text-slate-600 text-sm">Además, podrás incursionar en estas actividades:</p>
          <ul class="mt-2 space-y-1 text-sm text-slate-600">
            <li>Resolver problemas jurídicos.</li>
            <li>Dirigir equipos enfocados al cumplimiento de la ley.</li>
            <li>Participar en la elaboración y administración de justicia.</li>
            <li>Mejorar las condiciones en cuanto a derechos de comunidades marginadas.</li>
          </ul>
          <p class="mt-2 text-slate-600 text-sm">
            Los aspirantes en esta profesión deben poseer una conciencia social desarrollada, ya que tienen el peso sobre ellos de garantizar la equidad y la justicia. Durante su formación académica, los aspirantes a abogados desarrollan capacidades para examinar contextos legales, reconocer las normativas pertinentes y proceder conforme a los preceptos jurídicos establecidos.
          </p>
          <p class="mt-2 text-slate-600 text-sm">
            Además, es fundamental que mantengan una conducta íntegra y ética en todo momento.
          </p>
        </details>

        <details class="rounded-lg border border-slate-200 bg-white px-4 py-3">
          <summary class="font-semibold cursor-pointer">¿Cuánto gana un licenciado en Derecho?</summary>
          <p class="mt-2 text-slate-600 text-sm">
            Los salarios varían significativamente según la ubicación geográfica, experiencia, campo de especialización.
          </p>
          <p class="mt-2 text-slate-600 text-sm">
            De acuerdo con información de diversos portales de empleo como Glassdoor y Talent, en México, un abogado percibe un salario medio anual de $96,000 pesos mexicanos o $49.23 pesos por hora.
          </p>
          <p class="mt-2 text-slate-600 text-sm">
            Al comenzar la carrera, los cargos suelen ofrecer un sueldo inicial de alrededor de $66,000 pesos anuales, mientras que los profesionales con más experiencia pueden alcanzar salarios cercanos a los $156,000 pesos anuales.
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
