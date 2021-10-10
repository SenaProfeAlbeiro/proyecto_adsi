<?php session_start();

class Logout extends Controller{

	public function __construct(){
		// $this->usuarioModelo = $this->modelo('User');
	}
// Clase index que redirecciona a la vista del login
	public function index(){
		session_destroy();
		$_SESSION = array();
		redireccionar('/LandingPage');
	}
}

?>