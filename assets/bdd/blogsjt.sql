-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : ven. 20 oct. 2023 à 08:20
-- Version du serveur : 8.0.30
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `blogsjt`
--

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`) VALUES
(2, 'toto', 'toto@toto.fr', '$2y$10$Fwbvj3oTKdIeGsa4CmuvseEO49PumqRk2FlAUJPcs5JqyChnbhkX2'),
(3, 'test145', 'test145@test145', '$2y$10$40D.WkkYCmLIaK.OjmsaOez8BNbnfWr/VBsbvBz8dKZWPJY8Y4DAW'),
(4, 'test8000', 'test800@test.fr', '$2y$10$3wvoviu0ONDbbBn8Z642QeCxp77l58f1JNVp4MqdwgKeXc/VY2SPq'),
(5, 'toto850', 'toto502@toto.fr', '$2y$10$xI0NyfSD.qKnLnmuw4UGZ.nQkklSf7G1/Xn25f/T/SmG9Me.YeRAi');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
