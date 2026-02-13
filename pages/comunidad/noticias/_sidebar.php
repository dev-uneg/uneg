<?php
$sidebarQuery = $sidebarQuery ?? '';
$sidebarCategorySlug = $sidebarCategorySlug ?? 'noticias';
$sidebarCategories = $sidebarCategories ?? [];
$sidebarOtherNews = $sidebarOtherNews ?? [];
?>
<aside class="space-y-6 self-start h-fit" style="position: sticky; top: 96px;">
  <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
    <h3 class="text-base font-semibold text-[#0b2c65]">Buscar</h3>
    <form class="mt-4 flex items-center gap-2" method="get" action="<?php echo $base; ?>/comunidad/noticias/<?php echo $sidebarCategorySlug; ?>">
      <input type="text" name="q" value="<?php echo htmlspecialchars($sidebarQuery); ?>" placeholder="Buscar en noticias" class="w-full rounded-lg border border-slate-200 px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-[#0d4fb6]/30">
      <button class="rounded-lg bg-[#0d4fb6] px-4 py-2 text-sm font-semibold text-white">Ir</button>
    </form>
  </div>
  <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
    <h3 class="text-base font-semibold text-[#0b2c65]">Categorías</h3>
    <ul class="mt-3 text-sm text-slate-600 space-y-2">
      <?php foreach ($sidebarCategories as $cat): ?>
        <li>
          <a class="hover:text-[#0d4fb6] transition-colors" href="<?php echo $base; ?>/comunidad/noticias/<?php echo $cat['slug']; ?>">
            <?php echo htmlspecialchars($cat['titulo']); ?>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
  <?php // "Otras noticias" removido a solicitud ?>
</aside>
