-- -------------------------------------------------------------------------
-- Estructura bbdd_biblioteca
-- -------------------------------------------------------------------------
CREATE SCHEMA IF NOT EXISTS bbdd_biblioteca 
DEFAULT CHARACTER SET utf8;
USE bbdd_biblioteca;
-- -------------------------------------------------------------------------
-- Tabla Editoriales
-- -------------------------------------------------------------------------
CREATE TABLE Editoriales (
  clave_editorial SMALLINT NOT NULL,
  nombre_editorial VARCHAR(60) NOT NULL,
  direccion_editorial VARCHAR(60) NOT NULL,
  telefono_editorial VARCHAR(15) NOT NULL,
  PRIMARY KEY (clave_editorial)
) ENGINE = InnoDB;
-- -----------------------------------------------------
-- Tabla Libros
-- -----------------------------------------------------
CREATE TABLE Libros (
  clave_libro INT NOT NULL AUTO_INCREMENT,
  clave_editorial SMALLINT NOT NULL,
  titulo VARCHAR(60) NOT NULL,
  idioma VARCHAR(15) NOT NULL,
  formato VARCHAR(15) NOT NULL,
  PRIMARY KEY (clave_libro),
  INDEX fk_libros_editoriales (clave_editorial),
  CONSTRAINT fk_libros_editoriales
    FOREIGN KEY (clave_editorial)
    REFERENCES Editoriales (clave_editorial)
    ON DELETE CASCADE
    ON UPDATE CASCADE
) ENGINE = InnoDB;