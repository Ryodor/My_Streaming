-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Lun 09 Janvier 2017 à 18:10
-- Version du serveur :  5.5.53-0+deb8u1
-- Version de PHP :  5.6.29-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `my_streaming`
--

-- --------------------------------------------------------

--
-- Structure de la table `Actors`
--

CREATE TABLE IF NOT EXISTS `Actors` (
`ID` int(6) unsigned NOT NULL,
  `First_name` varchar(20) DEFAULT NULL,
  `Last_name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Actors`
--

INSERT INTO `Actors` (`ID`, `First_name`, `Last_name`) VALUES
(1, 'Robert', 'Downey'),
(2, 'Chris', 'Evans'),
(3, 'Scarlett', 'Johansson'),
(4, 'Chris ', 'Hemsworth'),
(5, 'Jeremy', 'Renner'),
(6, 'Mark', 'Ruffalo'),
(7, 'Elizabeth', 'Olsen'),
(8, 'James', 'Spader'),
(9, 'Aaeon', 'Johnson'),
(10, 'Paul', 'Bettany'),
(11, 'Samuel', 'Jackson'),
(12, 'Anthony', 'Hopkins');

-- --------------------------------------------------------

--
-- Structure de la table `Details_mov_ser`
--

CREATE TABLE IF NOT EXISTS `Details_mov_ser` (
`ID` int(6) unsigned NOT NULL,
  `Mov_ser` int(6) unsigned DEFAULT NULL,
  `Title` varchar(150) DEFAULT NULL,
  `Path_poster` varchar(180) DEFAULT NULL,
  `Release_date` date DEFAULT NULL,
  `Director` int(6) unsigned DEFAULT NULL,
  `Actor` int(6) unsigned DEFAULT NULL,
  `Kind` int(6) unsigned DEFAULT NULL,
  `Nationality` int(6) unsigned DEFAULT NULL,
  `Synopsis` text,
  `Box_office` int(6) DEFAULT NULL,
  `Age_limit` int(6) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Details_mov_ser`
--

INSERT INTO `Details_mov_ser` (`ID`, `Mov_ser`, `Title`, `Path_poster`, `Release_date`, `Director`, `Actor`, `Kind`, `Nationality`, `Synopsis`, `Box_office`, `Age_limit`) VALUES
(1, 1, 'Avengers 2', '../image/Avengers_air_Ultron.jpg', '2015-04-22', 1, 1, 1, 2, 'Alors que Tony Stark tente de relancer un programme de maintien de la paix jusque-là suspendu, les choses tournent mal et les super-héros Iron Man, Captain America, Thor, Hulk, Black Widow et Hawkeye vont devoir à nouveau unir leurs forces pour combattre le plus puissant de leurs adversaires : le terrible Ultron, un être technologique terrifiant qui s’est juré d’éradiquer l’espèce humaine.\r\nAfin d’empêcher celui-ci d’accomplir ses sombres desseins, des alliances inattendues se scellent, les entraînant dans une incroyable aventure et une haletante course contre le temps…', 4377648, 7);

-- --------------------------------------------------------

--
-- Structure de la table `Directors`
--

CREATE TABLE IF NOT EXISTS `Directors` (
`ID` int(6) unsigned NOT NULL,
  `First_name` varchar(20) DEFAULT NULL,
  `Last_name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Directors`
--

INSERT INTO `Directors` (`ID`, `First_name`, `Last_name`) VALUES
(1, 'Kevin', 'Feige'),
(2, 'Thomas', 'Harris');

-- --------------------------------------------------------

--
-- Structure de la table `Kinds_all`
--

CREATE TABLE IF NOT EXISTS `Kinds_all` (
`ID` int(6) unsigned NOT NULL,
  `Name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Mov_Actor`
--

CREATE TABLE IF NOT EXISTS `Mov_Actor` (
  `ID_mov` int(6) unsigned DEFAULT NULL,
  `ID_actor` int(6) unsigned DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Mov_Director`
--

CREATE TABLE IF NOT EXISTS `Mov_Director` (
  `ID_mov` int(6) unsigned DEFAULT NULL,
  `ID_director` int(6) unsigned DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Mov_Kinds`
--

CREATE TABLE IF NOT EXISTS `Mov_Kinds` (
  `ID_mov` int(6) unsigned DEFAULT NULL,
  `ID_kind` int(6) unsigned DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Mov_Nationality`
--

CREATE TABLE IF NOT EXISTS `Mov_Nationality` (
  `ID_mov` int(6) unsigned DEFAULT NULL,
  `ID_nationality` int(6) unsigned DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Nationality`
--

CREATE TABLE IF NOT EXISTS `Nationality` (
`ID` int(6) unsigned NOT NULL,
  `Nation` varchar(30) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Nationality`
--

INSERT INTO `Nationality` (`ID`, `Nation`) VALUES
(1, 'Français'),
(2, 'Americain');

-- --------------------------------------------------------

--
-- Structure de la table `Notes`
--

CREATE TABLE IF NOT EXISTS `Notes` (
`ID` int(6) unsigned NOT NULL,
  `Note` int(6) DEFAULT NULL,
  `ID_mov` int(6) unsigned DEFAULT NULL,
  `ID_user` int(6) unsigned DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Reviews`
--

CREATE TABLE IF NOT EXISTS `Reviews` (
`ID` int(6) unsigned NOT NULL,
  `Review` text,
  `ID_mov` int(6) unsigned DEFAULT NULL,
  `ID_user` int(6) unsigned DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Users`
--

CREATE TABLE IF NOT EXISTS `Users` (
`ID` int(6) unsigned NOT NULL,
  `Role` int(6) unsigned DEFAULT NULL,
  `Pseudo` varchar(22) DEFAULT NULL,
  `Email` varchar(60) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL,
  `Date_registration` date DEFAULT NULL,
  `Date_last_co` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Users`
--

INSERT INTO `Users` (`ID`, `Role`, `Pseudo`, `Email`, `Password`, `Date_registration`, `Date_last_co`) VALUES
(7, 2, 'Master_M', 'selatniryadg@gmail.com', 'allthekey', '2017-01-10', '2017-01-10');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Actors`
--
ALTER TABLE `Actors`
 ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `Details_mov_ser`
--
ALTER TABLE `Details_mov_ser`
 ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `Directors`
--
ALTER TABLE `Directors`
 ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `Kinds_all`
--
ALTER TABLE `Kinds_all`
 ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `Mov_Actor`
--
ALTER TABLE `Mov_Actor`
 ADD KEY `ID_mov` (`ID_mov`), ADD KEY `ID_actor` (`ID_actor`);

--
-- Index pour la table `Mov_Director`
--
ALTER TABLE `Mov_Director`
 ADD KEY `ID_mov` (`ID_mov`), ADD KEY `ID_director` (`ID_director`);

--
-- Index pour la table `Mov_Kinds`
--
ALTER TABLE `Mov_Kinds`
 ADD KEY `ID_mov` (`ID_mov`), ADD KEY `ID_kind` (`ID_kind`);

--
-- Index pour la table `Mov_Nationality`
--
ALTER TABLE `Mov_Nationality`
 ADD KEY `ID_mov` (`ID_mov`), ADD KEY `ID_nationality` (`ID_nationality`);

--
-- Index pour la table `Nationality`
--
ALTER TABLE `Nationality`
 ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `Notes`
--
ALTER TABLE `Notes`
 ADD PRIMARY KEY (`ID`), ADD KEY `ID_mov` (`ID_mov`), ADD KEY `ID_user` (`ID_user`);

--
-- Index pour la table `Reviews`
--
ALTER TABLE `Reviews`
 ADD PRIMARY KEY (`ID`), ADD KEY `ID_mov` (`ID_mov`), ADD KEY `ID_user` (`ID_user`);

--
-- Index pour la table `Users`
--
ALTER TABLE `Users`
 ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `Actors`
--
ALTER TABLE `Actors`
MODIFY `ID` int(6) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `Details_mov_ser`
--
ALTER TABLE `Details_mov_ser`
MODIFY `ID` int(6) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `Directors`
--
ALTER TABLE `Directors`
MODIFY `ID` int(6) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `Kinds_all`
--
ALTER TABLE `Kinds_all`
MODIFY `ID` int(6) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Nationality`
--
ALTER TABLE `Nationality`
MODIFY `ID` int(6) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `Notes`
--
ALTER TABLE `Notes`
MODIFY `ID` int(6) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Reviews`
--
ALTER TABLE `Reviews`
MODIFY `ID` int(6) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Users`
--
ALTER TABLE `Users`
MODIFY `ID` int(6) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `Mov_Actor`
--
ALTER TABLE `Mov_Actor`
ADD CONSTRAINT `Mov_Actor_ibfk_1` FOREIGN KEY (`ID_mov`) REFERENCES `Details_mov_ser` (`ID`),
ADD CONSTRAINT `Mov_Actor_ibfk_2` FOREIGN KEY (`ID_actor`) REFERENCES `Actors` (`ID`);

--
-- Contraintes pour la table `Mov_Director`
--
ALTER TABLE `Mov_Director`
ADD CONSTRAINT `Mov_Director_ibfk_1` FOREIGN KEY (`ID_mov`) REFERENCES `Details_mov_ser` (`ID`),
ADD CONSTRAINT `Mov_Director_ibfk_2` FOREIGN KEY (`ID_director`) REFERENCES `Directors` (`ID`);

--
-- Contraintes pour la table `Mov_Kinds`
--
ALTER TABLE `Mov_Kinds`
ADD CONSTRAINT `Mov_Kinds_ibfk_1` FOREIGN KEY (`ID_mov`) REFERENCES `Details_mov_ser` (`ID`),
ADD CONSTRAINT `Mov_Kinds_ibfk_2` FOREIGN KEY (`ID_kind`) REFERENCES `Kinds_all` (`ID`);

--
-- Contraintes pour la table `Mov_Nationality`
--
ALTER TABLE `Mov_Nationality`
ADD CONSTRAINT `Mov_Nationality_ibfk_1` FOREIGN KEY (`ID_mov`) REFERENCES `Details_mov_ser` (`ID`),
ADD CONSTRAINT `Mov_Nationality_ibfk_2` FOREIGN KEY (`ID_nationality`) REFERENCES `Nationality` (`ID`);

--
-- Contraintes pour la table `Notes`
--
ALTER TABLE `Notes`
ADD CONSTRAINT `Notes_ibfk_1` FOREIGN KEY (`ID_mov`) REFERENCES `Details_mov_ser` (`ID`),
ADD CONSTRAINT `Notes_ibfk_2` FOREIGN KEY (`ID_user`) REFERENCES `Users` (`ID`);

--
-- Contraintes pour la table `Reviews`
--
ALTER TABLE `Reviews`
ADD CONSTRAINT `Reviews_ibfk_1` FOREIGN KEY (`ID_mov`) REFERENCES `Details_mov_ser` (`ID`),
ADD CONSTRAINT `Reviews_ibfk_2` FOREIGN KEY (`ID_user`) REFERENCES `Users` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
