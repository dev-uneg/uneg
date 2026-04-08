<?php
declare(strict_types=1);

session_start();
require __DIR__ . '/../../helpers/admin_auth.php';

admin_require_auth();

$base = admin_base_path();
$csrf = admin_csrf_token();

$formsCatalog = [
    '/api/forms/contacto' => 'Contacto',
    '/api/forms/lp-licenciaturas' => 'LP Licenciaturas',
    '/api/forms/lp-maestrias' => 'LP Maestrias',
    '/api/forms/lp-nivel-medio-superior' => 'LP Nivel Medio Superior',
    '/api/forms/licenciaturas-administracion-sua' => 'Licenciaturas Administracion SUA',
    '/api/forms/licenciaturas-contaduria-publica-estrategica' => 'Licenciaturas Contaduria Publica Estrategica',
    '/api/forms/licenciaturas-derecho' => 'Licenciaturas Derecho',
    '/api/forms/licenciaturas-derecho-sua' => 'Licenciaturas Derecho SUA',
    '/api/forms/licenciaturas-ingenieria-en-administracion-y-negocios' => 'Licenciaturas Ing. Administracion y Negocios',
    '/api/forms/licenciaturas-ingenieria-en-finanzas' => 'Licenciaturas Ing. en Finanzas',
    '/api/forms/licenciaturas-ingenieria-en-inteligencia-artificial' => 'Licenciaturas Ing. en IA',
    '/api/forms/licenciaturas-ingenieria-en-tecnologias-de-informacion-para-negocios' => 'Licenciaturas Ing. TI para Negocios',
    '/api/forms/licenciaturas-innovacion-turistica-y-gastronomica' => 'Licenciaturas Innovacion Turistica y Gastronomica',
    '/api/forms/licenciaturas-mercadotecnia-estrategica' => 'Licenciaturas Mercadotecnia Estrategica',
    '/api/forms/licenciaturas-negocios-internacionales' => 'Licenciaturas Negocios Internacionales',
    '/api/forms/licenciaturas-pedagogia' => 'Licenciaturas Pedagogia',
    '/api/forms/licenciaturas-psicologia' => 'Licenciaturas Psicologia',
    '/api/forms/maestrias-maestria-en-administracion-de-negocios' => 'Maestrias MAN',
    '/api/forms/maestrias-maestria-en-administracion-de-negocios-en-linea' => 'Maestrias MAN en Linea',
    '/api/forms/maestrias-maestria-en-derecho-corporativo' => 'Maestrias Derecho Corporativo',
    '/api/forms/maestrias-maestria-en-docencia' => 'Maestrias Docencia',
    '/api/forms/maestrias-maestria-en-finanzas' => 'Maestrias Finanzas',
    '/api/forms/maestrias-maestria-en-fiscal' => 'Maestrias Fiscal',
    '/api/forms/maestrias-maestria-en-mercadotecnia' => 'Maestrias Mercadotecnia',
    '/api/forms/maestrias-maestria-en-tecnologias-de-informacion-y-comunicaciones' => 'Maestrias TIC',
    '/api/forms/doctorados-doctorado-en-administracion-de-negocios' => 'Doctorados DAN',
    '/api/forms/doctorados-doctorado-en-educacion-sistema-de-aprendizaje-en-linea' => 'Doctorados Educacion en Linea',
    '/api/forms/cch-isec' => 'CCH ISEC',
    '/api/forms/bachillerato-en-linea' => 'Bachillerato en Linea',
    '/api/forms/bachillerato-tecnico-administracion-empresas-turisticas' => 'Bachillerato Tecnico AET',
    '/api/forms/curso-colbach' => 'Curso Colbach',
];

$selectedForms = [];
$results = [];
$error = '';
$turnstileToken = '';

if (($_SERVER['REQUEST_METHOD'] ?? 'GET') === 'POST') {
    $postedCsrf = (string) ($_POST['csrf'] ?? '');
    if ($postedCsrf === '' || !hash_equals((string) ($_SESSION['leads_csrf'] ?? ''), $postedCsrf)) {
        $error = 'Token CSRF invalido.';
    } else {
        $selectedForms = array_values(array_filter(array_map('strval', (array) ($_POST['forms'] ?? []))));
        $turnstileToken = trim((string) ($_POST['turnstile_token'] ?? ''));
        $effectiveTurnstileToken = $turnstileToken !== '' ? $turnstileToken : '__UNEG_FORMS_TEST_BYPASS__';

        if ($selectedForms === []) {
            $error = 'Selecciona al menos un formulario.';
        } else {
            $scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
            $host = (string) ($_SERVER['HTTP_HOST'] ?? 'localhost');
            $basePath = $base;

            foreach ($selectedForms as $path) {
                if (!isset($formsCatalog[$path])) {
                    continue;
                }

                $payload = [
                    'full_name' => 'TEST - test',
                    'email' => 'test@test.com',
                    'phone' => '5500550055',
                    'interest' => 'TEST - interes',
                    'source' => 'test_admin',
                    'message' => 'TEST - envio desde modulo admin',
                    'channel' => 'WEB',
                    'medium' => 'Sitio web',
                    'campaign' => 'TEST',
                    'utm_source' => 'test_admin',
                    'utm_medium' => 'test_admin',
                    'utm_campaign' => 'test_admin',
                    'privacy' => '1',
                ];

                $payload['cf-turnstile-response'] = $effectiveTurnstileToken;

                $url = $scheme . '://' . $host . $basePath . $path;
                $ch = curl_init($url);
                curl_setopt_array($ch, [
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_POST => true,
                    CURLOPT_POSTFIELDS => http_build_query($payload),
                    CURLOPT_HTTPHEADER => [
                        'Accept: application/json',
                        'Content-Type: application/x-www-form-urlencoded',
                        'X-UNEG-FORMS-TEST: 1',
                        'Cookie: ' . (string) ($_SERVER['HTTP_COOKIE'] ?? ''),
                    ],
                    CURLOPT_CONNECTTIMEOUT => 3,
                    CURLOPT_TIMEOUT => 8,
                ]);

                $raw = curl_exec($ch);
                $curlErr = curl_error($ch);
                $httpCode = (int) curl_getinfo($ch, CURLINFO_HTTP_CODE);
                curl_close($ch);

                $status = 'error';
                $reason = '';

                if ($raw === false) {
                    $reason = $curlErr !== '' ? $curlErr : 'Fallo de red';
                } else {
                    $json = json_decode((string) $raw, true);
                    if (is_array($json) && !empty($json['success'])) {
                        $status = 'ok';
                        $reason = 'Envio correcto';
                    } else {
                        if (is_array($json) && isset($json['message'])) {
                            $reason = (string) $json['message'];
                        } else {
                            $trimmed = trim((string) $raw);
                            $reason = $trimmed !== '' ? mb_substr($trimmed, 0, 220) : 'Sin respuesta util';
                        }
                    }
                }

                $results[] = [
                    'name' => $formsCatalog[$path],
                    'path' => $path,
                    'http_code' => $httpCode,
                    'status' => $status,
                    'reason' => $reason,
                ];
            }
        }
    }
}

require __DIR__ . '/../../pages/admin/forms-test-runner.php';
