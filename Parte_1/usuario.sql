-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-11-2023 a las 16:06:28
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `usuario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datospersonales`
--

CREATE TABLE `datospersonales` (
  `n_documento` int(15) DEFAULT NULL,
  `nombre` varchar(15) DEFAULT NULL,
  `apellido` varchar(20) DEFAULT NULL,
  `edad` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datospersonales`
--

INSERT INTO `datospersonales` (`n_documento`, `nombre`, `apellido`, `edad`) VALUES
(100245689, 'Carlos', 'González', 28),
(109876543, 'Ana', 'López', 25),
(1122334455, 'Santiago', 'Martínez', 33),
(987654321, 'Valentina', 'Hernández', 22),
(204578963, 'Julián', 'Ramírez', 29),
(301234567, 'Camila', 'Gómez', 26),
(408975310, 'Andrés', 'Pérez', 34),
(507891234, 'María', 'Herrera', 23),
(609283746, 'Luis', 'García', 30),
(700123456, 'Alejandra', 'Montoya', 27);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` varchar(11) NOT NULL,
  `seccion` varchar(50) NOT NULL,
  `producto` varchar(50) NOT NULL,
  `origen` varchar(50) NOT NULL,
  `importada` varchar(50) NOT NULL,
  `precio` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `seccion`, `producto`, `origen`, `importada`, `precio`) VALUES
('ar01', 'CERÁMICA', 'Tubos', 'China', 'VERDADERO', 1400),
('ar02', 'CERÁMICA', 'Plato Decorativo', 'China', 'FALSO', 4500),
('ar03', 'CERÁMICA', 'Juego de te', 'China', 'FALSO', 36000),
('ar04', 'CERÁMICA', 'Cenicero', 'Japón', 'VERDADERO', 16000),
('ar05', 'CERÁMICA', 'Maceta', 'España', 'VERDADERO', 24000),
('ar06', 'CERÁMICA', 'Jarra china', 'China', 'VERDADERO', 106000),
('ar07', 'CONFECCIÓN', 'Tarje Caballero', 'Italia', 'FALSO', 800000),
('ar08', 'CONFECCIÓN', 'Pantalón Señora', 'Marruecos', 'VERDADERO', 138000),
('ar09', 'CONFECCIÓN', 'Camisa Caballero', 'España', 'VERDADERO', 57000),
('ar10', 'CONFECCIÓN', 'Blusa Sra.', 'China', 'VERDADERO', 62999),
('ar11', 'CONFECCIÓN', 'Cazadora piel', 'Italia', 'VERDADERO', 436000),
('ar12', 'CONFECCIÓN', 'Abrigo Caballero', 'Italia', 'VERDADERO', 203000),
('ar13', 'CONFECCIÓN', 'Abrigo Sra', 'Marruecos', 'VERDADERO', 300000),
('ar14', 'CONFECCIÓN', 'Cinturón de piel', 'España', 'VERDADERO', 40000),
('ar15', 'DEPORTE', 'Raqueta Tenis', 'Usa', 'VERDADERO', 78000),
('ar16', 'DEPORTE', 'Chándal', 'Usa', 'FALSO', 193000),
('ar17', 'DEPORTE', 'Tren Eléctrico', 'Japón', 'FALSO', 125400),
('ar18', 'DEPORTE', 'Pistola Olímpica', 'Suecia', 'VERDADERO', 39000),
('ar19', 'DEPORTE', 'Monopatín', 'Marruecos', 'VERDADERO', 93000),
('ar20', 'DEPORTE', 'Balón baloncesto', 'Japón', 'VERDADERO', 63000),
('ar21', 'DEPORTE', 'Balón Fútbol', 'España', 'VERDADERO', 37000),
('ar22', 'DEPORTE', 'Sudadera', 'Usa', 'VERDADERO', 366000),
('ar23', 'DEPORTE', 'Bicicleta de montaña', 'Usa', 'VERDADERO', 470000),
('ar24', 'FERRETERÍA', 'Destornillador', 'España', 'FALSO', 6000),
('ar25', 'FERRETERÍA', 'Serrucho', 'Francia', 'FALSO', 25000),
('ar26', 'FERRETERÍA', 'Llave Inglesa', 'Usa', 'VERDADERO', 20000),
('ar27', 'FERRETERÍA', 'Alicates', 'Italia', 'VERDADERO', 6000),
('ar28', 'FERRETERÍA', 'Martillo', 'España', 'VERDADERO', 10000),
('ar29', 'FERRETERÍA', 'Destornillador', 'Francia', 'VERDADERO', 8000),
('ar30', 'FERRETERÍA', 'Lima Grande', 'España', 'VERDADERO', 18000),
('ar31', 'FERRETERÍA', 'Juego de brocas', 'Taiwán', 'FALSO', 13000),
('ar32', 'JUGUETERÍA', 'Coche Teledirigido', 'Marruecos', 'FALSO', 133000),
('ar33', 'JUGUETERÍA', 'Correpasillos', 'Japón', 'VERDADERO', 86000),
('ar34', 'JUGUETERÍA', 'Consola Video', 'Usa', 'VERDADERO', 3690000),
('ar35', 'JUGUETERÍA', 'Muñeca Andadora', 'España', 'VERDADERO', 88000),
('ar36', 'JUGUETERÍA', 'Fuerte de soldados', 'Japón', 'FALSO', 120000),
('ar37', 'JUGUETERÍA', 'Pistola con sonidos', 'España', 'FALSO', 48000),
('ar38', 'JUGUETERÍA', 'Pie de lámpara', 'Turquía', 'VERDADERO', 33000);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
