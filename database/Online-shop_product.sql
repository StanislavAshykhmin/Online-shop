-- MySQL dump 10.13  Distrib 5.7.20, for Linux (x86_64)
--
-- Host: localhost    Database: Online-shop
-- ------------------------------------------------------
-- Server version	5.7.21-0ubuntu0.16.04.1

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
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `code` int(11) NOT NULL,
  `price` float NOT NULL,
  `availability` int(11) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `is_new` int(11) NOT NULL DEFAULT '0',
  `is_recommended` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT '2017-12-04 13:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (1,'iPhone 7 128 GB',1,2314,99,1,'Apple','blablabla',1,0,1,'2018-01-28 16:28:28','2017-12-04 13:00:00'),(2,'iPhone 7 32 GB',1,1249,199,1,'Apple','blablabla',0,0,1,'2018-01-30 10:03:41','2017-12-04 13:00:00'),(3,'iPhone 7 64 GB',1,2345,299,1,'Apple','blablabla',0,0,1,'2018-01-30 10:09:19','2017-12-04 13:00:00'),(4,'iPhone 7 128 GB',1,2479,399,1,'Apple','blablabla',0,1,1,'2018-01-30 10:09:19','2017-12-04 13:00:00'),(5,'iPhone 7 plus 16 GB',1,3458,199,1,'Apple','blablabla',1,1,1,'2018-01-30 10:09:19','2017-12-04 13:00:00'),(6,'iPhone 7 plus 32 GB',1,1237,299,1,'Apple','blablabla',0,1,1,'2018-01-30 10:09:19','2017-12-04 13:00:00'),(7,'iPhone 7 plus 64 GB',1,3472,399,1,'Apple','blablabla',0,1,1,'2018-01-30 10:09:19','2017-12-04 13:00:00'),(9,'iPhone 8 16 GB',1,5283,299,1,'Apple','blablabla',0,1,1,'2018-01-30 10:09:19','2017-12-04 13:00:00'),(10,'iPhone 8 32 GB',1,3422,399,1,'Apple','blablabla',0,0,1,'2018-01-30 10:09:19','2017-12-04 13:00:00'),(11,'iPhone 8 128 GB',1,2222,599,1,'Apple','blablabla',1,0,1,'2018-01-30 10:09:19','2017-12-04 13:00:00'),(12,'iPAD 2 64 GB + 3G',2,1234,199,1,'Apple','qwerty',1,1,1,'2018-03-13 21:47:00','2017-12-04 13:00:00');
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-03-14  5:43:03
