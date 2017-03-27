-- MySQL dump 10.16  Distrib 10.1.21-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: localhost
-- ------------------------------------------------------
-- Server version	10.1.21-MariaDB

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
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `books` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL,
  `genre` varchar(250) NOT NULL,
  `author` varchar(250) NOT NULL,
  `year` int(11) NOT NULL,
  `price` int(11) NOT NULL DEFAULT '0',
  `image_path` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `books`
--

LOCK TABLES `books` WRITE;
/*!40000 ALTER TABLE `books` DISABLE KEYS */;
INSERT INTO `books` VALUES (1,'A Human Element book 1','Thriller','Donna Gallanti',2012,150,NULL),(2,'A Human Element book 2','Thriller','Donna Galanti',2013,150,NULL),(3,'A Walk to Remember','Romance','Nicholas Sparks',1999,150,NULL),(4,'Angels and Demons','Thriller','Dan Brown',2000,150,NULL),(5,'Ellon Musk','Biography','Ashley Vance',2015,150,NULL),(6,'Gone Girl','Thriller','Gillian Flyn',2012,150,NULL),(7,'Hidden Figures','Biography','Margot Lee Shetterly',2016,150,NULL),(8,'If Tomorrow Comes','Drama','Sydney Sheldon',1985,150,NULL),(9,'Long Walk to Freedom','Biography','Nelson Mandela',1994,150,NULL),(10,'Pope Francis Untying the Knots','Biography','Paul Vallely',2013,150,NULL),(11,'Pride and Prejudice','Romance','Jane Austen',1813,150,NULL),(12,'Romeo and Juliet','Romance','William Shakespear',1597,150,NULL),(13,'Seventh Plague','Drama','James Rollins',2016,150,NULL),(14,'Stay Close','Drama','Harlan Coben',2000,150,NULL),(15,'The Gift','Drama','James Patterson',2010,150,NULL),(16,'The Notebook','Romance','Nicholas Sparks',1996,150,NULL),(17,'Some Title','Thriller','Some Author',1920,100,''),(18,'Another Title','Thriller','Another Book',2000,100,'uploads/bio1.jpg'),(19,'Test','Romance','Test',2000,100,'uploads/bio2.jpg');
/*!40000 ALTER TABLE `books` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(250) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(250) NOT NULL,
  `phone` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `email_2` (`email`),
  UNIQUE KEY `phone` (`phone`),
  UNIQUE KEY `phone_2` (`phone`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'ordinary','habbes','habbes@mailer.com','$2y$10$g04u1OBD3ivlKRQZRP.yYuXDZnq3dYqBmHc3TA/HC1KgOPq0n3qwy','+254726166685'),(2,'admin','admin','admin@mailer.com','$2y$10$A5nOnQ10Jy1DkCbvBnebE.EGWvIOtKUna5qk/Y0PClmE2qoAOX6BS','+123456789');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-03-27  2:37:46
