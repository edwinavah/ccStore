CREATE DATABASE ccStore;
ALTER DATABASE ccStore charset=utf8;

USE ccStore;

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

INSERT INTO `usuarios` (`id_usuarios`, `nombre`, `usuario`, `contrasena`, `fechaRegistro`, `tipoUsuario`, `archivo`) VALUES
(1, 'Administrador', 'admin@admin', '$2y$10$xAvi1wj9OEpC6fHXE17C4urVyceWvt65KVDLfbK6BC5BAMLmRbC/i', '26-04-2020', 'Administrador', 'imgUsuarios/Admin.jpg'),
(2, 'Edwin Nava Hernandez', 'iProxy', '$2y$10$su70G3iKBm51L575yMHy5OZhJHumGb9XmwnTPqsDwYzXVvUtSA.FK', '26-04-2020', 'Administrador', 'imgUsuarios/Edwin.jpg'),
(3, 'Nathalia Calzadilla', 'NathaliaC8a', '$2y$10$qlfBJOTCUJAyhpxuk3FwEeiWDcw8VPu4ZEZEh5kNrpIoSVY1OIb2i', '26-04-2020', 'Administrador', 'imgUsuarios/Nathalia.jpg'),
(4, 'Marco Bueno Mora', 'MarcoBueno', '$2y$10$bKjcHZv/AyI.XLLPI2A8v.9PXoyawEBGMoiqGqvsQ8w3h07bs.EiK', '26-04-2020', 'Administrador', 'imgUsuarios/Marco.jpg'),
(6, 'Luis Hranica', 'Hranica', '$2y$10$uyg6rIy9f3t1sK4gz29zCOjcS2U/kvl5GROZcGDUFGIIxDdCtzL4G', '26-04-2020', 'Usuario', 'imgUsuarios/Luis.jpg'),
(7, 'Orlando Castro', 'Orlando', '$2y$10$w2dEc9eL/44V0xcdH7lEu.zNstRNOdrjHFbkSAPZC2J/ggZs414OO', '26-04-2020', 'Usuario', 'imgUsuarios/Orlando.jpg'),
(8, 'Rafael Guzman', 'Hellcat', '$2y$10$E/ZTR3J0/uLD8HP4tMdDXek/hAkhPecwMiADm37o3FPbYafDNNK6S', '26-04-2020', 'Administrador', 'imgUsuarios/Rafael.jpg');

CREATE TABLE productos (
    id_productos BIGINT NOT NULL AUTO_INCREMENT,
    codigo_barras VARCHAR(100),
    marca VARCHAR(100) NOT NULL,
    modelo VARCHAR(100) NOT NULL,
    especificaciones VARCHAR(100) NOT NULL,
    stock INT NOT NULL,
    PRIMARY KEY (id_productos)
);

