-- -------------------------------------------------------------------------------------
-- -------------------------------------------------------------------------------------
-- -------------------------------------------------------------------------------------
-- PROCEDIMIENTOS ALMACENADOS -> EFICIENCIA Y SEGURIDAD (NO MUESTRA INSTRUCCIÓN) 	  -- 
-- 		ALMACENA INSTRUCCIONES QUE DESPUÉS SE LLAMAN [CALL procedimiento()]			  --
-- 		# SIN Y CON PARÁMETROS														  --
-- 		# DELIMITER, BEGIN Y END																  --
-- 		# VARIABLES																	  --
-- 		# TRIGGERS CONDICIONALES													  --
-- -------------------------------------------------------------------------------------
-- -------------------------------------------------------------------------------------
-- -------------------------------------------------------------------------------------


-- -------------------------------------------------------------------------------------
-- PROCEDIMIENTO ALMACENADO QUE MUESTRE LA POBLACIÓN MADRID (SIN PARÁMETROS) 
-- -------------------------------------------------------------------------------------
## Crear el Procedimiento Almacenado muestra_clientes()
-- -------------------------------------------------------------------------------------
CREATE PROCEDURE muestra_clientes()
SELECT * FROM clientes WHERE poblacion = 'MADRID';
-- -------------------------------------------------------------------------------------
## Llamar el Procedimiento Almacenado muestra_clientes()
-- -------------------------------------------------------------------------------------
CALL muestra_clientes();
-- -------------------------------------------------------------------------------------


-- -------------------------------------------------------------------------------------
-- PROCEDIMIENTO ALMACENADO QUE ACTUALICE EL PRECIO DE UN ARTÍCULO (CON PARÁMETROS) 
-- -------------------------------------------------------------------------------------
## Crear el Procedimiento Almacenado muestra_clientes()
-- -------------------------------------------------------------------------------------
CREATE PROCEDURE actualiza_productos(n_precio DECIMAL(10,2), codigo INT(11))
UPDATE productos SET precio = n_precio
WHERE codigo_articulo = codigo;
-- -------------------------------------------------------------------------------------
## Llamar el Procedimiento Almacenado muestra_clientes()
-- -------------------------------------------------------------------------------------
CALL actualiza_productos(60, 21);
-- -------------------------------------------------------------------------------------


-- -------------------------------------------------------------------------------------
-- PROCEDIMIENTO ALMACENADO CALCULE LA EDAD EN FUNCIÓN DEL NACIMIENTO
-- -------------------------------------------------------------------------------------
## Crear el Procedimiento Almacenado calcula_edad()
-- -------------------------------------------------------------------------------------
DELIMITER $$
CREATE PROCEDURE calcula_edad(agno_nacimiento INT(11))
BEGIN
	DECLARE agno_actual INT DEFAULT 2021;
	DECLARE edad INT;
	SET edad = agno_actual - agno_nacimiento;
	SELECT edad;
END;$$
DELIMITER ;
-- -------------------------------------------------------------------------------------
## Llamar el Procedimiento Almacenado muestra_clientes()
-- -------------------------------------------------------------------------------------
CALL calcula_edad(1983);
-- -------------------------------------------------------------------------------------

-- -------------------------------------------------------------------------------------
-- Convertir en un procedimiento almacenado
-- PROCEDIMIENTO ALMACENADO IMPIDA ACTUALIZACIÓN DE UN PRECIO SINO CUMPLE UNA CONDICIÓN
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