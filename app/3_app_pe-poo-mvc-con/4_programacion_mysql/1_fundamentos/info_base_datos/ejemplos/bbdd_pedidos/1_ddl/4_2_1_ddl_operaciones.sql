-- -------------------------------------------------------------------------------------
-- DDL: LENGUAJE DE DEFINICIÓN DE DATOS (ESTRUCTURA)
--      ACCIONES BÁSICAS CON TABLAS RELACIONADAS 
--      ELIMINAR Y CREAR ÍNDICES Y RESTRICCIONES:
--      SHOW, ALTER TABLE, ADD, DROP, KEY, INDEX, CONSTRAINT, FOREIGN KEY, TRUNCATE
-- -------------------------------------------------------------------------------------
-- -------------------------------------------------------------------------------------
-- -------------------------------------------------------------------------------------
-- ## - Eliminar bbdd_pedidos
-- -------------------------------------------------------------------------------------
DROP DATABASE bbdd_pedidos;
-- -------------------------------------------------------------------------------------
-- ## - Mostar cómo se crearon las tablas de la bbdd_pedidos
-- -------------------------------------------------------------------------------------
SHOW CREATE TABLE clientes;
SHOW CREATE TABLE pedidos;
SHOW CREATE TABLE productos_pedidos;
SHOW CREATE TABLE productos;
-- -------------------------------------------------------------------------------------
-- ## - Eliminar restricción CONSTRAINT e índice KEY de pedidos con clientes
-- -------------------------------------------------------------------------------------
ALTER TABLE pedidos DROP CONSTRAINT fk_pedidos_clientes;
ALTER TABLE pedidos DROP KEY fk_pedidos_clientes;
-- -------------------------------------------------------------------------------------
-- ## - Eliminar restricción CONSTRAINT e índice KEY de productos_pedidos con pedidos
-- -------------------------------------------------------------------------------------
ALTER TABLE productos_pedidos DROP CONSTRAINT fk_productos_pedidos_pedidos;
ALTER TABLE productos_pedidos DROP KEY fk_productos_pedidos_pedidos;
-- -------------------------------------------------------------------------------------
-- ## - Eliminar restricción CONSTRAINT e índice KEY de productos_pedidos con productos
-- -------------------------------------------------------------------------------------
ALTER TABLE productos_pedidos DROP CONSTRAINT fk_productos_pedidos_productos;
ALTER TABLE productos_pedidos DROP KEY fk_productos_pedidos_productos;
-- -------------------------------------------------------------------------------------
-- ## - Eliminar todos los registros de la tabla pedidos y productos_pedidos
-- -------------------------------------------------------------------------------------
TRUNCATE pedidos;
TRUNCATE productos_pedidos;
-- -------------------------------------------------------------------------------------
-- ## - Agregar índice y restricción entre la tabla pedidos y clientes
-- -------------------------------------------------------------------------------------
ALTER TABLE pedidos
ADD KEY fk_pedidos_clientes (codigo_cliente),
ADD CONSTRAINT fk_pedidos_clientes 
FOREIGN KEY (codigo_cliente)
REFERENCES clientes (codigo_cliente)
ON DELETE CASCADE
ON UPDATE CASCADE;
-- -------------------------------------------------------------------------------------
-- ## - Agregar índice y restricción entre la tabla productos_pedidos y pedidos
-- -------------------------------------------------------------------------------------
ALTER TABLE productos_pedidos
ADD KEY fk_productos_pedidos_pedidos (numero_pedido),
ADD CONSTRAINT fk_productos_pedidos_pedidos
FOREIGN KEY (numero_pedido)
REFERENCES pedidos (numero_pedido)
ON DELETE CASCADE
ON UPDATE CASCADE;
-- -------------------------------------------------------------------------------------
-- ## - Agregar índice y restricción entre la tabla productos_pedidos y productos
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
-- -------------------------------------------------------------------------------------