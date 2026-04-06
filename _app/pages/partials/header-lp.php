<?php
$title = $title ?? 'UNEG';
$active = $active ?? '';
$bodyClass = $bodyClass ?? 'bg-slate-50';
$scriptName = str_replace('\\', '/', (string) ($_SERVER['SCRIPT_NAME'] ?? '/index.php'));
$base = rtrim(dirname($scriptName), '/');
if ($base === '.' || $base === '/') {
  $base = '';
}
if (strpos($base, '/home/') === 0 || strpos($base, '/var/') === 0 || strpos($base, '/usr/') === 0) {
  $base = '';
}
$assetBase = $base === '' ? '' : $base;

$requestUri = (string) ($_SERVER['REQUEST_URI'] ?? '/');
$requestPath = parse_url($requestUri, PHP_URL_PATH);
$requestPath = is_string($requestPath) && $requestPath !== '' ? $requestPath : '/';
if ($base !== '' && strpos($requestPath, $base . '/') === 0) {
  $requestPath = substr($requestPath, strlen($base));
} elseif ($base !== '' && $requestPath === $base) {
  $requestPath = '/';
}
$canonicalPath = preg_replace('#/index\.php$#', '', $requestPath) ?: '/';
if ($canonicalPath !== '/' && substr($canonicalPath, -1) === '/') {
  $canonicalPath = rtrim($canonicalPath, '/');
}
$canonicalUrl = 'https://uneg.edu.mx' . $canonicalPath;
$isLandingPath = strpos($canonicalPath, '/lp-') === 0;

if (!isset($metaDescription) || trim((string) $metaDescription) === '') {
  $topic = preg_replace('/\s+/', ' ', str_replace(['| UNEG', 'UNEG -', ' - UNEG'], '', $title));
  $topic = trim((string) $topic);
  if ($topic === '') {
    $topic = 'la oferta académica';
  }
  $metaDescription = 'Conoce ' . $topic . ' en la Universidad de Negocios ISEC en CDMX. Revisa planes de estudio, modalidades y proceso de admisión.';
}

require_once __DIR__ . '/../../helpers/icons.php';
?>
<!doctype html>
<html lang="es">
<head>
  <!-- Google Tag Manager -->
  <script>
    (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-NQ672S4');
  </script>
  <!-- End Google Tag Manager -->
  <!-- Google Ads tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=AW-17972441356"></script>
  <!-- SPOTIFY PIXEL BASE (SOLO LANDINGS) -->
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'AW-17972441356');
  </script>
  <!-- /SPOTIFY PIXEL BASE (SOLO LANDINGS) -->
  <!-- End Google Ads tag (gtag.js) -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo htmlspecialchars($title); ?></title>
  <meta name="description" content="<?php echo htmlspecialchars($metaDescription); ?>">
  <link rel="canonical" href="<?php echo htmlspecialchars($canonicalUrl); ?>">
  <?php if ($isLandingPath): ?>
    <meta name="robots" content="noindex, nofollow">
  <?php endif; ?>
  <link rel="preload" href="<?php echo $assetBase; ?>/_assets/fonts/Figtree-wght.ttf" as="font" type="font/ttf" crossorigin>
  <link rel="preload" href="<?php echo $assetBase; ?>/_assets/fonts/Figtree-Italic-wght.ttf" as="font" type="font/ttf" crossorigin>
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $assetBase; ?>/_imgs/favicon-32.png?v=1">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $assetBase; ?>/_imgs/favicon-16.png?v=1">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $assetBase; ?>/_imgs/apple-touch-icon.png?v=1">
  <link rel="stylesheet" href="<?php echo $assetBase; ?>/_assets/css/output.css">
  <script defer src="<?php echo $assetBase; ?>/_assets/js/lucide-loader.js?v=2"></script>
  <!-- Meta Pixel Code -->
  <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '1244286750594641');
    fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=1244286750594641&ev=PageView&noscript=1"
  /></noscript>
  <!-- End Meta Pixel Code -->
  <script>
    (function (w, d) {
      var id = 'spdt-capture', n = 'script';
      if (!d.getElementById(id)) {
        w.spdt = w.spdt || function () {
          (w.spdt.q = w.spdt.q || []).push(arguments);
        };
        var e = d.createElement(n); e.id = id; e.async = 1;
        e.src = 'https://pixel.byspotify.com/ping.min.js';
        var s = d.getElementsByTagName(n)[0];
        s.parentNode.insertBefore(e, s);
      }
      w.spdt('conf', { key: '14c182851580462a8db1af7fa7e8491c' });
      w.spdt('view');
    })(window, document);
  </script>
  <style>
    @font-face {
      font-family: 'Figtree';
      src: url('<?php echo $assetBase; ?>/_assets/fonts/Figtree-wght.ttf') format('truetype');
      font-weight: 100 900;
      font-style: normal;
      font-display: optional;
    }
    @font-face {
      font-family: 'Figtree';
      src: url('<?php echo $assetBase; ?>/_assets/fonts/Figtree-Italic-wght.ttf') format('truetype');
      font-weight: 100 900;
      font-style: italic;
      font-display: optional;
    }
    body { font-family: 'Figtree', sans-serif; }
    @media (max-width: 639px) {
      body > main.min-h-screen {
        padding-left: 0 !important;
        padding-right: 0 !important;
      }
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
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NQ672S4"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <header class="bg-white shadow-sm">
    <div class="max-w-7xl mx-auto px-4 py-4 flex items-center justify-center">
      <a class="inline-flex items-center justify-center" href="<?php echo $base . '/'; ?>" aria-label="Universidad de Negocios ISEC">
        <img src="<?php echo $assetBase; ?>/_imgs/logo.webp" alt="Universidad de Negocios ISEC" width="150" height="141" class="h-20 sm:h-24 w-auto" loading="eager" fetchpriority="high" decoding="async">
      </a>
    </div>
  </header>

  <main class="min-h-screen px-0 sm:px-6">
