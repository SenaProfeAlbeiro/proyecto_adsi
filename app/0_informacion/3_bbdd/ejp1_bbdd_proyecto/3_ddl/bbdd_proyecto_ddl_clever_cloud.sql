CREATE TABLE ROLES (
  id_rol INT NOT NULL AUTO_INCREMENT,
  rol_nombre VARCHAR(100) NOT NULL,
  PRIMARY KEY (id_rol))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table USUARIOS
-- -----------------------------------------------------
CREATE TABLE USUARIOS (
  id_rol INT NOT NULL DEFAULT 2,
  id_usuario INT NOT NULL AUTO_INCREMENT,
  usuario_doc_identidad INT NOT NULL DEFAULT 0,
  usuario_nombres VARCHAR(100) NOT NULL,
  usuario_apellidos VARCHAR(100) NOT NULL,
  usuario_correo VARCHAR(100) NOT NULL,
  usuario_pass VARCHAR(200) NOT NULL,
  usuario_estado BIT(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (id_usuario),
  INDEX ind_usuario_rol (id_rol ASC),
  CONSTRAINT fk_usuario_rol
    FOREIGN KEY (id_rol)
    REFERENCES ROLES (id_rol)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table CLIENTES
-- -----------------------------------------------------
CREATE TABLE CLIENTES (
  id_cliente INT NOT NULL,
  cliente_empresa VARCHAR(100) NOT NULL,
  cliente_pais VARCHAR(100) NOT NULL,
  cliente_ciudad VARCHAR(100) NOT NULL,
  cliente_direccion VARCHAR(100) NOT NULL,
  cliente_telefono VARCHAR(20) NOT NULL,
  INDEX ind_cliente_usuario (id_cliente ASC),
  PRIMARY KEY (id_cliente),
  CONSTRAINT fk_cliente_usuario
    FOREIGN KEY (id_cliente)
    REFERENCES USUARIOS (id_usuario)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table VENDEDORES
-- -----------------------------------------------------
CREATE TABLE VENDEDORES (
  id_vendedor INT NOT NULL,
  PRIMARY KEY (id_vendedor),
  INDEX ind_vendedor_usuario (id_vendedor ASC),
  CONSTRAINT fk_vendedor_usuario
    FOREIGN KEY (id_vendedor)
    REFERENCES USUARIOS (id_usuario)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table PEDIDOS
-- -----------------------------------------------------
CREATE TABLE PEDIDOS (
  id_pedido INT NOT NULL AUTO_INCREMENT,
  id_cliente INT NOT NULL,
  id_vendedor INT NOT NULL,
  pedido_fecha_pedido DATE NOT NULL,
  pedido_forma_pago VARCHAR(20) NOT NULL,
  pedido_descuento FLOAT(10,2) NOT NULL,
  pedido_enviado BIT(1) NOT NULL,
  PRIMARY KEY (id_pedido),
  INDEX ind_pedido_cliente (id_cliente ASC),
  INDEX ind_pedido_vendedor (id_vendedor ASC),
  CONSTRAINT fk_pedido_cliente
    FOREIGN KEY (id_cliente)
    REFERENCES CLIENTES (id_cliente)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT fk_pedido_vendedor
    FOREIGN KEY (id_vendedor)
    REFERENCES VENDEDORES (id_vendedor)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table SECCIONES
-- -----------------------------------------------------
CREATE TABLE SECCIONES (
  id_seccion INT NOT NULL AUTO_INCREMENT,
  seccion_nombre VARCHAR(100) NOT NULL,
  PRIMARY KEY (id_seccion))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table PRODUCTOS
-- -----------------------------------------------------
CREATE TABLE PRODUCTOS (
  id_seccion INT NOT NULL,
  id_producto INT NOT NULL,
  producto_nombre VARCHAR(100) NOT NULL,
  producto_precio DECIMAL(10,2) NOT NULL,
  producto_fecha_compra DATE NOT NULL,
  producto_importado BIT(1) NOT NULL,
  producto_pais_origen VARCHAR(100) NOT NULL,
  producto_foto VARCHAR(100) NOT NULL,
  PRIMARY KEY (id_producto),
  INDEX ind_producto_seccion (id_seccion ASC),
  CONSTRAINT fk_producto_seccion
    FOREIGN KEY (id_seccion)
    REFERENCES SECCIONES (id_seccion)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table LISTA_PRODUCTOS
-- -----------------------------------------------------
CREATE TABLE LISTA_PRODUCTOS (
  id_pedido INT NOT NULL,
  id_producto INT NOT NULL,
  unidades INT NOT NULL,
  INDEX ind_lista_productos_pedido (id_pedido ASC),
  INDEX ind_lista_productos_productos (id_producto ASC),
  CONSTRAINT fk_lista_productos_pedido
    FOREIGN KEY (id_pedido)
    REFERENCES PEDIDOS (id_pedido)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT fk_lista_productos_productos
    FOREIGN KEY (id_producto)
    REFERENCES PRODUCTOS (id_producto)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;