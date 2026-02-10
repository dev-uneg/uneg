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

$router->map('GET', '/', function (): void {
    require __DIR__ . '/pages/home.php';
});

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
