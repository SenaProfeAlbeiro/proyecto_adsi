<?php require RUTA_APP . '/views/roles/0_business/header.php'; ?>
<h1><?php echo $datos['titulo']; ?></h1>
<form action="register" method="post">
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
		<br>
		<input id="crear_usuario" type="submit" value="Enviar">
	</div>
</form>
<?php require RUTA_APP . '/views/roles/0_business/footer.php'; ?>
