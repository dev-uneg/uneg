<?php
$title = 'Maestría en Docencia | UNEG';
$active = 'oferta';
$bodyClass = 'bg-slate-50 page-gray';
require __DIR__ . '/../partials/header.php';
?>

<div class="-mx-6 bg-slate-50">
<main class="max-w-7xl mx-auto px-4 py-10">
<section class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
  <img src="<?php echo $assetBase; ?>/_imgs/maestrias/docencia/hero.webp" alt="Maestría en Docencia" class="block w-full h-auto" loading="eager">
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
    <h1 class="text-2xl sm:text-3xl font-semibold text-[#0b2c65]">Maestría en Docencia: Genera nuevas estrategias de aprendizaje</h1>
    <p class="mt-2 text-slate-600">
      Estudiar la Maestría en Docencia te ayudará a fortalecer tus conocimientos a través de herramientas y procesos de enseñanza actualizados, los cuales te prepararán para las nuevas exigencias en el sector educativo.
    </p>
  </section>

  <section class="mt-10 grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
    <div class="text-center lg:text-left">
      <h2 class="text-2xl sm:text-3xl font-semibold text-[#0b2c65]">
        Objetivo General: Estudios de alto impacto para el desarrollo educativo del país con bases científico-tecnológicas para lograr un cambio positivo en los alumnos, a través del desarrollo de estrategias didácticas, pedagógicas y metodológicas que favorezcan la educación.
      </h2>
    </div>
    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
      <h3 class="text-xl font-semibold text-[#0b2c65] text-center">Inscríbete Ahora</h3>
      <?php if (isset($_GET['error'])): ?>
        <div class="mt-4 rounded-lg border border-rose-200 bg-rose-50 px-4 py-3 text-sm text-rose-800">
          No se pudo enviar tu informacion. Revisa los campos e intentalo de nuevo.
        </div>
      <?php endif; ?>
      <form class="mt-6 grid grid-cols-1 sm:grid-cols-2 gap-4 text-sm" method="post" action="<?php echo $base; ?>/api/forms/maestrias-maestria-en-docencia" autocomplete="on">
        <input class="w-full rounded-md border border-slate-300 px-3 py-2 sm:col-span-2 col-span-1" name="full_name" placeholder="Nombre completo*" type="text" required />
        <input class="w-full rounded-md border border-slate-300 px-3 py-2" name="email" placeholder="Correo Electrónico*" type="email" required />
        <input class="w-full rounded-md border border-slate-300 px-3 py-2" name="phone" placeholder="Teléfono*" type="tel" required />
        <input type="hidden" name="interest" value="Maestría en Docencia" />
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
      <div class="bg-gradient-to-r from-[#BC1E01] via-[#BC1E01] to-[#BC1E01] text-white">
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
            <a href="<?php echo $assetBase; ?>/_assets/planes-de-estudio/ISEC-Docencia.pdf" target="_blank" rel="noopener noreferrer" class="mt-1 inline-flex items-center gap-2 text-sm font-semibold text-white/90 underline-offset-4 transition hover:text-white hover:underline focus:outline-none focus-visible:ring-2 focus-visible:ring-white/80">Ver plan <i class="text-base" data-lucide="external-link" aria-hidden="true"></i></a>
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
              <li>Licenciados o pasantes que hayan cursado cualquier carrera y con interés en el mundo de la educación.</li>
            </ul>
          </div>

          <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm">
            <div class="h-10 w-10 rounded-full bg-slate-100 flex items-center justify-center text-[#0b2c65]">
              <i class="text-xl" data-lucide="graduation-cap"></i>
            </div>
            <h4 class="mt-3 font-semibold">Perfil de egreso</h4>
            <p class="mt-2 text-sm text-slate-600">Al egresar de esta maestría, tendrás habilidades para:</p>
            <ul class="mt-3 space-y-2 text-sm text-[#0b2c65]">
              <li>El maestro en Docencia será un profesional de la educación con conocimientos, habilidades y actitudes necesarias para desempeñarse en el campo específico de la docencia, la capacitación y la investigación.</li>
            </ul>
          </div>

          <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm">
            <div class="h-10 w-10 rounded-full bg-slate-100 flex items-center justify-center text-[#0b2c65]">
              <i class="text-xl" data-lucide="briefcase"></i>
            </div>
            <h4 class="mt-3 font-semibold">Campo de Trabajo</h4>
            <p class="mt-2 text-sm text-slate-600">Profesionalmente te desarrollarás en:</p>
            <ul class="mt-3 space-y-2 text-sm text-[#0b2c65]">
              <li>Las tareas profesionales de los maestros en Docencia, son muy variadas y van desde impartir docencia de alta calidad en los planteles educativos universitarios, hasta los diferentes programas de extensión universitaria.</li>
              <li>Desde la planeación de programas académicos hasta la investigación educativa.</li>
              <li>Desde el uso de las TIC'S para la educación hasta el desarrollo de programas de capacitación en las empresas.</li>
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
          src="https://www.youtube.com/embed/0AjMw4XdrBg"
          title="Maestría en Docencia"
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
          <summary class="font-semibold cursor-pointer">¿Por qué estudiar la Maestría en Docencia en ISEC?</summary>
          <p class="mt-2 text-slate-600 text-sm">
            La cuestión educativa es de suma importancia en todos los niveles del desarrollo humano, ya que esto ha permitido el constante cambio en beneficio de la humanidad con el paso de la historia, es por ello que la Universidad de Negocios ISEC ha creado este programa de posgrado. La Maestría en Docencia responde a las necesidades pedagógicas de actualidad, tales como la inclusión, el panorama social, las nuevas tendencias y prácticas, la óptima gestión en instituciones públicas y privadas, los diversos métodos de evaluación y las Tecnologías de la Información y Comunicación en la enseñanza.
          </p>
        </details>

        <details class="rounded-lg border border-slate-200 bg-white px-4 py-3">
          <summary class="font-semibold cursor-pointer">¿Qué es la Docencia?</summary>
          <p class="mt-2 text-slate-600 text-sm">
            La docencia es una rama de la pedagogía, la cual se enfoca en las prácticas de enseñanza, transmisión de saberes y fortalecimiento de habilidades durante la formación de los individuos. Es un área clave en el quehacer pedagógico, ya que la pedagogía está orientada al estudio de los métodos educativos, las teorías de aprendizaje y la formación de ciudadanos. La especialización docente permite que se cumpla una parte fundamental del amplio campo de conocimiento del que forma parte.
          </p>
        </details>

        <details class="rounded-lg border border-slate-200 bg-white px-4 py-3">
          <summary class="font-semibold cursor-pointer">Importancia de estudiar la Maestría en Docencia</summary>
          <p class="mt-2 text-slate-600 text-sm">La importancia de la Maestría en Docencia se puede entender desde diversos puntos que benefician a los estudiantes.</p>
          <ul class="mt-2 space-y-1 text-sm text-slate-600">
            <li>Actualización sobre los métodos de enseñanza.</li>
            <li>Especialización en los medios tecnológicos para el óptimo ejercicio de la docencia.</li>
            <li>Creación e implementación de estrategias de formación educativa.</li>
            <li>Análisis, entendimiento y solución de las necesidades docentes.</li>
            <li>Mayor oportunidad de empleo.</li>
            <li>Clave en el mejoramiento del contexto educativo.</li>
            <li>Capacidad para ocupar diversos puestos clave en el ámbito privado y público.</li>
          </ul>
          <p class="mt-2 text-slate-600 text-sm">Conoce más acerca de ISEC y todo lo que puedes obtener en esta casa de estudios.</p>
        </details>

        <details class="rounded-lg border border-slate-200 bg-white px-4 py-3">
          <summary class="font-semibold cursor-pointer">¿Qué aprenderás en la Maestría en Docencia?</summary>
          <p class="mt-2 text-slate-600 text-sm">En la Maestría en Docencia aprenderás a:</p>
          <ul class="mt-2 space-y-1 text-sm text-slate-600">
            <li>Fortalecer los métodos de investigación.</li>
            <li>Implementar métodos de enseñanza de acuerdo al contexto social.</li>
            <li>Fomentar la inclusión y la equidad en beneficio de la estabilidad educativa.</li>
            <li>Crear estrategias de aprendizaje.</li>
            <li>Adaptar los métodos de enseñanza a las tendencias tecnológicas.</li>
          </ul>
          <p class="mt-2 text-slate-600 text-sm">Adéntrate en el plan de estudios para ahondar en cómo será tu especialización.</p>
        </details>

        <details class="rounded-lg border border-slate-200 bg-white px-4 py-3">
          <summary class="font-semibold cursor-pointer">¿Cuánto dura la Maestría en Docencia?</summary>
          <p class="mt-2 text-slate-600 text-sm">
            La Maestría en Docencia tiene una duración de cuatro cuatrimestres y, en cada uno de ellos, se imparten 4 materias en un horario matutino de 7:00 am a las 13:00 horas de la zona central de México, todos los sábados.
          </p>
        </details>

        <details class="rounded-lg border border-slate-200 bg-white px-4 py-3">
          <summary class="font-semibold cursor-pointer">Ventajas de estudiar la Maestría en Docencia</summary>
          <p class="mt-2 text-slate-600 text-sm">Son múltiples los beneficios de estudiar un posgrado enfocado a la docencia, estos son algunos de ellos.</p>
          <ul class="mt-2 space-y-1 text-sm text-slate-600">
            <li>Oportunidad de obtener posiciones de toma de decisión en instituciones públicas y/o privadas.</li>
            <li>Especialización en diversas estrategias educativas para su óptima implementación.</li>
            <li>Perfeccionamiento en los procesos de investigación.</li>
            <li>Análisis del panorama pedagógico nacional e internacional.</li>
            <li>Herramientas para la correcta inclusión de los individuos en la formación educativa.</li>
            <li>Diseño de programas de aprendizaje para distintos públicos.</li>
          </ul>
          <p class="mt-2 text-slate-600 text-sm">Inscríbete en ISEC y comienza esta nueva y emocionante etapa en la que llevas tu potencial a otro nivel.</p>
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
