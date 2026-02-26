<?php
$title = 'Licenciaturas | UNEG';
$active = 'oferta';
$bodyClass = 'bg-slate-50 page-gray';
require __DIR__ . '/../partials/header.php';
?>

<div class="-mx-6 bg-slate-50">
<main class="max-w-7xl mx-auto px-4 py-10">
  <section class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
    <img src="<?php echo $assetBase; ?>/_imgs/licenciaturas/hero.webp" alt="Licenciaturas" class="block w-full h-auto" loading="eager">
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
    <h2 class="text-2xl sm:text-3xl font-semibold text-[#0b2c65]">Licenciaturas en CDMX: Educación profesional enfocada a negocios</h2>
    <p class="mt-2 text-slate-600">
      El plan de estudios de nuestras licenciaturas en CDMX está enfocado en un entorno profesional de negocios.
    </p>
  </section>

  <section class="mt-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
    <a href="<?php echo $base; ?>/licenciaturas/contaduria-publica-estrategica" class="block rounded-xl border border-slate-200 bg-white p-6 text-center shadow-sm transition hover:-translate-y-0.5 hover:shadow-md">
      <div class="mx-auto h-24 w-24 rounded-full bg-[#0b2c65] text-white flex items-center justify-center">
        <i class="ri-calculator-line text-3xl"></i>
      </div>
      <h3 class="mt-4 font-semibold text-[#0b2c65]">Licenciatura en Contaduría Pública Estratégica</h3>
      <p class="mt-1 text-xs text-slate-500">SEP RVOE 20180766</p>
    </a>
    <a href="<?php echo $base; ?>/licenciaturas/derecho" class="block rounded-xl border border-slate-200 bg-white p-6 text-center shadow-sm transition hover:-translate-y-0.5 hover:shadow-md">
      <div class="mx-auto h-24 w-24 rounded-full bg-[#0b2c65] text-white flex items-center justify-center">
        <i class="ri-scales-3-line text-3xl"></i>
      </div>
      <h3 class="mt-4 font-semibold text-[#0b2c65]">Licenciatura en Derecho</h3>
      <p class="mt-1 text-xs text-slate-500">SEP RVOE 20180822</p>
    </a>
    <a href="<?php echo $base; ?>/licenciaturas/ingenieria-en-administracion-y-negocios" class="block rounded-xl border border-slate-200 bg-white p-6 text-center shadow-sm transition hover:-translate-y-0.5 hover:shadow-md">
      <div class="mx-auto h-24 w-24 rounded-full bg-[#0b2c65] text-white flex items-center justify-center">
        <i class="ri-building-2-line text-3xl"></i>
      </div>
      <h3 class="mt-4 font-semibold text-[#0b2c65]">Licenciatura en Ingeniería en Administración y Negocios</h3>
      <p class="mt-1 text-xs text-slate-500">SEP RVOE 20180848</p>
    </a>
    <a href="<?php echo $base; ?>/licenciaturas/ingenieria-en-finanzas" class="block rounded-xl border border-slate-200 bg-white p-6 text-center shadow-sm transition hover:-translate-y-0.5 hover:shadow-md">
      <div class="mx-auto h-24 w-24 rounded-full bg-[#0b2c65] text-white flex items-center justify-center">
        <i class="ri-line-chart-line text-3xl"></i>
      </div>
      <h3 class="mt-4 font-semibold text-[#0b2c65]">Licenciatura en Ingeniería en Finanzas</h3>
      <p class="mt-1 text-xs text-slate-500">SEP RVOE 20180850</p>
    </a>

    <a href="<?php echo $base; ?>/licenciaturas/ingenieria-en-tecnologias-de-informacion-para-negocios" class="block rounded-xl border border-slate-200 bg-white p-6 text-center shadow-sm transition hover:-translate-y-0.5 hover:shadow-md">
      <div class="mx-auto h-24 w-24 rounded-full bg-[#0b2c65] text-white flex items-center justify-center">
        <i class="ri-computer-line text-3xl"></i>
      </div>
      <h3 class="mt-4 font-semibold text-[#0b2c65]">Licenciatura en Ingeniería en Tecnologías de Información para Negocios</h3>
      <p class="mt-1 text-xs text-slate-500">RVOE SEP 20180780</p>
    </a>
    <a href="<?php echo $base; ?>/licenciaturas/mercadotecnia-estrategica" class="block rounded-xl border border-slate-200 bg-white p-6 text-center shadow-sm transition hover:-translate-y-0.5 hover:shadow-md">
      <div class="mx-auto h-24 w-24 rounded-full bg-[#0b2c65] text-white flex items-center justify-center">
        <i class="ri-megaphone-line text-3xl"></i>
      </div>
      <h3 class="mt-4 font-semibold text-[#0b2c65]">Licenciatura en Mercadotecnia Estratégica</h3>
      <p class="mt-1 text-xs text-slate-500">SEP RVOE 20180849</p>
    </a>
    <a href="<?php echo $base; ?>/licenciaturas/negocios-internacionales" class="block rounded-xl border border-slate-200 bg-white p-6 text-center shadow-sm transition hover:-translate-y-0.5 hover:shadow-md">
      <div class="mx-auto h-24 w-24 rounded-full bg-[#0b2c65] text-white flex items-center justify-center">
        <i class="ri-earth-line text-3xl"></i>
      </div>
      <h3 class="mt-4 font-semibold text-[#0b2c65]">Licenciatura en Negocios Internacionales</h3>
      <p class="mt-1 text-xs text-slate-500">SEP RVOE 20180820</p>
    </a>
    <a href="<?php echo $base; ?>/licenciaturas/pedagogia" class="block rounded-xl border border-slate-200 bg-white p-6 text-center shadow-sm transition hover:-translate-y-0.5 hover:shadow-md">
      <div class="mx-auto h-24 w-24 rounded-full bg-[#0b2c65] text-white flex items-center justify-center">
        <i class="ri-book-open-line text-3xl"></i>
      </div>
      <h3 class="mt-4 font-semibold text-[#0b2c65]">Licenciatura en Pedagogía</h3>
      <p class="mt-1 text-xs text-slate-500">UNAM CLAVE 3172-23 Acuerdo CIRE 11/09</p>
    </a>

    <a href="<?php echo $base; ?>/licenciaturas/psicologia" class="block rounded-xl border border-slate-200 bg-white p-6 text-center shadow-sm transition hover:-translate-y-0.5 hover:shadow-md">
      <div class="mx-auto h-24 w-24 rounded-full bg-[#0b2c65] text-white flex items-center justify-center">
        <i class="ri-psychotherapy-line text-3xl"></i>
      </div>
      <h3 class="mt-4 font-semibold text-[#0b2c65]">Licenciatura en Psicología</h3>
      <p class="mt-1 text-xs text-slate-500">UNAM CLAVE 3172-25 Acuerdo CIRE 23/02</p>
    </a>
    <a href="<?php echo $base; ?>/licenciaturas/innovacion-turistica-y-gastronomica" class="block rounded-xl border border-slate-200 bg-white p-6 text-center shadow-sm transition hover:-translate-y-0.5 hover:shadow-md">
      <div class="mx-auto h-24 w-24 rounded-full bg-[#0b2c65] text-white flex items-center justify-center">
        <i class="ri-restaurant-2-line text-3xl"></i>
      </div>
      <h3 class="mt-4 font-semibold text-[#0b2c65]">Licenciatura en Innovación Turística y Gastronómica</h3>
      <p class="mt-1 text-xs text-slate-500">RVOE SEP 20180767</p>
    </a>
    <a href="<?php echo $base; ?>/licenciaturas/administracion-sua" class="block rounded-xl border border-slate-200 bg-white p-6 text-center shadow-sm transition hover:-translate-y-0.5 hover:shadow-md">
      <div class="mx-auto h-24 w-24 rounded-full bg-[#0b2c65] text-white flex items-center justify-center">
        <i class="ri-user-settings-line text-3xl"></i>
      </div>
      <h3 class="mt-4 font-semibold text-[#0b2c65]">Licenciatura en Administración, Sistema de Universidad Abierta (SUA)</h3>
      <p class="mt-1 text-xs text-slate-500">UNAM 3172-82</p>
    </a>
    <a href="<?php echo $base; ?>/licenciaturas/derecho-sua" class="block rounded-xl border border-slate-200 bg-white p-6 text-center shadow-sm transition hover:-translate-y-0.5 hover:shadow-md">
      <div class="mx-auto h-24 w-24 rounded-full bg-[#0b2c65] text-white flex items-center justify-center">
        <i class="ri-scales-3-line text-3xl"></i>
      </div>
      <h3 class="mt-4 font-semibold text-[#0b2c65]">Licenciatura en Derecho, Sistema de Universidad Abierta (SUA)</h3>
      <p class="mt-1 text-xs text-slate-500">UNAM 3172-86</p>
    </a>

    <a href="<?php echo $base; ?>/licenciaturas/ingenieria-en-inteligencia-artificial" class="block rounded-xl border border-slate-200 bg-white p-6 text-center shadow-sm transition hover:-translate-y-0.5 hover:shadow-md">
      <div class="mx-auto h-24 w-24 rounded-full bg-[#0b2c65] text-white flex items-center justify-center">
        <i class="ri-cpu-line text-3xl"></i>
      </div>
      <h3 class="mt-4 font-semibold text-[#0b2c65]">Ingeniería en Inteligencia Artificial</h3>
      <p class="mt-1 text-xs text-slate-500">Acuerdo A-RVOE-DG-NS/04-2024</p>
    </a>
  </section>

</main>
</div>

<style>
  body.page-gray footer { margin-top: 0; }
</style>

<?php require __DIR__ . '/../partials/footer.php'; ?>
