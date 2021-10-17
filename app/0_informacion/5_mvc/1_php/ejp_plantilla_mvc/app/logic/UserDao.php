<?php 

class UserDao{

	private $db;

	public function __construct(){
		$this->db = new Connection;
	}

	// Iniciar Sesión
	public function iniciarSesion($datos){
		// Prepara la consulta
		$this->db->query('SELECT * FROM usuarios WHERE username_usuario = :username_usuario	AND password_usuario = :password_usuario');
		// Vincula valores
		$this->db->bind(':username_usuario', $datos['username_usuario']);
		$this->db->bind(':password_usuario', $datos['password_usuario']);
		// Ejecuta			
		if ($this->db->registro()) {
			return true;
		}else{
			return false;
		}
	}

	// Cerrar Sesión
	public function cerrarSesion($datos){
		// Prepara la consulta
		$this->db->query('SELECT * FROM usuarios WHERE username_usuario = :username_usuario	AND password_usuario = :password_usuario');
		// Vincula valores
		$this->db->bind(':username_usuario', $datos['username_usuario']);
		$this->db->bind(':password_usuario', $datos['password_usuario']);
		// Ejecuta			
		if ($this->db->registro()) {
			return true;
		}else{
			return false;
		}
	}

	// Crear Usuario
	public function agregarUsuario($datos){
		$this->db->query('INSERT INTO usuarios 
			(nombre_usuario, telefono_usuario, email_usuario, username_usuario, password_usuario, perfil_usuario, estado_usuario)
			VALUES
			(:nombre_usuario, :telefono_usuario, :email_usuario, :username_usuario, :password_usuario, :perfil_usuario, :estado_usuario)');
	// Vincular los valores
		$this->db->bind(':nombre_usuario', $datos['nombre_usuario']);
		$this->db->bind(':telefono_usuario', $datos['telefono_usuario']);
		$this->db->bind(':email_usuario', $datos['email_usuario']);
		$this->db->bind(':username_usuario', $datos['username_usuario']);
		$this->db->bind(':password_usuario', $datos['password_usuario']);
		$this->db->bind(':perfil_usuario', $datos['perfil_usuario']);
		$this->db->bind(':estado_usuario', $datos['estado_usuario']);			
	// Ejecutar
		if ($this->db->execute()) {
			return true;
		}else{
			return false;
		}
	}

	// Consultar Usuarios
	public function obtenerUsuarios(){
		$this->db->query('SELECT * FROM usuarios');
		$resultados = $this->db->registros();
		return $resultados;
	}
	// Actualizar Usuario
	public function obtenerUsuario($num_registro){
		$this->db->query('SELECT * FROM usuarios WHERE id_usuario = :id_usuario');
		$this->db->bind(':id_usuario', $num_registro);
		$fila = $this->db->registro();
		return $fila;
	}
	public function actualizarUsuario($datos){
		$this->db->query('UPDATE usuarios SET  
			nombre_usuario = :nombre_usuario, 
			telefono_usuario = :telefono_usuario,
			email_usuario = :email_usuario,
			username_usuario = :username_usuario,
			password_usuario = :password_usuario,
			perfil_usuario = :perfil_usuario,
			estado_usuario = :estado_usuario
			WHERE id_usuario = :id_usuario');
	// Vincular los valores
		$this->db->bind(':id_usuario', $datos['id_usuario']);
		$this->db->bind(':nombre_usuario', $datos['nombre_usuario']);
		$this->db->bind(':telefono_usuario', $datos['telefono_usuario']);
		$this->db->bind(':email_usuario', $datos['email_usuario']);
		$this->db->bind(':username_usuario', $datos['username_usuario']);
		$this->db->bind(':password_usuario', $datos['password_usuario']);
		$this->db->bind(':perfil_usuario', $datos['perfil_usuario']);
		$this->db->bind(':estado_usuario', $datos['estado_usuario']);
	// Ejecutar
		if ($this->db->execute()) {
			return true;
		}else{
			return false;
		}
	}
	// Eliminar Usuario
	public function borrarUsuario($datos){
		$this->db->query('DELETE FROM usuarios WHERE id_usuario = :id_usuario');
	// Vincular los valores
		$this->db->bind(':id_usuario', $datos['id_usuario']);			
	// Ejecutar
		if ($this->db->execute()) {
			return true;
		}else{
			return false;
		}
	}
}
?>