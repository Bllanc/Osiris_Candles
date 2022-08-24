-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 24 août 2022 à 11:30
-- Version du serveur :  5.7.17
-- Version de PHP :  5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `osiris_candle`
--

-- --------------------------------------------------------

--
-- Structure de la table `avatar`
--

CREATE TABLE `avatar` (
  `id_avatar` int(11) NOT NULL,
  `img_avatar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `avatar`
--

INSERT INTO `avatar` (`id_avatar`, `img_avatar`) VALUES
(1, 'f_blonde.svg'),
(2, 'f_grise.svg'),
(3, 'f_lunette.svg'),
(4, 'f_rose.svg'),
(5, 'h_blond.svg'),
(6, 'h_chapeau.svg'),
(7, 'h_normal.svg'),
(8, 'h_pirate.svg'),
(9, 'f_bun.svg'),
(10, 'h_lunette.svg');

-- --------------------------------------------------------

--
-- Structure de la table `bougie`
--

CREATE TABLE `bougie` (
  `id_bougie` int(11) NOT NULL,
  `nom_bougie` varchar(255) NOT NULL,
  `parfum_bougie` text,
  `image_bougie` text NOT NULL,
  `poids_bougie` float NOT NULL,
  `stock_bougie` int(11) NOT NULL,
  `prix_bougie` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `bougie`
--

INSERT INTO `bougie` (`id_bougie`, `nom_bougie`, `parfum_bougie`, `image_bougie`, `poids_bougie`, `stock_bougie`, `prix_bougie`) VALUES
(1, 'Bougie Gourmande', 'Ambre, Agrumes, Aloe Verra, Banane, Bois de Santal, Brioche au Beurre, Caramel Beurre Salé, Cassis Fressia, Cerise Noire Explosive, Chocolat Noisette, Edelweiss, Fleur de Coton, Fraise des Bois, Framboise, Frangipanier Jasmin, Lavande, Licorne, Madeleine ,Mimosa, Noix de Coco, Pain d\'épices, Patchouli, Pivoine, Vanille, Vin Chaud, Violette', 'bougie_gourmande.png', 350, 1, 17);

-- --------------------------------------------------------

--
-- Structure de la table `brume_parfume`
--

CREATE TABLE `brume_parfume` (
  `id_brume` int(11) NOT NULL,
  `nom_brume` varchar(255) NOT NULL,
  `parfum_brume` varchar(255) NOT NULL,
  `image_brume` text NOT NULL,
  `poids_brume` float NOT NULL,
  `stock_brume` int(11) NOT NULL,
  `prix_brume` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `id_commentaire` int(11) NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `commentaire` text NOT NULL,
  `note` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`id_commentaire`, `id_utilisateur`, `commentaire`, `note`) VALUES
(1, 1, 'Premier commentaire pour test l\'affichage et pouvoir mettre le design en place en gros un commentaire de test :)', 3),
(2, 2, 'Et de 2 juste pour voir ce que sa donne et faire d\'autre test ', 5);

-- --------------------------------------------------------

--
-- Structure de la table `fiole`
--

CREATE TABLE `fiole` (
  `id_fiole` int(11) NOT NULL,
  `nom_fiole` varchar(255) NOT NULL,
  `parfum_fiole` varchar(255) NOT NULL,
  `img_fiole` text,
  `poids_fiole` int(11) NOT NULL,
  `stock_fiole` int(11) NOT NULL,
  `prix_fiole` float NOT NULL,
  `promo_fiole` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Déchargement des données de la table `fiole`
--

INSERT INTO `fiole` (`id_fiole`, `nom_fiole`, `parfum_fiole`, `img_fiole`, `poids_fiole`, `stock_fiole`, `prix_fiole`, `promo_fiole`) VALUES
(1, 'Fiole Agrumes', 'Agrumes', 'fiole_agrumes.png', 15, 0, 5, 0),
(2, 'Fiole Aloe vera', 'Aloe vera', 'fiole_aloe_vera.png', 15, 0, 5, 0),
(3, 'Fiole Ambre', 'Ambre', 'fiole_ambre.png', 15, 0, 5, 0),
(4, 'Fiole Banane', 'Banane', 'fiole_banane.png', 15, 0, 5, 0),
(5, 'Fiole Brioche au beurre', 'Brioche au beurre', 'fiole_brioche_au_beurre.png', 15, 0, 5, 0),
(6, 'Fiole Café', 'Café', 'fiole_cafe.png', 15, 0, 5, 0),
(7, 'Fiole Caramel beurre salé', 'Caramel beurre salé', 'fiole_caramal_beurre__sale.png', 15, 0, 5, 0),
(8, 'Fiole Cerise noire explosive', 'Cerise noire explosive', 'fiole_cerise_noire_explosive.png', 15, 0, 5, 0),
(9, 'Fiole Cola', 'Cola', 'fiole_cola.png', 15, 0, 5, 0),
(10, 'Fiole Creme de soin', 'Creme de soin', 'fiole_creme_de_soin.png', 15, 0, 5, 0),
(11, 'Fiole Edelweiss', 'Edelweiss', 'fiole_edelweiss.png', 15, 0, 5, 0),
(12, 'Fiole Eucalyptus', 'Eucalyptus', 'fiole_eucalyptus.png', 15, 0, 5, 0),
(13, 'Fiole Fleur de coton', 'Fleur de coton', 'fiole_fleur_de_coton.png', 15, 0, 5, 0),
(14, 'Fiole Fraise des bois', 'Fraise des bois', 'fiole_fraise_des_bois.png', 15, 0, 5, 0),
(15, 'Fiole Framboise', 'Framboise', 'fiole_framboise.png', 15, 0, 5, 0),
(16, 'Fiole Fruit rouges', 'Fruits rouges', 'fioles_fruits_rouges.png', 15, 0, 5, 0),
(17, 'Fiole Guimauve', 'Guimauve', 'fiole_guimauve.png', 15, 0, 5, 0),
(18, 'Fiole Lavande', 'Lavande', 'fiole_lavande.png', 15, 0, 5, 0),
(19, 'Fiole Licorne', 'Licorne', 'fiole_licorne.png', 15, 0, 5, 0),
(20, 'Fiole Madeleine', 'Madeleine', 'fiole_madeleine.png', 15, 0, 5, 0),
(21, 'Fiole Mandarine', 'Mandarine', 'fiole_mandarine.png', 15, 0, 5, 0),
(22, 'Fiole Mimosa', 'Mimosa', 'fiole_mimosa.png', 15, 0, 5, 0),
(23, 'Fiole Noix de coco', 'Noix de coco', 'fiole_noix_de_coco.png', 15, 0, 5, 0),
(24, 'Fiole Patchouli', 'Patchouli', 'fiole_patchouli.png', 15, 0, 5, 0),
(25, 'Fiole Pivoine', 'Pivoine', 'fiole_pivoine.png', 15, 0, 5, 0),
(26, 'Fiole Poire', 'Poire', 'fiole_poire.png', 15, 0, 5, 0),
(27, 'Fiole Rose', 'Rose', 'fiole_rose.png', 15, 0, 5, 0),
(28, 'Fiole The noir  vanille', 'The noir vanille', 'fiole_the_noir_vanille.png', 15, 0, 5, 0),
(29, 'Fiole Vanille', 'Vanille', 'fiole_vanille.png', 15, 0, 5, 0),
(30, 'Fiole Violette', 'Violette', 'fiole_violette.png', 15, 0, 5, 0);

-- --------------------------------------------------------

--
-- Structure de la table `fondant`
--

CREATE TABLE `fondant` (
  `id_fondant` int(11) NOT NULL,
  `nom_fondant` varchar(255) NOT NULL,
  `parfum_fondant` varchar(255) NOT NULL,
  `img_fondant_1` text,
  `poids_forme_1` int(11) NOT NULL,
  `stock_forme_1` int(11) NOT NULL,
  `prix_forme_1` float NOT NULL,
  `promo_fondant` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Déchargement des données de la table `fondant`
--

INSERT INTO `fondant` (`id_fondant`, `nom_fondant`, `parfum_fondant`, `img_fondant_1`, `poids_forme_1`, `stock_forme_1`, `prix_forme_1`, `promo_fondant`) VALUES
(2, 'fondant Ambre ', 'ambre', 'fondant_ambre.png', 15, 4, 2, NULL),
(3, 'fondant Banane', 'banane', 'fondant_banane.png', 15, 5, 2, NULL),
(4, 'fondant Brioche au beurre', 'brioche au beurre', 'fondant_brioche_au_beurre.png', 15, 0, 2, NULL),
(5, 'fondant Cafe', 'cafe', 'fondant_cafe.png', 15, 3, 2, NULL),
(6, 'fondant Caramel beurre sale', 'caramel beurre sale', 'fondant_caramel_au_beurre_sale.png', 15, 3, 2, NULL),
(7, 'fondant Cerise noire explosive', 'cerise noire explosive', 'fondant_cerise_noire_explosive.png', 15, 3, 2, NULL),
(8, 'fondant Cola', 'cola', 'fondant_cola.png', 15, 0, 2, NULL),
(9, 'fondant Creme de soin', 'creme de soin', 'fondant_creme_de_soin.png', 15, 3, 2, NULL),
(10, 'fondant Edelweiss', 'edelweiss', 'fondant_edelweiss.png', 15, 5, 2, NULL),
(11, 'fondant Eucalyptus', 'eucalyptus', 'fondant_eucalyptus.png', 15, 0, 2, NULL),
(12, 'fondant Fleur de coton', 'fleur de coton', 'fondant_fleur_de_coton.png', 15, 4, 2, NULL),
(13, 'fondant Fraise des bois', 'fraise des bois', 'fondant_fraise_des_bois.png', 15, 1, 2, NULL),
(14, 'fondant Framboise', 'framboise', 'fondant_framboise.png', 15, 5, 2, NULL),
(15, 'fondant Fruit rouge', 'fruit rouge', 'fondant_fruit_rouge.png', 15, 0, 2, NULL),
(16, 'fondant Guimauve', 'guimauve', 'fondant_guimauve.png', 15, 0, 2, NULL),
(17, 'fondant Lavande', 'lavande', 'fondant_lavande.png', 15, 4, 2, NULL),
(18, 'fondant Licorne', 'licorne', 'fondant_licorne.png', 15, 2, 2, NULL),
(19, 'fondant Madeleine', 'madeleine', 'fondant_madeleine.png', 15, 1, 2, NULL),
(20, 'fondant Mandarine', 'mandarine', 'fondant_mandarine.png', 15, 0, 2, NULL),
(21, 'fondant Mimosa', 'mimosa', 'fondant_mimosa.png', 15, 3, 2, NULL),
(22, 'fondant Noix de coco', 'noix de coco', 'fondant_noix_de_coco.png', 15, 4, 2, NULL),
(23, 'fondant Patchouli', 'patchouli', 'fondant_patchouli.png', 15, 1, 2, NULL),
(24, 'fondant Pivoine', 'pivoine', 'fondant_pivoine.png', 15, 5, 2, NULL),
(25, 'fondant Poire', 'poire', 'fondant_poire.png', 15, 0, 2, NULL),
(26, 'fondant Rose', 'rose', 'fondant_rose.png', 15, 3, 2, NULL),
(27, 'fondant The noir vanille', 'the noir vanille', 'fondant_the_noir_vanille.png', 15, 2, 2, NULL),
(28, 'fondant Vanille', 'vanille', 'fondant_vanille.png', 15, 1, 2, NULL),
(29, 'fondant Violette', 'violette', 'fondant_violette.png', 15, 4, 2, NULL),
(30, 'fondant Aloe vera', 'Aloe Vera', 'fondant_aloe_vera.png', 15, 3, 2, NULL),
(31, 'fondant Agrumes', 'Agrumes', 'fondant_agrumes.png', 15, 5, 2, 0);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id_utilisateur` int(11) NOT NULL,
  `nom_utilisateur` varchar(255) DEFAULT NULL,
  `prenom_utilisateur` varchar(255) DEFAULT NULL,
  `mail_utilisateur` varchar(255) NOT NULL,
  `motdepasse` text NOT NULL,
  `civilite_utilisateur` varchar(255) DEFAULT NULL,
  `admin` tinyint(4) NOT NULL DEFAULT '0',
  `validation` tinyint(4) NOT NULL DEFAULT '0',
  `tel_utilisateur` varchar(255) DEFAULT NULL,
  `adresse_utilisateur` varchar(255) DEFAULT NULL,
  `code_postal` varchar(255) DEFAULT NULL,
  `ville` varchar(255) DEFAULT NULL,
  `pays` varchar(255) DEFAULT NULL,
  `fidelite` float DEFAULT NULL,
  `user_img` varchar(255) NOT NULL DEFAULT 'f_rose.svg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_utilisateur`, `nom_utilisateur`, `prenom_utilisateur`, `mail_utilisateur`, `motdepasse`, `civilite_utilisateur`, `admin`, `validation`, `tel_utilisateur`, `adresse_utilisateur`, `code_postal`, `ville`, `pays`, `fidelite`, `user_img`) VALUES
(1, 'Declemy', 'Jade', 'declemyjade@gmail.com', '$2y$10$tDjwRs7PLBQGgHle7k7DFOudVtdCqKDorkkZAaUhwEl5NRj8K3jC.', 'Madame', 1, 1, '0636891425', '650 Chemin Latéral', '62730', 'Les Attaques', 'France', NULL, 'f_rose.svg'),
(2, 'Averlan', 'Allan', 'allan.averlan@laposte.net', '$2y$10$9RkuzfKDw0kuyEydqmoMnuAelitQtNUmtiIeVvWFm2OgjL3w8P7qm', NULL, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, 'h_pirate.svg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `avatar`
--
ALTER TABLE `avatar`
  ADD PRIMARY KEY (`id_avatar`);

--
-- Index pour la table `bougie`
--
ALTER TABLE `bougie`
  ADD PRIMARY KEY (`id_bougie`);

--
-- Index pour la table `brume_parfume`
--
ALTER TABLE `brume_parfume`
  ADD PRIMARY KEY (`id_brume`);

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`id_commentaire`),
  ADD KEY `id_utilisateur` (`id_utilisateur`);

--
-- Index pour la table `fiole`
--
ALTER TABLE `fiole`
  ADD PRIMARY KEY (`id_fiole`);

--
-- Index pour la table `fondant`
--
ALTER TABLE `fondant`
  ADD PRIMARY KEY (`id_fondant`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id_utilisateur`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `bougie`
--
ALTER TABLE `bougie`
  MODIFY `id_bougie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `brume_parfume`
--
ALTER TABLE `brume_parfume`
  MODIFY `id_brume` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `id_commentaire` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `fiole`
--
ALTER TABLE `fiole`
  MODIFY `id_fiole` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT pour la table `fondant`
--
ALTER TABLE `fondant`
  MODIFY `id_fondant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `commentaire_ibfk_1` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
