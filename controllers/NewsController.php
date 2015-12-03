<?php

class NewsController
{
	public function actionAll()
	{

        $art = NewsModel::findOneByColumn('name', 'Сегодняd');
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