-- MySQL dump 10.13  Distrib 5.7.23-ndb-7.5.11, for Linux (x86_64)
--
-- Host: localhost    Database: preoped
-- ------------------------------------------------------
-- Server version	5.7.23-ndb-7.5.11

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
-- Table structure for table `Alumno`
--

DROP TABLE IF EXISTS `Alumno`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Alumno` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `anio_ingreso` int(5) NOT NULL,
  `cud` int(10) NOT NULL,
  `id_persona` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Alumno`
--

LOCK TABLES `Alumno` WRITE;
/*!40000 ALTER TABLE `Alumno` DISABLE KEYS */;
INSERT INTO `Alumno` VALUES (1,2019,23456575,'1');
/*!40000 ALTER TABLE `Alumno` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Alumno_Diagnostico`
--

DROP TABLE IF EXISTS `Alumno_Diagnostico`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Alumno_Diagnostico` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `profesional_diagnostico` varchar(50) NOT NULL,
  `id_diagnostico` int(10) NOT NULL,
  `id_alumno` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Alumno_Diagnostico`
--

LOCK TABLES `Alumno_Diagnostico` WRITE;
/*!40000 ALTER TABLE `Alumno_Diagnostico` DISABLE KEYS */;
/*!40000 ALTER TABLE `Alumno_Diagnostico` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Aprueba`
--

DROP TABLE IF EXISTS `Aprueba`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Aprueba` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `calificacion` int(10) NOT NULL,
  `id_asignatura` int(10) NOT NULL,
  `id_alumno` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Aprueba`
--

LOCK TABLES `Aprueba` WRITE;
/*!40000 ALTER TABLE `Aprueba` DISABLE KEYS */;
/*!40000 ALTER TABLE `Aprueba` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Asignatura`
--

DROP TABLE IF EXISTS `Asignatura`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Asignatura` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Asignatura`
--

LOCK TABLES `Asignatura` WRITE;
/*!40000 ALTER TABLE `Asignatura` DISABLE KEYS */;
/*!40000 ALTER TABLE `Asignatura` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Carrera`
--

DROP TABLE IF EXISTS `Carrera`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Carrera` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Carrera`
--

LOCK TABLES `Carrera` WRITE;
/*!40000 ALTER TABLE `Carrera` DISABLE KEYS */;
INSERT INTO `Carrera` VALUES (1,'dfghjkjghfdsdfghjkjhgfdfghjkjhgf');
/*!40000 ALTER TABLE `Carrera` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Carrera_Asignatura`
--

DROP TABLE IF EXISTS `Carrera_Asignatura`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Carrera_Asignatura` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_asignatura` int(10) NOT NULL,
  `id_carrera` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Carrera_Asignatura`
--

LOCK TABLES `Carrera_Asignatura` WRITE;
/*!40000 ALTER TABLE `Carrera_Asignatura` DISABLE KEYS */;
INSERT INTO `Carrera_Asignatura` VALUES (1,1,1);
/*!40000 ALTER TABLE `Carrera_Asignatura` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Cursa`
--

DROP TABLE IF EXISTS `Cursa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Cursa` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `periodo` varchar(20) NOT NULL,
  `anio` int(10) NOT NULL,
  `evaluacion` varchar(30) NOT NULL,
  `id_alumno` int(10) NOT NULL,
  `id_asignatura` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Cursa`
--

LOCK TABLES `Cursa` WRITE;
/*!40000 ALTER TABLE `Cursa` DISABLE KEYS */;
INSERT INTO `Cursa` VALUES (1,'Primer Cuatrimestre',2345,'Bien',1,1);
/*!40000 ALTER TABLE `Cursa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Diagnostico`
--

DROP TABLE IF EXISTS `Diagnostico`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Diagnostico` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `diagnostico` varchar(40) NOT NULL,
  `tipo_discapacidad` varchar(40) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Diagnostico`
--

LOCK TABLES `Diagnostico` WRITE;
/*!40000 ALTER TABLE `Diagnostico` DISABLE KEYS */;
/*!40000 ALTER TABLE `Diagnostico` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Entrevista`
--

DROP TABLE IF EXISTS `Entrevista`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Entrevista` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `entrevistador` varchar(40) NOT NULL,
  `conclusiones` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Entrevista`
--

LOCK TABLES `Entrevista` WRITE;
/*!40000 ALTER TABLE `Entrevista` DISABLE KEYS */;
/*!40000 ALTER TABLE `Entrevista` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Entrevista_Alumno`
--

DROP TABLE IF EXISTS `Entrevista_Alumno`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Entrevista_Alumno` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_alumno` int(10) NOT NULL,
  `id_entrevista` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Entrevista_Alumno`
--

LOCK TABLES `Entrevista_Alumno` WRITE;
/*!40000 ALTER TABLE `Entrevista_Alumno` DISABLE KEYS */;
/*!40000 ALTER TABLE `Entrevista_Alumno` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Familiar`
--

DROP TABLE IF EXISTS `Familiar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Familiar` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parentesco` varchar(20) NOT NULL,
  `id_persona` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Familiar`
--

LOCK TABLES `Familiar` WRITE;
/*!40000 ALTER TABLE `Familiar` DISABLE KEYS */;
INSERT INTO `Familiar` VALUES (1,'Madre',2),(2,'Padre',3);
/*!40000 ALTER TABLE `Familiar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Familiar_Alumno`
--

DROP TABLE IF EXISTS `Familiar_Alumno`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Familiar_Alumno` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_alumno` int(10) NOT NULL,
  `id_familiar` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Familiar_Alumno`
--

LOCK TABLES `Familiar_Alumno` WRITE;
/*!40000 ALTER TABLE `Familiar_Alumno` DISABLE KEYS */;
INSERT INTO `Familiar_Alumno` VALUES (1,1,1),(2,1,2);
/*!40000 ALTER TABLE `Familiar_Alumno` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Persona`
--

DROP TABLE IF EXISTS `Persona`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Persona` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(36) NOT NULL,
  `dni` int(9) NOT NULL,
  `email` varchar(36) NOT NULL,
  `telefono` int(16) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Persona`
--

LOCK TABLES `Persona` WRITE;
/*!40000 ALTER TABLE `Persona` DISABLE KEYS */;
INSERT INTO `Persona` VALUES (1,'Jorge',23456789,'34343554',665656565),(2,'Norma',45678904,'343553',76767688),(3,'Diego',45678543,'3453534',7890405);
/*!40000 ALTER TABLE `Persona` ENABLE KEYS */;
UNLOCK TABLES;

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
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alumno`
--

LOCK TABLES `alumno` WRITE;
/*!40000 ALTER TABLE `alumno` DISABLE KEYS */;
INSERT INTO `alumno` VALUES (12,2008,1234),(13,2005,320165),(14,2020,32156),(15,2020,32156),(16,2020,32156),(17,2020,32156),(18,2020,32156),(19,3,2),(20,3,2),(21,3,2),(22,3,2),(23,3,2);
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
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alumno_diagnostico`
--

