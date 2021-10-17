<?php 
	
// declaración e inicialización de variables y constantes
	$nom_aplicacion = "3. Fibonacci";
	$instruc = "Digite la cantidad de números Fibonacci / Enviar";
	$contador = 0;	
	$num1 = 0;
	$anterior = 0;
	$posterior = 1;
	$auxiliar = 0;	
	$temp = 0;	
	$res = "";		

// entrada	 
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$num1 = $_POST['numero'];		
		$temp = intval($num1);		
	}

// Proceso
	$res = "Los " . $temp . " primeros números de la sucesión de Fibonacci son: ";		

// salida
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
		<li><?php echo $instruc ?></li>
	</ul>
	<form action="" method="POST">		
		<label for="numero">Fibonacci</label>
		<input type="text" name="numero" id="numero">
		<input type="submit" name="submit" value="Enviar">
	</form>
	<h1><?php echo $res ?></h1>
	
	<!-- Sigue el Proceso -->
	<?php 
		do {
			echo " - " . $anterior;
			$auxiliar = $anterior + $posterior;
			$posterior = $anterior;
			$anterior = $auxiliar;
			$contador++;
		} while ($contador < $num1);
	?>
</body>
</html>