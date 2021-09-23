<?php 

// Funciones

	# 1. Inicia el Proceso / Llama otras Funciones / Devuelve un Valor
	function iniciar($menu, $valores){
		switch ($menu) {
			case 1:
				$res_local = ordenar_asc($valores);
				break;
			case 2:
				$res_local = ordenar_des($valores);
				break;
		}		
		return $res_local;
	}

	# 2. Validar Nulos: Valida que todos los controles tengan valor
	function validar_nulos($valores){
		foreach ($valores as $valor) {
			if ($valor != null) {
				$res_local = true;
				break;
			} else {				
				$res_local = false;
				break;
			}
		}
		return $res_local;
	}

	# 3. Ordenar Ascendente
	function ordenar_asc($valores){
		for ($i=0; $i < 9; $i++) { 
			for ($j=0; $j < 9; $j++) { 
				if ($valores[$j] >= $valores[$j + 1]) {
					$aux = $valores[$j];
					$valores[$j] = $valores[$j + 1];
					$valores[$j + 1] = $aux;
				}
			}
		}
		return $valores;
	}

	# 4. Ordenar Descendente
	function ordenar_des($valores){
		for ($i=0; $i < 9; $i++) { 
			for ($j=0; $j < 9; $j++) { 
				if ($valores[$j] <= $valores[$j + 1]) {
					$aux = $valores[$j];
					$valores[$j] = $valores[$j + 1];
					$valores[$j + 1] = $aux;
				}
			}
		}
		return $valores;
	}

	# 5. Mostrar Respuesta
	function mostrar_respuesta($menu){
		if ($menu == 1) {
			$res_local = 'Orden Ascendente';
		} else {
			$res_local = 'Orden Descendente';
		}
		return $res_local;
	}

// entrada	 
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
// declaración e inicialización de variables, constantes y arreglos
		$instrucciones = "Instrucciones: Seleccione el Orden / Digite los valores del vector / Enviar";
		$orden = 'Orden';
		for ($i=0; $i < 10; $i++) { 
			$valores[$i] = null;
		}
		$valores_aux = $valores;
		# Recibe los datos por post y lo asigna a las variables
		if (isset($_POST['menu'])) {			
			$menu = $_POST['menu'];
			$valores_aux = $_POST['valores'];
			if (validar_nulos($_POST['valores'])) {				
				$valores = $_POST['valores'];				
			   	$valores = iniciar($menu, $valores);
			   	$orden = mostrar_respuesta($menu);
			 } else {
				$instrucciones = 'Instrucciones: Seleccione el Orden (Ascendente o Descendente) / Digite todos los campos (No pueden existir valores vacíos) / Enviar';				
			 }
		} else {
			$instrucciones = 'Instrucciones: Seleccione el Orden (Ascendente o Descendente)';
		}
	}

// salida
	require_once('../2_vista/6_vector_ordenado_estatico_vista.php');
?>
