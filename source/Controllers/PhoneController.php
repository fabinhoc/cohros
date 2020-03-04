<?php

namespace Source\Controllers;

use Source\Models\Phone;

class PhoneController
{
	private $model = "";

	public function __construct()
	{
		$this->model = new Phone();
	}
	public function findAll()
	{
		$result = $this->model->find()->fetch(true);

		$arr = [];
		foreach ($result as $key => $resultItem) {
			$arr[$key] = $resultItem->data();
		}

		echo json_encode($arr);
	}

	public function findById($data)
	{
		$result = $this->model->findById($data["id"])->data();
		echo json_encode($result);
	}

	public function save($data)
	{
		$this->model->Client_id = $data["Client_id"];
		$this->model->PhoneNumber = $data["PhoneNumber"];
		$rs = $this->model->save();
		echo json_encode($rs);
	}

	public function update($data)
	{
		$this->model = $this->model->findById($data["id"]);

		$this->model->PhoneNumber = $data["PhoneNumber"];
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
