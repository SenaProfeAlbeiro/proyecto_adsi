<?php session_start();
	
	require_once 'model/User.php';

	class Users {

		private $model;
		private $modulo;

		public function __construct() {
			$this->model = new User();
			$this->modulo = $_SESSION['modulo'];			
		}

		// Registrar Usuario desde el LandingPage
		public function registrar(){
			$usuario = new User();
			$usuario->setNombresUsuario($_POST['nombres']);			
			$usuario->setApellidosUsuario($_POST['apellidos']);
			$usuario->setCorreoUsuario($_POST['correo']);			
			$usuario->setPassUsuario(sha1($_POST['pass']));
			$this->model->registrar($usuario);
			header('Location: ?');
		}

		// Registrar Usuario desde el Dashboard
		public function crear(){
			if (isset($_SESSION['usuario'])) {			
				if (($_SERVER['REQUEST_METHOD']) == 'GET') {
					require_once 'view/roles/'.$this->modulo.'/header.php'; 
					require_once 'view/modules/1_users/user.create.view.php';
					require_once 'view/roles/'.$this->modulo.'/footer.php';
				} 
				if (($_SERVER['REQUEST_METHOD']) == 'POST') {
					$usuario = new User();
					$usuario->setIdRol($_POST['rol']);
					$usuario->setDocIdUsuario($_POST['documento']);
					$usuario->setNombresUsuario($_POST['nombres']);
					$usuario->setApellidosUsuario($_POST['apellidos']);
					$usuario->setCorreoUsuario($_POST['correo']);
					$usuario->setPassUsuario(sha1($_POST['pass']));
					$usuario->setEstadoUsuario($_POST['estado']);
					$this->model->registrar($usuario);
					header('Location: ?c=Users&a=consultar');
				}				
			} else {
				header('Location: ?');
			}
		}

		// Consultar Usuarios desde el Dashboard
		public function consultar(){
			if (isset($_SESSION['usuario'])) {
				$users = $this->model->listar();
				require_once 'view/roles/'.$this->modulo.'/header.php'; 
				require_once 'view/modules/1_users/user.select.view.php';
				require_once 'view/roles/'.$this->modulo.'/footer.php';
			} else {
				header('Location: ?');
			}			
		}

		// Actualizar Usuario desde el Dashboard
		public function actualizar(){
			if (isset($_SESSION['usuario'])) {
				# Envía el Id para que devuelva el usuario de la BBDD
				if (($_SERVER['REQUEST_METHOD']) == 'GET') {
					$user = $this->model->getById($_GET['id']);
					$perfil = ['admin', 'usuario', 'cliente', 'vendedor'];
					$estado = ['inactivo', 'activo'];
					require_once 'view/roles/'.$this->modulo.'/header.php'; 
					require_once 'view/modules/1_users/user.update.view.php';
					require_once 'view/roles/'.$this->modulo.'/footer.php';
				}
				# Envía los cambios a través de un objeto que actualiza la BBDD
				if (($_SERVER['REQUEST_METHOD']) == 'POST') {
					$usuario = new User();
					$usuario->setIdRol($_POST['rol']);
					$usuario->setIdUsuario($_POST['id']);
					$usuario->setDocIdUsuario($_POST['documento']);
					$usuario->setNombresUsuario($_POST['nombres']);
					$usuario->setApellidosUsuario($_POST['apellidos']);
					$usuario->setCorreoUsuario($_POST['correo']);
					$usuario->setPassUsuario(sha1($_POST['pass']));
					$usuario->setEstadoUsuario($_POST['estado']);
					$this->model->actualizar($usuario);
					header('Location: ?c=Users&a=consultar');
				}								
			} else {
				header('Location: ?');
			}
		}

		public function eliminar(){
			if (isset($_SESSION['usuario'])) {
				$this->model->eliminar($_GET['id']);
				header('Location: ?c=Users&a=consultar');
			} else {
				header('Location: ?');
			}
		}

	}

?>