<?php

/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 14.12.2016
 * Time: 17:36
 */
interface IModel
{
	public static function getAll();
	public static function getOne($id);
}