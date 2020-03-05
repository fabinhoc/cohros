<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class Phone extends DataLayer
{
	public function __construct()
	{
		parent::__construct("phones", ['Client_id', 'PhoneNumber'], 'id', false);
	}

	public function add(Client $client, int $phone): Phone
	{
		$this->client_id = $client->Id;
		$this->phone = $phone;

		$this->save();
		return $this;
	}
}
