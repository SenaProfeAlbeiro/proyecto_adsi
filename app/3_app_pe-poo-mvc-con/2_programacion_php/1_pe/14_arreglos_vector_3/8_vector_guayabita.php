<?php

// declaración e inicialización de variables, constantes y arreglos
	$nom_aplicacion = "8. Guayabita";
	$jugadores = [];
	$cantJug = null;
	$posJug = 0;
	$lanza1 = null;	
	$lanza2 = null;
	$jugador = null;
	$pozo = null;
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
		}
		# Recibe el lanzamiento Uno
		if (!empty($_POST['lanza1'])) {
			$lanza1 = $_POST['lanza1'];
			$pozo = $_POST['pozo'];
			$posJug = $_POST['posJug']; // puede ser aquí
		}
		# Recibe el lanzamiento Dos
		if (!empty($_POST['lanza2'])) {
			$lanza2 = $_POST['lanza2'];
			$pozo = $_POST['pozo'];
			$posJug = $_POST['posJug'];
		}		
		# Verificar datos
		echo "Cantidad Jugadores: " . $cantJug;		
		echo "<br>Jugadores: ";
		print_r($jugadores);		
		echo "<br>Primer Lanzamiento:  " . $lanza1;
		echo "<br>Segundo Lanzamiento: " . $lanza2;

// Proceso		
		if ($posJug <= $cantJug) {
			if ($cantJug != null) {			
				# Se verifica que hayan jugadores
				if (count($jugadores) > 0) {
					$jugador = $jugadores[$posJug];
					if ($lanza1 != null) {
						if ($lanza1 == 1 || $lanza1 == 6) {
							echo "<br>Sacaste 1 o 6. Perdiste, coloca una moneda";
							$pozo++;
							if ($posJug <= $cantJug) {
								$jugador = $jugadores[$posJug + 1];
							}
							$posJug++;
						} else {						
							if ($lanza2 != null) {
								if ($lanza2 > $lanza1) {
									echo "<br>Ganaste";
									$pozo--;								
								} else {
									echo "<br>Perdiste, coloca una moneda";
									$pozo++;								
									$jugador = $jugadores[$posJug]; // Revisar
								}							
							}
						}
						echo "<br>Posición Jugador: " . $posJug;
						echo "<br>Pozo: " . $pozo;		
					}
				}
			}
		} else {
			# Todos volverían a continuar, manteniendose el pozo
			echo "<br><br>Todos volverían a continuar, manteniendose el pozo";
			$posJug = 0;
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
			<label for="cantJug">Cantidad de Jugadores</label>
			<input type="text" name="cantJug" id="cantJug">
			<input type="submit" value="Enviar">
		</div>		
	</form>
	<hr>

	
	<!-- Formulario para asignar nombre a los jugadores -->
	<h3>Asignar Nombre a los Jugadores</h3>
	<form action="" method="POST">
		<div>			
			<input type="hidden" name="cantJug" value="<?php echo $cantJug ?>">
		</div>		
		<?php 
			for ($i=0; $i < $cantJug; $i++) { 
				echo '<label for="jugadores">Jugador_' . ($i + 1) . '</label>
					  <input type="text" name="jugadores[]" id="jugadores"><br>';
			}
		?>		
		<div>
			<br>
			<input type="submit" value="Enviar">
		</div>
	</form>
	<hr>
	<!-- Formulario de la Apuesta -->

	<!-- Formulario para lanzamiento Uno -->
	<h3><?php echo "Primer Lanzamiento de [" . $jugador . "]" ?></h3>
	<form action="" method="POST">
		<div>
			<!-- <label>Pozo </label> -->
			<input type="hidden" name="pozo" value="<?php echo $pozo ?>">
		</div>
		<br>
		<div>
			<label>Posición </label>
			<input type="text" name="posJug" value="<?php echo $posJug ?>">
		</div>
		<br>
		<div>
			<input type="hidden" name="cantJug" value="<?php echo $cantJug ?>">
		</div>				
		<div>
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
	<hr>


	<!-- Formulario para lanzamiento Dos -->
	<h3><?php echo "Segundo Lanzamiento de [" . $jugador . "]" ?></h3>
	<form action="" method="POST">
		<div>
			<!-- <label>Pozo </label> -->
			<input type="hidden" name="pozo" value="<?php echo $pozo ?>">
		</div>
		<br>
		<div>
			<label>Posición </label>
			<input type="text" name="posJug" value="<?php echo ($posJug + 1) ?>">
		</div>
		<div>
			<input type="hidden" name="cantJug" value="<?php echo $cantJug ?>">
		</div>
		<div>
			<input type="hidden" name="lanza1" value="<?php echo $lanza1 ?>">
		</div>		
		<div>
			<input type="hidden" name="lanza2" value="<?php echo rand(1,6) ?>">
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


	<!-- Información sobre el acumulado del pozo -->
	<h1><?php echo "El pozo es de " . $pozo . " pesos"?></h1>
	<hr>


</body>
</html>