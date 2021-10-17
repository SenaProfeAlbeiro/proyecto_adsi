<?php 
	
// Declarar e Iniciar variables, constantes, arreglos y objetos	
	
	$instrucciones = "Digite la cantidad de números Fibonacci / Enviar";		
	$numero = 0;

// Funciones

	# Calcula la sucesión de Fibonacci / No Devuelve un valor
	function calcular_fibonacci($numero){
		$contador = 0;
		$anterior = 0;
		$posterior = 1;
		$auxiliar = 0;
		if ($numero > 0) {
			echo 'Los ' . $numero . ' primeros números de la sucesión de Fibonacci son:  ';
			do {
				echo " - " . $anterior;
				$auxiliar = $anterior + $posterior;
				$posterior = $anterior;
				$anterior = $auxiliar;
				$contador++;			
			} while ($contador < $numero);
		}
	}

// Entrada	 
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {		
		if ($_POST['numero'] != null && $_POST['numero'] > 0) {
			$numero = $_POST['numero'];			
		} else {
			$instrucciones = 'El número de la sucesión no puede ser negativo, nulo o cero';
		}
	} 

// Salida
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>3. Fibonacci</title>
</head>
<body>
	<h1>3. Fibonacci</h1>
	<p><a href="index.php">Volver</a></p>
	<hr>
	<ul>		
		<li><?php echo $instrucciones ?></li>
	</ul>
	<form action="" method="POST">		
		<label for="numero">Fibonacci</label>
		<input type="text" name="numero" id="numero">
		<input type="submit" name="submit" value="Enviar">
	</form>	
	<h3><?php echo calcular_fibonacci($numero) ?></h3>
	
</body>
</html>