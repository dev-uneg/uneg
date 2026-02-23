<?php
$title = 'Maestría en Finanzas | UNEG';
$active = 'oferta';
$bodyClass = 'bg-slate-50 page-gray';
require __DIR__ . '/../partials/header.php';
?>

<div class="-mx-6 bg-slate-50">
<main class="max-w-7xl mx-auto px-4 py-10">
<section class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
  <img src="<?php echo $assetBase; ?>/imgs/maestrias/finanzas/hero.png" alt="Maestría en Finanzas" class="block w-full h-auto" loading="eager">
  <div class="bg-[#0b2c65] text-white">
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 px-5 py-4 text-sm">
      <div class="flex items-center gap-3">
        <span class="inline-flex h-9 w-9 items-center justify-center rounded-full bg-white/15">
          <i class="ri-school-line text-lg"></i>
        </span>
        <div>
          <p class="font-semibold">Modalidad Presencial</p>
          <p class="text-white/70 text-xs">Maestrías</p>
        </div>
      </div>
      <div class="flex items-center gap-3">
        <span class="inline-flex h-9 w-9 items-center justify-center rounded-full bg-white/15">
          <i class="ri-time-line text-lg"></i>
        </span>
        <div>
          <p class="font-semibold">Horarios Flexibles</p>
          <p class="text-white/70 text-xs">Sábados</p>
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
    <h1 class="text-2xl sm:text-3xl font-semibold text-[#0b2c65]">Maestría en Finanzas: Nuevos conocimientos con un enfoque práctico</h1>
    <p class="mt-2 text-slate-600">
      Se aproximan nuevas áreas de oportunidad en el mundo financiero. Prepárate con la Maestría en Finanzas de la Universidad de Negocios ISEC. Aprende nuevas estrategias que den solución a crisis económicas empresariales y obtén gran valor profesional.
    </p>
  </section>

  <section class="mt-10 grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
    <div class="text-center lg:text-left">
      <h2 class="text-2xl sm:text-3xl font-semibold text-[#0b2c65]">
        Objetivo General: Al finalizar los estudios de Maestría estarás capacitado para maximizar el valor empresarial a través de métodos cuantitativos para analizar problemas financieros complejos y toma de decisiones.
      </h2>
    </div>
    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
      <h3 class="text-xl font-semibold text-[#0b2c65] text-center">Inscríbete Ahora</h3>
      <?php if (isset($_GET['error'])): ?>
        <div class="mt-4 rounded-lg border border-rose-200 bg-rose-50 px-4 py-3 text-sm text-rose-800">
          No se pudo enviar tu informacion. Revisa los campos e intentalo de nuevo.
        </div>
      <?php endif; ?>
      <form class="mt-6 grid grid-cols-1 sm:grid-cols-2 gap-4 text-sm" method="post" action="<?php echo $base; ?>/api/forms/maestrias-maestria-en-finanzas" autocomplete="on">
        <input class="w-full rounded-md border border-slate-300 px-3 py-2 sm:col-span-2 col-span-1" name="full_name" placeholder="Nombre completo*" type="text" required />
        <input class="w-full rounded-md border border-slate-300 px-3 py-2" name="email" placeholder="Correo Electrónico*" type="email" required />
        <input class="w-full rounded-md border border-slate-300 px-3 py-2" name="phone" placeholder="Teléfono*" type="tel" required />
        <input type="hidden" name="interest" value="Maestría en Finanzas" />
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
      <div class="bg-gradient-to-r from-[#BC9000] via-[#BC9000] to-[#BC9000] text-white">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 px-6 py-8">
          <div class="text-left">
            <p class="text-sm uppercase tracking-[0.2em] text-white">Perfil de Ingreso/Egreso</p>
            <h3 class="mt-2 text-2xl sm:text-3xl font-semibold">¿Qué requiero?</h3>
            <button class="mt-3 inline-flex items-center gap-2 text-sm font-semibold text-white/90 hover:text-white">Conocer más <span aria-hidden="true">+</span></button>
          </div>
          <div class="text-center">
            <div class="mx-auto inline-flex h-12 w-12 items-center justify-center rounded-full bg-white/15">
              <i class="ri-clipboard-line text-2xl"></i>
            </div>
            <p class="mt-3 text-lg font-semibold">Requisitos</p>
          </div>
          <div class="text-center">
            <div class="mx-auto inline-flex h-12 w-12 items-center justify-center rounded-full bg-white/15">
              <i class="ri-check-line text-2xl"></i>
            </div>
            <p class="mt-3 text-lg font-semibold">Perfil de Ingreso</p>
          </div>
          <div class="text-center">
            <div class="mx-auto inline-flex h-12 w-12 items-center justify-center rounded-full bg-white/15">
              <i class="ri-briefcase-4-line text-2xl"></i>
            </div>
            <p class="mt-3 text-lg font-semibold">Campo de Trabajo</p>
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
            <p class="mt-2 text-sm text-slate-600">Para cursar esta maestría deberás contar con los siguientes documentos:</p>
            <ul class="mt-3 space-y-2 text-sm text-[#0b2c65]">
              <li>Original y 2 copias de acta de nacimiento.</li>
              <li>Original y 2 copias de certificado de nivel superior.</li>
              <li>CURP.</li>
              <li>Copia de Título Profesional.</li>
              <li>Copia de Cédula Profesional.</li>
              <li>Comprobante de domicilio.</li>
            </ul>
          </div>

          <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm">
            <div class="h-10 w-10 rounded-full bg-slate-100 flex items-center justify-center text-[#0b2c65]">
              <i class="ri-checkbox-circle-line text-xl"></i>
            </div>
            <h4 class="mt-3 font-semibold">Perfil de ingreso</h4>
            <p class="mt-2 text-sm text-slate-600">Como aspirante de esta maestría deberás cubrir el siguiente perfil:</p>
            <ul class="mt-3 space-y-2 text-sm text-[#0b2c65]">
              <li>Licenciados o pasantes que hayan cursado cualquier carrera, preferentemente área administrativa, con interés en el mundo de los negocios.</li>
            </ul>
          </div>

          <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm">
            <div class="h-10 w-10 rounded-full bg-slate-100 flex items-center justify-center text-[#0b2c65]">
              <i class="ri-graduation-cap-line text-xl"></i>
            </div>
            <h4 class="mt-3 font-semibold">Perfil de egreso</h4>
            <p class="mt-2 text-sm text-slate-600">Al egresar de esta Maestría, tendrás habilidades para:</p>
            <ul class="mt-3 space-y-2 text-sm text-[#0b2c65]">
              <li>Al egresar de la Maestría en Finanzas obtendrás conocimientos acerca de los elementos esenciales de la teoría financiera, que fundamenten la correcta toma de decisiones.</li>
              <li>Adicional aprenderás técnicas y herramientas más actualizadas de las finanzas para el análisis, planeación y control de las finanzas en la empresa.</li>
              <li>Tendrás la capacidad de identificar los elementos de riesgo y rendimiento de los diferentes valores en los mercados financieros.</li>
            </ul>
          </div>

          <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm">
            <div class="h-10 w-10 rounded-full bg-slate-100 flex items-center justify-center text-[#0b2c65]">
              <i class="ri-briefcase-4-line text-xl"></i>
            </div>
            <h4 class="mt-3 font-semibold">Campo de Trabajo</h4>
            <p class="mt-2 text-sm text-slate-600">El egresado de la Maestría en Finanzas podrá desarrollarse en ámbitos tan diversos como el:</p>
            <ul class="mt-3 space-y-2 text-sm text-[#0b2c65]">
              <li>Sector Público, privado y organismos descentralizados.</li>
              <li>Labores de asesoría.</li>
              <li>Consultoría.</li>
              <li>Capacitación.</li>
              <li>Emprendedor de negocios.</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="mt-12">
    <div class="relative w-full overflow-hidden rounded-2xl border border-slate-200 bg-slate-100 shadow-sm">
      <div class="aspect-video w-full">
        <iframe
          class="h-full w-full"
          src="https://www.youtube.com/embed/nuK7OKnjyOQ"
          title="Maestría en Finanzas"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          allowfullscreen
        ></iframe>
      </div>
    </div>
  </section>

  <section class="mt-12">
    <div class="rounded-2xl border border-slate-200 bg-[#062c3a] px-6 py-10 text-center text-white shadow-sm">
      <h2 class="text-3xl sm:text-4xl font-semibold">Horarios</h2>
      <div class="mt-6 text-xl sm:text-2xl">Plan Cuatrimestral</div>
      <div class="mt-3 text-2xl sm:text-3xl font-semibold">Sábados</div>
      <div class="mt-2 text-lg">7 AM a 13:00 Hrs</div>
    </div>
  </section>

  <section class="mt-12">
    <div class="max-w-3xl mx-auto">
      <h2 class="text-center text-2xl sm:text-3xl font-semibold text-[#0b2c65]">Preguntas frecuentes</h2>
      <div class="mt-6 space-y-3">
        <details class="rounded-lg border border-slate-200 bg-white px-4 py-3">
          <summary class="font-semibold cursor-pointer">¿Por qué estudiar la Maestría en Finanzas en la universidad ISEC?</summary>
          <p class="mt-2 text-slate-600 text-sm">
            La Maestría en Finanzas está enfocada en la creación de estrategias para proyectos, métodos de análisis, aspectos de inversión y el estudio del contexto económico nacional e internacional. El profesional ahondará en estos aspectos desde diversos ángulos de conocimiento, desde el científico, hasta el social, para enriquecer la toma de decisiones.
          </p>
        </details>

        <details class="rounded-lg border border-slate-200 bg-white px-4 py-3">
          <summary class="font-semibold cursor-pointer">¿Qué son las finanzas?</summary>
          <p class="mt-2 text-slate-600 text-sm">
            Las finanzas es un área de la economía sumamente relevante, ya que se encarga del funcionamiento de los mercados monetarios y capitales, las entidades privadas y públicas que operan en ellos, las políticas de adquisición de recursos, el valor del dinero a través del tiempo y el rendimiento que debe ofrecer una inversión, más conocido como "coste de capital".
          </p>
        </details>

        <details class="rounded-lg border border-slate-200 bg-white px-4 py-3">
          <summary class="font-semibold cursor-pointer">Tipos de finanzas</summary>
          <p class="mt-2 text-slate-600 text-sm">Existen diversos tipos de finanzas:</p>
          <ul class="mt-2 space-y-1 text-sm text-slate-600">
            <li>Finanzas públicas.</li>
            <li>Finanzas empresariales.</li>
            <li>Finanzas personales.</li>
          </ul>
          <p class="mt-2 text-slate-600 text-sm">
            Los tipos de finanzas, a su vez, dependen del tipo de especialización que el profesional decida desarrollar.
          </p>
        </details>

        <details class="rounded-lg border border-slate-200 bg-white px-4 py-3">
          <summary class="font-semibold cursor-pointer">Importancia de estudiar la Maestría en Finanzas</summary>
          <p class="mt-2 text-slate-600 text-sm">
            Las finanzas son un área de gran importancia en todos los negocios, ya sean de carácter público o privado. Desarrollar o fortalecer las aptitudes enfocadas a esta disciplina, permite que los profesionales sean capaces de analizar escenarios financieros y el contexto o las tendencias económicas, diseñar estrategias, evaluar proyectos e implementarlos considerando cada riesgo para obtener los objetivos que se procuran.
          </p>
        </details>

        <details class="rounded-lg border border-slate-200 bg-white px-4 py-3">
          <summary class="font-semibold cursor-pointer">Qué aprenderás en la Maestría en Finanzas</summary>
          <p class="mt-2 text-slate-600 text-sm">En la Maestría en Finanzas de la Universidad de Negocios ISEC, podrás aprender lo siguiente:</p>
          <ul class="mt-2 space-y-1 text-sm text-slate-600">
            <li>Teoría financiera para la correcta toma de decisiones.</li>
            <li>Técnicas y herramientas actualizadas para el análisis, planeación y control de las finanzas empresariales.</li>
            <li>Capacidad para identificar los riesgos y rendimientos de valores en los diversos mercados financieros.</li>
            <li>Correcta aplicación de la econometría y la estadística en situaciones concretas de la economía y las finanzas.</li>
          </ul>
          <p class="mt-2 text-slate-600 text-sm">
            Tu perfil como egresado te permitirá poder ser clave en la estabilidad o crecimiento de los negocios para los que enfoques tus proyectos.
          </p>
        </details>

        <details class="rounded-lg border border-slate-200 bg-white px-4 py-3">
          <summary class="font-semibold cursor-pointer">¿Cuánto dura la Maestría en Finanzas?</summary>
          <p class="mt-2 text-slate-600 text-sm">
            La Maestría en Finanzas tiene una duración de 4 semestres a través de los cuales se imparten 4 materias en cada uno. Las clases se imparten todos los sábados en el turno matutino de 7:00 am a 13:00 horas de la zona centro de México. Conoce el plan de estudios para que te puedas ir familiarizando con las materias impartidas en este posgrado.
          </p>
        </details>

        <details class="rounded-lg border border-slate-200 bg-white px-4 py-3">
          <summary class="font-semibold cursor-pointer">Ventajas de estudiar la Maestría en Finanzas</summary>
          <p class="mt-2 text-slate-600 text-sm">Las ventajas de estudiar la Maestría en Finanzas son de diversa índole.</p>
          <ul class="mt-2 space-y-1 text-sm text-slate-600">
            <li>Amplio campo laboral.</li>
            <li>Comprensión del mercado global.</li>
            <li>Entendimiento del cambio constante en el contexto económico y financiero.</li>
            <li>Impacto en los negocios y en la sociedad en general.</li>
            <li>Potencial para invertir.</li>
            <li>Capacidad estratégica y analítica.</li>
            <li>Anticipación de riesgos.</li>
            <li>Análisis de mercado óptimo.</li>
            <li>Aptitudes para el análisis de datos.</li>
          </ul>
          <p class="mt-2 text-slate-600 text-sm">
            Descubre más acerca de ISEC y cada una de las ventajas generando tu inscripción y llevando tus habilidades a otro nivel de estudios.
          </p>
        </details>
      </div>
    </div>
  </section>
</main>
</div>

<style>
  body.page-gray footer { margin-top: 0; }
</style>

<?php require __DIR__ . '/../partials/footer.php'; ?>
