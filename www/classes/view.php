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
	public function render($template){
		foreach ($this->data as $key => $val)
		{
			$$key = $val;
		}
		ob_start();
		include __DIR__ . "/../views/" . $template;
		$content = ob_get_contents();
		ob_end_clean();
		return $content;
	}
	public function display($template){
		echo $this->render($template);
	}

	public function count()
	{
		// TODO: Implement count() method.
		return count($this->data);
	}
}