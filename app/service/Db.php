<?php
/**
 * @package     2minutes-site
 * @author      alessio tortolini
 * @copyright   Copyright (c) 2024-2025, alessio tortolini
 * @license     MIT License
 * @version     1.0.0
 * @link        https://github.com/alestormoody/php-light
 *
 * DB service to manage the system with a sort of ORM
 */
namespace App\Service;

class Db {
    protected static $table;
    protected static $query = [];
    protected static $connection;
    
    protected static function initConnection() {
        if (!self::$connection) {
            $config = require_once __DIR__ . '/../../config/database.php';
            
            self::$connection = new \PDO(
                "mysql:host=" . $config['host'] . 
                ";dbname=" . $config['database'],
                $config['username'],
                $config['password']
            );
            
            // Imposta modalità di errore e charset
            self::$connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            self::$connection->exec("SET NAMES utf8");
        }
    }

    public static function table($tableName) {
        self::initConnection();
        self::$table = $tableName;
        self::$query = []; // Reset query per ogni nuova chiamata
        return new static();
    }

    public static function select($columns = '*') {
        self::$query['select'] = "SELECT $columns FROM " . self::$table;
        return new static();
    }

    public static function where($column, $operator, $value) {
        self::$query['where'][] = "$column $operator ?";
        self::$query['params'][] = $value;
        return new static();
    }

    public static function get() {
        $sql = self::buildQuery();
        $stmt = self::$connection->prepare($sql);
        $stmt->execute(self::$query['params'] ?? []);
        return $stmt->fetchAll(\PDO::FETCH_OBJ);
    }

    protected static function buildQuery() {
        $sql = self::$query['select'];
        
        if (!empty(self::$query['where'])) {
            $sql .= " WHERE " . implode(' AND ', self::$query['where']);
        }
        
        return $sql;
    }
}
