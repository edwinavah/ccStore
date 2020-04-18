CREATE DATABASE ccStoreInventarios;
ALTER DATABASE ccStoreInventarios charset=utf8;

USE ccStoreInventarios;

CREATE TABLE productos (
    id_productos INT NOT NULL AUTO_INCREMENT,
    codigo_barras VARCHAR(100),
    marca VARCHAR(100) NOT NULL,
    modelo VARCHAR(100) NOT NULL,
    especificaciones VARCHAR(100) NOT NULL,
    precio DECIMAL(10,2) NOT NULL,
    stock INT NOT NULL,
    PRIMARY KEY (id_productos)
);

INSERT INTO productos (codigo_barras, marca, modelo, especificaciones, precio, stock) VALUES (null, "Crayola", "Super Tips 100", "Marcadores Lavables", "599.99", 100);
INSERT INTO productos (codigo_barras, marca, modelo, especificaciones, precio, stock) VALUES (null, "Crayola", "Super Tips 50", "Marcadores Lavables", "259.99", 30);
INSERT INTO productos (codigo_barras, marca, modelo, especificaciones, precio, stock) VALUES (null, "Samsung", "4K 55'", "Pantalla Samsung", "15999.99", 2);
INSERT INTO productos (codigo_barras, marca, modelo, especificaciones, precio, stock) VALUES (null, "Samsung", "SoundBar", "Bocina SoundBar", "1299.99", 4);

CREATE TABLE usuarios (
    id_usuarios INT NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(100) NOT NULL,
    usuario VARCHAR(20) NOT NULL,
    contrasena VARCHAR(100) NOT NULL,
    tipoUsuario VARCHAR(15) NOT NULL,
    PRIMARY KEY (id_usuarios)
);

INSERT INTO usuarios (nombre, usuario, contrasena, tipoUsuario) VALUES ("Edwin Nava Hernandez", "iProxy", "1234", "Administrador");

CREATE TABLE adminRegistros (
    id_adminRegistros INT NOT NULL AUTO_INCREMENT,
    usuario VARCHAR(100) NOT NULL,
    modificacion VARCHAR(100) NOT NULL,
    producto VARCHAR(15) NOT NULL,
    fecha DATE,
    PRIMARY KEY (id_adminRegistros)
);