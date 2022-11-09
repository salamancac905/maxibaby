
CREATE DATABASE bbdd_maxibaby 
DEFAULT CHARACTER SET utf8 ;
USE bbdd_maxibaby ;

CREATE TABLE ROLES (
  id_rol INT NOT NULL AUTO_INCREMENT,
  rol_nombre VARCHAR(100) NOT NULL,
  PRIMARY KEY (id_rol))
ENGINE = InnoDB;

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
    REFERENCES ROLES(id_rol)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;



INSERT INTO ROLES VALUES
(null,'admin'),
(null,'user'),
(null,'customer'),
(null,'seller');

INSERT INTO USUARIOS VALUES (1,null,123456,'admin','administrador','admin@correo.com',SHA(12345),1);