<!-- Vista del Formulario para crear el Usuario -->
<h1><?php echo $datos['titulo']; ?></h1>
<form action="crear_usuario" method="post">
	<div>
		<label for="nombre_usuario">Nombre</label>
		<input type="text" name="nombre_usuario" id="nombre_usuario" placeholder="Nombre">
	</div>	
	<div>
		<label for="telefono_usuario">Telefono</label>
		<input type="text" name="telefono_usuario" id="telefono_usuario" placeholder="Teléfono">
	</div>
	<div>
		<label for="email_usuario">Email</label>
		<input type="email" name="email_usuario" id="email_usuario" placeholder="Email">
	</div>
	<div>
		<label for="username">Username</label>
		<input type="text" name="username_usuario" id="username_usuario" placeholder="Seudónimo">
	</div>	
	<div>
		<label for="password_usuario">Contraseña</label>
		<input type="password" name="password_usuario" id="password_usuario" placeholder="Password">
	</div>	
	<div>
		<label for="perfil_usuario">Perfil</label>
		<input type="text" name="perfil_usuario" id="perfil_usuario" placeholder="Admin / Cliente">
	</div>	
	<div>
		<label for="estado_usuario">Estado</label>
		<input type="text" name="estado_usuario" id="estado_usuario" placeholder="Activo / Inactivo">
	</div>	
	<div>
		<br>
		<input id="crear_usuario" type="submit" value="Enviar">
	</div>
</form>