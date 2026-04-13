<?php
declare(strict_types=1);

session_start();
require __DIR__ . '/../../helpers/admin_auth.php';
require __DIR__ . '/../../helpers/admin_async.php';
require __DIR__ . '/../../helpers/leads_db.php';

admin_require_auth();

$base = admin_base_path();

if (!admin_is_async_request()) {
    $pageTitle = 'Panel Admin | UNEG';
    require __DIR__ . '/../../pages/admin/partials/async-shell.php';
    exit;
}

$dbError = '';
$leadsCount = 0;
$egresadosCount = 0;
$buzonCount = 0;
$reportsCount = 0;

try {
    $pdo = leads_db();
    $leadsCount = (int) $pdo->query('SELECT COUNT(*) FROM leads')->fetchColumn();
    $egresadosCount = (int) $pdo->query('SELECT COUNT(*) FROM egresados')->fetchColumn();
    $buzonCount = (int) $pdo->query('SELECT COUNT(*) FROM buzon_rector')->fetchColumn();
    $reportsCount = (int) $pdo->query("SELECT COUNT(DISTINCT DATE_FORMAT(created_at, '%Y-%m')) FROM leads")->fetchColumn();
} catch (Throwable $e) {
    $dbError = 'No se pudo conectar a la base de datos. Revisa host/usuario/password/permisos de MySQL.';
}

ob_start();
require __DIR__ . '/../../pages/admin/panel.php';
$fullPageHtml = (string) ob_get_clean();
echo admin_extract_body_html($fullPageHtml);
