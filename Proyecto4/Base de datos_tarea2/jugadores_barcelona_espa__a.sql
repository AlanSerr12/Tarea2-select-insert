-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-12-2023 a las 23:32:13
-- Versión del servidor: 10.4.27-MariaDB-log
-- Versión de PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sexto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jugadores barcelona españa`
--

CREATE TABLE `jugadores barcelona españa` (
  `Nombre` varchar(200) NOT NULL,
  `Apellido` varchar(200) NOT NULL,
  `NJugador` int(100) NOT NULL,
  `Edad` int(100) NOT NULL,
  `Rol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `jugadores barcelona españa`
--

INSERT INTO `jugadores barcelona españa` (`Nombre`, `Apellido`, `NJugador`, `Edad`, `Rol`) VALUES
('', '', 0, 0, ''),
('Alan', 'dsds', 0, 32, 'Portero'),
('sfsf', 'asdasda', 0, 45, 'Jugador'),
('wew', 'qweqw', 0, 32, 'Portero'),
('sfsf', 'Serrano', 0, 32, 'Jugador'),
('dwqdq', 'weqwe', 0, 433, 'Portero'),
('eqwqeqw', 'qwewqe', 0, 23, 'Portero'),
('eqeq', 'wqeqw', 0, 22, 'Jugador'),
('', '', 0, 0, ''),
('', '', 0, 0, ''),
('', '', 0, 0, ''),
('dasdas', 'dsawa', 0, 23, 'Jugador'),
('dadsa', 'fsdfs', 0, 23, 'Jugador'),
('adasd', 'asdas', 0, 23, 'Jugador');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
