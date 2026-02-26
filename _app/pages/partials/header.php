<?php
$title = $title ?? 'UNEG';
$active = $active ?? '';
$bodyClass = $bodyClass ?? 'bg-slate-50';
$base = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/');
$base = $base === '.' ? '' : $base;
$assetBase = $base === '' ? '' : $base;
require_once __DIR__ . '/../../helpers/icons.php';

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
  <!-- PRODUCCION: descomentar el CSS compilado -->
  <link rel="stylesheet" href="<?php echo $assetBase; ?>/_assets/css/output.css">
  <!-- DESARROLLO: Tailwind CDN para ver cambios sin compilar -->
  <!-- <script src="https://cdn.tailwindcss.com"></script> -->
  <link rel="stylesheet" href="<?php echo $assetBase; ?>/_assets/vendor/remixicon/remixicon.css">
  <style>
    @font-face {
      font-family: 'Figtree';
      src: url('<?php echo $assetBase; ?>/_assets/fonts/Figtree-wght.ttf') format('truetype');
      font-weight: 100 900;
      font-style: normal;
      font-display: swap;
    }
    @font-face {
      font-family: 'Figtree';
      src: url('<?php echo $assetBase; ?>/_assets/fonts/Figtree-Italic-wght.ttf') format('truetype');
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

      // Marca enlaces activos en submenus con base en la ruta actual.
      const normalizePath = (path) => {
        const cleaned = (path || '/').replace(/\/+$/, '');
        return cleaned === '' ? '/' : cleaned;
      };
      const currentPath = normalizePath(window.location.pathname);
      const sectionPrefixes = new Map([
        ['/blog', '/blog/'],
        ['/comunidad/noticias', '/comunidad/noticias/'],
        ['/licenciaturas', '/licenciaturas/'],
        ['/maestrias', '/maestrias/'],
        ['/doctorados', '/doctorados/'],
      ]);
      const shouldMarkActive = (targetPath) => {
        if (targetPath === currentPath) return true;
        const prefix = sectionPrefixes.get(targetPath);
        return Boolean(prefix && currentPath.startsWith(prefix));
      };

      document.querySelectorAll('.menu-dropdown a[href], #mobile-nav [id^="mobile-"] a[href]').forEach((link) => {
        const href = link.getAttribute('href');
        if (!href || href.startsWith('#') || href.startsWith('mailto:') || href.startsWith('tel:')) return;
        let parsed;
        try {
          parsed = new URL(href, window.location.origin);
        } catch (_error) {
          return;
        }
        if (parsed.origin !== window.location.origin) return;
        const targetPath = normalizePath(parsed.pathname);
        if (shouldMarkActive(targetPath)) {
          link.classList.add('is-active');
        }
      });

      // Asegura que Oferta Educativa muestre el panel correcto segun la ruta activa.
      const ofertaPanelByPath = (() => {
        if (
          currentPath === '/nivel-medio-superior' ||
          currentPath === '/cch-isec' ||
          currentPath === '/bachillerato-en-linea' ||
          currentPath === '/bachillerato-tecnico-administracion-empresas-turisticas' ||
          currentPath === '/curso-colbach'
        ) return 'nms';
        if (currentPath.startsWith('/licenciaturas')) return 'lic';
        if (currentPath === '/diplomados' || currentPath === '/cursos' || currentPath === '/diplomados-online-y-ejecutivos') return 'dip';
        if (currentPath.startsWith('/maestrias')) return 'mae';
        if (currentPath.startsWith('/doctorados')) return 'doc';
        return null;
      })();

      const ofertaMega = document.querySelector('.mega[data-mega-always="true"]');
      if (ofertaMega && ofertaPanelByPath) {
        ofertaMega.querySelectorAll('.mega-item').forEach((item) => {
          const isActivePanel = item.dataset.panel === ofertaPanelByPath;
          item.classList.toggle('active', isActivePanel);
          item.classList.toggle('is-active', isActivePanel);
        });
        ofertaMega.querySelectorAll('.mega-panel').forEach((panel) => {
          panel.classList.toggle('active', panel.dataset.panel === ofertaPanelByPath);
        });
      }

      // Si una opcion de submenu anidado esta activa, marca tambien su enlace padre.
      document.querySelectorAll('.simple-item').forEach((item) => {
        if (!item.querySelector('.simple-submenu a.is-active')) return;
        const parentLink = item.querySelector(':scope > a');
        if (parentLink) parentLink.classList.add('is-active');
      });

      // En movil, abre automaticamente los acordeones que contienen una ruta activa.
      document.querySelectorAll('#mobile-nav [id^="mobile-"]').forEach((section) => {
        if (!section.querySelector('a.is-active')) return;
        section.classList.remove('hidden');
        const trigger = document.querySelector(`[data-mobile-toggle="${section.id}"]`);
        if (!trigger) return;
        trigger.setAttribute('aria-expanded', 'true');
        const icon = trigger.querySelector('[data-icon]');
        if (icon) icon.textContent = '—';
      });
    </script>
