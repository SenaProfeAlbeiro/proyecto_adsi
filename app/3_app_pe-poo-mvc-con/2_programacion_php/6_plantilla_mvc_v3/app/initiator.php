<?php	
	require_once 'config/config.php';
	require_once 'helpers/url_helper.php';
	
	// require_once 'libraries/Core.php';
	// require_once 'libraries/Controller.php';
	// require_once 'libraries/Connection.php';

	// Autoload php: Reemplaza escribir cada una de las clases de la librería
	spl_autoload_register(function($nombreClase){
		require_once 'libraries/' . $nombreClase . '.php';
	});
?>