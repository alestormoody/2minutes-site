<?php

/**
 * @package     2minutes-site
 * @author      alessio tortolini
 * @copyright   Copyright (c) 2024-2025, alessio tortolini
 * @license     MIT License
 * @version     1.0.0
 * @link        https://github.com/alestormoody/php-light
 *
 * generic functions
 */

// Funzione che trova la cartella principale dove si trova la cartella di riferimento
function getProjectRootFromCall($filePath) {
    // Ottieni la directory del file che sta chiamando la funzione
    $currentDir = __DIR__;

    // Separiamo il percorso del file (esempio: 'config/filename.php' diventa ['config', 'filename.php'])
    $pathParts = explode('/', $filePath);

    // Prendiamo la cartella di riferimento dalla "rotta"
    $folderToFind = array_shift($pathParts); // Prende 'config' in 'config/filename.php'

    // Risaliamo nella struttura delle cartelle fino a trovare la cartella richiesta
    while (!is_dir($currentDir . '/' . $folderToFind)) {
        $currentDir = realpath($currentDir . '/../');  // Risale nella struttura delle cartelle

        // Se arriviamo alla root senza trovare la cartella, interrompiamo
        if ($currentDir === false) {
            return false; // Directory non trovata
        }
    }

    // Restituiamo la directory che contiene la cartella richiesta
    return $currentDir . '/' . $folderToFind;
}

// Funzione principale che trova il file partendo dalla root
function pathFinder($filePath) {
    // Ottieni la directory padre che contiene quello che cerchi
    $rootDir = getProjectRootFromCall($filePath);    
    if ($rootDir === false) {
        echo "Root folder non trovata!";
        return;
    }

    // Aggiungiamo il resto del percorso (il file specifico da includere)
    $fullPath = $rootDir . '/' . implode('/', array_slice(explode('/', $filePath), 1));

    // Verifica se il file esiste e restituiscilo
    if (file_exists($fullPath)) {
        return $fullPath;
    } else {
        echo "<pre>File non trovato</pre>";
    }
}

function componentsStandard($page) {
    $config = include pathFinder('config/components.php');
    foreach ($config as $key => $value) {
        if($config[$key]['active'] && in_array($page, $config[$key]['pages'])) {
            $data = $config[$key]['data'];
            component('component.'.$key, $data);
        }
    }
}