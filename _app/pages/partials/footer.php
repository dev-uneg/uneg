    </main>
    <footer class="mt-16 bg-[#2f2f2f] text-slate-200">
      <div class="border-t border-slate-600/60"></div>
      <div class="max-w-7xl mx-auto px-5 sm:px-6 py-10">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-8 text-sm">
          <div class="space-y-3">
            <a class="block font-semibold hover:text-white" href="<?php echo $base; ?>/acerca">Acerca de ISEC.</a>
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
          <p class="mt-2"><a class="hover:text-white" href="<?php echo $base; ?>/contacto">Aviso de Privacidad</a></p>
          <p class="mt-2"><a class="hover:text-white" href="<?php echo $base; ?>/">Creado por UNEG.edu.mx</a></p>
        </div>
      </div>
    </footer>
    <a href="https://wa.me/5215571137882?text=Hola%2C%20acabo%20de%20visitar%20su%20sitio%20web%20y%20quiero%20informes%20de%20inscripciones%20y%20costos." class="whatsapp-float" aria-label="WhatsApp">
      <?php echo uneg_icon('whatsapp', 'h-7 w-7'); ?>
    </a>
    <script src="<?php echo $assetBase; ?>/_assets/js/rate-limit-countdown.js"></script>
    <script>
      (function () {
        const isApiForm = (form) => {
          if (!(form instanceof HTMLFormElement)) return false;
          const action = form.getAttribute('action') || '';
          return action.includes('/api/');
        };

        const addHoneypot = (form) => {
          if (!isApiForm(form)) return;
          if (form.querySelector('input[name="company_website"]')) return;

          const wrap = document.createElement('div');
          wrap.className = 'honeypot-field';
          wrap.setAttribute('aria-hidden', 'true');

          const label = document.createElement('label');
          label.textContent = 'Sitio web';
          label.setAttribute('for', 'company_website_' + Math.random().toString(36).slice(2, 9));

          const input = document.createElement('input');
          input.type = 'text';
          input.name = 'company_website';
          input.id = label.getAttribute('for');
          input.autocomplete = 'off';
          input.tabIndex = -1;

          wrap.appendChild(label);
          wrap.appendChild(input);
          form.appendChild(wrap);
        };

        document.querySelectorAll('form').forEach(addHoneypot);
      })();
    </script>
    <style>
      .honeypot-field {
        position: absolute !important;
        left: -9999px !important;
        width: 1px !important;
        height: 1px !important;
        overflow: hidden !important;
      }
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
