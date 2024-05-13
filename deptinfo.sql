-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 13 mai 2024 à 23:36
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `deptinfo`
--

-- --------------------------------------------------------

--
-- Structure de la table `details`
--

CREATE TABLE `details` (
  `email` varchar(50) NOT NULL,
  `type_detail` varchar(20) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=Aria DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `details`
--

INSERT INTO `details` (`email`, `type_detail`, `description`) VALUES
('joshua.brochot@gmail.com', 'metier', 'Developer / ADMIN'),
('joshua.brochot@gmail.com', 'biographie', 'Je suis en BUT info a Metz !'),
('michel.morgan@gmail.com', 'metier', 'Secretaire '),
('michel.morgan@gmail.com', 'biographie', 'Le foot !');

-- --------------------------------------------------------

--
-- Structure de la table `evenements`
--

CREATE TABLE `evenements` (
  `titre` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `heure` time NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `evenements`
--

INSERT INTO `evenements` (`titre`, `date`, `heure`, `description`) VALUES
('Portes ouvertes', '2024-09-18', '10:00:00', 'Les portes ouvertes font leur retour le samedis...');

-- --------------------------------------------------------

--
-- Structure de la table `type_compte`
--

CREATE TABLE `type_compte` (
  `no_type_compte` int(2) NOT NULL,
  `lib_type_compte` varchar(50) NOT NULL
) ENGINE=Aria DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `type_compte`
--

INSERT INTO `type_compte` (`no_type_compte`, `lib_type_compte`) VALUES
(1, 'admin'),
(2, 'utilisateur');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mdp` varchar(20) NOT NULL,
  `annee_prom` date DEFAULT NULL,
  `no_type_compte` int(1) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`nom`, `prenom`, `email`, `mdp`, `annee_prom`, `no_type_compte`) VALUES
('Brochot', 'Joshua', 'joshua.brochot@gmail.com', 'joshua', '2023-09-02', 1),
('MORGAN', 'Michel', 'michel.morgan@gmail.com', 'momi', NULL, 2);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`email`,`type_detail`);

--
-- Index pour la table `evenements`
--
ALTER TABLE `evenements`
  ADD PRIMARY KEY (`titre`,`date`,`heure`);

--
-- Index pour la table `type_compte`
--
ALTER TABLE `type_compte`
  ADD PRIMARY KEY (`no_type_compte`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
