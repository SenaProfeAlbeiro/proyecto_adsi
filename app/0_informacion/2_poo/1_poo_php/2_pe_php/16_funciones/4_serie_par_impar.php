<?php 

// Declarar e Iniciar variables, constantes, arreglos y objetos	
	$instrucciones = "Digite el valor mínimo y máximo de la Serie / Seleccione si es par o impar / Enviar";
	$num1 = null;	
	$num2 = null;	
	$aux = 0;
	$menu = 0;

// Funciones	

	# Inicia el Proceso / Llama otras Funciones / Devuelve un valor
	function iniciar($menu, $num1, $num2){
		if ($num1 != $num2) {
			# ordena los números		
			if ($num1 > $num2) { // $num1 = 200, $num2 = 20;
				$aux = $num1; // $aux = 200;
				$num1 = $num2; // $num1 = 20
				$num2 = $aux; // $num2 = 200 
			}
			switch ($menu) {
				case 1:
					organizar_par($num1, $num2);
					break;
				case 2:
					organizar_impar($num1, $num2);
					break;
				default:
					$res_local = 'La opción no existe';
					return $res_local;
					break;
			}
		}
	}

	# Serie Par
	function organizar_par($num1, $num2){
		$res_local = "La serie Par de " . $num1 . " a " . $num2 . " es: ";
		echo "<h1> $res_local </h1>";
		for ($i=$num1; $i <= $num2; $i++) { // ($i = 20; 22 <= 200; $i++ = 22)
			if ($i % 2 == 0) { // 22 % 2 = 0 == 0
				echo " - " . $i; // Imprimiendo el valor de $i;
			}
		}
	}

	# Serie Impar
	function organizar_impar($num1, $num2){
		$res_local = "La serie Impar de " . $num1 . " a " . $num2 . " es: ";
		echo "<h1> $res_local </h1>";
		for ($i=$num1; $i <= $num2; $i++) { 
			if ($i % 2 != 0) {
				echo " - " . $i;
			}
		}
	}

// entrada	 
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		# Evalúa que los controles estén usados (tengan algún valor)
		if ($_POST['num1'] != null && $_POST['num2'] != null) {
			if(isset($_POST['menu'])){
				$menu = $_POST['menu'];
				$num1 = $_POST['num1'];
				$num2 = $_POST['num2'];
			} else {
				$instrucciones = "Digite los números / Seleccione la Serie";
			}
		} else {
			$instrucciones = "Digite los números";
		}
	}

// salida
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>4. Serie Par o Impar</title>
</head>
<body>
	<h1>4. Serie Par o Impar</h1>
	<p><a href="index.php">Volver</a></p>
	<hr>
	<ul>		
		<li><?php echo $instrucciones ?></li>
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
			<input type="radio" id="par" name="menu" value="1">
			<label for="suma">Par</label>
			<input type="radio" id="impar" name="menu" value="2">
			<label for="resta">Impar</label>			
		</div>
		<input type="submit" name="submit" value="Enviar">
	</form>
	<?php echo iniciar($menu, $num1, $num2) ?>
</body>
</html>