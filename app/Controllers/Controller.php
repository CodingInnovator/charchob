<?php

namespace App\Controllers;

use Jenssegers\Blade\Blade;

class Controller
{
    public function hashPassword(string $password) : string
    {
        return md5($password . $_ENV['APP_KEY']);
    }

    public function renderViewFromBlade(string $blade_filename, array $data = []) : void
    {
        $blade = new Blade('resources/views', 'resources/cache');

        echo $blade->render($blade_filename, $data);
    }
}