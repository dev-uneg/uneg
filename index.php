<?php
declare(strict_types=1);

$autoload = __DIR__ . '/vendor/autoload.php';
if (!file_exists($autoload)) {
    http_response_code(500);
    echo 'Falta instalar dependencias. Ejecuta: composer install';
    exit;
}

require $autoload;

$router = new AltoRouter();
// Ajusta base path automáticamente para funcionar en /uneg y en /
$scriptDir = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '/')), '/');
$router->setBasePath($scriptDir === '' ? '' : $scriptDir);

// ---------------------------
// Inicio
// ---------------------------
$router->map('GET', '/', function (): void {
    require __DIR__ . '/pages/home.php';
});

// ---------------------------
// Institucional
// ---------------------------
$router->map('GET', '/acerca', function (): void {
    require __DIR__ . '/pages/acerca.php';
});

$router->map('GET', '/recorrido-virtual', function (): void {
    require __DIR__ . '/pages/recorrido-virtual.php';
});

// ---------------------------
// Comunidad
// ---------------------------
$router->map('GET', '/comunidad/alumnos', function (): void {
    require __DIR__ . '/pages/comunidad/alumnos.php';
});
$router->map('GET', '/comunidad/docentes', function (): void {
  require __DIR__ . '/pages/comunidad/docentes.php';
});
$router->map('GET', '/comunidad/claustro-docente', function (): void {
  require __DIR__ . '/pages/comunidad/claustro-docente.php';
});
$router->map('GET', '/comunidad/noticias', function (): void {
  require __DIR__ . '/pages/comunidad/noticias.php';
});
$router->map('GET', '/comunidad/noticias/comunicados-de-rectoria', function (): void {
  require __DIR__ . '/pages/comunidad/noticias/comunicados-de-rectoria/index.php';
});
$router->map('GET', '/comunidad/noticias/eventos-de-nuestra-comunidad', function (): void {
  require __DIR__ . '/pages/comunidad/noticias/eventos-de-nuestra-comunidad/index.php';
});
$router->map('GET', '/comunidad/noticias/vida-en-el-campus', function (): void {
  require __DIR__ . '/pages/comunidad/noticias/vida-en-el-campus/index.php';
});
$router->map('GET', '/comunidad/noticias/video-blog-uneg-isec', function (): void {
  require __DIR__ . '/pages/comunidad/noticias/video-blog-uneg-isec/index.php';
});
$router->map('GET', '/comunidad/noticias/video-blog-uneg-isec/videotutorial-microsoft-teams', function (): void {
  require __DIR__ . '/pages/comunidad/noticias/video-blog-uneg-isec/post-1/index.php';
});
$router->map('GET', '/comunidad/noticias/video-blog-uneg-isec/licenciatura-innovacion-turistica-gastronomica', function (): void {
  require __DIR__ . '/pages/comunidad/noticias/video-blog-uneg-isec/post-2/index.php';
});
$router->map('GET', '/comunidad/noticias/video-blog-uneg-isec/licenciatura-psicologia', function (): void {
  require __DIR__ . '/pages/comunidad/noticias/video-blog-uneg-isec/post-3/index.php';
});
$router->map('GET', '/comunidad/noticias/video-blog-uneg-isec/licenciatura-ti-para-negocios', function (): void {
  require __DIR__ . '/pages/comunidad/noticias/video-blog-uneg-isec/post-4/index.php';
});
$router->map('GET', '/comunidad/noticias/eventos-de-nuestra-comunidad/firma-convenio-camic', function (): void {
  require __DIR__ . '/pages/comunidad/noticias/eventos-de-nuestra-comunidad/post-1/index.php';
});
$router->map('GET', '/comunidad/blog', function (): void {
  require __DIR__ . '/pages/comunidad/blog.php';
});

// ---------------------------
// Blog
// ---------------------------
$router->map('GET', '/blog', function (): void {
  require __DIR__ . '/pages/blog/index.php';
});
$router->map('GET', '/blog/el-turismo-como-actividad-economica', function (): void {
  require __DIR__ . '/pages/blog/post-1/index.php';
});
$router->map('GET', '/blog/como-influye-la-administracion-en-las-empresas', function (): void {
  require __DIR__ . '/pages/blog/post-2/index.php';
});
$router->map('GET', '/blog/sector-financiero-importancia-y-funciones', function (): void {
  require __DIR__ . '/pages/blog/post-3/index.php';
});
$router->map('GET', '/blog/turismo-gastronomico-una-experiencia-unica', function (): void {
  require __DIR__ . '/pages/blog/post-4/index.php';
});
$router->map('GET', '/blog/bachillerato-tecnico-en-contabilidad', function (): void {
  require __DIR__ . '/pages/blog/post-5/index.php';
});

