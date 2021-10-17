<?php 

// declaración e inicialización de variables y constantes
	# Constantes
	define('PI', 3.1416);
	# String = Cadena de Texto
	$nom_aplicacion = "Calculadora";
	# Integer = Números Enteros
	$num1 = 2;
	# Double = Números Decimales
	$num2 = PI;
	# Operaciones aritméticas básicas
	$suma = 0.0;
	$resta = 0.0;
	$multiplicacion = 0.0;
	$division = 0.0;
	# Boolean = True (1) / False (null ó '0')
	$eval = true;
	$band = false;

// entrada

// proceso
	# Atajo if_else
	$eval = (isset($eval)) ? $band = $eval : $band;
	# Condicional Doble
	if ($band) {
		$suma = $num1 + $num2;
		$resta = $num1 - $num2;
		$multiplicacion = $num1 * $num2;
		$division = $num1 / $num2;		
	} else {
		$suma = "No se efectúo la suma";
		$resta = "No se efectúo la resta";
		$multiplicacion = "No se efectúo la multiplicación";
		$division = "No se efectúo la división";
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
	<h2><?php echo "La Suma es: " . $suma ?></h2>
	<h2><?php echo "La Resta es: " . $resta ?></h2>
	<h2><?php echo "La Multiplicación es: " . $multiplicacion ?></h2>
	<h2><?php echo "La División es: " . $division ?></h2>
	<ul>
		<li>1 = Verdadero</li>
		<li>null = Falso (Sin valor)</li>
	</ul>
	<h2><?php echo "\$band es " . gettype($band) . " = " . $band?></h2>	
</body>
</html>