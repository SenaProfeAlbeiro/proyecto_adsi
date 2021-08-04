<?php 
	// Se encarga de cargar los modelos y las vistas
	class Controller{
		// cargar el modelo
		public function modelo($modelo){
			require_once '../app/models/' . $modelo . '.php';
		// Instanciar el modelo
			return new $modelo();
		}

		// cargar la vista
		public function vista($vista, $datos = []){
		// Verificar si el archivo vista existe
			if (file_exists('../app/views' . $vista . '.php')) {				
				require_once '../app/views' . $vista . '.php';
			}else{
		// Si el archivo de la vista no existe -> Error 404
				die('La vista no existe');
			}			
		}
	}
?>
