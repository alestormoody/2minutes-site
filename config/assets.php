<?php
/**
 * @package     2minutes-site
 * @author      alessio tortolini
 * @copyright   Copyright (c) 2024-2025, alessio tortolini
 * @license     MIT License
 * @version     1.0.0
 * @link        https://github.com/alestormoody/php-light
 *
 * List of file to compile with php cli:minify
 */

// Definisce i file da compilare in un array
return [
    'System' => [
        'resources/css/app.css' => 'public/app.css',
        'resources/js/app.js' => 'public/app.js',
    ],
    'Custom' => [
        // Aggiungi file personalizzati se necessario
        // 'resources/css/custom.css' => 'public/css/custom.min.css',
        // 'resources/js/custom.js' => 'public/js/custom.min.js',
    ],
];