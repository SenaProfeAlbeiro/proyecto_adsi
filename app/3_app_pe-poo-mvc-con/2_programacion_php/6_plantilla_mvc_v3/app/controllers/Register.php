<?php session_start();

// Clase Controladora usuarios: Conexión, Modelo y Vista
class Register extends Controller{	
	// Constructor que trae la base de datos y el Modelo
	// para asociarlos	
	public function __construct(){
		$this->usuarioModelo = $this->modelo('User');
	}
	// Clase index que redirecciona al Dashboard
	public function index(){
		// Se carga la vista por primera vez
		if (!($_SERVER['REQUEST_METHOD'] == 'POST')) {
			$datos = [
				'titulo' => 'Empresa - Registro',				
				'nombre_usuario' => '',
				'telefono_usuario' => '',
				'email_usuario' => '',
				'username_usuario' => '',
				'password_usuario' => ''				
			];
			$this->vista('/business/register_view', $datos);			
		// Se traen los datos del formulario y se devuelven a la 
		// vista de Consultar Usuarios
		}else{
			$datos = [
				'titulo' => 'Empresa - Página Principal',
				'nombre_usuario' => trim($_POST['nombre_usuario']),
				'telefono_usuario' => trim($_POST['telefono_usuario']),
				'email_usuario' => trim($_POST['email_usuario']),
				'username_usuario' => trim($_POST['username_usuario']),
				'password_usuario' => trim($_POST['password_usuario']),
				'perfil_usuario' => trim('usuario'),
				'estado_usuario' => trim('inactivo')
			];
			// Si se envían los datos, se redirecciona a Consultar Usuarios
			if ($this->usuarioModelo->agregarUsuario($datos)) {
				redireccionar('/business/register_view');
			}else{
				die('Algo salió mal');
			}
		}	
	}
}
?>