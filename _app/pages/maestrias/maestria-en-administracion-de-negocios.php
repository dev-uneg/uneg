<?php
$title = 'Maestría en Administración de Negocios | UNEG';
$active = 'oferta';
$bodyClass = 'bg-slate-50 page-gray';
require __DIR__ . '/../partials/header.php';
?>

<div class="-mx-6 bg-slate-50">
<main class="max-w-7xl mx-auto px-4 py-10">
<section class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
    <img src="<?php echo $assetBase; ?>/_imgs/maestrias/administracion-de-negocios/hero.webp" alt="Maestría en Administración de Negocios" class="block w-full h-auto" loading="eager">
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
    <h1 class="text-2xl sm:text-3xl font-semibold text-[#0b2c65]">Maestría en Administración de Negocios | Desarrollo Empresarial</h1>
    <p class="mt-2 text-slate-600">
      En la Universidad de Negocios ISEC contamos con certificaciones que nos otorgan un alto grado profesional. Confía tus estudios a la Maestría en Administración de Negocios ¡Inscríbete hoy mismo!
    </p>
  </section>

  <section class="mt-10 grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
    <div class="text-center lg:text-left">
      <h2 class="text-2xl sm:text-3xl font-semibold text-[#0b2c65]">
        Objetivo General: Podrás desarrollar las habilidades para diagnosticar problemas y situaciones administrativas de manera estratégica. Serás capaz de proponer, diseñar y aplicar métodos, así como procedimientos eficaces para el logro de objetivos de la organización.
      </h2>
    </div>
    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
      <h3 class="text-xl font-semibold text-[#0b2c65] text-center">Inscríbete Ahora</h3>
      <?php if (isset($_GET['error'])): ?>
        <div class="mt-4 rounded-lg border border-rose-200 bg-rose-50 px-4 py-3 text-sm text-rose-800">
          No se pudo enviar tu informacion. Revisa los campos e intentalo de nuevo.
        </div>
      <?php endif; ?>
      <form class="mt-6 grid grid-cols-1 sm:grid-cols-2 gap-4 text-sm" method="post" action="<?php echo $base; ?>/api/forms/maestrias-maestria-en-administracion-de-negocios" autocomplete="on">
        <input class="w-full rounded-md border border-slate-300 px-3 py-2 sm:col-span-2 col-span-1" name="full_name" placeholder="Nombre completo*" type="text" required />
        <input class="w-full rounded-md border border-slate-300 px-3 py-2" name="email" placeholder="Correo Electrónico*" type="email" required />
        <input class="w-full rounded-md border border-slate-300 px-3 py-2" name="phone" placeholder="Teléfono*" type="tel" required />
        <input type="hidden" name="interest" value="Maestría en Administración de Negocios" />
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
      <div class="bg-gradient-to-r from-[#38ADFC] via-[#38ADFC] to-[#38ADFC] text-white">
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
            <a href="<?php echo $assetBase; ?>/_assets/planes-de-estudio/ISEC-Adm-De-Negocios.pdf" target="_blank" rel="noopener noreferrer" class="mt-1 inline-flex items-center gap-2 text-sm font-semibold text-white/90 underline-offset-4 transition hover:text-white hover:underline focus:outline-none focus-visible:ring-2 focus-visible:ring-white/80">Ver plan <i class="text-base" data-lucide="external-link" aria-hidden="true"></i></a>
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
    <div class="relative w-full overflow-hidden rounded-2xl border border-slate-200 bg-slate-100 shadow-sm">
      <div class="aspect-video w-full">
        <iframe
          class="h-full w-full"
          src="https://www.youtube.com/embed/1oqV9nT451M"
          title="Maestría en Administración de Negocios"
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
          <summary class="font-semibold cursor-pointer">¿Qué es la Administración de Negocios?</summary>
          <p class="mt-2 text-slate-600 text-sm">
            La Administración de Negocios es la disciplina que se encarga de la gestión eficiente de los recursos de una empresa u organización, con el objetivo de alcanzar sus metas y maximizar su valor. Este campo abarca desde la planificación y organización hasta la dirección y control de las operaciones empresariales.
          </p>
          <p class="mt-2 text-slate-600 text-sm">
            De igual manera, la Administración de Negocios se fundamenta en estas áreas con el fin de garantizar el éxito de la empresa en un entorno competitivo:
          </p>
          <ul class="mt-2 space-y-1 text-sm text-slate-600">
            <li>Economía.</li>
            <li>Finanzas.</li>
            <li>Marketing.</li>
            <li>Recursos humanos.</li>
            <li>Operaciones.</li>
          </ul>
        </details>

        <details class="rounded-lg border border-slate-200 bg-white px-4 py-3">
          <summary class="font-semibold cursor-pointer">¿Cuál es la importancia de estudiar Maestría en Administración de Negocios?</summary>
          <p class="mt-2 text-slate-600 text-sm">
            Una maestría es más que un título avanzado; es una herramienta poderosa para transformar tu carrera. La importancia de este posgrado radica en varios aspectos:
          </p>
          <p class="mt-2 text-slate-600 text-sm font-semibold">Competitividad en el mercado laboral</p>
          <p class="mt-2 text-slate-600 text-sm">
            Con una Maestría en Administración de Negocios, destacas frente a otros candidatos en un mercado laboral cada vez más saturado. Las empresas valoran enormemente el conocimiento especializado y la capacidad de liderazgo que los graduados pueden ofrecer.
          </p>
          <p class="mt-2 text-slate-600 text-sm font-semibold">Desarrollo de habilidades críticas</p>
          <p class="mt-2 text-slate-600 text-sm">
            La maestría no solo te proporciona conocimientos técnicos, sino que también fomenta habilidades blandas esenciales como la comunicación, negociación y toma de decisiones bajo presión.
          </p>
          <p class="mt-2 text-slate-600 text-sm font-semibold">Red de contactos profesionales</p>
          <p class="mt-2 text-slate-600 text-sm">
            Durante la maestría, tendrás la oportunidad de interactuar con profesionales de diversos sectores, lo que puede abrirte puertas a nuevas oportunidades de negocio o empleo.
          </p>
        </details>

        <details class="rounded-lg border border-slate-200 bg-white px-4 py-3">
          <summary class="font-semibold cursor-pointer">¿Qué aprenderás en la Maestría en Administración de Negocios?</summary>
          <p class="mt-2 text-slate-600 text-sm">
            El currículum de un maestro en Administración de Negocios egresado de la Universidad de Negocios ISEC está diseñado para ofrecer una comprensión profunda y práctica de cómo funcionan las empresas y cómo dirigirlas hacia el éxito. Algunas de las áreas clave que aprenderás incluyen:
          </p>
          <p class="mt-2 text-slate-600 text-sm font-semibold">Estrategia empresarial</p>
          <p class="mt-2 text-slate-600 text-sm">
            Aprenderás a desarrollar, implementar y evaluar estrategias que permitan a las empresas crecer y mantenerse competitivas.
          </p>
          <p class="mt-2 text-slate-600 text-sm font-semibold">Finanzas y contabilidad</p>
          <p class="mt-2 text-slate-600 text-sm">
            Obtendrás conocimientos avanzados sobre la gestión financiera, desde la interpretación de estados financieros hasta la toma de decisiones de inversión.
          </p>
          <p class="mt-2 text-slate-600 text-sm font-semibold">Marketing</p>
          <p class="mt-2 text-slate-600 text-sm">
            Descubrirás cómo diseñar y ejecutar campañas de marketing efectivas, enfocadas en el cliente y basadas en datos.
          </p>
          <p class="mt-2 text-slate-600 text-sm font-semibold">Liderazgo y gestión de equipos</p>
          <p class="mt-2 text-slate-600 text-sm">
            Desarrollarás habilidades para liderar equipos, motivar a los empleados y gestionar el cambio organizacional.
          </p>
          <p class="mt-2 text-slate-600 text-sm font-semibold">Innovación y emprendimiento</p>
          <p class="mt-2 text-slate-600 text-sm">
            Muchos programas de esta maestría incluyen módulos sobre cómo identificar oportunidades de negocio y lanzar nuevas empresas o productos innovadores.
          </p>
        </details>

        <details class="rounded-lg border border-slate-200 bg-white px-4 py-3">
          <summary class="font-semibold cursor-pointer">¿Cuánto dura la Maestría en Administración de Negocios?</summary>
          <p class="mt-2 text-slate-600 text-sm">Solo 4 cuatrimestres.</p>
        </details>

        <details class="rounded-lg border border-slate-200 bg-white px-4 py-3">
          <summary class="font-semibold cursor-pointer">¿Cuáles son las ventajas de estudiar la Maestría en Administración de Negocios?</summary>
          <p class="mt-2 text-slate-600 text-sm">Lo más sobresaliente de esta especialización es:</p>
          <p class="mt-2 text-slate-600 text-sm font-semibold">Incremento salarial</p>
          <p class="mt-2 text-slate-600 text-sm">
            Una de las ventajas más directas de obtener un posgrado es el potencial de un mayor salario. Los graduados suelen tener acceso a puestos mejor remunerados.
          </p>
          <p class="mt-2 text-slate-600 text-sm font-semibold">Oportunidades globales</p>
          <p class="mt-2 text-slate-600 text-sm">
            Un profesional en la materia te prepara para roles internacionales, dado que muchas de las empresas buscan expandirse globalmente y necesitan líderes con una visión global.
          </p>
          <p class="mt-2 text-slate-600 text-sm font-semibold">Cambio de carrera</p>
          <p class="mt-2 text-slate-600 text-sm">
            Si estás buscando cambiar de industria o especialización, un maestro en Administración de Negocios puede ser el puente perfecto para hacer esa transición de manera exitosa.
          </p>
          <p class="mt-2 text-slate-600 text-sm font-semibold">Desarrollo personal</p>
          <p class="mt-2 text-slate-600 text-sm">
            Más allá del crecimiento profesional, un maestro en Administración de Negocios te desafía a nivel personal, mejorando tu confianza, pensamiento crítico y capacidad para tomar decisiones.
          </p>
          <p class="mt-2 text-slate-600 text-sm">
            En definitiva, este posgrado no solo mejora tus habilidades profesionales, sino que también te proporciona una visión estratégica y global muy importante dentro del entorno empresarial actual.
          </p>
          <p class="mt-2 text-slate-600 text-sm">
            Si quieres conocer más acerca de ISEC y su propuesta de plan de estudios, no dudes en ingresar al sitio web. ¡Te esperamos!
          </p>
        </details>
      </div>      </div>
    </div>
  </section>
</main>
</div>

<style>
  body.page-gray footer { margin-top: 0; }
</style>

<?php require __DIR__ . '/../partials/footer.php'; ?>
