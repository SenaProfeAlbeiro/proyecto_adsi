<?php 
	
// declaración e inicialización de variables, constantes y arreglos
	$nom_aplicacion = "6. Vector Ordenado Estático";
	$instruc = "Digite los valores del vector / Seleccione el Orden / Enviar";
	$posicion = 1;
	$semana = array('Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo');
	$valores[] = null;

// entrada	 
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		# Recibe los datos por post y lo asigna a las variables
		if (isset($_POST['menu'])) {
			$menu = $_POST['menu'];			

// Proceso 1:			
		} else {
			$instruc = "Seleccione el orden e inténtelo de nuevo";
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
						<label>Posición'. $posicion . '</label>
						<input type="text" name="indice' . $i . '">
					  </div>';
				$posicion++;
			}

		?>
		<!-- <div>
			<label for="num1">Valor Uno</label>
			<input type="text" name="num1" id="num1">
		</div> -->
			<input type="radio" id="ascendente" name="menu" value="1">
			<label for="ascendente">Ascendente</label>
			<input type="radio" id="descendente" name="menu" value="2">
			<label for="descendente">Descendente</label>			
		</div>
		<div>
			<input type="submit" name="submit" value="Enviar">
		</div>
	</form>	
</body>
</html>