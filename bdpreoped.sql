-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 14-07-2020 a las 00:43:23
-- Versión del servidor: 10.4.10-MariaDB
-- Versión de PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `preoped`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

DROP TABLE IF EXISTS `alumno`;
CREATE TABLE IF NOT EXISTS `alumno` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `anio_ingreso` int(11) NOT NULL,
  `cud` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`id`, `anio_ingreso`, `cud`) VALUES
(12, 2008, 1234),
(13, 2005, 320165),
(14, 2020, 32156),
(15, 2020, 32156),
(16, 2020, 32156),
(17, 2020, 32156),
(18, 2020, 32156),
(19, 3, 2),
(20, 3, 2),
(21, 2002, 2005362),
(22, 3, 2),
(23, 3, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno_carrera`
--

DROP TABLE IF EXISTS `alumno_carrera`;
CREATE TABLE IF NOT EXISTS `alumno_carrera` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_alumno` int(11) NOT NULL,
  `id_carrera` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_alumno_carrera_alumno_idx` (`id_alumno`),
  KEY `fk_alumno_carrera_carrera_idx` (`id_carrera`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `alumno_carrera`
--

INSERT INTO `alumno_carrera` (`id`, `id_alumno`, `id_carrera`) VALUES
(8, 20, 3),
(9, 20, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno_diagnostico`
--

DROP TABLE IF EXISTS `alumno_diagnostico`;
CREATE TABLE IF NOT EXISTS `alumno_diagnostico` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `profesional_diagnostico` varchar(50) NOT NULL,
  `id_diagnostico` int(11) NOT NULL,
  `id_alumno` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_alumno_dianostico_alumno_idx` (`id_alumno`),
  KEY `fk_alumno_diagnostico_diagnostico_idx` (`id_diagnostico`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `alumno_diagnostico`
--

INSERT INTO `alumno_diagnostico` (`id`, `profesional_diagnostico`, `id_diagnostico`, `id_alumno`) VALUES
(3, 'Eder', 1, 13),
(4, 'ProDAT Preoped', 1, 14),
(5, 'ProDAT Preoped', 1, 15),
(6, 'ProDAT Preoped', 1, 16),
(7, 'ProDAT Preoped', 1, 17),
(8, 'ProDAT Preoped', 1, 18),
(10, 'Dr. Juan Silva Saldivar', 16, 14),
(11, 'Dr. Juan Silva Saldivar', 16, 14),
(17, 'Dr. Juan Silva Saldivar', 16, 12),
(18, 'Dr. Juan Silva Saldivar', 17, 12),
(19, 'ProDAT Preoped', 1, 22),
(20, 'ProDAT Preoped', 1, 23);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aprueba`
--

DROP TABLE IF EXISTS `aprueba`;
CREATE TABLE IF NOT EXISTS `aprueba` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `calificacion` int(11) NOT NULL,
  `id_asignatura` int(11) NOT NULL,
  `id_alumno` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_aprueba_asignatura_idx` (`id_asignatura`),
  KEY `fk_aprueba_alumno_idx` (`id_alumno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignatura`
--

DROP TABLE IF EXISTS `asignatura`;
CREATE TABLE IF NOT EXISTS `asignatura` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `asignatura`
--

INSERT INTO `asignatura` (`id`, `nombre`) VALUES
(1, 'Bases de Datos'),
(2, 'Aspectos Profesionales');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera`
--

DROP TABLE IF EXISTS `carrera`;
CREATE TABLE IF NOT EXISTS `carrera` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `carrera`
--

INSERT INTO `carrera` (`id`, `nombre`) VALUES
(3, 'Licenciatura en Sistemas'),
(4, 'Analista de Sistemas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera_asignatura`
--

DROP TABLE IF EXISTS `carrera_asignatura`;
CREATE TABLE IF NOT EXISTS `carrera_asignatura` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_asignatura` int(11) NOT NULL,
  `id_carrera` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_carrera_asignatura_asignatura_idx` (`id_asignatura`),
  KEY `fk_carrera_asignatura_carrera_idx` (`id_carrera`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `carrera_asignatura`
--

INSERT INTO `carrera_asignatura` (`id`, `id_asignatura`, `id_carrera`) VALUES
(1, 1, 3),
(2, 1, 4),
(3, 2, 3),
(4, 2, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursa`
--

DROP TABLE IF EXISTS `cursa`;
CREATE TABLE IF NOT EXISTS `cursa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `periodo` varchar(20) NOT NULL,
  `anio` int(11) NOT NULL,
  `evaluacion` varchar(30) NOT NULL,
  `id_alumno` int(11) NOT NULL,
  `id_asignatura` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cursa_asignatura_idx` (`id_asignatura`),
  KEY `fk_cursa_alumno_idx` (`id_alumno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diagnostico`
--

DROP TABLE IF EXISTS `diagnostico`;
CREATE TABLE IF NOT EXISTS `diagnostico` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `diagnostico` varchar(40) NOT NULL,
  `tipo_discapacidad` varchar(40) NOT NULL,
  `descripcion` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `diagnostico`
--

INSERT INTO `diagnostico` (`id`, `diagnostico`, `tipo_discapacidad`, `descripcion`) VALUES
(1, 'Ceguera', 'Visual', 'La ceguera es una diversidad funcional de tipo sensorial que consiste en la pÃ©rdida total o parcial del sentido de la vista.'),
(16, 'Daltonismo', 'Visual', 'El daltonismo es una alteraciÃ³n de origen genÃ©tico que afecta a la capacidad de distinguir los colores.'),
(17, 'Espasticidad', 'Motriz', 'Aumento exagerado del tono muscular (hipertonÃ­a), por lo que hay movimientos exagerados y poco coordinados.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrevista`
--

DROP TABLE IF EXISTS `entrevista`;
CREATE TABLE IF NOT EXISTS `entrevista` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `entrevistador` varchar(40) NOT NULL,
  `conclusiones` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `entrevista`
--

INSERT INTO `entrevista` (`id`, `fecha`, `entrevistador`, `conclusiones`) VALUES
(1, '2020-07-14', 'entrevistador1', 'conclucion1'),
(2, '1241-03-21', 'entrevistador2', 'conclucion2'),
(3, '2010-03-12', 'entrevistador3', 'conclucion3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrevista_alumno`
--

DROP TABLE IF EXISTS `entrevista_alumno`;
CREATE TABLE IF NOT EXISTS `entrevista_alumno` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_alumno` int(11) NOT NULL,
  `id_entrevista` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_entrevista_alumno_alumno_idx` (`id_alumno`),
  KEY `fk_entrevista_alumno_entrevista_idx` (`id_entrevista`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `entrevista_alumno`
--

INSERT INTO `entrevista_alumno` (`id`, `id_alumno`, `id_entrevista`) VALUES
(1, 12, 1),
(2, 20, 2),
(3, 20, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `familiar`
--

DROP TABLE IF EXISTS `familiar`;
CREATE TABLE IF NOT EXISTS `familiar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_alumno` int(11) NOT NULL,
  `id_persona` int(11) NOT NULL,
  `parentesco` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_familiar_alumno_idx` (`id_alumno`),
  KEY `fk_familiar_persona_idx` (`id_persona`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `familiar`
--

INSERT INTO `familiar` (`id`, `id_alumno`, `id_persona`, `parentesco`) VALUES
(1, 12, 13, 'Padre'),
(4, 20, 20, 'asd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

DROP TABLE IF EXISTS `persona`;
CREATE TABLE IF NOT EXISTS `persona` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(36) NOT NULL,
  `dni` int(11) NOT NULL,
  `email` varchar(36) NOT NULL,
  `telefono` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id`, `nombre`, `dni`, `email`, `telefono`) VALUES
(12, 'Eder dos Santos', 12345678, 'esantos@uarg.unpa.edu.ar', 2966),
(13, 'Guillermo Rodriguez', 12345698, 'grodriguez@unpa', 123456),
(14, 'Franco', 12345698, 'jperez@uarg', 654987),
(15, 'Facundo', 12345698, 'jperez@uarg', 654987),
(16, 'Andrea', 12345698, 'jperez@uarg', 654987),
(17, 'Juan', 12345698, 'jperez@uarg', 654987),
(18, 'Pedro', 12345698, 'jperez@uarg', 654987),
(19, 'Maria', 4, 'bacteriaut@gmail.com', 654987),
(20, 'Adriana', 4, 'bacteriaut@gmail.com', 654987),
(21, 'Maykel', 19681620, 'mimailesmio@com', 654987),
(22, 'Antonia', 4, 'bacteriaut@gmail.com', 654987),
(23, 'Ivana', 4, 'bacteriaut@gmail.com', 654987);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vwalumno`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `vwalumno`;
CREATE TABLE IF NOT EXISTS `vwalumno` (
`id` int(11)
,`nombre` varchar(36)
,`dni` int(11)
,`email` varchar(36)
,`telefono` int(11)
,`anio_ingreso` int(11)
,`cud` int(11)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vwalumno_carrera`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `vwalumno_carrera`;
CREATE TABLE IF NOT EXISTS `vwalumno_carrera` (
`id` int(11)
,`id_alumno` int(11)
,`id_carrera` int(11)
,`nombre` varchar(40)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vwalumno_diagnostico`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `vwalumno_diagnostico`;
CREATE TABLE IF NOT EXISTS `vwalumno_diagnostico` (
`id` int(11)
,`profesional_diagnostico` varchar(50)
,`id_diagnostico` int(11)
,`id_alumno` int(11)
,`diagnostico` varchar(40)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vwalumno_entrevista`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `vwalumno_entrevista`;
CREATE TABLE IF NOT EXISTS `vwalumno_entrevista` (
`id` int(11)
,`id_alumno` int(11)
,`id_entrevista` int(11)
,`entrevistador` varchar(40)
,`fecha` date
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vwcarrera_asignatura`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `vwcarrera_asignatura`;
CREATE TABLE IF NOT EXISTS `vwcarrera_asignatura` (
`nombreCarrera` varchar(40)
,`nombreAsignatura` varchar(40)
,`id` int(11)
,`id_asignatura` int(11)
,`id_carrera` int(11)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vwfamiliar`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `vwfamiliar`;
CREATE TABLE IF NOT EXISTS `vwfamiliar` (
`id` int(11)
,`id_alumno` int(11)
,`id_persona` int(11)
,`parentesco` varchar(45)
,`nombre` varchar(36)
);

-- --------------------------------------------------------

--
-- Estructura para la vista `vwalumno`
--
DROP TABLE IF EXISTS `vwalumno`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vwalumno`  AS  select `persona`.`id` AS `id`,`persona`.`nombre` AS `nombre`,`persona`.`dni` AS `dni`,`persona`.`email` AS `email`,`persona`.`telefono` AS `telefono`,`alumno`.`anio_ingreso` AS `anio_ingreso`,`alumno`.`cud` AS `cud` from (`persona` join `alumno` on(`persona`.`id` = `alumno`.`id`)) order by `persona`.`nombre` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vwalumno_carrera`
--
DROP TABLE IF EXISTS `vwalumno_carrera`;

CREATE ALGORITHM=UNDEFINED DEFINER=`preoped`@`localhost` SQL SECURITY DEFINER VIEW `vwalumno_carrera`  AS  select `ac`.`id` AS `id`,`ac`.`id_alumno` AS `id_alumno`,`ac`.`id_carrera` AS `id_carrera`,`c`.`nombre` AS `nombre` from (`alumno_carrera` `ac` join `carrera` `c`) where `ac`.`id_carrera` = `c`.`id` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vwalumno_diagnostico`
--
DROP TABLE IF EXISTS `vwalumno_diagnostico`;

CREATE ALGORITHM=UNDEFINED DEFINER=`preoped`@`%` SQL SECURITY DEFINER VIEW `vwalumno_diagnostico`  AS  select `ad`.`id` AS `id`,`ad`.`profesional_diagnostico` AS `profesional_diagnostico`,`ad`.`id_diagnostico` AS `id_diagnostico`,`ad`.`id_alumno` AS `id_alumno`,`d`.`diagnostico` AS `diagnostico` from (`diagnostico` `d` join `alumno_diagnostico` `ad`) where `d`.`id` = `ad`.`id_diagnostico` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vwalumno_entrevista`
--
DROP TABLE IF EXISTS `vwalumno_entrevista`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vwalumno_entrevista`  AS  select `ae`.`id` AS `id`,`ae`.`id_alumno` AS `id_alumno`,`ae`.`id_entrevista` AS `id_entrevista`,`e`.`entrevistador` AS `entrevistador`,`e`.`fecha` AS `fecha` from (`entrevista_alumno` `ae` join `entrevista` `e`) where `ae`.`id_entrevista` = `e`.`id` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vwcarrera_asignatura`
--
DROP TABLE IF EXISTS `vwcarrera_asignatura`;

CREATE ALGORITHM=UNDEFINED DEFINER=`preoped`@`localhost` SQL SECURITY DEFINER VIEW `vwcarrera_asignatura`  AS  select `c`.`nombre` AS `nombreCarrera`,`a`.`nombre` AS `nombreAsignatura`,`ca`.`id` AS `id`,`ca`.`id_asignatura` AS `id_asignatura`,`ca`.`id_carrera` AS `id_carrera` from ((`carrera` `c` join `asignatura` `a`) join `carrera_asignatura` `ca`) where `ca`.`id_asignatura` = `a`.`id` and `ca`.`id_carrera` = `c`.`id` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vwfamiliar`
--
DROP TABLE IF EXISTS `vwfamiliar`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vwfamiliar`  AS  select `f`.`id` AS `id`,`f`.`id_alumno` AS `id_alumno`,`f`.`id_persona` AS `id_persona`,`f`.`parentesco` AS `parentesco`,`p`.`nombre` AS `nombre` from (`familiar` `f` join `persona` `p`) where `f`.`id_persona` = `p`.`id` ;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD CONSTRAINT `fk_alumno_persona` FOREIGN KEY (`id`) REFERENCES `persona` (`id`);

--
-- Filtros para la tabla `alumno_carrera`
--
ALTER TABLE `alumno_carrera`
  ADD CONSTRAINT `fk_alumno_carrera_alumno` FOREIGN KEY (`id_alumno`) REFERENCES `alumno` (`id`),
  ADD CONSTRAINT `fk_alumno_carrera_carrera` FOREIGN KEY (`id_carrera`) REFERENCES `carrera` (`id`);

--
-- Filtros para la tabla `alumno_diagnostico`
--
ALTER TABLE `alumno_diagnostico`
  ADD CONSTRAINT `fk_alumno_diagnostico_diagnostico` FOREIGN KEY (`id_diagnostico`) REFERENCES `diagnostico` (`id`),
  ADD CONSTRAINT `fk_alumno_dianostico_alumno` FOREIGN KEY (`id_alumno`) REFERENCES `alumno` (`id`);

--
-- Filtros para la tabla `aprueba`
--
ALTER TABLE `aprueba`
  ADD CONSTRAINT `fk_aprueba_alumno` FOREIGN KEY (`id_alumno`) REFERENCES `alumno` (`id`),
  ADD CONSTRAINT `fk_aprueba_asignatura` FOREIGN KEY (`id_asignatura`) REFERENCES `asignatura` (`id`);

--
-- Filtros para la tabla `carrera_asignatura`
--
ALTER TABLE `carrera_asignatura`
  ADD CONSTRAINT `fk_carrera_asignatura_asignatura` FOREIGN KEY (`id_asignatura`) REFERENCES `asignatura` (`id`),
  ADD CONSTRAINT `fk_carrera_asignatura_carrera` FOREIGN KEY (`id_carrera`) REFERENCES `carrera` (`id`);

--
-- Filtros para la tabla `cursa`
--
ALTER TABLE `cursa`
  ADD CONSTRAINT `fk_cursa_alumno` FOREIGN KEY (`id_alumno`) REFERENCES `alumno` (`id`),
  ADD CONSTRAINT `fk_cursa_asignatura` FOREIGN KEY (`id_asignatura`) REFERENCES `asignatura` (`id`);

--
-- Filtros para la tabla `entrevista_alumno`
--
ALTER TABLE `entrevista_alumno`
  ADD CONSTRAINT `fk_entrevista_alumno_alumno` FOREIGN KEY (`id_alumno`) REFERENCES `alumno` (`id`),
  ADD CONSTRAINT `fk_entrevista_alumno_entrevista` FOREIGN KEY (`id_entrevista`) REFERENCES `entrevista` (`id`);

--
-- Filtros para la tabla `familiar`
--
ALTER TABLE `familiar`
  ADD CONSTRAINT `fk_familiar_alumno` FOREIGN KEY (`id_alumno`) REFERENCES `alumno` (`id`),
  ADD CONSTRAINT `fk_familiar_persona` FOREIGN KEY (`id_persona`) REFERENCES `persona` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
