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
) ENGINE=InnoDB AUTO_INCREMENT=105 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table demo.articles: ~32 rows (approximately)
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
INSERT INTO `articles` (`id`, `title`, `body`, `time`) VALUES
	(1, 'Let\'s speak Latin', 'Lorem ipsum dolor sit amet...', 1623499025),
	(2, 'This is a test article', 'I don\'t really know what to put here.. Will this do?', 1623500454),
	(3, 'U.S. Authorities Shut Down Slilpp—Largest Marketplace for Stolen Logins', 'The U.S. Department of Justice (DoJ) Thursday said it disrupted and took down the infrastructure of an underground marketplace known as "Slilpp" that specialized in trading stolen login credentials as part of an international law enforcement operation.\r\n\r\nOver a dozen individuals have been charged or arrested in connection with the illegal marketplace. The cyber crackdown, which involved the joint efforts of the U.S., Germany, the Netherlands, and Romania, also commandeered a set of servers hosting its infrastructure as well as the multiple domains the group operated.', 1623521362),
	(4, 'New Cyber Espionage Group Targeting Ministries of Foreign Affairs', 'Cybersecurity researchers on Thursday took the wraps off a new cyberespionage group that has been behind a series of targeted attacks against diplomatic entities and telecommunication companies in Africa and the Middle East since at least 2017.', 1623522662),
	(7, 'News admin interface', 'I\'ve added a new (super secret) news admin interface that allows adding these articles with few clicks!', 1623600675),
	(8, 'Test', '<script>alert("vulnerable")</script>', 1623600837),
	(9, 'This article should stay here', 'Imagine if this article wasn\'t here.\r\nYeah, you cannot delete it. It\'s impossible', 1623603756),
	(10, '<script>alert("vulnerable")</script>', 'That\'d be funny if it worked', 1623603882),
	(11, 'One more try', '<IMG SRC=/ onerror="alert(String.fromCharCode(88,83,83))"></img>', 1623604768),
	(12, 'Graphene is one of the best hackers ever ', 'Well.. Holy shit', 1623607785),
	(13, 'NVIDIA is dropping support for Windows 7 and Windows 8 drivers', 'NVIDIA is dropping support for Windows 7, Windows 8, and Windows 8.1 drivers starting in October. 2021, as they focus on supporting Windows 10 and later versions of Windows.', 1623607907),
	(15, 'Markdown 😊', '## Markdown!\r\nWhere?\r\n\r\n![cute cat animated gif](https://media1.tenor.com/images/859b00123f71e2772a87b9b79899c74d/tenor.gif)', 1623608470),
	(16, 'Interpol shuts down thousands of fake online pharmacies', 'The Interpol (International Criminal Police Organisation) has taken down thousands of online marketplaces that posed as pharmacies and pushed dangerous fake and illicit drugs and medicine.', 1623608491),
	(17, ' Microsoft\'s next generation of Windows — What we know so far', 'Microsoft will soon reveal their next generation of Windows at an upcoming press event later this month. Here is what we know so far about Microsoft\'s new version of Windows.', 1623608499),
	(18, ' Audi, Volkswagen data breach affects 3.3 million customers', 'Audi and Volkswagen have suffered a data breach affecting 3.3 million customers after a vendor exposed unsecured data on the Internet.', 1623608512),
	(19, ' Intuit notifies customers of hacked TurboTax accounts', 'Financial software company Intuit has notified TurboTax customers that some of their personal and financial information was accessed by attackers following what looks like a series of account takeover attacks.', 1623608521),
	(20, ' Microsoft pushes Windows 10 KB4023057 again to fix update issues', 'Microsoft is rolling out the KB4023057 update again to all versions of Windows 10 to ensure that devices can successfully install new updates as they are released.', 1623608528),
	(21, 'Codecov ditches Bash Uploader for a NodeJS executable', 'Codecov has now introduced a new cross-platform uploader meant to replace its former Bash Uploader. The new uploader is available as a static binary executable currently supporting the Windows, Linux, and macOS operating systems. However, some have raised concerns with the new uploader and the many dependencies it contains.', 1623608538),
	(22, ' The Week in Ransomware - June 11th 2021 - Under Pressure', 'It has been quite the week when it comes to ransomware, with ransoms being paid, ransoms being taken back, and a ransomware gang shutting down.', 1623608545),
	(23, ' Friday gift: Microsoft Teams bug puts calls directly in voicemail', 'A Microsoft Teams change is causing calls to go directly to voicemail, much to users\' happiness worldwide.', 1623608554),
	(24, 'Hello!', 'Krunch was here lol', 1623633365),
	(25, 'Oh Heyyyy ', 'Tyl3rDurd3n found it :D', 1623670565),
	(28, 'This guy is a bad journalist', '![Bad journalist](https://i.postimg.cc/PxR9qYDk/4rlenrey.png)', 1623682080),
	(30, 'HELLO', 'ahh', 1623499025),
	(31, 'HELLO', 'ahh', 0),
	(44, 'Let\'s speak Latin', 'Lorem ipsum dolor sit amet...', 1623499025),
	(45, 'Testing', 'Testing 1 2 3...', 1623683981),
	(99, 'dexter', 'love you Heap <3', 1623684135),
	(100, 'The Maligator', 'That took me way too long.', 1623693677),
	(101, 'Test', '[cute cat animated gif](https://media1.tenor.com/images/859b00123f71e2772a87b9b79899c74d/tenor.gif', 1623774545),
	(103, 'Notice me', '![Bad journalist](https://i.postimg.cc/PxR9qYDk/4rlenrey.png) 👉👈 Hey, wanna play some chess? ', 1623781430),
	(104, 'awd', 'awd', 1623974774);
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;

-- Dumping structure for table demo.photos
CREATE TABLE IF NOT EXISTS `photos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `photo_url` varchar(180) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table demo.photos: ~0 rows (approximately)
/*!40000 ALTER TABLE `photos` DISABLE KEYS */;
INSERT INTO `photos` (`id`, `photo_url`, `description`) VALUES
	(1, '/uploads/images/mr_robot.png', 'This is Rami Malek aka "Mr. Robot"'),
	(2, '/uploads/images/mr_robot.png', 'This is Rami Malek aka "Mr. Robot"'),
	(3, '/uploads/images/mr_robot.png', 'This is Rami Malek aka "Mr. Robot"'),
	(4, '/uploads/images/mr_robot.png', 'This is Rami Malek aka "Mr. Robot"'),
	(5, '/uploads/images/mr_robot.png', 'This is Rami Malek aka "Mr. Robot"'),
	(6, '/uploads/images/mr_robot.png', 'This is Rami Malek aka "Mr. Robot"'),
	(7, '/uploads/images/mr_robot.png', 'This is Rami Malek aka "Mr. Robot"'),
	(8, '/uploads/images/mr_robot.png', 'This is Rami Malek aka "Mr. Robot"'),
	(9, '/uploads/images/mr_robot.png', 'This is Rami Malek aka "Mr. Robot"'),
	(10, '/uploads/images/mr_robot.png', 'This is Rami Malek aka "Mr. Robot"');
/*!40000 ALTER TABLE `photos` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
