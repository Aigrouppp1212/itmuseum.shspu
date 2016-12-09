<?php

class Db
{

	public static function getConnection()
	{

		$paramsPath = ROOT. '/components/db_params.php';
		$params = include($paramsPath);

		$db = pg_connect("host=$params[host] port=$params[port] dbname=$params[dbname] user=$params[user] password=$params[password]");

		return $db;

	}



}