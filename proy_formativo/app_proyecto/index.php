<?php session_start();

if (isset($_SESSION['usuario'])) {
	header('Location: app/logica/index_admin.php');
} else {
	header('Location: app/logica/index_empresa.php');	
}

?>
