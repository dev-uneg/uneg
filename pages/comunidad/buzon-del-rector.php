<?php
$title = 'Buzón del Rector | UNEG';
$active = 'comunidad';
require __DIR__ . '/../partials/header.php';
?>
<main class="max-w-7xl mx-auto px-4 py-10">
  <section class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
    <img src="<?php echo $assetBase; ?>/imgs/comunidad/rector/hero.png" alt="Buzón del Rector ISEC" class="block w-full h-auto" loading="eager">
  </section>
  <section class="mt-10 text-center">
    <h1 class="text-2xl sm:text-3xl font-semibold text-[#0b2c65]">Buzón del Rector Universidad de Negocios ISEC | Tu Opinión Nos Importa</h1>
    <p class="mt-4 text-slate-600 max-w-3xl mx-auto">
      El buzón del Rector es un medio de comunicación directa para brindarte la mejor atención y un servicio personalizado.
      Envíanos tu duda o comentario llenando las casillas con los datos correspondientes, en breve nos pondremos en contacto contigo.
    </p>
  </section>

  <section class="mt-10">
    <form class="mx-auto max-w-3xl rounded-2xl border border-slate-200 bg-white p-6 sm:p-8 shadow-sm">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <label class="block text-sm font-semibold text-slate-700">
          Nombre
          <input type="text" name="nombre" class="mt-2 w-full rounded-xl border border-slate-200 px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-[#0d4fb6]/30" placeholder="Escribe tu nombre">
        </label>
        <label class="block text-sm font-semibold text-slate-700">
          Correo
          <input type="email" name="correo" class="mt-2 w-full rounded-xl border border-slate-200 px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-[#0d4fb6]/30" placeholder="correo@ejemplo.com">
        </label>
      </div>
      <div class="mt-6">
        <label class="block text-sm font-semibold text-slate-700">
          Asunto
          <input type="text" name="asunto" class="mt-2 w-full rounded-xl border border-slate-200 px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-[#0d4fb6]/30" placeholder="Escribe el asunto">
        </label>
      </div>
      <div class="mt-6">
        <label class="block text-sm font-semibold text-slate-700">
          Mensaje
          <textarea name="mensaje" rows="6" class="mt-2 w-full rounded-xl border border-slate-200 px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-[#0d4fb6]/30" placeholder="Escribe tu mensaje"></textarea>
        </label>
      </div>
      <div class="mt-8 flex justify-center">
        <button type="submit" class="rounded-xl bg-[#0b2c65] px-10 py-3 text-sm font-semibold text-white shadow-sm hover:bg-[#0a2552]">
          Enviar
        </button>
      </div>
    </form>
  </section>
</main>
<?php require __DIR__ . '/../partials/footer.php'; ?>
