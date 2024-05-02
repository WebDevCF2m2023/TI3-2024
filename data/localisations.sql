-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 24 avr. 2024 à 08:59
-- Version du serveur : 5.7.19
-- Version de PHP : 8.2.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ti3_2024`
--

-- --------------------------------------------------------

--
-- Structure de la table `localisations`
--

DROP TABLE IF EXISTS `localisations`;
CREATE TABLE IF NOT EXISTS `localisations` (
  `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `codepostal` varchar(4) NOT NULL,
  `ville` varchar(20) NOT NULL,
  `url` varchar(200) NOT NULL,
  `latitude` decimal(8,6) NOT NULL,
  `longitude` decimal(8,6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `localisations`
--

INSERT INTO `localisations` (`id`, `nom`, `type`, `adresse`, `codepostal`, `ville`, `url`, `latitude`, `longitude`) VALUES(1, 'Cinematek', 'cinéma', 'Rue Baron Horta 9', '1000', 'Bruxelles', 'https://cinematek.be/', 50.844192, 4.360142);
INSERT INTO `localisations` (`id`, `nom`, `type`, `adresse`, `codepostal`, `ville`, `url`, `latitude`, `longitude`) VALUES(2, 'Movie Drive (cinéma d\'\'été)', 'ciné-club', 'Parking Tour & Taxis', '1000', 'Bruxelles', 'https://moviedrive.be/', 50.864787, 4.348623);
INSERT INTO `localisations` (`id`, `nom`, `type`, `adresse`, `codepostal`, `ville`, `url`, `latitude`, `longitude`) VALUES(3, 'UGC De Brouckère', 'cinéma', 'Place de Brouckère 38', '1000', 'Bruxelles', 'https://www.ugc.be/cinema.html?id=2', 50.851834, 4.352507);
INSERT INTO `localisations` (`id`, `nom`, `type`, `adresse`, `codepostal`, `ville`, `url`, `latitude`, `longitude`) VALUES(4, 'Espace Magh', 'centre culturel', 'Rue du Poinçon 17', '1000', 'Bruxelles', 'https://www.espacemagh.be/', 50.843548, 4.348637);
INSERT INTO `localisations` (`id`, `nom`, `type`, `adresse`, `codepostal`, `ville`, `url`, `latitude`, `longitude`) VALUES(5, 'Ciné-club Bruegel', 'ciné-club', 'Rue des Renards 1F', '1000', 'Bruxelles', 'https://ccbruegel.be/', 50.836786, 4.347292);
INSERT INTO `localisations` (`id`, `nom`, `type`, `adresse`, `codepostal`, `ville`, `url`, `latitude`, `longitude`) VALUES(6, 'Gare aux enfants', 'ciné-club', 'Rue du Champ de l’Eglise 2', '1020', 'Laeken', 'https://loupioteasbl.wordpress.com/le-cine-en-famille-de-laeken/', 50.877808, 4.354828);
INSERT INTO `localisations` (`id`, `nom`, `type`, `adresse`, `codepostal`, `ville`, `url`, `latitude`, `longitude`) VALUES(7, 'Bozar Cinéma', 'centre culturel', 'Rue Ravenstein 23', '1000', 'Bruxelles', 'https://www.bozar.be/fr/calendar?date=17-05-2022&section=546', 50.844088, 4.359589);
INSERT INTO `localisations` (`id`, `nom`, `type`, `adresse`, `codepostal`, `ville`, `url`, `latitude`, `longitude`) VALUES(8, 'Les Midis du Cinéma', 'ciné-club', 'Rue de la Régence 3', '1000', 'Bruxelles', 'https://www.fine-arts-museum.be', 50.841671, 4.358199);
INSERT INTO `localisations` (`id`, `nom`, `type`, `adresse`, `codepostal`, `ville`, `url`, `latitude`, `longitude`) VALUES(9, 'Cinéma Galeries', 'cinéma', 'Galerie de la Reine 26', '1000', 'Bruxelles', 'https://www.galeries.be/', 50.847511, 4.354628);
INSERT INTO `localisations` (`id`, `nom`, `type`, `adresse`, `codepostal`, `ville`, `url`, `latitude`, `longitude`) VALUES(10, 'Beursschouwburg', 'centre culturel', 'Rue Auguste Orts 20-28', '1000', 'Bruxelles', 'https://www.beursschouwburg.be', 50.848772, 4.348383);
INSERT INTO `localisations` (`id`, `nom`, `type`, `adresse`, `codepostal`, `ville`, `url`, `latitude`, `longitude`) VALUES(11, 'Ciné-Club des Libertés', 'ciné-club', 'Avenue de Stalingrad 18-20', '1000', 'Bruxelles', 'http://www.bxllaique.be/', 50.842003, 4.345190);
INSERT INTO `localisations` (`id`, `nom`, `type`, `adresse`, `codepostal`, `ville`, `url`, `latitude`, `longitude`) VALUES(12, 'Cinéma Palace', 'cinéma', 'Boulevard Anspach 85', '1000', 'Bruxelles', 'https://www.cinema-palace.be/fr', 50.847905, 4.348758);
INSERT INTO `localisations` (`id`, `nom`, `type`, `adresse`, `codepostal`, `ville`, `url`, `latitude`, `longitude`) VALUES(13, 'Kinepolis Bruxelles', 'cinéma', 'Boulevard du Centenaire 20', '1020', 'Laeken', 'https://kinepolis.be/fr/', 50.895723, 4.337864);
INSERT INTO `localisations` (`id`, `nom`, `type`, `adresse`, `codepostal`, `ville`, `url`, `latitude`, `longitude`) VALUES(14, 'Cinéma Nova', 'cinéma', 'Rue d’Arenberg 3', '1000', 'Bruxelles', 'https://www.nova-cinema.org/', 50.848373, 4.356034);
INSERT INTO `localisations` (`id`, `nom`, `type`, `adresse`, `codepostal`, `ville`, `url`, `latitude`, `longitude`) VALUES(15, 'Cinema RITCS', 'cinéma', 'Rue Antoine Dansaert 70', '1000', 'Bruxelles', 'https://www.cinemaritcs.be/', 50.850468, 4.345851);
INSERT INTO `localisations` (`id`, `nom`, `type`, `adresse`, `codepostal`, `ville`, `url`, `latitude`, `longitude`) VALUES(16, 'Muséum des Sciences Naturelles', 'ciné-club', 'Rue Vautier 29', '1000', 'Bruxelles', 'https://www.naturalsciences.be/fr/museum/home', 50.837367, 4.376510);
INSERT INTO `localisations` (`id`, `nom`, `type`, `adresse`, `codepostal`, `ville`, `url`, `latitude`, `longitude`) VALUES(17, 'MC Cité Modèle', 'centre culturel', 'Allée du Rubis, Annexe bloc 3', '1020', 'Laeken', 'http://www.maisondelacreation.org/', 50.895112, 4.324010);
INSERT INTO `localisations` (`id`, `nom`, `type`, `adresse`, `codepostal`, `ville`, `url`, `latitude`, `longitude`) VALUES(18, 'Cinéma Aventure', 'cinéma', 'Rue des Fripiers 15 - Galerie du centre 57', '1000', 'Bruxelles', 'https://cinema-aventure.be/', 50.848710, 4.352203);
INSERT INTO `localisations` (`id`, `nom`, `type`, `adresse`, `codepostal`, `ville`, `url`, `latitude`, `longitude`) VALUES(19, 'Ciné-club de l\'INSAS', 'ciné-club', 'Rue Thérésienne 8', '1000', 'Bruxelles', 'https://sites.google.com/insas.be/cineclub/', 50.840038, 4.361369);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
