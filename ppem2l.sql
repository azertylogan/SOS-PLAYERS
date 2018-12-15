-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 21 oct. 2018 à 14:45
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ppem2l`
--

-- --------------------------------------------------------

--
-- Structure de la table `membresjeu`
--

DROP TABLE IF EXISTS `membresjeu`;
CREATE TABLE IF NOT EXISTS `membresjeu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `adrMail` varchar(200) NOT NULL,
  `MDP` varchar(50) NOT NULL,
  `sexe` int(11) NOT NULL,
  `age` varchar(25) NOT NULL,
  `jeu1` varchar(50) NOT NULL,
  `jeu2` varchar(50) NOT NULL,
  `jeu3` varchar(50) NOT NULL,
  `jeu4` varchar(50) NOT NULL,
  `jeu5` varchar(50) NOT NULL,
  `jeu6` varchar(50) NOT NULL,
  `jeu7` varchar(50) NOT NULL,
  `jeu8` varchar(50) NOT NULL,
  `jeu9` varchar(50) NOT NULL,
  `jeu10` varchar(50) NOT NULL,
  `jeu11` varchar(50) NOT NULL,
  `jeu12` varchar(50) NOT NULL,
  `jeu13` varchar(50) NOT NULL,
  `jeu14` varchar(50) NOT NULL,
  `jeu15` varchar(50) NOT NULL,
  `jeu16` varchar(50) NOT NULL,
  `jeu17` varchar(50) NOT NULL,
  `jeu18` varchar(50) NOT NULL,
  `jeu19` varchar(50) NOT NULL,
  `jeu20` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `membresjeu`
--

INSERT INTO `membresjeu` (`id`, `nom`, `prenom`, `adrMail`, `MDP`, `sexe`, `age`, `jeu1`, `jeu2`, `jeu3`, `jeu4`, `jeu5`, `jeu6`, `jeu7`, `jeu8`, `jeu9`, `jeu10`, `jeu11`, `jeu12`, `jeu13`, `jeu14`, `jeu15`, `jeu16`, `jeu17`, `jeu18`, `jeu19`, `jeu20`) VALUES
(18, 'Talon', 'Gillian', 'gillian@talon.fr', 'talon', 1, '19-25', 'Battlefield', 'NeJouePas', 'NeJouePas', 'NeJouePas', 'NeJouePas', 'NeJouePas', 'NeJouePas', 'NeJouePas', 'NeJouePas', 'NeJouePas', 'NeJouePas', 'NeJouePas', 'League of legends', 'NeJouePas', 'NeJouePas', 'NeJouePas', 'NeJouePas', 'NeJouePas', 'NeJouePas', 'NeJouePas'),
(19, 'Riguidel', 'Charles', 'charlesriguidel35@gmail.com', 'riguidel', 1, '19-25', 'Battlefield', 'NeJouePas', 'NeJouePas', 'NeJouePas', 'NeJouePas', 'NeJouePas', 'NeJouePas', 'NeJouePas', 'NeJouePas', 'NeJouePas', 'NeJouePas', 'NeJouePas', 'League of legends', 'NeJouePas', 'NeJouePas', 'NeJouePas', 'NeJouePas', 'NeJouePas', 'Trackmania Stadium', 'NeJouePas'),
(20, 'Queret', 'Charlotte', 'charlotte@queret.com', 'queret', 2, '15-18', 'Battlefield', 'NeJouePas', 'NeJouePas', 'NeJouePas', 'NeJouePas', 'NeJouePas', 'NeJouePas', 'NeJouePas', 'NeJouePas', 'NeJouePas', 'NeJouePas', 'NeJouePas', 'NeJouePas', 'NeJouePas', 'NeJouePas', 'NeJouePas', 'NeJouePas', 'NeJouePas', 'Trackmania Stadium', 'NeJouePas');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
