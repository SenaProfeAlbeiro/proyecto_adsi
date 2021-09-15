<?php 
	if (!($_SERVER['REQUEST_METHOD'] == 'POST')) {
		$instrucciones = "Digite tres valores / Seleccione el Orden / Enviar";
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>5. Burbuja</title>
</head>
<body>
	<h1>5. Burbuja</h1>
	<p><a href="../index.php">Volver</a></p>
	<hr>
	<ul>		
		<li><?php echo $instrucciones ?></li>
	</ul>
	<form action="../3_controlador/5_burbuja_controlador.php" method="POST">		
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
</body>
</html>