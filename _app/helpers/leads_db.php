<?php
declare(strict_types=1);

/**
 * Helper de persistencia MySQL/MariaDB para formularios del sitio.
 *
 * Centraliza:
 * - Conexion PDO a la BD real (cPanel).
 * - Creacion de tablas e indices requeridos.
 * - Insercion/actualizacion usada por controllers.
 */

function leads_db_config(): array
{
    $config = [];
    $baseConfigPath = __DIR__ . '/../config/db.php';
    if (file_exists($baseConfigPath)) {
        $loaded = require $baseConfigPath;
        if (is_array($loaded)) {
            $config = $loaded;
        }
    }

    $localConfigPath = __DIR__ . '/../config/db.local.php';
    if (file_exists($localConfigPath)) {
        $loadedLocal = require $localConfigPath;
        if (is_array($loadedLocal)) {
            $config = array_merge($config, $loadedLocal);
        }
    }

    $envHost = (string) (getenv('DB_HOST') ?: '127.0.0.1');
    $envPort = (string) (getenv('DB_PORT') ?: '3306');
    $envDatabase = (string) (getenv('DB_DATABASE') ?: 'administrador_web2026');
    $envUsername = (string) (getenv('DB_USERNAME') ?: 'administrador_web2026');
    $envPassword = (string) (getenv('DB_PASSWORD') ?: '');

    $host = (string) ($config['host'] ?? $envHost);
    $port = (int) ($config['port'] ?? $envPort);
    $database = (string) ($config['database'] ?? $envDatabase);
    $username = (string) ($config['username'] ?? $envUsername);
    $password = (string) ($config['password'] ?? $envPassword);
    $charset = (string) ($config['charset'] ?? 'utf8mb4');

    return [
        'host' => $host,
        'port' => $port,
        'database' => $database,
        'username' => $username,
        'password' => $password,
        'charset' => $charset,
    ];
}

function leads_db(): PDO
{
    static $pdo = null;
    if ($pdo instanceof PDO) {
        return $pdo;
    }

    $db = leads_db_config();
    $dsn = sprintf(
        'mysql:host=%s;port=%d;dbname=%s;charset=%s',
        $db['host'],
        $db['port'],
        $db['database'],
        $db['charset']
    );

    $pdo = new PDO($dsn, $db['username'], $db['password'], [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ]);

    leads_db_init($pdo);

    return $pdo;
}

function leads_db_index_exists(PDO $pdo, string $table, string $index): bool
{
    $stmt = $pdo->prepare(
        'SELECT 1 FROM INFORMATION_SCHEMA.STATISTICS
         WHERE TABLE_SCHEMA = DATABASE()
           AND TABLE_NAME = :table
           AND INDEX_NAME = :indexName
         LIMIT 1'
    );
    $stmt->execute([
        ':table' => $table,
        ':indexName' => $index,
    ]);

    return (bool) $stmt->fetchColumn();
}

function leads_db_column_exists(PDO $pdo, string $table, string $column): bool
{
    $stmt = $pdo->prepare(
        'SELECT 1 FROM INFORMATION_SCHEMA.COLUMNS
         WHERE TABLE_SCHEMA = DATABASE()
           AND TABLE_NAME = :table
           AND COLUMN_NAME = :columnName
         LIMIT 1'
    );
    $stmt->execute([
        ':table' => $table,
        ':columnName' => $column,
    ]);

    return (bool) $stmt->fetchColumn();
}

function leads_db_table_exists(PDO $pdo, string $table): bool
{
    $stmt = $pdo->prepare(
        'SELECT 1 FROM INFORMATION_SCHEMA.TABLES
         WHERE TABLE_SCHEMA = DATABASE()
           AND TABLE_NAME = :table
         LIMIT 1'
    );
    $stmt->execute([
        ':table' => $table,
    ]);

    return (bool) $stmt->fetchColumn();
}

