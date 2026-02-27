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

    $host = (string) ($config['host'] ?? getenv('DB_HOST') ?: '127.0.0.1');
    $port = (int) ($config['port'] ?? getenv('DB_PORT') ?: 3306);
    $database = (string) ($config['database'] ?? getenv('DB_DATABASE') ?: 'administrador_web2026');
    $username = (string) ($config['username'] ?? getenv('DB_USERNAME') ?: 'administrador_web2026');
    $password = (string) ($config['password'] ?? getenv('DB_PASSWORD') ?: '');
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

function leads_db_init(PDO $pdo): void
{
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
        pipedrive_person_id VARCHAR(80) NULL,
        status VARCHAR(60) NOT NULL,
        error_message TEXT NULL,
        ip VARCHAR(64) NULL,
        user_agent TEXT NULL,
        created_at DATETIME NOT NULL,
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

    if (!leads_db_index_exists($pdo, 'leads', 'leads_created_at_idx')) {
        $pdo->exec('CREATE INDEX leads_created_at_idx ON leads (created_at)');
    }
    if (!leads_db_index_exists($pdo, 'egresados', 'egresados_created_at_idx')) {
        $pdo->exec('CREATE INDEX egresados_created_at_idx ON egresados (created_at)');
    }
    if (!leads_db_index_exists($pdo, 'buzon_rector', 'buzon_rector_created_at_idx')) {
        $pdo->exec('CREATE INDEX buzon_rector_created_at_idx ON buzon_rector (created_at)');
    }
}

function leads_db_datetime(mixed $value): string
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
        $stmt = $pdo->prepare('INSERT INTO leads (
            full_name, email, phone, interest, source, message, channel, medium,
            pipedrive_person_id, status, error_message, ip, user_agent, created_at
        ) VALUES (
            :full_name, :email, :phone, :interest, :source, :message, :channel, :medium,
            :pipedrive_person_id, :status, :error_message, :ip, :user_agent, :created_at
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
            ':pipedrive_person_id' => $data['pipedrive_person_id'] ?? null,
            ':status' => $data['status'] ?? 'received',
            ':error_message' => $data['error_message'] ?? null,
            ':ip' => $data['ip'] ?? null,
            ':user_agent' => $data['user_agent'] ?? null,
            ':created_at' => leads_db_datetime($data['created_at'] ?? null),
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
