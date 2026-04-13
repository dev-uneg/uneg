<?php
declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo htmlspecialchars((string) ($pageTitle ?? 'Admin UNEG'), ENT_QUOTES, 'UTF-8'); ?></title>
  <link rel="stylesheet" href="<?php echo htmlspecialchars((string) $base, ENT_QUOTES, 'UTF-8'); ?>/_assets/css/output.css">
  <link rel="stylesheet" href="<?php echo htmlspecialchars((string) $base, ENT_QUOTES, 'UTF-8'); ?>/_assets/admin-fonts.css">
  <script defer src="<?php echo htmlspecialchars((string) $base, ENT_QUOTES, 'UTF-8'); ?>/_assets/js/lucide-loader.js?v=4"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <style>
    @keyframes admin-spin {
      to { transform: rotate(360deg); }
    }
  </style>
</head>
<body class="min-h-screen bg-slate-50 text-slate-900">
  <div id="admin-page-loader" class="fixed inset-0 z-50 flex items-center justify-center bg-slate-50">
    <div class="flex flex-col items-center gap-3">
      <span style="display:block;width:44px;height:44px;border:4px solid #cbd5e1;border-top-color:#0b2c65;border-radius:9999px;animation:admin-spin .8s linear infinite;"></span>
      <p class="text-sm font-normal text-slate-500">Cargando información...</p>
    </div>
  </div>

  <div id="admin-async-root" class="hidden"></div>

  <script>
    (function () {
      const loader = document.getElementById('admin-page-loader');
      const root = document.getElementById('admin-async-root');
      const startTs = Date.now();
      const minLoaderMs = 450;

      const toAsyncUrl = () => {
        const url = new URL(window.location.href);
        url.searchParams.set('_async', '1');
        return url.toString();
      };

      const upgradeLucideIcons = (scope) => {
        const spriteHref = '<?php echo htmlspecialchars((string) $base, ENT_QUOTES, 'UTF-8'); ?>/_assets/vendor/lucide/lucide-sprite.svg?v=4';
        const placeholders = scope.querySelectorAll('i[data-lucide]');
        const ns = 'http://www.w3.org/2000/svg';
        const xlinkNs = 'http://www.w3.org/1999/xlink';

        placeholders.forEach((placeholder) => {
          const iconName = placeholder.getAttribute('data-lucide');
          if (!iconName) return;

          const svg = document.createElementNS(ns, 'svg');
          const use = document.createElementNS(ns, 'use');
          const iconHref = `${spriteHref}#lucide-${iconName}`;
          use.setAttribute('href', iconHref);
          use.setAttributeNS(xlinkNs, 'xlink:href', iconHref);

          for (const { name, value } of Array.from(placeholder.attributes)) {
            if (name === 'data-lucide' || name === 'aria-label') continue;
            svg.setAttribute(name, value);
          }

          const ariaLabel = placeholder.getAttribute('aria-label');
          if (ariaLabel && ariaLabel.trim() !== '') {
            svg.setAttribute('aria-label', ariaLabel.trim());
            svg.setAttribute('role', 'img');
          } else {
            svg.setAttribute('aria-hidden', 'true');
          }

          if (!svg.hasAttribute('fill')) svg.setAttribute('fill', 'none');
          if (!svg.hasAttribute('stroke')) svg.setAttribute('stroke', 'currentColor');
          if (!svg.hasAttribute('stroke-width')) svg.setAttribute('stroke-width', '2');
          if (!svg.hasAttribute('stroke-linecap')) svg.setAttribute('stroke-linecap', 'round');
          if (!svg.hasAttribute('stroke-linejoin')) svg.setAttribute('stroke-linejoin', 'round');
          if (!svg.hasAttribute('width')) svg.setAttribute('width', '1em');
          if (!svg.hasAttribute('height')) svg.setAttribute('height', '1em');

          svg.appendChild(use);
          placeholder.replaceWith(svg);
        });
      };

      const runEmbeddedScripts = async (scope) => {
        const scripts = Array.from(scope.querySelectorAll('script'));
        for (const oldScript of scripts) {
          const newScript = document.createElement('script');
          for (const attr of Array.from(oldScript.attributes)) {
            newScript.setAttribute(attr.name, attr.value);
          }

          if (oldScript.src) {
            const loaded = new Promise((resolve, reject) => {
              newScript.onload = resolve;
              newScript.onerror = reject;
            });
            oldScript.replaceWith(newScript);
            await loaded;
            continue;
          }

          newScript.textContent = oldScript.textContent;
          oldScript.replaceWith(newScript);
        }
      };

      const showError = () => {
        loader.innerHTML = '<div class="rounded-xl border border-rose-200 bg-rose-50 px-4 py-3 text-sm text-rose-700">No se pudo cargar la vista. Recarga la página.</div>';
      };

      const load = async () => {
        try {
          const resp = await fetch(toAsyncUrl(), { credentials: 'same-origin' });
          if (!resp.ok) throw new Error('HTTP ' + resp.status);
          const html = await resp.text();
          root.innerHTML = html;
          await runEmbeddedScripts(root);
          upgradeLucideIcons(root);
          const elapsed = Date.now() - startTs;
          if (elapsed < minLoaderMs) {
            await new Promise((resolve) => setTimeout(resolve, minLoaderMs - elapsed));
          }
          root.classList.remove('hidden');
          loader.classList.add('hidden');
        } catch (error) {
          console.error(error);
          showError();
        }
      };

      load();
    })();
  </script>
</body>
</html>
