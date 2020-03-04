<?php

namespace Source\Controllers;

use Source\Models\Client;

class ClientController
{
	private $model = "";

	public function __construct()
	{
		$this->model = new Client();
	}
	public function findAll($data)
	{
		$result = $this->model->find()->fetch()->data();
		echo json_encode($result);
	}

	public function findById($data)
	{
		$result = $this->model->findById($data["id"])->data();
		echo json_encode($result);
	}

	public function save($data)
	{
		$this->model->Name = $data["Name"];
		$this->model->Email = $data["Email"];
		$this->model->Address = isset($data["Address"]) ? $data["Address"] : '';
		$rs = $this->model->save();
		echo json_encode($rs);
	}

	public function update($data)
	{
		$this->model = $this->model->findById($data["id"]);

		$this->model->Name = $data["Name"];
		$this->model->Email = $data["Email"];
		$this->model->Address = isset($data["Address"]) ? $data["Address"] : '';
		$rs = $this->model->save();
		echo json_encode($rs);
	}

	public function delete($data)
	{
		$this->model = $this->model->findById($data["id"]);
		$rs = $this->model->destroy();
		echo json_encode($rs);
	}
}
