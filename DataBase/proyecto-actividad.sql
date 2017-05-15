-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-05-2017 a las 13:32:34
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto-actividad`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registroestudiantes`
--

CREATE TABLE `registroestudiantes` (
  `id` int(11) NOT NULL,
  `nombres` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `telefono` varchar(8) NOT NULL,
  `establecimiento` varchar(100) NOT NULL,
  `ipNavegador` varchar(30) NOT NULL,
  `fechaRegistro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registroestudiantes`
--

INSERT INTO `registroestudiantes` (`id`, `nombres`, `apellidos`, `correo`, `telefono`, `establecimiento`, `ipNavegador`, `fechaRegistro`) VALUES
(1, 'Eduardo', 'Barrios', 'guayoswing@gmail.com', '54441004', 'Colegio Mixto Retalhuleu', '192.168.101.98', '2017-05-14'),
(2, 'Mafer', 'Herrera', 'marifer17te@hotmail.com', '41793176', 'no estudio', '192.168.101.1', '2017-05-14'),
(5, 'Mafer', 'Herrera', 'marifer17te@hotmail.com', '41793176', 'no estudio', '192.168.101.2', '2017-05-14');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registroestudiantes`
--
ALTER TABLE `registroestudiantes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ipNavegador` (`ipNavegador`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registroestudiantes`
--
ALTER TABLE `registroestudiantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
