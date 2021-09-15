<?php
	if (!($_SERVER['REQUEST_METHOD'] == 'POST')) {
		$instrucciones = "Digite el Factorial / Enviar";
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>2. Factorial</title>
</head>
<body>
	<h1>2. Factorial</h1>
	<p><a href="../index.php">Volver</a></p>
	<hr>
	<ul>
		<li><?php echo $instrucciones ?></li>
	</ul>
	<form action="../3_controlador/2_factorial_controlador.php" method="POST">
		<label for="numero">Factorial</label>
		<input type="text" name="numero" id="numero">
		<input type="submit" name="submit" value="Enviar">
	</form>	
</body>
</html>