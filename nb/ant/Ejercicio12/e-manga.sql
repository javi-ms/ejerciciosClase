-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-03-2016 a las 20:01:07
-- Versión del servidor: 5.6.26
-- Versión de PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `e-manga`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ad_cambia_pedidos`
--

CREATE TABLE IF NOT EXISTS `ad_cambia_pedidos` (
  `num_tipo_usuario` int(5) NOT NULL,
  `num_pedido` int(5) NOT NULL,
  `fech_cambio` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ad_gestion_permisos`
--

CREATE TABLE IF NOT EXISTS `ad_gestion_permisos` (
  `num_permiso` int(5) NOT NULL,
  `num_usuario` int(5) NOT NULL,
  `fech_gestion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ad_productos`
--

CREATE TABLE IF NOT EXISTS `ad_productos` (
  `num_producto` int(5) NOT NULL,
  `cod_tipo_usuario` int(5) NOT NULL,
  `fech_gestion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ad_usuario`
--

CREATE TABLE IF NOT EXISTS `ad_usuario` (
  `cod_tipoUsuario` int(5) NOT NULL,
  `cod_user` int(5) NOT NULL,
  `fecha_gestion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_pedido`
--

CREATE TABLE IF NOT EXISTS `detalle_pedido` (
  `id_det_pedido` int(5) NOT NULL,
  `num_producto` int(5) NOT NULL,
  `pvp` decimal(8,0) NOT NULL,
  `pvp_total` decimal(8,0) NOT NULL,
  `cantidad` int(3) NOT NULL,
  `cod_pedido` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE IF NOT EXISTS `pedido` (
  `id_pedido` int(5) NOT NULL,
  `fec_alta` date NOT NULL,
  `hora` time NOT NULL,
  `total` int(6) NOT NULL,
  `num_factura` int(9) NOT NULL,
  `estado` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `tipo_pago` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fec_pago` datetime DEFAULT NULL,
  `fec_incidencia` datetime DEFAULT NULL,
  `tipo_incidencia` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tipo_envio` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fec_envio` datetime DEFAULT NULL,
  `fec_finalizacion` datetime DEFAULT NULL,
  `tipo_reembolso` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fec_reembolso` datetime DEFAULT NULL,
  `producto_reembolsado` varchar(300) COLLATE utf8_spanish_ci DEFAULT NULL,
  `num_usuario` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE IF NOT EXISTS `permisos` (
  `cod_permiso` int(5) NOT NULL,
  `tipo` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `id_producto` int(5) NOT NULL,
  `nombre` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(400) COLLATE utf8_spanish_ci NOT NULL,
  `precio` int(5) NOT NULL,
  `foto` varchar(350) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_pedido`
--

CREATE TABLE IF NOT EXISTS `productos_pedido` (
  `id_pedido` int(5) NOT NULL,
  `id_producto` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE IF NOT EXISTS `tipo_usuario` (
  `id_tipo_usuario` int(5) NOT NULL,
  `tipo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `puntos` int(6) NOT NULL,
  `telefono` int(9) NOT NULL,
  `direccion` varchar(400) COLLATE utf8_spanish_ci NOT NULL,
  `fec_alta` date NOT NULL,
  `DNI` varchar(9) COLLATE utf8_spanish_ci NOT NULL,
  `cod_usuario` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `cod_usuario` int(5) NOT NULL,
  `email` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_permisos`
--

CREATE TABLE IF NOT EXISTS `usuario_permisos` (
  `id_permiso` int(5) NOT NULL,
  `id_usuario` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ad_cambia_pedidos`
--
ALTER TABLE `ad_cambia_pedidos`
  ADD PRIMARY KEY (`num_tipo_usuario`,`num_pedido`),
  ADD KEY `num_pedido` (`num_pedido`);

--
-- Indices de la tabla `ad_gestion_permisos`
--
ALTER TABLE `ad_gestion_permisos`
  ADD PRIMARY KEY (`num_permiso`,`num_usuario`),
  ADD KEY `num_usuario` (`num_usuario`);

--
-- Indices de la tabla `ad_productos`
--
ALTER TABLE `ad_productos`
  ADD PRIMARY KEY (`num_producto`,`cod_tipo_usuario`);

--
-- Indices de la tabla `ad_usuario`
--
ALTER TABLE `ad_usuario`
  ADD PRIMARY KEY (`cod_tipoUsuario`,`cod_user`),
  ADD KEY `cod_user` (`cod_user`);

--
-- Indices de la tabla `detalle_pedido`
--
ALTER TABLE `detalle_pedido`
  ADD PRIMARY KEY (`id_det_pedido`),
  ADD KEY `num_producto` (`num_producto`),
  ADD KEY `cod_pedido` (`cod_pedido`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id_pedido`),
  ADD KEY `num_usuario` (`num_usuario`);

--
-- Indices de la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD PRIMARY KEY (`cod_permiso`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `productos_pedido`
--
ALTER TABLE `productos_pedido`
  ADD PRIMARY KEY (`id_pedido`,`id_producto`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`id_tipo_usuario`),
  ADD KEY `cod_usuario` (`cod_usuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cod_usuario`);

--
-- Indices de la tabla `usuario_permisos`
--
ALTER TABLE `usuario_permisos`
  ADD PRIMARY KEY (`id_permiso`,`id_usuario`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `detalle_pedido`
--
ALTER TABLE `detalle_pedido`
  MODIFY `id_det_pedido` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id_pedido` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `permisos`
--
ALTER TABLE `permisos`
  MODIFY `cod_permiso` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `id_tipo_usuario` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `cod_usuario` int(5) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ad_cambia_pedidos`
--
ALTER TABLE `ad_cambia_pedidos`
  ADD CONSTRAINT `ad_cambia_pedidos_ibfk_1` FOREIGN KEY (`num_tipo_usuario`) REFERENCES `tipo_usuario` (`id_tipo_usuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ad_cambia_pedidos_ibfk_2` FOREIGN KEY (`num_pedido`) REFERENCES `pedido` (`id_pedido`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ad_gestion_permisos`
--
ALTER TABLE `ad_gestion_permisos`
  ADD CONSTRAINT `ad_gestion_permisos_ibfk_1` FOREIGN KEY (`num_permiso`) REFERENCES `permisos` (`cod_permiso`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ad_gestion_permisos_ibfk_2` FOREIGN KEY (`num_usuario`) REFERENCES `tipo_usuario` (`id_tipo_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ad_productos`
--
ALTER TABLE `ad_productos`
  ADD CONSTRAINT `ad_productos_ibfk_1` FOREIGN KEY (`num_producto`) REFERENCES `productos` (`id_producto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ad_usuario`
--
ALTER TABLE `ad_usuario`
  ADD CONSTRAINT `ad_usuario_ibfk_1` FOREIGN KEY (`cod_tipoUsuario`) REFERENCES `tipo_usuario` (`id_tipo_usuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ad_usuario_ibfk_2` FOREIGN KEY (`cod_user`) REFERENCES `usuario` (`cod_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `detalle_pedido`
--
ALTER TABLE `detalle_pedido`
  ADD CONSTRAINT `detalle_pedido_ibfk_1` FOREIGN KEY (`num_producto`) REFERENCES `productos_pedido` (`id_producto`),
  ADD CONSTRAINT `detalle_pedido_ibfk_2` FOREIGN KEY (`cod_pedido`) REFERENCES `pedido` (`id_pedido`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`num_usuario`) REFERENCES `tipo_usuario` (`id_tipo_usuario`);

--
-- Filtros para la tabla `productos_pedido`
--
ALTER TABLE `productos_pedido`
  ADD CONSTRAINT `productos_pedido_ibfk_1` FOREIGN KEY (`id_pedido`) REFERENCES `pedido` (`id_pedido`),
  ADD CONSTRAINT `productos_pedido_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`);

--
-- Filtros para la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD CONSTRAINT `tipo_usuario_ibfk_1` FOREIGN KEY (`cod_usuario`) REFERENCES `usuario` (`cod_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario_permisos`
--
ALTER TABLE `usuario_permisos`
  ADD CONSTRAINT `usuario_permisos_ibfk_1` FOREIGN KEY (`id_permiso`) REFERENCES `permisos` (`cod_permiso`),
  ADD CONSTRAINT `usuario_permisos_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `tipo_usuario` (`id_tipo_usuario`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
