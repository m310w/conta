-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-05-2017 a las 19:00:37
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `conta`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--


CREATE TABLE `empresa` (
  `id` int(11) NOT NULL,
  `nombre` varchar(500) NOT NULL,
  `cargo` varchar(500) NOT NULL,
  `dia_labor` varchar(100) NOT NULL,
  `comision` varchar(100) NOT NULL,
  `salario` varchar(255) NOT NULL,
  `horas_extras` varchar(150) DEFAULT NULL,
  `vacaciones` varchar(250) DEFAULT NULL,
  `sub_total` varchar(250) DEFAULT NULL,
  `iss` varchar(250) DEFAULT NULL,
  `afp` varchar(250) DEFAULT NULL,
  `renta` varchar(250) DEFAULT NULL,
  `tot_reten` varchar(250) DEFAULT NULL,
  `liqui_paga` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`id`, `nombre`, `cargo`, `dia_labor`, `comision`, `salario`, `horas_extras`, `vacaciones`, `sub_total`, `iss`, `afp`, `renta`, `tot_reten`, `liqui_paga`) VALUES
(17, 'Gerardo', 'Panadero', '30', '100', '520', '46.58', '338', '644.58', '15.6', '32.5', '17.66', '65.76', '454.24'),
(23, 'Juanito', 'gefaso', '5', '5', '500', '450.00', '1950', '1400.00', '15', '31.25', '15.85', '62.095', '437.90'),
(24, 'Douglas', 'Gerente', '30', '100', '520', '46.58', '338', '644.58', '15.6', '32.5', '17.66', '65.76', '454.24'),
(25, 'Pedro', 'elfo', '30', '100', '520', '46.58', '338', '644.58', '15.6', '32.5', '17.66', '65.76', '454.24');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
