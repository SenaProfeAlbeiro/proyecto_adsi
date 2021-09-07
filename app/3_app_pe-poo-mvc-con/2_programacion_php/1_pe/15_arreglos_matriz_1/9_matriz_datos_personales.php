<?php 
// declaración e inicialización de variables, constantes y arreglos
	$nom_aplicacion = "9. Matriz Datos Personales";
	$numero = 1;
	$aux = 1;
	$datos_personales = array(
		array("Nro", "Nombre", "Sexo", "Cumpleaños", "Estado Civil", "Edad")
	);

// entrada 
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		# Recibe el numero
		$numero = $_POST['numero'];
		$datos_nuevos = $_POST['datos_personales'];		
		$aux = $numero + 1;

		# Recibe el Nombre del Participante				
		// $datos_nuevos = array($_POST['numero'], $_POST['nombre'], $_POST['sexo'], $_POST['cumple'], $_POST['estado'], $_POST['telefono']);
			
// Proceso
		# Almacena los datos
		for ($i= $numero ; $i < $aux ; $i++) {
			$datos_personales[$i][0] = $_POST['numero'];
			$datos_personales[$i][1] = $_POST['nombre'];
			$datos_personales[$i][2] = $_POST['sexo'];
			$datos_personales[$i][3] = $_POST['cumple'];
			$datos_personales[$i][4] = $_POST['estado'];
			$datos_personales[$i][5] = $_POST['telefono'];
		}		
		
		echo "<br>" . $numero;
		echo "<br>" . $aux;
		echo "<br>";
		$numero++;
		
	}	
	for ($i=0; $i < $aux ; $i++) { 
		for ($j=0; $j < 6 ; $j++) { 
			echo $datos_personales[$i][$j] . " - ";
		}
		echo "<br>";
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
	<p><a href="index.php">Volver</a></p>
	<hr>

	<!-- Formulario Captura de Datos -->
	<form action="" method="POST">
		<div>
			<label>Nro</label>
			<input type="text" name="numero" value="<?php echo $numero ?>">
		</div>		
		<div>
			<label>Nombre</label>
			<input type="text" name="nombre">
		</div>
		<div>
			<label>Sexo</label>
			<input type="text" name="sexo">
		</div>
		<div>
			<label>Cumpleaños</label>
			<input type="text" name="cumple">
		</div>
		<div>
			<label>Estado Civil</label>
			<input type="text" name="estado">
		</div>
		<div>
			<label>Teléfono</label>
			<input type="text" name="telefono">
		</div>
		<?php 
			for ($i=$numero; $i < $aux; $i++) { 
				echo '<input type="hidden" name="datos_personales[]" value="' . $datos_personales[$i] . '">';
			}
		?>
		<input type="submit" name="submit" value="Enviar">		
	</form>
	<hr>
	
	<!-- Tabla de Resultados -->
	<table border="1">
	  <tr>	  	
	    <?php 
	    	// for ($i=0; $i < 1; $i++) { 
	    	// 	for ($j=0; $j < 6; $j++) { 
	    	// 		echo "<th>" . $datos_personales[$i][$j] . "</th>";
	    	// 	}
	    	// }
	    ?>	    	    
	  </tr>
	</table>
</body>
</html>