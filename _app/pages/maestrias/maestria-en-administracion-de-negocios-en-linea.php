<?php
$title = 'Maestría en Administración de Negocios en Línea | UNEG';
$active = 'oferta';
$bodyClass = 'bg-slate-50 page-gray';
require __DIR__ . '/../partials/header.php';
?>

<div class="-mx-6 bg-slate-50">
<main class="max-w-7xl mx-auto px-4 py-10">
<section class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
  <img src="<?php echo $assetBase; ?>/_imgs/maestrias/administracion-de-negocios-en-linea/hero.webp" alt="Maestría en Administración de Negocios en Línea" class="block w-full h-auto" loading="eager">
  <div class="bg-[#0b2c65] text-white">
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 px-5 py-4 text-sm">
      <div class="flex items-center gap-3">
        <span class="inline-flex h-9 w-9 items-center justify-center rounded-full bg-white/15">
          <i class="ri-school-line text-lg"></i>
        </span>
        <div>
          <p class="font-semibold">Modalidad en Línea</p>
          <p class="text-white/70 text-xs">Maestrías</p>
        </div>
      </div>
      <div class="flex items-center gap-3">
        <span class="inline-flex h-9 w-9 items-center justify-center rounded-full bg-white/15">
          <i class="ri-time-line text-lg"></i>
        </span>
        <div>
          <p class="font-semibold">Sistema en Línea</p>
          <p class="text-white/70 text-xs">24 Hrs</p>
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
    <h1 class="text-2xl sm:text-3xl font-semibold text-[#0b2c65]">¿Maestría en Administración en Línea? Conoce nuestra Maestría en Administración de Negocios en Línea</h1>
    <p class="mt-2 text-slate-600">
      Si te interesa estudiar una Maestría en Administración en Línea, dentro de la Universidad de Negocios ISEC encontrarás la Maestría en Administración de Negocios en Línea. Cuenta con un plan de estudios óptimo para el aprendizaje a distancia, además, cuenta con material para fortalecer tu aprendizaje.
    </p>
  </section>

  <section class="mt-10 grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
    <div class="text-center lg:text-left">
      <h2 class="text-2xl sm:text-3xl font-semibold text-[#0b2c65]">
        Objetivo General: Adquirirás un aprendizaje óptimo e integral en una universidad digital fortaleciendo tus habilidades de negocio a través de una evaluación continua, tutorías personalizadas mediante chats y foros de discusión, acceso a plataformas educativas, bibliotecas virtuales, videoconferencias y más.
      </h2>
    </div>
    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
      <h3 class="text-xl font-semibold text-[#0b2c65] text-center">Inscríbete Ahora</h3>
      <?php if (isset($_GET['error'])): ?>
        <div class="mt-4 rounded-lg border border-rose-200 bg-rose-50 px-4 py-3 text-sm text-rose-800">
          No se pudo enviar tu informacion. Revisa los campos e intentalo de nuevo.
        </div>
      <?php endif; ?>
      <form class="mt-6 grid grid-cols-1 sm:grid-cols-2 gap-4 text-sm" method="post" action="<?php echo $base; ?>/api/forms/maestrias-maestria-en-administracion-de-negocios-en-linea" autocomplete="on">
        <input class="w-full rounded-md border border-slate-300 px-3 py-2 sm:col-span-2 col-span-1" name="full_name" placeholder="Nombre completo*" type="text" required />
        <input class="w-full rounded-md border border-slate-300 px-3 py-2" name="email" placeholder="Correo Electrónico*" type="email" required />
        <input class="w-full rounded-md border border-slate-300 px-3 py-2" name="phone" placeholder="Teléfono*" type="tel" required />
        <input type="hidden" name="interest" value="Maestría en Administración de Negocios en Línea" />
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
      <div class="bg-gradient-to-r from-[#0397FC] via-[#0397FC] to-[#0397FC] text-white">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 px-6 py-8">
          <div class="text-left">
            <p class="text-sm uppercase tracking-[0.2em] text-white">Perfil de Ingreso/Egreso</p>
            <h3 class="mt-2 text-2xl sm:text-3xl font-semibold">¿Qué requiero?</h3>
            <button class="mt-3 inline-flex items-center gap-2 text-sm font-semibold text-white/90 hover:text-white">Conocer más <span aria-hidden="true">+</span></button>
          </div>
          <div class="text-center">
            <div class="mx-auto inline-flex h-12 w-12 items-center justify-center rounded-full bg-white/15">
              <i class="ri-graduation-cap-line text-2xl"></i>
            </div>
            <p class="mt-3 text-lg font-semibold">Plan de Estudios</p>
            <a href="<?php echo $assetBase; ?>/_assets/planes-de-estudio/ISEC-Adm-De-Negocios.pdf" target="_blank" rel="noopener noreferrer" class="mt-1 inline-flex items-center gap-2 text-sm font-semibold text-white/90 underline-offset-4 transition hover:text-white hover:underline focus:outline-none focus-visible:ring-2 focus-visible:ring-white/80">Ver plan <i class="ri-external-link-line text-base" aria-hidden="true"></i></a>
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
              <i class="ri-checkbox-circle-line text-xl"></i>
            </div>
            <h4 class="mt-3 font-semibold">Perfil de ingreso</h4>
            <p class="mt-2 text-sm text-slate-600">Licenciados o pasantes que hayan cursado cualquier carrera en las siguientes áreas de conocimiento:</p>
            <ul class="mt-3 space-y-2 text-sm text-[#0b2c65]">
              <li>Ciencias sociales y de la salud.</li>
              <li>Administrativas.</li>
              <li>Educación y Humanidades.</li>
              <li>Ingeniería y Tecnología.</li>
            </ul>
          </div>

          <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm">
            <div class="h-10 w-10 rounded-full bg-slate-100 flex items-center justify-center text-[#0b2c65]">
              <i class="ri-graduation-cap-line text-xl"></i>
            </div>
            <h4 class="mt-3 font-semibold">Perfil de egreso</h4>
            <p class="mt-2 text-sm text-slate-600">Al egresar de esta maestría, tendrás habilidades para:</p>
            <ul class="mt-3 space-y-2 text-sm text-[#0b2c65]">
              <li>El egresado de la Maestría en Administración de Negocios Sistema de Aprendizaje en Línea, será una persona transformada por la educación, un individuo seguro de sí mismo, con plena convicción de la importancia de su formación profesional.</li>
              <li>Aprenderá a desarrollar enfoques estratégicos en la administración, haciendo uso de herramientas cuantitativas y cualitativas para la explotación de recursos. Así como para implementar modelos de planeación integrales en la organización.</li>
            </ul>
          </div>

          <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm">
            <div class="h-10 w-10 rounded-full bg-slate-100 flex items-center justify-center text-[#0b2c65]">
              <i class="ri-briefcase-4-line text-xl"></i>
            </div>
            <h4 class="mt-3 font-semibold">Campo de Trabajo</h4>
            <p class="mt-2 text-sm text-slate-600">Profesionalmente te desarrollarás en:</p>
            <ul class="mt-3 space-y-2 text-sm text-[#0b2c65]">
              <li>El campo de trabajo de los maestros en administración se encuentra en continuo crecimiento, por lo que el egresado de esta maestría podrá desarrollarse en ámbitos tan diversos como: El sector público, privado y organismos descentralizados, así como en labores de asesoría, consultoría, capacitación y como emprendedor de negocios.</li>
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
      <div class="mt-3 text-2xl sm:text-3xl font-semibold">Sistema en Línea</div>
      <div class="mt-2 text-lg">24 Hrs</div>
    </div>
  </section>

  <section class="mt-12">
    <div class="max-w-3xl mx-auto">
      <h2 class="text-center text-2xl sm:text-3xl font-semibold text-[#0b2c65]">Preguntas frecuentes</h2>
      <div class="mt-6 space-y-3">
        <details class="rounded-lg border border-slate-200 bg-white px-4 py-3">
          <summary class="font-semibold cursor-pointer">¿Qué es la Administración de Negocios?</summary>
          <p class="mt-2 text-slate-600 text-sm">
            La Administración de Negocios es un campo que se enfoca en la organización, dirección y control de una empresa o institución para alcanzar sus objetivos de manera eficiente. Abarca diversas áreas:
          </p>
          <ul class="mt-2 space-y-1 text-sm text-slate-600">
            <li>Finanzas.</li>
            <li>Marketing.</li>
            <li>Recursos humanos.</li>
            <li>Operaciones.</li>
            <li>Estrategia empresarial.</li>
          </ul>
          <p class="mt-2 text-slate-600 text-sm">
            Un administrador de negocios debe ser capaz de tomar decisiones acertadas que impulsen el crecimiento y el éxito de la organización, manejando recursos de manera óptima y respondiendo a los desafíos del entorno empresarial.
          </p>
        </details>

        <details class="rounded-lg border border-slate-200 bg-white px-4 py-3">
          <summary class="font-semibold cursor-pointer">¿Cuál es la importancia de estudiar la Maestría en Administración de Negocios en línea?</summary>
          <p class="mt-2 text-slate-600 text-sm">
            Optar por un posgrado en línea tiene una relevancia significativa en la actualidad. Con el mundo empresarial en constante cambio y la globalización cada vez más presente, las empresas necesitan líderes que puedan adaptarse rápidamente, manejar equipos virtuales y tomar decisiones informadas en un entorno digital. La modalidad en línea te permite aprender desde cualquier lugar, lo que es ideal para profesionales que buscan equilibrar sus responsabilidades laborales y personales mientras se preparan para roles de liderazgo.
          </p>
          <p class="mt-2 text-slate-600 text-sm">
            Además, las habilidades adquiridas en una maestría en Administración de Negocios son transferibles a una amplia gama de industrias, desde:
          </p>
          <ul class="mt-2 space-y-1 text-sm text-slate-600">
            <li>La tecnología hasta las finanzas.</li>
            <li>Sector salud.</li>
            <li>Manufactura.</li>
          </ul>
          <p class="mt-2 text-slate-600 text-sm">
            La modalidad en línea también te permite interactuar con un cuerpo estudiantil diverso, lo que enriquece tu perspectiva global y te prepara para trabajar en entornos multiculturales.
          </p>
        </details>

        <details class="rounded-lg border border-slate-200 bg-white px-4 py-3">
          <summary class="font-semibold cursor-pointer">¿Qué aprenderás en la Maestría en Administración de Negocios en línea?</summary>
          <p class="mt-2 text-slate-600 text-sm">
            Un programa de posgrado en línea cubre una variedad de temas que son cruciales para cualquier líder empresarial. Entre los temas que abordarás se incluyen:
          </p>
          <p class="mt-2 text-slate-600 text-sm font-semibold">Estrategia empresarial</p>
          <p class="mt-2 text-slate-600 text-sm">
            Aprenderás a diseñar y ejecutar planes estratégicos que impulsen el crecimiento y la competitividad de la empresa.
          </p>
          <p class="mt-2 text-slate-600 text-sm font-semibold">Finanzas corporativas</p>
          <p class="mt-2 text-slate-600 text-sm">
            Desarrollarás habilidades en la gestión financiera, incluyendo la evaluación de inversiones, la gestión de riesgos y la planificación financiera.
          </p>
          <p class="mt-2 text-slate-600 text-sm font-semibold">Marketing y gestión de marca</p>
          <p class="mt-2 text-slate-600 text-sm">
            Te enseñarán a crear y mantener una imagen de marca sólida, así como a diseñar campañas de marketing efectivas.
          </p>
          <p class="mt-2 text-slate-600 text-sm font-semibold">Gestión de recursos humanos</p>
          <p class="mt-2 text-slate-600 text-sm">
            Aprenderás a gestionar equipos, desarrollar el talento y mejorar la cultura organizacional.
          </p>
          <p class="mt-2 text-slate-600 text-sm font-semibold">Análisis de datos y toma de decisiones</p>
          <p class="mt-2 text-slate-600 text-sm">
            Dominarás el uso de herramientas de análisis de datos para tomar decisiones informadas y basadas en evidencia.
          </p>
          <p class="mt-2 text-slate-600 text-sm">
            Estos conocimientos te prepararán para asumir roles de alta dirección, donde serás responsable de guiar a la empresa hacia el cumplimiento de sus metas a largo plazo.
          </p>
        </details>

        <details class="rounded-lg border border-slate-200 bg-white px-4 py-3">
          <summary class="font-semibold cursor-pointer">¿Cuáles son las ventajas de estudiar la Maestría en Administración de Negocios en línea?</summary>
          <p class="mt-2 text-slate-600 text-sm">
            Estudiar una maestría en Administración de Negocios en línea de la Universidad de Negocios ISEC tiene múltiples beneficios que la hacen una opción atractiva para muchos profesionales:
          </p>
          <p class="mt-2 text-slate-600 text-sm font-semibold">Flexibilidad</p>
          <p class="mt-2 text-slate-600 text-sm">
            La principal ventaja de la educación en línea es la flexibilidad para estudiar desde cualquier lugar y en cualquier momento. Esto es ideal si estás trabajando a tiempo completo o tienes otras responsabilidades.
          </p>
          <p class="mt-2 text-slate-600 text-sm font-semibold">Ahorro de costos</p>
          <p class="mt-2 text-slate-600 text-sm">
            Al eliminar la necesidad de desplazarse o mudarse, puedes ahorrar en gastos relacionados con transporte, alojamiento y materiales de estudio.
          </p>
          <p class="mt-2 text-slate-600 text-sm font-semibold">Acceso a una red global</p>
          <p class="mt-2 text-slate-600 text-sm">
            Estudiar en línea te permite conectarte con estudiantes y profesores de todo el mundo, ampliando tu red profesional y proporcionándote perspectivas diversas.
          </p>
          <p class="mt-2 text-slate-600 text-sm font-semibold">Aprendizaje autodirigido</p>
          <p class="mt-2 text-slate-600 text-sm">
            Tienes la libertad de organizar tu tiempo de estudio y avanzar a tu propio ritmo, lo que puede ser beneficioso si prefieres un enfoque de aprendizaje más personalizado.
          </p>
          <p class="mt-2 text-slate-600 text-sm font-semibold">Tecnología y habilidades digitales</p>
          <p class="mt-2 text-slate-600 text-sm">
            La experiencia en línea te ayudará a desarrollar competencias digitales esenciales, como el uso de herramientas de colaboración y gestión de proyectos, que son cada vez más valoradas en el mercado laboral.
          </p>
          <p class="mt-2 text-slate-600 text-sm">
            ¿Estás listo para dar el siguiente paso en tu carrera? No dejes pasar la oportunidad de avanzar profesionalmente desde la comodidad de tu hogar.
          </p>
          <p class="mt-2 text-slate-600 text-sm">
            Si quieres conocer más acerca de ISEC y su propuesta de plan de estudios, no dudes en ingresar al sitio web. ¡Te esperamos!
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
