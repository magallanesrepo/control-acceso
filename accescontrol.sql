-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-09-2022 a las 22:29:02
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
-- Base de datos: `accescontrol`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `accesslog`
--

CREATE TABLE `accesslog` (
  `id` int(11) NOT NULL,
  `cardid` varchar(255) NOT NULL,
  `access_date` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `tim` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cards`
--

CREATE TABLE `cards` (
  `id` int(11) NOT NULL,
  `cardid` varchar(255) NOT NULL,
  `invoice` int(11) NOT NULL,
  `accesomes` int(11) NOT NULL,
  `nombre` varchar(155) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `cedula` varchar(255) NOT NULL,
  `delivered` varchar(255) NOT NULL,
  `namedel` varchar(255) NOT NULL,
  `ayearfromnow` date DEFAULT NULL,
  `rightnow` date DEFAULT NULL,
  `accesos_exitosos` int(11) NOT NULL,
  `accesos_fallidos` int(11) DEFAULT NULL,
  `acceso_reciente` datetime DEFAULT NULL,
  `printed` varchar(3) NOT NULL DEFAULT 'NO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cards`
--

INSERT INTO `cards` (`id`, `cardid`, `invoice`, `accesomes`, `nombre`, `apellido`, `email`, `cedula`, `delivered`, `namedel`, `ayearfromnow`, `rightnow`, `accesos_exitosos`, `accesos_fallidos`, `acceso_reciente`, `printed`) VALUES
(1, '1-1', 1, 0, '', '', '', '', '', '', '2022-03-01', '2021-03-01', 60, NULL, NULL, 'YES'),
(2, '2-1', 2, 0, '', '', '', '', '', '', '2022-03-01', '2021-03-01', 120, NULL, NULL, 'YES'),
(3, '3-1', 3, 0, '', '', '', '', '', '', '2022-02-12', '2021-02-12', 192, NULL, NULL, 'YES'),
(4, '4-1', 4, 0, '', '', '', '', '', '', '2022-02-12', '2021-02-12', 120, NULL, NULL, 'YES'),
(6, '5-1', 5, 0, '', '', '', '', '', '', '2022-02-12', '2021-02-12', 60, NULL, NULL, 'YES'),
(7, '6-1', 6, 0, '', '', '', '', '', '', '2022-02-12', '2021-02-12', 60, NULL, NULL, 'YES'),
(8, '7-1', 7, 0, '', '', '', '', '', '', '2022-02-12', '2021-02-12', 60, NULL, NULL, 'YES'),
(9, '8-1', 8, 0, '', '', '', '', '', '', '2022-02-12', '2021-02-12', 60, NULL, NULL, 'YES'),
(10, '9-1', 9, 0, '', '', '', '', '', '', '2022-02-12', '2021-02-12', 60, NULL, NULL, 'YES'),
(11, '10-1', 10, 0, '', '', '', '', '', '', '2022-02-12', '2021-02-12', 60, NULL, NULL, 'YES'),
(12, '11-1', 11, 0, '', '', '', '', '', '', '2022-02-12', '2021-02-12', 60, NULL, NULL, 'YES'),
(13, '12-1', 12, 0, '', '', '', '', '', '', '2022-02-12', '2021-02-12', 60, NULL, NULL, 'YES'),
(14, '13-1', 13, 0, '', '', '', '', '', '', '2022-02-12', '2021-02-12', 60, NULL, NULL, 'YES'),
(15, '14-1', 14, 0, '', '', '', '', 'YES', 'CJ', '2022-02-18', '2021-02-18', 60, NULL, NULL, 'YES');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `client`
--

CREATE TABLE `client` (
  `client_id` int(11) NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `client_lastname` varchar(255) NOT NULL,
  `cedularif` varchar(255) NOT NULL,
  `birthdate` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `children_qty` int(11) NOT NULL,
  `grandchildren_qty` int(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `work` varchar(255) NOT NULL,
  `idtype` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `client`
--

INSERT INTO `client` (`client_id`, `client_name`, `client_lastname`, `cedularif`, `birthdate`, `address`, `children_qty`, `grandchildren_qty`, `phone`, `email`, `work`, `idtype`) VALUES
(1, 'JOHN ', 'DOE', '25485693', '2000-02-02', 'test address', 5, 0, 8545252, 'jd@jd.com', 'test workplace', 'E');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `control`
--

CREATE TABLE `control` (
  `id` int(11) NOT NULL,
  `empresa` varchar(255) NOT NULL,
  `sede` varchar(255) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `dominio` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefono` int(11) NOT NULL,
  `rif` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `control`
--

INSERT INTO `control` (`id`, `empresa`, `sede`, `direccion`, `dominio`, `email`, `telefono`, `rif`) VALUES
(1, 'SALTA', 'NAGUANAGUA', 'NAGUANAGUA, CARABOBO', 'salta.com.ve', '', 0, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `invoices`
--

CREATE TABLE `invoices` (
  `id` int(11) NOT NULL,
  `inumber` int(11) NOT NULL,
  `clones` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `client_id` int(11) NOT NULL,
  `ayearfromnow` date DEFAULT NULL,
  `cardtype` int(11) NOT NULL,
  `accessyear` int(11) NOT NULL,
  `rightnow` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `invoices`
--

INSERT INTO `invoices` (`id`, `inumber`, `clones`, `email`, `client_id`, `ayearfromnow`, `cardtype`, `accessyear`, `rightnow`) VALUES
(1, 1, 1, NULL, 2, '2022-03-01', 1, 60, '2021-03-01'),
(2, 2, 2, NULL, 2, '2022-03-01', 2, 120, '2021-03-01'),
(3, 3, 3, NULL, 2, '2022-03-01', 3, 192, '2021-03-01'),
(7, 4, 2, NULL, 3, '2022-03-01', 2, 120, '2021-03-01'),
(9, 5, 1, NULL, 6, '2022-03-01', 1, 60, '2021-03-01'),
(10, 6, 1, NULL, 7, '2022-03-01', 1, 60, '2021-03-01'),
(11, 7, 1, NULL, 13, '2022-03-01', 1, 60, '2021-03-01'),
(12, 8, 1, NULL, 14, '2022-03-01', 1, 60, '2021-03-01'),
(13, 9, 1, NULL, 15, '2022-03-01', 1, 60, '2021-03-01'),
(14, 10, 1, NULL, 16, '2022-03-01', 1, 60, '2021-03-01'),
(15, 11, 1, NULL, 17, '2022-03-01', 1, 60, '2021-03-01'),
(16, 12, 1, NULL, 19, '2022-03-01', 1, 60, '2021-03-01'),
(17, 13, 1, NULL, 18, '2022-03-01', 1, 60, '2021-03-01'),
(18, 14, 1, NULL, 1, '2022-02-18', 1, 60, '2021-02-18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_status` varchar(255) NOT NULL,
  `user_level` varchar(255) NOT NULL,
  `registre_date` varchar(255) NOT NULL,
  `edit_date` varchar(255) NOT NULL,
  `currentinvoice` int(11) NOT NULL,
  `currentclient` int(11) NOT NULL,
  `invoice_search` int(11) NOT NULL,
  `log_search` date DEFAULT NULL,
  `log_search_to` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_lastname`, `user_email`, `user_password`, `user_status`, `user_level`, `registre_date`, `edit_date`, `currentinvoice`, `currentclient`, `invoice_search`, `log_search`, `log_search_to`) VALUES
(1, 'Carlos', 'Castillo', 'cccarlosj@gmail.com', '123456', 'Activo', '1', '2021-01-20 03:25:21', '', 14, 1, 12, '2022-05-23', '2022-05-27'),
(2, 'Maria Jose', 'Quinones', 'mariajose@gmail', '123456', 'Activo', '1', '2021-02-12 05:10:41', '', 2, 0, 0, NULL, NULL),
(3, 'Usuario', 'Deprueba', 'user@test.com', '123456', 'Activo', '2', '2021-02-12 08:51:13', '', 0, 0, 0, NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `accesslog`
--
ALTER TABLE `accesslog`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `carnet_unico` (`cardid`);

--
-- Indices de la tabla `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indices de la tabla `control`
--
ALTER TABLE `control`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `factura_unica` (`inumber`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `accesslog`
--
ALTER TABLE `accesslog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cards`
--
ALTER TABLE `cards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `client`
--
ALTER TABLE `client`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `control`
--
ALTER TABLE `control`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
