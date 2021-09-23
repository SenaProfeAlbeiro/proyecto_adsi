<?php 
	
// declaración e inicialización de variables, constantes y arreglos

	$nom_aplicacion = "6. Vector Ordenado Estático";
	$instrucciones = "Instrucciones: Seleccione el Orden / Digite los valores del vector / Enviar";
	$menu = 0;
	$posicion = 1;
	$aux = 0;	
	$res = 'Orden';
	$res2 = 'Valores Registrados';
	$valores = [];
	$valores_aux = [];


// Funciones

	# Inicia el Proceso / Llama otras Funciones / Devuelve un Valor
	function iniciar($menu, $valores){
		#Se pasan los datos del arreglo a un arreglo auxiliar
		$valores_aux = $valores;		
		# Ordena ascendente o descendente, dependiendo de la opción seleccionada
		switch ($menu) {
			case 1:
				$res = 'Orden Ascendente';
				ordenar_asc($valores);				
				break;
			case 2:
				$res = 'Orden Descendente';
				ordenar_des($valores);				
				break;
		}
	}

	# Inicia los inputs
	function iniciar_inputs(){
		for ($i=0; $i < 10; $i++) {
			echo '<div>'; 
			echo '<label>Posición_' . ($i + 1) . '</label>';
			echo '<input type="text" name="valores[]">';
			echo '</div>';			
		}
	}

	# Validar Nulos: Valida que los controles tengan un valor
	function validar_nulos($valores){
		foreach ($valores as $valor) {
			if ($valor != null) {
				$valores[] = $valor;
			} else {
				for ($i=0; $i < 10; $i++) { 
					$valores[$i] = null;	
				}
			}
		}
	}

	# Ordenar Ascendente
	function ordenar_asc($valores){
		for ($i=0; $i < 9; $i++) { 
			for ($j=0; $j < 9; $j++) { 
				if ($valores[$j] >= $valores[$j + 1]) {
					$aux = $valores[$j];
					$valores[$j] = $valores[$j + 1];
					$valores[$j + 1] = $aux;
				}
			}
		}
	}

	# Ordenar Descendente
	function ordenar_des($valores){
		for ($i=0; $i < 9; $i++) { 
			for ($j=0; $j < 9; $j++) { 
				if ($valores[$j] <= $valores[$j + 1]) {
					$aux = $valores[$j];
					$valores[$j] = $valores[$j + 1];
					$valores[$j + 1] = $aux;
				}
			}
		}
	}


// entrada	 
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		# Recibe los datos por post y lo asigna a las variables
		if (isset($_POST['menu'])) {			
			$menu = $_POST['menu'];
			$valores = $_POST['valores'];
			if (validar_nulos($valores)) {
			   	iniciar($menu, $valores);
			 } else {
				$instrucciones = 'Instrucciones: Seleccione el Orden (Ascendente o Descendente) / Digite todos los campos (No puede existir valores vacíos)';
			 }
			print_r($valores);
		} else {
			$instrucciones = 'Instrucciones: Seleccione el Orden (Ascendente o Descendente)';
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
		<li><?php echo $instrucciones ?></li>
	</ul>
	<form action="" method="POST">
		<div>
			<input type="radio" id="ascendente" name="menu" value="1">
			<label for="ascendente">Ascendente</label>
			<input type="radio" id="descendente" name="menu" value="2">
			<label for="descendente">Descendente</label>			
		</div>
		<br>		
		<?php iniciar_inputs();	?>
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
	  	<th>Vector</th>
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