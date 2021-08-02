<?php session_start();

if (isset($_SESSION['usuario'])) {
	header('Location: index_admin.php');
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
	$password = $_POST['password'];
	$password2 = $_POST['password2'];	
	$errores = '';
	if (empty($usuario) or empty($password) or empty($password2) ) {
		$errores .= '<li>Por favor rellena todos los datos correctamente</li>';
	} else {
		try {
			$conexion = new PDO('mysql:host=localhost;dbname=db_proyecto_adsi', 'root', '');
		} catch (PDOException $e) {
			echo "Error: " . $e->getMessage();
		}

		$statement = $conexion->prepare('SELECT * FROM usuarios WHERE usuario = :usuario LIMIT 1');
		$statement->execute(array(':usuario' => $usuario));
		$resultado = $statement->fetch();

		if ($resultado != false) {
			$errores .= '<li>El nombre de usuario ya existe</li>';
		}

		$password = hash('sha512', $password);
		$password2 = hash('sha512', $password2);

		if ($password != $password2) {
			$errores .= '<li>Las contraseñas no son iguales</li>';
		}
	}
	if ($errores == '') {
		$statement = $conexion->prepare('INSERT INTO usuarios (id, usuario, pass) VALUES (null, :usuario, :pass)');
		$statement->execute(array(
			':usuario' => $usuario, 
			':pass' => $password
		));
		header('Location: login.php');
	}
}
require_once '../../paginas/registrate.vista.php';
?>