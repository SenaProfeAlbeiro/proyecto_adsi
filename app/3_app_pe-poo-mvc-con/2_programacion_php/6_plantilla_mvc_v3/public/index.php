<?php 
	// Se carga el 'initiator.php' quien carga las librerías
	// y los ayudantes de la aplicación
	require_once '../app/initiator.php';	
	// Se intancia la clase 'Core' donde se capturan los datos
	// de de la url 'controlador/método/parámetro' y se pasan al método
	// 'call_user_func_array' que sirve para llamar a cualquier Clase / función /
	// y parámetro en toda la aplicación
	$iniciar = new Core;	
?>