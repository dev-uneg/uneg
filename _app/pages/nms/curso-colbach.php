<?php
$title = 'Curso Colbach | UNEG';
$active = 'oferta';
$bodyClass = 'bg-slate-50 page-gray';
require __DIR__ . '/../partials/header.php';
?>

<div class="-mx-6 bg-slate-50">
<main class="max-w-7xl mx-auto px-4 py-10">
  <section class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
    <img src="<?php echo $assetBase; ?>/_imgs/nms/curso-colbach/hero.webp" alt="Curso Colbach" class="block w-full h-auto" loading="eager">
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
    <h2 class="text-2xl sm:text-3xl font-semibold text-[#0b2c65]">Inscripciones abiertas para el Curso Colbach Universidad de Negocios ISEC</h2>
  </section>

  <section class="mt-6 rounded-2xl bg-[#072838] text-white px-6 py-6">
    <div class="flex items-center justify-between gap-6">
      <div class="text-lg sm:text-xl leading-relaxed">
        <p>Obtén tu certificado de preparatoria con validez oficial en México y el extranjero, mediante el examen Colbach Exacer.</p>
        <p class="mt-3">Acredita el nivel medio superior y abre un mundo de posibilidades para continuar tus estudios.</p>
      </div>
      <div class="hidden sm:flex h-12 w-12 items-center justify-center rounded-full border border-white/40 text-white/80">
        <i class="text-2xl" data-lucide="info"></i>
      </div>
    </div>
  </section>

  <section class="mt-10 grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
    <div class="text-center lg:text-left">
      <h3 class="text-2xl sm:text-3xl font-semibold text-[#0b2c65]">Obtén tu certificado del nivel medio superior con validez oficial de la SEP</h3>
      <p class="mt-3 text-slate-600">
        Coloca tus datos en el formulario y nos contactaremos contigo para brindarte mayor información
      </p>
    </div>
    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
      <h3 class="text-xl font-semibold text-[#0b2c65] text-center">Inscríbete Ahora</h3>
      <?php if (isset($_GET['error'])): ?>
        <div class="mt-4 rounded-lg border border-rose-200 bg-rose-50 px-4 py-3 text-sm text-rose-800">
          No se pudo enviar tu informacion. Revisa los campos e intentalo de nuevo.
        </div>
      <?php endif; ?>
      <form class="mt-6 grid grid-cols-1 sm:grid-cols-2 gap-4 text-sm" method="post" action="<?php echo $base; ?>/api/forms/curso-colbach" autocomplete="on">
        <input class="w-full rounded-md border border-slate-300 px-3 py-2 sm:col-span-2 col-span-1" name="full_name" placeholder="Nombre completo*" type="text" required />
        <input class="w-full rounded-md border border-slate-300 px-3 py-2" name="email" placeholder="Correo Electrónico*" type="email" required />
        <input class="w-full rounded-md border border-slate-300 px-3 py-2" name="phone" placeholder="Teléfono*" type="tel" required />
        <input type="hidden" name="interest" value="Curso COLBACH" />
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
            <button class="mt-1 text-sm text-white/80 hover:text-white">Ver plan</button>
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
            <p class="mt-2 text-sm text-slate-600">Para realizar este curso deberás contar con los siguientes documentos y requisitos:</p>
            <ul class="mt-3 space-y-2 text-sm text-[#0b2c65]">
              <li>Tener 18 años cumplidos.</li>
              <li>Certificado de Secundaria (Original y 2 Copias).</li>
              <li>Acta de nacimiento (Original y 2 copias).</li>
              <li>CURP (Original y 2 Copias).</li>
              <li>3 fotografías blanco y negro papel mate.</li>
            </ul>
          </div>
          <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm">
            <div class="h-10 w-10 rounded-full bg-slate-100 flex items-center justify-center text-[#0b2c65]">
              <i class="text-xl" data-lucide="check-circle"></i>
            </div>
            <h4 class="mt-3 font-semibold">Perfil de Ingreso</h4>
            <p class="mt-2 text-sm text-slate-600">Como aspirante de este curso deberás cubrir el siguiente perfil:</p>
            <ul class="mt-3 space-y-2 text-sm text-[#0b2c65]">
              <li>Tener 18 años.</li>
              <li>Haber concluido la Secundaria.</li>
            </ul>
          </div>
          <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm">
            <div class="h-10 w-10 rounded-full bg-slate-100 flex items-center justify-center text-[#0b2c65]">
              <i class="text-xl" data-lucide="graduation-cap"></i>
            </div>
            <h4 class="mt-3 font-semibold">Perfil de Egreso</h4>
            <p class="mt-2 text-sm text-slate-600">Al egresar concluir el curso, tendrás habilidades para:</p>
            <ul class="mt-3 space-y-2 text-sm text-[#0b2c65]">
              <li>Conocimientos generales Nivel Medio Superior.</li>
              <li>Conocimientos en las asignaturas de matemáticas, física y química.</li>
              <li>Conocimientos suficientes para presentar el examen CENEVAL de nivel medio superior.</li>
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
              <li>En su caso, si requieres cuentas con pase directo a nuestras Licenciaturas.</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="mt-12 rounded-2xl bg-[#072838] text-white text-center px-6 py-12">
    <h2 class="text-3xl sm:text-4xl font-semibold tracking-wide">Horarios</h2>
    <div class="mt-6 h-px w-full bg-white/30"></div>
    <p class="mt-8 text-2xl sm:text-3xl font-semibold">Sábados</p>
    <p class="mt-4 text-xl font-semibold">8 AM - 2 PM</p>
  </section>

  <section class="mt-12">
    <div class="max-w-3xl mx-auto">
      <h2 class="text-center text-2xl sm:text-3xl font-semibold text-[#0b2c65]">Preguntas frecuentes</h2>
      <div class="mt-6 space-y-3">
        <details class="rounded-lg border border-slate-200 bg-white px-4 py-3">
          <summary class="font-semibold cursor-pointer">¿Cuáles son los objetivos del Curso Colbach?</summary>
          <p class="mt-2 text-slate-600 text-sm">Logra tus objetivos realizando el examen Colbach.</p>
          <ul class="mt-2 space-y-1 text-sm text-slate-600">
            <li>Acreditación del nivel medio superior.</li>
            <li>Obtención del certificado de preparatoria.</li>
            <li>Posibilidad de comenzar los estudios en el nivel superior.</li>
            <li>Mayor oportunidad de empleo en actividades operativas.</li>
          </ul>
        </details>
        <details class="rounded-lg border border-slate-200 bg-white px-4 py-3">
          <summary class="font-semibold cursor-pointer">¿En qué consiste el Curso Colbach?</summary>
          <p class="mt-2 text-slate-600 text-sm">Consiste en la enseñanza y reforzamiento de materias de las siguientes áreas:</p>
          <ul class="mt-2 space-y-1 text-sm text-slate-600">
            <li>Matemáticas.</li>
            <li>Ciencias Experimentales.</li>
            <li>Humanidades.</li>
            <li>Ciencias Sociales.</li>
            <li>Introducción al trabajo.</li>
            <li>Comunicación e inglés.</li>
          </ul>
        </details>
        <details class="rounded-lg border border-slate-200 bg-white px-4 py-3">
          <summary class="font-semibold cursor-pointer">¿Cuánto dura el Curso Colbach?</summary>
          <p class="mt-2 text-slate-600 text-sm">El Curso Colbach es un curso intensivo disponible los sábados y tiene una duración de 6 horas, de 8:00 am hasta las 14:00 horas.</p>
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
