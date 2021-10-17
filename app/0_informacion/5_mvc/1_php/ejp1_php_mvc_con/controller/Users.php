<?php 
	
	require_once 'model/User.php';

	class Users {

		private $model;

		public function __construct() {
			$this->model = new User();
		}

		public function index(){
			echo 'Controlador: Users. Acción: index()';
			// require_once 'view/roles/1_admin/header.php'; 
			// require_once 'view/modules/0_mains/admin.main.view.php';
			// require_once 'view/roles/1_admin/footer.php';
		}

		public function crear(){
			echo 'Controlador: Users. Acción: Crear()';
			$crear = new User();
			# Arreglo de Datos
			$datos = array(
							'Edwin',
							'Villamil',
							'profealbeiro2020@gmail.com',
							'54321'
						);
			// $crear->registrar($datos);
			// require_once 'view/roles/1_admin/header.php'; 
			// require_once 'view/modules/1_users/user.create.view.php';
			// require_once 'view/roles/1_admin/footer.php';
		}

		public function consultar(){
			require_once 'view/roles/1_admin/header.php'; 
			require_once 'view/modules/1_users/user.select.view.php';
			require_once 'view/roles/1_admin/footer.php';	
		}

		public function actualizar(){
			require_once 'view/roles/1_admin/header.php'; 
			require_once 'view/modules/1_users/user.update.view.php';
			require_once 'view/roles/1_admin/footer.php';	
		}

		public function eliminar(){
			
		}

	}

?>