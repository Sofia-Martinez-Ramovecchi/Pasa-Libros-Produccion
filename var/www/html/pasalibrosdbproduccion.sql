-- MySQL dump 10.13  Distrib 8.0.32, for Linux (x86_64)
--
-- Host: localhost    Database: pasalibrosdb
-- ------------------------------------------------------
-- Server version	8.0.32

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache`
--

LOCK TABLES `cache` WRITE;
/*!40000 ALTER TABLE `cache` DISABLE KEYS */;
INSERT INTO `cache` VALUES ('spatie.permission.cache','a:3:{s:5:\"alias\";a:4:{s:1:\"a\";s:2:\"id\";s:1:\"b\";s:4:\"name\";s:1:\"c\";s:10:\"guard_name\";s:1:\"r\";s:5:\"roles\";}s:11:\"permissions\";a:4:{i:0;a:4:{s:1:\"a\";i:6;s:1:\"b\";s:20:\"eliminar publicacion\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:3;}}i:1;a:4:{s:1:\"a\";i:7;s:1:\"b\";s:18:\"editar publicacion\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:3;}}i:2;a:4:{s:1:\"a\";i:8;s:1:\"b\";s:20:\"publicar publicacion\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:3;}}i:3;a:4:{s:1:\"a\";i:9;s:1:\"b\";s:13:\"editar perfil\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:3;}}}s:5:\"roles\";a:1:{i:0;a:3:{s:1:\"a\";i:3;s:1:\"b\";s:12:\"usuarioRoles\";s:1:\"c\";s:3:\"web\";}}}',1732434388),('zunildaramivecchi@gmail.com|172.19.0.1','i:2;',1732365939),('zunildaramivecchi@gmail.com|172.19.0.1:timer','i:1732365938;',1732365938);
/*!40000 ALTER TABLE `cache` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache_locks`
--

