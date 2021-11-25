<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Empresa</title>
	<!-- Estilos -->
	<link rel="shortcut icon" href="assets/img/LogoSena.png">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">	
	<link rel="stylesheet" href="assets/css/all.css">	
	<link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
	<!-- Contenedor -->
	<div class="container">
		
		<!-- Navegador -->		
		<nav class="navegacion row sticky-top d-flex">
			<div class="logo col-lg-3 d-flex justify-content-center p-0">
				<img class="img-fluid" src="assets/img/bannersena.png" alt="">
			</div>
			<div class="col-lg-9 p-0">
				<div class="navbar navbar-expand-lg navbar-light">
					<a class="navbar-brand" href="#"></a>
					<button class="navbar-toggler bg-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon text-light"></span>
					</button>

					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav mr-auto">
							<li class="nav-item active">
								<a class="nav-link text-white" href="#"><span class="sr-only">(current)</span></a>
							</li>
						</ul>
						<ul class="navbar-nav">
							<li class="nav-item active">
								<a class="nav-link text-white ocul-navbar" href="#">Inicio <span class="sr-only">(current)</span></a>
							</li>
						</ul>
						<ul class="navbar-nav">							
							<li class="nav-item">
								<a class="nav-link text-white ocul-navbar" href="#portafolio">Portafolio</a>
							</li>
							<li class="nav-item">
								<a class="nav-link text-white ocul-navbar" href="#nosotros" >Nosotros</a>
							</li>
							<li class="nav-item">
								<a class="nav-link text-white ocul-navbar" href="#contactenos">Contáctenos</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Ingreso
								</a>
								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
									<a class="dropdown-item ocul-navbar" data-toggle="modal" data-target="#registro" href="#">Registro</a>
									<a class="dropdown-item ocul-navbar" href="#" data-toggle="modal" data-target="#iniciar-sesion">Iniciar Sesión</a>
								</div>
							</li>						
						</ul>						
					</div>
				</div>
			</div>
		</nav>

		<!-- Formulario Modal Ingreso -->		
		<div class="modal fade" id="iniciar-sesion" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header color-sena">
						<h5 class="modal-title text-white" id="exampleModalLabel">Iniciar Sesión</h5>
						<a href="?" class="close" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</a>
					</div>
					<div class="modal-body px-4">
						<form id="enviar" action="?c=Login" method="POST">
							<div class="form-group">
								<label for="usuario">Usuario</label>
								<input type="email" name="usuario" class="form-control" id="usuario" aria-describedby="emailHelp" placeholder="correo@correo.com" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,5}" title="No es un correo válido" value="<?php echo $user ?>" required>
							</div>
							<div class="form-group">
								<label for="contrasena">Contraseña</label>
								<input type="password" name="pass" class="form-control" id="contrasena"
								placeholder="Entre 5 y 8 caracteres" pattern="[A-Za-z0-9]{5,8}" title="Escriba entre 5 y 8 caracteres" maxlength="8" value="<?php echo $pass ?>" required>
							</div>							
							<div class="form-inline pt-2">
								<button type="submit" class="btn btn-primary mx-2">Enviar</button>
								<a href="?" id="cerrar" class="btn btn-secondary mr-auto">Cerrar</a>
								<a href="?c=Login&a=recuperarPass" class="nav-link">¿Olvido de Usuario o Contraseña?</a>
							</div>
						</form>
						<div class="<?php echo $class ?>"><?php echo $mensaje ?></div>
					</div>					
				</div>
			</div>
		</div>

		<!-- Formulario Modal Recurperar Contraseña -->		
		<div class="modal fade" id="recupera_pass" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header color-sena">
						<h5 class="modal-title text-white" id="exampleModalLabel">Recuperar Contraseña</h5>
						<a href="?" class="close" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</a>
					</div>
					<div class="modal-body px-4">
						<form id="recuperar" action="?c=Login&a=recuperarPass" method="POST">
							<div class="form-group">
								<label for="usuario">Digite su Correo Electrónico</label>
								<input type="email" name="usuario" class="form-control" id="usuario" aria-describedby="emailHelp" placeholder="correo@correo.com" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,5}" title="No es un correo válido" required>
							</div>							
							<div class="form-inline pt-2">
								<button type="submit" class="btn btn-primary mx-2">Enviar</button>
								<a href="?" id="cerrar" class="btn btn-secondary">Cerrar</a>
							</div>
						</form>						
					</div>					
				</div>
			</div>
		</div>

		<!-- Formulario Modal Registro -->
		<div class="modal fade" id="registro" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header color-sena">
						<h5 class="modal-title text-white" id="exampleModalLabel">Registro</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form id="registro">
							<div class="form-row">
								<div class="form-group col-6">
									<label for="nombres">Nombres</label>
									<input type="text" class="form-control" id="nombres" placeholder="Nombres">
								</div>
								<div class="form-group col-6">
									<label for="apellidos">Apellidos</label>
									<input type="text" class="form-control" id="apellidos" placeholder="Apellidos">
								</div>
							</div>
							<div class="form-group">
								<label for="correo">E-Mail</label>
								<input type="email" class="form-control" id="correo" placeholder="usuario@correo.com">
							</div>
							<div class="form-row">
								<div class="form-group col-6">
									<label for="contrasena_reg">Contraseña</label>
									<input type="password" class="form-control" id="contrasena_reg" placeholder="Entre 5 y 8 caracteres">
								</div>
								<div class="form-group col-6">
									<label for="confirmacion">Confirmación</label>
									<input type="password" class="form-control" id="confirmacion" placeholder="Confirmar contraseña">
								</div>
							</div>
							<button type="submit" class="btn btn-primary">Enviar</button>
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>							
						</form>
					</div>					
				</div>
			</div>
		</div>