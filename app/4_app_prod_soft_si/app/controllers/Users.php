<?php session_start();

// Clase Controladora usuarios: Conexión, Modelo y Vista
class Users extends Controller{	
	// Constructor que trae la base de datos y el Modelo
	// para asociarlos	
	public function __construct(){
		$this->usuarioModelo = $this->modelo('User');
	}
	// Clase index que redirecciona al Dashboard
	public function index(){
		$usuarios = $this->usuarioModelo->obtenerUsuarios();		
		$datos = [
			'titulo' => 'Administrador - Vista Principal',			
			'modulo' => '0_mains',
			'vista' => 'admin_main_view.php',
			'usuarios' => $usuarios		
		];
		$this->vista('/modules/dashboard_admin_view', $datos);	
	}
	// Crear Usuarios
	public function crear_usuario(){
		// Se carga la vista por primera vez
		if (!($_SERVER['REQUEST_METHOD'] == 'POST')) {
			$datos = [
				'titulo' => 'Administrador - Crear Usuario',				
				'modulo' => '1_users',
				'vista' => 'crear_usuario_view.php',
				'nombre_usuario' => '',
				'telefono_usuario' => '',
				'email_usuario' => '',
				'username_usuario' => '',
				'password_usuario' => '',
				'peril_usuario' => '',
				'estado_usuario' => ''
			];
			$this->vista('/modules/dashboard_admin_view', $datos);			
		// Se traen los datos del formulario y se devuelven a la 
		// vista de Consultar Usuarios
		}else{
			$datos = [
				'titulo' => 'Administrador - Crear Usuario',				
				'modulo' => '1_users',
				'vista' => 'crear_usuario_view.php',
				'nombre_usuario' => trim($_POST['nombre_usuario']),
				'telefono_usuario' => trim($_POST['telefono_usuario']),
				'email_usuario' => trim($_POST['email_usuario']),
				'username_usuario' => trim($_POST['username_usuario']),
				'password_usuario' => trim($_POST['password_usuario']),
				'perfil_usuario' => trim($_POST['perfil_usuario']),
				'estado_usuario' => trim($_POST['estado_usuario'])
			];
			// Si se envían los datos, se redirecciona a Consultar Usuarios
			if ($this->usuarioModelo->agregarUsuario($datos)) {
				redireccionar('/users/consultar_usuarios');
			}else{
				die('Algo salió mal');
			}
		}
	}

	// Consultar Usuarios
	public function consultar_usuarios(){
		$usuarios = $this->usuarioModelo->obtenerUsuarios();
		$datos = [
			'titulo' => 'Administrador - Consultar Usuarios',			
			'modulo' => '1_users',
			'vista' => 'consultar_usuarios_view.php',
			'usuarios' => $usuarios
		];
		$this->vista('/modules/dashboard_admin_view', $datos);		
	}	
	// Actualizar Usuarios
	public function actualizar_usuario($num_registro){		
		// Se carga la vista por primera vez
		if (!($_SERVER['REQUEST_METHOD'] == 'POST')) {
			// Obtener información de usuario desde el modelo
			$usuario = $this->usuarioModelo->obtenerUsuario($num_registro);
			$datos = [
				'titulo' => 'Administrador - Crear Usuario',				
				'modulo' => '1_users',
				'vista' => 'actualizar_usuario_view.php',
				'id_usuario' => $usuario->id_usuario,
				'nombre_usuario' => $usuario->nombre_usuario,
				'telefono_usuario' => $usuario->telefono_usuario,
				'email_usuario' => $usuario->email_usuario,
				'username_usuario' => $usuario->username_usuario,
				'password_usuario' => $usuario->password_usuario,
				'perfil_usuario' => $usuario->perfil_usuario,
				'estado_usuario' => $usuario->estado_usuario
			];
			$this->vista('/modules/dashboard_admin_view', $datos);
		// Se traen los datos del formulario y se devuelven a la 
		// vista de Consultar Usuarios
		}else{
			$datos = [
				'titulo' => 'Administrador - Crear Usuario',				
				'modulo' => '1_users',
				'vista' => 'actualizar_usuario_view.php',
				'id_usuario' => $num_registro,
				'nombre_usuario' => trim($_POST['nombre_usuario']),
				'telefono_usuario' => trim($_POST['telefono_usuario']),
				'email_usuario' => trim($_POST['email_usuario']),
				'username_usuario' => trim($_POST['username_usuario']),
				'password_usuario' => trim($_POST['password_usuario']),
				'perfil_usuario' => trim($_POST['perfil_usuario']),
				'estado_usuario' => trim($_POST['estado_usuario'])				
			];
			// Si se envían los datos, se redirecciona a Consultar Usuarios
			if ($this->usuarioModelo->actualizarUsuario($datos)) {
				redireccionar('/users/consultar_usuarios');
			}else{
				die('Algo salió mal');
			}
		}
	}
	// Eliminar Usuarios
	public function eliminar_usuario($num_registro){		
		// Se carga la vista por primera vez
		if (!($_SERVER['REQUEST_METHOD'] == 'POST')) {
			// Obtener información de usuario desde el modelo
			$usuario = $this->usuarioModelo->obtenerUsuario($num_registro);
			$datos = [
				'titulo' => 'Administrador - Crear Usuario',				
				'modulo' => '1_users',
				'vista' => 'actualizar_usuario_view.php',
				'id_usuario' => $usuario->id_usuario,
				'nombre_usuario' => $usuario->nombre_usuario,
				'email_usuario' => $usuario->email_usuario,
				'telefono_usuario' => $usuario->telefono_usuario
			];
			$this->vista('/modules/dashboard_admin_view', $datos);
		// Se traen los datos del formulario y se devuelven a la 
		// vista de Consultar Usuarios
		}else{
			$datos = [
				'titulo' => 'Administrador - Crear Usuario',				
				'modulo' => '1_users',
				'vista' => 'actualizar_usuario_view.php',
				'id_usuario' => $num_registro				
			];
			// Si se envían los datos, se redirecciona a Consultar Usuarios
			if ($this->usuarioModelo->borrarUsuario($datos)) {
				redireccionar('/users/consultar_usuarios');
			}else{
				die('Algo salió mal');
			}
		}
	}
}
?>