<?php 
	
// declaración e inicialización de variables, constantes y arreglos
	$nom_aplicacion = "7. Vector Ordenado Dinámico";
	$instruc = "Instrucciones: Digite el Tamaño del Arreglo (Vector) / Enviar / Seleccione el Orden / Digite los valores del arreglo / Enviar";
	$menu = 0;
	$posicion = 1;
	$aux = 0;	
	$res = 'Orden';
	$res2 = 'Valores Registrados';
	$cantidad = null;
	$encender = "disabled";
	$valores = [];
	$valores_aux = [];

// entrada: 
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		# Recibe la cantidad del 1er formulario e inicia el 2do formulario
		if (!empty($_POST['cantidad'])) {
			$cantidad = $_POST['cantidad'];
			$encender = 'enabled';						
			$instruc = "Instrucciones: Seleccione el orden / Digite los valores del arreglo / Enviar";			
		} else {
			$instruc = "Instrucciones: Digite el Tamaño del Arreglo (Vector)";
		}

		# 2do formulario: Recibe el menú, la cantidad y los valores del 1er formulario
		if (isset($_POST['menu'])) {
			$menu = $_POST['menu'];
			$cantidad = $_POST['cantidad'];			
			if (isset($_POST['valores'])) {			
				# Valida que todos los controles tengan valor
				foreach ($_POST['valores'] as $valor) {
					if ($valor != null) {
						$valores[] = $valor;
					} else {
						for ($i=0; $i < count($valores); $i++) { 
							$valores[$i] = null;	
						}
						$instruc = "Instrucciones: Seleccione el orden y digite todos los valores";
						$menu = 0;
						break;					
					}
				}			
			}
		}

// Proceso		
		#Se pasan los datos del arreglo a un arreglo auxiliar
		$valores_aux = $valores;		
		# Ordena ascendente o descendente, dependiendo de la opción seleccionada
		switch ($menu) {
			case 1:
				$res = 'Orden Ascendente';
				sort($valores);				
				break;
			case 2:
				$res = 'Orden Descendente';
				rsort($valores);				
				break;
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
			<input type="hidden" name="cantidad" value="<?php echo $cantidad ?>">
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