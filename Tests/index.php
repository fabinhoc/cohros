<?php
require __DIR__ . "/../vendor/autoload.php";

use Source\Models\Client;
use Source\Models\Phone;

$client = new Client();
$phone = new Phone();

// $list = $client->find()->fetch(true);
// $listPhones = $phone->find()->fetch(true);
$rs = $phone->find("Client_id = :Client_id", "Client_id=13")->fetch(true);
var_dump($rs);

/** @var $clientItem Client */
// foreach ($list as $clientItem) {
// 	var_dump($clientItem->data());
// 	$phones = $clientItem->phones();
// 	foreach ($phones as $phone) {
// 		var_dump($phone->data());
// 	}
// }
