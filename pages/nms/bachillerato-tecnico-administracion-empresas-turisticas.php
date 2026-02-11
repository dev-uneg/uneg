<?php
$title = 'Bachillerato Técnico en Administración de Empresas Turísticas | UNEG';
$active = 'oferta';
$bodyClass = 'bg-slate-50 page-gray';
require __DIR__ . '/../partials/header.php';
?>

<div class="-mx-6 bg-slate-50">
<main class="max-w-7xl mx-auto px-4 py-10">
  <section class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
    <img src="<?php echo $assetBase; ?>/imgs/nms/cch/hero.png" alt="Bachillerato en línea - Modalidad en línea" class="block w-full h-auto" loading="eager">
    <div class="bg-[#0b2c65] text-white">
      <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 px-5 py-4 text-sm">
        <div class="flex items-center gap-3">
          <span class="inline-flex h-9 w-9 items-center justify-center rounded-full bg-white/15">
            <i class="ri-school-line text-lg"></i>
          </span>
          <div>
            <p class="font-semibold">Modalidad en línea</p>
            <p class="text-white/70 text-xs">Bachillerato en Línea</p>
          </div>
        </div>
        <div class="flex items-center gap-3">
          <span class="inline-flex h-9 w-9 items-center justify-center rounded-full bg-white/15">
            <i class="ri-time-line text-lg"></i>
          </span>
          <div>
            <p class="font-semibold">24 HRS</p>
            <p class="text-white/70 text-xs">Lunes a domingo</p>
          </div>
        </div>
        <div class="flex items-center gap-3">
          <span class="inline-flex h-9 w-9 items-center justify-center rounded-full bg-white/15">
            <i class="ri-medal-line text-lg"></i>
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
    <h2 class="text-2xl sm:text-3xl font-semibold text-[#0b2c65]">Inscríbete al Bachillerato Técnico en Administración de Empresas Turísticas</h2>
    <p class="mt-3 text-slate-600">
      Si te interesa estudiar un Bachillerato en Turismo, el plan de estudios de nuestro Bachillerato Técnico en Administración de Empresas Turísticas es para ti.
    </p>
  </section>

  <section class="mt-10 grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
    <div>
      <h3 class="text-2xl sm:text-3xl font-semibold text-[#0b2c65]">Llena el formulario y nos contactaremos contigo para brindarte más detalles sobre el Bachillerato Técnico en Administración de Empresas Turísticas.</h3>
    </div>
    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
      <h3 class="text-xl font-semibold text-[#0b2c65] text-center">Inscríbete Ahora</h3>
      <form class="mt-6 grid grid-cols-1 sm:grid-cols-2 gap-4 text-sm">
        <input class="w-full rounded-md border border-slate-300 px-3 py-2" placeholder="Nombre" type="text" />
        <input class="w-full rounded-md border border-slate-300 px-3 py-2" placeholder="Apellido Paterno" type="text" />
        <input class="w-full rounded-md border border-slate-300 px-3 py-2" placeholder="Correo Electrónico" type="email" />
        <input class="w-full rounded-md border border-slate-300 px-3 py-2" placeholder="Teléfono" type="tel" />
        <label class="col-span-1 sm:col-span-2 text-xs text-slate-500 flex items-center gap-2">
          <input type="checkbox" class="h-4 w-4" />
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
            <p class="mt-2 text-sm text-slate-600">Para cursar este bachillerato deberás contar con los siguientes documentos:</p>
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
              <i class="ri-checkbox-circle-line text-xl"></i>
            </div>
            <h4 class="mt-3 font-semibold">Perfil de Ingreso</h4>
            <p class="mt-2 text-sm text-slate-600">Como aspirante al bachillerato, el alumno deberá contar con el siguiente perfil:</p>
            <ul class="mt-3 space-y-2 text-sm text-[#0b2c65]">
              <li>Vocación para el estudio de la administración y la negociación.</li>
              <li>Adaptabilidad al cambio.</li>
              <li>Contar con un elevado espíritu de servicio.</li>
              <li>Tener gusto y vocación por los idiomas.</li>
              <li>Disposición para comprender sobre otras culturas a nivel nacional e internacional.</li>
            </ul>
          </div>
          <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm">
            <div class="h-10 w-10 rounded-full bg-slate-100 flex items-center justify-center text-[#0b2c65]">
              <i class="ri-graduation-cap-line text-xl"></i>
            </div>
            <h4 class="mt-3 font-semibold">Perfil de Egreso</h4>
            <p class="mt-2 text-sm text-slate-600">
              El egresado de la carrera Técnica es un profesional de nivel medio superior que está en condiciones para integrarse al ámbito laboral en cualquier empresa del sector turístico.
              Después de haber concluido sus estudios, habrá desarrollado las siguientes aptitudes:
            </p>
            <ul class="mt-3 space-y-2 text-sm text-[#0b2c65]">
              <li>Comprenderá la actividad turística en sus principales ramas y podrá analizar el efecto que tiene en los ámbitos económico, político y social.</li>
              <li>Conocerá los procesos administrativos y operará los sistemas apropiados para las empresas del sector turístico a los que preste sus servicios.</li>
            </ul>
          </div>
          <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm">
            <div class="h-10 w-10 rounded-full bg-slate-100 flex items-center justify-center text-[#0b2c65]">
              <i class="ri-user-line text-xl"></i>
            </div>
            <h4 class="mt-3 font-semibold">Campo de Trabajo</h4>
            <p class="mt-2 text-sm text-slate-600">Profesionalmente te desarrollarás en:</p>
            <ul class="mt-3 space-y-2 text-sm text-[#0b2c65]">
              <li>Actividades en el área de turismo.</li>
              <li>Administración técnica de negocios turísticos.</li>
              <li>Oportunidad de continuar con tus estudios de Nivel Superior.</li>
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
          src="https://www.youtube.com/embed/SMz7Y1H7zgc"
          title="Bachillerato Técnico en Administración de Empresas Turísticas"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          allowfullscreen
        ></iframe>
      </div>
    </div>
  </section>

  <section class="mt-12 rounded-2xl bg-[#072838] text-white text-center px-6 py-12">
    <h2 class="text-3xl sm:text-4xl font-semibold tracking-wide">Horarios</h2>
    <div class="mt-6 h-px w-full bg-white/30"></div>
    <p class="mt-6 text-2xl sm:text-3xl font-semibold">Plan Semestral</p>
    <p class="mt-4 text-xl font-semibold">Lunes a Viernes</p>
    <p class="mt-2 text-lg">Matutino:</p>
    <p class="mt-1 text-lg">7:00 a 15:00 Hrs</p>
  </section>

  <section class="mt-12">
    <div class="max-w-3xl mx-auto">
      <h2 class="text-center text-2xl sm:text-3xl font-semibold text-[#0b2c65]">Preguntas frecuentes</h2>
      <div class="mt-6 space-y-3">
        <details class="rounded-lg border border-slate-200 bg-white px-4 py-3">
          <summary class="font-semibold cursor-pointer">¿Por qué estudiar el Bachillerato Técnico en Turismo en ISEC?</summary>
          <p class="mt-2 text-slate-600 text-sm">
            El sector turístico es uno de los más consolidados en México, por ello la Universidad de Negocios ISEC brinda esta propuesta educativa.
            Obtén el documento que avala que concluiste el nivel medio superior, especialízate en el sector turístico y amplía tus posibilidades gracias a la adquisición de conocimientos en este sector.
          </p>
        </details>
        <details class="rounded-lg border border-slate-200 bg-white px-4 py-3">
          <summary class="font-semibold cursor-pointer">¿Qué es un bachillerato técnico?</summary>
          <p class="mt-2 text-slate-600 text-sm">
            El estudiante del bachillerato técnico recibe un enfoque de enseñanza que lo prepara para ingresar de manera directa al mercado laboral en un campo específico, ya sea administración, informática, turismo, etcétera.
          </p>
          <p class="mt-2 text-slate-600 text-sm">
            Asimismo, la persona que recibe este tipo de formación puede acceder a estudios superiores, pero con una aproximación más aterrizada en el sector de su interés.
          </p>
        </details>
        <details class="rounded-lg border border-slate-200 bg-white px-4 py-3">
          <summary class="font-semibold cursor-pointer">¿Qué es Administración de Empresas Turísticas?</summary>
          <p class="mt-2 text-slate-600 text-sm">
            La administración de empresas turísticas es una profesión a través de la que se estudia la administración, gestión y servicios de las empresas turísticas y hoteleras.
          </p>
          <p class="mt-2 text-slate-600 text-sm">
            A través de este tipo de estudio se logra describir y analizar el entorno socioeconómico que desempeña la actividad turística en el país.
          </p>
        </details>
        <details class="rounded-lg border border-slate-200 bg-white px-4 py-3">
          <summary class="font-semibold cursor-pointer">¿Cuánto dura el Bachillerato en Administración de Empresas Turísticas?</summary>
          <p class="mt-2 text-slate-600 text-sm">
            De acuerdo al plan de estudios, este nivel tiene una duración de 6 semestres, es decir, 3 años.
          </p>
          <p class="mt-2 text-slate-600 text-sm">
            Cada semestre está constituido por 9 materias del área de humanidades, ciencias y ciencias sociales. El plan semestral cubre un solo horario: lunes a viernes de 7:00 a 15:00 horas.
          </p>
        </details>
        <details class="rounded-lg border border-slate-200 bg-white px-4 py-3">
          <summary class="font-semibold cursor-pointer">¿Qué hace un Técnico en Administración de Empresas Turísticas?</summary>
          <p class="mt-2 text-slate-600 text-sm">
            El Técnico en Administración de Empresas Turísticas, egresado de la Universidad de Negocios ISEC, tiene la facultad de aplicar procedimientos en las operaciones de hoteles y restaurantes (con base en estándares de calidad), para la atención y servicio a huéspedes y clientes.
          </p>
          <p class="mt-2 text-slate-600 text-sm">
            Asimismo, tendrá el conocimiento fundamental en caso de que el egresado también quiera iniciar su emprendimiento en este sector.
          </p>
          <p class="mt-2 text-slate-600 text-sm">
            Sus habilidades de planificación y gestión estarán enfocadas para desempeñarse tanto en el sector público como en el privado.
          </p>
        </details>
        <details class="rounded-lg border border-slate-200 bg-white px-4 py-3">
          <summary class="font-semibold cursor-pointer">¿Cuál es el sueldo de un Administrador en Empresas Turísticas?</summary>
          <p class="mt-2 text-slate-600 text-sm">
            El promedio salarial de los administradores de empresas turísticas es de $9,000 pesos mexicanos mensuales por una media de 46.1 horas trabajadas semanalmente, de acuerdo a los datos recabados en el portal oficial de México.
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
