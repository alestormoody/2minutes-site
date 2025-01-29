<?php
/**
 * @package     php-light
 * @author      alessio tortolini
 * @copyright   Copyright (c) 2024-2025, alessio tortolini
 * @license     MIT License
 * @version     1.0.0
 * @link        https://github.com/alestormoody/php-light
 *
 * CLI to compile css and js files
 */
class Compiler
{
    // Carica la lista dei file da compilare
    private static $filesToCompile;

    // Inizializza la lista dei file da compilare
    public static function init()
    {
        self::$filesToCompile = include __DIR__ . '/../../config/assets.php';
    }

    /**
     * Metodo principale per compilare i file.
     */
    public static function compileAll()
    {
        echo "Inizio compilazione...\n";

        foreach (self::$filesToCompile as $category => $files) {
            echo "\nCompilazione categoria: $category\n";
            foreach ($files as $source => $output) {
                if (file_exists($source)) {
                    self::compileFile($source, $output);
                } else {
                    echo "File sorgente non trovato: $source\n";
                }
            }
        }

        echo "\nCompilazione completata!\n";
    }

    /**
     * Compila un singolo file.
     */
    private static function compileFile($source, $output)
    {
        $content = file_get_contents($source);

        // Determina il tipo del file
        $extension = pathinfo($source, PATHINFO_EXTENSION);

        // Minimizzazione del contenuto
        $minifiedContent = self::minimize($content, $extension);

        // Scrittura nel file di output
        file_put_contents($output, $minifiedContent);

        echo "Compilato: $source -> $output\n";
    }

    /**
     * Minimizza il contenuto in base al tipo (CSS o JS).
     */
    private static function minimize($content, $type)
    {
        if ($type === 'css') {
            // Rimuove commenti e spazi extra dai CSS
            $content = preg_replace('/\s+/', ' ', $content);
            $content = preg_replace('/\/\*.*?\*\//s', '', $content);
        } elseif ($type === 'js') {
            // Rimuove commenti e spazi extra dai JS
            $content = preg_replace('/\/\/.*?(\r?\n)/', '', $content);
            $content = preg_replace('/\/\*.*?\*\//s', '', $content);
            $content = preg_replace('/\s+/', ' ', $content);
        }

        return trim($content);
    }
}

// CLI: esegue il comando passato
if (php_sapi_name() === 'cli') {
    $command = $argv[1] ?? null;

    if ($command === 'cli:minify') {
        Compiler::init();  // Inizializza i file da compilare
        Compiler::compileAll();  // Esegue la compilazione
    } else {
        echo "Comando non riconosciuto. Usa: php app/cli/Compiler.php cli:minify\n";
    }
}