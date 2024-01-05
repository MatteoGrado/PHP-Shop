<?php

    use App\WebShop\app\Router\Router;

    $router = new Router();

    $router->root('/', function () {
        return "Hello World!";
    });

    return $router;