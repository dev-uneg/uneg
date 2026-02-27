<?php
$title = 'CCH ISEC | UNEG';
$active = 'oferta';
$bodyClass = 'bg-slate-50 cch-isec';
require __DIR__ . '/../partials/header.php';
?>

<div class="-mx-6 bg-slate-50">
  <main class="max-w-7xl mx-auto px-4 py-10">
  <section class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
    <img src="<?php echo $assetBase; ?>/_imgs/nms/cch/hero.webp" alt="CCH ISEC - Modalidad presencial" class="block w-full h-auto" loading="eager">
    <div class="bg-[#0b2c65] text-white">
      <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 px-5 py-4 text-sm">
        <div class="flex items-center gap-3">
          <span class="inline-flex h-9 w-9 items-center justify-center rounded-full bg-white/15">
            <i class="text-lg" data-lucide="school"></i>
          </span>
          <div>
            <p class="font-semibold">Modalidad Presencial</p>
            <p class="text-white/70 text-xs">CCH ISEC</p>
          </div>
        </div>
        <div class="flex items-center gap-3">
          <span class="inline-flex h-9 w-9 items-center justify-center rounded-full bg-white/15">
            <i class="text-lg" data-lucide="clock-3"></i>
          </span>
          <div>
            <p class="font-semibold">16:00 a 21:00 hrs</p>
            <p class="text-white/70 text-xs">Lunes a viernes</p>
          </div>
        </div>
        <div class="flex items-center gap-3">
          <span class="inline-flex h-9 w-9 items-center justify-center rounded-full bg-white/15">
            <i class="text-lg" data-lucide="medal"></i>
          </span>
          <div>
            <p class="font-semibold">Certificación UNAM</p>
            <p class="text-white/70 text-xs">Validez oficial</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="mt-10 text-center">
    <h1 class="text-2xl sm:text-3xl font-semibold text-[#0b2c65]">Tú futuro empieza con una decisión.</h1>
    <p class="mt-3 text-slate-600">
      Te preparamos con las herramientas necesarias para que tengas conocimientos a nivel medio superior con certificado oficial de la Universidad Autónoma de México (UNAM).
    </p>
  </section>

  <section class="mt-10 grid grid-cols-1 lg:grid-cols-2 gap-10 items-start">
    <div>
      <h3 class="text-lg font-semibold text-slate-800">Beneficios de estudiar con nosotros:</h3>
      <ul class="mt-4 space-y-3 text-slate-600">
        <li class="flex gap-3"><i class="text-[#0d4fb6] text-lg" data-lucide="check-circle"></i><span>Incorporación a la UNAM (Universidad Nacional de México)</span></li>
        <li class="flex gap-3"><i class="text-[#0d4fb6] text-lg" data-lucide="check-circle"></i><span>Servicio Médico durante toda la jornada</span></li>
        <li class="flex gap-3"><i class="text-[#0d4fb6] text-lg" data-lucide="check-circle"></i><span>Programa de prevención y contención contra las drogas</span></li>
        <li class="flex gap-3"><i class="text-[#0d4fb6] text-lg" data-lucide="check-circle"></i><span>Seguimiento académico personalizado</span></li>
        <li class="flex gap-3"><i class="text-[#0d4fb6] text-lg" data-lucide="check-circle"></i><span>Desarrollo de competencias</span></li>
        <li class="flex gap-3"><i class="text-[#0d4fb6] text-lg" data-lucide="check-circle"></i><span>Canchas deportivas de Fútbol y Baloncesto</span></li>
        <li class="flex gap-3"><i class="text-[#0d4fb6] text-lg" data-lucide="check-circle"></i><span>Certificación de Microsoft Office</span></li>
        <li class="flex gap-3"><i class="text-[#0d4fb6] text-lg" data-lucide="check-circle"></i><span>Orientación psicológica y apoyo pedagógico</span></li>
        <li class="flex gap-3"><i class="text-[#0d4fb6] text-lg" data-lucide="check-circle"></i><span>Cafetería</span></li>
        <li class="flex gap-3"><i class="text-[#0d4fb6] text-lg" data-lucide="check-circle"></i><span>Áreas verdes y zonas de lectura</span></li>
        <li class="flex gap-3"><i class="text-[#0d4fb6] text-lg" data-lucide="check-circle"></i><span>Biblioteca</span></li>
        <li class="flex gap-3"><i class="text-[#0d4fb6] text-lg" data-lucide="check-circle"></i><span>Foro de Arte y Desarrollo</span></li>
        <li class="flex gap-3"><i class="text-[#0d4fb6] text-lg" data-lucide="check-circle"></i><span>Auditorio</span></li>
        <li class="flex gap-3"><i class="text-[#0d4fb6] text-lg" data-lucide="check-circle"></i><span>Pase directo al siguiente nivel educativo en Universidad de Negocios ISEC</span></li>
        <li class="flex gap-3"><i class="text-[#0d4fb6] text-lg" data-lucide="check-circle"></i><span>Talleres culturales y deportivos</span></li>
        <li class="flex gap-3"><i class="text-[#0d4fb6] text-lg" data-lucide="check-circle"></i><span>Certificación del idioma inglés por Cambridge</span></li>
      </ul>
    </div>

    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
      <h3 class="text-xl font-semibold text-[#0b2c65] text-center">Inscríbete Ahora</h3>
      <?php if (isset($_GET['error'])): ?>
        <div class="mt-4 rounded-lg border border-rose-200 bg-rose-50 px-4 py-3 text-sm text-rose-800">
          No se pudo enviar tu informacion. Revisa los campos e intentalo de nuevo.
        </div>
      <?php endif; ?>
      <form class="mt-6 grid grid-cols-1 sm:grid-cols-2 gap-4 text-sm" method="post" action="<?php echo $base; ?>/api/forms/cch-isec" autocomplete="on">
        <input class="w-full rounded-md border border-slate-300 px-3 py-2 sm:col-span-2 col-span-1" name="full_name" placeholder="Nombre completo*" type="text" required />
        <input class="w-full rounded-md border border-slate-300 px-3 py-2" name="email" placeholder="Correo Electrónico*" type="email" required />
        <input class="w-full rounded-md border border-slate-300 px-3 py-2" name="phone" placeholder="Teléfono*" type="tel" required />
        <input type="hidden" name="interest" value="CCH ISEC" />
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

  <section class="mt-10 grid grid-cols-1 md:grid-cols-2 gap-6">
    <div class="rounded-xl bg-[#5a1c1c] text-white px-6 py-8">
      <div class="flex items-center justify-center gap-3 text-center font-semibold">
        <span class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-white/15">
          <i class="text-xl" data-lucide="book-open"></i>
        </span>
        <span>Plan de Estudios</span>
      </div>
    </div>
    <div class="rounded-xl bg-[#5a4a4a] text-white px-6 py-8">
      <div class="flex items-center justify-center gap-3 text-center font-semibold">
        <span class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-white/15">
          <i class="text-xl" data-lucide="pencil"></i>
        </span>
        <span>Inscríbete Ahora</span>
      </div>
    </div>
  </section>

  <section class="mt-12">
    <h2 class="text-center text-2xl sm:text-3xl font-semibold text-[#0b2c65]">Plan de Estudios</h2>
    <div class="mt-6 grid grid-cols-1 md:grid-cols-3 gap-6">
      <div class="rounded-xl border border-slate-200 bg-white p-4">
        <div class="grid grid-cols-2 md:grid-cols-1 gap-2 text-sm">
          <button class="sem-btn rounded-md border border-slate-200 px-3 py-2 text-left font-semibold text-[#0b2c65]" data-sem="s1">Primer Semestre</button>
          <button class="sem-btn rounded-md border border-slate-200 px-3 py-2 text-left" data-sem="s2">Segundo Semestre</button>
          <button class="sem-btn rounded-md border border-slate-200 px-3 py-2 text-left" data-sem="s3">Tercer Semestre</button>
          <button class="sem-btn rounded-md border border-slate-200 px-3 py-2 text-left" data-sem="s4">Cuarto Semestre</button>
          <button class="sem-btn rounded-md border border-slate-200 px-3 py-2 text-left" data-sem="s5">Quinto Semestre</button>
          <button class="sem-btn rounded-md border border-slate-200 px-3 py-2 text-left" data-sem="s6">Sexto Semestre</button>
        </div>
      </div>
      <div class="md:col-span-2 rounded-xl border border-slate-200 bg-white p-6">
        <ul class="sem-panel list-disc list-inside space-y-2 text-slate-600" data-sem-panel="s1">
          <li>Matemáticas I</li>
          <li>Taller de cómputo I</li>
          <li>Química I</li>
          <li>Historia universal moderna y contemporánea I</li>
          <li>Taller de lectura, redacción e iniciación a la investigación documental I</li>
          <li>Inglés I</li>
          <li>Igualdad de género</li>
        </ul>
        <ul class="sem-panel hidden list-disc list-inside space-y-2 text-slate-600" data-sem-panel="s2">
          <li>Matemáticas II</li>
          <li>Taller de cómputo II</li>
          <li>Química II</li>
          <li>Historia universal moderna y contemporánea II</li>
          <li>Taller de lectura, redacción e iniciación a la investigación documental II</li>
          <li>Inglés II</li>
        </ul>
        <ul class="sem-panel hidden list-disc list-inside space-y-2 text-slate-600" data-sem-panel="s3">
          <li>Matemáticas III</li>
          <li>Física I</li>
          <li>Biología I</li>
          <li>Historia de México I</li>
          <li>Taller de lectura, redacción e iniciación a la investigación documental III</li>
          <li>Inglés III</li>
        </ul>
        <ul class="sem-panel hidden list-disc list-inside space-y-2 text-slate-600" data-sem-panel="s4">
          <li>Matemáticas IV</li>
          <li>Física II</li>
          <li>Biología II</li>
          <li>Historia de México II</li>
          <li>Taller de lectura, redacción e iniciación a la investigación documental IV</li>
          <li>Inglés IV</li>
        </ul>
        <ul class="sem-panel hidden list-disc list-inside space-y-2 text-slate-600" data-sem-panel="s5">
          <li>Filosofía I</li>
          <li>Estadística y probabilidad I</li>
          <li>Cibernética y computación I</li>
          <li>Física III</li>
          <li>Administración I</li>
          <li>Ciencias políticas y sociales I</li>
          <li>Derecho I</li>
        </ul>
        <ul class="sem-panel hidden list-disc list-inside space-y-2 text-slate-600" data-sem-panel="s6">
          <li>Filosofía II</li>
          <li>Estadística y probabilidad II</li>
          <li>Cibernética y computación II</li>
          <li>Física IV</li>
          <li>Administración II</li>
          <li>Ciencias políticas II</li>
          <li>Derecho II</li>
        </ul>
      </div>
    </div>
  </section>

  <section class="mt-12 text-center">
    <h2 class="text-2xl sm:text-3xl font-semibold text-[#0b2c65]">Horario</h2>
    <p class="mt-3 text-slate-600">Lunes a viernes de 16:00 hrs. a 21:00 hrs.</p>
  </section>
  </main>
</div>

<style>
  body.cch-isec footer { margin-top: 0; }
</style>

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

<?php require __DIR__ . '/../partials/footer.php'; ?>
