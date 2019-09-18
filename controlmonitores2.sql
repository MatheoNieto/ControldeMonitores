-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-07-2019 a las 20:10:12
-- Versión del servidor: 10.1.39-MariaDB
-- Versión de PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `controlmonitores2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrativos`
--

CREATE TABLE `administrativos` (
  `codigo` int(20) NOT NULL,
  `nombres` varchar(20) NOT NULL,
  `apellidos` varchar(20) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `deparatamento` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `administrativos`
--

INSERT INTO `administrativos` (`codigo`, `nombres`, `apellidos`, `correo`, `deparatamento`) VALUES
(12121212, 'Meliodas', 'Capitan ', 'meliodas@upc.edu.co', 13),
(24742617, 'PATRICIA YANETH', 'ORTIZ DUQUE', 'patricia.ortiz@ucp.edu.co', 1),
(25059962, 'ZULMA', 'GUAPACHA MORALES ', 'zulma.guapacha@ucp.edu.co', 1),
(42000160, 'JUDITH', 'GOMEZ GOMEZ', 'judith.gomez@ucp.edu.co', 1),
(42072926, 'DORIS', 'GOMEZ HINCAPIE', 'doris.gomez@ucp.edu.co', 1),
(1087557320, 'LINA FERNANDA', 'MARTINEZ CRUZ', 'lina.martinez@ucp.edu.co', 1),
(1088274089, 'JORGE LEONARDO', 'BAÑOL ', 'jorge.banol@ucp.edu.co', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bitacora`
--

CREATE TABLE `bitacora` (
  `id` int(20) NOT NULL,
  `monitore` int(20) NOT NULL,
  `fechainicio` datetime NOT NULL,
  `descriocion` varchar(150) DEFAULT NULL,
  `fechafin` datetime DEFAULT NULL,
  `tipomonitoria` int(20) NOT NULL,
  `idmonitoria` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `bitacora`
--

INSERT INTO `bitacora` (`id`, `monitore`, `fechainicio`, `descriocion`, `fechafin`, `tipomonitoria`, `idmonitoria`) VALUES
(3, 1027882032, '2019-05-21 15:00:00', 'blabalbalblab', '2019-05-21 15:00:00', 1, 3),
(4, 79997660, '2019-05-21 15:00:00', 'rgvsdfgsdfg', '2019-05-21 15:30:00', 1, 4),
(6, 1027882032, '2019-05-21 15:30:00', 'dfsafasdfsadf', '2019-05-21 15:30:00', 1, 6),
(9, 79997660, '2019-05-21 15:30:00', NULL, NULL, 1, 9),
(12, 1004777862, '2019-05-24 09:00:00', 'blablblablab', '2019-05-24 19:00:00', 2, 12),
(13, 1004777862, '2019-05-23 10:00:00', 'qrtquiwtery', '2019-05-23 15:00:00', 1, 13),
(15, 1088035278, '2019-06-06 08:00:00', 'gtiklsadjflkajsdflk', '2019-06-06 12:00:00', 1, 15),
(17, 1004777862, '2019-06-07 07:00:00', 'hola soy yo mundo                   ', '2019-06-07 11:30:00', 1, 17),
(19, 1088035278, '2019-06-04 10:00:00', 'fasdfasdfasdfaksjdhfkjas hdkjfhaskjdfh kjasdhfkj hasdkjf haskdjfh kjas', '2019-06-04 14:30:00', 1, 19),
(20, 1088035278, '2019-06-07 07:00:00', 'dakjshfkjsadhfkjhsakjdf', '2019-06-07 12:00:00', 1, 20),
(21, 1088035278, '2019-06-08 07:00:00', 'sdafasdfasdfasdf', '2019-06-08 14:30:00', 1, 21),
(22, 1088030768, '2019-06-08 12:00:00', 'nfdskgdlskfjglkjsdfljglk', '2019-06-08 12:00:00', 1, 22);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dependecia_monitores`
--

CREATE TABLE `dependecia_monitores` (
  `id` int(10) NOT NULL,
  `nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `dependecia_monitores`
--

INSERT INTO `dependecia_monitores` (`id`, `nombre`) VALUES
(1, 'Biblioteca'),
(5, 'Secretaría general'),
(6, 'Archivo'),
(7, 'Gestión humana'),
(8, 'Gestión financiera'),
(9, 'Gestión de talento humano'),
(10, 'Gestión del campus'),
(11, 'Virtualizacón'),
(12, 'Centro de graduados'),
(13, 'Admisiones y registro'),
(14, 'Dirección Administrativa y fin'),
(15, 'Coordinación de comunicación'),
(16, 'Vicerrectoría de proyecto de v'),
(17, 'Facultad de Arquitectura y dis'),
(18, 'Facultad de Ciencias humnana,s'),
(19, 'Facultad de Ciencias Económica'),
(20, 'Facultad de Ciencias Básicas e'),
(21, 'Programa de Arquitectura'),
(22, 'Programa de Diseño industrial'),
(23, 'Programa de Psicología'),
(24, 'Programa Comunicación Social -'),
(25, 'Programa de Mercadeo'),
(26, 'Programa de Negocios Internaci'),
(27, 'Programa de Administración de '),
(28, 'Programa de Ingeniería de Sist'),
(29, 'Programa de Ingeniera Industri'),
(30, 'PAC'),
(31, 'PAC');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horariosemes`
--

CREATE TABLE `horariosemes` (
  `lunes` varchar(100) DEFAULT NULL,
  `martes` varchar(100) DEFAULT NULL,
  `miercoles` varchar(100) DEFAULT NULL,
  `jueves` varchar(100) DEFAULT NULL,
  `viernes` varchar(100) DEFAULT NULL,
  `sabado` varchar(100) DEFAULT NULL,
  `cod_monitor` int(20) NOT NULL,
  `statuslun` int(2) NOT NULL DEFAULT '0',
  `statusmar` int(2) NOT NULL DEFAULT '0',
  `statusmier` int(2) NOT NULL DEFAULT '0',
  `statusjueves` int(2) NOT NULL DEFAULT '0',
  `statusvier` int(2) NOT NULL DEFAULT '0',
  `statussabado` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `horariosemes`
--

INSERT INTO `horariosemes` (`lunes`, `martes`, `miercoles`, `jueves`, `viernes`, `sabado`, `cod_monitor`, `statuslun`, `statusmar`, `statusmier`, `statusjueves`, `statusvier`, `statussabado`) VALUES
('09:00-12:30-Acción social', '12:30-15:00-Acción social', '14:00-19:30-Monitoria', '08:00-12:30-Monitoria', '13:30-18:00-Monitoria', '08:00-12:30-Acción social', 1004777862, 1, 0, 1, 0, 1, 1),
('08:00-13:00-Monitoria', '08:00-12:00-Monitoria', 'No-No-Ninguna', '15:00-20:30-Acción social', 'No-No-Ninguna', '08:30-15:30-Monitoria', 1088035278, 1, 1, 0, 1, 0, 1);

--
-- Disparadores `horariosemes`
--
DELIMITER $$
CREATE TRIGGER `resethorario` BEFORE DELETE ON `horariosemes` FOR EACH ROW UPDATE `monitores` SET `horario`= 0 WHERE monitores.codigo = old.cod_monitor
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jueves`
--

CREATE TABLE `jueves` (
  `code_monitor` int(20) NOT NULL,
  `horainicio` varchar(50) NOT NULL,
  `horafin` varchar(50) NOT NULL,
  `lugartrabajo` varchar(100) NOT NULL,
  `id` int(20) NOT NULL,
  `comentarios` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `jueves`
--

INSERT INTO `jueves` (`code_monitor`, `horainicio`, `horafin`, `lugartrabajo`, `id`, `comentarios`) VALUES
(1088035278, '15:00', '18:00', 'GTI', 4, NULL);

--
-- Disparadores `jueves`
--
DELIMITER $$
CREATE TRIGGER `actualiz4` AFTER INSERT ON `jueves` FOR EACH ROW UPDATE `horariosemes` SET `statusjueves`=1 WHERE horariosemes.cod_monitor = new.code_monitor
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `elimn4` BEFORE DELETE ON `jueves` FOR EACH ROW UPDATE `horariosemes` SET `statusjueves`=0 WHERE horariosemes.cod_monitor = old.code_monitor
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lunes`
--

CREATE TABLE `lunes` (
  `code_monitor` int(20) NOT NULL,
  `horainicio` varchar(50) NOT NULL,
  `horafin` varchar(50) NOT NULL,
  `lugartrabajo` varchar(100) NOT NULL,
  `id` int(20) NOT NULL,
  `comentarios` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `lunes`
--

INSERT INTO `lunes` (`code_monitor`, `horainicio`, `horafin`, `lugartrabajo`, `id`, `comentarios`) VALUES
(1004777862, '9:00', '10:30', 'Referencia', 3, 'sddfasdfasdf'),
(1088035278, '8:00', '12:00', 'Bibliocafe', 4, NULL);

--
-- Disparadores `lunes`
--
DELIMITER $$
CREATE TRIGGER `actualiz` AFTER INSERT ON `lunes` FOR EACH ROW UPDATE `horariosemes` SET `statuslun`=1 WHERE horariosemes.cod_monitor = new.code_monitor
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `elimn` BEFORE DELETE ON `lunes` FOR EACH ROW UPDATE `horariosemes` SET `statuslun`=0 WHERE horariosemes.cod_monitor = old.code_monitor
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `martes`
--

CREATE TABLE `martes` (
  `code_monitor` int(20) NOT NULL,
  `horainicio` varchar(50) NOT NULL,
  `horafin` varchar(50) NOT NULL,
  `lugartrabajo` varchar(100) NOT NULL,
  `id` int(20) NOT NULL,
  `comentarios` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `martes`
--

INSERT INTO `martes` (`code_monitor`, `horainicio`, `horafin`, `lugartrabajo`, `id`, `comentarios`) VALUES
(1088035278, '8:00', '11:30', 'Bibliocafe', 7, '');

--
-- Disparadores `martes`
--
DELIMITER $$
CREATE TRIGGER `actualiz2` AFTER INSERT ON `martes` FOR EACH ROW UPDATE `horariosemes` SET `statusmar`=1 WHERE horariosemes.cod_monitor = new.code_monitor
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `elimn2` BEFORE DELETE ON `martes` FOR EACH ROW UPDATE `horariosemes` SET `statusmar`=0 WHERE horariosemes.cod_monitor = old.code_monitor
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `miercoles`
--

CREATE TABLE `miercoles` (
  `code_monitor` int(20) NOT NULL,
  `horainicio` varchar(50) NOT NULL,
  `horafin` varchar(50) NOT NULL,
  `lugartrabajo` varchar(100) NOT NULL,
  `id` int(20) NOT NULL,
  `comentarios` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `miercoles`
--

INSERT INTO `miercoles` (`code_monitor`, `horainicio`, `horafin`, `lugartrabajo`, `id`, `comentarios`) VALUES
(1004777862, '14:00', '19:30', 'salagrupal', 1, '');

--
-- Disparadores `miercoles`
--
DELIMITER $$
CREATE TRIGGER `actualiz3` AFTER INSERT ON `miercoles` FOR EACH ROW UPDATE `horariosemes` SET `statusmier`=1 WHERE horariosemes.cod_monitor = new.code_monitor
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `elimn3` BEFORE DELETE ON `miercoles` FOR EACH ROW UPDATE `horariosemes` SET `statusmier`=0 WHERE horariosemes.cod_monitor = old.code_monitor
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `monitores`
--

CREATE TABLE `monitores` (
  `codigo` int(20) NOT NULL,
  `nombres` varchar(20) NOT NULL,
  `apellidos` varchar(20) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `direccion` varchar(20) NOT NULL,
  `barrio` varchar(20) NOT NULL,
  `ciudad` varchar(20) NOT NULL,
  `carrera` int(10) NOT NULL,
  `semestre` varchar(20) NOT NULL,
  `areasesorias` varchar(500) NOT NULL,
  `imgperfil` varchar(50) NOT NULL DEFAULT 'documento.png',
  `dependencia` int(10) NOT NULL,
  `tipo_monitor` int(10) NOT NULL,
  `horario` int(2) DEFAULT '0',
  `horaasignadas` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `monitores`
--

INSERT INTO `monitores` (`codigo`, `nombres`, `apellidos`, `correo`, `tel`, `direccion`, `barrio`, `ciudad`, `carrera`, `semestre`, `areasesorias`, `imgperfil`, `dependencia`, `tipo_monitor`, `horario`, `horaasignadas`) VALUES
(1088342892, 'MATEO ', 'NIETO HOYOS ', 'mateo.nieto@ucp.edu.co', '3222368431- 3430389', 'MZ5 CASA1 LOS OLIVOS', 'CAMPESTRE D', 'Dosquebradas', 1, 'I', 'Ninguna', 'documento.png', 1, 1, 0, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `monitorias`
--

CREATE TABLE `monitorias` (
  `id` int(50) NOT NULL,
  `codigo_monitor` int(20) NOT NULL,
  `fechainicio` datetime NOT NULL,
  `fechafin` datetime DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `usario_inicio` int(20) DEFAULT NULL,
  `ip_inicio` varchar(150) DEFAULT NULL,
  `usuario_fin` int(20) DEFAULT NULL,
  `ipdefinsesion` varchar(150) DEFAULT NULL,
  `tipomonitoria` int(20) NOT NULL,
  `surge` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `monitorias`
--

INSERT INTO `monitorias` (`id`, `codigo_monitor`, `fechainicio`, `fechafin`, `descripcion`, `usario_inicio`, `ip_inicio`, `usuario_fin`, `ipdefinsesion`, `tipomonitoria`, `surge`) VALUES
(3, 1027882032, '2019-05-21 15:00:00', '2019-05-21 15:00:00', 'blabalbalblab', 42072926, 'ip:::1 Informacion pc:Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.157 Safari/537.36', 42072926, 'ip:::1 Informacion pc:Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.157 Safari/537.36', 1, NULL),
(4, 79997660, '2019-05-21 15:00:00', '2019-05-21 15:30:00', 'rgvsdfgsdfg', 42072926, 'ip:::1 Informacion pc:Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.157 Safari/537.36', 42072926, 'ip:::1 Informacion pc:Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.157 Safari/537.36', 1, NULL),
(6, 1027882032, '2019-05-21 15:30:00', '2019-05-21 15:30:00', 'dfsafasdfsadf', 42072926, 'ip:::1 Informacion pc:Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.157 Safari/537.36', 42072926, 'ip:::1 Informacion pc:Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.157 Safari/537.36', 1, NULL),
(9, 79997660, '2019-05-21 15:30:00', NULL, NULL, 42072926, 'ip:::1 Informacion pc:Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.157 Safari/537.36', NULL, NULL, 1, NULL),
(12, 1004777862, '2019-05-24 09:00:00', '2019-05-24 19:00:00', 'blablblablab', 42072926, 'ip:::1 Informacion pc:Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', 42072926, 'ip:::1 Informacion pc:Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', 1, 'M'),
(13, 1004777862, '2019-05-23 10:00:00', '2019-05-23 15:00:00', 'qrtquiwtery', 42072926, 'ip:::1 Informacion pc:Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', 42072926, 'ip:::1 Informacion pc:Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', 1, NULL),
(15, 1088035278, '2019-06-06 08:00:00', '2019-06-06 12:00:00', 'gtiklsadjflkajsdflk', 1088274089, 'ip:::1 Informacion pc:Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.80 Safari/537.36', 1088274089, 'ip:::1 Informacion pc:Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.80 Safari/537.36', 1, NULL),
(17, 1004777862, '2019-06-07 07:00:00', '2019-06-07 11:30:00', 'hola soy yo mundo                   ', 1088274089, 'ip:::1 Informacion pc:Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.80 Safari/537.36', 1088274089, 'ip:::1 Informacion pc:Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.80 Safari/537.36', 1, NULL),
(19, 1088035278, '2019-06-04 10:00:00', '2019-06-04 14:30:00', 'fasdfasdfasdfaksjdhfkjas hdkjfhaskjdfh kjasdhfkj hasdkjf haskdjfh kjas', 42072926, 'ip:::1 Informacion pc:Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.80 Safari/537.36', 42072926, 'ip:::1 Informacion pc:Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.80 Safari/537.36', 1, NULL),
(20, 1088035278, '2019-06-07 07:00:00', '2019-06-07 12:00:00', 'dakjshfkjsadhfkjhsakjdf', 42072926, 'ip:::1 Informacion pc:Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.80 Safari/537.36', 42072926, 'ip:::1 Informacion pc:Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.80 Safari/537.36', 1, NULL),
(21, 1088035278, '2019-06-08 07:00:00', '2019-06-08 13:00:00', 'sdafasdfasdfasdf', 42072926, NULL, 42072926, NULL, 1, 'M'),
(22, 1088030768, '2019-06-08 12:00:00', '2019-06-08 12:00:00', 'nfdskgdlskfjglkjsdfljglk', 1088274089, 'ip:::1 Informacion pc:Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.80 Safari/537.36', 1088274089, 'ip:::1 Informacion pc:Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.80 Safari/537.36', 1, NULL);

--
-- Disparadores `monitorias`
--
DELIMITER $$
CREATE TRIGGER `bitacora` AFTER INSERT ON `monitorias` FOR EACH ROW INSERT INTO `bitacora`(`id`, `monitore`, `fechainicio`, `descriocion`, `fechafin`, `tipomonitoria`,`idmonitoria`) VALUES (null,NEW.codigo_monitor,NEW.fechainicio,NEW.descripcion,NEW.fechafin,NEW.tipomonitoria,NEW.id)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `mbitacora` AFTER UPDATE ON `monitorias` FOR EACH ROW UPDATE `bitacora` SET `fechainicio`=NEW.fechainicio,`descriocion`=NEW.descripcion,`fechafin`=NEW.fechafin,`tipomonitoria`=NEW.tipomonitoria WHERE bitacora.idmonitoria = OLD.id
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `presupuesto`
--

CREATE TABLE `presupuesto` (
  `id` int(50) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `presupuesto` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programas`
--

CREATE TABLE `programas` (
  `id` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `programas`
--

INSERT INTO `programas` (`id`, `nombre`) VALUES
(1, 'Administración de Empresas'),
(2, 'Diseño Industrial'),
(3, 'Economía'),
(4, 'Idiomas'),
(5, 'Ingeniería de Sistemas y Telecomunicaciones'),
(6, 'Ingeniería Industrial'),
(7, 'Licenciatura en Educación Religiosa'),
(8, 'Mercadeo'),
(9, 'Negocios Internacionales'),
(10, 'Psicología'),
(11, 'Técnica Profesional en Operación y Logística de Em'),
(12, 'Tecnología en Desarrollo de Software'),
(13, 'Tecnología en Gestión de Calidad'),
(14, 'Tecnología en Gestión de Empresas Agroindustriales'),
(15, 'Tecnologia en Logistica'),
(16, 'Tecnología en Mercadeo'),
(17, 'Colegio Jesús Maria Ormaza'),
(18, 'Colegio San Vicente Hogar'),
(19, 'Colegio Liceo Taller San Miguel'),
(20, 'Colegio Bethlemitas Pereira'),
(21, ' Colegio Los Andes'),
(22, 'Colegio Maria Auxiliadora'),
(23, 'Colegio Santa rosa de lima');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sabado`
--

CREATE TABLE `sabado` (
  `code_monitor` int(20) NOT NULL,
  `horainicio` varchar(50) NOT NULL,
  `horafin` varchar(50) NOT NULL,
  `lugartrabajo` varchar(100) NOT NULL,
  `id` int(20) NOT NULL,
  `comentarios` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sabado`
--

INSERT INTO `sabado` (`code_monitor`, `horainicio`, `horafin`, `lugartrabajo`, `id`, `comentarios`) VALUES
(1088035278, '10:00', '12:30', 'Procesos', 1, NULL),
(1004777862, '8:00', '12:00', 'Bibliocafe', 2, NULL);

--
-- Disparadores `sabado`
--
DELIMITER $$
CREATE TRIGGER `actualiz6` AFTER INSERT ON `sabado` FOR EACH ROW UPDATE `horariosemes` SET `statussabado`=1 WHERE horariosemes.cod_monitor = new.code_monitor
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `elimn6` BEFORE DELETE ON `sabado` FOR EACH ROW UPDATE `horariosemes` SET `statussabado`=0 WHERE horariosemes.cod_monitor = old.code_monitor
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipomonitor`
--

CREATE TABLE `tipomonitor` (
  `id` int(10) NOT NULL,
  `nombre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipomonitor`
--

INSERT INTO `tipomonitor` (`id`, `nombre`) VALUES
(1, 'Monitor'),
(2, 'Practicante');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipouser`
--

CREATE TABLE `tipouser` (
  `id` int(10) NOT NULL,
  `nombre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipouser`
--

INSERT INTO `tipouser` (`id`, `nombre`) VALUES
(1, 'monitor'),
(2, 'administrador'),
(3, 'superadmin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_monitoria`
--

CREATE TABLE `tipo_monitoria` (
  `id` int(20) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `precio` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_monitoria`
--

INSERT INTO `tipo_monitoria` (`id`, `nombre`, `precio`) VALUES
(1, 'Monitoria', 4100),
(2, 'Acción social', 0),
(3, 'Practicas', 3800);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `codigo1` int(20) DEFAULT NULL,
  `codigo2` int(20) DEFAULT NULL,
  `usuario` varchar(50) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `tipo_usuario` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`codigo1`, `codigo2`, `usuario`, `password`, `tipo_usuario`) VALUES
(NULL, 42072926, 'Doris', 'dd9af2a83eeed9080f5e09bb10fc5980', 3),
(NULL, 1088274089, 'JorgeB', '5d24ea19bb156990bcb6815e64de30f0', 3),
(NULL, 42000160, 'Judith', '8554b3bf323ce56bd9d496c89a4378f1', 3),
(NULL, 1087557320, 'LinaF', '2c292c44e66710217e5cc26c5de5e253', 3),
(NULL, 12121212, 'MeliodaSama', '202cb962ac59075b964b07152d234b70', 3),
(NULL, 24742617, 'Patty', '5e7e8ed82cc7bbd20c7d419dfb7bd59c', 3),
(NULL, 25059962, 'Zulma', '607b65f16ec2e4f2d8e89e2f7abd196d', 3),
(1088342892, NULL, 'MateoH', '8949275c2c02aa948eac72c5e735705c', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `viernes`
--

CREATE TABLE `viernes` (
  `code_monitor` int(20) NOT NULL,
  `horainicio` varchar(50) NOT NULL,
  `horafin` varchar(50) NOT NULL,
  `lugartrabajo` varchar(100) NOT NULL,
  `id` int(20) NOT NULL,
  `comentarios` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `viernes`
--

INSERT INTO `viernes` (`code_monitor`, `horainicio`, `horafin`, `lugartrabajo`, `id`, `comentarios`) VALUES
(1004777862, '13:30', '18:00', 'Bibliocafe', 1, '');

--
-- Disparadores `viernes`
--
DELIMITER $$
CREATE TRIGGER `actualiz5` AFTER INSERT ON `viernes` FOR EACH ROW UPDATE `horariosemes` SET `statusvier`=1 WHERE horariosemes.cod_monitor = new.code_monitor
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `elimn5` BEFORE DELETE ON `viernes` FOR EACH ROW UPDATE `horariosemes` SET `statusvier`=0 WHERE horariosemes.cod_monitor = old.code_monitor
$$
DELIMITER ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrativos`
--
ALTER TABLE `administrativos`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `departamento` (`deparatamento`);

--
-- Indices de la tabla `bitacora`
--
ALTER TABLE `bitacora`
  ADD PRIMARY KEY (`id`),
  ADD KEY `monitore` (`monitore`),
  ADD KEY `tipomonitoria` (`tipomonitoria`),
  ADD KEY `idmonitoria` (`idmonitoria`);

--
-- Indices de la tabla `dependecia_monitores`
--
ALTER TABLE `dependecia_monitores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `horariosemes`
--
ALTER TABLE `horariosemes`
  ADD PRIMARY KEY (`cod_monitor`),
  ADD KEY `cod_monitor` (`cod_monitor`);

--
-- Indices de la tabla `jueves`
--
ALTER TABLE `jueves`
  ADD PRIMARY KEY (`id`),
  ADD KEY `code_monitor` (`code_monitor`);

--
-- Indices de la tabla `lunes`
--
ALTER TABLE `lunes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `code_monitor` (`code_monitor`),
  ADD KEY `code_monitor_2` (`code_monitor`);

--
-- Indices de la tabla `martes`
--
ALTER TABLE `martes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `code_monitor` (`code_monitor`);

--
-- Indices de la tabla `miercoles`
--
ALTER TABLE `miercoles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `code_monitor` (`code_monitor`);

--
-- Indices de la tabla `monitores`
--
ALTER TABLE `monitores`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `tipo_monitor` (`tipo_monitor`),
  ADD KEY `dependencia` (`dependencia`),
  ADD KEY `carrera` (`carrera`);

--
-- Indices de la tabla `monitorias`
--
ALTER TABLE `monitorias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `codigo_monitor` (`codigo_monitor`),
  ADD KEY `usario_registro` (`usario_inicio`),
  ADD KEY `usuario_fin` (`usuario_fin`),
  ADD KEY `tipomonitoria` (`tipomonitoria`);

--
-- Indices de la tabla `presupuesto`
--
ALTER TABLE `presupuesto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `programas`
--
ALTER TABLE `programas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sabado`
--
ALTER TABLE `sabado`
  ADD PRIMARY KEY (`id`),
  ADD KEY `code_monitor` (`code_monitor`);

--
-- Indices de la tabla `tipomonitor`
--
ALTER TABLE `tipomonitor`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipouser`
--
ALTER TABLE `tipouser`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_monitoria`
--
ALTER TABLE `tipo_monitoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD KEY `tipo_usuario` (`tipo_usuario`),
  ADD KEY `codigo` (`codigo1`),
  ADD KEY `codigo_admin` (`codigo2`);

--
-- Indices de la tabla `viernes`
--
ALTER TABLE `viernes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `code_monitor` (`code_monitor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bitacora`
--
ALTER TABLE `bitacora`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `dependecia_monitores`
--
ALTER TABLE `dependecia_monitores`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `jueves`
--
ALTER TABLE `jueves`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `lunes`
--
ALTER TABLE `lunes`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `martes`
--
ALTER TABLE `martes`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `miercoles`
--
ALTER TABLE `miercoles`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `monitorias`
--
ALTER TABLE `monitorias`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `presupuesto`
--
ALTER TABLE `presupuesto`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `programas`
--
ALTER TABLE `programas`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `sabado`
--
ALTER TABLE `sabado`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipomonitor`
--
ALTER TABLE `tipomonitor`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipouser`
--
ALTER TABLE `tipouser`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tipo_monitoria`
--
ALTER TABLE `tipo_monitoria`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `viernes`
--
ALTER TABLE `viernes`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administrativos`
--
ALTER TABLE `administrativos`
  ADD CONSTRAINT `administrativos_ibfk_1` FOREIGN KEY (`deparatamento`) REFERENCES `dependecia_monitores` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `bitacora`
--
ALTER TABLE `bitacora`
  ADD CONSTRAINT `bitacora_ibfk_1` FOREIGN KEY (`monitore`) REFERENCES `monitores` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bitacora_ibfk_2` FOREIGN KEY (`tipomonitoria`) REFERENCES `tipo_monitoria` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bitacora_ibfk_3` FOREIGN KEY (`idmonitoria`) REFERENCES `monitorias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `horariosemes`
--
ALTER TABLE `horariosemes`
  ADD CONSTRAINT `horariosemes_ibfk_1` FOREIGN KEY (`cod_monitor`) REFERENCES `monitores` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `jueves`
--
ALTER TABLE `jueves`
  ADD CONSTRAINT `jueves_ibfk_1` FOREIGN KEY (`code_monitor`) REFERENCES `monitores` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `lunes`
--
ALTER TABLE `lunes`
  ADD CONSTRAINT `lunes_ibfk_1` FOREIGN KEY (`code_monitor`) REFERENCES `monitores` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `martes`
--
ALTER TABLE `martes`
  ADD CONSTRAINT `martes_ibfk_1` FOREIGN KEY (`code_monitor`) REFERENCES `monitores` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `miercoles`
--
ALTER TABLE `miercoles`
  ADD CONSTRAINT `miercoles_ibfk_1` FOREIGN KEY (`code_monitor`) REFERENCES `monitores` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `monitores`
--
ALTER TABLE `monitores`
  ADD CONSTRAINT `monitores_ibfk_1` FOREIGN KEY (`tipo_monitor`) REFERENCES `tipomonitor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `monitores_ibfk_2` FOREIGN KEY (`dependencia`) REFERENCES `dependecia_monitores` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `monitores_ibfk_3` FOREIGN KEY (`carrera`) REFERENCES `programas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `monitorias`
--
ALTER TABLE `monitorias`
  ADD CONSTRAINT `monitorias_ibfk_1` FOREIGN KEY (`codigo_monitor`) REFERENCES `monitores` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `monitorias_ibfk_2` FOREIGN KEY (`usario_inicio`) REFERENCES `administrativos` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `monitorias_ibfk_3` FOREIGN KEY (`usuario_fin`) REFERENCES `administrativos` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `monitorias_ibfk_4` FOREIGN KEY (`tipomonitoria`) REFERENCES `tipo_monitoria` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `sabado`
--
ALTER TABLE `sabado`
  ADD CONSTRAINT `sabado_ibfk_1` FOREIGN KEY (`code_monitor`) REFERENCES `monitores` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`codigo2`) REFERENCES `administrativos` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`codigo1`) REFERENCES `monitores` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuarios_ibfk_3` FOREIGN KEY (`tipo_usuario`) REFERENCES `tipouser` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `viernes`
--
ALTER TABLE `viernes`
  ADD CONSTRAINT `viernes_ibfk_1` FOREIGN KEY (`code_monitor`) REFERENCES `monitores` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
