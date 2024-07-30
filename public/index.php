<?php

include '../vendor/autoload.php';

use App\Controllers\BlogController;

$controller = new BlogController;

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER["REQUEST_METHOD"];

// Basic Routing
if ($uri == '/' && $method == 'GET') {
    $controller->index();
} elseif ($uri == '/create' && $method == 'GET') {
    $controller->create();
} elseif ($uri == '/create' && $method == 'POST') {    
    $controller->store();
} elseif (preg_match('/\/post\/(\d+)/', $uri, $matches)) {
    $controller->show($matches[1]);
}