function leads_db_init(PDO $pdo): void
{
    if (leads_db_table_exists($pdo, 'plan_download_clicks') && !leads_db_table_exists($pdo, 'download_clicks') && !leads_db_table_exists($pdo, 'cta_clicks')) {
        $pdo->exec('RENAME TABLE plan_download_clicks TO cta_clicks');
    }
    if (leads_db_table_exists($pdo, 'download_clicks') && !leads_db_table_exists($pdo, 'cta_clicks')) {
        $pdo->exec('RENAME TABLE download_clicks TO cta_clicks');
    }

    $pdo->exec('CREATE TABLE IF NOT EXISTS leads (
        id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
        full_name VARCHAR(190) NOT NULL,
        email VARCHAR(190) NOT NULL,
        phone VARCHAR(60) NOT NULL,
        interest VARCHAR(190) NOT NULL,
        source VARCHAR(255) NULL,
        message TEXT NULL,
        channel VARCHAR(120) NULL,
        medium VARCHAR(120) NULL,
        page_path VARCHAR(255) NULL,
        pipedrive_person_id VARCHAR(80) NULL,
        status VARCHAR(60) NOT NULL,
        error_message TEXT NULL,
        ip VARCHAR(64) NULL,
        user_agent TEXT NULL,
        created_at DATETIME NOT NULL,
        created_day DATE NULL,
        PRIMARY KEY (id)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci');

    $pdo->exec('CREATE TABLE IF NOT EXISTS egresados (
        id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
        nombre VARCHAR(120) NOT NULL,
        apellido_paterno VARCHAR(120) NOT NULL,
        apellido_materno VARCHAR(120) NOT NULL,
        anio_ingreso VARCHAR(10) NOT NULL,
        anio_egreso VARCHAR(10) NOT NULL,
        nivel_egreso VARCHAR(120) NOT NULL,
        carrera_egreso VARCHAR(190) NOT NULL,
        telefono VARCHAR(60) NOT NULL,
        correo VARCHAR(190) NOT NULL,
        trabajando VARCHAR(10) NOT NULL,
        empresa VARCHAR(190) NULL,
        cargo VARCHAR(190) NULL,
        ip VARCHAR(64) NULL,
        user_agent TEXT NULL,
        created_at DATETIME NOT NULL,
        PRIMARY KEY (id)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci');

    $pdo->exec('CREATE TABLE IF NOT EXISTS buzon_rector (
        id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
        nombre VARCHAR(190) NOT NULL,
        correo VARCHAR(190) NOT NULL,
        asunto VARCHAR(255) NOT NULL,
        mensaje LONGTEXT NOT NULL,
        ip VARCHAR(64) NULL,
        user_agent TEXT NULL,
        created_at DATETIME NOT NULL,
        PRIMARY KEY (id)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci');

    $pdo->exec('CREATE TABLE IF NOT EXISTS whatsapp_clicks (
        id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
        page_path VARCHAR(255) NULL,
        target_url VARCHAR(500) NULL,
        device_type VARCHAR(30) NULL,
        referrer_url VARCHAR(500) NULL,
        ip VARCHAR(64) NULL,
        user_agent TEXT NULL,
        created_at DATETIME NOT NULL,
        created_day DATE NULL,
        PRIMARY KEY (id)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci');

    $pdo->exec('CREATE TABLE IF NOT EXISTS cta_clicks (
        id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
        page_path VARCHAR(255) NULL,
        click_label VARCHAR(190) NULL,
        device_type VARCHAR(30) NULL,
        referrer_url VARCHAR(500) NULL,
        ip VARCHAR(64) NULL,
        user_agent TEXT NULL,
        created_at DATETIME NOT NULL,
        created_day DATE NULL,
        PRIMARY KEY (id)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci');

    if (!leads_db_index_exists($pdo, 'leads', 'leads_created_at_idx')) {
        $pdo->exec('CREATE INDEX leads_created_at_idx ON leads (created_at)');
    }
    if (!leads_db_column_exists($pdo, 'leads', 'created_day')) {
        $pdo->exec('ALTER TABLE leads ADD COLUMN created_day DATE NULL AFTER created_at');
    }
    $pdo->exec('UPDATE leads SET created_day = DATE(created_at) WHERE created_day IS NULL');
    if (!leads_db_index_exists($pdo, 'leads', 'leads_created_day_idx')) {
        $pdo->exec('CREATE INDEX leads_created_day_idx ON leads (created_day)');
    }
    if (!leads_db_index_exists($pdo, 'leads', 'leads_day_page_path_idx')) {
        $pdo->exec('CREATE INDEX leads_day_page_path_idx ON leads (created_day, page_path)');
    }
    if (!leads_db_index_exists($pdo, 'leads', 'leads_day_interest_idx')) {
        $pdo->exec('CREATE INDEX leads_day_interest_idx ON leads (created_day, interest)');
    }
    if (!leads_db_index_exists($pdo, 'leads', 'leads_day_status_idx')) {
        $pdo->exec('CREATE INDEX leads_day_status_idx ON leads (created_day, status)');
    }
    if (!leads_db_column_exists($pdo, 'leads', 'page_path')) {
        $pdo->exec('ALTER TABLE leads ADD COLUMN page_path VARCHAR(255) NULL AFTER medium');
    }
    if (!leads_db_index_exists($pdo, 'egresados', 'egresados_created_at_idx')) {
        $pdo->exec('CREATE INDEX egresados_created_at_idx ON egresados (created_at)');
    }
    if (!leads_db_index_exists($pdo, 'buzon_rector', 'buzon_rector_created_at_idx')) {
        $pdo->exec('CREATE INDEX buzon_rector_created_at_idx ON buzon_rector (created_at)');
    }
    if (!leads_db_index_exists($pdo, 'whatsapp_clicks', 'whatsapp_clicks_created_at_idx')) {
        $pdo->exec('CREATE INDEX whatsapp_clicks_created_at_idx ON whatsapp_clicks (created_at)');
    }
    if (!leads_db_index_exists($pdo, 'whatsapp_clicks', 'whatsapp_clicks_page_path_idx')) {
        $pdo->exec('CREATE INDEX whatsapp_clicks_page_path_idx ON whatsapp_clicks (page_path(190))');
    }
    if (!leads_db_column_exists($pdo, 'whatsapp_clicks', 'created_day')) {
        $pdo->exec('ALTER TABLE whatsapp_clicks ADD COLUMN created_day DATE NULL AFTER created_at');
    }
    $pdo->exec('UPDATE whatsapp_clicks SET created_day = DATE(created_at) WHERE created_day IS NULL');
    if (!leads_db_index_exists($pdo, 'whatsapp_clicks', 'whatsapp_clicks_created_day_idx')) {
        $pdo->exec('CREATE INDEX whatsapp_clicks_created_day_idx ON whatsapp_clicks (created_day)');
    }
    if (!leads_db_index_exists($pdo, 'whatsapp_clicks', 'whatsapp_clicks_day_page_idx')) {
        $pdo->exec('CREATE INDEX whatsapp_clicks_day_page_idx ON whatsapp_clicks (created_day, page_path)');
    }
    if (!leads_db_index_exists($pdo, 'whatsapp_clicks', 'whatsapp_clicks_day_device_idx')) {
        $pdo->exec('CREATE INDEX whatsapp_clicks_day_device_idx ON whatsapp_clicks (created_day, device_type)');
    }
    if (leads_db_column_exists($pdo, 'cta_clicks', 'offer_name') && !leads_db_column_exists($pdo, 'cta_clicks', 'click_label')) {
        $pdo->exec('ALTER TABLE cta_clicks CHANGE COLUMN offer_name click_label VARCHAR(190) NULL');
    }
    if (!leads_db_index_exists($pdo, 'cta_clicks', 'cta_clicks_created_at_idx')) {
        $pdo->exec('CREATE INDEX cta_clicks_created_at_idx ON cta_clicks (created_at)');
    }
    if (!leads_db_index_exists($pdo, 'cta_clicks', 'cta_clicks_page_path_idx')) {
        $pdo->exec('CREATE INDEX cta_clicks_page_path_idx ON cta_clicks (page_path(190))');
    }
    if (!leads_db_index_exists($pdo, 'cta_clicks', 'cta_clicks_label_idx')) {
        $pdo->exec('CREATE INDEX cta_clicks_label_idx ON cta_clicks (click_label)');
    }
    if (!leads_db_column_exists($pdo, 'cta_clicks', 'created_day')) {
        $pdo->exec('ALTER TABLE cta_clicks ADD COLUMN created_day DATE NULL AFTER created_at');
    }
    $pdo->exec('UPDATE cta_clicks SET created_day = DATE(created_at) WHERE created_day IS NULL');
    if (!leads_db_index_exists($pdo, 'cta_clicks', 'cta_clicks_created_day_idx')) {
        $pdo->exec('CREATE INDEX cta_clicks_created_day_idx ON cta_clicks (created_day)');
    }
    if (!leads_db_index_exists($pdo, 'cta_clicks', 'cta_clicks_day_label_idx')) {
        $pdo->exec('CREATE INDEX cta_clicks_day_label_idx ON cta_clicks (created_day, click_label)');
    }
    if (!leads_db_index_exists($pdo, 'cta_clicks', 'cta_clicks_day_page_idx')) {
        $pdo->exec('CREATE INDEX cta_clicks_day_page_idx ON cta_clicks (created_day, page_path)');
    }
    if (!leads_db_index_exists($pdo, 'cta_clicks', 'cta_clicks_day_device_idx')) {
        $pdo->exec('CREATE INDEX cta_clicks_day_device_idx ON cta_clicks (created_day, device_type)');
    }
}

function leads_db_datetime($value): string
{
    $raw = is_string($value) ? trim($value) : '';
    if ($raw === '') {
        return date('Y-m-d H:i:s');
    }

    $timestamp = strtotime($raw);
    if ($timestamp === false) {
        return date('Y-m-d H:i:s');
    }

    return date('Y-m-d H:i:s', $timestamp);
}

function leads_db_insert(array $data): ?int
{
    try {
        $pdo = leads_db();
        $createdAt = leads_db_datetime($data['created_at'] ?? null);

        $pagePathRaw = trim((string) ($data['page_path'] ?? ($_POST['page_path'] ?? '')));
        if ($pagePathRaw !== '' && strpos($pagePathRaw, '/') !== 0) {
            $parsedPath = (string) parse_url($pagePathRaw, PHP_URL_PATH);
            $pagePathRaw = $parsedPath !== '' ? $parsedPath : '';
        }
        if ($pagePathRaw !== '' && strpos($pagePathRaw, '/') !== 0) {
            $pagePathRaw = '/' . ltrim($pagePathRaw, '/');
        }
        if ($pagePathRaw !== '') {
            $pagePathRaw = substr($pagePathRaw, 0, 255);
        }
        $pagePath = $pagePathRaw !== '' ? $pagePathRaw : null;

        $stmt = $pdo->prepare('INSERT INTO leads (
            full_name, email, phone, interest, source, message, channel, medium, page_path,
            pipedrive_person_id, status, error_message, ip, user_agent, created_at, created_day
        ) VALUES (
            :full_name, :email, :phone, :interest, :source, :message, :channel, :medium, :page_path,
            :pipedrive_person_id, :status, :error_message, :ip, :user_agent, :created_at, :created_day
        )');
        $stmt->execute([
            ':full_name' => $data['full_name'] ?? '',
            ':email' => $data['email'] ?? '',
            ':phone' => $data['phone'] ?? '',
            ':interest' => $data['interest'] ?? '',
            ':source' => $data['source'] ?? null,
            ':message' => $data['message'] ?? null,
            ':channel' => $data['channel'] ?? null,
            ':medium' => $data['medium'] ?? null,
            ':page_path' => $pagePath,
            ':pipedrive_person_id' => $data['pipedrive_person_id'] ?? null,
            ':status' => $data['status'] ?? 'received',
            ':error_message' => $data['error_message'] ?? null,
            ':ip' => $data['ip'] ?? null,
            ':user_agent' => $data['user_agent'] ?? null,
            ':created_at' => $createdAt,
            ':created_day' => substr($createdAt, 0, 10),
        ]);

        return (int) $pdo->lastInsertId();
    } catch (Throwable $e) {
        return null;
    }
}

function leads_db_update(int $id, array $data): void
{
    if ($id <= 0) {
        return;
    }

    try {
        $pdo = leads_db();
        $sets = [];
        $params = [':id' => $id];
        foreach ($data as $key => $value) {
            if ($key === 'created_at') {
                $value = leads_db_datetime($value);
                $sets[] = 'created_day = :created_day';
                $params[':created_day'] = substr($value, 0, 10);
            }
            $sets[] = $key . ' = :' . $key;
            $params[':' . $key] = $value;
        }
        if ($sets === []) {
            return;
        }
        $sql = 'UPDATE leads SET ' . implode(', ', $sets) . ' WHERE id = :id';
        $stmt = $pdo->prepare($sql);
        $stmt->execute($params);
    } catch (Throwable $e) {
        return;
    }
}

function egresados_db_insert(array $data): ?int
{
    try {
        $pdo = leads_db();
        $stmt = $pdo->prepare('INSERT INTO egresados (
            nombre, apellido_paterno, apellido_materno, anio_ingreso, anio_egreso,
            nivel_egreso, carrera_egreso, telefono, correo, trabajando,
            empresa, cargo, ip, user_agent, created_at
        ) VALUES (
            :nombre, :apellido_paterno, :apellido_materno, :anio_ingreso, :anio_egreso,
            :nivel_egreso, :carrera_egreso, :telefono, :correo, :trabajando,
            :empresa, :cargo, :ip, :user_agent, :created_at
        )');

        $stmt->execute([
            ':nombre' => $data['nombre'] ?? '',
            ':apellido_paterno' => $data['apellido_paterno'] ?? '',
            ':apellido_materno' => $data['apellido_materno'] ?? '',
            ':anio_ingreso' => $data['anio_ingreso'] ?? '',
            ':anio_egreso' => $data['anio_egreso'] ?? '',
            ':nivel_egreso' => $data['nivel_egreso'] ?? '',
            ':carrera_egreso' => $data['carrera_egreso'] ?? '',
            ':telefono' => $data['telefono'] ?? '',
            ':correo' => $data['correo'] ?? '',
            ':trabajando' => $data['trabajando'] ?? '',
            ':empresa' => $data['empresa'] ?? null,
            ':cargo' => $data['cargo'] ?? null,
            ':ip' => $data['ip'] ?? null,
            ':user_agent' => $data['user_agent'] ?? null,
            ':created_at' => leads_db_datetime($data['created_at'] ?? null),
        ]);

        return (int) $pdo->lastInsertId();
    } catch (Throwable $e) {
        return null;
    }
}

function buzon_rector_db_insert(array $data): ?int
{
    try {
        $pdo = leads_db();
        $stmt = $pdo->prepare('INSERT INTO buzon_rector (
            nombre, correo, asunto, mensaje, ip, user_agent, created_at
        ) VALUES (
            :nombre, :correo, :asunto, :mensaje, :ip, :user_agent, :created_at
        )');

        $stmt->execute([
            ':nombre' => $data['nombre'] ?? '',
            ':correo' => $data['correo'] ?? '',
            ':asunto' => $data['asunto'] ?? '',
            ':mensaje' => $data['mensaje'] ?? '',
            ':ip' => $data['ip'] ?? null,
            ':user_agent' => $data['user_agent'] ?? null,
            ':created_at' => leads_db_datetime($data['created_at'] ?? null),
        ]);

        return (int) $pdo->lastInsertId();
    } catch (Throwable $e) {
        return null;
    }
}

function whatsapp_click_db_insert(array $data): ?int
{
    try {
        $pdo = leads_db();
        $createdAt = leads_db_datetime($data['created_at'] ?? null);

        $stmt = $pdo->prepare('INSERT INTO whatsapp_clicks (
            page_path, target_url, device_type, referrer_url, ip, user_agent, created_at, created_day
        ) VALUES (
            :page_path, :target_url, :device_type, :referrer_url, :ip, :user_agent, :created_at, :created_day
        )');

        $pagePath = trim((string) ($data['page_path'] ?? ''));
        if ($pagePath !== '' && strpos($pagePath, '/') !== 0) {
            $pagePath = '/' . ltrim($pagePath, '/');
        }
        $targetUrl = trim((string) ($data['target_url'] ?? ''));
        $deviceType = trim((string) ($data['device_type'] ?? ''));
        $referrerUrl = trim((string) ($data['referrer_url'] ?? ''));

        $stmt->execute([
            ':page_path' => $pagePath !== '' ? substr($pagePath, 0, 255) : null,
            ':target_url' => $targetUrl !== '' ? substr($targetUrl, 0, 500) : null,
            ':device_type' => $deviceType !== '' ? substr($deviceType, 0, 30) : null,
            ':referrer_url' => $referrerUrl !== '' ? substr($referrerUrl, 0, 500) : null,
            ':ip' => $data['ip'] ?? null,
            ':user_agent' => $data['user_agent'] ?? null,
            ':created_at' => $createdAt,
            ':created_day' => substr($createdAt, 0, 10),
        ]);

        return (int) $pdo->lastInsertId();
    } catch (Throwable $e) {
        return null;
    }
}

function cta_click_db_insert(array $data): ?int
{
    try {
        $pdo = leads_db();
        $createdAt = leads_db_datetime($data['created_at'] ?? null);

        $stmt = $pdo->prepare('INSERT INTO cta_clicks (
            page_path, click_label, device_type, referrer_url, ip, user_agent, created_at, created_day
        ) VALUES (
            :page_path, :click_label, :device_type, :referrer_url, :ip, :user_agent, :created_at, :created_day
        )');

        $pagePath = trim((string) ($data['page_path'] ?? ''));
        if ($pagePath !== '' && strpos($pagePath, '/') !== 0) {
            $pagePath = '/' . ltrim($pagePath, '/');
        }
        $clickLabel = trim((string) ($data['click_label'] ?? ($data['offer_name'] ?? '')));
        $deviceType = trim((string) ($data['device_type'] ?? ''));
        $referrerUrl = trim((string) ($data['referrer_url'] ?? ''));

        $stmt->execute([
            ':page_path' => $pagePath !== '' ? substr($pagePath, 0, 255) : null,
            ':click_label' => $clickLabel !== '' ? substr($clickLabel, 0, 190) : null,
            ':device_type' => $deviceType !== '' ? substr($deviceType, 0, 30) : null,
            ':referrer_url' => $referrerUrl !== '' ? substr($referrerUrl, 0, 500) : null,
            ':ip' => $data['ip'] ?? null,
            ':user_agent' => $data['user_agent'] ?? null,
            ':created_at' => $createdAt,
            ':created_day' => substr($createdAt, 0, 10),
        ]);

        return (int) $pdo->lastInsertId();
    } catch (Throwable $e) {
        return null;
    }
}
