-- -----------------------------------------------------
-- Estructura bbdd_plantilla_php_mvc
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS db_mvc_plantilla_php
DEFAULT CHARACTER SET utf8;
USE db_mvc_plantilla_php;
-- -----------------------------------------------------
-- Tabla clientes
-- -----------------------------------------------------
CREATE TABLE usuarios (
  id_usuario INT(11) NOT NULL AUTO_INCREMENT,
  nombre_usuario VARCHAR(100),  
  telefono_usuario VARCHAR(20),  
  email_usuario VARCHAR(100),
  username_usuario VARCHAR(20),  
  password_usuario VARCHAR(20),  
  perfil_usuario VARCHAR(20),  
  estado_usuario VARCHAR(20),  
  PRIMARY KEY (id_usuario)
) ENGINE = InnoDB DEFAULT CHARSET=utf8;
