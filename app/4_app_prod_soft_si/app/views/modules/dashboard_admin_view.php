<!-- Vista del encabezado del Administrador -->
<?php require RUTA_APP . '/views/roles/1_admin/header.php'; ?>
<!-- Vista del Contenido -->
<?php require RUTA_APP . '/views/modules/'. $datos['modulo'] .'/'.$datos['vista'] ?>
<!-- Vista del pie de página del Administrador-->
<?php require RUTA_APP . '/views/roles/1_admin/footer.php'; ?>
