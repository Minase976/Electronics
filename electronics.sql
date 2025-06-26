-- MySQL dump 10.13  Distrib 8.0.36, for Win64 (x86_64)
--
-- Host: localhost    Database: electronics
-- ------------------------------------------------------
-- Server version	8.0.36

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `adminpassword`
--

DROP TABLE IF EXISTS `adminpassword`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `adminpassword` (
  `passId` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `adminpassword`
--

LOCK TABLES `adminpassword` WRITE;
/*!40000 ALTER TABLE `adminpassword` DISABLE KEYS */;
/*!40000 ALTER TABLE `adminpassword` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `customer` (
  `customerId` int NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) DEFAULT NULL,
  `lastName` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `pass_word` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`customerId`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer`
--

LOCK TABLES `customer` WRITE;
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;
INSERT INTO `customer` VALUES (1,'Minase','Kasu','0909167660','minasekasu963@email.com','12345678'),(2,'ermiyas','getu','0927606917','getuermias@678.com','23232'),(6,'Chala','Asefa','0965904704','chalaasefa120@gmail.com','123456'),(8,'Firaol','Terefe','0965904704','firaol@email.com','1234567'),(10,'Balela','Jarso','0916401029','balelajarso6@gmail.com','123454321'),(11,'kassahun','Fikadu','0909564645','kassahunfikadu@gmail.com','4321'),(16,'Namrud','Eliyas','0976567247','namrudeliyas231@email.com','09876543'),(17,'Abdisa','Lema','0975235529','Abdisa231@gmail.com','12345432');
/*!40000 ALTER TABLE `customer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `earphone`
--

DROP TABLE IF EXISTS `earphone`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `earphone` (
  `earId` int NOT NULL AUTO_INCREMENT,
  `earName` varchar(255) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `price` double DEFAULT NULL,
  PRIMARY KEY (`earId`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `earphone`
--

LOCK TABLES `earphone` WRITE;
/*!40000 ALTER TABLE `earphone` DISABLE KEYS */;
INSERT INTO `earphone` VALUES (1,'sony','WH-1000XM4',234),(3,'Bose','QuietComfort 35',299),(4,'Apple','Airpodd Pro',249),(5,'Jabra','Elite 85h',249),(6,'Beats','Studio3 Wireless',349),(7,'Razer','Nari Ultimate',199),(8,'SteelSeries','Arctis 7',149),(9,'Logitech','G Pro X',129),(10,'JBL','E55BT',99),(11,'Plantronics','Voyager 8200 UC',249);
/*!40000 ALTER TABLE `earphone` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `laptop`
--

DROP TABLE IF EXISTS `laptop`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `laptop` (
  `pcId` int NOT NULL AUTO_INCREMENT,
  `pcName` varchar(255) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `price` double DEFAULT NULL,
  PRIMARY KEY (`pcId`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `laptop`
--

LOCK TABLES `laptop` WRITE;
/*!40000 ALTER TABLE `laptop` DISABLE KEYS */;
INSERT INTO `laptop` VALUES (1,'Apple','MacBook Pro 13',299),(2,'Dell',' XPS 13',999),(3,'HP ','Spectre x360 ',1199),(4,'Lenovo',' ThinkPad X1 Carbon ',1499),(5,' Asus ','ZenBook 14',899),(6,'Microsoft ','Surface Laptop 4 ',999),(7,'cer',' Swift ',6699),(8,'Razer',' Blade 15',1699),(9,'MSI',' GS66 Stealth',1799),(10,'Google',' Pixelbook Go',649),(11,'Huawei',' MateBook X Pro',1199),(12,'Samsung','Galaxy Book Flex ',1349),(13,'LG ','Gram 17 ',1499),(14,'Asus ','ROG Zephyrus G14 ',1299),(15,'Lenovo ','Yoga C940',1299),(16,'Acer',' Predator Helios 300',1199),(17,'HP ','Envy x360 ',899),(18,'Microsoft','Surface Book 3 ',1599),(19,'Gigabyte','Aero 15',2199);
/*!40000 ALTER TABLE `laptop` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `orders` (
  `orderId` int NOT NULL AUTO_INCREMENT,
  `customerId` int DEFAULT NULL,
  `customerName` varchar(255) DEFAULT NULL,
  `productName` varchar(255) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `price` double DEFAULT NULL,
  PRIMARY KEY (`orderId`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,1,'Minase','Apple','iPhone 12 Pro ',999),(2,16,'Namrud','Apple','iPhone 12 Pro ',999),(3,17,'Abdisa','Apple','iPhone 12 Pro ',999),(5,1,'Minase','Apple','iPhone 12 Pro ',999),(6,1,'Minase','Apple','iPhone 12 Pro ',999),(13,1,'Minase','Apple','iPhone 12 Pro ',999),(14,1,'Minase','Apple','iPhone 12 Pro ',999),(15,6,'Chala','Apple','iPhone 12 Pro ',999),(16,6,'Chala','Samsung','Galaxy S21 Ultra1',199);
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phone`
--

DROP TABLE IF EXISTS `phone`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `phone` (
  `phoneId` int NOT NULL AUTO_INCREMENT,
  `phone_name` varchar(255) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `price` double DEFAULT NULL,
  PRIMARY KEY (`phoneId`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phone`
--

LOCK TABLES `phone` WRITE;
/*!40000 ALTER TABLE `phone` DISABLE KEYS */;
INSERT INTO `phone` VALUES (8,'Apple','iPhone 12 Pro ',999),(9,'Samsung','Galaxy S21 Ultra1',199),(10,'Google','Pixel 5',699),(11,'OnePlus',' 9 Pro',969),(12,'Xiaomi',' Mi 11',749),(13,'Huawei','P40 Pro',899),(14,'Sony','Xperia 1 II',199),(15,'LG','V60 ThinQ 5G',899),(16,'Motorola','Edge+',999),(17,'Oppo','Find X3 Pro 1',149),(18,'ASUS','ROG Phone 5',999),(19,'Nokia',' PureView ',699),(20,'Vivo',' X60 Pro+ ',799),(21,'Realme','GT 5G',599),(22,'ZTE ','Axon 30 Ultra ',749),(23,'Lenovo','Legion Phone Duel 2',949),(24,'BlackBerry','KEY2',649),(25,'Alcatel','3V',199),(26,'Honor','View 20 ',499),(27,'Meizu ','18',1000);
/*!40000 ALTER TABLE `phone` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tablet`
--

DROP TABLE IF EXISTS `tablet`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tablet` (
  `tabId` int NOT NULL AUTO_INCREMENT,
  `tabName` varchar(255) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `price` double DEFAULT NULL,
  PRIMARY KEY (`tabId`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tablet`
--

LOCK TABLES `tablet` WRITE;
/*!40000 ALTER TABLE `tablet` DISABLE KEYS */;
INSERT INTO `tablet` VALUES (1,'Apple','Ipad pro 12.9',999),(3,'sony','xperia',599),(4,'Samsung ','Galaxy Tab S7+',849),(5,'Microsoft ','Surface Pro 7',749),(6,'Lenovo','Tab P11 Pro',499),(7,'Amazon','Fire HD 10',149),(8,'Huawei','MatePad Pro',499),(9,'Google','Pixel Slate',799),(10,'Asus','Zen Pad 3S 10',299),(11,'Xiaomi ','Mi Pad 5',499);
/*!40000 ALTER TABLE `tablet` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `try`
--

DROP TABLE IF EXISTS `try`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `try` (
  `phoneId` int NOT NULL AUTO_INCREMENT,
  `phone_name` varchar(255) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `price` double DEFAULT NULL,
  PRIMARY KEY (`phoneId`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `try`
--

LOCK TABLES `try` WRITE;
/*!40000 ALTER TABLE `try` DISABLE KEYS */;
INSERT INTO `try` VALUES (1,'techno','spark-20',3),(2,'techno','spark-20',3339),(3,'techno','spark-20',3339),(4,'techno','spark-20',5454);
/*!40000 ALTER TABLE `try` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-06-11  7:54:44
