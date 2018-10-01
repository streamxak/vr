<?php
	//Общие настройки
	ini_set('display_errors', 1);
	error_reporting(E_ALL);
	
	session_start();

	//Подключение файлов
	define('ROOT', dirname(__FILE__));
	require_once(ROOT.'/components/autoload.php');

	//Вызов route
	$router = new router();
	$router->run();
?>