CREATE TABLE `paquete` (
  `id_paquete` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_paquete` varchar(20) NOT NULL,
  `precio` varchar(20) NOT NULL,
  `cercania` varchar(100) NOT NULL,
  `alimentacion` varchar(100) NOT NULL,
  `transporte` varchar(100) NOT NULL,
  `imagen` varchar(300) NOT NULL,
  `video` varchar(300) NOT NULL,
  `mapa` varchar(300) DEFAULT NULL,
  `descripcion` varchar(300) NOT NULL,
  `clase` varchar(100) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_paquete`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8;
