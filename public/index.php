<?php
/**
 * @package     2minutes-site
 * @author      alessio tortolini
 * @copyright   Copyright (c) 2024-2025, alessio tortolini
 * @license     MIT License
 * @version     1.0.0
 * @link        https://github.com/alestormoody/2minutes-site
 *
 * public index to deal with the user requests
 */
use App\Service\Route;

// Includi l'autoloader 
require_once __DIR__ . '/../autoload.php';

// Carica gli helper definiti in config/helpers.php
$helpers = require_once __DIR__ . '/../config/helpers.php';

foreach ($helpers as $helper) {
    $helperPath = __DIR__ . '/../' . $helper;
    if (file_exists($helperPath)) {
        require_once $helperPath;
    } else {
        die("Helper file non trovato: $helperPath");
    }
}

// Includi il router
require_once __DIR__ . '/../route.php';

// Lancia il router per gestire la richiesta
Route::run();