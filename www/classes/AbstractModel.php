<?php

/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 08.12.2016
 * Time: 17:08
 */
abstract class AbstractModel
{
	protected static $table;
	public static function getAll(){
		$db = new DB;
		return $db->queryAll("SELECT * FROM " . self::$table . ", News");
	}
}