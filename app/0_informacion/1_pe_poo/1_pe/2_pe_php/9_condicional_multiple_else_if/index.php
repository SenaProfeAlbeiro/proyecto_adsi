<?php 

// declaración e inicialización de variables y constantes
	# Constantes
	define('PI', 3.1416);
	# String = Cadena de Texto
	$nom_aplicacion = "Calculadora";
	$tipo_operacion = "";
	# Integer = Números Enteros
	$menu = 1;
	$num1 = 2;
	# Double = Números Decimales
	$num2 = PI;
	# Operaciones aritméticas básicas
	$res = 0.0;
	# Boolean = True (1) / False (null ó '0')
	$eval = true;
	$band = false;

// entrada

// proceso
	# Atajo if_else
	$eval = (isset($eval)) ? $band = $eval : $band;
	# Condicional Doble
	if ($band) {
		# Condicional múltiple: elseif
		if ($menu == 1) {
			$res = $num1 + $num2;
			$tipo_operacion = "La Suma es ";
		} elseif ($menu == 2) {
			$res = $num1 - $num2;			
			$tipo_operacion = "La Resta es ";
		} elseif ($menu == 3) {
			$res = $num1 * $num2;
			$tipo_operacion = "La Multiplicación es ";
		} elseif ($menu == 4) {
			$res = $num1 / $num2;			
			$tipo_operacion = "La División es ";
		} else{
			$res = "Opción Invalida";
		}
	} else {
		$menu = "Nula";		
		$res = "No se efectúo ninguna operación";	
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
	<ul>
		<li>1. Suma</li>
		<li>2. Resta</li>
		<li>3. Multiplicación</li>
		<li>4. División</li>
	</ul>
	<h2><?php echo "La opción de menú es " . $menu ?></h2>
	<h2><?php echo $tipo_operacion . $res ?></h2>	
	<ul>
		<li>1 = Verdadero</li>
		<li>null = Falso (Sin valor)</li>
	</ul>
	<h2><?php echo "\$band es " . gettype($band) . " = " . $band?></h2>	
</body>
</html>