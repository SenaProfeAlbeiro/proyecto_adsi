<?php 

	class LandingPage {

		public function __construct(){}

		public function index(){
			$user = "";
			$pass = "";
			$mensaje = "";
			require_once 'view/roles/business/header.php';
			require_once 'view/business/index.view.php';
			require_once 'view/roles/business/footer.php';
		}

	}

?>