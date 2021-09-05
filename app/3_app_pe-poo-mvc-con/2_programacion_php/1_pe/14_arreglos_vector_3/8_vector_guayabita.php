<?php

// declaración e inicialización de variables, constantes y arreglos
	$nom_aplicacion = "8. Guayabita";
	$cantJug = null;
	$pozo = $cantJug;
	$jugador = null;	
	$posJug = 0;
	$lanza1 = null;	
	$lanza2 = null;	
	$apuesta = null;
	$res = "Digite la cantidad de Jugadores";
	$jugadores = [];		

// entrada: 
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		# Recibe la cantidad de Jugadores
		if (!empty($_POST['cantJug'])) {
			$cantJug = $_POST['cantJug'];
			$pozo = $cantJug;
			for ($i=0; $i < $cantJug; $i++) { 
				$jugadores[$i] = null;
			}
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
		// echo "Cantidad Jugadores: " . $cantJug;		
		// echo "<br>Jugadores: ";
		// print_r($jugadores);		
		// echo "<br>Posción jugador: " . $posJug;
		// echo "<br>Nombre jugador: " . $jugador;
		// echo "<br>Primer Lanzamiento:  " . $lanza1;
		// echo "<br>Apuesta: " . $apuesta;
		// echo "<br>Segundo Lanzamiento: " . $lanza2;

// Proceso
		# Valida que hayan jugadores
		$res = "Digite el nombre de los Jugadores";
		if ($jugadores[$cantJug - 1] != null) {
			# Asigna el nombre al jugador según su posición					
			$jugador = $jugadores[$posJug];
			$res = "Primer lanzamiento de " . $jugador;
			# Verifica que el lanzamiento uno no sea nulo
			if ($lanza1 != null) {
				$res = $jugador . " debe Apostar";
				# Si saca 1 o 6 pierde, de lo contrario, hace un 2do lanzamiento
				if ($lanza1 != 1 && $lanza1 != 6) {
					# Verifica que la apuesta no esté vacía
					if ($apuesta != null) {
						$res = "Segundo lanzamiento de " . $jugador;
						# La apuesta debe ser menor o igual al pozo
						if ($apuesta <= $pozo) {
							# Verifica que el lanzamiento dos no sea nulo
							if ($lanza2 != null) {
								# Verifica la posición del primer jugador
								if ($posJug != 0) {
									$jugador = $jugadores[$posJug];								
								} else {
									$posJug;
									$jugador = $jugadores[$posJug];									
								}
								# Compara el lanzamiento uno con el dos
								if ($lanza2 > $lanza1) {
									$res = "Has Ganado " . $jugador . "!!!";
									$pozo = $pozo - $apuesta;
								} else {
									$res = "Has Perdido tu Apuesta " . $jugador . "!!!";
									$pozo = $pozo + $apuesta;
								}
								# Cambia al jugador siguiente y primer lanzamiento
								$posJug++;
								if ($cantJug > $posJug) {
									$jugador = $jugadores[$posJug];
								} else {
									$jugador = $jugadores[0];
								}
								$res .= "<br>Primer lanzamiento de " . $jugador;
							}
						} else {
							$res = "La apuesta debe ser menor o igual al pozo";
						}
					}
				} else {
					$res = "Sacaste 1 o 6. Perdiste " . $jugador . ", coloca una moneda. ";
					$pozo++;
					$posJug++;
					if ($cantJug > $posJug) {
						$jugador = $jugadores[$posJug];								
					} else {
						$jugador = $jugadores[0];
					}
					$res .= "<br>Primer lanzamiento de " . $jugador;					
				}
			}
		}
		# Si la cantJug es igual a posJug, reinicia la posición del jugador
		if ($cantJug == $posJug) {
			$posJug = 0;
			$jugador = $jugadores[$posJug];
		}		
		# Si el pozo es igual a cero, entonces reinicia el juego					
		if ($pozo == 0) {				
			$res .= "<br>No hay dinero en el pozo, coloquen la apuesta mínima!!!";
			$pozo = $cantJug;				
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
	<form action="R" method="POST">		
		<div>
			<label>Cantidad de Jugadores</label>
			<input type="text" name="cantJug" value="<?php echo $cantJug ?>">
			<input type="submit" value="Enviar">
		</div>		
	</form>
	<br>
	<hr>	

	
	<!-- Formulario para asignar nombre a los jugadores -->
	<h3>Asignar Nombre a los Jugadores</h3>
	<form action="" method="POST">		
		<div>
			<!-- <label>Cantidad Jugadores </label> -->
			<input type="hidden" name="cantJug" value="<?php echo $cantJug ?>">
		</div>						
		<div>
			<!-- <label>Pozo </label> -->
			<input type="hidden" name="pozo" value="<?php echo $pozo ?>">
		</div>				
		<?php 
			for ($i=0; $i < $cantJug; $i++) { 
				echo '<label for="jugadores">Jugador_' . ($i + 1) . '</label>
					  <input type="text" name="jugadores[]" value=' . $jugadores[$i] . '><br>';
			}
		?>
		<br>		
		<div>
			<input type="submit" value="Enviar">
		</div>
	</form>
	<br>
	<hr>


	<!-- Formulario para lanzamiento Uno -->	
	<form action="" method="POST">		
		<h3>Lanzamiento Uno</h3>
		<div>
			<!-- <label>Cantidad Jugadores </label> -->
			<input type="hidden" name="cantJug" value="<?php echo $cantJug ?>">
		</div>
		<div>
			<!-- <label>Pozo </label>			 -->
			<input type="hidden" name="pozo" value="<?php echo $pozo ?>">
		</div>
		<div>
			<!-- <label>Posición </label> -->
			<input type="hidden" name="posJug" value="<?php echo $posJug ?>">
		</div>
		<div>
			<!-- <label>Jugador </label> -->
			<input type="hidden" name="jugador" value="<?php echo $jugador ?>">
		</div>				
		<div>
			<!-- <label>Lanzamiento Uno </label> -->
			<input type="hidden" name="lanza1" value="<?php echo rand(1,6) ?>">
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
	<br>
	<hr>


	<!-- Formulario para Apostar -->
	<h3>Apuesta</h3>
	<form action="" method="POST">
		<div>
			<!-- <label>Cantidad de Jugadores:</label> -->
			<input type="hidden" name="cantJug" value="<?php echo $cantJug ?>">
		</div>
		<div>
			<!-- <label>Pozo </label>			 -->
			<input type="hidden" name="pozo" value="<?php echo $pozo ?>">
		</div>		
		<div>
			<!-- <label>Posición </label> -->
			<input type="hidden" name="posJug" value="<?php echo $posJug ?>">
		</div>
		<div>
			<!-- <label>Jugador </label> -->
			<input type="hidden" name="jugador" value="<?php echo $jugador ?>">
		</div>
		<div>
			<!-- <label>Lanzamiento Uno </label> -->
			<input type="hidden" name="lanza1" value="<?php echo $lanza1 ?>">
		</div>
		<?php 
			for ($i=0; $i < count($jugadores); $i++) { 
				echo '<input type="hidden" name="jugadores[]" id="jugadores" value="' . $jugadores[$i] . '">';
			}
		?>
		<div>
			<label>Apuesta</label>
			<input type="text" name="apuesta">
			<input type="submit" value="Enviar">
		</div>
	</form>
	<br>
	<hr>


	<!-- Formulario para lanzamiento Dos -->	
	<form action="" method="POST">
		<h3>Lanzamiento Dos</h3>
		<div>
			<!-- <label>Cantidad de Jugadores:</label> -->
			<input type="hidden" name="cantJug" value="<?php echo $cantJug ?>">
		</div>
		<div>
			<!-- <label>Pozo </label> -->
			<input type="hidden" name="pozo" value="<?php echo $pozo ?>">
		</div>
		<div>
			<!-- <label>Posición </label> -->
			<input type="hidden" name="posJug" value="<?php echo $posJug ?>">
		</div>
		<div>
			<!-- <label>Jugador </label> -->
			<input type="hidden" name="jugador" value="<?php echo $jugador ?>">
		</div>
		<div>
			<!-- <label>Apuesta </label>			 -->
			<input type="hidden" name="apuesta" value="<?php echo $apuesta ?>">
		</div>
		<div>
			<!-- <label>Lanzamiento Uno </label> -->
			<input type="hidden" name="lanza1" value="<?php echo $lanza1 ?>">
		</div>		
		<div>
			<!-- <label>Lanzamiento Dos </label> -->
			<input type="hidden" name="lanza2" value="<?php echo rand(1,6) ?>">
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
	<br>
	<hr>


	<!-- Información del Juego: Jugador, Apuesta, Pozo -->
	<form align="center">				
		<!-- <label>Jugador Actual</label>
		<input type="text" value="<?php echo $jugador ?>" disabled> -->
		<label>Pozo </label>
		<input type="text" value="<?php echo $pozo ?>" disabled>
		<h2 align="center"><?php echo $res ?></h2>		
		<label>Apuesta </label>
		<input type="text" value="<?php echo $apuesta ?>" disabled>
		<br><br>
		<label>Lanzamiento Uno </label>
		<input type="text" value="<?php echo $lanza1 ?>" disabled>
		<label>Lanzamiento Dos </label>
		<input type="text" value="<?php echo $lanza2 ?>" disabled>
	</form>
	<hr>
</body>
</html>