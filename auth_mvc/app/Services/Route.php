<?php
namespace App\Services;

class Route
{
    private static $routes = [];

    public static function add($uri, $controller, $action, $method = 'GET', $middleware = [])
    {
        self::$routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'action' => $action,
            'method' => $method,
            'middleware' => $middleware
        ];
    }

    public static function get($uri, $controller, $action, $method='GET', $middleware = [])
    {
        self::add($uri, $controller, $action, $method, $middleware);
    }

    public static function post($uri, $controller, $action, $method='POST', $middleware = [])
    {
        self::add($uri, $controller, $action, $method, $middleware);
    }


    public static function handle()
    {
        $requestUri = $_SERVER['REQUEST_URI'];
        $requestMethod = $_SERVER['REQUEST_METHOD'];

        foreach (self::$routes as $route) {
            if ($route['uri'] === $requestUri && $route['method'] == $requestMethod) {

                // handle middleware
                foreach($route['middleware'] as $middleware) {
                    $middlewareClass = new $middleware;
                    $middlewareClass->handle();
                }

                $controllerClass = 'App\Controllers\\' . $route['controller'];
                $action = $route['action'];

                $controller = new $controllerClass();
                $controller->$action();
                return;
            }
        }
        echo '404 - Page not found';
    }
}
