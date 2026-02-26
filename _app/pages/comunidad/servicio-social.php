<?php
$title = 'Servicio Social | UNEG';
$active = 'comunidad';
require __DIR__ . '/../partials/header.php';
?>
<main class="max-w-7xl mx-auto px-4 py-10">
  <section class="relative overflow-hidden rounded-2xl bg-gradient-to-r from-[#1f56ad] via-[#2f6bd0] to-[#5a8fe0] text-white">
    <div class="absolute inset-0 opacity-20 bg-[radial-gradient(circle_at_top,rgba(255,255,255,0.35),transparent_55%)]"></div>
    <div class="relative px-6 py-12 text-center">
      <p class="text-sm tracking-[0.35em] uppercase">Universidad de Negocios ISEC</p>
      <h1 class="mt-4 text-3xl sm:text-5xl font-semibold">Servicio Social</h1>
      <p class="mt-4 text-base sm:text-lg">Informes para realizar tu Servicio Social.</p>
    </div>
  </section>

  <section class="mt-10 text-center">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-0 rounded-2xl border border-slate-200 bg-white overflow-hidden text-left">
      <div class="p-6 text-center transition hover:bg-slate-50 border-b sm:border-r border-slate-200">
        <div class="mx-auto h-16 w-16 rounded-full bg-slate-100 text-[#0b2c65] flex items-center justify-center font-semibold">SEP</div>
        <h3 class="mt-4 font-semibold text-[#0b2c65]">Licenciaturas SEP</h3>
        <p class="mt-2 text-sm text-slate-600">Para ver las empresas con las que tenemos convenios favor de dirigirte a la Vicerrectoría Académica.</p>
      </div>
      <a href="https://serviciosocial.ipn.mx/" target="_blank" rel="noopener" class="p-6 text-center transition hover:bg-slate-50 border-b lg:border-b sm:border-r border-slate-200">
        <div class="mx-auto h-16 w-16 rounded-full bg-slate-100 text-[#0b2c65] flex items-center justify-center font-semibold">IPN</div>
        <h3 class="mt-4 font-semibold text-[#0b2c65]">Licenciaturas IPN</h3>
        <p class="mt-2 text-sm text-slate-600">Para ver las empresas con las que tenemos convenios.</p>
        <p class="mt-4 font-semibold text-[#0b2c65]">Da clic aquí</p>
      </a>
      <a href="http://www.siass.unam.mx/" target="_blank" rel="noopener" class="p-6 text-center transition hover:bg-slate-50 border-b border-slate-200 lg:border-b">
        <div class="mx-auto h-16 w-16 rounded-full bg-slate-100 text-[#0b2c65] flex items-center justify-center font-semibold">UNAM</div>
        <h3 class="mt-4 font-semibold text-[#0b2c65]">Licenciaturas UNAM</h3>
        <p class="mt-2 text-sm text-slate-600">Para ver las empresas con las que tenemos convenios.</p>
        <p class="mt-4 font-semibold text-[#0b2c65]">Da clic aquí</p>
      </a>
      <a href="<?php echo $assetBase; ?>/_assets/docs/Convenios-Servicio-Social-Directores.pdf" target="_blank" rel="noopener" class="p-6 text-center transition hover:bg-slate-50 border-b border-slate-200 sm:border-l lg:border-b">
        <div class="mx-auto h-16 w-16 rounded-full bg-slate-100 text-[#0b2c65] flex items-center justify-center font-semibold">UNEG</div>
        <h3 class="mt-4 font-semibold text-[#0b2c65]">Descargar Servicio Social</h3>
        <p class="mt-2 text-sm text-slate-600">Para ver las empresas donde puedes realizar tu Servicio Social.</p>
        <p class="mt-4 font-semibold text-[#0b2c65]">Da clic aquí</p>
      </a>
    </div>
  </section>
</main>
<?php require __DIR__ . '/../partials/footer.php'; ?>
