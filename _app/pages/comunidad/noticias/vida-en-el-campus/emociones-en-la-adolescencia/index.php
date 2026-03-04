<?php
$title = 'Emociones en la adolescencia | UNEG';
$active = 'comunidad';
require __DIR__ . '/../../../../partials/header.php';
?>
<main class="max-w-7xl mx-auto px-4 py-10">
  <section class="text-center">
    <p class="text-sm tracking-[0.35em] uppercase text-[#0b2c65]">Universidad de Negocios ISEC</p>
    <h1 class="mt-3 text-3xl sm:text-5xl font-semibold text-[#0b2c65]">Emociones en la adolescencia: comprender para acompañar</h1>
    <p class="mt-3 text-base sm:text-lg text-slate-600">Por Universidad de Negocios ISEC · 4 marzo, 2026 · Publicado en Comunidad ISEC, Vida en el Campus</p>
  </section>

  <section class="mt-10 grid grid-cols-1 lg:grid-cols-[minmax(0,1fr)_320px] gap-8 overflow-visible">
    <article class="rounded-2xl border border-slate-200 bg-white shadow-sm overflow-hidden">
      <div class="w-full">
        <img src="<?php echo $assetBase; ?>/_imgs/noticias/vida-en-el-campus/emociones-adolescencia.webp" alt="Emociones en la adolescencia" class="w-full h-auto block">
      </div>
      <div class="p-6 text-slate-700 leading-relaxed">
        <h2 class="text-xl font-semibold text-[#0b2c65]">Comprender sus emociones también es educar</h2>
        <p class="mt-3">La Adolescencia es una etapa de grandes cambios, descubrimientos y emociones intensas.</p>
        <p class="mt-3">Durante este proceso, los jóvenes pueden experimentar alegría, enojo, tristeza, miedo o frustración con mayor intensidad, y eso es completamente normal. Las emociones no son enemigas: son señales que ayudan a comprender lo que ocurre en su interior y en su entorno.</p>
        <p class="mt-3">Acompañar, escuchar sin juzgar y brindar espacios seguros para expresarse fortalece su autoestima y su desarrollo emocional. Educar en inteligencia emocional es tan importante como educar en conocimientos académicos.</p>

        <div class="mt-6 rounded-xl border border-slate-200 bg-slate-50 p-5">
          <p class="font-semibold text-[#0b2c65]">Recordemos: comprender sus emociones hoy les permitirá tomar mejores decisiones mañana.</p>
        </div>
      </div>
    </article>

    <?php
      $categorias = require __DIR__ . '/../../_categorias.php';
      $posts = require __DIR__ . '/../../_posts.php';
      $posts = array_map(function ($p) use ($base) {
        $p['href'] = $base . $p['href'];
        return $p;
      }, $posts);
      $selfHref = $base . '/comunidad/noticias/vida-en-el-campus/emociones-en-la-adolescencia';
      $otherNewsPool = array_values(array_filter($posts, function ($p) use ($selfHref) {
        return $p['category'] === 'vida-en-el-campus' && $p['href'] !== $selfHref;
      }));
      shuffle($otherNewsPool);
      $otherNews = array_slice($otherNewsPool, 0, 3);

      $sidebarQuery = '';
      $sidebarCategorySlug = 'vida-en-el-campus';
      $sidebarCategories = $categorias;
      $sidebarOtherNews = $otherNews;
      require __DIR__ . '/../../_sidebar.php';
    ?>
  </section>
</main>
<?php require __DIR__ . '/../../../../partials/footer.php'; ?>
