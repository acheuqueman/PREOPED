-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 24-11-2019 a las 16:18:31
-- Versión del servidor: 5.7.27-0ubuntu0.18.04.1
-- Versión de PHP: 7.2.24-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `SistemaPreoped`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Alumno`
--

CREATE TABLE `Alumno` (
  `id` int(10) NOT NULL,
  `anio_ingreso` int(5) NOT NULL,
  `cud` int(10) NOT NULL,
  `id_persona` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Alumno`
--

INSERT INTO `Alumno` (`id`, `anio_ingreso`, `cud`, `id_persona`) VALUES
(1, 2019, 23456575, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Alumno_Diagnostico`
--

CREATE TABLE `Alumno_Diagnostico` (
  `id` int(10) NOT NULL,
  `profesional_diagnostico` varchar(50) NOT NULL,
  `id_diagnostico` int(10) NOT NULL,
  `id_alumno` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Aprueba`
--

CREATE TABLE `Aprueba` (
  `id` int(10) NOT NULL,
  `fecha` date NOT NULL,
  `calificacion` int(10) NOT NULL,
  `id_asignatura` int(10) NOT NULL,
  `id_alumno` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Asignatura`
--

CREATE TABLE `Asignatura` (
  `id` int(10) NOT NULL,
  `nombre` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Carrera`
--

CREATE TABLE `Carrera` (
  `id` int(10) NOT NULL,
  `nombre` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Carrera`
--

INSERT INTO `Carrera` (`id`, `nombre`) VALUES
(1, 'dfghjkjghfdsdfghjkjhgfdfghjkjhgf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Carrera_Asignatura`
--

CREATE TABLE `Carrera_Asignatura` (
  `id` int(10) NOT NULL,
  `id_asignatura` int(10) NOT NULL,
  `id_carrera` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Carrera_Asignatura`
--

INSERT INTO `Carrera_Asignatura` (`id`, `id_asignatura`, `id_carrera`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Cursa`
--

CREATE TABLE `Cursa` (
  `id` int(10) NOT NULL,
  `periodo` varchar(20) NOT NULL,
  `anio` int(10) NOT NULL,
  `evaluacion` varchar(30) NOT NULL,
  `id_alumno` int(10) NOT NULL,
  `id_asignatura` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Cursa`
--

INSERT INTO `Cursa` (`id`, `periodo`, `anio`, `evaluacion`, `id_alumno`, `id_asignatura`) VALUES
(1, 'Primer Cuatrimestre', 2345, 'Bien', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Diagnostico`
--

CREATE TABLE `Diagnostico` (
  `id` int(10) NOT NULL,
  `diagnostico` varchar(40) NOT NULL,
  `tipo_discapacidad` varchar(40) NOT NULL,
  `descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Entrevista`
--

CREATE TABLE `Entrevista` (
  `id` int(10) NOT NULL,
  `fecha` date NOT NULL,
  `entrevistador` varchar(40) NOT NULL,
  `conclusiones` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Entrevista_Alumno`
--

CREATE TABLE `Entrevista_Alumno` (
  `id` int(10) NOT NULL,
  `id_alumno` int(10) NOT NULL,
  `id_entrevista` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Familiar`
--

CREATE TABLE `Familiar` (
  `id` int(10) NOT NULL,
  `parentesco` varchar(20) NOT NULL,
  `id_persona` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Familiar`
--

INSERT INTO `Familiar` (`id`, `parentesco`, `id_persona`) VALUES
(1, 'Madre', 2),
(2, 'Padre', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Familiar_Alumno`
--

CREATE TABLE `Familiar_Alumno` (
  `id` int(10) NOT NULL,
  `id_alumno` int(10) NOT NULL,
  `id_familiar` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Familiar_Alumno`
--

INSERT INTO `Familiar_Alumno` (`id`, `id_alumno`, `id_familiar`) VALUES
(1, 1, 1),
(2, 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Persona`
--

CREATE TABLE `Persona` (
  `id` int(8) NOT NULL,
  `nombre` varchar(36) NOT NULL,
  `dni` int(9) NOT NULL,
  `email` varchar(36) NOT NULL,
  `telefono` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Persona`
--

INSERT INTO `Persona` (`id`, `nombre`, `dni`, `email`, `telefono`) VALUES
(1, 'Jorge', 23456789, '34343554', 665656565),
(2, 'Norma', 45678904, '343553', 76767688),
(3, 'Diego', 45678543, '3453534', 7890405);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Alumno`
--
ALTER TABLE `Alumno`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `Alumno_Diagnostico`
--
ALTER TABLE `Alumno_Diagnostico`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `Aprueba`
--
ALTER TABLE `Aprueba`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `Asignatura`
--
ALTER TABLE `Asignatura`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `Carrera`
--
ALTER TABLE `Carrera`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `Carrera_Asignatura`
--
ALTER TABLE `Carrera_Asignatura`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `Cursa`
--
ALTER TABLE `Cursa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `Diagnostico`
--
ALTER TABLE `Diagnostico`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `Entrevista`
--
ALTER TABLE `Entrevista`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `Entrevista_Alumno`
--
ALTER TABLE `Entrevista_Alumno`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `Familiar`
--
ALTER TABLE `Familiar`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `Familiar_Alumno`
--
ALTER TABLE `Familiar_Alumno`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `Persona`
--
ALTER TABLE `Persona`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Alumno`
--
ALTER TABLE `Alumno`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `Alumno_Diagnostico`
--
ALTER TABLE `Alumno_Diagnostico`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `Aprueba`
--
ALTER TABLE `Aprueba`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `Asignatura`
--
ALTER TABLE `Asignatura`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `Carrera`
--
ALTER TABLE `Carrera`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `Carrera_Asignatura`
--
ALTER TABLE `Carrera_Asignatura`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `Cursa`
--
ALTER TABLE `Cursa`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `Diagnostico`
--
ALTER TABLE `Diagnostico`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `Entrevista`
--
ALTER TABLE `Entrevista`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `Entrevista_Alumno`
--
ALTER TABLE `Entrevista_Alumno`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `Familiar`
--
ALTER TABLE `Familiar`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `Familiar_Alumno`
--
ALTER TABLE `Familiar_Alumno`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `Persona`
--
ALTER TABLE `Persona`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
