<?php
$title = 'Claustro Docente | UNEG';
$active = 'comunidad';
require __DIR__ . '/../partials/header.php';
?>
<main class="max-w-7xl mx-auto px-4 py-10">
  <section class="relative overflow-hidden rounded-2xl bg-gradient-to-r from-[#1f56ad] via-[#2f6bd0] to-[#5a8fe0] text-white">
    <div class="absolute inset-0 opacity-20 bg-[radial-gradient(circle_at_top,rgba(255,255,255,0.35),transparent_55%)]"></div>
    <div class="relative px-6 py-12 text-center">
      <p class="text-sm tracking-[0.35em] uppercase">Universidad de Negocios ISEC</p>
      <h1 class="mt-4 text-3xl sm:text-5xl font-semibold">Claustro Docente</h1>
      <p class="mt-4 text-base sm:text-lg">Conoce a nuestro equipo académico.</p>
    </div>
  </section>

  <section class="mt-10">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
      <?php
      $placeholders = [
        'MCTI. Álvaro Aguilar Vela',
        'Mtro. José Herrera Murillo',
        'Mtro. José Antonio Suárez González',
        'Mtra. Noemí Belmont',
      ];
      foreach ($placeholders as $name): ?>
        <div class="rounded-2xl border border-slate-200 bg-white shadow-sm overflow-hidden">
          <div class="aspect-[4/3] bg-slate-100 flex items-center justify-center text-slate-500 text-sm">
            Imagen pendiente
          </div>
          <div class="p-4 text-center">
            <p class="font-semibold text-[#0b2c65]"><?php echo htmlspecialchars($name); ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </section>
</main>
<?php require __DIR__ . '/../partials/footer.php'; ?>
