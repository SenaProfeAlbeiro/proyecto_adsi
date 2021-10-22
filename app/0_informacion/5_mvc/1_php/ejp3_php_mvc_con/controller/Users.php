<?php 
	
	require_once 'model/User.php';

	class Users {

		private $model;

		public function __construct() {
			$this->model = new User();
		}

		public function index(){			
			require_once 'view/roles/1_admin/header.php'; 
			require_once 'view/modules/0_mains/admin.main.view.php';
			require_once 'view/roles/1_admin/footer.php';
		}

		public function registrar(){			
			
			$usuario = new User();			
			$usuario->setNombresUsuario($_REQUEST['nombres']);			
			$usuario->setApellidosUsuario($_REQUEST['apellidos']);
			$usuario->setCorreoUsuario($_REQUEST['correo']);			
			$usuario->setPassUsuario(sha1($_REQUEST['pass']));
			$this->model->registrar($usuario);
			header('Location: ?');
		}

		public function crear(){			
			
			if (($_SERVER['REQUEST_METHOD']) == 'GET') {
				require_once 'view/roles/1_admin/header.php'; 
				require_once 'view/modules/1_users/user.create.view.php';
				require_once 'view/roles/1_admin/footer.php';
			} else {				
				$usuario = new User();
				$usuario->setIdRol($_REQUEST['rol']);
				$usuario->setDocIdUsuario($_REQUEST['documento']);
				$usuario->setNombresUsuario($_REQUEST['nombres']);
				$usuario->setApellidosUsuario($_REQUEST['apellidos']);
				$usuario->setCorreoUsuario($_REQUEST['correo']);
				$usuario->setPassUsuario(sha1($_REQUEST['pass']));
				$usuario->setEstadoUsuario($_REQUEST['estado']);
				$this->model->registrar($usuario);
				require_once 'view/roles/1_admin/header.php'; 
				require_once 'view/modules/1_users/user.create.view.php';
				require_once 'view/roles/1_admin/footer.php';
			}

		}

		public function consultar(){			
			$users = $this->model->listar();
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