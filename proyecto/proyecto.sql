-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-03-2024 a las 07:34:07
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

DROP TABLE IF EXISTS `contacto`;
CREATE TABLE `contacto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `cedula` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `telefono` varchar(255) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id`, `nombre`, `cedula`, `correo`, `telefono`, `direccion`, `fecha`) VALUES
(2, 'karelys vera', '17921240', 'kare@gmail.com', '04242173924', 'caucagua', '2024-02-28'),
(7, 'lenin hidaldo', '18093568', 'leni30hidalgo@gamil.com', '04126001614', 'guatire', '2024-03-01'),
(8, 'nicole vera', '15662244', 'nicole@gmail.com', '04126001615', 'caucagua', '2024-03-08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

DROP TABLE IF EXISTS `registro`;
CREATE TABLE `registro` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `cedula` varchar(255) NOT NULL,
  `curso` varchar(255) NOT NULL,
  `nivel` varchar(255) NOT NULL,
  `fecha` date NOT NULL,
  `rol` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id`, `nombre`, `cedula`, `curso`, `nivel`, `fecha`, `rol`) VALUES
(1, 'lenin hidalgo', '18093568', 'programacion', 'basico', '2024-03-02', '2024-03-31'),
(3, 'karelys vera', '17921240', 'contabilidad', 'avanzado', '2024-03-02', '2024-03-31'),
(6, 'nicole vera', '15662244', 'diseño web', 'basico', '2024-03-02', '2024-03-31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `validar`
--

DROP TABLE IF EXISTS `validar`;
CREATE TABLE `validar` (
  `id` int(11) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `validar`
--

INSERT INTO `validar` (`id`, `usuario`, `password`) VALUES
(1, 'lenin hidalgo', '18093568');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `validar`
--
ALTER TABLE `validar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `validar`
--
ALTER TABLE `validar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
