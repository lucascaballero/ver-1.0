-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2+deb7u1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 18-05-2016 a las 12:30:31
-- Versión del servidor: 5.5.41
-- Versión de PHP: 5.4.41-0+deb7u1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `lucascaballero`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

CREATE TABLE IF NOT EXISTS `materia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `profesorasignado` int(11) NOT NULL,
  `horario` varchar(30) NOT NULL,
  `dias` varchar(30) NOT NULL,
  `salon` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `materia_profesor_fk` (`profesorasignado`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `materia`
--

INSERT INTO `materia` (`id`, `nombre`, `profesorasignado`, `horario`, `dias`, `salon`) VALUES
(1, 'MATERIA', 13, 'CHOCHOMIL', 'TODOS', 'CUALQUIERA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notas`
--

CREATE TABLE IF NOT EXISTS `notas` (
  `id` int(60) NOT NULL AUTO_INCREMENT,
  `documento` int(11) NOT NULL,
  `materia` int(11) NOT NULL,
  `nota` varchar(30) NOT NULL,
  `periodo` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `notas_alumno_fk` (`documento`),
  KEY `notas_materia_fk` (`materia`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `notas`
--

INSERT INTO `notas` (`id`, `documento`, `materia`, `nota`, `periodo`) VALUES
(5, 14, 1, '4.5', '1er Periodo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tareas`
--

CREATE TABLE IF NOT EXISTS `tareas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `materia` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `texto` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tareas_materia_fk` (`materia`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(250) NOT NULL,
  `documento` bigint(11) NOT NULL,
  `permisos` int(1) NOT NULL,
  `tipo` varchar(15) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `pwd` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `direccion` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `documento`, `permisos`, `tipo`, `usuario`, `pwd`, `email`, `direccion`) VALUES
(9, 'FELIPE CLAVIJO SANTOYOS', 1033756088, 0, 'Administrador', 'fclavijos', '8f959682c8acffc74bd651ae9c8df411', 'felipe@gmail.com', 'cra 18'),
(11, 'Ana Victoria Saenz triana', 2124, 0, 'Alumno', 'avsaenz', '8f959682c8acffc74bd651ae9c8df411', 'ana.saenzt@gmail.com', 'Cra 18'),
(12, 'Katherin Hernandez', 1033756088, 0, 'Docente', 'khernandez', '8f959682c8acffc74bd651ae9c8df411', '', ''),
(13, 'DOCENTE', 123456789, 0, 'Docente', 'docente', 'a5a3ff2825648e09972bab1953b4291b', 'docente@lc.com.co', 'carrera 1'),
(14, 'ALUMNO', 123456789, 0, 'Alumno', 'Alumno', 'a5a3ff2825648e09972bab1953b4291b', 'alumno@lc.com.co', 'carrera 1');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `materia`
--
ALTER TABLE `materia`
  ADD CONSTRAINT `materia_profesor_fk` FOREIGN KEY (`profesorasignado`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `notas`
--
ALTER TABLE `notas`
  ADD CONSTRAINT `notas_materia_fk` FOREIGN KEY (`materia`) REFERENCES `materia` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `notas_alumno_fk` FOREIGN KEY (`documento`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `tareas`
--
ALTER TABLE `tareas`
  ADD CONSTRAINT `tareas_materia_fk` FOREIGN KEY (`materia`) REFERENCES `materia` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
