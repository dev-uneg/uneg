<?php
$title = 'Landing Licenciaturas | UNEG';
$active = 'oferta';
$bodyClass = 'bg-white lp-licenciaturas-page';
require __DIR__ . '/../partials/header.php';
?>

<section class="-mx-6 bg-[radial-gradient(circle_at_top_left,_#1842b8_0%,_#0b2c86_45%,_#0a1f66_100%)] text-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 py-12 sm:py-16">
    <div class="max-w-4xl mx-auto text-center">
      <p class="text-sm uppercase tracking-[0.18em] text-white/75">Universidad de Negocios ISEC</p>
      <h1 class="mt-3 text-3xl sm:text-4xl lg:text-5xl font-semibold leading-tight">&iexcl;Inicia tu Licenciatura en Mayo y despega tu futuro profesional!</h1>
      <p class="mt-4 text-[#ffd23f] text-base sm:text-lg font-medium">Tu carrera, tu &eacute;xito: seguridad de avanzar con Universidad de Negocios ISEC.</p>
    </div>

    <div class="mt-10 grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
      <div>
        <div class="p-6">
          <div class="relative w-[70%] mx-auto">
            <img
              src="<?php echo $assetBase; ?>/_imgs/landings/licenciaturas/persona_fondo.png"
              alt="Aspirante a licenciatura UNEG"
              class="block w-full h-auto"
              style="-webkit-mask-image: linear-gradient(to bottom, rgba(0,0,0,1) 72%, rgba(0,0,0,0) 100%); mask-image: linear-gradient(to bottom, rgba(0,0,0,1) 72%, rgba(0,0,0,0) 100%);"
              loading="eager"
            >
          </div>
          <p class="mt-5 text-base sm:text-lg leading-relaxed text-slate-100 text-center">
            En Universidad de Negocios ISEC, te ofrecemos Licenciaturas dise&ntilde;adas para que avances con seguridad en el mundo profesional.
            Con planes de estudio actualizados y alianzas estrat&eacute;gicas, te preparamos para destacar en el campo que elijas.
          </p>
        </div>
      </div>

      <div>
        <div class="rounded-3xl bg-white text-slate-800 shadow-2xl p-6 sm:p-8">
          <h2 class="text-xl sm:text-2xl font-semibold text-center">Da el primer paso</h2>
          <p class="mt-2 text-center text-slate-600">Completa el formulario y asegura tu lugar en Universidad de Negocios ISEC.</p>

          <form class="mt-6 flex flex-col gap-3 text-sm" method="post" action="<?php echo $base; ?>/api/forms/contacto" autocomplete="on">
            <input class="block w-full rounded-md border border-slate-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#0b2c86]/30" type="text" name="full_name" placeholder="Nombre" required>
            <input class="block w-full rounded-md border border-slate-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#0b2c86]/30" type="email" name="email" placeholder="Correo electr&oacute;nico" required>
            <input class="block w-full rounded-md border border-slate-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#0b2c86]/30" type="tel" name="phone" placeholder="Tel&eacute;fono (10 d&iacute;gitos)" required>
            <input type="hidden" name="channel" value="Landing Licenciaturas">
            <input type="hidden" name="medium" value="LP Licenciaturas">

            <div class="relative">
              <select class="block w-full appearance-none rounded-md border border-slate-300 px-4 py-3 pr-12 focus:outline-none focus:ring-2 focus:ring-[#0b2c86]/30" name="interest" required>
                <option value="" selected>Selecciona una oferta educativa</option>
                <option value="Licenciatura en Negocios Internacionales">Licenciatura en Negocios Internacionales</option>
                <option value="Ingenieria en Administracion y Negocios">Ingenier&iacute;a en Administraci&oacute;n y Negocios</option>
                <option value="Licenciatura en Derecho">Licenciatura en Derecho</option>
              </select>
              <span class="pointer-events-none absolute right-4 top-1/2 -translate-y-1/2 text-[#0b2c86]">
                <i class="text-xl" data-lucide="chevron-down"></i>
              </span>
            </div>

            <div class="relative">
              <select class="block w-full appearance-none rounded-md border border-slate-300 px-4 py-3 pr-12 focus:outline-none focus:ring-2 focus:ring-[#0b2c86]/30" name="source">
                <option value="" selected>Estado de tu certificado</option>
                <option value="Cuento con certificado">Cuento con certificado</option>
                <option value="En tramite">En tr&aacute;mite</option>
                <option value="No tengo el certificado y tampoco estoy en tramites">No tengo el certificado y tampoco estoy en tr&aacute;mites</option>
              </select>
              <span class="pointer-events-none absolute right-4 top-1/2 -translate-y-1/2 text-[#0b2c86]">
                <i class="text-xl" data-lucide="chevron-down"></i>
              </span>
            </div>

            <label class="text-sm text-slate-600 flex items-start gap-2">
              <input type="checkbox" class="mt-0.5 h-4 w-4" name="privacy" required>
              <span>Estoy de acuerdo con las <a href="<?php echo $base; ?>/aviso-de-privacidad" target="_blank" rel="noopener" class="font-semibold text-[#0b2c86] underline">Pol&iacute;ticas de privacidad</a></span>
            </label>

            <button type="submit" class="mt-1 block w-full rounded-md bg-[#0c45b4] px-5 py-3 text-white text-base font-bold tracking-wide hover:bg-[#0a3a98]">CONTACTAR AHORA</button>
            <p class="text-sm sm:text-base text-slate-500 text-center leading-relaxed">
              Comparte tus datos con confianza. Un asesor te contactar&aacute; en breve para darte informaci&oacute;n personalizada.
              Tu informaci&oacute;n se procesa de forma responsable y conforme a nuestro Aviso de Privacidad.
            </p>
          </form>
        </div>
      </div>
    </div>

    <div class="mt-12 rounded-2xl bg-[#d9dcec] text-slate-900 px-6 sm:px-8 py-8">
      <h2 class="text-2xl sm:text-3xl font-semibold text-center">Conoce nuestras Licenciaturas</h2>
      <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 text-base">
        <div class="flex items-start gap-3"><i data-lucide="graduation-cap" class="mt-0.5 h-7 w-7 text-[#0b2c86]"></i><span>Licenciatura en Negocios Internacionales</span></div>
        <div class="flex items-start gap-3"><i data-lucide="building-2" class="mt-0.5 h-7 w-7 text-[#0b2c86]"></i><span>Ingenier&iacute;a en Administraci&oacute;n y Negocios</span></div>
        <div class="flex items-start gap-3"><i data-lucide="scale" class="mt-0.5 h-7 w-7 text-[#0b2c86]"></i><span>Licenciatura en Derecho</span></div>
      </div>
    </div>
  </div>
