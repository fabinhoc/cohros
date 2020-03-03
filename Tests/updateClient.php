<?php

require __DIR__ . "/../vendor/autoload.php";

use Source\Models\Client;

$client = new Client();
$client = $client->findById(3);
$client->Name = "Rafael Cruz";
$client->Email = "Rafael.cruz@gmail.com";
$client->Address = "Rua Luis Gonzaga";

$client->save();

var_dump($client);
