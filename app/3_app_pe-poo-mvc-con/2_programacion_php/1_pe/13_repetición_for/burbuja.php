<?php 
	
// declaración e inicialización de variables y constantes
	$nom_aplicacion = "Calculadora Avanzada";
	$instruc = "Encienda la calculadora";
	$encender = "disabled";
	$menu = 0;
	$contador = 0;	
	$num1 = 0;
	$num2 = 0;
	$num3 = 0;
	$aux = 0;
	$res = "";	
	$band = false;

// entrada
	if (isset($_GET['band'])) {
		$band = boolval($_GET["band"]);
		if ($band) {
			$encender = "";
			$instruc = "Digite tres números / Ascendendente o Descendente / Enviar";
		} 
	} 
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$num1 = $_POST['num1'];
		$num2 = $_POST['num2'];
		$num3 = $_POST['num3'];		
		$menu = $_POST['menu'];
	}
// Proceso
	for ($i=0; $i < 2 ; $i++) { 
		if ($num1 >= $num2) {
			$aux = $num1;
			$num1 = $num2;
			$num2 = $aux;
		}
		if ($num2 >= $num3) {
			$aux = $num2;
			$num2 = $num3;
			$num3 = $aux;
		}
	}
	switch ($menu) {
		case '1':
			$res = "El ordenamiento ascendente es : " . $num1 . " - " . $num2 . " - " . $num3;
			break;
		case '2':
			$res = "El ordenamiento descendente es : " . $num3 . " - " . $num2 . " - " . $num1;
			break;
		default:
			if ($res == "") {
				$res = "";
			} else {
				$res = "Opción Inválida";
			}
			break;
	}	

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
		<div>
			<label for="num1">Primer Número</label>
			<input type="text" name="num1" id="num1" <?php echo $encender ?>>
		</div>
		<div>
			<label for="num2">Segundo Número</label>
			<input type="text" name="num2" id="num2" <?php echo $encender ?>>
		</div>
		<div>
			<label for="num3">Tercer Número</label>
			<input type="text" name="num3" id="num3" <?php echo $encender ?>>
		</div>
		<div>
			<input type="radio" id="ascendente" name="menu" value="1" <?php echo $encender ?>>
			<label for="ascendente">Ascendente</label>
			<input type="radio" id="descendente" name="menu" value="2" <?php echo $encender ?>>
			<label for="descendente">Descendente</label>
		</div>
		<input type="submit" name="submit" value="Enviar" <?php echo $encender ?>>
	</form>
	<h1><?php echo $res ?></h1>	
</body>
</html>