-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 01 août 2018 à 14:27
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `id5804543_jibcolis`
--

-- --------------------------------------------------------

--
-- Structure de la table `colis1`
--

DROP TABLE IF EXISTS `colis1`;
CREATE TABLE IF NOT EXISTS `colis1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `poid` varchar(50) NOT NULL,
  `pays_dep` varchar(100) NOT NULL,
  `ville_dep` varchar(100) NOT NULL,
  `pays_arr` varchar(100) NOT NULL,
  `ville_arr` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `description` text NOT NULL,
  `box` tinyint(1) NOT NULL DEFAULT '0',
  `type` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `colis1`
--

INSERT INTO `colis1` (`id`, `poid`, `pays_dep`, `ville_dep`, `pays_arr`, `ville_arr`, `date`, `description`, `box`, `type`, `user_id`) VALUES
(18, 'Entre 1Kg et 3kg', 'algerie', 'alger', 'angola', 'dwscwxc', '2018-07-03', '', 1, 'med', 11),
(21, 'Inférrieur à 1kg', 'france', 'paris', 'algerie', 'bejaia', '2018-07-11', '', 1, 'doc', 11),
(22, 'Entre 1Kg et 3kg', 'afriqueDuSud', 'cap vert', 'algerie', 'alger', '2018-09-01', '', 1, 'doc', 11),
(24, 'Inférrieur à 1kg', 'comores', 'mlw', 'congo', 'mldkghb', '2018-07-19', '', 1, 'doc', 11);

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `message` varchar(400) NOT NULL,
  `lu` tinyint(1) DEFAULT NULL,
  `id_expediteur` bigint(20) NOT NULL,
  `id_destinataire` bigint(20) NOT NULL,
  `tel` varchar(16) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_iew5a8swtmknyp3akiijtn0ko` (`id_expediteur`),
  KEY `FK_c7aoa6cprt6i4qhky8k7tiyot` (`id_destinataire`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`id`, `message`, `lu`, `id_expediteur`, `id_destinataire`, `tel`) VALUES
