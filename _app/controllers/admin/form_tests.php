<?php
declare(strict_types=1);

session_start();
require __DIR__ . '/../../helpers/admin_auth.php';
require __DIR__ . '/../../helpers/leads_db.php';

admin_require_auth();

$base = admin_base_path();
$csrf = admin_csrf_token();
$results = [];
$ranAt = null;

$scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$host = (string) ($_SERVER['HTTP_HOST'] ?? 'localhost');
$rootUrl = $scheme . '://' . $host . $base;

/**
 * @return array{status:int,headers:string,body:string,error:string}
 */
$httpPost = static function (string $url, array $payload): array {
    $ch = curl_init($url);
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => http_build_query($payload),
        CURLOPT_HTTPHEADER => [
            'Accept: application/json',
            'X-Requested-With: XMLHttpRequest',
        ],
        CURLOPT_TIMEOUT => 25,
        CURLOPT_CONNECTTIMEOUT => 10,
        CURLOPT_FOLLOWLOCATION => false,
        CURLOPT_HEADER => true,
    ]);

    $raw = curl_exec($ch);
    $error = curl_error($ch);
    $status = (int) curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $headerSize = (int) curl_getinfo($ch, CURLINFO_HEADER_SIZE);
    curl_close($ch);

    if (!is_string($raw)) {
        return [
            'status' => $status,
            'headers' => '',
            'body' => '',
            'error' => $error ?: 'Error desconocido en cURL.',
        ];
    }

    return [
        'status' => $status,
        'headers' => substr($raw, 0, $headerSize),
        'body' => substr($raw, $headerSize),
        'error' => $error,
    ];
};

