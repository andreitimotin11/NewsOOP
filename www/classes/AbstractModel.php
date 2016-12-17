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

	public static function getTable(){
		return self::$table;
	}
}