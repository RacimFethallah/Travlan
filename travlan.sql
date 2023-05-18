-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 11 mai 2023 à 16:26
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `travlan`
--

-- --------------------------------------------------------

--
-- Structure de la table `activites`
--

DROP TABLE IF EXISTS `activites`;
CREATE TABLE IF NOT EXISTS `activites` (
  `numero` int(11) NOT NULL,
  `nom_A` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `tarif_PP` decimal(10,2) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `categorie` varchar(255) DEFAULT NULL,
  `tarif_TT` decimal(10,2) DEFAULT NULL,
  `id_A` int(11) DEFAULT NULL,
  PRIMARY KEY (`numero`),
  KEY `id_A` (`id_A`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `adresses`
--

DROP TABLE IF EXISTS `adresses`;
CREATE TABLE IF NOT EXISTS `adresses` (
  `id_a` int(11) NOT NULL,
  `rue` varchar(255) DEFAULT NULL,
  `codeP` varchar(10) DEFAULT NULL,
  `ville` varchar(255) DEFAULT NULL,
  `pays` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_a`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `avis`
--

DROP TABLE IF EXISTS `avis`;
CREATE TABLE IF NOT EXISTS `avis` (
  `id_Avis` int(11) NOT NULL,
  `Rating` int(11) DEFAULT NULL,
  `texte` varchar(255) DEFAULT NULL,
  `Date_a` date DEFAULT NULL,
  PRIMARY KEY (`id_Avis`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `avoir_b`
--

DROP TABLE IF EXISTS `avoir_b`;
CREATE TABLE IF NOT EXISTS `avoir_b` (
  `idB` int(11) DEFAULT NULL,
  `id_menu` int(11) DEFAULT NULL,
  KEY `idB` (`idB`),
  KEY `id_menu` (`id_menu`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `avoir_p`
--

DROP TABLE IF EXISTS `avoir_p`;
CREATE TABLE IF NOT EXISTS `avoir_p` (
  `idp` int(11) DEFAULT NULL,
  `id_menu` int(11) DEFAULT NULL,
  KEY `idp` (`idp`),
  KEY `id_menu` (`id_menu`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `billet_avion`
--

DROP TABLE IF EXISTS `billet_avion`;
CREATE TABLE IF NOT EXISTS `billet_avion` (
  `id_billetA` int(11) NOT NULL,
  `id_utilisateur` int(11) DEFAULT NULL,
  `nom_compagnie` varchar(255) DEFAULT NULL,
  `date_aller` date DEFAULT NULL,
  `date_retour` date DEFAULT NULL,
  `heure_D` time DEFAULT NULL,
  `heure_A` time DEFAULT NULL,
  `prix` decimal(10,2) DEFAULT NULL,
  `num_seat` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_billetA`),
  KEY `id_utilisateur` (`id_utilisateur`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `billet_train`
--

DROP TABLE IF EXISTS `billet_train`;
CREATE TABLE IF NOT EXISTS `billet_train` (
  `id_billetT` int(11) NOT NULL,
  `id_utilisateur` int(11) DEFAULT NULL,
  `nom_compagnie` varchar(255) DEFAULT NULL,
  `date_aller` date DEFAULT NULL,
  `date_retour` date DEFAULT NULL,
  `heure_D` time DEFAULT NULL,
  `heure_A` time DEFAULT NULL,
  `prix` decimal(10,2) DEFAULT NULL,
  `num_seat` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_billetT`),
  KEY `id_utilisateur` (`id_utilisateur`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `boissons`
--

DROP TABLE IF EXISTS `boissons`;
CREATE TABLE IF NOT EXISTS `boissons` (
  `idB` int(11) NOT NULL,
  `libelle` varchar(255) DEFAULT NULL,
  `prix` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`idB`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `budgets`
--

DROP TABLE IF EXISTS `budgets`;
CREATE TABLE IF NOT EXISTS `budgets` (
  `id_budget` int(11) NOT NULL,
  `budget_g` decimal(10,2) DEFAULT NULL,
  `budget_r` decimal(10,2) DEFAULT NULL,
  `budget_h` decimal(10,2) DEFAULT NULL,
  `budget_a` decimal(10,2) DEFAULT NULL,
  `budget_t` decimal(10,2) DEFAULT NULL,
  `budget_e` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id_budget`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `chambres`
--

DROP TABLE IF EXISTS `chambres`;
CREATE TABLE IF NOT EXISTS `chambres` (
  `id_chambre` int(11) NOT NULL,
  `prix` decimal(10,2) DEFAULT NULL,
  `id_hotel` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_chambre`),
  KEY `id_hotel` (`id_hotel`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `hotels`
--

DROP TABLE IF EXISTS `hotels`;
CREATE TABLE IF NOT EXISTS `hotels` (
  `id_hotel` int(11) NOT NULL,
  `id_A` int(11) DEFAULT NULL,
  `nb_chambres` int(11) DEFAULT NULL,
  `nb_chambres_dispo` int(11) DEFAULT NULL,
  `nb_etoiles` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_hotel`),
  KEY `id_A` (`id_A`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `logements`
--

DROP TABLE IF EXISTS `logements`;
CREATE TABLE IF NOT EXISTS `logements` (
  `id_logement` int(11) NOT NULL,
  `id_A` int(11) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `nb_p` int(11) DEFAULT NULL,
  `nb_m2` decimal(10,2) DEFAULT NULL,
  `description` text,
  `prix` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id_logement`),
  KEY `id_A` (`id_A`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `loisirs`
--

DROP TABLE IF EXISTS `loisirs`;
CREATE TABLE IF NOT EXISTS `loisirs` (
  `idL` int(11) NOT NULL,
  `libelle` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idL`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `menus`
--

DROP TABLE IF EXISTS `menus`;
CREATE TABLE IF NOT EXISTS `menus` (
  `idMenu` int(11) NOT NULL,
  PRIMARY KEY (`idMenu`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `photos`
--

DROP TABLE IF EXISTS `photos`;
CREATE TABLE IF NOT EXISTS `photos` (
  `id_photo` int(11) NOT NULL,
  `Format_p` varchar(255) DEFAULT NULL,
  `texte` varchar(255) DEFAULT NULL,
  `date_p` date DEFAULT NULL,
  PRIMARY KEY (`id_photo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `plats`
--

DROP TABLE IF EXISTS `plats`;
CREATE TABLE IF NOT EXISTS `plats` (
  `idP` int(11) NOT NULL,
  `libelle` varchar(20) DEFAULT NULL,
  `prix` int(11) NOT NULL,
  PRIMARY KEY (`idP`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `posseder_l`
--

DROP TABLE IF EXISTS `posseder_l`;
CREATE TABLE IF NOT EXISTS `posseder_l` (
  `idL` int(11) DEFAULT NULL,
  `id_Hotel` int(11) DEFAULT NULL,
  `dispo_L` tinyint(1) DEFAULT NULL,
  `prix` decimal(10,2) DEFAULT NULL,
  KEY `idL` (`idL`),
  KEY `id_Hotel` (`id_Hotel`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `posseder_s`
--

DROP TABLE IF EXISTS `posseder_s`;
CREATE TABLE IF NOT EXISTS `posseder_s` (
  `idS` int(11) DEFAULT NULL,
  `id_Hotel` int(11) DEFAULT NULL,
  `dispo_s` tinyint(1) DEFAULT NULL,
  KEY `idS` (`idS`),
  KEY `id_Hotel` (`id_Hotel`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `reserver_a`
--

DROP TABLE IF EXISTS `reserver_a`;
CREATE TABLE IF NOT EXISTS `reserver_a` (
  `Id_utilisateur` int(11) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `nb_personnes` int(11) DEFAULT NULL,
  KEY `Id_utilisateur` (`Id_utilisateur`),
  KEY `numero` (`numero`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `reserver_c`
--

DROP TABLE IF EXISTS `reserver_c`;
CREATE TABLE IF NOT EXISTS `reserver_c` (
  `id_utilisateur` int(11) DEFAULT NULL,
  `id_c` int(11) DEFAULT NULL,
  `prix` decimal(10,2) DEFAULT NULL,
  `nb_chambre` int(11) DEFAULT NULL,
  `type_c` varchar(255) DEFAULT NULL,
  `date_a` date DEFAULT NULL,
  `date_s` date DEFAULT NULL,
  KEY `id_utilisateur` (`id_utilisateur`),
  KEY `id_c` (`id_c`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `reserver_log`
--

DROP TABLE IF EXISTS `reserver_log`;
CREATE TABLE IF NOT EXISTS `reserver_log` (
  `id_utilisateur` int(11) DEFAULT NULL,
  `id_logement` int(11) DEFAULT NULL,
  `date_arrive` date DEFAULT NULL,
  `date_sortie` date DEFAULT NULL,
  `nb_personnes` int(11) DEFAULT NULL,
  KEY `id_utilisateur` (`id_utilisateur`),
  KEY `id_logement` (`id_logement`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `reserver_r`
--

DROP TABLE IF EXISTS `reserver_r`;
CREATE TABLE IF NOT EXISTS `reserver_r` (
  `id_utilisateur` int(11) DEFAULT NULL,
  `idR` int(11) DEFAULT NULL,
  `nb_personnes` int(11) DEFAULT NULL,
  KEY `id_utilisateur` (`id_utilisateur`),
  KEY `idR` (`idR`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `restaurants`
--

DROP TABLE IF EXISTS `restaurants`;
CREATE TABLE IF NOT EXISTS `restaurants` (
  `idR` int(11) NOT NULL,
  `nom_R` varchar(255) DEFAULT NULL,
  `etoiles` int(11) DEFAULT NULL,
  `id_A` int(11) DEFAULT NULL,
  `id_avis` int(11) DEFAULT NULL,
  `id_Menu` int(11) DEFAULT NULL,
  PRIMARY KEY (`idR`),
  KEY `id_A` (`id_A`),
  KEY `id_avis` (`id_avis`),
  KEY `id_Menu` (`id_Menu`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `idS` int(11) NOT NULL,
  `libelle` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idS`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `transport_urbain`
--

DROP TABLE IF EXISTS `transport_urbain`;
CREATE TABLE IF NOT EXISTS `transport_urbain` (
  `id_Tb` int(11) NOT NULL,
  `id_utilisateur` int(11) DEFAULT NULL,
  `nom_compagnie` varchar(255) DEFAULT NULL,
  `horaires` time DEFAULT NULL,
  PRIMARY KEY (`id_Tb`),
  KEY `id_utilisateur` (`id_utilisateur`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `Id_utilisateur` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mdp` varchar(255) DEFAULT NULL,
  `idbudget` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id_utilisateur`),
  KEY `idbudget` (`idbudget`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `videos`
--

DROP TABLE IF EXISTS `videos`;
CREATE TABLE IF NOT EXISTS `videos` (
  `id_Video` int(11) NOT NULL,
  `Format_v` varchar(255) DEFAULT NULL,
  `texte` varchar(255) DEFAULT NULL,
  `date_v` date DEFAULT NULL,
  PRIMARY KEY (`id_Video`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
