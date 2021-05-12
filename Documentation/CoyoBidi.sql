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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categoria`
--

LOCK TABLES `categoria` WRITE;
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
INSERT INTO `categoria` VALUES (3,'Diccionario'),(4,'Enciclopedia'),(2,'Examen'),(1,'libros de texto'),(6,'obra literaria'),(5,'Revista');
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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `genero`
--

LOCK TABLES `genero` WRITE;
/*!40000 ALTER TABLE `genero` DISABLE KEYS */;
INSERT INTO `genero` VALUES (3,'Biologia'),(5,'Derecho'),(8,'Fantasia'),(4,'Fisica'),(7,'Literatura Clasica'),(6,'Medicina'),(2,'Quimica'),(9,'Teologia'),(1,'terror');
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
  `Img_libro` varchar(50) DEFAULT NULL,
  `autor` varchar(50) NOT NULL DEFAULT 'Anonimo',
  `anio` year(4) DEFAULT NULL,
  `edicion` tinyint(4) NOT NULL,
  `editorial` varchar(50) NOT NULL,
  `categoria` tinyint(4) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `libro` varchar(60) DEFAULT NULL,
  `mayor18` tinyint(4) NOT NULL,
  PRIMARY KEY (`id_libro`),
  KEY `categoria` (`categoria`),
  CONSTRAINT `libro_ibfk_1` FOREIGN KEY (`categoria`) REFERENCES `categoria` (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;
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
INSERT INTO `nombre` VALUES ('','',''),('320011106','Jorge ','Montes Cruz'),('320045316','Benjamin','Mastachi Pineda'),('320051665','Patricio','Alfaro Domínguez'),('320113561','Dario ','Serna Gutierrez'),('320232581','Magdalena Isabel','Flores de la Garza'),('320237964','Sabino Narciso','Salgado Rodriguez'),('320256516','Maria Antonieta','Aguario Carranza'),('320262652','Jose Rodrigo','Martinez Garcia'),('320278901','Aurora','Lopez Maldonado'),('320492394','Diana Alejandra','Villarreal Garcia'),('ENRR971212','Ricardo ','Encina Rodriguez'),('LAPV880815','Victor Hugo','Lara Pineda'),('LOFC900908','Carmen Isabela','Lopez Fernandez'),('SASV951111','Victor Manuel','Saucedo Salgado');
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
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (15,'320051665','2021-05-07','patricio.ad26301@gmail.com','JRRTolkien1*',1),(17,'320256516','2002-11-27','mariadb@hotmail.com','MariaBonitaMariadelAlma',1),(18,'320011106','2004-05-03','jorgemocruz@outlook.com','Xanti19salchihc',1),(20,'320113561','2003-06-04','dariux04@hotmail.com','320113561',1),(21,'320045316','2004-08-16','mastachibenja@live.com.mx','STILLLOVINGYOU',1),(22,'320278901','2003-07-17','unicorniodeaurora@hotmail.com','Amuco27',1),(23,'320492394','2004-02-26','diana26alejandra@hotmail.com','Amando27',1),(24,'320262652','2003-05-05','ingerodrigo05@outlook.com','12345',1),(25,'320232581','2002-05-19','chabelaflores@hotmail.com','54321',1),(26,'320237964','2003-06-06','sabi0603@outlook.com','Talaybaly2004',1),(27,'LOFC900908','1990-09-08','carmelitaisabela@hotmail.com','Margarita25',2),(28,'SASV951111','1995-11-11','blackvictor@hotmail.com','SABNIN5',2),(29,'ENRR971212','1997-12-12','richieelpicchi97@hotmail.com','Sofiamiamor25',2),(30,'LAPV880815','1988-08-15','hugolara98@hotmail.com','Elkaratemipasion2896',3);
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

-- Dump completed on 2021-05-12 15:25:41
