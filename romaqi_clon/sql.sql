CREATE DATABASE clon;
	USE	clon;

CREATE TABLE CATEGORIA(
	id_categoria int AUTO_INCREMENT,
    categoria varchar(255) NOT NULL,
    PRIMARY KEY (id_categoria)
);

CREATE TABLE PRODUCTO(
	id_producto int AUTO_INCREMENT,
    nombre varchar(255) NOT NULL,
    id_categoria int,
    FOREIGN KEY (id_categoria) REFERENCES CATEGORIA (id_categoria),
    PRIMARY KEY (id_producto)
);


INSERT INTO CATEGORIA (categoria) 
	VALUES 
		("MOTOR A GASOLINA"),
		("BOMBA DE AGUA"),
		("MOTOBOMBA A GALOSINA"),
		("FUMIGADORAS"),
		("HIDROLAVADORAS"),
		("MANGUERAS"),
		("ROTOMARTILLOS"),
		("ATORNILLADOR INALAMBRICO"),
		("COMPRESORAS"),
		("GENERADOR A GASOLINA"),
		("MAQUINA DE SOLDAR"),
		("CORTADORA TRONZADORA");