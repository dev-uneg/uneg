<?php
$title = 'Maestría en Tecnologías de Información y Comunicaciones | UNEG';
$active = 'oferta';
$bodyClass = 'bg-slate-50 page-gray';
require __DIR__ . '/../partials/header.php';
?>

<div class="-mx-6 bg-slate-50">
<main class="max-w-7xl mx-auto px-4 py-10">
<section class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
  <img src="<?php echo $assetBase; ?>/_imgs/maestrias/tecnologias-de-informacion-y-comunicaciones/hero.webp" alt="Maestría en Tecnologías de Información y Comunicaciones" class="block w-full h-auto" loading="eager">
  <div class="bg-[#0b2c65] text-white">
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 px-5 py-4 text-sm">
      <div class="flex items-center gap-3">
        <span class="inline-flex h-9 w-9 items-center justify-center rounded-full bg-white/15">
          <i class="text-lg" data-lucide="school"></i>
        </span>
        <div>
          <p class="font-semibold">Modalidad Presencial</p>
          <p class="text-white/70 text-xs">Maestrías</p>
        </div>
      </div>
      <div class="flex items-center gap-3">
        <span class="inline-flex h-9 w-9 items-center justify-center rounded-full bg-white/15">
          <i class="text-lg" data-lucide="clock-3"></i>
        </span>
        <div>
          <p class="font-semibold">Horarios Flexibles</p>
          <p class="text-white/70 text-xs">Sábados</p>
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
    <h1 class="text-2xl sm:text-3xl font-semibold text-[#0b2c65]">Conoce la Maestría en Tecnologías de la Información y Comunicaciones de la Universidad de Negocios ISEC</h1>
    <p class="mt-2 text-slate-600">
      Estudiar la Maestría en Tecnologías de la Información y Comunicaciones de la Universidad de Negocios ISEC, te ayudará a fortalecer tus conocimientos. A través de herramientas esenciales, estarás preparado para las nuevas exigencias en el sector empresarial. ¡Inscríbete hoy mismo!
    </p>
  </section>

  <section class="mt-10 grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
    <div class="text-center lg:text-left">
      <h2 class="text-2xl sm:text-3xl font-semibold text-[#0b2c65]">
        Objetivo General: Establecer soluciones de telecomunicaciones que aumenten las transacciones empresariales a través de las alternativas tecnológicas en distintos modelos de negocios.
      </h2>
    </div>
    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
      <h3 class="text-xl font-semibold text-[#0b2c65] text-center">Inscríbete Ahora</h3>
      <?php if (isset($_GET['error'])): ?>
        <div class="mt-4 rounded-lg border border-rose-200 bg-rose-50 px-4 py-3 text-sm text-rose-800">
          No se pudo enviar tu informacion. Revisa los campos e intentalo de nuevo.
        </div>
      <?php endif; ?>
      <form class="mt-6 grid grid-cols-1 sm:grid-cols-2 gap-4 text-sm" method="post" action="<?php echo $base; ?>/api/forms/maestrias-maestria-en-tecnologias-de-informacion-y-comunicaciones" autocomplete="on">
        <input class="w-full rounded-md border border-slate-300 px-3 py-2 sm:col-span-2 col-span-1" name="full_name" placeholder="Nombre completo*" type="text" required />
        <input class="w-full rounded-md border border-slate-300 px-3 py-2" name="email" placeholder="Correo Electrónico*" type="email" required />
        <input class="w-full rounded-md border border-slate-300 px-3 py-2" name="phone" placeholder="Teléfono*" type="tel" required />
        <input type="hidden" name="interest" value="Maestría en Tecnologías de la Información y Comunicaciones" />
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
      <div class="bg-gradient-to-r from-[#6300AA] via-[#6300AA] to-[#6300AA] text-white">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 px-6 py-8">
          <div class="text-left">
            <p class="text-sm uppercase tracking-[0.2em] text-white">Perfil de Ingreso/Egreso</p>
            <h3 class="mt-2 text-2xl sm:text-3xl font-semibold">¿Qué requiero?</h3>
            <button class="mt-3 inline-flex items-center gap-2 text-sm font-semibold text-white/90 hover:text-white">Conocer más <span aria-hidden="true">+</span></button>
          </div>
          <div class="text-center">
            <div class="mx-auto inline-flex h-12 w-12 items-center justify-center rounded-full bg-white/15">
              <i class="text-2xl" data-lucide="graduation-cap"></i>
            </div>
            <p class="mt-3 text-lg font-semibold">Plan de Estudios</p>
            <a href="<?php echo $assetBase; ?>/_assets/planes-de-estudio/ISEC-Tecnologias.pdf" target="_blank" rel="noopener noreferrer" class="mt-1 inline-flex items-center gap-2 text-sm font-semibold text-white/90 underline-offset-4 transition hover:text-white hover:underline focus:outline-none focus-visible:ring-2 focus-visible:ring-white/80">Ver plan <i class="text-base" data-lucide="external-link" aria-hidden="true"></i></a>
          </div>
          <div class="text-center">
            <div class="mx-auto inline-flex h-12 w-12 items-center justify-center rounded-full bg-white/15">
              <i class="text-2xl" data-lucide="check"></i>
            </div>
            <p class="mt-3 text-lg font-semibold">Perfil de Ingreso</p>
          </div>
          <div class="text-center">
            <div class="mx-auto inline-flex h-12 w-12 items-center justify-center rounded-full bg-white/15">
              <i class="text-2xl" data-lucide="briefcase"></i>
            </div>
            <p class="mt-3 text-lg font-semibold">Campo de Trabajo</p>
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
            <p class="mt-2 text-sm text-slate-600">Para la inscripción a esta maestría deberás de presentar la siguiente documentación:</p>
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
              <i class="text-xl" data-lucide="check-circle"></i>
            </div>
            <h4 class="mt-3 font-semibold">Perfil de ingreso</h4>
            <p class="mt-2 text-sm text-slate-600">Como aspirante de esta maestría deberás cubrir el siguiente perfil:</p>
            <ul class="mt-3 space-y-2 text-sm text-[#0b2c65]">
              <li>Título de licenciatura o certificado total de estudios en las siguientes áreas de conocimiento:</li>
              <li>Ciencias administrativas.</li>
              <li>Ingeniería y Tecnología o afín.</li>
            </ul>
          </div>

          <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm">
            <div class="h-10 w-10 rounded-full bg-slate-100 flex items-center justify-center text-[#0b2c65]">
              <i class="text-xl" data-lucide="graduation-cap"></i>
            </div>
            <h4 class="mt-3 font-semibold">Perfil de egreso</h4>
            <p class="mt-2 text-sm text-slate-600">El egresado de la Maestría en Tecnologías de Información y Comunicaciones demostrará liderazgo profesional enfocado a lo siguiente:</p>
            <ul class="mt-3 space-y-2 text-sm text-[#0b2c65]">
              <li>Analiza riesgos y beneficios como oportunidad a la implementación de nuevos servicios y herramientas de TIC´s.</li>
              <li>Lleva a cabo eficientes proyectos de TIC´s en cualquier ámbito y sector empresarial.</li>
              <li>Establece soluciones de telecomunicaciones que generan el intercambio de información eficiente para incrementar las transacciones comerciales de toda empresa.</li>
              <li>Rediseña modernas soluciones de redes globales, valiéndose de nuevas tecnologías emergentes.</li>
            </ul>
          </div>

          <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm">
            <div class="h-10 w-10 rounded-full bg-slate-100 flex items-center justify-center text-[#0b2c65]">
              <i class="text-xl" data-lucide="briefcase"></i>
            </div>
            <h4 class="mt-3 font-semibold">Campo de Trabajo</h4>
            <p class="mt-2 text-sm text-slate-600">El campo de trabajo de los maestros en Tecnologías de Información y Comunicaciones se encuentra en continuo crecimiento, por lo que el egresado de esta maestría podrá desarrollarse en ámbitos tan diversos como:</p>
            <ul class="mt-3 space-y-2 text-sm text-[#0b2c65]">
              <li>Sector Público.</li>
              <li>Sector privado.</li>
              <li>Organismos descentralizados.</li>
              <li>Labores de asesoría.</li>
              <li>Consultoría.</li>
              <li>Capacitación.</li>
              <li>Emprendedor de Negocios.</li>
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
          src="https://www.youtube.com/embed/lAj6c6k669U"
          title="Maestría en Tecnologías de Información y Comunicaciones"
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
          <summary class="font-semibold cursor-pointer">¿Por qué estudiar la Maestría en Tecnologías de Información y Comunicaciones (TIC) en ISEC?</summary>
          <p class="mt-2 text-slate-600 text-sm">
            Cumple tu objetivo de estar preparado ante los nuevos retos de la actualidad y vuélvete un gestor de la innovación tecnológica potenciando tu aprendizaje en la Universidad de Negocios ISEC, la cual ha creado un programa de posgrado especializado para el área de Tecnologías de Información y Comunicaciones con la finalidad de responder a las necesidades del contexto actual.
          </p>
        </details>

        <details class="rounded-lg border border-slate-200 bg-white px-4 py-3">
          <summary class="font-semibold cursor-pointer">¿Qué abarca el área de las TIC?</summary>
          <p class="mt-2 text-slate-600 text-sm">
            Las Tecnologías de Información y Comunicaciones se enfocan en los recursos empleados para el proceso de administración y distribución de la información a través de dispositivos tecnológicos como televisores, ordenadores, teléfonos, etcétera. En este sentido, las TIC abarcan todo lo relacionado con los equipos, programas informáticos, aplicaciones, redes y medios que posibilitan la compilación, procesamiento y almacenamiento de datos en texto, video, imágenes y voz.
          </p>
        </details>

        <details class="rounded-lg border border-slate-200 bg-white px-4 py-3">
          <summary class="font-semibold cursor-pointer">¿Qué aprenderás en la Maestría en Tecnologías de Información y Comunicaciones?</summary>
          <p class="mt-2 text-slate-600 text-sm">
            En la Maestría en Tecnologías de Información y Comunicaciones, aprenderás aspectos de gran relevancia como la administración de tecnologías, las redes, arquitectura y estrategias empresariales, ingeniería en procesos para la innovación tecnológica, administración de servicios tecnológicos, ciberseguridad, análisis de datos y muchos más conocimientos de valor que puedes visualizar detalladamente en el plan de estudios de la Maestría en TIC.
          </p>
        </details>

        <details class="rounded-lg border border-slate-200 bg-white px-4 py-3">
          <summary class="font-semibold cursor-pointer">Importancia de estudiar la Maestría en TIC</summary>
          <p class="mt-2 text-slate-600 text-sm">
            Las Tecnologías de la Información y Comunicaciones están en constante cambio, no solo se generan actualizaciones frecuentes, sino que la innovación es usual en este tipo de áreas de conocimiento. Cuando un profesional se forma en este posgrado, adquiere las habilidades necesarias para fungir como un elemento clave, aprovechando estos cambios o generándolos, en el sector público y/o privado, generando estrategias para proceder con proyectos que sean seguros.
          </p>
        </details>

        <details class="rounded-lg border border-slate-200 bg-white px-4 py-3">
          <summary class="font-semibold cursor-pointer">¿Cuánto dura la Maestría en TIC?</summary>
          <p class="mt-2 text-slate-600 text-sm">
            Tiene una duración de 4 cuatrimestres y, en cada uno de ellos, se imparten cuatro materias todos los sábados en el turno matutino, el cual abarca un horario desde las 7:00 am a las 13:00 horas de la zona centro de México.
          </p>
        </details>

        <details class="rounded-lg border border-slate-200 bg-white px-4 py-3">
          <summary class="font-semibold cursor-pointer">Ventajas de estudiar la Maestría en TIC</summary>
          <p class="mt-2 text-slate-600 text-sm">Las ventajas de estudiar la Maestría en TIC, son de diversa índole. Algunas de ellas son las siguientes:</p>
          <ul class="mt-2 space-y-1 text-sm text-slate-600">
            <li>Mejor análisis de riesgos y beneficios en la implementación de nuevos servicios tecnológicos.</li>
            <li>Creación de estrategias para soluciones tecnológicas.</li>
            <li>Gestión de sistemas de información en la nube.</li>
            <li>Mayor oportunidad de empleo.</li>
            <li>Especialización en un área de alta demanda.</li>
            <li>Constante actualización en temas de innovación.</li>
          </ul>
          <p class="mt-2 text-slate-600 text-sm">
            Conoce más acerca de ISEC y da el siguiente paso inscribiéndote y comenzando esta nueva etapa en tu vida profesional.
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
