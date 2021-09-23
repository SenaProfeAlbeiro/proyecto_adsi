<?php

// Funciones

	# Inicia el Proceso / Llama otras Funciones / Devuelve un valor
	function iniciar($menu, $num1, $num2, $num3){
		if ($num1 != null && $num2 != null && $num3 != null) {
			# Ordena los valores
			for ($i=0; $i < 2; $i++) { 
				# ordena los números: Burbuja 
				if ($num1 >= $num2 ) {					
					$aux = $num1; 
					$num1 = $num2;
					$num2 = $aux;					
				}
				if ($num2 >= $num3) {					
					$aux = $num2; 
					$num2 = $num3;
					$num3 = $aux;					
				}
			}
			switch ($menu) {
				case 1:
					$res_local = "El orden Ascendente: " . $num1 . " - " . $num2 . " - " . $num3;
					break;
				case 2:
					$res_local = "El orden Descendente: " . $num3 . " - " . $num2 . " - " . $num1;
					break;
				default:
					$res_local = 'La opción no existe';
					break;
			}
			return $res_local;
		}
	}

// Entrada	 
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
// Declarar e Iniciar variables, constantes, arreglos y objetos	
		$instrucciones = "Digite tres valores / Seleccione el Orden / Enviar";
		$num1 = null;
		$num2 = null;
		$num3 = null;
		$menu = null;
		$res_global = '';
		# Recibe los datos por post y lo asigna a las variables
		if ($_POST['num1'] != null && $_POST['num2'] != null && $_POST['num3'] != null) {
			if(isset($_POST['menu'])){
				$menu = $_POST['menu'];
				$num1 = $_POST['num1'];
				$num2 = $_POST['num2'];
				$num3 = $_POST['num3'];
				$res_global = iniciar($menu, $num1, $num2, $num3);
			} else {
				$instrucciones = "Digite los números / Seleccione el Orden";
			}
		} else {
			$instrucciones = "Digite los números";
		}
	}	
// salida
	require_once('../2_vista/5_burbuja_vista.php');
	echo '<h1>' . $res_global . '</h1>';
?>