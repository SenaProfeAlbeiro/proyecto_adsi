<?php

	// Llama las Clases
	require_once ('Vehiculo.php');
	require_once ('Moto.php');

	// Instancias
	$vehiculo = new Vehiculo();
	$moto = new Moto();
	
	// Muestra atributos o métodos de la Clase Vehículo
	echo '<br>' . $vehiculo->estado();
	echo '<br>' . $vehiculo->encender();
	echo '<br>' . $vehiculo->estado();
	echo '<br>';

	// Muestra atributos o métodos de la Clase Vehículo
	echo '<br>' . $moto->estado();
	echo '<br>' . $moto->encender();
	echo '<br>' . $moto->estadoMoto();
?>