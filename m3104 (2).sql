-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : ven. 17 déc. 2021 à 16:18
-- Version du serveur : 5.7.33
-- Version de PHP : 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `m3104`
--

-- --------------------------------------------------------

--
-- Structure de la table `album`
--

CREATE TABLE `album` (
  `Index` int(11) NOT NULL,
  `Nom` varchar(70) NOT NULL,
  `Genre` int(11) NOT NULL,
  `Artiste` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `album`
--

INSERT INTO `album` (`Index`, `Nom`, `Genre`, `Artiste`, `date`) VALUES
(1, 'Live in Dublin', 7, 1, '2004-01-01'),
(2, 'Luna Park', 7, 1, '2003-05-01'),
(3, 'Live at Vicar St', 7, 1, '2000-01-01'),
(4, 'Lemonade & Buns', 7, 1, '1999-01-01'),
(5, 'Tóg é go Bog é', 7, 1, '1997-01-01'),
(6, 'Mind the Gap', 7, 1, '1995-01-01'),
(7, 'Handel’s Fantasy', 7, 1, '1993-01-01'),
(8, 'Collection Prestige', 6, 2, '2005-06-01'),
(9, 'Fear Not', 6, 2, '2001-01-01'),
(10, 'French Cancan', 6, 2, '1999-01-01'),
(11, 'The dawn', 5, 3, '1998-01-01'),
(12, 'The Walk Of The Giant Turtle', 5, 3, '2003-04-01'),
(13, 'Les Siamoises', 10, 4, '2003-09-23'),
(14, 'Y’a des cigales dans la fourmillière', 10, 5, '2002-09-30'),
(15, 'Qu’est-ce qu\'on s\'fait chier', 10, 6, '2004-02-02'),
(16, 'Sonate pour violon et piano n°1 & sonate pour violon seul (Bartok)', 2, 7, '2002-10-21'),
(17, 'Alles is gut', 11, 8, '1981-01-01'),
(18, 'Tu l\'as bien mérité', 1, 9, '2009-08-10');

-- --------------------------------------------------------

--
-- Structure de la table `artiste`
--

CREATE TABLE `artiste` (
  `ID` int(11) NOT NULL,
  `nom` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `artiste`
--

INSERT INTO `artiste` (`ID`, `nom`) VALUES
(1, 'Kíla\n'),
(2, 'Carnival in Coal \r\n'),
(3, 'Erik Truffaz \r\n'),
(4, 'Les Elles \r\n'),
(5, 'La rue Ketanou \r\n'),
(6, 'Les têtes raides \r\n'),
(7, 'Laurent Korcia \r\n'),
(8, 'Deutsch Amerikanische Freundschaft '),
(9, 'Sexy Sushi');

-- --------------------------------------------------------

--
-- Structure de la table `candidature`
--

CREATE TABLE `candidature` (
  `NomGroupe` varchar(50) NOT NULL,
  `AnneeCrea` int(4) NOT NULL,
  `Departement` varchar(10) NOT NULL,
  `Scene` varchar(25) NOT NULL,
  `Style` varchar(25) NOT NULL,
  `Nom_Resp` varchar(20) NOT NULL,
  `Prenom_Resp` varchar(20) NOT NULL,
  `Adresse_Resp` varchar(100) NOT NULL,
  `CodeP_Resp` int(5) NOT NULL,
  `Email_Resp` varchar(50) NOT NULL,
  `Tel_Resp` int(10) NOT NULL,
  `DescGroupe` varchar(500) NOT NULL,
  `ExpScene` varchar(500) NOT NULL,
  `siteGroupe` varchar(100) NOT NULL,
  `soundcloud` varchar(100) DEFAULT NULL,
  `youtube` varchar(100) DEFAULT NULL,
  `statutAssos` tinyint(1) NOT NULL,
  `sacem` tinyint(1) NOT NULL,
  `producteur` tinyint(1) NOT NULL,
  `fichiermp3` varchar(255) NOT NULL,
  `presse` varchar(50) DEFAULT NULL,
  `photogroupe` varchar(100) NOT NULL,
  `ficheTech` varchar(50) NOT NULL,
  `setlist` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `departements`
--

CREATE TABLE `departements` (
  `NomDepartement` varchar(25) NOT NULL,
  `CodeDepartement` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `departements`
--

INSERT INTO `departements` (`NomDepartement`, `CodeDepartement`) VALUES
('Aisne', '02'),
('Autre', '0'),
('Nord', '59'),
('Oise', '60'),
('Pas-de-Calais', '62'),
('Somme', '80');

-- --------------------------------------------------------

--
-- Structure de la table `genre`
--

CREATE TABLE `genre` (
  `ID` int(11) NOT NULL,
  `nom` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `genre`
--

INSERT INTO `genre` (`ID`, `nom`) VALUES
(1, 'Alternatif \r\n'),
(2, 'Classique \r\n'),
(3, 'Electro \r\n'),
(4, 'Expérimental \r\n'),
(5, 'Jazz \r\n'),
(6, 'Metal \r\n'),
(7, 'Musique du monde \r\n'),
(8, 'Rap \r\n'),
(9, 'Rock \r\n'),
(10, 'Variété Française \r\n'),
(11, 'Variété Internationale \r\n'),
(12, 'Autres');

-- --------------------------------------------------------

--
-- Structure de la table `membresgroupe`
--

CREATE TABLE `membresgroupe` (
  `NomGroupe` varchar(50) NOT NULL,
  `Nom` varchar(50) DEFAULT NULL,
  `Prenom` varchar(50) DEFAULT NULL,
  `Instrument` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `scene`
--

CREATE TABLE `scene` (
  `scene` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `scene`
--

INSERT INTO `scene` (`scene`) VALUES
('Folk,Amplifié'),
('Rock'),
('Tribute,Acoustique');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `Nom` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Motdepasse` varchar(255) NOT NULL,
  `Ville` varchar(255) NOT NULL,
  `Pays` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`Nom`, `Email`, `Motdepasse`, `Ville`, `Pays`) VALUES
('Axel Goret', 'axelgoret04@gmail.com', '$2y$10$FZ5CkG7nY4d7yeaI0HhICOdavSHieNFfWNJKpV2iO2zPn8JyFhyl.', 'Amiens', 'France');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurfest`
--

CREATE TABLE `utilisateurfest` (
  `email` varchar(50) NOT NULL,
  `Nom` varchar(20) NOT NULL,
  `Prenom` varchar(25) NOT NULL,
  `Motdepasse` varchar(100) NOT NULL,
  `Adresse` varchar(100) NOT NULL,
  `CP` int(5) NOT NULL,
  `administrateur` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateurfest`
--

INSERT INTO `utilisateurfest` (`email`, `Nom`, `Prenom`, `Motdepasse`, `Adresse`, `CP`, `administrateur`) VALUES
('admin@admin.com', 'Goret', 'Axel', '$2y$10$xW3gjjqVGA/XJgCXvA4BAOBwhD.qw5su4OLB4siHq7VjPr1jtkNzS', '28 rue des fleurs, Le Plessier Rozainvillers', 80110, 1),
('axelgoret@test.com', 'Goret', 'Axel', '$2y$10$K7NVIszplURUjbYH2mdiAeomr6uqgLtRglR8iRUZ02I8s2kVjhxyO', '28 rue des fleurs, Le Plessier Rozainvillers', 80110, 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`Index`),
  ADD KEY `Genre` (`Genre`) USING BTREE,
  ADD KEY `Artiste` (`Artiste`);

--
-- Index pour la table `artiste`
--
ALTER TABLE `artiste`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `candidature`
--
ALTER TABLE `candidature`
  ADD PRIMARY KEY (`Email_Resp`),
  ADD KEY `NomGroupe` (`NomGroupe`);

--
-- Index pour la table `departements`
--
ALTER TABLE `departements`
  ADD PRIMARY KEY (`NomDepartement`);

--
-- Index pour la table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `scene`
--
ALTER TABLE `scene`
  ADD PRIMARY KEY (`scene`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`Email`);

--
-- Index pour la table `utilisateurfest`
--
ALTER TABLE `utilisateurfest`
  ADD PRIMARY KEY (`email`);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `album`
--
ALTER TABLE `album`
  ADD CONSTRAINT `album_ibfk_1` FOREIGN KEY (`Genre`) REFERENCES `genre` (`ID`),
  ADD CONSTRAINT `album_ibfk_2` FOREIGN KEY (`Artiste`) REFERENCES `artiste` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
