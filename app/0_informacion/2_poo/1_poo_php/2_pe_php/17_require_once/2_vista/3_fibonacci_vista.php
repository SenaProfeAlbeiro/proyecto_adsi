<?php 
	if (!($_SERVER['REQUEST_METHOD'] == 'POST')) {
		$instrucciones = "Digite la cantidad de números Fibonacci / Enviar";
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>3. Fibonacci</title>
</head>
<body>
	<h1>3. Fibonacci</h1>
	<p><a href="../index.php">Volver</a></p>
	<hr>
	<ul>		
		<li><?php echo $instrucciones ?></li>
	</ul>
	<form action="../3_controlador/3_fibonacci_controlador.php" method="POST">		
		<label for="numero">Fibonacci</label>
		<input type="text" name="numero" id="numero">
		<input type="submit" name="submit" value="Enviar">
	</form>
</body>
</html>