<?php
declare(strict_types=1);

$config = require(__DIR__ . '/../config.php');

use Core\Router;

$prefix = '/api';


Router::post($prefix . '/task', function () {});