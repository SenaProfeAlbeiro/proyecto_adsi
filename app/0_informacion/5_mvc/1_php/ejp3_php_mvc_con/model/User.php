<?php 

	class User {

		private $idRol;
		private $idUsuario;
	    private $nombresUsuario;
    	private $apellidosUsuario;
    	private $correoUsuario;
    	private $passUsuario;
    	private $estadoUsuario;

    	private $pdo;

    	public function __construct(){
			try {
				$this->pdo = DataBase::conexion();
			} catch (Exception $e) {
				die($e->getMessage());
			}
		}

		public function getRol(){
    		return $this->idRol;
    	}

    	public function setIdRol($idRol){
    		$this->idRol = $idRol;
    	}

    	public function getIdUsuario(){
    		return $this->idUsuario;
    	}

    	public function setIdUsuario($idUsuario){
    		$this->idUsuario = $idUsuario;
    	}

    	public function getNombresUsuario(){
    		return $this->nombresUsuario;
    	}

    	public function setNombresUsuario($nombresUsuario){
    		$this->nombresUsuario = $nombresUsuario;
    	}

    	public function getApellidosUsuario(){
    		return $this->apellidosUsuario;
    	}

    	public function setApellidosUsuario($apellidosUsuario){
    		$this->apellidosUsuario = $apellidosUsuario;
    	}

    	public function getCorreoUsuario(){
    		return $this->correoUsuario;
    	}

    	public function setCorreoUsuario($correoUsuario){
    		$this->correoUsuario = $correoUsuario;
    	}

    	public function getPassUsuario(){
    		return $this->passUsuario;
    	}

    	public function setPassUsuario($passUsuario){
    		$this->passUsuario = $passUsuario;
    	}

    	public function getEstadoUsuario(){
    		return $this->estadoUsuario;
    	}

    	public function setEstadoUsuario($estadoUsuario){
    		$this->estadoUsuario = $estadoUsuario;
    	}

		// Registrar
		public function registrar($usuario){
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

				# Arreglo de Datos 
				$datos = array(
					$usuario->getNombresUsuario(),
					$usuario->getApellidosUsuario(),
					$usuario->getCorreoUsuario(),
					$usuario->getPassUsuario()
				);

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