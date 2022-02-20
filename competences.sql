-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 20 fév. 2022 à 16:52
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `competences`
--

-- --------------------------------------------------------

--
-- Structure de la table `activite`
--

CREATE TABLE `activite` (
  `id_activite` int(11) NOT NULL,
  `identifiant` varchar(50) DEFAULT NULL,
  `nom` varchar(200) DEFAULT NULL,
  `id_bloc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `activite`
--

INSERT INTO `activite` (`id_activite`, `identifiant`, `nom`, `id_bloc`) VALUES
(1, 'B1.1', 'Gérer le patrimoine informatique', 1),
(2, 'B1.2', 'Répondre aux incidents et aux demandes d’assistance et d’évolution', 1),
(3, 'B1.3', 'Développer la présence en ligne de l’organisation', 1),
(4, 'B1.4', 'Travailler en mode projet', 1),
(5, 'B1.5', 'Mettre à disposition des utilisateurs un service informatique', 1),
(6, 'B1.6', 'Organiser son développement professionnel', 1),
(7, 'B2.1', 'Concevoir et développer une solution applicative', 2),
(8, 'B2.2', 'Assurer la maintenance corrective ou évolutive d’une solution applicative', 2),
(9, 'B2.3', 'Gérer les données', 2),
(10, 'B3.1', 'Protéger les données à caractère personnel', 3),
(11, 'B3.2', 'Préserver l\'identité numérique de l’organisation', 3),
(12, 'B3.3', 'Sécuriser les équipements et les usages des utilisateurs', 3),
(13, 'B3.4', 'Garantir la disponibilité, l’intégrité et la confidentialité des services informatiques et des données de l’organisation face à des cyberattaques', 3),
(14, 'B3.5', 'Assurer la cybersécurité d’une solution applicative et de son développement', 3);

-- --------------------------------------------------------

--
-- Structure de la table `bloc`
--

CREATE TABLE `bloc` (
  `id_bloc` int(11) NOT NULL,
  `identifiant` varchar(50) DEFAULT NULL,
  `nom` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `bloc`
--

INSERT INTO `bloc` (`id_bloc`, `identifiant`, `nom`) VALUES
(1, 'BLOC1', 'Support et mise à disposition de services informatiques'),
(2, 'BLOC2', 'Conception et développement d’applications'),
(3, 'BLOC3', 'Cybersécurité des services informatiques');

-- --------------------------------------------------------

--
-- Structure de la table `competence`
--

CREATE TABLE `competence` (
  `id_competence` int(11) NOT NULL,
  `identifiant` varchar(50) DEFAULT NULL,
  `nom` varchar(200) DEFAULT NULL,
  `id_activite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `competence`
--

INSERT INTO `competence` (`id_competence`, `identifiant`, `nom`, `id_activite`) VALUES
(1, 'B1.1.1', 'Recenser et identifier les ressources numériques', 1),
(2, 'B1.1.2', 'Exploiter des référentiels, normes et standards adoptés par le prestataire informatique', 1),
(3, 'B1.1.3', 'Mettre en place et vérifier les niveaux d’habilitation associés à un service', 1),
(4, 'B1.1.4', 'Vérifier les conditions de la continuité d’un service informatique', 1),
(5, 'B1.1.5', 'Gérer des sauvegardes', 1),
(6, 'B1.1.6', 'Vérifier le respect des règles d’utilisation des ressources numériques', 1),
(7, 'B1.2.1', 'Collecter, suivre et orienter des demandes', 2),
(8, 'B1.2.2', 'Traiter des demandes concernant les services réseau et système, applicatifs', 2),
(9, 'B1.2.3', 'Traiter des demandes concernant les applications', 2),
(10, 'B1.3.1', 'Participer à la valorisation de l’image de l’organisation sur les médias numériques en tenant compte du cadre juridique et des enjeux économiques', 3),
(11, 'B1.3.2', 'Référencer les services en ligne de l’organisation et mesurer leur visibilité.', 3),
(12, 'B1.3.3', 'Participer à l’évolution d’un site Web exploitant les données de l’organisation.', 3),
(13, 'B1.4.1', 'Analyser les objectifs et les modalités d’organisation d’un projet', 4),
(14, 'B1.4.2', 'Planifier les activités', 4),
(15, 'B1.4.3', 'Évaluer les indicateurs de suivi d’un projet et analyser les écarts', 4),
(16, 'B1.5.1', 'Réaliser les tests d’intégration et d’acceptation d’un service', 5),
(17, 'B1.5.2', 'Déployer un service', 5),
(18, 'B1.5.3', 'Accompagner les utilisateurs dans la mise en place d’un service', 5),
(19, 'B1.6.1', 'Mettre en place son environnement d’apprentissage personnel', 6),
(20, 'B1.6.2', 'Mettre en œuvre des outils et stratégies de veille informationnelle', 6),
(21, 'B1.6.3', 'Gérer son identité professionnelle', 6),
(22, 'B1.6.4', 'Développer son projet professionnel', 6),
(23, 'B2.1.1', 'Analyser un besoin exprimé et son contexte juridique', 7),
(24, 'B2.1.2', 'Participer à la conception de l’architecture d’une solution applicative', 7),
(25, 'B2.1.3', 'Modéliser une solution applicative', 7),
(26, 'B2.1.4', 'Exploiter les ressources du cadre applicatif (framework)', 7),
(27, 'B2.1.5', 'Identifier, développer, utiliser ou adapter des composants logiciels', 7),
(28, 'B2.1.6', 'Exploiter les technologies Web pour mettre en œuvre les échanges entre applications, y compris de mobilité', 7),
(29, 'B2.1.7', 'Utiliser des composants d’accès aux données', 7),
(30, 'B2.1.8', 'Intégrer en continu les versions d’une solution applicative', 7),
(31, 'B2.1.9', 'Réaliser les tests nécessaires à la validation ou à la mise en production d’éléments adaptés ou développés', 7),
(32, 'B2.1.10', 'Rédiger des documentations technique et d’utilisation d’une solution applicative', 7),
(33, 'B2.1.11', 'Exploiter les fonctionnalités d’un environnement de développement et de tests', 7),
(34, 'B2.2.1', 'Recueillir, analyser et mettre à jour les informations sur une version d’une solution applicative', 8),
(35, 'B2.2.2', 'Évaluer la qualité d’une solution applicative', 8),
(36, 'B2.2.3', 'Analyser et corriger un dysfonctionnement', 8),
(37, 'B2.2.4', 'Mettre à jour des documentations technique et d’utilisation d’une solution applicative', 8),
(38, 'B2.2.5', 'Élaborer et réaliser les tests des éléments mis à jour', 8),
(39, 'B2.3.1', 'Exploiter des données à l’aide d’un langage de requêtes', 9),
(40, 'B2.3.2', 'Développer des fonctionnalités applicatives au sein d’un système de gestion de base de données (relationnel ou non)', 9),
(41, 'B2.3.3', 'Concevoir ou adapter une base de données', 9),
(42, 'B2.3.4', 'Administrer et déployer une base de données', 9),
(43, 'B3.1.1', 'Recenser les traitements sur les données à caractère personnel au sein de l’organisation', 10),
(44, 'B3.1.2', 'Identifier les risques liés à la collecte, au traitement, au stockage et à la diffusion des données à caractère personnel', 10),
(45, 'B3.1.3', 'Appliquer la réglementation en matière de collecte, de traitement et de conservation des données à caractère personnel', 10),
(46, 'B3.1.4', 'Sensibiliser les utilisateurs à la protection des données à caractère personnel', 10),
(47, 'B3.2.1', 'Protéger l’identité numérique d’une organisation', 11),
(48, 'B3.2.2', 'Déployer les moyens appropriés de preuve électronique', 11),
(49, 'B3.3.1', 'Informer les utilisateurs sur les risques associés à l’utilisation d’une ressource numérique et promouvoir les bons usages à adopter', 12),
(50, 'B3.3.2', 'Identifier les menaces et mettre en œuvre les défenses appropriées', 12),
(51, 'B3.3.3', 'Gérer les accès et les privilèges appropriés', 12),
(52, 'B3.3.4', 'Vérifier l’efficacité de la protection', 12),
(53, 'B3.4.1', 'Caractériser les risques liés à l’utilisation malveillante d’un service informatique', 13),
(54, 'B3.4.2', 'Recenser les conséquences d’une perte de disponibilité, d’intégrité ou de confidentialité', 13),
(55, 'B3.4.3', 'Identifier les obligations légales qui s’imposent en matière d’archivage et de protection des données de l’organisation', 13),
(56, 'B3.4.4', 'Organiser la collecte et la conservation des preuves numériques', 13),
(57, 'B3.4.5', 'Appliquer les procédures garantissant le respect des obligations légales', 13),
(58, 'B3.5.1', 'Participer à la vérification des éléments contribuant à la qualité d’un développement informatique', 14),
(59, 'B3.5.2', 'Prendre en compte la sécurité dans un projet de développement d’une solution applicative', 14),
(60, 'B3.5.3', 'Mettre en œuvre et vérifier la conformité d’une solution applicative et de son développement à un référentiel, une norme ou un standard de sécurité', 14),
(61, 'B3.5.4', 'Prévenir les attaques', 14),
(62, 'B3.5.5', 'Analyser les connexions (logs)', 14),
(63, 'B3.5.6', 'Analyser des incidents de sécurité, proposer et mettre en œuvre des contre-mesures', 14);

-- --------------------------------------------------------

--
-- Structure de la table `competence_visee`
--

CREATE TABLE `competence_visee` (
  `id_competence_visee` int(11) NOT NULL,
  `detail` text DEFAULT NULL,
  `id_realisation` int(11) NOT NULL,
  `id_competence` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `realisation`
--

CREATE TABLE `realisation` (
  `id_realisation` int(11) NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `contexte` varchar(50) DEFAULT NULL,
  `date_debut` date DEFAULT NULL,
  `duree` int(11) DEFAULT NULL,
  `duree_type` varchar(50) DEFAULT NULL,
  `detail` text DEFAULT NULL,
  `date_creation` date DEFAULT NULL,
  `id_utilisateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `realisation`
--

INSERT INTO `realisation` (`id_realisation`, `nom`, `contexte`, `date_debut`, `duree`, `duree_type`, `detail`, `date_creation`, `id_utilisateur`) VALUES
(8, 'test', NULL, '2022-01-13', 4, 'jour(s)', 'j', '2022-01-22', 1),
(9, 'test2', NULL, '2022-01-05', 4, 'jour(s)', 'd', '2022-01-23', 1);

-- --------------------------------------------------------

--
-- Structure de la table `source`
--

CREATE TABLE `source` (
  `id_source` int(11) NOT NULL,
  `URI` varchar(50) DEFAULT NULL,
  `detail` text DEFAULT NULL,
  `id_realisation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `source`
--

INSERT INTO `source` (`id_source`, `URI`, `detail`, `id_realisation`) VALUES
(1, 'uri/d', 'uri details', 9),
(2, NULL, NULL, 8);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id_utilisateur` int(11) NOT NULL,
  `identifiant` varchar(100) DEFAULT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `mdp` varchar(50) DEFAULT NULL,
  `type_compte` varchar(50) DEFAULT NULL,
  `page` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_utilisateur`, `identifiant`, `nom`, `prenom`, `mdp`, `type_compte`, `page`) VALUES
(1, '20collab', 'nomCollab', 'prenomCollab', '1234', 'collaborateur', 'creation'),
(2, 'rh', 'nomRh', 'prenomRh', '0000', 'admin', NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `activite`
--
ALTER TABLE `activite`
  ADD PRIMARY KEY (`id_activite`),
  ADD KEY `id_bloc` (`id_bloc`);

--
-- Index pour la table `bloc`
--
ALTER TABLE `bloc`
  ADD PRIMARY KEY (`id_bloc`);

--
-- Index pour la table `competence`
--
ALTER TABLE `competence`
  ADD PRIMARY KEY (`id_competence`),
  ADD KEY `id_activite` (`id_activite`);

--
-- Index pour la table `competence_visee`
--
ALTER TABLE `competence_visee`
  ADD PRIMARY KEY (`id_competence_visee`),
  ADD KEY `id_realisation` (`id_realisation`),
  ADD KEY `id_competence` (`id_competence`);

--
-- Index pour la table `realisation`
--
ALTER TABLE `realisation`
  ADD PRIMARY KEY (`id_realisation`),
  ADD KEY `id_utilisateur` (`id_utilisateur`);

--
-- Index pour la table `source`
--
ALTER TABLE `source`
  ADD PRIMARY KEY (`id_source`),
  ADD KEY `id_realisation` (`id_realisation`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id_utilisateur`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `activite`
--
ALTER TABLE `activite`
  MODIFY `id_activite` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `bloc`
--
ALTER TABLE `bloc`
  MODIFY `id_bloc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `competence`
--
ALTER TABLE `competence`
  MODIFY `id_competence` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT pour la table `competence_visee`
--
ALTER TABLE `competence_visee`
  MODIFY `id_competence_visee` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `realisation`
--
ALTER TABLE `realisation`
  MODIFY `id_realisation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `source`
--
ALTER TABLE `source`
  MODIFY `id_source` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `activite`
--
ALTER TABLE `activite`
  ADD CONSTRAINT `activite_ibfk_1` FOREIGN KEY (`id_bloc`) REFERENCES `bloc` (`id_bloc`);

--
-- Contraintes pour la table `competence`
--
ALTER TABLE `competence`
  ADD CONSTRAINT `competence_ibfk_1` FOREIGN KEY (`id_activite`) REFERENCES `activite` (`id_activite`);

--
-- Contraintes pour la table `competence_visee`
--
ALTER TABLE `competence_visee`
  ADD CONSTRAINT `competence_visee_ibfk_1` FOREIGN KEY (`id_realisation`) REFERENCES `realisation` (`id_realisation`),
  ADD CONSTRAINT `competence_visee_ibfk_2` FOREIGN KEY (`id_competence`) REFERENCES `competence` (`id_competence`);

--
-- Contraintes pour la table `realisation`
--
ALTER TABLE `realisation`
  ADD CONSTRAINT `realisation_ibfk_1` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`);

--
-- Contraintes pour la table `source`
--
ALTER TABLE `source`
  ADD CONSTRAINT `source_ibfk_1` FOREIGN KEY (`id_realisation`) REFERENCES `realisation` (`id_realisation`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
