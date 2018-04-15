DROP DATABASE IF EXISTS iglesia; 
CREATE DATABASE iglesia;
USE iglesia;

DROP TABLE IF EXISTS usuario;
CREATE TABLE usuario(
	id_usuario INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nombre varchar(50) NOT NULL,
	username varchar(15) NOT NULL,
	correo varchar(30) NOT NULL,
	password varchar(50) NOT NULL,
	direccion varchar(100) NOT NULL,
	telefono varchar(10) NOT NULL
);

DROP TABLE IF EXISTS evento;
CREATE TABLE evento(
	id_evento INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nombreEvento varchar(30) NOT NULL
);

DROP TABLE IF EXISTS administrador;
CREATE TABLE administrador(
	id_admin INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	username varchar(15) NOT NULL,
	password varchar(30) NOT NULL,
	nombre varchar(50) NOT NULL
);

DROP TABLE IF EXISTS reservaciones;
CREATE TABLE reservaciones(
	id_reserva INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	id_usuario	INT NOT NULL,
	id_evento INT NOT NULL,
	fecha DATETIME NOT NULL,
	FOREIGN KEY(id_usuario) REFERENCES usuario(id_usuario),
	FOREIGN KEY(id_evento) REFERENCES evento(id_evento)
);

DROP TABLE IF EXISTS proximosEventos;
CREATE TABLE proximosEventos (
	id_proximoEvento INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nombreEvento varchar(15) NOT NULL,
	descripcion text NOT NULL,
	fecha DATETIME NOT NULL,
	imagen varchar(15) NULL
);
INSERT INTO `usuario` (`id_usuario`, `nombre`, `username`, `correo`, `password`, `direccion`, `telefono`) VALUES
(1, 'saul', 'spz', 'dxlspzmau5@gmail.com', '827ccb0eea8a706c4c34a16891f84e', 'independencia sur', '-89');