</section>

<section class="-mx-6 bg-[#f3f4f8] py-14 sm:py-16">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <h2 class="text-center text-3xl sm:text-4xl font-semibold text-slate-900">Beneficios Universidad de Negocios ISEC</h2>

    <div class="mt-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
      <article class="rounded-3xl bg-[#d9dcec] p-7 text-center">
        <i data-lucide="briefcase" class="mx-auto h-8 w-8 text-[#0b2c86]"></i>
        <p class="mt-4 text-lg leading-relaxed"><strong>Bolsa de trabajo</strong> con oportunidades exclusivas en empresas nacionales e internacionales.</p>
      </article>
      <article class="rounded-3xl bg-[#d9dcec] p-7 text-center">
        <i data-lucide="users" class="mx-auto h-8 w-8 text-[#0b2c86]"></i>
        <p class="mt-4 text-lg leading-relaxed"><strong>Convenios estrat&eacute;gicos</strong> que te conectan con l&iacute;deres de la industria.</p>
      </article>
      <article class="rounded-3xl bg-[#d9dcec] p-7 text-center">
        <i data-lucide="medal" class="mx-auto h-8 w-8 text-[#0b2c86]"></i>
        <p class="mt-4 text-lg leading-relaxed"><strong>Educaci&oacute;n con visi&oacute;n empresarial</strong> enfocada en resultados reales.</p>
      </article>
      <article class="rounded-3xl bg-[#d9dcec] p-7 text-center">
        <i data-lucide="calendar" class="mx-auto h-8 w-8 text-[#0b2c86]"></i>
        <p class="mt-4 text-lg leading-relaxed"><strong>Plan cuatrimestral</strong> para acelerar tu ingreso al mundo profesional.</p>
      </article>
      <article class="rounded-3xl bg-[#d9dcec] p-7 text-center">
        <i data-lucide="lightbulb" class="mx-auto h-8 w-8 text-[#0b2c86]"></i>
        <p class="mt-4 text-lg leading-relaxed">Aprende con metodolog&iacute;as basadas en <strong>problemas empresariales</strong> reales.</p>
      </article>
      <article class="rounded-3xl bg-[#d9dcec] p-7 text-center">
        <i data-lucide="map-pin" class="mx-auto h-8 w-8 text-[#0b2c86]"></i>
        <p class="mt-4 text-lg leading-relaxed"><strong>Estudia en una de las zonas mejor conectadas</strong> de la ciudad.</p>
      </article>
      <article class="rounded-3xl bg-[#d9dcec] p-7 text-center">
        <i data-lucide="building-2" class="mx-auto h-8 w-8 text-[#0b2c86]"></i>
        <p class="mt-4 text-lg leading-relaxed"><strong>Infraestructura moderna</strong> para el aprendizaje din&aacute;mico y tecnol&oacute;gico.</p>
      </article>
      <article class="rounded-3xl bg-[#d9dcec] p-7 text-center">
        <i data-lucide="users" class="mx-auto h-8 w-8 text-[#0b2c86]"></i>
        <p class="mt-4 text-lg leading-relaxed"><strong>Acompa&ntilde;amiento acad&eacute;mico</strong> durante todo tu proceso universitario.</p>
      </article>
    </div>
  </div>
</section>

<style>
  body.lp-licenciaturas-page footer { margin-top: 0; }
</style>

<?php require __DIR__ . '/../partials/footer.php'; ?>
