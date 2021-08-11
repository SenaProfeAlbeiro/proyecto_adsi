<?php 	

// declaración e inicialización de variables y constantes
	$nom_aplicacion = "Aplicación";
	$instruc = "Seleccione una opción del menú";

// Salida
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
	<hr>	
	<ol>
		<li><a href="1_calculadora.php?band=">Calculadora</a></li>
		<li><a href="2_factorial.php">Factorial</a></li>
		<li><a href="3_fibonacci.php">Fibonacci</a></li>		
		<li><a href="4_serie_par_impar.php">Serie par o impar</a></li>		
		<li><a href="5_burbuja.php">Burbuja</a></li>		
		<li><a href="6_vector_ordenado_estatico.php">Vector Ordenado (Estático)</a></li>		
		<li><a href="7_vector_ordenado_dinamico.php">Vector Ordenado (Dinámico)</a></li>		
		<li><a href="8_vector_guayabita.php">Guayabita</a></li>
		<li><a href="9_matriz_datos_personales.php">Datos personales (Matriz)</a></li>		
		<li><a href="10_matriz_tiendita.php">Tiendita el Chavo</a></li>		
	</ol>	
</body>
</html>