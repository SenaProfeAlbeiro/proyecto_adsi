<?php 

// Declarar e Iniciar variables, constantes, arreglos y objetos
	
	$nom_aplicacion = "1. Calculadora";
	$instrucciones = "Encienda la Calculadora";
	$encendido_global = "disabled";
	$res_global = '';

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
			$band = boolval($_GET["band"]);
			if ($band == 1) {
				$encendido_global = encender();
				$instrucciones = "Digite los números / Seleccione el Orden / Enviar";
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
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $nom_aplicacion ?></title>
</head>
<body>
	<h1><?php echo $nom_aplicacion ?></h1>
	<p><?php echo $instrucciones ?></p>	
	<ul>
		<li><a href="?band=1">Encender calculadora normal</a></li>
		<li><a href="?band=">Apagar calculadora normal</a></li>		
		<li><a href="index.php">Volver</a></li>
	</ul>
	<hr>
	<form id="calcula" action="" method="POST">		
		<div>
			<label for="num1">Número Uno</label>
			<input type="text" name="num1" id="num1" <?php echo $encendido_global ?>>
		</div>
		<div>
			<label for="num1">Número Dos</label>
			<input type="text" name="num2" id="num2" <?php echo $encendido_global ?>>
		</div>
		<div>
			<input type="radio" id="suma" name="menu" value="1" <?php echo $encendido_global ?>>
			<label for="suma">Suma</label>
			<input type="radio" id="resta" name="menu" value="2" <?php echo $encendido_global ?>>
			<label for="resta">Resta</label>
			<input type="radio" id="multiplicacion" name="menu" value="3" <?php echo $encendido_global ?>>
			<label for="multiplicacion">Multiplicación</label>		
			<input type="radio" id="division" name="menu" value="4" <?php echo $encendido_global ?>>
			<label for="division">División</label>
		</div>
		<div>			
			<input type="submit" name="submit" id="submit" value="Enviar" <?php echo $encendido_global ?>>
		</div>
	</form>
	<h1><?php echo $res_global ?></h1>
	<script src="scripts.js"></script>
</body>
</html>