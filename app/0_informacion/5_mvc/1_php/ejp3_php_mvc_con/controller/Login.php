<?php 
	
	require_once 'model/User.php';

	class Login {

		private $model;

		public function __construct(){
			$this->model = new User();
		}

		public function index(){
			# Envía los cambios a través de un objeto que actualiza la BBDD
			if (($_SERVER['REQUEST_METHOD']) == 'POST') {
				$usuario = new User($_POST['usuario'], sha1($_POST['pass']));
				$usuario = $this->model->iniciarSesion($usuario);
				if ($usuario) {
					if ($usuario->getIdRol() == 1 && $usuario->getEstadoUsuario() == 1) {
						header('Location: ?c=DashboardAdmin');
					} else {
						echo "<script>alert('Todavía no estoy Activo o no está construida la interfaz del perfil');event.preventDefault();</script>";
						// header('Location: ?');
					}
				} else {
					header('Location: ?');
					echo "<script>alert('No existo')</script>";
				}
			}
		}

	}


?>