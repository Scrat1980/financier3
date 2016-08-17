<?php

namespace app\models;

class Shop extends \yii\db\ActiveRecord
{
	public $id_shop;
	public $name;

	public function getShops()
	{
		$query = $this->find()
		->select('*')
		->from('shop');

		$result = $query->asArray()->all();

		return $result;
	}
}