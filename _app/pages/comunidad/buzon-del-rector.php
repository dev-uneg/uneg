<?php
$title = 'Buzón del Rector | UNEG';
$active = 'comunidad';
require __DIR__ . '/../partials/header.php';
?>
<main class="max-w-7xl mx-auto px-4 py-10">
  <section class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
    <img src="<?php echo $assetBase; ?>/_imgs/comunidad/rector/hero.webp" alt="Buzón del Rector ISEC" class="block w-full h-auto" loading="eager">
  </section>
  <section class="mt-10 text-center">
    <h1 class="text-2xl sm:text-3xl font-semibold text-[#0b2c65]">Buzón del Rector Universidad de Negocios ISEC | Tu Opinión Nos Importa</h1>
    <p class="mt-4 text-slate-600 max-w-3xl mx-auto">
      El buzón del Rector es un medio de comunicación directa para brindarte la mejor atención y un servicio personalizado.
      Envíanos tu duda o comentario llenando las casillas con los datos correspondientes, en breve nos pondremos en contacto contigo.
    </p>
  </section>

  <?php if (isset($_GET['ok'])): ?>
    <section class="mt-6 mx-auto max-w-3xl">
      <div class="rounded-2xl border border-emerald-300 bg-emerald-50 px-5 py-4 text-emerald-900 shadow-sm" role="status" aria-live="polite">
        <div class="flex items-start gap-3">
          <span class="mt-0.5 inline-flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-emerald-200 text-emerald-800">
            <i class="ri-checkbox-circle-line text-lg"></i>
          </span>
          <div>
            <p class="text-sm font-semibold">Mensaje enviado correctamente</p>
            <p class="mt-1 text-sm text-emerald-800">Gracias por tu mensaje. Tu solicitud fue recibida por el Buzón del Rector.</p>
          </div>
        </div>
      </div>
    </section>
  <?php endif; ?>
  <?php if (isset($_GET['error'])): ?>
    <section class="mt-6 mx-auto max-w-3xl">
      <div class="rounded-2xl border border-rose-300 bg-rose-50 px-5 py-4 text-rose-900 shadow-sm" role="alert">
        <div class="flex items-start gap-3">
          <span class="mt-0.5 inline-flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-rose-200 text-rose-800">
            <i class="ri-error-warning-line text-lg"></i>
          </span>
          <div>
            <p class="text-sm font-semibold">No se pudo enviar el mensaje</p>
            <p class="mt-1 text-sm text-rose-800">Revisa tus datos e inténtalo nuevamente.</p>
          </div>
        </div>
      </div>
    </section>
  <?php endif; ?>

  <section class="mt-10">
    <form class="mx-auto max-w-3xl rounded-2xl border border-slate-200 bg-white p-6 sm:p-8 shadow-sm" method="post" action="<?php echo $base; ?>/api/buzon-rector">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <label class="block text-sm font-semibold text-slate-700">
          Nombre
          <input type="text" name="nombre" required class="mt-2 w-full rounded-xl border border-slate-200 px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-[#0d4fb6]/30" placeholder="Escribe tu nombre">
        </label>
        <label class="block text-sm font-semibold text-slate-700">
          Correo
          <input type="email" name="correo" required class="mt-2 w-full rounded-xl border border-slate-200 px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-[#0d4fb6]/30" placeholder="correo@ejemplo.com">
        </label>
      </div>
      <div class="mt-6">
        <label class="block text-sm font-semibold text-slate-700">
          Asunto
          <input type="text" name="asunto" required class="mt-2 w-full rounded-xl border border-slate-200 px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-[#0d4fb6]/30" placeholder="Escribe el asunto">
        </label>
      </div>
      <div class="mt-6">
        <label class="block text-sm font-semibold text-slate-700">
          Mensaje
          <textarea name="mensaje" rows="6" required class="mt-2 w-full rounded-xl border border-slate-200 px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-[#0d4fb6]/30" placeholder="Escribe tu mensaje"></textarea>
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
