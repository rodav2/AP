-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 24 Novembre 2016 à 18:02
-- Version du serveur :  10.1.10-MariaDB
-- Version de PHP :  5.5.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `auxiliairepuericultrice`
--

-- --------------------------------------------------------

--
-- Structure de la table `modules`
--

CREATE TABLE `modules` (
  `id_module` int(11) NOT NULL,
  `module` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `modules`
--

INSERT INTO `modules` (`id_module`, `module`) VALUES
(1, 'apprendre'),
(2, 'bleu'),
(3, 'red'),
(4, 'super');

-- --------------------------------------------------------

--
-- Structure de la table `questionnaire`
--

CREATE TABLE `questionnaire` (
  `id_question` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `id_module` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `questionnaire`
--

INSERT INTO `questionnaire` (`id_question`, `question`, `id_module`) VALUES
(1, 'Quelle valeur ?', 1),
(2, 'tu as vu ?', 2),
(3, 'Comment allez vous ?', 1),
(4, 'Ca va ?', 2),
(5, 'Tu as faim ?', 4),
(6, 'oui ou non ?', 3),
(7, 'Tu es la ?', 3),
(8, 'qui peux ?', 2);

-- --------------------------------------------------------

--
-- Structure de la table `reponse`
--

CREATE TABLE `reponse` (
  `id_question` int(11) NOT NULL,
  `reponse` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `correction` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `reponse`
--

INSERT INTO `reponse` (`id_question`, `reponse`, `type`, `correction`) VALUES
(0, 'bleu', '', 0),
(0, 'reed', '', 0),
(0, 'bleu', '', 0),
(0, 'velo', '', 0),
(1, 'velo à pedale', '', 0),
(3, 'chinois', '', 0),
(5, 'oui', '', 0),
(4, 'peut etre', '', 0),
(1, 'oui', '', 0),
(1, 'non', '', 0),
(1, 'c''est vrai', 'radio', 0),
(1, 'c''est blue', 'radio', 0),
(2, 'ok', 'checkbox', 0),
(2, 'ok c good', 'checkbox', 0),
(3, 'blabla', 'text', 0),
(3, 'bibi', 'text', 0),
(4, '', 'text', 0),
(5, '', 'text', 0),
(50, 'ok dacc', 'radius', 0),
(8, 'fez', '', 0),
(8, 'fez', '', 0),
(8, 'dav', '', 0),
(8, 'ro', '', 0),
(8, 'tu', '', 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id_module`);

--
-- Index pour la table `questionnaire`
--
ALTER TABLE `questionnaire`
  ADD PRIMARY KEY (`id_question`),
  ADD KEY `id_module` (`id_module`);

--
-- Index pour la table `reponse`
--
ALTER TABLE `reponse`
  ADD KEY `id_question` (`id_question`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `modules`
--
ALTER TABLE `modules`
  MODIFY `id_module` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `questionnaire`
--
ALTER TABLE `questionnaire`
  MODIFY `id_question` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
