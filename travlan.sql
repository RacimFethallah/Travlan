-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2023 at 12:45 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travlan`
--

-- --------------------------------------------------------

--
-- Table structure for table `activites`
--

CREATE TABLE `activites` (
  `numero` int(11) NOT NULL,
  `nom_A` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `tarif_PP` decimal(10,2) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `categorie` varchar(255) DEFAULT NULL,
  `tarif_TT` decimal(10,2) DEFAULT NULL,
  `id_A` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `avis`
--

CREATE TABLE `avis` (
  `id_Avis` int(11) NOT NULL,
  `Rating` int(11) DEFAULT NULL,
  `texte` varchar(255) DEFAULT NULL,
  `Date_a` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `avoir_b`
--

CREATE TABLE `avoir_b` (
  `idB` int(11) DEFAULT NULL,
  `id_menu` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `avoir_p`
--

CREATE TABLE `avoir_p` (
  `idp` int(11) DEFAULT NULL,
  `id_menu` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `billet_avion`
--

CREATE TABLE `billet_avion` (
  `id_billetA` int(11) NOT NULL,
  `id_utilisateur` int(11) DEFAULT NULL,
  `nom_compagnie` varchar(255) DEFAULT NULL,
  `date_aller` date DEFAULT NULL,
  `date_retour` date DEFAULT NULL,
  `heure_D` time DEFAULT NULL,
  `heure_A` time DEFAULT NULL,
  `prix` decimal(10,2) DEFAULT NULL,
  `num_seat` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `billet_train`
--

CREATE TABLE `billet_train` (
  `id_billetT` int(11) NOT NULL,
  `id_utilisateur` int(11) DEFAULT NULL,
  `nom_compagnie` varchar(255) DEFAULT NULL,
  `date_aller` date DEFAULT NULL,
  `date_retour` date DEFAULT NULL,
  `heure_D` time DEFAULT NULL,
  `heure_A` time DEFAULT NULL,
  `prix` decimal(10,2) DEFAULT NULL,
  `num_seat` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `boissons`
--

CREATE TABLE `boissons` (
  `idB` int(11) NOT NULL,
  `libelle` varchar(255) DEFAULT NULL,
  `prix` decimal(10,2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `budgets`
--

CREATE TABLE `budgets` (
  `id_budget` int(11) NOT NULL,
  `budget_g` decimal(10,2) DEFAULT NULL,
  `budget_r` decimal(10,2) DEFAULT NULL,
  `budget_h` decimal(10,2) DEFAULT NULL,
  `budget_a` decimal(10,2) DEFAULT NULL,
  `budget_t` decimal(10,2) DEFAULT NULL,
  `budget_e` decimal(10,2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chambres`
--

