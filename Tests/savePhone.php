<?php

require __DIR__ . "/../vendor/autoload.php";

use Source\Models\Phone;

$phone = new Phone();

$phone->Client_id = 13;
$phone->PhoneNumber = 11212121;

$phone->save();

var_dump($phone);
