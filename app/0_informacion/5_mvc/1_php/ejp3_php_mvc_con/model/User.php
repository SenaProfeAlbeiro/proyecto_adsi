<?php 

	class User {
		// 1era Parte - POO: Programación Orientada a Objetos
		private $idRol = 2;
		private $idUsuario = null;
		private $docIdUsuario = 0;
	    private $nombresUsuario;
    	private $apellidosUsuario;
    	private $correoUsuario;
    	private $passUsuario = 0;
    	private $estadoUsuario = false;

    	private $pdo;

    	// Sobrecarga de Constructores
		public function __construct(){
			$a = func_get_args();
			$i = func_num_args();
			if (method_exists($this, $f='__construct'.$i)) {
				call_user_func_array(array($this, $f), $a);
			}
		}
		// Constructor sin parámetros: Crea la conexión a la BBDD
		public function __construct0(){
			try {
				$this->pdo = Database::conexion();
			} catch (Exception $e) {
				die($e->getMessage());
			}
		}
		// Constructor con 2 parámetros: Inicio de sesión
		function __construct2($correo, $pass){
	    	$this->correoUsuario = $correo;			
	    	$this->passUsuario = sha1($pass);	    	
		}
		// Constructor con 4 parámetros: Crea el Usuario desde la página empresarial
		public function __construct4($correo, $nombres, $apellidos, $pass){			
			$this->correoUsuario = $correo;			
			$this->nombresUsuario = $nombres;
			$this->apellidosUsuario = $apellidos;
			$this->passUsuario = $pass;
		}
		// Constructor con 8 parámetros: Crea el Usuario desde los perfiles autorizados
		public function __construct8($id, $doc, $correo, $nombres, $apellidos, $pass, $perfil, $estado){
			$this->idUsuario = $id;
			$this->docIdUsuario = $doc;
			$this->nombresUsuario = $nombres;
			$this->apellidosUsuario = $apellidos;
			$this->correoUsuario = $correo;
			$this->idRol = $perfil;
			$this->passUsuario = $pass;
			$this->estadoUsuario = $estado;
		}
		// // Métodos Getters y Setters
		# idRol
		public function getIdRol(){
			return $this->idRol;
		}
		public function setIdRol($idRol){
			$this->idRol = $idRol;
		}
		# idUsuario
		public function getIdUsuario(){
			return $this->idUsuario;
		}
		public function setIdUsuario($idUsuario){
			$this->idUsuario = $idUsuario;
		}
		# docIdUsuario
		public function getDocIdUsuario(){
			return $this->docIdUsuario;
		}
		public function setDocIdUsuario($docIdUsuario){
			$this->docIdUsuario = $docIdUsuario;
		}
		# nombresUsuario
		public function getNombresUsuario(){
			return $this->nombresUsuario;
		}
		public function setNombresUsuario($nombresUsuario){
			$this->nombresUsuario = $nombresUsuario;
		}
		# apellidosUsuario
		public function getApellidosUsuario(){
			return $this->apellidosUsuario;
		}
		public function setApellidosUsuario($apellidosUsuario){
			$this->apellidosUsuario = $apellidosUsuario;
		}
		# correoUsuario
		public function getCorreoUsuario(){
			return $this->correoUsuario;
		}
		public function setCorreoUsuario($correoUsuario){
			$this->correoUsuario = $correoUsuario;
		}
		# passUsuario
		public function getPassUsuario(){
			return $this->passUsuario;
		}
		public function setPassUsuario($passUsuario){
			$this->passUsuario = $passUsuario;
		}
		# estadoUsuario
		public function getEstadoUsuario(){
			return $this->estadoUsuario;
		}
		public function setEstadoUsuario($estadoUsuario){
			$this->estadoUsuario = boolval($estadoUsuario);
		}
/*----------------------------------------------------------------------------------------*/
/*----------------------------------------------------------------------------------------*/
		// 2da Parte - Lógica de Negocio (Casos de Uso -> Interactúan con la BBDD)
		// Iniciar Sesión
		public function iniciarSesion($usuario){
			try {
				# Consulta
				$sql = 'SELECT * FROM usuarios WHERE 
						usuario_correo = :usuario_correo AND
						usuario_pass = :usuario_pass';

				# Prepara la BBDD
				$dbh = $this->pdo->prepare($sql);

				// # Vincula Datos
				$dbh->bindValue('usuario_correo', $usuario->getCorreoUsuario());
				$dbh->bindValue('usuario_pass', $usuario->getPassUsuario());

				// # Ejecuta la Consulta
				$dbh->execute();

				// # Encontrar en la BBDD
				$userDb = $dbh->fetch();

				if ($userDb) {					
					# Crear Objeto
					$user = new User(
						$userDb['id_usuario'],
						$userDb['usuario_doc_identidad'],
						$userDb['usuario_correo'],
						$userDb['usuario_nombres'],
						$userDb['usuario_apellidos'],
						$userDb['usuario_pass'],
						$userDb['id_rol'],
						$userDb['usuario_estado']
					);
					return $user;
				} else {
					return false;
				}

			} catch (Exception $e) {
				die($e->getMessage());
			}
		}

		# Registar (Crear) Usuario
		public function registrar($usuario){
			try {
				# Consulta: SQL
				$sql = 'INSERT INTO usuarios VALUES (
							:id_rol,
							null,
							:usuario_doc_identidad,
							:usuario_nombres,
							:usuario_apellidos,
							:usuario_correo,
							:usuario_pass,
							:usuario_estado
						)';

				# Prepara la consulta en la BBDD
				$dbh = $this->pdo->prepare($sql);

				# Vincula datos a la Consultar
				$dbh->bindValue('id_rol', $usuario->getIdRol());
				$dbh->bindValue('usuario_doc_identidad', $usuario->getDocIdUsuario());
				$dbh->bindValue('usuario_nombres', $usuario->getNombresUsuario());
				$dbh->bindValue('usuario_apellidos', $usuario->getApellidosUsuario());
				$dbh->bindValue('usuario_correo', $usuario->getCorreoUsuario());
				$dbh->bindValue('usuario_pass', $usuario->getPassUsuario());			
				$dbh->bindValue('usuario_estado', $usuario->getEstadoUsuario());

				# Ejecutar la Consulta
				$dbh->execute();

			} catch (Exception $e) {
				die($e->getMessage());
			}
		}
		# Consultar Usuarios
		public function listar(){
			try {
				# Crear Arreglo
				$userList = [];

				# Consulta
				$sql = 'SELECT * FROM usuarios';

				# Prepara la consulta
				$dbh = $this->pdo->query($sql);

				# Recorre la objeto
				foreach ($dbh->fetchAll() as $user) {
					$userList[] = new User(
						$user['id_usuario'],
						$user['usuario_doc_identidad'],
						$user['usuario_correo'],
						$user['usuario_nombres'],
						$user['usuario_apellidos'],
						$user['usuario_pass'],
						$user['id_rol'],
						$user['usuario_estado']
					);
				}

				# Devolver un Arreglo de Objetos
				return $userList;
			} catch (Exception $e) {
				die($e->getMessage());
			}
		}
		# Actualizar Parte I: Conseguir el Usuario
		public function getById($id){
			try {
				# Consulta
				$sql = 'SELECT * FROM usuarios WHERE id_usuario=:id_usuario';

				# Prepara la BBDD
				$dbh = $this->pdo->prepare($sql);

				# Vincula Datos
				$dbh->bindValue('id_usuario', $id);

				# Ejecuta la Consulta
				$dbh->execute();

				# Crea el objeto de la BBDD
				$userDb = $dbh->fetch();

				# Crea el objeto del modelo
				$user = new User(
					$userDb['id_usuario'],
					$userDb['usuario_doc_identidad'],
					$userDb['usuario_correo'],
					$userDb['usuario_nombres'],
					$userDb['usuario_apellidos'],
					$userDb['usuario_pass'],
					$userDb['id_rol'],
					$userDb['usuario_estado']					
				);

				# Retorna el objeto con los datos
				return $user;

			} catch (Exception $e) {
				die($e->getMessage());	
			}
		}
		# Actualizar Parte II: Registrar el Usuario
		public function actualizar($usuario){
			try {
				# Consulta
				$sql = 'UPDATE usuarios SET
							id_rol = :id_rol,
							usuario_doc_identidad = :usuario_doc_identidad,
							usuario_nombres = :usuario_nombres,
							usuario_apellidos = :usuario_apellidos,
							usuario_correo = :usuario_correo,
							usuario_pass = :usuario_pass,
							usuario_estado = :usuario_estado
						WHERE id_usuario=:id_usuario';

				# Prepara la BBDD
				$dbh = $this->pdo->prepare($sql);

				# Vincula datos
				$dbh->bindValue('id_rol', $usuario->getIdRol());
				$dbh->bindValue('id_usuario', $usuario->getIdUsuario());
				$dbh->bindValue('usuario_doc_identidad', $usuario->getDocIdUsuario());
				$dbh->bindValue('usuario_nombres', $usuario->getNombresUsuario());
				$dbh->bindValue('usuario_apellidos', $usuario->getApellidosUsuario());
				$dbh->bindValue('usuario_correo', $usuario->getCorreoUsuario());
				$dbh->bindValue('usuario_pass', $usuario->getPassUsuario());
				$dbh->bindValue('usuario_estado', $usuario->getEstadoUsuario());

				# Ejecuta la Consulta
				$dbh->execute();

			} catch (Exception $e) {
				die($e->getMessage());	
			}
		}
		# Eliminar Usuario
		public function eliminar($id){
			try {
				# Consulta
				$sql = 'DELETE FROM usuarios WHERE id_usuario=:id_usuario';

				# Prepara la BBDD
				$dbh = $this->pdo->prepare($sql);

				# Vincula datos
				$dbh->bindValue('id_usuario', $id);

				# Ejecuta la Consulta
				$dbh->execute();

			} catch (Exception $e) {
				die($e->getMessage());		
			}
		}
		# Cerrar Sesión
		public function cerrarSesión(){}

	}

?>