LOCK TABLES `cache_locks` WRITE;
/*!40000 ALTER TABLE `cache_locks` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache_locks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `condicion_libro`
--

DROP TABLE IF EXISTS `condicion_libro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `condicion_libro` (
  `id_condicion_libro` int NOT NULL AUTO_INCREMENT,
  `nombre_condicion` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_condicion_libro`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `condicion_libro`
--

LOCK TABLES `condicion_libro` WRITE;
/*!40000 ALTER TABLE `condicion_libro` DISABLE KEYS */;
/*!40000 ALTER TABLE `condicion_libro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `critica`
--

DROP TABLE IF EXISTS `critica`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `critica` (
  `id_critica` int NOT NULL AUTO_INCREMENT,
  `id_usuario` int NOT NULL,
  `id_publicacion` int NOT NULL,
  `calificacion_libro` float DEFAULT NULL,
  `descripcion_critica` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id_critica`),
  KEY `usuario_critica_fk` (`id_usuario`),
  KEY `publicacion_critica_fk` (`id_publicacion`),
  CONSTRAINT `publicacion_critica_fk` FOREIGN KEY (`id_publicacion`) REFERENCES `publicacion` (`id_publicacion`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `usuario_critica_fk` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `critica`
--

LOCK TABLES `critica` WRITE;
/*!40000 ALTER TABLE `critica` DISABLE KEYS */;
/*!40000 ALTER TABLE `critica` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `critica_pregunta`
--

DROP TABLE IF EXISTS `critica_pregunta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `critica_pregunta` (
  `id_critica_pregunta` int NOT NULL AUTO_INCREMENT,
  `id_critica` int NOT NULL,
  `id_pregunta` int NOT NULL,
  `calificacion_pregunta` float NOT NULL,
  PRIMARY KEY (`id_critica_pregunta`),
  KEY `critica_critica_pregunta_fk` (`id_critica`),
  KEY `pregunta_critica_pregunta_fk` (`id_pregunta`),
  CONSTRAINT `critica_critica_pregunta_fk` FOREIGN KEY (`id_critica`) REFERENCES `critica` (`id_critica`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `pregunta_critica_pregunta_fk` FOREIGN KEY (`id_pregunta`) REFERENCES `pregunta_cuestionario` (`id_pregunta`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `critica_pregunta`
--

LOCK TABLES `critica_pregunta` WRITE;
/*!40000 ALTER TABLE `critica_pregunta` DISABLE KEYS */;
/*!40000 ALTER TABLE `critica_pregunta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estado_cuenta`
--

DROP TABLE IF EXISTS `estado_cuenta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `estado_cuenta` (
  `id_estado_cuenta` int NOT NULL AUTO_INCREMENT,
  `nombre_estado_cuenta` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_estado_cuenta`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estado_cuenta`
--

LOCK TABLES `estado_cuenta` WRITE;
/*!40000 ALTER TABLE `estado_cuenta` DISABLE KEYS */;
INSERT INTO `estado_cuenta` VALUES (1,'Activo');
/*!40000 ALTER TABLE `estado_cuenta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estado_publicacion`
--

DROP TABLE IF EXISTS `estado_publicacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `estado_publicacion` (
  `id_estado_publicacion` int NOT NULL AUTO_INCREMENT,
  `nombre_estado_publicacion` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_estado_publicacion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estado_publicacion`
--

LOCK TABLES `estado_publicacion` WRITE;
/*!40000 ALTER TABLE `estado_publicacion` DISABLE KEYS */;
/*!40000 ALTER TABLE `estado_publicacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estado_solicitud`
--

DROP TABLE IF EXISTS `estado_solicitud`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `estado_solicitud` (
  `id_estado_solicitud` int NOT NULL AUTO_INCREMENT,
  `nombre_estado_solicitud` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_estado_solicitud`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estado_solicitud`
--

LOCK TABLES `estado_solicitud` WRITE;
/*!40000 ALTER TABLE `estado_solicitud` DISABLE KEYS */;
/*!40000 ALTER TABLE `estado_solicitud` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `libro`
--

DROP TABLE IF EXISTS `libro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `libro` (
  `id_libro` int NOT NULL AUTO_INCREMENT,
  `id_usuario` int NOT NULL,
  `id_condicion_libro` int NOT NULL,
  `nombre_libro` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `autor_libro` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `editorial` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fecha_publicacion` date DEFAULT NULL,
  `imagen_portada` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `imagen_contraportada` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ISBN` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id_libro`),
  KEY `usuario_libro_fk` (`id_usuario`),
  KEY `condicion_libro_fk` (`id_condicion_libro`),
  CONSTRAINT `condicion_libro_fk` FOREIGN KEY (`id_condicion_libro`) REFERENCES `condicion_libro` (`id_condicion_libro`),
  CONSTRAINT `usuario_libro_fk` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `libro`
--

LOCK TABLES `libro` WRITE;
/*!40000 ALTER TABLE `libro` DISABLE KEYS */;
/*!40000 ALTER TABLE `libro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `libro_intercambio`
--

DROP TABLE IF EXISTS `libro_intercambio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `libro_intercambio` (
  `id_libro_intercambio` int NOT NULL AUTO_INCREMENT,
  `id_libro_propietario` int NOT NULL,
  `id_libro_ofertante` int NOT NULL,
  `id_solicitud` int NOT NULL,
  PRIMARY KEY (`id_libro_intercambio`),
  KEY `propietario_intercambio_fk` (`id_libro_propietario`),
  KEY `ofertante_intercambio_fk` (`id_libro_ofertante`),
  KEY `solicitud_libro_intercambio_fk` (`id_solicitud`),
  CONSTRAINT `ofertante_intercambio_fk` FOREIGN KEY (`id_libro_ofertante`) REFERENCES `libro` (`id_libro`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `propietario_intercambio_fk` FOREIGN KEY (`id_libro_propietario`) REFERENCES `libro` (`id_libro`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `solicitud_libro_intercambio_fk` FOREIGN KEY (`id_solicitud`) REFERENCES `solicitud_intercambio` (`id_solicitud`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `libro_intercambio`
--

LOCK TABLES `libro_intercambio` WRITE;
/*!40000 ALTER TABLE `libro_intercambio` DISABLE KEYS */;
/*!40000 ALTER TABLE `libro_intercambio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `libro_tag`
--

DROP TABLE IF EXISTS `libro_tag`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `libro_tag` (
  `id_libro_tag` int NOT NULL AUTO_INCREMENT,
  `id_libro` int NOT NULL,
  `id_tag` int NOT NULL,
  PRIMARY KEY (`id_libro_tag`),
  KEY `libro_tag_fk` (`id_libro`),
  KEY `tag_libro_fk` (`id_tag`),
  CONSTRAINT `libro_tag_fk` FOREIGN KEY (`id_libro`) REFERENCES `libro` (`id_libro`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `tag_libro_fk` FOREIGN KEY (`id_tag`) REFERENCES `tag` (`id_tag`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `libro_tag`
--

LOCK TABLES `libro_tag` WRITE;
/*!40000 ALTER TABLE `libro_tag` DISABLE KEYS */;
/*!40000 ALTER TABLE `libro_tag` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `localidad`
--

DROP TABLE IF EXISTS `localidad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `localidad` (
  `id_localidad` int NOT NULL AUTO_INCREMENT,
  `id_provincia` int NOT NULL,
  `nombre_localidad` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_localidad`),
  KEY `provincia_localidad` (`id_provincia`),
  CONSTRAINT `provincia_localidad` FOREIGN KEY (`id_provincia`) REFERENCES `provincia` (`id_provincia`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `localidad`
--

LOCK TABLES `localidad` WRITE;
/*!40000 ALTER TABLE `localidad` DISABLE KEYS */;
/*!40000 ALTER TABLE `localidad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mensaje`
--

DROP TABLE IF EXISTS `mensaje`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mensaje` (
  `id_mensaje` int NOT NULL AUTO_INCREMENT,
  `id_usuario_emisor` int NOT NULL,
  `id_usuario_receptor` int NOT NULL,
  `descripcion_mensaje` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `fecha_envio` datetime NOT NULL,
  `fecha_lectura` datetime NOT NULL,
  PRIMARY KEY (`id_mensaje`),
  KEY `usuario_emisor_mensaje_fk` (`id_usuario_emisor`),
  KEY `usuario_receptor_fk` (`id_usuario_receptor`),
  CONSTRAINT `usuario_emisor_mensaje_fk` FOREIGN KEY (`id_usuario_emisor`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `usuario_receptor_fk` FOREIGN KEY (`id_usuario_receptor`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mensaje`
--

LOCK TABLES `mensaje` WRITE;
/*!40000 ALTER TABLE `mensaje` DISABLE KEYS */;
/*!40000 ALTER TABLE `mensaje` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (6,'2024_11_12_231207_roles',1),(7,'2024_11_16_221558_add_fecha_suspension_to_usuarios_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_permissions`
--

DROP TABLE IF EXISTS `model_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `model_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_permissions`
--

LOCK TABLES `model_has_permissions` WRITE;
/*!40000 ALTER TABLE `model_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `model_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_roles`
--

DROP TABLE IF EXISTS `model_has_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `model_has_roles` (
  `role_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  KEY `model_has_roles_role_id_foreign` (`role_id`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_roles`
--

LOCK TABLES `model_has_roles` WRITE;
/*!40000 ALTER TABLE `model_has_roles` DISABLE KEYS */;
INSERT INTO `model_has_roles` VALUES (2,'App\\Models\\Usuario',9);
/*!40000 ALTER TABLE `model_has_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (6,'eliminar publicacion','web','2024-11-20 12:49:06','2024-11-20 12:49:06'),(7,'editar publicacion','web','2024-11-20 12:49:06','2024-11-20 12:49:06'),(8,'publicar publicacion','web','2024-11-20 12:49:06','2024-11-20 12:49:06'),(9,'editar perfil','web','2024-11-20 12:49:06','2024-11-20 12:49:06'),(10,'viewProfile','web','2024-11-23 08:18:18','2024-11-23 08:18:18');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pregunta_cuestionario`
--

DROP TABLE IF EXISTS `pregunta_cuestionario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pregunta_cuestionario` (
  `id_pregunta` int NOT NULL AUTO_INCREMENT,
  `descripcion_pregunta` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_pregunta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pregunta_cuestionario`
--

LOCK TABLES `pregunta_cuestionario` WRITE;
/*!40000 ALTER TABLE `pregunta_cuestionario` DISABLE KEYS */;
/*!40000 ALTER TABLE `pregunta_cuestionario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `provincia`
--

DROP TABLE IF EXISTS `provincia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `provincia` (
  `id_provincia` int NOT NULL AUTO_INCREMENT,
  `nombre_provincia` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_provincia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `provincia`
--

LOCK TABLES `provincia` WRITE;
/*!40000 ALTER TABLE `provincia` DISABLE KEYS */;
/*!40000 ALTER TABLE `provincia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `publicacion`
--

DROP TABLE IF EXISTS `publicacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `publicacion` (
  `id_publicacion` int NOT NULL AUTO_INCREMENT,
  `id_estado_publicacion` int NOT NULL,
  `id_libro` int NOT NULL,
  `id_localidad` int NOT NULL,
  `fecha_creacion` date NOT NULL,
  `descripcion_publicacion` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id_publicacion`),
  KEY `estado_publicacion_fk` (`id_estado_publicacion`),
  KEY `libro_publicacion_fk` (`id_libro`),
  KEY `localidad_publicacion_fk` (`id_localidad`),
  CONSTRAINT `estado_publicacion_fk` FOREIGN KEY (`id_estado_publicacion`) REFERENCES `estado_publicacion` (`id_estado_publicacion`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `libro_publicacion_fk` FOREIGN KEY (`id_libro`) REFERENCES `libro` (`id_libro`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `localidad_publicacion_fk` FOREIGN KEY (`id_localidad`) REFERENCES `localidad` (`id_localidad`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `publicacion`
--

LOCK TABLES `publicacion` WRITE;
/*!40000 ALTER TABLE `publicacion` DISABLE KEYS */;
/*!40000 ALTER TABLE `publicacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `publicacion_reporte`
--

DROP TABLE IF EXISTS `publicacion_reporte`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `publicacion_reporte` (
  `id_publicacion_reporte` int NOT NULL AUTO_INCREMENT,
  `id_reporte` int NOT NULL,
  `id_usuario` int NOT NULL,
  `id_publicacion` int NOT NULL,
  `comentario_reporte` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fecha_creacion` date NOT NULL,
  PRIMARY KEY (`id_publicacion_reporte`),
  KEY `reporte_publicacion_reporte_fk` (`id_reporte`),
  KEY `usuario_publicacion_reporte_fk` (`id_usuario`),
  KEY `publicacion_publicacion_reporte_fk` (`id_publicacion`),
  CONSTRAINT `publicacion_publicacion_reporte_fk` FOREIGN KEY (`id_publicacion`) REFERENCES `publicacion` (`id_publicacion`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `reporte_publicacion_reporte_fk` FOREIGN KEY (`id_reporte`) REFERENCES `reporte` (`id_reporte`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `usuario_publicacion_reporte_fk` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `publicacion_reporte`
--

LOCK TABLES `publicacion_reporte` WRITE;
/*!40000 ALTER TABLE `publicacion_reporte` DISABLE KEYS */;
/*!40000 ALTER TABLE `publicacion_reporte` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reporte`
--

DROP TABLE IF EXISTS `reporte`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `reporte` (
  `id_reporte` int NOT NULL AUTO_INCREMENT,
  `descripcion_reporte` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_reporte`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reporte`
--

LOCK TABLES `reporte` WRITE;
/*!40000 ALTER TABLE `reporte` DISABLE KEYS */;
/*!40000 ALTER TABLE `reporte` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_has_permissions`
--

DROP TABLE IF EXISTS `role_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `role_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_has_permissions`
--

LOCK TABLES `role_has_permissions` WRITE;
/*!40000 ALTER TABLE `role_has_permissions` DISABLE KEYS */;
INSERT INTO `role_has_permissions` VALUES (6,3),(7,3),(8,3),(9,3),(10,4);
/*!40000 ALTER TABLE `role_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'administrador','web','2024-11-20 16:50:16','2024-11-20 16:50:16'),(2,'usuario','web','2024-11-20 16:50:16','2024-11-20 16:50:16'),(3,'usuarioRoles','web','2024-11-20 12:49:06','2024-11-20 12:49:06'),(4,'user','web','2024-11-23 08:18:23','2024-11-23 08:18:23');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `solicitud_intercambio`
--

DROP TABLE IF EXISTS `solicitud_intercambio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `solicitud_intercambio` (
  `id_solicitud` int NOT NULL AUTO_INCREMENT,
  `id_usuario_ofertante` int NOT NULL,
  `id_estado_solicitud` int NOT NULL,
  `descripcion_solicitud` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `cant_libros` int NOT NULL,
  `fecha_creacion` date NOT NULL,
  PRIMARY KEY (`id_solicitud`),
  KEY `estado_solicitud_intercambio_fk` (`id_estado_solicitud`),
  KEY `usuario_solicitud_fk` (`id_usuario_ofertante`),
  CONSTRAINT `estado_solicitud_intercambio_fk` FOREIGN KEY (`id_estado_solicitud`) REFERENCES `estado_solicitud` (`id_estado_solicitud`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `usuario_solicitud_fk` FOREIGN KEY (`id_usuario_ofertante`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `solicitud_intercambio`
--

LOCK TABLES `solicitud_intercambio` WRITE;
/*!40000 ALTER TABLE `solicitud_intercambio` DISABLE KEYS */;
/*!40000 ALTER TABLE `solicitud_intercambio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tag`
--

DROP TABLE IF EXISTS `tag`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tag` (
  `id_tag` int NOT NULL AUTO_INCREMENT,
  `nombre_tag` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_tag`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tag`
--

LOCK TABLES `tag` WRITE;
/*!40000 ALTER TABLE `tag` DISABLE KEYS */;
/*!40000 ALTER TABLE `tag` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuario` (
  `id_usuario` int NOT NULL AUTO_INCREMENT,
  `id_estado_cuenta` int DEFAULT '1',
  `nombre_usuario` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `profile_photo` blob,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `google_id` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `google_token` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `google_refresh_token` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fecha_suspension` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `google_id` (`google_id`),
  KEY `estado_cuenta_usuario_fk` (`id_estado_cuenta`),
  CONSTRAINT `estado_cuenta_usuario_fk` FOREIGN KEY (`id_estado_cuenta`) REFERENCES `estado_cuenta` (`id_estado_cuenta`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (8,1,'Sofía Sonia Martinez','$2y$12$uUOhbvUPYjjM6xQq4Fg6ruUdpmDjngUxarS32cksfJdgEU2.ypYL.','zunildaramivecchi@gmail.com',NULL,'2024-11-23 07:46:27','2024-11-23 12:45:37','116842129209073648423','ya29.a0AeDClZDbrq0KKZbQcaLRBMzMj3BJtCMfjPsY3EAJU9fq0igwHgmK_I2GAmR39duISHke3zyZpNbrUvdrzH0bMeR2ku9uzifGqAEoD82-U9Uu3u54BePpc3UAizlyHg7gIw5pF8rPvGtILvrsQzkl0TWC9T-Kg0QKi0EaCgYKAVkSARESFQHGX2Miqnpwip0-SkumK7olgH6WhQ0170',NULL,NULL,NULL),(9,1,'Sofia','$2y$12$Woiw/2ncKUHbfs59MDx.cujY1dVpNF8HCQISTHJeppIDTUMl3XMAC','somartinez@uade.edu.ar',NULL,'2024-11-23 07:48:45','2024-11-23 07:48:45',NULL,NULL,NULL,NULL,NULL);
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

-- Dump completed on 2024-11-23 17:21:16
