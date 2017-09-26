-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.14 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for shop
DROP DATABASE IF EXISTS `shop`;
CREATE DATABASE IF NOT EXISTS `shop` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `shop`;

-- Dumping structure for table shop.products
DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(50) NOT NULL,
  `weight` decimal(10,2) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

-- Dumping data for table shop.products: 9 rows
DELETE FROM `products`;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` (`id`, `name`, `price`, `description`, `image`, `weight`, `qty`) VALUES
	(1, 'dviratis', 100.00, 'elektrinis', '', 1231.55, 5),
	(2, 'kompiuteris', 500.00, 'dell', '', 456.66, 4),
	(3, 'televizorius', 1000.00, 'samsung', '', 200.55, 10),
	(4, 'usb', 20.00, 'kingston', '', 222.69, 50),
	(5, 'ausines', 200.00, 'sony', '', 222.85, 40),
	(6, 'klaviatura', 500.00, 'razer', '', 2222.20, 20),
	(26, 'dviratis', 5.00, 'lhkjhhj', 'baze.png', 100.55, 3),
	(27, 'dviratis', 5.00, 'lhkjhhj', 'baze.png', 100.55, 3),
	(28, 'dviratis', 5.00, 'asaas', 'caffein.png', 100.55, 1);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
