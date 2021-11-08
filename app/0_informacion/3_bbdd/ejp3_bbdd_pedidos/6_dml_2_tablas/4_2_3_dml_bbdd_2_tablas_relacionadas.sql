-- -------------------------------------------------------------------------------------
-- -------------------------------------------------------------------------------------
-- -------------------------------------------------------------------------------------
-- DML: LENGUAJE DE MANIPULACIÓN DE DATOS (CRUD)									  --
--      ## CONSULTAS ACCIÓN --> EN MÁS DE UNA TABLA (MULTITABLA)					  --
-- 		   TABLA A PARTIR DE OTRA (DDL->CREATE TABLE)								  --
--		   ELIMINAR (DELETE), DATOS ANEXADOS (INSERT INTO)				 			  --
-- -------------------------------------------------------------------------------------
-- 		   NOTA: Insertar datos a las tablas Clientes, Productos, Pedidos y Productos --
--				 Pedidos de forma masiva (Ver la carpeta 2_dml_datos)  				  --
-- -------------------------------------------------------------------------------------
-- -------------------------------------------------------------------------------------
-- -------------------------------------------------------------------------------------


-- -------------------------------------------------------------------------------------
-- CONSULTAS DE ACCIÓN: 
-- CREAR TABLA A PARTIR DE OTRA (DDL->CREATE TABLE)
-- -------------------------------------------------------------------------------------
## Crear una nueva tabla de solo los clientes de Madrid
-- -------------------------------------------------------------------------------------
CREATE TABLE clientes_madrid SELECT * FROM clientes
WHERE poblacion = 'MADRID'
-- -------------------------------------------------------------------------------------



-- -------------------------------------------------------------------------------------
-- CONSULTAS DE ACCIÓN:
-- ELIMINAR DATOS DE UNA TABLA QUE ESTÁ RELACIONADA
-- -------------------------------------------------------------------------------------
## Eliminar todos los clientes de Madrid
-- -------------------------------------------------------------------------------------
DELETE FROM clientes WHERE poblacion = 'MADRID'
-- -------------------------------------------------------------------------------------
## Eliminar todos los clientes que no han hecho pedidos
-- -------------------------------------------------------------------------------------
DELETE clientes FROM clientes LEFT JOIN pedidos 
ON clientes.codigo_cliente = pedidos.codigo_cliente
WHERE pedidos.codigo_cliente IS NULL;
-- -------------------------------------------------------------------------------------



-- -------------------------------------------------------------------------------------
-- CONSULTAS DE ACCIÓN:
-- DATOS ANEXADOS (INSERT INTO, VALUES)
-- -------------------------------------------------------------------------------------
## Anexar los registros de la tabla clientes_madrid a clientes
-- -------------------------------------------------------------------------------------
INSERT INTO clientes SELECT * FROM clientes_madrid
-- -------------------------------------------------------------------------------------
## Anexar los campos codigo_empresa, empresa, poblacion, telefono de la tabla 
-- clientes_madrid a la tabla clientes
-- -------------------------------------------------------------------------------------
INSERT INTO clientes (codigo_cliente, empresa, poblacion, telefono) 
SELECT codigo_cliente, empresa, poblacion, telefono FROM clientes_madrid
-- -------------------------------------------------------------------------------------



-- -------------------------------------------------------------------------------------
-- -------------------------------------------------------------------------------------
-- -------------------------------------------------------------------------------------
-- DML: LENGUAJE DE MANIPULACIÓN DE DATOS (CRUD)									  --
--      ## CONSULTAS DE SELECCIÓN --> EN MÁS DE UNA TABLA (MULTITABLA):				  --
--		## UNION EXTERNA (UNION, UNION ALL)											  --
--		## UNION INTERNA (INNER JOIN, LEFT JOIN, RIGHT JOIN)
--		## SUBCONSULTAS																  --
-- -------------------------------------------------------------------------------------
-- 		   NOTA: Eliminar Base de Datos / Cargar nuevamenta base de datos / Insertar  --
--               datos a las tablas Clientes, Productos, Pedidos y Productos Pedidos  --
-- 				 de forma masiva (Ver la carpeta 2_dml_datos)		  				  --
-- -------------------------------------------------------------------------------------
-- -------------------------------------------------------------------------------------
-- -------------------------------------------------------------------------------------



