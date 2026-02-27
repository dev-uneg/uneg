<?php
declare(strict_types=1);

session_start();
require __DIR__ . '/../../helpers/admin_auth.php';
require __DIR__ . '/../../helpers/leads_db.php';

admin_require_auth();

$base = admin_base_path();
$dbError = '';
$leadsCount = 0;
$egresadosCount = 0;
$buzonCount = 0;

try {
    $pdo = leads_db();
    $leadsCount = (int) $pdo->query('SELECT COUNT(*) FROM leads')->fetchColumn();
    $egresadosCount = (int) $pdo->query('SELECT COUNT(*) FROM egresados')->fetchColumn();
    $buzonCount = (int) $pdo->query('SELECT COUNT(*) FROM buzon_rector')->fetchColumn();
} catch (Throwable $e) {
    $dbError = 'No se pudo conectar a la base de datos. Revisa host/usuario/password/permisos de MySQL.';
}

require __DIR__ . '/../../pages/admin/panel.php';
