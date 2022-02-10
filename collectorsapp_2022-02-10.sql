# ************************************************************
# Sequel Ace SQL dump
# Version 20025
#
# https://sequel-ace.com/
# https://github.com/Sequel-Ace/Sequel-Ace
#
# Host: 127.0.0.1 (MySQL 5.5.5-10.6.5-MariaDB-1:10.6.5+maria~focal)
# Database: collectorsapp
# Generation Time: 2022-02-10 09:57:46 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE='NO_AUTO_VALUE_ON_ZERO', SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table marvelcharacters
# ------------------------------------------------------------

DROP TABLE IF EXISTS `marvelcharacters`;

CREATE TABLE `marvelcharacters` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(500) DEFAULT NULL,
  `alignment` varchar(500) DEFAULT NULL,
  `height_cm` int(100) DEFAULT NULL,
  `weight_kg` float DEFAULT NULL,
  `place_of_birth` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `marvelcharacters` WRITE;
/*!40000 ALTER TABLE `marvelcharacters` DISABLE KEYS */;

INSERT INTO `marvelcharacters` (`id`, `name`, `alignment`, `height_cm`, `weight_kg`, `place_of_birth`)
VALUES
	(1,'Spider-Man','Hero',178,75.75,'Queens'),
	(2,'Iron Man','Hero',185,102.06,'Sofia'),
	(3,'Captain America','Hero',188,108.86,'Manhattan'),
	(4,'Captain Marvel','Hero',180,74.84,'Boston'),
	(5,'Black Widow','Hero',170,59.42,'Stalingrad'),
	(6,'Loki','Villain',193,238.14,'Deity'),
	(7,'Thanos','Villain',201,446.79,'Titan'),
	(8,'Red Skull','Villain',196,85.73,'Germany'),
	(9,'Hulk','Hero',244,635.03,'Dayton'),
	(10,'Thor','Hero',198,290.3,'Norway'),
	(35,'I AM GROOT','Hero',701,3720,'Planet X'),
	(38,'Ronan The Accuser','Villain',226,217.72,'Hala'),
	(41,'Black Panther','Hero',183,9.72,'Wakanda'),
	(42,'Hela','Villain',213,226.8,'Jotunheim');

/*!40000 ALTER TABLE `marvelcharacters` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
