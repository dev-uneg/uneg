<?php
$title = 'Firma de convenio con la CAMIC | UNEG';
$active = 'comunidad';
require __DIR__ . '/../../../../partials/header.php';
?>
<main class="max-w-7xl mx-auto px-4 py-10">
  <section class="text-center">
    <p class="text-sm tracking-[0.35em] uppercase text-[#0b2c65]">Universidad de Negocios ISEC</p>
    <h1 class="mt-3 text-3xl sm:text-5xl font-semibold text-[#0b2c65]">Universidad de Negocios ISEC firma convenio con la Cámara Árabe Mexicana de Industria y Comercio</h1>
    <p class="mt-3 text-base sm:text-lg text-slate-600">Por Universidad de Negocios ISEC · 20 enero, 2026 · Publicado en Comunidad ISEC, Blog, Eventos de Nuestra Comunidad, Vida en el Campus</p>
  </section>

  <section class="mt-10 grid grid-cols-1 lg:grid-cols-[minmax(0,1fr)_320px] gap-8 overflow-visible">
    <article class="rounded-2xl border border-slate-200 bg-white shadow-sm overflow-hidden">
      <div class="w-full">
        <img src="<?php echo $assetBase; ?>/imgs/noticias/eventos/news-001.jpg" alt="Firma de convenio UNEG" class="w-full h-auto block">
      </div>
      <div class="p-6 text-slate-700 leading-relaxed">
        <h2 class="text-xl font-semibold text-[#0b2c65]">Firma de convenio</h2>
        <p class="mt-3">Nos enorgullece anunciar un hecho histórico sobre la firma de acuerdo estratégico entre Universidad de Negocios ISEC y la Cámara Árabe Mexicana de Industria y Comercio (CAMIC).</p>
        <p class="mt-3">Esta alianza fortalece la internacionalización académica e impulsa oportunidades globales para nuestros estudiantes.</p>

        <div class="mt-6 rounded-xl border border-slate-200 bg-slate-50 p-5">
          <p class="font-semibold text-[#0b2c65]">Objetivo principal: Lanzar la Misión Estudiantil ISEC a Dubái, Emiratos Árabes Unidos, donde nuestros alumnos podrán:</p>
          <ul class="mt-3 list-disc list-inside text-slate-700 space-y-2">
            <li>Conocer ecosistemas empresariales internacionales</li>
            <li>Participar en visitas corporativas y encuentros de negocios</li>
            <li>Desarrollar una visión global del comercio y la innovación</li>
          </ul>
        </div>
        <p class="mt-6 font-semibold text-[#0b2c65]">¡ISEC abre puertas al mundo!</p>
      </div>
      <div class="border-t border-slate-200 bg-white p-6">
        <img src="<?php echo $assetBase; ?>/imgs/noticias/eventos/news-001-b.jpg" alt="Convenio UNEG CAMIC" class="w-full h-auto block rounded-xl">
      </div>
    </article>

    <?php
      $categorias = require __DIR__ . '/../../_categorias.php';
      $posts = require __DIR__ . '/../../_posts.php';
      $posts = array_map(function ($p) use ($base) {
        $p['href'] = $base . $p['href'];
        return $p;
      }, $posts);
      $selfHref = $base . '/comunidad/noticias/eventos-de-nuestra-comunidad/firma-convenio-camic';
      $otherNewsPool = array_values(array_filter($posts, function ($p) use ($selfHref) {
        return $p['category'] === 'eventos-de-nuestra-comunidad' && $p['href'] !== $selfHref;
      }));
      shuffle($otherNewsPool);
      $otherNews = array_slice($otherNewsPool, 0, 3);

      $sidebarQuery = '';
      $sidebarCategorySlug = 'eventos-de-nuestra-comunidad';
      $sidebarCategories = $categorias;
      $sidebarOtherNews = $otherNews;
      require __DIR__ . '/../../_sidebar.php';
    ?>
  </section>
</main>
<?php require __DIR__ . '/../../../../partials/footer.php'; ?>
