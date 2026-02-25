<?php
$title = 'Licenciatura en Innovación Turística y Gastronómica | UNEG';
$active = 'oferta';
$bodyClass = 'bg-slate-50 page-gray';
require __DIR__ . '/../partials/header.php';
?>

<div class="-mx-6 bg-slate-50">
<main class="max-w-7xl mx-auto px-4 py-10">
<section class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
    <img src="<?php echo $assetBase; ?>/imgs/licenciaturas/innovacion-turistica-y-gastronomica/hero-innovacion-turistica-gastronomica.png" alt="Innovación Turística y Gastronómica" class="block w-full h-auto" loading="eager">
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
    <h1 class="text-2xl sm:text-3xl font-semibold text-[#0b2c65]">¿Licenciatura en Turismo y Gastronomía? Conoce nuestra Licenciatura en Innovación Turística y Gastronómica</h1>
    <p class="mt-2 text-slate-600">
      Si estás buscando una universidad de turismo en donde explorar nuevas oportunidades para influir en esta actividad económica tan interesante y satisfactoria, conoce más sobre nuestra Licenciatura en Innovación Turística y Gastronómica. Deja que las ideas fluyan para crear nuevos caminos más allá de una Licenciatura en Turismo y Gastronomía.
    </p>
  </section>

  <section class="mt-10 grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
    <div class="text-center lg:text-left">
      <h2 class="text-2xl sm:text-3xl font-semibold text-[#0b2c65]">
        Conocimiento y comprensión de las actividades turísticas nacionales e internacionales identificando su impacto en el ámbito económico, social y cultural tomando en cuenta la sustentabilidad ambiental.
      </h2>
    </div>
    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
      <h3 class="text-xl font-semibold text-[#0b2c65] text-center">Inscríbete Ahora</h3>
      <?php if (isset($_GET['error'])): ?>
        <div class="mt-4 rounded-lg border border-rose-200 bg-rose-50 px-4 py-3 text-sm text-rose-800">
          No se pudo enviar tu informacion. Revisa los campos e intentalo de nuevo.
        </div>
      <?php endif; ?>
      <form class="mt-6 grid grid-cols-1 sm:grid-cols-2 gap-4 text-sm" method="post" action="<?php echo $base; ?>/api/forms/licenciaturas-innovacion-turistica-y-gastronomica" autocomplete="on">
        <input class="w-full rounded-md border border-slate-300 px-3 py-2 sm:col-span-2 col-span-1" name="full_name" placeholder="Nombre completo*" type="text" required />
        <input class="w-full rounded-md border border-slate-300 px-3 py-2" name="email" placeholder="Correo Electrónico*" type="email" required />
        <input class="w-full rounded-md border border-slate-300 px-3 py-2" name="phone" placeholder="Teléfono*" type="tel" required />
        <input type="hidden" name="interest" value="Licenciatura en Innovación Turística y Gastronómica" />
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
      <div class="bg-gradient-to-r from-[#0092AF] via-[#0092AF] to-[#0092AF] text-white">
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
            <a href="<?php echo $assetBase; ?>/assets/planes-de-estudio/UNEG_PLAN_DE_ESTUDIOS_TURISMO.pdf" target="_blank" rel="noopener noreferrer" class="mt-1 inline-flex items-center gap-2 text-sm font-semibold text-white/90 underline-offset-4 transition hover:text-white hover:underline focus:outline-none focus-visible:ring-2 focus-visible:ring-white/80">Ver plan <i class="ri-external-link-line text-base" aria-hidden="true"></i></a>
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
              <li>Esta Licenciatura responde a las necesidades educativas, sociales, políticas, económicas, ecológicas y laborales que den respuesta al campo en el que se va a desempeñar el profesionista de manera individual y profesional, logrando así brindar una formación oportuna de acuerdo a las características requeridas en un mundo globalizado donde se puedan desarrollar tanto en lo administrativo como en la parte operativa.</li>
            </ul>
          </div>

          <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm">
            <div class="h-10 w-10 rounded-full bg-slate-100 flex items-center justify-center text-[#0b2c65]">
              <i class="ri-graduation-cap-line text-xl"></i>
            </div>
            <h4 class="mt-3 font-semibold">Perfil de egreso</h4>
            <p class="mt-2 text-sm text-slate-600">Al egresar de esta Licenciatura, tendrás habilidades para:</p>
            <ul class="mt-3 space-y-2 text-sm text-[#0b2c65]">
              <li>Conocer y comprender la evolución, comportamiento y prospectiva de la actividad turística en el escenario nacional e internacional a efecto de analizar el impacto que refleje en el ámbito económico, social, cultural, gastronómico y ecológico.</li>
              <li>Aplicar los elementos cuantitativos en la operación de empresas del sector.</li>
              <li>Conocer el manejo y operación de las empresas del sector en sus diferentes modalidades.</li>
            </ul>
          </div>

          <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm">
            <div class="h-10 w-10 rounded-full bg-slate-100 flex items-center justify-center text-[#0b2c65]">
              <i class="ri-briefcase-4-line text-xl"></i>
            </div>
            <h4 class="mt-3 font-semibold">Campo de Trabajo</h4>
            <p class="mt-2 text-sm text-slate-600">Profesionalmente te desarrollarás en:</p>
            <ul class="mt-3 space-y-2 text-sm text-[#0b2c65]">
              <li>Sector público o privado en el área de turismo.</li>
              <li>Gestión de negocios.</li>
              <li>Relaciones públicas de negocios nacionales e internacionales.</li>
              <li>Organizaciones financieras.</li>
              <li>Planeación estratégica.</li>
              <li>Administración de negocios turísticos.</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="mt-12">
    <h2 class="text-center text-2xl sm:text-3xl font-semibold text-[#0b2c65]">Plan de Estudios Licenciatura en Innovación Turística y Gastronómica</h2>
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
          <li>Administración Contemporánea</li>
          <li>Cultura Aplicada en los Negocios</li>
          <li>Tecnologías de la Información y la Comunicación</li>
          <li>Introducción a la Gastronomía</li>
          <li>Análisis del Sector Turístico</li>
          <li>Lengua Extranjera I (Inglés)</li>
        </ul>
        <ul class="sem-panel hidden list-disc list-inside space-y-2 text-slate-600" data-sem-panel="s2">
          <li>Habilidades Numéricas</li>
          <li>Responsabilidad Social</li>
          <li>Comunicación Directiva</li>
          <li>Informática para Negocios</li>
          <li>Manejo Higiénico y Seguridad Alimentaria</li>
          <li>Destinos y Productos Turísticos de México I</li>
          <li>Lengua Extranjera II (Inglés)</li>
        </ul>
        <ul class="sem-panel hidden list-disc list-inside space-y-2 text-slate-600" data-sem-panel="s3">
          <li>Fundamentos de Mercadotecnia</li>
          <li>Comunicación y Liderazgo</li>
          <li>Capital Humano</li>
          <li>Infraestructura y Gestión Hotelera</li>
          <li>Cocina Francesa</li>
          <li>Destinos y Productos Turísticos de México II</li>
          <li>Lengua Extranjera III (Inglés)</li>
        </ul>
        <ul class="sem-panel hidden list-disc list-inside space-y-2 text-slate-600" data-sem-panel="s4">
          <li>Probabilidad y Estadística Aplicada a Negocios</li>
          <li>Mercadotecnia Aplicada a la Industria Turística y Gastronómica</li>
          <li>Responsabilidad Social y Desarrollo Sostenible</li>
          <li>Administración del Tiempo Libre</li>
          <li>Legislación y Regulación Turística</li>
          <li>Composición de los Alimentos</li>
          <li>Lengua Extranjera IV (Inglés)</li>
        </ul>
        <ul class="sem-panel hidden list-disc list-inside space-y-2 text-slate-600" data-sem-panel="s5">
          <li>Creatividad e Innovación Empresarial</li>
          <li>Finanzas Internacionales</li>
          <li>Ecología y Turismo Alternativo</li>
          <li>Administración de la División de Habitaciones</li>
          <li>Aporte Nutricional</li>
          <li>Destinos y Productos Turísticos del Mundo I</li>
          <li>Lengua Extranjera V (Inglés)</li>
        </ul>
        <ul class="sem-panel hidden list-disc list-inside space-y-2 text-slate-600" data-sem-panel="s6">
          <li>Costos Aplicados a la Hotelería y Gastronomía</li>
          <li>Gestión Ambiental para el Turismo Alternativo</li>
          <li>Repostería, Panadería y Decoración</li>
          <li>Destinos y Productos Turísticos del Mundo II</li>
          <li>Sistemas de Transportación Turística</li>
          <li>Planeación y Logística de Eventos</li>
          <li>Lengua Extranjera VI (Inglés)</li>
        </ul>
        <ul class="sem-panel hidden list-disc list-inside space-y-2 text-slate-600" data-sem-panel="s7">
          <li>Informática Aplicada al Turismo</li>
          <li>Mercadotecnia en Medios Electrónicos</li>
          <li>Cocina Mexicana</li>
          <li>Administración de Agencias de Viajes</li>
          <li>Planeación y Evaluación de Destinos Turísticos</li>
          <li>Simulador de Negocios de Hotelería, Gastronomía y Turismo</li>
          <li>Lengua Extranjera VII (Inglés)</li>
        </ul>
        <ul class="sem-panel hidden list-disc list-inside space-y-2 text-slate-600" data-sem-panel="s8">
          <li>Dirección y Administración de Ventas</li>
          <li>Ética para Negocios</li>
          <li>Comercio Internacional de Servicios Turísticos</li>
          <li>Cocina Italiana y Española</li>
          <li>Turismo de Salud, Incluyente y para la Tercera Edad</li>
          <li>Diagnóstico y Consultoría en Establecimientos de Hospitalidad y Gastronomía</li>
          <li>Lengua Extranjera VIII (Inglés)</li>
        </ul>
        <ul class="sem-panel hidden list-disc list-inside space-y-2 text-slate-600" data-sem-panel="s9">
          <li>Gestión de Servicio al Cliente</li>
          <li>Práctica de Integración</li>
          <li>Taller de Gestión de Negocios</li>
          <li>Emprendimiento Empresarial e Incubadora de Negocios</li>
          <li>Relación México, Europa y el Pacífico</li>
          <li>Coctelería, Enología y Clasificación de Vinos</li>
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
          <summary class="font-semibold cursor-pointer">¿En qué consiste la carrera de Turismo?</summary>
          <p class="mt-2 text-slate-600 text-sm">
            La carrera de turismo en la Universidad de Negocios ISEC tiene múltiples enfoques, el gastronómico, cultural, territorial, ecológico y sustentable, de la salud y sobre todo, cada enfoque se imparte con una perspectiva ética.
          </p>
          <p class="mt-2 text-slate-600 text-sm">El egresado en turismo adquiere las siguientes competencias:</p>
          <ul class="mt-2 space-y-1 text-sm text-slate-600">
            <li>Conocer cada cambio, desarrollo y comportamiento del turismo nacional e internacional.</li>
            <li>Aplicar los elementos cuantitativos en la operación de empresas de este sector.</li>
            <li>Conocer la gestión de las empresas de este sector en sus diferentes modalidades.</li>
            <li>Efectuar estrategias para proyectos turísticos, analizando el entorno económico, territorial, regional, social y ambiental.</li>
            <li>Crear conceptos creativos que generen negocio en esta industria, contribuyendo a la sustentabilidad ambiental.</li>
          </ul>
          <p class="mt-2 text-slate-600 text-sm">
            El estudiante de turismo refuerza diversas aptitudes que le permiten insertarse en gran diversidad de ambientes laborales.
          </p>
        </details>

        <details class="rounded-lg border border-slate-200 bg-white px-4 py-3">
          <summary class="font-semibold cursor-pointer">¿Para qué sirve la carrera de turismo?</summary>
          <p class="mt-2 text-slate-600 text-sm">
            La carrera de turismo es sumamente importante en México, ya que este es uno de los sectores económicos que más contribuye al PIB del país.
          </p>
          <p class="mt-2 text-slate-600 text-sm">
            Además, es fundamental que se estudie de manera profesional para potenciarlo, esto permite generar nuevos debates sobre cómo conducir los proyectos turísticos, salvaguardando la identidad, la cultura y la seguridad de las personas que habitan las zonas más emblemáticas del país y procurando la sustentabilidad ambiental en cada proyecto.
          </p>
          <p class="mt-2 text-slate-600 text-sm">
            Esta perspectiva profesional también le permite a los egresados poder formar parte del sector público o el privado.
          </p>
        </details>

        <details class="rounded-lg border border-slate-200 bg-white px-4 py-3">
          <summary class="font-semibold cursor-pointer">¿Cuánto dura la carrera de turismo?</summary>
          <p class="mt-2 text-slate-600 text-sm">
            Su duración es de 9 cuatrimestres con 7 materias en cada uno. La licenciatura de turismo puedes estudiarla en dos turnos.
          </p>
          <p class="mt-2 text-slate-600 text-sm">Turno matutino: 7:00 a 13:00</p>
          <p class="mt-2 text-slate-600 text-sm">Turno vespertino: 17:00 a 22:00</p>
          <p class="mt-2 text-slate-600 text-sm">
            Para inscribirte en ISEC, solo necesitas tu acta de nacimiento, certificado de estudios del nivel medio superior, 2 fotografías, tu CURP y tu comprobante de domicilio. Todos los detalles al respecto los hallas en la página de la licenciatura en Innovación Turística y Gastronómica.
          </p>
        </details>

        <details class="rounded-lg border border-slate-200 bg-white px-4 py-3">
          <summary class="font-semibold cursor-pointer">Ramas del turismo</summary>
          <p class="mt-2 text-slate-600 text-sm">
            Las ramas del turismo (que a su vez tienen sub-ramas) son diversas, si no las conoces todas, descúbrelas y elige cuál es la que más te atrae.
          </p>
          <ul class="mt-2 space-y-1 text-sm text-slate-600">
            <li>Turismo de naturaleza: turismo de aventura, turismo rural, ecoturismo.</li>
            <li>Turismo cultural: turismo religioso.</li>
            <li>Turismo de reuniones: turismo de negocios.</li>
            <li>Turismo gastronómico: enoturismo.</li>
            <li>Turismo de romance.</li>
            <li>Turismo de salud.</li>
          </ul>
          <p class="mt-2 text-slate-600 text-sm">
            Conocer las ramas del turismo te permitirá poder elegir aquella en la que quieres enfocar tu vida profesional o en cuáles deseas experimentar en caso de que te genere interés más de una.
          </p>
        </details>

        <details class="rounded-lg border border-slate-200 bg-white px-4 py-3">
          <summary class="font-semibold cursor-pointer">¿Qué hace un licenciado en turismo?</summary>
          <p class="mt-2 text-slate-600 text-sm">
            Un licenciado en turismo desarrolla las aptitudes necesarias para captar las principales implicaciones que tiene esta actividad, en el aspecto económico, cultural, social, político, jurídico, etcétera.
          </p>
          <p class="mt-2 text-slate-600 text-sm">
            Asimismo, gracias a su perfil que también está enfocado en la administración y dirección de proyectos, el licenciado en turismo puede desarrollar y encabezar estas planificaciones, adhiriéndose a las preocupaciones actuales, siendo socialmente responsable mientras potencia a este importante sector.
          </p>
          <p class="mt-2 text-slate-600 text-sm">
            Si quieres conocer más acerca de ISEC y el programa de esta licenciatura, no olvides ingresar al sitio web y descubrir todo lo que la universidad tiene para ti.
          </p>
        </details>

        <details class="rounded-lg border border-slate-200 bg-white px-4 py-3">
          <summary class="font-semibold cursor-pointer">¿Cuánto gana un licenciado en turismo?</summary>
          <p class="mt-2 text-slate-600 text-sm">
            El promedio salarial de quienes ejercen esta profesión en México, es de 9,000 a 15,000 pesos mensuales, el más alto.
          </p>
          <p class="mt-2 text-slate-600 text-sm">
            No obstante, este solo es un promedio, recuerda que existen otros casos en los que se puede llegar a aumentar la percepción salarial, por ejemplo, si ocupas algún puesto clave en el sector público o privado, en caso de que domines más de un idioma, etcétera.
          </p>
          <p class="mt-2 text-slate-600 text-sm">
            Tus aptitudes son un factor de valor que aumentan las posibilidades de que recibas mejores ingresos en el mercado laboral.
          </p>
        </details>
      </div>      </div>
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
