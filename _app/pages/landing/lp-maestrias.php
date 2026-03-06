<?php
$title = 'Landing Maestrias | UNEG';
$active = 'oferta';
$bodyClass = 'bg-white lp-maestrias-page';
require __DIR__ . '/../partials/header.php';
?>

<section class="-mx-6 bg-[radial-gradient(circle_at_top_left,_#1842b8_0%,_#0b2c86_45%,_#0a1f66_100%)] text-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 py-12 sm:py-16">
    <div class="max-w-4xl mx-auto text-center">
      <p class="text-sm uppercase tracking-[0.18em] text-white/75">Universidad de Negocios ISEC</p>
      <h1 class="mt-3 text-3xl sm:text-4xl lg:text-5xl font-semibold leading-tight">&iexcl;Inicia tu Maestr&iacute;a en Mayo y lleva tu carrera al siguiente nivel!</h1>
      <p class="mt-4 text-[#ffd23f] text-base sm:text-lg font-medium">Convierte tu conocimiento en una ventaja competitiva con programas dise&ntilde;ados para profesionales que buscan flexibilidad y conexiones con la industria.</p>
    </div>

    <div class="mt-10 grid grid-cols-1 lg:grid-cols-2 gap-10 items-start lg:items-center">
      <div class="lg:flex lg:items-center">
        <figure class="w-[90%] lg:w-[80%] mx-auto">
          <img
            src="<?php echo $assetBase; ?>/_imgs/landings/maestrias/chatgpt-maestrias-12_56_52.webp"
            alt="Aspirante a maestria UNEG"
            class="block w-full h-auto rounded-3xl"
            loading="eager"
            fetchpriority="high"
            width="1024"
            height="1536"
          >
        </figure>
      </div>

      <div>
        <div class="rounded-3xl bg-white text-slate-800 shadow-2xl p-6 sm:p-8">
          <h2 class="text-xl sm:text-2xl font-semibold text-center">Da el primer paso</h2>
          <p class="mt-2 text-center text-slate-600">Completa el formulario y asegura tu lugar en Universidad de Negocios ISEC.</p>

          <form class="mt-6 flex flex-col gap-3 text-sm" method="post" action="<?php echo $base; ?>/api/forms/contacto" autocomplete="on">
            <input class="block w-full rounded-md border border-slate-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#0b2c86]/30" type="text" name="full_name" placeholder="Nombre" required>
            <input class="block w-full rounded-md border border-slate-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#0b2c86]/30" type="email" name="email" placeholder="Correo electr&oacute;nico" required>
            <input class="block w-full rounded-md border border-slate-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#0b2c86]/30" type="tel" name="phone" placeholder="Tel&eacute;fono (10 d&iacute;gitos)" required>
            <input type="hidden" name="channel" value="Landing Maestrias">
            <input type="hidden" name="medium" value="landing page (LP Maestrias)">

            <div class="relative">
              <select class="block w-full appearance-none rounded-md border border-slate-300 px-4 py-3 pr-12 focus:outline-none focus:ring-2 focus:ring-[#0b2c86]/30" name="interest" required>
                <option value="" selected>Selecciona una oferta educativa</option>
                <option value="Maestria en Administracion de Negocios">Maestr&iacute;a en Administraci&oacute;n de Negocios</option>
                <option value="Maestria en Finanzas">Maestr&iacute;a en Finanzas</option>
                <option value="Maestria en Fiscal">Maestr&iacute;a en Fiscal</option>
                <option value="Maestria en Mercadotecnia">Maestr&iacute;a en Mercadotecnia</option>
              </select>
              <span class="pointer-events-none absolute right-4 top-1/2 -translate-y-1/2 text-[#0b2c86]">
                <i class="text-xl" data-lucide="chevron-down"></i>
              </span>
            </div>

            <div class="relative">
              <select class="block w-full appearance-none rounded-md border border-slate-300 px-4 py-3 pr-12 focus:outline-none focus:ring-2 focus:ring-[#0b2c86]/30" name="source">
                <option value="" selected>&iquest;Cu&aacute;l es tu estatus de titulaci&oacute;n?</option>
                <option value="Titulado">Titulado</option>
                <option value="En tramite">En tr&aacute;mite</option>
                <option value="No me he titulado y tampoco estoy en tramites">No me he titulado y tampoco estoy en tr&aacute;mites</option>
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
      <h2 class="text-2xl sm:text-3xl font-semibold text-center">Conoce nuestras Maestr&iacute;as</h2>
      <p class="mt-4 text-base sm:text-lg leading-relaxed text-center max-w-4xl mx-auto">
        El mundo profesional exige m&aacute;s que solo experiencia: requiere conocimiento estrat&eacute;gico y visi&oacute;n de liderazgo.
        Nuestras maestr&iacute;as est&aacute;n dise&ntilde;adas para impulsar tu crecimiento, con un modelo educativo que combina practicidad,
        innovaci&oacute;n y conexi&oacute;n con el mundo empresarial.
      </p>
      <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 text-base">
        <div class="flex items-start gap-3"><i data-lucide="megaphone" class="mt-0.5 h-7 w-7 text-[#0b2c86]"></i><span>Maestr&iacute;a en Mercadotecnia</span></div>
        <div class="flex items-start gap-3"><i data-lucide="book-open" class="mt-0.5 h-7 w-7 text-[#0b2c86]"></i><span>Maestr&iacute;a en Finanzas</span></div>
        <div class="flex items-start gap-3"><i data-lucide="users" class="mt-0.5 h-7 w-7 text-[#0b2c86]"></i><span>Maestr&iacute;a en Fiscal</span></div>
        <div class="flex items-start gap-3"><i data-lucide="line-chart" class="mt-0.5 h-7 w-7 text-[#0b2c86]"></i><span>Maestr&iacute;a en Administraci&oacute;n de Negocios</span></div>
      </div>
    </div>
  </div>
