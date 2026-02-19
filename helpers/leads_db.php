<?php
declare(strict_types=1);

function leads_db_path(): string
{
    $storageDir = __DIR__ . '/../storage';
    if (!is_dir($storageDir)) {
        @mkdir($storageDir, 0775, true);
    }

    return $storageDir . '/leads.sqlite';
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
