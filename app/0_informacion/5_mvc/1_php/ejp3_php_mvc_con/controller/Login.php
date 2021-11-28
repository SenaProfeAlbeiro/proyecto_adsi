<?php session_start();
	
	require_once 'model/User.php';

	class Login {

		private $model;

		public function __construct(){
			$this->model = new User();
		}
		// Método Inicial Iniciar Sesión
		public function index(){
			$mensaje = "";
			# Envía los cambios a través de un objeto que actualiza la BBDD
			if (($_SERVER['REQUEST_METHOD']) == 'POST') {
				$user = $_POST['correo_is'];
				$pass = $_POST['pass_is'];
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
				echo "<script>$('#mdl_iniciar_sesion').modal('show')</script>";
				echo "<script>validarUsuario()</script>";
			}
		}
		// Método Recuparar Contaseña
		public function recuperarPass(){
			if ($_SERVER['REQUEST_METHOD'] == 'GET') {				
				require_once 'view/roles/business/header.php';
				require_once 'view/business/index.view.php';
				require_once 'view/roles/business/footer.php';
				echo "<script>$('#mdl_recupera_pass').modal('show')</script>";
			}
			if ($_SERVER['REQUEST_METHOD'] == 'POST') {				
				$codigo = rand(1000,9999);
				$paracorreo = $_POST['correo_rc'];
				$titulo = "Restauración de Contraseña SenaProfeAlbeiro";
				$mensaje = 'El código de Restauración de Contraseña es: '. $codigo .'. Para restaurar la contraseña de Clic en el siguiente Enlace: http://localhost/2_desarrollo_web/proyecto_php_mvc/?c=Login&a=verificarCodigo';
				$tucorreo = "From: profealbeiro2020@gmail.com";
				require_once 'view/roles/business/header.php';
				require_once 'view/business/index.view.php';
				require_once 'view/roles/business/footer.php';
				if (mail($paracorreo, $titulo, $mensaje, $tucorreo)) {
					echo "<script>enviarPassCorreo()</script>";					
				}				
			}
		}
		// Método Código de Verificación
		public function verificarCodigo(){
			if ($_SERVER['REQUEST_METHOD'] == 'GET') {				
				require_once 'view/roles/business/header.php';
				require_once 'view/business/index.view.php';
				require_once 'view/roles/business/footer.php';
				echo "<script>$('#mdl_verif_cod').modal('show')</script>";
			}
			if ($_SERVER['REQUEST_METHOD'] == 'POST') {				
				$codigo = $_POST['codigo_vf'];				
				require_once 'view/roles/business/header.php';
				require_once 'view/business/index.view.php';
				require_once 'view/roles/business/footer.php';
				echo "<script>verificarCodigo()</script>";
				echo "<script>$('#mdl_pass_conf').modal('show')</script>";								
			}
		}
		// Método Código de Verificación
		public function passConfirm(){
			if ($_SERVER['REQUEST_METHOD'] == 'POST') {				
				$pass = $_POST['pass_conf'];				
				$conf = $_POST['conf_pass'];				
				require_once 'view/roles/business/header.php';
				require_once 'view/business/index.view.php';
				require_once 'view/roles/business/footer.php';
				echo "<script>passConfirm()</script>";
			}
		}

	}
?>