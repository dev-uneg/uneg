<?php
$title = 'Emociones en la adolescencia | UNEG';
$active = 'comunidad';
require __DIR__ . '/../../partials/header.php';
?>
<main class="max-w-7xl mx-auto px-4 py-10">
  <section class="text-center">
    <p class="text-sm tracking-[0.35em] uppercase text-[#0b2c65]">Universidad de Negocios ISEC</p>
    <h1 class="mt-3 text-3xl sm:text-5xl font-semibold text-[#0b2c65]">Emociones en la adolescencia: comprender para acompañar</h1>
    <p class="mt-3 text-base sm:text-lg text-slate-600">Publicado el 4 marzo, 2026</p>
  </section>

  <section class="mt-10 grid grid-cols-1 lg:grid-cols-[minmax(0,1fr)_320px] gap-8 overflow-visible">
    <article class="rounded-2xl border border-slate-200 bg-white shadow-sm overflow-hidden">
      <div class="w-full">
        <img src="<?php echo $assetBase; ?>/_imgs/blog/post-6.webp" alt="Emociones en la adolescencia" class="w-full h-auto block">
      </div>
      <div class="p-6 text-slate-700 leading-relaxed">
        <p class="mb-6">La Adolescencia es una etapa de grandes cambios, descubrimientos y emociones intensas.</p>
        <p class="mb-6">Durante este proceso, los jóvenes pueden experimentar alegría, enojo, tristeza, miedo o frustración con mayor intensidad, y eso es completamente normal. Las emociones no son enemigas: son señales que ayudan a comprender lo que ocurre en su interior y en su entorno.</p>
        <p class="mb-6">Acompañar, escuchar sin juzgar y brindar espacios seguros para expresarse fortalece su autoestima y su desarrollo emocional. Educar en inteligencia emocional es tan importante como educar en conocimientos académicos.</p>

        <div class="rounded-xl border border-slate-200 bg-slate-50 p-5">
          <p class="font-semibold text-[#0b2c65]">Recordemos: comprender sus emociones hoy les permitirá tomar mejores decisiones mañana.</p>
        </div>
      </div>
    </article>

    <?php
      $posts = require __DIR__ . '/../_posts.php';
      $posts = array_map(function ($p) use ($base) {
        $p['href'] = $base . $p['href'];
        return $p;
      }, $posts);
      $selfHref = $base . '/blog/emociones-en-la-adolescencia-comprender-para-acompanar';
      $otherBlogPool = array_values(array_filter($posts, fn($p) => $p['href'] !== $selfHref));
      shuffle($otherBlogPool);
      $otherBlogs = array_slice($otherBlogPool, 0, 3);
    ?>

    <?php
      $sidebarQuery = '';
      $sidebarOtherBlogs = $otherBlogs;
      require __DIR__ . '/../_sidebar.php';
    ?>
  </section>
</main>
<?php require __DIR__ . '/../../partials/footer.php'; ?>
