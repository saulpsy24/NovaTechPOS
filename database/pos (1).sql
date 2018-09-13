-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-09-2018 a las 02:26:56
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `usuario` text COLLATE utf8_spanish_ci NOT NULL,
  `password` text COLLATE utf8_spanish_ci NOT NULL,
  `perfil` text COLLATE utf8_spanish_ci NOT NULL,
  `foto` text COLLATE utf8_spanish_ci NOT NULL,
  `estado` int(11) NOT NULL,
  `ultimo_login` datetime NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `usuario`, `password`, `perfil`, `foto`, `estado`, `ultimo_login`, `fecha`) VALUES
(1, 'Usuario Administrador', 'admin', 'admin123', 'administrador', '', 1, '0000-00-00 00:00:00', '2018-09-11 14:58:31'),
(2, 'Usuario', 'user', 'user', 'administrador', '', 0, '0000-00-00 00:00:00', '2018-09-12 19:42:48'),
(3, 'Especial', 'especial', 'especial', 'especial', '', 0, '0000-00-00 00:00:00', '2018-09-12 19:43:40'),
(4, 'Ventas', 'vendedor', 'vendedor', 'vendedor', '', 0, '0000-00-00 00:00:00', '2018-09-12 19:44:07'),
(5, 'asdsad', 'admin1', 'admin123', '', '', 0, '0000-00-00 00:00:00', '2018-09-12 20:14:07'),
(6, 'pedro', 'pedro', 'admin123', 'administrador', '', 0, '0000-00-00 00:00:00', '2018-09-12 23:01:54'),
(7, 'Juan Ramírez', 'juanram', 'juan123', 'administrador', '', 0, '0000-00-00 00:00:00', '2018-09-12 23:09:34'),
(8, 'Victor Rámirez', 'vramirez', 'admin123', 'vendedor', 'vistas/img/usuarios/vramirez/903.jpg', 0, '0000-00-00 00:00:00', '2018-09-12 23:16:13'),
(9, 'Ana Maria', 'anals', '$2a$07$used3v3l0pm3ntsalt$', 'especial', 'vistas/img/usuarios/anals/667.jpg', 0, '0000-00-00 00:00:00', '2018-09-12 23:23:17'),
(10, 'Cifrado el Usuario', 'cifer', '$2a$07$used3v3l0pm3ntsalt$', 'administrador', 'vistas/img/usuarios/cifer/535.jpg', 0, '0000-00-00 00:00:00', '2018-09-12 23:26:24'),
(11, 'Julio de Prueba', 'julio', '$2a$07$used3v3l0pm3ntsalt$', 'administrador', '', 0, '0000-00-00 00:00:00', '2018-09-12 23:37:33'),
(12, 'Usuario Listado', 'userlisted', '$2a$07$used3v3l0pm3ntsalt$', 'vendedor', 'vistas/img/usuarios/userlisted/455.png', 0, '0000-00-00 00:00:00', '2018-09-12 23:58:12'),
(13, 'otro mas', 'admin1', '$2a$07$used3v3l0pm3ntsalt$', 'especial', '', 0, '0000-00-00 00:00:00', '2018-09-13 00:04:25');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
