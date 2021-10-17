<?php 
	
// Declarar e inicializar variables, constantes y arreglos

	$nom_aplicacion = "7. Vector Ordenado Dinámico";
	$instrucciones = "Instrucciones: Digite el Tamaño del Arreglo (Vector) / Enviar";
	$orden = 'Orden';
	$cantidad = null;
	$encender = "disabled";
	$valores = [];
	$valores_aux = $valores;

// Funciones

	# 1. Inicia el Proceso / Llama otras Funciones / Devuelve un Valor
	function iniciar($menu, $valores){
		switch ($menu) {
			case 1:
				sort($valores);				
				break;
			case 2:
				rsort($valores);
				break;
		}
		return $valores;
	}

	# 2. Validar Nulos: Valida que todos los controles tengan valor
	function validar_nulos($valores){
		foreach ($valores as $valor) {
			if ($valor != null) {
				$res_local = true;				
			} else {				
				$res_local = false;
				break;				
			}
		}
		return $res_local;
	}

	# 3. Mostrar cantidad de celdas en tabla
	function mostrar_celdas($cantidad){
		for ($i=0; $i < $cantidad; $i++) { 
			$valores[$i] = null;
		}
		return $valores;
	}	

	# 4. Mostrar Respuesta en Tabla
	function mostrar_respuesta($menu){
		if ($menu == 1) {
			$res_local = 'Orden Ascendente';
		} else {
			$res_local = 'Orden Descendente';
		}
		return $res_local;
	}

// entrada: 
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		# 1er formulario: Recibe la cantidad de controles e inicia el 2do formulario
		if (!empty($_POST['cantidad'])) {
			$cantidad = $_POST['cantidad'];
			$encender = 'enabled';						
			$instrucciones = "Instrucciones: Seleccione el orden / Digite los valores del arreglo / Enviar";
			$valores = mostrar_celdas($cantidad);
			$valores_aux = $valores;

			# 2do formulario: Recibe el menú, la cantidad y los valores del 1er formulario
			if (isset($_POST['menu'])) {
				$menu = $_POST['menu'];
				$valores_aux = $_POST['valores'];				
				if (validar_nulos($_POST['valores'])) {
					$valores = $_POST['valores'];				
				   	$valores = iniciar($menu, $valores);
				   	$orden = mostrar_respuesta($menu);				   	
				} else {
					$instrucciones = 'Instrucciones: Seleccione el Orden (Ascendente o Descendente) / Digite todos los campos (No pueden existir valores vacíos) / Enviar';
				}
			}
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
			<br>
			<input type="radio" id="ascendente" name="menu" value="1" <?php echo $encender ?>>
			<label for="ascendente">Ascendente</label>
			<input type="radio" id="descendente" name="menu" value="2" <?php echo $encender ?>>
			<label for="descendente">Descendente</label>			
		</div>
		<br>		
		<?php 
			for ($i=0; $i < $cantidad; $i++) {			
				echo '<div><label>Posición_' . ($i + 1) . '</label>
				<input type="text" name="valores[]"></div>';
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
	    		echo '<th>Posición_' . ($i + 1) . '</th>';
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
	  	<th align="right">Valores Registrados</th>
	    <?php 
	    	# Imprime los valores tal como se digitaron
			foreach ($valores_aux as $valor) {				
				echo '<td align="center">' . $valor . '</td>';				
			}
	    ?>
	  </tr>
	  <tr>
	    <?php	    	
			# Imprime los valores ordenados
			echo '<th align="right">' . $orden . '</th>';
			foreach ($valores as $valor) {
				echo '<td align="center">' . $valor . '</td>';
			}
	    ?>
	  </tr>	  
	</table>
</body>
</html>