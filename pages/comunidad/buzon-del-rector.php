<?php
$title = 'Buzón del Rector | UNEG';
$active = 'comunidad';
require __DIR__ . '/../partials/header.php';
?>

<main class="max-w-7xl mx-auto px-4 py-10">
  <section class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
    <img src="<?php echo $assetBase; ?>/imgs/nms/cch/hero.png" alt="Buzón del Rector" class="block w-full h-auto" loading="eager">
    <div class="bg-[#0b2c65] text-white">
      <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 px-5 py-4 text-sm">
        <div class="flex items-center gap-3">
          <span class="inline-flex h-9 w-9 items-center justify-center rounded-full bg-white/15">
            <i class="ri-school-line text-lg"></i>
          </span>
          <div>
            <p class="font-semibold">Comunidad</p>
            <p class="text-white/70 text-xs">Buzón del Rector</p>
          </div>
        </div>
        <div class="flex items-center gap-3">
          <span class="inline-flex h-9 w-9 items-center justify-center rounded-full bg-white/15">
            <i class="ri-time-line text-lg"></i>
          </span>
          <div>
            <p class="font-semibold">Atención</p>
            <p class="text-white/70 text-xs">Comunicación directa</p>
          </div>
        </div>
        <div class="flex items-center gap-3">
          <span class="inline-flex h-9 w-9 items-center justify-center rounded-full bg-white/15">
            <i class="ri-medal-line text-lg"></i>
          </span>
          <div>
            <p class="font-semibold">ISEC</p>
            <p class="text-white/70 text-xs">Servicio personalizado</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="mt-10 text-center">
    <h1 class="text-2xl sm:text-2xl font-semibold text-[#0b2c65]">Buzón del Rector Universidad de Negocios ISEC | Tu Opinión Nos Importa</h1>
    <p class="mt-3 text-slate-600 max-w-3xl mx-auto">
      El buzón del Rector es un medio de comunicación directa para brindarte la mejor atención y un servicio personalizado. Envíanos tu duda o comentario llenando las casillas con los datos correspondientes, en breve nos pondremos en contacto contigo.
    </p>
  </section>

  <section class="mt-10">
    <div class="max-w-3xl mx-auto rounded-2xl bg-white p-6 sm:p-8 shadow-md border border-slate-200">
        <div class="text-center">
          <h2 class="text-xl sm:text-2xl font-semibold text-[#0b2c65]">Envíanos tu mensaje</h2>
          <p class="mt-2 text-sm text-slate-600">Completa el formulario y nos pondremos en contacto contigo.</p>
        </div>
        <form class="mt-6 grid grid-cols-1 sm:grid-cols-2 gap-5 text-sm text-slate-700">
          <input class="w-full rounded-lg border border-slate-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#0b2c65]/30" placeholder="Nombre" type="text" />
          <input class="w-full rounded-lg border border-slate-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#0b2c65]/30" placeholder="Correo" type="email" />
          <input class="w-full rounded-lg border border-slate-300 px-4 py-3 sm:col-span-2 focus:outline-none focus:ring-2 focus:ring-[#0b2c65]/30" placeholder="Asunto" type="text" />
          <textarea class="w-full rounded-lg border border-slate-300 px-4 py-3 sm:col-span-2 min-h-[180px] focus:outline-none focus:ring-2 focus:ring-[#0b2c65]/30" placeholder="Mensaje"></textarea>
          <div class="sm:col-span-2 flex justify-center">
            <button class="rounded-md bg-[#0b2c65] px-8 py-2.5 text-white font-semibold shadow-sm hover:bg-[#09306e]">Enviar</button>
          </div>
        </form>
      </div>
  </section>
</main>

<?php require __DIR__ . '/../partials/footer.php'; ?>
