-- -----------------------------------------------------
-- Estructura: DDL bbdd_biblioteca
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS bbdd_biblioteca DEFAULT CHARACTER SET utf8 ;
USE bbdd_biblioteca ;

-- -----------------------------------------------------
-- Tabla editoriales
-- -----------------------------------------------------
CREATE TABLE Editoriales (
  clave_editorial SMALLINT NOT NULL,
  nombre_editorial VARCHAR(60) NOT NULL,
  direccion_editorial VARCHAR(60) NOT NULL,
  telefono_editorial VARCHAR(15) NOT NULL,
  PRIMARY KEY (`clave_editorial`))
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Tabla Libros
-- -----------------------------------------------------
CREATE TABLE Libros (
  clave_libro INT NOT NULL AUTO_INCREMENT,
  titulo VARCHAR(60) NOT NULL,
  idioma VARCHAR(15) NOT NULL,
  formato VARCHAR(15) NOT NULL,
  clave_editorial SMALLINT NOT NULL,
  PRIMARY KEY (clave_libro),
  INDEX fk_libros_editoriales (clave_editorial),
  CONSTRAINT fk_libros_editoriales
    FOREIGN KEY (clave_editorial)
    REFERENCES Editoriales (clave_editorial)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Tabla Temas
-- -----------------------------------------------------
CREATE TABLE Temas (
  clave_tema SMALLINT NOT NULL AUTO_INCREMENT,
  nombre_tema VARCHAR(40) NOT NULL,
  PRIMARY KEY (clave_tema))
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Tabla Autores
-- -----------------------------------------------------
CREATE TABLE Autores (
  clave_autor INT NOT NULL,
  nombre_autor VARCHAR(60) NOT NULL,
  PRIMARY KEY (clave_autor))
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Tabla Ejemplares
-- -----------------------------------------------------
CREATE TABLE Ejemplares (
  clave_ejemplar INT NOT NULL,
  numero_orden SMALLINT NOT NULL,
  ubicacion VARCHAR(15) NOT NULL,
  categoria_libro CHAR NOT NULL,
  edicion SMALLINT NOT NULL,
  clave_libro INT NOT NULL,
  PRIMARY KEY (clave_ejemplar),
  INDEX fk_ejemplares_libros (clave_libro),
  CONSTRAINT fk_ejemplares_libros
    FOREIGN KEY (clave_libro)
    REFERENCES Libros (clave_libro)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Tabla Socios
-- -----------------------------------------------------
CREATE TABLE Socios (
  clave_socio INT NOT NULL,
  nombre_socio VARCHAR(60) NOT NULL,
  direccion_socio VARCHAR(60) NOT NULL,
  telefono_socio VARCHAR(15) NOT NULL,
  categoria_socio CHAR NOT NULL,
  PRIMARY KEY (clave_socio))
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Tabla Trata_Sobre
-- -----------------------------------------------------
CREATE TABLE Trata_Sobre (
  clave_libro INT NOT NULL,
  clave_tema SMALLINT NOT NULL,
  INDEX fk_trata_sobre_libros (clave_libro),
  INDEX fk_trata_sobre_temas (clave_tema),
  CONSTRAINT fk_trata_sobre_libros
    FOREIGN KEY (clave_libro)
    REFERENCES Libros (clave_libro)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT fk_trata_sobre_temas
    FOREIGN KEY (clave_tema)
    REFERENCES Temas (clave_tema)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Tabla Escrito_Por
-- -----------------------------------------------------
CREATE TABLE Escrito_Por (
  clave_libro INT NOT NULL,
  clave_autor INT NOT NULL,
  INDEX fk_escrito_por_libros (clave_libro),
  INDEX fk_escrito_por_autores (clave_autor),
  CONSTRAINT fk_escrito_por_libros
    FOREIGN KEY (clave_libro)
    REFERENCES Libros (clave_libro)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT fk_escrito_por_autores
    FOREIGN KEY (clave_autor)
    REFERENCES Autores (clave_autor)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Tabla Prestamos
-- -----------------------------------------------------
CREATE TABLE Prestamos (
  clave_socio INT NOT NULL,
  clave_ejemplar INT NOT NULL,
  fecha_prestamo DATE NOT NULL,
  fecha_devolucion DATE NOT NULL,
  notas BLOB NOT NULL,
  INDEX fk_prestamos_socios (clave_socio),
  INDEX fk_prestamos_ejemplares (clave_ejemplar),
  CONSTRAINT fk_prestamos_socios
    FOREIGN KEY (clave_socio)
    REFERENCES Socios (clave_socio)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT fk_prestamos_ejemplares
    FOREIGN KEY (clave_ejemplar)
    REFERENCES Ejemplares (clave_ejemplar)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;
