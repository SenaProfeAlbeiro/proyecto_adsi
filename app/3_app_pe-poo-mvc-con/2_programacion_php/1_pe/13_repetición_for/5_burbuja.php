<?php 
	
// declaración e inicialización de variables y constantes
	$nom_aplicacion = "5. Burbuja";
	$instruc = "Digite tres valores / Enviar";
	$num1 = null;
	$num2 = null;
	$num3 = null;
	$aux = 0;
	$menu = 0;
	$res = "";		

// entrada	 
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		# Recibe los datos por post y lo asigna a las variables
		$menu = $_POST['menu'];
		$num1 = $_POST['num1'];		
		$num2 = $_POST['num2'];

// Proceso
		# Evalúa que las variables tengan un valor
		if ($num1 == null || $num2 == null || $num2 == null) {
			$instruc = "Faltó algún dato, inténtelo de nuevo";
			
		} else {
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
			<label for="num1">Mínimo</label>
			<input type="text" name="num1" id="num1">
		</div>
		<div>
			<label for="num2">Máximo</label>
			<input type="text" name="num2" id="num2">
		</div>
		<div>
			<input type="radio" id="par" name="menu" value="1">
			<label for="suma">Par</label>
			<input type="radio" id="impar" name="menu" value="2">
			<label for="resta">Impar</label>			
		</div>
		<input type="submit" name="submit" value="Enviar">
	</form>	
	
	<!-- Proceso 2 -->
	<?php 
		# Selecciona, ejecuta e imprime la serie par o impar
		switch ($menu) {
			case 1:
				$res = "La serie Par de " . $num1 . " a " . $num2 . " es: ";
				echo "<h1> $res </h1>";
				for ($i=$num1; $i <= $num2; $i++) { // ($i = 20; 22 <= 200; $i++ = 22)
					if ($i % 2 == 0) { // 22 % 2 = 0 == 0
						echo " - " . $i; // Imprimiendo el valor de $i;
					}
				}
				break;
			case 2:
				$res = "La serie Impar de " . $num1 . " a " . $num2 . " es: ";
				echo "<h1> $res </h1>";
				for ($i=$num1; $i <= $num2; $i++) { 
					if ($i % 2 != 0) {
						echo " - " . $i;
					}
				}
				break;			
		}
	?>
</body>
</html>