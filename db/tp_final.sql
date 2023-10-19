-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-10-2023 a las 20:23:23
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tp_final`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(10) UNSIGNED NOT NULL,
  `modelo` varchar(200) NOT NULL,
  `precio` int(10) NOT NULL,
  `color` varchar(50) NOT NULL,
  `activo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `modelo`, `precio`, `color`, `activo`) VALUES
(1, 'U SK8-LOW', 49500, 'negro',1),
(2, 'U SK8-LOW', 49500, 'blanco',1),
(3, 'U SK8-LOW', 49500, 'gris',1),
(4, 'U SK8-LOW', 49500, 'blanco',1),
(5, 'U SK8-LOW', 49500, 'negro',1),
(6, 'U SK8-LOW', 49500, 'rosa',1),
(7, 'U SK8-LOW', 49500, 'verde',1),
(8, 'M Skate SK8-Hi', 63000, 'negro',1),
(9, 'M Skate SK8-Hi', 63000, 'negro',1),
(10, 'M Skate SK8-Hi', 63000, 'negro',1),
(11, 'M Skate SK8-Hi', 63000, 'gris',1),
(12, 'M Skate SK8-Hi', 63000, 'naranja',1),
(13, 'M Skate SK8-Hi', 63000, 'negro',1),
(14, 'M Skate SK8-Hi', 63000, 'verde',1),
(15, 'M Skate SK8-Hi', 63000, 'gris',1),
(16, 'M Skate Old Skool', 58500, 'negro',1),
(17, 'M Skate Old Skool', 58500, 'azul',1),
(18, 'M Skate Old Skool', 58500, 'negro',1),
(19, 'M Skate Old Skool', 58500, 'verde',1),
(20, 'M Skate Old Skool', 58500, 'gris',1),
(21, 'Ojota M Slide-On', 22000, 'azul',1),
(22, 'Ojota M Slide-On', 22000, 'blanco',1),
(23, 'Ojota M Slide-On', 22000, 'violeta',1),
(24, 'Ojota M Slide-On', 22000, 'negro',1),
(25, 'Ojota M Slide-On', 22000, 'checker',1),
(26, 'Ojota M Slide-On', 22000, 'negro',1),
(27, 'U ERA', 34000, 'negro',1),
(28, 'U ERA', 34000, 'azul',1),
(29, 'U ERA', 34000, 'azul',1),
(30, 'U ERA', 34000, 'blanco',1),
(31, 'U ERA', 34000, 'negro',1),
(32, 'U ERA', 34000, 'negro',1),
(33, 'U ERA', 34000, 'rojo',1),
(34, 'U AUTHENTIC', 35200, 'azul',1),
(35, 'U AUTHENTIC', 35200, 'negro',1),
(36, 'U AUTHENTIC', 35200, 'negro',1),
(37, 'U AUTHENTIC', 35200, 'blanco',1),
(38, 'U AUTHENTIC', 35200, 'rojo',1),
(39, 'U AUTHENTIC', 35200, 'rosa',1),
(40, 'U AUTHENTIC', 35200, 'amarillo',1),
(41, 'U AUTHENTIC', 35200, 'azul',1),
(42, 'U AUTHENTIC', 35200, 'verde',1),
(43, 'U CLASSIC SLIP-ON', 34000, 'negro',1),
(44, 'U CLASSIC SLIP-ON', 34000, 'blanco',1),
(45, 'U CLASSIC SLIP-ON', 34000, 'negro',1),
(46, 'U CLASSIC SLIP-ON', 34000, 'azul',1),
(47, 'M Skate Slip-On', 51900, 'checker',1),
(48, 'M Skate Slip-On', 51900, 'negro',1),
(49, 'M Skate Slip-On', 51900, 'negro',1),
(50, 'M Skate Slip-On', 51900, 'verde',1),
(51, 'M Zahba', 69200, 'negro',1),
(52, 'M Zahba', 69200, 'gris',1),
(53, 'M Zahba', 69200, 'negro',1),
(54, 'M Zahba', 69200, 'blanco',1),
(55, 'W ROWAN', 63500, 'negro',1),
(56, 'W ROWAN', 63500, 'marron',1),
(57, 'Ultra-Range EXO', 87000, 'negro',1),
(58, 'Ultra-Range EXO', 87000, 'marron',1),
(59, 'Ultra-Range EXO', 87000, 'gris',1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre_usuario` varchar(45) NOT NULL,
  `clave` varchar(255) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `apellido` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre_usuario`, `clave`, `nombre`, `apellido`) VALUES
(1, 'Frank', '$2y$10$MKEZOE1o/HEE2KAgDMBkq.j6kjw0tiu.FGMSKLdi9wU8MMDQIlpFO', 'Franco', 'Cabral'),
(2, 'Santi', '$2y$10$MKEZOE1o/HEE2KAgDMBkq.j6kjw0tiu.FGMSKLdi9wU8MMDQIlpFO', 'Santiago', 'Suarez');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuario` (`nombre_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
