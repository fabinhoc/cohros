<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class Client extends DataLayer
{
	public function __construct()
	{
		parent::__construct("clients", ["Name", "Email"], "Id", false);
	}

	public function phones()
	{
		return (new Phone())->find("Client_id = :cId", "cId={$this->Id}")->fetch(true);
	}
}
