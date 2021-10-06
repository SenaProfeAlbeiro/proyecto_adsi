-- -----------------------------------------------------
-- Estructura bbdd_consultorio
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS bbdd_consultorio DEFAULT CHARACTER SET utf8 ;
USE bbdd_consultorio ;

-- -----------------------------------------------------
-- Tabla: USUARIO
-- -----------------------------------------------------
CREATE TABLE usuario (
  id_usuario INT NOT NULL AUTO_INCREMENT,
  nombre_usuario VARCHAR(50) NOT NULL,
  apellido_usuario VARCHAR(50) NOT NULL,
  correo_usuario VARCHAR(50) NOT NULL,
  telefono_usuario VARCHAR(20) NOT NULL,
  direccion_usuario VARCHAR(50) NOT NULL,
  password_usuario VARCHAR(20) NOT NULL,
  rol_usuario VARCHAR(20) NOT NULL,
  estado_usuario BIT NOT NULL,
  PRIMARY KEY (id_usuario)
) ENGINE = InnoDB;


-- -----------------------------------------------------
-- Tabla: MÉDICO
-- -----------------------------------------------------
CREATE TABLE medico (
  id_medico INT NOT NULL,
  tarjeta_profesional VARCHAR(50) NOT NULL,
  especialidad_medico VARCHAR(50) NOT NULL,
  PRIMARY KEY (id_medico),
  INDEX fk_medico_usuario (id_medico),
  CONSTRAINT fk_medico_usuario
    FOREIGN KEY (id_medico)
    REFERENCES usuario (id_usuario)
    ON DELETE CASCADE
    ON UPDATE CASCADE
) ENGINE = InnoDB;


-- -----------------------------------------------------
-- Tabla: PACIENTE
-- -----------------------------------------------------
CREATE TABLE paciente (
  id_paciente INT NOT NULL,
  fecha_nacimiento_paciente DATE NOT NULL,
  PRIMARY KEY (id_paciente),
  INDEX fk_paciente_usuario (id_paciente),
  CONSTRAINT fk_paciente_usuario
    FOREIGN KEY (id_paciente)
    REFERENCES usuario (id_usuario)
    ON DELETE CASCADE
    ON UPDATE CASCADE
) ENGINE = InnoDB;


-- -----------------------------------------------------
-- Tabla: AGENDA
-- -----------------------------------------------------
CREATE TABLE agenda (
  id_agenda INT NOT NULL AUTO_INCREMENT,
  fecha_agenda DATE NOT NULL,
  hora_agenda DATETIME NOT NULL,
  consultorio VARCHAR(3) NOT NULL,
  estado_agenda BIT NOT NULL,
  id_medico_fk INT NOT NULL,
  id_paciente_fk INT NOT NULL,
  PRIMARY KEY (id_agenda),
  INDEX fk_adenda_medico (id_medico_fk),
  INDEX fk_agenda_paciente (id_paciente_fk),
  CONSTRAINT fk_agenda_medico
    FOREIGN KEY (id_medico_fk)
    REFERENCES medico (id_medico)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT fk_agenda_paciente
    FOREIGN KEY (id_paciente_fk)
    REFERENCES paciente (id_paciente)
    ON DELETE CASCADE
    ON UPDATE CASCADE
) ENGINE = InnoDB;


-- -----------------------------------------------------
-- Tabla: HISTORIA CLÍNICA
-- -----------------------------------------------------
CREATE TABLE historia_clinica (
  id_historia_clinica INT NOT NULL,
  estatura VARCHAR(45) NOT NULL,
  peso VARCHAR(45) NOT NULL,
  alergias VARCHAR(45) NOT NULL,
  enfermedades VARCHAR(45) NOT NULL,
  PRIMARY KEY (id_historia_clinica),
  INDEX fk_historia_clinica_paciente (id_historia_clinica),
  CONSTRAINT fk_historia_clinica_paciente
    FOREIGN KEY (id_historia_clinica)
    REFERENCES paciente (id_paciente)
    ON DELETE CASCADE
    ON UPDATE CASCADE
) ENGINE = InnoDB;


-- -----------------------------------------------------
-- Tabla: EXAMEN
-- -----------------------------------------------------
CREATE TABLE examen (
  id_examen INT NOT NULL AUTO_INCREMENT,
  valor_examen DOUBLE NOT NULL,
  fecha_examen DATE NOT NULL,
  tipo_examen VARCHAR(50) NOT NULL,
  id_historia_clinica_fk INT NOT NULL,
  PRIMARY KEY (id_examen),
  INDEX fk_examen_historia_clinica (id_historia_clinica_fk),
  CONSTRAINT fk_examen_historia_clinica
    FOREIGN KEY (id_historia_clinica_fk)
    REFERENCES historia_clinica (id_historia_clinica)
    ON DELETE CASCADE
    ON UPDATE CASCADE
) ENGINE = InnoDB;


-- -----------------------------------------------------
-- Tabla: CONSULTA MÉDICA
-- -----------------------------------------------------
CREATE TABLE consulta_medica (
  id_consulta INT NOT NULL AUTO_INCREMENT,
  hora_atencion DATETIME NOT NULL,
  motivo_consulta TEXT NOT NULL,
  enfermedad TEXT NOT NULL,
  id_historia_clinica_fk INT NOT NULL,
  PRIMARY KEY (id_consulta),
  INDEX fk_consulta_medica_historia_clinica (id_historia_clinica_fk),
  CONSTRAINT fk_consulta_medica_historia_clinica
    FOREIGN KEY (id_historia_clinica_fk)
    REFERENCES historia_clinica (id_historia_clinica)
    ON DELETE CASCADE
    ON UPDATE CASCADE
) ENGINE = InnoDB;


-- -----------------------------------------------------
-- Tabla: DIAGNÓSTICO
-- -----------------------------------------------------
CREATE TABLE diagnostico (
  id_diagnostico INT NOT NULL AUTO_INCREMENT,
  descripcion TEXT NOT NULL,
  id_consulta_fk INT NOT NULL,
  PRIMARY KEY (id_diagnostico),
  INDEX fk_diagnostico_consulta_medica (id_consulta_fk),
  CONSTRAINT fk_diagnostico_consulta_medica
    FOREIGN KEY (id_consulta_fk)
    REFERENCES consulta_medica (id_consulta)
    ON DELETE CASCADE
    ON UPDATE CASCADE
) ENGINE = InnoDB;
