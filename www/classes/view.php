<?php

/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 09.12.2016
 * Time: 00:06
 */
class View
{
	protected $data = array();
	public function __set($k, $v)
	{
		$this->data[$k] = $v;
	}

	public function display($template){
		foreach ($this->data as $key => $val)
		{
			$$key = $val;
		}
		include __DIR__ . "/../views/" . $template;
	}
}