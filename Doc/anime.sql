-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 21 nov. 2020 à 13:59
-- Version du serveur :  8.0.21
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `openingbdd`
--

-- --------------------------------------------------------

--
-- Structure de la table `anime`
--

DROP TABLE IF EXISTS `anime`;
CREATE TABLE IF NOT EXISTS `anime` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `season` varchar(255) DEFAULT NULL,
  `malLink` varchar(255) DEFAULT NULL,
  `videoLink` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `anime`
--

INSERT INTO `anime` (`id`, `name`, `season`, `malLink`, `videoLink`) VALUES
(1, 'Konosuba', 'Fall', 'https://myanimelist.net/anime/30831/Kono_Subarashii_Sekai_ni_Shukufuku_wo', '../res/opening/Kaguya-sama_Love_is_War_Opening_1.mp4'),
(2, 'monogatari', 'Summer', 'https://myanimelist.net/anime/5081/Bakemonogatari', '../res/opening/Kaguya-sama_Love_is_War_Opening_1.mp4'),
(3, 'Pokemon', 'Winter', 'https://myanimelist.net/anime/527/Pokemon?q=pokemon&cat=anime', '../res/opening/Kaguya-sama_Love_is_War_Opening_1.mp4'),
(35, 'Little Witch', 'winter', 'https://myanimelist.net/anime/33489/Little_Witch_Academia_TV', '../res/opening/Kaguya-sama_Love_is_War_Opening_1.mp4');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
