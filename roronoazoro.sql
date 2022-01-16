-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 04 juin 2021 à 22:41
-- Version du serveur :  10.4.19-MariaDB
-- Version de PHP : 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `roronoazoro`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `id_commentaire` int(11) NOT NULL,
  `pseudo` varchar(30) NOT NULL DEFAULT 'Anonyme',
  `message` text NOT NULL,
  `date_heure_message` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`id_commentaire`, `pseudo`, `message`, `date_heure_message`) VALUES
(71, 'qezfqef', 'sergserg', '2021-05-23 17:46:03'),
(83, 'ergsergseg', 'srgh ruhi girelguh uu r gelug heoig ruhe ge', '2021-05-23 22:16:55'),
(106, 'alexis', 'test', '2021-06-03 23:32:59');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `num_tel` varchar(20) NOT NULL,
  `mail` varchar(75) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id_contact`, `prenom`, `nom`, `num_tel`, `mail`, `message`) VALUES
(1, 'alexis', 'bally', '5438512854', '', 'qzeflihuqzoiefuqzfeilugqzfybzefkguzye'),
(3, 'alexis', 'bally', '', 'alexis.bally@edu.devinci.fr', 'test zekqjfygkuzyfghqbjzefqzfe');

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

CREATE TABLE `membres` (
  `membre_id` int(11) NOT NULL,
  `pseudo` varchar(35) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `statut` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `membres`
--

INSERT INTO `membres` (`membre_id`, `pseudo`, `mail`, `password`, `statut`) VALUES
(15, 'alexis', 'alexis@test.fr', '$2y$10$4j/dEoBBqmWRSkmZ7rwo/uXBDy4Gsq7v/lNvQlvSL0Jsdm3qMO1Fi', 'editeur'),
(16, 'admin ', 'admin.admin.fr', '$2y$10$C2RX206rqZ20YZF1WDeDse.riLCcAIpoYcW3Qh2Gbl1kX8nJ5GzQe', 'admin'),
(20, 'admin2  ', 'admin2@admin2.fr', '$2y$10$3DRn2TEuyg3FiUo1peiF7uj6Y3SnIxxTBjfZctZ1Yxp4j..eFnDZG', 'admin'),
(35, 'jean', 'jean@jean.fr', '$2y$10$RuRdI1Po6jBlfLR/U/EZrOwG82hkgObdVIt3TVp5A06nOPQiipKry', 'editeur');

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `id_post` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id_post`, `title`, `link`, `content`) VALUES
(3, 'Top 10 of Zoro\'s fights', 'images/img_posts/one_piece_zoro_fight_wano.jpeg', 'Zoro fought a lot of ennemis because he\'s the swordman of the crew and the right-hand man of Luffy.');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`id_commentaire`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Index pour la table `membres`
--
ALTER TABLE `membres`
  ADD PRIMARY KEY (`membre_id`);

--
-- Index pour la table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id_post`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `id_commentaire` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `membres`
--
ALTER TABLE `membres`
  MODIFY `membre_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
