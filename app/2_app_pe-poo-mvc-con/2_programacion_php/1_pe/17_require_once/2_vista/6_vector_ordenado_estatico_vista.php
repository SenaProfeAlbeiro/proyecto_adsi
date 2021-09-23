<?php 
	if (!($_SERVER['REQUEST_METHOD'] == 'POST')) {
		$instrucciones = "Instrucciones: Seleccione el Orden / Digite los valores del vector / Enviar";	
		$orden = 'Orden';
		for ($i=0; $i < 10; $i++) { 
			$valores[$i] = null;
		}
		$valores_aux = $valores;
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>6. Vector Ordenado Estático</title>
</head>
<body>
	<h1>6. Vector Ordenado Estático</h1>
	<p><a href="../index.php">Volver</a></p>
	<hr>
	<ul>		
		<li><?php echo $instrucciones ?></li>
	</ul>
	<form action="../3_controlador/6_vector_ordenado_estatico_controlador.php" method="POST">
		<div>
			<input type="radio" id="ascendente" name="menu" value="1">
			<label for="ascendente">Ascendente</label>
			<input type="radio" id="descendente" name="menu" value="2">
			<label for="descendente">Descendente</label>			
		</div>
		<br>		
		<?php 
			for ($i=0; $i < 10; $i++) {
				echo '<div><label>Posición_' . ($i + 1) . '</label>
				<input type="text" name="valores[]"></div>';
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
			    	echo '<th>Posición_' . ($i + 1) . '</th>';
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
			<th align="right">Valores Registrados</th>
			<?php
				foreach ($valores_aux as $valor) {				
					echo '<td align="center">' . $valor . '</td>';				
				}
			?>
		</tr>
		<tr>
			<?php 
				echo '<th align="right">' . $orden . '</th>';
				foreach ($valores as $valor) {				
					echo '<td align="center">' . $valor . '</td>';				
				}				
			?>
		</tr>	  
	</table>
</body>
</html>