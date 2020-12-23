-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 17 déc. 2020 à 14:43
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gym`
--

-- --------------------------------------------------------

--
-- Structure de la table `abonner`
--

CREATE TABLE `abonner` (
  `codeAbo` int(100) NOT NULL,
  `idAbo` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `abonner`
--

INSERT INTO `abonner` (`codeAbo`, `idAbo`) VALUES
(94, 23),
(96, 1),
(98, 3);

-- --------------------------------------------------------

--
-- Structure de la table `activite`
--

CREATE TABLE `activite` (
  `codeAct` int(50) NOT NULL,
  `libelleAct` int(100) NOT NULL,
  `descriptionAct` varchar(400) NOT NULL,
  `statusAct` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre` (
  `numM` int(50) NOT NULL,
  `nomM` varchar(50) NOT NULL,
  `prenomM` varchar(50) NOT NULL,
  `adressM` int(60) NOT NULL,
  `villeM` varchar(50) NOT NULL,
  `dateDeNaissance` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `plan`
--

CREATE TABLE `plan` (
  `codeP` int(50) NOT NULL,
  `dateP` date NOT NULL,
  `HeureDeb` time(6) NOT NULL,
  `HeureFin` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `salle`
--

CREATE TABLE `salle` (
  `NumS` int(40) NOT NULL,
  `NomS` varchar(100) NOT NULL,
  `villeS` varchar(50) NOT NULL,
  `adressS` int(100) NOT NULL,
  `codepostalS` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `type_abonnement`
--

CREATE TABLE `type_abonnement` (
  `codeAbo` int(50) NOT NULL,
  `libelleAbo` int(100) NOT NULL,
  `descriptionAbo` varchar(500) NOT NULL,
  `tarifsAbo` int(11) NOT NULL,
  `Durée` varchar(6) NOT NULL,
  `descriptionAbo2` varchar(200) NOT NULL,
  `descriptionAbo3` varchar(200) NOT NULL,
  `descriptionAbo4` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `type_abonnement`
--

INSERT INTO `type_abonnement` (`codeAbo`, `libelleAbo`, `descriptionAbo`, `tarifsAbo`, `Durée`, `descriptionAbo2`, `descriptionAbo3`, `descriptionAbo4`) VALUES
(94, 1, 'Accès illimité de 6h – 23h', 120, '1mois', 'Espace Cardio training', 'Espace Musculation	', 'Cours Collectfs Fitness	'),
(96, 2, 'Accès illimité de 6h – 23h', 600, '3mois', 'Espace Cardio training', 'Espace Musculation', 'Cours Collectfs Fitness	'),
(97, 3, 'Accès illimité de 6h – 23h', 580, '6mois', 'Espace Cardio training', 'Espace Musculation	', 'Cours Collectfs Fitness	'),
(98, 6, 'Accès illimité de 6h – 23h', 980, '12mois', 'Espace Cardio training', 'Espace Musculation', 'Cours Collectfs Fitness	');

-- --------------------------------------------------------

--
-- Structure de la table `type_activite`
--

CREATE TABLE `type_activite` (
  `code_t` int(50) NOT NULL,
  `libelleT` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `abonner`
--
ALTER TABLE `abonner`
  ADD PRIMARY KEY (`codeAbo`);

--
-- Index pour la table `activite`
--
ALTER TABLE `activite`
  ADD PRIMARY KEY (`codeAct`);

--
-- Index pour la table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`numM`);

--
-- Index pour la table `plan`
--
ALTER TABLE `plan`
  ADD PRIMARY KEY (`codeP`);

--
-- Index pour la table `salle`
--
ALTER TABLE `salle`
  ADD PRIMARY KEY (`NumS`);

--
-- Index pour la table `type_abonnement`
--
ALTER TABLE `type_abonnement`
  ADD PRIMARY KEY (`codeAbo`);

--
-- Index pour la table `type_activite`
--
ALTER TABLE `type_activite`
  ADD PRIMARY KEY (`code_t`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `numM` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `salle`
--
ALTER TABLE `salle`
  MODIFY `NumS` int(40) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `type_abonnement`
--
ALTER TABLE `type_abonnement`
  MODIFY `codeAbo` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