(1, 'coucou !', NULL, 35, 32, NULL),
(4, 'mlmlk', NULL, 11, 20, NULL),
(16, 'Votre message !', 1, 39, 11, ''),
(17, 'tu peux me transporter un colis stp', 1, 39, 11, '0987654321'),
(18, 'Votre message !', 1, 39, 11, ''),
(20, 'bonjour je suis partant \r\n', 1, 39, 35, ''),
(23, 'Oui c’est super ', 1, 35, 39, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `meta_location`
--

DROP TABLE IF EXISTS `meta_location`;
CREATE TABLE IF NOT EXISTS `meta_location` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `iso` varchar(50) DEFAULT NULL,
  `local_name` varchar(255) DEFAULT NULL,
  `type` char(2) DEFAULT NULL,
  `geo_lat` double(18,11) DEFAULT NULL,
  `geo_lng` double(18,11) DEFAULT NULL,
  `db_id` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `ROLE_ID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(32) NOT NULL,
  PRIMARY KEY (`ROLE_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `trajet`
--

DROP TABLE IF EXISTS `trajet`;
CREATE TABLE IF NOT EXISTS `trajet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `nature` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `colis` varchar(100) NOT NULL,
  `poid` varchar(50) NOT NULL,
  `pays_dep` varchar(100) NOT NULL,
  `ville_dep` varchar(100) NOT NULL,
  `pays_arr` varchar(100) NOT NULL,
  `ville_arr` varchar(100) NOT NULL,
  `date_dep` varchar(100) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `box` tinyint(1) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `trajet`
--

INSERT INTO `trajet` (`id`, `date`, `nature`, `colis`, `poid`, `pays_dep`, `ville_dep`, `pays_arr`, `ville_arr`, `date_dep`, `description`, `box`, `user_id`) VALUES
(13, '2018-07-17', 'Ferroviaire', 'doc', 'Inférrieur à 1kg', 'cameroun', 'lmkmlk', 'algerie', 'bejaia', '2018-07-04', '', 1, 11),
(16, '2018-07-17', 'maritime', 'doc', 'Inférrieur à 1kg', 'coteIvoire', 'jhgjhg', 'cameroun', 'jhgjhg', '2018-07-05', '', 1, 11),
(17, '2018-07-17', 'aérien', 'med', 'Inférrieur à 1kg', 'angola', 'lmkmlk', 'benin', 'dwscwxc', '2018-07-04', '', 1, 11),
(18, '2018-07-17', 'aérien', 'doc', 'Suppérrieur à 5Kg', 'coteIvoire', ':xw,c:x;,c', 'congo', 'dwscwxc', '2018-07-26', '', 1, 11),
(19, '2018-07-17', 'Routier', 'autre', 'Suppérrieur à 5Kg', 'egypte', 'jhgjhg', 'coteIvoire', 'jhgjhg', '2018-07-19', '', 1, 11),
(20, '2018-07-17', 'aérien', 'vet', 'Inférrieur à 1kg', 'afriqueDuSud', 'klklkjkl', 'afriqueDuSud', 'klkjlkj', '2018-07-12', '', 1, 11),
(21, '2018-07-17', 'Ferroviaire', 'med', 'Inférrieur à 1kg', 'france', 'paris', 'france', 'melun', '2018-07-31', '', 1, 11),
(24, '2018-07-27', 'Ferroviaire', 'vet', 'Entre 1Kg et 3kg', 'afriqueDuSud', 'captown', 'egypte', 'caire', '2018/09/20', '', 1, 39),
(25, '2018-07-31', 'Ferroviaire', 'vet', 'Inférrieur à 1kg', 'republiqueDemocratiqueDuCongo', 'kjhkjh', 'comores', 'kjhjh', '2018-07-14', '', 1, 11),
(26, '2018-07-31', 'Ferroviaire', 'vet', 'Entre 1Kg et 3kg', 'algerie', 'lksnlkj', 'angola', 'kljkj', '2018-07-06', '', 1, 11);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `LASTNAME` varchar(64) DEFAULT NULL,
  `FIRSTNAME` varchar(32) DEFAULT NULL,
  `PHONE` varchar(255) DEFAULT NULL,
  `EMAIL_ID` varchar(128) DEFAULT NULL,
  `IMAGE_URL` varchar(255) DEFAULT NULL,
  `PASSWORD` varchar(256) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UK_pwd98kubff60isq4y57k7o6bv` (`PHONE`),
  UNIQUE KEY `EMAIL_ID` (`EMAIL_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `LASTNAME`, `FIRSTNAME`, `PHONE`, `EMAIL_ID`, `IMAGE_URL`, `PASSWORD`) VALUES
(11, 'messad', 'khaled', '0755959023', 'khaled', 'images/profile.png', '$2y$10$D6OfxR4XgjH78HR6sj6KeOxjTqwTchG0MHm/97TWUKx7IgUS5r/xC'),
(32, 'Ayad', 'Yougourthen ', '0613815615', 'Yougourthen.ayad@gmail.com ', 'images/profile.png', '$2y$10$XdUfIXffG5if4oJnhICJA.qju8mr4slxoprIzlbsP5RG74O3WAU..'),
(39, 'boulkaria', 'massinissa', '0756664987', 'massinissa.boulkaria@gmail.com', 'images/profile.png', '$2y$10$MbVTO7aXQlVoGLW.Jh2cK.N/6EsBa1bVSLDUJxe9cEN8I78ij4FF.'),
(42, 'Sam', 'Sam', '0666666666', 'Sam@sam.fr', 'images/profile.png', '$2y$10$rlAEyP68wT8WGs0atZR5l.XJKdn7sEJ/gxwK53vRXRxdE1XfEy9ye'),
(48, 'karim', 'karim', '0987654321', 'karim@gmail.com', 'images/profile.png', '$2y$10$Qc92twQ1hK2qzbVvrTx12usX7S9JDlgHFDDzwJSC80VR6oDeQBPCq'),
(63, 'essaie3', 'essai3', '0897654231', 'essaie3@gmail.com', 'images/profile.png', '$2y$10$GVq36jJuvCAqvac2aYhNFu6NOYDXyndlURv/FT8eJJNJhcxssN0eO'),
(64, 'Massinissa ', 'Boulkaria', '0125634894', 'massi@gmail.com', 'images/profile.png', '$2y$10$v/5QtowLTB9h9c1MWTM9Wu3TTEZrDwaFEUOQPcrRlBjmiE3DMrXXy'),
(69, 'sami', 'belbacha', '0651456342', 'samsoum.infor@gmail.com', 'images/profile.png', '$2y$10$UtOJ91mk9wO/JrYZrozPxelYeanojCgInMuJZJ.tz65tvksFYaDrG'),
(72, 'A', 'A', '1', 'Aa', 'images/profile.png', '$2y$10$uOd0xpg6/JHswgCtIr9YtO/XAlcKHylDM1hAI8mbnW7k7pNhh3Y2S');

-- --------------------------------------------------------

--
-- Structure de la table `user_role`
--

DROP TABLE IF EXISTS `user_role`;
CREATE TABLE IF NOT EXISTS `user_role` (
  `USER_ID` bigint(20) NOT NULL,
  `ROLE_ID` int(11) NOT NULL,
  PRIMARY KEY (`USER_ID`,`ROLE_ID`),
  KEY `FK_oqmdk7xj0ainhxpvi79fkaq3y` (`ROLE_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `colis1`
--
ALTER TABLE `colis1`
  ADD CONSTRAINT `colis1_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `trajet`
--
ALTER TABLE `trajet`
  ADD CONSTRAINT `trajet_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
