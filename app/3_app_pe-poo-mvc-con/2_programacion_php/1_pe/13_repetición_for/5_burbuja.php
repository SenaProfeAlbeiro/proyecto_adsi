<?php 
	
// declaración e inicialización de variables y constantes
	$nom_aplicacion = "5. Burbuja";
	$instruc = "Digite tres valores / Seleccione el Orden / Enviar";
	$num1 = null;
	$num2 = null;
	$num3 = null;
	$aux = 0;
	$menu = null;
	$res = "";		

// entrada	 
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		# Recibe los datos por post y lo asigna a las variables
		if (isset($_POST['menu'])) {
			$menu = $_POST['menu'];
			$num1 = $_POST['num1'];		
			$num2 = $_POST['num2'];
			$num3 = $_POST['num3'];

// Proceso 1: Evalúa que las variables tengan un valor		
			if ($num1 != null && $num2 != null && $num3 != null) {
				# Ordena los valores
				for ($i=0; $i < 2; $i++) { 
					# ordena los números: Burbuja 
					if ($num1 >= $num2 ) {					
						$aux = $num1; 
						$num1 = $num2;
						$num2 = $aux;					
					}
					if ($num2 >= $num3) {					
						$aux = $num2; 
						$num2 = $num3;
						$num3 = $aux;					
					}
				}
			} else {
				$instruc = "Faltó algún dato, inténtelo de nuevo";
			}
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
		<div>
			<label for="num1">Valor Uno</label>
			<input type="text" name="num1" id="num1">
		</div>
		<div>
			<label for="num2">Valor Dos</label>
			<input type="text" name="num2" id="num2">
		</div>
		<div>
			<label for="num3">Valor Tres</label>
			<input type="text" name="num3" id="num3">
		</div>
		<div>
			<input type="radio" id="ascendente" name="menu" value="1">
			<label for="ascendente">Ascendente</label>
			<input type="radio" id="descendente" name="menu" value="2">
			<label for="descendente">Descendente</label>			
		</div>
		<input type="submit" name="submit" value="Enviar">
	</form>	
	
	<!-- Proceso 2: De acuerdo a la opción del menú, imprime los números -->
	<!--            de forma ascendente o descendente -->
	<?php
		switch ($menu) {
			case 1:
				$res = "El orden Ascendente: " . $num1 . " - " . $num2 . " - " . $num3;
				echo "<h1> $res </h1>";				
				break;
			case 2:
				$res = "El orden Descendente: " . $num3 . " - " . $num2 . " - " . $num1;
				echo "<h1> $res </h1>";				
				break;			
		}
	?>
</body>
</html>