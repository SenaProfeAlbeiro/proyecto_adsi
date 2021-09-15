<?php

// Funciones
	
	# Encender calculadora
	function encender(){
		$encendido_local = '';
		return $encendido_local;		
	}

	# Inicia el Proceso / Llama otras Funciones / Devuelve un valor
	function iniciar($menu, $num1, $num2){
		switch ($menu) {
			case 1:
				$res_local = "La Suma es: " . sumar($num1, $num2);
				break;
			case 2:					
				$res_local = "La Resta es: " . restar($num1, $num2);					
				break;
			case 3:
				$res_local = "La Multiplicación es: " . multiplicar($num1, $num2);
				break;
			case 4:
				$res_local = "La División es: " . dividir($num1, $num2);					
				break;
			default:
				$res_local = 'La opción no existe';
				break;
		}
		return $res_local;
	}

	# Suma
	function sumar($num1, $num2){	
		$suma_local = $num1 + $num2;
		return $suma_local;
	}

	# Resta
	function restar($num1, $num2){
		$resta_local = $num1 - $num2;
		return $resta_local;	
	}

	# Multiplica
	function multiplicar($num1, $num2){
		$multiplica_local = $num1 * $num2;
		return $multiplica_local;	
	}

	# Divide
	function dividir($num1, $num2){
		if ($num2 != 0) {
			$divide_local = $num1 / $num2;			
		} else {
			$divide_local = 'Imposible (No se puede dividir por 0)';
		}		
		return $divide_local;	
	}

// Entrada: GET
	if ($_SERVER['REQUEST_METHOD'] == 'GET') {
		if (isset($_GET["band"])) {
// Declarar e Iniciar variables, constantes, arreglos y objetos
			$res_global = '';
			$band = boolval($_GET["band"]);
			if ($band == 1) {				
				$encendido_global = encender();
				$instrucciones = "Digite los números / Seleccione el Orden / Enviar";
			} else {
				$instrucciones = "Encienda la Calculadora";
				$encendido_global = "disabled";
			}
		}
	}

// Entrada: POST
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$encendido_global = encender();
		$instrucciones = "Digite los números / Seleccione el Orden / Enviar";
		if ($_POST['num1'] != null && $_POST['num2'] != null) {
			if(isset($_POST['menu'])){
				$menu = $_POST['menu'];
				$num1 = $_POST['num1'];
				$num2 = $_POST['num2'];
				$res_global = iniciar($menu, $num1, $num2);
			} else {
				$instrucciones = "Digite los números / Seleccione la Operación";
			}
		} else {
			$instrucciones = "Digite los números";
		}
	}

// Salida	
	require_once('../2_vista/1_calculadora_vista.php');
	echo '<h1>' . $res_global . '</h1>';
	echo '<script src="../assets/js/script_calculadora.js"></script>';
?>