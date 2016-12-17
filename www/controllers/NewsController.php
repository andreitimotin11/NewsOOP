<?php
class NewsController
{

	public function actionAll()
	{
		echo NewsModel::getTable();
		/*
		$news = News::getAll();
		$view = new View();
		$view->items = $news;

		echo $view->display("news/all.php");
		*/
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
