<?php
$title = 'Gracias | UNEG';
$active = '';
require __DIR__ . '/partials/header.php';
?>

<main class="max-w-4xl mx-auto px-4 py-16">
  <section class="rounded-3xl bg-gradient-to-r from-[#0b2c65] via-[#0f3b86] to-[#184792] p-10 text-white shadow-lg">
    <div class="flex flex-col sm:flex-row items-start sm:items-center gap-4">
      <span class="inline-flex h-14 w-14 items-center justify-center rounded-full bg-white/15 text-white">
        <i class="ri-checkbox-circle-line text-3xl"></i>
      </span>
      <div>
        <h1 class="text-2xl sm:text-3xl font-semibold">Gracias por contactarnos</h1>
        <p class="mt-2 text-white/85">Hemos recibido tu información. Un asesor se pondrá en contacto contigo lo antes posible.</p>
      </div>
    </div>
  </section>

  <section class="mt-10 rounded-2xl border border-slate-200 bg-white p-6 sm:p-8 shadow-sm">
    <h2 class="text-lg sm:text-xl font-semibold text-[#0b2c65]">¿Qué sigue?</h2>
    <p class="mt-2 text-slate-600">Mientras tanto, puedes explorar nuestra oferta educativa o volver a la página de inicio.</p>
    <div class="mt-6 flex flex-wrap gap-3">
      <a class="rounded-md bg-[#0b2c65] px-6 py-2.5 text-white font-semibold shadow-sm hover:bg-[#09306e]" href="<?php echo $base; ?>/oferta-educativa">Ver oferta educativa</a>
      <a class="rounded-md border border-slate-300 px-6 py-2.5 text-slate-700 font-semibold hover:border-slate-400" href="<?php echo $base; ?>/">Ir al inicio</a>
    </div>
  </section>
</main>

<?php require __DIR__ . '/partials/footer.php'; ?>
