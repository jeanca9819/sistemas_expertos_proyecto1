-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 30-06-2021 a las 03:05:23
-- Versión del servidor: 8.0.13-4
-- Versión de PHP: 7.2.24-0ubuntu0.18.04.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cFX3CfJROE`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clase_atractivo`
--

CREATE TABLE `clase_atractivo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(2000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `detalle` varchar(2000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `url_imagen_1` varchar(512) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `url_imagen_2` varchar(512) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `url_video` varchar(512) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `url_mapa` varchar(512) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `camping` int(11) NOT NULL,
  `mascotas` int(11) NOT NULL,
  `baños` int(11) NOT NULL,
  `transporte` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `clase_atractivo`
--

INSERT INTO `clase_atractivo` (`id`, `nombre`, `descripcion`, `detalle`, `url_imagen_1`, `url_imagen_2`, `url_video`, `url_mapa`, `camping`, `mascotas`, `baños`, `transporte`) VALUES
(1, 'Mirador de Orosi', 'El Mirador de Orosi, es un sitio especial para compartir en familia o por qué no, un picnic para celebrar el aniversario con su pareja. Así que tome rumbo a Cartago y disfrute de un sábado o un domingo muy agradable.', 'El Mirador de Orosi, es un sitio especial para compartir en familia, un picnic para celebrar el aniversario con su pareja.Pertenece al Instituto Costarricense de Turismo (ICT). Su horario de visita es de 8:00 a.m a 4:30 pm. Es completamente gratuito.', 'https://d1qqtien6gys07.cloudfront.net/wp-content/uploads/2021/03/ceb9e63e4943c065653bf466775858de.jpg', 'https://blog.nativu.com/wp-content/uploads/2020/09/mirador-ujarras.jpg', 'https://www.youtube.com/embed/vmhbdu8McQk', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15725.507961871399!2d-83.8582366!3d9.8186699!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x42a3d3be7d3b1efe!2sMirador%20de%20Orosi!5e0!3m2!1ses!2scr!4v1624900516241!5m2!1ses!2scr', 1, 1, 1, 1),
(2, 'Playa Tamarindo', 'Playa muy popular y de gran belleza ubicada en Santa Cruz de Guanacaste. Combina la arena blanca, con buenas olas para el surf, y un paisaje increíble rodeado de montañas.', 'Tamarindo es el punto de encuentro para disfrutar de distintas actividades. Su horario es de 8 a.m a 4:30 p.m.', 'https://images.costarica.org/wp-content/uploads/2014/12/Tamarindo-Beach-View.jpg', 'https://cf.bstatic.com/images/hotel/max1280x900/201/201840956.jpg', 'https://www.youtube.com/embed/12NiLNlQCbE', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15702.04594606016!2d-85.8468246726027!3d10.300888482323375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f9e39409203c30f%3A0xbb189f5e2cc1f893!2sProvincia%20de%20Guanacaste%2C%20Tamarindo!5e0!3m2!1ses!2scr!4v1624900778224!5m2!1ses!2scr', 1, 1, 1, 1),
(3, 'Museo de los niños', 'El lugar donde niños, jóvenes y adultos dejan volar su imaginación. Vení  a conocer el Museo de los Niños, el único museo de Costa Rica donde se aprende jugando y experimentando.', 'Un lugar para ir en familia, ofrece talleres educativos, campamentos, rally, visitas guiadas. Su horario es de 8:00 am a 4:30 pm. Su costo es de niños y niñas 2000 mil colones, mayores de 15 años 2200 colones.', 'https://images.visitarcostarica.com/museo-de-los-ninos-costa-rica.jpg', 'https://columbia.co.cr/images/imagenes-abril2020/museo_nios.jpg', 'https://www.youtube.com/embed/FbeKyEd2Pt4', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15719.661955627387!2d-84.0802278!3d9.9409896!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x23edded70015243b!2sMuseo%20de%20los%20Ni%C3%B1os!5e0!3m2!1ses!2scr!4v1624901512695!5m2!1ses!2scr', 0, 0, 1, 1),
(4, 'Ponderosa Adventure Park', 'Disfrute de la experiencia de interactuar con animales exóticos, de una aventuras inolvidable y de la naturaleza que ofrece Liberia, Guanacaste. Su costo es de 49 dolares niños y 60 dolares adultos.', 'Nuestros visitantes además pueden disfrutar de cuatro atracciones más, tanto acuáticas como aéreas y terrestres, que despiertan el espíritu aventurero.', 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/18/ad/b0/df/inada-mejor-que-descansar.jpg?w=1200&h=-1&s=1', 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/18/8d/e2/4a/photo0jpg.jpg?w=1200&h=-1&s=1', 'https://www.youtube.com/embed/fsd2cBi0g5w', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15688.748250849689!2d-85.3999051!3d10.5645303!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb9bc77dc456cf0f6!2sPonderosa%20Adventure%20Park!5e0!3m2!1ses!2scr!4v1624901988155!5m2!1ses!2scr', 1, 1, 1, 1),
(5, 'Parque Nacional Manuel Antonio', 'Recorrer senderos rodeados de fauna silvestre y descansar en paradisiacas playas son opciones que prometen cautivar sus sentidos.', 'La magia de la playa y el verdor del bosque se juntan en un solo lugar, y el resultado es un paraíso natural. No en vano el Parque Nacional Manuel Antonio es el Área Silvestre Protegida que recibe la mayor cantidad de turistas nacionales e internacionales.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR8AEDO5kLN33vT2METRr6jPsbkzkOGRKbd8w&usqp=CAU', 'https://goplaya.cr/archivos/manuelantoniofoto1.jpg', 'https://www.youtube.com/embed/wvACn9Ysghk', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15745.324530055801!2d-84.1369879!3d9.392308!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x95e66139ce5c4a86!2sParque%20Nacional%20Manuel%20Antonio!5e0!3m2!1ses!2scr!4v1624902287233!5m2!1ses!2scr', 1, 1, 1, 1),
(6, 'Volcán Arenal ', 'La imponencia del volcán Arenal es innegable y esto es en lo primero que pensamos al visitar La Fortuna de San Carlos, donde se ubica esta maravilla natural.', 'Quien visite esta área protegida no debe perderse, además, las coladas de lava que bajaron en 1992, el impresionante árbol de ceiba con más de 400 años de antigüedad y los senderos a lo largo de un extenso y auténtico bosque lluvioso, donde puede apreciar la vida silvestre y los recursos que el Parque protege. Su horario es de 8:00 a.m a 4:00 p.m.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT0EqzP8VKYRu1JYCQHkWhQJScQasIu2T0erA&usqp=CAU', 'https://image.jimcdn.com/app/cms/image/transf/dimension=354x10000:format=jpg/path/sa6ea6cb0ae6f2f01/image/i15c9f89e7caa579f/version/1564459052/image.jpg', 'https://www.youtube.com/embed/KX1q5uJCX20', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31387.855146477785!2d-84.72068902999793!3d10.462625522227011!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa00ee98d6d7bd1%3A0x14dee7247a268963!2sVolc%C3%A1n%20Arenal!5e0!3m2!1ses!2scr!4v1624902910432!5m2!1ses!2scr', 1, 1, 1, 1),
(7, 'Kalumbu Hot Springs', 'Es un parque acuático que combina las bellezas escénicas de la zona de San Carlos con atracciones acuáticas.', 'Cuenta con 3 toboganes, 1 piscina de agua termal y para los más pequeños 1 zona de juegos interactivos. Para los más valientes ofrecen el Mamut, que es un tobogán gigantesco  n el cual se podrán deslizar por medio de una balsa.\r\nSu costo es de 13 colones adultos y 6500 niños. El horario es viernes, sábado y domingo de 10 a.m a 10 p.m', 'https://conozcasucanton.com/wp-content/uploads/sites/11/2016/10/kalumbu-2-630x420.jpg', 'https://conozcasucanton.com/wp-content/uploads/sites/11/2016/10/kalumbu3-630x420.jpg', 'https://www.youtube.com/embed/D5YCwTsOrWg', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15692.817145876616!2d-84.6789851!3d10.484556!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4c2f2e048643e629!2sKalambu%20Hot%20Springs!5e0!3m2!1ses!2scr!4v1624899145271!5m2!1ses!2scr', 1, 1, 1, 0),
(8, 'Parque Acuático Villas Fantasía', 'A tan solo 45 minutos de la capital, el Parque Acuático Villas Fantasía de Orotina se convierte en una opción ideal para hacer un tour de un día.', 'Cuenta con 3 piscinas, 2 toboganes de 30 metros, 5 toboganes pequeños, cancha de fútbol, área de juegos con chorros de agua, ranchos para estar en el día, zonas verdes, mesas de futbolín, venta de comida rápida y restaurante.', 'https://conozcasucanton.com/wp-content/uploads/sites/11/2016/10/villas-fantasia-5-560x420.jpg', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSbavq3Zgolu_7HMsNWLZEjFQqOcGW02cQNqQ&usqp=CAU', 'https://www.youtube.com/embed/-Cn-CakqdSs', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15720.687000627033!2d-84.5424406!3d9.9196499!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc8cbee5a1c4b3ba8!2sParque%20Acu%C3%A1tico%20Villas%20Fantas%C3%ADa!5e0!3m2!1ses!2scr!4v1624899405532!5m2!1ses!2scr', 1, 1, 1, 0),
(9, 'Teatro Nacional', 'El Teatro Nacional de Costa Rica le ofrece el servicio de visitas guiadas en español e inglés además de teatro, múisca y danza.', 'Usted puede disfrutar de visitas guiadas, de lunes a domingo, desde las 9 de la mañana y hasta las 4 de la tarde cada hora. Nuestros guías están capacitados para informarle ampliamente. En este momento por razones de pandemia  los grupos son de máximo 10 personas.  La visita al Teatro Nacional tiene un costo de  ¢1.695, niños menores de doce años nacionales o extranjeros, NO pagan. Los adultos mayores pagan  ¢1.130.00', 'https://lh5.googleusercontent.com/p/AF1QipPeXPzjINFkuhYmOj8c5AnQgfqN36Wf7bfvhifv=w408-h271-k-no', 'https://tnwebdata.teatronacional.go.cr/repositorio/detail/58-7727_interiorteatronacionalsanjosecostarica.jpg', 'https://www.youtube.com/embed/jtlfOwxswbk', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15720.036753826424!2d-84.0771993!3d9.9331922!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe25ade437fab6e5c!2sTeatro%20Nacional%20de%20Costa%20Rica!5e0!3m2!1ses!2scr!4v1624902342248!5m2!1ses!2scr', 0, 0, 1, 1),
(10, 'Museo de Jade', 'El Museo de Jade en Costa Rica se dedica a preservar la herencia antropológica de la región, y ofrece la colección más grande de artefactos de jade precolombino en el mundo.', 'Visita el Museo del Jade y déjate deslumbrar por una de las colecciones más impresionantes de piedras preciosas en Costa Rica. Su horario es de 10:00 a.m a 5:00 p.m.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSzpt6P7TCLFp-oB5fFlDE8afwKdyLXT541Kw&usqp=CAU', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRKF7u-0Y4TXpdstg2xFuCyMnh_NSJXs_693A&usqp=CAU', 'https://www.youtube.com/embed/UYOkV-dSNd0', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15720.035422883786!2d-84.0727462!3d9.9332199!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9a94bac01f097f67!2sMuseo%20del%20Jade!5e0!3m2!1ses!2scr!4v1624903314179!5m2!1ses!2scr', 0, 0, 1, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
