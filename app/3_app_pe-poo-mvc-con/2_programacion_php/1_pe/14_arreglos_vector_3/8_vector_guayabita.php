<?php

// declaración e inicialización de variables, constantes y arreglos
	$nom_aplicacion = "8. Guayabita";
	$jugadores = [];
	$jugador = null;	
	$cantJug = null;
	$posJug = 0;
	$lanza1 = null;	
	$lanza2 = null;
	$jugador = null;
	$pozo = $cantJug;
	$apuesta = null;

// entrada: 
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		# Recibe la cantidad de Jugadores
		if (!empty($_POST['cantJug'])) {
			$cantJug = $_POST['cantJug'];
			$pozo = $cantJug;
		}
		# Recibe el nombre de cada jugador
		if (isset($_POST['jugadores'])) {
			$cantJug = $_POST['cantJug'];
			$jugadores = $_POST['jugadores'];			
		}		
		# Recibe el lanzamiento Uno
		if (!empty($_POST['lanza1'])) {
			$lanza1 = $_POST['lanza1'];
			$pozo = $_POST['pozo'];
			$posJug = $_POST['posJug'];
		}
		# Recibe la apuesta del jugador
		if (!empty($_POST['apuesta'])) {
			$apuesta = $_POST['apuesta'];
			$pozo = $_POST['pozo'];
			$posJug = $_POST['posJug'];
		}
		# Recibe el lanzamiento Dos
		if (!empty($_POST['lanza2'])) {
			$apuesta = $_POST['apuesta'];
			$lanza2 = $_POST['lanza2'];
			$pozo = $_POST['pozo'];
			$posJug = $_POST['posJug'];
		}		
		# Verificar datos
		echo "Cantidad Jugadores: " . $cantJug;		
		echo "<br>Posción jugador: " . $posJug;
		echo "<br>Jugadores: ";
		print_r($jugadores);
		echo "<br>Jugador: " . $jugador;		
		echo "<br>Primer Lanzamiento:  " . $lanza1;
		echo "<br>Apuesta: " . $apuesta;
		echo "<br>Segundo Lanzamiento: " . $lanza2;		

