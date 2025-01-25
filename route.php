<?php
/**
 * @package     php-light
 * @author      alessio tortolini
 * @copyright   Copyright (c) 2024-2025, alessio tortolini
 * @license     MIT License
 * @version     1.0.0
 * @link        https://github.com/alestormoody/php-light
 *
 * Route calls
 */

use App\Service\Route;

Route::get('/', function () {
    view('page.index');
});

// In route.php o nel tuo file di routing
Route::get('/live', function() {
    // TODO : migliora la rotta di controllo del sistema
    $dbStatus = checkDatabase();
    $serverStatus = checkServer();
    $diskStatus = checkDiskSpace();
    $cacheStatus = checkCache();
    $errorLogStatus = checkErrorLog();

    echo json_encode([
        'database' => $dbStatus,
        'server' => $serverStatus,
        'disk' => $diskStatus,
        'cache' => $cacheStatus,
        'error_log' => $errorLogStatus
    ]);

});