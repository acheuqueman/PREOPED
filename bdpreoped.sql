-- MySQL dump 10.13  Distrib 5.7.29, for Linux (x86_64)
--
-- Host: localhost    Database: preoped
-- ------------------------------------------------------
-- Server version	5.7.29-0ubuntu0.16.04.1

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
-- Table structure for table `alumno`
--

DROP TABLE IF EXISTS `alumno`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `alumno` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `anio_ingreso` int(5) NOT NULL,
  `cud` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_alumno_persona` FOREIGN KEY (`id`) REFERENCES `persona` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alumno`
--

LOCK TABLES `alumno` WRITE;
/*!40000 ALTER TABLE `alumno` DISABLE KEYS */;
INSERT INTO `alumno` VALUES (12,2008,1234),(13,2005,320165);
/*!40000 ALTER TABLE `alumno` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `alumno_diagnostico`
--

DROP TABLE IF EXISTS `alumno_diagnostico`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `alumno_diagnostico` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `profesional_diagnostico` varchar(50) NOT NULL,
  `id_diagnostico` int(10) NOT NULL,
  `id_alumno` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_alumno_dianostico_alumno_idx` (`id_alumno`),
  KEY `fk_alumno_diagnostico_diagnostico_idx` (`id_diagnostico`),
  CONSTRAINT `fk_alumno_diagnostico_diagnostico` FOREIGN KEY (`id_diagnostico`) REFERENCES `diagnostico` (`id`),
  CONSTRAINT `fk_alumno_dianostico_alumno` FOREIGN KEY (`id_alumno`) REFERENCES `alumno` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alumno_diagnostico`
--

LOCK TABLES `alumno_diagnostico` WRITE;
/*!40000 ALTER TABLE `alumno_diagnostico` DISABLE KEYS */;
INSERT INTO `alumno_diagnostico` VALUES (2,'Guillermo Rodriguez',1,12),(3,'Eder',1,13);
/*!40000 ALTER TABLE `alumno_diagnostico` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `aprueba`
--

DROP TABLE IF EXISTS `aprueba`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aprueba` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `calificacion` int(10) NOT NULL,
  `id_asignatura` int(10) NOT NULL,
  `id_alumno` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_aprueba_asignatura_idx` (`id_asignatura`),
  KEY `fk_aprueba_alumno_idx` (`id_alumno`),
  CONSTRAINT `fk_aprueba_alumno` FOREIGN KEY (`id_alumno`) REFERENCES `alumno` (`id`),
  CONSTRAINT `fk_aprueba_asignatura` FOREIGN KEY (`id_asignatura`) REFERENCES `asignatura` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aprueba`
--

LOCK TABLES `aprueba` WRITE;
/*!40000 ALTER TABLE `aprueba` DISABLE KEYS */;
/*!40000 ALTER TABLE `aprueba` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `asignatura`
--

DROP TABLE IF EXISTS `asignatura`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `asignatura` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `asignatura`
--

LOCK TABLES `asignatura` WRITE;
/*!40000 ALTER TABLE `asignatura` DISABLE KEYS */;
/*!40000 ALTER TABLE `asignatura` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `carrera`
--

DROP TABLE IF EXISTS `carrera`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `carrera` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carrera`
--

LOCK TABLES `carrera` WRITE;
/*!40000 ALTER TABLE `carrera` DISABLE KEYS */;
INSERT INTO `carrera` VALUES (1,'Eder dos Santos'),(2,'Eder dos Santos');
/*!40000 ALTER TABLE `carrera` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `carrera_asignatura`
--

DROP TABLE IF EXISTS `carrera_asignatura`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `carrera_asignatura` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_asignatura` int(10) NOT NULL,
  `id_carrera` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_carrera_asignatura_asignatura_idx` (`id_asignatura`),
  KEY `fk_carrera_asignatura_carrera_idx` (`id_carrera`),
  CONSTRAINT `fk_carrera_asignatura_asignatura` FOREIGN KEY (`id_asignatura`) REFERENCES `asignatura` (`id`),
  CONSTRAINT `fk_carrera_asignatura_carrera` FOREIGN KEY (`id_carrera`) REFERENCES `carrera` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carrera_asignatura`
--

LOCK TABLES `carrera_asignatura` WRITE;
/*!40000 ALTER TABLE `carrera_asignatura` DISABLE KEYS */;
/*!40000 ALTER TABLE `carrera_asignatura` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cursa`
--

DROP TABLE IF EXISTS `cursa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cursa` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `periodo` varchar(20) NOT NULL,
  `anio` int(10) NOT NULL,
  `evaluacion` varchar(30) NOT NULL,
  `id_alumno` int(10) NOT NULL,
  `id_asignatura` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cursa_asignatura_idx` (`id_asignatura`),
  KEY `fk_cursa_alumno_idx` (`id_alumno`),
  CONSTRAINT `fk_cursa_alumno` FOREIGN KEY (`id_alumno`) REFERENCES `alumno` (`id`),
  CONSTRAINT `fk_cursa_asignatura` FOREIGN KEY (`id_asignatura`) REFERENCES `asignatura` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cursa`
--

LOCK TABLES `cursa` WRITE;
/*!40000 ALTER TABLE `cursa` DISABLE KEYS */;
/*!40000 ALTER TABLE `cursa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `diagnostico`
--

DROP TABLE IF EXISTS `diagnostico`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `diagnostico` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `diagnostico` varchar(40) NOT NULL,
  `tipo_discapacidad` varchar(40) NOT NULL,
  `descripcion` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `diagnostico`
--

LOCK TABLES `diagnostico` WRITE;
/*!40000 ALTER TABLE `diagnostico` DISABLE KEYS */;
INSERT INTO `diagnostico` VALUES (1,'Ceguera','Visual','La ceguera es una diversidad funcional de tipo sensorial que consiste en la pÃ©rdida total o parcial del sentido de la vista.'),(16,'Daltonismo','Visual','El daltonismo es una alteraciÃ³n de origen genÃ©tico que afecta a la capacidad de distinguir los colores.'),(17,'Espasticidad','Motriz','Aumento exagerado del tono muscular (hipertonÃ­a), por lo que hay movimientos exagerados y poco coordinados.');
/*!40000 ALTER TABLE `diagnostico` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `entrevista`
--

DROP TABLE IF EXISTS `entrevista`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `entrevista` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `entrevistador` varchar(40) NOT NULL,
  `conclusiones` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `entrevista`
--

LOCK TABLES `entrevista` WRITE;
/*!40000 ALTER TABLE `entrevista` DISABLE KEYS */;
/*!40000 ALTER TABLE `entrevista` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `entrevista_alumno`
--

DROP TABLE IF EXISTS `entrevista_alumno`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `entrevista_alumno` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_alumno` int(10) NOT NULL,
  `id_entrevista` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_entrevista_alumno_alumno_idx` (`id_alumno`),
  KEY `fk_entrevista_alumno_entrevista_idx` (`id_entrevista`),
  CONSTRAINT `fk_entrevista_alumno_alumno` FOREIGN KEY (`id_alumno`) REFERENCES `alumno` (`id`),
  CONSTRAINT `fk_entrevista_alumno_entrevista` FOREIGN KEY (`id_entrevista`) REFERENCES `entrevista` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `entrevista_alumno`
--

LOCK TABLES `entrevista_alumno` WRITE;
/*!40000 ALTER TABLE `entrevista_alumno` DISABLE KEYS */;
/*!40000 ALTER TABLE `entrevista_alumno` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `familiar`
--

DROP TABLE IF EXISTS `familiar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `familiar` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_familiar_persona` FOREIGN KEY (`id`) REFERENCES `persona` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `familiar`
--

LOCK TABLES `familiar` WRITE;
/*!40000 ALTER TABLE `familiar` DISABLE KEYS */;
/*!40000 ALTER TABLE `familiar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `familiar_alumno`
--

DROP TABLE IF EXISTS `familiar_alumno`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `familiar_alumno` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_alumno` int(10) NOT NULL,
  `id_familiar` int(10) NOT NULL,
  `parentesco` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_familiar_alumno_alumno_idx` (`id_alumno`),
  KEY `fk_familiar_alumno_familiar_idx` (`id_familiar`),
  CONSTRAINT `fk_familiar_alumno_alumno` FOREIGN KEY (`id_alumno`) REFERENCES `alumno` (`id`),
  CONSTRAINT `fk_familiar_alumno_familiar` FOREIGN KEY (`id_familiar`) REFERENCES `familiar` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `familiar_alumno`
--

LOCK TABLES `familiar_alumno` WRITE;
/*!40000 ALTER TABLE `familiar_alumno` DISABLE KEYS */;
/*!40000 ALTER TABLE `familiar_alumno` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `persona`
--

DROP TABLE IF EXISTS `persona`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `persona` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(36) NOT NULL,
  `dni` int(9) NOT NULL,
  `email` varchar(36) NOT NULL,
  `telefono` int(16) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `persona`
--

LOCK TABLES `persona` WRITE;
/*!40000 ALTER TABLE `persona` DISABLE KEYS */;
INSERT INTO `persona` VALUES (12,'Eder dos Santos',12345678,'esantos@uarg.unpa.edu.ar',2966),(13,'Guillermo Rodriguez',12345698,'grodriguez@unpa',123456);
/*!40000 ALTER TABLE `persona` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `vwalumno`
--

DROP TABLE IF EXISTS `vwalumno`;
/*!50001 DROP VIEW IF EXISTS `vwalumno`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `vwalumno` AS SELECT 
 1 AS `id`,
 1 AS `nombre`,
 1 AS `dni`,
 1 AS `email`,
 1 AS `telefono`,
 1 AS `anio_ingreso`,
 1 AS `cud`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `vwfamiliar`
--

DROP TABLE IF EXISTS `vwfamiliar`;
/*!50001 DROP VIEW IF EXISTS `vwfamiliar`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `vwfamiliar` AS SELECT 
 1 AS `id`,
 1 AS `nombre`,
 1 AS `dni`,
 1 AS `email`,
 1 AS `telefono`,
 1 AS `id_alumno`,
 1 AS `parentesco`*/;
SET character_set_client = @saved_cs_client;

--
-- Final view structure for view `vwalumno`
--

/*!50001 DROP VIEW IF EXISTS `vwalumno`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `vwalumno` AS select `persona`.`id` AS `id`,`persona`.`nombre` AS `nombre`,`persona`.`dni` AS `dni`,`persona`.`email` AS `email`,`persona`.`telefono` AS `telefono`,`alumno`.`anio_ingreso` AS `anio_ingreso`,`alumno`.`cud` AS `cud` from (`persona` join `alumno` on((`persona`.`id` = `alumno`.`id`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `vwfamiliar`
--

/*!50001 DROP VIEW IF EXISTS `vwfamiliar`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `vwfamiliar` AS select `p`.`id` AS `id`,`p`.`nombre` AS `nombre`,`p`.`dni` AS `dni`,`p`.`email` AS `email`,`p`.`telefono` AS `telefono`,`fa`.`id_alumno` AS `id_alumno`,`fa`.`parentesco` AS `parentesco` from ((`persona` `p` join `familiar` `f` on((`p`.`id` = `f`.`id`))) join `familiar_alumno` `fa`) where (`f`.`id` = `fa`.`id_familiar`) */;
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

-- Dump completed on 2020-02-26 11:28:41
