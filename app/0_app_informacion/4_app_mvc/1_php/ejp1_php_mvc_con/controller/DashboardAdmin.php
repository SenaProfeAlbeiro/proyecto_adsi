<?php 

	class DashboardAdmin {

		public function __construct(){

		}

		public function index(){			
			require_once 'view/roles/1_admin/header.php'; 
			require_once 'view/modules/0_mains/admin.main.view.php';
			require_once 'view/roles/1_admin/footer.php';
		}

	}

?>