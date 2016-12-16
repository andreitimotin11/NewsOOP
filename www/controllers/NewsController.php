<?php

/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 06.12.2016
 * Time: 18:09
 */
class NewsController
{
	public function actionAll()
	{
		$news = News::getAll();
		$view = new View();
		$view->items = $news;

		echo $view->display("news/all.php");
	}
	
	public function actionOne()
	{
		$id = $_GET['id'];
		$item = News::getOne($id);
		$view = new View();
		$view->assign('items', $item);
		$view->render("news/one.php");
	}
}
