<?php
$title = 'Gracias | UNEG';
$active = '';
require __DIR__ . '/partials/header.php';
?>

<main class="mx-auto flex min-h-[calc(100vh-220px)] max-w-3xl items-center px-4 py-12">
  <section class="w-full rounded-3xl border border-slate-200 bg-white p-8 text-center shadow-sm sm:p-10">
    <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-full bg-[#0b2c65] text-white">
      <i class="ri-checkbox-circle-line text-3xl"></i>
    </div>
    <h1 class="mt-4 text-2xl sm:text-3xl font-semibold text-[#0b2c65]">Gracias por contactarnos</h1>
    <p class="mx-auto mt-3 max-w-2xl text-slate-600">
      Hemos recibido tu información. Un asesor se pondrá en contacto contigo lo antes posible.
    </p>
    <div class="mt-6 flex flex-wrap justify-center gap-3">
      <a class="rounded-md bg-[#0b2c65] px-6 py-2.5 text-white font-semibold shadow-sm hover:bg-[#09306e]" href="<?php echo $base; ?>/oferta-educativa">Ver oferta educativa</a>
      <a class="rounded-md border border-slate-300 px-6 py-2.5 text-slate-700 font-semibold hover:border-slate-400" href="<?php echo $base; ?>/">Ir al inicio</a>
    </div>
  </section>
</main>

<?php require __DIR__ . '/partials/footer.php'; ?>
