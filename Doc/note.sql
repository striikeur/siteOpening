-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  lun. 23 nov. 2020 à 18:02
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
-- Structure de la table `note`
--

CREATE TABLE `note` (
  `id` int(11) NOT NULL,
  `noteVideo` float NOT NULL DEFAULT '-1',
  `noteMusique` float NOT NULL DEFAULT '-1',
  `noteTotale` float NOT NULL DEFAULT '-1',
  `idUser` int(11) NOT NULL,
  `idAnime` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `note`
--

INSERT INTO `note` (`id`, `noteVideo`, `noteMusique`, `noteTotale`, `idUser`, `idAnime`) VALUES
(61, 3, 4, 7, 1, 1),
(62, 5, 5, 10, 1, 2),
(63, 5, 5, 10, 1, 3),
(64, 5, 5, 10, 1, 4),
(65, 0, 0, 0, 1, 5),
(66, 0, 0, 0, 1, 6),
(67, 5, 5, 10, 1, 58),
(68, 0, 0, 0, 1, 59),
(69, 0, 0, 0, 1, 60),
(70, 0, 0, 0, 1, 117),
(71, 0, 0, 0, 1, 118),
(72, 0, 0, 0, 1, 119),
(73, 5, 5, 10, 1, 156),
(74, 3.7, 4.2, 7.9, 14, 1),
(75, 4.3, 3.8, 8.1, 14, 2),
(76, 1, 2.7, 3.7, 14, 3),
(77, 3.2, 4.2, 7.4, 14, 4),
(78, 3.3, 3.8, 7.1, 14, 5),
(79, 5, 3, 8, 14, 6),
(80, 1, 1, 2, 13, 1),
(81, 1, 3, 4, 13, 2),
(82, 0, 0, 0, 13, 3),
(83, 3, 3.2, 6.2, 14, 7),
(84, 2, 4.5, 6.5, 14, 8),
(85, 2, 3.5, 5.5, 14, 9),
(86, 0, 0, 0, 13, 4),
(87, 0, 0, 0, 13, 5),
(88, 0, 0, 0, 13, 6),
(89, 0, 0, 0, 13, 55),
(90, 0, 0, 0, 13, 56),
(91, 0, 0, 0, 13, 57),
(92, 0, 0, 0, 13, 25),
(93, 0, 0, 0, 13, 26),
(94, 0, 0, 0, 13, 27),
(95, 0, 0, 0, 13, 13),
(96, 0, 0, 0, 13, 14),
(97, 0, 0, 0, 13, 15),
(98, 0, 0, 0, 13, 28),
(99, 0, 0, 0, 13, 29),
(100, 0, 0, 0, 13, 30),
(101, 0, 0, 0, 13, 58),
(102, 0, 0, 0, 13, 59),
(103, 0, 0, 0, 13, 60),
(104, 0, 0, 0, 13, 95),
(105, 0, 0, 0, 13, 96),
(106, 0, 0, 0, 13, 97),
(107, 0, 0, 0, 13, 117),
(108, 0, 0, 0, 13, 118),
(109, 0, 0, 0, 13, 119),
(110, 0, 0, 0, 13, 116),
(111, 5, 4, 9, 14, 10),
(112, 5, 3.5, 8.5, 14, 11),
(113, 2, 2, 4, 14, 12),
(114, 2, 3, 5, 21, 1),
(115, 3, 4, 7, 21, 2),
(116, 3, 3, 6, 21, 3),
(117, 5, 5, 10, 20, 1),
(118, 4.8, 5, 9.8, 20, 2),
(119, 3.8, 5, 8.8, 20, 3),
(120, 4, 5, 9, 14, 13),
(121, 4, 4.2, 8.2, 14, 14),
(122, 4.6, 5, 9.6, 14, 15),
(123, 4, 3, 7, 22, 1),
(124, 5, 5, 10, 22, 2),
(125, 3, 3, 6, 22, 3),
(126, 3.75, 3.75, 7.5, 21, 10),
(127, 4, 4.5, 8.5, 21, 11),
(128, 4, 3.5, 7.5, 21, 12),
(129, 2, 3, 5, 21, 4),
(130, 3, 3, 6, 21, 5),
(131, 3.5, 4, 7.5, 21, 6),
(132, 3.5, 2.8, 6.3, 20, 4),
(133, 2, 2.5, 4.5, 20, 5),
(134, 4, 4, 8, 20, 6),
(135, 0, 0, 0, 22, 34),
(136, 0, 0, 0, 22, 35),
(137, 0, 0, 0, 22, 36),
(138, 0, 0, 0, 22, 4),
(139, 0, 0, 0, 22, 5),
(140, 0, 0, 0, 22, 6),
(141, 4.6, 3.7, 8.3, 20, 7),
(142, 1, 2, 3, 20, 8),
(143, 1, 2, 3, 20, 9),
(144, 4, 3, 7, 21, 7),
(145, 1.5, 2.5, 4, 21, 8),
(146, 1, 2, 3, 21, 9),
(147, 3, 3, 6, 20, 10),
(148, 2.2, 4, 6.2, 20, 11),
(149, 4, 4, 8, 20, 12),
(150, 3, 3, 6, 4, 1),
(151, 3, 2.5, 5.5, 4, 2),
(152, 0, 0, 0, 4, 3),
(153, 3.5, 1.5, 5, 4, 4),
(154, 3.5, 1, 4.5, 4, 5),
(155, 4, 2, 6, 4, 6),
(156, 4.5, 2.5, 7, 4, 7),
(157, 3, 1, 4, 4, 8),
(158, 3, 1, 4, 4, 9),
(159, 5, 3.5, 8.5, 4, 10),
(160, 5, 4, 9, 4, 11),
(161, 4, 4, 8, 4, 12),
(162, 0, 0, 0, 2, 1),
(163, 0, 0, 0, 2, 2),
(164, 0, 0, 0, 2, 3),
(165, 3, 2.5, 5.5, 4, 13),
(166, 4, 2, 6, 4, 14),
(167, 4, 4, 8, 4, 15),
(168, 0, 0, 0, 2, 58),
(169, 0, 0, 0, 2, 59),
(170, 0, 0, 0, 2, 60),
(171, 0, 0, 0, 2, 95),
(172, 0, 0, 0, 2, 96),
(173, 0, 0, 0, 2, 97),
(174, 5, 5, 10, 2, 117),
(175, 0, 0, 0, 2, 118),
(176, 0, 0, 0, 2, 119),
(177, 0, 0, 0, 2, 120),
(178, 0, 0, 0, 2, 121),
(179, 0, 0, 0, 2, 122),
(180, 0, 0, 0, 2, 123),
(181, 0, 0, 0, 2, 124),
(182, 0, 0, 0, 2, 125),
(183, 0, 0, 0, 2, 126),
(184, 0, 0, 0, 2, 127),
(185, 0, 0, 0, 2, 128),
(186, 0, 0, 0, 2, 129),
(187, 5, 5, 10, 2, 130),
(188, 0, 0, 0, 2, 131),
(189, 0, 0, 0, 2, 132),
(190, 0, 0, 0, 2, 133),
(191, 5, 5, 10, 2, 134),
(192, 0, 0, 0, 2, 135),
(193, 0, 0, 0, 2, 136),
(194, 0, 0, 0, 2, 137),
(195, 0, 0, 0, 2, 138),
(196, 0, 0, 0, 2, 139),
(197, 0, 0, 0, 2, 140),
(198, 0, 0, 0, 2, 141),
(199, 0, 0, 0, 2, 142),
(200, 0, 0, 0, 2, 143),
(201, 5, 5, 10, 2, 144),
(202, 4, 5, 9, 2, 145),
(203, 0, 0, 0, 2, 146),
(204, 0, 0, 0, 2, 147),
(205, 0, 0, 0, 2, 148),
(206, 0, 0, 0, 2, 149),
(207, 0, 0, 0, 2, 150),
(208, 0, 0, 0, 2, 151),
(209, 0, 0, 0, 2, 152),
(210, 5, 5, 10, 2, 153),
(211, 0, 0, 0, 2, 154),
(212, 0, 0, 0, 2, 155),
(213, 2.8, 2, 4.8, 20, 13),
(214, 3.6, 3.6, 7.2, 20, 14),
(215, 2, 3, 5, 20, 15),
(216, 3, 3, 6, 21, 13),
(217, 3.5, 3.5, 7, 21, 14),
(218, 2.5, 2.5, 5, 21, 15),
(219, 5, 5, 10, 4, 58),
(220, 3, 4, 7, 4, 59),
(221, 0, 0, 0, 4, 60),
(222, 3, 3, 6, 12, 1),
(223, 3.5, 3, 6.5, 12, 2),
(224, 3, 3, 6, 12, 3),
(225, 4.5, 4, 8.5, 2, 156),
(226, 2.5, 2.5, 5, 20, 16),
(227, 1, 1.2, 2.2, 20, 17),
(228, 2.5, 2.5, 5, 20, 18),
(229, 3, 2, 5, 21, 16),
(230, 2, 3.5, 5.5, 21, 17),
(231, 2.5, 2.5, 5, 21, 18),
(232, 0, 0, 0, 5, 1),
(233, 3, 5, 8, 11, 1),
(234, 5, 5, 10, 5, 2),
(235, 4.5, 5, 9.5, 11, 2),
(236, 0, 5, 5, 5, 3),
(237, 3.5, 3, 6.5, 11, 3),
(238, 2, 1.3, 3.3, 14, 16),
(239, 3, 2.6, 5.6, 14, 17),
(240, 4, 3.5, 7.5, 14, 18),
(241, 2.25, 2, 4.25, 12, 4),
(242, 3, 3.5, 6.5, 12, 5),
(243, 3.5, 3.5, 7, 12, 6),
(244, 5, 5, 10, 5, 10),
(245, 5, 5, 10, 5, 11),
(246, 5, 5, 10, 5, 12),
(247, 3, 3.5, 6.5, 21, 19),
(248, 3.5, 3, 6.5, 21, 20),
(249, 2, 1.5, 3.5, 21, 21),
(250, 3.2, 3.8, 7, 20, 19),
(251, 2.2, 2.5, 4.7, 20, 20),
(252, 1.7, 0.8, 2.5, 20, 21),
(253, 2, 2.5, 4.5, 14, 19),
(254, 2, 3.4, 5.4, 14, 20),
(255, 3, 0.2, 3.2, 14, 21),
(256, 4.5, 4.5, 9, 11, 4),
(257, 4, 3.5, 7.5, 11, 5),
(258, 3, 3.5, 6.5, 11, 6),
(259, 0, 0, 0, 5, 58),
(260, 0, 0, 0, 5, 59),
(261, 0, 0, 0, 5, 60),
(262, 0, 0, 0, 5, 117),
(263, 0, 0, 0, 5, 118),
(264, 0, 0, 0, 5, 119),
(265, 0, 0, 0, 5, 18),
(266, 0, 0, 0, 5, 23),
(267, 0, 0, 0, 5, 139),
(268, 1, 1.5, 2.5, 21, 25),
(269, 1.5, 3.5, 5, 21, 26),
(270, 2.5, 3.5, 6, 21, 27),
(271, 3.5, 4, 7.5, 10, 1),
(272, 3.5, 3.5, 7, 10, 2),
(273, 3, 3.5, 6.5, 10, 3),
(274, 0, 0, 0, 1, 22),
(275, 0, 0, 0, 1, 23),
(276, 0, 0, 0, 1, 24),
(277, 1, 3.7, 4.7, 20, 22),
(278, 2.6, 2, 4.6, 20, 23),
(279, 0, 0, 0, 20, 24),
(280, 2, 3.9, 5.9, 14, 22),
(281, 4, 5, 9, 14, 23),
(282, 1.2, 2.1, 3.3, 14, 24),
(283, 0, 0, 0, 4, 16),
(284, 0, 0, 0, 4, 17),
(285, 0, 0, 0, 4, 18),
(286, 0, 0, 0, 4, 19),
(287, 4, 3.5, 7.5, 4, 20),
(288, 2.5, 1, 3.5, 4, 21),
(289, 0, 0, 0, 4, 22),
(290, 0, 0, 0, 4, 23),
(291, 0, 0, 0, 4, 24),
(292, 2, 2, 4, 4, 25),
(293, 0, 0, 0, 4, 26),
(294, 0, 0, 0, 4, 27),
(295, 5, 5, 10, 1, 10),
(296, 0, 0, 0, 1, 13),
(297, 0, 0, 0, 1, 14),
(298, 0, 0, 0, 1, 15),
(299, 0, 0, 0, 1, 16),
(300, 0, 0, 0, 1, 18),
(301, 5, 5, 10, 1, 19),
(302, 0, 0, 0, 1, 25),
(303, 0, 0, 0, 5, 4),
(304, 0, 0, 0, 5, 5),
(305, 0, 0, 0, 5, 6),
(306, 0, 0, 0, 5, 7),
(307, 0, 0, 0, 5, 8),
(308, 0, 0, 0, 5, 9),
(309, 3.5, 1, 4.5, 4, 28),
(310, 0, 0, 0, 4, 29),
(311, 3.5, 2, 5.5, 4, 30),
(312, 0, 0, 0, 4, 31),
(313, 0, 0, 0, 4, 32),
(314, 0, 0, 0, 4, 33),
(315, 0, 0, 0, 4, 34),
(316, 0, 0, 0, 4, 35),
(317, 0, 0, 0, 4, 36),
(318, 0, 0, 0, 5, 81),
(319, 0, 0, 0, 5, 140),
(320, 1, 3, 4, 21, 22),
(321, 2.5, 2.5, 5, 21, 23),
(322, 0, 0, 0, 21, 24),
(323, 4, 4, 8, 4, 40),
(324, 5, 4.5, 9.5, 4, 41),
(325, 4.5, 3, 7.5, 4, 42),
(326, 4, 3, 7, 4, 43),
(327, 2.5, 2, 4.5, 4, 44),
(328, 0, 0, 0, 4, 45),
(329, 0, 0, 0, 4, 46),
(330, 0, 0, 0, 4, 47),
(331, 0, 0, 0, 4, 48),
(332, 0, 0, 0, 4, 49),
(333, 0, 0, 0, 4, 50),
(334, 0, 0, 0, 4, 51),
(335, 0, 0, 0, 4, 52),
(336, 0.5, 0.5, 1, 4, 53),
(337, 5, 5, 10, 4, 54),
(338, 3, 3.7, 6.7, 14, 25),
(339, 4.3, 5, 9.3, 14, 26),
(340, 3.4, 3.4, 6.8, 14, 27),
(341, 0, 0, 0, 1, 37),
(342, 0, 0, 0, 1, 38),
(343, 0, 0, 0, 1, 39),
(344, 4.5, 4, 8.5, 11, 7),
(345, 2, 3.5, 5.5, 11, 8),
(346, 3, 3, 6, 11, 9),
(347, 5, 4.5, 9.5, 11, 10),
(348, 3, 5, 8, 11, 11),
(349, 4.5, 4.5, 9, 11, 12),
(350, 5, 5, 10, 11, 13),
(351, 5, 5, 10, 11, 14),
(352, 5, 5, 10, 11, 15),
(353, 0, 0, 0, 11, 16),
(354, 0, 0, 0, 11, 17),
(355, 0, 0, 0, 11, 18),
(356, 0, 0, 0, 11, 19),
(357, 0, 0, 0, 11, 20),
(358, 0, 0, 0, 11, 21),
(359, 0, 0, 0, 11, 22),
(360, 0, 0, 0, 11, 23),
(361, 0, 0, 0, 11, 24),
(362, 0, 0, 0, 11, 25),
(363, 0, 0, 0, 11, 26),
(364, 0, 0, 0, 11, 27),
(365, 5, 5, 10, 11, 28),
(366, 4, 5, 9, 11, 29),
(367, 0, 0, 0, 11, 30),
(368, 5, 5, 10, 11, 117),
(369, 0, 0, 0, 11, 118),
(370, 0, 0, 0, 11, 119),
(371, 0, 0, 0, 11, 95),
(372, 0, 0, 0, 11, 96),
(373, 0, 0, 0, 11, 97),
(374, 0, 0, 0, 4, 37),
(375, 0, 0, 0, 4, 38),
(376, 3, 4, 7, 4, 39),
(377, 4, 4.3, 8.3, 14, 28),
(378, 4, 4.3, 8.3, 14, 29),
(379, 2, 1, 3, 14, 30),
(380, 3.5, 5, 8.5, 4, 55),
(381, 0, 0, 0, 4, 56),
(382, 0, 0, 0, 4, 57),
(383, 0, 0, 0, 26, 1),
(384, 0, 0, 0, 26, 2),
(385, 0, 0, 0, 26, 3),
(386, 0, 0, 0, 26, 55),
(387, 0, 0, 0, 26, 56),
(388, 0, 0, 0, 26, 57),
(389, 0, 0, 0, 26, 4),
(390, 3.5, 3.5, 7, 26, 5),
(391, 0, 0, 0, 26, 6),
(392, 5, 5, 10, 14, 31),
(393, 2, 1.1, 3.1, 14, 32),
(394, 1.6, 2, 3.6, 14, 33),
(395, 0, 0, 0, 26, 7),
(396, 0, 0, 0, 26, 8),
(397, 0, 0, 0, 26, 9),
(398, 0, 0, 0, 26, 10),
(399, 0, 0, 0, 26, 11),
(400, 0, 0, 0, 26, 12),
(401, 0, 0, 0, 26, 117),
(402, 0, 0, 0, 26, 118),
(403, 0, 0, 0, 26, 119),
(404, 0, 0, 0, 26, 58),
(405, 0, 0, 0, 26, 59),
(406, 0, 0, 0, 26, 60),
(407, 0, 0, 0, 26, 95),
(408, 1.5, 4.5, 6, 26, 96),
(409, 0, 0, 0, 26, 97),
(410, 3, 3, 6, 14, 34),
(411, 2, 4, 6, 14, 35),
(412, 0.2, 3, 3.2, 14, 36),
(413, 5, 5, 10, 14, 58),
(414, 1.2, 2.3, 3.5, 14, 59),
(415, 3.6, 4, 7.6, 14, 60),
(416, 0, 0, 0, 26, 52),
(417, 0, 0, 0, 26, 53),
(418, 0, 0, 0, 26, 54),
(419, 1, 1.6, 2.6, 14, 55),
(420, 3.6, 3, 6.6, 14, 56),
(421, 4, 3, 7, 14, 57),
(422, 0, 0, 0, 26, 49),
(423, 0, 0, 0, 26, 50),
(424, 0, 0, 0, 26, 51),
(425, 1.4, 2, 3.4, 14, 37),
(426, 0.2, 0.2, 0.4, 14, 38),
(427, 1.3, 2, 3.3, 14, 39),
(428, 0, 0, 0, 4, 61),
(429, 0, 0, 0, 4, 62),
(430, 0, 0, 0, 4, 63),
(431, 4, 3.6, 7.6, 14, 40),
(432, 4.2, 5, 9.2, 14, 41),
(433, 2, 1, 3, 14, 42),
(434, 5, 5, 10, 4, 117),
(435, 0, 0, 0, 4, 118),
(436, 0, 0, 0, 4, 119),
(437, 0, 0, 0, 4, 120),
(438, 0, 0, 0, 4, 121),
(439, 0, 0, 0, 4, 122),
(440, 0, 0, 0, 4, 156),
(441, 5, 5, 10, 4, 153),
(442, 0, 0, 0, 4, 154),
(443, 0, 0, 0, 4, 155),
(444, 4.2, 1, 5.2, 14, 43),
(445, 2, 0.3, 2.3, 14, 44),
(446, 0.2, 0.3, 0.5, 14, 45),
(447, 0, 0, 0, 1, 28),
(448, 5, 5, 10, 1, 29),
(449, 0, 0, 0, 1, 30),
(450, 5, 4.5, 9.5, 4, 64),
(451, 3, 3, 6, 4, 65),
(452, 5, 5, 10, 4, 66),
(453, 0, 0, 0, 4, 67),
(454, 0, 0, 0, 4, 68),
(455, 5, 3.5, 8.5, 4, 69),
(456, 0, 0, 0, 4, 70),
(457, 3.5, 3.5, 7, 4, 71),
(458, 4.75, 5, 9.75, 4, 72),
(459, 0, 0, 0, 4, 73),
(460, 0, 0, 0, 4, 74),
(461, 0, 0, 0, 4, 75),
(462, 0, 0, 0, 4, 76),
(463, 0, 0, 0, 4, 77),
(464, 0, 0, 0, 4, 78),
(465, 0, 0, 0, 4, 79),
(466, 0, 0, 0, 4, 80),
(467, 0, 0, 0, 4, 81),
(468, 0, 0, 0, 4, 82),
(469, 0, 0, 0, 4, 83),
(470, 0, 0, 0, 4, 84),
(471, 0, 0, 0, 4, 85),
(472, 0, 0, 0, 4, 86),
(473, 0, 0, 0, 4, 87),
(474, 0, 0, 0, 4, 88),
(475, 0, 0, 0, 4, 89),
(476, 5, 3.5, 8.5, 4, 90),
(477, 0, 0, 0, 4, 91),
(478, 0, 0, 0, 4, 92),
(479, 0, 0, 0, 4, 93),
(480, 0, 0, 0, 4, 94),
(481, 3, 1, 4, 14, 46),
(482, 0, 1, 1, 14, 47),
(483, 2, 2, 4, 14, 48),
(484, 3, 3.4, 6.4, 14, 49),
(485, 4.6, 5, 9.6, 14, 50),
(486, 1.3, 1, 2.3, 14, 51),
(487, 0, 0, 0, 4, 95),
(488, 5, 4.5, 9.5, 4, 96),
(489, 0, 0, 0, 4, 97),
(490, 0, 0, 0, 4, 98),
(491, 0, 0, 0, 4, 99),
(492, 0, 0, 0, 4, 100),
(493, 0, 0, 0, 4, 101),
(494, 0, 0, 0, 4, 102),
(495, 0, 0, 0, 4, 103),
(496, 5, 4, 9, 4, 104),
(497, 0, 0, 0, 4, 105),
(498, 0, 0, 0, 4, 106),
(499, 3, 4, 7, 9, 1),
(500, 3, 4, 7, 9, 2),
(501, 2, 2, 4, 9, 3),
(502, 2.6, 2.7, 5.3, 14, 52),
(503, 1.2, 1.1, 2.3, 14, 53),
(504, 3, 4.8, 7.8, 14, 54),
(505, 3.5, 3.75, 7.25, 12, 7),
(506, 2, 2, 4, 12, 8),
(507, 2, 2.25, 4.25, 12, 9),
(508, 3, 5, 8, 23, 1),
(509, 2.5, 4.5, 7, 23, 2),
(510, 1, 5, 6, 23, 3),
(511, 0, 0, 0, 23, 58),
(512, 0, 0, 0, 23, 59),
(513, 0, 0, 0, 23, 60),
(514, 3, 3, 6, 23, 4),
(515, 2.5, 4.5, 7, 23, 5),
(516, 3.5, 5, 8.5, 23, 6),
(517, 0.3, 0.5, 0.8, 20, 25),
(518, 1.8, 5, 6.8, 20, 26),
(519, 3, 4, 7, 20, 27),
(520, 3, 2, 5, 14, 61),
(521, 3.2, 3.8, 7, 14, 62),
(522, 5, 4.2, 9.2, 14, 63),
(523, 3, 5, 8, 23, 7),
(524, 1.5, 2.5, 4, 23, 8),
(525, 2, 2.5, 4.5, 23, 9),
(526, 0, 0, 0, 4, 107),
(527, 0, 0, 0, 4, 108),
(528, 0, 0, 0, 4, 109),
(529, 1, 1, 2, 21, 28),
(530, 1.5, 1.5, 3, 21, 29),
(531, 2.5, 2.5, 5, 21, 30),
(532, 1, 1, 2, 20, 28),
(533, 1, 1, 2, 20, 29),
(534, 2, 2, 4, 20, 30),
(535, 0, 0, 0, 4, 110),
(536, 0, 0, 0, 4, 111),
(537, 0, 0, 0, 4, 112),
(538, 0, 0, 0, 4, 113),
(539, 0, 0, 0, 4, 114),
(540, 0, 0, 0, 4, 115),
(541, 3.5, 5, 8.5, 23, 10),
(542, 2.5, 5, 7.5, 23, 11),
(543, 3.5, 5, 8.5, 23, 12),
(544, 0, 0, 0, 9, 4),
(545, 0, 0, 0, 9, 5),
(546, 0, 0, 0, 9, 6),
(547, 5, 5, 10, 1, 95),
(548, 0, 0, 0, 1, 96),
(549, 0, 0, 0, 1, 97),
(550, 0, 0, 0, 1, 120),
(551, 5, 5, 10, 1, 121),
(552, 0, 0, 0, 1, 122),
(553, 0, 0, 0, 1, 114),
(554, 0, 2, 2, 20, 31),
(555, 1.3, 1, 2.3, 20, 32),
(556, 0.7, 0.7, 1.4, 20, 33),
(557, 0, 2, 2, 21, 31),
(558, 1, 1.5, 2.5, 21, 32),
(559, 1, 2.5, 3.5, 21, 33),
(560, 3.5, 5, 8.5, 23, 13),
(561, 3.5, 5, 8.5, 23, 14),
(562, 3, 4.5, 7.5, 23, 15),
(563, 0, 0, 0, 4, 116),
(564, 2.4, 1.9, 4.3, 20, 34),
(565, 1.7, 2.4, 4.1, 20, 35),
(566, 1, 2.1, 3.1, 20, 36),
(567, 2, 1.5, 3.5, 21, 34),
(568, 2.5, 2.5, 5, 21, 35),
(569, 1.5, 3, 4.5, 21, 36),
(570, 0, 0, 0, 4, 123),
(571, 0, 0, 0, 4, 124),
(572, 0, 0, 0, 4, 125),
(573, 0, 0, 0, 4, 126),
(574, 0, 0, 0, 4, 127),
(575, 0, 0, 0, 4, 128),
(576, 0, 0, 0, 4, 129),
(577, 0, 0, 0, 4, 130),
(578, 0, 0, 0, 4, 131),
(579, 0, 0, 0, 23, 16),
(580, 0, 0, 0, 23, 17),
(581, 0, 0, 0, 23, 18),
(582, 0, 0, 0, 23, 95),
(583, 0, 0, 0, 23, 96),
(584, 0, 0, 0, 23, 97),
(585, 0, 0, 0, 23, 117),
(586, 0, 0, 0, 23, 118),
(587, 0, 0, 0, 23, 119),
(588, 0.5, 0.5, 1, 21, 37),
(589, 1, 1, 2, 21, 38),
(590, 2, 3.5, 5.5, 21, 39),
(591, 0.3, 0.3, 0.6, 20, 37),
(592, 0.3, 1, 1.3, 20, 38),
(593, 3.2, 2.5, 5.7, 20, 39),
(594, 3.7, 3.8, 7.5, 20, 40),
(595, 4, 5, 9, 20, 41),
(596, 3.2, 3.8, 7, 20, 42),
(597, 3.75, 3.75, 7.5, 21, 40),
(598, 2.5, 3, 5.5, 21, 41),
(599, 1.5, 3, 4.5, 21, 42),
(600, 4, 3.5, 7.5, 21, 43),
(601, 2.5, 2.5, 5, 21, 44),
(602, 0, 2, 2, 21, 45),
(603, 2.5, 3, 5.5, 21, 46),
(604, 0, 0, 0, 21, 47),
(605, 3, 4, 7, 21, 48),
(606, 0, 0, 0, 28, 1),
(607, 0, 0, 0, 28, 2),
(608, 0, 0, 0, 28, 3),
(609, 0, 0, 0, 28, 4),
(610, 0, 0, 0, 28, 5),
(611, 0, 0, 0, 28, 6),
(612, 3.6, 3.4, 7, 20, 43),
(613, 3.8, 3.1, 6.9, 20, 44),
(614, 0.7, 2.8, 3.5, 20, 45),
(615, 0, 0, 0, 28, 117),
(616, 0, 0, 0, 28, 118),
(617, 0, 0, 0, 28, 119),
(618, 0, 0, 0, 28, 120),
(619, 0, 0, 0, 28, 121),
(620, 0, 0, 0, 28, 122),
(621, 0, 0, 0, 28, 156),
(622, 5, 3, 8, 14, 64),
(623, 3.9, 4.8, 8.7, 14, 65),
(624, 4.3, 3.6, 7.9, 14, 66),
(625, 0, 0, 0, 28, 95),
(626, 0, 0, 0, 28, 96),
(627, 0, 0, 0, 28, 97),
(628, 0, 0, 0, 28, 116),
(629, 0, 0, 0, 28, 58),
(630, 0, 0, 0, 28, 59),
(631, 0, 0, 0, 28, 60),
(632, 0, 0, 0, 28, 94),
(633, 0, 0, 0, 28, 55),
(634, 0, 0, 0, 28, 56),
(635, 0, 0, 0, 28, 57),
(636, 3, 4, 7, 14, 67),
(637, 0.2, 0.3, 0.5, 14, 68),
(638, 4.2, 3.6, 7.8, 14, 69),
(639, 5, 5, 10, 14, 70),
(640, 3, 3, 6, 14, 71),
(641, 3, 3.4, 6.4, 14, 72),
(642, 3.4, 3.5, 6.9, 20, 46),
(643, 0, 0, 0, 20, 47),
(644, 2.8, 2.3, 5.1, 20, 48),
(645, 0, 0, 0, 1, 46),
(646, 0, 0, 0, 1, 47),
(647, 0, 0, 0, 1, 48),
(648, 1.3, 2, 3.3, 14, 73),
(649, 3, 3.4, 6.4, 14, 74),
(650, 2, 3.6, 5.6, 14, 75),
(651, 4.3, 4.5, 8.8, 14, 76),
(652, 3.7, 3.5, 7.2, 14, 77),
(653, 2, 2.4, 4.4, 14, 78),
(654, 2.7, 2.4, 5.1, 20, 49),
(655, 2.7, 3.7, 6.4, 20, 50),
(656, 0, 0, 0, 20, 51),
(657, 2.5, 3, 5.5, 21, 49),
(658, 2.5, 4, 6.5, 21, 50),
(659, 0, 2, 2, 21, 51),
(660, 0, 0, 0, 1, 26),
(661, 0, 0, 0, 1, 27),
(662, 3.1, 3, 6.1, 20, 52),
(663, 0, 1.5, 1.5, 20, 53),
(664, 0.2, 1.4, 1.6, 20, 54),
(665, 4, 4, 8, 21, 52),
(666, 0.5, 2, 2.5, 21, 53),
(667, 0, 1.5, 1.5, 21, 54),
(668, 1, 0, 1, 20, 55),
(669, 1.2, 1, 2.2, 20, 56),
(670, 3.2, 2, 5.2, 20, 57),
(671, 1, 1, 2, 21, 55),
(672, 3.5, 3.5, 7, 21, 56),
(673, 3, 3, 6, 21, 57),
(674, 3, 0.6, 3.6, 14, 79),
(675, 1, 2.2, 3.2, 14, 80),
(676, 1, 2.5, 3.5, 14, 81),
(677, 1, 2.1, 3.1, 14, 82),
(678, 1.3, 1, 2.3, 14, 83),
(679, 0, 2.5, 2.5, 14, 84),
(680, 3, 3, 6, 14, 85),
(681, 2.3, 3, 5.3, 14, 86),
(682, 3, 3.2, 6.2, 14, 87),
(683, 0, 0, 0, 21, 58),
(684, 0, 0, 0, 21, 59),
(685, 0, 0, 0, 21, 60),
(686, 0, 0, 0, 20, 58),
(687, 0, 0, 0, 20, 59),
(688, 0, 0, 0, 20, 60),
(689, 3, 1, 4, 14, 88),
(690, 5, 5, 10, 14, 89),
(691, 4, 0.2, 4.2, 14, 90),
(692, 0.2, 2, 2.2, 14, 91),
(693, 0.6, 2, 2.6, 14, 92),
(694, 3.4, 2, 5.4, 14, 93),
(695, 2, 2, 4, 14, 94),
(696, 4.3, 4, 8.3, 14, 95),
(697, 5, 2.3, 7.3, 14, 96),
(698, 2.5, 2.7, 5.2, 14, 97),
(699, 3.5, 4.5, 8, 8, 1),
(700, 5, 5, 10, 8, 2),
(701, 2, 3, 5, 8, 3),
(702, 4, 3.6, 7.6, 14, 98),
(703, 3.9, 3.5, 7.4, 14, 99),
(704, 3.8, 4.2, 8, 14, 100),
(705, 4.8, 4.6, 9.4, 14, 101),
(706, 4.5, 3.7, 8.2, 14, 102),
(707, 2.3, 2.5, 4.8, 14, 103),
(708, 4, 5, 9, 8, 4),
(709, 2, 2, 4, 8, 5),
(710, 3, 3, 6, 8, 6),
(711, 4.4, 4.6, 9, 14, 104),
(712, 1.6, 3, 4.6, 14, 105),
(713, 0.1, 2, 2.1, 14, 106),
(714, 4.25, 4, 8.25, 12, 10),
(715, 2.5, 2.75, 5.25, 12, 11),
(716, 2.75, 3.25, 6, 12, 12),
(717, 0, 0, 0, 8, 7),
(718, 0, 0, 0, 8, 8),
(719, 0, 0, 0, 8, 9),
(720, 1, 1.9, 2.9, 14, 107),
(721, 4.2, 3, 7.2, 14, 108),
(722, 0.2, 0.4, 0.6, 14, 109),
(723, 1, 0.3, 1.3, 14, 110),
(724, 3.3, 2.4, 5.7, 14, 111),
(725, 1.3, 2.6, 3.9, 14, 112),
(726, 3.3, 2.6, 5.9, 14, 113),
(727, 4.7, 4.4, 9.1, 14, 114),
(728, 3, 0.2, 3.2, 14, 115),
(729, 3.3, 0.3, 3.6, 14, 116),
(730, 5, 5, 10, 14, 117),
(731, 3, 2.8, 5.8, 14, 118),
(732, 4.3, 4, 8.3, 14, 119),
(733, 3, 3.5, 6.5, 10, 4),
(734, 0, 0, 0, 10, 5),
(735, 0, 0, 0, 10, 6),
(736, 0, 0, 0, 1, 34),
(737, 0, 0, 0, 1, 35),
(738, 0, 0, 0, 1, 36),
(739, 0, 0, 0, 1, 40),
(740, 0, 0, 0, 1, 41),
(741, 0, 0, 0, 1, 42),
(742, 0, 0, 0, 1, 43),
(743, 0, 0, 0, 1, 44),
(744, 0, 0, 0, 1, 45),
(745, 0, 0, 0, 1, 49),
(746, 0, 0, 0, 1, 50),
(747, 0, 0, 0, 1, 51),
(748, 0, 0, 0, 1, 52),
(749, 0, 0, 0, 1, 53),
(750, 0, 0, 0, 1, 54),
(751, 0, 0, 0, 1, 55),
(752, 0, 0, 0, 1, 56),
(753, 0, 0, 0, 1, 57),
(754, 0, 0, 0, 1, 31),
(755, 0, 0, 0, 1, 32),
(756, 0, 0, 0, 1, 33),
(757, 0, 0, 0, 1, 153),
(758, 0, 0, 0, 1, 154),
(759, 0, 0, 0, 1, 155),
(760, 0, 0, 0, 1, 150),
(761, 0, 0, 0, 1, 151),
(762, 0, 0, 0, 1, 152),
(763, 0, 0, 0, 1, 147),
(764, 0, 0, 0, 1, 148),
(765, 0, 0, 0, 1, 149),
(766, 0, 0, 0, 1, 144),
(767, 0, 0, 0, 1, 145),
(768, 0, 0, 0, 1, 146),
(769, 0, 0, 0, 1, 141),
(770, 0, 5, 5, 1, 142),
(771, 0, 0, 0, 1, 143),
(772, 0, 0, 0, 1, 138),
(773, 0, 0, 0, 1, 139),
(774, 5, 5, 10, 1, 140),
(775, 5, 5, 10, 1, 135),
(776, 0, 0, 0, 1, 136),
(777, 0, 5, 5, 1, 137),
(778, 0, 0, 0, 1, 132),
(779, 0, 0, 0, 1, 133),
(780, 0, 0, 0, 1, 134),
(781, 0, 0, 0, 1, 129),
(782, 0, 0, 0, 1, 130),
(783, 5, 5, 10, 1, 131),
(784, 0, 0, 0, 1, 126),
(785, 0, 0, 0, 1, 127),
(786, 0, 0, 0, 1, 128),
(787, 0, 0, 0, 1, 123),
(788, 0, 0, 0, 1, 124),
(789, 0, 0, 0, 1, 125),
(790, 0.5, 5, 5.5, 1, 98),
(791, 0, 0, 0, 1, 99),
(792, 0, 0, 0, 1, 100),
(793, 0, 0, 0, 1, 101),
(794, 0, 0, 0, 1, 102),
(795, 0, 0, 0, 1, 103),
(796, 0, 0, 0, 1, 104),
(797, 0, 0, 0, 1, 105),
(798, 0, 0, 0, 1, 106),
(799, 0, 5, 5, 1, 107),
(800, 0, 0, 0, 1, 108),
(801, 0, 0, 0, 1, 109),
(802, 0, 0, 0, 1, 110),
(803, 0, 0, 0, 1, 111),
(804, 0, 0, 0, 1, 112),
(805, 0, 0, 0, 1, 113),
(806, 0, 0, 0, 1, 115),
(807, 0, 0, 0, 1, 116),
(808, 0, 0, 0, 1, 61),
(809, 5, 5, 10, 1, 62),
(810, 5, 5, 10, 1, 63),
(811, 0, 0, 0, 1, 64),
(812, 0, 0, 0, 1, 65),
(813, 0, 0, 0, 1, 66),
(814, 0, 0, 0, 1, 67),
(815, 0, 0, 0, 1, 68),
(816, 0, 0, 0, 1, 69),
(817, 0, 0, 0, 1, 70),
(818, 0, 0, 0, 1, 71),
(819, 0, 0, 0, 1, 72),
(820, 0, 0, 0, 1, 73),
(821, 0, 0, 0, 1, 74),
(822, 0, 0, 0, 1, 75),
(823, 5, 5, 10, 1, 76),
(824, 0, 0, 0, 1, 77),
(825, 0, 0, 0, 1, 78),
(826, 0, 0, 0, 1, 79),
(827, 0, 0, 0, 1, 80),
(828, 0, 0, 0, 1, 81),
(829, 0, 0, 0, 1, 82),
(830, 0, 0, 0, 1, 83),
(831, 0, 0, 0, 1, 84),
(832, 0, 0, 0, 1, 85),
(833, 0, 0, 0, 1, 86),
(834, 0, 0, 0, 1, 87),
(835, 0, 0, 0, 1, 88),
(836, 5, 5, 10, 1, 89),
(837, 0, 0, 0, 1, 90),
(838, 0, 0, 0, 1, 91),
(839, 0, 0, 0, 1, 92),
(840, 0, 0, 0, 1, 93),
(841, 0, 0, 0, 1, 94),
(842, 0, 0, 0, 1, 7),
(843, 0, 0, 0, 1, 8),
(844, 0, 0, 0, 1, 9),
(845, 0, 0, 0, 1, 11),
(846, 0, 0, 0, 1, 12),
(847, 0, 0, 0, 1, 17),
(848, 0, 0, 0, 1, 20),
(849, 0, 0, 0, 1, 21),
(850, 0, 0, 0, 4, 135),
(851, 0, 0, 0, 24, 1),
(852, 0, 0, 0, 24, 2),
(853, 0, 0, 0, 24, 3),
(854, 0, 0, 0, 24, 58),
(855, 0, 0, 0, 24, 59),
(856, 0, 0, 0, 24, 60),
(857, 0, 0, 0, 24, 95),
(858, 0, 0, 0, 24, 96),
(859, 0, 0, 0, 24, 97),
(860, 0, 0, 0, 24, 117),
(861, 0, 0, 0, 24, 118),
(862, 0, 0, 0, 24, 119),
(863, 0, 0, 0, 14, 120),
(864, 0, 0, 0, 14, 121),
(865, 0, 0, 0, 14, 122),
(866, 0, 0, 0, 14, 156);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `note`
--
ALTER TABLE `note`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `note`
--
ALTER TABLE `note`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=867;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
