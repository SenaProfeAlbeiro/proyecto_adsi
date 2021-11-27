<?php session_start();
	
	require_once 'model/User.php';

	class Login {

		private $model;

		public function __construct(){
			$this->model = new User();
		}
		// Método Inicial
		public function index(){			
			$mensaje = "";
			# Envía los cambios a través de un objeto que actualiza la BBDD
			if (($_SERVER['REQUEST_METHOD']) == 'POST') {
				$user = $_POST['usuario'];
				$pass = $_POST['pass'];
				$class = "alert alert-danger my-3 mb-0";
				if (empty($user)) {
					$mensaje = "El usuario no puede estar vacío";
				} elseif (!(filter_var($user, FILTER_VALIDATE_EMAIL))) {
					$mensaje = "No es un usuario válido, escriba un correo registrado";
				} elseif (empty($pass)){
					$mensaje = "La Contraseña no puede estar vacía";
				} elseif (strlen($pass) < 5 || strlen($pass) > 8) {
					$mensaje = "La Contraseña debería tener entre 5 y 8 caracteres";
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
						$mensaje = "Usuario y/o Contraseña Incorrectos";
					}
				}
				require_once 'view/roles/business/header.php';
				require_once 'view/business/index.view.php';
				require_once 'view/roles/business/footer.php';
				echo "<script>$('#iniciar-sesion').modal('show')</script>";
				echo "<script>validarUsuario()</script>";
			}
		}
		// Método Recuparar Contaseña
		public function recuperarPass(){
			if ($_SERVER['REQUEST_METHOD'] == 'GET') {				
				require_once 'view/roles/business/header.php';
				require_once 'view/business/index.view.php';
				require_once 'view/roles/business/footer.php';
				echo "<script>$('#recupera_pass').modal('show')</script>";
			}
			if ($_SERVER['REQUEST_METHOD'] == 'POST') {				
				$user = $_POST['usuario'];
				require_once 'view/roles/business/header.php';
				require_once 'view/business/index.view.php';
				require_once 'view/roles/business/footer.php';
				echo "<script>enviarPassCorreo()</script>";
			}
		}
	}
?>