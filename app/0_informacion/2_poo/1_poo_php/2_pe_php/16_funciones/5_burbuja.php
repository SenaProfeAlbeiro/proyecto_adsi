<?php 
	
// Declarar e Iniciar variables, constantes, arreglos y objetos	

	$nom_aplicacion = "5. Burbuja";
	$instrucciones = "Digite tres valores / Seleccione el Orden / Enviar";
	$num1 = null;
	$num2 = null;
	$num3 = null;
	$aux = 0;
	$menu = null;
	$res_global = '';

// Funciones

	# Inicia el Proceso / Llama otras Funciones / Devuelve un valor
	function iniciar($menu, $num1, $num2, $num3){
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
			switch ($menu) {
				case 1:
					$res_local = "El orden Ascendente: " . $num1 . " - " . $num2 . " - " . $num3;
					break;
				case 2:
					$res_local = "El orden Descendente: " . $num3 . " - " . $num2 . " - " . $num1;
					break;
				default:
					$res_local = 'La opción no existe';
					break;
			}
			return $res_local;
		}
	}

// Entrada	 
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {		
		# Recibe los datos por post y lo asigna a las variables
		if ($_POST['num1'] != null && $_POST['num2'] != null && $_POST['num3'] != null) {
			if(isset($_POST['menu'])){
				$menu = $_POST['menu'];
				$num1 = $_POST['num1'];
				$num2 = $_POST['num2'];
				$num3 = $_POST['num3'];
				$res_global = iniciar($menu, $num1, $num2, $num3);
			} else {
				$instrucciones = "Digite los números / Seleccione el Orden";
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
	<title><?php echo $nom_aplicacion ?></title>
</head>
<body>
	<h1><?php echo $nom_aplicacion ?></h1>
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
			<label for="num3">Valor Tres</label>
			<input type="text" name="num3" id="num3">
		</div>
		<div>
			<input type="radio" id="ascendente" name="menu" value="1">
			<label for="ascendente">Ascendente</label>
			<input type="radio" id="descendente" name="menu" value="2">
			<label for="descendente">Descendente</label>			
		</div>
		<br>
		<div>
			<input type="submit" name="submit" value="Enviar">
		</div>
	</form>	
	<?php echo '<h1>' . $res_global . '</h1>'; ?>
</body>
</html>