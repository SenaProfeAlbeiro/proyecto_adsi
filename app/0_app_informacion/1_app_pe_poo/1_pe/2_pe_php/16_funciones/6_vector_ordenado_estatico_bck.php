<?php 
	
// declaración e inicialización de variables, constantes y arreglos

	$nom_aplicacion = "6. Vector Ordenado Estático";
	$instrucciones = "Instrucciones: Seleccione el Orden / Digite los valores del vector / Enviar";
	$menu = 0;	
	for ($i=0; $i < 10; $i++) { 
		$valores[$i] = null;
	}
	$valores_aux = $valores;

// Funciones	

	# 1. Iniciar Inputs en Formulario: Carga el formulario con 10 Controles
	function iniciar_inputs(){
		for ($i=0; $i < 10; $i++) {
			echo '<div>'; 
			echo '<label>Posición_' . ($i + 1) . '</label>';
			echo '<input type="text" name="valores[]">';
			echo '</div>';			
		}
	}

	# 2. Imprimir Encabezado en Tabla
	function imprimir_encabezado(){
		echo '<tr>';
	  	echo '<th>Arreglo 1D</th>';	    
    	for ($i=0; $i < 10; $i++) { 
	    	echo '<th>Posición_' . ($i + 1) . '</th>';
	    }	    
	  	echo '</tr><tr>';	  
	  	echo '<th>Vector</th>';	    
    	for ($i=0; $i < 10; $i++) { 
	    	echo '<th>Índice_' . $i . '</th>';
	    }	    
	  	echo '</tr>';
	}

	# 3. Imprime el arreglo en Tabla
	function imprimir_arreglo($menu, $arreglo){
		switch ($menu) {
			case 0:
				$res_local = 'Orden';
				break;
			case 1:
				$res_local = 'Orden Ascendente';
				break;
			case 2:
				$res_local = 'Orden Descendente';
				break;
			default:
				$res_local = 'Valores Registrados';				
				break;
		}
		echo '<td align="right">' . $res_local . '</td>';
		foreach ($arreglo as $valor) {				
			echo '<td align="center">' . $valor . '</td>';				
		}
	}

	# 3. Validar Nulos: Valida que todos los controles tengan valor
	function validar_nulos($valores){
		foreach ($valores as $valor) {
			if ($valor != null) {
				$res_local = true;
			} else {				
				$res_local = false;
			}
		}
		return $res_local;
	}

	# 4. Inicia el Proceso / Llama otras Funciones / Devuelve un Valor
	function iniciar($menu, $valores){
		$res_local = ordenar($menu, $valores);
		return $res_local;
	}	

	# 5. Ordenar arreglo
	function ordenar($menu, $valores){
		switch ($menu) {
			case 1:
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
		return $valores;
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
		<?php iniciar_inputs();	?>
		<br>		
		<div>
			<input type="submit" name="submit" value="Enviar">			
		</div>
	</form>
	<hr>
	<table border="1">
		<?php imprimir_encabezado(); ?>
		<tr><?php imprimir_arreglo(3, $valores_aux); ?></tr>
		<tr><?php imprimir_arreglo($menu, $valores); ?></tr>	  
	</table>
</body>
</html>