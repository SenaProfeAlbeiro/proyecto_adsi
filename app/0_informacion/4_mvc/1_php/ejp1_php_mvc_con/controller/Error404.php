<?php 

	class Error404 {

		public function index(){
			require_once 'view/roles/1_admin/header.php'; 
			require_once 'view/modules/5_others/error404.view.php';
			require_once 'view/roles/1_admin/footer.php';
		}
	}

?>