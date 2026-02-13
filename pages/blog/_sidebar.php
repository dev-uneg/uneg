<?php
$sidebarQuery = $sidebarQuery ?? '';
$sidebarOtherBlogs = $sidebarOtherBlogs ?? [];
?>
<aside class="space-y-6 self-start h-fit" style="position: sticky; top: 96px;">
  <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
    <h3 class="text-base font-semibold text-[#0b2c65]">Buscar</h3>
    <form class="mt-4 flex items-center gap-2" method="get" action="<?php echo $base; ?>/blog">
      <input type="text" name="q" value="<?php echo htmlspecialchars($sidebarQuery); ?>" placeholder="Buscar en el blog" class="w-full rounded-lg border border-slate-200 px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-[#0d4fb6]/30">
      <button class="rounded-lg bg-[#0d4fb6] px-4 py-2 text-sm font-semibold text-white">Ir</button>
    </form>
  </div>
  <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
    <h3 class="text-base font-semibold text-[#0b2c65]">Noticias</h3>
    <ul class="mt-3 text-sm text-slate-600 space-y-3">
      <li class="font-semibold text-[#0b2c65]">Comunicados de Rectoría</li>
      <li class="font-semibold text-[#0b2c65]">Eventos de Nuestra Comunidad</li>
      <li class="font-semibold text-[#0b2c65]">Vida en el Campus</li>
    </ul>
  </div>
  <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
    <h3 class="text-base font-semibold text-[#0b2c65]">Otros blogs</h3>
    <ul class="mt-3 text-sm text-slate-600 space-y-3">
      <?php foreach ($sidebarOtherBlogs as $post): ?>
        <li class="flex flex-col">
          <a class="font-semibold text-[#0b2c65] hover:text-[#0d4fb6] transition-colors" href="<?php echo $post['href']; ?>">
            <?php echo htmlspecialchars($post['title']); ?>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</aside>
