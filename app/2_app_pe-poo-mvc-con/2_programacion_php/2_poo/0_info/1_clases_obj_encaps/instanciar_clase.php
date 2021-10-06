<?php

	// Llama la Clase
	require_once ('Person.php');

	// Crea instancia de la clase (Objeto -> $jhon)
	$jhon = new Person('Juan', 'Ramírez','1990-12-01');

	// Muestra en pantalla el objeto
	print_r($jhon);

	// Modificar propiedades o métodos (si es public)
	$jhon->firstName = 'Albeiro';
	$jhon->lastName = 'Ramos';
	$jhon->setDateOfBirth('1983-04-01');

	// Llama los atributos y métodos públicos y los Muestra
	echo '<br>' . $jhon->firstName;
	echo '<br>' . $jhon->lastName;
	echo '<br>' . $jhon->fullName() . '. Nació en ' . $jhon->getDateOfBirth();

?>