</section>

<section class="-mx-6 bg-[#f3f4f8] py-14 sm:py-16">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <h2 class="text-center text-3xl sm:text-4xl font-semibold text-slate-900">Beneficios Universidad de Negocios ISEC</h2>

    <div class="mt-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
      <article class="rounded-3xl bg-[#d9dcec] p-7 text-center">
        <i data-lucide="medal" class="mx-auto h-8 w-8 text-[#0b2c86]"></i>
        <p class="mt-4 text-lg leading-relaxed"><strong>Horario flexible para profesionistas.</strong> Dise&ntilde;ados para que combines estudios y trabajo sin comprometer tu avance.</p>
      </article>
      <article class="rounded-3xl bg-[#d9dcec] p-7 text-center">
        <i data-lucide="medal" class="mx-auto h-8 w-8 text-[#0b2c86]"></i>
        <p class="mt-4 text-lg leading-relaxed"><strong>Docentes con experiencia real en la industria.</strong> Aprende de expertos que aplican el conocimiento en el mundo laboral.</p>
      </article>
      <article class="rounded-3xl bg-[#d9dcec] p-7 text-center">
        <i data-lucide="medal" class="mx-auto h-8 w-8 text-[#0b2c86]"></i>
        <p class="mt-4 text-lg leading-relaxed"><strong>Desarrollo de liderazgo y visi&oacute;n estrat&eacute;gica.</strong> Convi&eacute;rtete en un profesional altamente competitivo y preparado para altos cargos.</p>
      </article>
      <article class="rounded-3xl bg-[#d9dcec] p-7 text-center">
        <i data-lucide="medal" class="mx-auto h-8 w-8 text-[#0b2c86]"></i>
        <p class="mt-4 text-lg leading-relaxed"><strong>Networking y liderazgo.</strong> Con&eacute;ctate con profesionales y ampl&iacute;a tus estrategias de negocio.</p>
      </article>
      <article class="rounded-3xl bg-[#d9dcec] p-7 text-center">
        <i data-lucide="medal" class="mx-auto h-8 w-8 text-[#0b2c86]"></i>
        <p class="mt-4 text-lg leading-relaxed"><strong>Enfoque pr&aacute;ctico y basado en casos reales.</strong> Aplica lo aprendido en escenarios de negocio reales desde el primer d&iacute;a.</p>
      </article>
      <article class="rounded-3xl bg-[#d9dcec] p-7 text-center sm:col-span-1 lg:col-start-2">
        <i data-lucide="medal" class="mx-auto h-8 w-8 text-[#0b2c86]"></i>
        <p class="mt-4 text-lg leading-relaxed"><strong>Dirige tu empresa</strong> con seguridad. Desarrolla habilidades estrat&eacute;gicas para tomar decisiones clave y hacer crecer tu negocio.</p>
      </article>
      <article class="rounded-3xl bg-[#d9dcec] p-7 text-center sm:col-span-1">
        <i data-lucide="medal" class="mx-auto h-8 w-8 text-[#0b2c86]"></i>
        <p class="mt-4 text-lg leading-relaxed"><strong>Ubicaci&oacute;n estrat&eacute;gica en la CDMX.</strong> Estudia en el coraz&oacute;n de la ciudad, cerca de centros empresariales y oportunidades laborales.</p>
      </article>
    </div>
  </div>
</section>

<style>
  body.lp-maestrias-page footer { margin-top: 0; }
</style>

<?php require __DIR__ . '/../partials/footer.php'; ?>
