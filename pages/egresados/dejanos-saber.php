<?php
$title = 'Déjanos Saber de Ti | Egresados UNEG';
$active = 'egresados';
require __DIR__ . '/../partials/header.php';
?>

<main class="max-w-7xl mx-auto px-4 py-10">
  <section class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
    <img src="<?php echo $assetBase; ?>/imgs/egresados/hero.png" alt="Egresados ISEC" class="block w-full h-auto" loading="eager">
    <div class="bg-[#0b2c65] text-white">
      <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 px-5 py-4 text-sm">
        <div class="flex items-center gap-3">
          <span class="inline-flex h-9 w-9 items-center justify-center rounded-full bg-white/15">
            <i class="ri-school-line text-lg"></i>
          </span>
          <div>
            <p class="font-semibold">Comunidad</p>
            <p class="text-white/70 text-xs">Egresados ISEC</p>
          </div>
        </div>
        <div class="flex items-center gap-3">
          <span class="inline-flex h-9 w-9 items-center justify-center rounded-full bg-white/15">
            <i class="ri-time-line text-lg"></i>
          </span>
          <div>
            <p class="font-semibold">Red de Profesionales</p>
            <p class="text-white/70 text-xs">Con orgullo ISEC</p>
          </div>
        </div>
        <div class="flex items-center gap-3">
          <span class="inline-flex h-9 w-9 items-center justify-center rounded-full bg-white/15">
            <i class="ri-medal-line text-lg"></i>
          </span>
          <div>
            <p class="font-semibold">Beneficios</p>
            <p class="text-white/70 text-xs">Apoyos para egresados</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="mt-10">
    <h1 class="text-2xl sm:text-3xl font-semibold text-[#0b2c65]">Egresados en acción.</h1>
    <p class="mt-3 text-slate-600">Hoy en día conocerte para nosotros es importante, queremos saber qué has hecho, en dónde has dejado tu huella y, con ello, poder compartirte información importante respecto a tu alma mater, así como accesos a múltiples beneficios por ser egresado de la Universidad de Negocios ISEC.</p>
    <h2 class="mt-6 text-xl font-semibold text-[#0b2c65]">Por favor, ayúdanos con tu registro.</h2>
  </section>

  <?php if (isset($_GET['ok'])): ?>
    <section class="mt-6">
      <div class="rounded-2xl border border-emerald-300 bg-emerald-50 px-5 py-4 text-emerald-900 shadow-sm" role="status" aria-live="polite">
        <div class="flex items-start gap-3">
          <span class="mt-0.5 inline-flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-emerald-200 text-emerald-800">
            <i class="ri-checkbox-circle-line text-lg"></i>
          </span>
          <div>
            <p class="text-sm font-semibold">Registro enviado correctamente</p>
            <p class="mt-1 text-sm text-emerald-800">Gracias por compartir tu información. Pronto podremos contactarte con novedades para egresados.</p>
          </div>
        </div>
      </div>
    </section>
  <?php endif; ?>
  <?php if (isset($_GET['error'])): ?>
    <section class="mt-6">
      <div class="rounded-2xl border border-rose-300 bg-rose-50 px-5 py-4 text-rose-900 shadow-sm" role="alert">
        <div class="flex items-start gap-3">
          <span class="mt-0.5 inline-flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-rose-200 text-rose-800">
            <i class="ri-error-warning-line text-lg"></i>
          </span>
          <div>
            <p class="text-sm font-semibold">No se pudo enviar el registro</p>
            <p class="mt-1 text-sm text-rose-800">Verifica que todos los campos obligatorios estén completos e inténtalo de nuevo.</p>
          </div>
        </div>
      </div>
    </section>
  <?php endif; ?>

  <section class="mt-8 grid grid-cols-1 lg:grid-cols-2 gap-10 items-start">
    <div class="rounded-2xl border border-slate-200 bg-white shadow-sm overflow-hidden">
      <img src="<?php echo $assetBase; ?>/imgs/egresados/egresados-uneg.jpg" alt="Egresados ISEC" class="block w-full h-auto object-cover" loading="lazy">
    </div>

    <div class="rounded-2xl border border-slate-200 bg-white p-6 sm:p-8 shadow-sm">
      <form class="grid grid-cols-1 gap-4 text-base" method="post" action="<?php echo $base; ?>/api/egresados" autocomplete="on">
        <label class="text-sm font-semibold text-slate-700">
          Nombre
          <input class="mt-2 w-full rounded-md border border-slate-300 px-3 py-2.5 text-base" type="text" name="nombre" required>
        </label>
        <label class="text-sm font-semibold text-slate-700">
          Apellido Paterno
          <input class="mt-2 w-full rounded-md border border-slate-300 px-3 py-2.5 text-base" type="text" name="apellido_paterno" required>
        </label>
        <label class="text-sm font-semibold text-slate-700">
          Apellido Materno
          <input class="mt-2 w-full rounded-md border border-slate-300 px-3 py-2.5 text-base" type="text" name="apellido_materno" required>
        </label>
        <div class="text-sm font-semibold text-slate-700">
          Generacion:
          <div class="mt-2 grid grid-cols-1 sm:grid-cols-2 gap-3">
            <div>
              <label class="text-sm font-semibold text-slate-700">Año de ingreso</label>
              <input class="mt-2 w-full rounded-md border border-slate-300 px-3 py-2.5 text-base" type="text" name="anio_ingreso" required>
            </div>
            <div>
              <label class="text-sm font-semibold text-slate-700">Año de egreso</label>
              <input class="mt-2 w-full rounded-md border border-slate-300 px-3 py-2.5 text-base" type="text" name="anio_egreso" required>
            </div>
          </div>
        </div>
        <label class="text-sm font-semibold text-slate-700">
          Nivel de egreso
          <select class="mt-2 w-full rounded-md border border-slate-300 px-3 py-2.5 text-base" name="nivel_egreso" required>
            <option value="" selected>Por favor, seleccione una opción</option>
            <option value="Bachillerato">Bachillerato</option>
            <option value="Licenciatura">Licenciatura</option>
            <option value="Maestria">Maestría</option>
            <option value="Doctorado">Doctorado</option>
            <option value="Diplomado">Diplomado</option>
          </select>
        </label>
        <label class="text-sm font-semibold text-slate-700">
          Carrera de egreso
          <input class="mt-2 w-full rounded-md border border-slate-300 px-3 py-2.5 text-base" type="text" name="carrera_egreso" required>
        </label>
        <label class="text-sm font-semibold text-slate-700">
          Teléfono
          <input class="mt-2 w-full rounded-md border border-slate-300 px-3 py-2.5 text-base" type="tel" name="telefono" required>
        </label>
        <label class="text-sm font-semibold text-slate-700">
          Correo electrónico
          <input class="mt-2 w-full rounded-md border border-slate-300 px-3 py-2.5 text-base" type="email" name="correo" required>
        </label>
        <div class="text-sm font-semibold text-slate-700">
          ¿Actualmente estás trabajando?
          <div class="mt-2 flex items-center gap-5 text-base text-slate-700 font-normal">
            <label class="inline-flex items-center gap-2">
              <input type="radio" name="trabajando" value="si" required>
              Sí
            </label>
            <label class="inline-flex items-center gap-2">
              <input type="radio" name="trabajando" value="no" required>
              No
            </label>
          </div>
        </div>
        <label class="text-sm font-semibold text-slate-700">
          Empresa
          <input class="mt-2 w-full rounded-md border border-slate-300 px-3 py-2.5 text-base" type="text" name="empresa">
        </label>
        <label class="text-sm font-semibold text-slate-700">
          Cargo actual
          <input class="mt-2 w-full rounded-md border border-slate-300 px-3 py-2.5 text-base" type="text" name="cargo">
        </label>
        <button class="mt-2 w-max rounded-md bg-[#0b2c65] px-6 py-2.5 text-white font-semibold shadow-sm hover:bg-[#09306e]" type="submit">Enviar</button>
      </form>
    </div>
  </section>
</main>

<?php require __DIR__ . '/../partials/footer.php'; ?>
