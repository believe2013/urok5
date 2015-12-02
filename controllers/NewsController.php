<?php

class NewsController
{
	public function actionAll()
	{
        $db = new DB();
        $res = $db->query('SELECT * FROM callback WHERE id=:id', [':id' => 2]);
        var_dump($res);
        die;
        /*
		$news_all = News::getAll();

		$view = new View();
		
		$view->items = $news_all;
		$view->display('news/all.php');
        */
	}
	public function actionOne()
	{
		$id = $_GET['id'];

		$news_one = News::getOne($id);

		$view = new View(); // Объекс отображение
		//$view->assign('item', $news_one); //Параметры
		$view->display('news/one.php'); // Подключение шаблона

		//include __DIR__.'/../views/news/one.php';
	}
}