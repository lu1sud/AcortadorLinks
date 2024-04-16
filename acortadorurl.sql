-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 16-03-2024 a las 17:05:15
-- Versión del servidor: 8.0.31
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `acortadorurl`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `url`
--

DROP TABLE IF EXISTS `url`;
CREATE TABLE IF NOT EXISTS `url` (
  `id` int NOT NULL AUTO_INCREMENT,
  `url_corto` varchar(255) NOT NULL,
  `url_original` varchar(1000) NOT NULL,
  `click` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `url`
--

INSERT INTO `url` (`id`, `url_corto`, `url_original`, `click`) VALUES
(49, '3ff57', 'https://www.youtube.com/watch?v=eDoqP_A82aQ', 5),
(50, 'a71cf', 'https://www.google.com/search?q=chatgpt&rlz=1C1ALOY_esBO1057BO1057&oq=cha&gs_lcrp=EgZjaHJvbWUqDggBEEUYJxg7GIAEGIoFMgYIABBFGDkyDggBEEUYJxg7GIAEGIoFMgwIAhAjGCcYgAQYigUyEggDEC4YQxiDARixAxiABBiKBTIMCAQQLhhDGIAEGIoFMhAIBRAAGIMBGLEDGMkDGIAEMg0IBhAAGJIDGIAEGIoFMg0IBxAAGIMBGLEDGIAEMgcICBAAGI8CMgcICRAAGI8C0gEJNDMzMGowajE1qAIAsAIA&sourceid=chrome&ie=UTF-8', 2),
(47, 'ae15a', 'https://www.google.com/search?q=hola+mundo&rlz=1C1ALOY_esBO1057BO1057&oq=hola+mundo&gs_lcrp=EgZjaHJvbWUqDggAEEUYJxg7GIAEGIoFMg4IABBFGCcYOxiABBiKBTIGCAEQRRhAMgcIAhAAGIAEMgcIAxAAGIAEMgcIBBAAGIAEMgcIBRAAGIAEMgcIBhAAGIAEMgcIBxAAGIAE0gEJNDA0N2owajE1qAIAsAIA&sourceid=chrome&ie=UTF-8', 1),
(44, '7439e', 'https://www.youtube.com/watch?v=Tl7M8XDy3Jk', 2),
(45, 'af99b', 'https://www.youtube.com/watch?v=vyCjn7Ur2vk', 1),
(43, 'fccbd', 'http://localhost/proyectosPHP/AcortadorLink/index.php', 0),
(41, '4655a', 'https://www.youtube.com/watch?v=HyHNuVaZJ-k&list=RDaTJncWndUB8&index=20', 1),
(42, '9817b', 'https://www.youtube.com/watch?v=HtVGA1EA7eo', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
