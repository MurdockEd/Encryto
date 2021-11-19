-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-11-2021 a las 18:16:33
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `desproyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `Id` int(20) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `rol` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`Id`, `usuario`, `pass`, `rol`) VALUES
(1, 'Mario E', 'sr1AWZHSdWV3lIfZ1gpvDw==', 'Desen'),
(2, 'Mario', 'sr1AWZHSdWV3lIfZ1gpvDw==', 'Desen'),
(3, 'Eduardo', 'sr1AWZHSdWV3lIfZ1gpvDw==', 'Encriptado'),
(4, 'Juan', '1p/c4sgehD4AD9eKdOA9bg==', 'Desen');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id` int(11) NOT NULL,
  `usuario` varchar(11) NOT NULL,
  `tipo` varchar(100) NOT NULL,
  `texto` varchar(100) NOT NULL,
  `cadena` varchar(100) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id`, `usuario`, `tipo`, `texto`, `cadena`, `timestamp`) VALUES
(1, '3DKXpok7RJM', 'MD5', 'red', 'mT8qADjyG/eTQhHJa50Pvg==', '2021-11-12 17:35:36'),
(2, '3DKXpok7RJM', 'SHA1', 'red', 'XYKgh6BYplu3PZ4yFBARwQ==', '2021-11-12 17:38:14'),
(3, 'nlFPlK6chWB', 'MD5', 'XYKgh6BYplu3PZ4yFBARwQ==', '', '2021-11-13 00:32:05'),
(4, 'nlFPlK6chWB', 'SHA1', 'XYKgh6BYplu3PZ4yFBARwQ==', 'red', '2021-11-13 00:32:08'),
(5, '3DKXpok7RJM', 'MD5', 'Milanesa', 'g0VbPyNYcI+3gLI5dRDQZQ==', '2021-11-17 02:26:24'),
(6, '3DKXpok7RJM', 'SHA1', 'Milanesa', 'HhPG0IrPhIXnFuJnVBnCCw==', '2021-11-17 02:26:32'),
(7, '3DKXpok7RJM', 'SHA1', 'Unach', 'tHCX4L+ZhFCrmErEPr3UHg==', '2021-11-17 02:26:43'),
(8, '3DKXpok7RJM', 'MD5', 'Esta es una cadena lo suficientemente grande', 'WNo+FtAyGx39pKkRWxUfgnxga3yCEUvtm5cbLltg/kSDB/yk08pzGiV/Dj7K06MS', '2021-11-17 05:21:20'),
(9, '3DKXpok7RJM', 'SHA1', 'Esta es una cadena lo suficientemente grande', 'QMBjACyHtKP/6bV1/o9AKGOTfxgtzSTjmbfr7yg67eUG3pwrQrLpq4oGC375UJbB', '2021-11-17 05:21:55'),
(10, 'nlFPlK6chWB', 'MD5', 'WNo+FtAyGx39pKkRWxUfgnxga3yCEUvtm5cbLltg/kSDB/yk08pzGiV/Dj7K06MS', 'Esta es una cadena lo suficientemente grande', '2021-11-17 05:25:44'),
(11, 'nlFPlK6chWB', 'SHA1', 'WNo+FtAyGx39pKkRWxUfgnxga3yCEUvtm5cbLltg/kSDB/yk08pzGiV/Dj7K06MS', '', '2021-11-17 05:25:54'),
(12, 'nlFPlK6chWB', 'SHA1', 'QMBjACyHtKP/6bV1/o9AKGOTfxgtzSTjmbfr7yg67eUG3pwrQrLpq4oGC375UJbB', 'Esta es una cadena lo suficientemente grande', '2021-11-17 05:26:12'),
(13, 'nlFPlK6chWB', 'MD5', 'QMBjACyHtKP/6bV1/o9AKGOTfxgtzSTjmbfr7yg67eUG3pwrQrLpq4oGC375UJbB', '', '2021-11-17 05:26:17'),
(14, 'nlFPlK6chWB', 'SHA1', 'QMBjACyHtKP/6bV1/o9AKGOTfxgtzSTjmbfr7yg67eUG3pwrQrLpq4oGC375UJbB', 'Esta es una cadena lo suficientemente grande', '2021-11-17 05:29:33'),
(15, 'nlFPlK6chWB', 'MD5', 'QMBjACyHtKP/6bV1/o9AKGOTfxgtzSTjmbfr7yg67eUG3pwrQrLpq4oGC375UJbB', '', '2021-11-17 05:29:39'),
(16, 'nlFPlK6chWB', 'MD5', 'WNo+FtAyGx39pKkRWxUfgnxga3yCEUvtm5cbLltg/kSDB/yk08pzGiV/Dj7K06MS', 'Esta es una cadena lo suficientemente grande', '2021-11-17 05:29:59');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
