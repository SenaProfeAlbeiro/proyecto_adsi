<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="id=edge">
	<title><?php echo NOMBRESISTEMA; ?></title>
	<link rel="stylesheet" href="<?php echo RUTA_URL; ?>/css/styles_dashboard.css">		
</head>
<body>	
	<div id="contenedor">
		<nav>Navegador
			<ul>
				<li><a href="<?php echo RUTA_URL. '/dashboardAdmin/index'; ?>">Inicio</a></li>
				<li><a href="<?php echo RUTA_URL. '/logout'; ?>">Cerrar Sesión</a></li>
			</ul>
		</nav>
		<aside>Panel Lateral
			<div><h3>Módulo Usuarios</h3>
				<ul>					
					<li><a href="<?php echo RUTA_URL. '/users/consultar_usuarios'; ?>">Consultar Usuarios</a></li>				
					<li><a href="<?php echo RUTA_URL. '/users/crear_usuario'; ?>">Crear Usuario</a></li>
				</ul>
			</div>
			<div><h3>Módulo Principal</h3>
				<ul>
					<li><a href="">Consultar Principales</a></li>				
					<li><a href="">Crear Principal</a></li>
				</ul>
			</div>
			<div><h3>Módulo Secundario</h3>
				<ul>
					<li><a href="">Consultar Secundarios</a></li>				
					<li><a href="">Crear Secundario</a></li>
				</ul>
			</div>
			<div><h3>Módulo Reportes</h3>
				<ul>
					<li><a href="">Consultar Reportes</a></li>				
					<li><a href="">Crear Reporte</a></li>
				</ul>
			</div>
		</aside>
	