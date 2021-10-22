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

		// Registrar Usuario desde el LandingPage
		public function registrar(){
			$usuario = new User();			
			$usuario->setNombresUsuario($_REQUEST['nombres']);			
			$usuario->setApellidosUsuario($_REQUEST['apellidos']);
			$usuario->setCorreoUsuario($_REQUEST['correo']);			
			$usuario->setPassUsuario(sha1($_REQUEST['pass']));
			$this->model->registrar($usuario);
			header('Location: ?');
		}

		// Registrar Usuario desde el Dashboard
		public function crear(){
			if (($_SERVER['REQUEST_METHOD']) == 'GET') {
				require_once 'view/roles/1_admin/header.php'; 
				require_once 'view/modules/1_users/user.create.view.php';
				require_once 'view/roles/1_admin/footer.php';
			} 
			if (($_SERVER['REQUEST_METHOD']) == 'POST') {
				$usuario = new User();
				$usuario->setIdRol($_REQUEST['rol']);
				$usuario->setDocIdUsuario($_REQUEST['documento']);
				$usuario->setNombresUsuario($_REQUEST['nombres']);
				$usuario->setApellidosUsuario($_REQUEST['apellidos']);
				$usuario->setCorreoUsuario($_REQUEST['correo']);
				$usuario->setPassUsuario(sha1($_REQUEST['pass']));
				$usuario->setEstadoUsuario($_REQUEST['estado']);
				$this->model->registrar($usuario);
				header('Location: ?c=Users&a=consultar');
			}
		}

		// Consultar Usuarios desde el Dashboard
		public function consultar(){			
			$users = $this->model->listar();
			require_once 'view/roles/1_admin/header.php'; 
			require_once 'view/modules/1_users/user.select.view.php';
			require_once 'view/roles/1_admin/footer.php';	
		}

		// Actualizar Usuario desde el Dashboard
		public function actualizar(){
			# Envía el Id para que devuelva el usuario de la BBDD
			if (($_SERVER['REQUEST_METHOD']) == 'GET') {
				$user = $this->model->getById($_REQUEST['id']);
				$perfil = ['admin', 'usuario', 'cliente', 'vendedor'];
				$estado = ['inactivo', 'activo'];
				require_once 'view/roles/1_admin/header.php'; 
				require_once 'view/modules/1_users/user.update.view.php';
				require_once 'view/roles/1_admin/footer.php';
			}
			# Envía los cambios a través de un objeto que actualiza la BBDD
			if (($_SERVER['REQUEST_METHOD']) == 'POST') {
				$usuario = new User();
				$usuario->setIdRol($_REQUEST['rol']);
				$usuario->setIdUsuario($_REQUEST['id']);
				$usuario->setDocIdUsuario($_REQUEST['documento']);
				$usuario->setNombresUsuario($_REQUEST['nombres']);
				$usuario->setApellidosUsuario($_REQUEST['apellidos']);
				$usuario->setCorreoUsuario($_REQUEST['correo']);
				$usuario->setPassUsuario(sha1($_REQUEST['pass']));
				$usuario->setEstadoUsuario($_REQUEST['estado']);
				$this->model->actualizar($usuario);
				header('Location: ?c=Users&a=consultar');
			}
		}

		public function eliminar(){
			$this->model->eliminar($_GET['id']);
			header('Location: ?c=Users&a=consultar');
		}

	}

?>