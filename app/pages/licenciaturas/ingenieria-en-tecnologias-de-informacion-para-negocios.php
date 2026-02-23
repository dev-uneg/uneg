<?php
$title = 'Ingeniería en Tecnologías de Información para Negocios | UNEG';
$active = 'oferta';
$bodyClass = 'bg-slate-50 page-gray';
require __DIR__ . '/../partials/header.php';
?>

<div class="-mx-6 bg-slate-50">
<main class="max-w-7xl mx-auto px-4 py-10">
<section class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
    <img src="<?php echo $assetBase; ?>/imgs/licenciaturas/ingenieria-en-tecnologias-de-informacion-para-negocios/hero-ingenieria-ti-negocios.png" alt="Ingeniería en Tecnologías de Información para Negocios" class="block w-full h-auto" loading="eager">
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
    <h1 class="text-2xl sm:text-3xl font-semibold text-[#0b2c65]">¿Licenciatura en Tecnologías de Información? Conoce nuestra Licenciatura en Ingeniería en Tecnologías de Información para Negocios</h1>
    <p class="mt-2 text-slate-600">
      ¿Sabías que el mundo empresarial necesita a un experto en el cambio constante de las TICs? Con nuestra Licenciatura en Ingeniería en Tecnologías de Información para Negocios desarrollarás las habilidades necesarias para poder impactar en el mundo de las organizaciones. ¡Decide ser parte de una Ingeniería en Tecnologías de la Información!
    </p>
  </section>

  <section class="mt-10 grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
    <div class="text-center lg:text-left">
      <h2 class="text-2xl sm:text-3xl font-semibold text-[#0b2c65]">
        Cuenta con materias multidisciplinarias que buscan sensibilizar valores ecológicos y de sustentabilidad con enfoque hacia modelos de emprendimiento de negocios que permitirán el desarrollo del potencial de los egresados basados en tecnologías digitales y de infraestructura.
      </h2>
    </div>
    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
      <h3 class="text-xl font-semibold text-[#0b2c65] text-center">Inscríbete Ahora</h3>
      <?php if (isset($_GET['error'])): ?>
        <div class="mt-4 rounded-lg border border-rose-200 bg-rose-50 px-4 py-3 text-sm text-rose-800">
          No se pudo enviar tu informacion. Revisa los campos e intentalo de nuevo.
        </div>
      <?php endif; ?>
      <form class="mt-6 grid grid-cols-1 sm:grid-cols-2 gap-4 text-sm" method="post" action="<?php echo $base; ?>/api/forms/licenciaturas-ingenieria-en-tecnologias-de-informacion-para-negocios" autocomplete="on">
        <input class="w-full rounded-md border border-slate-300 px-3 py-2 sm:col-span-2 col-span-1" name="full_name" placeholder="Nombre completo*" type="text" required />
        <input class="w-full rounded-md border border-slate-300 px-3 py-2" name="email" placeholder="Correo Electrónico*" type="email" required />
        <input class="w-full rounded-md border border-slate-300 px-3 py-2" name="phone" placeholder="Teléfono*" type="tel" required />
        <input type="hidden" name="interest" value="Licenciatura en Ingeniería en Tecnologías de Información para Negocios" />
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
      <div class="bg-gradient-to-r from-[#4B9E01] via-[#4B9E01] to-[#4B9E01] text-white">
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
              <li>Interés en invertir eficazmente e incrementar la economía empresarial.</li>
              <li>Interés en desarrollar habilidades para planear, desarrollar y dirigir estrategias que hagan crecer empresas o instituciones.</li>
              <li>Capacidad de aprovechar al máximo todos los recursos y el tener sólido control sobre los aspectos financieros y administrativos.</li>
            </ul>
          </div>

          <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm">
            <div class="h-10 w-10 rounded-full bg-slate-100 flex items-center justify-center text-[#0b2c65]">
              <i class="ri-graduation-cap-line text-xl"></i>
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
              <i class="ri-briefcase-4-line text-xl"></i>
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
    <h2 class="text-center text-2xl sm:text-3xl font-semibold text-[#0b2c65]">Plan de Estudios Licenciatura en Ingeniería en Tecnologías de Información para Negocios</h2>
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
          <li>Contabilidad para Negocios</li>
          <li>Administración Contemporánea</li>
          <li>Redacción de Informes</li>
          <li>Ingeniería en Tecnologías de Información y Comunicaciones para Negocios</li>
          <li>Análisis y Diseño de Algoritmos</li>
          <li>Lengua Extranjera I (Inglés)</li>
        </ul>
        <ul class="sem-panel hidden list-disc list-inside space-y-2 text-slate-600" data-sem-panel="s2">
          <li>Habilidades Numéricas</li>
          <li>Costos y Presupuestos</li>
          <li>Comunicación y Liderazgo</li>
          <li>Sistemas Empresariales</li>
          <li>Sistemas Operativos I</li>
          <li>Herramientas de Programación I</li>
          <li>Lengua Extranjera II (Inglés)</li>
        </ul>
        <ul class="sem-panel hidden list-disc list-inside space-y-2 text-slate-600" data-sem-panel="s3">
          <li>Matemáticas Discretas</li>
          <li>Mercadotecnia Digital</li>
          <li>Ética y Valores en los Negocios</li>
          <li>Sistemas Operativos II</li>
          <li>Herramientas de Programación II</li>
          <li>Modelado de Datos</li>
          <li>Lengua Extranjera III (Inglés)</li>
        </ul>
        <ul class="sem-panel hidden list-disc list-inside space-y-2 text-slate-600" data-sem-panel="s4">
          <li>Probabilidad y Estadística Aplicada a los Negocios</li>
          <li>Administración de Proyectos</li>
          <li>Responsabilidad Social Corporativa</li>
          <li>Soporte y Arquitectura de Hardware</li>
          <li>Diseño de Software</li>
          <li>Análisis y Diseño de Sistemas</li>
          <li>Lengua Extranjera IV (Inglés)</li>
        </ul>
        <ul class="sem-panel hidden list-disc list-inside space-y-2 text-slate-600" data-sem-panel="s5">
          <li>Física I</li>
          <li>Soporte y Arquitectura de Software</li>
          <li>Bases de Datos</li>
          <li>Redes Empresariales</li>
          <li>Tecnologías Móviles Multiplataforma I</li>
          <li>Programación Web I</li>
          <li>Lengua Extranjera V (Inglés)</li>
        </ul>
        <ul class="sem-panel hidden list-disc list-inside space-y-2 text-slate-600" data-sem-panel="s6">
          <li>Física II</li>
          <li>Aspectos Legales del Comercio Electrónico</li>
          <li>Diseño de Bases de Datos</li>
          <li>Diseño e Implementación de Redes</li>
          <li>Tecnologías Móviles Multiplataforma II</li>
          <li>Programación Web II</li>
          <li>Lengua Extranjera VI (Inglés)</li>
        </ul>
        <ul class="sem-panel hidden list-disc list-inside space-y-2 text-slate-600" data-sem-panel="s7">
          <li>Cadenas de Valor</li>
          <li>Planeación Estratégica</li>
          <li>Diseño de Negocios Digitales</li>
          <li>Administración de Bases de Datos</li>
          <li>Comunicaciones Unificadas y Telecomunicaciones</li>
          <li>Innovación Tecnológica</li>
          <li>Lengua Extranjera VII (Inglés)</li>
        </ul>
        <ul class="sem-panel hidden list-disc list-inside space-y-2 text-slate-600" data-sem-panel="s8">
          <li>Simulación</li>
          <li>Diseño de Informes de Negocios</li>
          <li>Arquitectura Empresarial</li>
          <li>Desarrollo Sustentable</li>
          <li>Inteligencia de Negocios</li>
          <li>Cómputo en la Nube</li>
          <li>Lengua Extranjera VIII (Inglés)</li>
        </ul>
        <ul class="sem-panel hidden list-disc list-inside space-y-2 text-slate-600" data-sem-panel="s9">
          <li>Sistemas Inteligentes</li>
          <li>Emprendimiento Empresarial</li>
          <li>Metodologías y Mejores Prácticas</li>
          <li>Seguridad en Tecnologías de la Información</li>
          <li>Centro de Procesamiento de Datos</li>
          <li>Internet de las Cosas</li>
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
          src="https://www.youtube.com/embed/iromNmTZpWk"
          title="Ingeniería en Tecnologías de Información para Negocios"
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
          <summary class="font-semibold cursor-pointer">¿Qué es la carrera de Tecnologías de la información?</summary>
          <p class="mt-2 text-slate-600 text-sm">
            La tecnología es un conjunto de técnicas que cada día se perfeccionan más para seguir enriqueciendo los múltiples sectores públicos y privados. En este proceso de innovación siempre están involucrados los profesionales de las Tecnologías de la Información, mejor conocidas como TICs.
          </p>
          <p class="mt-2 text-slate-600 text-sm">
            Esta es una carrera multidisciplinar en la que los estudiantes potencian los conocimientos en matemáticas y otras áreas de ciencias, a la vez que desarrollan habilidades aplicadas al software y hardware, lenguajes de programación, aspectos variados relacionados con los datos y los dispositivos para la comunicación e interconectividad, entre otras aptitudes. Todos estos conocimientos, el egresado puede aplicarlos a los negocios y para ello también aprende nociones sustanciales de liderazgo y creación de proyectos.
          </p>
        </details>

        <details class="rounded-lg border border-slate-200 bg-white px-4 py-3">
          <summary class="font-semibold cursor-pointer">¿Para qué sirve la carrera de Tecnologías de la Información?</summary>
          <p class="mt-2 text-slate-600 text-sm">
            Esta carrera es sumamente necesaria porque el desarrollo de las Tecnologías de la Información está en constante expansión. El motivo de su crecimiento es porque son una clave en la satisfacción de necesidades de los usuarios, han refinado la interactividad y la transmisión de información mediante dispositivos.
          </p>
        </details>

        <details class="rounded-lg border border-slate-200 bg-white px-4 py-3">
          <summary class="font-semibold cursor-pointer">¿Cuánto dura la carrera de Tecnologías de la Información?</summary>
          <p class="mt-2 text-slate-600 text-sm">
            La ingeniería en Tecnologías de Información para Negocios tiene una duración de 9 cuatrimestres en el que se llevan 7 materias en cada uno. Las clases escolarizadas son de lunes a viernes con disponibilidad de dos horarios, el matutino y el vespertino. Además, en cada cuatrimestre se contempla la enseñanza de la lengua extranjera.
          </p>
          <p class="mt-2 text-slate-600 text-sm">Turno matutino: 7:00 a 13:00 horas.</p>
          <p class="mt-2 text-slate-600 text-sm">Turno vespertino: 18:00 a 22:00 horas.</p>
          <p class="mt-2 text-slate-600 text-sm">
            Con tu perfil podrás formar parte de la resolución de muchas necesidades que día con día revolucionan el mundo y que tienen impacto en la cotidianidad de las personas. Además, agilizar el aprendizaje de la lengua extranjera desde el primer hasta el último cuatrimestre, te será bastante útil para implementar tus conocimientos en los negocios.
          </p>
        </details>

        <details class="rounded-lg border border-slate-200 bg-white px-4 py-3">
          <summary class="font-semibold cursor-pointer">Especialidades en Tecnologías de la Información</summary>
          <p class="mt-2 text-slate-600 text-sm">
            Por otro lado, si eres alguien que ya cursó alguna licenciatura relacionada o eres egresado de la universidad ISEC, puedes especializarte en Tecnologías de la Información a través de un posgrado.
          </p>
          <p class="mt-2 text-slate-600 text-sm">
            En la especialidad obtendrás las siguientes aptitudes: analizar riesgos y beneficios en la implementación de nuevas TICs, ejecución de proyectos TICs en cualquier ámbito o sector empresarial, soluciones en el ámbito de las telecomunicaciones para aumentar las transacciones, rediseñar redes globales valiéndose de las tecnologías emergentes.
          </p>
          <p class="mt-2 text-slate-600 text-sm">Estas son las especialidades que existen en Tecnologías de la Información.</p>
          <ul class="mt-2 space-y-1 text-sm text-slate-600">
            <li>Ciencias de la Computación.</li>
            <li>Ingeniería informática.</li>
            <li>Sistemas de Información.</li>
            <li>Tecnología de la información.</li>
            <li>Ingeniería de Software.</li>
            <li>Ciencia y Tecnología de Datos.</li>
            <li>Administración de la Tecnología en Línea.</li>
            <li>Análisis y Diseño de Sistemas.</li>
          </ul>
          <p class="mt-2 text-slate-600 text-sm">
            Durante tu desarrollo profesional en la licenciatura, puedes ir decidiendo el enfoque que quieres darle a tus conocimientos y elegir una especialidad.
          </p>
        </details>

        <details class="rounded-lg border border-slate-200 bg-white px-4 py-3">
          <summary class="font-semibold cursor-pointer">¿Qué hace un licenciado en Tecnologías de la Información?</summary>
          <p class="mt-2 text-slate-600 text-sm">
            Cuando un estudiante egresa de la ingeniería en Tecnologías de la Información para Negocios en ISEC, es capaz de cubrir satisfactoriamente los siguientes retos:
          </p>
          <ul class="mt-2 space-y-1 text-sm text-slate-600">
            <li>Administrar las funciones informáticas de una empresa.</li>
            <li>Analizar y desarrollar estudios de factibilidad operativa y económica.</li>
            <li>Diseñar, modelar y administrar bases de datos.</li>
            <li>Desarrollar sistemas de información administrativos.</li>
            <li>Diseñar y administrar redes de computadoras.</li>
            <li>Conocimiento legal de las organizaciones relacionadas con la función informática.</li>
            <li>Desarrollar, implementar y dar mantenimiento a las aplicaciones en internet.</li>
            <li>Implementar estándares de calidad en el desarrollo de software.</li>
            <li>Participar en las investigaciones sobre tecnologías de la información y comunicación.</li>
            <li>Efectuar estudios de factibilidad técnica y económica para proyectos informáticos.</li>
          </ul>
          <p class="mt-2 text-slate-600 text-sm">
            Gracias a su perfil, el ingeniero en TICs puede desarrollarse profesionalmente en múltiples ámbitos, ya sea como auditor, analista, etcétera. Esta es una de las mayores ventajas que te brinda formarte en esta profesión. Si quieres conocer más acerca de ISEC y su propuesta de plan de estudios, no dudes en ingresar al sitio web.
          </p>
        </details>

        <details class="rounded-lg border border-slate-200 bg-white px-4 py-3">
          <summary class="font-semibold cursor-pointer">¿Cuánto gana un licenciado en Tecnologías de la Información?</summary>
          <p class="mt-2 text-slate-600 text-sm">
            El salario promedio que percibe el profesional en TI, es de $19,875 pesos mensuales. Asimismo, estos profesionales pueden recibir remuneraciones adicionales en efectivo que van desde los $1,875, hasta los $12,150.
          </p>
          <p class="mt-2 text-slate-600 text-sm">
            Es esencial recordar que el salario también se define a partir de la experiencia laboral, el giro de la empresa o institución gubernamental en la que se inserte el colaborador y la posición que ocupe dentro de dicha organización.
          </p>
          <p class="mt-2 text-slate-600 text-sm">
            Si te sientes fascinado por uno de los mayores retos contemporáneos y que está en auge, como lo es el manejo de datos, el diseño de algoritmos, las herramientas de programación y todo esto aplicado a los negocios, entonces te encantará el plan de estudios de la Ingeniería en Tecnología de la Información para Negocios.
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
