<?php

$routes = include __DIR__ . '/routes.php';
$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$route = $routes[$requestUri] ?? $routes['404'];

if (isset($route['file']) && file_exists(__DIR__ . '/' . $route['file'])) {
    include __DIR__ . '/' . $route['file'];
} else {
    echo $route['content'];
}
