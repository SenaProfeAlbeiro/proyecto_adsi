<?php 

// declaración e inicialización de variables y constantes
	$nom_aplicacion = "1. Calculadora";
	$instruc = "";
	$tipo_operacion = "";
	$encender = "disabled";
	$menu = null;
	$num1 = null;
	$num2 = null;	
	$res = null;
	$band = null;

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

// Proceso
	# Validar datos
	echo '<br>Bandera: ' . $band;
	echo '<br>Menú: ' . $menu;
	$res = principal($band, $menu, $num1, $num2);
	echo '<br>Función Principal: ' . principal($band, $menu, $num1, $num2);

// funciones

	# Función principal
	function principal($band, $menu, $num1, $num2){
		$num1 = $num1;
		$num2 = $num2;	
		if ($band) {
			# Condicional múltiple: switch
			switch ($menu) {
				case 1:
					return sumar($num1, $num2);
					$tipo_operacion = "La Suma es : ";
					break;
				case 2:
					return restar($num1, $num2);
					$tipo_operacion = "La Resta es : ";
					break;
				case 3:
					return multiplicar($num1, $num2);				
					$tipo_operacion = "La Multiplicación es : ";
					break;
				case 4:
					return dividir($num1, $num2);			
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
	}

	# Función Sumar
	function sumar($num1, $num2){
		$res = $num1 + $num2;
		return $res;
	}
	# Función Restar
	function restar($num1, $num2){
		$res = $num1 - $num2;
		return $res;
	}
	# Función Multiplicar
	function multiplicar($num1, $num2){
		$res = $num1 * $num2;
		return $res;
	}
	# Función Dividir
	function dividir($num1, $num2){
		if ($num2 == 0) {				
			$res = "Imposible por 0";				
		} else {
			$res = $num1 / $num2;				
		}		
		return $res;
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
		<li><a href="index.php">Volver</a></li>
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