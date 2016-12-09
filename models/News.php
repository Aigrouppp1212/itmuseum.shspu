<?php

class News
{

	public static function getArticles()
	{

		$db = Db::getConnection();

        $query = "SELECT id,title,date FROM articles LIMIT 5";
		$result = pg_query($db, $query);

		$row = array();

		$articlesList = array();

		$i = 0;
		while($row = pg_fetch_array($result, null, PGSQL_ASSOC)) {
			$articlesList[$i]['id'] = $row['id'];
			$articlesList[$i]['title'] = $row['title'];
			$articlesList[$i]['date'] = $row['date'];
			$i++;
		}

		return $articlesList;
	}

	public static function getArticleById($id)
    {
        $db = Db::getConnection();

        $query = "SELECT id, title, date, description FROM articles WHERE id=$id";

        $result = pg_query($db, $query);

        $article = pg_fetch_array($result, null, PGSQL_ASSOC);

        return $article;
    }


}