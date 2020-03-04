<?php

require __DIR__ . "/vendor/autoload.php";

use CoffeeCode\Router\Router;

$router = new Router("http://localhost/cohros");

/*
* Controllers
*/
$router->namespace("Source\Controllers");

/*
* CLIENTCONTROLLER
* findAll
*/
$router->group(null);
$router->get("/", "ClientController:findAll");

/*
* CLIENTCONTROLLER
* findById
*/
$router->group(null);
$router->get("/{id}", "ClientController:findById");

/*
* CLIENTCONTROLLER
* save
*/
$router->group(null);
$router->post("/save", "ClientController:save");

/*
* CLIENTCONTROLLER
* update
*/
$router->group(null);
$router->put("/update/{id}", "ClientController:update");

/*
* CLIENTCONTROLLER
* delete
*/
$router->group(null);
$router->delete("/delete/{id}", "ClientController:delete");

$router->dispatch();
