-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 14 Novembre 2017 à 10:31
-- Version du serveur :  5.7.20-0ubuntu0.16.04.1
-- Version de PHP :  7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bankAccount`
--

-- --------------------------------------------------------

--
-- Structure de la table `accountData`
--

CREATE TABLE `accountData` (
  `id` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `account` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `accountData`
--

INSERT INTO `accountData` (`id`, `number`, `account`, `name`, `amount`) VALUES
(2, 534678, 'Vacances', 'Delonge', 1070),
(3, 534678, 'Epargne', 'Delonge', 100),
(4, 534678, 'Pret', 'Delonge', 0),
(7, 534678, 'PEL', 'Delonge', 1190),
(8, 534678, 'current', 'Delonge', 800);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `accountData`
--
ALTER TABLE `accountData`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `accountData`
--
ALTER TABLE `accountData`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
