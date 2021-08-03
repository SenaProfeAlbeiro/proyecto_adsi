<?php 

// declaración de variables
	$nom_aplicacion;
	$num1;
	$num2;
	$suma;
	$resta;
	$multiplicacion;
	$division;

// inicialización de variables
	# String = Cadena de Texto
	$nom_aplicacion = "Calculadora";
	# Integer = Números Enteros
	$num1 = 2;
	$num2 = 4;	

// entrada

// proceso
	$suma = $num1 + $num2;
	$resta = $num1 - $num2;
	$multiplicacion = $num1 * $num2;
	$division = $num1 / $num2;	

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
</body>
</html>