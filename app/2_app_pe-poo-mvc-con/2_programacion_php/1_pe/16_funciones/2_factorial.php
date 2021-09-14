<?php 
	
// Declarar e Iniciar variables, constantes, arreglos y objetos

	$instrucciones = "Digite el Factorial / Enviar";
	$res_global = '';

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
		if ($_POST['numero'] != null && $_POST['numero'] > 0) {
			$numero = $_POST['numero'];
			$res_global = 'El factorial de ' . $numero . ' es ' . calcular_factorial($numero);
		} else {
			$instrucciones = 'El Factorial no puede ser negativo, nulo o cero';
		}
	}

// Salida
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>2. Factorial</title>
</head>
<body>
	<h1>2. Factorial</h1>
	<p><a href="index.php">Volver</a></p>
	<hr>
	<ul>		
		<li><?php echo $instrucciones ?></li>
	</ul>
	<form action="" method="POST">		
		<label for="numero">Factorial</label>
		<input type="text" name="numero" id="numero">
		<input type="submit" name="submit" value="Enviar">
	</form>
	<h1><?php echo $res_global ?></h1>
</body>
</html>