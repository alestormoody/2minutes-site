<?php
/**
 * @package     php-light
 * @author      alessio tortolini
 * @copyright   Copyright (c) 2024-2025, alessio tortolini
 * @license     MIT License
 * @version     1.0.0
 * @link        https://github.com/alestormoody/php-light
 *
 * autoload to call call the classes
 */
spl_autoload_register(function ($class) {
    // Base namespace del progetto
    $baseNamespace = 'App\\';

    // Verifica se la classe inizia con il namespace base
    if (strpos($class, $baseNamespace) === 0) {
        // Rimuove il namespace base dalla classe
        $relativeClass = substr($class, strlen($baseNamespace));

        // Converte il namespace in un percorso di file
        $file = __DIR__ . '/app/' . str_replace('\\', '/', $relativeClass) . '.php';

        // Se il file esiste, lo include
        if (file_exists($file)) {
            require_once $file;
        } else {
            // Gestione dell'errore per classi mancanti
            die("Classe non trovata: $class (File: $file)");
        }
    }
});