<?php 
// declaración e inicialización de variables, constantes y arreglos
	$nom_aplicacion = "10. Matriz Tiendita";
	$contador = 0;
	$articulo = 0;
	$cantidad = 0;
	define('IVA', 1.19);
	$total_parcial = 0;
	$total_pagar = 0;	
	$matriz_uno = array(
		array('ID', 'NOMBRE', 'VALOR UNIDAD', 'IVA'),
		array(1, 'Arroz L', 2500, 'No'),
		array(2, 'Azucar L', 1800, 'Si'),
		array(3, 'Sal L', 900, 'Si'),
		array(4, 'Café L', 4000, 'Si'),
		array(5, 'Panela L', 800, 'No'),
		array(6, 'Chocolate L', 3200, 'Si'),
		array(7, 'Huevo', 250, 'No'),
		array(8, 'Leche Ltr', 3800, 'No'),
		array(9, 'Aceite Ltr', 10000, 'Si'),
		array(10, 'Gaseosa Ltr', 3000, 'Si')
	);
	$registro = array();
	$matriz_dos = array(
		array('ITEM', 'ID', 'NOMBRE DEL PRODUCTO', 'CANTIDAD', 'VALOR UNITARIO', 'IVA', 'TOTAL')
	);

// entrada 
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		# Recibe el número del articulo y la cantidad
		if (isset($_POST['articulo']) && !empty($_POST['cantidad'])) {
			$articulo = floatval($_POST['articulo']);
			$cantidad = intval($_POST['cantidad']);
			$matriz_dos = $_POST['matriz_dos'];
			$contador = count($matriz_dos);


		} else {
			echo 'Seleccione la cantidad de articulos';
		}

// proceso
		# Si el artículo tiene IVA o No, se genera un total parcial
		if ($matriz_uno[$articulo][3] == "Si") {
			$total_parcial = floatval(($matriz_uno[$articulo][2] * $cantidad) * IVA);
		} else {			
			$total_parcial = floatval($matriz_uno[$articulo][2] * $cantidad);
		}
		
		# Según el artículo seleccionado se crea un registro
		$matriz_dos[$contador][0] = $contador;
		$matriz_dos[$contador][1] = $articulo;
		$matriz_dos[$contador][2] = $matriz_uno[$articulo][1];
		$matriz_dos[$contador][3] = $cantidad;
		$matriz_dos[$contador][4] = $matriz_uno[$articulo][2];
		$matriz_dos[$contador][5] = $matriz_uno[$articulo][3];
		$matriz_dos[$contador][6] = floatval($total_parcial);

		# Calcular el total a pagar
		for ($x=0; $x < count($matriz_dos); $x++) { 
			$total_pagar = floatval($total_pagar) + floatval($matriz_dos[$x][6]);			
		}

	}
	
// salida
	# Verificación de Datos
	// echo '<br>Contador: ' . $contador;
	// echo '<br>Articulo: ' . $articulo;
	// echo '<br>Cantidad: ' . $cantidad;
	// echo '<br>Registro: ';
	// print_r($registro);
	// echo '<br>Matriz Dos: ';
	// print_r($matriz_dos);
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
	
	<!-- TABLA: Muestra la Tabla de los Productos -->
	<h3>TABLA DE PRODUCTOS</h3>
	<table border="1">
		<tr>
			<?php 
				for ($i=0; $i < 4; $i++) { 
					echo '<th>' . $matriz_uno[0][$i] . '</th>';
				}
			?>
		</tr>
		<?php 
			for ($i=1; $i < count($matriz_uno); $i++) { 
				echo '<tr>';
				for ($j=0; $j < 4; $j++) { 
					echo '<td align="center">' . $matriz_uno[$i][$j] . '</td>';
				}
				echo '</tr>';
			}
		?>
	</table>
	<hr>

	<!-- FORMULARIO: Productos que desea llevar -->
	<h3>Seleccione el Nro del Artículo y la Cantidad</h3>
	<form action="" method="POST">
		<div>
			<label>Artículo</label>
			<select name="articulo">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
			</select>
		</div>
		<div>
			<label >Cantidad</label>
			<input type="number" name="cantidad">
		</div>
		<br>
		<div>
			<input type="submit" value="Cargar">
		</div>
		<div style="display:none;">
			<?php
			for ($i=0; $i < count($matriz_dos); $i++) { 
				for ($j=0; $j < 7; $j++) { 					
					echo '<input type="text" name="matriz_dos[' . $i . '][' . $j . ']" value="' . $matriz_dos[$i][$j] . '">';
				}
				echo '<br>';
			}
		?>
		</div>
	</form>
	<hr>

	<!-- TABLA: Muestra la Tabla de Resultados -->	
	<h3>TABLA DE PRODUCTOS</h3>
	<table border="1">
		<tr>
			<?php 
				for ($i=0; $i < 7; $i++) { 
					echo '<th>' . $matriz_dos[0][$i] . '</th>';
				}
			?>
		</tr>
		<?php 
			for ($i=1; $i < count($matriz_dos); $i++) { 
				echo '<tr>';
				for ($j=0; $j < 7; $j++) { 
					echo '<td align="center">' . $matriz_dos[$i][$j] . '</td>';
				}
				echo '</tr>';
			}
		?>
		<tr>
			<td align="center"></td>
			<td align="center"></td>
			<td align="center"></td>
			<td align="center"></td>
			<td align="center"></td>
			<th align="center">TOTAL A PAGAR</th>
			<td align="center">
				<?php 
					echo floatval($total_pagar);
				?>
			</td>
		</tr>
	</table>

</body>
</html>