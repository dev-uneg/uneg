<?php
declare(strict_types=1);

require_once __DIR__ . '/rate_limit_core.php';

/**
 * Rate limit para login admin: 3 intentos por minuto por IP.
 */
function login_rate_limit_check(): array
{
    return rate_limit_consume('admin_login', rate_limit_client_ip(), 3, 60);
}

function login_rate_limit_reset(): void
{
    rate_limit_reset('admin_login', rate_limit_client_ip());
}
