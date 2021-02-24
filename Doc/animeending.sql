-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 23 jan. 2021 à 17:52
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
-- Base de données : `endingbdd`
--

-- --------------------------------------------------------

--
-- Structure de la table `animeending`
--

DROP TABLE IF EXISTS `animeending`;
CREATE TABLE IF NOT EXISTS `animeending` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `season` varchar(255) DEFAULT NULL,
  `malLink` varchar(255) DEFAULT NULL,
  `miniature` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `videoLink` varchar(255) DEFAULT NULL,
  `moyenne` float DEFAULT '-1',
  `nsfw` tinyint(1) DEFAULT '0',
  `spoiler` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=512 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `animeending`
--

INSERT INTO `animeending` (`id`, `name`, `season`, `malLink`, `miniature`, `videoLink`, `moyenne`, `nsfw`, `spoiler`) VALUES
(447, 'Kaguya-sama wa Kokurasetai?: Tensai-tachi no Renai Zunousen', 'Spring', 'https://myanimelist.net/anime/40591/Kaguya-sama_wa_Kokurasetai__Tensai-tachi_no_Renai_Zunousen', '../res/miniature/Spring/Kaguya-sama_wa_Kokurasetai__Tensai-tachi_no_Renai_Zunousen.jpg', '../res/ending/Spring/Kaguya-sama_wa_Kokurasetai__Tensai-tachi_no_Renai_Zunousen.mp4', -1, 0, 0),
(448, 'Kami no Tou', 'Spring', 'https://myanimelist.net/anime/40221/Kami_no_Tou', '../res/miniature/Spring/Kami_no_Tou.jpg', '../res/ending/Spring/Kami_no_Tou.mp4', -1, 0, 0),
(449, 'Gleipnir', 'Spring', 'https://myanimelist.net/anime/39463/Gleipnir', '../res/miniature/Spring/Gleipnir.jpg', '../res/ending/Spring/Gleipnir.mp4', -1, 0, 0),
(450, 'Shokugeki no Souma: Gou no Sara', 'Spring', 'https://myanimelist.net/anime/40902/Shokugeki_no_Souma__Gou_no_Sara', '../res/miniature/Spring/Shokugeki_no_Souma__Gou_no_Sara.jpg', '../res/ending/Spring/Shokugeki_no_Souma__Gou_no_Sara.mp4', -1, 0, 0),
(451, 'Otome Game no Hametsu Flag shika Nai Akuyaku Reijou ni Tensei shiteshimatta...', 'Spring', 'https://myanimelist.net/anime/38555/Otome_Game_no_Hametsu_Flag_shika_Nai_Akuyaku_Reijou_ni_Tensei_shiteshimatta', '../res/miniature/Spring/Otome_Game_no_Hametsu_Flag_shika_Nai_Akuyaku_Reijou_ni_Tensei_shiteshimatta.jpg', '../res/ending/Spring/Otome_Game_no_Hametsu_Flag_shika_Nai_Akuyaku_Reijou_ni_Tensei_shiteshimatta.mp4', -1, 0, 0),
(452, 'Yesterday wo Utatte ED 1', 'Spring', 'https://myanimelist.net/anime/39710/Yesterday_wo_Utatte', '../res/miniature/Spring/Yesterday_wo_Utatte.jpg', '../res/ending/Spring/Yesterday_wo_Utatte_ed_1.mp4', -1, 0, 0),
(453, 'Yesterday wo Utatte ED 2', 'Spring', 'https://myanimelist.net/anime/39710/Yesterday_wo_Utatte', '../res/miniature/Spring/Yesterday_wo_Utatte.jpg', '../res/ending/Spring/Yesterday_wo_Utatte_ed_2.mp4', -1, 0, 0),
(454, 'Yesterday wo Utatte ED 3', 'Spring', 'https://myanimelist.net/anime/39710/Yesterday_wo_Utatte', '../res/miniature/Spring/Yesterday_wo_Utatte.jpg', '../res/ending/Spring/Yesterday_wo_Utatte_ed_3.mp4', -1, 0, 0),
(455, 'Kakushigoto (TV)', 'Spring', 'https://myanimelist.net/anime/40716/Kakushigoto_TV', '../res/miniature/Spring/Kakushigoto_TV.jpg', '../res/ending/Spring/Kakushigoto_TV.mp4', -1, 0, 0),
(456, 'Fugou Keiji: Balance:Unlimited', 'Spring', 'https://myanimelist.net/anime/41120/Fugou_Keiji__Balance_Unlimited', '../res/miniature/Spring/Fugou_Keiji__Balance_Unlimited.jpg', '../res/ending/Spring/Fugou_Keiji__Balance_Unlimited.mp4', -1, 0, 0),
(457, 'Fruits Basket 2nd Season ED 1', 'Spring', 'https://myanimelist.net/anime/40417/Fruits_Basket_2nd_Season', '../res/miniature/Spring/Fruits_Basket_2nd_Season.jpg', '../res/ending/Spring/Fruits_Basket_2nd_Season_ed_1.mp4', -1, 0, 0),
(458, 'Fruits Basket 2nd Season ED 2 (je pense il spoil)', 'Spring', 'https://myanimelist.net/anime/40417/Fruits_Basket_2nd_Season', '../res/miniature/Spring/Fruits_Basket_2nd_Season.jpg', '../res/ending/Spring/Fruits_Basket_2nd_Season_ed_2.mp4', -1, 0, 0),
(459, 'Fruits Basket 2nd Season ED 3', 'Spring', 'https://myanimelist.net/anime/40417/Fruits_Basket_2nd_Season', '../res/miniature/Spring/Fruits_Basket_2nd_Season.jpg', '../res/ending/Spring/Fruits_Basket_2nd_Season_ed_3.mp4', -1, 0, 0),
(460, 'Princess Connect! Re:Dive ED 1', 'Spring', 'https://myanimelist.net/anime/39292/Princess_Connect_Re_Dive', '../res/miniature/Spring/Princess_Connect_Re_Dive.jpg', '../res/ending/Spring/Princess_Connect_Re_Dive_ed_1.mp4', -1, 0, 0),
(461, 'Princess Connect! Re:Dive ED 2', 'Spring', 'https://myanimelist.net/anime/39292/Princess_Connect_Re_Dive', '../res/miniature/Spring/Princess_Connect_Re_Dive.jpg', '../res/ending/Spring/Princess_Connect_Re_Dive_ed_2.mp4', -1, 0, 0),
(462, 'Hachi-nan tte, Sore wa Nai deshou!', 'Spring', 'https://myanimelist.net/anime/38830/Hachi-nan_tte_Sore_wa_Nai_deshou', '../res/miniature/Spring/Hachi-nan_tte_Sore_wa_Nai_deshou.jpg', '../res/ending/Spring/Hachi-nan_tte_Sore_wa_Nai_deshou.mp4', -1, 0, 0),
(463, 'Honzuki no Gekokujou: Shisho ni Naru Tame ni wa Shudan wo Erandeiraremasen 2nd Season', 'Spring', 'https://myanimelist.net/anime/40815/Honzuki_no_Gekokujou__Shisho_ni_Naru_Tame_ni_wa_Shudan_wo_Erandeiraremasen_2nd_Season', '../res/miniature/Spring/Honzuki_no_Gekokujou__Shisho_ni_Naru_Tame_ni_wa_Shudan_wo_Erandeiraremasen_2nd_Season.jpg', '../res/ending/Spring/Honzuki_no_Gekokujou__Shisho_ni_Naru_Tame_ni_wa_Shudan_wo_Erandeiraremasen_2nd_Season.mp4', -1, 0, 0),
(464, 'Appare-Ranman!', 'Spring', 'https://myanimelist.net/anime/40532/Appare-Ranman', '../res/miniature/Spring/Appare-Ranman.jpg', '../res/ending/Spring/Appare-Ranman.mp4', -1, 0, 0),
(465, 'Arte', 'Spring', 'https://myanimelist.net/anime/40128/Arte', '../res/miniature/Spring/Arte.jpg', '../res/ending/Spring/Arte.mp4', -1, 0, 0),
(466, 'Nami yo Kiitekure ED 1', 'Spring', 'https://myanimelist.net/anime/40513/Nami_yo_Kiitekure', '../res/miniature/Spring/Nami_yo_Kiitekure.jpg', '../res/ending/Spring/Nami_yo_Kiitekure_ed_1.mp4', -1, 0, 0),
(467, 'Nami yo Kiitekure ED 2 (ça spoil)', 'Spring', 'https://myanimelist.net/anime/40513/Nami_yo_Kiitekure', '../res/miniature/Spring/Nami_yo_Kiitekure.jpg', '../res/ending/Spring/Nami_yo_Kiitekure_ed_2.mp4', -1, 0, 0),
(468, 'Shironeko Project: Zero Chronicle ED 1', 'Spring', 'https://myanimelist.net/anime/38843/Shironeko_Project__Zero_Chronicle', '../res/miniature/Spring/Shironeko_Project__Zero_Chronicle.jpg', '../res/ending/Spring/Shironeko_Project__Zero_Chronicle_ed_1.mp4', -1, 0, 0),
(469, 'Shironeko Project: Zero Chronicle ED 2 (ça spoil)', 'Spring', 'https://myanimelist.net/anime/38843/Shironeko_Project__Zero_Chronicle', '../res/miniature/Spring/Shironeko_Project__Zero_Chronicle.jpg', '../res/ending/Spring/Shironeko_Project__Zero_Chronicle_ed_2.mp4', -1, 0, 0),
(470, 'Tsugu Tsugumomo', 'Spring', 'https://myanimelist.net/anime/39469/Tsugu_Tsugumomo', '../res/miniature/Spring/Tsugu_Tsugumomo.jpg', '../res/ending/Spring/Tsugu_Tsugumomo.mp4', -1, 0, 0),
(471, 'Listeners ED 1', 'Spring', 'https://myanimelist.net/anime/40165/Listeners', '../res/miniature/Spring/Listeners.jpg', '../res/ending/Spring/Listeners_ed_1.mp4', -1, 0, 0),
(472, 'Listeners ED 2', 'Spring', 'https://myanimelist.net/anime/40165/Listeners', '../res/miniature/Spring/Listeners.jpg', '../res/ending/Spring/Listeners_ed_2.mp4', -1, 0, 0),
(473, 'Listeners ED 3', 'Spring', 'https://myanimelist.net/anime/40165/Listeners', '../res/miniature/Spring/Listeners.jpg', '../res/ending/Spring/Listeners_ed_3.mp4', -1, 0, 0),
(474, 'Listeners ED 4', 'Spring', 'https://myanimelist.net/anime/40165/Listeners', '../res/miniature/Spring/Listeners.jpg', '../res/ending/Spring/Listeners_ed_4.mp4', -1, 0, 0),
(475, 'Listeners ED 5', 'Spring', 'https://myanimelist.net/anime/40165/Listeners', '../res/miniature/Spring/Listeners.jpg', '../res/ending/Spring/Listeners_ed_5.mp4', -1, 0, 0),
(476, 'Listeners ED 6', 'Spring', 'https://myanimelist.net/anime/40165/Listeners', '../res/miniature/Spring/Listeners.jpg', '../res/ending/Spring/Listeners_ed_6.mp4', -1, 0, 0),
(477, 'Listeners ED 7', 'Spring', 'https://myanimelist.net/anime/40165/Listeners', '../res/miniature/Spring/Listeners.jpg', '../res/ending/Spring/Listeners_ed_7.mp4', -1, 0, 0),
(478, 'Listeners ED 8', 'Spring', 'https://myanimelist.net/anime/40165/Listeners', '../res/miniature/Spring/Listeners.jpg', '../res/ending/Spring/Listeners_ed_8.mp4', -1, 0, 0),
(479, 'Listeners ED 9', 'Spring', 'https://myanimelist.net/anime/40165/Listeners', '../res/miniature/Spring/Listeners.jpg', '../res/ending/Spring/Listeners_ed_9.mp4', -1, 0, 0),
(480, 'Listeners ED 10', 'Spring', 'https://myanimelist.net/anime/40165/Listeners', '../res/miniature/Spring/Listeners.jpg', '../res/ending/Spring/Listeners_ed_10.mp4', -1, 0, 0),
(481, 'Listeners ED 11', 'Spring', 'https://myanimelist.net/anime/40165/Listeners', '../res/miniature/Spring/Listeners.jpg', '../res/ending/Spring/Listeners_ed_11.mp4', -1, 0, 0),
(482, 'Listeners ED 12', 'Spring', 'https://myanimelist.net/anime/40165/Listeners', '../res/miniature/Spring/Listeners.jpg', '../res/ending/Spring/Listeners_ed_12.mp4', -1, 0, 0),
(483, 'Houkago Teibou Nisshi', 'Spring', 'https://myanimelist.net/anime/39730/Houkago_Teibou_Nisshi', '../res/miniature/Spring/Houkago_Teibou_Nisshi.jpg', '../res/ending/Spring/Houkago_Teibou_Nisshi.mp4', -1, 0, 0),
(484, 'Kingdom 3rd Season', 'Spring', 'https://myanimelist.net/anime/40682/Kingdom_3rd_Season', '../res/miniature/Spring/Kingdom_3rd_Season.jpg', '../res/ending/Spring/Kingdom_3rd_Season.mp4', -1, 0, 0),
(485, 'Bungou to Alchemist: Shinpan no Haguruma', 'Spring', 'https://myanimelist.net/anime/40934/Bungou_to_Alchemist__Shinpan_no_Haguruma', '../res/miniature/Spring/Bungou_to_Alchemist__Shinpan_no_Haguruma.jpg', '../res/ending/Spring/Bungou_to_Alchemist__Shinpan_no_Haguruma.mp4', -1, 0, 0),
(486, 'Shachou, Battle no Jikan Desu!', 'Spring', 'https://myanimelist.net/anime/40783/Shachou_Battle_no_Jikan_Desu', '../res/miniature/Spring/Shachou_Battle_no_Jikan_Desu.jpg', '../res/ending/Spring/Shachou_Battle_no_Jikan_Desu.mp4', -1, 0, 0),
(487, 'Tamayomi', 'Spring', 'https://myanimelist.net/anime/39966/Tamayomi', '../res/miniature/Spring/Tamayomi.jpg', '../res/ending/Spring/Tamayomi.mp4', -1, 0, 0),
(488, 'IDOLiSH7: Second Beat! ED 1', 'Spring', 'https://myanimelist.net/anime/37962/IDOLiSH7__Second_Beat', '../res/miniature/Spring/IDOLiSH7__Second_Beat.jpg', '../res/ending/Spring/IDOLiSH7__Second_Beat_ed_1.mp4', -1, 0, 0),
(489, 'IDOLiSH7: Second Beat! ED 2', 'Spring', 'https://myanimelist.net/anime/37962/IDOLiSH7__Second_Beat', '../res/miniature/Spring/IDOLiSH7__Second_Beat.jpg', '../res/ending/Spring/IDOLiSH7__Second_Beat_ed_2.mp4', -1, 0, 0),
(490, 'IDOLiSH7: Second Beat! ED 3', 'Spring', 'https://myanimelist.net/anime/37962/IDOLiSH7__Second_Beat', '../res/miniature/Spring/IDOLiSH7__Second_Beat.jpg', '../res/ending/Spring/IDOLiSH7__Second_Beat_ed_3.mp4', -1, 0, 0),
(491, 'Yu-Gi-Oh!: Sevens ED 1', 'Spring', 'https://myanimelist.net/anime/40145/Yu%E2%98%86Gi%E2%98%86Oh__Sevens', '../res/miniature/Spring/Yu_Gi_Oh__Sevens', '../res/ending/Spring/Yu_Gi_Oh__Sevens_ed_1.webm', -1, 0, 0),
(492, 'Yu-Gi-Oh!: Sevens ED 2', 'Spring', 'https://myanimelist.net/anime/40145/Yu%E2%98%86Gi%E2%98%86Oh__Sevens', '../res/miniature/Spring/Yu_Gi_Oh__Sevens', '../res/ending/Spring/Yu_Gi_Oh__Sevens_ed_2.mp4', -1, 0, 0),
(493, 'Yu-Gi-Oh!: Sevens ED 3', 'Spring', 'https://myanimelist.net/anime/40145/Yu%E2%98%86Gi%E2%98%86Oh__Sevens', '../res/miniature/Spring/Yu_Gi_Oh__Sevens', '../res/ending/Spring/Yu_Gi_Oh__Sevens_ed_3.webm', -1, 0, 0),
(494, 'Yu-Gi-Oh!: Sevens ED 5', 'Spring', 'https://myanimelist.net/anime/40145/Yu%E2%98%86Gi%E2%98%86Oh__Sevens', '../res/miniature/Spring/Yu_Gi_Oh__Sevens', '../res/ending/Spring/Yu_Gi_Oh__Sevens_ed_4.webm', -1, 0, 0),
(495, 'Yu-Gi-Oh!: Sevens ED 5', 'Spring', 'https://myanimelist.net/anime/40145/Yu%E2%98%86Gi%E2%98%86Oh__Sevens', '../res/miniature/Spring/Yu_Gi_Oh__Sevens', '../res/ending/Spring/Yu_Gi_Oh__Sevens_ed_5.webm', -1, 0, 0),
(496, 'Major 2nd (TV) 2nd Season ED 1', 'Spring', 'https://myanimelist.net/anime/40504/Major_2nd_TV_2nd_Season', '../res/miniature/Spring/Major_2nd_TV_2nd_Season.jpg', '../res/ending/Spring/Major_2nd_TV_2nd_Season_ed_1.webm', -1, 0, 0),
(497, 'Major 2nd (TV) 2nd Season ED 2', 'Spring', 'https://myanimelist.net/anime/40504/Major_2nd_TV_2nd_Season', '../res/miniature/Spring/Major_2nd_TV_2nd_Season.jpg', '../res/ending/Spring/Major_2nd_TV_2nd_Season_ed_2.webm', -1, 0, 0),
(498, 'Shadowverse (TV) ED 1', 'Spring', 'https://myanimelist.net/anime/40506/Shadowverse_TV', '../res/miniature/Spring/Shadowverse_TV.jpg', '../res/ending/Spring/Shadowverse_TV_ed_1.webm', -1, 0, 0),
(499, 'Shadowverse (TV) ED 2', 'Spring', 'https://myanimelist.net/anime/40506/Shadowverse_TV', '../res/miniature/Spring/Shadowverse_TV.jpg', '../res/ending/Spring/Shadowverse_TV_ed_2.webm', -1, 0, 0),
(500, 'Argonavis from BanG Dream! ED 1', 'Spring', 'https://myanimelist.net/anime/40677/Argonavis_from_BanG_Dream', '../res/miniature/Spring/Argonavis_from_BanG_Dream.jpg', '../res/ending/Spring/Argonavis_from_BanG_Dream_ed_1.webm', -1, 0, 0),
(501, 'Argonavis from BanG Dream! ED 2', 'Spring', 'https://myanimelist.net/anime/40677/Argonavis_from_BanG_Dream', '../res/miniature/Spring/Argonavis_from_BanG_Dream.jpg', '../res/ending/Spring/Argonavis_from_BanG_Dream_ed_2.webm', -1, 0, 0),
(502, 'Argonavis from BanG Dream! ED 3', 'Spring', 'https://myanimelist.net/anime/40677/Argonavis_from_BanG_Dream', '../res/miniature/Spring/Argonavis_from_BanG_Dream.jpg', '../res/ending/Spring/Argonavis_from_BanG_Dream_ed_3.webm', -1, 0, 0),
(503, 'BanG Dream! Garupa Pico: Oomori', 'Spring', 'https://myanimelist.net/anime/40854/BanG_Dream_Garupa%E2%98%86Pico__Oomori', '../res/miniature/Spring/BanG_Dream_Garupa_Pico__Oomori.jpg', '../res/ending/Spring/BanG_Dream_Garupa_Pico__Oomori.mp4', -1, 0, 0),
(504, 'BNA', 'Spring', 'https://myanimelist.net/anime/40060/BNA', '../res/miniature/Spring/BNA.jpg', '../res/ending/Spring/BNA.mp4', -1, 0, 0),
(505, 'Great Pretender', 'Spring', 'https://myanimelist.net/anime/40052/Great_Pretender', '../res/miniature/Spring/Great_Pretender.jpg', '../res/ending/Spring/Great_Pretender.mp4', -1, 0, 0),
(506, 'Nakitai Watashi wa Neko wo Kaburu ED 1 ?', 'Spring', 'https://myanimelist.net/anime/41168/Nakitai_Watashi_wa_Neko_wo_Kaburu', '../res/miniature/Spring/Nakitai_Watashi_wa_Neko_wo_Kaburu.jpg', '../res/ending/Spring/Nakitai_Watashi_wa_Neko_wo_Kaburu_ed_1.mp4', -1, 0, 0),
(507, 'Nakitai Watashi wa Neko wo Kaburu ED 2 ?', 'Spring', 'https://myanimelist.net/anime/41168/Nakitai_Watashi_wa_Neko_wo_Kaburu', '../res/miniature/Spring/Nakitai_Watashi_wa_Neko_wo_Kaburu.jpg', '../res/ending/Spring/Nakitai_Watashi_wa_Neko_wo_Kaburu_ed_2.mp4', -1, 0, 0),
(508, 'Baki: Dai Raitaisai-hen', 'Spring', 'https://myanimelist.net/anime/39555/Baki__Dai_Raitaisai-hen', '../res/miniature/Spring/Baki__Dai_Raitaisai-hen.jpg', '../res/ending/Spring/Baki__Dai_Raitaisai-hen.mp4', -1, 0, 0),
(509, 'Jashin-chan Dropkick\'', 'Spring', 'https://myanimelist.net/anime/39049/Jashin-chan_Dropkick', '../res/miniature/Spring/Jashin-chan_Dropkick.jpg', '../res/ending/Spring/Jashin-chan_Dropkick.mp4', -1, 0, 0),
(510, 'Strike the Blood IV', 'Spring', 'https://myanimelist.net/anime/40485/Strike_the_Blood_IV', '../res/miniature/Spring/Strike_the_Blood_IV.jpg', '../res/ending/Spring/Strike_the_Blood_IV.mp4', -1, 0, 0),
(511, 'Kitsutsuki Tanteidokoro', 'Spring', 'https://myanimelist.net/anime/39582/Kitsutsuki_Tanteidokoro/', '../res/miniature/Spring/Kitsutsuki_Tanteidokoro.jpg', '../res/ending/Spring/Kitsutsuki_Tanteidokoro.mp4', -1, 0, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
