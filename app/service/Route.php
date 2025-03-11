<?php
/**
 * @package     2minutes-site
 * @author      alessio tortolini
 * @copyright   Copyright (c) 2024-2025, alessio tortolini
 * @license     MIT License
 * @version     1.0.0
 * @link        https://github.com/alestormoody/2minutes-site
 *
 * Route logic
 */
namespace App\Service;

class Route
{
    private static $routes = [];

    // Registra una route GET
    public static function get($uri, $callback)
    {
        self::$routes['GET'][$uri] = $callback;
    }

    // Registra una route POST
    public static function post($uri, $callback)
    {
        self::$routes['POST'][$uri] = $callback;
    }

    // Registra una route PUT
    public static function put($uri, $callback)
    {
        self::$routes['PUT'][$uri] = $callback;
    }

    // Registra una route DELETE
    public static function delete($uri, $callback)
    {
        self::$routes['DELETE'][$uri] = $callback;
    }

    // Esegue la route corrispondente
    public static function run()
    {
        $method = $_SERVER['REQUEST_METHOD'];
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        if (isset(self::$routes[$method][$uri])) {
            call_user_func(self::$routes[$method][$uri]);
        } else {
            http_response_code(404);
            view('page.404');
        }
    }
}