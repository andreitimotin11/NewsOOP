<?php

/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 09.12.2016
 * Time: 00:06
 */
class View
implements Countable
{
	protected $data = array();
	public function __set($k, $v)
	{
		$this->data[$k] = $v;
	}
	public function __get($k)
	{
		return $this->data[$k];
	}
	public function display($template){
		foreach ($this->data as $key => $val)
		{
			$$key = $val;
		}
		include __DIR__ . "/../views/" . $template;
	}

	/**
	 * Count elements of an object
	 * @link http://php.net/manual/en/countable.count.php
	 * @return int The custom count as an integer.
	 * </p>
	 * <p>
	 * The return value is cast to an integer.
	 * @since 5.1.0
	 */
	public function count()
	{
		// TODO: Implement count() method.
		return count($this->data);
	}
}