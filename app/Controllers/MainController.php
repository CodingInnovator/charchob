<?php

namespace App\Controllers;

use App\View;
use Jenssegers\Blade\Blade;

class MainController
{
    private $view;
    private $blade;

    public function __construct()
    {
        $this->view = new View;
        $this->blade = new Blade('resources/views', 'resources/cache');
    }

    public function index()
    {
        echo $this->blade->render('app', [
            'name' => 'alireza tahriri',
            'email' => 'alirezatahriri4@gmail.com',
            'password' => md5('p@$$w0rd' . $_ENV['APP_KEY'])
        ]);

        // $this->view->renderView("app", [
        //     'name' => 'alireza tahriri',
        //     'email' => 'alirezatahriri4@gmail.com',
        //     'password' => md5('p@$$w0rd' . $_ENV['APP_KEY'])
        // ]);
    }
}
