<?php 
	
// declaración e inicialización de variables, constantes y arreglos
	$nom_aplicacion = "6. Vector Ordenado Estático";
	$instruc = "Digite los valores del vector / Seleccione el Orden / Enviar";
	$posicion = 1;	
	$valores = [];

// entrada	 
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		# Recibe los valores del arreglo
		if (isset($_POST['valores'])) {
			# Valida que todos los controles tengan valor
			foreach ($_POST['valores'] as $valor) {
				if ($valor != null) {
					$valores[] = $valor;					
				} else {
					for ($i=0; $i < 10; $i++) { 
						$valores[$i] = null;	
					}
					$instruc = "Digite todos los valores";
					break;					
				}
			}			
		}  
	} else {
		#iniciar el arreglo
		for ($i=0; $i < 10; $i++) { 
			$valores[$i] = null;
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
		<?php 
			for ($i=0; $i < 10; $i++) { 
				echo '<div>
						<label>Posición_' . $posicion . '</label>
						<input type="text" name="valores[]">
					  </div>';
				$posicion++;
			}
		?>
		<div>
			<input type="radio" id="ascendente" name="menu" value="1">
			<label for="ascendente">Ascendente</label>
			<input type="radio" id="descendente" name="menu" value="2">
			<label for="descendente">Descendente</label>			
		</div>
		<div>
			<input type="submit" name="submit" value="Enviar">			
		</div>
	</form>	
		<?php
			# Imprime si todos los índices del arreglo tienen valor		
			foreach ($valores as $valor) {
				if ($valor != null) {
					echo $valor . ' - ';
				}
			}
		?>
</body>
</html>