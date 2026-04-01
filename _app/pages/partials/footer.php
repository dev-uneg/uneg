    </main>
    <footer class="mt-16 bg-[#2f2f2f] text-slate-200">
      <div class="border-t border-slate-600/60"></div>
      <div class="max-w-7xl mx-auto px-5 sm:px-6 py-10">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-8 text-sm">
          <div class="space-y-3">
            <a class="block font-semibold hover:text-white" href="<?php echo $base; ?>/acerca-de-isec">Acerca de ISEC.</a>
            <a class="block font-semibold hover:text-white" href="<?php echo $base; ?>/recorrido-virtual">Recorrido Virtual</a>
          </div>

          <div class="space-y-3">
            <a class="block font-semibold hover:text-white" href="<?php echo $base; ?>/oferta-educativa">Oferta Educativa</a>
            <ul class="space-y-2 text-slate-300">
              <li>
                <a class="hover:text-white" href="<?php echo $base; ?>/nivel-medio-superior">- Nivel Medio Superior</a>
              </li>
              <li>
                <a class="hover:text-white" href="<?php echo $base; ?>/licenciaturas">- Licenciaturas</a>
              </li>
              <li>
                <a class="hover:text-white" href="<?php echo $base; ?>/diplomados-online-y-ejecutivos">- Diplomados Online y Ejecutivos</a>
              </li>
              <li>
                <a class="hover:text-white" href="<?php echo $base; ?>/maestrias">- Maestrías</a>
              </li>
              <li>
                <a class="hover:text-white" href="<?php echo $base; ?>/doctorados">- Doctorados</a>
              </li>
            </ul>
          </div>

          <div class="space-y-3">
            <a class="block font-semibold hover:text-white" href="<?php echo $base; ?>/ixu">IXU</a>
            <ul class="space-y-2 text-slate-300">
              <li>
                <a class="hover:text-white" href="<?php echo $base; ?>/diplomados-online-y-ejecutivos">- Diplomados Online y Ejecutivos</a>
              </li>
              <li>
                <a class="hover:text-white" href="<?php echo $base; ?>/cursos">- Cursos</a>
              </li>
            </ul>
          </div>

          <div class="space-y-3">
            <a class="block font-semibold hover:text-white" href="<?php echo $base; ?>/comunidad">Comunidad</a>
            <ul class="space-y-2 text-slate-300">
              <li>
                <a class="hover:text-white" href="<?php echo $base; ?>/comunidad/alumnos">- Alumnos</a>
              </li>
              <li>
                <a class="hover:text-white" href="<?php echo $base; ?>/comunidad/docentes">- Docentes</a>
              </li>
              <li>
                <a class="hover:text-white" href="<?php echo $base; ?>/comunidad/noticias">- Noticias</a>
              </li>
              <li>
                <a class="hover:text-white" href="<?php echo $base; ?>/blog">- Blog</a>
              </li>
              <li>
                <a class="hover:text-white" href="<?php echo $base; ?>/comunidad/buzon-del-rector">- Buzón del Rector</a>
              </li>
            </ul>
          </div>

          <div class="space-y-3">
            <a class="block font-semibold hover:text-white" href="<?php echo $base; ?>/egresados">Egresados</a>
            <a class="block font-semibold hover:text-white" href="<?php echo $base; ?>/contacto">Contacto</a>
          </div>
        </div>

        <div class="mt-10 text-xs text-slate-400">
          <p>© 2026 <a class="hover:text-white" href="<?php echo $base; ?>/">Universidad de Negocios ISEC</a>. Todos los derechos reservados.</p>
          <p class="mt-2"><a class="hover:text-white" href="<?php echo $base; ?>/aviso-de-privacidad">Aviso de Privacidad</a></p>
          <p class="mt-2"><a class="hover:text-white" href="<?php echo $base; ?>/">Creado por UNEG.edu.mx</a></p>
        </div>
      </div>
    </footer>
    <?php
      $requestPath = (string) parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
      if ($requestPath === '') {
        $requestPath = '/';
      }

      if (isset($base) && is_string($base) && $base !== '' && strpos($requestPath, $base . '/') === 0) {
        $requestPath = substr($requestPath, strlen($base));
      }

      $isOfferOrLandingPath =
        $requestPath === '/lp-licenciaturas' ||
        $requestPath === '/lp-maestrias' ||
        $requestPath === '/lp-nivel-medio-superior' ||
        $requestPath === '/oferta-educativa' ||
        $requestPath === '/nivel-medio-superior' ||
        $requestPath === '/cch-isec' ||
        $requestPath === '/bachillerato-en-linea' ||
        $requestPath === '/bachillerato-tecnico-administracion-empresas-turisticas' ||
        $requestPath === '/curso-colbach' ||
        strpos($requestPath, '/licenciaturas') === 0 ||
        strpos($requestPath, '/maestrias') === 0 ||
        strpos($requestPath, '/doctorados') === 0;
    ?>
    <?php if (!$isOfferOrLandingPath): ?>
      <a href="https://wa.me/5215571137882?text=Hola%2C%20acabo%20de%20visitar%20su%20sitio%20web%20UNEG%20y%20quiero%20informes%20de%20inscripciones%20y%20costos." class="whatsapp-float" aria-label="WhatsApp" data-track-whatsapp="1">
        <?php echo uneg_icon('whatsapp', 'h-7 w-7'); ?>
      </a>
    <?php endif; ?>
    <?php
      require_once __DIR__ . '/../../helpers/turnstile.php';
      $turnstileSiteKey = turnstile_site_key();
    ?>
    <script src="https://challenges.cloudflare.com/turnstile/v0/api.js" defer></script>
    <script>
      (function () {
        const siteKey = <?php echo json_encode($turnstileSiteKey, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?>;
        if (!siteKey) return;

        const isPublicApiForm = (form) => {
          if (!(form instanceof HTMLFormElement)) return false;
          const action = form.getAttribute('action') || '';
          return action.includes('/api/') && !action.includes('/admin/');
        };

        const isOfferApiForm = (form) => {
          if (!(form instanceof HTMLFormElement)) return false;
          const action = form.getAttribute('action') || '';
          return action.includes('/api/forms/') && !action.includes('/api/forms/contacto');
        };

        const isContactoApiForm = (form) => {
          if (!(form instanceof HTMLFormElement)) return false;
          const action = form.getAttribute('action') || '';
          return action.includes('/api/forms/contacto');
        };

        const setOrCreateHidden = (form, name, value) => {
          const selector = '[name=\"' + name + '\"]';
          let field = form.querySelector(selector);

          if (field) {
            field.value = value;
            return;
          }

          field = document.createElement('input');
          field.type = 'hidden';
          field.name = name;
          field.value = value;
          form.appendChild(field);
        };

        const addUtmFields = (form) => {
          if (!isOfferApiForm(form)) return;

          const action = form.getAttribute('action') || '';
          const isLandingForm = action.includes('/api/forms/lp-');
          const params = new URLSearchParams(window.location.search);
          const sourceFallback = isLandingForm ? 'lp_sin_utm' : 'organico';
          const source = (params.get('utm_source') || '').trim() || sourceFallback;
          const medium = (params.get('utm_medium') || '').trim() || 'organico';
          const campaign = (params.get('utm_campaign') || '').trim() || 'organico';

          setOrCreateHidden(form, 'source', source);
          setOrCreateHidden(form, 'medium', medium);
          setOrCreateHidden(form, 'campaign', campaign);
        };

        const addContactoUtmFields = (form) => {
          if (!isContactoApiForm(form)) return;

          const params = new URLSearchParams(window.location.search);
          const utmSource = (params.get('utm_source') || '').trim() || 'organico';
          const utmMedium = (params.get('utm_medium') || '').trim() || 'organico';
          const utmCampaign = (params.get('utm_campaign') || '').trim() || 'organico';

          setOrCreateHidden(form, 'utm_source', utmSource);
          setOrCreateHidden(form, 'utm_medium', utmMedium);
          setOrCreateHidden(form, 'utm_campaign', utmCampaign);
        };

        const addPagePathField = (form) => {
          if (!isPublicApiForm(form)) return;
          const currentPath = window.location.pathname || '/';
          setOrCreateHidden(form, 'page_path', currentPath);
        };

        const addTurnstile = (form) => {
          if (!isPublicApiForm(form)) return;
          if (form.querySelector('.cf-turnstile')) return;

          const wrap = document.createElement('div');
          wrap.className = 'turnstile-wrap sm:col-span-2';

          const widget = document.createElement('div');
          widget.className = 'cf-turnstile';
          widget.setAttribute('data-sitekey', siteKey);
          wrap.appendChild(widget);

          const submit = form.querySelector('button[type="submit"], input[type="submit"]');
          if (submit && submit.parentNode) {
            submit.parentNode.insertBefore(wrap, submit);
          } else {
            form.appendChild(wrap);
          }
        };

        document.querySelectorAll('form').forEach((form) => {
          addUtmFields(form);
          addContactoUtmFields(form);
          addPagePathField(form);
          addTurnstile(form);
        });

        const trackWhatsappClick = (anchor) => {
          if (!(anchor instanceof HTMLAnchorElement)) return;

          postTrackingEvent(
            <?php echo json_encode($base . '/api/events/whatsapp-click', JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?>,
            {
              page_path: window.location.pathname || '/',
              target_url: anchor.getAttribute('href') || '',
              referrer_url: document.referrer || ''
            }
          );
        };

        const postTrackingEvent = (endpoint, payload) => {
          const body = JSON.stringify(payload || {});
          if (navigator.sendBeacon) {
            const blob = new Blob([body], { type: 'application/json' });
            navigator.sendBeacon(endpoint, blob);
            return;
          }

          fetch(endpoint, {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body,
            keepalive: true
          }).catch(() => {});
        };

        const normalize = (text) => (text || '').replace(/\s+/g, ' ').trim();

        const getProgramLabelFromPage = () => {
          const fromPath = () => {
            const rawPath = String(window.location.pathname || '').split('?')[0].split('#')[0];
            const cleanPath = rawPath.replace(/^\/+|\/+$/g, '');
            if (!cleanPath) return '';

            const parts = cleanPath.split('/').filter(Boolean);
            let slug = parts[parts.length - 1] || '';
            if (!slug) return '';

            slug = decodeURIComponent(slug);
            return normalize(
              slug
                .replace(/[-_]+/g, ' ')
                .replace(/\b\w/g, (char) => char.toUpperCase())
                .replace(/\bSua\b/g, 'SUA')
            );
          };

          const fromRoute = fromPath();
          if (fromRoute) return fromRoute;

          const pageHeading = document.querySelector('h1');
          if (pageHeading && pageHeading.textContent) {
            const fromH1 = normalize(pageHeading.textContent);
            if (fromH1) return fromH1;
          }

          return '';
        };

        const getCtaLabelForElement = (element) => {
          if (!(element instanceof HTMLElement)) return '';

          const explicit = (element.getAttribute('data-cta-label') || element.getAttribute('data-offer-name') || '').trim();
          if (explicit) return explicit.slice(0, 190);

          if (element instanceof HTMLAnchorElement) {
            const href = (element.getAttribute('href') || '').trim().toLowerCase();
            if (href.includes('/_assets/planes-de-estudio/')) {
              const program = getProgramLabelFromPage();
              return ('Plan de Estudios - ' + (program || 'Sin identificar')).slice(0, 190);
            }
          }

          const rawText = normalize(element.textContent || '');
          if (rawText !== '') {
            const textLower = rawText.toLowerCase();
            if (textLower === 'ver horarios' || textLower === 'contactar') {
              const program = getProgramLabelFromPage();
              return ((rawText + ' - ' + (program || 'Sin identificar')).slice(0, 190));
            }
            return rawText.slice(0, 190);
          }

          return 'CTA sin etiqueta';
        };

        const isPlanDownloadLink = (anchor) => {
          if (!(anchor instanceof HTMLAnchorElement)) return false;
          const href = (anchor.getAttribute('href') || '').trim().toLowerCase();
          return href.includes('/_assets/planes-de-estudio/');
        };

        const isTrackedCtaButton = (button) => {
          if (!(button instanceof HTMLButtonElement)) return false;
          const text = normalize(button.textContent || '').toLowerCase();
          return text === 'ver horarios' || text === 'contactar' || button.hasAttribute('data-track-cta');
        };

        const trackCtaClick = (element) => {
          if (!(element instanceof HTMLElement)) return;
          postTrackingEvent(
            <?php echo json_encode($base . '/api/events/cta-click', JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?>,
            {
              page_path: window.location.pathname || '/',
              click_label: getCtaLabelForElement(element),
              target_url: element instanceof HTMLAnchorElement ? (element.getAttribute('href') || '') : '',
              referrer_url: document.referrer || ''
            }
          );
        };

        document.querySelectorAll('a[data-track-whatsapp=\"1\"]').forEach((anchor) => {
          anchor.addEventListener('click', () => trackWhatsappClick(anchor), { passive: true });
        });

        document.querySelectorAll('a[href]').forEach((anchor) => {
          if (!isPlanDownloadLink(anchor)) return;
          anchor.addEventListener('click', () => trackCtaClick(anchor), { passive: true });
        });

        document.querySelectorAll('button').forEach((button) => {
          if (!isTrackedCtaButton(button)) return;
          button.addEventListener('click', () => trackCtaClick(button), { passive: true });
        });
      })();
    </script>
    <style>
      .whatsapp-float {
        position: fixed;
        right: 20px;
        bottom: 20px;
        width: 60px;
        height: 60px;
        border-radius: 999px;
        background: #25D366;
        color: #ffffff;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 28px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        z-index: 50;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
      }
      .whatsapp-float:hover {
        transform: translateY(-2px);
        box-shadow: 0 14px 30px rgba(0, 0, 0, 0.25);
      }
      .whatsapp-float:focus-visible {
        outline: 3px solid rgba(37, 211, 102, 0.4);
        outline-offset: 3px;
      }
      .rate-limit-alert {
        margin-bottom: 1rem;
        border: 1px solid #fecaca;
        background: #fff1f2;
        color: #9f1239;
        border-radius: 0.75rem;
        padding: 0.75rem 1rem;
      }
      .rate-limit-alert__text {
        margin: 0;
        font-size: 0.875rem;
        font-weight: 600;
      }
    </style>
  </body>
</html>
