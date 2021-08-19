<?php 
	
// declaración e inicialización de variables y constantes
	$nom_aplicacion = "4. Serie Par o Impar";
	$instruc = "Digite el valor mínimo y máximo de la Serie / Seleccione si es par o impar / Enviar";
	$num1 = null;	
	$num2 = null;	
	$aux = 0;
	$menu = 0;
	$res = "";		

// entrada	 
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		if (isset($_POST['menu'])) {
			$menu = $_POST['menu'];
			$num1 = $_POST['num1'];		
			$num2 = $_POST['num2'];
			if ($num1 == null || $num2 == null) {
				$instruc = "Faltó algún dato, inténtelo de nuevo";
				$menu = 0;
			}
		} else {
			$instruc = "Faltó algún dato, inténtelo de nuevo";			
		}
	}

// Proceso 1
	# Evalúa si el primer número es mayor al segundo y lo ordena
	if ($num1 != $num2 ) {
		if ($num1 > $num2) {
			$aux = $num1;
			$num1 = $num2;
			$num2 = $aux;
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
		switch ($menu) {
			case 1:
				$res = "La serie Par de " . $num1 . " a " . $num2 . " es: ";
				echo "<h1> $res </h1>";
				for ($i=$num1; $i <= $num2; $i++) { 
					if ($i % 2 == 0) {
						echo " - " . $i;
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
			default:
				$instruc = "Faltó algún dato, inténtelo de nuevo";
				break;
		}
	?>
</body>
</html>