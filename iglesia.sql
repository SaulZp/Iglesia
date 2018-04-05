-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-04-2018 a las 01:41:28
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `iglesia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE IF NOT EXISTS `administrador` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evento`
--

CREATE TABLE IF NOT EXISTS `evento` (
  `id_evento` int(11) NOT NULL AUTO_INCREMENT,
  `nombreEvento` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_evento`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `evento`
--

INSERT INTO `evento` (`id_evento`, `nombreEvento`) VALUES
(1, 'Bautizo'),
(2, '1a Comunión'),
(3, 'XV Años'),
(4, 'Matrimonio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proximoseventos`
--

CREATE TABLE IF NOT EXISTS `proximoseventos` (
  `id_proximoEvento` int(11) NOT NULL AUTO_INCREMENT,
  `nombreEvento` varchar(15) DEFAULT NULL,
  `descripcion` text,
  `fecha` datetime DEFAULT NULL,
  `imagen` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id_proximoEvento`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservaciones`
--

CREATE TABLE IF NOT EXISTS `reservaciones` (
  `id_reserva` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `id_evento` int(11) NOT NULL,
  `fecha` datetime DEFAULT NULL,
  PRIMARY KEY (`id_reserva`),
  KEY `id_usuario` (`id_usuario`),
  KEY `id_evento` (`id_evento`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `username` varchar(15) DEFAULT NULL,
  `correo` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `telefono` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `username`, `correo`, `password`, `direccion`, `telefono`) VALUES
(1, 'saul', 'spz', 'dxlspzmau5@gmail.com', '827ccb0eea8a706c4c34a16891f84e', 'independencia sur', '-89');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `reservaciones`
--
ALTER TABLE `reservaciones`
  ADD CONSTRAINT `reservaciones_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`),
  ADD CONSTRAINT `reservaciones_ibfk_2` FOREIGN KEY (`id_evento`) REFERENCES `evento` (`id_evento`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
