<?php
$title = 'Blog | UNEG';
$active = 'comunidad';
require __DIR__ . '/../partials/header.php';
?>
<main class="max-w-7xl mx-auto px-4 py-10">
  <section class="text-center">
    <p class="text-sm tracking-[0.35em] uppercase text-[#0b2c65]">Universidad de Negocios ISEC</p>
    <h1 class="mt-3 text-3xl sm:text-5xl font-semibold text-[#0b2c65]">Blog</h1>
    <p class="mt-3 text-base sm:text-lg text-slate-600">Artículos y contenido de interés.</p>
  </section>

  <?php
    $posts = require __DIR__ . '/_posts.php';
    $posts = array_map(function ($p) use ($base, $assetBase) {
      $p['href'] = $base . $p['href'];
      $p['image'] = $assetBase . $p['image'];
      return $p;
    }, $posts);

    $query = isset($_GET['q']) ? trim((string) $_GET['q']) : '';
    if ($query !== '') {
      $q = mb_strtolower($query);
      $posts = array_values(array_filter($posts, function ($p) use ($q) {
        $haystack = mb_strtolower($p['title'] . ' ' . $p['excerpt']);
        return mb_strpos($haystack, $q) !== false;
      }));
    }

    $perPage = 6;
    $total = count($posts);
    $totalPages = max(1, (int) ceil($total / $perPage));
    $currentPage = isset($_GET['page']) ? max(1, (int) $_GET['page']) : 1;
    if ($currentPage > $totalPages) {
      $currentPage = $totalPages;
    }
    $offset = ($currentPage - 1) * $perPage;
    $pagedPosts = array_slice($posts, $offset, $perPage);
    $otherBlogPool = $posts;
    shuffle($otherBlogPool);
    $otherBlogs = array_slice($otherBlogPool, 0, 3);
  ?>

  <section class="mt-12 grid grid-cols-1 lg:grid-cols-[minmax(0,1fr)_320px] gap-8 overflow-visible">
    <div>
      <?php if ($query !== ''): ?>
        <div class="rounded-2xl border border-slate-200 bg-white p-4 text-sm text-slate-600" style="margin-bottom: 48px;">
          Resultados para <span class="font-semibold text-[#0b2c65]">"<?php echo htmlspecialchars($query); ?>"</span>:
          <span class="font-semibold"><?php echo $total; ?></span>
        </div>
      <?php endif; ?>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php if (count($pagedPosts) === 0): ?>
          <div class="col-span-full rounded-2xl border border-slate-200 bg-white p-6 text-center text-slate-600">
            No hay entradas por el momento.
          </div>
        <?php else: ?>
          <?php foreach ($pagedPosts as $post): ?>
            <article class="rounded-2xl border border-slate-200 bg-white shadow-sm overflow-hidden">
              <a href="<?php echo $post['href']; ?>" class="block">
                <div class="h-40 w-full bg-slate-100 flex items-center justify-center text-slate-500 overflow-hidden">
                  <img src="<?php echo $post['image']; ?>" alt="<?php echo htmlspecialchars($post['title']); ?>" class="w-full h-full object-cover">
                </div>
                <div class="p-5">
                  <p class="text-xs text-slate-500">Blog · <?php echo htmlspecialchars($post['date']); ?></p>
                  <h3 class="mt-2 text-base font-semibold text-[#0b2c65]"><?php echo htmlspecialchars($post['title']); ?></h3>
                  <p class="mt-2 text-sm text-slate-600"><?php echo htmlspecialchars($post['excerpt']); ?></p>
                </div>
              </a>
            </article>
          <?php endforeach; ?>
        <?php endif; ?>
      </div>
      <div class="mt-10 flex items-center justify-center gap-2">
        <?php
          $prevPage = max(1, $currentPage - 1);
          $nextPage = min($totalPages, $currentPage + 1);
        ?>
        <a class="h-10 w-10 rounded-full border border-slate-200 bg-white text-slate-500 flex items-center justify-center <?php echo $currentPage === 1 ? 'pointer-events-none opacity-50' : ''; ?>" aria-label="Página anterior" href="<?php echo $base; ?>/blog?page=<?php echo $prevPage; ?>">
          <i class="text-xl" data-lucide="chevron-left"></i>
        </a>
        <?php for ($p = 1; $p <= $totalPages; $p++): ?>
          <a class="h-10 w-10 rounded-full <?php echo $p === $currentPage ? 'bg-[#0b2c65] text-white' : 'border border-slate-200 bg-white text-slate-700'; ?> font-semibold flex items-center justify-center" aria-current="<?php echo $p === $currentPage ? 'page' : 'false'; ?>" href="<?php echo $base; ?>/blog?page=<?php echo $p; ?>">
            <?php echo $p; ?>
          </a>
        <?php endfor; ?>
        <a class="h-10 w-10 rounded-full border border-slate-200 bg-white text-slate-500 flex items-center justify-center <?php echo $currentPage === $totalPages ? 'pointer-events-none opacity-50' : ''; ?>" aria-label="Página siguiente" href="<?php echo $base; ?>/blog?page=<?php echo $nextPage; ?>">
          <i class="text-xl" data-lucide="chevron-right"></i>
        </a>
      </div>
    </div>

    <?php
      $sidebarQuery = $query;
      $sidebarOtherBlogs = $otherBlogs;
      require __DIR__ . '/_sidebar.php';
    ?>
  </section>
</main>
<?php require __DIR__ . '/../partials/footer.php'; ?>
