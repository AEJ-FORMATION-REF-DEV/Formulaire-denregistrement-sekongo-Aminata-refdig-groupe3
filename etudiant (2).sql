-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  sam. 21 août 2021 à 11:54
-- Version du serveur :  10.1.38-MariaDB
-- Version de PHP :  5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `formulaire`
--

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `id` int(5) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenoms` varchar(50) NOT NULL,
  `numero_aej` int(50) NOT NULL,
  `telephone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fonction` varchar(25) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`id`, `nom`, `prenoms`, `numero_aej`, `telephone`, `email`, `fonction`, `date`) VALUES
(1, 'hh', 'hh', 77, '77', 'ggtufdd@gmail.com', 'Réferent Digital', '2021-08-20 09:45:48'),
(2, 'hi', 'hh', 77, '77', 'ggtufdd@gmail.com', 'Développeur Data IA', '2021-08-20 09:47:15'),
(3, 'Sekongo', 'Aminata', 2147483647, '0555139659', 'sekongoaminata@gmail.com', 'Réferent Digital', '2021-08-20 11:58:37'),
(4, 'Dagnogo', 'Achata', 2147483647, '0555139659', 'xffgxffh@gmail.com', 'Réferent Digital', '2021-08-20 12:10:37'),
(5, '', '', 0, '', '', '', '2021-08-20 13:54:23'),
(6, '', '', 0, '', '', '', '2021-08-20 13:59:31'),
(7, '', '', 0, '', '', '', '2021-08-20 14:50:11'),
(8, 'test', 'test', 123456, '12345678', 'test@gmail.com', 'Réferent Digital', '2021-08-20 17:15:42'),
(9, 'yyryuu', 'etefyté', 4266999, '99666', '', 'Réferent Digital', '2021-08-21 01:46:31');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
