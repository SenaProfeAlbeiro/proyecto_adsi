-- -------------------------------------------------------------------------------------
-- -------------------------------------------------------------------------------------
-- -------------------------------------------------------------------------------------
-- DDL: LENGUAJE DE DEFINICIÓN DE DATOS (ESTRUCTURA)
--      ## ACCIONES BÁSICAS CON TABLAS RELACIONADAS: 
--         # EN CONSOLA, MOSTRAR BBDD, USAR BBDD, MOSTRAR TABLAS Y COLUMNAS, MOSTRAR 
--           CREACIÓN DE TABLAS Y COLUMNAS, AGREGAR, MODIFICAR Y ELIMINAR COLUMNAS,
--           ELIMINAR Y CREAR ÍNDICES Y RESTRICCIONES, ELIMINAR REGISTROS, ELIMINAR 
--           BBDD Y TABLAS.
-- -------------------------------------------------------------------------------------
-- -------------------------------------------------------------------------------------
-- -------------------------------------------------------------------------------------


-- -------------------------------------------------------------------------------------
-- EN CONSOLA: XAMPP / SHELL / cd mysql/bin / mysql -h localhost -u root -p / ENTER
-- -------------------------------------------------------------------------------------
## Mostrar bases de datos (SHOW DATABASES)
-- -------------------------------------------------------------------------------------
SHOW DATABASES;
-- -------------------------------------------------------------------------------------
## Usar base de datos (USE bbdd_pedidos)
-- -------------------------------------------------------------------------------------
USE bbdd_pedidos;
-- -------------------------------------------------------------------------------------
## Mostrar Tablas (SHOW TABLES)
-- -------------------------------------------------------------------------------------
SHOW TABLES;
-- -------------------------------------------------------------------------------------
## Mostrar columnas de las Tablas (SHOW TABLES)
-- -------------------------------------------------------------------------------------
SHOW COLUMNS FROM clientes;
SHOW COLUMNS FROM pedidos;
SHOW COLUMNS FROM productos;
SHOW COLUMNS FROM productos_pedidos;
-- -------------------------------------------------------------------------------------
## Mostar cómo se crearon las tablas de la bbdd_pedidos
-- -------------------------------------------------------------------------------------
SHOW CREATE TABLE clientes;
SHOW CREATE TABLE pedidos;
SHOW CREATE TABLE productos_pedidos;
SHOW CREATE TABLE productos;
-- -------------------------------------------------------------------------------------


-- -------------------------------------------------------------------------------------
-- AGREGAR UN CAMPO DE UNA TABLA (ALTER TABLE, ADD, COLUMN)
-- -------------------------------------------------------------------------------------
## Agregar campo a una tabla
-- -------------------------------------------------------------------------------------
ALTER TABLE clientes ADD COLUMN correo DATE;
-- -------------------------------------------------------------------------------------


-- -------------------------------------------------------------------------------------
-- MODIFICAR UN CAMPO DE UNA TABLA (ALTER TABLE, CHANGE, COLUMN)
-- -------------------------------------------------------------------------------------
ALTER TABLE clientes CHANGE correo correo VARCHAR(50);
-- -------------------------------------------------------------------------------------


-- -------------------------------------------------------------------------------------
-- AGREGAR UN CAMPO DE UNA TABLA CON UN VALOR POR DEFECTO (SET DEFAULT)
-- -------------------------------------------------------------------------------------
## Agregar campo a una tabla con un valor por defecto
-- -------------------------------------------------------------------------------------
ALTER TABLE clientes ALTER COLUMN correo SET DEFAULT 'usuario@correo.com';
-- -------------------------------------------------------------------------------------


-- -------------------------------------------------------------------------------------
-- MODIFICAR UN CAMPO DE UNA TABLA CON UN VALOR POR DEFECTO (SET DEFAULT)
-- -------------------------------------------------------------------------------------
## Agregar campo a una tabla con un valor por defecto
-- -------------------------------------------------------------------------------------
ALTER TABLE clientes ALTER COLUMN correo DROP DEFAULT;
-- -------------------------------------------------------------------------------------


-- -------------------------------------------------------------------------------------
-- ELIMINAR UN CAMPO DE UNA TABLA (ALTER TABLE, DROP, COLUMN)
-- -------------------------------------------------------------------------------------
ALTER TABLE clientes DROP COLUMN correo;
-- -------------------------------------------------------------------------------------


-- -------------------------------------------------------------------------------------
-- CREAR UN ÍNDICE EN UNA TABLA (CREATE, INDEX, ON) (PERMITE DUPLICADOS)
-- -------------------------------------------------------------------------------------
CREATE INDEX indice_empresa ON clientes (empresa);
-- -------------------------------------------------------------------------------------


