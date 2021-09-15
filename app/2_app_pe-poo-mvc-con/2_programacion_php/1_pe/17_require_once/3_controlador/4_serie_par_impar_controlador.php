<?php

// Funciones	

	# Inicia el Proceso / Llama otras Funciones / Devuelve un valor
	function iniciar($menu, $num1, $num2){
		if ($num1 != $num2) {
			# ordena los números		
			if ($num1 > $num2) { // $num1 = 200, $num2 = 20;
				$aux = $num1; // $aux = 200;
				$num1 = $num2; // $num1 = 20
				$num2 = $aux; // $num2 = 200 
			}
			switch ($menu) {
				case 1:
					organizar_par($num1, $num2);
					break;
				case 2:
					organizar_impar($num1, $num2);
					break;
				default:
					$res_local = 'La opción no existe';
					break;
			}
		}
	}

	# Serie Par
	function organizar_par($num1, $num2){
		$res_local = "La serie Par de " . $num1 . " a " . $num2 . " es: ";
		echo "<h1> $res_local </h1>";
		for ($i=$num1; $i <= $num2; $i++) { // ($i = 20; 22 <= 200; $i++ = 22)
			if ($i % 2 == 0) { // 22 % 2 = 0 == 0
				echo " - " . $i; // Imprimiendo el valor de $i;
			}
		}
	}

	# Serie Impar
	function organizar_impar($num1, $num2){
		$res_local = "La serie Impar de " . $num1 . " a " . $num2 . " es: ";
		echo "<h1> $res_local </h1>";
		for ($i=$num1; $i <= $num2; $i++) { 
			if ($i % 2 != 0) {
				echo " - " . $i;
			}
		}
	}

// entrada	 
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
// Declarar e Iniciar variables, constantes, arreglos y objetos
		$instrucciones = "Digite el valor mínimo y máximo de la Serie / Seleccione si es par o impar / Enviar";
		$num1 = null;	
		$num2 = null;
		$menu = 0;
		# Evalúa que los controles estén usados (tengan algún valor)
		if ($_POST['num1'] != null && $_POST['num2'] != null) {
			if(isset($_POST['menu'])){
				$menu = $_POST['menu'];
				$num1 = $_POST['num1'];
				$num2 = $_POST['num2'];
			} else {
				$instrucciones = "Digite los números / Seleccione la Serie";
			}
		} else {
			$instrucciones = "Digite los números";
		}
	}

// salida
	require_once('../2_vista/4_serie_par_impar_vista.php');
	echo iniciar($menu, $num1, $num2)
?>