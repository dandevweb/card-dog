<?php

$route->namespace("App\Controllers");

$route->get("/", "HomeController@index");

$route->get('/breeds/image/{breed}', "HomeController@image");