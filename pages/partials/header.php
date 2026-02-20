<?php
$title = $title ?? 'UNEG';
$active = $active ?? '';
$bodyClass = $bodyClass ?? 'bg-slate-50';
$base = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/');
$base = $base === '.' ? '' : $base;
$assetBase = $base === '' ? '' : $base;

$navLink = function (string $href, string $label, string $key) use ($active, $base) {
  $isActive = $active === $key;
  $classes = $isActive
    ? 'bg-[#0d4fb6] text-white px-3 py-2 rounded-md shadow-sm transition-colors hover:bg-[#0b3f93] active:bg-[#08306a]'
    : 'hover:text-[#0d4fb6] transition-colors';
  $url = $base . $href;
  return '<a class="' . $classes . '" href="' . $url . '">' . $label . '</a>';
};
?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo htmlspecialchars($title); ?></title>
  <link rel="stylesheet" href="<?php echo $assetBase; ?>/assets/css/output.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css">
  <style>
    @font-face {
      font-family: 'Figtree';
      src: url('<?php echo $assetBase; ?>/fonts/Figtree-wght.ttf') format('truetype');
      font-weight: 100 900;
      font-style: normal;
      font-display: swap;
    }
    @font-face {
      font-family: 'Figtree';
      src: url('<?php echo $assetBase; ?>/fonts/Figtree-Italic-wght.ttf') format('truetype');
      font-weight: 100 900;
      font-style: italic;
      font-display: swap;
    }
    body { font-family: 'Figtree', sans-serif; }
    @media (max-width: 639px) {
      /* Evita sumar padding global + padding de cada pagina en movil */
      body > main.min-h-screen {
        padding-left: 0 !important;
        padding-right: 0 !important;
      }
      /* Las vistas que usan -mx-6 no deben desbordar en movil */
      body > main.min-h-screen .-mx-6 {
        margin-left: 0 !important;
        margin-right: 0 !important;
      }
      .h-\[500px\] {
        height: 180px !important;
      }
      #home-slider,
      #home-slider .home-slide {
        height: 180px !important;
      }
      main > section:first-of-type > img.block.w-full.h-auto[loading="eager"],
      main main > section:first-of-type > img.block.w-full.h-auto[loading="eager"] {
        height: 180px !important;
        object-fit: cover;
      }
    }
  </style>
</head>
<body class="antialiased <?php echo htmlspecialchars($bodyClass); ?>">
  <?php include __DIR__ . '/subheader.php'; ?>
  <?php include __DIR__ . '/nav.php'; ?>

  <main class="min-h-screen px-0 sm:px-6">
    <script>
      const menuToggle = document.getElementById('menu-toggle');
      const mobileNav = document.getElementById('mobile-nav');

      if (menuToggle && mobileNav) {
        menuToggle.addEventListener('click', () => {
          mobileNav.classList.toggle('hidden');
        });
      }

      // Mega menu: cambia panel al hacer hover en la columna izquierda
      document.querySelectorAll('.mega').forEach((mega) => {
        const items = mega.querySelectorAll('.mega-item');
        const panels = mega.querySelectorAll('.mega-panel');
        const hideWhenEmpty = mega.hasAttribute('data-mega-hide-empty');
        const alwaysRight = mega.hasAttribute('data-mega-always');

        items.forEach((item) => {
          item.addEventListener('mouseenter', () => {
            const panel = item.dataset.panel || '';
            items.forEach((i) => i.classList.toggle('active', i === item));
            panels.forEach((p) => p.classList.toggle('active', p.dataset.panel === panel));
            if (hideWhenEmpty && !alwaysRight) {
              mega.classList.toggle('has-right', panel !== '');
            }
          });
        });
      });

      // Mobile toggles (accordion)
      const mobileToggles = document.querySelectorAll('[data-mobile-toggle]');
      mobileToggles.forEach((btn) => {
        const targetId = btn.getAttribute('data-mobile-toggle');
        const target = document.getElementById(targetId);
        if (!target) return;

        btn.addEventListener('click', () => {
          target.classList.toggle('hidden');
          const isOpen = !target.classList.contains('hidden');
          btn.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
          const icon = btn.querySelector('[data-icon]');
          if (icon) icon.textContent = isOpen ? '—' : '+';
        });
      });
    </script>