// Proceso
		if ($pozo > 0) {
			# Verifica que la posición del jugador sea menor a la cantidad Jugadores
			if ($posJug < $cantJug) {
				# Verifica que la cantidad de jugadores no esté vacía
				if ($cantJug != null) {			
					# Se verifica que hayan jugadores
					if (count($jugadores) > 0) {
						$jugador = $jugadores[$posJug];
						if ($lanza1 != null) {
							if ($lanza1 == 1 || $lanza1 == 6) {
								echo "<br>Sacaste 1 o 6. Perdiste, coloca una moneda";
								$pozo++;
								if ($posJug <= $cantJug) {
									$posJug++;
								}
							} else {
								if ($apuesta <= $pozo) {
									if ($lanza2 != null) {
										if ($lanza2 > $lanza1) {
											echo "<br>Ganaste";
											$pozo = $pozo - $apuesta;
										} else {
											echo "<br>Perdiste, coloca tu apuesta";
											$pozo = $pozo + $apuesta;
											$jugador = $jugadores[$posJug];
										}							
									}
								} else {
									echo "<br>La apuesta no puede ser mayor al pozo";
								}
							}
						}
					}
				}
			} else {
				# Todos volverían a continuar, manteniendose el pozo
				if ($cantJug == $posJug) {					
					$posJug = 0;
					$jugador = $jugadores[$posJug];
				}
			}			
		} if ($pozo <= 0) {
			echo "<br>Ha terminado el juego";
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


	<!-- Formulario para cantidad de Jugadores -->
	<h3>Cantidad de Jugadores</h3>
	<form action="" method="POST">		
		<div>
			<label>Cantidad de Jugadores</label>
			<input type="text" name="cantJug">
			<input type="submit" value="Enviar">
		</div>		
	</form>
	<hr>

	
	<!-- Formulario para asignar nombre a los jugadores -->
	<h3>Asignar Nombre a los Jugadores</h3>
	<form action="" method="POST">		
		<div>
			<label>Pozo </label>			
			<input type="text" name="pozo" value="<?php echo $pozo ?>">
		</div>
		<div>
			<label>Cantidad de Jugadores:</label>
			<input type="text" name="cantJug" value="<?php echo $cantJug ?>">
		</div>				
		<?php 
			for ($i=0; $i < $cantJug; $i++) { 
				echo '<label for="jugadores">Jugador_' . ($i + 1) . '</label>
					  <input type="text" name="jugadores[]" id="jugadores"><br>';
			}
		?>		
		<br>
		<div>
			<input type="submit" value="Enviar">
		</div>
	</form>
	<hr>


	<!-- Formulario para lanzamiento Uno -->	
	<form action="" method="POST">
		<div>
			<label>Pozo </label>			
			<input type="text" name="pozo" value="<?php echo $pozo ?>">
		</div>
		<div>
			<label>Cantidad Jugadores </label>
			<input type="text" name="cantJug" value="<?php echo $cantJug ?>">
		</div>
		<div>
			<label>Posición </label>
			<input type="text" name="posJug" value="<?php echo $posJug ?>">
		</div>				
		<div>
			<label>Lanzamiento Uno </label>
			<input type="text" name="lanza1" value="<?php echo rand(1,6) ?>">
		</div>		
		<?php 
			for ($i=0; $i < count($jugadores); $i++) { 
				echo '<input type="hidden" name="jugadores[]" id="jugadores" value="' . $jugadores[$i] . '">';
			}
		?>		
		<div>
			<input type="submit" value="Enviar">			
		</div>
	</form>
	<hr>


	<!-- Formulario para Apostar -->
	<h3>Apuesta</h3>
	<form action="" method="POST">
		<div>
			<label>Pozo </label>			
			<input type="text" name="pozo" value="<?php echo $pozo ?>">
		</div>		
		<div>
			<label>Cantidad de Jugadores:</label>
			<input type="text" name="cantJug" value="<?php echo $cantJug ?>">
		</div>
		<div>
			<label>Posición </label>
			<input type="text" name="posJug" value="<?php echo $posJug ?>">
		</div>
		<?php 
			for ($i=0; $i < count($jugadores); $i++) { 
				echo '<input type="hidden" name="jugadores[]" id="jugadores" value="' . $jugadores[$i] . '">';
			}
		?>
		<div>
			<label>Lanzamiento Uno </label>
			<input type="text" name="lanza1" value="<?php echo $lanza1 ?>">
		</div>
		<div>
			<label>Apuesta</label>
			<input type="text" name="apuesta">
		</div>
		<br>
		<div>
			<input type="submit" value="Enviar">
		</div>			
	</form>
	<hr>

	<!-- Formulario para lanzamiento Dos -->	
	<form action="" method="POST">
		<div>
			<label>Pozo </label>
			<input type="text" name="pozo" value="<?php echo $pozo ?>">
		</div>
		<div>
			<label>Posición </label>
			<input type="text" name="posJug" value="<?php echo ($posJug + 1) ?>">
		</div>
		<div>
			<label>Apuesta </label>			
			<input type="text" name="apuesta" value="<?php echo $apuesta ?>">
		</div>
		<div>
			<label>Cantidad de Jugadores:</label>
			<input type="text" name="cantJug" value="<?php echo $cantJug ?>">
		</div>
		<div>
			<label>Lanzamiento Uno </label>
			<input type="text" name="lanza1" value="<?php echo $lanza1 ?>">
		</div>		
		<div>
			<label>Lanzamiento Dos </label>
			<input type="text" name="lanza2" value="<?php echo rand(1,6) ?>">
		</div>		
		<?php 
			for ($i=0; $i < count($jugadores); $i++) { 
				echo '<input type="hidden" name="jugadores[]" id="jugadores" value="' . $jugadores[$i] . '">';
			}
		?>
		<br>
		<div>
			<input type="submit" value="Enviar">			
		</div>			
	</form>
	<hr>

	<div>
		<h1><?php echo "Pozo " . $pozo ?></h1>
	</div>

</body>
</html>