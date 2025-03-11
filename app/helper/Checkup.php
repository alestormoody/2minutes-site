<?php
/**
 * @package     2minutes-site
 * @author      alessio tortolini
 * @copyright   Copyright (c) 2024-2025, alessio tortolini
 * @license     MIT License
 * @version     1.0.0
 * @link        https://github.com/alestormoody/2minutes-site
 *
 * System checkup functions
 */
function checkDatabase() {
    try {
        // Supponiamo che tu stia usando PDO
        $pdo = new PDO('mysql:host=localhost;dbname=your_database', 'user', 'password');
        return 'OK';
    } catch (PDOException $e) {
        return 'Error: ' . $e->getMessage();
    }
}
function checkServer() {
    $response = shell_exec('ping -c 1 127.0.0.1'); // Ping al server localhost
    return $response ? 'OK' : 'Error: Server unreachable';
}

function checkDiskSpace() {
    $diskFree = disk_free_space("/");
    $diskTotal = disk_total_space("/");
    $diskUsed = $diskTotal - $diskFree;
    
    // Verifica se lo spazio libero è inferiore al 10%
    $percentageFree = ($diskFree / $diskTotal) * 100;
    
    if ($percentageFree < 10) {
        return 'Warning: Low disk space (' . round($percentageFree) . '% free)';
    }

    return 'OK';
}

function checkCache() {
    // Supponiamo che tu stia usando un sistema di cache come Redis o file-based
    // Esegui un semplice controllo per vedere se la cache è scrivibile
    $cacheFile = __DIR__ . '/../../storage/cache/cache';
    try {
        file_put_contents($cacheFile, 'test');
        unlink($cacheFile); // Rimuovi il file di test
        return 'OK';
    } catch (Exception $e) {
        return 'Error: ' . $e->getMessage();
    }
}

function checkErrorLog() {
    $logFile = __DIR__ . '/../../storage/logs/error.log';
    
    if (!file_exists($logFile)) {
        return 'Log file not found';
    }
    
    $logs = file_get_contents($logFile);
    
    if (strpos($logs, 'ERROR') !== false) {
        return 'Warning: Errors found in logs';
    }

    return 'OK';
}