<?php

use App\Router;
use App\View;

$router = new Router();
$view = new View();

// $router->addRoute('GET', '/', function () use ($view) {
//     return $view->renderView('app', [
//         'name' => 'alireza tahriri',
//         'email' => 'alirezatahriri4@gmail.com',
//         'password' => md5('p@$$w0rd')
//     ]);
// });

$router->addRouteUsingController('GET', '/', 'MainController@index');

try {
    $router->matchRoute($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
