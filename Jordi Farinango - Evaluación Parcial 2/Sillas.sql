-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:33065
-- Tiempo de generación: 18-03-2023 a las 00:44:32
-- Versión del servidor: 10.4.24-MariaDB-log
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `Sillas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Sillas`
--

CREATE TABLE `Sillas` (
  `idSillas` int(100) NOT NULL,
  `Material` varchar(100) NOT NULL,
  `Asiento` varchar(100) NOT NULL,
  `Tamaño` varchar(100) NOT NULL,
  `Diseño` varchar(100) NOT NULL,
  `Numeropatas` int(100) NOT NULL,
  `Color` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `Sillas`
--

INSERT INTO `Sillas` (`idSillas`, `Material`, `Asiento`, `Tamaño`, `Diseño`, `Numeropatas`, `Color`) VALUES
(1, 'Madera', 'Acolchado', 'Grande', 'Moderno', 4, 'Blanco'),
(2, 'Metal', 'Plástico', 'Mediano', 'Clásico', 3, 'Negro'),
(3, 'Plástico', 'Sin acolchado', 'Pequeño', 'Rústico', 4, 'Verde');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Sillas`
--
ALTER TABLE `Sillas`
  ADD PRIMARY KEY (`idSillas`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Sillas`
--
ALTER TABLE `Sillas`
  MODIFY `idSillas` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
