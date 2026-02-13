<?php
$title = 'Contacto | UNEG';
$active = 'contacto';
require __DIR__ . '/partials/header.php';
?>

<main class="max-w-7xl mx-auto px-4 py-12">
  <section class="rounded-3xl bg-gradient-to-r from-[#0b2c65] via-[#0f3b86] to-[#184792] p-8 text-white shadow-lg">
    <div class="flex flex-wrap items-center gap-4">
      <span class="inline-flex h-12 w-12 items-center justify-center rounded-full bg-white/15 text-white">
        <i class="ri-customer-service-2-line text-2xl"></i>
      </span>
      <div>
        <h1 class="text-2xl sm:text-3xl font-semibold">Contacto | Comunícate con Universidad de Negocios ISEC</h1>
        <p class="mt-1 text-white/80">¡Para nosotros eres lo más importante!</p>
      </div>
    </div>
  </section>

  <section class="mt-10 grid grid-cols-1 lg:grid-cols-3 gap-8">
    <div class="lg:col-span-2 rounded-2xl border border-slate-200 bg-white p-6 sm:p-8 shadow-sm">
      <div class="flex items-center gap-3 text-[#0b2c65]">
        <span class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-[#0b2c65] text-white">
          <i class="ri-edit-2-line text-lg"></i>
        </span>
        <div>
          <h2 class="text-xl sm:text-2xl font-semibold">Formulario de Contacto</h2>
          <p class="text-slate-600">Te contactaremos lo antes posible.</p>
        </div>
      </div>
      <p class="mt-4 text-slate-600">Por favor llena el siguiente formulario y en breve uno de nuestros ejecutivos se pondrá en contacto contigo.</p>

      <?php if (isset($_GET['ok'])): ?>
        <div class="mt-4 rounded-lg border border-emerald-200 bg-emerald-50 px-4 py-3 text-sm text-emerald-800">
          Gracias. Tus datos se enviaron correctamente y un asesor te contactará pronto.
        </div>
      <?php elseif (isset($_GET['error'])): ?>
        <div class="mt-4 rounded-lg border border-rose-200 bg-rose-50 px-4 py-3 text-sm text-rose-800">
          No se pudo enviar tu información. Revisa los campos e inténtalo de nuevo.
        </div>
      <?php endif; ?>

      <form class="mt-6 grid grid-cols-1 sm:grid-cols-2 gap-4 text-sm" method="post" action="<?php echo $base; ?>/api/contacto" autocomplete="on">
        <input class="w-full rounded-lg border border-slate-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#0b2c65]/30 sm:col-span-2" placeholder="Nombre completo*" type="text" name="full_name" required />
        <input class="w-full rounded-lg border border-slate-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#0b2c65]/30" placeholder="Correo Electrónico*" type="email" name="email" required />
        <input class="w-full rounded-lg border border-slate-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#0b2c65]/30" placeholder="Teléfono*" type="tel" name="phone" required />
        <input type="hidden" name="channel" value="Sitio web" />
        <input type="hidden" name="medium" value="Sitio web" />
        <div class="relative sm:col-span-2">
          <select class="w-full appearance-none rounded-lg border border-slate-300 px-4 py-3 pr-12 focus:outline-none focus:ring-2 focus:ring-[#0b2c65]/30" name="interest" required>
            <option value="" selected>Estoy interesado en:</option>
            <option value="Bachillerato en linea">Bachillerato en linea</option>
            <option value="Licenciatura en Administracion SUA">Licenciatura en Administracion SUA</option>
            <option value="Licenciatura en Contaduria Publica Estrategica">Licenciatura en Contaduria Publica Estrategica</option>
            <option value="Licenciatura en Derecho">Licenciatura en Derecho</option>
            <option value="Licenciatura en Ingenieria en Administracion de Negocios">Licenciatura en Ingenieria en Administracion de Negocios</option>
            <option value="Licenciatura en Ingenieria en Finanzas">Licenciatura en Ingenieria en Finanzas</option>
            <option value="Licenciatura en Ingenieria en Tecnologias de Informacion para Negocios">Licenciatura en Ingenieria en Tecnologias de Informacion para Negocios</option>
            <option value="Licenciatura en Innovacion Turistica y Gastronomica">Licenciatura en Innovacion Turistica y Gastronomica</option>
            <option value="Licenciatura en Mercadotecnia Estrategica">Licenciatura en Mercadotecnia Estrategica</option>
            <option value="Licenciatura en Negocios Internacionales">Licenciatura en Negocios Internacionales</option>
            <option value="Licenciatura en Psicologia">Licenciatura en Psicologia</option>
            <option value="Maestria en Administracion de Negocios">Maestria en Administracion de Negocios</option>
            <option value="Maestria en Docencia">Maestria en Docencia</option>
            <option value="Maestria en Finanzas">Maestria en Finanzas</option>
            <option value="Maestria en Fiscal">Maestria en Fiscal</option>
            <option value="Maestria en Mercadotecnia">Maestria en Mercadotecnia</option>
            <option value="Maestria en Tecnologias de Informacion y Comunicaciones">Maestria en Tecnologias de Informacion y Comunicaciones</option>
          </select>
          <span class="pointer-events-none absolute right-4 top-1/2 -translate-y-1/2 text-[#0b2c65]">
            <i class="ri-arrow-down-s-line text-xl"></i>
          </span>
        </div>
        <div class="relative sm:col-span-2">
          <select class="w-full appearance-none rounded-lg border border-slate-300 px-4 py-3 pr-12 focus:outline-none focus:ring-2 focus:ring-[#0b2c65]/30" name="source" required>
            <option value="" selected>¿Cómo nos conociste?</option>
            <option value="Television">Televisión</option>
            <option value="Redes sociales (Facebook - Twitter - YouTube)">Redes Sociales Facebook - Twitter - YouTube</option>
            <option value="Google">Google</option>
            <option value="Radio">Radio</option>
            <option value="Recomendacion de familiar o amigo">Recomendación de familiar ó amigo</option>
            <option value="Espectacular - vallas - metro">Espectacular - vallas - metro</option>
            <option value="Periodicos">Periódicos</option>
            <option value="Medios impresos (revistas - flyers)">Medios impresos (revistas - flyers)</option>
            <option value="Convenio de empresa">Convenio de empresa</option>
            <option value="Convenio con escuelas">Convenio con escuelas</option>
            <option value="Otro">Otro</option>
          </select>
          <span class="pointer-events-none absolute right-4 top-1/2 -translate-y-1/2 text-[#0b2c65]">
            <i class="ri-arrow-down-s-line text-xl"></i>
          </span>
        </div>
        <textarea class="w-full rounded-lg border border-slate-300 px-4 py-3 sm:col-span-2 min-h-[160px] focus:outline-none focus:ring-2 focus:ring-[#0b2c65]/30" placeholder="Mensaje" name="message"></textarea>
        <label class="sm:col-span-2 text-xs text-slate-500 flex items-center gap-2">
          <input type="checkbox" class="h-4 w-4" name="privacy" required />
          He leído y acepto el Aviso de Privacidad
        </label>
        <button class="sm:col-span-2 w-max rounded-md bg-[#0b2c65] px-6 py-2.5 text-white font-semibold shadow-sm hover:bg-[#09306e]">Enviar</button>
      </form>
    </div>

    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm self-start">
      <div class="flex items-center gap-3 text-[#0b2c65]">
        <span class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-[#0b2c65] text-white">
          <i class="ri-information-line text-lg"></i>
        </span>
        <h3 class="text-lg font-semibold">Datos de Contacto</h3>
      </div>
      <div class="mt-5 space-y-4 text-sm text-slate-600">
        <div class="flex items-start gap-3">
          <i class="ri-map-pin-line text-lg text-[#0b2c65]"></i>
          <p>Mier y Pesado 227, Col. Del Valle Centro, C.P. 03100, Benito Juárez, CDMX</p>
        </div>
        <div class="flex items-center gap-3">
          <i class="ri-phone-line text-lg text-[#0b2c65]"></i>
          <p class="font-semibold text-slate-800">55 5063 1300</p>
        </div>
        <div class="flex items-center gap-3">
          <i class="ri-mail-line text-lg text-[#0b2c65]"></i>
          <p>admisiones@uneg.edu.mx</p>
        </div>
        <div class="flex items-center gap-3">
          <i class="ri-time-line text-lg text-[#0b2c65]"></i>
          <p>Lunes a viernes</p>
        </div>
      </div>
    </div>
  </section>

  <section class="mt-10">
    <div class="flex items-center gap-3 text-[#0b2c65] mb-4">
      <span class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-[#0b2c65] text-white">
        <i class="ri-map-2-line text-lg"></i>
      </span>
      <h2 class="text-xl sm:text-2xl font-semibold">Ubicación</h2>
    </div>
    <div class="rounded-2xl border border-slate-200 bg-white shadow-sm overflow-hidden">
      <div class="aspect-video w-full">
        <iframe
          class="h-full w-full"
          src="https://www.google.com/maps?q=Mier%20y%20Pesado%20227%2C%20Col.%20Del%20Valle%20Centro%2C%20C.P.%2003100%2C%20Benito%20Ju%C3%A1rez%2C%20CDMX&output=embed"
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          title="Mapa UNEG"
        ></iframe>
      </div>
    </div>
  </section>
</main>

<?php require __DIR__ . '/partials/footer.php'; ?>
