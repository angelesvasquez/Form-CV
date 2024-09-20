-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-09-2024 a las 05:06:25
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `form_cv`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `ID` int(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `fecha` date NOT NULL,
  `ocupacion` varchar(50) NOT NULL,
  `telefono` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nacionalidad` varchar(50) NOT NULL,
  `nivel_ingles` varchar(50) NOT NULL,
  `lenguajes` text NOT NULL,
  `aptitudes` text NOT NULL,
  `habilidades` text NOT NULL,
  `perfil` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`ID`, `nombre`, `fecha`, `ocupacion`, `telefono`, `email`, `nacionalidad`, `nivel_ingles`, `lenguajes`, `aptitudes`, `habilidades`, `perfil`) VALUES
(1, 'José Castañeda', '1989-07-20', 'Desarrollador', 901912421, 'jose_121@gmail.com', 'Perú', 'Avanzado', 'C++, C, C#, Python, Java', 'Pensamiento Analítico', 'Programación en C++, Desarrollo web, Seguridad Informática', 'Hola, mi nombre es José Castañeda'),
(2, 'Jessie flores', '2024-09-06', 'Desarrolladora', 901234213, 'jes_123@gmail.com', 'Mexico', 'Intermedio', 'Java, SQL, JavaScript, PHP', 'Innovación y creatividad', 'Desarrollo web, Machine Learning', 'Hola, soy desarrolladora');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos`
--
ALTER TABLE `datos`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
