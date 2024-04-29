-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 24 avr. 2024 à 08:22
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
  `nom` varchar(100) NOT NULL,
  `rue` varchar(100) NOT NULL,
  `codepostal` varchar(5) NOT NULL,
  `telephone` varchar(15) NOT NULL,
  `url` varchar(100) NOT NULL,
  `latitude` decimal(13,10) NOT NULL,
  `longitude` decimal(13,10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `localisations`
--

INSERT INTO `localisations` (`id`, `nom`, `rue`, `codepostal`, `telephone`, `url`, `latitude`, `longitude`) VALUES(16, '(Les) Brigittines', 'Petite rue des Brigittines', '1000', '02 213 86 10', 'https://www.brigittines.be', 50.8408156000, 4.3490191000);
INSERT INTO `localisations` (`id`, `nom`, `rue`, `codepostal`, `telephone`, `url`, `latitude`, `longitude`) VALUES(15, 'Théâtre les Tanneurs', 'Rue des Tanneurs 75', '1000', '02 512 17 84', 'https://www.lestanneurs.be', 50.8392336000, 4.3460640000);
INSERT INTO `localisations` (`id`, `nom`, `rue`, `codepostal`, `telephone`, `url`, `latitude`, `longitude`) VALUES(14, '(La) Bellone', 'Rue de Flandre 46', '1000', '02 513 33 33', 'https://www.bellone.be', 50.8513936000, 4.3465390000);
INSERT INTO `localisations` (`id`, `nom`, `rue`, `codepostal`, `telephone`, `url`, `latitude`, `longitude`) VALUES(13, 'Théâtre de la Place des Martyrs', 'Place des Martyrs 22', '1000', '02 223 32 08', 'https://www.theatredesmartyrs.be', 50.8519753000, 4.3562531000);
INSERT INTO `localisations` (`id`, `nom`, `rue`, `codepostal`, `telephone`, `url`, `latitude`, `longitude`) VALUES(12, 'Théâtre La montagne magique', 'Rue du Marais 57', '1000', '02 210 15 90', 'https://www.theatremontagnemagique.be', 50.8519759000, 4.3596372000);
INSERT INTO `localisations` (`id`, `nom`, `rue`, `codepostal`, `telephone`, `url`, `latitude`, `longitude`) VALUES(11, 'Beursschouwburg', 'Rue Orts 20-28', '1000', '02 550 03 50', 'https://www.beursschouwburg.be', 50.8486591000, 4.3486931000);
INSERT INTO `localisations` (`id`, `nom`, `rue`, `codepostal`, `telephone`, `url`, `latitude`, `longitude`) VALUES(10, 'Koninklijke Vlaamse Schouwburg (KVS)', 'Quai aux Pierres de Taille 7', '1000', '02 210 11 12', 'https://www.kvs.be', 50.8553361000, 4.3512860000);
INSERT INTO `localisations` (`id`, `nom`, `rue`, `codepostal`, `telephone`, `url`, `latitude`, `longitude`) VALUES(9, 'Bronks', 'Rue du Marché aux Porcs 15-17', '1000', '02 219 99 21', 'https://www.bronks.be', 50.8427501000, 4.3515499000);
INSERT INTO `localisations` (`id`, `nom`, `rue`, `codepostal`, `telephone`, `url`, `latitude`, `longitude`) VALUES(8, 'Théâtre royal du Parc', 'Rue de la Loi 3', '1000', '02 505 30 30', 'https://www.theatreduparc.be', 50.8461541000, 4.3657158000);
INSERT INTO `localisations` (`id`, `nom`, `rue`, `codepostal`, `telephone`, `url`, `latitude`, `longitude`) VALUES(7, 'Théâtre royal de Toone', 'Rue du Marché aux Herbes', '1000', '02 511 71 37', 'https://www.toone.be', 50.8472260000, 4.3533904000);
INSERT INTO `localisations` (`id`, `nom`, `rue`, `codepostal`, `telephone`, `url`, `latitude`, `longitude`) VALUES(6, 'Théâtre des Galeries', 'Galerie du Roi 32', '1000', '02 512 04 07', 'https://www.theatredesgaleries.be', 50.8484961000, 4.3557131000);
INSERT INTO `localisations` (`id`, `nom`, `rue`, `codepostal`, `telephone`, `url`, `latitude`, `longitude`) VALUES(5, '(Le) Jardin de ma Soeur', 'Rue du Grand Hospice', '1000', '02 217 65 82', 'https://www.lejardindemasoeur.be', 50.8533627000, 4.3494041000);
INSERT INTO `localisations` (`id`, `nom`, `rue`, `codepostal`, `telephone`, `url`, `latitude`, `longitude`) VALUES(4, '(La) Monnaie', 'Place de la Monnaie', '1000', '070 23 39 39', 'https://www.demunt.be', 50.8500949000, 4.3533511000);
INSERT INTO `localisations` (`id`, `nom`, `rue`, `codepostal`, `telephone`, `url`, `latitude`, `longitude`) VALUES(3, 'Théâtre de Poche', 'Chemin du Gymnase 1A', '1000', '02 649 17 27', 'https://www.poche.be', 50.8121310000, 4.3712850000);
INSERT INTO `localisations` (`id`, `nom`, `rue`, `codepostal`, `telephone`, `url`, `latitude`, `longitude`) VALUES(1, 'Kaaitheater', 'Square Sainctelette 20', '1000', '02 201 59 59', 'https://www.kaaitheater.be/fr', 50.8587068000, 4.3471197000);
INSERT INTO `localisations` (`id`, `nom`, `rue`, `codepostal`, `telephone`, `url`, `latitude`, `longitude`) VALUES(2, 'Centre culturel des Riches-Claires', 'Rue des Riches Claires 24', '1000', '02 548 25 80', 'https://www.lesrichesclaires.be', 50.8469773000, 4.3463893000);
INSERT INTO `localisations` (`id`, `nom`, `rue`, `codepostal`, `telephone`, `url`, `latitude`, `longitude`) VALUES(17, 'Palais des Beaux-Arts (BOZAR)', 'Rue Ravenstein 23', '1000', '02 507 82 00', 'https://www.bozar.be', 50.8443176000, 4.3593582000);
INSERT INTO `localisations` (`id`, `nom`, `rue`, `codepostal`, `telephone`, `url`, `latitude`, `longitude`) VALUES(18, 'Théâtre national de la Communauté Wallonie-Bruxelles', 'Boulevard Emile Jacqmain 111-115', '1000', '02 203 41 55', 'https://www.theatrenational.be', 50.8539091000, 4.3541316000);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