LOCK TABLES `alumno_diagnostico` WRITE;
/*!40000 ALTER TABLE `alumno_diagnostico` DISABLE KEYS */;
INSERT INTO `alumno_diagnostico` VALUES (3,'Eder',1,13),(4,'ProDAT Preoped',1,14),(5,'ProDAT Preoped',1,15),(6,'ProDAT Preoped',1,16),(7,'ProDAT Preoped',1,17),(8,'ProDAT Preoped',1,18),(10,'Dr. Juan Silva Saldivar',16,14),(11,'Dr. Juan Silva Saldivar',16,14),(17,'Dr. Juan Silva Saldivar',16,12),(18,'Dr. Juan Silva Saldivar',17,12),(19,'ProDAT Preoped',1,22),(20,'ProDAT Preoped',1,23);
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
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `persona`
--

LOCK TABLES `persona` WRITE;
/*!40000 ALTER TABLE `persona` DISABLE KEYS */;
INSERT INTO `persona` VALUES (12,'Eder dos Santos',12345678,'esantos@uarg.unpa.edu.ar',2966),(13,'Guillermo Rodriguez',12345698,'grodriguez@unpa',123456),(14,'Juan Ãndale Ã“rale Pues',12345698,'jperez@uarg',654987),(15,'Juan Perez',12345698,'jperez@uarg',654987),(16,'Juan Perez',12345698,'jperez@uarg',654987),(17,'Juan Perez',12345698,'jperez@uarg',654987),(18,'Juan Perez',12345698,'jperez@uarg',654987),(19,'Eder dos Santos`\' \"',4,'bacteriaut@gmail.com',654987),(20,'Eder dos Santos`\' \"',4,'bacteriaut@gmail.com',654987),(21,'Eder dos Santos`\' \"',4,'bacteriaut@gmail.com',654987),(22,'Eder dos Santos`\' \"',4,'bacteriaut@gmail.com',654987),(23,'Eder dos Santos`\' \"',4,'bacteriaut@gmail.com',654987);
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
-- Temporary table structure for view `vwalumno_diagnostico`
--

DROP TABLE IF EXISTS `vwalumno_diagnostico`;
/*!50001 DROP VIEW IF EXISTS `vwalumno_diagnostico`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `vwalumno_diagnostico` AS SELECT 
 1 AS `id`,
 1 AS `profesional_diagnostico`,
 1 AS `id_diagnostico`,
 1 AS `id_alumno`,
 1 AS `diagnostico`*/;
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
-- Final view structure for view `vwalumno_diagnostico`
--

/*!50001 DROP VIEW IF EXISTS `vwalumno_diagnostico`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`preoped`@`%` SQL SECURITY DEFINER */
/*!50001 VIEW `vwalumno_diagnostico` AS select `AD`.`id` AS `id`,`AD`.`profesional_diagnostico` AS `profesional_diagnostico`,`AD`.`id_diagnostico` AS `id_diagnostico`,`AD`.`id_alumno` AS `id_alumno`,`D`.`diagnostico` AS `diagnostico` from (`diagnostico` `D` join `alumno_diagnostico` `AD`) where (`D`.`id` = `AD`.`id_diagnostico`) */;
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

-- Dump completed on 2020-02-28 15:46:35
