-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-11-2023 a las 01:19:00
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_pizza`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_ingredientes`
--

CREATE TABLE `tbl_ingredientes` (
  `id` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `unidad_mdd` varchar(50) NOT NULL,
  `stock` int(10) NOT NULL,
  `fecha_cad` datetime NOT NULL,
  `cnt_ing` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_ingredientes`
--

INSERT INTO `tbl_ingredientes` (`id`, `nombre`, `descripcion`, `precio`, `unidad_mdd`, `stock`, `fecha_cad`, `cnt_ing`) VALUES
(5, 'Piña', 'Fruta Fresca', '175.50', 'Grande', 450, '2023-11-14 09:00:00', '25'),
(6, 'Champiñones', 'Verdura Fresca', '25.50', 'Chicos', 285, '2023-11-12 18:07:00', '6'),
(7, 'Tomate', 'Tomate Fresco', '10.50', 'Mediano', 10, '2023-11-13 01:15:18', '5');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_ingredientes`
--
ALTER TABLE `tbl_ingredientes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_ingredientes`
--
ALTER TABLE `tbl_ingredientes`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
