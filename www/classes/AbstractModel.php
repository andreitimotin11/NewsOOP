<?php

/*
 * Created by PhpStorm.
 * User: Andrei
 * Date: 08.12.2016
 * Time: 17:08
 */

abstract class AbstractModel
{
	protected $data = [];

	public function __set($k, $v)
	{
		$this->data[$k] = $v;
	}
	public function __get($k)
	{
		return $this->data[$k];
	}

	public function __isset($k)
    {
        return isset($this->data[$k]);
    }

    static protected $table;


	public static function findAll()
	{
		$class = get_called_class();
		$sql = 'SELECT * FROM ' . static::$table;
		$db = new DB();
		$db->setClassName($class);
		return $db->query($sql);
	}

	public static function findOneByPk($id)
	{
        $class = get_called_class();
		$sql = 'SELECT * FROM ' . static::$table . ' WHERE id=:id';
		$db = new DB();
        $db->setClassName($class);
		return $db->query($sql, [':id' => $id])[0];
	}

	public static function findOneByColumn($column, $value){
        $db = new DB();
        $db->setClassName(get_called_class());
        $sql = 'SELECT * FROM ' . static::$table . ' WHERE ' . $column . '=:value';
        $res = $db->query($sql, [':value' => $value]);
        if(!empty($res))
            return $res[0];
    return false;
}

	public function insert()
	{
		$cols = array_keys($this->data);
		//$data = [];
        foreach ($cols as $col) {
            $ins[] = ":" . $col;
            $data[':' . $col] = $this->data[$col];
        }
		$sql = '
          INSERT INTO ' . static::$table . ' 
          (' . implode(', ', $cols) . ')
          VALUES 
          (' . implode(', ', $ins) . ')
          ';
        $db = new DB();
        $db->execute($sql, $data);
        $this->id = $db->lastInsertId();
    }
    public function update(){
	    $cols = [];
        foreach ($this->data as $k => $v) {
            if('id' == $k) continue;
            $cols = $k . '=:' . $k;
        }
        var_dump($cols);die;
	    $sql = '
	        UPDATE ' . static::$table . '
	        SET ' .implode(', ', $cols) . '
	        WHERE id=:id
	    ';
    }

}