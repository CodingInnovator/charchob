<?php

namespace App\Controllers;

use App\View;

class MainController
{
    private $view;

    public function __construct()
    {
        $this->view = new View;
    }

    public function index()
    {
        $this->view->renderView("app", [
            'name' => 'alireza tahriri',
            'email' => 'alirezatahriri4@gmail.com',
            'password' => md5('p@$$w0rd' . $_ENV['APP_KEY'])
        ]);
    }
}
