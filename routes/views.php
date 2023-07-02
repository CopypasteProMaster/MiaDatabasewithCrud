<?php
declare(strict_types=1);

$config = require(__DIR__ . '/../config.php');

use Core\Router;

Router::get('/', function () {
    return view('index.php', wew: "hahaha");
});

Router::get('/timeline', function () {});