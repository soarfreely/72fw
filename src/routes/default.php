<?php

use Laravel\Lumen\Routing\Router;

/**@var Router $router */
$router->get('/', function () use ($router) {
    dd(['default' => env('APP_ENV')]);
});
