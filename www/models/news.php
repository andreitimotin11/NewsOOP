<?php
/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 04.12.2016
 * Time: 19:23
 */
require_once __DIR__ . "/../classes/DB.php";


class News{
	public $id;
	public $title;
	public $text;
	public static function getAll(){
		$db = new DB;
		return $db->query("SELECT * FROM news", "News");
	}
}
/*
class DataBase{
	public $host = "127.0.0.1";
	public $user = "root";
	public $pass = "";
	public $db = "GB_News";
	function __construct(){
		mysql_connect('localhost', 'root', '');
		mysql_select_db('GB_News');
	}
	function query($sql){
		return mysql_query($sql);
	}

}
function newsGetAll(){
	$db  =  new DataBase();
	$sql = "SELECT * FROM news";
	$res = $db->query($sql);
	$items = mysql_fetch_assoc($res);
	return $items;
}
*/