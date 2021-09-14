<?php 
	
// Declarar e Iniciar variables, constantes, arreglos y objetos
	
	$nom_aplicacion = "2. Factorial";	
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
	<p><a href="index.php">Volver</a></p>
	<hr>
	<ul>		
		<li>Digite el Factorial / Enviar</li>
	</ul>
	<form action="" method="POST">		
		<label for="numero">Factorial</label>
		<input type="text" name="numero" id="numero">
		<input type="submit" name="submit" value="Enviar">
	</form>
	<h1><?php echo $res_global ?></h1>
</body>
</html>