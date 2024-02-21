<?php

use Symfony\Component\Dotenv\Dotenv;

require __DIR__ . "/vendor/autoload.php";

/* add Symfony Dotenv parses .env files to make environment 
 * variables stored in them accessible via $_SERVER or $_ENV. 
 */
$dotenv = new Dotenv();
$dotenv->overload(__DIR__.'/.env');

require __DIR__ . "/app/bootstrap.php";