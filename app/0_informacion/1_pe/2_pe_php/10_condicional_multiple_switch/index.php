<?php 

// declaración e inicialización de variables y constantes
	# Constantes
	define('PI', 3.1416);
	# String = Cadena de Texto
	$nom_aplicacion = "Calculadora";
	$tipo_operacion = "";
	# Integer = Números Enteros
	$menu = null;
	$num1 = 2;
	# Double = Números Decimales
	$num2 = PI;
	# Operaciones aritméticas básicas
	$res = null;
	# Boolean = True (1) / False (null ó '0')	
	$band = false;	

// entrada
	if (isset($_GET["band"])) {
		$band = (boolval($_GET["band"]));
		if ($band) {			
			if (isset($_GET["menu"])) {
				$menu = $_GET["menu"];
			}
		}	
	}	

// proceso	
	# Condicional Doble
	if ($band) {
		# Condicional múltiple: switch
		switch ($menu) {
			case 1:
				$res = $num1 + $num2;
				$tipo_operacion = "La Suma es : ";
				break;
			case 2:
				$res = $num1 - $num2;			
				$tipo_operacion = "La Resta es : ";
				break;
			case 3:
				$res = $num1 * $num2;
				$tipo_operacion = "La Multiplicación es : ";
				break;
			case 4:
				$res = $num1 / $num2;			
				$tipo_operacion = "La División es : ";
				break;
			default:
				if ($menu == null) {
					$res = "Seleccione una opción del menú";					
				} else {
					$res = "Opción Incorrecta";
				}
				break;
		}		
	} else {		
		$tipo_operacion = "Encienda la calculadora";	
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
	<h3><?php echo $tipo_operacion . $res ?></h3>
	<ul>
		<li><a href="?band=1">Encender calculadora</a></li>
		<li><a href="?band=">Apagar calculadora</a></li>
	</ul>
	<h1><?php echo $nom_aplicacion; ?></h1>	
	<ul>
		<li><a href="<?php echo '?band='.$band.'&menu=1'; ?>">1. Suma</a></li>		
		<li><a href="<?php echo '?band='.$band.'&menu=2'; ?>">2. Resta</a></li>		
		<li><a href="<?php echo '?band='.$band.'&menu=3'; ?>">3. Multiplicación</a></li>		
		<li><a href="<?php echo '?band='.$band.'&menu=4'; ?>">4. División</a></li>
	</ul>
	<h3><?php echo "La opción de menú es: " . $menu ?></h3>
</body>
</html>