<?php

// declaración e inicialización de variables, constantes y arreglos	
	$cantJug = null;
	$pozo = $cantJug;
	$jugador = null;	
	$posJug = 0;
	$lanza1 = null;	
	$lanza2 = null;	
	$apuesta = null;
	$instrucciones = "Digite la Cantidad de Jugadores (El Total de Jugadores es Igual al Pozo) / Escriba los nombres de los Jugadores / Lanzamiento Uno (Si obtiene 1 o 6 coloca una moneda, si es diferente, apuesta entre 1 y el acumulado del Pozo) / Lanzamiento Dos (Si obtiene una suma mayor al lanzamiento Uno, gana lo que apostó, de lo contrario coloca la apuesta) ";
	$jugadores = [];		

// Funciones
	# 1. Inicia el Juego
	function iniciar($cantJug, $jugadores, $posJug){
		echo 'Inicia el Juego';		
		// if ($jugadores[$cantJug - 1] != null) {
		// 	# Asigna el nombre al jugador según su posición					
		// 	$jugador = $jugadores[$posJug];
		// 	$instrucciones = "Primer lanzamiento de " . $jugador;
		// 	# Verifica que el lanzamiento uno no sea nulo
		// 	if ($lanza1 != null) {
		// 		$instrucciones = $jugador . " debe Apostar";
		// 		# Si saca 1 o 6 pierde, de lo contrario, hace un 2do lanzamiento
		// 		if ($lanza1 != 1 && $lanza1 != 6) {
		// 			# Verifica que la apuesta no esté vacía
		// 			if ($apuesta != null) {
		// 				$instrucciones = "Segundo lanzamiento de " . $jugador;
		// 				# La apuesta debe ser menor o igual al pozo
		// 				if ($apuesta <= $pozo) {
		// 					# Verifica que el lanzamiento dos no sea nulo
		// 					if ($lanza2 != null) {
		// 						# Verifica la posición del primer jugador
		// 						if ($posJug != 0) {
		// 							$jugador = $jugadores[$posJug];								
		// 						} else {
		// 							$posJug;
		// 							$jugador = $jugadores[$posJug];									
		// 						}
		// 						# Compara el lanzamiento uno con el dos
		// 						if ($lanza2 > $lanza1) {
		// 							$instrucciones = "Has Ganado " . $jugador . "!!!";
		// 							$pozo = $pozo - $apuesta;
		// 						} else {
		// 							$instrucciones = "Has Perdido tu Apuesta " . $jugador . "!!!";
		// 							$pozo = $pozo + $apuesta;
		// 						}
		// 						# Cambia al jugador siguiente y primer lanzamiento
		// 						$posJug++;
		// 						if ($cantJug > $posJug) {
		// 							$jugador = $jugadores[$posJug];
		// 						} else {
		// 							$jugador = $jugadores[0];
		// 						}
		// 						$instrucciones .= "<br>Primer lanzamiento de " . $jugador;
		// 					}
		// 				} else {
		// 					$instrucciones = "La apuesta debe ser menor o igual al pozo";
		// 				}
		// 			}
		// 		} else {
		// 			$instrucciones = "Sacaste 1 o 6. Perdiste " . $jugador . ", coloca una moneda. ";
		// 			$pozo++;
		// 			$posJug++;
		// 			if ($cantJug > $posJug) {
		// 				$jugador = $jugadores[$posJug];								
		// 			} else {
		// 				$jugador = $jugadores[0];
		// 			}
		// 			$instrucciones .= "<br>Primer lanzamiento de " . $jugador;					
		// 		}
		// 	}
		// }
		// # Si la cantJug es igual a posJug, reinicia la posición del jugador
		// if ($cantJug == $posJug) {
		// 	$posJug = 0;
		// 	$jugador = $jugadores[$posJug];
		// }		
		// # Si el pozo es igual a cero, entonces reinicia el juego
		// if ($pozo == 0) {				
		// 	$instrucciones .= "<br>No hay dinero en el pozo, coloquen la apuesta mínima!!!";
		// 	$pozo = $cantJug;				
		// }
	}

	# 2. Obtener la catindad de Jugadores e inicia el arreglo jugadores
	function iniciar_jugadores($cantJug){
		for ($i=0; $i < $cantJug; $i++) { 
			$jugadores[$i] = null;
		}
		return $jugadores;
	}

	# 4. Validar Nulos en los controles de los Jugadores
	function validar_nulos($jugadores){
		foreach ($jugadores as $valor) {
			if ($valor != null) {
				$res_local = true;
			} else {
				$res_local = false;
				break;
			}		
		}
		return $res_local;
	}


	# 3. Posicionar el jugador
	function posicionar_jugador($posJug){
		
	}


// entrada: 
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		# Recibe la cantidad de Jugadores
		if (!empty($_POST['cantJug'])) {
			$cantJug = $_POST['cantJug'];
			$pozo = $cantJug;
			$jugadores = iniciar_jugadores($cantJug);			
			$instrucciones = "Digite el nombre de cada uno de los Jugadores";
			// echo validar_nulos($_POST['jugadores']);
			if (isset($_POST['jugadores'])) {
				if (validar_nulos($_POST['jugadores'])) {
					# Recibe el nombre de cada jugador					
					$jugadores = $_POST['jugadores'];
					$posJug = $_POST['posJug'];
					iniciar($cantJug, $jugadores, $posJug);
					

					$instrucciones = 'Péreme Tantico';
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
				}
			}
		} else {
			$instrucciones = "Digite la cantidad de Jugadores";
		}
	}	

// salida
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>8. Guayabita</title>
</head>
<body>

	<!-- Nombre de la Aplicación -->
	<h1>8. Guayabita</h1>
	<p><a href="index.php">Volver</a></p>
	<hr>


	<!-- Formulario para cantidad de Jugadores -->
	<h3>Cantidad de Jugadores</h3>
	<form action="" method="POST">		
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
			<!-- <label>Posición </label> -->
			<input type="text" name="posJug" value="<?php echo $posJug ?>">
		</div>		
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
		<h2 align="center"><?php echo $instrucciones ?></h2>		
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