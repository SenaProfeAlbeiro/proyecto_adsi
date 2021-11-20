<?php session_start();
	
	// require_once 'model/Report.php';

	class Reports {

		// private $model;
		// private $modulo;

		public function __construct() {
			// $this->model = new User();
			// $this->modulo = $_SESSION['modulo'];
		}

		public function index(){
			// require_once 'view/roles/admin/header.php'; 
			require_once 'view/modules/4_mod_reports/reports_imp/reports_imp.view.php';
			// require_once 'view/roles/admin/footer.php';				
			
		}

		// Mostrar Reporte de Usuarios
		// public function repUsuarios(){
			
		// }
	}
?>