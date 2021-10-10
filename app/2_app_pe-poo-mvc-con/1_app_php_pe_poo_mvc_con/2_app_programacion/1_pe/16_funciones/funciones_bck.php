<!-- Procesa los datos -->
<?php 

// Declarar e iniciar variables, constantes, arreglos u objetos
$num1 = 0;
$num2 = 0;
$menu = 0;

// Funciones: Crear
# 1. Sin Parámetros, Sin Retorno de Valor
function iniciar(){
	echo 'Función: Sin parámetros, sin retorno de valor';
	// Todas las instrucciones que ustedes consideren
}

# 2. Con Parámetros, Sin Retorno de valor
function sumar($num1, $num2){	
	$res = $num1 + $num2;
	echo 'La suma es: ' . $res;
}

# 3. Con Parámetros, Con Retorno de valor
function restar($num1, $num2){
	$res = $num1 - $num2;
	return $res;
}

# 4. Sin Parámetros, Con Retorno de valor.
function multiplicar(){
	$num1 = 15;
	$num2 = 2;
	$res = $num1 * $num2;
	return $res;
}

// Entrada
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if (isset($_POST['menu'])) {
		$menu = $_POST['menu'];
		if (!empty($_POST['num1']) && !empty($_POST['num2'])) {
			$num1 = $_POST['num1'];
			$num2 = $_POST['num2'];
		} else {
			echo 'Digite los dos números';
		}		
	} else {
		echo 'Seleccione una opción del menú';
	}
}

// Proceso...   
	

// Salida
?>
<!-- Envía y muestra los datos -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h2>FUNCIONES</h2>
	<form action="" method="POST">
		<div>
			<label>Primer número</label>
			<input type="number" name="num1">
		</div>
		<div>
			<label>Segundo número</label>
			<input type="number" name="num2">
		</div>
		<div>
			<input type="radio" name="menu" value="1">
			<label for="suma">Suma</label>
			<input type="radio" name="menu" value="2">
			<label for="resta">Resta</label>
			<input type="radio" name="menu" value="3">
			<label for="multiplicacion">Multiplicación</label>		
			<input type="radio" name="menu" value="4">
			<label for="division">División</label>
		</div>
		<br>
		<div>			
			<input type="submit" value="Enviar">
		</div>
	</form>
	<h3><?php iniciar() ?></h3>	
	<h3>
		<?php 
			sumar($num1, $num2);
			$resulado_suma = 54 + sumar($num1, $num2);
			echo '<br>Resultado Suma' . $resulado_suma;
		?>
	</h3>	
	<h3><?php echo 'La Resta es: ' . restar($num1, $num2) ?></h3>
	<h3>
		<?php 
			echo 'La Multiplicación es: ' . multiplicar();
			$resultado = 20 + multiplicar();
			echo '<br>resultado: ' . $resultado; 
		?>
	</h3>
</body>
</html>