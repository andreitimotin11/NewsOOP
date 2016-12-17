<?php

class DB
{
	public function __construct()
	{

		$dbh = new PDO("mysql:dbname=GB_News;host=localhost", "root","");
	}
	
	public function queryAll($sql, $class = 'stdClass')
	{
		$res = mysql_query($sql);
		if (false === $res) {
			return false;
		}
		$ret = array();
		while ($row = mysql_fetch_object($res, $class)) {
			$ret[] = $row;
		}
		return $ret;
	}
	
	public function queryOne($sql, $class = "stdClass")
	{
		$res = mysql_query($sql);
		if (false === $res) {
			return false;
		}
		while ($row = mysql_fetch_object($res, $class)) {
			$ret = $row;
		}
		return $ret;
	}
}