-- -------------------------------------------------------------------------------------
-- CREAR UN ÍNDICE EN UNA TABLA (CREATE, INDEX, ON) (NO PERMITE DUPLICADOS)
-- -------------------------------------------------------------------------------------
CREATE UNIQUE INDEX indice_empresa ON clientes (empresa);
-- -------------------------------------------------------------------------------------


-- -------------------------------------------------------------------------------------
-- CREAR UN ÍNDICE EN UNA TABLA (CREATE, INDEX, ON) (MULTICAMPO)
-- -------------------------------------------------------------------------------------
CREATE UNIQUE INDEX indice_empresa ON clientes (empresa, poblacion);
-- -------------------------------------------------------------------------------------


-- -------------------------------------------------------------------------------------
-- ELIMINAR UN ÍNDICE EN UNA TABLA (ALTER TABLE, DROP)
-- -------------------------------------------------------------------------------------
ALTER TABLE clientes DROP INDEX indice_empresa;
-- -------------------------------------------------------------------------------------


-- -------------------------------------------------------------------------------------
-- ELIMINAR RESTRICCIONES E ÍNDICES (ALTER TABLE, DROP)
-- -------------------------------------------------------------------------------------
## Eliminar restricción CONSTRAINT e índice KEY de pedidos con clientes
-- -------------------------------------------------------------------------------------
ALTER TABLE pedidos DROP CONSTRAINT fk_pedidos_clientes;
ALTER TABLE pedidos DROP KEY fk_pedidos_clientes;
-- -------------------------------------------------------------------------------------
## Eliminar restricción CONSTRAINT e índice KEY de productos_pedidos con pedidos
-- -------------------------------------------------------------------------------------
ALTER TABLE productos_pedidos DROP CONSTRAINT fk_productos_pedidos_pedidos;
ALTER TABLE productos_pedidos DROP KEY fk_productos_pedidos_pedidos;
-- -------------------------------------------------------------------------------------
## Eliminar restricción CONSTRAINT e índice KEY de productos_pedidos con productos
-- -------------------------------------------------------------------------------------
ALTER TABLE productos_pedidos DROP CONSTRAINT fk_productos_pedidos_productos;
ALTER TABLE productos_pedidos DROP KEY fk_productos_pedidos_productos;
-- -------------------------------------------------------------------------------------


-- -------------------------------------------------------------------------------------
-- ELIMINAR REGISTROS DE UNA TABLA (TRUNCATE)
-- -------------------------------------------------------------------------------------
## Eliminar todos los registros de una tabla
-- -------------------------------------------------------------------------------------
TRUNCATE clientes;
TRUNCATE pedidos;
TRUNCATE productos;
TRUNCATE productos_pedidos;
-- -------------------------------------------------------------------------------------


-- -------------------------------------------------------------------------------------
-- AGREGAR RESTRICCIONES E ÍNDICES (ALTER TABLE, ADD)
-- -------------------------------------------------------------------------------------
## Agregar índice y restricción entre la tabla pedidos y clientes
-- -------------------------------------------------------------------------------------
ALTER TABLE pedidos
ADD KEY fk_pedidos_clientes (codigo_cliente),
ADD CONSTRAINT fk_pedidos_clientes 
FOREIGN KEY (codigo_cliente)
REFERENCES clientes (codigo_cliente)
ON DELETE CASCADE
ON UPDATE CASCADE;
-- -------------------------------------------------------------------------------------
## Agregar índice y restricción entre la tabla productos_pedidos y pedidos
-- -------------------------------------------------------------------------------------
ALTER TABLE productos_pedidos
ADD KEY fk_productos_pedidos_pedidos (numero_pedido),
ADD CONSTRAINT fk_productos_pedidos_pedidos
FOREIGN KEY (numero_pedido)
REFERENCES pedidos (numero_pedido)
ON DELETE CASCADE
ON UPDATE CASCADE;
-- -------------------------------------------------------------------------------------
## Agregar índice y restricción entre la tabla productos_pedidos y productos
-- -------------------------------------------------------------------------------------
ALTER TABLE productos_pedidos
ADD KEY fk_productos_pedidos_productos (codigo_articulo),
ADD CONSTRAINT fk_productos_pedidos_productos
FOREIGN KEY (codigo_articulo)
REFERENCES productos (codigo_articulo)
ON DELETE CASCADE
ON UPDATE CASCADE;
-- -------------------------------------------------------------------------------------


-- -------------------------------------------------------------------------------------
-- ELIMINAR TABLAS Y BASES DE DATOS (DROP)
-- -------------------------------------------------------------------------------------
## Eliminar Tabla
-- -------------------------------------------------------------------------------------
DROP TABLE clientes;
DROP TABLE pedidos;
DROP TABLE productos;
DROP TABLE productos_pedidos;
-- -------------------------------------------------------------------------------------
## Eliminar Base de Datos
-- -------------------------------------------------------------------------------------
DROP DATABASE bbdd_pedidos;
-- -------------------------------------------------------------------------------------