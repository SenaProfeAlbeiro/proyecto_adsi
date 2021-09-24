<?php 
	
// Funciones

	# 1. Inicia el Proceso / Llama otras Funciones / Devuelve un Valor
	function iniciar($menu, $valores){
		switch ($menu) {
			case 1:
				sort($valores);				
				break;
			case 2:
				rsort($valores);
				break;
		}
		return $valores;
	}

	# 2. Validar Nulos: Valida que todos los controles tengan valor
	function validar_nulos($valores){
		foreach ($valores as $valor) {
			if ($valor != null) {
				$res_local = true;				
			} else {				
				$res_local = false;
				break;				
			}
		}
		return $res_local;
	}

	# 3. Mostrar cantidad de celdas en tabla
	function mostrar_celdas($cantidad){
		for ($i=0; $i < $cantidad; $i++) { 
			$valores[$i] = null;
		}
		return $valores;
	}	

	# 4. Mostrar Respuesta en Tabla
	function mostrar_respuesta($menu){
		if ($menu == 1) {
			$res_local = 'Orden Ascendente';
		} else {
			$res_local = 'Orden Descendente';
		}
		return $res_local;
	}

// entrada: 
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
// Declarar e inicializar variables, constantes y arreglos	
		$instrucciones = "Instrucciones: Digite el Tamaño del Arreglo (Vector) / Enviar";	
		$orden = 'Orden';
		$cantidad = null;
		$encender = "disabled";
		$valores = [];
		$valores_aux = $valores;
		
		# 1er formulario: Recibe la cantidad de controles e inicia el 2do formulario
		if (!empty($_POST['cantidad'])) {
			$cantidad = $_POST['cantidad'];
			$encender = 'enabled';						
			$instrucciones = "Instrucciones: Seleccione el orden / Digite los valores del arreglo / Enviar";
			$valores = mostrar_celdas($cantidad);
			$valores_aux = $valores;

			# 2do formulario: Recibe el menú, la cantidad y los valores del 1er formulario
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
			}
		}
	}	

// salida
	require_once('../2_vista/7_vector_ordenado_dinamico_vista.php');
?>