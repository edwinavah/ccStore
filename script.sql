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

INSERT INTO productos (codigo_barras, marca, modelo, especificaciones, precio, stock) VALUES (null, "Apple", "iPhone 11 Pro Max", "Color Gold - 512GB", "29999.99", 3);
INSERT INTO productos (codigo_barras, marca, modelo, especificaciones, precio, stock) VALUES (null, "Apple", "iPad Pro 12.9", "Color Gold - 256GB", "24999.99", 1);
INSERT INTO productos (codigo_barras, marca, modelo, especificaciones, precio, stock) VALUES (null, "Samsung", "Galaxy S10 Plus", "Color Plata - 1TB", "22000.00", 3);

CREATE TABLE usuarios (
    id_usuarios INT NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(100) NOT NULL,
    usuario VARCHAR(20) NOT NULL,
    contrasena VARCHAR(100) NOT NULL,
    tipoUsuario VARCHAR(15) NOT NULL,
    PRIMARY KEY (id_usuarios)
);

CREATE TABLE adminRegistros (
    id_adminRegistros INT NOT NULL AUTO_INCREMENT,
    usuario VARCHAR(100) NOT NULL,
    modificacion VARCHAR(100) NOT NULL,
    producto VARCHAR(15) NOT NULL,
    fecha DATE,
    PRIMARY KEY (id_adminRegistros)
);