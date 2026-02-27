<?php
declare(strict_types=1);

require_once __DIR__ . '/rate_limit_core.php';

/**
 * Rate limit para forms publicos: 5 envios por minuto por IP y ruta.
 */
function forms_rate_limit_check(?string $routeHint = null): array
{
    $route = trim((string) ($routeHint ?? ($_SERVER['REQUEST_URI'] ?? '')));
    $subject = rate_limit_client_ip() . '|' . $route;
    return rate_limit_consume('public_forms', $subject, 5, 60);
}
