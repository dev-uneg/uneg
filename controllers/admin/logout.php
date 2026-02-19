<?php
declare(strict_types=1);

session_start();
$_SESSION = [];
session_destroy();

$base = rtrim(dirname($_SERVER['SCRIPT_NAME'] ?? ''), '/');
$base = $base === '.' ? '' : $base;
header('Location: ' . $base . '/admin/leads-login', true, 302);
exit;
