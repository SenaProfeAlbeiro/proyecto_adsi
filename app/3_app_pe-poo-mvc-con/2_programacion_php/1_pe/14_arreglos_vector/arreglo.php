<!-- Lógica -->
<?php 
// Declaración e inicio variables, constanstes, arreglos, objetos
$i = 0;
$j = 0;
$semanas = ['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo'];

$semanas_array = array('Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo');
$semanas_array[7] = 15465;

// Entrada de datos


// Proceso


?>

<!-- Vista -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>arreglo</title>
</head>
<body>
	<!-- Salida -->
	<h1>Imprimiendo el Arreglo (1D -> Vector)</h1>
	<?php 
		// While
		echo "Con While <br>";
		while ($i < 7) {
			echo $semanas[$i] . '<br>';
			$i++;
		}

		// Do While
		echo "<br>Con Do While <br>";
		do {
			echo $semanas[$j] . '<br>';
			$j++;	
		} while ($j < 7);

		// For normal
		echo "<br>Con For <br>";
		for ($k=0; $k < 7; $k++) { 
			echo $semanas[$k] . '<br>';
		}

		// Foreach
		echo "<br>Con Foreach <br>";
		foreach ($semanas as $dia) {
			echo $dia . '<br>';
		}
	?>
</body>
</html>