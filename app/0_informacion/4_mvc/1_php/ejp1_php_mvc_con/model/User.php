<?php 

	class User {

		private $id_usuario;
		private $usuario_nombres;
		private $usuario_apellidos;
		private $usuario_correo;
		private $usuario_pass;

		private $pdo;

		public function __construct(){
			try {
				$this->pdo = DataBase::conexion();
			} catch (Exception $e) {
				die($e->getMessage());
			}
		}

		public function setIdUsuario($id_usuario){
			$this->$id_usuario = $id_usuario;
		}

		public function getIdUsuario(){
			return $this->id_usuario;
		}

		public function setUsuarioNombres($usuario_nombres){
			$this->$usuario_nombres = $usuario_nombres;
		}

		public function getUsuarioNombres(){
			return $this->usuario_nombres;
		}

		public function setUsuarioApellidos($usuario_apellidos){
			$this->$usuario_apellidos = $usuario_apellidos;
		}

		public function getUsuarioApellidos(){
			return $this->usuario_apellidos;
		}

		public function setUsuarioCorreo($usuario_correo){
			$this->$usuario_correo = $usuario_correo;
		}

		public function getUsuarioCorreo(){
			return $this->usuario_correo;
		}

		public function setUsuarioPass($usuario_pass){
			$this->$usuario_pass = $usuario_pass;
		}

		public function getUsuarioPass(){
			return $this->usuario_pass;
		}

		// Registrar
		public function registrar($datos){
			try {
				# Consulta
				$sql = 'INSERT INTO usuarios (
						usuario_nombres,
						usuario_apellidos,
						usuario_correo,
						usuario_pass
						) VALUES (?,?,?,?)';

				# Prepara la BBDD
				$dbh = $this->pdo->prepare($sql);

				# Ejecuta la Consulta
				$stmt = $dbh->execute($datos);
				
			} catch (Exception $e) {
				die($e->getMessage());
			}
		}
		// Consultar
		// Actualizar
		// Eliminar

	}

?>