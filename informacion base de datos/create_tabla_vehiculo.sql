CREATE TABLE `vehiculo` (
  `id_vehiculo` int(11) NOT NULL,
  `precio` double NOT NULL,
  `pasajeros` int(45) NOT NULL,
  `tiempo` int(11) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `video` varchar(250) NOT NULL,
  `mapa` varchar(2300) DEFAULT NULL,
  `descripcion` varchar(300) NOT NULL,
  `clase` varchar(100) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`id_vehiculo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
