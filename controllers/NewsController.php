<?php

class NewsController
{
	public function actionAll()
	{

      /* $art = new NewsModel;
        $art->name = 'Привет2';
        $art->phone = 'Привет мир2';
        $art->insert();
        die;*/
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