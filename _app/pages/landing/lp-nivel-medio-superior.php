<?php
$title = 'Landing Nivel Medio Superior | UNEG';
$active = 'oferta';
$bodyClass = 'bg-white lp-nivel-medio-superior-page';
require __DIR__ . '/../partials/header-lp.php';
?>

<section class="-mx-6 bg-[radial-gradient(circle_at_top_left,_#1842b8_0%,_#0b2c86_45%,_#0a1f66_100%)] text-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 py-12 sm:py-16">
    <div class="max-w-4xl mx-auto text-center">
      <p class="text-sm uppercase tracking-[0.18em] text-white/75">Universidad de Negocios ISEC</p>
      <h1 class="mt-3 text-3xl sm:text-4xl lg:text-5xl font-semibold leading-tight">&iexcl;Inicia tu Nivel Medio Superior en Mayo y abre nuevas oportunidades!</h1>
      <p class="mt-4 text-[#ffd23f] text-base sm:text-lg font-medium">Prep&aacute;rate con programas dise&ntilde;ados para impulsar tu siguiente etapa acad&eacute;mica.</p>
    </div>

    <div class="mt-10 grid grid-cols-1 lg:grid-cols-2 gap-10 items-start lg:items-center">
      <div class="flex flex-col items-center">
        <figure class="w-[90%] lg:w-[82%] mx-auto">
          <img
            src="<?php echo $assetBase; ?>/_imgs/nms/cch/hero.webp"
            alt="Nivel medio superior UNEG"
            class="block w-full h-auto rounded-3xl"
            loading="eager"
            fetchpriority="high"
          >
        </figure>
        <p class="mt-4 text-sm sm:text-base text-white/90 leading-relaxed text-center max-w-xl mx-auto">
          En Universidad de Negocios ISEC te ofrecemos opciones de nivel medio superior con enfoque acad&eacute;mico y acompa&ntilde;amiento para que avances con seguridad hacia tu formaci&oacute;n profesional.
        </p>
      </div>

      <div>
        <div class="rounded-3xl bg-white text-slate-800 shadow-2xl p-6 sm:p-8">
          <h2 class="text-xl sm:text-2xl font-semibold text-center">Da el primer paso</h2>
          <p class="mt-2 text-center text-slate-600">Completa el formulario y recibe atenci&oacute;n personalizada para tu admisi&oacute;n.</p>

          <form class="mt-6 flex flex-col gap-3 text-sm" method="post" action="<?php echo $base; ?>/api/forms/contacto" autocomplete="on">
            <input class="block w-full rounded-md border border-slate-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#0b2c86]/30" type="text" name="full_name" placeholder="Nombre" required>
            <input class="block w-full rounded-md border border-slate-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#0b2c86]/30" type="email" name="email" placeholder="Correo electr&oacute;nico" required>
            <input class="block w-full rounded-md border border-slate-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#0b2c86]/30" type="tel" name="phone" placeholder="Tel&eacute;fono (10 d&iacute;gitos)" required>
            <input type="hidden" name="channel" value="Landing Nivel Medio Superior">
            <input type="hidden" name="medium" value="Landing">

            <div class="relative">
              <select class="block w-full appearance-none rounded-md border border-slate-300 px-4 py-3 pr-12 focus:outline-none focus:ring-2 focus:ring-[#0b2c86]/30" name="interest" required>
                <option value="" selected>Selecciona una oferta educativa</option>
                <option value="CCH ISEC">CCH ISEC</option>
                <option value="Bachillerato en Linea">Bachillerato en L&iacute;nea</option>
                <option value="Bachillerato Tecnico en Administracion de Empresas Turisticas">Bachillerato T&eacute;cnico en Administraci&oacute;n de Empresas Tur&iacute;sticas</option>
                <option value="Curso COLBACH">Curso COLBACH</option>
              </select>
              <span class="pointer-events-none absolute right-4 top-1/2 -translate-y-1/2 text-[#0b2c86]">
                <i class="text-xl" data-lucide="chevron-down"></i>
              </span>
            </div>

            <div class="relative">
              <select class="block w-full appearance-none rounded-md border border-slate-300 px-4 py-3 pr-12 focus:outline-none focus:ring-2 focus:ring-[#0b2c86]/30" name="source">
                <option value="" selected>&iquest;En qu&eacute; etapa acad&eacute;mica te encuentras?</option>
                <option value="Secundaria terminada">Secundaria terminada</option>
                <option value="Secundaria en curso">Secundaria en curso</option>
                <option value="Preparatoria inconclusa">Preparatoria inconclusa</option>
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
              Comparte tus datos con confianza. Un asesor te contactar&aacute; en breve para orientarte sobre inscripciones, horarios y requisitos.
            </p>
          </form>
        </div>
      </div>
    </div>

    <div class="mt-12 rounded-2xl bg-[#d9dcec] text-slate-900 px-6 sm:px-8 py-8">
      <h2 class="text-2xl sm:text-3xl font-semibold text-center">Conoce nuestra oferta de Nivel Medio Superior</h2>
      <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 text-base max-w-6xl mx-auto">
        <div class="flex flex-col items-center gap-2 text-center"><i data-lucide="school" class="h-7 w-7 text-[#0b2c86]"></i><span>CCH ISEC</span></div>
        <div class="flex flex-col items-center gap-2 text-center"><i data-lucide="monitor" class="h-7 w-7 text-[#0b2c86]"></i><span>Bachillerato en L&iacute;nea</span></div>
        <div class="flex flex-col items-center gap-2 text-center"><i data-lucide="briefcase" class="h-7 w-7 text-[#0b2c86]"></i><span>Bachillerato T&eacute;cnico en Administraci&oacute;n de Empresas Tur&iacute;sticas</span></div>
        <div class="flex flex-col items-center gap-2 text-center"><i data-lucide="book-open" class="h-7 w-7 text-[#0b2c86]"></i><span>Curso COLBACH</span></div>
      </div>
    </div>
  </div>
