<?php
$title = 'Maestría en Fiscal | UNEG';
$active = 'oferta';
$bodyClass = 'bg-slate-50 page-gray';
require __DIR__ . '/../partials/header.php';
?>

<div class="-mx-6 bg-slate-50">
<main class="max-w-7xl mx-auto px-4 py-10">
<section class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
  <img src="<?php echo $assetBase; ?>/imgs/maestrias/fiscal/hero.png" alt="Maestría en Fiscal" class="block w-full h-auto" loading="eager">
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
    <h1 class="text-2xl sm:text-3xl font-semibold text-[#0b2c65]">¿Buscas una Maestría en Fiscal? Conoce nuestra Maestría en Fiscal</h1>
    <p class="mt-2 text-slate-600">
      Si quieres estudiar una Maestría en Fiscal, en la Universidad de Negocios ISEC encontrarás la Maestría en Fiscal, la cual tiene como objetivo crear profesionales expertos que apliquen las leyes tributarias y solucionen problemas de la normatividad fiscal con gran destreza y en base a procedimientos establecidos por el Código Fiscal de la Federación.
    </p>
  </section>

  <section class="mt-10 grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
    <div class="text-center lg:text-left">
      <h2 class="text-2xl sm:text-3xl font-semibold text-[#0b2c65]">
        Objetivo General: Especialización profunda en el ámbito impositivo a través de aplicar efectiva y cumplidamente las disposiciones de la legislación fiscal, ejecutar funciones de administración, control y auditoría fiscal e interpretar, analizar y evaluar críticamente cualquier aspecto legal.
      </h2>
    </div>
    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
      <h3 class="text-xl font-semibold text-[#0b2c65] text-center">Inscríbete Ahora</h3>
      <form class="mt-6 grid grid-cols-1 sm:grid-cols-2 gap-4 text-sm" method="post" action="<?php echo $base; ?>/api/contacto" autocomplete="on">
        <input class="w-full rounded-md border border-slate-300 px-3 py-2 sm:col-span-2 col-span-1" name="full_name" placeholder="Nombre completo*" type="text" required />
        <input class="w-full rounded-md border border-slate-300 px-3 py-2" name="email" placeholder="Correo Electrónico*" type="email" required />
        <input class="w-full rounded-md border border-slate-300 px-3 py-2" name="phone" placeholder="Teléfono*" type="tel" required />
        <input type="hidden" name="interest" value="Maestría en Fiscal" />
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
      <div class="bg-gradient-to-r from-[#C27401] via-[#C27401] to-[#C27401] text-white">
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
              <li>Licenciados o pasantes de licenciatura preferentemente en las áreas administrativas contables y derecho.</li>
            </ul>
          </div>

          <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm">
            <div class="h-10 w-10 rounded-full bg-slate-100 flex items-center justify-center text-[#0b2c65]">
              <i class="ri-graduation-cap-line text-xl"></i>
            </div>
            <h4 class="mt-3 font-semibold">Perfil de egreso</h4>
            <p class="mt-2 text-sm text-slate-600">Al egresar de esta Maestría, tendrás habilidades para:</p>
            <ul class="mt-3 space-y-2 text-sm text-[#0b2c65]">
              <li>El egresado de Maestría en Fiscal será una persona transformadora por la educación, un individuo seguro de sí mismo, con plena convicción de la importancia de formación profesional.</li>
              <li>Obtendrá conocimientos sobre las leyes fiscales que fundamenten la correcta toma de decisiones en la empresa.</li>
              <li>Conocimiento de los regímenes que las personas físicas y morales pueden adoptar.</li>
              <li>Manejo en materia fiscal de la doble tributación con otros países.</li>
            </ul>
          </div>

          <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm">
            <div class="h-10 w-10 rounded-full bg-slate-100 flex items-center justify-center text-[#0b2c65]">
              <i class="ri-briefcase-4-line text-xl"></i>
            </div>
            <h4 class="mt-3 font-semibold">Campo de Trabajo</h4>
            <p class="mt-2 text-sm text-slate-600">Como maestro (a) en Fiscal está en posibilidad de laborar como:</p>
            <ul class="mt-3 space-y-2 text-sm text-[#0b2c65]">
              <li>Profesionista independiente.</li>
              <li>Asesor de empresas nacionales e internacionales.</li>
              <li>En el gobierno federal, estatal o municipal.</li>
              <li>En despachos y empresas de consultoría.</li>
              <li>En instituciones de educación superior.</li>
            </ul>
          </div>
        </div>
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
          <summary class="font-semibold cursor-pointer">¿Por qué estudiar la Maestría en Fiscal en ISEC?</summary>
          <p class="mt-2 text-slate-600 text-sm">
            La Maestría en Fiscal de ISEC es constantemente actualizada para que responda a las necesidades socioeconómicas en el aspecto privado y público. Asimismo, al ser un área del derecho sumamente relevante, está pensada e implementada con las asignaturas de mayor impacto, de esta forma los egresados agudizan su capacidad analítica, acuden a un medio de interlocución académica especializada y perfeccionan su conocimiento sobre los aspectos internacionales relacionados con este campo de conocimiento.
          </p>
        </details>

        <details class="rounded-lg border border-slate-200 bg-white px-4 py-3">
          <summary class="font-semibold cursor-pointer">¿Qué aspectos abarca el área fiscal?</summary>
          <p class="mt-2 text-slate-600 text-sm">
            El derecho fiscal forma parte del derecho público y de manera específica, del derecho financiero. Es decir, gracias a esta rama del derecho se pueden delegar los ingresos para cubrir el Presupuesto de Egresos de la Federación, de los estados de una república y los municipios, ateniéndose a las normas establecidas, sin negociarlas o pactar otras que impliquen su incumplimiento. Por otro lado, el área fiscal también se encarga de las facturas, contabilidad, cobros y pagos de clientes y proveedores.
          </p>
        </details>

        <details class="rounded-lg border border-slate-200 bg-white px-4 py-3">
          <summary class="font-semibold cursor-pointer">Importancia de estudiar la Maestría en Fiscal</summary>
          <p class="mt-2 text-slate-600 text-sm">
            Este posgrado está enfocado en brindarle a cada uno de los estudiantes, las capacidades necesarias para ser agentes clave y de cambio en favor de la sociedad, en materia de derecho fiscal, es por ello que la Universidad de Negocios ISEC ha creado este programa. A su vez, la importancia también yace en los aspectos sociales, ya que el egresado estará preparado para la toma de decisiones de alta complejidad, gracias a su perfil especializado.
          </p>
        </details>

        <details class="rounded-lg border border-slate-200 bg-white px-4 py-3">
          <summary class="font-semibold cursor-pointer">Qué aprenderás en la Maestría en Fiscal</summary>
          <p class="mt-2 text-slate-600 text-sm">
            La Maestría en Fiscal dota a los estudiantes del posgrado, con cada uno de los conocimientos indispensables para la óptima gestión del registro y análisis de la información fiscal, analizando y colaborando profesionalmente en la relación fisco-contribuyente en las personas morales. Asimismo, se aborda el contexto de las políticas y la legislación fiscal, la medición de impuestos, los procesos de auditoría y aspectos relevantes del comercio exterior.
          </p>
        </details>

        <details class="rounded-lg border border-slate-200 bg-white px-4 py-3">
          <summary class="font-semibold cursor-pointer">¿Cuánto dura la Maestría en Fiscal?</summary>
          <p class="mt-2 text-slate-600 text-sm">
            La Maestría en Fiscal tiene una duración de cuatro cuatrimestres. En cada uno de ellos se imparten cuatro materias, las cuales se imparten todos los sábados en un horario matutino que abarca desde las 7:00 am, hasta las 13:00 horas de la zona centro de México. Conoce más acerca de ISEC y comienza un nuevo futuro.
          </p>
        </details>

        <details class="rounded-lg border border-slate-200 bg-white px-4 py-3">
          <summary class="font-semibold cursor-pointer">Ventajas de estudiar la Maestría en Fiscal</summary>
          <p class="mt-2 text-slate-600 text-sm">Las ventajas de estudiar este posgrado son diversas, algunas de ellas son:</p>
          <ul class="mt-2 space-y-1 text-sm text-slate-600">
            <li>Mayor impacto en la sociedad.</li>
            <li>Especialización en un perfil altamente demandado.</li>
            <li>Amplias oportunidades en el campo laboral.</li>
            <li>Perfeccionamiento del análisis de riesgos.</li>
            <li>Agudización de las estrategias fiscales.</li>
            <li>Un profesional indispensable para las personas morales.</li>
            <li>Mayor aprendizaje sobre la defensa fiscal.</li>
          </ul>
          <p class="mt-2 text-slate-600 text-sm">
            Conoce el plan de estudios y adéntrate en tu próximo nivel de profesionalización.
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
