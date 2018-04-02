DROP DATABASE IF EXISTS iglesia; 
CREATE DATABASE iglesia;
USE iglesia;

DROP TABLE IF EXISTS usuario;
CREATE TABLE usuario(
	id_usuario INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nombre varchar(50),
	username varchar(15),
	correo varchar(30),
	password varchar(30),
	direccion varchar(100),
	telefono varchar(10)
);

DROP TABLE IF EXISTS evento;
CREATE TABLE evento(
	id_evento INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nombreEvento varchar(30)
);

DROP TABLE IF EXISTS administrador;
CREATE TABLE administrador(
	id_admin INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	username varchar(15),
	password varchar(30),
	nombre varchar(50)
);

DROP TABLE IF EXISTS reservaciones;
CREATE TABLE reservaciones(
	id_reserva INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	id_usuario	INT NOT NULL,
	id_evento INT NOT NULL,
	fecha DATETIME,
	nombrePrin1 varchar(50) NOT NULL,
	nombrePrin2 varchar(50) NULL,
	nombreSec1 varchar(50) NOT NULL,
	nombreSec2 varchar(50) NULL,
	FOREIGN KEY(id_usuario) REFERENCES usuario(id_usuario),
	FOREIGN KEY(id_evento) REFERENCES evento(id_evento)
);

DROP TABLE IF EXISTS proximosEventos;
CREATE TABLE proximosEventos (
	id_proximoEvento INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nombreEvento varchar(15),
	descripcion text,
	fecha DATETIME,
	imagen varchar(15)
);

INSERT INTO evento (nombreEvento) VALUES ('Bautizo');
INSERT INTO evento (nombreEvento) VALUES ('1a Comunión');
INSERT INTO evento (nombreEvento) VALUES ('XV Años');
INSERT INTO evento (nombreEvento) VALUES ('Matrimonio');
