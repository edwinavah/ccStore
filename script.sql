CREATE DATABASE ccStoreInventarios;
ALTER DATABASE ccStoreInventarios charset=utf8;

USE ccStoreInventarios;

CREATE TABLE productos (
    id_productos BIGINT NOT NULL AUTO_INCREMENT,
    codigo_barras VARCHAR(100),
    marca VARCHAR(100) NOT NULL,
    modelo VARCHAR(100) NOT NULL,
    especificaciones VARCHAR(100) NOT NULL,
    stock INT NOT NULL,
    PRIMARY KEY (id_productos)
);

INSERT INTO productos (codigo_barras, marca, modelo, especificaciones, stock) VALUES ("71662951009", "Crayola", "Super Tips 100", "Marcadores Lavables 100pz", 0);
INSERT INTO productos (codigo_barras, marca, modelo, especificaciones, stock) VALUES ("71662551209", "Crayola", "Super Tips 120", "Marcadores Lavables 120pz", 0);
INSERT INTO productos (codigo_barras, marca, modelo, especificaciones, stock) VALUES ("71662505042", "Crayola", "Super Tips 50", "Marcadores Lavables 50pz", 0);
INSERT INTO productos (codigo_barras, marca, modelo, especificaciones, stock) VALUES ("39800028808", "Energizer", "AAA4", "Baterias AAA Recargables 4pz", 31);
INSERT INTO productos (codigo_barras, marca, modelo, especificaciones, stock) VALUES ("mm711kkol11194200630", "Cooler Master", "MM711", "Mouse Gaming 1pz", 0);
INSERT INTO productos (codigo_barras, marca, modelo, especificaciones, stock) VALUES ("mm711kkol11194200630", "Cooler Master", "MM711", "Mouse Gaming 1pz", 0);
INSERT INTO productos (codigo_barras, marca, modelo, especificaciones, stock) VALUES ("662834501599", "Zeiss", "100 Lens Wipes", "Toallas limpiadoras 100pz", 2);
INSERT INTO productos (codigo_barras, marca, modelo, especificaciones, stock) VALUES ("662834502343", "Zeiss", "Lens Cleaner", "Spray limpiador 1pz", 1);
INSERT INTO productos (codigo_barras, marca, modelo, especificaciones, stock) VALUES ("662834502343", "Zeiss", "Lens Cleaner", "Spray limpiador 1pz", 1);
INSERT INTO productos (codigo_barras, marca, modelo, especificaciones, stock) VALUES (null, "Cermark", "Metal Laser Marking Spray", "1pz", 40);
INSERT INTO productos (codigo_barras, marca, modelo, especificaciones, stock) VALUES (null, "LBT", "Laserbond 100", "1pz", 3);

CREATE TABLE usuarios (
    id_usuarios BIGINT NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(100) NOT NULL,
    usuario VARCHAR(20) NOT NULL,
    contrasena VARCHAR(100) NOT NULL,
    fechaRegistro VARCHAR(10) NOT NULL,
    tipoUsuario VARCHAR(15) NOT NULL,
    archivo VARCHAR(500),
    PRIMARY KEY (id_usuarios)
);

CREATE TABLE adminRegistros (
    id_adminRegistros BIGINT NOT NULL AUTO_INCREMENT,
    usuario VARCHAR(100) NOT NULL,
    accion VARCHAR(100) NOT NULL,
    producto VARCHAR(100) NOT NULL,
    nota VARCHAR(100) NOT NULL,
    fecha DATETIME NOT NULL,
    PRIMARY KEY (id_adminRegistros)
);

CREATE TABLE salida (
    id_productos BIGINT NOT NULL AUTO_INCREMENT,
    codigo_barras VARCHAR(100),
    marca VARCHAR(100) NOT NULL,
    modelo VARCHAR(100) NOT NULL,
    stock INT NOT NULL,
    fechaRegistro TIMESTAMP NOT NULL,
    usuario VARCHAR(100) NOT NULL,
    PRIMARY KEY (id_productos)
);

CREATE TABLE guias_dhl (
    id_guias_dhl BIGINT NOT NULL AUTO_INCREMENT,
    guia VARCHAR(100),
    fechaRegistro DATE NOT NULL,
    usuario VARCHAR(100) NOT NULL,
    PRIMARY KEY (id_guias_dhl)
);

CREATE TABLE guias_fedex (
    id_guias_fedex BIGINT NOT NULL AUTO_INCREMENT,
    guia VARCHAR(100),
    fechaRegistro DATE NOT NULL,
    usuario VARCHAR(100) NOT NULL,
    PRIMARY KEY (id_guias_fedex)
);

CREATE TABLE guias_estafeta (
    id_guias_estafeta BIGINT NOT NULL AUTO_INCREMENT,
    guia VARCHAR(100),
    fechaRegistro DATE NOT NULL,
    usuario VARCHAR(100) NOT NULL,
    PRIMARY KEY (id_guias_estafeta)
);