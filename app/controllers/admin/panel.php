<?php
declare(strict_types=1);

session_start();
require __DIR__ . '/../../helpers/admin_auth.php';
require __DIR__ . '/../../helpers/leads_db.php';

admin_require_auth();

$base = admin_base_path();
$pdo = leads_db();
$leadsCount = (int) $pdo->query('SELECT COUNT(*) FROM leads')->fetchColumn();
$egresadosCount = (int) $pdo->query('SELECT COUNT(*) FROM egresados')->fetchColumn();
$buzonCount = (int) $pdo->query('SELECT COUNT(*) FROM buzon_rector')->fetchColumn();

require __DIR__ . '/../../pages/admin/panel.php';
