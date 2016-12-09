<?php


include_once '/models/News.php';

class NewsController
{


    public function actionIndex()
	{
		$articles = array();
		$articles = News::getArticles();
		
		require_once(ROOT. '/views/news/index.php');

		return true;
	}

	public function actionView($id)
	{
	    $article = array();
	    $article = News::getArticleById($id);

	    $article['date'] = substr($article['date'], 0, 10);

		require_once(ROOT. '/views/news/view.php');

		return true;
	}


}