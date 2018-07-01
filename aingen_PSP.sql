-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 01-07-2018 a las 09:29:07
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `aingen_PSP`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Encuesta_Conductor`
--

CREATE TABLE `Encuesta_Conductor` (
  `id_Respuesta` int(50) NOT NULL,
  `id_Usuario` int(50) NOT NULL,
  `Ruta` varchar(100) NOT NULL,
  `Cantidad_Pasajeros` varchar(100) NOT NULL,
  `Tiempo_Recorrido_Asig` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuesta_Controlador`
--

CREATE TABLE `encuesta_Controlador` (
  `id_Respuesta` int(11) NOT NULL,
  `id_Usuario` int(11) NOT NULL,
  `Ruta` varchar(100) NOT NULL,
  `Tiempo_Recorrido_Adecuado` varchar(100) NOT NULL,
  `Intervalo_Indicado` varchar(100) NOT NULL,
  `Conoce_Ruta_Y_Atiende_paradero` varchar(100) NOT NULL,
  `Saltos_de_tiempo_Cambio_Velocidad` varchar(100) NOT NULL,
  `Recibe_Quejas_de_Usuarios` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Encuesta_Pasajero`
--

CREATE TABLE `Encuesta_Pasajero` (
  `id_Respuesta` int(11) NOT NULL,
  `id_Usuario` int(11) NOT NULL,
  `Ruta` varchar(100) NOT NULL,
  `Dias_uso_Servicio` varchar(100) NOT NULL,
  `Identificacion_Paraderos` varchar(100) NOT NULL,
  `Tiempo_espera_Servicio` varchar(100) NOT NULL,
  `Cuantas_veces_usted` varchar(100) NOT NULL,
  `Tiempo_duracion_trayecto` varchar(100) NOT NULL,
  `Como_Califica_Servicio` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `RegistroUsuarios`
--

CREATE TABLE `RegistroUsuarios` (
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `cedula` int(11) NOT NULL,
  `usuario` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `id_usuario` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `RegistroUsuarios`
--

INSERT INTO `RegistroUsuarios` (`nombre`, `apellido`, `cedula`, `usuario`, `password`, `id_usuario`) VALUES
('JOHN', 'GARZON', 80902567, 'JOHNG', 'cc06e7b4b8791ed0f7bc714792b7b26f', 1),
('German', 'Cachope', 79989847, 'Germancach', '551aab82e3eafc1ccc4d993290fab856', 2),
('Carol', 'Becerra', 1020748240, 'cnbecerrar', 'e4d6a51ebba72e6064e5991fdb970d65', 3),
('Andrés', 'Cañón', 80123456, 'andrescanm', 'e10adc3949ba59abbe56e057f20f883e', 4),
('Pedro', 'Perez', 1234, 'pperez', '81dc9bdb52d04dc20036dbd8313ed055', 5),
('Diego', 'Orjuelo', 1070013960, 'dorjuela', 'fb47fd604b6cc9637154aeba6ae136be', 6),
('JOHN', 'GARZON', 123456, 'JOHN', '202cb962ac59075b964b07152d234b70', 7);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Encuesta_Conductor`
--
ALTER TABLE `Encuesta_Conductor`
  ADD PRIMARY KEY (`id_Respuesta`),
  ADD UNIQUE KEY `Usuario` (`id_Usuario`);

--
-- Indices de la tabla `encuesta_Controlador`
--
ALTER TABLE `encuesta_Controlador`
  ADD PRIMARY KEY (`id_Respuesta`),
  ADD UNIQUE KEY `id_Usuario` (`id_Usuario`);

--
-- Indices de la tabla `Encuesta_Pasajero`
--
ALTER TABLE `Encuesta_Pasajero`
  ADD PRIMARY KEY (`id_Respuesta`),
  ADD UNIQUE KEY `id_Usuario` (`id_Usuario`);

--
-- Indices de la tabla `RegistroUsuarios`
--
ALTER TABLE `RegistroUsuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `cedula` (`cedula`) USING BTREE;

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Encuesta_Conductor`
--
ALTER TABLE `Encuesta_Conductor`
  MODIFY `id_Respuesta` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `encuesta_Controlador`
--
ALTER TABLE `encuesta_Controlador`
  MODIFY `id_Respuesta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Encuesta_Pasajero`
--
ALTER TABLE `Encuesta_Pasajero`
  MODIFY `id_Respuesta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `RegistroUsuarios`
--
ALTER TABLE `RegistroUsuarios`
  MODIFY `id_usuario` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
