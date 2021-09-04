<?php

// declaración e inicialización de variables, constantes y arreglos
	$nom_aplicacion = "8. Guayabita";
	$cantJug = null;
	$pozo = $cantJug;
	$jugadores = [];
	$jugador = null;	
	$posJug = 0;
	$lanza1 = null;	
	$lanza2 = null;	
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
			$jugadores = $_POST['jugadores'];
			$cantJug = $_POST['cantJug'];
			$pozo = $_POST['pozo'];
		}		
		# Recibe el lanzamiento Uno
		if (!empty($_POST['lanza1'])) {
			$lanza1 = $_POST['lanza1'];			
			$pozo = $_POST['pozo'];
			$posJug = $_POST['posJug'];
			$jugador = $_POST['jugador'];
		}
		# Recibe la apuesta del jugador
		if (!empty($_POST['apuesta'])) {
			$apuesta = $_POST['apuesta'];
			$pozo = $_POST['pozo'];
			$posJug = $_POST['posJug'];
			$jugador = $_POST['jugador'];
		}
		# Recibe el lanzamiento Dos
		if (!empty($_POST['lanza2'])) {
			$apuesta = $_POST['apuesta'];
			$lanza2 = $_POST['lanza2'];
			$pozo = $_POST['pozo'];
			$posJug = $_POST['posJug'];
			$jugador = $_POST['jugador'];
		}			
		# Verificar datos
		echo "Cantidad Jugadores: " . $cantJug;		
		echo "<br>Jugadores: ";
		print_r($jugadores);		
		echo "<br>Posción jugador: " . $posJug;
		echo "<br>Nombre jugador: " . $jugador;
		echo "<br>Primer Lanzamiento:  " . $lanza1;
		echo "<br>Apuesta: " . $apuesta;
		echo "<br>Segundo Lanzamiento: " . $lanza2;		

// Proceso
		if ($pozo > 0) {
			if ($cantJug > $posJug) {
				if (count($jugadores) > 0) {					
					$jugador = $jugadores[$posJug];
					if ($lanza1 != null) {
						if ($lanza1 != 1 || $lanza1 != 6) {
							if ($apuesta <= $pozo) {
								if ($lanza2 != null) {
									if ($lanza2 > $lanza1) {
										echo "<br>Has Ganado!!!";
										$pozo = $pozo - $apuesta;
									} else {
										echo "<br>Has Perdido tu apuesta!!!";
										$pozo = $pozo + $apuesta;
									}
								}
							} else {
								echo "<br>La apuesta debe ser menor o igual al pozo";
							}
						} else {
							echo "<br>Perdiste, coloca una moneda";
							$pozo--;
							$posJug++;
						}
					}
				}
			} else {
				echo "<br>Se ha terminado el Juego, no hay dinero en el pozo!!!";
			}
			if ($cantJug == $posJug) {
				$posJug = 0;
				$jugador = $jugadores[$posJug];
			}
			if ($pozo == 0) {
				echo "<br>No hay dinero en el pozo, coloquen la apuesta mínima!!!";
				$pozo = $cantJug;				
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

	<!-- Información del Juego: Jugador, Apuesta, Pozo -->
	<form align="center">
		<label>Pozo </label>
		<input type="text" value="<?php echo $pozo ?>" disabled>
		<label>Jugador </label>
		<input type="text" value="<?php echo $jugador ?>" disabled>
		<label>Lanzamiento Uno </label>
		<input type="text" value="<?php echo $lanza1 ?>" disabled>
		<label>Apuesta </label>
		<input type="text" value="<?php echo $apuesta ?>" disabled>
		<label>Lanzamiento Dos </label>
		<input type="text" value="<?php echo $lanza2 ?>" disabled>
	</form>
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
			<label>Cantidad Jugadores </label>
			<input type="text" name="cantJug" value="<?php echo $cantJug ?>">
		</div>						
		<div>
			<label>Pozo </label>			
			<input type="text" name="pozo" value="<?php echo $pozo ?>">
		</div>				
		<?php 
			for ($i=0; $i < $cantJug; $i++) { 
				echo '<label for="jugadores">Jugador_' . ($i + 1) . '</label>
					  <input type="text" name="jugadores[]" id="jugadores"><br>';
			}
		?>		
		<div>
			<input type="submit" value="Enviar">
		</div>
	</form>
	<hr>


	<!-- Formulario para lanzamiento Uno -->	
	<form action="" method="POST">		
		<h3>Lanzamiento Uno</h3>
		<div>
			<label>Cantidad Jugadores </label>
			<input type="text" name="cantJug" value="<?php echo $cantJug ?>">
		</div>
		<div>
			<label>Pozo </label>			
			<input type="text" name="pozo" value="<?php echo $pozo ?>">
		</div>
		<div>
			<label>Posición </label>
			<input type="text" name="posJug" value="<?php echo $posJug ?>">
		</div>
		<div>
			<label>Jugador </label>
			<input type="text" name="jugador" value="<?php echo $jugador ?>">
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
			<label>Cantidad de Jugadores:</label>
			<input type="text" name="cantJug" value="<?php echo $cantJug ?>">
		</div>
		<div>
			<label>Pozo </label>			
			<input type="text" name="pozo" value="<?php echo $pozo ?>">
		</div>		
		<div>
			<label>Posición </label>
			<input type="text" name="posJug" value="<?php echo $posJug ?>">
		</div>
		<div>
			<label>Jugador </label>
			<input type="text" name="jugador" value="<?php echo $jugador ?>">
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
			<label>Cantidad de Jugadores:</label>
			<input type="text" name="cantJug" value="<?php echo $cantJug ?>">
		</div>
		<div>
			<label>Pozo </label>
			<input type="text" name="pozo" value="<?php echo $pozo ?>">
		</div>
		<div>
			<label>Posición </label>
			<input type="text" name="posJug" value="<?php echo ($posJug + 1) ?>">
		</div>
		<div>
			<label>Jugador </label>
			<input type="text" name="jugador" value="<?php echo $jugador ?>">
		</div>
		<div>
			<label>Apuesta </label>			
			<input type="text" name="apuesta" value="<?php echo $apuesta ?>">
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
</body>
</html>