-- -------------------------------------------------------------------------------------
-- -------------------------------------------------------------------------------------
-- -------------------------------------------------------------------------------------
-- TRIGERS: DISPARADORES -> VALIDACIÓN, TAREAS DE MANTENIMIENTO Y ADMIN DE BBDD			  -- 
--          (SON OBJETOS, SON EVENTOS, ASOCIADOS A UNA TABLA)												  --
--			# ¿CUÁNDO?: BEFORE, AFTER												  														--
--          # TIPOS: INSERT (QUIÉN INSERTÓ, COMPROBAR)		 				  		  						--
--           		 UPDATE (COPIA_SEG)		  		  								  											--
--           		 DELETE (COPIA_SEG)		  		  								  											--
--			# USO: OLD, NEW													  																		--
--			# DELIMITER, BEGIN, END									  																		--
-- -------------------------------------------------------------------------------------
-- -------------------------------------------------------------------------------------
-- -------------------------------------------------------------------------------------


-- -------------------------------------------------------------------------------------
-- INSERTAR REGISTRO A PRODUCTOS Y UTILIZAR UN TRIGGER PARA ALMACENAR EN TABLA REG_PROD  
-- -------------------------------------------------------------------------------------
## Crear una Tabla para almacenar el registro 'reg_productos'
-- -------------------------------------------------------------------------------------
CREATE TABLE reg_productos (
  codigo_articulo INT(11) NOT NULL,  
  nombre_articulo VARCHAR(100),
  precio DECIMAL(10,2),
  insertado DATETIME,
);
-- -------------------------------------------------------------------------------------
## Crear el Trigger: (AFTER)
-- -------------------------------------------------------------------------------------
CREATE TRIGGER productos_ai AFTER INSERT ON productos
FOR EACH ROW INSERT INTO reg_productos (
	codigo_articulo, nombre_articulo, precio, insertado
) VALUES (
	NEW.codigo_articulo, NEW.nombre_articulo, NEW.precio, NOW()
);
-- -------------------------------------------------------------------------------------
## INSERT: Insertar Registro a la Tabla Productos y comprobar
-- -------------------------------------------------------------------------------------
INSERT INTO productos VALUES
(NULL, 'CONFECCIÓN','PANTALÓN',50,'2020-07-10',0,'BOGOTÁ',NULL);
-- -------------------------------------------------------------------------------------


-- -------------------------------------------------------------------------------------
-- ACTUALIZAR REGISTRO DE PRODUCTOS Y UTILIZAR TRIGGER PARA ALMACENAR EN TABLA PROD_ACT  
-- -------------------------------------------------------------------------------------
## Crear una tabla para almacenar registro 'productos_actualizados'
-- -------------------------------------------------------------------------------------
CREATE TABLE productos_actualizados (
	 anterior_codigo_articulo INT(11),
	 anterior_seccion VARCHAR(50),
	 anterior_nombre_articulo VARCHAR(100),
	 anterior_precio DECIMAL(10,2),
	 anterior_fecha DATE,  
	 anterior_importado TINYINT(1),
	 anterior_pais_origen VARCHAR(50),
	 nuevo_codigo_articulo INT(11),
	 nuevo_seccion VARCHAR(50),
	 nuevo_nombre_articulo VARCHAR(100),
	 nuevo_precio DECIMAL(10,2),
	 nuevo_fecha DATE,  
	 nuevo_importado TINYINT(1),
	 nuevo_pais_origen VARCHAR(50),
	 usuario VARCHAR(15),
	 f_modif DATE
);
-- -------------------------------------------------------------------------------------
## Crear un Trigger: (BEFORE)
-- -------------------------------------------------------------------------------------
CREATE TRIGGER actualiza_productos_bu BEFORE UPDATE ON productos
FOR EACH ROW INSERT INTO productos_actualizados (
	anterior_codigo_articulo, anterior_seccion, anterior_nombre_articulo, anterior_precio,
	anterior_fecha, anterior_importado, anterior_pais_origen, nuevo_codigo_articulo,
	nuevo_seccion, nuevo_nombre_articulo, nuevo_precio, nuevo_fecha, nuevo_importado,
	nuevo_pais_origen, usuario, f_modif
) VALUES (
	OLD.codigo_articulo, OLD.seccion, OLD.nombre_articulo, OLD.precio, OLD.fecha,
	OLD.importado, OLD.pais_origen,
	NEW.codigo_articulo, NEW.seccion, NEW.nombre_articulo, NEW.precio, NEW.fecha,
	NEW.importado, NEW.pais_origen, 
	CURRENT_USER(), NOW()
);
-- -------------------------------------------------------------------------------------
## UPDATE: Actualizar el precio (30.20 a 50.20) de serrucho y comprobar
-- -------------------------------------------------------------------------------------
UPDATE productos SET 
precio = precio + 20 
WHERE codigo_articulo = 6;
-- -------------------------------------------------------------------------------------


