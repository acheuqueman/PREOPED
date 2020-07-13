-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 13-07-2020 a las 20:13:27
-- Versión del servidor: 5.7.27-0ubuntu0.18.04.1
-- Versión de PHP: 7.2.19-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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

CREATE TABLE `alumno` (
  `id` int(11) NOT NULL,
  `anio_ingreso` int(11) NOT NULL,
  `cud` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

CREATE TABLE `alumno_carrera` (
  `id` int(11) NOT NULL,
  `id_alumno` int(11) NOT NULL,
  `id_carrera` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `alumno_carrera`
--

INSERT INTO `alumno_carrera` (`id`, `id_alumno`, `id_carrera`) VALUES
(1, 12, 3),
(2, 20, 3),
(3, 20, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno_diagnostico`
--

CREATE TABLE `alumno_diagnostico` (
  `id` int(11) NOT NULL,
  `profesional_diagnostico` varchar(50) NOT NULL,
  `id_diagnostico` int(11) NOT NULL,
  `id_alumno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

CREATE TABLE `aprueba` (
  `id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `calificacion` int(11) NOT NULL,
  `id_asignatura` int(11) NOT NULL,
  `id_alumno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignatura`
--

CREATE TABLE `asignatura` (
  `id` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

CREATE TABLE `carrera` (
  `id` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

CREATE TABLE `carrera_asignatura` (
  `id` int(11) NOT NULL,
  `id_asignatura` int(11) NOT NULL,
  `id_carrera` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

CREATE TABLE `cursa` (
  `id` int(11) NOT NULL,
  `periodo` varchar(20) NOT NULL,
  `anio` int(11) NOT NULL,
  `evaluacion` varchar(30) NOT NULL,
  `id_alumno` int(11) NOT NULL,
  `id_asignatura` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diagnostico`
--

CREATE TABLE `diagnostico` (
  `id` int(11) NOT NULL,
  `diagnostico` varchar(40) NOT NULL,
  `tipo_discapacidad` varchar(40) NOT NULL,
  `descripcion` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

CREATE TABLE `entrevista` (
  `id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `entrevistador` varchar(40) NOT NULL,
  `conclusiones` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrevista_alumno`
--

CREATE TABLE `entrevista_alumno` (
  `id` int(11) NOT NULL,
  `id_alumno` int(11) NOT NULL,
  `id_entrevista` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `familiar`
--

CREATE TABLE `familiar` (
  `id` int(11) NOT NULL,
  `id_alumno` int(11) NOT NULL,
  `id_persona` int(11) NOT NULL,
  `parentesco` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `familiar`
--

INSERT INTO `familiar` (`id`, `id_alumno`, `id_persona`, `parentesco`) VALUES
(1, 12, 13, 'Padre');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `id` int(11) NOT NULL,
  `nombre` varchar(36) NOT NULL,
  `dni` int(11) NOT NULL,
  `email` varchar(36) NOT NULL,
  `telefono` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
CREATE TABLE `vwalumno` (
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
CREATE TABLE `vwalumno_carrera` (
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
CREATE TABLE `vwalumno_diagnostico` (
`id` int(11)
,`profesional_diagnostico` varchar(50)
,`id_diagnostico` int(11)
,`id_alumno` int(11)
,`diagnostico` varchar(40)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vwcarrera_asignatura`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vwcarrera_asignatura` (
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
CREATE TABLE `vwfamiliar` (
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

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vwalumno`  AS  select `persona`.`id` AS `id`,`persona`.`nombre` AS `nombre`,`persona`.`dni` AS `dni`,`persona`.`email` AS `email`,`persona`.`telefono` AS `telefono`,`alumno`.`anio_ingreso` AS `anio_ingreso`,`alumno`.`cud` AS `cud` from (`persona` join `alumno` on((`persona`.`id` = `alumno`.`id`))) order by `persona`.`nombre` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vwalumno_carrera`
--
DROP TABLE IF EXISTS `vwalumno_carrera`;

CREATE ALGORITHM=UNDEFINED DEFINER=`preoped`@`localhost` SQL SECURITY DEFINER VIEW `vwalumno_carrera`  AS  select `AC`.`id` AS `id`,`AC`.`id_alumno` AS `id_alumno`,`AC`.`id_carrera` AS `id_carrera`,`C`.`nombre` AS `nombre` from (`alumno_carrera` `AC` join `carrera` `C`) where (`AC`.`id_carrera` = `C`.`id`) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vwalumno_diagnostico`
--
DROP TABLE IF EXISTS `vwalumno_diagnostico`;

CREATE ALGORITHM=UNDEFINED DEFINER=`preoped`@`%` SQL SECURITY DEFINER VIEW `vwalumno_diagnostico`  AS  select `AD`.`id` AS `id`,`AD`.`profesional_diagnostico` AS `profesional_diagnostico`,`AD`.`id_diagnostico` AS `id_diagnostico`,`AD`.`id_alumno` AS `id_alumno`,`D`.`diagnostico` AS `diagnostico` from (`diagnostico` `D` join `alumno_diagnostico` `AD`) where (`D`.`id` = `AD`.`id_diagnostico`) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vwcarrera_asignatura`
--
DROP TABLE IF EXISTS `vwcarrera_asignatura`;

CREATE ALGORITHM=UNDEFINED DEFINER=`preoped`@`localhost` SQL SECURITY DEFINER VIEW `vwcarrera_asignatura`  AS  select `C`.`nombre` AS `nombreCarrera`,`A`.`nombre` AS `nombreAsignatura`,`CA`.`id` AS `id`,`CA`.`id_asignatura` AS `id_asignatura`,`CA`.`id_carrera` AS `id_carrera` from ((`carrera` `C` join `asignatura` `A`) join `carrera_asignatura` `CA`) where ((`CA`.`id_asignatura` = `A`.`id`) and (`CA`.`id_carrera` = `C`.`id`)) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vwfamiliar`
--
DROP TABLE IF EXISTS `vwfamiliar`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vwfamiliar`  AS  select `F`.`id` AS `id`,`F`.`id_alumno` AS `id_alumno`,`F`.`id_persona` AS `id_persona`,`F`.`parentesco` AS `parentesco`,`P`.`nombre` AS `nombre` from (`familiar` `F` join `persona` `P`) where (`F`.`id_persona` = `P`.`id`) ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `alumno_carrera`
--
ALTER TABLE `alumno_carrera`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_alumno_carrera_alumno_idx` (`id_alumno`),
  ADD KEY `fk_alumno_carrera_carrera_idx` (`id_carrera`);

--
-- Indices de la tabla `alumno_diagnostico`
--
ALTER TABLE `alumno_diagnostico`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_alumno_dianostico_alumno_idx` (`id_alumno`),
  ADD KEY `fk_alumno_diagnostico_diagnostico_idx` (`id_diagnostico`);

--
-- Indices de la tabla `aprueba`
--
ALTER TABLE `aprueba`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_aprueba_asignatura_idx` (`id_asignatura`),
  ADD KEY `fk_aprueba_alumno_idx` (`id_alumno`);

--
-- Indices de la tabla `asignatura`
--
ALTER TABLE `asignatura`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `carrera`
--
ALTER TABLE `carrera`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `carrera_asignatura`
--
ALTER TABLE `carrera_asignatura`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_carrera_asignatura_asignatura_idx` (`id_asignatura`),
  ADD KEY `fk_carrera_asignatura_carrera_idx` (`id_carrera`);

--
-- Indices de la tabla `cursa`
--
ALTER TABLE `cursa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cursa_asignatura_idx` (`id_asignatura`),
  ADD KEY `fk_cursa_alumno_idx` (`id_alumno`);

--
-- Indices de la tabla `diagnostico`
--
ALTER TABLE `diagnostico`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `entrevista`
--
ALTER TABLE `entrevista`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `entrevista_alumno`
--
ALTER TABLE `entrevista_alumno`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_entrevista_alumno_alumno_idx` (`id_alumno`),
  ADD KEY `fk_entrevista_alumno_entrevista_idx` (`id_entrevista`);

--
-- Indices de la tabla `familiar`
--
ALTER TABLE `familiar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_familiar_alumno_idx` (`id_alumno`),
  ADD KEY `fk_familiar_persona_idx` (`id_persona`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT de la tabla `alumno_carrera`
--
ALTER TABLE `alumno_carrera`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `alumno_diagnostico`
--
ALTER TABLE `alumno_diagnostico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT de la tabla `aprueba`
--
ALTER TABLE `aprueba`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `asignatura`
--
ALTER TABLE `asignatura`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `carrera`
--
ALTER TABLE `carrera`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `carrera_asignatura`
--
ALTER TABLE `carrera_asignatura`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `cursa`
--
ALTER TABLE `cursa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `diagnostico`
--
ALTER TABLE `diagnostico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT de la tabla `entrevista`
--
ALTER TABLE `entrevista`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `entrevista_alumno`
--
ALTER TABLE `entrevista_alumno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `familiar`
--
ALTER TABLE `familiar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