</section>

<section class="-mx-6 bg-[#f3f4f8] py-14 sm:py-16">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <h2 class="text-center text-3xl sm:text-4xl font-semibold text-slate-900">Beneficios Universidad de Negocios ISEC</h2>

    <div class="mt-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
      <article class="rounded-3xl bg-[#d9dcec] p-7 text-center">
        <i data-lucide="award" class="mx-auto h-8 w-8 text-[#0b2c86]"></i>
        <p class="mt-4 text-lg leading-relaxed"><strong>Validez oficial</strong> en tus estudios de nivel medio superior.</p>
      </article>
      <article class="rounded-3xl bg-[#d9dcec] p-7 text-center">
        <i data-lucide="users" class="mx-auto h-8 w-8 text-[#0b2c86]"></i>
        <p class="mt-4 text-lg leading-relaxed"><strong>Acompa&ntilde;amiento acad&eacute;mico</strong> durante todo tu proceso de formaci&oacute;n.</p>
      </article>
      <article class="rounded-3xl bg-[#d9dcec] p-7 text-center">
        <i data-lucide="clock-3" class="mx-auto h-8 w-8 text-[#0b2c86]"></i>
        <p class="mt-4 text-lg leading-relaxed"><strong>Opciones de horarios y modalidades</strong> para adaptarse a tus necesidades.</p>
      </article>
      <article class="rounded-3xl bg-[#d9dcec] p-7 text-center">
        <i data-lucide="graduation-cap" class="mx-auto h-8 w-8 text-[#0b2c86]"></i>
        <p class="mt-4 text-lg leading-relaxed"><strong>Base s&oacute;lida</strong> para continuar hacia licenciatura y estudios superiores.</p>
      </article>
    </div>
  </div>
</section>

<style>
  body.lp-nivel-medio-superior-page footer { margin-top: 0; }
</style>

<?php require __DIR__ . '/../partials/footer.php'; ?>
