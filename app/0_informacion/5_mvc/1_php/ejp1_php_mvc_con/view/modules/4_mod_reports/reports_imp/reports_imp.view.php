<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Reportes Impresos</title>
	<link rel="stylesheet" href="../../../css/bootstrap.min.css">
	<link rel="stylesheet" href="../../../css/styles_pg.css">
	<link rel="stylesheet" href="../../../css/all.css">
</head>
<body>
	<!-- Contenedor -->
	<div class="container-fluid">

		<!-- Migas de Pan -->
		<div class="row">
			<div class="col p-0">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb rounded-0 m-0 p-2">
						<li class="breadcrumb-item"><a href="../../0_mains/admin_main.html">Inicio</a></li>
						<li class="breadcrumb-item">Módulo Reportes</li>
						<li class="breadcrumb-item active" aria-current="page"> Impresos</li>
					</ol>
				</nav>
			</div>
		</div>

		<!-- Título -->
		<div class="titulo row">
			<div class="col p-2 border-bottom d-flex">
				<div class="col-4 p-0 d-flex justify-content-start align-items-center">
					<h5 class="m-0">Impresos</h5>
				</div>
				<div class="col-8 d-flex justify-content-end align-items-center p-0">
					<a href="grafico_impreso.pdf" target="area_trabajo2" class="btn btn-secondary ml-1"><i class="fas fa-chart-line"></i></a>
					<a href="consulta_usuarios.pdf" target="area_trabajo2" class="btn btn-secondary mx-1"><i class="fas fa-table"></i></a>
					<a href="../reports_graf/reportes_graf.html" class="btn btn-primary">Reportes Gráficos</a>
				</div>				
			</div>
		</div>

		<!-- Área Principal -->
		<section class="row bg-light">
				<div class="col d-flex justify-content-center px-1 pt-1 pb-0">
					<iframe name="area_trabajo2" src="grafico_impreso.pdf"></iframe>
				</div>		
		</section>
	</div>
	<script src="../../../js/jquery-3.5.1.slim.min.js"></script>
	<script src="../../../js/popper.min.js"></script>
	<script src="../../../js/bootstrap.min.js"></script>	
</body>
</html>