INSERT INTO `productos` (`id_productos`, `codigo_barras`, `marca`, `modelo`, `especificaciones`, `stock`) VALUES
(3, '031901952570', 'Staedtler', 'Triplus fineliner', '42 PZ', 1),
(4, '031901950491', 'Staedtler', 'Colores Madera', '48 pz', 1),
(5, '031901952563', 'Staedtler', 'Twin-tip felt pens', '36 PZ', 1),
(7, '039800028808', 'Energizer', 'AAA4', '4 PZ', 15),
(8, '045888781153', 'Zebra', 'Mildliner', '15 PZ', 5),
(9, '031901952495', 'Staedtler', 'Calligraph duo', '12 PZ', 5),
(10, '071641128552', 'Sharpie', 'Cosmic Color', '5 PZ', 2),
(11, '071641150355', 'Sharpie', 'Metalic Color', '4 PZ', 2),
(12, '071641084377', 'Sharpie', 'Electro Pop', '5 PZ', 1),
(13, '072838140500', 'Pilot', 'G2 Neon', '5 PZ', 1),
(14, '070330364868', 'Bic', 'Temporary Tattoo Marker', '6 PZ', 2),
(15, '041540009566', 'Box Top', 'Peper Mate Morker Pen', '6 PZ', 2),
(16, '026000040266', 'Elmers', 'Crabt Bond Gel Pen', '18 PZ', 1),
(17, '072838308146', 'Pilot', 'G2 Gel Roller', '18 PZ', 1),
(18, '072838126900', 'Pilot', 'G2 Premium Gel Roller', '5 PZ', 1),
(19, '071641030831', 'Sharpie', 'Paint Peinture', '5 PZ', 1),
(20, '071641074897', 'Sharpie', 'Clear View', '3 PZ', 1),
(21, '017754423764', 'Tulip', 'Glimmer', '5 PZ', 1),
(22, '045888016071', 'Zebra', 'Metallic Brush Pen', '7 PZ', 2),
(23, '765940929124', 'Horizon Group USA', 'Kawaii Chalk Art', '4 PZ', 1),
(24, '071662951009', 'Crayola', 'Super Tips', '100 PZ', 3),
(25, '765940988480', 'Just My Style', 'Messenger Bag Pez', '1 PZ', 1),
(26, '765940943205', 'Just My Style', 'Messenger Bag Unicornio', '1 PZ', 1),
(27, '843340203881', 'Wonder Nation', 'Magic Sequins', '1 PZ', 1),
(28, '071662650711', 'Crayola', 'Silly Scents', '10 PZ', 1),
(29, '6926182933957', 'Celebrate', 'Liston Corazon Silueta', '3 PZ', 3),
(30, '6926182933964', 'Celebrate', 'Liston Corazon Roza y Blanco', '1 PZ', 1),
(31, '6926182934022', 'Celebrate', 'Liston Corazon Rojo y Roza', '1 PZ', 1),
(32, '6926182934015', 'Celebrate', 'Liston Corazon Frace', '2 PZ', 2),
(33, '6926182934039', 'Celebrate', 'Liston Corazon XO♥', '1 PZ', 3),
(34, '6926182934008', 'Celebrate', 'Liston Corazon Negro', '1 PZ', 3),
(35, '724328138732', 'Pen + Gear', 'Permanent Markers', '30 PZ', 1),
(36, '887961690071', 'Sea Breeze', 'Scribble Stuff', '30 PZ', 1),
(37, '884920446076', 'Cra-z-Art', 'Color Sharp', '24 PZ', 1),
(38, '8463760487535', 'Scentos', 'Sugar Rush', '24 PZ', 1),
(39, '760899334081', 'Brea Reese', 'Water Color Creans', '12 PZ', 1),
(40, '856490002211', 'Pen + Gear', 'Metalic Markers', '4 PZ', 0),
(41, '817894022250', 'Ubrands', 'Gel Pens', '30 PZ', 1),
(42, '724328142982', 'Pen + Gear', 'Gel Pens', '60 PZ', 1),
(43, '071662000240', 'Crayola', 'Create and Play Crayons', '24 PZ', 1),
(44, '000100', 'Alpha Graphix', 'Organizador Crayola 100', '100 Or', 0),
(45, '071662003890', 'Crayola', 'Jumbo Crayons', '8 PZ', 1),
(46, '071662032814', 'Crayola', 'Ultra Clean Washable Large Crayons', '16 PZ', 1),
(47, '071662097158', 'Crayola', 'Twistables Crayons', '10 PZ', 1),
(48, '071662040123', 'Crayola', 'Colored Pencils Madera', '12 PZ', 1),
(49, '071662621124', 'Crayola', 'Silly Scents Madera', '12 PZ', 1),
(50, '673468550969', 'Artlol', 'Paint Color and doodle wood art set', '96 PZ', 1),
(51, '765940972243', 'Just My Style', 'scrapbook and Cards', '750 PZ', 1),
(52, '787909777577', 'Fashion Angels', 'Planner set', '2000 PZ', 1),
(53, 'X001NNOCIF', 'Confidence in Textiles', 'New Brothread', '40 PZ', 2),
(54, '071662520038', 'Crayola', 'Ultimate Crayon collection', '152 PZ', 3),
(55, '070330361669', 'Bic', 'Intensity', '26 pz', 5),
(56, '7501030669371', 'Sharpie', 'Sharpie', '1 PZ', 3),
(57, '7501428729564', 'Azor', 'Vision', '1 PZ', 15),
(58, '7501014511023', 'Bic', 'Cristal Pluma', '1 Caja', 12),
(59, '7501014511016', 'Bic', 'Cristal Pluma Azul', '3 Cajas', 36),
(60, '071662165024', 'Crayola', 'Blending Markers', '16 PZ', 2),
(61, '071662065317', 'Crayola', 'Pearlescent Paint Markers', '10 PZ', 3),
(62, '031901951382', 'Staedtler', 'Triplus roller', '10 PZ', 1),
(63, '031901953768', 'Staedtler', 'triplus gel', '10 PZ', 1),
(64, '884920104655', 'Cra-Z-Art', '100 Colored Pencils', 'Colores de madera 100 pz.', 6),
(65, '031901949532', 'Staedtler', 'Triplus Fineliner', '10 PZ', 1),
(66, '028617437699', 'Lepen', 'Basic Colors', '10 PZ', 2),
(67, '028617437774', 'Lepen', 'Darck Colors', '10 PZ', 5),
(68, '817894022373', 'Hand Made Modern', 'Glitter Markers', 'Marcadores de Glitter 6 pz.', 1),
(69, '028617437811', 'Lepen', 'Neon Colors', '10 PZ', 6),
(70, '028617437903', 'Lepen', 'Pastel Colors', '10 PZ', 10),
(71, '071662103842', 'Crayola', 'Crayon Melter', 'Crayon Melter', 1),
(72, '028617437781', 'Lepen', 'Bright Colors', '10 PZ', 10),
(73, '028617437835', 'Lepen', 'Earthy Colors', '10 PZ', 9),
(74, '071662040505', 'Crayola', 'Colored Pencils', 'Colores de madera 50 pz.', 10),
(75, '085014562140', 'Dual Brush', 'Primary Color Markers', '6 PZ', 31),
(76, '071662069209', 'Crayola', '120 Crayon Colors', '120 pz', 0),
(77, '085014562119', 'Dual Brush', 'Tropical Colors Markers', '6 PZ', 28),
(78, '085014562126', 'Dual Brush', 'Galaxy Colors Markers', '6 PZ', 29),
(79, '885131625991', 'Nuk', 'Newborn Gift Set', 'Kit de teteras para bebe', 1),
(80, '085014562133', 'Dual Brush', 'Pastel Colors Markers', '6 PZ', 8),
(81, '889628070165', 'Crayola', 'Color Your Bubbles', 'Spray and Play', 5),
(82, '085014562102', 'Dual Brush', 'Bright Colors Markers', '6 PZ', 30),
(83, '050051818512', 'Starburst', 'Lip Smacker', '4 pz', 2),
(84, '7501428722831', 'Azor', 'Vision V,A,N', '1 PZ', 3),
(85, '00050', 'Alpha Graphix', 'Organizador Crayola 50', '1 PZ', 7),
(86, '071662264147', 'Crayola', 'Take Note', 'Washable Gel Pens 14 pz', 12),
(87, '072838126849', 'Pilot', 'Frixion Fineliner', 'Marker Pen 12 pz.', 1),
(88, '071662420154', 'Crayola', 'Blender and shade colored pencil', '24 PZ', 3),
(89, '053482500223', 'Pigma', 'Micron', '3 Pens', 2),
(90, '071662512002', 'Crayola', 'Blender and shade colored pencil Caja R', '24 PZ', 8),
(91, '071662020101', 'Crayola', 'Tri-Color Pencil', '12 PZ', 0),
(92, '812674022796', 'Nvidia', 'NVLINK Bridge 4-Slot', 'Bridge 4-Slot RTX', 1),
(93, '070330431232', 'Bic', 'Color Collection', '20 PZ', 7),
(94, '', 'Clothes Folder', 'Wasche Butler', 'Doblador de ropa amarillo', 3),
(95, '239248', 'American World', 'AWPT-X002', '5 PZ', 1),
(96, '269609', 'American World', 'AW-C6KX026-2', '4 PZ', 1),
(97, '038965020122', 'Can gun 1', 'Spray can tool', 'Adaptador para lata de spray', 11),
(98, '626230-001', 'N/A', 'N/A', 'Funda para tablet o portatil, 10\"', 2),
(99, '00149', 'N/A', 'N/A', 'Funda protectora para iPad Air 2', 1),
(100, '606449140132', 'NETGEAR', 'GS308 300 Switch Series', 'Switch 8-Port Gigabit Ethernet', 5),
(101, '606449130010', 'NETGEAR', 'GS108PP Business', 'Switch 8-port Gigabit Ethernet', 4);

