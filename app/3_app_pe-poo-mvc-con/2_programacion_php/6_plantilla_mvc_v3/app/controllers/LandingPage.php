<?php 

	class LandingPage extends Controller{

		public function __construct(){
	// echo "Controlador páginas cargadas";
		}

		public function index(){		
			$datos = [
				'titulo' => 'Empresa - Página Principal'
			];
			$this->vista('/business/landing_page_view', $datos);	
		}

	}

?>