<?php
if (!isset($videoTitle, $videoUrl, $videoSlug)) {
  throw new RuntimeException('Faltan variables de video.');
}
$categorias = require __DIR__ . '/_categorias.php';
$posts = require __DIR__ . '/_posts.php';
$categorySlug = 'video-blog-uneg-isec';
$category = null;
foreach ($categorias as $cat) {
  if ($cat['slug'] === $categorySlug) {
    $category = $cat;
    break;
  }
}
$title = $videoTitle . ' | UNEG';
$active = 'comunidad';
require __DIR__ . '/../../partials/header.php';

$posts = array_map(function ($p) use ($base) {
  $p['href'] = $base . $p['href'];
  return $p;
}, $posts);
$selfHref = $base . '/comunidad/noticias/video-blog-uneg-isec/' . $videoSlug;
$otherBlogPool = array_values(array_filter($posts, fn($p) => $p['category'] === $categorySlug && $p['href'] !== $selfHref));
shuffle($otherBlogPool);
$otherVideos = array_slice($otherBlogPool, 0, 3);
?>
<main class="max-w-7xl mx-auto px-4 py-10">
  <section class="text-center">
    <p class="text-sm tracking-[0.35em] uppercase text-[#0b2c65]">Universidad de Negocios ISEC</p>
    <h1 class="mt-3 text-3xl sm:text-5xl font-semibold text-[#0b2c65]"><?php echo htmlspecialchars($videoTitle); ?></h1>
    <p class="mt-3 text-base sm:text-lg text-slate-600"><?php echo htmlspecialchars($category['titulo'] ?? 'Video Blog UNEG ISEC'); ?></p>
  </section>

  <section class="mt-10 grid grid-cols-1 lg:grid-cols-[minmax(0,1fr)_320px] gap-8 overflow-visible">
    <article class="rounded-2xl border border-slate-200 bg-white shadow-sm overflow-hidden">
      <div class="w-full aspect-video bg-slate-100">
        <iframe
          class="w-full h-full"
          src="<?php echo htmlspecialchars(str_replace('youtu.be/', 'www.youtube.com/embed/', $videoUrl)); ?>"
          title="<?php echo htmlspecialchars($videoTitle); ?>"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          allowfullscreen
        ></iframe>
      </div>
      <div class="p-6 text-slate-700">
        <p>Video oficial de la Universidad de Negocios ISEC.</p>
      </div>
    </article>

    <?php
      $sidebarQuery = '';
      $sidebarCategorySlug = $categorySlug;
      $sidebarCategories = $categorias;
      $sidebarOtherNews = $otherVideos;
      require __DIR__ . '/_sidebar.php';
    ?>
  </section>
</main>
<?php require __DIR__ . '/../../partials/footer.php'; ?>
