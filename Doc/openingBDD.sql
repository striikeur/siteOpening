-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  sam. 21 nov. 2020 à 12:42
-- Version du serveur :  5.7.23-23-log
-- Version de PHP :  7.3.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `openingBDD`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `pseudo` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `anime`
--

CREATE TABLE `anime` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `season` varchar(255) DEFAULT NULL,
  `malLink` varchar(255) DEFAULT NULL,
  `videoLink` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `note` (
  `id` int(11) NOT NULL,
  `noteVideo` float NOT NULL DEFAULT '0',
  `noteMusique` float NOT NULL DEFAULT '0',
  `noteTotale` float NOT NULL DEFAULT '0',
  `idUser` int(11) NOT NULL,
  `idAnime` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `note`
--

INSERT INTO `note` (`id`, `noteVideo`, `noteMusique`, `noteTotale`, `idUser`, `idAnime`) VALUES
(33, 2, 3, 5, 2, 1),
(34, 4.64566, 4, 8.64566, 2, 2),
(35, 0, 0, 0, 2, 3),
(36, 0, 0, 0, 2, 35),
(37, 2.5, 2.5, 5, 4, 1),
(38, 0, 0, 0, 4, 2),
(39, 0, 0, 0, 4, 3),
(40, 0, 0, 0, 4, 35),
(41, 0, 3.75556, 3.75556, 1, 1),
(42, 0, 0, 0, 1, 2),
(43, 0, 0, 0, 1, 3),
(44, 0, 0, 0, 1, 35),
(45, 5, 5, 10, 8, 1),
(46, 0, 0, 0, 8, 2),
(47, 0, 0, 0, 8, 3),
(48, 0, 0, 0, 8, 35),
(49, 0, 0, 0, 6, 1),
(50, 0, 0, 0, 6, 2),
(51, 0, 0, 0, 6, 3),
(52, 0, 0, 0, 6, 35),
(53, 0, 0, 0, 7, 1),
(54, 0, 0, 0, 7, 2),
(55, 0, 0, 0, 7, 3),
(56, 0, 0, 0, 7, 35),
(57, 0, 0, 0, 9, 1),
(58, 0, 0, 0, 9, 2),
(59, 0, 0, 0, 9, 3),
(60, 0, 0, 0, 9, 35);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `pseudo`, `password`) VALUES
(1, 'Jules', '$2y$10$HT1K1b9lEmrxeGBonbyzxu5Gl4CMUnD3N3SVdQI4.we2k/WtaMYM6'),
(2, 'Deza', '$2y$10$RBG5AVY7R9GWaxnurSMWNuPLf8w2xExreAsXNqTTXRX.PZXQJYH0m'),
(4, 'Yin', '$2y$10$qxF9YwhU37JV/QiYF2dcneS5aT8xbr2YzyKH7LMpjR3GVC5qpkQim'),
(5, 'Kurosagi', '$2y$10$VjCkvzUijBG1bWNTx3myluniv3s5wdNv6yDlFRFc6UQ5aioLA2pQu'),
(6, 'Morohitsu', '$2y$10$WSjsqjxV6VSXlR0ufJbLO.qaMWNloBFZYP.5UTk27krOOls1xQ4VG'),
(7, 'Zeocrix', '$2y$10$Fic/Pmu7kGcSTWt/3jN51.LTIjE7drbl7G5dkbPAkC/86um9UmkK6'),
(8, 'Cami', '$2y$10$pmjjzN6MEbryAQghRimyiupz2bgvvloleDjKWGWHZvlLWRHhyxHKG'),
(9, 'InsultePlusJamaisRinaFDP', '$2y$10$Ge2DYTY2h33WJlkjIZaHb.h4tErH0kpZKKkNsjLna4UHhopAaij0y');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `anime`
--
ALTER TABLE `anime`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `note`
--
ALTER TABLE `note`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `anime`
--
ALTER TABLE `anime`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT pour la table `note`
--
ALTER TABLE `note`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
