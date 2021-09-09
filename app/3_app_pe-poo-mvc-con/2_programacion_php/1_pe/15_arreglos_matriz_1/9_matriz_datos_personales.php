<?php 
// declaración e inicialización de variables, constantes y arreglos
	$nom_aplicacion = "9. Matriz Datos Personales";	
	$registro = [];	
	$matriz = array(
		array("Nro", "Nombre", "Sexo", "Cumpleaños", "Estado Civil", "Teléfono")		
	);

// entrada 
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		if (isset($_POST['registro'])) {
			$registro = $_POST['registro'];
			$matriz = $_POST['matriz'];

// proceso
			array_push($matriz, $registro);
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

	<!-- Formulario: Crear Registro -->
	<h3>Crear Registro</h3>
	<form action="" method="POST">
		<div>			
			<input type="hidden" name="registro[]" value="<?php echo count($matriz) ?>">
		</div>
		<div>
			<label>Nombre</label>
			<input type="text" name="registro[]">
		</div>
		<div>
			<label>Sexo</label>
			<select name="registro[]">
				<option value="Masculino">Masculino</option>
				<option value="Femenino">Femenino</option>
			</select>
		</div>
		<div>
			<label>Cumpleaños</label>
			<input type="date" name="registro[]">
		</div>
		<div>
			<label>Estado Civil</label>
			<select name="registro[]">
				<option value="Soltero(a)">Soltero(a)</option>
				<option value="Unión Libre">Unión Libre</option>
				<option value="Casado(a)">Casado(a)</option>
			</select>
		</div>
		<div>
			<label>Teléfono</label>
			<input type="text" name="registro[]">
		</div>
		<br>
		<div>
			<input type="submit" value="Cargar">
		</div>
		<br>
		<div style="display:none;">
			<?php
			for ($i=0; $i < count($matriz); $i++) { 
				for ($j=0; $j < 6; $j++) { 					
					echo '<input type="text" name="matriz[' . $i . '][' . $j . ']" value="' . $matriz[$i][$j] . '">';
				}
				echo '<br>';
			}
		?>
		</div>
	</form>
	<hr>
	
	<h3>Muestra de Resultados</h3>
	<table border="1">
		<tr>
			<?php 				
				for ($j=0; $j < 6; $j++) { 
					echo '<th>' . $matriz[0][$j] . '</th>';
				}				
			?>			
		</tr>		
		<?php 
			for ($i=1; $i < count($matriz); $i++) {
				echo '<tr>'; 
				for ($j=0; $j < 6; $j++) { 
					echo '<td>' . $matriz[$i][$j] . '</td>';
				}
				echo '</tr>';
			}
		?>
	</table>
</body>
</html>