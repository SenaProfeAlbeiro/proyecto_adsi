<?php session_start();
	
	require_once 'model/User.php';

	class Login {

		public function __construct(){
			$this->model = new User();
		}

		public function index(){
			# Envía los cambios a través de un objeto que actualiza la BBDD
			if (($_SERVER['REQUEST_METHOD']) == 'POST') {
				$usuario = new User($_POST['usuario'], sha1($_POST['pass']));
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
					require_once 'view/roles/0_business/header.php';
					require_once 'view/business/landing.main.view.php';
					require_once 'view/roles/0_business/footer.php';

					echo "<script>validarUsuario()</script>";					
				}
			}
		}
	}
?>