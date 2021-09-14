<?php 
	
// Declarar e Iniciar variables, constantes, arreglos y objetos
	$res_global = '';

// Funciones

	# Inicia el Proceso / Devuelve un valor
	function iniciar($numero){		
		$factorial = 1;
		while ($numero > 1) {
			$factorial = $factorial * $numero;
			$numero = $numero - 1;
		}
		return $factorial;
	}

// Entrada
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		if ($_POST['numero'] != null) {
			$numero = $_POST['numero'];
			$res_global = 'El factorial de ' . $numero . ' es ' . iniciar($numero);
		}
	}

// Salida
	require_once '../2_vista/2_factorial_vista.php';
	echo '<h1>' . $res_global . '</h1>'
?>
