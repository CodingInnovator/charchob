<?php

namespace App\Controllers;

use App\Database;
use Jenssegers\Blade\Blade;

class Controller
{
    public function connectToDatabase()
    {
        $database = new Database($_ENV['DB_HOST'], $_ENV['DB_PORT'], $_ENV['DB_NAME'], $_ENV['DB_USERNAME'], $_ENV['DB_PASSWORD']);
        $database->connect();
    }

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