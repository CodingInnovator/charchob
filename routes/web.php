<?php

use App\Router;
use App\View;

$router = new Router();
$view = new View();

try {
    $router->addRouteUsingController('GET', '/', 'MainController@index');
} catch (Exception $e) {
    echo "Routes Error (web.php): " . $e->getMessage();
}

try {
    $router->matchRoute($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);
} catch (Exception $e) {
    echo "Error: (matchRoute function)" . $e->getMessage();
}
