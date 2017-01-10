-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-03-2016 a las 12:13:56
-- Versión del servidor: 10.1.8-MariaDB
-- Versión de PHP: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ex_symblog`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `blog` longtext COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `tags` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `idAutor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `blog`
--

INSERT INTO `blog` (`id`, `title`, `blog`, `image`, `tags`, `created`, `updated`, `idAutor`) VALUES
(21, 'A day with Symfony2', 'Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.\\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut velocity magna. Etiam vehicula nunc non leo hendrerit commodo. Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra. Cras el mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra. Cras elementum molestie vestibulum. Morbi id quam nisl. Praesent hendrerit, orci sed elementum lobortis, justo mauris lacinia libero, non facilisis purus ipsum non mi. Aliquam sollicitudin, augue id vestibulum iaculis, sem lectus convallis nunc, vel scelerisque lorem tortor ac nunc. Donec pharetra eleifend enim vel porta.', 'beach.jpg', 'symfony2, php, paradise, symblog', '2016-02-25 21:11:05', '2016-02-25 21:11:05', 0),
(22, 'The pool on the roof must have a leak', 'Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque. Na. Cras elementum molestie vestibulum. Morbi id quam nisl. Praesent hendrerit, orci sed elementum lobortis.', 'pool_leak.jpg', 'pool, leaky, hacked, movie, hacking, symblog', '2011-07-23 06:12:33', '2011-07-23 06:12:33', 0),
(23, 'Misdirection. What the eyes see and the ears hear, the mind believes', 'Lorem ipsumvehicula nunc non leo hendrerit commodo. Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque.', 'misdirection.jpg', 'misdirection, magic, movie, hacking, symblog', '2011-07-16 16:14:06', '2011-07-16 16:14:06', 0),
(24, 'The grid - A digital frontier', 'Lorem commodo. Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra.', 'the_grid.jpg', 'grid, daftpunk, movie, symblog', '2011-06-02 18:54:12', '2011-06-02 18:54:12', 0),
(25, 'You''re either a one or a zero. Alive or dead', 'Lorem ipsum dolor sit amet, consectetur adipiscing elittibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque.', 'one_or_zero.jpg', 'binary, one, zero, alive, dead, !trusting, movie, symblog', '2011-04-25 15:34:18', '2011-04-25 15:34:18', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `blog_id` int(11) DEFAULT NULL,
  `comment` longtext COLLATE utf8_unicode_ci NOT NULL,
  `approved` tinyint(1) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `idAutor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `comment`
--

INSERT INTO `comment` (`id`, `blog_id`, `comment`, `approved`, `created`, `updated`, `idAutor`) VALUES
(44, 21, 'To make a long story short. You can''t go wrong by choosing Symfony! And no one has ever been fired for using Symfony.', 1, '2016-02-25 21:11:05', '2016-02-25 21:11:05', 0),
(45, 21, 'To make a long story short. Choosing a framework must not be taken lightly; it is a long-term commitment. Make sure that you make the right selection!', 1, '2016-02-25 21:11:05', '2016-02-25 21:11:05', 0),
(46, 22, 'Anything else, mom? You want me to mow the lawn? Oops! I forgot, New York, No grass.', 1, '2016-02-25 21:11:05', '2016-02-25 21:11:05', 0),
(47, 22, 'Are you challenging me? ', 1, '2011-07-23 06:15:20', '2016-02-25 21:11:05', 0),
(48, 22, 'Name your stakes.', 1, '2011-07-23 06:18:35', '2016-02-25 21:11:05', 0),
(49, 22, 'If I win, you become my slave.', 1, '2011-07-23 06:22:53', '2016-02-25 21:11:05', 0),
(50, 22, 'Your SLAVE?', 1, '2011-07-23 06:25:15', '2016-02-25 21:11:05', 0),
(51, 22, 'You wish! You''ll do shitwork, scan, crack copyrights...', 1, '2011-07-23 06:46:08', '2016-02-25 21:11:05', 0),
(52, 22, 'And if I win?', 1, '2011-07-23 10:22:46', '2016-02-25 21:11:05', 0),
(53, 22, 'Make it my first-born!', 1, '2011-07-23 11:08:08', '2016-02-25 21:11:05', 0),
(54, 22, 'Make it our first-date!', 1, '2011-07-24 18:56:01', '2016-02-25 21:11:05', 0),
(55, 22, 'I don''t DO dates. But I don''t lose either, so you''re on!', 1, '2011-07-25 22:28:42', '2016-02-25 21:11:05', 0),
(56, 23, 'It''s not gonna end like this.', 1, '2016-02-25 21:11:05', '2016-02-25 21:11:05', 0),
(57, 23, 'Oh, come on, Stan. Not everything ends the way you think it should. Besides, audiences love happy endings.', 1, '2016-02-25 21:11:05', '2016-02-25 21:11:05', 0),
(58, 25, 'Doesn''t Bill Gates have something like that?', 1, '2016-02-25 21:11:05', '2016-02-25 21:11:05', 0),
(59, 25, 'Bill Who?', 1, '2016-02-25 21:11:05', '2016-02-25 21:11:05', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `psw` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `perfil` enum('Administrador','Redactor','Lector','') COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `valoracion`
--

CREATE TABLE `valoracion` (
  `id` int(11) NOT NULL,
  `ip` char(15) COLLATE utf8_spanish_ci NOT NULL,
  `idBlog` int(11) NOT NULL,
  `val` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_9474526CDAE07E97` (`blog_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `valoracion`
--
ALTER TABLE `valoracion`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT de la tabla `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `valoracion`
--
ALTER TABLE `valoracion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `FK_9474526CDAE07E97` FOREIGN KEY (`blog_id`) REFERENCES `blog` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
