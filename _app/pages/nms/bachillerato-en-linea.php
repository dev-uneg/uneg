<?php
$title = 'Bachillerato en Línea | UNEG';
$active = 'oferta';
$bodyClass = 'bg-slate-50 page-gray';
require __DIR__ . '/../partials/header.php';
?>

<div class="-mx-6 bg-slate-50">
<main class="max-w-7xl mx-auto px-4 py-10">
  <section class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
    <img src="<?php echo $assetBase; ?>/_imgs/nms/bachillerato-en-linea/hero.webp" alt="Bachillerato en línea - Modalidad en línea" class="block w-full h-auto" loading="eager">
    <div class="bg-[#0b2c65] text-white">
      <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 px-5 py-4 text-sm">
        <div class="flex items-center gap-3">
          <span class="inline-flex h-9 w-9 items-center justify-center rounded-full bg-white/15">
            <i class="text-lg" data-lucide="school"></i>
          </span>
          <div>
            <p class="font-semibold">Modalidad en línea</p>
            <p class="text-white/70 text-xs">Bachillerato en Línea</p>
          </div>
        </div>
        <div class="flex items-center gap-3">
          <span class="inline-flex h-9 w-9 items-center justify-center rounded-full bg-white/15">
            <i class="text-lg" data-lucide="clock-3"></i>
          </span>
          <div>
            <p class="font-semibold">24 HRS</p>
            <p class="text-white/70 text-xs">Lunes a domingo</p>
          </div>
        </div>
        <div class="flex items-center gap-3">
          <span class="inline-flex h-9 w-9 items-center justify-center rounded-full bg-white/15">
            <i class="text-lg" data-lucide="medal"></i>
          </span>
          <div>
            <p class="font-semibold">Certificación SEP</p>
            <p class="text-white/70 text-xs">Validez oficial</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="mt-10 text-center">
    <h1 class="text-2xl sm:text-3xl font-semibold text-[#0b2c65]">Bachillerato en línea: el camino hacia tus objetivos</h1>
    <p class="mt-3 text-slate-600">
      Logra tus objetivos con una alternativa que se ajuste a tu tiempo y se equilibre con tus demás actividades, con la Universidad de Negocios ISEC es posible.
    </p>
  </section>

  <section class="mt-10 grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
    <div>
      <h3 class="text-lg font-semibold text-[#0b2c65]">Obtén tu certificado del nivel medio superior con validez oficial de la SEP</h3>
      <p class="mt-2 text-slate-600">
        Coloca tus datos en el formulario y nos contactaremos contigo para brindarte mayor información.
      </p>
    </div>
    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
      <h3 class="text-xl font-semibold text-[#0b2c65] text-center">Inscríbete Ahora</h3>
      <?php if (isset($_GET['error'])): ?>
        <div class="mt-4 rounded-lg border border-rose-200 bg-rose-50 px-4 py-3 text-sm text-rose-800">
          No se pudo enviar tu informacion. Revisa los campos e intentalo de nuevo.
        </div>
      <?php endif; ?>
      <form class="mt-6 grid grid-cols-1 sm:grid-cols-2 gap-4 text-sm" method="post" action="<?php echo $base; ?>/api/forms/bachillerato-en-linea" autocomplete="on">
        <input class="w-full rounded-md border border-slate-300 px-3 py-2 sm:col-span-2 col-span-1" name="full_name" placeholder="Nombre completo*" type="text" required />
        <input class="w-full rounded-md border border-slate-300 px-3 py-2" name="email" placeholder="Correo Electrónico*" type="email" required />
        <input class="w-full rounded-md border border-slate-300 px-3 py-2" name="phone" placeholder="Teléfono*" type="tel" required />
        <input type="hidden" name="interest" value="Bachillerato en Línea" />
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

  <section class="mt-12">
    <div class="overflow-hidden rounded-2xl shadow-sm">
      <div class="bg-gradient-to-r from-[#0a79d0] via-[#3ea2e7] to-[#8bc8f3] text-white">
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
            <a href="<?php echo $assetBase; ?>/_assets/planes-de-estudio/plan-de-estudio-bachillerato-en-linea.jpg" target="_blank" rel="noopener noreferrer" class="mt-1 inline-flex items-center gap-2 text-sm font-semibold text-white/90 underline-offset-4 transition hover:text-white hover:underline focus:outline-none focus-visible:ring-2 focus-visible:ring-white/80">Ver plan <i class="text-base" data-lucide="external-link" aria-hidden="true"></i></a>
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
        <p class="mt-2 text-sm text-slate-600">Para cursar el bachillerato en línea deberás contar con los siguientes documentos:</p>
        <ul class="mt-3 space-y-2 text-sm text-[#0b2c65]">
          <li>Acta de nacimiento (Original y 2 copias).</li>
          <li>Certificado de Secundaria.</li>
          <li>2 fotografías blanco y negro papel mate.</li>
          <li>CURP (Original y 2 copias).</li>
          <li>Comprobante de domicilio.</li>
        </ul>
      </div>
      <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm">
        <div class="h-10 w-10 rounded-full bg-slate-100 flex items-center justify-center text-[#0b2c65]">
          <i class="text-xl" data-lucide="check-circle"></i>
        </div>
        <h4 class="mt-3 font-semibold">Perfil de Ingreso</h4>
        <p class="mt-2 text-sm text-slate-600">Acreditar el programa propedéutico consistente en tres cursos:</p>
        <ul class="mt-3 space-y-2 text-sm text-[#0b2c65]">
          <li>Estrategias de aprendizaje a distancia.</li>
          <li>Lectura y redacción.</li>
          <li>Matemáticas.</li>
        </ul>
      </div>
      <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm">
        <div class="h-10 w-10 rounded-full bg-slate-100 flex items-center justify-center text-[#0b2c65]">
          <i class="text-xl" data-lucide="graduation-cap"></i>
        </div>
        <h4 class="mt-3 font-semibold">Perfil de Egreso</h4>
        <p class="mt-2 text-sm text-slate-600">Al concluir este bachillerato, tendrás habilidades para:</p>
        <ul class="mt-3 space-y-2 text-sm text-[#0b2c65]">
          <li>Conocimientos generales Nivel Medio Superior.</li>
          <li>Conocimientos en las asignaturas de matemáticas, física y química.</li>
          <li>Conocimientos suficientes para presentar el examen de ingreso al Nivel Superior.</li>
        </ul>
      </div>
      <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm">
        <div class="h-10 w-10 rounded-full bg-slate-100 flex items-center justify-center text-[#0b2c65]">
          <i class="text-xl" data-lucide="briefcase"></i>
        </div>
        <h4 class="mt-3 font-semibold">Campo de Trabajo</h4>
        <p class="mt-2 text-sm text-slate-600">Profesionalmente te desarrollarás en:</p>
        <ul class="mt-3 space-y-2 text-sm text-[#0b2c65]">
          <li>Con tu educación Media Superior podrás continuar con estudios profesionales.</li>
          <li>Desempeño en actividades operativas.</li>
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
          src="https://www.youtube.com/embed/bVfxW8ssIJ0"
          title="Bachillerato en línea"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          allowfullscreen
        ></iframe>
      </div>
    </div>
  </section>

  <section class="mt-12 rounded-2xl bg-[#0b2c65] text-white text-center px-6 py-12">
    <h2 class="text-2xl sm:text-3xl font-semibold">Horarios</h2>
    <p class="mt-4 text-lg">En Línea</p>
    <p class="mt-1 text-sm">De Lunes a Domingo</p>
    <p class="mt-1 text-sm">24 HRS</p>
  </section>

  <section class="mt-12">
    <div class="max-w-3xl mx-auto">
      <h2 class="text-center text-2xl sm:text-3xl font-semibold text-[#0b2c65]">Preguntas frecuentes</h2>
      <div class="mt-6 space-y-3">
      <details class="rounded-lg border border-slate-200 bg-white px-4 py-3">
        <summary class="font-semibold cursor-pointer">¿Por qué estudiar el Bachillerato en línea en ISEC?</summary>
        <p class="mt-2 text-slate-600 text-sm">
          La prepa en línea es una excelente opción para personas con múltiples responsabilidades que dificultan tomar clases en el sistema escolarizado, ya sea por trabajo, familia o porque prefieren un sistema más autodidacta.
          Para todas esas personas, la Universidad de Negocios ISEC cuenta con la opción de acreditar el Bachillerato en línea.
        </p>
      </details>
      <details class="rounded-lg border border-slate-200 bg-white px-4 py-3">
        <summary class="font-semibold cursor-pointer">¿Cómo estudiar la prepa en línea?</summary>
        <p class="mt-2 text-slate-600 text-sm">
          Para estudiar la prepa en línea en la Universidad de Negocios ISEC, requieres los siguientes documentos:
        </p>
        <ul class="mt-2 space-y-1 text-sm text-slate-600">
          <li>Acta de nacimiento (original y 2 copias).</li>
          <li>Certificado de secundaria.</li>
          <li>2 fotografías en blanco y negro en papel mate.</li>
          <li>CURP (original y dos copias).</li>
          <li>Comprobante de domicilio.</li>
        </ul>
        <p class="mt-2 text-slate-600 text-sm">Asimismo, puedes comunicarte a los números disponibles para obtener mayor información.</p>
      </details>
      <details class="rounded-lg border border-slate-200 bg-white px-4 py-3">
        <summary class="font-semibold cursor-pointer">¿Cuántos módulos hay en la prepa en línea?</summary>
        <p class="mt-2 text-slate-600 text-sm">La prepa en línea está constituida por 4 bloques:</p>
        <ul class="mt-2 space-y-1 text-sm text-slate-600">
          <li>Humanidades.</li>
          <li>Ciencias Sociales.</li>
          <li>Matemáticas.</li>
          <li>Ciencias Naturales.</li>
        </ul>
        <p class="mt-2 text-slate-600 text-sm">
          Antes de comenzar cada bloque, se realiza un propedéutico con introducción al sistema de bachillerato, herramientas tecnológicas, estrategias de aprendizaje a distancia y matemáticas.
        </p>
      </details>
      <details class="rounded-lg border border-slate-200 bg-white px-4 py-3">
        <summary class="font-semibold cursor-pointer">¿Cuánto dura la prepa en línea?</summary>
        <p class="mt-2 text-slate-600 text-sm">
          Tiene una duración de 2 años y 6 meses, durante los cuales se refuerzan los conocimientos de 4 módulos relacionados con humanidades, ciencias sociales, matemáticas y ciencias naturales.
        </p>
      </details>
      <details class="rounded-lg border border-slate-200 bg-white px-4 py-3">
        <summary class="font-semibold cursor-pointer">¿Cómo terminar la prepa en línea?</summary>
        <p class="mt-2 text-slate-600 text-sm">
          El bachillerato en línea se realiza a través de plataformas educativas de instituciones acreditadas, como la Universidad de Negocios ISEC. Tras la inscripción, se accede a materiales de estudio, clases virtuales y evaluaciones en línea para acreditar las materias.
        </p>
        <p class="mt-2 text-slate-600 text-sm">
          Al completar el curso y aprobar los exámenes requeridos, se obtiene el certificado de preparatoria con la misma validez que el de modalidad presencial.
        </p>
      </details>
      <details class="rounded-lg border border-slate-200 bg-white px-4 py-3">
        <summary class="font-semibold cursor-pointer">Ventajas de estudiar la prepa en línea</summary>
        <ul class="mt-2 space-y-1 text-sm text-slate-600">
          <li>Flexibilidad.</li>
          <li>Facilidad de acceso.</li>
          <li>Amplias alternativas de acceso.</li>
          <li>Mayor control del tiempo para estudiar.</li>
          <li>Entorno cómodo de aprendizaje según el contexto del estudiante.</li>
          <li>Ahorro en traslados.</li>
          <li>La tecnología permite que más personas continúen sus estudios satisfactoriamente.</li>
        </ul>
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
