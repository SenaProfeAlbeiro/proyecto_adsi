<?php 
	
// declaración e inicialización de variables, constantes y arreglos

	$nom_aplicacion = "6. Vector Ordenado Estático";
	$instrucciones = "Instrucciones: Seleccione el Orden / Digite los valores del vector / Enviar";	
	$orden = 'Orden';
	for ($i=0; $i < 10; $i++) { 
		$valores[$i] = null;
	}
	$valores_aux = $valores;

// Funciones

	# 1. Inicia el Proceso / Llama otras Funciones / Devuelve un Valor
	function iniciar($menu, $valores){
		switch ($menu) {
			case 1:
				$res_local = ordenar_asc($valores);
				break;
			case 2:
				$res_local = ordenar_des($valores);
				break;
		}		
		return $res_local;
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

	# 3. Ordenar Ascendente
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
		return $valores;
	}

	# 4. Ordenar Descendente
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
		return $valores;
	}

	# 5. Mostrar Respuesta
	function mostrar_respuesta($menu){
		if ($menu == 1) {
			$res_local = 'Orden Ascendente';
		} else {
			$res_local = 'Orden Descendente';
		}
		return $res_local;
	}

// entrada	 
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		# Recibe los datos por post y lo asigna a las variables
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