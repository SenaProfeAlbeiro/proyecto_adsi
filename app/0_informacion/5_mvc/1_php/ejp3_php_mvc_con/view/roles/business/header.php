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
		<nav class="navegacion row sticky-top d-flex p-0">
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
		<div class="modal fade p-0" id="iniciar-sesion" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
								<input type="email" name="usuario" class="form-control" id="usuario" aria-describedby="emailHelp" placeholder="correo@correo.com" value="<?php echo $user ?>" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,5}" title="Ingrese un correo válido" required>
							</div>
							<div class="form-group">
								<label for="contrasena">Contraseña</label>
								<input type="password" name="pass" class="form-control" id="contrasena"
								placeholder="Entre 5 y 8 caracteres" value="<?php echo $pass ?>" pattern="[A-Za-z0-9]{5,8}" maxlength="8" title="Entre 5 y 8 caracteres" required>
							</div>
							<div class="<?php echo $class ?>"><?php echo $mensaje ?></div>
							<div class="form-inline">
								<a href="?c=Login&a=recuperarPass" class="nav-link text-success font-weight-bold mr-auto px-0">¿Olvido su Contraseña?</a>
								<a href="?" id="cerrar" class="btn btn-secondary mx-2">Cerrar</a>
								<button type="submit" class="btn btn-success">Enviar</button>
							</div>
						</form>
					</div>					
				</div>
			</div>
		</div>

		<!-- Formulario Modal Recurperar Contraseña -->		
		<div class="modal fade p-0" id="recupera_pass" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
								<label for="correo">Digite su Correo Electrónico</label>
								<input class="form-control" type="email" name="correo" id="correo" aria-describedby="emailHelp" placeholder="correo@correo.com" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,5}" title="No es un correo válido" required>
							</div>							
							<div class="form-inline d-flex justify-content-center">
								<a href="?" id="cerrar" class="btn btn-secondary mr-2">Cerrar</a>
								<button type="submit" class="btn btn-success">Enviar</button>
							</div>
						</form>						
					</div>					
				</div>
			</div>
		</div>

		<!-- Formulario Modal Registro -->
		<div class="modal fade p-0" id="registro" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header color-sena">
						<h5 class="modal-title text-white" id="exampleModalLabel">Registro</h5>
						<a href="?" class="close" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</a>
					</div>
					<div class="modal-body p-4">
						<form id="registro" action="?c=Users&a=registrarse" method="POST">
							<div class="form-row">
								<div class="form-group col-6">
									<label for="nombres">Nombres</label>
									<input class="form-control" type="text" name="nombres" id="nombres" placeholder="Nombres" value="<?php echo $nombres ?>" pattern="[a-zA-ZáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙ\s]{1,254}" title="No puede contener números" required>
								</div>
								<div class="form-group col-6">
									<label for="apellidos">Apellidos</label>
									<input class="form-control" type="text" name="apellidos" id="apellidos" placeholder="Apellidos" value="<?php echo $apellidos ?>" pattern="[a-zA-ZáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙ\s]{1,254}" title="No puede contener números" required>
								</div>
							</div>
							<div class="form-group">
								<label for="correo">E-Mail</label>
								<input class="form-control" type="email" name="correo" id="correo" placeholder="usuario@correo.com" value="<?php echo $correo ?>" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,5}" title="Ingrese un correo válido" required>
							</div>
							<div class="form-row">
								<div class="form-group col-6">
									<label for="pass">Contraseña</label>
									<input class="form-control" type="password" name="pass" id="pass" placeholder="Entre 5 y 8 caracteres" value="<?php echo $pass ?>" pattern="[A-Za-z0-9]{5,8}" maxlength="8" title="Entre 5 y 8 caracteres" required>
								</div>
								<div class="form-group col-6">
									<label for="confirmacion">Confirmación</label>
									<input class="form-control" type="password" name="conf" id="conf" placeholder="Confirmar contraseña" value="<?php echo $conf ?>" pattern="[A-Za-z0-9]{5,8}" maxlength="8" title="Entre 5 y 8 caracteres" required>
								</div>
							</div>
							<div class="<?php echo $class ?>"><?php echo $mensaje ?></div>
							<div class="form-inline d-flex justify-content-center">
								<a href="?" id="cerrar" class="btn btn-secondary mr-2">Cerrar</a>
								<button type="submit" class="btn btn-success">Enviar</button>
							</div>
						</form>
					</div>					
				</div>
			</div>
		</div>