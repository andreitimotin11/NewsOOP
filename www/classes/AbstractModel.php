<?php

/*
 * Created by PhpStorm.
 * User: Andrei
 * Date: 08.12.2016
 * Time: 17:08
 */

abstract class AbstractModel
{

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
		return $db->query($sql, [':id' => $id]);
	}

}