$router->map('GET', '/comunidad/buzon-del-rector', function (): void {
    require __DIR__ . '/pages/comunidad/buzon-del-rector.php';
});
$router->map('GET', '/comunidad/calendario-academico', function (): void {
    require __DIR__ . '/pages/comunidad/calendario-academico.php';
});
$router->map('GET', '/comunidad/recursos-servicios', function (): void {
    require __DIR__ . '/pages/comunidad/recursos-servicios.php';
});
$router->map('GET', '/comunidad/eventos', function (): void {
    require __DIR__ . '/pages/comunidad/eventos.php';
});
$router->map('GET', '/comunidad/servicio-social', function (): void {
    require __DIR__ . '/pages/comunidad/servicio-social.php';
});
$router->map('GET', '/comunidad/bolsa-de-trabajo', function (): void {
  require __DIR__ . '/pages/comunidad/bolsa-de-trabajo.php';
});
$router->map('GET', '/comunidad/reglamentos', function (): void {
  require __DIR__ . '/pages/comunidad/reglamentos.php';
});
$router->map('GET', '/comunidad/reglamento-general', function (): void {
  require __DIR__ . '/pages/comunidad/reglamento-general.php';
});
$router->map('GET', '/comunidad/himno-isec', function (): void {
  require __DIR__ . '/pages/comunidad/himno-isec.php';
});
$router->map('GET', '/comunidad/beneficios', function (): void {
  require __DIR__ . '/pages/comunidad/beneficios.php';
});

// ---------------------------
// Diplomados
// ---------------------------
$router->map('GET', '/diplomados-online-y-ejecutivos', function (): void {
    require __DIR__ . '/pages/diplomados-online-y-ejecutivos.php';
});

$router->map('GET', '/diplomados', function (): void {
    require __DIR__ . '/pages/diplomados/diplomados.php';
});
$router->map('GET', '/cursos', function (): void {
    require __DIR__ . '/pages/diplomados/cursos.php';
});

// ---------------------------
// Doctorados
// ---------------------------
$router->map('GET', '/doctorados', function (): void {
    require __DIR__ . '/pages/doctorados.php';
});

$router->map('GET', '/doctorados/doctorado-en-administracion-de-negocios', function (): void {
    require __DIR__ . '/pages/doctorados/doctorado-en-administracion-de-negocios.php';
});
$router->map('GET', '/doctorados/doctorado-en-educacion-sistema-de-aprendizaje-en-linea', function (): void {
    require __DIR__ . '/pages/doctorados/doctorado-en-educacion-sistema-de-aprendizaje-en-linea.php';
});

// ---------------------------
// Maestrias
// ---------------------------
$router->map('GET', '/maestrias/maestria-en-administracion-de-negocios', function (): void {
    require __DIR__ . '/pages/maestrias/maestria-en-administracion-de-negocios.php';
});
$router->map('GET', '/maestrias/maestria-en-administracion-de-negocios-en-linea', function (): void {
    require __DIR__ . '/pages/maestrias/maestria-en-administracion-de-negocios-en-linea.php';
});
$router->map('GET', '/maestrias/maestria-en-docencia', function (): void {
    require __DIR__ . '/pages/maestrias/maestria-en-docencia.php';
});
$router->map('GET', '/maestrias/maestria-en-finanzas', function (): void {
    require __DIR__ . '/pages/maestrias/maestria-en-finanzas.php';
});
$router->map('GET', '/maestrias/maestria-en-fiscal', function (): void {
    require __DIR__ . '/pages/maestrias/maestria-en-fiscal.php';
});
$router->map('GET', '/maestrias/maestria-en-mercadotecnia', function (): void {
    require __DIR__ . '/pages/maestrias/maestria-en-mercadotecnia.php';
});
$router->map('GET', '/maestrias/maestria-en-tecnologias-de-informacion-y-comunicaciones', function (): void {
    require __DIR__ . '/pages/maestrias/maestria-en-tecnologias-de-informacion-y-comunicaciones.php';
});
$router->map('GET', '/maestrias/maestria-en-derecho-corporativo', function (): void {
    require __DIR__ . '/pages/maestrias/maestria-en-derecho-corporativo.php';
});

$router->map('GET', '/maestrias', function (): void {
    require __DIR__ . '/pages/maestrias/maestrias.php';
});

// ---------------------------
// Oferta educativa (general)
// ---------------------------
$router->map('GET', '/oferta-educativa', function (): void {
    require __DIR__ . '/pages/oferta-educativa.php';
});

// ---------------------------
// Admin Leads
// ---------------------------
$router->map('GET|POST', '/admin/leads-login', function (): void {
    require __DIR__ . '/controllers/admin/login.php';
});
$router->map('GET', '/admin/leads', function (): void {
    require __DIR__ . '/controllers/admin/leads_index.php';
});
$router->map('POST', '/admin/leads/delete', function (): void {
    require __DIR__ . '/controllers/admin/leads_delete.php';
});
$router->map('GET', '/admin/leads/export', function (): void {
    require __DIR__ . '/controllers/admin/leads_export.php';
});
$router->map('GET', '/admin/logout', function (): void {
    require __DIR__ . '/controllers/admin/logout.php';
});