-- -------------------------------------------------------------------------------------
-- CONSULTAS DE SELECCIÓN:
-- UNIÓN EXTERNA (UNION Y UNION ALL)
-- -------------------------------------------------------------------------------------
## Seleccione todos los campos de la tabla productos, donde la sección sea igual a
-- DEPORTES; una el resultado con la selección de todos los campos de productosnuevos,  
-- donde la sección sea igual a DEPORTES DE RIESGO
-- -------------------------------------------------------------------------------------
SELECT * FROM productos WHERE seccion = 'DEPORTES' UNION 
SELECT * FROM productos_nuevos WHERE seccion = 'DEPORTES DE RIESGO' 
-- -------------------------------------------------------------------------------------
## Seleccione todos los campos de productos, donde el precio del artículo sea superior a
-- 500 euros y en productosnuevos la sección sea igual a ALTA COSTURA
-- -------------------------------------------------------------------------------------
SELECT * FROM productos WHERE precio > 500 UNION 
SELECT * FROM productos_nuevos WHERE seccion = 'ALTA COSTURA'
-- -------------------------------------------------------------------------------------
## Seleccione todos los campos de productos, donde la sección sea igual a DEPORTES y en
-- la tabla productosnuevos, todos los campos de productos
-- -------------------------------------------------------------------------------------
SELECT * FROM productos WHERE seccion = 'DEPORTES' UNION
SELECT * FROM productos_nuevos
-- -------------------------------------------------------------------------------------
## Seleccione todos los campos productos, donde la sección sea igual a DEPORTES y en 
-- productosnuevos, todos los productos incluyendo repeticiones
-- -------------------------------------------------------------------------------------
SELECT * FROM productos WHERE seccion = 'DEPORTES' UNION ALL
SELECT * FROM productos_nuevos
-- -------------------------------------------------------------------------------------



-- -------------------------------------------------------------------------------------
-- CONSULTAS DE SELECCIÓN:
-- UNION INTERNA (INNER JOIN)
-- -------------------------------------------------------------------------------------
## Empresas que han hecho pedidos
-- -------------------------------------------------------------------------------------
SELECT empresa FROM clientes INNER JOIN pedidos
ON clientes.codigo_cliente = pedidos.codigo_cliente
-- -------------------------------------------------------------------------------------
## Empresas que han hecho pedidos sin repeticiones
-- -------------------------------------------------------------------------------------
SELECT DISTINCT empresa FROM clientes INNER JOIN pedidos
ON clientes.codigo_cliente = pedidos.codigo_cliente
-- -------------------------------------------------------------------------------------
## Clientes de Madrid que han hecho pedidos
-- -------------------------------------------------------------------------------------
SELECT * FROM clientes INNER JOIN pedidos 
ON clientes.codigo_cliente = pedidos.codigo_cliente
WHERE poblacion = 'ÁVILA' ORDER BY clientes.codigo_cliente
-- -------------------------------------------------------------------------------------
## Campos comunes de clientes y pedidos codigo_cliente, empresa, pobalción, fecha_pedido 
-- de la tabla clientes que sean de Madrid y que han hecho pedidos
-- -------------------------------------------------------------------------------------
SELECT clientes.codigo_cliente, empresa, poblacion, fecha_pedido  
FROM clientes INNER JOIN pedidos 
ON clientes.codigo_cliente = pedidos.codigo_cliente
WHERE poblacion = 'MADRID' ORDER BY clientes.codigo_cliente
-- -------------------------------------------------------------------------------------
## Campos comunes codigo_cliente, poblacion, direccion, numero_pedido y forma_pago de 
-- pedidos donde clientes y pedidos estén relacionados
-- -------------------------------------------------------------------------------------
SELECT clientes.codigo_cliente, poblacion, direccion, numero_pedido, 
pedidos.codigo_cliente, forma_pago FROM clientes INNER JOIN pedidos
ON clientes.codigo_cliente = pedidos.codigo_cliente
-- -------------------------------------------------------------------------------------
## Campos comunes codigo_cliente, poblacion, direccion, numero_pedido y forma_pago de 
-- pedidos donde clientes y pedidos estén relacionados; además, filtre por la población
-- de Madrid y los ordene de menor a mayor
-- -------------------------------------------------------------------------------------
SELECT clientes.codigo_cliente, poblacion, direccion, 
numero_pedido, forma_pago FROM clientes INNER JOIN pedidos
ON clientes.codigo_cliente = pedidos.codigo_cliente
WHERE poblacion = "MADRID" ORDER BY clientes.codigo_cliente
-- -------------------------------------------------------------------------------------



