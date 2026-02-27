(function () {
  const SVG_NS = 'http://www.w3.org/2000/svg';
  const XLINK_NS = 'http://www.w3.org/1999/xlink';

  const resolveAssetConfig = () => {
    const script = document.currentScript || Array.from(document.scripts).find((s) => (s.src || '').includes('/_assets/js/lucide-loader.js'));
    if (!script || !script.src) return { base: '', version: '' };

    try {
      const src = new URL(script.src, window.location.origin);
      const marker = '/_assets/js/lucide-loader.js';
      const idx = src.pathname.indexOf(marker);
      if (idx === -1) return { base: '', version: '' };
      return {
        base: src.pathname.slice(0, idx),
        version: src.searchParams.get('v') || ''
      };
    } catch (_error) {
      return { base: '', version: '' };
    }
  };

  const render = () => {
    const config = resolveAssetConfig();
    const spritePath = config.base + '/_assets/vendor/lucide/lucide-sprite.svg' + (config.version ? '?v=' + encodeURIComponent(config.version) : '');

    document.querySelectorAll('[data-lucide]').forEach((placeholder) => {
      const icon = (placeholder.getAttribute('data-lucide') || '').trim();
      if (!icon) return;

      const svg = document.createElementNS(SVG_NS, 'svg');
      svg.setAttribute('viewBox', '0 0 24 24');
      svg.setAttribute('fill', 'none');
      svg.setAttribute('stroke', 'currentColor');
      svg.setAttribute('stroke-width', '2');
      svg.setAttribute('stroke-linecap', 'round');
      svg.setAttribute('stroke-linejoin', 'round');
      svg.setAttribute('width', '1em');
      svg.setAttribute('height', '1em');

      const className = placeholder.getAttribute('class');
      if (className && className.trim() !== '') {
        svg.setAttribute('class', className);
      }

      Array.from(placeholder.attributes).forEach((attr) => {
        if (attr.name === 'class' || attr.name === 'data-lucide') return;
        svg.setAttribute(attr.name, attr.value);
      });

      if (!svg.hasAttribute('aria-hidden') && !svg.hasAttribute('aria-label') && !svg.hasAttribute('role')) {
        svg.setAttribute('aria-hidden', 'true');
      }

      const use = document.createElementNS(SVG_NS, 'use');
      const symbolHref = spritePath + '#lucide-' + icon;
      use.setAttributeNS(XLINK_NS, 'xlink:href', symbolHref);
      use.setAttribute('href', symbolHref);
      svg.appendChild(use);

      placeholder.replaceWith(svg);
    });
  };

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', render);
  } else {
    render();
  }
})();