// ---------------------------
// Nivel Medio Superior (NMS)
// ---------------------------
$router->map('GET', '/nivel-medio-superior', function (): void {
    require __DIR__ . '/pages/nms/nivel-medio-superior.php';
});

// ---------------------------
// Licenciaturas
// ---------------------------
$router->map('GET', '/licenciaturas', function (): void {
    require __DIR__ . '/pages/licenciaturas/licenciaturas.php';
});

$router->map('GET', '/licenciaturas/contaduria-publica-estrategica', function (): void {
    require __DIR__ . '/pages/licenciaturas/contaduria-publica-estrategica.php';
});
$router->map('GET', '/licenciaturas/derecho', function (): void {
    require __DIR__ . '/pages/licenciaturas/derecho.php';
});
$router->map('GET', '/licenciaturas/ingenieria-en-administracion-y-negocios', function (): void {
    require __DIR__ . '/pages/licenciaturas/ingenieria-en-administracion-y-negocios.php';
});
$router->map('GET', '/licenciaturas/ingenieria-en-finanzas', function (): void {
    require __DIR__ . '/pages/licenciaturas/ingenieria-en-finanzas.php';
});
$router->map('GET', '/licenciaturas/ingenieria-en-inteligencia-artificial', function (): void {
    require __DIR__ . '/pages/licenciaturas/ingenieria-en-inteligencia-artificial.php';
});
$router->map('GET', '/licenciaturas/ingenieria-en-tecnologias-de-informacion-para-negocios', function (): void {
    require __DIR__ . '/pages/licenciaturas/ingenieria-en-tecnologias-de-informacion-para-negocios.php';
});
$router->map('GET', '/licenciaturas/mercadotecnia-estrategica', function (): void {
    require __DIR__ . '/pages/licenciaturas/mercadotecnia-estrategica.php';
});
$router->map('GET', '/licenciaturas/negocios-internacionales', function (): void {
    require __DIR__ . '/pages/licenciaturas/negocios-internacionales.php';
});
$router->map('GET', '/licenciaturas/pedagogia', function (): void {
    require __DIR__ . '/pages/licenciaturas/pedagogia.php';
});
$router->map('GET', '/licenciaturas/psicologia', function (): void {
    require __DIR__ . '/pages/licenciaturas/psicologia.php';
});
$router->map('GET', '/licenciaturas/innovacion-turistica-y-gastronomica', function (): void {
    require __DIR__ . '/pages/licenciaturas/innovacion-turistica-y-gastronomica.php';
});
$router->map('GET', '/licenciaturas/administracion-sua', function (): void {
    require __DIR__ . '/pages/licenciaturas/administracion-sua.php';
});
$router->map('GET', '/licenciaturas/derecho-sua', function (): void {
    require __DIR__ . '/pages/licenciaturas/derecho-sua.php';
});

// ---------------------------
// NMS directo
// ---------------------------
$router->map('GET', '/cch-isec', function (): void {
    require __DIR__ . '/pages/nms/cch-isec.php';
});

$router->map('GET', '/bachillerato-en-linea', function (): void {
    require __DIR__ . '/pages/nms/bachillerato-en-linea.php';
});

$router->map('GET', '/bachillerato-tecnico-administracion-empresas-turisticas', function (): void {
    require __DIR__ . '/pages/nms/bachillerato-tecnico-administracion-empresas-turisticas.php';
});

$router->map('GET', '/curso-colbach', function (): void {
    require __DIR__ . '/pages/nms/curso-colbach.php';
});

// ---------------------------
// IXU
// ---------------------------
$router->map('GET', '/ixu', function (): void {
    require __DIR__ . '/pages/ixu.php';
});

// ---------------------------
// Comunidad (landing)
// ---------------------------
$router->map('GET', '/comunidad', function (): void {
    require __DIR__ . '/pages/comunidad.php';
});

// ---------------------------
// Egresados
// ---------------------------
$router->map('GET', '/egresados', function (): void {
    require __DIR__ . '/pages/egresados.php';
});
$router->map('GET', '/egresados/dejanos-saber', function (): void {
    require __DIR__ . '/pages/egresados/dejanos-saber.php';
});

// ---------------------------
// API
// ---------------------------
$router->map('POST', '/api/contacto', function (): void {
    require __DIR__ . '/controllers/api/contacto.php';
});

// ---------------------------
// Contacto
// ---------------------------
$router->map('GET', '/contacto', function (): void {
    require __DIR__ . '/pages/contacto.php';
});

// ---------------------------
// Gracias
// ---------------------------
$router->map('GET', '/gracias', function (): void {
    require __DIR__ . '/pages/gracias.php';
});

// ---------------------------
// 404
// ---------------------------
$router->map('GET', '/404', function (): void {
    http_response_code(404);
    require __DIR__ . '/pages/404.php';
});

$match = $router->match();

if ($match && is_callable($match['target'])) {
    call_user_func_array($match['target'], $match['params']);
    exit;
}

http_response_code(404);
require __DIR__ . '/pages/404.php';
