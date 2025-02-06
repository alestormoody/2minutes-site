<?php
/**
 * @package     2minutes-site
 * @author      alessio tortolini
 * @copyright   Copyright (c) 2024-2025, alessio tortolini
 * @license     MIT License
 * @version     1.0.0
 * @link        https://github.com/alestormoody/php-light
 *
 * CLI per creare un database e tabelle utenti e componenti
 */

namespace App\Cli;

use PDO;

class MakeDatabase
{
    private static $pdo;
    private static $config;

    public static function init()
    {
        self::$config = include __DIR__ . '/../../config/db.php';
    }

    public static function connect()
    {

        $host = self::$config['host'];
        $db   = self::$config['database'];
        $user = self::$config['username'];
        $pass = self::$config['password'];
        $charset = 'utf8mb4';

        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        self::$pdo = new PDO($dsn, $user, $pass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    }

    public static function createTables()
    {
        $queries = [
            "CREATE TABLE IF NOT EXISTS users (
                id INT AUTO_INCREMENT PRIMARY KEY,
                username VARCHAR(255) UNIQUE NOT NULL,
                password VARCHAR(255) NOT NULL,
                role ENUM('super_admin', 'admin', 'user') NOT NULL
            );",
            "CREATE TABLE IF NOT EXISTS components (
                id INT AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(255) NOT NULL,
                active BOOLEAN NOT NULL DEFAULT 1,
                pages TEXT,
                data JSON NOT NULL
            );"
        ];
        
        foreach ($queries as $query) {
            self::$pdo->exec($query);
        }
        echo "Tabelle create con successo!\n";
    }

    public static function seedSuperAdmin()
    {
        $passwordHash = password_hash('admin123', PASSWORD_BCRYPT);
        $stmt = self::$pdo->prepare("INSERT INTO users (username, password, role) VALUES (?, ?, ?) ON DUPLICATE KEY UPDATE username=username");
        $stmt->execute(['admin', $passwordHash, 'super_admin']);
        echo "Super Admin creato con successo!\n";
    }
}

if (php_sapi_name() === 'cli') {
    $command = $argv[1] ?? null;
    
    if ($command === 'cli:makeDatabase') {
        MakeDatabase::init();
        MakeDatabase::connect();
        MakeDatabase::createTables();
        MakeDatabase::seedSuperAdmin();
    } else {
        echo "Comando non riconosciuto. Usa: php app/cli/MakeDatabase.php cli:makeDatabase\n";
    }
}
