<?php

	// Llama las Clases
	require_once ('PelotaBase.php');
	require_once ('PelotaDeTenis.php');
	require_once ('PelotaDeFutbol.php');
	require_once ('PelotaDeBaloncesto.php');
	

	// Instancias
	$base = new PelotaBase();
	$tenis = new PelotaDeTenis();
	$futbol = new PelotaDeFutbol();
	$baloncesto = new PelotaDeBaloncesto();
	
	
	// Muestra el polimorfismo
	echo '<br>' . $base;
	echo '<br>' . $tenis;
	echo '<br>' . $futbol;
	echo '<br>' . $baloncesto;
	echo '<br>';
	
?>