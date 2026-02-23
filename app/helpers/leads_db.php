<?php
declare(strict_types=1);

/**
 * Helper de persistencia SQLite para formularios del sitio.
 *
 * Este archivo se encarga de:
 * - Resolver y preparar la ruta de la base de datos (app/storage/leads.sqlite).
 * - Abrir una unica conexion PDO reutilizable durante la peticion.
 * - Crear/actualizar tablas e indices necesarios (leads, egresados, buzon_rector).
 * - Exponer funciones de insercion y actualizacion para controllers.
 *
 * La idea es centralizar toda la logica de BD en un solo lugar para mantener
 * consistencia en estructura, permisos y manejo de errores.
 */
function leads_db_path(): string
{
    $storageDir = __DIR__ . '/../storage';
    if (!is_dir($storageDir)) {
        @mkdir($storageDir, 0775, true);
    }
    if (is_dir($storageDir) && !is_writable($storageDir)) {
        @chmod($storageDir, 0777);
    }

    $dbPath = $storageDir . '/leads.sqlite';
    if (file_exists($dbPath) && !is_writable($dbPath)) {
        @chmod($dbPath, 0666);
    }

    return $dbPath;
}

function leads_db(): PDO
{
    static $pdo = null;
    if ($pdo instanceof PDO) {
        return $pdo;
    }

    $dsn = 'sqlite:' . leads_db_path();
    $pdo = new PDO($dsn);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $dbPath = leads_db_path();
    if (file_exists($dbPath) && !is_writable($dbPath)) {
        @chmod($dbPath, 0666);
    }
    leads_db_init($pdo);

    return $pdo;
}

function leads_db_init(PDO $pdo): void
{
    $pdo->exec('CREATE TABLE IF NOT EXISTS leads (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        full_name TEXT NOT NULL,
        email TEXT NOT NULL,
        phone TEXT NOT NULL,
        interest TEXT NOT NULL,
        source TEXT,
        message TEXT,
        channel TEXT,
        medium TEXT,
        pipedrive_person_id TEXT,
        status TEXT NOT NULL,
        error_message TEXT,
        ip TEXT,
        user_agent TEXT,
        created_at TEXT NOT NULL
    )');
    $pdo->exec('CREATE INDEX IF NOT EXISTS leads_created_at_idx ON leads (created_at DESC)');

    $pdo->exec('CREATE TABLE IF NOT EXISTS egresados (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        nombre TEXT NOT NULL,
        apellido_paterno TEXT NOT NULL,
        apellido_materno TEXT NOT NULL,
        anio_ingreso TEXT NOT NULL,
        anio_egreso TEXT NOT NULL,
        nivel_egreso TEXT NOT NULL,
        carrera_egreso TEXT NOT NULL,
        telefono TEXT NOT NULL,
        correo TEXT NOT NULL,
        trabajando TEXT NOT NULL,
        empresa TEXT,
        cargo TEXT,
        ip TEXT,
        user_agent TEXT,
        created_at TEXT NOT NULL
    )');
    $pdo->exec('CREATE INDEX IF NOT EXISTS egresados_created_at_idx ON egresados (created_at DESC)');

    $pdo->exec('CREATE TABLE IF NOT EXISTS buzon_rector (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        nombre TEXT NOT NULL,
        correo TEXT NOT NULL,
        asunto TEXT NOT NULL,
        mensaje TEXT NOT NULL,
        ip TEXT,
        user_agent TEXT,
        created_at TEXT NOT NULL
    )');
    $pdo->exec('CREATE INDEX IF NOT EXISTS buzon_rector_created_at_idx ON buzon_rector (created_at DESC)');
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
            ':full_name' => $data['full_name'],
            ':email' => $data['email'],
            ':phone' => $data['phone'],
            ':interest' => $data['interest'],
            ':source' => $data['source'],
            ':message' => $data['message'],
            ':channel' => $data['channel'],
            ':medium' => $data['medium'],
            ':pipedrive_person_id' => $data['pipedrive_person_id'],
            ':status' => $data['status'],
            ':error_message' => $data['error_message'],
            ':ip' => $data['ip'],
            ':user_agent' => $data['user_agent'],
            ':created_at' => $data['created_at'],
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
            ':nombre' => $data['nombre'],
            ':apellido_paterno' => $data['apellido_paterno'],
            ':apellido_materno' => $data['apellido_materno'],
            ':anio_ingreso' => $data['anio_ingreso'],
            ':anio_egreso' => $data['anio_egreso'],
            ':nivel_egreso' => $data['nivel_egreso'],
            ':carrera_egreso' => $data['carrera_egreso'],
            ':telefono' => $data['telefono'],
            ':correo' => $data['correo'],
            ':trabajando' => $data['trabajando'],
            ':empresa' => $data['empresa'],
            ':cargo' => $data['cargo'],
            ':ip' => $data['ip'],
            ':user_agent' => $data['user_agent'],
            ':created_at' => $data['created_at'],
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
            ':nombre' => $data['nombre'],
            ':correo' => $data['correo'],
            ':asunto' => $data['asunto'],
            ':mensaje' => $data['mensaje'],
            ':ip' => $data['ip'],
            ':user_agent' => $data['user_agent'],
            ':created_at' => $data['created_at'],
        ]);

        return (int) $pdo->lastInsertId();
    } catch (Throwable $e) {
        return null;
    }
}
