<?php
	if (!($_SERVER['REQUEST_METHOD'] == 'POST')) {
		$instrucciones = "Instrucciones: Digite el Tamaño del Arreglo (Vector) / Enviar";		
		$orden = 'Orden';
		$cantidad = null;
		$encender = "disabled";
		$valores = [];
		$valores_aux = $valores;
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>7. Vector Ordenado Dinámico</title>
</head>
<body>
	<h1>7. Vector Ordenado Dinámico</h1>
	<p><a href="../index.php">Volver</a></p>
	<hr>
	<ul>		
		<li><?php echo $instrucciones ?></li>
	</ul>
	<hr>	

	<!-- Formulario 1 -->
	<form action="../3_controlador/7_vector_ordenado_dinamico_controlador.php" method="POST">
		<label for="">Tamaño del Arreglo (Vector)</label>
		<input type="text" name="cantidad">
		<input type="submit" name="submit" value="Enviar">		
	</form>
	<hr>

	<!-- Formulario 2 -->
	<form action="../3_controlador/7_vector_ordenado_dinamico_controlador.php" method="POST">
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