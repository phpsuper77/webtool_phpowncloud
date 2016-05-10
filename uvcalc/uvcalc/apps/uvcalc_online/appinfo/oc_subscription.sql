-- MySQL dump 10.13  Distrib 5.1.73, for redhat-linux-gnu (x86_64)
--
-- Host: localhost    Database: uvcalc
-- ------------------------------------------------------
-- Server version	5.1.73

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
-- Dumping data for table `oc_subscription_types`
--

LOCK TABLES `oc_subscription_types` WRITE;
/*!40000 ALTER TABLE `oc_subscription_types` DISABLE KEYS */;
INSERT INTO `oc_subscription_types` VALUES (2,'One Time Use, 1 Lamp Only, Medium and Low Pressure Lamp Options','One Time Use, 1 Lamp Only, Medium and Low Pressure Lamp Options',2500,1,'P30D ',1,1,3),(4,'One Time Use, Multiple Lamps, Medium and Low Pressure Lamp Options','One Time Use, Multiple Lamps, Medium and Low Pressure Lamp Options',8500,1,'P30D ',1,1,0),(6,'30 Days Use, 1 Lamp Only, Medium and Low Pressure Lamp Options','30 Days Use Use, 1 Lamp Only, Medium and Low Pressure Lamp Options',6000,1,'P30D ',0,0,3),(8,'30 Days Use Use, Multiple Lamps, Medium and Low Pressure Lamp Options','30 Days Use Use, Multiple Lamps, Medium and Low Pressure Lamp Options',18000,1,'P30D ',0,0,0),(10,'365 Days Use, 1 Lamp Only, Medium and Low Pressure Lamp Options','365 Days Use, 1 Lamp Only, Medium and Low Pressure Lamp Options',60000,1,'P365D ',0,0,3),(12,'365 Days Use, Multiple Lamps, Medium and Low Pressure Lamp Options','365 Days Use, Multiple Lamps, Medium and Low Pressure Lamp Options',180000,1,'P365D ',0,0,0);
/*!40000 ALTER TABLE `oc_subscription_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `oc_subscription_payment_connection`
--

LOCK TABLES `oc_subscription_payment_connection` WRITE;
/*!40000 ALTER TABLE `oc_subscription_payment_connection` DISABLE KEYS */;
INSERT INTO `oc_subscription_payment_connection` VALUES (1,'sk_test_4S4Jz3hX2J4cFhALjSWZxd7X','pk_test_4S4J1EARWdlS5fi6LsLs6e6H');
/*!40000 ALTER TABLE `oc_subscription_payment_connection` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-09-04  4:28:53
