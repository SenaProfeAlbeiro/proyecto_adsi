<?php 
	if (!($_SERVER['REQUEST_METHOD'] == 'POST')) {
		$instrucciones = "Digite el valor mínimo y máximo de la Serie / Seleccione si es par o impar / Enviar";
	}
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
	<p><a href="../index.php">Volver</a></p>
	<hr>
	<ul>		
		<li><?php echo $instrucciones ?></li>
	</ul>
	<form action="../3_controlador/4_serie_par_impar_controlador.php" method="POST">		
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
</body>
</html>