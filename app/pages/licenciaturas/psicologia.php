<?php
$title = 'Licenciatura en Psicología | UNEG';
$active = 'oferta';
$bodyClass = 'bg-slate-50 page-gray';
require __DIR__ . '/../partials/header.php';
?>

<div class="-mx-6 bg-slate-50">
<main class="max-w-7xl mx-auto px-4 py-10">
<section class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
    <img src="<?php echo $assetBase; ?>/imgs/licenciaturas/psicologia/hero-psicologia.png" alt="Psicología" class="block w-full h-auto" loading="eager">
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
    <h1 class="text-2xl sm:text-3xl font-semibold text-[#0b2c65]">Licenciatura en Psicología: Educación profesional enfocada a negocios</h1>
    <p class="mt-2 text-slate-600">
      Nuestra Licenciatura en Psicología te preparará para ser un profesional en el área de la mente humana
    </p>
  </section>

  <section class="mt-10 grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
    <div class="text-center lg:text-left">
      <h2 class="text-2xl sm:text-3xl font-semibold text-[#0b2c65]">
        Conocimiento de los procesos básicos para lograr entender y evaluar los fenómenos conductuales que permitirán despertar el interés interpersonal y fomentar aprendizajes interactivos para que los egresados sean profesionales en el campo de la mente humana.
      </h2>
    </div>
    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
      <h3 class="text-xl font-semibold text-[#0b2c65] text-center">Inscríbete Ahora</h3>
      <?php if (isset($_GET['error'])): ?>
        <div class="mt-4 rounded-lg border border-rose-200 bg-rose-50 px-4 py-3 text-sm text-rose-800">
          No se pudo enviar tu informacion. Revisa los campos e intentalo de nuevo.
        </div>
      <?php endif; ?>
      <form class="mt-6 grid grid-cols-1 sm:grid-cols-2 gap-4 text-sm" method="post" action="<?php echo $base; ?>/api/forms/licenciaturas-psicologia" autocomplete="on">
        <input class="w-full rounded-md border border-slate-300 px-3 py-2 sm:col-span-2 col-span-1" name="full_name" placeholder="Nombre completo*" type="text" required />
        <input class="w-full rounded-md border border-slate-300 px-3 py-2" name="email" placeholder="Correo Electrónico*" type="email" required />
        <input class="w-full rounded-md border border-slate-300 px-3 py-2" name="phone" placeholder="Teléfono*" type="tel" required />
        <input type="hidden" name="interest" value="Licenciatura en Psicología" />
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
              <li>Certificado de Secundaria (Original y 2 copias).</li>
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
              <li>Capacidad de observación, análisis y síntesis.</li>
              <li>Conocimiento interdisciplinario con carácter científico y humanístico (cultura general).</li>
              <li>Disponibilidad al trabajo en equipo.</li>
              <li>Gusto por la lectura y la investigación.</li>
              <li>Estabilidad emocional y habilidad para las relaciones interpersonales.</li>
              <li>Alto sentido de la responsabilidad.</li>
            </ul>
          </div>

          <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm">
            <div class="h-10 w-10 rounded-full bg-slate-100 flex items-center justify-center text-[#0b2c65]">
              <i class="ri-graduation-cap-line text-xl"></i>
            </div>
            <h4 class="mt-3 font-semibold">Perfil de egreso</h4>
            <p class="mt-2 text-sm text-slate-600">Al egresar de esta Licenciatura, tendrás habilidades para:</p>
            <ul class="mt-3 space-y-2 text-sm text-[#0b2c65]">
              <li>Identificar, valorar y proponer alternativas de prevención y solución ante diversos contextos.</li>
              <li>Implementar modelos de intervención en esferas cognitivas, conductuales y emotivas en niños, jóvenes, adultos y adultos en plenitud.</li>
              <li>Proponer soluciones realistas a los problemas en el ámbito individual, familiar y laboral.</li>
              <li>Fomentar el amor, la justicia, la confianza y la verdad.</li>
            </ul>
          </div>

          <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm">
            <div class="h-10 w-10 rounded-full bg-slate-100 flex items-center justify-center text-[#0b2c65]">
              <i class="ri-briefcase-4-line text-xl"></i>
            </div>
            <h4 class="mt-3 font-semibold">Campo de Trabajo</h4>
            <p class="mt-2 text-sm text-slate-600">Profesionalmente te desarrollarás en:</p>
            <ul class="mt-3 space-y-2 text-sm text-[#0b2c65]">
              <li>El área de Psicobiología: Investigación Científica en el área de las Neurociencias, Psicología Biológica, Ciencias Biomédicas, Ciencias Biológicas, Experimentales y de Salud, Adicciones, Epidemiología, entre otras.</li>
              <li>En el área Clínica: Salud mental y rehabilitación; evaluación diagnóstica y entrevistas clínicas.</li>
              <li>En el área Organizacional: Investigación y aplicación de técnicas para la difusión de productos, Procesos Psicosociales en las Organizaciones, Calidad, Productividad y Competitividad, Salud Organizacional y del Trabajo.</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="mt-12">
    <h2 class="text-center text-2xl sm:text-3xl font-semibold text-[#0b2c65]">Plan de Estudios Licenciatura en Psicología</h2>
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
        </div>
      </div>
      <div class="md:col-span-2 rounded-xl border border-slate-200 bg-white p-6">
        <ul class="sem-panel list-disc list-inside space-y-2 text-slate-600" data-sem-panel="s1">
          <li>Bases Biológicas de la Conducta</li>
          <li>Historia de la Psicología</li>
          <li>Identidad Universitaria</li>
          <li>Modelos en Psicología Clínica</li>
          <li>Psicología Social de la Interacción</li>
          <li>Teoría Computacional de la Mente</li>
        </ul>
        <ul class="sem-panel hidden list-disc list-inside space-y-2 text-slate-600" data-sem-panel="s2">
          <li>Aprendizaje y Conducta Adaptativa I</li>
          <li>Aproximaciones al Proceso Salud-Enfermedad</li>
          <li>Introducción a la Metodología de la Investigación Psicológica</li>
          <li>Neurobiología y Adaptación</li>
          <li>Teoría Psicogenética Constructivista</li>
          <li>Transdisciplina I</li>
        </ul>
        <ul class="sem-panel hidden list-disc list-inside space-y-2 text-slate-600" data-sem-panel="s3">
          <li>Aprendizaje y Conducta Adaptativa II</li>
          <li>Ciclo de Vida</li>
          <li>Medición y Evaluación</li>
          <li>Método Clínico</li>
          <li>Psicología Social de los Grupos</li>
          <li>Taller de Psicofisiología I</li>
          <li>Transdisciplina II</li>
        </ul>
        <ul class="sem-panel hidden list-disc list-inside space-y-2 text-slate-600" data-sem-panel="s4">
          <li>Aprendizaje y Conducta Adaptativa III</li>
          <li>Comprensión de la Realidad Social I</li>
          <li>Filosofía de la Psicología</li>
          <li>Neurocognición</li>
          <li>Prácticas de Psicobiología</li>
          <li>Psicología Social de lo Colectivo</li>
          <li>Teoría Sociocultural</li>
        </ul>
        <ul class="sem-panel hidden list-disc list-inside space-y-2 text-slate-600" data-sem-panel="s5">
          <li>Conocimiento de Frontera I</li>
          <li>Optativas de elección*</li>
        </ul>
        <ul class="sem-panel hidden list-disc list-inside space-y-2 text-slate-600" data-sem-panel="s6">
          <li>Ética Profesional</li>
          <li>Optativas de elección*</li>
        </ul>
        <ul class="sem-panel hidden list-disc list-inside space-y-2 text-slate-600" data-sem-panel="s7">
          <li>Compresión de la Realidad Social II</li>
          <li>Optativas de elección*</li>
        </ul>
        <ul class="sem-panel hidden list-disc list-inside space-y-2 text-slate-600" data-sem-panel="s8">
          <li>Compresión de la Realidad Social III</li>
          <li>Optativas de elección*</li>
        </ul>
      </div>
    </div>
    <p class="mt-4 text-sm text-slate-600">
      *Las asignaturas optativas de elección que el alumno debe cursar del quinto al séptimo semestre se encuentran organizadas de acuerdo con los principales campos de conocimiento de la psicología. En la Universidad de Negocios ISEC ofrecemos 3 de estos campos (Psicología Clínica y de la Salud, Psicología Organizacional y Psicobiología y Neurociencias) tomando en cuenta la oferta académica disponible por semestre, y bajo la tutoría, individual o colectiva, por parte de la Dirección Técnica y de los profesores.
    </p>
  </section>

  <section class="mt-12">
    <div class="relative w-full overflow-hidden rounded-2xl border border-slate-200 bg-slate-100 shadow-sm">
      <div class="aspect-video w-full">
        <iframe
          class="h-full w-full"
          src="https://www.youtube.com/embed/EkrNWgVh-XY"
          title="Psicología"
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
          <summary class="font-semibold cursor-pointer">¿En qué consiste la carrera de psicología?</summary>
          <p class="mt-2 text-slate-600 text-sm">
            La licenciatura de psicología está enfocada en el estudio de la psique humana, sus emociones y procesos cognitivos que van sucediendo dependiendo de las diferentes situaciones en las que se hallen el o los pacientes. El alumno de esta carrera también aprende a analizar estas problemáticas a partir de su contexto, ya sea el individual, grupal, social, familiar, cultural, organizacional, etcétera.
          </p>
        </details>

        <details class="rounded-lg border border-slate-200 bg-white px-4 py-3">
          <summary class="font-semibold cursor-pointer">¿Para qué sirve la carrera de psicología?</summary>
          <p class="mt-2 text-slate-600 text-sm">
            Los profesionales de la psicología tienen la facultad de analizar a las personas en diferentes escalas, ya sea individualmente o de manera grupal. Su óptimo análisis hace posible que el experto en esta profesión, pueda crear e implementar estrategias de apoyo y para el tratamiento del paciente.
          </p>
          <p class="mt-2 text-slate-600 text-sm">
            Asimismo, en caso de ser casos muy graves, este profesional sabe cuándo es el momento indicado de remitir a un paciente a psiquiatría, en caso de que sea necesario.
          </p>
        </details>

        <details class="rounded-lg border border-slate-200 bg-white px-4 py-3">
          <summary class="font-semibold cursor-pointer">¿Cuánto dura la carrera de psicología?</summary>
          <p class="mt-2 text-slate-600 text-sm">
            La carrera de psicología en la Universidad de Negocios ISEC, tiene una duración de 8 cuatrimestres, de acuerdo al material oficial del plan de estudios de la licenciatura en psicología. A su vez, en cada periodo cuatrimestral, el alumno toma clase de 7 asignaturas; sin embargo, en el quinto semestre el estudiante tiene la oportunidad de elegir cuáles son las optativas que llevará, a fin de comenzar a especializarse.
          </p>
          <p class="mt-2 text-slate-600 text-sm">
            Hay dos horarios disponibles, el matutino, que abarca desde las 7:00 am a las 13:00 horas, y el vespertino, que abarca desde las 18:00 a las 22:00 horas.
          </p>
        </details>

        <details class="rounded-lg border border-slate-200 bg-white px-4 py-3">
          <summary class="font-semibold cursor-pointer">Ramas de la psicología</summary>
          <p class="mt-2 text-slate-600 text-sm">
            La psicología tiene diversas ramas de enfoque con el objetivo de poder aterrizar de manera más óptima, cada problemática que el profesional enfrente. Algunas de las ramas de la psicología, son las siguientes:
          </p>
          <ul class="mt-2 space-y-1 text-sm text-slate-600">
            <li>Psicología clínica.</li>
            <li>Psicología del desarrollo.</li>
            <li>Psicología educativa.</li>
            <li>Psicología organizacional e industrial.</li>
            <li>Psicología social.</li>
            <li>Psicología de la salud.</li>
            <li>Psicología del deporte.</li>
          </ul>
          <p class="mt-2 text-slate-600 text-sm">
            Estas no son las únicas interpretaciones y enfoques que existen. Cada uno de ellos es sumamente importante y es clave en el desarrollo social. Si quieres saber más acerca de ISEC y los enfoques que se imparten en esta licenciatura, conoce el plan de estudios.
          </p>
        </details>

        <details class="rounded-lg border border-slate-200 bg-white px-4 py-3">
          <summary class="font-semibold cursor-pointer">Actividades de un psicólogo</summary>
          <p class="mt-2 text-slate-600 text-sm">
            Las actividades del experto en psicología son diversas y van por escalas. Primeramente, se lleva a cabo el diagnóstico clínico, después se efectúa la orientación y el consejo, se brinda el tratamiento a través de las terapias con el objetivo de afrontar todas aquellas problemáticas, etcétera.
          </p>
          <p class="mt-2 text-slate-600 text-sm">
            El proceso permite que el profesional pueda elegir el mejor tratamiento para sus pacientes.
          </p>
        </details>

        <details class="rounded-lg border border-slate-200 bg-white px-4 py-3">
          <summary class="font-semibold cursor-pointer">¿Cuánto gana un licenciado en psicología?</summary>
          <p class="mt-2 text-slate-600 text-sm">
            El salario promedio de un profesional de la psicología, oscila entre los $4,31 K y $40,000 K, todo depende de la especialidad que el alumno tome y con cuál de ellos decida ejercer.
          </p>
          <p class="mt-2 text-slate-600 text-sm">
            Si bien esta es una media salarial, la competitividad del egresado aumenta conforme mayor es el desarrollo de su especialización y aptitudes que suman a las labores.
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
