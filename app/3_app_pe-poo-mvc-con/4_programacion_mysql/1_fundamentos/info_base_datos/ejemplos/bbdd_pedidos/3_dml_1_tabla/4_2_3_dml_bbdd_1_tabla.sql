-- -------------------------------------------------------------------------------------
-- -------------------------------------------------------------------------------------
-- DML: LENGUAJE DE MANIPULACIÓN DE DATOS (CRUD)									  --
--      ## CONSULTAS ACCIÓN: CREAR (INSERT INTO), ACTUALIZAR (UPDATE), 				  --
--                           ELIMINAR (DELETE), CONSULTAR Y MODIFICAR (SELECT INTO)   --
--      				     DDL: CREAR TABLA (CREATE)								  --
--      ## CONSULTAS DE SELECCIÓN: CONSULTAR (SELECT)								  --
-- -------------------------------------------------------------------------------------
-- -------------------------------------------------------------------------------------


-- -------------------------------------------------------------------------------------
-- CONSULTAS DE ACCIÓN:
-- CREAR REGISTROS (INSERT INTO, VALUES)
-- -------------------------------------------------------------------------------------
-- ## Insertar datos a las tablas: Clientes, productos, pedidos y productos pedidos
-- -------------------------------------------------------------------------------------
INSERT INTO clientes VALUES 
(NULL, 'BELTRÁN E HIJOS','LAS FUENTES 78','MADRID','914456435','ANGEL MARTÍNEZ',NULL)
-- -------------------------------------------------------------------------------------
INSERT INTO productos VALUES 
(NULL, 'FERRETERÍA','DESTORNILLADOR',6.628,'2000-10-22',0,'ESPAÑA',NULL)
-- -------------------------------------------------------------------------------------
INSERT INTO pedidos VALUES 
(null, 1,'2000-03-11','CONTADO',0.02,1)
-- -------------------------------------------------------------------------------------
INSERT INTO productos_pedidos VALUES
(1, 1,11)
-- -------------------------------------------------------------------------------------
-- ## Insertar datos a las tablas: Clientes, productos, pedidos y productos pedidos de 
--    forma masiva (Ver la carpeta 2_dml_datos)
-- -------------------------------------------------------------------------------------


-- -------------------------------------------------------------------------------------
-- CONSULTAS DE ACCIÓN: 
-- ACTUALIZAR REGISTROS (UPDATE, SET, WHERE)
-- -------------------------------------------------------------------------------------
-- ## Actualizar toda la información del cliente codigo_cliente = 1
-- -------------------------------------------------------------------------------------
UPDATE clientes SET 
empresa = 'EMPANADAS S.A.',
direccion = 'AVENIDA SIEMPRE VIVA',
poblacion = 'BOGOTÁ',
telefono = '123456789',
responsable = 'PROFE ALBEIRO'
WHERE codigo_cliente = 1; 
-- -------------------------------------------------------------------------------------
-- ## Incrementar en 10 Euros los artículos de la Sección de Deportes
-- -------------------------------------------------------------------------------------
UPDATE productos SET precio = precio + 10
WHERE seccion = 'DEPORTES'
-- -------------------------------------------------------------------------------------
-- ## Decrementar en 10 Euros los artículos de la Sección de Deportes (Devolver)
-- -------------------------------------------------------------------------------------
UPDATE productos SET precio = precio - 10
WHERE seccion = 'DEPORTES'
-- -------------------------------------------------------------------------------------


-- -------------------------------------------------------------------------------------
-- CONSULTAS DE ACCIÓN: 
-- ELIMINAR REGISTROS (DELETE)
-- -------------------------------------------------------------------------------------
-- ## Eliminar el cliente con codigo_cliente = 1
-- -------------------------------------------------------------------------------------
DELETE FROM clientes WHERE codigo_cliente = 1;
-- -------------------------------------------------------------------------------------



