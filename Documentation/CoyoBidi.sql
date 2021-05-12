-- MariaDB dump 10.19  Distrib 10.4.18-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: CoyoBidi
-- ------------------------------------------------------
-- Server version	10.4.18-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `categoria`
--

DROP TABLE IF EXISTS `categoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categoria` (
  `id_categoria` tinyint(4) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(30) NOT NULL,
  PRIMARY KEY (`id_categoria`),
  UNIQUE KEY `tipo` (`tipo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categoria`
--

LOCK TABLES `categoria` WRITE;
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `favorito`
--

DROP TABLE IF EXISTS `favorito`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `favorito` (
  `id_favorito` tinyint(4) NOT NULL AUTO_INCREMENT,
  `NoCuenta_RFC` varchar(10) NOT NULL,
  `id_libro` tinyint(4) NOT NULL,
  PRIMARY KEY (`id_favorito`),
  KEY `NoCuenta_RFC` (`NoCuenta_RFC`),
  KEY `id_libro` (`id_libro`),
  CONSTRAINT `favorito_ibfk_1` FOREIGN KEY (`NoCuenta_RFC`) REFERENCES `nombre` (`NoCuenta_RFC`),
  CONSTRAINT `favorito_ibfk_2` FOREIGN KEY (`id_libro`) REFERENCES `libro` (`id_libro`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `favorito`
--

LOCK TABLES `favorito` WRITE;
/*!40000 ALTER TABLE `favorito` DISABLE KEYS */;
/*!40000 ALTER TABLE `favorito` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `genero`
--

DROP TABLE IF EXISTS `genero`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `genero` (
  `id_genero` tinyint(4) NOT NULL AUTO_INCREMENT,
  `genero` varchar(20) NOT NULL,
  PRIMARY KEY (`id_genero`),
  UNIQUE KEY `genero` (`genero`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `genero`
--

LOCK TABLES `genero` WRITE;
/*!40000 ALTER TABLE `genero` DISABLE KEYS */;
/*!40000 ALTER TABLE `genero` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `histdescarga`
--

DROP TABLE IF EXISTS `histdescarga`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `histdescarga` (
  `id_descarga` tinyint(4) NOT NULL AUTO_INCREMENT,
  `id_libro` tinyint(4) DEFAULT NULL,
  `id_usuario` tinyint(4) DEFAULT NULL,
  `hora` datetime DEFAULT NULL,
  PRIMARY KEY (`id_descarga`),
  KEY `id_libro` (`id_libro`),
  KEY `id_usuario` (`id_usuario`),
  CONSTRAINT `histdescarga_ibfk_1` FOREIGN KEY (`id_libro`) REFERENCES `libro` (`id_libro`),
  CONSTRAINT `histdescarga_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `histdescarga`
--

LOCK TABLES `histdescarga` WRITE;
/*!40000 ALTER TABLE `histdescarga` DISABLE KEYS */;
/*!40000 ALTER TABLE `histdescarga` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `libro`
--

DROP TABLE IF EXISTS `libro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `libro` (
  `id_libro` tinyint(4) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) NOT NULL,
  `Img_libro` blob NOT NULL,
  `autor` varchar(50) NOT NULL,
  `anio` date DEFAULT NULL,
  `edicion` tinyint(4) NOT NULL,
  `editorial` varchar(50) NOT NULL,
  `categoria` tinyint(4) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `libro` blob NOT NULL,
  PRIMARY KEY (`id_libro`),
  KEY `categoria` (`categoria`),
  CONSTRAINT `libro_ibfk_1` FOREIGN KEY (`categoria`) REFERENCES `categoria` (`id_categoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `libro`
--

LOCK TABLES `libro` WRITE;
/*!40000 ALTER TABLE `libro` DISABLE KEYS */;
/*!40000 ALTER TABLE `libro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `librohasgenero`
--

DROP TABLE IF EXISTS `librohasgenero`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `librohasgenero` (
  `id_lhg` tinyint(4) NOT NULL AUTO_INCREMENT,
  `id_libro` tinyint(4) NOT NULL,
  `id_genero` tinyint(4) NOT NULL,
  PRIMARY KEY (`id_lhg`),
  KEY `id_genero` (`id_genero`),
  KEY `id_libro` (`id_libro`),
  CONSTRAINT `librohasgenero_ibfk_1` FOREIGN KEY (`id_genero`) REFERENCES `genero` (`id_genero`),
  CONSTRAINT `librohasgenero_ibfk_2` FOREIGN KEY (`id_libro`) REFERENCES `libro` (`id_libro`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `librohasgenero`
--

LOCK TABLES `librohasgenero` WRITE;
/*!40000 ALTER TABLE `librohasgenero` DISABLE KEYS */;
/*!40000 ALTER TABLE `librohasgenero` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `librohasreporte`
--

DROP TABLE IF EXISTS `librohasreporte`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `librohasreporte` (
  `id_lhr` tinyint(4) NOT NULL AUTO_INCREMENT,
  `id_reporte` tinyint(4) DEFAULT NULL,
  `id_libro` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id_lhr`),
  KEY `id_libro` (`id_libro`),
  KEY `id_reporte` (`id_reporte`),
  CONSTRAINT `librohasreporte_ibfk_1` FOREIGN KEY (`id_libro`) REFERENCES `libro` (`id_libro`),
  CONSTRAINT `librohasreporte_ibfk_2` FOREIGN KEY (`id_reporte`) REFERENCES `reporte` (`id_reporte`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `librohasreporte`
--

LOCK TABLES `librohasreporte` WRITE;
/*!40000 ALTER TABLE `librohasreporte` DISABLE KEYS */;
/*!40000 ALTER TABLE `librohasreporte` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nombre`
--

DROP TABLE IF EXISTS `nombre`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nombre` (
  `NoCuenta_RFC` varchar(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `Apellidos` varchar(50) NOT NULL,
  PRIMARY KEY (`NoCuenta_RFC`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nombre`
--

LOCK TABLES `nombre` WRITE;
/*!40000 ALTER TABLE `nombre` DISABLE KEYS */;
INSERT INTO `nombre` VALUES ('320051665','Patricio','Alfaro Domínguez');
/*!40000 ALTER TABLE `nombre` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reporte`
--

DROP TABLE IF EXISTS `reporte`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reporte` (
  `id_reporte` tinyint(4) NOT NULL AUTO_INCREMENT,
  `causa` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id_reporte`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reporte`
--

LOCK TABLES `reporte` WRITE;
/*!40000 ALTER TABLE `reporte` DISABLE KEYS */;
/*!40000 ALTER TABLE `reporte` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `solicitud`
--

DROP TABLE IF EXISTS `solicitud`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `solicitud` (
  `id_solicitud` tinyint(4) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) DEFAULT NULL,
  `autor` varchar(50) DEFAULT NULL,
  `anio` date DEFAULT NULL,
  `editorial` varchar(50) DEFAULT NULL,
  `id_genero` tinyint(4) DEFAULT NULL,
  `id_usuario` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id_solicitud`),
  KEY `id_genero` (`id_genero`),
  KEY `id_usuario` (`id_usuario`),
  CONSTRAINT `solicitud_ibfk_1` FOREIGN KEY (`id_genero`) REFERENCES `genero` (`id_genero`),
  CONSTRAINT `solicitud_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `solicitud`
--

LOCK TABLES `solicitud` WRITE;
/*!40000 ALTER TABLE `solicitud` DISABLE KEYS */;
/*!40000 ALTER TABLE `solicitud` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipousuario`
--

DROP TABLE IF EXISTS `tipousuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipousuario` (
  `id_tipoUsuario` tinyint(4) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id_tipoUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipousuario`
--

LOCK TABLES `tipousuario` WRITE;
/*!40000 ALTER TABLE `tipousuario` DISABLE KEYS */;
INSERT INTO `tipousuario` VALUES (1,'lector'),(2,'Bibliotecario'),(3,'administrador');
/*!40000 ALTER TABLE `tipousuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `id_usuario` tinyint(4) NOT NULL AUTO_INCREMENT,
  `NoCuenta_RFC` varchar(10) NOT NULL,
  `nacimiento` date DEFAULT NULL,
  `correo` varchar(60) NOT NULL,
  `contraseña` varchar(50) NOT NULL,
  `id_tipoUsuario` tinyint(4) NOT NULL,
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `NoCuenta_RFC` (`NoCuenta_RFC`),
  UNIQUE KEY `correo` (`correo`),
  KEY `id_tipoUsuario` (`id_tipoUsuario`),
  CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_tipoUsuario`) REFERENCES `tipousuario` (`id_tipoUsuario`),
  CONSTRAINT `usuario_ibfk_2` FOREIGN KEY (`NoCuenta_RFC`) REFERENCES `nombre` (`NoCuenta_RFC`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (11,'320051665','2021-05-07','patricio.ad26301@gmail.com','JRRTolkien1*',1);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-05-12  0:54:55
