<?php
$title = 'Licenciatura en Mercadotecnia Estratégica | UNEG';
$active = 'oferta';
$bodyClass = 'bg-slate-50 page-gray';
require __DIR__ . '/../partials/header.php';
?>

<div class="-mx-6 bg-slate-50">
<main class="max-w-7xl mx-auto px-4 py-10">
<section class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
    <img src="<?php echo $assetBase; ?>/imgs/licenciaturas/mercadotecnia-estrategica/hero-mercadotecnia-estrategica.png" alt="Mercadotecnia Estratégica" class="block w-full h-auto" loading="eager">
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
    <h1 class="text-2xl sm:text-3xl font-semibold text-[#0b2c65]">Vuélvete un experto con nuestra Licenciatura en Mercadotecnia Estratégica</h1>
    <p class="mt-2 text-slate-600">
      Impacta en el mundo de los negocios con la mejor preparación que la Universidad de Negocios ISEC y el plan de estudios de la Licenciatura en Mercadotecnia Estratégica tiene para ti.
    </p>
  </section>

  <section class="mt-10 grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
    <div class="text-center lg:text-left">
      <h2 class="text-2xl sm:text-3xl font-semibold text-[#0b2c65]">
        Obtención de conocimientos especializados que generen estrategias puntuales para fomentar y mantener una comunicación efectiva que ayude a las organizaciones a impactar el mercado de productos y servicios.
      </h2>
    </div>
    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
      <h3 class="text-xl font-semibold text-[#0b2c65] text-center">Inscríbete Ahora</h3>
      <?php if (isset($_GET['error'])): ?>
        <div class="mt-4 rounded-lg border border-rose-200 bg-rose-50 px-4 py-3 text-sm text-rose-800">
          No se pudo enviar tu informacion. Revisa los campos e intentalo de nuevo.
        </div>
      <?php endif; ?>
      <form class="mt-6 grid grid-cols-1 sm:grid-cols-2 gap-4 text-sm" method="post" action="<?php echo $base; ?>/api/forms/licenciaturas-mercadotecnia-estrategica" autocomplete="on">
        <input class="w-full rounded-md border border-slate-300 px-3 py-2 sm:col-span-2 col-span-1" name="full_name" placeholder="Nombre completo*" type="text" required />
        <input class="w-full rounded-md border border-slate-300 px-3 py-2" name="email" placeholder="Correo Electrónico*" type="email" required />
        <input class="w-full rounded-md border border-slate-300 px-3 py-2" name="phone" placeholder="Teléfono*" type="tel" required />
        <input type="hidden" name="interest" value="Licenciatura en Mercadotecnia Estratégica" />
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
      <div class="bg-gradient-to-r from-[#6400E0] via-[#6400E0] to-[#6400E0] text-white">
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
            <a href="<?php echo $assetBase; ?>/assets/planes-de-estudio/UNEG_PLAN_DE_ESTUDIOS_MERCADOTECNIA.pdf" target="_blank" rel="noopener noreferrer" class="mt-1 inline-flex items-center gap-2 text-sm font-semibold text-white/90 underline-offset-4 transition hover:text-white hover:underline focus:outline-none focus-visible:ring-2 focus-visible:ring-white/80">Ver plan <i class="ri-external-link-line text-base" aria-hidden="true"></i></a>
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
              <li>Haber cubierto el nivel medio superior preferentemente en el área económico administrativa o bachillerato técnico.</li>
              <li>Conocimientos básicos en matemáticas, cultura de negocios y metodología de la investigación.</li>
              <li>Habilidades: empleo de herramientas tecnológicas y uso de las TIC´s para reforzar las habilidades profesionales, razonamiento lógico matemático, realizar varias tareas a la vez, liderazgo, toma de decisiones, trabajo colaborativo.</li>
            </ul>
          </div>

          <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm">
            <div class="h-10 w-10 rounded-full bg-slate-100 flex items-center justify-center text-[#0b2c65]">
              <i class="ri-graduation-cap-line text-xl"></i>
            </div>
            <h4 class="mt-3 font-semibold">Perfil de egreso</h4>
            <p class="mt-2 text-sm text-slate-600">Al egresar de esta Licenciatura, tendrás habilidades para:</p>
            <ul class="mt-3 space-y-2 text-sm text-[#0b2c65]">
              <li>Mantener una comunicación estratégica y presencia a la marca.</li>
              <li>Valorar la aceptación del producto o servicio en el mercado.</li>
              <li>Autoevaluar a la organización en los productos o servicios que ofrece y en cuanto al grado de aceptación que tiene.</li>
              <li>Mantener una política de relaciones públicas que ofrezca realce y presencia a la marca.</li>
              <li>Aprovechar el manejo de la tecnología en el uso de la Mercadotecnia Digital.</li>
            </ul>
          </div>

          <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm">
            <div class="h-10 w-10 rounded-full bg-slate-100 flex items-center justify-center text-[#0b2c65]">
              <i class="ri-briefcase-4-line text-xl"></i>
            </div>
            <h4 class="mt-3 font-semibold">Campo de Trabajo</h4>
            <p class="mt-2 text-sm text-slate-600">Profesionalmente te desarrollarás en:</p>
            <ul class="mt-3 space-y-2 text-sm text-[#0b2c65]">
              <li>El Sector Público o Privado de cualquier giro.</li>
              <li>Dirección Estratégica de Mercadotecnia.</li>
              <li>Emprendimientos de Nuevos Negocios.</li>
              <li>Comercialización de Productos.</li>
              <li>Tácticas de Punto de Venta.</li>
              <li>Puestos de: Consultor de Investigación de Mercados, Gerente de Marca en empresas multinacionales, Desarrollador de Campañas Publicitarias, entre otras.</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="mt-12">
    <h2 class="text-center text-2xl sm:text-3xl font-semibold text-[#0b2c65]">Plan de Estudios Licenciatura en Mercadotecnia Estratégica</h2>
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
          <li>Mercadotecnia Estratégica</li>
          <li>Informática para Negocios</li>
          <li>Contabilidad para Negocios</li>
          <li>Microeconomía</li>
          <li>Lengua Extranjera I (Inglés)</li>
        </ul>
        <ul class="sem-panel hidden list-disc list-inside space-y-2 text-slate-600" data-sem-panel="s2">
          <li>Matemáticas Financieras</li>
          <li>Análisis de la Publicidad</li>
          <li>Comunicación y Liderazgo</li>
          <li>Mercadotecnia Integral</li>
          <li>Cultura General</li>
          <li>Macroeconomía</li>
          <li>Lengua Extranjera II (Inglés)</li>
        </ul>
        <ul class="sem-panel hidden list-disc list-inside space-y-2 text-slate-600" data-sem-panel="s3">
          <li>Contabilidad de Costos</li>
          <li>Derecho Mercantil y Societario</li>
          <li>Comunicación Estratégica</li>
          <li>Inteligencia del Consumidor y Bases de Datos</li>
          <li>Mercadotecnia Industrial</li>
          <li>Creatividad e Innovación</li>
          <li>Lengua Extranjera III (Inglés)</li>
        </ul>
        <ul class="sem-panel hidden list-disc list-inside space-y-2 text-slate-600" data-sem-panel="s4">
          <li>Probabilidad y Estadística Aplicada a los Negocios</li>
          <li>Mercadotecnia de Servicios</li>
          <li>Derecho Corporativo</li>
          <li>Gestión de Nuevos Productos</li>
          <li>Investigación de Mercados</li>
          <li>Estrategias de Precio y Valor</li>
          <li>Lengua Extranjera IV (Inglés)</li>
        </ul>
        <ul class="sem-panel hidden list-disc list-inside space-y-2 text-slate-600" data-sem-panel="s5">
          <li>Administración de Ventas</li>
          <li>Mercadotecnia Social</li>
          <li>Promoción y Mercadotecnia</li>
          <li>Potencia de Marca (Branding)</li>
          <li>Finanzas para Mercadotecnia</li>
          <li>Visual Merchandising</li>
          <li>Lengua Extranjera V (Inglés)</li>
        </ul>
        <ul class="sem-panel hidden list-disc list-inside space-y-2 text-slate-600" data-sem-panel="s6">
          <li>Mercadotecnia Digital</li>
          <li>Psicología del Negociador</li>
          <li>Mercadotecnia Internacional</li>
          <li>Comercio Electrónico</li>
          <li>Conocimiento y Desarrollo de Franquicias</li>
          <li>Comunicación Visual</li>
          <li>Lengua Extranjera VI (Inglés)</li>
        </ul>
        <ul class="sem-panel hidden list-disc list-inside space-y-2 text-slate-600" data-sem-panel="s7">
          <li>Emprendimiento Empresarial</li>
          <li>Consultoría y Planificación de Medios</li>
          <li>Gestión de Servicio al Cliente</li>
          <li>Estrategias de Segmentación y Comercialización</li>
          <li>Mercadotecnia Política</li>
          <li>Auditoría en Mercadotecnia</li>
          <li>Lengua Extranjera VII (Inglés)</li>
        </ul>
        <ul class="sem-panel hidden list-disc list-inside space-y-2 text-slate-600" data-sem-panel="s8">
          <li>Rentabilidad de Medios Publicitarios</li>
          <li>Responsabilidad Social Corporativa</li>
          <li>Aspectos Legales de Comercio Electrónico</li>
          <li>Taller de Imagen Pública</li>
          <li>Neuromarketing</li>
          <li>Comercio Internacional</li>
          <li>Lengua Extranjera VIII (Inglés)</li>
        </ul>
        <ul class="sem-panel hidden list-disc list-inside space-y-2 text-slate-600" data-sem-panel="s9">
          <li>Automatización de Mercadotecnia</li>
          <li>Desarrollo Sustentable</li>
          <li>Seminario de Mercadotecnia</li>
          <li>Competencias y Certificaciones</li>
          <li>Ética y Valores en los Negocios</li>
          <li>Mercadotecnia de Influenciadores</li>
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
          src="https://www.youtube.com/embed/rMRP-wrrx_c"
          title="Mercadotecnia Estratégica"
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
          <summary class="font-semibold cursor-pointer">¿En qué consiste la carrera de Mercadotecnia?</summary>
          <p class="mt-2 text-slate-600 text-sm">
            Esta licenciatura se centra en el estudio de los principios y técnicas utilizadas para identificar, anticipar y satisfacer las necesidades y deseos de los consumidores.
          </p>
          <p class="mt-2 text-slate-600 text-sm">
            Además, implica comprender el comportamiento del mercado, la creación de estrategias de promoción, la gestión de marcas, el análisis de datos y la implementación de campañas publicitarias efectivas.
          </p>
          <p class="mt-2 text-slate-600 text-sm">
            Aquellos estudiantes que optan por esta disciplina aprenden a concebir planes de negocio que no solo sean lucrativos, sino también que conecten con el público objetivo. Las destrezas adquiridas en el ámbito de la Mercadotecnia son variadas e incluyen desde el análisis de datos y métricas para comprender el comportamiento del mercado, hasta el uso de herramientas digitales para el marketing en línea.
          </p>
          <p class="mt-2 text-slate-600 text-sm">De igual manera, los estudiantes exploran campos como:</p>
          <ul class="mt-2 space-y-1 text-sm text-slate-600">
            <li>La publicidad.</li>
            <li>La investigación de mercados.</li>
            <li>La psicología del consumidor.</li>
          </ul>
          <p class="mt-2 text-slate-600 text-sm">
            Estas aptitudes los preparan para enfrentar los retos de un entorno comercial dinámico y en constante evolución.
          </p>
        </details>

        <details class="rounded-lg border border-slate-200 bg-white px-4 py-3">
          <summary class="font-semibold cursor-pointer">¿Para qué sirve la carrera de Mercadotecnia?</summary>
          <p class="mt-2 text-slate-600 text-sm">
            Es fundamental para cualquier empresa que busque mantenerse relevante y competitiva en el mercado.
          </p>
          <p class="mt-2 text-slate-600 text-sm">
            Ayuda a las organizaciones a comprender a su público objetivo, a posicionar sus productos o servicios de manera efectiva, a aumentar su visibilidad y a generar demanda.
          </p>
          <p class="mt-2 text-slate-600 text-sm">
            También, a entender a fondo a los clientes y ajustar sus tácticas en función de ello. A crear soluciones apropiadas para las demandas.
          </p>
          <p class="mt-2 text-slate-600 text-sm">
            Y por último, a estimular la adquisición de las ofertas comerciales, lo que, a su vez, ayuda a obtener mayores beneficios.
          </p>
        </details>

        <details class="rounded-lg border border-slate-200 bg-white px-4 py-3">
          <summary class="font-semibold cursor-pointer">¡Estás a un CLIC para dar el gran paso!</summary>
          <p class="mt-2 text-slate-600 text-sm">¡Estás a un CLIC para dar el gran paso!</p>
        </details>

        <details class="rounded-lg border border-slate-200 bg-white px-4 py-3">
          <summary class="font-semibold cursor-pointer">¿Qué hace un licenciado en Mercadotecnia?</summary>
          <p class="mt-2 text-slate-600 text-sm">
            La necesidad de expertos en la materia es considerable debido a su intervención en el progreso y la efectividad de empresas y estrategias publicitarias. Para aquellas personas que optan por estudiar esta licenciatura, tienen la posibilidad de participar tanto en la faceta creativa como en la analítica del ámbito empresarial.
          </p>
          <p class="mt-2 text-slate-600 text-sm">Este profesional está capacitado para:</p>
          <ul class="mt-2 space-y-1 text-sm text-slate-600">
            <li>Desarrollar estrategias de marketing integrales.</li>
            <li>Realizar investigaciones de mercado.</li>
            <li>Analizar los datos y métricas.</li>
            <li>Identificar oportunidades de negocio.</li>
            <li>Administrar marcas.</li>
            <li>Coordinar campañas publicitarias.</li>
            <li>Evaluar el rendimiento de las actividades de marketing.</li>
            <li>Publicidad exterior.</li>
          </ul>
        </details>

        <details class="rounded-lg border border-slate-200 bg-white px-4 py-3">
          <summary class="font-semibold cursor-pointer">¿Cuánto dura la carrera de Mercadotecnia?</summary>
          <p class="mt-2 text-slate-600 text-sm">
            La duración de la Licenciatura en Mercadotecnia Estratégica en ISEC es de aproximadamente 3 años, es decir, 9 cuatrimestres con 7 asignaturas en cada periodo.
          </p>
        </details>

        <details class="rounded-lg border border-slate-200 bg-white px-4 py-3">
          <summary class="font-semibold cursor-pointer">Ramas de la Mercadotecnia</summary>
          <p class="mt-2 text-slate-600 text-sm">
            Algunas de las ramas especializadas dentro de la carrera son las siguientes:
          </p>
          <ul class="mt-2 space-y-1 text-sm text-slate-600">
            <li>Marketing digital.</li>
            <li>Marketing Internacional.</li>
            <li>Marketing de contenidos.</li>
            <li>Marketing de redes sociales.</li>
            <li>Marketing de productos.</li>
            <li>Marketing en motores de búsqueda (SEM).</li>
            <li>Marketing de bases de datos.</li>
            <li>Marketing de eventos.</li>
          </ul>
          <p class="mt-2 text-slate-600 text-sm">
            Estas áreas brindan oportunidades para enfocarse en aspectos específicos del marketing y desarrollar habilidades especializadas para cada cliente, empresa u organización.
          </p>
        </details>

        <details class="rounded-lg border border-slate-200 bg-white px-4 py-3">
          <summary class="font-semibold cursor-pointer">¿Cuánto gana un licenciado en Mercadotecnia?</summary>
          <p class="mt-2 text-slate-600 text-sm">
            El potencial económico es significativo, dado que el sueldo promedio de un profesional en mercadotecnia en México se sitúa entre los más competitivos, lo cual subraya la importancia de esta carrera en el actual panorama laboral.
          </p>
          <p class="mt-2 text-slate-600 text-sm">Según datos de Statista, las estadísticas son las siguientes:</p>
          <p class="mt-2 text-slate-600 text-sm">
            El ingreso inicial promedio para un recién titulado ronda los 17,300 MXN. No obstante, de acuerdo con un sondeo realizado entre abril de 2021 y marzo de 2022, el 73% de los graduados de instituciones públicas y privadas en México reportaron ganancias inferiores a 8,001 pesos mexicanos en su primer empleo, mientras que solo el 4% percibió un salario superior a 15,001 pesos mexicanos.
          </p>
          <p class="mt-2 text-slate-600 text-sm">
            El ingreso medio para los profesionales es aproximadamente de 35,800 MXN. Esto indica que la mitad de los trabajadores en México obtienen un ingreso por debajo de esta cifra, mientras que la otra mitad gana más. Por lo general, se prefiere estar dentro del grupo que supera el ingreso medio.
          </p>
          <p class="mt-2 text-slate-600 text-sm">
            En cuanto a la experiencia laboral, en promedio, los profesionales en Mercadotecnia con 2 a 5 años de experiencia ganan aproximadamente un 32% más que los recién llegados y los empleados juniors en todas las industrias y disciplinas.
          </p>
          <p class="mt-2 text-slate-600 text-sm">
            Mientras que aquellos con más de 5 años de experiencia suelen percibir un 36% más que aquellos con menos de 5 años de trayectoria. A medida que se acumulan más años de experiencia, el ingreso aumenta un 21% a los 10 años y un 14% adicional para aquellos con más de 15 años en el campo.
          </p>
        </details>

        <details class="rounded-lg border border-slate-200 bg-white px-4 py-3">
          <summary class="font-semibold cursor-pointer">¿Conoces algo acerca de ISEC?</summary>
          <p class="mt-2 text-slate-600 text-sm">
            ¡Descubre cómo puede contribuir al cambio y la equidad en nuestra sociedad a través del estudio de la Licenciatura en Mercadotecnia Estratégica!
          </p>
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
