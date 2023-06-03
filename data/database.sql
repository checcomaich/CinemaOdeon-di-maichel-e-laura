-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versione server:              10.4.28-MariaDB - mariadb.org binary distribution
-- S.O. server:                  Win64
-- HeidiSQL Versione:            12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dump della struttura del database cinema
CREATE DATABASE IF NOT EXISTS `cinema` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `cinema`;

-- Dump della struttura di tabella cinema.film
CREATE TABLE IF NOT EXISTS `film` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titolo` varchar(255) NOT NULL,
  `regista` varchar(255) NOT NULL,
  `genere` varchar(255) NOT NULL,
  `durata` int(11) NOT NULL,
  `annoprod` int(11) NOT NULL,
  `immagini` varchar(50) NOT NULL,
  `trailer` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dump dei dati della tabella cinema.film: ~33 rows (circa)
INSERT INTO `film` (`id`, `titolo`, `regista`, `genere`, `durata`, `annoprod`, `immagini`, `trailer`) VALUES
	(1, 'Revenant', 'Regista 1', 'Azione', 120, 2015, '../img/Revenant.jpg', 'https://www.youtube.com/watch?v=TrPlLwKhC0E'),
	(2, 'Eye in the sky', 'Regista 2', 'Drammatico', 110, 2016, '../img/sky-in-the-sky.jpg', 'https://www.youtube.com/watch?v=_LRMK5XzAtg'),
	(3, 'Mad max fury road', 'Regista 3', 'Azione', 130, 2015, '../img/madmax.jpg', 'https://www.youtube.com/watch?v=hEJnMQG9ev8'),
	(4, 'London has fallen', 'Regista 4', 'Azione', 115, 2016, '../img/london-has-fallen.jpg', 'https://www.youtube.com/watch?v=3AsOdX7NcJs'),
	(5, 'The Big Short', 'Regista 5', 'Commedia', 125, 2015, '../img/The Big Short.jpg', 'https://www.youtube.com/watch?v=vgqG3ITMv1Q'),
	(6, 'Avengers: Infinity War', 'Anthony Russo, Joe Russo', 'Azione', 149, 2018, '../img/avengers.jpeg', 'https://www.youtube.com/watch?v=6ZfuNTqbHE8'),
	(7, 'Black Panther', 'Ryan Coogler', 'Azione', 134, 2018, '../img/blackpantherfilm.jpeg', 'https://www.youtube.com/watch?v=xjDjIWPwcPU'),
	(8, 'Bohemian Rhapsody', 'Bryan Singer', 'Biografico', 134, 2018, '../img/bohem.jpeg', 'https://www.youtube.com/watch?v=mP0VHJYFOAU'),
	(9, 'A Star Is Born', 'Bradley Cooper', 'Drammatico', 136, 2018, '../img/star.jpeg', 'https://www.youtube.com/watch?v=nSbzyEJ8X9E'),
	(10, 'The Favourite', 'Yorgos Lanthimos', 'Drammatico', 119, 2018, '../img/favourite.jpeg', 'https://www.youtube.com/watch?v=SYb-wkehT1g'),
	(11, 'Green Book', 'Peter Farrelly', 'Biografico', 130, 2018, '../img/greenbook.jpeg', 'https://www.youtube.com/watch?v=QkZxoko_HC0'),
	(12, 'Roma', 'Alfonso Cuarón', 'Drammatico', 135, 2018, '../img/roma.jpeg', 'https://www.youtube.com/watch?v=fp_i7cnOgbQ'),
	(13, 'Spider-Man: Into the Spider-Verse', 'Bob Persichetti, Peter Ramsey, Rodney Rothman', 'Azione', 117, 2018, '../img/spider.jpeg', 'https://www.youtube.com/watch?v=g4Hbz2jLxvQ'),
	(14, 'Captain Marvel', 'Anna Boden, Ryan Fleck', 'Azione', 123, 2019, '../img/capmarvel.jpeg', 'https://www.youtube.com/watch?v=0LHxvxdRnYc'),
	(15, 'Joker', 'Todd Phillips', 'Drammatico', 122, 2019, '../img/joker.jpeg', 'https://www.youtube.com/watch?v=zAGVQLHvwOY'),
	(16, 'Sirenetta', 'Robb Marshall', 'animazione', 132, 2023, '../img/sirenetta.jpeg', 'https://www.youtube.com/watch?v=Q-8uRR0gxTA&pp=ygUbdHJhaWxlciBzaXJlbmV0dGEgZmlsbSAyMDIz'),
	(17, '1917', 'Sam Mendes', 'Drammatico', 119, 2019, '../img/1917.jpeg', 'https://www.youtube.com/watch?v=YqNYrYUiMfg'),
	(18, 'Knives Out', 'Rian Johnson', 'Thriller', 131, 2019, '../img/knivesout.jpeg', 'https://www.youtube.com/watch?v=xi-1NchUqMA'),
	(19, 'Ford v Ferrari', 'James Mangold', 'Biografico', 152, 2019, '../img/ford.jpeg', 'https://www.youtube.com/watch?v=I3h9Z89U9ZA'),
	(20, 'Once Upon a Time in Hollywood', 'Quentin Tarantino', 'Drammatico', 161, 2019, '../img/uponatime.jpeg', 'https://www.youtube.com/watch?v=ELeMaP8EPAA'),
	(21, 'Pain and Glory', 'Pedro Almodóvar', 'Drammatico', 113, 2019, '../img/pain.jpeg', 'https://www.youtube.com/watch?v=SNf_gvE32mg'),
	(22, 'Tenet', 'Christopher Nolan', 'Azione', 150, 2020, '../img/tenet.jpeg', 'https://www.youtube.com/watch?v=L3pk_TBkihU'),
	(23, 'Soul', 'Pete Docter', 'Thriller', 100, 2020, '../img/soul.jpeg', 'https://www.youtube.com/watch?v=xOsLIiBStEs'),
	(24, 'Nomadland', 'Chloé Zhao', 'Drammatico', 108, 2020, '../img/normadland.jpeg', 'https://www.youtube.com/watch?v=6sxCFZ8_d84'),
	(25, 'The Father', 'Florian Zeller', 'Drammatico', 97, 2020, '../img/father.jpeg', 'https://www.youtube.com/watch?v=4TZb7YfK-JI'),
	(26, 'Fast X', 'Lois Leterrier,Vin Diesel', 'Azione', 141, 2023, '../img/fastx.jpeg', 'https://www.youtube.com/watch?v=2rKc-PDzGzc&pp=ygUbdHJhaWxlciBmYXN0IGFuZCBmdXJpb3VzIDEw'),
	(27, 'M3gan', 'Gerrard Johnstone', 'Horror', 102, 2023, '../img/megan.jpeg', 'https://www.youtube.com/watch?v=BRb4U99OU80&pp=ygU'),
	(31, 'Judas and the Black Messiah', 'Shaka King', 'Biografico', 126, 2021, '../img/judah.jpeg', 'https://www.youtube.com/watch?v=sSjtGqRXQ9Y'),
	(46, 'The Irishman', 'Martin Scorsese', 'Biografico', 209, 2019, '../img/irishman.jpeg', 'https://www.youtube.com/watch?v=WHXxVmeGQUc'),
	(47, 'The Boogeyman', 'Rob Savage', 'Horror', 98, 2023, '../img/boogey.jpeg', 'https://www.youtube.com/watch?v=dS479RYjzFk&pp=ygUJYm9vZ2V5bWFu'),
	(48, 'The Fabelmans', 'Steven Spielberg', 'Biografico', 151, 2022, '../img/fabel.jpeg', 'https://www.youtube.com/watch?v=Bn63qpvoY0Y&pp=ygUNdGhlIGZhYmVsbWFucw%3D%3D'),
	(49, 'IT', 'Andy Muschietti', 'Horror', 135, 2017, '../img/it.jpeg', 'https://www.youtube.com/watch?v=xKJmEC5ieOk&pp=ygUCaXQ%3D'),
	(50, 'Annabelle', 'John Leonetti', 'Horror', 99, 2014, '../img/annabelle.jpeg', 'https://youtu.be/IWNXkcBWCIc');

-- Dump della struttura di tabella cinema.proiezioni
CREATE TABLE IF NOT EXISTS `proiezioni` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titolo` varchar(255) NOT NULL,
  `codsala` int(11) NOT NULL,
  `orario` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dump dei dati della tabella cinema.proiezioni: ~5 rows (circa)
