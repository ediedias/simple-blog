<?php

include '../vendor/autoload.php';

use App\Controllers\BlogController;

$controller = new BlogController;

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Basic Routing
if ($uri == '/' && $_SERVER["REQUEST_METHOD"] == 'GET') {
    $controller->index();
} elseif ($uri == '/create' && ['REQUEST_METHOD' == 'GET']) {
    $controller->create();
}


