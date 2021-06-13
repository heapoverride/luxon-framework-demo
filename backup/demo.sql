-- --------------------------------------------------------
-- Host:                         157.230.215.184
-- Server version:               10.3.29-MariaDB-0ubuntu0.20.04.1 - Ubuntu 20.04
-- Server OS:                    debian-linux-gnu
-- HeidiSQL Version:             10.3.0.5771
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for demo
CREATE DATABASE IF NOT EXISTS `demo` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `demo`;

-- Dumping structure for table demo.articles
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `body` mediumtext DEFAULT NULL,
  `time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table demo.articles: ~0 rows (approximately)
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
INSERT INTO `articles` (`id`, `title`, `body`, `time`) VALUES
	(1, 'Let\'s speak Latin', 'Lorem ipsum dolor sit amet...', 1623499025),
	(2, 'This is a test article', 'I don\'t really know what to put here.. Will this do?', 1623500454),
	(3, 'U.S. Authorities Shut Down Slilpp—Largest Marketplace for Stolen Logins', 'The U.S. Department of Justice (DoJ) Thursday said it disrupted and took down the infrastructure of an underground marketplace known as "Slilpp" that specialized in trading stolen login credentials as part of an international law enforcement operation.\r\n\r\nOver a dozen individuals have been charged or arrested in connection with the illegal marketplace. The cyber crackdown, which involved the joint efforts of the U.S., Germany, the Netherlands, and Romania, also commandeered a set of servers hosting its infrastructure as well as the multiple domains the group operated.', 1623521362),
	(4, 'New Cyber Espionage Group Targeting Ministries of Foreign Affairs', 'Cybersecurity researchers on Thursday took the wraps off a new cyberespionage group that has been behind a series of targeted attacks against diplomatic entities and telecommunication companies in Africa and the Middle East since at least 2017.', 1623522662),
	(7, 'News admin interface', 'I\'ve added a new (super secret) news admin interface that allows adding these articles with few clicks!', 1623600675),
	(8, 'Test', '<script>alert("vulnerable")</script>', 1623600837);
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
