<?php
$pageTitle = $pageTitle ?? 'UNEG';
?>
<!doctype html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@400;600;700&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
      :root { color-scheme: light; }
      body { font-family: "Figtree", system-ui, -apple-system, "Segoe UI", sans-serif; }
    </style>
  </head>
  <body class="min-h-screen bg-gradient-to-br from-slate-50 via-white to-amber-50 text-slate-900">
    <main class="min-h-screen grid place-items-center px-6">
