<?php
class DB{
	public function __construct()
	{
		mysql_connect("localhost", "root",'');
		mysql_select_db('GB_News');
	}
	public function query($sql, $class = 'stdClass'){
		$res = mysql_query($sql);
		if(false ===$res){
			return false;
		}
		$ret = array();
		while ($row = mysql_fetch_object($res, $class)){
			$ret = $row;
		}
		return $ret;
	}
}