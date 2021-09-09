<?php 
	
// declaración e inicialización de variables y constantes
	$nom_aplicacion = "Calculadora Avanzada";
	$instruc = "Encienda la calculadora";
	$encender = "disabled";
	$contador = 0;	
	$num1 = 0;
	$anterior = 0;
	$posterior = 1;
	$auxiliar = 0;
	$res = "";	
	$band = false;

// entrada
	if (isset($_GET['band'])) {
		$band = boolval($_GET["band"]);
		if ($band) {
			$encender = "";
			$instruc = "Digite la cantidad de números Fibonacci / Enviar";			
		} 
	} 
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$num1 = $_POST['numero'];		
	}

// Proceso
	$res = "Los " . $num1 . " primeros números de la sucesión de Fibonacci son: ";

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
		<label for="numero">Fibonacci</label>
		<input type="text" name="numero" id="numero" <?php echo $encender ?>>
		<input type="submit" name="submit" value="Enviar" <?php echo $encender ?>>
	</form>
	<h1><?php echo $res ?></h1>
	
	<!-- Sigue el Proceso -->
	<?php
	 
	do {
		echo " - " . $anterior; // Imprime el - 0 - 1 - 1 - 2 - 3
		$auxiliar = $anterior + $posterior; // $auxiliar = 3 + 2 = 5;
		$posterior = $anterior; // $posterior = 3; 
		$anterior = $auxiliar; // $anterior = 5;
		$contador++; // 5
	} while ($contador < $num1); // $num1 = 5
	
	?>
</body>
</html>