CREATE TABLE salida (
    id_salida BIGINT NOT NULL AUTO_INCREMENT,
    id_productos BIGINT NOT NULL,
    stock_salida INT NOT NULL,
    fechaRegistro DATETIME NOT NULL,
    usuario VARCHAR(100) NOT NULL,
    PRIMARY KEY (id_salida)
);

ALTER TABLE salida ADD FOREIGN KEY(id_productos) REFERENCES productos(id_productos);

INSERT INTO `salida` (`id_salida`, `id_productos`, `stock_salida`, `fechaRegistro`, `usuario`) VALUES
(2, 7, 1, '2020-05-28 11:36:15', 'iProxy'),
(3, 44, 1, '2020-05-28 13:07:05', 'iProxy'),
(4, 7, 1, '2020-05-29 09:43:53', 'iProxy'),
(5, 44, 1, '2020-05-29 09:44:31', 'iProxy'),
(6, 40, 1, '2020-05-29 09:44:41', 'iProxy'),
(7, 76, 2, '2020-06-01 09:04:03', 'iProxy'),
(8, 44, 3, '2020-06-01 09:04:10', 'iProxy'),
(9, 64, 1, '2020-06-01 09:39:10', 'iProxy'),
(10, 91, 1, '2020-06-01 10:27:53', 'iProxy'),
(11, 44, 1, '2020-06-01 13:27:08', 'iProxy'),
(12, 56, 10, '2020-09-22 13:52:13', 'iProxy');

CREATE TABLE adminRegistros (
    id_adminRegistros BIGINT NOT NULL AUTO_INCREMENT,
    usuario VARCHAR(100) NOT NULL,
    accion VARCHAR(100) NOT NULL,
    producto VARCHAR(100) NOT NULL,
    movimiento VARCHAR(100) NOT NULL,
    nota VARCHAR(100) NOT NULL,
    fecha DATETIME NOT NULL,
    PRIMARY KEY (id_adminRegistros)
);

