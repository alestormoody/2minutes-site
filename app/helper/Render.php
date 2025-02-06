<?php 
/**
 * @package     php-light
 * @author      alessio tortolini
 * @copyright   Copyright (c) 2024-2025, alessio tortolini
 * @license     MIT License
 * @version     1.0.0
 * @link        https://github.com/alestormoody/php-light
 *
 * render of views and components
 */
function render($component, $data = [])
{

    $baseDir = __DIR__ . '/../../resources/view/';

    // Sostituisci i punti con slash e aggiungi l'estensione
    $componentPath = $baseDir . str_replace('.', '/', $component) . '.view.php';

    // Controlla l'esistenza del file
    if (!file_exists($componentPath)) {
        throw new Exception("componente non trovato: $componentPath");
    }

    // Estrai i dati e include il file
    extract($data);
    require $componentPath;
}

function component($component, $data = [])
{
    return render($component, $data);
}

function view($template, $data = [])
{
    return render($template, $data);
}
