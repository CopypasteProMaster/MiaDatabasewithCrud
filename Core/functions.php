<?php
declare(strict_types=1);

require_once __DIR__ . '/../globals.php';

function dump($string): void {
    echo "<pre>";
    var_dump($string);
    echo "</pre>";
}

function dd($value): never {
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

function abort(int $code = 404): never {
    http_response_code($code);

    require base_path("views/error/$code.php");

    die();
}

function base_path(string $path): string {
    return BASE_PATH . $path;
}

function view(string $path, ...$attributes): mixed {
    extract($attributes);

    return require base_path('views/' . $path);
}