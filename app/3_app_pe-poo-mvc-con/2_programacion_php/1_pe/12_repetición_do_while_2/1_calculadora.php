<?php 

// declaración e inicialización de variables y constantes
	$nom_aplicacion = "Calculadora";
	$instruc = "";
	$tipo_operacion = "";
	$encender = "disabled";
	$menu = null;
	$num1 = 0;
	$num2 = 0;
	$res = null;
	$band = "";	

// entrada
	if (isset($_GET["band"])) {
		$band = boolval($_GET["band"]);
		if ($band) {			
			$encender = "";
			if (isset($_GET["menu"])) {
				$menu = $_GET["menu"];
				$num1 = $_GET["num1"];
				$num2 = $_GET["num2"];
				$instruc = "Digite los números / seleccione una operación / Enviar";
			}
		}	
	}	

// proceso	
	# Condicional Doble
	if ($band) {
		# Condicional múltiple: switch
		switch ($menu) {
			case 1:
				$res = $num1 + $num2;
				$tipo_operacion = "La Suma es : ";
				break;
			case 2:
				$res = $num1 - $num2;			
				$tipo_operacion = "La Resta es : ";
				break;
			case 3:
				$res = $num1 * $num2;
				$tipo_operacion = "La Multiplicación es : ";
			break;
			case 4:
				if ($num2 == 0) {				
					$res = "Imposible por 0";				
				} else {
					$res = $num1 / $num2;				
				}			
				$tipo_operacion = "La División es : ";
				break;
			default:
				if ($menu == null) {
					$instruc = "Digite los números / seleccione una operación / Enviar";
				} else {
					$instruc = "Opción Incorrecta";
				}
				break;
		}		
	} else {
		$instruc = "Encienda la calculadora";
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
	<h1><?php echo $nom_aplicacion ?></h1>
	<p><?php echo $instruc ?></p>	
	<ul>
		<li><a href="?band=1">Encender calculadora normal</a></li>
		<li><a href="?band=">Apagar calculadora normal</a></li>		
		<li><a href="../index.php">Volver</a></li>
	</ul>
	<hr>
	<form id="calcula" action="" method="GET">
		<input type="hidden" name="band" id="band" value="<?php echo $band; ?>">
		<div>
			<label for="num1">Número Uno</label>
			<input type="text" name="num1" id="num1" <?php echo $encender ?>>
		</div>
		<div>
			<label for="num1">Número Dos</label>
			<input type="text" name="num2" id="num2" <?php echo $encender ?>>
		</div>
		<div>
			<input type="radio" id="suma" name="menu" value="1" <?php echo $encender ?>>
			<label for="suma">Suma</label>
			<input type="radio" id="resta" name="menu" value="2" <?php echo $encender ?>>
			<label for="resta">Resta</label>
			<input type="radio" id="multiplicacion" name="menu" value="3" <?php echo $encender ?>>
			<label for="multiplicacion">Multiplicación</label>		
			<input type="radio" id="division" name="menu" value="4" <?php echo $encender ?>>
			<label for="division">División</label>
		</div>
		<div>			
			<input type="submit" name="submit" id="submit" value="Enviar" <?php echo $encender ?>>
		</div>
	</form>
	<h1><?php echo $tipo_operacion . $res ?></h1>
	<script src="scripts.js"></script>
</body>
</html>