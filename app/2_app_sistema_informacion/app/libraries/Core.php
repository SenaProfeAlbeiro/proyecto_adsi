<?php 

	class Core{
		
		protected $controladorActual = 'LandingPage';
		protected $metodoActual = 'index';
		protected $parametros = [];

		public function __construct(){
			
			$url = $this->getUrl();
			// print_r($url);
			
			// Buscar en la Carpeta Controllers, si el controlador existe
			if (file_exists('../app/controllers/' . ucwords($url[0]) . '.php')) {
				// Si existe se setea como controlador por defecto
				$this->controladorActual = ucwords($url[0]);
				// Desmontar la variable $controladorActual (IndexBusiness) y su posición (0)
				unset($url[0]);
			}			
			// Solicitar el controlador
			require_once '../app/controllers/' . $this->controladorActual . '.php';
			$this->controladorActual = new $this->controladorActual;

			// Verificar la segunda parte de la url que sería el método
			if (isset($url[1])) {
				if (method_exists($this->controladorActual, $url[1])) {
					// Verificar el método
					$this->metodoActual = $url[1];
					// Desmontar la variable $metodoActual (index o el escogido por el usuario)
					// y su posición (1)
					unset($url[1]);
				}
			}

			// Obtener los parámetros: Solo queda en el arreglo original la posición (0) y el 
			// valor del arreglo de parámetros ([])
			$this->parametros = $url ? array_values($url) : [null];			
			// Llamar callback con parámetros por un Arreglo: Clase->controladorActual, Método de la Clase->metodoActual, Parámetros del Método->parámetros. Esto para usarse en toda la aplicación
			call_user_func_array([$this->controladorActual, $this->metodoActual], $this->parametros);
								
		}
		// Método para separar y limpiar el Controlador, el método y los parámetros '/' de la url
		public function getUrl(){
			// echo $_GET['url'] . '<br>';
			if (isset($_GET['url'])) {
				$url = rtrim($_GET['url'], '/');
				$url = filter_var($url, FILTER_SANITIZE_URL);
				$url = explode('/', $url);
				return $url;
			}
		}
	}

?>