-- -------------------------------------------------------------------------------------
-- CONSULTAS DE SELECCIÓN:
-- UNION INTERNA (LEFT JOIN)
-- -------------------------------------------------------------------------------------
## Todos los clientes de Madrid y que además hayan hecho pedidos
-- -------------------------------------------------------------------------------------
SELECT * FROM clientes LEFT JOIN pedidos 
ON clientes.codigo_cliente = pedidos.codigo_cliente
WHERE poblacion = 'MADRID' ORDER BY clientes.codigo_cliente
-- -------------------------------------------------------------------------------------
## Todos los clientes de Madrid y que no hayan hecho pedidos
-- -------------------------------------------------------------------------------------
SELECT * FROM clientes LEFT JOIN pedidos 
ON clientes.codigo_cliente = pedidos.codigo_cliente
WHERE poblacion = 'MADRID' AND pedidos.codigo_cliente IS NULL
ORDER BY clientes.codigo_cliente
-- -------------------------------------------------------------------------------------



-- -------------------------------------------------------------------------------------
-- CONSULTAS DE SELECCIÓN:
-- UNION INTERNA (RIGHT JOIN)
-- -------------------------------------------------------------------------------------
## Todos pedidos que se hayan hecho, así no tengan clientes asociados (OJO)
-- -------------------------------------------------------------------------------------
SELECT * FROM clientes RIGHT JOIN pedidos 
ON clientes.codigo_cliente = pedidos.codigo_cliente
ORDER BY clientes.codigo_cliente
-- -------------------------------------------------------------------------------------



-- -------------------------------------------------------------------------------------
-- CONSULTAS DE SELECCIÓN:
-- SUBCONSULTA CORRELACIONADA (IN, NOT IN): 
-- -------------------------------------------------------------------------------------
## Nombre y precio de aquellos artículos de los que se han pedido más de 20 unidades
-- -------------------------------------------------------------------------------------
SELECT nombre_articulo, precio FROM productos WHERE codigo_articulo IN 
(SELECT codigo_articulo FROM productos_pedidos WHERE unidades > 20)
-- -------------------------------------------------------------------------------------
## Nombre y precio de aquellos artículos de los que se han pedido más de 20 unidades con
-- INNER JOIN
-- -------------------------------------------------------------------------------------
SELECT nombre_articulo, precio FROM productos INNER JOIN productos_pedidos 
ON productos.codigo_articulo = productos_pedidos.codigo_articulo
WHERE unidades > 20
-- -------------------------------------------------------------------------------------
## Nombre y precio de aquellos artículos de los que no se han pedido más de 20 unidades
-- -------------------------------------------------------------------------------------
SELECT nombre_articulo, precio FROM productos WHERE codigo_articulo NOT IN 
(SELECT codigo_articulo FROM productos_pedidos WHERE unidades > 20)
-- -------------------------------------------------------------------------------------
## Clientes que no han pagado con tarjeta o no han realizado pedidos
-- -------------------------------------------------------------------------------------
SELECT empresa, poblacion FROM clientes WHERE codigo_cliente NOT IN
(SELECT codigo_cliente FROM pedidos WHERE forma_pago = 'TARJETA')
-- -------------------------------------------------------------------------------------