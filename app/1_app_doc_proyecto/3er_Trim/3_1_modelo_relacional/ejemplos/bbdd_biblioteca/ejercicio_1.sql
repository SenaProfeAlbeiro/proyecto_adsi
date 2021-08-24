-- -------------------------------------------------------------------------
-- Estructura bbdd_biblioteca
-- -------------------------------------------------------------------------
CREATE SCHEMA IF NOT EXISTS ejercicio_1 
DEFAULT CHARACTER SET utf8;
USE ejercicio_1;
-- -------------------------------------------------------------------------
-- Tabla Soldados
-- -------------------------------------------------------------------------
CREATE TABLE Soldados (
  codigo_soldado INT NOT NULL AUTO_INCREMENT,
  nombre_soldado VARCHAR(100) NOT NULL,
  apellido_soldado VARCHAR(100) NOT NULL,
  edad_soldado SMALLINT(10) NOT NULL,
  PRIMARY KEY (codigo_soldado)
) ENGINE = InnoDB;
-- -------------------------------------------------------------------------
-- Tabla Compañia
-- -------------------------------------------------------------------------
CREATE TABLE Compania (
  codigo_comp INT NOT NULL AUTO_INCREMENT,
  nombre_comp VARCHAR(100) NOT NULL,  
  edad_soldado INT(10) NOT NULL,
  PRIMARY KEY (codigo_comp)
) ENGINE = InnoDB;
-- -------------------------------------------------------------------------
-- Tabla Dotacion
-- -------------------------------------------------------------------------
CREATE TABLE Dotacion (
  codigo_articulo INT NOT NULL AUTO_INCREMENT,
  nombre_articulo VARCHAR(100) NOT NULL,  
  cantidad_articulo INT(10) NOT NULL,
  PRIMARY KEY (codigo_articulo)
) ENGINE = InnoDB;