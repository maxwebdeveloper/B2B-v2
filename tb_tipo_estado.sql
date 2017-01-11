-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 11-01-2017 a las 10:06:51
-- Versión del servidor: 5.6.34
-- Versión de PHP: 5.6.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_b2b`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_tipo_estado`
--

CREATE TABLE `tb_tipo_estado` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `estado` varchar(45) DEFAULT 'A'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_tipo_estado`
--

INSERT INTO `tb_tipo_estado` (`id`, `nombre`, `estado`) VALUES
(0, 'Creada', 'A'),
(1, 'En revisión por parte de CM', 'A'),
(2, 'En revisión por parte de JP', 'A'),
(3, 'En revisión por parte de Sub Gerencia', 'A'),
(4, 'En revisión por parte de Gerencia', 'A'),
(5, 'Aprobado por Gerencia', 'A');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tb_tipo_estado`
--
ALTER TABLE `tb_tipo_estado`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tb_tipo_estado`
--
ALTER TABLE `tb_tipo_estado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
