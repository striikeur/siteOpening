-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 14 nov. 2020 à 13:18
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
-- Base de données : `opening`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `pseudo` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
);

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
);

--
-- Déchargement des données de la table `anime`
--

INSERT INTO `anime` (`id`, `name`, `season`, `malLink`, `videoLink`) VALUES
(1, 'Konosuba', 'Fall', 'https://myanimelist.net/anime/30831/Kono_Subarashii_Sekai_ni_Shukufuku_wo', '../res/opening/Kaguya-sama_Love_is_War_Opening_1.mp4'),
(2, 'monogatari', 'Summer', 'https://myanimelist.net/anime/5081/Bakemonogatari', '../res/opening/Kaguya-sama_Love_is_War_Opening_1.mp4'),
(3, 'Pokemon', 'Winter', 'https://myanimelist.net/anime/527/Pokemon?q=pokemon&cat=anime', '../res/opening/Kaguya-sama_Love_is_War_Opening_1.mp4'),
(35, 'Little Witch', 'winter', 'https://myanimelist.net/anime/33489/Little_Witch_Academia_TV', '../res/opening/Kaguya-sama_Love_is_War_Opening_1.mp4');

-- --------------------------------------------------------

--
-- Structure de la table `note`
--

DROP TABLE IF EXISTS `note`;
CREATE TABLE IF NOT EXISTS `note` (
  `id` int NOT NULL AUTO_INCREMENT,
  `noteVideo` float NOT NULL DEFAULT '0',
  `noteMusique` float NOT NULL DEFAULT '0',
  `noteTotale` float NOT NULL DEFAULT '0',
  `idUser` int NOT NULL,
  `idAnime` int NOT NULL,
  PRIMARY KEY (`id`)
);
--
-- Déchargement des données de la table `note`
--

INSERT INTO `note` (`id`, `noteVideo`, `noteMusique`, `noteTotale`, `idUser`, `idAnime`) VALUES
(28, 4, 3, 7, 1, 35),
(27, 0.25, 5, 5.25, 1, 3),
(26, 1.75, 2.25, 4, 1, 2),
(25, 4.5, 4.5, 9, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
);

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `pseudo`, `password`) VALUES
(1, 'Jules', '$2y$10$HT1K1b9lEmrxeGBonbyzxu5Gl4CMUnD3N3SVdQI4.we2k/WtaMYM6');
COMMIT;
