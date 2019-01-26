-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-01-2019 a las 13:25:51
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `futbol`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `titols`
--

CREATE TABLE `titols` (
  `codi` int(10) NOT NULL,
  `nom` varchar(30) COLLATE utf8_bin NOT NULL,
  `codiequip` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `titols`
--

INSERT INTO `titols` (`codi`, `nom`, `codiequip`) VALUES
(1, '30 Copas del Rey', 1),
(2, '19 Copas del rey ', 2),
(3, '1 Copa del rey ', 3),
(4, '7 Copas del rey', 4),
(5, '23 Copas del rey', 5),
(6, '0 Copas del rey', 6),
(7, '0 Copas del rey', 7),
(8, '6 Copas del rey', 8),
(9, '4 Copas del rey', 9),
(10, '10 Copas del rey', 10);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `titols`
--
ALTER TABLE `titols`
  ADD PRIMARY KEY (`codi`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `titols`
--
ALTER TABLE `titols`
  MODIFY `codi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
