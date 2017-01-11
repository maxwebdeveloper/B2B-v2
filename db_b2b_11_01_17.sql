-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 11-01-2017 a las 10:11:02
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
-- Estructura de tabla para la tabla `mv_ficha_evaluacion`
--

CREATE TABLE `mv_ficha_evaluacion` (
  `id` int(11) NOT NULL,
  `ruta_img` varchar(100) DEFAULT NULL,
  `nombre_producto` varchar(85) DEFAULT NULL,
  `marca_producto` varchar(45) DEFAULT NULL,
  `cantidad` varchar(45) DEFAULT NULL,
  `contenido` varchar(45) DEFAULT NULL,
  `tb_formato_consumo_id` int(11) DEFAULT NULL,
  `num_descuento` int(11) DEFAULT NULL,
  `descuento_1` varchar(45) DEFAULT NULL,
  `descuento_2` varchar(45) DEFAULT NULL,
  `descuento_3` varchar(45) DEFAULT NULL,
  `descuento_4` varchar(45) DEFAULT NULL,
  `descuento_5` varchar(45) DEFAULT NULL,
  `num_variedades` int(11) DEFAULT NULL,
  `variedad_1` varchar(45) DEFAULT NULL,
  `variedad_2` varchar(45) DEFAULT NULL,
  `variedad_3` varchar(45) DEFAULT NULL,
  `variedad_4` varchar(45) DEFAULT NULL,
  `variedad_5` varchar(45) DEFAULT NULL,
  `atributos` varchar(250) DEFAULT NULL,
  `beneficios` varchar(250) DEFAULT NULL,
  `ppd` varchar(45) DEFAULT NULL COMMENT 'posicionamiento precio deseado',
  `precio_lista` varchar(45) DEFAULT NULL,
  `observacion_jp` varchar(45) DEFAULT NULL,
  `id_proveedor` varchar(45) DEFAULT NULL,
  `estado_proveedor` int(11) NOT NULL DEFAULT '0',
  `id_comprador` varchar(45) DEFAULT NULL,
  `estado_comprador` int(11) NOT NULL DEFAULT '-1',
  `id_jefe_producto` varchar(45) DEFAULT NULL,
  `estado_jefe_producto` int(11) NOT NULL DEFAULT '-1',
  `margen_espol` varchar(45) DEFAULT NULL,
  `margen_estimado_cliente` varchar(45) DEFAULT NULL,
  `pvp_proyectado` varchar(45) DEFAULT NULL,
  `estimacion_m3` varchar(45) DEFAULT NULL,
  `plazo_pago_proveedor` varchar(45) DEFAULT NULL,
  `escala_descuento_ipad` varchar(45) DEFAULT NULL,
  `negociacion_especial_merma` varchar(250) DEFAULT NULL,
  `negociacion_devoluciones` varchar(250) DEFAULT NULL,
  `aportes_especiales_proveedor` varchar(250) DEFAULT NULL,
  `precio_competencia` int(11) DEFAULT NULL,
  `rol_portafolio` varchar(45) DEFAULT NULL,
  `volumen` varchar(45) DEFAULT NULL,
  `expancion_de_linea` varchar(45) DEFAULT NULL,
  `desarrollo_proveedor` varchar(45) DEFAULT NULL,
  `comentario` varchar(250) DEFAULT NULL,
  `id_subgerencia` varchar(45) DEFAULT NULL,
  `estado_sub_gerencia` int(11) NOT NULL DEFAULT '-1',
  `id_gerencia` varchar(45) DEFAULT NULL,
  `estado_gerencia` int(11) NOT NULL DEFAULT '-1',
  `fecha_creacion` datetime DEFAULT CURRENT_TIMESTAMP,
  `fecha_aprobacion_comprador` datetime DEFAULT NULL,
  `fecha_aprobacion_jp` datetime DEFAULT NULL,
  `fecha_aprobacion_subgerencia` datetime DEFAULT NULL,
  `fecha_aprobacion_gerencia` datetime DEFAULT NULL,
  `fecha_rechazo` datetime DEFAULT NULL,
  `tb_tipo_estado_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `mv_ficha_evaluacion`
--

INSERT INTO `mv_ficha_evaluacion` (`id`, `ruta_img`, `nombre_producto`, `marca_producto`, `cantidad`, `contenido`, `tb_formato_consumo_id`, `num_descuento`, `descuento_1`, `descuento_2`, `descuento_3`, `descuento_4`, `descuento_5`, `num_variedades`, `variedad_1`, `variedad_2`, `variedad_3`, `variedad_4`, `variedad_5`, `atributos`, `beneficios`, `ppd`, `precio_lista`, `observacion_jp`, `id_proveedor`, `estado_proveedor`, `id_comprador`, `estado_comprador`, `id_jefe_producto`, `estado_jefe_producto`, `margen_espol`, `margen_estimado_cliente`, `pvp_proyectado`, `estimacion_m3`, `plazo_pago_proveedor`, `escala_descuento_ipad`, `negociacion_especial_merma`, `negociacion_devoluciones`, `aportes_especiales_proveedor`, `precio_competencia`, `rol_portafolio`, `volumen`, `expancion_de_linea`, `desarrollo_proveedor`, `comentario`, `id_subgerencia`, `estado_sub_gerencia`, `id_gerencia`, `estado_gerencia`, `fecha_creacion`, `fecha_aprobacion_comprador`, `fecha_aprobacion_jp`, `fecha_aprobacion_subgerencia`, `fecha_aprobacion_gerencia`, `fecha_rechazo`, `tb_tipo_estado_id`) VALUES
(19, '', 'Smartphone Alcatel Idol One Touch 2 mini ', 'Alcatel', '200', '1', 4, 1, '20', '', '', '', '', 1, 'Gris', '', '', '', '', '-', '-', '89990', '56780', NULL, '20', 1, '16', 2, '21', 0, '20000', '15000', '12', '10', '120', '20', '-', '-', '-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, -1, NULL, -1, '2017-01-11 13:12:43', '2017-01-11 01:25:23', NULL, NULL, NULL, NULL, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mv_ficha_evaluacion_observacion_estado`
--

CREATE TABLE `mv_ficha_evaluacion_observacion_estado` (
  `id` int(11) NOT NULL,
  `observacion` varchar(45) DEFAULT NULL,
  `fecha` varchar(45) DEFAULT NULL,
  `tb_tipo_estado_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_comuna`
--

CREATE TABLE `tb_comuna` (
  `id` int(11) NOT NULL,
  `comuna` varchar(64) DEFAULT NULL,
  `tb_provincia_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_comuna`
--

INSERT INTO `tb_comuna` (`id`, `comuna`, `tb_provincia_id`) VALUES
(1, 'Arica', 1),
(2, 'Camarones', 1),
(3, 'General Lagos', 2),
(4, 'Putre', 2),
(5, 'Alto Hospicio', 3),
(6, 'Iquique', 3),
(7, 'Camiña', 4),
(8, 'Colchane', 4),
(9, 'Huara', 4),
(10, 'Pica', 4),
(11, 'Pozo Almonte', 4),
(12, 'Antofagasta', 5),
(13, 'Mejillones', 5),
(14, 'Sierra Gorda', 5),
(15, 'Taltal', 5),
(16, 'Calama', 6),
(17, 'Ollague', 6),
(18, 'San Pedro de Atacama', 6),
(19, 'María Elena', 7),
(20, 'Tocopilla', 7),
(21, 'Chañaral', 8),
(22, 'Diego de Almagro', 8),
(23, 'Caldera', 9),
(24, 'Copiapó', 9),
(25, 'Tierra Amarilla', 9),
(26, 'Alto del Carmen', 10),
(27, 'Freirina', 10),
(28, 'Huasco', 10),
(29, 'Vallenar', 10),
(30, 'Canela', 11),
(31, 'Illapel', 11),
(32, 'Los Vilos', 11),
(33, 'Salamanca', 11),
(34, 'Andacollo', 12),
(35, 'Coquimbo', 12),
(36, 'La Higuera', 12),
(37, 'La Serena', 12),
(38, 'Paihuaco', 12),
(39, 'Vicuña', 12),
(40, 'Combarbalá', 13),
(41, 'Monte Patria', 13),
(42, 'Ovalle', 13),
(43, 'Punitaqui', 13),
(44, 'Río Hurtado', 13),
(45, 'Isla de Pascua', 14),
(46, 'Calle Larga', 15),
(47, 'Los Andes', 15),
(48, 'Rinconada', 15),
(49, 'San Esteban', 15),
(50, 'La Ligua', 16),
(51, 'Papudo', 16),
(52, 'Petorca', 16),
(53, 'Zapallar', 16),
(54, 'Hijuelas', 17),
(55, 'La Calera', 17),
(56, 'La Cruz', 17),
(57, 'Limache', 17),
(58, 'Nogales', 17),
(59, 'Olmué', 17),
(60, 'Quillota', 17),
(61, 'Algarrobo', 18),
(62, 'Cartagena', 18),
(63, 'El Quisco', 18),
(64, 'El Tabo', 18),
(65, 'San Antonio', 18),
(66, 'Santo Domingo', 18),
(67, 'Catemu', 19),
(68, 'Llaillay', 19),
(69, 'Panquehue', 19),
(70, 'Putaendo', 19),
(71, 'San Felipe', 19),
(72, 'Santa María', 19),
(73, 'Casablanca', 20),
(74, 'Concón', 20),
(75, 'Juan Fernández', 20),
(76, 'Puchuncaví', 20),
(77, 'Quilpué', 20),
(78, 'Quintero', 20),
(79, 'Valparaíso', 20),
(80, 'Villa Alemana', 20),
(81, 'Viña del Mar', 20),
(82, 'Colina', 21),
(83, 'Lampa', 21),
(84, 'Tiltil', 21),
(85, 'Pirque', 22),
(86, 'Puente Alto', 22),
(87, 'San José de Maipo', 22),
(88, 'Buin', 23),
(89, 'Calera de Tango', 23),
(90, 'Paine', 23),
(91, 'San Bernardo', 23),
(92, 'Alhué', 24),
(93, 'Curacaví', 24),
(94, 'María Pinto', 24),
(95, 'Melipilla', 24),
(96, 'San Pedro', 24),
(97, 'Cerrillos', 25),
(98, 'Cerro Navia', 25),
(99, 'Conchalí', 25),
(100, 'El Bosque', 25),
(101, 'Estación Central', 25),
(102, 'Huechuraba', 25),
(103, 'Independencia', 25),
(104, 'La Cisterna', 25),
(105, 'La Granja', 25),
(106, 'La Florida', 25),
(107, 'La Pintana', 25),
(108, 'La Reina', 25),
(109, 'Las Condes', 25),
(110, 'Lo Barnechea', 25),
(111, 'Lo Espejo', 25),
(112, 'Lo Prado', 25),
(113, 'Macul', 25),
(114, 'Maipú', 25),
(115, 'Ñuñoa', 25),
(116, 'Pedro Aguirre Cerda', 25),
(117, 'Peñalolén', 25),
(118, 'Providencia', 25),
(119, 'Pudahuel', 25),
(120, 'Quilicura', 25),
(121, 'Quinta Normal', 25),
(122, 'Recoleta', 25),
(123, 'Renca', 25),
(124, 'San Miguel', 25),
(125, 'San Joaquín', 25),
(126, 'San Ramón', 25),
(127, 'Santiago', 25),
(128, 'Vitacura', 25),
(129, 'El Monte', 26),
(130, 'Isla de Maipo', 26),
(131, 'Padre Hurtado', 26),
(132, 'Peñaflor', 26),
(133, 'Talagante', 26),
(134, 'Codegua', 27),
(135, 'Coínco', 27),
(136, 'Coltauco', 27),
(137, 'Doñihue', 27),
(138, 'Graneros', 27),
(139, 'Las Cabras', 27),
(140, 'Machalí', 27),
(141, 'Malloa', 27),
(142, 'Mostazal', 27),
(143, 'Olivar', 27),
(144, 'Peumo', 27),
(145, 'Pichidegua', 27),
(146, 'Quinta de Tilcoco', 27),
(147, 'Rancagua', 27),
(148, 'Rengo', 27),
(149, 'Requínoa', 27),
(150, 'San Vicente de Tagua Tagua', 27),
(151, 'La Estrella', 28),
(152, 'Litueche', 28),
(153, 'Marchihue', 28),
(154, 'Navidad', 28),
(155, 'Peredones', 28),
(156, 'Pichilemu', 28),
(157, 'Chépica', 29),
(158, 'Chimbarongo', 29),
(159, 'Lolol', 29),
(160, 'Nancagua', 29),
(161, 'Palmilla', 29),
(162, 'Peralillo', 29),
(163, 'Placilla', 29),
(164, 'Pumanque', 29),
(165, 'San Fernando', 29),
(166, 'Santa Cruz', 29),
(167, 'Cauquenes', 30),
(168, 'Chanco', 30),
(169, 'Pelluhue', 30),
(170, 'Curicó', 31),
(171, 'Hualañé', 31),
(172, 'Licantén', 31),
(173, 'Molina', 31),
(174, 'Rauco', 31),
(175, 'Romeral', 31),
(176, 'Sagrada Familia', 31),
(177, 'Teno', 31),
(178, 'Vichuquén', 31),
(179, 'Colbún', 32),
(180, 'Linares', 32),
(181, 'Longaví', 32),
(182, 'Parral', 32),
(183, 'Retiro', 32),
(184, 'San Javier', 32),
(185, 'Villa Alegre', 32),
(186, 'Yerbas Buenas', 32),
(187, 'Constitución', 33),
(188, 'Curepto', 33),
(189, 'Empedrado', 33),
(190, 'Maule', 33),
(191, 'Pelarco', 33),
(192, 'Pencahue', 33),
(193, 'Río Claro', 33),
(194, 'San Clemente', 33),
(195, 'San Rafael', 33),
(196, 'Talca', 33),
(197, 'Arauco', 34),
(198, 'Cañete', 34),
(199, 'Contulmo', 34),
(200, 'Curanilahue', 34),
(201, 'Lebu', 34),
(202, 'Los Álamos', 34),
(203, 'Tirúa', 34),
(204, 'Alto Biobío', 35),
(205, 'Antuco', 35),
(206, 'Cabrero', 35),
(207, 'Laja', 35),
(208, 'Los Ángeles', 35),
(209, 'Mulchén', 35),
(210, 'Nacimiento', 35),
(211, 'Negrete', 35),
(212, 'Quilaco', 35),
(213, 'Quilleco', 35),
(214, 'San Rosendo', 35),
(215, 'Santa Bárbara', 35),
(216, 'Tucapel', 35),
(217, 'Yumbel', 35),
(218, 'Chiguayante', 36),
(219, 'Concepción', 36),
(220, 'Coronel', 36),
(221, 'Florida', 36),
(222, 'Hualpén', 36),
(223, 'Hualqui', 36),
(224, 'Lota', 36),
(225, 'Penco', 36),
(226, 'San Pedro de La Paz', 36),
(227, 'Santa Juana', 36),
(228, 'Talcahuano', 36),
(229, 'Tomé', 36),
(230, 'Bulnes', 37),
(231, 'Chillán', 37),
(232, 'Chillán Viejo', 37),
(233, 'Cobquecura', 37),
(234, 'Coelemu', 37),
(235, 'Coihueco', 37),
(236, 'El Carmen', 37),
(237, 'Ninhue', 37),
(238, 'Ñiquen', 37),
(239, 'Pemuco', 37),
(240, 'Pinto', 37),
(241, 'Portezuelo', 37),
(242, 'Quillón', 37),
(243, 'Quirihue', 37),
(244, 'Ránquil', 37),
(245, 'San Carlos', 37),
(246, 'San Fabián', 37),
(247, 'San Ignacio', 37),
(248, 'San Nicolás', 37),
(249, 'Treguaco', 37),
(250, 'Yungay', 37),
(251, 'Carahue', 38),
(252, 'Cholchol', 38),
(253, 'Cunco', 38),
(254, 'Curarrehue', 38),
(255, 'Freire', 38),
(256, 'Galvarino', 38),
(257, 'Gorbea', 38),
(258, 'Lautaro', 38),
(259, 'Loncoche', 38),
(260, 'Melipeuco', 38),
(261, 'Nueva Imperial', 38),
(262, 'Padre Las Casas', 38),
(263, 'Perquenco', 38),
(264, 'Pitrufquén', 38),
(265, 'Pucón', 38),
(266, 'Saavedra', 38),
(267, 'Temuco', 38),
(268, 'Teodoro Schmidt', 38),
(269, 'Toltén', 38),
(270, 'Vilcún', 38),
(271, 'Villarrica', 38),
(272, 'Angol', 39),
(273, 'Collipulli', 39),
(274, 'Curacautín', 39),
(275, 'Ercilla', 39),
(276, 'Lonquimay', 39),
(277, 'Los Sauces', 39),
(278, 'Lumaco', 39),
(279, 'Purén', 39),
(280, 'Renaico', 39),
(281, 'Traiguén', 39),
(282, 'Victoria', 39),
(283, 'Corral', 40),
(284, 'Lanco', 40),
(285, 'Los Lagos', 40),
(286, 'Máfil', 40),
(287, 'Mariquina', 40),
(288, 'Paillaco', 40),
(289, 'Panguipulli', 40),
(290, 'Valdivia', 40),
(291, 'Futrono', 41),
(292, 'La Unión', 41),
(293, 'Lago Ranco', 41),
(294, 'Río Bueno', 41),
(295, 'Ancud', 42),
(296, 'Castro', 42),
(297, 'Chonchi', 42),
(298, 'Curaco de Vélez', 42),
(299, 'Dalcahue', 42),
(300, 'Puqueldón', 42),
(301, 'Queilén', 42),
(302, 'Quemchi', 42),
(303, 'Quellón', 42),
(304, 'Quinchao', 42),
(305, 'Calbuco', 43),
(306, 'Cochamó', 43),
(307, 'Fresia', 43),
(308, 'Frutillar', 43),
(309, 'Llanquihue', 43),
(310, 'Los Muermos', 43),
(311, 'Maullín', 43),
(312, 'Puerto Montt', 43),
(313, 'Puerto Varas', 43),
(314, 'Osorno', 44),
(315, 'Puero Octay', 44),
(316, 'Purranque', 44),
(317, 'Puyehue', 44),
(318, 'Río Negro', 44),
(319, 'San Juan de la Costa', 44),
(320, 'San Pablo', 44),
(321, 'Chaitén', 45),
(322, 'Futaleufú', 45),
(323, 'Hualaihué', 45),
(324, 'Palena', 45),
(325, 'Aisén', 46),
(326, 'Cisnes', 46),
(327, 'Guaitecas', 46),
(328, 'Cochrane', 47),
(329, 'O\'higgins', 47),
(330, 'Tortel', 47),
(331, 'Coihaique', 48),
(332, 'Lago Verde', 48),
(333, 'Chile Chico', 49),
(334, 'Río Ibáñez', 49),
(335, 'Antártica', 50),
(336, 'Cabo de Hornos', 50),
(337, 'Laguna Blanca', 51),
(338, 'Punta Arenas', 51),
(339, 'Río Verde', 51),
(340, 'San Gregorio', 51),
(341, 'Porvenir', 52),
(342, 'Primavera', 52),
(343, 'Timaukel', 52),
(344, 'Natales', 53),
(345, 'Torres del Paine', 53);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_empresa`
--

CREATE TABLE `tb_empresa` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `estado` varchar(1) DEFAULT 'A'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_empresa`
--

INSERT INTO `tb_empresa` (`id`, `nombre`, `estado`) VALUES
(1, 'Espol', 'A'),
(2, 'Arcor', 'A'),
(3, 'Dos en Uno', 'A'),
(4, '3M Chile', 'A'),
(8, 'Coca-Cola', 'A'),
(55, 'Microlab', 'A'),
(65, 'MaxSoft', 'A'),
(69, 'Alcatel', 'A'),
(70, '31 Minutos', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_formato_consumo`
--

CREATE TABLE `tb_formato_consumo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `estado` varchar(1) DEFAULT 'A'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_formato_consumo`
--

INSERT INTO `tb_formato_consumo` (`id`, `nombre`, `estado`) VALUES
(1, 'Display', 'A'),
(2, 'Botella', 'A'),
(3, 'Lata', 'A'),
(4, 'Caja', 'A'),
(5, 'Otro', 'A');

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_provincia`
--

CREATE TABLE `tb_provincia` (
  `id` int(11) NOT NULL,
  `provincia` varchar(64) DEFAULT NULL,
  `tb_region_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_provincia`
--

INSERT INTO `tb_provincia` (`id`, `provincia`, `tb_region_id`) VALUES
(1, 'Arica', 1),
(2, 'Parinacota', 1),
(3, 'Iquique', 2),
(4, 'El Tamarugal', 2),
(5, 'Antofagasta', 3),
(6, 'El Loa', 3),
(7, 'Tocopilla', 3),
(8, 'Chañaral', 4),
(9, 'Copiapó', 4),
(10, 'Huasco', 4),
(11, 'Choapa', 5),
(12, 'Elqui', 5),
(13, 'Limarí', 5),
(14, 'Isla de Pascua', 6),
(15, 'Los Andes', 6),
(16, 'Petorca', 6),
(17, 'Quillota', 6),
(18, 'San Antonio', 6),
(19, 'San Felipe de Aconcagua', 6),
(20, 'Valparaiso', 6),
(21, 'Chacabuco', 7),
(22, 'Cordillera', 7),
(23, 'Maipo', 7),
(24, 'Melipilla', 7),
(25, 'Santiago', 7),
(26, 'Talagante', 7),
(27, 'Cachapoal', 8),
(28, 'Cardenal Caro', 8),
(29, 'Colchagua', 8),
(30, 'Cauquenes', 9),
(31, 'Curicó', 9),
(32, 'Linares', 9),
(33, 'Talca', 9),
(34, 'Arauco', 10),
(35, 'Bio Bío', 10),
(36, 'Concepción', 10),
(37, 'Ñuble', 10),
(38, 'Cautín', 11),
(39, 'Malleco', 11),
(40, 'Valdivia', 12),
(41, 'Ranco', 12),
(42, 'Chiloé', 13),
(43, 'Llanquihue', 13),
(44, 'Osorno', 13),
(45, 'Palena', 13),
(46, 'Aisén', 14),
(47, 'Capitán Prat', 14),
(48, 'Coihaique', 14),
(49, 'General Carrera', 14),
(50, 'Antártica Chilena', 15),
(51, 'Magallanes', 15),
(52, 'Tierra del Fuego', 15),
(53, 'Última Esperanza', 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_region`
--

CREATE TABLE `tb_region` (
  `id` int(11) NOT NULL,
  `region` varchar(64) DEFAULT NULL,
  `region_ordinal` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_region`
--

INSERT INTO `tb_region` (`id`, `region`, `region_ordinal`) VALUES
(1, 'Arica y Parinacota', 'XV'),
(2, 'Tarapacá', 'I'),
(3, 'Antofagasta', 'II'),
(4, 'Atacama', 'III'),
(5, 'Coquimbo', 'IV'),
(6, 'Valparaiso', 'V'),
(7, 'Metropolitana de Santiago', 'RM'),
(8, 'Libertador General Bernardo O\'Higgins', 'VI'),
(9, 'Maule', 'VII'),
(10, 'Biobío', 'VIII'),
(11, 'La Araucanía', 'IX'),
(12, 'Los Ríos', 'XIV'),
(13, 'Los Lagos', 'X'),
(14, 'Aisén del General Carlos Ibáñez del Campo', 'XI'),
(15, 'Magallanes y de la Antártica Chilena', 'XII');

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_tipo_usuario`
--

CREATE TABLE `tb_tipo_usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `estado` varchar(1) DEFAULT 'A'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_tipo_usuario`
--

INSERT INTO `tb_tipo_usuario` (`id`, `nombre`, `estado`) VALUES
(1, 'Administrador', 'A'),
(2, 'Gerencia', 'A'),
(3, 'Sub Gerencia', 'A'),
(4, 'Jefe Producto', 'A'),
(5, 'Comprador', 'A'),
(6, 'Proveedor', 'A');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `mv_ficha_evaluacion`
--
ALTER TABLE `mv_ficha_evaluacion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_mv_ficha_evaluacion_tb_tipo_estado1_idx` (`tb_tipo_estado_id`),
  ADD KEY `fk_mv_ficha_evaluacion_tb_formato_consumo1_idx` (`tb_formato_consumo_id`);

--
-- Indices de la tabla `mv_ficha_evaluacion_observacion_estado`
--
ALTER TABLE `mv_ficha_evaluacion_observacion_estado`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_mv_ficha_evaluacion_observacion_estado_tb_tipo_estado1_idx` (`tb_tipo_estado_id`);

--
-- Indices de la tabla `tb_comuna`
--
ALTER TABLE `tb_comuna`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tb_comuna_tb_provincia1_idx` (`tb_provincia_id`);

--
-- Indices de la tabla `tb_empresa`
--
ALTER TABLE `tb_empresa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_formato_consumo`
--
ALTER TABLE `tb_formato_consumo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_persona`
--
ALTER TABLE `tb_persona`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tb_persona_tb_empresa1_idx` (`tb_empresa_id`),
  ADD KEY `fk_tb_persona_tb_tipo_usuario1_idx` (`tb_tipo_usuario_id`),
  ADD KEY `tb_comuna_id` (`tb_comuna_id`);

--
-- Indices de la tabla `tb_provincia`
--
ALTER TABLE `tb_provincia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tb_provincia_tb_region1_idx` (`tb_region_id`);

--
-- Indices de la tabla `tb_region`
--
ALTER TABLE `tb_region`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_tipo_estado`
--
ALTER TABLE `tb_tipo_estado`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_tipo_usuario`
--
ALTER TABLE `tb_tipo_usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `mv_ficha_evaluacion`
--
ALTER TABLE `mv_ficha_evaluacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT de la tabla `mv_ficha_evaluacion_observacion_estado`
--
ALTER TABLE `mv_ficha_evaluacion_observacion_estado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tb_empresa`
--
ALTER TABLE `tb_empresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
--
-- AUTO_INCREMENT de la tabla `tb_formato_consumo`
--
ALTER TABLE `tb_formato_consumo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `tb_persona`
--
ALTER TABLE `tb_persona`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT de la tabla `tb_tipo_estado`
--
ALTER TABLE `tb_tipo_estado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `tb_tipo_usuario`
--
ALTER TABLE `tb_tipo_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `mv_ficha_evaluacion`
--
ALTER TABLE `mv_ficha_evaluacion`
  ADD CONSTRAINT `fk_mv_ficha_evaluacion_tb_formato_consumo1` FOREIGN KEY (`tb_formato_consumo_id`) REFERENCES `tb_formato_consumo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_mv_ficha_evaluacion_tb_tipo_estado1` FOREIGN KEY (`tb_tipo_estado_id`) REFERENCES `tb_tipo_estado` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `mv_ficha_evaluacion_observacion_estado`
--
ALTER TABLE `mv_ficha_evaluacion_observacion_estado`
  ADD CONSTRAINT `fk_mv_ficha_evaluacion_observacion_estado_tb_tipo_estado1` FOREIGN KEY (`tb_tipo_estado_id`) REFERENCES `tb_tipo_estado` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tb_comuna`
--
ALTER TABLE `tb_comuna`
  ADD CONSTRAINT `fk_tb_comuna_tb_provincia1` FOREIGN KEY (`tb_provincia_id`) REFERENCES `tb_provincia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tb_persona`
--
ALTER TABLE `tb_persona`
  ADD CONSTRAINT `fk_tb_persona_tb_empresa1` FOREIGN KEY (`tb_empresa_id`) REFERENCES `tb_empresa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tb_persona_tb_tipo_usuario1` FOREIGN KEY (`tb_tipo_usuario_id`) REFERENCES `tb_tipo_usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tb_persona_ibfk_1` FOREIGN KEY (`tb_comuna_id`) REFERENCES `tb_comuna` (`id`);

--
-- Filtros para la tabla `tb_provincia`
--
ALTER TABLE `tb_provincia`
  ADD CONSTRAINT `fk_tb_provincia_tb_region1` FOREIGN KEY (`tb_region_id`) REFERENCES `tb_region` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
