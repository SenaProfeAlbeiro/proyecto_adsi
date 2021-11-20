<?php session_start();	
	

	class Reports {

		public function __construct(){}

		// Método de inicio
		public function index(){
			require_once 'view/roles/admin/header.php';
			require_once 'view/modules/4_mod_reports/reports_imp/reports_imp.main.view.php';
			require_once 'view/roles/admin/footer.php';
		}
	}

?>