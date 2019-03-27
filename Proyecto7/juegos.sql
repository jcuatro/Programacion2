-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.1.28-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win32
-- HeidiSQL Versión:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para juegos
CREATE DATABASE IF NOT EXISTS `juegos` /*!40100 DEFAULT CHARACTER SET latin1 COLLATE latin1_spanish_ci */;
USE `juegos`;

-- Volcando estructura para tabla juegos.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `Nombre` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `Apellidos` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `Correo` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `Edad` int(11) DEFAULT NULL,
  `Usuario` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `Puntuacion` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  KEY `nombre` (`Nombre`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- Volcando datos para la tabla juegos.usuarios: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`Nombre`, `Apellidos`, `Correo`, `Edad`, `Usuario`, `Puntuacion`, `id`) VALUES
	('a', 'a', 'a', 2, 'a', 0, 1),
	('a', 'b', 'asdadsa', 1, 'asd', NULL, 2),
	('c', 'c', 'c', 4, 'c', NULL, 3),
	('c', 'c', 'c', 4, 'c', NULL, 4),
	('c', 'c', 'c', 4, 'c', NULL, 5),
	('c', 'c', 'c', 4, 'c', NULL, 6);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
