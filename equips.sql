-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-01-2019 a las 13:24:37
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
-- Estructura de tabla para la tabla `equips`
--

CREATE TABLE `equips` (
  `codi` int(10) NOT NULL,
  `nom` varchar(30) COLLATE utf8_bin NOT NULL,
  `localitat` varchar(30) COLLATE utf8_bin NOT NULL,
  `web` varchar(100) COLLATE utf8_bin NOT NULL,
  `escut` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `equips`
--

INSERT INTO `equips` (`codi`, `nom`, `localitat`, `web`, `escut`) VALUES
(1, 'FCBarcelona', 'Barcelona', 'https://www.fcbarcelona.cat/ca/', 'https://www.bdfutbol.com/i/eg/1.png'),
(2, 'Real Madrid Club de Futbol', 'Madrid', 'https://www.realmadrid.com/', 'https://www.bdfutbol.com/i/eg/2.png'),
(3, 'Real Club Deportivo Mallorca', 'Palma de Mallorca', 'http://www.rcdmallorca.es/ca', 'https://www.bdfutbol.com/i/eg/24.png'),
(4, 'Valencia Club de Futbol', 'Valencia', 'http://www.valenciacf.com/portadas/splash', 'https://www.bdfutbol.com/i/eg/36.png'),
(5, 'Athletic Club', 'Bilbao', 'https://www.athletic-club.eus/', 'https://www.bdfutbol.com/i/eg/6.png'),
(6, 'Club Gimnastic de Tarragona', 'Tarragona', 'http://clubgimnastic.cat/', 'https://www.bdfutbol.com/i/eg/17.png'),
(7, 'Girona Futbol Club', 'Girona', 'https://www.gironafc.cat/', 'https://www.bdfutbol.com/i/eg/78.png'),
(8, 'Real Zaragoza', 'Zaragoza', 'https://www.realzaragoza.com/', 'https://www.bdfutbol.com/i/eg/39.png'),
(9, 'Real Club Deportiu Espanyol', 'Cornella de Llobregat', 'https://www.rcdespanyol.com/', 'https://www.bdfutbol.com/i/eg/14.png'),
(10, 'Club Atletico de Madrid', 'Madrid', 'http://www.atleticodemadrid.com/', 'https://www.bdfutbol.com/i/eg/7.png');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `equips`
--
ALTER TABLE `equips`
  ADD PRIMARY KEY (`codi`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `equips`
--
ALTER TABLE `equips`
  MODIFY `codi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
