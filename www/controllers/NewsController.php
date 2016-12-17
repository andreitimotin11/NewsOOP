<?php
class NewsController
{

	public function actionAll()
	{
		var_dump(
			NewsModel::findAll()
		);
		die;
		$db = new DB();

		$res = $db->query('SELECT * FROM news WHERE id=:id',
		                  [':id' => 2]);
		//var_dump($res);
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