$getLeadStatus = static function (PDO $pdo, string $email): ?array {
    $stmt = $pdo->prepare('SELECT id, status, error_message, created_at FROM leads WHERE email = :email ORDER BY id DESC LIMIT 1');
    $stmt->execute([':email' => $email]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    return is_array($row) ? $row : null;
};

$getEgresadoStatus = static function (PDO $pdo, string $correo): ?array {
    $stmt = $pdo->prepare('SELECT id, created_at FROM egresados WHERE correo = :correo ORDER BY id DESC LIMIT 1');
    $stmt->execute([':correo' => $correo]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    return is_array($row) ? $row : null;
};

$getBuzonStatus = static function (PDO $pdo, string $correo, string $asunto): ?array {
    $stmt = $pdo->prepare('SELECT id, created_at FROM buzon_rector WHERE correo = :correo AND asunto = :asunto ORDER BY id DESC LIMIT 1');
    $stmt->execute([
        ':correo' => $correo,
        ':asunto' => $asunto,
    ]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    return is_array($row) ? $row : null;
};

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $postedCsrf = (string) ($_POST['csrf'] ?? '');
    if ($postedCsrf === '' || !hash_equals($csrf, $postedCsrf)) {
        header('Location: ' . $base . '/admin/form-tests', true, 302);
        exit;
    }

    $ranAt = date('Y-m-d H:i:s');
    $pdo = leads_db();

    $testDefinitions = [
        ['label' => 'Contacto (legacy)', 'endpoint' => '/api/contacto', 'type' => 'lead'],
        ['label' => 'Contacto (forms)', 'endpoint' => '/api/forms/contacto', 'type' => 'lead'],
        ['label' => 'CCH ISEC', 'endpoint' => '/api/forms/cch-isec', 'type' => 'lead'],
        ['label' => 'Bachillerato en linea', 'endpoint' => '/api/forms/bachillerato-en-linea', 'type' => 'lead'],
        ['label' => 'Bachillerato tecnico AET', 'endpoint' => '/api/forms/bachillerato-tecnico-administracion-empresas-turisticas', 'type' => 'lead'],
        ['label' => 'Curso COLBACH', 'endpoint' => '/api/forms/curso-colbach', 'type' => 'lead'],
        ['label' => 'Lic. Administracion SUA', 'endpoint' => '/api/forms/licenciaturas-administracion-sua', 'type' => 'lead'],
        ['label' => 'Lic. Contaduria', 'endpoint' => '/api/forms/licenciaturas-contaduria-publica-estrategica', 'type' => 'lead'],
        ['label' => 'Lic. Derecho', 'endpoint' => '/api/forms/licenciaturas-derecho', 'type' => 'lead'],
        ['label' => 'Lic. Derecho SUA', 'endpoint' => '/api/forms/licenciaturas-derecho-sua', 'type' => 'lead'],
        ['label' => 'Lic. IAN', 'endpoint' => '/api/forms/licenciaturas-ingenieria-en-administracion-y-negocios', 'type' => 'lead'],
        ['label' => 'Lic. Finanzas', 'endpoint' => '/api/forms/licenciaturas-ingenieria-en-finanzas', 'type' => 'lead'],
        ['label' => 'Lic. IA', 'endpoint' => '/api/forms/licenciaturas-ingenieria-en-inteligencia-artificial', 'type' => 'lead'],
        ['label' => 'Lic. IT para Negocios', 'endpoint' => '/api/forms/licenciaturas-ingenieria-en-tecnologias-de-informacion-para-negocios', 'type' => 'lead'],
        ['label' => 'Lic. Innovacion Turistica', 'endpoint' => '/api/forms/licenciaturas-innovacion-turistica-y-gastronomica', 'type' => 'lead'],
        ['label' => 'Lic. Mercadotecnia', 'endpoint' => '/api/forms/licenciaturas-mercadotecnia-estrategica', 'type' => 'lead'],
        ['label' => 'Lic. Negocios Internacionales', 'endpoint' => '/api/forms/licenciaturas-negocios-internacionales', 'type' => 'lead'],
        ['label' => 'Lic. Pedagogia', 'endpoint' => '/api/forms/licenciaturas-pedagogia', 'type' => 'lead'],
        ['label' => 'Lic. Psicologia', 'endpoint' => '/api/forms/licenciaturas-psicologia', 'type' => 'lead'],
        ['label' => 'Maestria MAN', 'endpoint' => '/api/forms/maestrias-maestria-en-administracion-de-negocios', 'type' => 'lead'],
        ['label' => 'Maestria MAN en linea', 'endpoint' => '/api/forms/maestrias-maestria-en-administracion-de-negocios-en-linea', 'type' => 'lead'],
        ['label' => 'Maestria Derecho Corporativo', 'endpoint' => '/api/forms/maestrias-maestria-en-derecho-corporativo', 'type' => 'lead'],
        ['label' => 'Maestria Docencia', 'endpoint' => '/api/forms/maestrias-maestria-en-docencia', 'type' => 'lead'],
        ['label' => 'Maestria Finanzas', 'endpoint' => '/api/forms/maestrias-maestria-en-finanzas', 'type' => 'lead'],
        ['label' => 'Maestria Fiscal', 'endpoint' => '/api/forms/maestrias-maestria-en-fiscal', 'type' => 'lead'],
        ['label' => 'Maestria Mercadotecnia', 'endpoint' => '/api/forms/maestrias-maestria-en-mercadotecnia', 'type' => 'lead'],
        ['label' => 'Maestria TIC', 'endpoint' => '/api/forms/maestrias-maestria-en-tecnologias-de-informacion-y-comunicaciones', 'type' => 'lead'],
        ['label' => 'Doctorado Administracion', 'endpoint' => '/api/forms/doctorados-doctorado-en-administracion-de-negocios', 'type' => 'lead'],
        ['label' => 'Doctorado Educacion en linea', 'endpoint' => '/api/forms/doctorados-doctorado-en-educacion-sistema-de-aprendizaje-en-linea', 'type' => 'lead'],
        ['label' => 'Egresados', 'endpoint' => '/api/egresados', 'type' => 'egresados'],
        ['label' => 'Buzon del Rector', 'endpoint' => '/api/buzon-rector', 'type' => 'buzon'],
    ];

    foreach ($testDefinitions as $test) {
        $token = bin2hex(random_bytes(6));
        $url = $rootUrl . $test['endpoint'];
        $row = [
            'label' => $test['label'],
            'endpoint' => $test['endpoint'],
            'http_status' => '-',
            'db_status' => 'NO',
            'pipedrive_status' => 'N/A',
            'message' => '',
            'ok' => false,
        ];

        $payload = [];
        if ($test['type'] === 'lead') {
            $email = 'test+' . $token . '@example.com';
            $payload = [
                'company_website' => '',
                'full_name' => 'Prueba Admin ' . $token,
                'email' => $email,
                'phone' => '5512345678',
                'interest' => 'Prueba automatica',
                'source' => 'Panel admin test ' . $test['endpoint'],
                'message' => 'Test automatico de formulario',
                'channel' => 'Sitio web',
                'medium' => 'Diagnostico admin',
                'privacy' => '1',
            ];

            $http = $httpPost($url, $payload);
            $row['http_status'] = (string) $http['status'];

            if ($http['error'] !== '') {
                $row['message'] = 'cURL: ' . $http['error'];
                $results[] = $row;
                continue;
            }

            $lead = $getLeadStatus($pdo, $email);
            if ($lead !== null) {
                $row['db_status'] = 'OK';
                $status = (string) ($lead['status'] ?? '');
                if ($status === 'pipedrive_ok') {
                    $row['pipedrive_status'] = 'OK';
                    $row['ok'] = true;
                    $row['message'] = 'Lead guardado y enviado a Pipedrive.';
                } elseif ($status === 'pipedrive_failed') {
                    $row['pipedrive_status'] = 'ERROR';
                    $row['message'] = (string) ($lead['error_message'] ?? 'Error en Pipedrive.');
                } else {
                    $row['pipedrive_status'] = strtoupper($status !== '' ? $status : 'PENDIENTE');
                    $row['message'] = 'Lead guardado; estado actual: ' . ($status !== '' ? $status : 'desconocido');
                }
            } else {
                $row['message'] = 'No se encontro registro en BD para este test.';
            }

            $results[] = $row;
            continue;
        }

        if ($test['type'] === 'egresados') {
            $correo = 'egresado+' . $token . '@example.com';
            $payload = [
                'company_website' => '',
                'nombre' => 'Prueba',
                'apellido_paterno' => 'Admin',
                'apellido_materno' => 'Test',
                'anio_ingreso' => '2020',
                'anio_egreso' => '2024',
                'nivel_egreso' => 'Licenciatura',
                'carrera_egreso' => 'Administracion',
                'telefono' => '5512345678',
                'correo' => $correo,
                'trabajando' => 'si',
                'empresa' => 'UNEG',
                'cargo' => 'Prueba',
            ];

            $http = $httpPost($url, $payload);
            $row['http_status'] = (string) $http['status'];

            if ($http['error'] !== '') {
                $row['message'] = 'cURL: ' . $http['error'];
                $results[] = $row;
                continue;
            }

            $saved = $getEgresadoStatus($pdo, $correo);
            if ($saved !== null) {
                $row['db_status'] = 'OK';
                $row['ok'] = true;
                $row['message'] = 'Registro de egresado guardado correctamente.';
            } else {
                $row['message'] = 'No se guardo el registro de egresado.';
            }

            $results[] = $row;
            continue;
        }

        if ($test['type'] === 'buzon') {
            $correo = 'buzon+' . $token . '@example.com';
            $asunto = 'Prueba admin ' . $token;
            $payload = [
                'company_website' => '',
                'nombre' => 'Prueba Admin',
                'correo' => $correo,
                'asunto' => $asunto,
                'mensaje' => 'Mensaje de prueba desde panel admin.',
            ];

            $http = $httpPost($url, $payload);
            $row['http_status'] = (string) $http['status'];

            if ($http['error'] !== '') {
                $row['message'] = 'cURL: ' . $http['error'];
                $results[] = $row;
                continue;
            }

            $saved = $getBuzonStatus($pdo, $correo, $asunto);
            if ($saved !== null) {
                $row['db_status'] = 'OK';
                $row['ok'] = true;
                $row['message'] = 'Mensaje de buzon guardado correctamente.';
            } else {
                $row['message'] = 'No se guardo el mensaje de buzon.';
            }

            $results[] = $row;
            continue;
        }
    }
}

require __DIR__ . '/../../pages/admin/form-tests.php';
