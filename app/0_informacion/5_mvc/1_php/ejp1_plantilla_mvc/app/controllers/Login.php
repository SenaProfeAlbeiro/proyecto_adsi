<?php session_start();

class Login extends Controller{

	public function __construct(){
		$this->usuarioModelo = $this->modelo('User');
	}
	// Clase index que redirecciona a la vista del login
	public function index(){
		// Si no está iniciado el método post
		if (!($_SERVER['REQUEST_METHOD'] == 'POST')) {
			$datos = [
				'titulo' => 'Empresa - Iniciar Sesión',
				'username_usuario' => '',
				'password_usuario' => ''
			];
			$this->vista('/business/login_view', $datos);
		// Si está iniciado el método post
		}else{
			$datos = [
				'titulo' => 'Empresa - Página Principal',
				'username_usuario' => trim($_POST['username_usuario']),
				'password_usuario' => trim($_POST['password_usuario']),
				'estado_usuario' => trim('activo')
			];
			$resultado = $this->usuarioModelo->iniciarSesion($datos);

			if ($resultado === true) {
				$_SESSION['usuario'] = $datos;				
				redireccionar('/DashboardAdmin/index');				
			} else {				
				redireccionar('/login');
			}			
		}
	}
}

?>