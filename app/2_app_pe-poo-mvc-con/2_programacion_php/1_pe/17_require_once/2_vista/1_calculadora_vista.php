<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $nom_aplicacion ?></title>
</head>
<body>
	<h1><?php echo $nom_aplicacion ?></h1>
	<p><?php echo $instrucciones ?></p>	
	<ul>
		<li><a href="?band=1">Encender calculadora normal</a></li>
		<li><a href="?band=">Apagar calculadora normal</a></li>		
		<li><a href="../index.php">Volver</a></li>
	</ul>
	<hr>
	<form id="calcula" action="" method="POST">		
		<div>
			<label for="num1">Número Uno</label>
			<input type="text" name="num1" id="num1" <?php echo $encendido_global ?>>
		</div>
		<div>
			<label for="num1">Número Dos</label>
			<input type="text" name="num2" id="num2" <?php echo $encendido_global ?>>
		</div>
		<div>
			<input type="radio" id="suma" name="menu" value="1" <?php echo $encendido_global ?>>
			<label for="suma">Suma</label>
			<input type="radio" id="resta" name="menu" value="2" <?php echo $encendido_global ?>>
			<label for="resta">Resta</label>
			<input type="radio" id="multiplicacion" name="menu" value="3" <?php echo $encendido_global ?>>
			<label for="multiplicacion">Multiplicación</label>		
			<input type="radio" id="division" name="menu" value="4" <?php echo $encendido_global ?>>
			<label for="division">División</label>
		</div>
		<div>			
			<input type="submit" name="submit" id="submit" value="Enviar" <?php echo $encendido_global ?>>
		</div>
	</form>
	<h1><?php echo $res_global ?></h1>
	<script src="../assets/js/script_calculadora.js"></script>
</body>
</html>