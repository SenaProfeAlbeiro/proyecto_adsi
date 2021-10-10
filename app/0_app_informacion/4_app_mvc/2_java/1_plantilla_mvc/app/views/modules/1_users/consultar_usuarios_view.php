<h1><?php echo $datos['titulo']; ?></h1>
<table border="1" id="tabla_consulta">
  <tr>
    <th>Id</th>
    <th>Nombre</th>
    <th>Teléfono</th>
    <th>Email</th>
    <th>Username</th>
    <th>Password</th>
    <th>Perfil</th>
    <th>Estado</th>
    <th colspan="2">Acciones</th>    
  </tr>
    <?php foreach ($datos['usuarios'] as $usuario) : ?>
      <tr>
        <td id="id_usuario"><?php echo $usuario->id_usuario; ?></td>
        <td><?php echo $usuario->nombre_usuario;  ?></td>
        <td><?php echo $usuario->telefono_usuario;  ?></td>
        <td><?php echo $usuario->email_usuario;  ?></td>
        <td><?php echo $usuario->username_usuario;  ?></td>
        <td><?php echo $usuario->password_usuario;  ?></td>
        <td><?php echo $usuario->perfil_usuario;  ?></td>
        <td><?php echo $usuario->estado_usuario;  ?></td>
        <td><a href="<?php echo RUTA_URL . '/users/actualizar_usuario/' . $usuario->id_usuario ?>"><button>Actualizar</button></a></td>
        <!-- <td><button id="actualizar">Actualizar</button></td> -->
        <td>
          <form action="<?php echo RUTA_URL . '/users/eliminar_usuario/' . $usuario->id_usuario ?>" method="post">
            <input id="eliminar_usuario" type="submit" value="Eliminar">
          </form>
        </td>
      </tr>
    <?php endforeach; ?>
</table>

