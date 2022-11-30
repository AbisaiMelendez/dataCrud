-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-11-2022 a las 03:58:25
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `menu`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `id` int(10) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`id`, `nombre`) VALUES
(1, 'activo'),
(2, 'inactivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `platillos`
--

CREATE TABLE `platillos` (
  `id` int(10) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `precio` float DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `id_estado` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `platillos`
--

INSERT INTO `platillos` (`id`, `nombre`, `descripcion`, `precio`, `image`, `id_estado`) VALUES
(3, 'Churrazcos marinados', 'Acompañado de arroz jardinero, papa al horno, chirimols y chile jalapeño', 14.55, 'https://images.unsplash.com/photo-1633436375795-12b3b339712f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80', 1),
(5, 'Plato de bocas mixtas', 'Acompañado de zanahoria y apio, salsa a elección', 11, 'https://plus.unsplash.com/premium_photo-1661668648046-f2bc1091e4b8?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80', 1),
(9, 'Asado del campo', 'En salsa ranchera', 14.5, 'https://images.unsplash.com/photo-1625944228741-cf30983ecb91?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=881&q=80', 1),
(10, 'Pasta bolognesa', 'Deliciosa pasta en salsa de ajillo', 14.5, 'https://www.laespanolaaceites.com/wp-content/uploads/2019/05/espaguetis-a-la-bolonesa-1080x671.jpg', 1),
(11, 'Asado Argentino', 'Típico asado argentino, además de la carne, se cocinan chorizos, morcillas, salchichas parrilleras y achuras como chinchulines.', 14.5, 'https://images.unsplash.com/photo-1527324688151-0e627063f2b1?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80', 1),
(14, 'Ceviche peruano', 'Hecho con pescados y, dependiendo del gusto, mariscos, es bañado con aliños cítricos que no hacen más que resaltar el sabor. ', 11.5, 'https://www.lima2019.pe/sites/default/files/inline-images/preview-gallery-006_0.jpg', 1),
(15, 'Super Parrillada', 'Para compartir entre amigos o familia  porciones P/ 5 personas', 40.5, 'https://images.unsplash.com/photo-1555939594-58d7cb561ad1?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80', 1),
(18, 'Cancrejo', 'En salsa de hongos', 25.5, 'https://images.pexels.com/photos/2532439/pexels-photo-2532439.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 1),
(19, 'Costillas de cerdo', 'Deliciosa costillas de cerdo en salsa BK, aderezados con chile jalapeño', 25.25, 'https://images.unsplash.com/photo-1544025162-d76694265947?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1169&q=80', 1),
(20, 'Pescado Marinado', '1 Libra de pescado de agua salada', 12.5, 'https://images.unsplash.com/photo-1613626630502-182579c0432c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80', 1),
(21, 'Albondigas de res', 'Bolas de carne molida con salsa de tomate y espagetti', 8, 'https://cdn.shopify.com/s/files/1/0078/5730/7737/files/espagueti_con_albondigas_de_res.jpg?v=1608074362', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `platillos`
--
ALTER TABLE `platillos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_estado` (`id_estado`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `platillos`
--
ALTER TABLE `platillos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `platillos`
--
ALTER TABLE `platillos`
  ADD CONSTRAINT `platillos_ibfk_1` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
