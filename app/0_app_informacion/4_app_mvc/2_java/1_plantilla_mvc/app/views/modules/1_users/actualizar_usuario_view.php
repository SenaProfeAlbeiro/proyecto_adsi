<!-- Vista del Formulario para crear el Usuario -->
<h1><?php echo $datos['titulo']; ?></h1>
<form action="<?php echo '../actualizar_usuario/'.$datos['id_usuario']; ?>" method="post">
	<div>
		<label for="nombre_usuario">Nombre</label>
		<input type="text" name="nombre_usuario" id="nombre_usuario" placeholder="Nombre" value="<?php echo $datos['nombre_usuario']; ?>">			
	</div>	
	<div>
		<label for="telefono_usuario">Telefono</label>
		<input type="text" name="telefono_usuario" id="telefono_usuario" placeholder="Telefono" value="<?php echo $datos['telefono_usuario']; ?>">
	</div>	
	<div>
		<label for="email">Email</label>
		<input type="email" name="email_usuario" id="email_usuario" placeholder="Email" value="<?php echo $datos['email_usuario']; ?>">
	</div>
	<div>
		<label for="username">Username</label>
		<input type="text" name="username_usuario" id="username_usuario" placeholder="Seudónimo" value="<?php echo $datos['username_usuario']; ?>">
	</div>	
	<div>
		<label for="password_usuario">Contraseña</label>
		<input type="password" name="password_usuario" id="password_usuario" placeholder="Password" value="<?php echo $datos['password_usuario']; ?>">
	</div>	
	<div>
		<label for="perfil_usuario">Perfil</label>
		<input type="text" name="perfil_usuario" id="perfil_usuario" placeholder="Admin / Cliente" value="<?php echo $datos['perfil_usuario']; ?>">
	</div>	
	<div>
		<label for="estado_usuario">Estado</label>
		<input type="text" name="estado_usuario" id="estado_usuario" placeholder="Activo / Inactivo"value="<?php echo $datos['estado_usuario']; ?>">
	</div>
	<div>
		<br>
		<input id="actualizar_usuario" type="submit" value="Actualizar">
	</div>
</form>