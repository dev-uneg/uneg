<style>
  .menu-parent { position: relative; }
  .menu-dropdown {
    position: absolute;
    left: 50%;
    top: calc(100% + 12px);
    width: 720px;
    max-width: 86vw;
    background: #fff;
    border: 1px solid #e5e7eb;
    border-radius: 12px;
    box-shadow: 0 12px 28px rgba(15, 23, 42, 0.18);
    opacity: 0;
    visibility: hidden;
    transform: translate(-50%, 6px);
    transition: opacity 160ms ease, transform 160ms ease, visibility 0s linear 160ms;
    z-index: 50;
  }
  .menu-dropdown--mid {
    width: 520px;
    max-width: 86vw;
  }
  .menu-dropdown--narrow {
    width: 320px;
    max-width: 80vw;
  }
  .menu-parent:hover .menu-dropdown,
  .menu-dropdown:hover {
    opacity: 1;
    visibility: visible;
    transform: translate(-50%, 0);
    transition-delay: 120ms;
  }
  .mega {
    display: grid;
    grid-template-columns: 1fr;
    max-height: 70vh;
    overflow: hidden;
  }
  .mega.has-right {
    grid-template-columns: 260px 1fr;
  }
  .mega--small.has-right {
    grid-template-columns: 220px 1fr;
  }
  .mega-left {
    border-right: 1px solid #e5e7eb;
    overflow-y: auto;
  }
  .mega-right {
    display: none;
    overflow-y: auto;
  }
  .mega.has-right .mega-right {
    display: block;
  }
  .mega-item {
    width: 100%;
    text-align: left;
    padding: 14px 18px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 12px;
    font-weight: 600;
    color: #0b2c65;
    background: transparent;
    border: 0;
    text-decoration: none;
  }
  .mega-item:hover,
  .mega-item.active {
    background: #f8fafc;
  }
  .mega-panel {
    display: none;
    padding: 8px 0;
  }
  .mega-panel.active {
    display: block;
  }
  .mega-panel a {
    display: block;
    padding: 12px 18px;
    font-weight: 600;
    color: #0b2c65;
  }
  .mega-panel a:hover {
    background: #f8fafc;
  }
  .mega-left .mega-item:first-child,
  .mega-left .mega-item:first-child:hover,
  .mega-left .mega-item:first-child.active {
    border-top-left-radius: 10px;
  }
  .mega-left .mega-item:last-child,
  .mega-left .mega-item:last-child:hover,
  .mega-left .mega-item:last-child.active {
    border-bottom-left-radius: 10px;
  }
  .mega-right .mega-panel a:first-child {
    border-top-right-radius: 10px;
  }
  .mega-right .mega-panel a:last-child {
    border-bottom-right-radius: 10px;
  }
  .menu-dropdown .py-2 > a:first-child {
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
  }
  .menu-dropdown .py-2 > a:last-child {
    border-bottom-left-radius: 10px;
    border-bottom-right-radius: 10px;
  }
  .simple-menu a {
    display: block;
    padding: 12px 20px;
    font-weight: 600;
    color: #0b2c65;
  }
  .simple-menu a:hover {
    background: #f8fafc;
  }
  .simple-menu > a:first-child,
  .simple-menu > .simple-item:first-child > a {
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
  }
  .simple-menu > a:last-child,
  .simple-menu > .simple-item:last-child > a {
    border-bottom-left-radius: 10px;
    border-bottom-right-radius: 10px;
  }
  .simple-item {
    position: relative;
  }
  .simple-submenu {
    position: absolute;
    right: 100%;
    top: 0;
    min-width: 280px;
    max-width: 320px;
    background: #fff;
    border: 1px solid #e5e7eb;
    border-radius: 12px;
    box-shadow: 0 12px 28px rgba(15, 23, 42, 0.18);
    opacity: 0;
    visibility: hidden;
    transform: translateX(-6px);
    transition: opacity 160ms ease, transform 160ms ease, visibility 0s linear 160ms;
    z-index: 60;
  }
  .simple-item:hover .simple-submenu,
  .simple-submenu:hover {
    opacity: 1;
    visibility: visible;
    transform: translateX(0);
    transition-delay: 120ms;
  }
  .simple-submenu a:first-child {
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
  }
  .simple-submenu a:last-child {
    border-bottom-left-radius: 10px;
    border-bottom-right-radius: 10px;
  }
