<?php
	 
	// Llama la Clase
	require_once ('clase.php');

	// Crea instancia de la clase (Objeto -> $jhon)
	$jhon = new Person('Albeiro', 'Ramos','1983-04-01');

	// Muestra en pantalla el objeto
	print_r($jhon);

	// Llama los atributos y métodos públicos
	echo '<br>' . $jhon->firstName;
	echo '<br>' . $jhon->lastName;
	echo '<br>' . $jhon->fullName();

?>