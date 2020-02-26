-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.7.15-log - MySQL Community Server (GPL)
-- SO del servidor:              Win32
-- HeidiSQL Versión:             10.1.0.5464
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para bd_ijja
CREATE DATABASE IF NOT EXISTS `bd_ijja` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `bd_ijja`;

-- Volcando estructura para tabla bd_ijja.categoria
CREATE TABLE IF NOT EXISTS `categoria` (
  `idCategoria` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idCategoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla bd_ijja.categoria: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;

-- Volcando estructura para tabla bd_ijja.niveles
CREATE TABLE IF NOT EXISTS `niveles` (
  `idnivel` int(11) NOT NULL AUTO_INCREMENT,
  `tiponivel` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idnivel`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla bd_ijja.niveles: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `niveles` DISABLE KEYS */;
INSERT INTO `niveles` (`idnivel`, `tiponivel`) VALUES
	(1, 'administrador'),
	(2, 'cliente');
/*!40000 ALTER TABLE `niveles` ENABLE KEYS */;

-- Volcando estructura para tabla bd_ijja.producto
CREATE TABLE IF NOT EXISTS `producto` (
  `idProducto` int(11) NOT NULL AUTO_INCREMENT,
  `id_Subcategoria` int(11) NOT NULL DEFAULT '0',
  `marca` varchar(50) NOT NULL DEFAULT '0',
  `cantidad` int(11) NOT NULL DEFAULT '0',
  `talla` int(11) NOT NULL DEFAULT '0',
  `color` varchar(50) NOT NULL DEFAULT '0',
  `precio` varchar(50) NOT NULL DEFAULT '0',
  `imagen` varchar(100) NOT NULL DEFAULT '0',
  `descripcion` varchar(600) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idProducto`),
  KEY `FK_producto_subcategoria` (`id_Subcategoria`),
  CONSTRAINT `FK_producto_subcategoria` FOREIGN KEY (`id_Subcategoria`) REFERENCES `subcategoria` (`IdSubcategoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla bd_ijja.producto: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `producto` DISABLE KEYS */;
/*!40000 ALTER TABLE `producto` ENABLE KEYS */;

-- Volcando estructura para tabla bd_ijja.subcategoria
CREATE TABLE IF NOT EXISTS `subcategoria` (
  `IdSubcategoria` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(50) NOT NULL DEFAULT '0',
  `id_Categoria` int(11) DEFAULT NULL,
  PRIMARY KEY (`IdSubcategoria`),
  KEY `FK_subcategoria_categoria` (`id_Categoria`),
  CONSTRAINT `FK_subcategoria_categoria` FOREIGN KEY (`id_Categoria`) REFERENCES `categoria` (`idCategoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla bd_ijja.subcategoria: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `subcategoria` DISABLE KEYS */;
/*!40000 ALTER TABLE `subcategoria` ENABLE KEYS */;

-- Volcando estructura para tabla bd_ijja.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `identificacion` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL DEFAULT '0',
  `apellidos` varchar(50) NOT NULL DEFAULT '0',
  `email` varchar(50) NOT NULL DEFAULT '0',
  `password` varchar(68) NOT NULL DEFAULT '0',
  `telefono` varchar(68) NOT NULL DEFAULT '0',
  `direccion` varchar(68) NOT NULL DEFAULT '0',
  `estado` int(2) NOT NULL,
  `id_nivel` int(11) NOT NULL DEFAULT '0',
  `fechaderegistro` date DEFAULT NULL,
  PRIMARY KEY (`identificacion`),
  KEY `FK_usuario_niveles` (`id_nivel`),
  CONSTRAINT `FK_usuario_niveles` FOREIGN KEY (`id_nivel`) REFERENCES `niveles` (`idnivel`)
) ENGINE=InnoDB AUTO_INCREMENT=1234568 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla bd_ijja.usuario: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` (`identificacion`, `nombre`, `apellidos`, `email`, `password`, `telefono`, `direccion`, `estado`, `id_nivel`, `fechaderegistro`) VALUES
	(23456, 'Jose ', 'Sierra', 'jose@gmail.com', '4321', '765432', 'Corozal', 1, 2, '2019-10-15'),
	(1234567, 'Fernando', 'Monterroza', 'fer@gmail.com', '1234', '345678', 'zumbao', 1, 1, '2019-10-15');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
