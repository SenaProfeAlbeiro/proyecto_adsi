<?php

// Funciones
	
	# Calcula el factorial / Devuelve un valor
	function calcular_factorial($numero){		
		$factorial = 1;
		while ($numero > 1) {
			$factorial = $factorial * $numero;
			$numero = $numero - 1;
		}
		return $factorial;
	}

// Entrada
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
// Declarar e Iniciar variables, constantes, arreglos y objetos
		$res_global = '';
		if ($_POST['numero'] != null && $_POST['numero'] > 0) {
			$instrucciones = "Digite el Factorial / Enviar";
			$numero = $_POST['numero'];
			$res_global = 'El factorial de ' . $numero . ' es ' . calcular_factorial($numero);
		} else {
			$instrucciones = 'El Factorial no puede ser negativo, nulo o cero';
		}
	} 

// Salida
	require_once ('../2_vista/2_factorial_vista.php');
	echo '<h1>' . $res_global . '</h1>';
?>