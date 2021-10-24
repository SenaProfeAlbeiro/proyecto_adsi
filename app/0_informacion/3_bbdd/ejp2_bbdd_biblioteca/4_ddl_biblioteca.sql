-- -----------------------------------------------------
-- Estructura bbdd_biblioteca2
-- -----------------------------------------------------
CREATE DATABASE bbdd_biblioteca2 DEFAULT CHARACTER SET utf8;
USE bbdd_biblioteca2 ;

-- -----------------------------------------------------
-- Tabla EDITORIALES
-- -----------------------------------------------------
CREATE TABLE EDITORIALES (
  clave_editorial SMALLINT NOT NULL,
  editorial_nombre VARCHAR(60) NOT NULL,
  editorial_direccion VARCHAR(60) NOT NULL,
  editorial_telefono VARCHAR(15) NOT NULL,
  PRIMARY KEY (clave_editorial)
) ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bbdd_biblioteca2`.`LIBROS`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bbdd_biblioteca2`.`LIBROS` (
  `clave_libro` INT NOT NULL,
  `libro_titulo` VARCHAR(60) NOT NULL,
  `libro_idioma` VARCHAR(15) NOT NULL,
  `libro_formato` VARCHAR(15) NOT NULL,
  `clave_editoral` SMALLINT NOT NULL,
  PRIMARY KEY (`clave_libro`),
  INDEX `ind_libros_editoriales` (`clave_editoral` ASC),
  CONSTRAINT `fk_libros_editoriales`
    FOREIGN KEY (`clave_editoral`)
    REFERENCES `bbdd_biblioteca2`.`EDITORIALES` (`clave_editorial`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bbdd_biblioteca2`.`TEMAS`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bbdd_biblioteca2`.`TEMAS` (
  `clave_tema` SMALLINT NOT NULL,
  `tema_nombre` VARCHAR(40) NOT NULL,
  PRIMARY KEY (`clave_tema`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bbdd_biblioteca2`.`AUTORES`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bbdd_biblioteca2`.`AUTORES` (
  `clave_autor` INT NOT NULL,
  `autor_nombre` VARCHAR(60) NOT NULL,
  PRIMARY KEY (`clave_autor`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bbdd_biblioteca2`.`EJEMPLARES`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bbdd_biblioteca2`.`EJEMPLARES` (
  `clave_libro` INT NOT NULL,
  `ejemplar_numero_orden` SMALLINT NOT NULL,
  `ejemplar_edicion` SMALLINT NOT NULL,
  `ejempla_ubicacion` VARCHAR(15) NOT NULL,
  INDEX `ind_ejemplares_libros` (`clave_libro` ASC),
  CONSTRAINT `fk_ejemplares_libros`
    FOREIGN KEY (`clave_libro`)
    REFERENCES `bbdd_biblioteca2`.`LIBROS` (`clave_libro`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bbdd_biblioteca2`.`SOCIOS`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bbdd_biblioteca2`.`SOCIOS` (
  `clave_socio` INT NOT NULL,
  `socio_nombre` VARCHAR(60) NOT NULL,
  `socio_direccion` VARCHAR(60) NOT NULL,
  `socio_telefono` VARCHAR(15) NOT NULL,
  `socio_categoria` CHAR NULL,
  PRIMARY KEY (`clave_socio`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bbdd_biblioteca2`.`TRATA_SOBRE`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bbdd_biblioteca2`.`TRATA_SOBRE` (
  `clave_libro` INT NOT NULL,
  `clave_tema` SMALLINT NOT NULL,
  INDEX `ind_trata_sobre_libros` (`clave_libro` ASC),
  INDEX `ind_trata_sobre_tema` (`clave_tema` ASC),
  CONSTRAINT `fk_trata_sobre_libros`
    FOREIGN KEY (`clave_libro`)
    REFERENCES `bbdd_biblioteca2`.`LIBROS` (`clave_libro`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_trata_sobre_temas`
    FOREIGN KEY (`clave_tema`)
    REFERENCES `bbdd_biblioteca2`.`TEMAS` (`clave_tema`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bbdd_biblioteca2`.`ESCRITO_POR`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bbdd_biblioteca2`.`ESCRITO_POR` (
  `clave_libro` INT NOT NULL,
  `clave_autor` INT NOT NULL,
  INDEX `ind_escrito_por_libros` (`clave_libro` ASC),
  INDEX `ind_escrito_por_autores` (`clave_autor` ASC),
  CONSTRAINT `fk_escrito_por_libros`
    FOREIGN KEY (`clave_libro`)
    REFERENCES `bbdd_biblioteca2`.`LIBROS` (`clave_libro`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_escrito_por_autores`
    FOREIGN KEY (`clave_autor`)
    REFERENCES `bbdd_biblioteca2`.`AUTORES` (`clave_autor`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bbdd_biblioteca2`.`PRESTAMOS`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bbdd_biblioteca2`.`PRESTAMOS` (
  `clave_socio` INT NOT NULL,
  `clave_libro` INT NOT NULL,
  `fecha_prestamo` DATE NOT NULL,
  `fecha_devolucion` DATE NOT NULL,
  `Notas` BLOB NOT NULL,
  INDEX `ind_prestamos_socios` (`clave_socio` ASC),
  INDEX `ind_prestamos_ejemplares` (`clave_libro` ASC),
  CONSTRAINT `fk_prestamos_socios`
    FOREIGN KEY (`clave_socio`)
    REFERENCES `bbdd_biblioteca2`.`SOCIOS` (`clave_socio`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_prestamos_ejemplares`
    FOREIGN KEY (`clave_libro`)
    REFERENCES `bbdd_biblioteca2`.`EJEMPLARES` (`clave_libro`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
