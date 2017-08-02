-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.6.12-log


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema elegant
--

CREATE DATABASE IF NOT EXISTS elegant;
USE elegant;

--
-- Definition of table `customer_info`
--

DROP TABLE IF EXISTS `customer_info`;
CREATE TABLE `customer_info` (
  `customer_name` varchar(45) NOT NULL,
  `biz_name` varchar(45) NOT NULL,
  `tax_id` varchar(15) NOT NULL,
  `address` varchar(150) NOT NULL,
  `email` varchar(45) NOT NULL,
  `fax` varchar(45) NOT NULL,
  `tel` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `biz_type` enum('Wholesaler','Retailer','Distributor','Other') DEFAULT NULL,
  `email_notification` enum('N','Y') DEFAULT NULL,
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_info`
--

/*!40000 ALTER TABLE `customer_info` DISABLE KEYS */;
INSERT INTO `customer_info` (`customer_name`,`biz_name`,`tax_id`,`address`,`email`,`fax`,`tel`,`username`,`password`,`biz_type`,`email_notification`,`id`) VALUES 
 ('Group 10','Elegant Apparel','none','no address','admin@elegant.lk','0123456789','0123456789','admin','81dc9bdb52d04dc20036dbd8313ed055','Other','Y',1),
 ('Dasun Wickramasinghe','dbw corporation','hsbn34433','malabe','dbwonfire@gmail.com','','0712341234','dbw','81dc9bdb52d04dc20036dbd8313ed055','Wholesaler','Y',2);
/*!40000 ALTER TABLE `customer_info` ENABLE KEYS */;


--
-- Definition of table `customer_orders`
--

DROP TABLE IF EXISTS `customer_orders`;
CREATE TABLE `customer_orders` (
  `order_no` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `MW0001` varchar(4) DEFAULT NULL,
  `MW0002` varchar(4) DEFAULT NULL,
  `MW0003` varchar(4) DEFAULT NULL,
  `MW0004` varchar(4) DEFAULT NULL,
  `MW0005` varchar(4) DEFAULT NULL,
  `MW0006` varchar(4) DEFAULT NULL,
  `MW0007` varchar(4) DEFAULT NULL,
  `MW0008` varchar(4) DEFAULT NULL,
  `MW0009` varchar(4) DEFAULT NULL,
  `MW0010` varchar(4) DEFAULT NULL,
  `MW0011` varchar(4) DEFAULT NULL,
  `MW0012` varchar(4) DEFAULT NULL,
  `WW0001` varchar(4) DEFAULT NULL,
  `WW0002` varchar(4) DEFAULT NULL,
  `WW0003` varchar(4) DEFAULT NULL,
  `WW0004` varchar(4) DEFAULT NULL,
  `WW0005` varchar(4) DEFAULT NULL,
  `WW0006` varchar(4) DEFAULT NULL,
  `WW0007` varchar(4) DEFAULT NULL,
  `WW0008` varchar(4) DEFAULT NULL,
  `WW0009` varchar(4) DEFAULT NULL,
  `WW0010` varchar(4) DEFAULT NULL,
  `WW0011` varchar(4) DEFAULT NULL,
  `WW0012` varchar(4) DEFAULT NULL,
  `KW0001` varchar(4) DEFAULT NULL,
  `KW0002` varchar(4) DEFAULT NULL,
  `KW0003` varchar(4) DEFAULT NULL,
  `KW0004` varchar(4) DEFAULT NULL,
  `KW0005` varchar(4) DEFAULT NULL,
  `KW0006` varchar(4) DEFAULT NULL,
  `KW0007` varchar(4) DEFAULT NULL,
  `KW0008` varchar(4) DEFAULT NULL,
  `KW0009` varchar(4) DEFAULT NULL,
  `KW0010` varchar(4) DEFAULT NULL,
  `KW0011` varchar(4) DEFAULT NULL,
  `KW0012` varchar(4) DEFAULT NULL,
  PRIMARY KEY (`order_no`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_orders`
--

/*!40000 ALTER TABLE `customer_orders` DISABLE KEYS */;
/*!40000 ALTER TABLE `customer_orders` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
