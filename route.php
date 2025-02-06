<?php
/**
 * @package     2minutes-site
 * @author      alessio tortolini
 * @copyright   Copyright (c) 2024-2025, alessio tortolini
 * @license     MIT License
 * @version     1.0.0
 * @link        https://github.com/alestormoody/php-light
 *
 * Route calls
 */

use App\Service\Route;
use App\Controller\AuthController;

Route::get('/', function () {
    view('page.index');
});

Route::get('/login', function (){
    view('page.login');
});
Route::post('/login', function(){
    AuthController::login($_POST['email'], $_POST['password']);
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