INSERT INTO `adminregistros` (`id_adminRegistros`, `usuario`, `accion`, `producto`, `movimiento`, `nota`, `fecha`) VALUES
(1, 'MarcoBueno', 'Agregado', 'Sharpie - The ultimate collection', '', 'Se agrego el producto con el stock de 1', '2020-05-28 11:26:50'),
(2, 'iProxy', 'Agregado', 'aaa - aaa', '', 'Se agrego el producto con el stock de 1', '2020-05-28 11:27:09'),
(3, 'iProxy', 'Eliminado', 'aaa - aaa', 'Eliminado', 'El producto contaba con 1 de stock', '2020-05-28 11:27:25'),
(4, 'MarcoBueno', 'Agregado', 'Staedtler - Triplus fineliner', '', 'Se agrego el producto con el stock de 1', '2020-05-28 11:31:17'),
(5, 'MarcoBueno', 'Agregado', 'Staedtler - Colores Madera', '', 'Se agrego el producto con el stock de 1', '2020-05-28 11:33:16'),
(6, 'MarcoBueno', 'Agregado', 'Staedtler - Twin-tip felt pens', '', 'Se agrego el producto con el stock de 1', '2020-05-28 11:34:18'),
(7, 'MarcoBueno', 'Agregado', 'Zebra - Metallic Brush Pen', '', 'Se agrego el producto con el stock de 1', '2020-05-28 11:35:39'),
(8, 'MarcoBueno', 'Agregado', 'Energizer - AAA4', '', 'Se agrego el producto con el stock de 17', '2020-05-28 11:36:33'),
(9, 'MarcoBueno', 'Agregado', 'Zebra - Mildliner', '', 'Se agrego el producto con el stock de 5', '2020-05-28 11:37:31'),
(10, 'MarcoBueno', 'Agregado', 'Staedtler - Calligraph duo', '', 'Se agrego el producto con el stock de 5', '2020-05-28 11:38:54'),
(11, 'MarcoBueno', 'Agregado', 'Sharpie - Cosmic Color', '', 'Se agrego el producto con el stock de 2', '2020-05-28 11:40:43'),
(12, 'MarcoBueno', 'Agregado', 'Sharpie - Metalic Color', '', 'Se agrego el producto con el stock de 2', '2020-05-28 11:42:28'),
(13, 'MarcoBueno', 'Agregado', 'Sharpie - Electro Pop', '', 'Se agrego el producto con el stock de 1', '2020-05-28 11:44:21'),
(14, 'MarcoBueno', 'Agregado', 'Pilot - G2 Neon', '', 'Se agrego el producto con el stock de 1', '2020-05-28 11:45:13'),
(15, 'MarcoBueno', 'Agregado', 'Bic - Temporary Tattoo Marker', '', 'Se agrego el producto con el stock de 2', '2020-05-28 11:47:30'),
(16, 'MarcoBueno', 'Agregado', 'Box Top - Peper Mate Morker Pen', '', 'Se agrego el producto con el stock de 2', '2020-05-28 11:48:41'),
(17, 'MarcoBueno', 'Agregado', 'Elmers - Crabt Bond Gel Pen', '', 'Se agrego el producto con el stock de 1', '2020-05-28 11:50:13'),
(18, 'MarcoBueno', 'Agregado', 'Pilot - G2 Gel Roller', '', 'Se agrego el producto con el stock de 1', '2020-05-28 11:51:28'),
(19, 'MarcoBueno', 'Agregado', 'Pilot - G2 Premium Gel Roller', '', 'Se agrego el producto con el stock de 1', '2020-05-28 11:52:51'),
(20, 'MarcoBueno', 'Agregado', 'Sharpie - Paint Peinture', '', 'Se agrego el producto con el stock de 1', '2020-05-28 11:53:53'),
(21, 'MarcoBueno', 'Agregado', 'Sharpie - Clear View', '', 'Se agrego el producto con el stock de 1', '2020-05-28 11:56:29'),
(22, 'MarcoBueno', 'Agregado', 'Tulip - Glimmer', '', 'Se agrego el producto con el stock de 1', '2020-05-28 11:58:12'),
(23, 'MarcoBueno', 'Eliminado', 'Zebra - Metallic Brush Pen', 'Error en el programa al editar la cantidad en stock', 'El producto contaba con 1 de stock', '2020-05-28 12:00:52'),
(24, 'MarcoBueno', 'Agregado', 'Sharpie - Metallic Brush Pen', '', 'Se agrego el producto con el stock de 2', '2020-05-28 12:01:50'),
(25, 'MarcoBueno', 'Agregado', 'Horizon Group USA - Kawaii Chalk Art', '', 'Se agrego el producto con el stock de 1', '2020-05-28 12:04:56'),
(26, 'MarcoBueno', 'Agregado', 'Crayola - Super Tips', '', 'Se agrego el producto con el stock de 3', '2020-05-28 12:05:46'),
(27, 'MarcoBueno', 'Agregado', 'Just My Style - Messenger Bag Pez', '', 'Se agrego el producto con el stock de 1', '2020-05-28 12:07:45'),
(28, 'MarcoBueno', 'Agregado', 'Just My Style - Messenger Bag Unicornio', '', 'Se agrego el producto con el stock de 1', '2020-05-28 12:08:42'),
(29, 'MarcoBueno', 'Agregado', 'Wonder Nation - Magic Sequins', '', 'Se agrego el producto con el stock de 1', '2020-05-28 12:10:29'),
(30, 'MarcoBueno', 'Agregado', 'Crayola - Silly Scents', '', 'Se agrego el producto con el stock de 1', '2020-05-28 12:12:59'),
(31, 'MarcoBueno', 'Agregado', 'Celebrate - Liston Corazon Silueta', '', 'Se agrego el producto con el stock de 3', '2020-05-28 12:19:21'),
(32, 'MarcoBueno', 'Agregado', 'Celebrate - Liston Corazon Roza y Blanco', '', 'Se agrego el producto con el stock de 1', '2020-05-28 12:22:35'),
(33, 'MarcoBueno', 'Agregado', 'Celebrate - Liston Corazon Rojo y Roza', '', 'Se agrego el producto con el stock de 1', '2020-05-28 12:23:20'),
(34, 'MarcoBueno', 'Agregado', 'Celebrate - Liston Corazon Frace', '', 'Se agrego el producto con el stock de 2', '2020-05-28 12:23:55'),
(35, 'MarcoBueno', 'Agregado', 'Celebrate - Liston Corazon XO♥', '', 'Se agrego el producto con el stock de 3', '2020-05-28 12:25:06'),
(36, 'MarcoBueno', 'Agregado', 'Celebrate - Liston Corazon Negro', '', 'Se agrego el producto con el stock de 3', '2020-05-28 12:26:17'),
(37, 'MarcoBueno', 'Agregado', 'Pen + Gear - Permanent Markers', '', 'Se agrego el producto con el stock de 1', '2020-05-28 12:49:54'),
(38, 'MarcoBueno', 'Agregado', 'Sea Breeze - Scribble Stuff', '', 'Se agrego el producto con el stock de 1', '2020-05-28 12:51:38'),
(39, 'MarcoBueno', 'Agregado', 'Cra-z-Art - Color Sharp', '', 'Se agrego el producto con el stock de 1', '2020-05-28 12:55:28'),
(40, 'MarcoBueno', 'Agregado', 'Scentos - Sugar Rush', '', 'Se agrego el producto con el stock de 1', '2020-05-28 12:57:39'),
(41, 'MarcoBueno', 'Agregado', 'Brea Reese - Water Color Creans', '', 'Se agrego el producto con el stock de 1', '2020-05-28 12:58:54'),
(42, 'MarcoBueno', 'Agregado', 'Pen + Gear - Metalic Markers', '', 'Se agrego el producto con el stock de 1', '2020-05-28 13:00:10'),
(43, 'MarcoBueno', 'Agregado', 'Ubrands - Gel Pens', '', 'Se agrego el producto con el stock de 1', '2020-05-28 13:00:55'),
(44, 'MarcoBueno', 'Agregado', 'Pen + Gear - Gel Pens', '', 'Se agrego el producto con el stock de 1', '2020-05-28 13:02:50'),
(45, 'MarcoBueno', 'Agregado', 'Crayola - Create and Play Crayons', '', 'Se agrego el producto con el stock de 1', '2020-05-28 13:04:31'),
(46, 'MarcoBueno', 'Agregado', 'Alpha Graphix - Organizador Crayola 100', '', 'Se agrego el producto con el stock de 6', '2020-05-28 13:07:00'),
(47, 'MarcoBueno', 'Agregado', 'Crayola - Jumbo Crayons', '', 'Se agrego el producto con el stock de 1', '2020-05-28 13:08:07'),
(48, 'MarcoBueno', 'Agregado', 'Crayola - Ultra Clean Washable Large Crayons', '', 'Se agrego el producto con el stock de 1', '2020-05-28 13:09:15'),
(49, 'MarcoBueno', 'Agregado', 'Crayola - Twistables Crayons', '', 'Se agrego el producto con el stock de 1', '2020-05-28 13:10:43'),
(50, 'MarcoBueno', 'Agregado', 'Crayola - Colored Pencils Madera', '', 'Se agrego el producto con el stock de 1', '2020-05-28 13:12:19'),
(51, 'MarcoBueno', 'Agregado', 'Crayola - Silly Scents Madera', '', 'Se agrego el producto con el stock de 1', '2020-05-28 13:13:00'),
(52, 'MarcoBueno', 'Agregado', 'Artlol - Paint Color and doodle wood art set', '', 'Se agrego el producto con el stock de 1', '2020-05-28 13:24:42'),
(53, 'MarcoBueno', 'Agregado', 'Just My Style - scrapbook and Cards', '', 'Se agrego el producto con el stock de 1', '2020-05-28 13:28:12'),
(54, 'MarcoBueno', 'Agregado', 'Fashion Angels - Planner set', '', 'Se agrego el producto con el stock de 1', '2020-05-28 13:29:56'),
(55, 'MarcoBueno', 'Agregado', 'Confidence in Textiles - New Brothread', '', 'Se agrego el producto con el stock de 2', '2020-05-28 13:35:26'),
(56, 'MarcoBueno', 'Agregado', 'Crayola - Ultimate Crayon collection', '', 'Se agrego el producto con el stock de 3', '2020-05-28 13:36:26'),
(57, 'MarcoBueno', 'Agregado', 'Bic - Intensity', 'Se agrego el producto con el stock de 5', 'MarcoBueno agrego un nuevo producto', '2020-05-29 09:03:27'),
(58, 'MarcoBueno', 'Agregado', 'Sharpie - Sharpie', 'Se agrego el producto con el stock de 13', 'MarcoBueno agrego un nuevo producto', '2020-05-29 09:04:38'),
(59, 'MarcoBueno', 'Agregado', 'Azor - Vision', 'Se agrego el producto con el stock de 15', 'MarcoBueno agrego un nuevo producto', '2020-05-29 09:06:10'),
(60, 'MarcoBueno', 'Agregado', 'Bic - Cristal Pluma', 'Se agrego el producto con el stock de 12', 'MarcoBueno agrego un nuevo producto', '2020-05-29 09:06:54'),
(61, 'MarcoBueno', 'Agregado', 'Bic - Cristal Pluma Azul', 'Se agrego el producto con el stock de 36', 'MarcoBueno agrego un nuevo producto', '2020-05-29 09:08:32'),
(62, 'MarcoBueno', 'Agregado', 'Crayola - Blending Markers', 'Se agrego el producto con el stock de 2', 'MarcoBueno agrego un nuevo producto', '2020-05-29 09:10:20'),
(63, 'MarcoBueno', 'Agregado', 'Crayola - Pearlescent Paint Markers', 'Se agrego el producto con el stock de 3', 'MarcoBueno agrego un nuevo producto', '2020-05-29 09:11:11'),
(64, 'iProxy', 'Modificado', 'Confidence in Textiles - New Brothread', 'Se actualizaron campos del producto', 'Se corrigio el codigo de barras', '2020-05-29 09:11:13'),
(65, 'MarcoBueno', 'Agregado', 'Staedtler - Triplus roller', 'Se agrego el producto con el stock de 1', 'MarcoBueno agrego un nuevo producto', '2020-05-29 09:11:59'),
(66, 'MarcoBueno', 'Agregado', 'Staedtler - triplus gel', 'Se agrego el producto con el stock de 1', 'MarcoBueno agrego un nuevo producto', '2020-05-29 09:12:36'),
(67, 'iProxy', 'Agregado', 'Cra-Z-Art - 100 Colored Pencils', 'Se agrego el producto con el stock de 7', 'iProxy agrego un nuevo producto', '2020-05-29 09:13:26'),
(68, 'MarcoBueno', 'Agregado', 'Staedtler - Triplus Fineliner', 'Se agrego el producto con el stock de 1', 'MarcoBueno agrego un nuevo producto', '2020-05-29 09:13:43'),
(69, 'MarcoBueno', 'Agregado', 'Lepen - Basic Colors', 'Se agrego el producto con el stock de 2', 'MarcoBueno agrego un nuevo producto', '2020-05-29 09:15:14'),
(70, 'MarcoBueno', 'Agregado', 'Lepen - Darck Colors', 'Se agrego el producto con el stock de 5', 'MarcoBueno agrego un nuevo producto', '2020-05-29 09:16:06'),
(71, 'iProxy', 'Agregado', 'Hand Made Modern - Glitter Markers', 'Se agrego el producto con el stock de 1', 'iProxy agrego un nuevo producto', '2020-05-29 09:16:32'),
(72, 'MarcoBueno', 'Agregado', 'Lepen - Neon Colors', 'Se agrego el producto con el stock de 6', 'MarcoBueno agrego un nuevo producto', '2020-05-29 09:16:55'),
(73, 'MarcoBueno', 'Agregado', 'Lepen - Pastel Colors', 'Se agrego el producto con el stock de 10', 'MarcoBueno agrego un nuevo producto', '2020-05-29 09:17:43'),
(74, 'iProxy', 'Agregado', 'Crayola - Crayon Melter', 'Se agrego el producto con el stock de 1', 'iProxy agrego un nuevo producto', '2020-05-29 09:18:02'),
(75, 'MarcoBueno', 'Agregado', 'Lepen - Bright Colors', 'Se agrego el producto con el stock de 10', 'MarcoBueno agrego un nuevo producto', '2020-05-29 09:18:32'),
(76, 'MarcoBueno', 'Agregado', 'Lepen - Earthy Colors', 'Se agrego el producto con el stock de 9', 'MarcoBueno agrego un nuevo producto', '2020-05-29 09:19:17'),
(77, 'iProxy', 'Agregado', 'Crayola - Colored Pencils', 'Se agrego el producto con el stock de 10', 'iProxy agrego un nuevo producto', '2020-05-29 09:19:25'),
(78, 'MarcoBueno', 'Agregado', 'Dual Brush - Primary Color Markers', 'Se agrego el producto con el stock de 31', 'MarcoBueno agrego un nuevo producto', '2020-05-29 09:20:34'),
(79, 'iProxy', 'Agregado', 'Crayola - 120 Crayon Colors', 'Se agrego el producto con el stock de 2', 'iProxy agrego un nuevo producto', '2020-05-29 09:21:18'),
(80, 'MarcoBueno', 'Agregado', 'Dual Brush - Tropical Colors Markers', 'Se agrego el producto con el stock de 28', 'MarcoBueno agrego un nuevo producto', '2020-05-29 09:21:45'),
(81, 'MarcoBueno', 'Agregado', 'Dual Brush - Galaxy Colors Markers', 'Se agrego el producto con el stock de 29', 'MarcoBueno agrego un nuevo producto', '2020-05-29 09:22:48'),
(82, 'iProxy', 'Agregado', 'Nuk - Newborn Gift Set', 'Se agrego el producto con el stock de 1', 'iProxy agrego un nuevo producto', '2020-05-29 09:22:51'),
(83, 'MarcoBueno', 'Agregado', 'Dual Brush - Pastel Colors Markers', 'Se agrego el producto con el stock de 8', 'MarcoBueno agrego un nuevo producto', '2020-05-29 09:23:28'),
(84, 'iProxy', 'Agregado', 'Crayola - Color Your Bubbles', 'Se agrego el producto con el stock de 5', 'iProxy agrego un nuevo producto', '2020-05-29 09:24:06'),
(85, 'MarcoBueno', 'Agregado', 'Dual Brush - Bright Colors Markers', 'Se agrego el producto con el stock de 30', 'MarcoBueno agrego un nuevo producto', '2020-05-29 09:24:15'),
(86, 'iProxy', 'Agregado', 'Starburst - Lip Smacker', 'Se agrego el producto con el stock de 2', 'iProxy agrego un nuevo producto', '2020-05-29 09:25:44'),
(87, 'MarcoBueno', 'Agregado', 'Azor - Vision V,A,N', 'Se agrego el producto con el stock de 3', 'MarcoBueno agrego un nuevo producto', '2020-05-29 09:25:53'),
(88, 'MarcoBueno', 'Agregado', 'Alpha Graphix - Organizador Crayola 50', 'Se agrego el producto con el stock de 7', 'MarcoBueno agrego un nuevo producto', '2020-05-29 09:27:35'),
(89, 'iProxy', 'Agregado', 'Crayola - Take Note', 'Se agrego el producto con el stock de 12', 'iProxy agrego un nuevo producto', '2020-05-29 09:27:43'),
(90, 'iProxy', 'Agregado', 'Pilot - Frixion Fineliner', 'Se agrego el producto con el stock de 1', 'iProxy agrego un nuevo producto', '2020-05-29 09:29:46'),
(91, 'MarcoBueno', 'Agregado', 'Crayola - Blender and shade colored pencil', 'Se agrego el producto con el stock de 3', 'MarcoBueno agrego un nuevo producto', '2020-05-29 09:29:54'),
(92, 'iProxy', 'Agregado', 'Pigma - Micron', 'Se agrego el producto con el stock de 2', 'iProxy agrego un nuevo producto', '2020-05-29 09:30:55'),
(93, 'MarcoBueno', 'Agregado', 'Crayola - Blender and shade colored pencil Caja R', 'Se agrego el producto con el stock de 8', 'MarcoBueno agrego un nuevo producto', '2020-05-29 09:31:01'),
(94, 'MarcoBueno', 'Agregado', 'Crayola - Tri-Color Pencil', 'Se agrego el producto con el stock de 1', 'MarcoBueno agrego un nuevo producto', '2020-05-29 09:31:36'),
(95, 'iProxy', 'Agregado', 'Nvidia - NVLINK Bridge 4-Slot', 'Se agrego el producto con el stock de 1', 'iProxy agrego un nuevo producto', '2020-05-29 09:32:14'),
(96, 'MarcoBueno', 'Agregado', 'Bic - Color Collection', 'Se agrego el producto con el stock de 7', 'MarcoBueno agrego un nuevo producto', '2020-05-29 09:32:53'),
(97, 'iProxy', 'Agregado', 'Clothes Folder - Wasche Butler', 'Se agrego el producto con el stock de 3', 'iProxy agrego un nuevo producto', '2020-05-29 09:34:12'),
(98, 'MarcoBueno', 'Agregado', 'American World - AWPT-X002', 'Se agrego el producto con el stock de 1', 'MarcoBueno agrego un nuevo producto', '2020-05-29 09:34:56'),
(99, 'MarcoBueno', 'Agregado', 'American World - AW-C6KX026-2', 'Se agrego el producto con el stock de 1', 'MarcoBueno agrego un nuevo producto', '2020-05-29 09:35:51'),
(100, 'MarcoBueno', 'Agregado', 'Can gun 1 - Spray can tool', 'Se agrego el producto con el stock de 11', 'MarcoBueno agrego un nuevo producto', '2020-05-29 09:38:55'),
(101, 'iProxy', 'Agregado', 'N/A - N/A', 'Se agrego el producto con el stock de 2', 'iProxy agrego un nuevo producto', '2020-05-29 09:40:34'),
(102, 'iProxy', 'Agregado', 'N/A - N/A', 'Se agrego el producto con el stock de 1', 'iProxy agrego un nuevo producto', '2020-05-29 09:41:19'),
(103, 'MarcoBueno', 'Modificado', 'Zebra - Metallic Brush Pen', 'Se actualizaron campos del producto', 'Cambio de marca por error', '2020-06-01 13:16:33'),
(104, 'iProxy', 'Agregado', 'NETGEAR - 300 Switch Series', 'Se agrego el producto con el stock de 5', 'iProxy agrego un nuevo producto', '2020-06-10 13:25:20'),
(105, 'iProxy', 'Agregado', 'NETGEAR - GS108PP Business', 'Se agrego el producto con el stock de 4', 'iProxy agrego un nuevo producto', '2020-06-10 13:27:09'),
(106, 'iProxy', 'Modificado', 'NETGEAR - GS308 300 Switch Series', 'Se actualizaron campos del producto', 'Modificación de modelo', '2020-06-10 13:27:40'),
(107, 'iProxy', 'Eliminado', 'Sharpie - The ultimate collection', 'El producto contaba con 1 de stock', 'Lo borre porque queria', '2020-09-22 13:50:32');

