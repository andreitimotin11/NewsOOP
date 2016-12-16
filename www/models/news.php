<?php

/*
 * Created by PhpStorm.
 * User: Andrei
 * Date: 04.12.2016
 * Time: 19:23
 */
class News extends AbstractModel
{
	public $id;
	public $title;
	public $text;
	
	protected static $table = "news";
	protected static $class = "News";
}