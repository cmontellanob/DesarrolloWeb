-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-06-2015 a las 16:27:01
-- Versión del servidor: 5.5.27
-- Versión de PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `bd_noticias`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticia`
--


CREATE TABLE IF NOT EXISTS `noticia` (
  `idnoticia` smallint(6) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) COLLATE utf8_bin NOT NULL,
  `texto` varchar(500) COLLATE utf8_bin NOT NULL,
  `fecha` datetime NOT NULL,
  PRIMARY KEY (`idnoticia`),
  UNIQUE KEY `titulo` (`titulo`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=22 ;

--
-- Volcado de datos para la tabla `noticia`
--

INSERT INTO `noticia` (`idnoticia`, `titulo`, `texto`, `fecha`) VALUES
(15, 'GRIPE H1N1', 'Confirman los dos casos de gripe del tipo AH1N1 en Santa Cruz', '2014-06-14 00:00:00'),
(16, 'Detenido en Marbella ', 'Uno de los diez criminales m?s buscados por Reino Unido', '0000-00-00 00:00:00'),
(17, 'Fiscal convoca al Cardenal Julio Terrazas a declarar en sucre', 'El fiscal Marcelo Soza convoc? al Cardenal Julio Terrazas en calidad de testigo para que haga declaraciones so', '2009-05-30 16:24:54'),
(18, 'php', 'lenguaje servidor', '0000-00-00 00:00:00'),
(19, 'javascript', 'lenguaje cliente', '0000-00-00 00:00:00'),
(20, 'Avion desaparecido', 'Un avion desaparecion en brasil y no se sabe nada ', '2012-05-04 00:00:00'),
(21, 'Muchos Narcos', 'Muchos narcos en todas partes ', '2012-05-04 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `idusuario` smallint(6) NOT NULL AUTO_INCREMENT,
  `Correo` varchar(50) COLLATE utf8_bin NOT NULL,
  `Password` varchar(30) COLLATE utf8_bin NOT NULL,
  `usuario` varchar(8) COLLATE utf8_bin NOT NULL,
  `clave` varchar(10) COLLATE utf8_bin NOT NULL,
  `nivel` char(1) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`idusuario`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idusuario`, `Correo`, `Password`, `usuario`, `clave`, `nivel`) VALUES
(1, 'admin', '123', 'admin', '123', '1'),
(2, '', '123', 'usuario', '123', '0');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
