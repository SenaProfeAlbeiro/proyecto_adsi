<?php session_start();

if (isset($_SESSION['usuario'])) {
	require_once '../vistas/modulos/index_admin.vista.php';
} else {
	header('Location: ../../index.php');
}

?>