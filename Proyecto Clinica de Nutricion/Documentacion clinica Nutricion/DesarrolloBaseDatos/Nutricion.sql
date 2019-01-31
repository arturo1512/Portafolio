-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: nutricion
-- ------------------------------------------------------
-- Server version	5.7.21-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `aplicacion`
--

DROP TABLE IF EXISTS `aplicacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aplicacion` (
  `i_pk_aplicacion` int(11) NOT NULL AUTO_INCREMENT,
  `vc_name` varchar(250) NOT NULL,
  `vc_descripcion` text NOT NULL,
  PRIMARY KEY (`i_pk_aplicacion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aplicacion`
--

LOCK TABLES `aplicacion` WRITE;
/*!40000 ALTER TABLE `aplicacion` DISABLE KEYS */;
/*!40000 ALTER TABLE `aplicacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `aplicacion_has_grupo`
--

DROP TABLE IF EXISTS `aplicacion_has_grupo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aplicacion_has_grupo` (
  `i_pk_aplicacion` int(11) NOT NULL AUTO_INCREMENT,
  `i_pk_Grupo` int(11) NOT NULL,
  `bool_read` tinyint(4) NOT NULL,
  `bool_write` tinyint(4) NOT NULL,
  `bool_update` tinyint(4) NOT NULL,
  PRIMARY KEY (`i_pk_aplicacion`,`i_pk_Grupo`),
  KEY `fk_Aplicacion_has_Grupo_Grupo1_idx` (`i_pk_Grupo`),
  KEY `fk_Aplicacion_has_Grupo_Aplicacion1_idx` (`i_pk_aplicacion`),
  CONSTRAINT `fk_Aplicacion_has_Grupo_Aplicacion1` FOREIGN KEY (`i_pk_aplicacion`) REFERENCES `aplicacion` (`i_pk_aplicacion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Aplicacion_has_Grupo_Grupo1` FOREIGN KEY (`i_pk_Grupo`) REFERENCES `grupo` (`i_pk_Grupo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aplicacion_has_grupo`
--

LOCK TABLES `aplicacion_has_grupo` WRITE;
/*!40000 ALTER TABLE `aplicacion_has_grupo` DISABLE KEYS */;
/*!40000 ALTER TABLE `aplicacion_has_grupo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bitacora`
--

DROP TABLE IF EXISTS `bitacora`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bitacora` (
  `i_pk_Numsesion` int(11) NOT NULL AUTO_INCREMENT,
  `dt_fechaRegistro` date DEFAULT NULL,
  `vc_user` varchar(100) DEFAULT NULL,
  `vc_move` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`i_pk_Numsesion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bitacora`
--

LOCK TABLES `bitacora` WRITE;
/*!40000 ALTER TABLE `bitacora` DISABLE KEYS */;
/*!40000 ALTER TABLE `bitacora` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cambioprecio`
--

DROP TABLE IF EXISTS `cambioprecio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cambioprecio` (
  `i_pk_codigoBarras` int(11) NOT NULL AUTO_INCREMENT,
  `vc_nombre` varchar(80) DEFAULT NULL,
  `d_nuevoPrecio` float DEFAULT NULL,
  `dt_fecha` datetime DEFAULT NULL,
  `vc_user` varchar(50) DEFAULT NULL,
  `vc_motivo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`i_pk_codigoBarras`),
  UNIQUE KEY `idProdMedico_UNIQUE` (`i_pk_codigoBarras`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cambioprecio`
--

LOCK TABLES `cambioprecio` WRITE;
/*!40000 ALTER TABLE `cambioprecio` DISABLE KEYS */;
INSERT INTO `cambioprecio` VALUES (1,'prueba',86.2069,'2018-03-29 23:26:51','root@localhost','cambio de precio'),(2,'prueba',86.2069,'2018-03-29 23:27:44','root@localhost','cambio de precio'),(3,'prueba',5172.41,'2018-03-29 23:28:05','root@localhost','cambio de precio'),(4,'prueba',5172.41,'2018-04-02 19:35:47','root@localhost','cambio de precio'),(5,'prueba',5172.41,'2018-04-02 21:17:23','root@localhost','cambio de precio'),(6,'prueba',5172.41,'2018-04-02 21:18:54','root@localhost','cambio de precio'),(7,'prueba',5172.41,'2018-04-02 21:19:06','root@localhost','cambio de precio'),(8,'prueba',5172.41,'2018-04-02 21:19:07','root@localhost','cambio de precio'),(9,'prueba',5172.41,'2018-04-02 21:20:00','root@localhost','cambio de precio'),(10,'prueba',5172.41,'2018-04-02 21:20:29','root@localhost','cambio de precio'),(11,'prueba',5172.41,'2018-04-02 21:23:36','root@localhost','cambio de precio'),(12,'prueba',5172.41,'2018-04-02 21:24:59','root@localhost','cambio de precio'),(13,'prueba',5172.41,'2018-04-02 21:26:48','root@localhost','cambio de precio'),(14,'prueba',5172.41,'2018-04-02 21:27:08','root@localhost','cambio de precio'),(15,'prueba',5172.41,'2018-04-02 21:29:12','root@localhost','cambio de precio'),(16,'prueba',3934.48,'2018-04-02 21:35:36','root@localhost','cambio de precio'),(17,'joaquin',121323,'2018-04-02 21:38:11','root@localhost','cambio'),(18,'Producto',100,'2018-04-02 23:59:22','root@localhost','cambioDePrecio'),(19,'Producto',420,'2018-04-03 00:10:46','root@localhost','cambioDePrecio');
/*!40000 ALTER TABLE `cambioprecio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `catalogoconsulta`
--

DROP TABLE IF EXISTS `catalogoconsulta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `catalogoconsulta` (
  `idcatCitas` int(11) NOT NULL AUTO_INCREMENT,
  `vc_consulta` varchar(45) NOT NULL,
  PRIMARY KEY (`idcatCitas`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `catalogoconsulta`
--

LOCK TABLES `catalogoconsulta` WRITE;
/*!40000 ALTER TABLE `catalogoconsulta` DISABLE KEYS */;
INSERT INTO `catalogoconsulta` VALUES (1,'Nutrición Bariátrica'),(2,'Nutrición clínica'),(3,'Nutrición preventiva'),(4,'Tratamiento de la obesidad'),(5,'Nutrición oncológica'),(6,'Enfermedad renal ateroembólica'),(7,'Control de peso');
/*!40000 ALTER TABLE `catalogoconsulta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cita`
--

DROP TABLE IF EXISTS `cita`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cita` (
  `i_pk_id_cita` int(11) NOT NULL AUTO_INCREMENT,
  `fk_idCliente` int(11) DEFAULT NULL,
  `fk_numEmpleado` int(11) DEFAULT NULL,
  `dt_hora` time DEFAULT NULL,
  `bol_status` tinyint(4) DEFAULT NULL,
  `vc_tipo` varchar(90) DEFAULT NULL,
  `dt_fechaInicio` date DEFAULT NULL,
  `dt_fecha_final` date DEFAULT NULL,
  PRIMARY KEY (`i_pk_id_cita`),
  KEY `fk_Cliente_has_Empleado_Empleado1_idx` (`fk_numEmpleado`),
  KEY `fk_Cliente_has_Empleado_Cliente1_idx` (`fk_idCliente`),
  CONSTRAINT `fk_Cliente_has_Empleado_Cliente1` FOREIGN KEY (`fk_idCliente`) REFERENCES `cliente` (`i_pk_idCliente`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_Cliente_has_Empleado_Empleado1` FOREIGN KEY (`fk_numEmpleado`) REFERENCES `empleado` (`i_pk_num_emp`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cita`
--

LOCK TABLES `cita` WRITE;
/*!40000 ALTER TABLE `cita` DISABLE KEYS */;
INSERT INTO `cita` VALUES (1,NULL,NULL,'00:12:00',NULL,'4','2018-04-24','2018-04-26');
/*!40000 ALTER TABLE `cita` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary view structure for view `citacliente`
--

DROP TABLE IF EXISTS `citacliente`;
/*!50001 DROP VIEW IF EXISTS `citacliente`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `citacliente` AS SELECT 
 1 AS `i_pk_id_cita`,
 1 AS `Numerodecliente`,
 1 AS `dt_hora`,
 1 AS `bol_status`,
 1 AS `vc_tipo`,
 1 AS `dt_fechaInicio`,
 1 AS `dt_fecha_final`,
 1 AS `Cliente`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `cliente`
--

DROP TABLE IF EXISTS `cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cliente` (
  `i_pk_idCliente` int(11) NOT NULL AUTO_INCREMENT,
  `vc_nombre` varchar(80) NOT NULL,
  `vc_apePatern` varchar(80) NOT NULL,
  `vc_apeMat` varchar(80) NOT NULL,
  `i_edad` smallint(6) NOT NULL,
  `f_peso` float NOT NULL,
  `i_telefono` int(11) DEFAULT NULL,
  `vc_mail` varchar(100) DEFAULT NULL,
  `i_fk_idDireccion` int(11) DEFAULT NULL,
  PRIMARY KEY (`i_pk_idCliente`),
  UNIQUE KEY `idCliente_UNIQUE` (`i_pk_idCliente`),
  KEY `fk_Cliente_Direccion1_idx` (`i_fk_idDireccion`),
  CONSTRAINT `fk_Cliente_Direccion1` FOREIGN KEY (`i_fk_idDireccion`) REFERENCES `direccion` (`i_pk_idDireccion`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cliente`
--

LOCK TABLES `cliente` WRITE;
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT INTO `cliente` VALUES (1,'arturo','guerrero','guerrero',23,23,2147483647,'sadasfdsaf@hot',NULL),(2,'alexa','Wenzel','colin',21,45,2147483647,'arturo@mail.com',NULL),(3,'alexa','Wenzel','colin',21,45,2147483647,'arturo@mail.com',NULL),(4,'alexa','guerrero','peña',12,123,2147483647,'arturo@mail.com',NULL),(5,'alexa','guerrero','peña',12,123,2147483647,'arturo@mail.com',NULL),(6,'alexa','guerrero','peña',12,123,2147483647,'arturo@mail.com',NULL),(7,'alexa','guerrero','peña',12,123,2147483647,'arturo@mail.com',NULL),(8,'prueba','prueeba','prueeba',5000,3444,2147483647,'arturo@mail.com',NULL),(9,'prueba','prueeba','prueeba',5000,3444,2147483647,'arturo@mail.com',NULL),(10,'alexa','prueba','prueba',34,12,1212121212,'arturo@mail.com',NULL),(11,'alexa','prueba','prueba',34,12,1212121212,'arturo@mail.com',NULL),(12,'alexa','prueba','prueba',34,12,1212121212,'arturo@mail.com',NULL),(13,'alexa','prueba','prueba',34,12,1212121212,'arturo@mail.com',NULL),(14,'alexa','prueba','prueba',34,12,1212121212,'arturo@mail.com',NULL),(15,'alexa','prueba','prueba',34,12,1212121212,'arturo@mail.com',NULL),(16,'alexa','prueba','prueba',34,12,1212121212,'arturo@mail.com',NULL),(17,'alexa','prueba','prueba',34,12,1212121212,'arturo@mail.com',NULL),(18,'alexa','prueba','prueba',34,12,1212121212,'arturo@mail.com',NULL),(19,'alexa','prueba','prueba',34,12,1212121212,'arturo@mail.com',NULL),(20,'Dainelr','zamudo','pela',122,12,2147483647,'arturo@mail.com',NULL),(21,'Dainelr','zamudo','pela',122,12,2147483647,'arturo@mail.com',NULL),(22,'Dainelr','zamudo','pela',122,12,2147483647,'arturo@mail.com',NULL),(23,'alexa','de zamudio','Rodriguez',23,50,2147483647,'asads@sad',NULL),(24,'alexa','de zamudio','Rodriguez',23,50,2147483647,'asads@sad',NULL),(25,'Arturo','Zamudio','Peña',23,75,2147483647,'arturo.zamudio@daimler.com',NULL);
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `direccion`
--

DROP TABLE IF EXISTS `direccion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `direccion` (
  `i_pk_idDireccion` int(11) NOT NULL AUTO_INCREMENT,
  `vc_calle` varchar(200) DEFAULT NULL,
  `i_numero` int(11) DEFAULT NULL,
  `i_cp` int(11) DEFAULT NULL,
  `vc_colonia` varchar(80) DEFAULT NULL,
  `vc_ciudad` varchar(80) DEFAULT NULL,
  `vc_estado` varchar(90) DEFAULT NULL,
  `vc_municipio` varchar(90) DEFAULT NULL,
  `txt_referencia` text,
  PRIMARY KEY (`i_pk_idDireccion`),
  UNIQUE KEY `idDireccion_UNIQUE` (`i_pk_idDireccion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `direccion`
--

LOCK TABLES `direccion` WRITE;
/*!40000 ALTER TABLE `direccion` DISABLE KEYS */;
/*!40000 ALTER TABLE `direccion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `empleado`
--

DROP TABLE IF EXISTS `empleado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `empleado` (
  `i_pk_num_emp` int(11) NOT NULL AUTO_INCREMENT,
  `vc_nombre` varchar(80) DEFAULT NULL,
  `vc_apePatern` varchar(80) DEFAULT NULL,
  `vc_apeMat` varchar(80) DEFAULT NULL,
  `dt_nacimiento` datetime DEFAULT NULL,
  `i_telefono` int(11) DEFAULT NULL,
  `vc_mail` varchar(80) DEFAULT NULL,
  `i_fk_idDireccion` int(11) DEFAULT NULL,
  `i_fk_idUser` int(11) DEFAULT NULL,
  PRIMARY KEY (`i_pk_num_emp`),
  UNIQUE KEY `idEmpleado_UNIQUE` (`i_pk_num_emp`),
  KEY `fk_Empleado_Direccion1_idx` (`i_fk_idDireccion`),
  KEY `fk_Empleado_Usuario1_idx` (`i_fk_idUser`),
  CONSTRAINT `fk_Empleado_Direccion1` FOREIGN KEY (`i_fk_idDireccion`) REFERENCES `direccion` (`i_pk_idDireccion`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_Empleado_Usuario1` FOREIGN KEY (`i_fk_idUser`) REFERENCES `usuario` (`i_pk_idUser`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empleado`
--

LOCK TABLES `empleado` WRITE;
/*!40000 ALTER TABLE `empleado` DISABLE KEYS */;
/*!40000 ALTER TABLE `empleado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `factura`
--

DROP TABLE IF EXISTS `factura`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `factura` (
  `i_pk_idFactura` int(11) NOT NULL AUTO_INCREMENT,
  `vc_rfc` varchar(200) DEFAULT NULL,
  `vc_nombre` varchar(200) DEFAULT NULL,
  `vc_apepat` varchar(200) DEFAULT NULL,
  `vc_apemat` varchar(200) DEFAULT NULL,
  `vc_calle` varchar(200) DEFAULT NULL,
  `i_numero` int(11) DEFAULT NULL,
  `d_codPostal` varchar(200) DEFAULT NULL,
  `vc_ciudad` varchar(200) DEFAULT NULL,
  `vc_estado` varchar(200) DEFAULT NULL,
  `vc_mail` varchar(200) DEFAULT NULL,
  `d_tel` double DEFAULT NULL,
  `i_fk_idTicket` int(11) DEFAULT NULL,
  PRIMARY KEY (`i_pk_idFactura`),
  UNIQUE KEY `idFactura_UNIQUE` (`i_pk_idFactura`),
  KEY `fk_Factura_Ticket1_idx` (`i_fk_idTicket`),
  CONSTRAINT `fk_Factura_Ticket1` FOREIGN KEY (`i_fk_idTicket`) REFERENCES `ticket` (`i_pk_idTicket`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `factura`
--

LOCK TABLES `factura` WRITE;
/*!40000 ALTER TABLE `factura` DISABLE KEYS */;
/*!40000 ALTER TABLE `factura` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `grupo`
--

DROP TABLE IF EXISTS `grupo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `grupo` (
  `i_pk_Grupo` int(11) NOT NULL AUTO_INCREMENT,
  `vc_Tipo` varchar(250) NOT NULL,
  `txt_descripcion` text,
  PRIMARY KEY (`i_pk_Grupo`),
  UNIQUE KEY `i_pk_idGrup_UNIQUE` (`i_pk_Grupo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `grupo`
--

LOCK TABLES `grupo` WRITE;
/*!40000 ALTER TABLE `grupo` DISABLE KEYS */;
/*!40000 ALTER TABLE `grupo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inventario`
--

DROP TABLE IF EXISTS `inventario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `inventario` (
  `i_pk_inv` int(11) NOT NULL AUTO_INCREMENT,
  `vc_tipo` varchar(250) DEFAULT NULL,
  `i_tolpieza` int(11) DEFAULT NULL,
  `f_costoTotal` float DEFAULT NULL,
  `dt_fechaActual` date DEFAULT NULL,
  `bool_status` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`i_pk_inv`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inventario`
--

LOCK TABLES `inventario` WRITE;
/*!40000 ALTER TABLE `inventario` DISABLE KEYS */;
/*!40000 ALTER TABLE `inventario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `material`
--

DROP TABLE IF EXISTS `material`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `material` (
  `i_pk_material` int(11) NOT NULL AUTO_INCREMENT,
  `vc_nombre` varchar(200) DEFAULT NULL,
  `i_cantidadMat` int(11) DEFAULT NULL,
  `txt_desc` text,
  `bol_status` tinyint(4) DEFAULT NULL,
  `Inventario_i_pk_inv` int(11) DEFAULT NULL,
  PRIMARY KEY (`i_pk_material`),
  KEY `fk_material_Inventario1_idx` (`Inventario_i_pk_inv`),
  CONSTRAINT `fk_material_Inventario1` FOREIGN KEY (`Inventario_i_pk_inv`) REFERENCES `inventario` (`i_pk_inv`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `material`
--

LOCK TABLES `material` WRITE;
/*!40000 ALTER TABLE `material` DISABLE KEYS */;
/*!40000 ALTER TABLE `material` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nomina`
--

DROP TABLE IF EXISTS `nomina`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nomina` (
  `idNomina` int(11) NOT NULL AUTO_INCREMENT,
  `d_sueldoBase` double NOT NULL,
  `bol_estado` tinyint(4) NOT NULL,
  `dt_fehaPago` date NOT NULL,
  PRIMARY KEY (`idNomina`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nomina`
--

LOCK TABLES `nomina` WRITE;
/*!40000 ALTER TABLE `nomina` DISABLE KEYS */;
/*!40000 ALTER TABLE `nomina` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prodmedico`
--

DROP TABLE IF EXISTS `prodmedico`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prodmedico` (
  `i_pk_codigoBarras` int(11) NOT NULL AUTO_INCREMENT,
  `vc_nombre` varchar(80) DEFAULT NULL,
  `f_precio` float DEFAULT NULL,
  `vc_presentacion` varchar(80) DEFAULT NULL,
  `txt_desc` text,
  `dt_caducidad` date DEFAULT NULL,
  `bol_status` varchar(45) DEFAULT NULL,
  `fk_id_inventario` int(11) DEFAULT NULL,
  PRIMARY KEY (`i_pk_codigoBarras`),
  UNIQUE KEY `idProdMedico_UNIQUE` (`i_pk_codigoBarras`),
  KEY `fk_ProdMedico_Inventario1_idx` (`fk_id_inventario`),
  CONSTRAINT `fk_id_inventario` FOREIGN KEY (`fk_id_inventario`) REFERENCES `inventario` (`i_pk_inv`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=104 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prodmedico`
--

LOCK TABLES `prodmedico` WRITE;
/*!40000 ALTER TABLE `prodmedico` DISABLE KEYS */;
INSERT INTO `prodmedico` VALUES (1,'prueba',3934.48,'prueba','prueba','2018-03-29','1',NULL),(2,'prueba',86.2069,'prueba','prueba','2018-03-29','true',NULL),(103,'Paracetamol',500,'pastilla','te quita dolor','2018-04-03','activo',NULL);
/*!40000 ALTER TABLE `prodmedico` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `recibonom`
--

DROP TABLE IF EXISTS `recibonom`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `recibonom` (
  `i_pk_id_nomina` int(11) NOT NULL AUTO_INCREMENT,
  `i_fk_num_emp` int(11) NOT NULL,
  `i_fk_idNomina` int(11) NOT NULL,
  `d_sueldo` double NOT NULL,
  `dt_fechaRecibo` date NOT NULL,
  PRIMARY KEY (`i_pk_id_nomina`),
  KEY `fk_Empleado_has_Nomina_Nomina1_idx` (`i_fk_idNomina`),
  KEY `fk_Empleado_has_Nomina_Empleado1_idx` (`i_fk_num_emp`),
  CONSTRAINT `fk_Empleado_has_Nomina_Empleado1` FOREIGN KEY (`i_fk_num_emp`) REFERENCES `empleado` (`i_pk_num_emp`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Empleado_has_Nomina_Nomina1` FOREIGN KEY (`i_fk_idNomina`) REFERENCES `nomina` (`idNomina`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recibonom`
--

LOCK TABLES `recibonom` WRITE;
/*!40000 ALTER TABLE `recibonom` DISABLE KEYS */;
/*!40000 ALTER TABLE `recibonom` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ticket`
--

DROP TABLE IF EXISTS `ticket`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ticket` (
  `i_pk_idTicket` int(11) NOT NULL AUTO_INCREMENT,
  `dt_fecha` date DEFAULT NULL,
  `d_subTotal` double DEFAULT NULL,
  `d_total` float DEFAULT NULL,
  `d_iva` double DEFAULT NULL,
  `fk_producto` int(11) DEFAULT NULL,
  `fk_cita` int(11) DEFAULT NULL,
  PRIMARY KEY (`i_pk_idTicket`),
  KEY `fk_Ticket_ProdMedico1_idx` (`fk_producto`),
  KEY `fk_Ticket_Cita1_idx` (`fk_cita`,`i_pk_idTicket`),
  CONSTRAINT `fk_Ticket_ProdMedico1` FOREIGN KEY (`fk_producto`) REFERENCES `prodmedico` (`i_pk_codigoBarras`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ticket`
--

LOCK TABLES `ticket` WRITE;
/*!40000 ALTER TABLE `ticket` DISABLE KEYS */;
INSERT INTO `ticket` VALUES (15,'2018-03-29',1138.793103448276,1000,16,NULL,NULL),(16,NULL,862.0689655172414,NULL,NULL,NULL,NULL),(17,NULL,862.0689655172414,NULL,NULL,NULL,NULL),(18,NULL,862.0689655172414,NULL,NULL,NULL,NULL),(19,'2018-03-29',NULL,1009,16,NULL,NULL),(20,'2018-03-29',NULL,1009,16,NULL,NULL),(23,NULL,862.0689655172414,NULL,NULL,NULL,NULL),(24,NULL,862.0689655172414,NULL,NULL,NULL,NULL),(25,NULL,862.0689655172414,NULL,NULL,NULL,NULL),(26,NULL,862.0689655172414,NULL,NULL,NULL,NULL),(27,NULL,862.0689655172414,NULL,NULL,NULL,NULL),(28,NULL,77.58620689655173,NULL,NULL,NULL,NULL),(29,NULL,862.0689655172414,NULL,NULL,NULL,NULL),(30,NULL,862.0689655172414,NULL,NULL,NULL,NULL),(31,NULL,862.0689655172414,NULL,NULL,NULL,NULL),(32,'2018-03-29',NULL,1000,16,NULL,NULL),(33,NULL,862.0689655172414,NULL,NULL,NULL,NULL),(34,NULL,862.0689655172414,NULL,NULL,NULL,NULL),(35,NULL,NULL,300,NULL,NULL,NULL),(36,NULL,NULL,300,NULL,NULL,NULL),(37,NULL,NULL,300,NULL,NULL,NULL),(38,NULL,862.0689655172414,NULL,NULL,NULL,NULL),(39,NULL,862.0689655172414,NULL,NULL,NULL,NULL),(40,NULL,258.62068965517244,300,NULL,NULL,NULL),(41,NULL,258.62068965517244,NULL,NULL,NULL,NULL),(44,NULL,NULL,NULL,NULL,NULL,NULL),(45,NULL,NULL,NULL,NULL,NULL,NULL),(46,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `ticket` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usergrup`
--

DROP TABLE IF EXISTS `usergrup`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usergrup` (
  `i_pk_idUser` int(11) NOT NULL,
  `i_pk_Grupo` int(11) NOT NULL,
  PRIMARY KEY (`i_pk_idUser`,`i_pk_Grupo`),
  UNIQUE KEY `Usuario_i_pk_idUser_UNIQUE` (`i_pk_idUser`),
  UNIQUE KEY `Grupo_i_pk_Grupo_UNIQUE` (`i_pk_Grupo`),
  KEY `fk_Usuario_has_Grupo_Grupo1_idx` (`i_pk_Grupo`),
  KEY `fk_Usuario_has_Grupo_Usuario1_idx` (`i_pk_idUser`),
  CONSTRAINT `fk_Usuario_has_Grupo_Grupo1` FOREIGN KEY (`i_pk_Grupo`) REFERENCES `grupo` (`i_pk_Grupo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Usuario_has_Grupo_Usuario1` FOREIGN KEY (`i_pk_idUser`) REFERENCES `usuario` (`i_pk_idUser`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usergrup`
--

LOCK TABLES `usergrup` WRITE;
/*!40000 ALTER TABLE `usergrup` DISABLE KEYS */;
/*!40000 ALTER TABLE `usergrup` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `i_pk_idUser` int(11) NOT NULL AUTO_INCREMENT,
  `vc_user` varchar(250) NOT NULL,
  `vc_password` varchar(250) NOT NULL,
  `vc_mail` varchar(250) NOT NULL,
  `bool_status` tinyint(4) NOT NULL,
  PRIMARY KEY (`i_pk_idUser`),
  UNIQUE KEY `i_pk_idUser_UNIQUE` (`i_pk_idUser`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'arturo','123','mail',1),(2,'prueba','123','prueba',0),(3,'prueba','123','prueba',0),(4,'prueba','123','prueba',0),(5,'prueba','123','prueba',0),(6,'prueba','123','prueba',0),(7,'prueba','123','prueba',0),(8,'prueba','123','prueba',0);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Final view structure for view `citacliente`
--

/*!50001 DROP VIEW IF EXISTS `citacliente`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `citacliente` AS select `ci`.`i_pk_id_cita` AS `i_pk_id_cita`,`ci`.`fk_idCliente` AS `Numerodecliente`,`ci`.`dt_hora` AS `dt_hora`,`ci`.`bol_status` AS `bol_status`,`ci`.`vc_tipo` AS `vc_tipo`,`ci`.`dt_fechaInicio` AS `dt_fechaInicio`,`ci`.`dt_fecha_final` AS `dt_fecha_final`,concat(`c`.`vc_nombre`,' ',`c`.`vc_apePatern`,' ',`c`.`vc_apeMat`) AS `Cliente` from (`cita` `ci` join `cliente` `c` on((`ci`.`i_pk_id_cita` = `c`.`i_pk_idCliente`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-04-25  1:07:23
