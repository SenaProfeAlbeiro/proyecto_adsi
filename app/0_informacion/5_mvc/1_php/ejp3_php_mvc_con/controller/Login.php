<?php session_start();
	
	require_once 'model/User.php';

	class Login {

		private $model;

		public function __construct(){
			$this->model = new User();
		}

		public function index(){			
			$mensaje = "";
			# Envía los cambios a través de un objeto que actualiza la BBDD
			if (($_SERVER['REQUEST_METHOD']) == 'POST') {
				$user = $_POST['usuario'];
				$pass = $_POST['pass'];
				if (empty($user)) {
					$mensaje = "El usuario no puede estar vacío";
					$class = "alert alert-danger mt-2 mb-0";
				} elseif (!(filter_var($user, FILTER_VALIDATE_EMAIL))) {
					$mensaje = "No es un usuario válido, escriba un correo registrado";
					$class = "alert alert-danger mt-2 mb-0";
				} elseif (empty($pass)){
					$mensaje = "La Contraseña no puede estar vacía";
					$class = "alert alert-danger mt-2 mb-0";
				} elseif (strlen($pass) < 5 || strlen($pass) > 8) {
					$mensaje = "La Contraseña debería tener entre 5 y 8 caracteres";
					$class = "alert alert-danger mt-2 mb-0";
				} else {
					$usuario = new User($user, $pass);
					$usuario = $this->model->iniciarSesion($usuario);
					if ($usuario) {
						if ($usuario->getEstadoUsuario() == 1){
							if ($usuario->getIdRol() == 1) {
								$_SESSION['modulo'] = 'admin';
							} elseif ($usuario->getIdRol() == 3) {
								$_SESSION['modulo'] = 'cliente';
							} elseif ($usuario->getIdRol() == 4) {
								$_SESSION['modulo'] = 'vendedor';
							}
							$usuario = serialize($usuario);
							$_SESSION['usuario'] = $usuario;
							header('Location: ?c=Dashboard');
						} else {
							$mensaje = "El usuario no está activo";
						} 
					} else {
						$mensaje = "Usuario y/o Contraseña Inválidos";
						$class = "alert alert-danger mt-2 mb-0";
					}
				}
				require_once 'view/roles/business/header.php';
				require_once 'view/business/index.view.php';
				require_once 'view/roles/business/footer.php';
				echo "<script>$('#iniciar-sesion').modal('show')</script>";
				echo "<script>validarUsuario()</script>";
			}
		}
		public function recuperarPass(){
			if ($_SERVER['REQUEST_METHOD'] == 'GET') {				
				require_once 'view/roles/business/header.php';
				require_once 'view/business/index.view.php';
				require_once 'view/roles/business/footer.php';
				echo "<script>$('#recupera_pass').modal('show')</script>";
			}
			if ($_SERVER['REQUEST_METHOD'] == 'POST') {				
				header('Location: ?');
			}

		}
	}
?>