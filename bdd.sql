-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost:8889
-- Généré le :  Mar 29 Septembre 2015 à 19:23
-- Version du serveur :  5.5.38
-- Version de PHP :  5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `gsb`
--

-- --------------------------------------------------------

--
-- Structure de la table `HistoryPanne`
--

CREATE TABLE `HistoryPanne` (
`idPanne` int(255) NOT NULL,
  `datePanne` varchar(20) NOT NULL,
  `typeMaterielPanne` varchar(50) NOT NULL,
  `urgencePanne` varchar(50) NOT NULL,
  `peripheriquePanne` varchar(50) NOT NULL,
  `DescriptifPane` varchar(255) NOT NULL,
  `IdOrdinateurPanne` varchar(50) NOT NULL,
  `identifiantConnect` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `HistoryPanne`
--

INSERT INTO `HistoryPanne` (`idPanne`, `datePanne`, `typeMaterielPanne`, `urgencePanne`, `peripheriquePanne`, `DescriptifPane`, `IdOrdinateurPanne`, `identifiantConnect`) VALUES
(38, '99 Dec 9999', 'Hardware', 'Moyen', '', 'Le disque claque ', 'Lenovo 0121', ''),
(39, '99 Dec 9999', 'Peripherique', 'Urgent', 'Souris', 'Ma souris commence a rendre l''ame !! ', 'Asus 456', 'perso01'),
(40, '4 mars 2015', 'Hardware', 'Trés urgent', ' ', 'Mon ordi ne fonctionne plus .. ', 'Lenovo x0123', 'perso01'),
(41, '99 Dec 9999', 'Software', 'Tres Urgent', '', 'J''ai besoin d''aide svp. Je vous remercie.. ', 'Lenovo 0121', 'perso01'),
(42, '99 Dec 9999', 'Peripherique', 'Tres Urgent', 'Imprimante', 'Mon imprimante ne fonctionne plus merci d''intervenir rapidement (utilisation de celle-ci tous les jours). MERCI  Mon imprimante ne fonctionne plus merci d''in', 'Asus 456', 'perso01'),
(43, '1 avr. 2015', 'Peripherique', 'Moyenne', ' Souris ', 'Elle fonctionne male ', 'Lenovo x0123', 'perso01'),
(44, '8 avr. 2015', 'Hardware', 'Urgent', ' ', 'iijijiij', 'Lenovo 0121', 'perso01'),
(45, '24 avr. 2015', 'Software', 'Urgent', ' ', 'jijijijhygygcrctcvgvjknlkjoigitruytvljùjgfkg:klkhittyedjghbj:', 'Lenovo x0126', 'perso02'),
(46, '16 avr. 2015', 'Peripherique', 'Moyenne', ' Clavier Imprimante ', '', 'Lenovo x0123', 'perso01'),
(47, '25 avr. 2015', 'Hardware', 'Urgent', ' ', '', 'Lenovo x0138', 'perso02'),
(48, '15 avr. 2015', 'Hardware', 'Trés urgent', ' ', 'disque dure ', 'Lenovox0120', 'perso02'),
(49, '9 avr. 2015', 'Peripherique', 'Moyenne', ' Ecran Imprimante ', 'ok ', 'Lenovox0120', 'perso02'),
(50, '9 avr. 2015', 'Software', 'Urgent', ' Ecran Imprimante ', 'ok ', 'Lenovox0120', 'perso02'),
(51, '9 avr. 2015', 'Software', 'Trés urgent', ' Ecran Imprimante ', 'ok ', 'Lenovox0120', 'perso02'),
(52, '9 avr. 2015', 'Hardware', 'Trés urgent', ' Ecran Imprimante ', 'ok ', 'Lenovo x0124', 'perso02'),
(53, '9 avr. 2015', 'Hardware', 'Moyenne', ' Ecran Imprimante ', 'ok ', 'Lenovo x0126', 'perso02'),
(54, '9 avr. 2015', 'Hardware', 'Moyenne', ' Ecran Imprimante ', 'ok ', 'Lenovo x0126', 'perso02'),
(55, '9 avr. 2015', 'Hardware', 'Moyenne', ' Ecran Imprimante ', 'ok ', 'Lenovo x0126', 'perso02'),
(56, '9 avr. 2015', 'Hardware', 'Moyenne', ' Ecran Imprimante ', 'ok ', 'Lenovo x0126', 'perso02'),
(57, '99 Dec 9999', 'Peripherique', 'Moyen', '', 'ssss', 'Lenovox0120', 'perso01'),
(58, '99 Dec 9999', 'Peripherique', 'Moyen', 'Clavier', 'ssss', 'Lenovox0120', 'perso01'),
(59, '99 Dec 9999', 'Peripherique', 'Moyen', 'Clavier', 'ssss', 'Lenovox0120', 'perso01'),
(60, '99 Dec 9999', 'Peripherique', 'Moyen', 'Ecran', 'ecran ', 'Lenovo x0140', 'perso01'),
(61, '99 Dec 9999', 'Peripherique', 'Moyen', 'Souris', 'cdces', 'Lenovox0120', 'perso01'),
(62, '1 Janv. 1990', 'Hardware', 'Moyen', '', 'zszdzdz', 'Lenovox0120', 'perso01'),
(63, '1 Sept. 1990', 'Hardware', 'Moyen', '', 'mon pc ne fonctionne pas correctement ', 'Lenovo x0124', 'perso01'),
(64, '1 Sept. 1990', 'Hardware', 'Moyen', '', 'mon pc ne fonctionne pas correctement ', 'Lenovo x0124', 'perso01'),
(65, '1 avr. 2015', 'Peripherique', 'Trés urgent', ' Imprimante ', 'okok merci d ressourdre le probleme dans les plus bref delais \n', 'Lenovo x0122', 'perso01'),
(66, '4 Nov. 1993', 'Software', 'Urgent', '', 'k,,\r\n', 'Lenovox0120', 'perso01'),
(67, '4 Nov. 1993', 'Software', 'Urgent', '', 'k,,\r\n', 'Lenovox0120', 'perso01'),
(68, '3 mai 2015', 'Peripherique', 'Trés urgent', ' Clavier ', 'Merci de réagir vite.. ', 'Lenovo x0124', 'perso01'),
(69, '4 Nov. 1991', 'Software', 'Urgent', '', 'merci ', 'Lenovox0120', ''),
(70, '3 Oct. 2014', 'Peripherique', 'Tres urgent', 'Clavier', 'Touche "e" ne fonctionne pas ', 'Lenovox0120', ''),
(71, '6 mai 2015', 'Peripherique', 'Trés urgent', ' Imprimante ', 'imprime mal', 'Lenovo 0121', 'perso01'),
(72, '1 mai 2015', 'Peripherique', 'Moyenne', ' Imprimante ', 'imprimante fonctionne pas merci de nous aider', 'Lenovox0120', 'perso01'),
(73, '6 mai 2015', 'Software', 'Trés urgent', ' ', 'merci de régler cela vite merci. ', 'Asus 456', 'perso01'),
(74, '6 mai 2015', 'Software', 'Trés urgent', ' ', 'Encore', 'Asus 456', 'perso01'),
(75, '6 mai 2015', 'Software', 'Trés urgent', ' ', 'ok ', 'Asus 456', 'perso01'),
(76, '7 mai 2015', 'Software', 'Moyenne', ' ', 'merci ok ', 'Asus 456', 'perso01'),
(77, '15 mai 2015', 'Hardware', 'Urgent', ' ', 'lol ', 'Asus 456', 'perso01'),
(78, '6 mai 2015', 'toto', 'Urgent', ' ', 'merci ', 'Asus 456', 'perso01'),
(79, '6 mai 2015', 'Hardware', 'Urgent', ' ', 'ok', 'Asus 456', 'perso01'),
(80, '6 mai 2015', 'Software', 'Urgent', ' ', 'ok', 'Lenovox0120', 'perso01'),
(81, '1 mai 2015', 'toto', 'Trés urgent', ' ', 'ok', 'Lenovo x0137', 'perso01');

-- --------------------------------------------------------

--
-- Structure de la table `intervenants`
--

CREATE TABLE `intervenants` (
  `id` int(11) NOT NULL,
  `mdp` varchar(10) NOT NULL,
  `login` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `intervenants`
--

INSERT INTO `intervenants` (`id`, `mdp`, `login`) VALUES
(0, '1nt3r01', 'inter01'),
(1, '1nt3r02', 'inter02');

-- --------------------------------------------------------

--
-- Structure de la table `intervention`
--

CREATE TABLE `intervention` (
`idIntervention` int(11) NOT NULL,
  `dateIntervention` varchar(50) NOT NULL,
  `machineIntervention` varchar(50) NOT NULL,
  `composantSelectIntervention` varchar(50) DEFAULT NULL,
  `idPanneIntervention` int(250) NOT NULL,
  `RCCIntervention` varchar(50) DEFAULT NULL,
  `infoIntervention` varchar(255) DEFAULT NULL,
  `idintervenant` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `intervention`
--

INSERT INTO `intervention` (`idIntervention`, `dateIntervention`, `machineIntervention`, `composantSelectIntervention`, `idPanneIntervention`, `RCCIntervention`, `infoIntervention`, `idintervenant`) VALUES
(1, '99 Dec 9999', 'Lenovox0120', '', 13, '', '', ''),
(2, '99 Dec 9999', 'Lenovox0120', 'carteMere', 36, '', '', 'inter01'),
(3, '99 Dec 9999', 'Asus 456', '', 37, '', 'Votre souris a Ã©tais remplacer; elle devrais fonctionnÃ© correctement. Cordialement inter01 a votre service ! ', 'inter01'),
(4, '99 Dec 9999', 'Lenovox0120', 'carteMere', 38, 'CaRtE MeRE', 'Votre carte mere a etais changer avec succÃ©s ', 'inter01'),
(5, '99 Dec 9999', 'Lenovo 0121', '', 1, '', 'Quel genre d''aide ? merci', 'inter01'),
(6, '99 Dec 9999', 'Lenovox0120', '', 4, '', '', 'inter01'),
(7, '99 Dec 9999', 'Asus 456', '', 2, '', '', 'inter01'),
(8, '99 Dec 9999', 'Asus 456', '', 2, '', '', 'inter01'),
(9, '99 Dec 9999', 'Lenovo x0123', '', 3, 'propre', 'prore ', 'inter01'),
(10, '99 Dec 9999', 'Lenovo x0123', '', 3, 'propre', 'prore ', 'inter01'),
(11, '99 Dec 9999', 'Lenovo x0126', '', 5, 'okok', 'okok ', 'inter01'),
(12, '99 Dec 9999', '', '', 0, '', '', 'inter01'),
(13, '1 Janv. 2015', 'Lenovo x0126', '', 16, 'clavier souris ', 'c''est parfait changer a neuf. ', 'inter01'),
(14, '1 Sept. 1990', 'Lenovo x0126', '', 13, 'rf ', 'rf ', 'inter01'),
(15, '1 Sept. 1991', 'Lenovo x0126', 'processeur', 14, 'okok', 'okok ', 'inter01'),
(16, '1 Oct. 1990', 'Lenovox0120', 'Lecteur', 16, 'cezfze', 'efzfez', 'inter01'),
(17, '4 avr. 2015', 'Lenovox0120', 'Processeur', 8, 'processeur i5', 'changer sans probleme ', 'inter01'),
(18, '3 mai 2015', 'Lenovox0120', '-', 10, '-', 'merci', 'inter01'),
(19, '4 Nov. 1992', 'Lenovo x0124', '', 23, 'word', 'word mis a jour ', 'inter01'),
(20, '1 Nov. 1992', 'Lenovo x0124', '', 12, 'ok', 'ok', 'inter01'),
(21, '3 Dec. 1991', 'Lenovo x0123', '', 6, 'ok', 'ok', 'inter01'),
(22, '3 Dec. 1991', 'Lenovo x0123', '', 6, 'ok', 'ok', 'inter01'),
(23, '4 Nov. 1993', 'Lenovox0120', '', 11, 'ok', 'ok', 'inter01'),
(24, '2 mai 2015', 'Lenovo x0138', 'Carte Mere', 7, 'carte mere ', 'changer', 'inter01'),
(25, '3 mai 2015', 'Lenovox0120', '-', 31, '-', '-Imprimante changer complétement ', 'inter01'),
(26, '1 mai 2015', 'Lenovox0120', '-', 9, '-', '-ecran et imprimante changer', 'inter01'),
(27, '3 mai 2015', 'Lenovox0120', '-', 25, '-', 'ok ', 'inter01'),
(28, '3 mai 2015', 'Lenovox0120', '-', 26, '-', 'ok 2 ', 'inter01'),
(29, '3 mai 2015', 'Lenovox0120', '-', 17, '-', 'ok periph ', 'inter01');

-- --------------------------------------------------------

--
-- Structure de la table `ordinateur`
--

CREATE TABLE `ordinateur` (
`idOrdinateur` int(100) NOT NULL,
  `refOrdinateur` varchar(50) NOT NULL,
  `CarteMere` varchar(50) NOT NULL,
  `Processeur` varchar(50) NOT NULL,
  `MemoireVive` varchar(50) NOT NULL,
  `DisqueDur` varchar(50) NOT NULL,
  `CarteReseau` varchar(50) DEFAULT NULL,
  `Lecteur` varchar(50) NOT NULL,
  `CarteGraphique` varchar(50) DEFAULT NULL,
  `CarteSon` varchar(50) NOT NULL,
  `Alimentation` varchar(50) NOT NULL,
  `numSerieOrdinateur` varchar(100) NOT NULL,
  `dateAchatOrdinateur` varchar(100) NOT NULL,
  `fournisseurOrdinateur` varchar(100) NOT NULL,
  `garantieOrdinateur` varchar(100) NOT NULL,
  `extentionGarantieOrdinateur` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `ordinateur`
--

INSERT INTO `ordinateur` (`idOrdinateur`, `refOrdinateur`, `CarteMere`, `Processeur`, `MemoireVive`, `DisqueDur`, `CarteReseau`, `Lecteur`, `CarteGraphique`, `CarteSon`, `Alimentation`, `numSerieOrdinateur`, `dateAchatOrdinateur`, `fournisseurOrdinateur`, `garantieOrdinateur`, `extentionGarantieOrdinateur`) VALUES
(1, 'Lenovox0120', 'CaRtE MeRE', 'processeur', 'PC3-10665', 'HDD-fujitsu-125 ', 'reseau card', 'lecteur01', 'carte graphique01', 'Aureon-5DOT1-PCI', 'VS450-80PLUS', 'CWZ0145JL09', '23 fevrier 2015', 'TechData', '12mois', 'non'),
(2, 'Lenovo 0121', 'changer.52', 'intel core 2 duo', 'PC3-10666', 'HDD-fujitsu-125 ', 'TP-LINK-TF-3239DL', 'LG-GH24SNB0', 'Radeon-HD-5450', 'Aureon-5DOT1-PCI', 'VS450-80PLUS', '', '', '', '', ''),
(3, 'Lenovo x0122', 'H61M-P20', 'lol', 'PC3-10666', 'HDD-fujitsu-125 ', 'TP-LINK-TF-3239DL', 'LG-GH24SNB0', 'Radeon-HD-5450', 'Aureon-5DOT1-PCI', 'VS450-80PLUS', '', '', '', '', ''),
(4, 'Lenovo x0123', 'H61M-P20', 'IntelCore-i7-4790', 'PC3-10666', 'HDD-fujitsu-125 ', 'TP-LINK-TF-3239DL', 'LG-GH24SNB0', 'Radeon-HD-5450', 'Aureon-5DOT1-PCI', 'VS450-80PLUS', '', '', '', '', ''),
(5, 'Lenovo x0124', 'H61M-P20', 'petium 444444 ', 'PC3-10666', 'HDD-fujitsu-125 ', 'TP-LINK-TF-3239DL', 'LG-GH24SNB0', 'Radeon-HD-5450', 'Aureon-5DOT1-PCI', 'VS450-80PLUS', '', '', '', '', ''),
(6, 'Lenovo x0125', 'H61M-P20', 'IntelCore-i7-4790', 'PC3-10666', 'HDD-fujitsu-125 ', 'TP-LINK-TF-3239DL', 'LG-GH24SNB0', 'Radeon-HD-5450', 'Aureon-5DOT1-PCI', 'VS450-80PLUS', '', '', '', '', ''),
(7, 'Lenovo x0126', 'H61M-P20', 'okok', 'abc', 'HDD-fujitsu-125 ', 'TP-LINK-TF-3239DL', 'LG-GH24SNB0', 'Radeon-HD-5450', 'Aureon-5DOT1-PCI', 'VS450-80PLUS', '', '', '', '', ''),
(8, 'Lenovo x0127', 'sab', 'IntelCore-i7-4790', 'PC3-10666', 'HDD-fujitsu-125 ', 'TP-LINK-TF-3239DL', 'LG-GH24SNB0', 'Radeon-HD-5450', 'Aureon-5DOT1-PCI', 'VS450-80PLUS', '', '', '', '', ''),
(9, 'Lenovo x0128', 'H61M-P20', 'IntelCore-i7-4790', 'PC3-10666', 'HDD-fujitsu-125 ', 'TP-LINK-TF-3239DL', 'LG-GH24SNB0', 'Radeon-HD-5450', 'Aureon-5DOT1-PCI', 'VS450-80PLUS', '', '', '', '', ''),
(10, 'Lenovo x0129', 'H61M-P20', 'IntelCore-i7-4790', 'PC3-10666', 'HDD-fujitsu-125 ', 'TP-LINK-TF-3239DL', 'LG-GH24SNB0', 'Radeon-HD-5450', 'Aureon-5DOT1-PCI', 'VS450-80PLUS', '', '', '', '', ''),
(11, 'Lenovo x0130', 'H61M-P20', 'IntelCore-i7-4790', 'PC3-10666', 'HDD-fujitsu-125 ', 'TP-LINK-TF-3239DL', 'LG-GH24SNB0', 'Radeon-HD-5450', 'Aureon-5DOT1-PCI', 'VS450-80PLUS', '', '', '', '', ''),
(12, 'Lenovo x0131', 'H61M-P20', 'IntelCore-i7-4790', 'PC3-10666', 'HDD-fujitsu-125 ', 'TP-LINK-TF-3239DL', 'LG-GH24SNB0', 'Radeon-HD-5450', 'Aureon-5DOT1-PCI', 'VS450-80PLUS', '', '', '', '', ''),
(13, 'Lenovo x0132', 'H61M-P20', 'IntelCore-i7-4790', 'PC3-10666', 'HDD-fujitsu-125 ', 'TP-LINK-TF-3239DL', 'LG-GH24SNB0', 'Radeon-HD-5450', 'Aureon-5DOT1-PCI', 'VS450-80PLUS', '', '', '', '', ''),
(14, 'Lenovo x0133', 'H61M-P20', 'IntelCore-i7-4790', 'PC3-10666', 'HDD-fujitsu-125 ', 'TP-LINK-TF-3239DL', 'LG-GH24SNB0', 'Radeon-HD-5450', 'Aureon-5DOT1-PCI', 'VS450-80PLUS', '', '', '', '', ''),
(15, 'Lenovo x0134', 'H61M-P20', 'IntelCore-i7-4790', 'PC3-10666', 'HDD-fujitsu-125 ', 'TP-LINK-TF-3239DL', 'LG-GH24SNB0', 'Radeon-HD-5450', 'Aureon-5DOT1-PCI', 'VS450-80PLUS', '', '', '', '', ''),
(16, 'Lenovo x0135', 'H61M-P20', 'IntelCore-i7-4790', 'PC3-10666', 'HDD-fujitsu-125 ', 'TP-LINK-TF-3239DL', 'LG-GH24SNB0', 'Radeon-HD-5450', 'Aureon-5DOT1-PCI', 'VS450-80PLUS', '', '', '', '', ''),
(17, 'Lenovo x0136', 'H61M-P20', 'IntelCore-i7-4790', 'PC3-10666', 'HDD-fujitsu-125 ', 'TP-LINK-TF-3239DL', 'LG-GH24SNB0', 'Radeon-HD-5450', 'Aureon-5DOT1-PCI', 'VS450-80PLUS', '', '', '', '', ''),
(18, 'Lenovo x0137', 'H61M-P20', 'IntelCore-i7-4790', 'PC3-10666', 'HDD-fujitsu-125 ', 'TP-LINK-TF-3239DL', 'LG-GH24SNB0', 'Radeon-HD-5450', 'Aureon-5DOT1-PCI', 'VS450-80PLUS', '', '', '', '', ''),
(19, 'Lenovo x0138', 'carte mere ', 'IntelCore-i7-4790', 'PC3-10666', 'HDD-fujitsu-125 ', 'TP-LINK-TF-3239DL', 'LG-GH24SNB0', 'Radeon-HD-5450', 'Aureon-5DOT1-PCI', 'VS450-80PLUS', '', '', '', '', ''),
(20, 'Lenovo x0139', 'H61M-P20', 'IntelCore-i7-4790', 'PC3-10666', 'HDD-fujitsu-125 ', 'TP-LINK-TF-3239DL', 'LG-GH24SNB0', 'Radeon-HD-5450', 'Aureon-5DOT1-PCI', 'VS450-80PLUS', '', '', '', '', ''),
(21, 'Lenovo x0140', 'H61M-P20', 'IntelCore-i7-4790', 'PC3-10666', 'HDD-fujitsu-125 ', 'TP-LINK-TF-3239DL', 'LG-GH24SNB0', 'Radeon-HD-5450', 'Aureon-5DOT1-PCI', 'VS450-80PLUS', '', '', '', '', ''),
(29, 'Asus 456', 'carte mere ', 'IntelCore-i7-4790', 'PC3-10666', 'HDD-fujitsu-125 ', 'carte reseau', 'LG-GH24SNB0', 'Radeon-HD-5450', 'Aureon-5DOT1-PCI', 'VS450-80PLUS', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `Panne`
--

CREATE TABLE `Panne` (
`idPanne` int(255) NOT NULL,
  `datePanne` varchar(20) NOT NULL,
  `typeMaterielPanne` varchar(50) NOT NULL,
  `urgencePanne` varchar(50) NOT NULL,
  `peripheriquePanne` varchar(50) NOT NULL,
  `DescriptifPane` varchar(255) NOT NULL,
  `IdOrdinateurPanne` varchar(50) NOT NULL,
  `identifiantConnect` varchar(100) NOT NULL COMMENT 'indentifiant personne connection'
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Panne`
--

INSERT INTO `Panne` (`idPanne`, `datePanne`, `typeMaterielPanne`, `urgencePanne`, `peripheriquePanne`, `DescriptifPane`, `IdOrdinateurPanne`, `identifiantConnect`) VALUES
(15, '9 avr. 2015', 'Hardware', 'Moyenne', ' Ecran Imprimante ', 'ok ', 'Lenovo x0126', 'perso02'),
(18, '99 Dec 9999', 'Peripherique', 'Moyen', 'Clavier', 'ssss', 'Lenovox0120', 'perso01'),
(19, '99 Dec 9999', 'Peripherique', 'Moyen', 'Ecran', 'ecran ', 'Lenovo x0140', 'perso01'),
(20, '99 Dec 9999', 'Peripherique', 'Moyen', 'Souris', 'cdces', 'Lenovox0120', 'perso01'),
(21, '1 Janv. 1990', 'Hardware', 'Moyen', '', 'zszdzdz', 'Lenovox0120', 'perso01'),
(22, '1 Sept. 1990', 'Hardware', 'Moyen', '', 'mon pc ne fonctionne pas correctement ', 'Lenovo x0124', 'perso01'),
(24, '1 avr. 2015', 'Peripherique', 'Trés urgent', ' Imprimante ', 'okok merci d ressourdre le probleme dans les plus bref delais \n', 'Lenovo x0122', 'perso01'),
(27, '3 mai 2015', 'Peripherique', 'Trés urgent', ' Clavier ', 'Merci de réagir vite.. ', 'Lenovo x0124', 'perso01'),
(28, '4 Nov. 1991', 'Software', 'Urgent', '', 'merci ', 'Lenovox0120', ''),
(29, '3 Oct. 2014', 'Peripherique', 'Tres urgent', 'Clavier', 'Touche "e" ne fonctionne pas ', 'Lenovox0120', ''),
(30, '6 mai 2015', 'Peripherique', 'Trés urgent', ' Imprimante ', 'imprime mal', 'Lenovo 0121', 'perso01'),
(32, '6 mai 2015', 'Software', 'Trés urgent', ' ', 'merci de régler cela vite merci. ', 'Asus 456', 'perso01'),
(33, '6 mai 2015', 'Software', 'Trés urgent', ' ', 'Encore', 'Asus 456', 'perso01'),
(34, '6 mai 2015', 'Software', 'Trés urgent', ' ', 'ok ', 'Asus 456', 'perso01'),
(35, '7 mai 2015', 'Software', 'Moyenne', ' ', 'merci ok ', 'Asus 456', 'perso01'),
(36, '15 mai 2015', 'Hardware', 'Urgent', ' ', 'lol ', 'Asus 456', 'perso01'),
(37, '6 mai 2015', 'toto', 'Urgent', ' ', 'merci ', 'Asus 456', 'perso01'),
(38, '6 mai 2015', 'Hardware', 'Urgent', ' ', 'ok', 'Asus 456', 'perso01'),
(39, '6 mai 2015', 'Software', 'Urgent', ' ', 'ok', 'Lenovox0120', 'perso01'),
(40, '1 mai 2015', 'toto', 'Trés urgent', ' ', 'ok', 'Lenovo x0137', 'perso01');

-- --------------------------------------------------------

--
-- Structure de la table `personnel`
--

CREATE TABLE `personnel` (
  `id` int(11) NOT NULL,
  `mdp` varchar(10) NOT NULL,
  `login` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `personnel`
--

INSERT INTO `personnel` (`id`, `mdp`, `login`) VALUES
(0, 'p3rs001', 'perso01'),
(2, 'p3rs002', 'perso02'),
(3, 'p3rs003', 'perso03');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `HistoryPanne`
--
ALTER TABLE `HistoryPanne`
 ADD PRIMARY KEY (`idPanne`), ADD KEY `IdOrdinateurPanne` (`IdOrdinateurPanne`), ADD KEY `IdOrdinateurPanne_2` (`IdOrdinateurPanne`);

--
-- Index pour la table `intervenants`
--
ALTER TABLE `intervenants`
 ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`), ADD KEY `id_2` (`id`), ADD KEY `id_3` (`id`), ADD KEY `id_4` (`id`);

--
-- Index pour la table `intervention`
--
ALTER TABLE `intervention`
 ADD PRIMARY KEY (`idIntervention`), ADD KEY `idintervenant` (`idintervenant`), ADD KEY `idintervenant_2` (`idintervenant`), ADD KEY `idintervenant_3` (`idintervenant`);

--
-- Index pour la table `ordinateur`
--
ALTER TABLE `ordinateur`
 ADD PRIMARY KEY (`idOrdinateur`), ADD UNIQUE KEY `idOrdinateur` (`idOrdinateur`);

--
-- Index pour la table `Panne`
--
ALTER TABLE `Panne`
 ADD PRIMARY KEY (`idPanne`), ADD UNIQUE KEY `idPanne` (`idPanne`);

--
-- Index pour la table `personnel`
--
ALTER TABLE `personnel`
 ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`), ADD KEY `id_2` (`id`), ADD KEY `id_3` (`id`), ADD KEY `id_4` (`id`), ADD KEY `id_5` (`id`), ADD KEY `id_6` (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `HistoryPanne`
--
ALTER TABLE `HistoryPanne`
MODIFY `idPanne` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=82;
--
-- AUTO_INCREMENT pour la table `intervention`
--
ALTER TABLE `intervention`
MODIFY `idIntervention` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT pour la table `ordinateur`
--
ALTER TABLE `ordinateur`
MODIFY `idOrdinateur` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT pour la table `Panne`
--
ALTER TABLE `Panne`
MODIFY `idPanne` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=41;