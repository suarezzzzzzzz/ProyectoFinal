-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-09-2023 a las 22:23:02
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
-- Base de datos: `codigobdd`
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
('U SK8-LOW', 49500, 'negro'),
('U SK8-LOW', 49500, 'blanco'),
('U SK8-LOW', 49500, 'gris'),
('U SK8-LOW', 49500, 'blanco'),
('U SK8-LOW', 49500, 'negro'),
('U SK8-LOW', 49500, 'rosa'),
('U SK8-LOW', 49500, 'verde'),
('M Skate SK8-Hi', 63000, 'negro'),
('M Skate SK8-Hi', 63000, 'negro'),
('M Skate SK8-Hi', 63000, 'negro'),
('M Skate SK8-Hi', 63000, 'gris'),
('M Skate SK8-Hi', 63000, 'naranja'),
('M Skate SK8-Hi', 63000, 'negro'),
('M Skate SK8-Hi', 63000, 'verde'),
('M Skate SK8-Hi', 63000, 'gris'),
('M Skate Old Skool', 58500, 'negro'),
('M Skate Old Skool', 58500, 'azul'),
('M Skate Old Skool', 58500, 'negro'),
('M Skate Old Skool', 58500, 'verde'),
('M Skate Old Skool', 58500, 'gris'),
('Ojota M Slide-On', 22000, 'azul'),
('Ojota M Slide-On', 22000, 'blanco'),
('Ojota M Slide-On', 22000, 'violeta'),
('Ojota M Slide-On', 22000, 'negro'),
('Ojota M Slide-On', 22000, 'checker'),
('Ojota M Slide-On', 22000, 'negro'),
('U ERA', 34000, 'negro'),
('U ERA', 34000, 'azul'),
('U ERA', 34000, 'azul'),
('U ERA', 34000, 'blanco'),
('U ERA', 34000, 'negro'),
('U ERA', 34000, 'negro'),
('U ERA', 34000, 'rojo'),
('U AUTHENTIC', 35200, 'azul'),
('U AUTHENTIC', 35200, 'negro'),
('U AUTHENTIC', 35200, 'negro'),
('U AUTHENTIC', 35200, 'blanco'),
('U AUTHENTIC', 35200, 'rojo'),
('U AUTHENTIC', 35200, 'rosa'),
('U AUTHENTIC', 35200, 'amarillo'),
('U AUTHENTIC', 35200, 'azul'),
('U AUTHENTIC', 35200, 'verde'),
('U CLASSIC SLIP-ON', 34000, 'negro'),
('U CLASSIC SLIP-ON', 34000, 'blanco'),
('U CLASSIC SLIP-ON', 34000, 'negro'),
('U CLASSIC SLIP-ON', 34000, 'azul'),
('M Skate Slip-On', 51900, 'checker'),
('M Skate Slip-On', 51900, 'negro'),
('M Skate Slip-On', 51900, 'negro'),
('M Skate Slip-On', 51900, 'verde'),
('M Zahba', 69200, 'negro'),
('M Zahba', 69200, 'gris'),
('M Zahba', 69200, 'negro'),
('M Zahba', 69200, 'blanco'),
('W ROWAN', 63500, 'negro'),
('W ROWAN', 63500, 'marron'),
('Ultra-Range EXO', 87000, 'negro'),
('Ultra-Range EXO', 87000, 'marron'),
('Ultra-Range EXO', 87000, 'gris');



  
  

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
