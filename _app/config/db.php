<?php

declare(strict_types=1);

$httpHost = strtolower((string)($_SERVER['HTTP_HOST'] ?? ''));
$isLocal = $httpHost === 'localhost'
    || str_starts_with($httpHost, '127.0.0.1')
    || str_starts_with($httpHost, 'localhost:');

return [
    'host' => $isLocal ? '72.167.45.159' : '127.0.0.1',
    'port' => 3306,
    'database' => 'administrador_web2026',
    'username' => 'administrador_web2026',
    'password' => '&ZV6h6f~UjQUiwC1',
    'charset' => 'utf8mb4',
];
