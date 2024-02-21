<?php

use App\Router;

$router = new Router();

$router->addRoute('GET', '/', function () {
    echo "Charchob Framework";
});

try {
    $router->matchRoute($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}