-- -------------------------------------------------------------------------------------
-- CONSULTAS DE SELECCIÓN: 
-- Consultas Generales, criterios, operadores, orden, agrupación o totales, calculadas.
-- Subconsultas
-- -------------------------------------------------------------------------------------
-- CONSULTAS GENERALES: SELECT, *, FROM
-- -------------------------------------------------------------------------------------
-- ## - Seleccione todos (*) los campos de la tabla productos
-- -------------------------------------------------------------------------------------
SELECT * FROM productos;
-- -------------------------------------------------------------------------------------
-- ## - Seleccione los campos sección, nombre_articulo y precio de la tabla productos
-- -------------------------------------------------------------------------------------
SELECT seccion, nombre_articulo, precio FROM productos;
-- -------------------------------------------------------------------------------------
-- CONSULTAS CON CRITERIOS: WHERE
-- -------------------------------------------------------------------------------------
-- ## - Seleccione los campos sección, nombre_articulo y precio de la tabla productos
--      donde la sección sea 'CERÁMICA'
-- -------------------------------------------------------------------------------------
SELECT seccion, nombre_articulo, precio FROM productos 
WHERE seccion = 'CERÁMICA';
-- -------------------------------------------------------------------------------------
-- OPERADORES LÓGICOS Y DE COMPARACIÓN
-- LÓGICOS:      AND, OR, NOT
-- COMPARACIÓN:  LIKE, <>, <=, >=, <, >, BEETWEEN, IN, ANY, ALL
-- -------------------------------------------------------------------------------------
-- ## - Seleccione los campos sección, nombre_articulo y precio de la tabla productos 
--      donde sección sea igual a 'CERÁMICA' y (realmente es 'OR') 'DEPORTES'
-- -------------------------------------------------------------------------------------
SELECT seccion, nombre_articulo, precio FROM productos 
WHERE seccion = 'CERÁMICA' OR seccion = 'DEPORTES';
-- -------------------------------------------------------------------------------------
-- ## - Seleccione todos los campos de la tabla productos donde sección sea igual a 
--      'DEPORTES' y su país de origen sea 'USA'
-- -------------------------------------------------------------------------------------
SELECT * FROM productos WHERE seccion = 'DEPORTES' AND pais_origen = 'USA';
-- -------------------------------------------------------------------------------------
-- ## - Seleccione todos los campos de la tabla productos donde precio sea mayor 300
-- -------------------------------------------------------------------------------------
SELECT * FROM productos WHERE precio > 300;
-- -------------------------------------------------------------------------------------
-- ## - Seleccione todos los campos de la tabla productos donde la fecha esté entre 
--      '2000-03-01' y '2000-04-30'
-- -------------------------------------------------------------------------------------
SELECT * FROM productos WHERE fecha BETWEEN '2000-03-01' AND '2000-04-30';
-- -------------------------------------------------------------------------------------
SELECT * FROM productos WHERE fecha >= '2000-03-01' AND fecha <= '2000-04-30';
-- -------------------------------------------------------------------------------------
-- CONSULTAS ORDENADAS POR UNO O VARIOS CAMPOS: ORDER BY, ASC, DESC
-- -------------------------------------------------------------------------------------
-- ## - Seleccione todos los campos de la tabla productos donde la sección sea igual a 
--      'CERÁMICA' y 'DEPORTES' y que lo ordene por la sección (Ascendente)
-- -------------------------------------------------------------------------------------
SELECT * FROM productos 
WHERE seccion = 'CERÁMICA' OR seccion = 'DEPORTES' 
ORDER BY seccion ASC;
-- -------------------------------------------------------------------------------------
-- ## - Seleccione todos los campos de la tabla productos donde la sección sea igual a 
--      'CERÁMICA' y 'DEPORTES' y que lo ordene por la sección (Descendente)
-- -------------------------------------------------------------------------------------
SELECT * FROM productos 
WHERE seccion = 'CERÁMICA' OR seccion = 'DEPORTES' 
ORDER BY seccion DESC;
-- -------------------------------------------------------------------------------------
-- ## - Seleccione todos los campos de la tabla productos donde la sección sea igual a 
--      'CERÁMICA' y 'DEPORTES' y que lo ordene por el precio
-- -------------------------------------------------------------------------------------
SELECT * FROM productos 
WHERE seccion = 'CERÁMICA' OR seccion = 'DEPORTES' 
ORDER BY precio;
-- -------------------------------------------------------------------------------------
-- ## - Seleccione todos los campos de la tabla productos donde la sección sea igual a 
--      'CERÁMICA' y 'DEPORTES', después lo ordene por sección y luego por precio
-- -------------------------------------------------------------------------------------
SELECT * FROM productos 
WHERE seccion = 'CERÁMICA'OR seccion = 'DEPORTES' 
ORDER BY seccion, precio;
-- -------------------------------------------------------------------------------------
-- ## - Seleccione todos los campos de la tabla productos donde la sección sea igual a 
--      'CERÁMICA' y 'DEPORTES', después lo ordene por sección, país de origen y precio
-- -------------------------------------------------------------------------------------
SELECT * FROM productos 
WHERE seccion = 'CERÁMICA' OR seccion = 'DEPORTES' 
ORDER BY seccion, pais_origen, precio;
-- -------------------------------------------------------------------------------------
-- CONSULTAS DE AGRUPACIÓN O TOTALES
-- FUNCIONES DE AGREGADO: SUM(), AVG(), COUNT(), MAX(), MIN (),
-- CAMPO DE AGRUPACIÓN Y CAMPO DEL CÁLCULO 
-- GROUP BY, AS (ALIAS), HAVING (POR WHERE), 
-- DATE_FORMAT(NOW(),'%Y-%m-%d') AS alias, DATEDIFF(NOW(),fecha)
-- -------------------------------------------------------------------------------------
-- ## - Seleccione la sección (agrupación) y sume los precios (cálculo) de la tabla 
--      productos y lo agrupe por la sección
-- -------------------------------------------------------------------------------------
SELECT seccion, SUM(precio) FROM productos GROUP BY seccion;
-- -------------------------------------------------------------------------------------
-- ## - Seleccione la sección (agrupación) y sume los precios (cálculo) de la tabla 
--      productos, lo agrupe por la sección y los ordene por precio
-- -------------------------------------------------------------------------------------
SELECT seccion, SUM(precio) AS sum_articulos FROM productos 
GROUP BY seccion ORDER BY sum_articulos;
-- -------------------------------------------------------------------------------------
-- ## - Seleccione la sección (agrupación) y calcule la media de los precios (cálculo) 
--      de la tabla productos, lo agrupe (HAVING) por la sección DEPORTES y CONFECCIÓN y los 
--      ordene por la media de los artículos
-- -------------------------------------------------------------------------------------
SELECT seccion, AVG(precio) AS media_articulos FROM productos 
GROUP BY seccion HAVING seccion = 'DEPORTES' OR seccion = 'CONFECCIÓN' 
ORDER BY media_articulos;
-- -------------------------------------------------------------------------------------
-- ## - Seleccione la población (agrupación) y cuente de los clientes (cálculo) de la 
--      tabla clientes, lo agrupe por la población y los ordene descendentemente por 
--      la cantidad de clientes
-- -------------------------------------------------------------------------------------
SELECT poblacion, COUNT(codigo_cliente) AS num_cliente FROM clientes 
GROUP BY poblacion ORDER BY num_cliente DESC
-- -------------------------------------------------------------------------------------
-- ## - Seleccione la seccion (agrupación) y calcule el precio más alto (cálculo) de 
--      productos, donde la sección sea CONFECCIÓN y los ordene por sección
-- -------------------------------------------------------------------------------------
SELECT seccion, MAX(precio) AS precio_alto FROM productos 
WHERE seccion = 'CONFECCIÓN' GROUP BY seccion
-- -------------------------------------------------------------------------------------
-- CONSULTAS DE CÁLCULO: NOW(), DATEDIFF(), DATE_FORMAT(), CONCAT(), ROUND(), TRUNCATE()
-- DATE_FORMAT(NOW(),'%Y-%m-%d') AS alias, DATEDIFF(NOW(),fecha)
-- -------------------------------------------------------------------------------------
-- ## - Seleccione el articulo, seccion y precio de la tabla productos y cree un campo 
--      calculado del precio más el IVA
-- -------------------------------------------------------------------------------------
SELECT nombre_articulo, seccion, precio, precio*1.19 FROM productos
-- -------------------------------------------------------------------------------------
-- ## - Seleccione el articulo, seccion y precio de la tabla productos y cree un campo 
--      calculado del precio más el IVA, llame el nuevo campo como precio_con_iva
-- -------------------------------------------------------------------------------------
SELECT nombre_articulo, seccion, precio, precio*1.19 AS precio_con_iva 
FROM productos
-- -------------------------------------------------------------------------------------
-- ## - Seleccione el articulo, seccion y precio de la tabla productos y cree un campo 
--      calculado del precio más el IVA, redondee a dos decimales y llame el nuevo 
--      campo como precio_con_iva
-- -------------------------------------------------------------------------------------
SELECT nombre_articulo, seccion, precio, ROUND(precio*1.19,2) AS precio_con_iva 
FROM productos
-- -------------------------------------------------------------------------------------
-- ## - Seleccione el articulo, seccion y precio de la tabla productos y cree un campo 
--      calculado con un descuento de 3 euros, redondee a dos decimales y llame el nuevo 
--      campo como descuento
-- -------------------------------------------------------------------------------------
SELECT nombre_articulo, seccion, precio, precio-3 AS descuento 
FROM productos
-- -------------------------------------------------------------------------------------
-- ## - Seleccione el articulo, seccion, precio y fecha de la tabla productos, cree un
--      campo calculado de la diferencia de días entre la fecha almacenada y la fecha 
--      actual, agrupelo por la sección DEPORTES
-- -------------------------------------------------------------------------------------
SELECT nombre_articulo, seccion, precio, fecha, 
DATE_FORMAT(NOW(),'%Y-%m-%d') AS dia_de_hoy, DATEDIFF(NOW(),fecha) AS diferencia_dias 
FROM productos WHERE seccion = 'DEPORTES'
-- ----------------------------------------------------------------------------
-- SUBCONSULAS: ESCALONADA Y DE LISTA.
-- SELECT dentro de otro SELECT. Operadores: ALL, ANY
-- ----------------------------------------------------------------------------
-- SUBCONSULTA ESCALONADA: Devuelve un único registro
-- ----------------------------------------------------------------------------
-- ## Nombre y sección de los productos cuyo precio sea inferior a la media
-- ----------------------------------------------------------------------------
SELECT nombre_articulo, seccion FROM productos 
WHERE precio < (SELECT AVG(precio) FROM productos)
-- ----------------------------------------------------------------------------
-- SUBCONSULTA DE LISTA (ALL): Devuelve una lista de registros (Todos)
-- ----------------------------------------------------------------------------
-- ## Todos los artículos cuyo precio sea superior a todos (Precio más alto) 
--    los artículos de la sección cerámica
-- ----------------------------------------------------------------------------
SELECT * FROM productos WHERE precio > ALL
(SELECT precio FROM productos WHERE seccion='CERÁMICA')
-- ----------------------------------------------------------------------------
-- ## Todos los artículos cuyo precio sea superior a todos los artículos de 
--    juguetería (Precio más alto)
-- ----------------------------------------------------------------------------
SELECT * FROM productos WHERE precio > ALL
(SELECT precio FROM productos WHERE seccion='JUGUETERÍA')
-- ----------------------------------------------------------------------------
-- SUBCONSULTA DE LISTA (ANY): Devuelve una lista de registros (Cualquiera)
-- ----------------------------------------------------------------------------
-- ## Todos los artículos cuyo precio sea superior a cualquiera (Precio más 
--    bajo) de los artículos de la sección cerámica
-- ----------------------------------------------------------------------------
SELECT * FROM productos WHERE precio > ANY
(SELECT precio FROM productos WHERE seccion='CERÁMICA')
-- ----------------------------------------------------------------------------
-- ## Todos los artículos cuyo precio sea superior a cualquiera los artículos  
--    de juguetería (Precio más bajo)
-- ----------------------------------------------------------------------------
SELECT * FROM productos WHERE precio > ANY
(SELECT precio FROM productos WHERE seccion='JUGUETERÍA')
-- -------------------------------------------------------------------------------------
-- CONSULTAS DE ACCIÓN: 
-- Actualización, creación de tabla, eliminación, datos anexados. 
-- Comandos DML: Insert into, Update, Delete, Select into, Create
-- -------------------------------------------------------------------------------------