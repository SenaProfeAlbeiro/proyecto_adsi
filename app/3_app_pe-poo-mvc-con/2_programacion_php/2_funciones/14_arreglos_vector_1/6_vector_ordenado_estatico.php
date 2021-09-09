<?php 
	
// declaración e inicialización de variables, constantes y arreglos
	$nom_aplicacion = "6. Vector Ordenado Estático";
	$instruc = "Instrucciones: Seleccione el Orden / Digite los valores del vector / Enviar";
	$menu = 0;
	$posicion = 1;
	$aux = 0;	
	$res = 'Orden';
	$res2 = 'Valores Registrados';
	$valores = [];
	$valores_aux = [];

// entrada	 
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		# Recibe los valores del arreglo
		if (isset($_POST['menu'])) {
			# se recibe la opción del menú
			$menu = $_POST['menu'];
			if (isset($_POST['valores'])) {			
				# Valida que todos los controles tengan valor
				foreach ($_POST['valores'] as $valor) {
					if ($valor != null) {
						$valores[] = $valor;
					} else {
						for ($i=0; $i < 10; $i++) { 
							$valores[$i] = null;	
						}
						$instruc = "Instrucciones: Digite todos los valores";
						$menu = 0;
						break;					
					}
				}			
			}
		} else {
			$instruc = 'Instrucciones: Seleccione el Orden (Ascendente o Descendente)';
			#iniciar arreglos
			for ($i=0; $i < 10; $i++) { 
				$valores[$i] = null;
				$valores_aux[$i] = null;
			}
		}

// Proceso
		#Se pasan los datos del arreglo a un arreglo auxiliar
		$valores_aux = $valores;		
		# Ordena ascendente o descendente, dependiendo de la opción seleccionada
		switch ($menu) {
			case 1:
				$res = 'Orden Ascendente';
				for ($i=0; $i < 9; $i++) { 
					for ($j=0; $j < 9; $j++) { 
						if ($valores[$j] >= $valores[$j + 1]) {
							$aux = $valores[$j];
							$valores[$j] = $valores[$j + 1];
							$valores[$j + 1] = $aux;
						}
					}
				}
				break;
			case 2:
				$res = 'Orden Descendente';
				for ($i=0; $i < 9; $i++) { 
					for ($j=0; $j < 9; $j++) { 
						if ($valores[$j] <= $valores[$j + 1]) {
							$aux = $valores[$j];
							$valores[$j] = $valores[$j + 1];
							$valores[$j + 1] = $aux;
						}
					}
				}				
				break;
		}
	} else {
		#iniciar arreglos
		for ($i=0; $i < 10; $i++) { 
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
	<form action="" method="POST">
		<div>
			<input type="radio" id="ascendente" name="menu" value="1">
			<label for="ascendente">Ascendente</label>
			<input type="radio" id="descendente" name="menu" value="2">
			<label for="descendente">Descendente</label>			
		</div>
		<br>		
		<?php 
			for ($i=0; $i < 10; $i++) { 
				echo '<div>
						<label>Posición_' . $posicion . '</label>
						<input type="text" name="valores[]">
					  </div>';
				$posicion++;
			}
		?>
		<br>		
		<div>
			<input type="submit" name="submit" value="Enviar">			
		</div>
	</form>
	<hr>
	<table border="1">
	  <tr>
	  	<th>Arreglo 1D</th>
	    <?php 
	    	for ($i=0; $i < 10; $i++) { 
	    		echo '<th>Posición_' . $posicion = $i + 1 . '</th>';
	    	}
	    ?>	    	    
	  </tr>
	  <tr>
	  	<th>Vector (Estático)</th>
	    <?php 
	    	for ($i=0; $i < 10; $i++) { 
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