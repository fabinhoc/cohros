<?php

require __DIR__ . "/../vendor/autoload.php";

use Source\Models\Client;

$client = new Client();

$client->Name = "Lucas Cruz";
$client->Email = "lucas.cruz@gmail.com";
$client->Address = "Rua Luis Gonzaga";

$client->save();

var_dump($client);
