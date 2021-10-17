<?php 
	
// declaración e inicialización de variables y constantes
	$nom_aplicacion = "Calculadora Avanzada";
	$instruc = "Encienda la calculadora";
	$encender = "disabled";
	$num1 = 0;
	$aux = 0;
	$res = "";
	$factorial = 1;
	$band = false;

// entrada
	if (isset($_GET['band'])) {
		$band = boolval($_GET["band"]);
		if ($band) {
			$encender = "";
			$instruc = "Digite el factorial / Enviar";			
		} 
	} 
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$num1 = $_POST['numero'];
		$aux = $num1;
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
	<h1><?php echo $nom_aplicacion; ?></h1>
	<h3><?php echo $instruc ?></h3>
	<ul>
		<li><a href="?band=1">Encender calculadora avanzada</a></li>
		<li><a href="?band=">Apagar calculadora avanzada</a></li>
		<li><a href="index.php">Volver</a></li>
	</ul>
	<form action="" method="POST">		
		<label for="numero">Factorial</label>
		<input type="text" name="numero" id="numero" <?php echo $encender ?>>
		<input type="submit" name="submit" value="Enviar" <?php echo $encender ?>>
	</form>
	<h1><?php echo $res ?></h1>
</body>
</html>