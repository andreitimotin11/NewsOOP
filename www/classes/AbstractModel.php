<?php

/*
 * Created by PhpStorm.
 * User: Andrei
 * Date: 08.12.2016
 * Time: 17:08
 */

abstract class AbstractModel
{
	protected $data = [];

	public function __set($k, $v)
	{
		$this->data[$k] = $v;
	}
	public function __get($k)
	{
		return $this->data[$k];
	}

	static protected $table;


	public static function findAll()
	{
		$class = get_called_class();
		$sql = 'SELECT * FROM ' . static::$table;
		$db = new DB();
		$db->setClassName($class);
		return $db->query($sql);
	}

	public static function findOneByPk($id)
	{
		$sql = 'SELECT * FROM ' . static::$table . ' WHERE id=:id';
		$db = new DB();
		return $db->query($sql, [':id' => $id])[0];
	}


	public function insert()
	{
		$cols = array_keys($this->data);
		var_dump($cols);

		$sql = 'INSERT INTO ' . static::$table . ' () VALUES ()';
	}

}