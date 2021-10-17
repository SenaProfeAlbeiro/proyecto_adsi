<?php

// Funciones

	# Calcula la sucesión de Fibonacci / No Devuelve un valor
	function calcular_fibonacci($numero){
		$contador = 0;
		$anterior = 0;
		$posterior = 1;
		$auxiliar = 0;
		if ($numero > 0) {
			echo '<h3>Los ' . $numero . ' primeros números de la sucesión de Fibonacci son:  </h3>';
			do {
				echo ' - ' . $anterior;
				$auxiliar = $anterior + $posterior;
				$posterior = $anterior;
				$anterior = $auxiliar;
				$contador++;			
			} while ($contador < $numero);
		}
	}

// Entrada	 
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
// Declarar e Iniciar variables, constantes, arreglos y objetos	
		$numero = 0;		
		if ($_POST['numero'] != null && $_POST['numero'] > 0) {
			$numero = $_POST['numero'];
			$instrucciones = "Digite la cantidad de números Fibonacci / Enviar";		
		} else {
			$instrucciones = 'El número de la sucesión no puede ser negativo, nulo o cero';
		}
	} 

// Salida
	require_once('../2_vista/3_fibonacci_vista.php');
	echo calcular_fibonacci($numero);
?>