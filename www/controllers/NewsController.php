<?php
class NewsController
{

	public function actionAll()
	{
        $article = NewsModel::findOneByColumn('title', 'Privet');
        var_dump(isset($article));
        die;
        $article = new NewsModel();
        $article->title = 'Privet ';
		$article->text = 'Privet mir!';
		$article->insert();
        var_dump(isset($article->title));
        $db = new DB();

        $res = $db->query('SELECT * FROM news WHERE id=:id',
                          [':id' => 2]);
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
