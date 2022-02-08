# ************************************************************
# Sequel Ace SQL dump
# Version 20025
#
# https://sequel-ace.com/
# https://github.com/Sequel-Ace/Sequel-Ace
#
# Host: 127.0.0.1 (MySQL 5.5.5-10.6.5-MariaDB-1:10.6.5+maria~focal)
# Database: collectorsapp
# Generation Time: 2022-02-08 10:25:56 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE='NO_AUTO_VALUE_ON_ZERO', SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table marvelfilms
# ------------------------------------------------------------

DROP TABLE IF EXISTS `marvelfilms`;

CREATE TABLE `marvelfilms` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `filmName` varchar(500) DEFAULT NULL,
  `yearOfRelease` int(11) DEFAULT NULL,
  `runningLengthMins` int(11) DEFAULT NULL,
  `imdbRating` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `marvelfilms` WRITE;
/*!40000 ALTER TABLE `marvelfilms` DISABLE KEYS */;

INSERT INTO `marvelfilms` (`id`, `filmName`, `yearOfRelease`, `runningLengthMins`, `imdbRating`)
VALUES
	(1,'Iron Man',2008,126,7.9),
	(2,'Iron Man 2',2010,124,6.9),
	(3,'Thor',2011,115,7),
	(4,'Captain America: The First Avenger',2011,124,6.9),
	(5,'The Avengers',2012,143,8),
	(6,'Iron Man 3',2013,130,7.1),
	(7,'Thor: The Darkworld',2013,112,6.8),
	(8,'Captain America: The Winter Soldier',2014,136,7.7),
	(9,'Guardians of the Galaxy ',2014,121,8),
	(10,'Avengers: Age of Ultron',2015,141,7.3),
	(11,'Ant-Man',2015,117,7.3),
	(12,'Captain America - Civil War',2016,147,7.8),
	(13,'Doctor Strange',2016,115,7.5),
	(14,'Guardians of the Galaxy - Vol.2',2017,136,7.6),
	(15,'Spider-Man: Homecoming',2017,133,7.4),
	(16,'Thor: Ragnarok',2017,130,7.9),
	(17,'Black Panther',2018,134,7.3),
	(18,'Avengers: Infinity War',2018,149,8.4),
	(19,'Ant-Man and the Wasp',2018,118,7),
	(20,'Captain Marvel',2019,125,6.8),
	(21,'Avengers: Endgame',2019,182,8.4),
	(22,'Spider-Man: Far From Home',2019,130,7.4),
	(23,'Black Widow',2021,133,6.7),
	(24,'Shang-Chi and the Legend of the Ten Rings',2021,132,7.5),
	(25,'Eternals',2021,157,6.5),
	(26,'Spider-Man: No Way Home',2021,148,8.7);

/*!40000 ALTER TABLE `marvelfilms` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table marvelscharacters
# ------------------------------------------------------------

DROP TABLE IF EXISTS `marvelscharacters`;

CREATE TABLE `marvelscharacters` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(500) DEFAULT NULL,
  `alignment` varchar(500) DEFAULT NULL,
  `height_cm` int(100) DEFAULT NULL,
  `weight_kg` float DEFAULT NULL,
  `place_of_birth` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `marvelscharacters` WRITE;
/*!40000 ALTER TABLE `marvelscharacters` DISABLE KEYS */;

INSERT INTO `marvelscharacters` (`id`, `name`, `alignment`, `height_cm`, `weight_kg`, `place_of_birth`)
VALUES
	(1,'Spider-Man','Hero',178,75.75,'Queens'),
	(2,'Iron Man','Hero',185,102.06,'Sofia'),
	(3,'Captain America','Hero',188,108.86,'Manhatten'),
	(4,'Captain Marvel','Hero',180,74.84,'Boston'),
	(5,'Black Widow','Hero',170,59.42,'Stalingrad'),
	(6,'Loki','Villain',193,238.14,'Deity'),
	(7,'Thanos','Villain',201,446.79,'Titan'),
	(8,'Red Skull','Villain',196,85.73,'Germany'),
	(9,'Hulk','Hero',244,635.03,'Dayton'),
	(10,'Thor','Hero',198,290.3,'Norway');

/*!40000 ALTER TABLE `marvelscharacters` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
