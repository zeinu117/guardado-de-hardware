-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-08-2021 a las 00:23:43
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistemasweb`
--

-- --------------------------------------------------------

-- Estructura de tabla para la tabla `t_equipos`
--

CREATE TABLE `t_equipos` (
  `id_equipo` int(11) NOT NULL,
  `nombre` varchar(245) NOT NULL,
  `nombre_archivo` varchar(245) NOT NULL,
  `modelo` varchar(245) NOT NULL,
  `numeroSerie` int(245) NOT NULL,
  `capacidad` varchar(255) NOT NULL,
  `descripcion` varchar(245) NOT NULL,
  `extension` varchar(245) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `t_equipos`
--

INSERT INTO `t_equipos` (`id_equipo`, `nombre`, `nombre_archivo`, `modelo`, `numeroSerie`, `capacidad`, `descripcion`, `extension`) VALUES
(5, 'laptop', 'laptop.jpg', '516a', 5636575, '1 tera', 'laptop para sistemas', 'jpg'),
(6, 'bocinas', 'compu.png', 'e319', 335575, 'no tiene', 'para escuchar musica', 'png');

-- --------------------------------------------------------


--
-- Indices de la tabla `t_equipos`
--
ALTER TABLE `t_equipos`
  ADD PRIMARY KEY (`id_equipo`);



--
-- AUTO_INCREMENT de la tabla `t_equipos`
--
ALTER TABLE `t_equipos`
  MODIFY `id_equipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;




/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
