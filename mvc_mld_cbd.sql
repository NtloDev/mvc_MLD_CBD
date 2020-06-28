-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 28 juin 2020 à 16:18
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `mvc_mld_cbd`
--

-- --------------------------------------------------------

--
-- Structure de la table `building`
--

DROP TABLE IF EXISTS `building`;
CREATE TABLE IF NOT EXISTS `building` (
  `id_building` int(11) NOT NULL AUTO_INCREMENT,
  `name_building` varchar(50) NOT NULL,
  `id_room` int(11) NOT NULL,
  PRIMARY KEY (`id_building`),
  KEY `building_ROOM_FK` (`id_room`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `room`
--

DROP TABLE IF EXISTS `room`;
CREATE TABLE IF NOT EXISTS `room` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_room` varchar(50) NOT NULL,
  `name_bulding` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `room`
--

INSERT INTO `room` (`id`, `name_room`, `name_bulding`) VALUES
(1, '001-5485', '5485'),
(2, '002-54855', '54855');

-- --------------------------------------------------------

--
-- Structure de la table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `matricule` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `birthday` date NOT NULL,
  `adress` varchar(100) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `housing` varchar(100) DEFAULT NULL,
  `id_room` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ETUDIANT_ROOM_FK` (`id_room`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `student`
--

INSERT INTO `student` (`id`, `matricule`, `firstname`, `lastname`, `mail`, `phone`, `birthday`, `adress`, `amount`, `housing`, `id_room`) VALUES
(2, '2020maop0001', 'diop', 'lamine', 'lamine@gmail.com', 777770404, '2020-06-09', 'popenguine', 40000, '001-7777', 1),
(3, '2020ceof0002', 'cheikh babacar', 'diouf', 'dioufcheikh@live.com', 778890550, '2020-06-01', NULL, 20000, '002-4527', 2);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `building`
--
ALTER TABLE `building`
  ADD CONSTRAINT `building_ROOM_FK` FOREIGN KEY (`id_room`) REFERENCES `room` (`id`);

--
-- Contraintes pour la table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `ETUDIANT_ROOM_FK` FOREIGN KEY (`id_room`) REFERENCES `room` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
