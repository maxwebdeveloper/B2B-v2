-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 11-01-2017 a las 10:05:50
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
-- Estructura de tabla para la tabla `tb_persona`
--

CREATE TABLE `tb_persona` (
  `id` int(11) NOT NULL,
  `rut` varchar(10) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `apellido` varchar(45) NOT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `fono` varchar(10) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `clave` varchar(250) DEFAULT NULL,
  `estado` varchar(1) DEFAULT 'A',
  `tb_empresa_id` int(11) NOT NULL,
  `tb_tipo_usuario_id` int(11) NOT NULL,
  `tb_comuna_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_persona`
--

INSERT INTO `tb_persona` (`id`, `rut`, `nombre`, `apellido`, `direccion`, `fono`, `correo`, `clave`, `estado`, `tb_empresa_id`, `tb_tipo_usuario_id`, `tb_comuna_id`) VALUES
(13, '9999999-9', 'Admin', 'Admin', 'Leon Gallo', '00000000', 'admin@espol.cl', '123', 'A', 1, 1, 1),
(15, '12345678-9', 'Tulio', 'Triviño', 'Inez de Suarez 2131', '0000000000', 'tulio@31min.cl', '123', 'A', 4, 6, 267),
(16, '18504528-5', 'Max', 'Llaupi', 'Quepe 1233', '00000000', 'max.llaupi@espol.cl', '111', 'A', 1, 5, 255),
(18, '10000000-3', 'Christel', 'Neumann G', 'Andes 1028, Temuco', '00000000', 'christel.neumann@espol.c', '123', 'A', 1, 3, 267),
(19, '98765432-1', 'Karin', 'Avello', 'Av. Los Olimpos 123', '00000000', 'karin@gmail.com', '123', 'A', 1, 4, 267),
(20, '12345678-8', 'Juanin Juan', 'Jarry', 'Av. Balmaceda 1223, Santiago', '00000000', 'juanin@31min.cl', '123', 'A', 70, 6, 127),
(21, '98765432-2', 'Camila', 'Marchant', 'Andes 1028, Temuco', '00000000', 'camila@espol.cl', '123', 'A', 1, 4, 267),
(22, '18504528-9', 'Bin ', 'Disel', 'Andes 1028, Temuco', '00000000', 'bin@espol.cl', '123', 'A', 1, 5, 267),
(23, '10000000-4', 'Ximena', 'Catalán', 'Andes 1028, Temuco', '00000000', 'ximena.catalan@espol.c', '123', 'A', 1, 2, 267);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tb_persona`
--
ALTER TABLE `tb_persona`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tb_persona_tb_empresa1_idx` (`tb_empresa_id`),
  ADD KEY `fk_tb_persona_tb_tipo_usuario1_idx` (`tb_tipo_usuario_id`),
  ADD KEY `tb_comuna_id` (`tb_comuna_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tb_persona`
--
ALTER TABLE `tb_persona`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tb_persona`
--
ALTER TABLE `tb_persona`
  ADD CONSTRAINT `fk_tb_persona_tb_empresa1` FOREIGN KEY (`tb_empresa_id`) REFERENCES `tb_empresa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tb_persona_tb_tipo_usuario1` FOREIGN KEY (`tb_tipo_usuario_id`) REFERENCES `tb_tipo_usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tb_persona_ibfk_1` FOREIGN KEY (`tb_comuna_id`) REFERENCES `tb_comuna` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
