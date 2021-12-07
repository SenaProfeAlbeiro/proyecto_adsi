<?php
	// Inicia una Sesión en el Navegador
	session_start();
	// Carga la Clase Modelo: User
	require_once 'model/User.php';
	// Clase Controlador: Se encarga del Login y Recuperación de Contraseña
	class Login {
		# Declaración de variable privada para crear un objeto a partir del Modelo User
		private $model;
		// Método Constructor: Crea un Objeto del Modelo User cuando se carga el Controlador
		public function __construct(){
			$this->model = new User();
		}
		// Método: Iniciar Sesión
		public function index(){
			# Mensaje de Validación
			$mensaje = "";
			# POST: Recibe los Datos del Formulario
			if (($_SERVER['REQUEST_METHOD']) == 'POST') {
				$user = $_POST['correo_is'];
				$pass = $_POST['pass_is'];
				$class = "alert alert-danger my-3 mb-0";
				if (empty($user)) {
					$mensaje = "El usuario NO puede estar vacío";
				} elseif (!(filter_var($user, FILTER_VALIDATE_EMAIL))) {
					$mensaje = "Correo de usuario NO válido, escriba un correo registrado";
				} elseif (empty($pass)){
					$mensaje = "La Contraseña NO puede estar vacía";
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
				# Vistas de la Página de la Empresa
				require_once 'view/roles/business/header.php';
				require_once 'view/business/index.view.php';
				require_once 'view/roles/business/footer.php';
				# Ventana Modal de Recuperación de Iniciar Sesión
				echo "<script>$('#mdl_iniciar_sesion').modal('show')</script>";
				# Alerta de Validación de Inicio de Sesión
				echo "<script>validarUsuario()</script>";
			}
		}
		// Método: Recuperar Contaseña
		public function recuperarPass(){
			# Mensaje de Validación
			$mensaje = "";
			# GET: Recibe los Datos de la URL
			if ($_SERVER['REQUEST_METHOD'] == 'GET') {				
				# Inicia el correo en blanco
				$paraCorreo = "";
				require_once 'view/roles/business/header.php';
				require_once 'view/business/index.view.php';
				require_once 'view/roles/business/footer.php';
				# Ventana Modal de Recuperación de Contraseña
				echo "<script>$('#mdl_recupera_pass').modal('show')</script>";
			}
			# POST: Recibe los Datos del Formulario
			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				# Correo a quien se le envía
				$paraCorreo = $_POST['correo_rc'];
				$class = "alert alert-danger my-3 mb-0";
				if (empty($paraCorreo)) {
					$mensaje = "El Correo NO puede estar vacío";
				} elseif (!(filter_var($paraCorreo, FILTER_VALIDATE_EMAIL))) {
					$mensaje = "NO es un Correo Válido";
				} else {
					$usuario = new User();
					$usuario->setCorreoUsuario($paraCorreo);
					$validaCorreo = $this->model->verificarCorreo($usuario);
					if ($validaCorreo) {
						if ($validaCorreo->getIdRol() == 2 && $validaCorreo->getEstadoUsuario() == 0) {
							$mensaje = "El Usuario existe pero no tiene Rol y está Inactivo";
						} elseif ($validaCorreo->getIdRol() == 2) {
							$mensaje = "El Usuario existe pero no tiene Rol asignado";
						} elseif ($validaCorreo->getEstadoUsuario() == 0) {
							$mensaje = "El Usuario existe pero está Inactivo";
						} else {
							# Código de Verificación				
							$codigo = rand(1000,9999);				
							# Asunto del Correo
							$titulo = "Restauración de Contraseña SenaProfeAlbeiro";
							# Mensaje del Correo
							$mensajeCorreo = '
							<html>
							<head>
							  <title>Restauración de Contraseña SenaProfeAlbeiro</title>
							</head>
							<body style="text-align:center;">
							  <h3>Restauración de Contraseña SenaProfeAlbeiro</h3>
							  El código de Restauración de Contraseña es: '. $codigo .
							  '. <a href="http://localhost/proyecto_adsi/app/0_informacion/5_mvc/1_php/ejp3_php_mvc_con/?c=Login&a=verificarCodigo">Clic aquí para Restaurar la Contraseña</a>
							</body>
							</html>
							';
							# Para enviar un correo HTML, debe establecerse la cabecera Content-type
							$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
							$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
							# Cabeceras adicionales: Quien envía el correo (Administrador)
							$cabeceras .= 'From: Restauración de Contraseña SenaProfeAlbeiro <earamos42@misena.edu.co>' . "\r\n";
							$mensaje = "Código de Restauración Enviado al Correo";
							$class = "alert alert-success my-3 mb-0";
						}						
					} else {
						$mensaje = "El Correo no se encuentra registrado";
					}										
				}
				require_once 'view/roles/business/header.php';
				require_once 'view/business/index.view.php';
				require_once 'view/roles/business/footer.php';
				# Ventana Modal de Recuperación de Contraseña
				echo "<script>$('#mdl_recupera_pass').modal('show')</script>";
				# Validar: Si se envía el correo aparece un mensaje de confirmación
				if (mail($paraCorreo, $titulo, $mensajeCorreo, $cabeceras)) {				
					echo "<script>correoEnviado()</script>";					
				} else {
					echo "<script>correoNoEnviado()</script>";
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