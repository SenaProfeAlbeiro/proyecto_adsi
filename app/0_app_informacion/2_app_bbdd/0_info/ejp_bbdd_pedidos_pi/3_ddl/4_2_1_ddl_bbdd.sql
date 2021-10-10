-- -----------------------------------------------------
-- Estructura bbdd_pedidos
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS bbdd_pedidos 
DEFAULT CHARACTER SET utf8;
USE bbdd_pedidos;
-- -----------------------------------------------------
-- Tabla clientes
-- -----------------------------------------------------
CREATE TABLE clientes (
  codigo_cliente INT(11) NOT NULL AUTO_INCREMENT,
  empresa VARCHAR(30),  
  direccion VARCHAR(50),
  poblacion VARCHAR(20),
  telefono VARCHAR(15),
  responsable VARCHAR(30),    
  historial VARCHAR(30),
  PRIMARY KEY (codigo_cliente)
) ENGINE = InnoDB DEFAULT CHARSET=utf8;
-- -----------------------------------------------------
-- Tabla productos
-- -----------------------------------------------------
CREATE TABLE productos (
  codigo_articulo INT(11) NOT NULL AUTO_INCREMENT,
  seccion VARCHAR(50),
  nombre_articulo VARCHAR(100),
  precio DECIMAL(10,2),
  fecha DATE,  
  importado TINYINT(1),
  pais_origen VARCHAR(50),
  foto VARCHAR(50),
  PRIMARY KEY (codigo_articulo)
) ENGINE = InnoDB DEFAULT CHARSET=utf8;
-- -----------------------------------------------------
-- Tabla pedidos
-- -----------------------------------------------------
CREATE TABLE pedidos (
  numero_pedido INT(11) NOT NULL AUTO_INCREMENT,
  codigo_cliente INT(11) NOT NULL,
  fecha_pedido DATE,
  forma_pago VARCHAR(20),
  descuento FLOAT(10,2),
  enviado BIT(1),  
  PRIMARY KEY (numero_pedido),
  KEY fk_pedidos_clientes (codigo_cliente),
  CONSTRAINT fk_pedidos_clientes
    FOREIGN KEY (codigo_cliente)
    REFERENCES clientes (codigo_cliente)
    ON DELETE CASCADE
    ON UPDATE CASCADE
) ENGINE = InnoDB DEFAULT CHARSET=utf8;
-- -----------------------------------------------------
-- Tabla productos_pedidos
-- -----------------------------------------------------
CREATE TABLE productos_pedidos (
  numero_pedido INT(11) NOT NULL,
  codigo_articulo INT(11) NOT NULL,
  unidades INT(11) NOT NULL,
  KEY fk_productos_pedidos_productos (codigo_articulo),
  KEY fk_productos_pedidos_pedidos (numero_pedido),
  CONSTRAINT fk_productos_pedidos_pedidos
    FOREIGN KEY (numero_pedido)
    REFERENCES pedidos (numero_pedido)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT fk_productos_pedidos_productos
    FOREIGN KEY (codigo_articulo)
    REFERENCES productos (codigo_articulo)
    ON DELETE CASCADE
    ON UPDATE CASCADE
) ENGINE = InnoDB DEFAULT CHARSET=utf8;