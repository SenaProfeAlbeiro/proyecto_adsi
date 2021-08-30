-- -------------------------------------------------------------------------------------
-- DML: LENGUAJE DE MANIPULACIÓN DE DATOS (CRUD)
--      ## CONSULTAS ACCIÓN: CREAR (INSERT INTO), ACTUALIZAR (UPDATE), ELIMINAR (DELETE)
--						     SELECCIONAR Y MODIFICAR (SELECT INTO)
--      				     DDL: CREAR TABLA (CREATE)
--      ## CONSULTAS DE SELECCIÓN: CONSULTAR (SELECT)
-- -------------------------------------------------------------------------------------
-- CONSULTAS MULTITABLA:
-- UNIÓN EXTERNA: UNION Y UNION ALL (EXCEPT, INTERSECT, MINUS -> NO SOPORTADOS MYSQL)
-- -------------------------------------------------------------------------------------
-- ## - Seleccione todos los campos de la tabla productos, donde la sección sea 
--      igual a DEPORTES; una el resultado con la selección de todos los campos
--      de la tabla productosnuevos, donde la sección sea igual a DEPORTES DE 
--      RIESGO
-- ----------------------------------------------------------------------------
SELECT * FROM productos WHERE seccion = 'DEPORTES' UNION 
SELECT * FROM productos_nuevos WHERE seccion = 'DEPORTES DE RIESGO' 
-- ----------------------------------------------------------------------------
-- ## - Seleccione todos los campos de la tabla productos, donde el precio del
--      articulo sea superior a 500 euros y en la tabla productosnuevos, 
--      donde la sección sea igual a ALTA COSTURA
-- ----------------------------------------------------------------------------
SELECT * FROM productos WHERE precio > 500 UNION 
SELECT * FROM productos_nuevos WHERE seccion = 'ALTA COSTURA'
-- ----------------------------------------------------------------------------
-- ## - Seleccione todos los campos de la tabla productos, donde la sección sea
--      igual a DEPORTES y en la tabla productosnuevos, todos los productos
--      sin incluir repeticiones
-- ----------------------------------------------------------------------------
SELECT * FROM productos WHERE seccion = 'DEPORTES' UNION
SELECT * FROM productos_nuevos
-- ----------------------------------------------------------------------------
-- ## - Seleccione todos los campos de la tabla productos, donde la sección sea
--      igual a DEPORTES y en la tabla productosnuevos, todos los productos
--      incluyendo repeticiones
-- ----------------------------------------------------------------------------
SELECT * FROM productos WHERE seccion = 'DEPORTES' UNION ALL
SELECT * FROM productos_nuevos
-- ----------------------------------------------------------------------------
-- CONSULTAS MULTITABLA:
-- UNIÓN INTERNA: INNER JOIN, LEFT JOIN, RIGHT JOIN --> OUTER JOINS 
-- (COMPOSICIONES EXTERNAS)
-- ----------------------------------------------------------------------------
-- ## Inner Join: Solo la información común entre las tablas: clientes y 
-- pedidos. Clientes de Madrid que SÍ han hecho pedidos
-- ----------------------------------------------------------------------------
SELECT * FROM clientes INNER JOIN pedidos 
ON clientes.codigo_cliente = pedidos.codigo_cliente
WHERE poblacion = 'MADRID' ORDER BY clientes.codigo_cliente
-- ----------------------------------------------------------------------------
-- ## Inner Join: Solo la información común entre las tablas: clientes y 
-- pedidos. Campos codigo_cliente, empresa, pobalción, fecha_pedido de la tabla
-- Clientes, que sean de Madrid y que SÍ han hecho pedidos
-- ----------------------------------------------------------------------------
SELECT clientes.codigo_cliente, empresa, poblacion, fecha_pedido  
FROM clientes INNER JOIN pedidos 
ON clientes.codigo_cliente = pedidos.codigo_cliente
WHERE poblacion = 'MADRID' ORDER BY clientes.codigo_cliente
-- ----------------------------------------------------------------------------
-- ## Inner Join: Ver el codigo_cliente, poblacion, direccion, numero_pedido
-- de la tabla clientes y codigo_cliente, forma_pago de la tabla pedidos donde
-- clientes y pedidos estén relacionados
-- ----------------------------------------------------------------------------
SELECT clientes.codigo_cliente, poblacion, direccion, numero_pedido, 
pedidos.codigo_cliente, forma_pago FROM clientes INNER JOIN pedidos
ON clientes.codigo_cliente = pedidos.codigo_cliente
-- ----------------------------------------------------------------------------
-- ## Inner Join: Ver el codigo_cliente, poblacion, direccion, numero_pedido
-- de la tabla clientes y codigo_cliente, forma_pago de la tabla pedidos donde
-- clientes y pedidos estén relacionados. Además, filtre solo los de Madrid y
-- los ordene de menor a mayor
-- ----------------------------------------------------------------------------
SELECT clientes.codigo_cliente, poblacion, direccion, 
numero_pedido, forma_pago FROM clientes INNER JOIN pedidos
ON clientes.codigo_cliente = pedidos.codigo_cliente
WHERE poblacion = "MADRID" ORDER BY clientes.codigo_cliente
-- ----------------------------------------------------------------------------
-- ## Left Join: La información de la tabla de la izquierda (clientes) y 
-- y la información común entre las tablas: clientes y pedidos.
-- Todos los clientes de Madrid y que además hayan hecho pedidos
-- ----------------------------------------------------------------------------
SELECT * FROM clientes LEFT JOIN pedidos 
ON clientes.codigo_cliente = pedidos.codigo_cliente
WHERE poblacion = 'MADRID' ORDER BY clientes.codigo_cliente
-- ----------------------------------------------------------------------------
-- ## Left Join: Todos los clientes de Madrid y que no hayan hecho pedidos
-- ----------------------------------------------------------------------------
SELECT * FROM clientes LEFT JOIN pedidos 
ON clientes.codigo_cliente = pedidos.codigo_cliente
WHERE poblacion = 'MADRID' AND pedidos.codigo_cliente IS NULL
ORDER BY clientes.codigo_cliente
-- ----------------------------------------------------------------------------
-- ## Right Join: La información de la tabla de la derecha (pedidos) y 
-- y la información común entre las tablas: clientes y pedidos
-- Todos pedidos que se hayan hecho, así no tengan clientes asociados (OJO)
-- ----------------------------------------------------------------------------
SELECT * FROM clientes RIGHT JOIN pedidos 
ON clientes.codigo_cliente = pedidos.codigo_cliente
ORDER BY clientes.codigo_cliente
-- ----------------------------------------------------------------------------
-- SUBCONSULTA CORRELACIONADA (IN, NOT IN): 
-- Devuelve una lista de registros de Tablas relacionadas
-- SELECT de una tabla dentro de otro SELECT de otra tabla. Operadores: ALL, ANY
-- ----------------------------------------------------------------------------
-- ## Nombre y precio de aquellos artículos de los que se han pedido más de 20
--    unidades
-- ----------------------------------------------------------------------------
SELECT nombre_articulo, precio FROM productos WHERE codigo_articulo IN 
(SELECT codigo_articulo FROM productos_pedidos WHERE unidades > 20)
-- ----------------------------------------------------------------------------
-- ## Nombre y precio de aquellos artículos de los que se han pedido más de 20
--    unidades (Con consulta multitabla: INNER JOIN --> Mismo resultado)
-- ----------------------------------------------------------------------------
SELECT nombre_articulo, precio FROM productos INNER JOIN productos_pedidos 
ON productos.codigo_articulo = productos_pedidos.codigo_articulo
WHERE unidades > 20
-- ----------------------------------------------------------------------------
-- ## Clientes que no han pagado con tarjeta o no han realizado pedidos
-- ----------------------------------------------------------------------------
SELECT empresa, poblacion FROM clientes WHERE codigo_cliente NOT IN
(SELECT codigo_cliente FROM pedidos WHERE forma_pago = 'TARJETA')
-- ----------------------------------------------------------------------------
-- CONSULTAS DE ACCIÓN: Actualización, creación de tabla, eliminación, datos
-- anexados. Comandos DDL-DML: Create, Update, Delete, Insert into, Select into
-- ----------------------------------------------------------------------------
