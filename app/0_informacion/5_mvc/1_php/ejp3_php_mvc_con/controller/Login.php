<?php session_start();
	
	require_once 'model/User.php';

	class Login {

		public function __construct(){
			$this->model = new User();
		}

		public function index(){
			# Envía los cambios a través de un objeto que actualiza la BBDD
			$user = "";
			$pass = "";
			$mensaje = "";
			if (($_SERVER['REQUEST_METHOD']) == 'POST') {
				$user = $_POST['usuario'];
				$pass = $_POST['pass'];				
				if (empty($user) || empty($pass)) {
					if (empty($user)) {
						$mensaje = "El usuario no puede estar vacío";
					} elseif (empty($pass)) {
						$mensaje = "La constraseña no puede estar vacía";
					}
					$class = "alert alert-danger mt-2";
					require_once 'view/roles/0_business/header.php';
					require_once 'view/business/landing.main.view.php';
					require_once 'view/roles/0_business/footer.php';
					echo "<script>$('#iniciar-sesion').modal('show')</script>";
				} else {					
					$usuario = new User($user, $pass);
					$usuario = $this->model->iniciarSesion($usuario);				
					if ($usuario) {
						if ($usuario->getEstadoUsuario() == 1) {
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
							header('Location: ?');
						}					
					} else {
						$mensaje = "Usuario y/o contraseña Incorrectos";
						$class = "alert alert-danger mt-2";
						require_once 'view/roles/0_business/header.php';
						require_once 'view/business/landing.main.view.php';
						require_once 'view/roles/0_business/footer.php';
						echo "<script>$('#iniciar-sesion').modal('show')</script>";
						echo "<script>validarUsuario()</script>";
					}
				}
			}
		}
	}
?>