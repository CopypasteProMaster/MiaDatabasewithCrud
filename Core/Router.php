<?php
declare(strict_types=1);

namespace Core;

class Router {
    protected static array $routes = [];

    private static function add(string $method, string $uri, callable $controller): void {
        self::$routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => $method
        ];
    }

    public static function get(string $uri, callable $controller): void {
        self::add('GET', $uri, $controller);
    }

    public static function post(string $uri, callable $controller): void {
        self::add('POST', $uri, $controller);
    }

    public static function put(string $uri, callable $controller): void {
        self::add('PUT', $uri, $controller);
    }

    public static function delete(string $uri, callable $controller): void {
        self::add('DELETE', $uri, $controller);
    }

    public static function route(string $uri, string $method) {
        foreach (self::$routes as $route) {
            if ($route['uri'] === $uri && $route['method'] === strtoupper($method)) {
                return $route['controller']();
            }
        }
        self::abort();
    }

    protected static function abort($code = 404): never {
        http_response_code($code);

        require base_path("views/error/$code.php");

        die();
    }
}