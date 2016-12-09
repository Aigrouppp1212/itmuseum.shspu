<?php

    // КОНФИГУРАЦИИ
	error_reporting(E_ALL);
    ini_set('display_errors', 1);


    // Подключаем необходимые системные файлы
    define('ROOT', dirname(__FILE__));
    require_once(ROOT. '/components/Router.php');
    require_once(ROOT. '/components/Db.php');


    // Подключаемся к базе данных




    // Вызываем Router
    $router = new Router;
    $router->run();


