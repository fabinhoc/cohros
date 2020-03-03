<?php

require __DIR__ . "/../vendor/autoload.php";

use Source\Models\Client;

$client = new Client();
$client = $client->findById(3);
$client->destroy();

var_dump($client);
