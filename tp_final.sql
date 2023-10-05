-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-10-2023 a las 21:40:36
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
  `color` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `modelo`, `precio`, `color`) VALUES
(1, 'U SK8-LOW', 49500, 'negro'),
(2, 'U SK8-LOW', 49500, 'blanco'),
(3, 'U SK8-LOW', 49500, 'gris'),
(4, 'U SK8-LOW', 49500, 'blanco'),
(5, 'U SK8-LOW', 49500, 'negro'),
(6, 'U SK8-LOW', 49500, 'rosa'),
(7, 'U SK8-LOW', 49500, 'verde'),
(8, 'M Skate SK8-Hi', 63000, 'negro'),
(9, 'M Skate SK8-Hi', 63000, 'negro'),
(10, 'M Skate SK8-Hi', 63000, 'negro'),
(11, 'M Skate SK8-Hi', 63000, 'gris'),
(12, 'M Skate SK8-Hi', 63000, 'naranja'),
(13, 'M Skate SK8-Hi', 63000, 'negro'),
(14, 'M Skate SK8-Hi', 63000, 'verde'),
(15, 'M Skate SK8-Hi', 63000, 'gris'),
(16, 'M Skate Old Skool', 58500, 'negro'),
(17, 'M Skate Old Skool', 58500, 'azul'),
(18, 'M Skate Old Skool', 58500, 'negro'),
(19, 'M Skate Old Skool', 58500, 'verde'),
(20, 'M Skate Old Skool', 58500, 'gris'),
(21, 'Ojota M Slide-On', 22000, 'azul'),
(22, 'Ojota M Slide-On', 22000, 'blanco'),
(23, 'Ojota M Slide-On', 22000, 'violeta'),
(24, 'Ojota M Slide-On', 22000, 'negro'),
(25, 'Ojota M Slide-On', 22000, 'checker'),
(26, 'Ojota M Slide-On', 22000, 'negro'),
(27, 'U ERA', 34000, 'negro'),
(28, 'U ERA', 34000, 'azul'),
(29, 'U ERA', 34000, 'azul'),
(30, 'U ERA', 34000, 'blanco'),
(31, 'U ERA', 34000, 'negro'),
(32, 'U ERA', 34000, 'negro'),
(33, 'U ERA', 34000, 'rojo'),
(34, 'U AUTHENTIC', 35200, 'azul'),
(35, 'U AUTHENTIC', 35200, 'negro'),
(36, 'U AUTHENTIC', 35200, 'negro'),
(37, 'U AUTHENTIC', 35200, 'blanco'),
(38, 'U AUTHENTIC', 35200, 'rojo'),
(39, 'U AUTHENTIC', 35200, 'rosa'),
(40, 'U AUTHENTIC', 35200, 'amarillo'),
(41, 'U AUTHENTIC', 35200, 'azul'),
(42, 'U AUTHENTIC', 35200, 'verde'),
(43, 'U CLASSIC SLIP-ON', 34000, 'negro'),
(44, 'U CLASSIC SLIP-ON', 34000, 'blanco'),
(45, 'U CLASSIC SLIP-ON', 34000, 'negro'),
(46, 'U CLASSIC SLIP-ON', 34000, 'azul'),
(47, 'M Skate Slip-On', 51900, 'checker'),
(48, 'M Skate Slip-On', 51900, 'negro'),
(49, 'M Skate Slip-On', 51900, 'negro'),
(50, 'M Skate Slip-On', 51900, 'verde'),
(51, 'M Zahba', 69200, 'negro'),
(52, 'M Zahba', 69200, 'gris'),
(53, 'M Zahba', 69200, 'negro'),
(54, 'M Zahba', 69200, 'blanco'),
(55, 'W ROWAN', 63500, 'negro'),
(56, 'W ROWAN', 63500, 'marron'),
(57, 'Ultra-Range EXO', 87000, 'negro'),
(58, 'Ultra-Range EXO', 87000, 'marron'),
(59, 'Ultra-Range EXO', 87000, 'gris');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
