<?php

namespace App\Controllers;

use App\Database;
use App\View;
use Jenssegers\Blade\Blade;

class MainController extends Controller
{
    private $view;

    public function __construct()
    {
        $this->view = new View;
    }

    public function index()
    {
        $this->connectToDatabase();

        $this->renderViewFromBlade('app', [
            'name' => 'alireza tahriri',
            'email' => 'alirezatahriri4@gmail.com',
            'password' => $this->hashPassword('p@$$w0rd'),
        ]);

        // $this->view->renderView("app", [
        //     'name' => 'alireza tahriri',
        //     'email' => 'alirezatahriri4@gmail.com',
        //     'password' => md5('p@$$w0rd' . $_ENV['APP_KEY'])
        // ]);
    }
}
