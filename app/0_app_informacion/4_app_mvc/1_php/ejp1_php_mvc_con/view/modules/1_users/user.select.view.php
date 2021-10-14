<!-- Migas de Pan -->
<div class="row">
	<div class="col p-0">
		<div aria-label="breadcrumb">
			<ol class="breadcrumb rounded-0 m-0 p-2">
				<li class="breadcrumb-item"><a href="../0_mains/admin_main.html">Inicio</a></li>
				<li class="breadcrumb-item">Módulo Usuarios</li>
				<li class="breadcrumb-item active" aria-current="page">Consultar Usuarios</li>
			</ol>
		</div>
	</div>
</div>

<!-- Título -->
<div class="titulo row">
	<div class="col p-2  border-bottom d-flex">
		<div class="col-7 p-0 d-flex justify-content-start align-items-center">
			<h5 class="m-0">Consultar Usuarios</h5>
		</div>
		<div class="col-5 d-flex justify-content-end align-items-center p-0">
			<a href="crear_usuario.html" class="btn btn-primary">Crear Usuario</a>
		</div>
	</div>
</div>

<!-- Área Principal -->
<div class="section-pg row">
	<div class="col p-2 bg-light">
		<table id="tbl_consultar" class="table table-striped table-bordered table-responsive text-center">
			<thead class="fondo">
				<tr>
					<th scope="col">Itm</th>
					<th scope="col">D.I.</th>
					<th scope="col">E-Mail</th>
					<th scope="col">Nombres</th>
					<th scope="col">Apellidos</th>
					<th scope="col">Contraseña</th>
					<th scope="col">Perfil</th>
					<th scope="col">Estado</th>
					<th scope="col">Acciones</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th class="font-weight-normal">1</th>
					<td>7318924</td>
					<td>profealbeiro2020@gmail.com</td>
					<td>Albeiro</td>
					<td>Ramos</td>
					<td>12345</td>
					<td>administrador</td>
					<td>activo</td>
					<td class="d-flex flex-row pt-2 justify-content-center">
						<a class="btn btn-info btn-sm mx-1" onclick="actualizar(this);"><i class="fas fa-pencil-alt"></i></a>
						<a class="btn btn-danger btn-sm mx-1" onclick="eliminar(this);"><i class="fas fa-trash-alt"></i></a>
					</td>
				</tr>
				<tr>
					<th class="font-weight-normal">2</th>
					<td>123456789</td>
					<td>empleado@correo.com</td>
					<td>Marinita</td>
					<td>García</td>
					<td>54321</td>
					<td>empleado</td>
					<td>activo</td>
					<td id="botones" class="d-flex flex-row pt-2 justify-content-center">
						<a class="btn btn-info btn-sm mx-1" onclick="actualizar(this);"><i class="fas fa-pencil-alt"></i></a>
						<a class="btn btn-danger btn-sm mx-1" onclick="eliminar(this);"><i class="fas fa-trash-alt"></i></a>
					</td>
				</tr>
			</tbody>
		</table>				
	</div>
</div>
	