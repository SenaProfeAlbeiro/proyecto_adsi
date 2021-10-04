-- -------------------------------------------------------------------------------------
-- -------------------------------------------------------------------------------------
-- -------------------------------------------------------------------------------------
-- TRIGERS: DISPARADORES -> TAREAS DE MANTENIMIENTO Y ADMIN DE BBDD					  -- 
--          (SON OBJETOS, SON EVENTOS, ASOCIADOS A UNA TABLA)						  --
--			# ¿CUÁNDO?: BEFORE, AFTER												  --
--          # TIPOS: INSERT (QUIÉN INSERTÓ, COMPROBAR)		 				  		  --
--           		 UPDATE (COPIA_SEG)		  		  								  --
--           		 DELETE (COPIA_SEG)		  		  								  --
--			# USO: OLD, NEW													  --
-- -------------------------------------------------------------------------------------
-- -------------------------------------------------------------------------------------
-- -------------------------------------------------------------------------------------


-- -------------------------------------------------------------------------------------
-- INSERTAR UN REGISTRO A PRODUCTOS Y UTILIZAR UN TRIGGER PARA ALMACENAR EN TABLA REG  
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
	) VALUES (NEW.codigo_articulo, NEW.nombre_articulo, NEW.precio, NOW()
);
-- -------------------------------------------------------------------------------------
## INSERT: Insertar Registro a la Tabla Productos y comprobar
-- -------------------------------------------------------------------------------------
INSERT INTO productos VALUES
(NULL, 'CONFECCIÓN','PANTALÓN',50,'2020-07-10',0,'BOGOTÁ',NULL);
-- -------------------------------------------------------------------------------------
##  Eliminar un Trigger
-- -------------------------------------------------------------------------------------
DROP TRIGGER IF EXISTS productos_ai;
-- -------------------------------------------------------------------------------------


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



-- -------------------------------------------------------------------------------------
## UPDATE: 
-- -------------------------------------------------------------------------------------

-- -------------------------------------------------------------------------------------