-- -------------------------------------------------------------------------------------
-- ELIMINAR UN REGISTRO DE PRODUCTOS Y UTILIZAR TRIGGER PARA ALMACENAR EN TABLA PROD_ACT  
-- -------------------------------------------------------------------------------------
## Crear una tabla para almacenar registro 'productos_eliminados'
-- -------------------------------------------------------------------------------------
CREATE TABLE productos_eliminados (
	 codigo_articulo INT(11),
	 seccion VARCHAR(50),
	 nombre_articulo VARCHAR(100),
	 precio DECIMAL(10,2),
	 fecha DATE,  
	 importado TINYINT(1),
	 pais_origen VARCHAR(50),
	 usuario VARCHAR(15),
	 f_modif DATE
);
-- -------------------------------------------------------------------------------------
## Crear un Trigger: (BEFORE)
-- -------------------------------------------------------------------------------------
CREATE TRIGGER elimina_productos_ad AFTER DELETE ON productos
FOR EACH ROW INSERT INTO productos_eliminados (
	codigo_articulo, seccion, nombre_articulo, precio, fecha, importado, pais_origen
) VALUES (
	OLD.codigo_articulo, OLD.seccion, OLD.nombre_articulo, OLD.precio, OLD.fecha,
	OLD.importado, OLD.pais_origen
);
-- -------------------------------------------------------------------------------------
## DELETE: Eliminar un Registro de la Tabla productos y comprobar
-- -------------------------------------------------------------------------------------
DELETE FROM productos WHERE codigo_articulo = 40;
-- -------------------------------------------------------------------------------------


-- -------------------------------------------------------------------------------------
##  ELIMINAR UN TRIGER
-- -------------------------------------------------------------------------------------
DROP TRIGGER productos_ai;
-- -------------------------------------------------------------------------------------


-- -------------------------------------------------------------------------------------
-- MODIFICAR UN TRIGGER
-- -------------------------------------------------------------------------------------
## Agregar dos campos más a la tabla elimina_productos
-- -------------------------------------------------------------------------------------
ALTER TABLE productos_eliminados ADD COLUMN (
	usuario VARCHAR(50), f_modif DATETIME
); 
-- -------------------------------------------------------------------------------------
## Modificar el Trigger elimina_productos_ad de acuerdo a los campos agregados
-- -------------------------------------------------------------------------------------
DROP TRIGGER IF EXISTS elimina_productos_ad;
CREATE TRIGGER elimina_productos_ad AFTER DELETE ON productos
FOR EACH ROW INSERT INTO productos_eliminados (
	codigo_articulo, seccion, nombre_articulo, precio, fecha, importado, pais_origen,
    usuario, f_modif
) VALUES (
	OLD.codigo_articulo, OLD.seccion, OLD.nombre_articulo, OLD.precio, OLD.fecha,
	OLD.importado, OLD.pais_origen, CURRENT_USER(), NOW()
);
-- -------------------------------------------------------------------------------------
## DELETE: Eliminar un Registro de la Tabla productos y comprobar
-- -------------------------------------------------------------------------------------
DELETE FROM productos WHERE codigo_articulo = 39;
-- -------------------------------------------------------------------------------------


-- -------------------------------------------------------------------------------------
-- TRIGGER QUE IMPIDA ACTUALIZACIÓN DE UN PRECIO SINO CUMPLE UNA CONDICIÓN
-- -------------------------------------------------------------------------------------
## Crear el trigger con condicional
-- -------------------------------------------------------------------------------------
DELIMITER $$
CREATE TRIGGER revisa_precio_bu 
BEFORE UPDATE ON productos FOR EACH ROW
BEGIN
	IF (NEW.precio < 0) THEN
		SET NEW.precio = OLD.precio;
	ELSEIF (NEW.precio > 1000) THEN
		SET NEW.precio = OLD.precio;
	END IF;
END;$$
DELIMITER ;
-- -------------------------------------------------------------------------------------
## Actualizar el precio de un artículo (normal)
-- -------------------------------------------------------------------------------------
UPDATE productos SET precio = 15 WHERE codigo_articulo = 1;
-- -------------------------------------------------------------------------------------
## Actualizar el precio de un artículo (Si sobrepasa los 1000 -> Triger)
-- -------------------------------------------------------------------------------------
UPDATE productos SET precio = 8500 WHERE codigo_articulo = 1;
-- -------------------------------------------------------------------------------------
## Actualizar el precio de un artículo (Si es negativo -> Triger)
-- -------------------------------------------------------------------------------------
UPDATE productos SET precio = -85 WHERE codigo_articulo = 1;
-- -------------------------------------------------------------------------------------