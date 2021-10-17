<?php 
	
	require_once 'conection/DataBase.php';
	
	$controller = 'Users';
	
	if (!isset($_REQUEST['c'])) {
		require_once 'controller/' . $controller . '.php';
		$controller = new $controller;
		$controller->crear();		
	} else {
		$controller = $_REQUEST['c'];
		require_once 'controller/' . $controller . '.php';
		$controller = new $controller;
		$action = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'index';
		call_user_func(array($controller, $action));
	}

?>