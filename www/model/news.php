<?php
/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 04.12.2016
 * Time: 19:23
 */
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
class News{
	public $title;
	public $author;
	public $text;
	public $date;

}
function newsGetAll(){
	$db  =  new DataBase();
	$sql = "SELECT * FROM news";
	$res = $db->query($sql);
	$items = mysql_fetch_assoc($res);
	return $items;
}