<?php
$title = 'Noticias | UNEG';
$active = 'comunidad';
require __DIR__ . '/../partials/header.php';
?>
<style>
  .news-accordion {
    display: flex;
    gap: 10px;
    height: 420px;
  }
  .news-panel {
    position: relative;
    flex: 1;
    border-radius: 18px;
    overflow: hidden;
    transition: flex 0.5s ease;
    min-width: 0;
  }
  .news-panel::before {
    content: "";
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, rgba(5, 25, 66, 0.75), rgba(5, 25, 66, 0.35));
    z-index: 1;
  }
  .news-panel img {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    filter: blur(6px) saturate(0.9);
    transform: scale(1.04);
    transition: filter 0.5s ease, transform 0.5s ease;
  }
  .news-panel .content {
    position: relative;
    z-index: 2;
    height: 100%;
    padding: 26px 22px;
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    color: #fff;
    text-align: left;
  }
  .news-panel h2 {
    font-size: 1.5rem;
    font-weight: 700;
    line-height: 1.2;
  }
  .news-panel p {
    margin-top: 8px;
    font-size: 0.95rem;
    color: rgba(255, 255, 255, 0.85);
  }
  .news-panel .btn {
    margin-top: 14px;
    align-self: flex-start;
    background: #0b2c65;
    color: #fff;
    padding: 8px 16px;
    border-radius: 8px;
    font-weight: 600;
    font-size: 0.9rem;
  }
  .news-panel:hover {
    flex: 3;
  }
  .news-panel:hover img {
    filter: blur(0px) saturate(1);
    transform: scale(1.0);
  }
  @media (max-width: 1024px) {
    .news-accordion {
      height: auto;
      flex-direction: column;
    }
    .news-panel {
      min-height: 220px;
    }
    .news-panel:hover {
      flex: 1;
    }
  }
</style>

<main class="max-w-7xl mx-auto px-4 py-10">
  <?php $categorias = require __DIR__ . '/noticias/_categorias.php'; ?>
  <section class="text-center">
    <p class="text-sm tracking-[0.35em] uppercase text-[#0b2c65]">Universidad de Negocios ISEC</p>
    <h1 class="mt-3 text-3xl sm:text-5xl font-semibold text-[#0b2c65]">Noticias</h1>
    <p class="mt-3 text-base sm:text-lg text-slate-600">Comunicados, eventos y vida en el campus.</p>
  </section>

  <section class="mt-8">
    <div class="news-accordion">
      <?php
      $posts = require __DIR__ . '/noticias/_posts.php';
      $postsByCategory = [];
      foreach ($posts as $post) {
        $slug = (string) ($post['category'] ?? '');
        if ($slug === '') {
          continue;
        }
        $postsByCategory[$slug] = ($postsByCategory[$slug] ?? 0) + 1;
      }
      $accordionImages = [
        'comunicados-de-rectoria' => $assetBase . '/imgs/acerca/slide-1.png',
        'eventos-de-nuestra-comunidad' => $assetBase . '/imgs/acerca/slide-2.png',
        'vida-en-el-campus' => $assetBase . '/imgs/acerca/slide-3.png',
        'video-blog-uneg-isec' => $assetBase . '/imgs/home/hero.png',
      ];
      foreach ($categorias as $cat):
        $img = $accordionImages[$cat['slug']] ?? ($assetBase . '/imgs/acerca/slide-4.png');
        $count = (int) ($postsByCategory[$cat['slug']] ?? 0);
        $description = $count > 0
          ? $cat['descripcion']
          : 'Sin noticias por el momento. Estamos preparando nuevo contenido.';
      ?>
        <article class="news-panel">
          <img src="<?php echo $img; ?>" alt="<?php echo htmlspecialchars($cat['titulo']); ?>">
          <div class="content">
            <h2><?php echo htmlspecialchars($cat['titulo']); ?></h2>
            <p><?php echo htmlspecialchars($description); ?></p>
            <a class="btn" href="<?php echo $base; ?>/comunidad/noticias/<?php echo $cat['slug']; ?>">Ver</a>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </section>
</main>
<?php require __DIR__ . '/../partials/footer.php'; ?>
