<?php 
	
// declaración e inicialización de variables y constantes
	$nom_aplicacion = "2. Factorial";
	$instruc = "Digite el factorial / Enviar";	
	$num1 = 0;
	$aux = 0;
	$factorial = 1;	
	$res = "";

// entrada	 
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$num1 = $_POST['numero'];		
	}

// Proceso
	while ($num1 > 1) {
		$factorial = $factorial * $num1;
		$num1 = $num1 - 1;
	}
	$res = "El Factorial del número " . $aux . " es " . $factorial;

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
		<label for="numero">Factorial</label>
		<input type="text" name="numero" id="numero">
		<input type="submit" name="submit" value="Enviar">
	</form>
	<h1><?php echo $res ?></h1>
</body>
</html>