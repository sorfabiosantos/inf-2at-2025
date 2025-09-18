-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: localhost    Database: db_company
-- ------------------------------------------------------
-- Server version	8.0.42

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
INSERT INTO `categories` VALUES (1,'Eletrônicos'),(2,'Informática'),(3,'Eletrodomésticos'),(4,'Móveis'),(5,'Vestuário Masculino'),(6,'Vestuário Feminino'),(7,'Esporte e Lazer'),(8,'Beleza e Higiene'),(9,'Brinquedos'),(10,'Livros');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `categoryId` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` float(10,2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_products_categories_idx` (`categoryId`),
  CONSTRAINT `fk_products_categories` FOREIGN KEY (`categoryId`) REFERENCES `categories` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,1,'Smartphone Samsung Galaxy A55',1899.00),(2,1,'Smart TV LG 55\" 4K',2799.90),(3,1,'Fone Bluetooth JBL Tune 520',299.00),(4,2,'Notebook Dell Inspiron 15',3899.00),(5,2,'Mouse Gamer Logitech G203',149.90),(6,2,'Teclado Mecânico Redragon Kumara',229.90),(7,3,'Geladeira Frost Free Brastemp 375L',3499.00),(8,3,'Máquina de Lavar Electrolux 11kg',2599.00),(9,3,'Micro-ondas Panasonic 30L',749.00),(10,4,'Sofá 3 Lugares Retrátil Cinza',2199.00),(11,4,'Mesa de Jantar 6 Cadeiras MDF',1599.00),(12,4,'Cadeira Ergonômica Office Preta',899.00),(13,5,'Camiseta Algodão Básica Masculina',49.90),(14,5,'Calça Jeans Masculina Slim',159.90),(15,5,'Jaqueta Corta-Vento Masculina',239.90),(16,6,'Vestido Midi Floral Feminino',189.90),(17,6,'Blusa Tricot Feminina Bege',129.90),(18,6,'Tênis Casual Branco Feminino',219.90),(19,7,'Bicicleta Aro 29 MTB Alumínio',1899.00),(20,7,'Bola Oficial Futebol Campo',129.90),(21,7,'Colchonete Yoga Premium',89.90),(22,8,'Shampoo Reconstrução 400ml',29.90),(23,8,'Creme Hidratante Corporal 200ml',34.90),(24,8,'Barbeador Elétrico Philips',279.00),(25,9,'Lego Classic Caixa Criativa Média',249.90),(26,9,'Quebra-Cabeça 1000 Peças Paisagem',69.90),(27,9,'Boneca Articulada Fashion 30cm',119.90),(28,10,'Livro Dom Casmurro - Machado de Assis',34.90),(29,10,'Livro Clean Code - Robert C. Martin',149.90),(30,10,'Livro O Hobbit - J.R.R. Tolkien',59.90);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Fábio Santos','fabiosantos@ifsul.edu.br','12345678'),(2,'Monteiro Lobato','monteiro@gmail.com','12345678'),(3,'Machado de Assis','machado@gmail.com','12345678');
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

-- Dump completed on 2025-09-18  6:41:25
