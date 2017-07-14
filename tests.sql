-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Ven 14 Juillet 2017 à 20:13
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `tests`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `adresse` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `age`, `adresse`) VALUES
(52, 'test jq', 'tesr', 1546, 'test js'),
(51, 'sqdsqds', 'qsdqsd', 5, 'dsfsdf'),
(50, 'test add', 'tes add', 555, 'test add ws'),
(49, 'test add', 'tes add', 555, 'test add ws'),
(48, 'test add', 'tes add', 555, 'test add ws'),
(47, 'anemi add', 'fdssd', 5, 'dsfsd'),
(46, 'riadh add', 'fdssd', 5, 'dsfsd'),
(45, 'fsdf', 'fdssd', 5, 'dsfsd'),
(44, 'vbbbbb', 'bbbb', 15, 'bbbbb'),
(43, 'aaaaaaaaa', 'aaaaaaaaa', 515, 'aa'),
(53, 'test jq', 'tesr', 1546, 'test js'),
(54, 'test jq', 'tesr', 2, 'test js'),
(55, 'test jq', 'tesr', 2, 'test js');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
