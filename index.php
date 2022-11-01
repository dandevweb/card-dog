<?php

ob_start();
require __DIR__ . "/vendor/autoload.php";

use CoffeeCode\Router\Router;

$route = new Router(url(), "@");

require __DIR__ . "/routes/web.php";


$route->dispatch();

ob_end_flush();