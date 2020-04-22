-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 21 avr. 2020 à 19:23
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `blog`
--
CREATE DATABASE IF NOT EXISTS `blog` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `blog`;

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `article` text NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `id_categorie` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `article`, `id_utilisateur`, `id_categorie`, `date`) VALUES
(2, 'tyriytr', 1337, 1, '2020-03-22 13:10:29'),
(3, 'tiriury', 1337, 1, '2020-03-22 13:10:31'),
(32, 'On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions\r\n', 1337, 1, '2020-04-11 02:53:05'),
(33, 'On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions', 1337, 3, '2020-04-11 02:53:10'),
(34, 'On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions', 1337, 5, '2020-04-11 02:53:16'),
(35, 'tluiuktjyrsdukfi', 1337, 1, '2020-04-11 04:08:16'),
(36, 'oiuytyrterze', 1345, 1, '2020-04-11 04:09:09'),
(37, 'zertyui', 1345, 1, '2020-04-11 04:10:26'),
(38, 'Si vous voulez utiliser un passage du Lorem Ipsum, vous devez Ãªtre s', 1345, 1, '2020-04-11 04:10:39'),
(39, 'qsdfghjklmmm', 1345, 1, '2020-04-11 04:11:47'),
(40, 'azertyui', 1345, 1, '2020-04-11 04:11:54');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `nom`) VALUES
(1, 'konoha'),
(2, 'Oto'),
(3, 'Iwa'),
(4, 'Kusa'),
(5, 'Suna');

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

DROP TABLE IF EXISTS `commentaires`;
CREATE TABLE IF NOT EXISTS `commentaires` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `commentaire` varchar(1024) NOT NULL,
  `id_article` int(11) NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `commentaire`, `id_article`, `id_utilisateur`, `date`) VALUES
(12, 'EDRSETRYTUYI', 0, 1344, '2020-04-08 18:28:25'),
(11, 'YRUIYOYUTYTRE', 9, 1344, '2020-04-08 18:28:25'),
(22, 'uyiotytri', 35, 1337, '2020-04-11 02:08:25'),
(23, 'iutyuyouyti', 35, 1337, '2020-04-11 02:08:28'),
(24, '_Ã¨Ã§o_(Ã¨-', 35, 1345, '2020-04-11 02:10:56'),
(25, 'iktyerse', 35, 1345, '2020-04-11 02:11:03'),
(26, 'ikyujtr', 35, 1345, '2020-04-11 02:11:08'),
(27, 'RETYUIKLO', 39, 1337, '2020-04-11 03:10:20');

-- --------------------------------------------------------

--
-- Structure de la table `droits`
--

DROP TABLE IF EXISTS `droits`;
CREATE TABLE IF NOT EXISTS `droits` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1338 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `droits`
--

INSERT INTO `droits` (`id`, `nom`) VALUES
(1, 'utilisateur'),
(42, 'modérateur'),
(1337, 'administrateur');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `id_droits` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1350 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `login`, `password`, `email`, `id_droits`) VALUES
(1337, 'admin', '$2y$12$1C.Lu2hgLhQ9afAX9.x.8uOAAS0ZmfgHbI8gg4wqqfUumg0C4vXxq', 'jdcolas888@gmail.com', 1337),
(1339, 'azerty', '$2y$12$hNE8NUf9QgXJmACe8Rb3sekKVu146ffG1NmjqSvQqAGcpFAbvjUCu', 'jdcolas8188@gmail.com', 1),
(1345, 'dre', '$2y$12$03Bht3qkaO8jC7THF7YQi./AWKclM6aOIJ5/6UZrEsAvsp2LuArWG', 'jdcolas8a88@gmail.com', 42),
(1344, 't', '$2y$12$ot.NYmS17TnswWN/J/orMeIiu3SWYkMwVFE80KHrYVTRguqFn9qJO', 'jdcolas8e88@gmail.com', 1),
(1346, 'PO123', '$2y$12$kS79k1W264np1gssjoIaGeZvBD7rIvalepUq5eTNsO4PM5RC55wtK', 'jdcolas8s88@gmail.com', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