CREATE TABLE guias_dhl (
    id_guias_dhl BIGINT NOT NULL AUTO_INCREMENT,
    guia VARCHAR(100),
    fechaRegistro DATE NOT NULL,
    usuario VARCHAR(100) NOT NULL,
    PRIMARY KEY (id_guias_dhl)
);

INSERT INTO `guias_dhl` (`id_guias_dhl`, `guia`, `fechaRegistro`, `usuario`) VALUES
(1, '5995485042', '2020-05-28', 'MarcoBueno'),
(2, '2259256650', '2020-05-29', 'iProxy'),
(7, '2010526910', '2020-06-01', 'iProxy'),
(8, '1460279726', '2020-06-01', 'iProxy'),
(9, '1264455216', '2020-06-01', 'iProxy'),
(10, '9167423856', '2020-06-01', 'iProxy'),
(11, '6587413044', '2020-06-01', 'iProxy');

CREATE TABLE guias_fedex (
    id_guias_fedex BIGINT NOT NULL AUTO_INCREMENT,
    guia VARCHAR(100),
    fechaRegistro DATE NOT NULL,
    usuario VARCHAR(100) NOT NULL,
    PRIMARY KEY (id_guias_fedex)
);

INSERT INTO `guias_fedex` (`id_guias_fedex`, `guia`, `fechaRegistro`, `usuario`) VALUES
(1, '2850028894', '2020-05-28', 'MarcoBueno'),
(2, '2015059067', '2020-05-29', 'iProxy'),
(3, '30039804651', '2020-06-01', 'iProxy');

CREATE TABLE guias_estafeta (
    id_guias_estafeta BIGINT NOT NULL AUTO_INCREMENT,
    guia VARCHAR(100),
    fechaRegistro DATE NOT NULL,
    usuario VARCHAR(100) NOT NULL,
    PRIMARY KEY (id_guias_estafeta)
);

INSERT INTO `guias_estafeta` (`id_guias_estafeta`, `guia`, `fechaRegistro`, `usuario`) VALUES
(1, '2015059067', '2020-05-29', 'iProxy'),
(6, '401505906741C608195561', '2020-06-01', 'iProxy'),
(7, '601505906741C608227292', '2020-06-01', 'iProxy'),
(8, '101505906741C608205467', '2020-06-01', 'iProxy'),
(9, '401505906741C608205079', '2020-06-01', 'iProxy');

CREATE TABLE guias_otros (
    id_guias_otros BIGINT NOT NULL AUTO_INCREMENT,
    guia VARCHAR(100),
    empresa VARCHAR(100),
    fechaRegistro DATE NOT NULL,
    usuario VARCHAR(100) NOT NULL,
    PRIMARY KEY (id_guias_otros)
);