INSERT INTO `proiezioni` (`id`, `titolo`, `codsala`, `orario`) VALUES
	(1, 'Revenant', 1, '18:00:00'),
	(2, 'Eye in the sky', 2, '20:00:00'),
	(3, 'Mad max fury road', 3, '19:30:00'),
	(4, 'London has fallen', 1, '21:00:00'),
	(5, 'The Big Short', 2, '22:30:00');

-- Dump della struttura di tabella cinema.sale
CREATE TABLE IF NOT EXISTS `sale` (
  `codsala` int(11) NOT NULL AUTO_INCREMENT,
  `posti` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `citta` varchar(50) NOT NULL,
  PRIMARY KEY (`codsala`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dump dei dati della tabella cinema.sale: ~7 rows (circa)
INSERT INTO `sale` (`codsala`, `posti`, `nome`, `citta`) VALUES
	(1, 300, 'sala 1', 'Milano'),
	(2, 200, 'sala 2', 'Milano'),
	(3, 300, 'sala 3', 'Milano'),
	(4, 250, 'sala 4', 'Milano'),
	(5, 250, 'sala 5', 'Milano'),
	(6, 200, 'sala 6', 'Milano'),
	(7, 250, 'sala 7', 'Milano');

-- Dump della struttura di tabella cinema.utenti
CREATE TABLE IF NOT EXISTS `utenti` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cognome` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `telefono` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dump dei dati della tabella cinema.utenti: ~1 rows (circa)
INSERT INTO `utenti` (`username`, `password`, `nome`, `cognome`, `mail`, `telefono`) VALUES
	('maic', 'z', 'maich', 'el', 'maichel.aldehna@liceobanfi.ru', 2147483647);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
