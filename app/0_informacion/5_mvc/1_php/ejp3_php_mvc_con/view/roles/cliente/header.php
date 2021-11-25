<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cliente</title>
	<!-- Estilos -->
	<link rel="shortcut icon" href="assets/img/css.png">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="assets/css/buttons.dataTables.min.css">
	<link rel="stylesheet" href="assets/css/dataTables.bootstrap4.css">
	<link rel="stylesheet" href="assets/css/all.css">
	<link rel="stylesheet" href="assets/css/styles_dash.css">
	<link rel="stylesheet" href="assets/css/styles_pg.css">
</head>
<body>
	<div class="container">
		
		<!-- Navegador -->
		<nav class="cliente row sticky-top d-flex">
			<div class="logo col-lg-3 d-flex justify-content-center pt-3 border border-bottom-0">
				<img class="img-fluid" src="assets/img/logo_sistema.png" alt="">
			</div>
			<div class="col-lg-9 p-0">
				<div class="navbar navbar-expand-lg navbar-light">
					<div id="btn-menu-lateral"><i class="fas fa-exchange-alt"></i></div>					
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
								<a class="nav-link text-white ocul-navbar" href="?c=DashboardAdmin">Inicio <span class="sr-only">(current)</span></a>
							</li>
						</ul>
						<ul class="navbar-nav">							
							<li class="nav-item">
								<a class="nav-link text-white ocul-navbar" href="?c=Error404">Correo</a>
							</li>
							<li class="nav-item">
								<a class="nav-link text-white ocul-navbar" href="?c=Error404">Calendario</a>
							</li>
							<li class="nav-item">
								<a class="nav-link text-white ocul-navbar" href="?c=Error404">Actividades</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Cliente
								</a>
								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
									<a class="dropdown-item ocul-navbar" href="?c=Error404">Configuración</a>
									<a class="dropdown-item ocul-navbar" href="?c=Logout">Cerrar Sesión</a>
								</div>
							</li>						
						</ul>						
					</div>
				</div>
			</div>
		</nav>

		<!-- Principal -->
		<section id="principal" class="row bg-light border">
			
			<!-- Panel lateral -->
			<aside id="panel-lateral" class="col-12 col-lg-3 p-0">
				<div class="logosena col-12 text-center p-0">
					<img id="img-ocul" class="p-3" src="assets/img/logoUsuario.png" alt="">
				</div>
				<div id="modulos" class="modulos col-12 p-0">
					<div class="accordion" id="accordionExample">
						<div class="card">
							<div class="cliente card-header p-1 p-lg-0" id="headingOne">
								<h2 class="mb-0">
									<button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
										Módulo Usuarios
									</button>
								</h2>
							</div>
							<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
								<div class="card-body p-lg-1">
									<div class="card">
										<ul class="list-group list-group-flush">
											<li class="list-group-item p-0 bg-light">
												<a href="?c=Users&a=crear" class="card-link d-block p-2 px-lg-3 py-lg-1 ocul-aside">Crear Usuario</a>
											</li>
											<li class="list-group-item p-0 bg-light">
												<a href="?c=Users&a=consultar" class="card-link d-block p-2 px-lg-3 py-lg-1 ocul-aside">Consultar Usuarios</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="cliente card-header p-1 p-lg-0" id="headingTwo">
								<h2 class="mb-0">
									<button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
										Módulo Principal
									</button>
								</h2>
							</div>
							<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
								<div class="card-body p-lg-1">
									<div class="card">
										<ul class="list-group list-group-flush">
											<li class="list-group-item p-0 bg-light">
												<a href="?c=Error404" class="card-link d-block p-2 px-lg-3 py-lg-1 ocul-aside">Crear Caso de Uso</a>
											</li>
											<li class="list-group-item p-0 bg-light">
												<a href="?c=Error404" class="card-link d-block p-2 px-lg-3 py-lg-1 ocul-aside">Consultar Caso de Uso</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="cliente card-header p-1 p-lg-0" id="headingThree">
								<h2 class="mb-0">
									<button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
										Módulo Secundario
									</button>
								</h2>
							</div>
							<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
								<div class="card-body p-lg-1">
									<div class="card">
										<ul class="list-group list-group-flush">
											<li class="list-group-item p-0 bg-light">
												<a href="?c=Error404" class="card-link d-block p-2 px-lg-3 py-lg-1 ocul-aside">Crear Caso de Uso</a>
											</li>
											<li class="list-group-item p-0 bg-light">
												<a href="?c=Error404" class="card-link d-block p-2 px-lg-3 py-lg-1 ocul-aside">Consultar Caso de Uso</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="cliente card-header p-1 p-lg-0" id="headingFour">
								<h2 class="mb-0">
									<button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
										Módulo Reportes
									</button>
								</h2>
							</div>
							<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
								<div class="card-body p-lg-1">
									<div class="card">
										<ul class="list-group list-group-flush">
											<li class="list-group-item p-0 bg-light">
												<a href="?c=Error404" class="card-link d-block p-2 px-lg-3 py-lg-1 ocul-aside">Reportes Gráficos</a>
											</li>
											<li class="list-group-item p-0 bg-light">
												<a href="?c=Error404" class="card-link d-block p-2 px-lg-3 py-lg-1 ocul-aside">Reportes Impresos</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>						
					</div>
				</div>
			</aside>
			<!-- Área trabajo -->
			<main id="area_principal" class="col-12 col-lg-9 p-0 border d-flex">
				<div class="body-pg container-fluid bg-white">	