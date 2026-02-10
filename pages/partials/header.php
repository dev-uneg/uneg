<?php
$pageTitle = $pageTitle ?? 'UNEG';
?>
<!doctype html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@400;600;700&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
      :root { color-scheme: light; }
      body { font-family: "Figtree", system-ui, -apple-system, "Segoe UI", sans-serif; }
    </style>
  </head>
  <body class="min-h-screen bg-gradient-to-br from-slate-50 via-white to-amber-50 text-slate-900">
    <header class="sticky top-0 z-40 bg-white/80 backdrop-blur border-b border-slate-200">
      <div class="mx-auto max-w-6xl px-6 py-4 flex items-center justify-between">
        <a href="/" class="text-lg font-semibold tracking-tight">UNEG</a>
        <nav class="hidden md:flex items-center gap-6 text-sm font-medium text-slate-600">
          <a class="hover:text-slate-900" href="/">Inicio</a>
          <a class="hover:text-slate-900" href="/nosotros">Nosotros</a>
          <a class="hover:text-slate-900" href="/contacto">Contacto</a>
        </nav>
        <button id="menuBtn" class="md:hidden inline-flex items-center justify-center rounded-md border border-slate-300 px-3 py-2 text-slate-700 hover:bg-slate-100" type="button" aria-label="Abrir menú">
          <span class="sr-only">Abrir menú</span>
          <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
      </div>
    </header>

    <div id="menuOverlay" class="fixed inset-0 z-50 hidden">
      <div class="absolute inset-0 bg-slate-900/40"></div>
      <aside class="absolute right-0 top-0 h-full w-72 bg-white shadow-xl p-6">
        <div class="flex items-center justify-between">
          <span class="text-base font-semibold">Menú</span>
          <button id="menuClose" class="rounded-md border border-slate-300 px-2 py-1 text-slate-700 hover:bg-slate-100" type="button" aria-label="Cerrar menú">✕</button>
        </div>
        <nav class="mt-6 flex flex-col gap-4 text-sm font-medium text-slate-700">
          <a class="hover:text-slate-900" href="/">Inicio</a>
          <a class="hover:text-slate-900" href="/nosotros">Nosotros</a>
          <a class="hover:text-slate-900" href="/contacto">Contacto</a>
        </nav>
      </aside>
    </div>

    <main class="min-h-screen grid place-items-center px-6">
      <script>
        const menuBtn = document.getElementById('menuBtn');
        const menuClose = document.getElementById('menuClose');
        const menuOverlay = document.getElementById('menuOverlay');

        const openMenu = () => menuOverlay.classList.remove('hidden');
        const closeMenu = () => menuOverlay.classList.add('hidden');

        menuBtn?.addEventListener('click', openMenu);
        menuClose?.addEventListener('click', closeMenu);
        menuOverlay?.addEventListener('click', (e) => {
          if (e.target === menuOverlay || e.target === menuOverlay.firstElementChild) closeMenu();
        });
      </script>