CREATE TABLE `chambres` (
  `id_chambre` int(11) NOT NULL,
  `prix` decimal(10,2) DEFAULT NULL,
  `id_hotel` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `destinations`
--

CREATE TABLE `destinations` (
  `id` int(11) NOT NULL,
  `type` varchar(50) DEFAULT NULL,
  `nom` varchar(100) DEFAULT NULL,
  `parentID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `destinations`
--

INSERT INTO `destinations` (`id`, `type`, `nom`, `parentID`) VALUES
(1, 'pays', 'France', NULL),
(2, 'pays', 'Italie', NULL),
(3, 'pays', 'Espagne', NULL),
(4, 'pays', 'États-Unis', NULL),
(5, 'pays', 'Allemagne', NULL),
(6, 'pays', 'Japon', NULL),
(7, 'pays', 'Australie', NULL),
(8, 'pays', 'Brésil', NULL),
(9, 'pays', 'Canada', NULL),
(10, 'pays', 'Chine', NULL),
(11, 'ville', 'Paris', 1),
(12, 'ville', 'Nice', 1),
(13, 'ville', 'Marseille', 1),
(14, 'ville', 'Lyon', 1),
(15, 'ville', 'Bordeaux', 1),
(16, 'ville', 'Rome', 2),
(17, 'ville', 'Venise', 2),
(18, 'ville', 'Florence', 2),
(19, 'ville', 'Milan', 2),
(20, 'ville', 'Naples', 2),
(21, 'ville', 'Barcelone', 3),
(22, 'ville', 'Madrid', 3),
(23, 'ville', 'Séville', 3),
(24, 'ville', 'Valence', 3),
(25, 'ville', 'Grenade', 3),
(26, 'ville', 'New York', 4),
(27, 'ville', 'Los Angeles', 4),
(28, 'ville', 'Chicago', 4),
(29, 'ville', 'San Francisco', 4),
(30, 'ville', 'Miami', 4),
(31, 'ville', 'Berlin', 5),
(32, 'ville', 'Munich', 5),
(33, 'ville', 'Hambourg', 5),
(34, 'ville', 'Cologne', 5),
(35, 'ville', 'Francfort', 5),
(36, 'ville', 'Tokyo', 6),
(37, 'ville', 'Osaka', 6),
(38, 'ville', 'Kyoto', 6),
(39, 'ville', 'Hiroshima', 6),
(40, 'ville', 'Sapporo', 6),
(41, 'ville', 'Sydney', 7),
(42, 'ville', 'Melbourne', 7),
(43, 'ville', 'Brisbane', 7),
(44, 'ville', 'Perth', 7),
(45, 'ville', 'Adelaide', 7),
(46, 'ville', 'Rio de Janeiro', 8),
(47, 'ville', 'São Paulo', 8),
(48, 'ville', 'Salvador', 8),
(49, 'ville', 'Brasília', 8),
(50, 'ville', 'Fortaleza', 8),
(51, 'ville', 'Montréal', 9),
(52, 'ville', 'Toronto', 9),
(53, 'ville', 'Vancouver', 9),
(54, 'ville', 'Calgary', 9),
(55, 'ville', 'Québec', 9),
(56, 'ville', 'Pékin', 10),
(57, 'ville', 'Shanghai', 10),
(58, 'ville', 'Hong Kong', 10),
(59, 'ville', 'Canton', 10),
(60, 'ville', 'Xi\'an', 10);

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `destination_id` int(11) DEFAULT NULL,
  `rating` decimal(3,2) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `urlimg` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`id`, `nom`, `destination_id`, `rating`, `price`, `description`, `urlimg`) VALUES
(1, 'Hôtel Ritz Paris', 11, 4.80, 800.00, 'Un hôtel de luxe emblématique situé sur la Place Vendôme.', 'https://upload.wikimedia.org/wikipedia/commons/1/17/Hotel_Ritz_Paris.jpg'),
(2, 'Hôtel Plaza Athénée', 11, 4.70, 700.00, 'Un hôtel de renommée mondiale sur l\'avenue Montaigne.', 'https://upload.wikimedia.org/wikipedia/commons/3/36/Paris_avenue_montaigne_plaza_athena.1.jpg'),
(3, 'Hôtel Le Meurice', 11, 4.60, 650.00, 'Un palace historique avec vue sur le jardin des Tuileries.', 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/ba/H%C3%B4tel_Le_Meurice.jpg/390px-H%C3%B4tel_Le_Meurice.jpg'),
(4, 'Hôtel de Crillon', 11, 4.70, 750.00, 'Un hôtel de luxe somptueux sur la place de la Concorde.', 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f9/H%C3%B4tel_de_Crillon_25_08_2007_n3.jpg/390px-H%C3%B4tel_de_Crillon_25_08_2007_n3.jpg'),
(5, 'Hôtel Lutetia', 11, 4.50, 550.00, 'Un hôtel emblématique de la Rive Gauche, près de Saint-Germain-des-Prés.', 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/a0/Hotel_Lutetia_Avril_2021.jpg/390px-Hotel_Lutetia_Avril_2021.jpg'),
(6, 'Hôtel Negresco', 12, 4.50, 250.00, 'Un hôtel de luxe emblématique de Nice.', 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/H%C3%B4tel_5_%C3%A9toiles_Le_Negresco.jpg/375px-H%C3%B4tel_5_%C3%A9toiles_Le_Negresco.jpg'),
(8, 'Hôtel La Perouse', 12, 4.00, 200.00, 'Un hôtel avec vue panoramique sur la vieille ville.', 'https://upload.wikimedia.org/wikipedia/fr/thumb/9/95/Wfr0009-Nantes_HotelLaPerouse_50789.JPG/390px-Wfr0009-Nantes_HotelLaPerouse_50789.JPG'),
(9, 'Hôtel West End', 12, 3.80, 150.00, 'Un hôtel de charme en bord de mer.', 'https://images.travel-cdn.com/image/upload/s--j7aUm9nW--/c_limit,e_improve,fl_lossy.immutable_cache,h_940,q_auto:good,w_940/v1526363976/b1c5e54fc7f9d1693107aa05c3a6a2126dba3ec2?atc=bc5da95f'),
(10, 'Hôtel Aston La Scala', 12, 4.10, 170.00, 'Un hôtel élégant au cœur de la ville.', 'https://www.britishairways.com/badp/static/external/FR-NCE-2175300/11_FR-NCE-2175300-HTLALS-H1601.jpeg'),
(16, 'Sofitel Marseille Vieux-Port', 13, 4.50, 200.00, 'Cet hôtel haut de gamme est installé dans un grand bâtiment surplombant le Vieux-Port et se trouve à une minute à pied de la station de métro la plus proche.', 'https://www.sofitel-marseille-vieuxport.com/wp-content/uploads/2019/12/sofitel-marseille-vieux-port-rooms-and-suites-1.jpg'),
(17, 'InterContinental Marseille - Hotel Dieu', 13, 4.60, 300.00, 'Installé dans un grand ancien hôpital donnant sur la marina du Vieux-Port de Marseille.', 'https://www.ihg.com/content/dam/etc/media_library/br/0/br/marseille/hotel-dieu-marseille-1x1.jpg'),
(18, 'Grand Hotel Beauvau Marseille Vieux Port - MGallery', 13, 4.30, 150.00, 'Cet hôtel haut de gamme est installé dans un grand bâtiment surplombant le Vieux-Port et se trouve à une minute à pied de la station de métro la plus proche.', 'https://all.accor.com/hotel/1293/gallery.shtml#section-0'),
(19, 'Radisson Blu Hotel Marseille Vieux Port', 13, 4.20, 120.00, 'Cet hôtel moderne est installé dans un bâtiment élégant surplombant le Vieux-Port et se trouve à une minute à pied de la station de métro la plus proche.', 'https://www.radissonhotels.com/assets/bltadaa8a6b7d8c9f9e/radisson-blu-marseille-vieux-port-hotel-exterior-night.jpg'),
(21, 'Hotel de la Presse', 15, 3.90, 100.00, 'Cet hôtel moderne est installé dans un bâtiment élégant surplombant le Vieux-Port et se trouve à une minute à pied de la station de métro la plus proche.', 'https://www.hotel-de-la-presse.com/wp-content/uploads/2019/12/hotel-de-la-presse-bordeaux-rooms-and-suites-1.jpg'),
(22, 'Hotel des Quinconces', 15, 3.80, 120.00, 'Cet hôtel moderne est installé dans un bâtiment élégant surplombant le Vieux-Port et se trouve à une minute à pied de la station de métro la plus proche.', 'https://www.hotel-des-quinconces.com/wp-content/uploads/2019/12/hotel-des-quinconces-bordeaux-rooms-and-suites-1.jpg'),
(23, 'Le Boutique Hotel Bordeaux', 15, 3.70, 150.00, 'Cet hôtel moderne est installé dans un bâtiment élégant surplombant le Vieux-Port et se trouve à une minute à pied de la station de métro la plus proche.', 'https://www.hotel-le-boutique.com/wp-content/uploads/2019/12/le-boutique-hotel-bordeaux-rooms-and-suites-1.jpg'),
(24, 'La Maison Bord\'eaux', 15, 3.60, 200.00, 'Cet hôtel moderne est installé dans un bâtiment élégant surplombant le Vieux-Port et se trouve à une minute à pied de la station de métro la plus proche.', 'https://www.lamaisonbord-eaux.com/wp-content/uploads/2019/12/la-maison-bordeaux-rooms-and-suites-1.jpg'),
(25, 'Yndo Hotel Bordeaux', 15, 3.50, 250.00, 'Cet hôtel moderne est installé dans un bâtiment élégant surplombant le Vieux-Port et se trouve à une minute à pied de la station de métro la plus proche.', 'https://www.yndohotelbordeaux.com/wp-content/uploads/2019/12/yndo-hotel-bordeaux-rooms-and-suites-1.jpg'),
(26, 'Hotel Artemide', 16, 4.80, 200.00, 'Cet hôtel haut de gamme se trouve à une minute à pied de la station de métro Repubblica et à 10 minutes à pied du Colisée.', 'https://www.hotelartemide.it/'),
(27, 'Hotel Eden', 16, 4.90, 500.00, 'Cet hôtel de luxe est situé au cœur de Rome et offre une vue imprenable sur la ville.', 'https://www.dorchestercollection.com/en/rome/hotel-eden/'),
(28, 'Hotel de Russie', 16, 4.70, 400.00, 'Cet hôtel élégant est situé au cœur de Rome et offre une vue imprenable sur la ville.', 'https://www.roccofortehotels.com/hotels-and-resorts/hotel-de-russie/'),
(29, 'Grand Hotel de la Minerve', 16, 4.50, 300.00, 'Cet hôtel historique est situé au cœur de Rome et offre une vue imprenable sur la ville.', 'https://www.grandhoteldelaminerve.com/'),
(30, 'Hotel Splendide Royal', 16, 4.60, 350.00, 'Cet hôtel de luxe est situé au cœur de Rome et offre une vue imprenable sur la ville.', 'https://www.splendideroyal.com/'),
(31, 'Hotel Danieli', 17, 4.70, 600.00, 'Cet hôtel de luxe est situé dans un palais vénitien historique et offre une vue imprenable sur la ville.', 'https://www.marriott.com/hotels/travel/vce-luxury-collection-hotel-danieli-venice/'),
(32, 'Belmond Hotel Cipriani', 17, 4.80, 800.00, 'Cet hôtel de luxe est situé sur l\'île de Giudecca et offre une vue imprenable sur la ville.', 'https://www.belmond.com/hotels/europe/italy/venice/belmond-hotel-cipriani/'),
(33, 'Aman Venice', 17, 4.90, 1000.00, 'Cet hôtel de luxe est situé dans un palais vénitien historique et offre une vue imprenable sur le Grand Canal.', 'https://www.aman.com/resorts/aman-venice'),
(34, 'Four Seasons Hotel Firenze', 18, 4.80, 700.00, 'Cet hôtel de luxe est situé dans un palais florentin historique et offre une vue imprenable sur la ville.', 'https://www.fourseasons.com/florence/'),
(35, 'Belmond Villa San Michele', 18, 4.90, 800.00, 'Cet hôtel de luxe est situé dans une villa florentine historique et offre une vue imprenable sur la ville.', 'https://www.belmond.com/hotels/europe/italy/florence/belmond-villa-san-michele/'),
(36, 'Portrait Firenze', 18, 4.90, 900.00, 'Cet hôtel de luxe est situé sur les rives de l\'Arno et offre une vue imprenable sur le Ponte Vecchio.', 'https://www.lungarnocollection.com/portrait-firenze'),
(37, 'Hotel Paris', 18, 3.50, 100.00, 'Cet hôtel économique est situé dans le centre-ville de Florence et offre un accès facile aux principales attractions touristiques.', 'https://www.hotelparisflorence.it/'),
(38, 'Hotel Palazzo Vecchio', 18, 3.80, 150.00, 'Cet hôtel économique est situé dans le centre-ville de Florence et offre un accès facile aux principales attractions touristiques.', 'https://www.hotelpalazzovecchio.it/'),
(39, 'Hotel La Fortezza', 18, 3.20, 80.00, 'Cet hôtel économique est situé dans le centre-ville de Florence et offre un accès facile aux principales attractions touristiques.', 'https://www.hotellafortezza.it/'),
(42, 'Bulgari Hotel Milano', 19, 4.90, 1000.00, 'Cet hôtel de luxe est situé dans un bâtiment historique milanais et offre une vue imprenable sur la ville.', 'https://www.bulgarihotels.com/en_US/milan/overview'),
(43, 'Armani Hotel Milano', 19, 4.80, 800.00, 'Cet hôtel de luxe est situé dans un bâtiment historique milanais et offre une vue imprenable sur la ville.', 'https://www.armanihotelmilano.com/'),
(44, 'Park Hyatt Milan', 19, 4.70, 600.00, 'Cet hôtel de luxe est situé dans un bâtiment historique milanais et offre une vue imprenable sur la ville.', 'https://www.hyatt.com/en-US/hotel/italy/park-hyatt-milan/milan'),
(45, 'Hotel Bernina', 19, 3.50, 100.00, 'Cet hôtel économique est situé dans le centre-ville de Milan et offre un accès facile aux principales attractions touristiques.', 'https://www.hotelbernina.com/'),
(46, 'Hotel Sanpi Milano', 19, 3.80, 150.00, 'Cet hôtel économique est situé dans le centre-ville de Milan et offre un accès facile aux principales attractions touristiques.', 'https://www.hotelsanpimilano.it/'),
(47, 'Hotel Berna', 19, 3.20, 80.00, 'Cet hôtel économique est situé dans le centre-ville de Milan et offre un accès facile aux principales attractions touristiques.', 'https://www.hotelberna.com/'),
(48, 'Grand Hotel Vesuvio', 20, 4.70, 600.00, 'Cet hôtel de luxe est situé sur le front de mer de Naples et offre une vue imprenable sur la baie.', 'https://www.grandhotelvesuvio.it/'),
(49, 'Romeo Hotel', 20, 4.80, 800.00, 'Cet hôtel de luxe est situé dans le centre-ville de Naples et offre une vue imprenable sur la ville.', 'https://www.romeohotel.it/'),
(50, 'Hotel Santa Lucia', 20, 4.50, 300.00, 'Cet hôtel historique est situé dans le centre-ville de Naples et offre une vue imprenable sur la baie.', 'https://www.hotelsantalucia.it/'),
(51, 'Hotel Piazza Bellini', 20, 3.50, 100.00, 'Cet hôtel économique est situé dans le centre-ville de Naples et offre un accès facile aux principales attractions touristiques.', 'https://www.hotelpiazzabellini.com/'),
(52, 'Hotel Arts Barcelona', 21, 5.00, 500.00, 'Un hôtel de luxe avec vue sur la mer Méditerranée.', 'https://www.hotelartsbarcelona.com/'),
(53, 'W Barcelona', 21, 5.00, 400.00, 'Un hôtel de luxe avec une vue imprenable sur la plage de Barcelone.', 'https://www.marriott.com/hotels/travel/bcnwh-w-barcelona/'),
(54, 'Hotel Casa Fuster', 21, 3.00, 200.00, 'Un hôtel de charme situé dans le quartier de l\'Eixample.', 'https://www.hotelcasafuster.com/fr/'),
(55, 'Hotel Ritz Madrid', 22, 5.00, 500.00, 'Un hôtel de luxe situé dans le centre de Madrid.', 'https://www.ritzcarlton.com/en/hotels/spain/madrid'),
(56, 'Gran Meliá Palacio de los Duques', 22, 5.00, 400.00, 'Un hôtel de luxe situé dans le quartier de la Gran Vía.', 'https://www.melia.com/es/hoteles/espana/madrid/gran-melia-palacio-de-los-duques/index.htm'),
(57, 'Hotel Villa Magna', 22, 4.00, 200.00, 'Un hôtel de charme situé dans le quartier de Salamanca.', 'https://www.hotelvillamagna.es/'),
(58, 'Hotel Wellington Madrid', 22, 4.00, 300.00, 'Un hôtel de charme situé dans le quartier de Salamanca.', 'https://www.hotel-wellington.com/'),
(59, 'Hotel Alfonso XIII', 23, 5.00, 500.00, 'Un hôtel de luxe situé dans le centre de Séville.', 'https://www.marriott.com/hotels/travel/svqwi-hotel-alfonso-xiii-a-luxury-collection-hotel-seville/'),
(60, 'Gran Meliá Colón', 23, 5.00, 400.00, 'Un hôtel de luxe situé dans le quartier de la Judería.', 'https://www.melia.com/es/hoteles/espana/sevilla/gran-melia-colon/index.htm'),
(61, 'Hotel Casa 1800 Sevilla', 23, 4.00, 200.00, 'Un hôtel de charme situé dans le quartier de Santa Cruz.', 'https://www.hotelcasa1800sevilla.com/'),
(62, 'Hotel Doña Maria', 23, 3.00, 300.00, 'Un hôtel de charme situé dans le quartier de Santa Cruz.', 'https://www.hoteldonamaria.com/'),
(63, 'Hotel Murillo', 23, 3.00, 100.00, 'Un hôtel économique situé dans le quartier de Santa Cruz.', 'https://www.hotelmurillo.com/'),
(64, 'Hotel Las Arenas Balneario Resort', 24, 5.00, 500.00, 'Un hôtel de luxe situé sur la plage de Las Arenas.', 'https://www.hotelvalencialasarenas.com/'),
(65, 'The Westin Valencia', 24, 5.00, 400.00, 'Un hôtel de luxe situé dans le quartier de l\'Eixample.', 'https://www.marriott.com/hotels/travel/vlcwi-the-westin-valencia/'),
(66, 'Hotel Hospes Palau de la Mar', 24, 4.00, 200.00, 'Un hôtel de charme situé dans le quartier de l\'Eixample.', 'https://www.hospes.com/hotel-palau-de-la-mar/'),
(67, 'Hotel Ad Hoc Monumental', 24, 3.00, 300.00, 'Un hôtel de charme situé dans le quartier de la Xerea.', 'https://www.adhochoteles.com/hotel-ad-hoc-monumental/'),
(68, 'Eurostars Gran Vía Granada', 25, 5.00, 500.00, 'Un hôtel de luxe situé dans le quartier de la Gran Vía.', 'https://www.eurostarshotels.com/eurostars-gran-via-granada.html'),
(69, 'Hospes Palacio de los Patos', 25, 5.00, 400.00, 'Un hôtel de luxe situé dans le quartier de la Chana.', 'https://www.hospes.com/hotel-palacio-de-los-patos/'),
(70, 'Hotel Casa 1800 Granada', 25, 4.00, 200.00, 'Un hôtel de charme situé dans le quartier de l\'Albaicín.', 'https://www.hotelcasa1800granada.com/'),
(71, 'Hotel Alhambra Palace', 25, 3.00, 300.00, 'Un hôtel de charme situé sur la colline de l\'Alhambra.', 'https://www.h-alhambrapalace.com/'),
(72, 'The Plaza', 26, 5.00, 500.00, 'Le Plaza est un hôtel de luxe situé dans le quartier de Midtown à New York. Il a été construit en 1907 et est considéré comme l\'un des hôtels les plus célèbres de la ville.', 'https://www.theplazany.com/'),
(73, 'The Ritz-Carlton New York', 26, 5.00, 600.00, 'Le Ritz-Carlton New York est un hôtel de luxe situé dans le quartier de Battery Park à New York. Il offre une vue imprenable sur la Statue de la Liberté et Ellis Island.', 'https://www.ritzcarlton.com/en/hotels/new-york/new-york-battery-park'),
(74, 'The Peninsula New York', 26, 5.00, 550.00, 'Le Peninsula New York est un hôtel de luxe situé dans le quartier de Midtown à New York. Il a été construit en 1905 et est considéré comme l\'un des hôtels les plus prestigieux de la ville.', 'https://www.peninsula.com/en/new-york/5-star-luxury-hotel-midtown-nyc'),
(75, 'The Waldorf Astoria', 26, 4.00, 400.00, 'Le Waldorf Astoria est un hôtel historique situé dans le quartier de Midtown à New York. Il a été construit en 1931 et est considéré comme l\'un des hôtels les plus célèbres de la ville.', 'https://waldorfastoria3.hilton.com/en/hotels/new-york/waldorf-astoria-new-york-NYCWAWA/index.html'),
(76, 'The Roosevelt Hotel', 26, 3.00, 300.00, 'Le Roosevelt Hotel est un hôtel historique situé dans le quartier de Midtown à New York. Il a été construit en 1924 et est considéré comme l\'un des hôtels les plus célèbres de la ville.', 'https://www.rooseveltnyc.com/'),
(77, 'The Plaza Hotel', 26, 4.50, 500.00, 'Un hôtel de luxe emblématique à Manhattan', 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/The_Plaza_Hotel%2C_New_York_City.jpg/800px-The_Plaza_Hotel%2C_New_York_City.jpg'),
(78, 'The Ritz-Carlton New York Central Park', 26, 4.60, 700.00, 'Un hôtel raffiné avec vue sur Central Park', 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/0f/Ritz_Carlton_New_York_Central_Park.jpg/800px-Ritz_Carlton_New_York_Central_Park.jpg'),
(79, 'The Standard High Line', 26, 4.30, 300.00, 'Un hôtel branché avec des vues panoramiques sur la ville et la rivière', 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/7b/The_Standard_High_Line.jpg/800px-The_Standard_High_Line.jpg'),
(80, 'The Pod Hotel Brooklyn', 26, 4.10, 100.00, 'Un hôtel économique avec des chambres compactes et une terrasse sur le toit', 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/8c/Pod_Hotel_Brooklyn.jpg/800px-Pod_Hotel_Brooklyn.jpg'),
(81, 'The Beverly Hills Hotel', 27, 4.80, 795.00, 'Un hôtel légendaire avec une histoire glamour et un café au bord de la piscine', 'https://thumbnails.trvl-media.com/0oqfZw7p1yJ1tZ0n5lL9tXg7Y9c=/773x530/smart/filters:quality(60)/images.trvl-media.com/hotels/1000000/10000/400/398/398_114_z.jpg'),
(82, 'The Hollywood Roosevelt', 27, 4.20, 249.00, 'Un hôtel historique avec une piscine sur le toit et une boîte de nuit', 'https://thumbnails.trvl-media.com/3kQ6wQ2sMnW8aGZlFzXfVYiHlKU=/773x530/smart/filters:quality(60)/images.trvl-media.com/hotels/1000000/20000/19700/19690/19690_161_z.jpg'),
(83, 'The LINE Hotel', 27, 4.10, 179.00, 'Un hôtel branché avec un restaurant coréen et un salon en verrière', 'https://thumbnails.trvl-media.com/5zGmL3yqWcZvFQgjRd9Yb8yBxuI=/773x530/smart/filters:quality(60)/images.trvl-media.com/hotels/1000000/50000/40500/40494/40494_168_z.jpg'),
(84, 'The Mayfair Hotel Los Angeles', 27, 3.80, 119.00, 'Un hôtel de charme avec une galerie d\'art contemporain et un lieu de musique live', 'https://thumbnails.trvl-media.com/Qa6UO1sXsTJjGKjJqPwTm2fIuOc=/773x530/smart/filters:quality(60)/images.trvl-media.com/hotels/1000000/20000/19200/19167/cb5e5a5e_z.jpg'),
(85, 'Viceroy Chicago', 28, 4.70, 229.00, 'Un hôtel élégant avec une piscine sur le toit et un restaurant étoilé au Michelin', 'https://thumbnails.trvl-media.com/0oqfZw7p1yJ1tZ0n5lL9tXg7Y9c=/773x530/smart/filters:quality(60)/images.trvl-media.com/hotels/2000000/1960000/1958900/1958893/1958893_114_z.jpg'),
(86, 'The Langham Chicago', 28, 4.90, 395.00, 'Un hôtel de luxe avec un spa et un emplacement au bord de la rivière', 'https://thumbnails.trvl-media.com/5zGmL3yqWcZvFQgjRd9Yb8yBxuI=/773x530/smart/filters:quality(60)/images.trvl-media.com/hotels/1000000/20000/19700/19690/19690_161_z.jpg'),
(87, 'The Robey Chicago', 28, 4.30, 159.00, 'Un hôtel chic avec un salon sur le toit et une ambiance vintage', 'https://thumbnails.trvl-media.com/Qa6UO1sXsTJjGKjJqPwTm2fIuOc=/773x530/smart/filters:quality(60)/images.trvl-media.com/hotels/1000000/50000/40500/40494/40494_168_z.jpg'),
(88, 'Freehand Chicago', 28, 4.10, 79.00, 'Un hôtel économique avec une cuisine commune et un bar à cocktails', 'https://thumbnails.trvl-media.com/cb5e5a5e_z.jpg'),
(89, 'Handlery Union Square Hotel', 29, 4.00, 202.00, 'Situé sur à Union Square à San Francisco, le Handlery Union Square Hotel se trouve à 5 minutes à pied du funiculaire de Powell Street. Great location, very friendly and accommodating staff. rooms were extremely clean with all facilities', 'https://www.booking.com/city/us/san-francisco.fr.html'),
(90, 'Riu Plaza Fisherman\'s Wharf', 29, 4.10, 236.00, 'Installé à moins de 10 minutes à pied de la jetée n° 39, l’Hotel Riu Plaza Fisherman\'s Wharf est un établissement non-fumeurs doté d\'une piscine extérieure. Great location, walking distance to Cable Car Trolley, muni transportation system, Pier 39. staff very friendly. Breakfast is very extensive in options.', 'https://www.booking.com/city/us/san-francisco.fr.html'),
(91, 'Grant Hotel', 29, 4.00, 125.00, 'Installé dans le centre-ville de San Francisco, à seulement 5 minutes à pied de Union Square, le Grant Hotel est un charmant établissement qui vous propose des hébergements dotés d\'une télévision par... The place was amazing, near to Union square for shops, supermarket and restaurants. The personnel always nice ! The free tea, coffee and some muffins, croissants … The bed was very confortable !', 'https://www.booking.com/city/us/san-francisco.fr.html'),
(92, 'Club Quarters Hotel Embarcadero', 29, 3.90, 144.00, 'Situé au cœur du quartier de la finance et des affaires de San Francisco, le Club Quarters Hotel Embarcadero, San Francisco vous propose des hébergements confortables dans une atmosphère de type club... Établissement très propre. excellent service des employés. Bien situé.', 'https://www.booking.com/city/us/san-francisco.fr.html'),
(93, 'Hampton Inn & Suites by Hilton Miami Downtown/Brickell', 30, 4.30, 177.00, 'Situé dans le centre-ville de Miami, le Hampton Inn vous accueille à 1 minute à pied de la station de métro gratuite Brickell Metromover. Excellent hôtel en plein downtown de Miami. Superbe chambre et salle de bain spacieux, propre et avec une literie impeccable.', 'https://www.booking.com/city/us/miami.fr.html'),
(94, 'Sleep Inn Miami Airport', 30, 3.40, 79.00, 'Les chambres du Sleep Inn Miami Airport sont équipées d’une cafetière. Les chambres comportent également du matériel de repassage et une radio. Everything. Great staff and the room was very clean and quiet. Washing machine and dryer excellent. A good breakfast and the shuttle service superb.', 'https://www.booking.com/city/us/miami.fr.html'),
(95, 'Clarion Inn & Suites Miami International Airport', 30, 3.10, 84.00, 'Le Clarion Inn & Suites Miami International Airport est situé à moins de 5 km de l\'aéroport international de Miami et à 12 km du centre-ville de Miami. Everything was good! Good job for your service guys!', 'https://www.booking.com/city/us/miami.fr.html'),
(96, 'Comfort Inn & Suites Miami International Airport', 30, 3.90, 94.00, 'Situé à Miami, à 7,9 km du stade de baseball LoanDepot Park, le Comfort Inn & Suites Miami International Airport propose des hébergements avec une piscine extérieure, un parking privé, une salle de... propre, calme et bien situé pour l’aéroport.', 'https://www.booking.com/city/us/miami.fr.html'),
(97, 'Schulz Hotel Berlin Wall at the East Side Gallery', 31, 4.20, 74.80, 'Le Schulz Hotel Berlin Wall at the East Side Gallery vous accueille dans le quartier berlinois branché de Friedrichshain, juste à côté de l’East Side Gallery. The location was amazing! Only 3 min walk from the train station. My daughter and I felt safe walking. There is East Side Mall in a ten min walk. Beds were comfortable.', 'https://www.booking.com/city/de/berlin.fr.html'),
(98, 'Park Inn by Radisson Berlin Alexanderplatz', 31, 3.60, 98.70, 'Le Park Inn by Radisson Berlin Alexanderplatz est un établissement 4 étoiles supérieur doté de 3 restaurants, d\'un spa et proposant des chambres climatisées avec une télévision à écran plat sur la... l’emplacement pour les visites et pour arriver de l’aéroport', 'https://www.booking.com/city/de/berlin.fr.html'),
(99, 'H2 Hotel Berlin-Alexanderplatz', 31, 4.10, 92.95, 'L’établissement H2 Hotel Berlin-Alexanderplatz est un hôtel moderne idéalement situé en plein cœur de Berlin, à seulement 3 minutes de marche de l’Alexanderplatz et de l’emblématique tour de... Proximité de tout Personnel disponible Lit confortable', 'https://www.booking.com/city/de/berlin.fr.html'),
(100, 'MEININGER Hotel Berlin Hauptbahnhof', 31, 3.70, 20.90, 'Le MEININGER Hotel Berlin Hauptbahnhof se trouve au cœur de Berlin, entre la gare centrale et le palais du Reichstag. Near the station. Good Breakfast.', 'https://www.booking.com/city/de/berlin.fr.html'),
(101, 'H2 Hotel München Olympiapark', 32, 4.15, 90.20, 'Le H2 Hotel München Olympiapark est situé dans le quartier de Milbertshofen-Am Hart à Munich, à 1,7 km du musée BMW et du centre d\'exposition BMW Welt, ainsi qu’à 2,5 km du Parc olympique de Munich. very easy to reach modern and eco environment nice breakfast', 'https://www.booking.com/city/de/munich.fr.html'),
(102, 'Bento Inn Munich', 32, 3.90, 13.50, 'Le Bento Inn Munich est situé à Munich, à 2,9 km du centre de congrès ICM (Internationales Congress Center München), et propose une salle de sport, un parking privé, un salon commun et une terrasse. L emplacement idéal pas de problème de parking et personnels très sympa.', 'https://www.booking.com/city/de/munich.fr.html'),
(103, 'Arthotel Munich', 32, 4.05, 74.00, 'L\'Arthotel Munich est un établissement 3 étoiles supérieur situé à 5 minutes à pied de la gare centrale de Munich et du site de l\'Oktoberfest. The location is great, close to THE central station. Some good bish shops also around. The room was perfectly sized, and with everything needed. Many good details are included. Breakfast superb!', 'https://www.booking.com/city/de/munich.fr.html'),
(104, 'a&o München Laim', 32, 3.30, 20.39, 'Bénéficiant d\'un emplacement idéal à proximité directe de la gare de Munich-Laim, l\'a&o München Laim propose des hébergements spacieux et lumineux à seulement 4 km du centre de Munich. Very nice and fresh room. We had the family room for 6 people and it was great!', 'https://www.booking.com/city/de/munich.fr.html'),
(105, 'a&o Hamburg City', 33, 3.15, 16.96, 'L’a&o Hamburg City se situe à 5 minutes de marche de la gare Berliner Tor et à seulement 1 arrêt de la gare centrale d’Hambourg. Il propose une réception ouverte 24h/24. L\'accueil sympa la chambre propre', 'https://www.booking.com/city/de/hamburg.fr.html'),
(106, 'Radisson Blu Hotel, Hamburg Airport', 33, 4.10, 169.90, 'Installé juste à côté des terminaux 1 et 2 de l’aéroport de Hambourg, le Radisson Blu Hotel, Hamburg Airport est un établissement 4 étoiles supérieur doté d’une connexion Wi-Fi gratuite dans... Best place to stay before an early flight. Fantastic beds - very comfy and huge. Big buthroom with a tab, spacious rooms, surep clean and quite despite the location. Diverse breakfast and very friendly stuff. And it takes 3 minutes to walk to departure terminal', 'https://www.booking.com/city/de/hamburg.fr.html'),
(107, 'prizeotel Hamburg-City', 33, 3.95, 65.14, 'Le Prizeotel Hamburg-City propose des chambres non-fumeurs modernes avec connexion Wi-Fi gratuite. Cet hôtel est situé dans le centre de Hambourg. Chambre agréable, bonne literie, douche de belle taille.', 'https://www.booking.com/city/de/hamburg.fr.html'),
(108, 'Barceló Hamburg', 33, 4.10, 125.30, 'Arborant un intérieur moderne, l\'hôtel 4 étoiles supérieur Barceló Hamburg propose un élégant restaurant, un bar du hall, ainsi qu\'un sauna et une salle de sport de qualité. The hotel is well located, close to the train and the U station.', 'https://www.booking.com/city/de/hamburg.fr.html'),
(109, 'a&o Hamburg City', 34, 3.15, 16.96, 'L’a&o Hamburg City se situe à 5 minutes de marche de la gare Berliner Tor et à seulement 1 arrêt de la gare centrale d’Hambourg. Il propose une réception ouverte 24h/24. L\'accueil sympa la chambre propre', 'https://www.booking.com/city/de/cologne.fr.html'),
(110, 'Radisson Blu Hotel Köln', 34, 4.15, 124.95, 'Situé dans le quartier de Deutz, à Cologne, le Radisson Blu Hotel Köln vous accueille à 5 minutes à pied de la Lanxess Arena et du parc des expositions KölnMesse. Très bel hôtel, calme, grand. Le petit déjeuner buffet excellent et de qualité. Le sauna parfait après une journée de shopping. La chambre spacieuse et confortable.', 'https://www.booking.com/city/de/cologne.fr.html'),
(111, 'prizeotel Hamburg-City', 34, 3.95, 65.14, 'Le Prizeotel Hamburg-City propose des chambres non-fumeurs modernes avec connexion Wi-Fi gratuite. Cet hôtel est situé dans le centre de Hambourg. Chambre agréable, bonne literie, douche de belle taille.', 'https://www.booking.com/city/de/cologne.fr.html'),
(112, 'Barceló Hamburg', 34, 4.10, 125.30, 'Arborant un intérieur moderne, l\'hôtel 4 étoiles supérieur Barceló Hamburg propose un élégant restaurant, un bar du hall, ainsi qu\'un sauna et une salle de sport de qualité. The hotel is well located, close to the train and the U station.', 'https://www.booking.com/city/de/cologne.fr.html'),
(113, 'Park Inn by Radisson Frankfurt Airport', 35, 4.00, 87.00, 'Situé à seulement 800 mètres du terminal 2 de l\'aéroport de Francfort, le Park Inn by Radisson Frankfurt Airport propose des chambres insonorisées dotées d\'une télévision connectée à écran LED. Chambre propre Petit déjeuner Personnelle', 'https://www.booking.com/city/de/frankfurt-am-main.fr.html'),
(114, 'Leonardo Royal Hotel Frankfurt', 35, 3.70, 66.10, 'Bénéficiant d\'un emplacement central dans le quartier animé de Sachsenhausen à Francfort, cet impressionnant gratte-ciel offre un niveau de confort haut de gamme et une vue magnifique sur les toits de... Friendly staff, got a free room upgrade, had a coffee machine in my bedroom, very good noise isolation', 'https://www.booking.com/city/de/frankfurt-am-main.fr.html'),
(115, 'a&o Frankfurt Galluswarte', 35, 3.20, 19.24, 'Située à Francfort, l\'auberge de jeunesse a&o Frankfurt Galluswarte propose une réception ouverte 24h/24, une bibliothèque et une connexion Wi-Fi gratuite. Everything was good but i need iron facility to press my clothes that was not available it should be there. Otherwise all things was good.', 'https://www.booking.com/city/de/frankfurt-am-main.fr.html'),
(116, 'Toyoko Inn Frankfurt am Main Hauptbahnhof', 35, 4.30, 52.00, 'Situé à Francfort-sur-le-Main, à moins de 500 mètres de la gare centrale de Francfort, le Toyoko Inn Frankfurt am Main Hauptbahnhof propose une terrasse, des chambres non-fumeurs... L\'emplacement très pratique.', 'https://www.booking.com/city/de/frankfurt-am-main.fr.html'),
(117, 'Park Hyatt Tokyo', 36, 4.70, 500.00, 'Un hôtel de luxe situé dans les 14 derniers étages d\'un gratte-ciel de 52 niveaux, offrant une vue panoramique à 360 degrés sur la ville effervescente et le mont Fuji. ', 'https://www.hyatt.com/content/dam/hyatt/hyattdam/images/2016/02/23/1106/Park-Hyatt-Tokyo-P011-Exterior.jpg/Park-Hyatt-Tokyo-P011-Exterior.16x9.jpg'),
(118, 'Shinjuku Granbell Hotel', 36, 4.20, 100.00, 'Un hôtel moderne et élégant situé dans le quartier animé de Shinjuku', 'https://cf.bstatic.com/xdata/images/hotel/max1024x768/10640900.jpg?k=0f1b8c1e3f9a8c0a5b5c0f7a7d8b1e0d9f3c2d6e3a9b8a2f7e2b3c3d0f8f1c6a&o=&hp=1'),
(119, 'Hotel Sunroute Plaza Shinjuku', 36, 4.10, 80.00, 'Un hôtel confortable et pratique à proximité de la gare de Shinjuku', 'https://cf.bstatic.com/xdata/images/hotel/max1024x768/10640899.jpg?k=5e9d5b9a2c5e7d0c5f6a0f8b8e6d0c1a9f3c2d6e3a9b8a2f7e2b3c3d0f8f1c6a&o=&hp=1'),
(120, 'The Peninsula Tokyo', 36, 4.60, 600.00, 'Un hôtel de grand standing offrant un service exceptionnel et un spa relaxant', 'https://cf.bstatic.com/xdata/images/hotel/max1024x768/10640901.jpg?k=4b7d4c1e3f9a8c0a5b5c0f7a7d8b1e0d9f3c2d6e3a9b8a2f7e2b3c3d0f8f1c6a&o=&hp=1'),
(121, 'Hotel Gracery Shinjuku', 36, 4.30, 120.00, 'Un hôtel original et amusant avec une tête de Godzilla sur le toit', 'https://cf.bstatic.com/xdata/images/hotel/max1024x768/10640902.jpg?k=7e9d5b9a2c5e7d0c5f6a0f8b8e6d0c1a9f3c2d6e3a9b8a2f7e2b3c3d0f8f1c6a&o=&hp=1'),
(122, 'Hotel Sobial Osaka Dome', 37, 4.40, 80.00, 'Un hôtel confortable et pratique situé à proximité du Kyocera Dome et de la station de métro Dome-mae Chiyozaki', 'https://cf.bstatic.com/xdata/images/hotel/max1024x768/295722139.jpg?k=7f9d5b9a2c5e7d0c5f6a0f8b8e6d0c1a9f3c2d6e3a9b8a2f7e2b3c3d0f8f1c6a&o=&hp=1'),
(123, 'Hotel It Osaka Shinmachi', 37, 4.50, 100.00, 'Un hôtel moderne et élégant situé dans le quartier branché de Shinmachi, avec un restaurant et un bar sur place', 'https://cf.bstatic.com/xdata/images/hotel/max1024x768/295722140.jpg?k=0f1b8c1e3f9a8c0a5b5c0f7a7d8b1e0d9f3c2d6e3a9b8a2f7e2b3c3d0f8f1c6a&o=&hp=1'),
(124, 'MIMARU OSAKA SHINSAIBASHI WEST', 37, 4.60, 150.00, 'Un hôtel proposant des appartements spacieux et bien équipés avec une kitchenette et un coin salon, idéal pour les familles ou les groupes', 'https://cf.bstatic.com/xdata/images/hotel/max1024x768/295722141.jpg?k=4b7d4c1e3f9a8c0a5b5c0f7a7d8b1e0d9f3c2d6e3a9b8a2f7e2b3c3d0f8f1c6a&o=&hp=1'),
(125, 'InterContinental Hotel Osaka', 37, 4.70, 300.00, 'Un hôtel de luxe offrant un service exceptionnel et un spa relaxant, situé à proximité de la gare JR d\'Osaka et du Grand Front Osaka Mall', 'https://cf.bstatic.com/xdata/images/hotel/max1024x768/295722142.jpg?k=7e9d5b9a2c5e7d0c5f6a0f8b8e6d0c1a9f3c2d6e3a9b8a2f7e2b3c3d0f8f1c6a&o=&hp=1'),
(126, 'Osaka Marriott Miyako Hotel', 37, 4.80, 350.00, 'Un hôtel situé dans les étages supérieurs de la tour Abeno Harukas, offrant une vue imprenable sur la ville et le mont Ikoma, ainsi qu\'un restaurant gastronomique au 57ème étage', 'https://cf.bstatic.com/xdata/images/hotel/max1024x768/295722143.jpg?k=5e9d5b9a2c5e7d0c5f6a0f8b8e6d0c1a9f3c2d6e3a9b8a2f7e2b3c3d0f8f1c6a&o=&hp=1'),
(127, '22 Pieces', 38, 4.50, 90.00, 'Un hôtel proposant des chambres confortables et élégantes avec une connexion Wi-Fi gratuite, situé à proximité de la gare de Kyoto et du temple Tofuku-ji', 'https://cf.bstatic.com/xdata/images/hotel/max1024x768/295722144.jpg?k=0f1b8c1e3f9a8c0a5b5c0f7a7d8b1e0d9f3c2d6e3a9b8a2f7e2b3c3d0f8f1c6a&o=&hp=1'),
(128, 'Hotel Granvia Kyoto', 38, 4.60, 200.00, 'Un hôtel de luxe situé directement au-dessus de la gare JR de Kyoto, offrant un accès facile aux transports et aux attractions de la ville, ainsi qu\'un spa et une piscine intérieure', 'https://cf.bstatic.com/xdata/images/hotel/max1024x768/295722145.jpg?k=5e9d5b9a2c5e7d0c5f6a0f8b8e6d0c1a9f3c2d6e3a9b8a2f7e2b3c3d0f8f1c6a&o=&hp=1'),
(129, 'Hotel The Celestine Kyoto Gion', 38, 4.70, 250.00, 'Un hôtel proposant des chambres spacieuses et raffinées avec une vue sur le jardin ou la ville, situé dans le quartier historique de Gion, à proximité du temple Yasaka', 'https://cf.bstatic.com/xdata/images/hotel/max1024x768/295722146.jpg?k=7e9d5b9a2c5e7d0c5f6a0f8b8e6d0c1a9f3c2d6e3a9b8a2f7e2b3c3d0f8f1c6a&o=&hp=1'),
(130, 'Kyoto Yura Hotel - MGallery', 38, 4.80, 300.00, 'Un hôtel de charme offrant un service personnalisé et un restaurant gastronomique, situé à quelques pas du quartier commerçant de Sanjo et du temple Nijo', 'https://cf.bstatic.com/xdata/images/hotel/max1024x768/295722147.jpg?k=4b7d4c1e3f9a8c0a5b5c0f7a7d8b1e0d9f3c2d6e3a9b8a2f7e2b3c3d0f8f1c6a&o=&hp=1'),
(131, 'Four Seasons Hotel Kyoto', 38, 4.90, 500.00, 'Un hôtel offrant un luxe exceptionnel et un cadre paisible dans un jardin japonais du XIVème siècle, situé à proximité du temple Kiyomizu-dera et du sanctuaire Fushimi Inari-taisha', 'https://cf.bstatic.com/xdata/images/hotel/max1024x768/295722148.jpg?k=7f9d5b9a2c5e7d0c5f6a0f8b8e6d0c1a9f3c2d6e3a9b8a2f7e2b3c3d0f8f1c6a&o=&hp=1'),
(132, 'Hotel Granvia Hiroshima', 39, 4.50, 100.00, 'Un hôtel confortable et pratique situé directement au-dessus de la gare JR d\'Hiroshima, offrant un accès facile aux transports et aux attractions de la ville', 'https://cf.bstatic.com/xdata/images/hotel/max1024x768/295722149.jpg?k=0f1b8c1e3f9a8c0a5b5c0f7a7d8b1e0d9f3c2d6e3a9b8a2f7e2b3c3d0f8f1c6a&o=&hp=1'),
(133, 'Sheraton Grand Hiroshima Hotel', 39, 4.60, 150.00, 'Un hôtel de luxe offrant un service exceptionnel et un spa relaxant, situé à proximité de la gare JR d\'Hiroshima et du parc du Mémorial de la Paix', 'https://cf.bstatic.com/xdata/images/hotel/max1024x768/295722150.jpg?k=5e9d5b9a2c5e7d0c5f6a0f8b8e6d0c1a9f3c2d6e3a9b8a2f7e2b3c3d0f8f1c6a&o=&hp=1'),
(134, 'Hotel Park Side Hiroshima Peace Park', 39, 3.90, 80.00, 'Un hôtel proposant des chambres simples et fonctionnelles avec une connexion Wi-Fi gratuite, situé à proximité du parc du Mémorial de la Paix et du Dôme de Genbaku', 'https://cf.bstatic.com/xdata/images/hotel/max1024x768/295722151.jpg?k=7e9d5b9a2c5e7d0c5f6a0f8b8e6d0c1a9f3c2d6e3a9b8a2f7e2b3c3d0f8f1c6a&o=&hp=1'),
(135, 'Hiroshima Washington Hotel', 39, 4.10, 90.00, 'Un hôtel proposant des chambres modernes et élégantes avec une vue sur la ville ou le fleuve, situé dans le quartier commerçant de Hatchobori', 'https://cf.bstatic.com/xdata/images/hotel/max1024x768/295722152.jpg?k=4b7d4c1e3f9a8c0a5b5c0f7a7d8b1e0d9f3c2d6e3a9b8a2f7e2b3c3d0f8f1c6a&o=&hp=1'),
(136, 'Capsule Hotel Cube Hiroshima', 39, 3.70, 40.00, 'Un hôtel proposant des capsules confortables et propres avec une connexion Wi-Fi gratuite et une télévision à écran plat, situé à proximité du château d\'Hiroshima et du jardin Shukkeien', 'https://cf.bstatic.com/xdata/images/hotel/max1024x768/295722153.jpg?k=7f9d5b9a2c5e7d0c5f6a0f8b8e6d0c1a9f3c2d6e3a9b8a2f7e2b3c3d0f8f1c6a&o=&hp=1'),
(137, 'Cross Hotel Sapporo', 40, 4.50, 100.00, 'Un hôtel proposant des chambres confortables et élégantes avec une connexion Wi-Fi gratuite, situé à 5 minutes à pied de la gare JR de Sapporo et offrant des bains publics avec une vue spectaculaire sur la ville', 'https://cf.bstatic.com/xdata/images/hotel/max1024x768/295722154.jpg?k=0f1b8c1e3f9a8c0a5b5c0f7a7d8b1e0d9f3c2d6e3a9b8a2f7e2b3c3d0f8f1c6a&o=&hp=1'),
(138, 'Quintessa Hotel Sapporo', 40, 4.10, 90.00, 'Un hôtel proposant des services de massage, un petit-déjeuner buffet et un service de location de vélos, situé à proximité de la station de métro Nakajima-Koen', 'https://cf.bstatic.com/xdata/images/hotel/max1024x768/295722155.jpg?k=5e9d5b9a2c5e7d0c5f6a0f8b8e6d0c1a9f3c2d6e3a9b8a2f7e2b3c3d0f8f1c6a&o=&hp=1'),
(139, 'THE KNOT SAPPORO', 40, 4.30, 80.00, 'Un hôtel proposant des chambres climatisées, un restaurant, une connexion Wi-Fi gratuite et un bar, situé dans le centre de Sapporo', 'https://cf.bstatic.com/xdata/images/hotel/max1024x768/295722156.jpg?k=7e9d5b9a2c5e7d0c5f6a0f8b8e6d0c1a9f3c2d6e3a9b8a2f7e2b3c3d0f8f1c6a&o=&hp=1'),
(140, 'Tmark City Hotel Sapporo', 40, 3.90, 70.00, 'Un hôtel proposant de petites chambres dotées d\'une connexion Wi-Fi gratuite, situé dans le quartier animé de Susukino', 'https://cf.bstatic.com/xdata/images/hotel/max1024x768/295722157.jpg?k=4b7d4c1e3f9a8c0a5b5c0f7a7d8b1e0d9f3c2d6e3a9b8a2f7e2b3c3d0f8f1c6a&o=&hp=1'),
(141, 'Sheraton Sapporo Hotel', 40, 4.60, 150.00, 'Un hôtel proposant un service exceptionnel et un spa relaxant, situé à proximité du parc Odori et du musée d\'art moderne de Hokkaido', 'https://cf.bstatic.com/xdata/images/hotel/max1024x768/295722158.jpg?k=7f9d5b9a2c5e7d0c5f6a0f8b8e6d0c1a9f3c2d6e3a9b8a2f7e2b3c3d0f8f1c6a&o=&hp=1');

-- --------------------------------------------------------

--
-- Table structure for table `logements`
--

CREATE TABLE `logements` (
  `id_logement` int(11) NOT NULL,
  `id_A` int(11) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `nb_p` int(11) DEFAULT NULL,
  `nb_m2` decimal(10,2) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `prix` decimal(10,2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loisirs`
--

CREATE TABLE `loisirs` (
  `idL` int(11) NOT NULL,
  `libelle` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `idMenu` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id_photo` int(11) NOT NULL,
  `Format_p` varchar(255) DEFAULT NULL,
  `texte` varchar(255) DEFAULT NULL,
  `date_p` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `plats`
--

CREATE TABLE `plats` (
  `idP` int(11) NOT NULL,
  `libelle` varchar(20) DEFAULT NULL,
  `prix` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posseder_l`
--

CREATE TABLE `posseder_l` (
  `idL` int(11) DEFAULT NULL,
  `id_Hotel` int(11) DEFAULT NULL,
  `dispo_L` tinyint(1) DEFAULT NULL,
  `prix` decimal(10,2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posseder_s`
--

CREATE TABLE `posseder_s` (
  `idS` int(11) DEFAULT NULL,
  `id_Hotel` int(11) DEFAULT NULL,
  `dispo_s` tinyint(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reserver_a`
--

CREATE TABLE `reserver_a` (
  `Id_utilisateur` int(11) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `nb_personnes` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reserver_c`
--

CREATE TABLE `reserver_c` (
  `id_utilisateur` int(11) DEFAULT NULL,
  `id_c` int(11) DEFAULT NULL,
  `prix` decimal(10,2) DEFAULT NULL,
  `nb_chambre` int(11) DEFAULT NULL,
  `type_c` varchar(255) DEFAULT NULL,
  `date_a` date DEFAULT NULL,
  `date_s` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reserver_log`
--

CREATE TABLE `reserver_log` (
  `id_utilisateur` int(11) DEFAULT NULL,
  `id_logement` int(11) DEFAULT NULL,
  `date_arrive` date DEFAULT NULL,
  `date_sortie` date DEFAULT NULL,
  `nb_personnes` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reserver_r`
--

CREATE TABLE `reserver_r` (
  `id_utilisateur` int(11) DEFAULT NULL,
  `idR` int(11) DEFAULT NULL,
  `nb_personnes` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `idR` int(11) NOT NULL,
  `nom_R` varchar(255) DEFAULT NULL,
  `etoiles` int(11) DEFAULT NULL,
  `id_A` int(11) DEFAULT NULL,
  `id_avis` int(11) DEFAULT NULL,
  `id_Menu` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `idS` int(11) NOT NULL,
  `libelle` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transport_urbain`
--

CREATE TABLE `transport_urbain` (
  `id_Tb` int(11) NOT NULL,
  `id_utilisateur` int(11) DEFAULT NULL,
  `nom_compagnie` varchar(255) DEFAULT NULL,
  `horaires` time DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `timelimit` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `token`, `timelimit`) VALUES
(4, 'Racim T2', 'fethallahric@gmail.com', '$2y$10$41VsdIbJviD4lVwBQhfELeFxjSB7EIzLO1OH0YTmMUjyG9cgE.eiy', NULL, NULL),
(9, 'Racim', 'racim@gmail.com', '$2y$10$Zt4z5uFHxUnAml4I5RWXx.xvT08AHFW4Yq9MyHGRcAZ9dtqEauBZe', NULL, NULL),
(11, 'Racim Fethallah', 'ricracim@gmail.com', '$2y$10$n3f3nTlu/bzhVM2.98d7ru.cJp8cbXi.XwdSyeLQfeiLsk5hwWZkG', NULL, NULL),
(12, 'Imen_rhm', 'imenrahmani@gmail.com', '$2y$10$5dfdf7pryJdsp30fPyyfCeAAdqkFWstxi7pgP78FTIq9sKcz471wq', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id_Video` int(11) NOT NULL,
  `Format_v` varchar(255) DEFAULT NULL,
  `texte` varchar(255) DEFAULT NULL,
  `date_v` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activites`
--
ALTER TABLE `activites`
  ADD PRIMARY KEY (`numero`),
  ADD KEY `id_A` (`id_A`);

--
-- Indexes for table `avis`
--
ALTER TABLE `avis`
  ADD PRIMARY KEY (`id_Avis`);

--
-- Indexes for table `avoir_b`
--
ALTER TABLE `avoir_b`
  ADD KEY `idB` (`idB`),
  ADD KEY `id_menu` (`id_menu`);

--
-- Indexes for table `avoir_p`
--
ALTER TABLE `avoir_p`
  ADD KEY `idp` (`idp`),
  ADD KEY `id_menu` (`id_menu`);

--
-- Indexes for table `billet_avion`
--
ALTER TABLE `billet_avion`
  ADD PRIMARY KEY (`id_billetA`),
  ADD KEY `id_utilisateur` (`id_utilisateur`);

--
-- Indexes for table `billet_train`
--
ALTER TABLE `billet_train`
  ADD PRIMARY KEY (`id_billetT`),
  ADD KEY `id_utilisateur` (`id_utilisateur`);

--
-- Indexes for table `boissons`
--
ALTER TABLE `boissons`
  ADD PRIMARY KEY (`idB`);

--
-- Indexes for table `budgets`
--
ALTER TABLE `budgets`
  ADD PRIMARY KEY (`id_budget`);

--
-- Indexes for table `chambres`
--
ALTER TABLE `chambres`
  ADD PRIMARY KEY (`id_chambre`),
  ADD KEY `id_hotel` (`id_hotel`);

--
-- Indexes for table `destinations`
--
ALTER TABLE `destinations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parentID` (`parentID`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`id`),
  ADD KEY `destination_id` (`destination_id`);

--
-- Indexes for table `logements`
--
ALTER TABLE `logements`
  ADD PRIMARY KEY (`id_logement`),
  ADD KEY `id_A` (`id_A`);

--
-- Indexes for table `loisirs`
--
ALTER TABLE `loisirs`
  ADD PRIMARY KEY (`idL`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`idMenu`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id_photo`);

--
-- Indexes for table `plats`
--
ALTER TABLE `plats`
  ADD PRIMARY KEY (`idP`);

--
-- Indexes for table `posseder_l`
--
ALTER TABLE `posseder_l`
  ADD KEY `idL` (`idL`),
  ADD KEY `id_Hotel` (`id_Hotel`);

--
-- Indexes for table `posseder_s`
--
ALTER TABLE `posseder_s`
  ADD KEY `idS` (`idS`),
  ADD KEY `id_Hotel` (`id_Hotel`);

--
-- Indexes for table `reserver_a`
--
ALTER TABLE `reserver_a`
  ADD KEY `Id_utilisateur` (`Id_utilisateur`),
  ADD KEY `numero` (`numero`);

--
-- Indexes for table `reserver_c`
--
ALTER TABLE `reserver_c`
  ADD KEY `id_utilisateur` (`id_utilisateur`),
  ADD KEY `id_c` (`id_c`);

--
-- Indexes for table `reserver_log`
--
ALTER TABLE `reserver_log`
  ADD KEY `id_utilisateur` (`id_utilisateur`),
  ADD KEY `id_logement` (`id_logement`);

--
-- Indexes for table `reserver_r`
--
ALTER TABLE `reserver_r`
  ADD KEY `id_utilisateur` (`id_utilisateur`),
  ADD KEY `idR` (`idR`);

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`idR`),
  ADD KEY `id_A` (`id_A`),
  ADD KEY `id_avis` (`id_avis`),
  ADD KEY `id_Menu` (`id_Menu`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`idS`);

--
-- Indexes for table `transport_urbain`
--
ALTER TABLE `transport_urbain`
  ADD PRIMARY KEY (`id_Tb`),
  ADD KEY `id_utilisateur` (`id_utilisateur`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id_Video`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `destinations`
--
ALTER TABLE `destinations`
  ADD CONSTRAINT `destinations_ibfk_1` FOREIGN KEY (`parentID`) REFERENCES `destinations` (`id`);

--
-- Constraints for table `hotels`
--
ALTER TABLE `hotels`
  ADD CONSTRAINT `hotels_ibfk_1` FOREIGN KEY (`destination_id`) REFERENCES `destinations` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
