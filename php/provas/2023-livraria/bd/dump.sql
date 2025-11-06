CREATE DATABASE  IF NOT EXISTS `db_book_store_manha` /*!40100 DEFAULT CHARACTER SET utf8mb3 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `db_book_store_manha`;
-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: localhost    Database: db_book_store_manha
-- ------------------------------------------------------
-- Server version	8.0.34

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
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admins` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admins`
--

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` VALUES (1,'Fábio Santos','fabiosantos@ifsul.edu.br','$2y$10$erjR7RQMmDObQaWisjoOvuOAsuUa2yfLnA5yF.LkBekUSMidKheve');
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `books` (
  `id` int NOT NULL AUTO_INCREMENT,
  `category_id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL DEFAULT '250.00',
  PRIMARY KEY (`id`),
  KEY `fk_books_categories1_idx` (`category_id`),
  CONSTRAINT `fk_books_categories1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `books`
--

LOCK TABLES `books` WRITE;
/*!40000 ALTER TABLE `books` DISABLE KEYS */;
INSERT INTO `books` VALUES (3,1,'Harry Potter and the Prisoner of Azkaban',250.00),(4,1,'Harry Potter and the Goblet of Fire',250.00),(6,1,'Animal Farm',250.00),(7,1,'Pride and Prejudice',250.00),(8,1,'To Kill a Mockingbird',250.00),(9,1,'The Old Man and the Sea',250.00),(10,1,'I Know Why the Caged Bird Sings',250.00),(11,1,'The Adventures of Huckleberry Finn',250.00),(12,1,'One Hundred Years of Solitude',250.00),(13,1,'The Great Gatsby',250.00),(14,1,'War and Peace',250.00),(17,2,'Sense and Sensibility',250.00),(18,2,'Go Set a Watchman',250.00),(19,2,'A Farewell to Arms',250.00),(20,2,'Gather Together in My Name',250.00),(21,2,'The Adventures of Tom Sawyer',250.00),(22,2,'Love in the Time of Cholera',250.00),(23,2,'Tender Is the Night',250.00),(24,2,'Anna Karenina',250.00),(26,1,'Catch-22',250.00),(27,1,'Moby-Dick',250.00),(28,1,'The Catcher in the Rye',250.00),(29,1,'Brave New World',250.00),(30,1,'Lord of the Flies',250.00),(31,1,'The Road',250.00),(32,1,'The Grapes of Wrath',250.00),(33,1,'The Picture of Dorian Gray',250.00),(34,1,'The Scarlet Letter',250.00),(35,1,'The Bell Jar',250.00);
/*!40000 ALTER TABLE `books` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Ficção'),(2,'Romance'),(3,'Terror'),(4,'Aventura'),(5,'Mistério'),(6,'Sci-Fi'),(7,'História'),(8,'Autoajuda'),(9,'Biografia'),(10,'Fantasia');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (5,'Fábio Luís da Silva Santos','fabiosantos@ifsul.edu.br','$2y$10$erjR7RQMmDObQaWisjoOvuOAsuUa2yfLnA5yF.LkBekUSMidKheve'),(6,'João da Silva','joao_silva@gmail.com','$2y$10$erjR7RQMmDObQaWisjoOvuOAsuUa2yfLnA5yF.LkBekUSMidKheve'),(7,'José da Silva','jose_silva@gmail.com','$2y$10$5Hbqdyx8gFfcQoCL4tZbvui/IarwePJX3bR23kqGlq2qPi0fxJEPu');
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

-- Dump completed on 2023-12-01  8:56:14
