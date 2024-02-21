<?php

namespace App;

class View
{
    public function renderView(string $filename, array $data = []) {
        require_once __DIR__ . "/../resources/views/{$filename}.php";
    }
}