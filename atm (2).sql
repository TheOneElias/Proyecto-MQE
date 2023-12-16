-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-11-2023 a las 19:59:48
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
-- Base de datos: `atm`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `operaciones`
--

CREATE TABLE `operaciones` (
  `ID` int(11) NOT NULL,
  `CUENTA` int(4) DEFAULT NULL,
  `NOMSERV` varchar(25) DEFAULT NULL,
  `SALDO` double UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `operaciones`
--

INSERT INTO `operaciones` (`ID`, `CUENTA`, `NOMSERV`, `SALDO`) VALUES
(1, 8967, 'CONALEP252', 20000),
(2, 4575, 'CONALEP144', 20000),
(3, 9012, 'CONALEP177', 20000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `swift`
--

CREATE TABLE `swift` (
  `ID` int(11) NOT NULL,
  `CUENTA` int(4) DEFAULT NULL,
  `PASS` varchar(8) DEFAULT NULL,
  `NOMBRE` varchar(25) DEFAULT NULL,
  `AP` varchar(25) DEFAULT NULL,
  `AM` varchar(25) DEFAULT NULL,
  `EMAIL` varchar(35) DEFAULT NULL,
  `SALDO` double UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `swift`
--

INSERT INTO `swift` (`ID`, `CUENTA`, `PASS`, `NOMBRE`, `AP`, `AM`, `EMAIL`, `SALDO`) VALUES
(1, 3105, 'MHM14333', 'MARTHA', 'HUERTA', 'MONTALVO', 'huertamartha817@gmail.com', 12000),
(2, 1719, 'elias079', 'ELIAS', 'RODRIGUEZ', 'BARRETO', 'erodriguez@ver.conalep', 12000);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `operaciones`
--
ALTER TABLE `operaciones`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `swift`
--
ALTER TABLE `swift`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `operaciones`
--
ALTER TABLE `operaciones`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `swift`
--
ALTER TABLE `swift`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
