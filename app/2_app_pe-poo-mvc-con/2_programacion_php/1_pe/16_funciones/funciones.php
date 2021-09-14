<!-- Procesa los datos -->
<?php 

// Declarar e iniciar variables, constantes, arreglos u objetos
	
	$res_global = '';

// Funciones: Proceso

	# Inicia el Proceso y devuelve un valor
	function iniciar($menu, $num1, $num2){
		switch ($menu) {
			case 1:
				$res_local = 'La Suma es: ' . sumar($num1, $num2);			
				break;
			case 2:
				$res_local = 'La Resta es: ' . restar($num1, $num2);			
				break;
			case 3:
				$res_local = 'La Multiplicación es: ' . multiplicar($num1, $num2);
				break;
			case 4:
				$res_local = 'La División es: ' . dividir($num1, $num2);
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

// Entrada
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if (isset($_POST['menu'])) {
		$menu = $_POST['menu'];
		if ($_POST['num1'] != null && $_POST['num2'] != null) {
			$num1 = $_POST['num1'];
			$num2 = $_POST['num2'];
			$res_global = iniciar($menu, $num1, $num2);
		} else {
			$res_global = 'Digite los dos números';
		}		
	} else {
		$res_global = 'Seleccione una opción del menú';
	}
}

// Salida
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h2>FUNCIONES</h2>
	<!-- Envía los Datos -->
	<form action="" method="POST">
		<div>
			<label>Primer número</label>
			<input type="number" name="num1">
		</div>
		<div>
			<label>Segundo número</label>
			<input type="number" name="num2">
		</div>
		<div>
			<input type="radio" name="menu" value="1">
			<label for="suma">Suma</label>
			<input type="radio" name="menu" value="2">
			<label for="resta">Resta</label>
			<input type="radio" name="menu" value="3">
			<label for="multiplicacion">Multiplicación</label>		
			<input type="radio" name="menu" value="4">
			<label for="division">División</label>
		</div>
		<br>
		<div>			
			<input type="submit" value="Enviar">
		</div>
	</form>
	<!-- Muestra los resultados -->
	<h3><?php echo $res_global ?></h3>
</body>
</html>