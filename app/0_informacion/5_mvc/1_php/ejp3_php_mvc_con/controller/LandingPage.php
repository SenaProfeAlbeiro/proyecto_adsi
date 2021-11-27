<?php session_start();

	class LandingPage {

		
		public function __construct(){}

		public function index(){						
			$mensaje = "";
			$user = "";
			$nombres = "";
			$apellidos = "";
			$correo = "";
			$pass = "";
			$conf = "";
			$_SESSION['modulo'] = 'usuario';
			require_once 'view/roles/business/header.php';
			require_once 'view/business/index.view.php';
			require_once 'view/roles/business/footer.php';
		}

	}

?>