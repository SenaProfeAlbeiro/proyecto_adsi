<?php 
//Abrimos el fichero que almacena los clics
$conteo= file_get_contents('contador.txt');
//Reescribimos el fichero sumando un 1
file_put_contents('contador.txt',$conteo+1);
?>
<a href="<?php $_SERVER['PHP_SELF'] ?>">Sumar clic</a>
<?php echo $conteo; ?>