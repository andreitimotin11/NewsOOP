<?php

/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 06.12.2016
 * Time: 18:09
 */

require_once __DIR__ . "/../models/News.php";

class NewsController
{
	public function actionAll(){
		$items = News::getAll();
		include __DIR__ . "/../views/news/all.php";
	}
	public function actionOne(){
		$id = $_GET['id'];
		$item = News::getOne();
		include __DIR__ . "/../views/news/one.php";
	}
}
