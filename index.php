<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Authorization, Content-Type,Accept, Origin");

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
$router->group("client");
$router->get("/", "ClientController:findAll");

/*
* CLIENTCONTROLLER
* findById
*/
$router->get("/{id}", "ClientController:findById");

/*
* CLIENTCONTROLLER
* save
*/
$router->post("/save", "ClientController:save");

/*
* CLIENTCONTROLLER
* update
*/
$router->post("/update/{id}", "ClientController:update");

/*
* CLIENTCONTROLLER
* delete
*/
$router->post("/delete/{id}", "ClientController:delete");

/*
* PhoneController
* findAll
*/
$router->group("phone");
$router->get("/", "PhoneController:findAll");

/*
* PhoneController
* findById
*/
$router->get("/{id}", "PhoneController:findById");

/*
* PhoneController
* save
*/
$router->post("/save", "PhoneController:save");

/*
* PhoneController
* update
*/
$router->post("/update/{id}", "PhoneController:update");

/*
* PhoneController
* delete
*/
$router->post("/delete/{id}", "PhoneController:delete");

/*
* PhoneController
* findByClientId
*/
$router->get("/findByClientId/{Client_id}", "PhoneController:findByClientId");

$router->dispatch();
