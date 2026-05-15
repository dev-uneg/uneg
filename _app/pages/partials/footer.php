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
      const selector = '[name="' + name + '"]';
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

    const engagementEndpoint = <?php echo json_encode($base . '/api/events/engagement', JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?>;

    const getEngagementSessionToken = () => {
      const storageKey = 'uneg_engagement_session_v1';

      try {
        const existing = window.localStorage.getItem(storageKey);

        if (existing && /^[A-Za-z0-9_-]{12,80}$/.test(existing)) {
          return existing;
        }

        const randomPart = Math.random().toString(36).slice(2, 14);

        const token = ('u' + Date.now().toString(36) + randomPart).slice(0, 40);

        window.localStorage.setItem(storageKey, token);

        return token;
      } catch (_err) {
        return ('u' + Date.now().toString(36) + Math.random().toString(36).slice(2, 12)).slice(0, 40);
      }
    };

    const engagementSessionToken = getEngagementSessionToken();

    const getEngagementBasePayload = () => ({
      page_path: window.location.pathname || '/',
      session_token: engagementSessionToken
    });

    const sendEngagementEvent = (eventName, extraPayload) => {
      const payload = Object.assign(
        { event_name: eventName },
        getEngagementBasePayload(),
        extraPayload || {}
      );

      postTrackingEvent(engagementEndpoint, payload);
    };

    const shouldTrackEngagement = () => {
      const path = (window.location.pathname || '/').toLowerCase();

      if (path.indexOf('/admin') === 0 || path.indexOf('/api') === 0) {
        return false;
      }

      return true;
    };

    if (shouldTrackEngagement()) {
      sendEngagementEvent('page_view');

      let engagedSent = false;

      setTimeout(() => {
        if (engagedSent || document.visibilityState !== 'visible') return;

        engagedSent = true;

        sendEngagementEvent('engaged_10s');
      }, 10000);

      const sentScrollEvents = new Set();

      const checkScrollDepth = () => {
        const scrollTop = window.scrollY || document.documentElement.scrollTop || 0;

        const viewport = window.innerHeight || document.documentElement.clientHeight || 0;

        const docHeight = Math.max(
          document.body.scrollHeight || 0,
          document.documentElement.scrollHeight || 0
        );

        const denominator = Math.max(1, docHeight - viewport);

        const pct = Math.round((scrollTop / denominator) * 100);

        if (pct >= 50 && !sentScrollEvents.has('scroll_50')) {
          sentScrollEvents.add('scroll_50');

          sendEngagementEvent('scroll_50', { scroll_pct: 50 });
        }

        if (pct >= 90 && !sentScrollEvents.has('scroll_90')) {
          sentScrollEvents.add('scroll_90');

          sendEngagementEvent('scroll_90', { scroll_pct: 90 });
        }
      };

      window.addEventListener('scroll', checkScrollDepth, { passive: true });

      checkScrollDepth();

      const startedAt = Date.now();

      window.addEventListener('pagehide', () => {
        const durationMs = Math.max(0, Date.now() - startedAt);

        sendEngagementEvent('time_on_page', { duration_ms: durationMs });
      });
    }
  })();
</script>
