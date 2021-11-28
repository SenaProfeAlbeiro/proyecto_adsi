<?php session_start();

	require_once 'model/User.php';

	class Users {

		private $model;
		private $modulo;

		public function __construct(){
			$this->model = new User();
			$this->modulo = $_SESSION['modulo'];
		}

		// Método de Inicio
		public function index(){
			$usuario = unserialize($_SESSION['usuario']);
			if (isset($_SESSION['usuario'])) {
				require_once 'view/roles/'.$this->modulo.'/header.php';
				require_once 'view/modules/0_mains/'.$this->modulo.'.main.view.php';
				require_once 'view/roles/'.$this->modulo.'/footer.php';
			} else {
				header('Location: ?');
			}
		}
		
		// Registrar desde la página inicial
		public function registrarse(){
			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				$patron_texto = "/^[a-zA-ZáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙ\s]+$/";
				$nombres = $_POST['nombres_rg'];
				$apellidos = $_POST['apellidos_rg'];
				$correo = $_POST['correo_rg'];
				$pass = $_POST['pass_rg'];
				$conf = $_POST['conf_rg'];
				$class = "alert alert-danger mb-3 mb-0";
				if (empty($nombres)) {
					$mensaje = "El campo nombres no puede estar vacío";
				} elseif (!preg_match($patron_texto, $nombres)) {
					$mensaje = "El campo nombres no puede contener números";
				} elseif (empty($apellidos)) {
					$mensaje = "El campo apellidos no puede estar vacío";
				} elseif (!preg_match($patron_texto, $apellidos)) {
					$mensaje = "El campo apellidos no puede contener números";
				} elseif (empty($correo)) {
					$mensaje = "El campo E-Mail no puede estar vacío";
				} elseif (!(filter_var($correo, FILTER_VALIDATE_EMAIL))) {
					$mensaje = "El campo E-Mail, no es un correo válido";
				} elseif (empty($pass)) {
					$mensaje = "El campo contraseña no puede estar vacío";
				} elseif (strlen($pass) < 5 || strlen($pass) > 8) {
					$mensaje = "El campo contraseña debería tener entre 5 y 8 caracteres";
				} elseif (empty($conf)) {
					$mensaje = "El campo confirmación no puede estar vacío";
				} elseif (strlen($conf) < 5 || strlen($conf) > 8) {
					$mensaje = "El campo confirmación debería tener entre 5 y 8 caracteres";
				} elseif ($pass !== $conf) {
					$mensaje = "La contraseña y la confirmación no coinciden";
				} else{					
					$usuario = new User(
						$_POST['correo_rg'],
						$_POST['nombres_rg'],
						$_POST['apellidos_rg'],
						sha1($_POST['pass_rg'])
					);					
					$this->model->registrar($usuario);
					$class = "alert alert-success mb-3 mb-0";
					$mensaje = "El usuario se creó satisfactoriamente, en 24 horas el administrador le enviará un correo para habilitar su perfil";
					$nombres = "";
					$apellidos = "";
					$correo = "";
					$pass = "";
					$conf = "";
					require_once 'view/roles/business/header.php';
					require_once 'view/business/index.view.php';
					require_once 'view/roles/business/footer.php';
					echo "<script>validarConfirRegistro()</script>";
				}				
				require_once 'view/roles/business/header.php';
				require_once 'view/business/index.view.php';
				require_once 'view/roles/business/footer.php';
				echo "<script>$('#mdl_registro').modal('show')</script>";
				// echo "<script>validarUsuario()</script>";				
			}
		}

		// Crear o Registrar
		public function crear(){
			$show = 'show';
			$valUsuario = unserialize($_SESSION['usuario']);			
			if (isset($_SESSION['usuario']) && ($valUsuario->getIdRol() == 1 || $valUsuario->getIdRol() == 4)) {
				if ($_SERVER['REQUEST_METHOD'] == 'GET') {
					require_once 'view/roles/'.$this->modulo.'/header.php';
					require_once 'view/modules/1_users/crear_usuario.view.php';
					require_once 'view/roles/'.$this->modulo.'/footer.php';
				}
				if ($_SERVER['REQUEST_METHOD'] == 'POST') {
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

		// Consultar
		public function consultar(){
			$valUsuario = unserialize($_SESSION['usuario']);
			if (isset($_SESSION['usuario']) && ($valUsuario->getIdRol() == 1 || $valUsuario->getIdRol() == 4)) {
				$users = $this->model->listar();
				require_once 'view/roles/'.$this->modulo.'/header.php';
				require_once 'view/modules/1_users/consultar_usuarios.view.php';
				require_once 'view/roles/'.$this->modulo.'/footer.php';
			} else {
				header('Location: ?c=Dashboard');
			}	
		}

		// Actualizar
		public function actualizar(){
			$valUsuario = unserialize($_SESSION['usuario']);
			if (isset($_SESSION['usuario']) && ($valUsuario->getIdRol() == 1 || $valUsuario->getIdRol() == 4)) {
				# POR GET
				if ($_SERVER['REQUEST_METHOD'] == 'GET') {
					$user = $this->model->getById($_GET['id']);
					$perfil = ['admin', 'usuario', 'cliente', 'vendedor'];
					$estado = ['inactivo', 'activo'];
					require_once 'view/roles/'.$this->modulo.'/header.php';
					require_once 'view/modules/1_users/actualizar_usuario.view.php';
					require_once 'view/roles/'.$this->modulo.'/footer.php';
				}
				# POR POST
				if ($_SERVER['REQUEST_METHOD'] == 'POST') {
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
				header('Location: ?c=Dashboard');
			}
		}

		// Eliminar
		public function eliminar(){
			$valUsuario = unserialize($_SESSION['usuario']);
			if (isset($_SESSION['usuario']) && $valUsuario->getIdRol() == 1) {
				$this->model->eliminar($_GET['id']);
				header('Location: ?c=Users&a=consultar');
			} else {
				header('Location: ?c=Dashboard');
			}
		}
	}
?>