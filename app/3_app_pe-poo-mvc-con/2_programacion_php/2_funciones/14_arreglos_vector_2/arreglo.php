<!-- Lógica -->
<?php 
// Declaración e inicio variables, constanstes, arreglos, objetos
$i = 0;
$j = 0;
# Declaración de Arreglos 
$semanas = ['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo'];
$semanas_array = array('Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo');

# Arreglos asociativos
$persona = array(
	'nombre' => 'Albeiro',
	'apellido' => 'Ramos',
	'telefono' => '3183888425',
	'edad' => 38,
	'pais' => 'Colombia'
);

#Ingresar datos a un arreglo de forma sencilla
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
	<h1>Imprimir dato de un arreglo</h1>
		Nombre: <?php echo $persona['nombre']; ?> <br>
		Apellidos: <?php echo $persona['apellido']; ?> <br>	
	<table border="1">
	  <tr>
	    <th>nombres</th>
	    <th>apellidos</th>
	    <th>telefono</th>
	    <th>edad</th>
	    <th>pais</th>
	  </tr>
	  <tr>
	    <?php 
	    	foreach ($persona as $dato) {
	    		echo "<th>$dato</th>";
	    	}
	    ?>	    
	  </tr>	  
	</table>
	<hr>

	<!-- Recorriendo arreglos -->
	<h1>Imprimiendo el Arreglo (1D -> Vector)</h1>
	<?php
		// Contar valores en un arreglo
		echo count($semanas) . "<br>";
		echo count($semanas_array) . "<br>";
		echo count($persona) . "<br>";
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

		foreach ($persona as $datos) {
			echo $datos;
		}

	?>
</body>
</html>