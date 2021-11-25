<!-- Migas de Pan -->
<div class="row">
	<div class="col p-0">
		<div aria-label="breadcrumb">
			<ol class="breadcrumb rounded-0 m-0 p-2">
				<li class="breadcrumb-item"><a href="?c=Dashboard">Inicio</a></li>
				<li class="breadcrumb-item">Módulo Usuarios</li>
				<li class="breadcrumb-item active" aria-current="page">Crear Usuario</li>
			</ol>
		</div>
	</div>
</div>

<!-- Título -->
<div class="titulo row">
	<div class="col p-2 border-bottom d-flex">
		<div class="col-7 p-0 d-flex justify-content-start align-items-center">
			<h5 class="m-0">Crear Usuario</h5>
		</div>
		<div class="col-5 d-flex justify-content-end align-items-center p-0">
			<a href="?c=Users&a=consultar" class="btn btn-primary">Consultar Usuarios</a>
		</div>				
	</div>
</div>

<!-- Área Principal -->
<div class="section-pg row">
	<div class="col p-2 bg-light">
		<form action="?c=Users&a=crear" method="POST" id="crear_usuario" class="card p-3 bg-white d-lg-flex justify-content-center w-100 border rounded p-2">
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="doc_identidad">Documento de Identidad</label>
					<input type="text" name="documento" class="form-control" id="doc_identidad" placeholder="123456789">
				</div>
				<div class="form-group col-md-6">
					<label for="correo">E-Mail</label>
					<input type="email" name="correo" class="form-control" id="correo" placeholder="usuario@correo.com">							
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="nombres">Nombres</label>
					<input type="text" name="nombres" class="form-control" id="nombres" placeholder="Nombres">
				</div>
				<div class="form-group col-md-6">
					<label for="apellidos">Apellidos</label>
					<input type="text" name="apellidos" class="form-control" id="apellidos" placeholder="Apellidos">
				</div>
			</div>										
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="contrasena_us">Contraseña</label>
					<input type="password" name="pass" class="form-control" id="contrasena_us" placeholder="Entre 5 y 8 caracteres">
				</div>
				<div class="form-group col-md-6">
					<label for="confirmacion">Confirmación</label>
					<input type="password" name="pass_confirm" class="form-control" id="confirmacion" placeholder="Confirmar contraseña">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="perfil_usuario">Perfil</label>
					<select name="rol" class="form-control" id="perfil">
						<option value="1">administrador</option>
						<option value="2">usuario</option>
						<option value="3">cliente</option>
						<option value="4">vendedor</option>
					</select>
				</div>
				<div class="form-group col-md-6">
					<label for="estado">Estado</label>
					<select name="estado" class="form-control" id="estado">
						<option value="1">activo</option>
						<option value="0">inactivo</option>
					</select>
				</div>
			</div>
			<button type="submit" class="btn btn-primary mb-2">Enviar</button>
			<button type="button" class="btn btn-dark" data-dismiss="modal" id="cerrar">Cerrar</button>						
		</form>
	</div>
</div>
