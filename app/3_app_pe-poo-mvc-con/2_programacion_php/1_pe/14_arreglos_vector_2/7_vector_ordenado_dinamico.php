<?php 
	
// declaración e inicialización de variables, constantes y arreglos
	$nom_aplicacion = "7. Vector Ordenado Dinámico";
	$instruc = "Instrucciones: Digite el Tamaño del Arreglo (Vector) / Enviar / Seleccione el Orden / Digite los valores del vector / Enviar";
	$menu = 0;
	$posicion = 1;
	$aux = 0;	
	$res = 'Orden';
	$res2 = 'Valores Registrados';
	$cantidad = 0;
	$encender = "disabled";
	$valores = [];
	$valores_aux = [];
// Proceso 1:
	#iniciar arreglos en PHP
	for ($i=0; $i < $cantidad; $i++) { 
		$valores[$i] = null;
		$valores_aux[$i] = null;
	}
// entrada	 
	if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['cantidad'])) {
		$cantidad = $_POST['cantidad'];
		$encender = 'enabled';
		#iniciar arreglos
		for ($i=0; $i < $cantidad; $i++) { 
			$valores[$i] = null;
			$valores_aux[$i] = null;
		}
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
	<ul>		
		<li><?php echo $instruc ?></li>
	</ul>
	<hr>
	<!-- Formulario 1 -->
	<form action="" method="POST">
		<label for="">Tamaño del Arreglo (Vector)</label>
		<input type="text" name="cantidad">
		<input type="submit" name="submit" value="Enviar">		
	</form>
	<hr>
	<!-- Formulario 2 -->
	<form action="" method="POST">
		<div>
			<input type="radio" id="ascendente" name="menu" value="1" <?php echo $encender ?>>
			<label for="ascendente">Ascendente</label>
			<input type="radio" id="descendente" name="menu" value="2" <?php echo $encender ?>>
			<label for="descendente">Descendente</label>			
		</div>
		<br>		
		<?php 
			for ($i=0; $i < $cantidad; $i++) {			
				echo '<div>
						<label>Posición_' . $posicion . '</label>
						<input type="text" name="valores[]">
					  </div>';
				$posicion++;
			}
		?>
		<br>		
		<div>
			<input type="submit" name="submit" value="Enviar" <?php echo $encender ?>>
		</div>
	</form>
	<hr>
	<!-- Tabla de Resultados -->
	<table border="1">
	  <tr>
	  	<th>Arreglo 1D</th>
	    <?php 
	    	for ($i=0; $i < $cantidad; $i++) { 
	    		echo '<th>Posición_' . $posicion = $i + 1 . '</th>';
	    	}
	    ?>	    	    
	  </tr>
	  <tr>
	  	<th>Vector (Dinámico)</th>
	    <?php 
	    	for ($i=0; $i < $cantidad; $i++) { 
	    		echo '<th>Índice_' . $i . '</th>';
	    	}
	    ?>	    	    
	  </tr>
	  <tr>
	    <?php 
	    	# Imprime los valores tal como se digitaron	    	
			echo '<td align="right">' . $res2 . '</td>';				
			foreach ($valores_aux as $valor) {				
				echo '<td align="center">' . $valor . '</td>';				
			}
	    ?>
	  </tr>
	  <tr>	    
	    <?php	    	
			# Imprime los valores ordenados
			echo '<td align="right">' . $res . '</td>';
			foreach ($valores as $valor) {
				echo '<td align="center">' . $valor . '</td>';
			}
	    ?>
	  </tr>	  
	</table>
</body>
</html>