</style>

<header class="shadow-sm">
  <div class="bg-white">
    <div class="max-w-7xl mx-auto px-4 py-4 flex items-center justify-between gap-6">
      <a class="flex items-center gap-3" href="<?php echo $base . '/'; ?>">
        <img src="<?php echo $assetBase; ?>/imgs/logo.png" alt="Universidad de Negocios ISEC" class="h-14 w-auto scale-[1.24] origin-left">
      </a>

      <button id="menu-toggle" class="lg:hidden inline-flex items-center justify-center p-2 rounded-md border border-slate-200 text-brandBlue hover:bg-slate-100" aria-label="Abrir menú">
        <i class="ri-menu-line text-xl"></i>
      </button>

      <nav class="hidden lg:flex items-center gap-6 text-sm font-semibold text-[#0b2c65]">
        <?php
          echo $navLink('/', 'Inicio', 'inicio');
          echo $navLink('/acerca', 'Acerca de ISEC.', 'acerca');
          echo $navLink('/recorrido-virtual', 'Recorrido Virtual', 'recorrido');
        ?>

        <div class="menu-parent">
          <a class="inline-flex items-center gap-2 <?php echo $active === 'oferta' ? 'bg-[#0d4fb6] text-white px-3 py-2 rounded-md shadow-sm transition-colors hover:bg-[#0b3f93] active:bg-[#08306a]' : 'hover:text-[#0d4fb6] transition-colors'; ?>" href="<?php echo $base . '/oferta-educativa'; ?>">
            Oferta Educativa
          </a>
          <div class="menu-dropdown">
            <div class="mega has-right" data-mega-always="true">
              <div class="mega-left">
                <a class="mega-item active" href="<?php echo $base; ?>/nivel-medio-superior" data-panel="nms">Nivel Medio Superior <span class="text-slate-400">—</span></a>
                <a class="mega-item" href="<?php echo $base; ?>/licenciaturas" data-panel="lic">Licenciaturas <span class="text-slate-400">—</span></a>
                <button class="mega-item" type="button" data-panel="dip">Diplomados Online y Ejecutivos <span class="text-slate-400">—</span></button>
                <a class="mega-item" href="<?php echo $base; ?>/maestrias" data-panel="mae">Maestrías <span class="text-slate-400">—</span></a>
                <a class="mega-item" href="<?php echo $base; ?>/doctorados" data-panel="doc">Doctorados <span class="text-slate-400">—</span></a>
              </div>
              <div class="mega-right">
                <div class="mega-panel active" data-panel="nms">
                  <a href="<?php echo $base; ?>/cch-isec">CCH ISEC</a>
                  <a href="<?php echo $base; ?>/bachillerato-en-linea">Bachillerato en Línea</a>
                  <a href="<?php echo $base; ?>/bachillerato-tecnico-administracion-empresas-turisticas">Bachillerato Técnico en Administración de Empresas Turísticas</a>
                  <a href="<?php echo $base; ?>/curso-colbach">Curso Colbach</a>
                </div>
                <div class="mega-panel" data-panel="lic">
                  <a href="<?php echo $base; ?>/licenciaturas/contaduria-publica-estrategica">Contaduría Pública Estratégica</a>
                  <a href="<?php echo $base; ?>/licenciaturas/derecho">Derecho</a>
                  <a href="<?php echo $base; ?>/licenciaturas/ingenieria-en-administracion-y-negocios">Ingeniería en Administración y Negocios</a>
                  <a href="<?php echo $base; ?>/licenciaturas/ingenieria-en-finanzas">Ingeniería en Finanzas</a>
                  <a href="<?php echo $base; ?>/licenciaturas/ingenieria-en-inteligencia-artificial">Ingeniería en Inteligencia Artificial</a>
                  <a href="<?php echo $base; ?>/licenciaturas/ingenieria-en-tecnologias-de-informacion-para-negocios">Ingeniería en Tecnologías de Información para Negocios</a>
                  <a href="<?php echo $base; ?>/licenciaturas/mercadotecnia-estrategica">Mercadotecnia Estratégica</a>
                  <a href="<?php echo $base; ?>/licenciaturas/negocios-internacionales">Negocios Internacionales</a>
                  <a href="<?php echo $base; ?>/licenciaturas/pedagogia">Pedagogía</a>
                  <a href="<?php echo $base; ?>/licenciaturas/psicologia">Psicología</a>
                  <a href="<?php echo $base; ?>/licenciaturas/innovacion-turistica-y-gastronomica">Innovación Turística y Gastronómica</a>
                  <a href="<?php echo $base; ?>/licenciaturas/administracion-sua">Administración SUA</a>
                  <a href="<?php echo $base; ?>/licenciaturas/derecho-sua">Derecho SUA</a>
                </div>
                <div class="mega-panel" data-panel="dip">
                  <a href="<?php echo $base; ?>/diplomados">Diplomados</a>
                  <a href="<?php echo $base; ?>/cursos">Cursos</a>
                </div>
                <div class="mega-panel" data-panel="mae">
                  <a href="<?php echo $base; ?>/maestrias/maestria-en-administracion-de-negocios">Maestría en Administración de Negocios</a>
                  <a href="<?php echo $base; ?>/maestrias/maestria-en-administracion-de-negocios-en-linea">Maestría en Administración de Negocios En Línea</a>
                  <a href="<?php echo $base; ?>/maestrias/maestria-en-docencia">Maestría en Docencia</a>
                  <a href="<?php echo $base; ?>/maestrias/maestria-en-finanzas">Maestría en Finanzas</a>
                  <a href="<?php echo $base; ?>/maestrias/maestria-en-fiscal">Maestría en Fiscal</a>
                  <a href="<?php echo $base; ?>/maestrias/maestria-en-mercadotecnia">Maestría en Mercadotecnia</a>
                  <a href="<?php echo $base; ?>/maestrias/maestria-en-tecnologias-de-informacion-y-comunicaciones">Maestría en Tecnologías de Información y Comunicaciones</a>
                  <a href="<?php echo $base; ?>/maestrias/maestria-en-derecho-corporativo">Maestría en Derecho Corporativo</a>
                </div>
                <div class="mega-panel" data-panel="doc">
                  <a href="<?php echo $base; ?>/doctorados/doctorado-en-administracion-de-negocios">Doctorado en Administración de Negocios</a>
                  <a href="<?php echo $base; ?>/doctorados/doctorado-en-educacion-sistema-de-aprendizaje-en-linea">Doctorado en Educación, Sistema de Aprendizaje en Línea</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="menu-parent">
          <a class="inline-flex items-center gap-2 <?php echo $active === 'ixu' ? 'bg-[#0d4fb6] text-white px-3 py-2 rounded-md shadow-sm transition-colors hover:bg-[#0b3f93] active:bg-[#08306a]' : 'hover:text-[#0d4fb6] transition-colors'; ?>" href="<?php echo $base . '/ixu'; ?>">
            IXU
          </a>
          <div class="menu-dropdown menu-dropdown--narrow">
            <div class="simple-menu">
              <a href="<?php echo $base; ?>/diplomados">Diplomados</a>
              <a href="<?php echo $base; ?>/cursos">Cursos</a>
            </div>
          </div>
        </div>

        <div class="menu-parent">
          <a class="inline-flex items-center gap-2 <?php echo $active === 'comunidad' ? 'bg-[#0d4fb6] text-white px-3 py-2 rounded-md shadow-sm transition-colors hover:bg-[#0b3f93] active:bg-[#08306a]' : 'hover:text-[#0d4fb6] transition-colors'; ?>" href="<?php echo $base . '/comunidad'; ?>">
            Comunidad
          </a>
          <div class="menu-dropdown menu-dropdown--narrow">
            <div class="simple-menu">
              <a href="<?php echo $base; ?>/comunidad/alumnos">Alumnos</a>
              <a href="<?php echo $base; ?>/comunidad/docentes">Docentes</a>
              <div class="simple-item">
                <a href="<?php echo $base; ?>/comunidad/noticias">Noticias</a>
                <div class="simple-submenu">
                  <a href="<?php echo $base; ?>/comunidad/noticias/comunicados-de-rectoria">Comunicados de Rectoría</a>
                  <a href="<?php echo $base; ?>/comunidad/noticias/eventos-de-nuestra-comunidad">Eventos de Nuestra Comunidad</a>
                  <a href="<?php echo $base; ?>/comunidad/noticias/vida-en-el-campus">Vida en el Campus</a>
                  <a href="<?php echo $base; ?>/comunidad/noticias/video-blog-uneg-isec">Video Blog UNEG ISEC</a>
                </div>
              </div>
              <a href="<?php echo $base; ?>/blog">Blog</a>
              <a href="<?php echo $base; ?>/comunidad/buzon-del-rector">Buzón del Rector</a>
            </div>
          </div>
        </div>

        <?php
          echo $navLink('/egresados', 'Egresados', 'egresados');
          echo $navLink('/contacto', 'Contacto', 'contacto');
        ?>
      </nav>
    </div>

    <div id="mobile-nav" class="lg:hidden hidden border-t border-slate-200 bg-white">
      <div class="px-4 py-3 flex flex-col gap-3 text-sm font-semibold text-[#0b2c65]">
        <?php
          echo $navLink('/', 'Inicio', 'inicio');
          echo $navLink('/acerca', 'Acerca de ISEC.', 'acerca');
          echo $navLink('/recorrido-virtual', 'Recorrido Virtual', 'recorrido');
        ?>

        <div class="border-t border-slate-200 pt-3">
          <div class="flex items-center justify-between">
            <a class="hover:text-[#0d4fb6] transition-colors" href="<?php echo $base . '/oferta-educativa'; ?>">Oferta Educativa</a>
            <button class="inline-flex items-center justify-center px-2 py-1 rounded-md border border-slate-200 text-brandBlue" type="button" data-mobile-toggle="mobile-oferta" aria-expanded="false">
              <span data-icon>+</span>
            </button>
          </div>

          <div id="mobile-oferta" class="hidden mt-3 space-y-3 text-sm font-semibold text-[#0b2c65]">
            <div>
              <div class="w-full flex items-center justify-between px-2 py-2 rounded-md hover:bg-slate-50">
                <a class="hover:text-[#0d4fb6] transition-colors" href="<?php echo $base; ?>/nivel-medio-superior">Nivel Medio Superior</a>
                <button class="inline-flex items-center justify-center px-2 py-1 rounded-md border border-slate-200 text-brandBlue" type="button" data-mobile-toggle="mobile-nms" aria-expanded="false">
                  <span data-icon>+</span>
                </button>
              </div>
              <div id="mobile-nms" class="hidden pl-4 pt-2 space-y-2 text-sm">
                  <a class="block hover:text-[#0d4fb6]" href="<?php echo $base; ?>/cch-isec">CCH ISEC</a>
                  <a class="block hover:text-[#0d4fb6]" href="<?php echo $base; ?>/bachillerato-en-linea">Bachillerato en Línea</a>
                  <a class="block hover:text-[#0d4fb6]" href="<?php echo $base; ?>/bachillerato-tecnico-administracion-empresas-turisticas">Bachillerato Técnico en Administración de Empresas Turísticas</a>
                  <a class="block hover:text-[#0d4fb6]" href="<?php echo $base; ?>/curso-colbach">Curso Colbach</a>
              </div>
            </div>

            <div>
              <div class="w-full flex items-center justify-between px-2 py-2 rounded-md hover:bg-slate-50">
                <a class="hover:text-[#0d4fb6] transition-colors" href="<?php echo $base; ?>/licenciaturas">Licenciaturas</a>
                <button class="inline-flex items-center justify-center px-2 py-1 rounded-md border border-slate-200 text-brandBlue" type="button" data-mobile-toggle="mobile-lic" aria-expanded="false">
                  <span data-icon>+</span>
                </button>
              </div>
              <div id="mobile-lic" class="hidden pl-4 pt-2 space-y-2 text-sm">
                <a class="block hover:text-[#0d4fb6]" href="<?php echo $base; ?>/licenciaturas/contaduria-publica-estrategica">Contaduría Pública Estratégica</a>
                <a class="block hover:text-[#0d4fb6]" href="<?php echo $base; ?>/licenciaturas/derecho">Derecho</a>
                <a class="block hover:text-[#0d4fb6]" href="<?php echo $base; ?>/licenciaturas/ingenieria-en-administracion-y-negocios">Ingeniería en Administración y Negocios</a>
                <a class="block hover:text-[#0d4fb6]" href="<?php echo $base; ?>/licenciaturas/ingenieria-en-finanzas">Ingeniería en Finanzas</a>
                <a class="block hover:text-[#0d4fb6]" href="<?php echo $base; ?>/licenciaturas/ingenieria-en-inteligencia-artificial">Ingeniería en Inteligencia Artificial</a>
                <a class="block hover:text-[#0d4fb6]" href="<?php echo $base; ?>/licenciaturas/ingenieria-en-tecnologias-de-informacion-para-negocios">Ingeniería en Tecnologías de Información para Negocios</a>
                <a class="block hover:text-[#0d4fb6]" href="<?php echo $base; ?>/licenciaturas/mercadotecnia-estrategica">Mercadotecnia Estratégica</a>
                <a class="block hover:text-[#0d4fb6]" href="<?php echo $base; ?>/licenciaturas/negocios-internacionales">Negocios Internacionales</a>
                <a class="block hover:text-[#0d4fb6]" href="<?php echo $base; ?>/licenciaturas/pedagogia">Pedagogía</a>
                <a class="block hover:text-[#0d4fb6]" href="<?php echo $base; ?>/licenciaturas/psicologia">Psicología</a>
                <a class="block hover:text-[#0d4fb6]" href="<?php echo $base; ?>/licenciaturas/innovacion-turistica-y-gastronomica">Innovación Turística y Gastronómica</a>
                <a class="block hover:text-[#0d4fb6]" href="<?php echo $base; ?>/licenciaturas/administracion-sua">Administración SUA</a>
                <a class="block hover:text-[#0d4fb6]" href="<?php echo $base; ?>/licenciaturas/derecho-sua">Derecho SUA</a>
              </div>
            </div>

            <div>
              <button class="w-full flex items-center justify-between px-2 py-2 rounded-md hover:bg-slate-50" type="button" data-mobile-toggle="mobile-dip" aria-expanded="false">
                <span>Diplomados Online y Ejecutivos</span>
                <span data-icon>+</span>
              </button>
              <div id="mobile-dip" class="hidden pl-4 pt-2 space-y-2 text-sm">
                <a class="block hover:text-[#0d4fb6]" href="<?php echo $base; ?>/diplomados">Diplomados</a>
                <a class="block hover:text-[#0d4fb6]" href="<?php echo $base; ?>/cursos">Cursos</a>
              </div>
            </div>

            <div>
              <div class="w-full flex items-center justify-between px-2 py-2 rounded-md hover:bg-slate-50">
                <a class="hover:text-[#0d4fb6] transition-colors" href="<?php echo $base; ?>/maestrias">Maestrías</a>
                <button class="inline-flex items-center justify-center px-2 py-1 rounded-md border border-slate-200 text-brandBlue" type="button" data-mobile-toggle="mobile-mae" aria-expanded="false">
                  <span data-icon>+</span>
                </button>
              </div>
              <div id="mobile-mae" class="hidden pl-4 pt-2 space-y-2 text-sm">
                <a class="block hover:text-[#0d4fb6]" href="<?php echo $base; ?>/maestrias/maestria-en-administracion-de-negocios">Maestría en Administración de Negocios</a>
                <a class="block hover:text-[#0d4fb6]" href="<?php echo $base; ?>/maestrias/maestria-en-administracion-de-negocios-en-linea">Maestría en Administración de Negocios En Línea</a>
                <a class="block hover:text-[#0d4fb6]" href="<?php echo $base; ?>/maestrias/maestria-en-docencia">Maestría en Docencia</a>
                <a class="block hover:text-[#0d4fb6]" href="<?php echo $base; ?>/maestrias/maestria-en-finanzas">Maestría en Finanzas</a>
                <a class="block hover:text-[#0d4fb6]" href="<?php echo $base; ?>/maestrias/maestria-en-fiscal">Maestría en Fiscal</a>
                <a class="block hover:text-[#0d4fb6]" href="<?php echo $base; ?>/maestrias/maestria-en-mercadotecnia">Maestría en Mercadotecnia</a>
                <a class="block hover:text-[#0d4fb6]" href="<?php echo $base; ?>/maestrias/maestria-en-tecnologias-de-informacion-y-comunicaciones">Maestría en Tecnologías de Información y Comunicaciones</a>
                <a class="block hover:text-[#0d4fb6]" href="<?php echo $base; ?>/maestrias/maestria-en-derecho-corporativo">Maestría en Derecho Corporativo</a>
              </div>
            </div>

            <div>
              <div class="w-full flex items-center justify-between px-2 py-2 rounded-md hover:bg-slate-50">
                <a class="hover:text-[#0d4fb6] transition-colors" href="<?php echo $base; ?>/doctorados">Doctorados</a>
                <button class="inline-flex items-center justify-center px-2 py-1 rounded-md border border-slate-200 text-brandBlue" type="button" data-mobile-toggle="mobile-doc" aria-expanded="false">
                  <span data-icon>+</span>
                </button>
              </div>
              <div id="mobile-doc" class="hidden pl-4 pt-2 space-y-2 text-sm">
                <a class="block hover:text-[#0d4fb6]" href="<?php echo $base; ?>/doctorados">Doctorados</a>
                <a class="block hover:text-[#0d4fb6]" href="<?php echo $base; ?>/doctorados/doctorado-en-administracion-de-negocios">Doctorado en Administración de Negocios</a>
                <a class="block hover:text-[#0d4fb6]" href="<?php echo $base; ?>/doctorados/doctorado-en-educacion-sistema-de-aprendizaje-en-linea">Doctorado en Educación, Sistema de Aprendizaje en Línea</a>
              </div>
            </div>
          </div>
        </div>

        <?php
          echo $navLink('/ixu', 'IXU', 'ixu');
          echo $navLink('/comunidad', 'Comunidad', 'comunidad');
        ?>

        <div class="border-t border-slate-200 pt-3">
          <div class="flex items-center justify-between">
            <a class="hover:text-[#0d4fb6] transition-colors" href="<?php echo $base . '/ixu'; ?>">IXU</a>
            <button class="inline-flex items-center justify-center px-2 py-1 rounded-md border border-slate-200 text-brandBlue" type="button" data-mobile-toggle="mobile-ixu" aria-expanded="false">
              <span data-icon>+</span>
            </button>
          </div>
          <div id="mobile-ixu" class="hidden mt-3 space-y-2 text-sm">
            <a class="block hover:text-[#0d4fb6]" href="<?php echo $base; ?>/diplomados">Diplomados</a>
            <a class="block hover:text-[#0d4fb6]" href="<?php echo $base; ?>/cursos">Cursos</a>
          </div>
        </div>

        <div class="border-t border-slate-200 pt-3">
          <div class="flex items-center justify-between">
            <a class="hover:text-[#0d4fb6] transition-colors" href="<?php echo $base . '/comunidad'; ?>">Comunidad</a>
            <button class="inline-flex items-center justify-center px-2 py-1 rounded-md border border-slate-200 text-brandBlue" type="button" data-mobile-toggle="mobile-comunidad" aria-expanded="false">
              <span data-icon>+</span>
            </button>
          </div>
          <div id="mobile-comunidad" class="hidden mt-3 space-y-3 text-sm">
            <a class="block hover:text-[#0d4fb6]" href="<?php echo $base; ?>/comunidad/alumnos">Alumnos</a>
            <a class="block hover:text-[#0d4fb6]" href="<?php echo $base; ?>/comunidad/docentes">Docentes</a>

            <div>
              <button class="w-full flex items-center justify-between px-2 py-2 rounded-md hover:bg-slate-50" type="button" data-mobile-toggle="mobile-noticias" aria-expanded="false">
                <span>Noticias</span>
                <span data-icon>+</span>
              </button>
              <div id="mobile-noticias" class="hidden pl-4 pt-2 space-y-2 text-sm">
                <a class="block hover:text-[#0d4fb6]" href="<?php echo $base; ?>/comunidad/noticias/comunicados-de-rectoria">Comunicados de Rectoría</a>
                <a class="block hover:text-[#0d4fb6]" href="<?php echo $base; ?>/comunidad/noticias/eventos-de-nuestra-comunidad">Eventos de Nuestra Comunidad</a>
                <a class="block hover:text-[#0d4fb6]" href="<?php echo $base; ?>/comunidad/noticias/vida-en-el-campus">Vida en el Campus</a>
                <a class="block hover:text-[#0d4fb6]" href="<?php echo $base; ?>/comunidad/noticias/video-blog-uneg-isec">Video Blog UNEG ISEC</a>
              </div>
            </div>

            <a class="block hover:text-[#0d4fb6]" href="<?php echo $base; ?>/blog">Blog</a>
            <a class="block hover:text-[#0d4fb6]" href="<?php echo $base; ?>/comunidad/buzon-del-rector">Buzón del Rector</a>
          </div>
        </div>

        <?php
          echo $navLink('/egresados', 'Egresados', 'egresados');
          echo $navLink('/contacto', 'Contacto', 'contacto');
        ?>
      </div>
    </div>
  </div>
</header>
