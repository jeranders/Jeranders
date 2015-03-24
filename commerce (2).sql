-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 24 Mars 2015 à 10:25
-- Version du serveur :  5.6.21
-- Version de PHP :  5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `commerce`
--

-- --------------------------------------------------------

--
-- Structure de la table `achats`
--

CREATE TABLE IF NOT EXISTS `achats` (
`id_achat` int(10) unsigned NOT NULL,
  `a_nom_produit` varchar(255) NOT NULL,
  `a_qt` int(11) NOT NULL,
  `a_last_prix` float(11,2) NOT NULL,
  `a_last_date` datetime NOT NULL,
  `id_type_produit` int(10) unsigned NOT NULL,
  `id_membre` int(10) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `achats`
--

INSERT INTO `achats` (`id_achat`, `a_nom_produit`, `a_qt`, `a_last_prix`, `a_last_date`, `id_type_produit`, `id_membre`) VALUES
(1, 'Cabochon 12mm', 50, 3.40, '2015-02-16 00:00:00', 1, 1),
(2, 'Cabochon 20mm', 40, 11.99, '2015-02-10 00:00:00', 3, 1);

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
`id_categorie` int(11) NOT NULL,
  `c_nom` varchar(255) NOT NULL,
  `c_description` text NOT NULL,
  `c_ref` varchar(255) NOT NULL,
  `id_membre` int(11) NOT NULL,
  `c_active` int(11) NOT NULL,
  `c_date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`id_categorie`, `c_nom`, `c_description`, `c_ref`, `id_membre`, `c_active`, `c_date`) VALUES
(1, 'Cabochon', '', 'XXAMF', 1, 1, '2015-03-23 12:58:27'),
(2, 'Cabochon', '', '', 2, 1, '2015-03-23 14:55:47');

-- --------------------------------------------------------

--
-- Structure de la table `configurations`
--

CREATE TABLE IF NOT EXISTS `configurations` (
`id_config` int(11) NOT NULL,
  `id_membre` int(11) NOT NULL,
  `c_nom_societe` varchar(255) NOT NULL DEFAULT 'Nom Société' COMMENT 'Nom de votre entreprise, société',
  `c_description` text NOT NULL COMMENT 'Description de votre société',
  `c_siret` varchar(14) NOT NULL DEFAULT '00000000000000' COMMENT 'Numéro de SIRET',
  `c_date_activite` date NOT NULL COMMENT 'Date du début de votre activité',
  `c_type_activite` varchar(80) NOT NULL COMMENT 'Type d''activité (Commercial, libéral...)',
  `c_ca_t` float(11,2) NOT NULL COMMENT 'Plafond du chiffre d''affaire',
  `c_organisme` varchar(80) NOT NULL COMMENT 'Organisme de retraite (RSI..)',
  `c_plafond` int(11) NOT NULL COMMENT 'Plafond du chiffre d''affaire',
  `c_cotisation` float(11,2) NOT NULL COMMENT 'Taux de cotisation',
  `c_impot` float(11,2) NOT NULL COMMENT 'Taux impôt sur le revenu',
  `c_budget_depart` float(11,2) NOT NULL COMMENT 'Budget de lancement de votre société',
  `c_resultat_banque` float(11,2) NOT NULL COMMENT 'Montant disponible sur votre compte',
  `c_tel` varchar(25) NOT NULL COMMENT 'Numéro de téléphone pro',
  `c_accre` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Si ACCRE valeur à 1 sinon 0 par defaut',
  `c_adresse` varchar(255) NOT NULL COMMENT 'Adresse de la société',
  `c_logo` varchar(255) NOT NULL COMMENT 'Logo de la société',
  `c_avatar` varchar(255) NOT NULL COMMENT 'Avatar de la personne',
  `c_site` varchar(255) NOT NULL COMMENT 'Site internet',
  `c_pseudo` varchar(255) NOT NULL COMMENT 'Pseudo de la personne',
  `c_email_societe` varchar(255) NOT NULL COMMENT 'Email de contact de la societe',
  `c_email_perso` varchar(255) NOT NULL COMMENT 'Email perso',
  `c_nom` varchar(255) NOT NULL COMMENT 'Votre nom',
  `c_prenom` varchar(255) NOT NULL COMMENT 'Votre prénom',
  `c_phrase_secret` varchar(255) NOT NULL COMMENT 'Phrase secret proposé',
  `c_phrase_verif` varchar(255) NOT NULL COMMENT 'Vérification du résultat de la phrase secréte',
  `c_password` varchar(60) NOT NULL COMMENT 'Password du portail',
  `c_valide` tinyint(1) NOT NULL COMMENT 'Valide le site',
  `c_taux_paypal` float(11,2) NOT NULL COMMENT 'Taux en % demandé par PayPal',
  `c_montant_paypal` float(11,2) NOT NULL COMMENT 'Montant demandé par PayPal',
  `c_taux_payplug` float(11,2) NOT NULL COMMENT 'Taux en % demandé par PayPlug',
  `c_montant_payplug` float(11,2) NOT NULL COMMENT 'Montant demandé par PayPlug',
  `c_check_paypal` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Sur 1 PayPal est utilisé',
  `c_check_payplug` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Sur 1 PayPlug est utilisé'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf32;

--
-- Contenu de la table `configurations`
--

INSERT INTO `configurations` (`id_config`, `id_membre`, `c_nom_societe`, `c_description`, `c_siret`, `c_date_activite`, `c_type_activite`, `c_ca_t`, `c_organisme`, `c_plafond`, `c_cotisation`, `c_impot`, `c_budget_depart`, `c_resultat_banque`, `c_tel`, `c_accre`, `c_adresse`, `c_logo`, `c_avatar`, `c_site`, `c_pseudo`, `c_email_societe`, `c_email_perso`, `c_nom`, `c_prenom`, `c_phrase_secret`, `c_phrase_verif`, `c_password`, `c_valide`, `c_taux_paypal`, `c_montant_paypal`, `c_taux_payplug`, `c_montant_payplug`, `c_check_paypal`, `c_check_payplug`) VALUES
(1, 1, 'Little Owl', 'Description de votre société', '000 000 000 00', '2015-01-01', '', 82200.00, '', 0, 0.00, 0.00, 1.00, 1.00, '2164261', 0, '13 Rue du Général Beuret Paris, France', '', '', 'http://monsite.fr', '', 'contact@monsite.fr', '', 'Dupont', 'Jean', '', '', '', 0, 0.00, 0.00, 0.00, 0.00, 0, 0),
(2, 2, 'Moltes', 'Description de votre société', '000 000 000 00', '2015-01-01', '', 82200.00, '', 0, 0.00, 0.00, 1.00, 1.00, '2164261', 0, '13 Rue du Général Beuret Paris, France', '', '', 'http://monsite.fr', '', 'contact@monsite.fr', '', 'Dupont', 'Jean', '', '', '', 0, 0.00, 0.00, 0.00, 0.00, 0, 0),
(3, 3, 'AnCat Corp', 'Description de votre société', '000 000 000 00', '2015-01-01', '', 82200.00, '', 0, 0.00, 0.00, 1.00, 1.00, '2164261', 0, '13 Rue du Général Beuret Paris, France', '', '', 'http://monsite.fr', '', 'contact@monsite.fr', '', 'Dupont', 'Jean', '', '', '', 0, 0.00, 0.00, 0.00, 0.00, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `fournisseurs`
--

CREATE TABLE IF NOT EXISTS `fournisseurs` (
`id_fournisseur` int(11) NOT NULL,
  `f_nom` varchar(80) NOT NULL COMMENT 'Nom du fournisseur',
  `f_ref` varchar(255) NOT NULL DEFAULT '000000' COMMENT 'Référence du fournisseur',
  `f_email` varchar(255) NOT NULL DEFAULT 'email@email.fr',
  `f_site` varchar(255) NOT NULL DEFAULT 'http://site.fr' COMMENT 'Lien du site du fournisseur',
  `f_tel` varchar(30) NOT NULL DEFAULT '0102030405' COMMENT 'Numéro de téléphone du fournisseur',
  `f_fax` varchar(30) NOT NULL DEFAULT '0102030405' COMMENT 'Fax du fournisseur',
  `f_commentaire` text NOT NULL COMMENT 'Commentaire sur le fournisseur',
  `f_pays` varchar(60) NOT NULL DEFAULT 'Inconnu' COMMENT 'Pays du fournisseur',
  `f_logo` varchar(255) NOT NULL COMMENT 'Logo du fournisseur',
  `f_adresse` varchar(255) NOT NULL DEFAULT 'Inconnu' COMMENT 'Adresse du du fournisseur',
  `f_code_postal` varchar(10) NOT NULL,
  `f_ville` varchar(255) NOT NULL,
  `f_date` datetime NOT NULL,
  `id_membre` int(11) NOT NULL,
  `f_active` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf32;

--
-- Contenu de la table `fournisseurs`
--

INSERT INTO `fournisseurs` (`id_fournisseur`, `f_nom`, `f_ref`, `f_email`, `f_site`, `f_tel`, `f_fax`, `f_commentaire`, `f_pays`, `f_logo`, `f_adresse`, `f_code_postal`, `f_ville`, `f_date`, `id_membre`, `f_active`) VALUES
(1, 'Alex', '42nq436nqi', 'Alex@test.fr', '', '0102030405', '', '', 'BI', '', '', '', '', '2015-03-20 11:17:05', 1, 0),
(2, 'Lequipe', 'exgayl7dzr', 'lequipe@df.df', 'test.fr', '', '', '', 'AF', '', '', '', '', '2015-03-20 23:07:56', 1, 1),
(3, 'Moltes', 'AQUL57NAS6', 'lequipe@moltes.fr', '', '', '', '', 'BT', '', '', '', '', '2015-03-23 09:19:31', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `historiques`
--

CREATE TABLE IF NOT EXISTS `historiques` (
`id_h` int(11) NOT NULL,
  `h_page` varchar(255) NOT NULL,
  `h_date` datetime NOT NULL,
  `h_type` varchar(255) NOT NULL,
  `h_description` text NOT NULL,
  `h_ip` varchar(255) NOT NULL,
  `h_id_membre` int(10) unsigned NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=utf32;

--
-- Contenu de la table `historiques`
--

INSERT INTO `historiques` (`id_h`, `h_page`, `h_date`, `h_type`, `h_description`, `h_ip`, `h_id_membre`) VALUES
(1, 'Ajout d''un fournisseur', '2015-03-20 11:17:06', '2', 'Ajout du fournisseur Alex', '127.0.0.1', 1),
(2, 'Liste fournisseurs', '2015-03-20 16:32:36', '3', 'Activation du fournisseur ', '127.0.0.1', 1),
(3, 'Liste fournisseurs', '2015-03-20 16:35:34', '3', 'Activation du fournisseur ', '127.0.0.1', 1),
(4, 'Liste fournisseurs', '2015-03-20 16:39:25', '4', 'Activation du fournisseur ', '127.0.0.1', 1),
(5, 'Liste fournisseurs', '2015-03-20 16:39:50', '4', 'Désactivation du fournisseur ', '127.0.0.1', 1),
(6, 'Liste fournisseurs', '2015-03-20 16:44:17', '4', 'Désactivation du fournisseur ', '127.0.0.1', 1),
(7, 'Liste fournisseurs', '2015-03-20 16:44:39', '4', 'Désactivation du fournisseur ', '127.0.0.1', 1),
(8, 'Liste fournisseurs', '2015-03-20 17:24:12', '4', 'Désactivation du fournisseur ', '127.0.0.1', 1),
(9, 'Liste fournisseurs', '2015-03-20 18:42:43', '4', 'Désactivation du fournisseur Alex', '127.0.0.1', 1),
(10, 'Ajout d''un fournisseur', '2015-03-20 23:07:56', '2', 'Ajout du fournisseur Lequipe', '127.0.0.1', 1),
(11, 'Liste fournisseurs', '2015-03-21 11:19:11', '4', 'Activation du fournisseur Alex', '127.0.0.1', 1),
(12, 'Liste fournisseurs', '2015-03-21 11:19:15', '4', 'Désactivation du fournisseur Alex', '127.0.0.1', 1),
(13, 'Liste fournisseurs', '2015-03-21 11:19:18', '4', 'Désactivation du fournisseur Lequipe', '127.0.0.1', 1),
(14, 'Liste fournisseurs', '2015-03-21 11:19:22', '4', 'Activation du fournisseur Alex', '127.0.0.1', 1),
(15, 'Liste fournisseurs', '2015-03-21 11:19:25', '4', 'Activation du fournisseur Lequipe', '127.0.0.1', 1),
(16, 'Liste fournisseurs', '2015-03-21 13:00:21', '4', 'Désactivation du fournisseur Lequipe', '127.0.0.1', 1),
(17, 'Liste fournisseurs', '2015-03-21 13:00:22', '4', 'Désactivation du fournisseur Alex', '127.0.0.1', 1),
(18, 'Liste fournisseurs', '2015-03-21 13:01:03', '4', 'Activation du fournisseur Alex', '127.0.0.1', 1),
(19, 'Liste fournisseurs', '2015-03-21 13:01:11', '4', 'Activation du fournisseur Lequipe', '127.0.0.1', 1),
(20, 'Liste fournisseurs', '2015-03-21 16:57:19', '4', 'Désactivation du fournisseur Alex', '127.0.0.1', 1),
(21, 'Liste fournisseurs', '2015-03-21 17:38:43', '4', 'Activation du fournisseur Alex', '127.0.0.1', 1),
(22, 'Ajout d''un fournisseur', '2015-03-23 09:19:31', '2', 'Ajout du fournisseur Moltes', '127.0.0.1', 1),
(23, 'Ajout d''une catégorie', '2015-03-23 11:21:16', '2', 'Ajout de la catégorie Cabochon', '127.0.0.1', 1),
(24, 'Ajout d''une catégorie', '2015-03-23 11:22:31', '2', 'Ajout de la catégorie Cabochon', '127.0.0.1', 1),
(25, 'Ajout d''une catégorie', '2015-03-23 11:27:21', '2', 'Ajout de la catégorie Cabochon', '127.0.0.1', 1),
(26, 'Ajout d''une catégorie', '2015-03-23 11:30:17', '2', 'Ajout de la catégorie Cabochon', '127.0.0.1', 1),
(27, 'Ajout d''une catégorie', '2015-03-23 11:34:10', '2', 'Ajout de la catégorie Cabochon', '127.0.0.1', 1),
(28, 'Ajout d''une catégorie', '2015-03-23 11:37:25', '2', 'Ajout de la catégorie Cabochon', '127.0.0.1', 1),
(29, 'Ajout d''une catégorie', '2015-03-23 11:38:19', '2', 'Ajout de la catégorie Cabochon', '127.0.0.1', 1),
(30, 'Ajout d''une catégorie', '2015-03-23 11:38:28', '2', 'Ajout de la catégorie Cabochon', '127.0.0.1', 1),
(31, 'Ajout d''une catégorie', '2015-03-23 11:39:24', '2', 'Ajout de la catégorie Sdfsdfsdf', '127.0.0.1', 1),
(32, 'Ajout d''une catégorie', '2015-03-23 11:40:42', '2', 'Ajout de la catégorie Sdfsdfsdf', '127.0.0.1', 1),
(33, 'Ajout d''une catégorie', '2015-03-23 12:03:21', '2', 'Ajout de la catégorie Cabochon', '127.0.0.1', 1),
(34, 'Ajout d''une catégorie', '2015-03-23 12:04:37', '2', 'Ajout de la catégorie Cabochon', '127.0.0.1', 1),
(35, 'Ajout d''une catégorie', '2015-03-23 12:29:24', '2', 'Ajout de la catégorie Cabochon', '127.0.0.1', 1),
(36, 'Ajout d''une catégorie', '2015-03-23 12:34:00', '2', 'Ajout de la catégorie Cabochon', '127.0.0.1', 1),
(37, 'Ajout d''une catégorie', '2015-03-23 12:37:30', '2', 'Ajout de la catégorie Cabochon', '127.0.0.1', 1),
(38, 'Ajout d''une catégorie', '2015-03-23 12:38:11', '2', 'Ajout de la catégorie Cabochon', '127.0.0.1', 1),
(39, 'Ajout d''une catégorie', '2015-03-23 12:38:22', '2', 'Ajout de la catégorie Cabochon', '127.0.0.1', 1),
(40, 'Ajout d''une catégorie', '2015-03-23 12:40:45', '2', 'Ajout de la catégorie Cabochon', '127.0.0.1', 1),
(41, 'Ajout d''une catégorie', '2015-03-23 12:41:22', '2', 'Ajout de la catégorie Cabochon', '127.0.0.1', 1),
(42, 'Ajout d''une catégorie', '2015-03-23 12:41:50', '2', 'Ajout de la catégorie Cabochon', '127.0.0.1', 1),
(43, 'Ajout d''une catégorie', '2015-03-23 12:58:27', '2', 'Ajout de la catégorie Cabochon', '127.0.0.1', 1),
(44, 'Liste fournisseurs', '2015-03-23 13:15:39', '4', 'Désactivation de la categorie Cabochon', '127.0.0.1', 1),
(45, 'Liste fournisseurs', '2015-03-23 13:18:17', '4', 'Activation de la catégorie Cabochon', '127.0.0.1', 1),
(46, 'Liste fournisseurs', '2015-03-23 13:18:25', '4', 'Désactivation de la categorie Cabochon', '127.0.0.1', 1),
(47, 'Liste fournisseurs', '2015-03-23 13:18:27', '4', 'Activation de la catégorie Cabochon', '127.0.0.1', 1),
(48, 'Liste fournisseurs', '2015-03-23 13:18:29', '4', 'Désactivation de la categorie Cabochon', '127.0.0.1', 1),
(49, 'Liste fournisseurs', '2015-03-23 13:18:31', '4', 'Activation de la catégorie Cabochon', '127.0.0.1', 1),
(50, 'Ajout d''une catégorie', '2015-03-23 14:55:47', '2', 'Ajout de la catégorie Cabochon', '127.0.0.1', 2),
(51, 'Liste fournisseurs', '2015-03-23 15:25:03', '4', 'Désactivation de la categorie Cabochon', '127.0.0.1', 1),
(52, 'Liste fournisseurs', '2015-03-23 15:25:07', '4', 'Activation de la catégorie Cabochon', '127.0.0.1', 1),
(53, 'Liste fournisseurs', '2015-03-23 15:27:04', '4', 'Désactivation du fournisseur Alex', '127.0.0.1', 1);

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

CREATE TABLE IF NOT EXISTS `membres` (
`id_membre` int(11) NOT NULL,
  `m_nom_utilisateur` varchar(20) NOT NULL,
  `m_nom` varchar(20) NOT NULL,
  `m_prenom` varchar(20) NOT NULL,
  `m_password` varchar(255) NOT NULL,
  `m_email_pro` varchar(30) NOT NULL,
  `m_email_perso` varchar(30) NOT NULL,
  `m_date_inscription` datetime NOT NULL,
  `m_rang` int(11) NOT NULL DEFAULT '2',
  `m_valide` tinyint(1) NOT NULL,
  `m_key` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `membres`
--

INSERT INTO `membres` (`id_membre`, `m_nom_utilisateur`, `m_nom`, `m_prenom`, `m_password`, `m_email_pro`, `m_email_perso`, `m_date_inscription`, `m_rang`, `m_valide`, `m_key`) VALUES
(1, 'Jeranders', '', '', '8b317bd482b09ba8e7280c9c5cce83e7cd6066da', '', 'brechoire.j@gmail.com', '2015-02-19 10:52:15', 2, 1, '260219422188f771c39cc4ffeb08e28cc856a758189153db6587c94fd04e96d92a69a656f5e8d90e862e6Jeranders49097274e03bcb97f5ce55f3cab9d844f59261a808f71fdb'),
(2, 'Moltes', '', '', '8b317bd482b09ba8e7280c9c5cce83e7cd6066da', '', 'moltes@moltes.fr', '2015-02-27 17:00:04', 2, 1, '0990cd204056cac826b501958a42bddbd908192a621823db6587c94fd04e96d92a69a656f5e8d90e862e6Moltes42588755e03bcb97f5ce55f3cab9d844f59261a808f71fdb'),
(3, 'AnCat', '', '', '8b317bd482b09ba8e7280c9c5cce83e7cd6066da', '', 'ancat@ancat.fr', '2015-02-27 17:02:40', 2, 1, '81e3864e7b4b6d7f0e60495d9c81d3e100b5df71429443db6587c94fd04e96d92a69a656f5e8d90e862e6AnCat16967494e03bcb97f5ce55f3cab9d844f59261a808f71fdb');

-- --------------------------------------------------------

--
-- Structure de la table `pays`
--

CREATE TABLE IF NOT EXISTS `pays` (
`id` smallint(5) unsigned NOT NULL,
  `code` int(3) NOT NULL,
  `alpha2` varchar(2) NOT NULL,
  `alpha3` varchar(3) NOT NULL,
  `nom_en_gb` varchar(45) NOT NULL,
  `nom_fr_fr` varchar(45) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=242 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `pays`
--

INSERT INTO `pays` (`id`, `code`, `alpha2`, `alpha3`, `nom_en_gb`, `nom_fr_fr`) VALUES
(1, 4, 'AF', 'AFG', 'Afghanistan', 'Afghanistan'),
(2, 8, 'AL', 'ALB', 'Albania', 'Albanie'),
(3, 10, 'AQ', 'ATA', 'Antarctica', 'Antarctique'),
(4, 12, 'DZ', 'DZA', 'Algeria', 'Algérie'),
(5, 16, 'AS', 'ASM', 'American Samoa', 'Samoa Américaines'),
(6, 20, 'AD', 'AND', 'Andorra', 'Andorre'),
(7, 24, 'AO', 'AGO', 'Angola', 'Angola'),
(8, 28, 'AG', 'ATG', 'Antigua and Barbuda', 'Antigua-et-Barbuda'),
(9, 31, 'AZ', 'AZE', 'Azerbaijan', 'Azerbaïdjan'),
(10, 32, 'AR', 'ARG', 'Argentina', 'Argentine'),
(11, 36, 'AU', 'AUS', 'Australia', 'Australie'),
(12, 40, 'AT', 'AUT', 'Austria', 'Autriche'),
(13, 44, 'BS', 'BHS', 'Bahamas', 'Bahamas'),
(14, 48, 'BH', 'BHR', 'Bahrain', 'Bahreïn'),
(15, 50, 'BD', 'BGD', 'Bangladesh', 'Bangladesh'),
(16, 51, 'AM', 'ARM', 'Armenia', 'Arménie'),
(17, 52, 'BB', 'BRB', 'Barbados', 'Barbade'),
(18, 56, 'BE', 'BEL', 'Belgium', 'Belgique'),
(19, 60, 'BM', 'BMU', 'Bermuda', 'Bermudes'),
(20, 64, 'BT', 'BTN', 'Bhutan', 'Bhoutan'),
(21, 68, 'BO', 'BOL', 'Bolivia', 'Bolivie'),
(22, 70, 'BA', 'BIH', 'Bosnia and Herzegovina', 'Bosnie-Herzégovine'),
(23, 72, 'BW', 'BWA', 'Botswana', 'Botswana'),
(24, 74, 'BV', 'BVT', 'Bouvet Island', 'Île Bouvet'),
(25, 76, 'BR', 'BRA', 'Brazil', 'Brésil'),
(26, 84, 'BZ', 'BLZ', 'Belize', 'Belize'),
(27, 86, 'IO', 'IOT', 'British Indian Ocean Territory', 'Territoire Britannique de l''Océan Indien'),
(28, 90, 'SB', 'SLB', 'Solomon Islands', 'Îles Salomon'),
(29, 92, 'VG', 'VGB', 'British Virgin Islands', 'Îles Vierges Britanniques'),
(30, 96, 'BN', 'BRN', 'Brunei Darussalam', 'Brunéi Darussalam'),
(31, 100, 'BG', 'BGR', 'Bulgaria', 'Bulgarie'),
(32, 104, 'MM', 'MMR', 'Myanmar', 'Myanmar'),
(33, 108, 'BI', 'BDI', 'Burundi', 'Burundi'),
(34, 112, 'BY', 'BLR', 'Belarus', 'Bélarus'),
(35, 116, 'KH', 'KHM', 'Cambodia', 'Cambodge'),
(36, 120, 'CM', 'CMR', 'Cameroon', 'Cameroun'),
(37, 124, 'CA', 'CAN', 'Canada', 'Canada'),
(38, 132, 'CV', 'CPV', 'Cape Verde', 'Cap-vert'),
(39, 136, 'KY', 'CYM', 'Cayman Islands', 'Îles Caïmanes'),
(40, 140, 'CF', 'CAF', 'Central African', 'République Centrafricaine'),
(41, 144, 'LK', 'LKA', 'Sri Lanka', 'Sri Lanka'),
(42, 148, 'TD', 'TCD', 'Chad', 'Tchad'),
(43, 152, 'CL', 'CHL', 'Chile', 'Chili'),
(44, 156, 'CN', 'CHN', 'China', 'Chine'),
(45, 158, 'TW', 'TWN', 'Taiwan', 'Taïwan'),
(46, 162, 'CX', 'CXR', 'Christmas Island', 'Île Christmas'),
(47, 166, 'CC', 'CCK', 'Cocos (Keeling) Islands', 'Îles Cocos (Keeling)'),
(48, 170, 'CO', 'COL', 'Colombia', 'Colombie'),
(49, 174, 'KM', 'COM', 'Comoros', 'Comores'),
(50, 175, 'YT', 'MYT', 'Mayotte', 'Mayotte'),
(51, 178, 'CG', 'COG', 'Republic of the Congo', 'République du Congo'),
(52, 180, 'CD', 'COD', 'The Democratic Republic Of The Congo', 'République Démocratique du Congo'),
(53, 184, 'CK', 'COK', 'Cook Islands', 'Îles Cook'),
(54, 188, 'CR', 'CRI', 'Costa Rica', 'Costa Rica'),
(55, 191, 'HR', 'HRV', 'Croatia', 'Croatie'),
(56, 192, 'CU', 'CUB', 'Cuba', 'Cuba'),
(57, 196, 'CY', 'CYP', 'Cyprus', 'Chypre'),
(58, 203, 'CZ', 'CZE', 'Czech Republic', 'République Tchèque'),
(59, 204, 'BJ', 'BEN', 'Benin', 'Bénin'),
(60, 208, 'DK', 'DNK', 'Denmark', 'Danemark'),
(61, 212, 'DM', 'DMA', 'Dominica', 'Dominique'),
(62, 214, 'DO', 'DOM', 'Dominican Republic', 'République Dominicaine'),
(63, 218, 'EC', 'ECU', 'Ecuador', 'Équateur'),
(64, 222, 'SV', 'SLV', 'El Salvador', 'El Salvador'),
(65, 226, 'GQ', 'GNQ', 'Equatorial Guinea', 'Guinée Équatoriale'),
(66, 231, 'ET', 'ETH', 'Ethiopia', 'Éthiopie'),
(67, 232, 'ER', 'ERI', 'Eritrea', 'Érythrée'),
(68, 233, 'EE', 'EST', 'Estonia', 'Estonie'),
(69, 234, 'FO', 'FRO', 'Faroe Islands', 'Îles Féroé'),
(70, 238, 'FK', 'FLK', 'Falkland Islands', 'Îles (malvinas) Falkland'),
(71, 239, 'GS', 'SGS', 'South Georgia and the South Sandwich Islands', 'Géorgie du Sud et les Îles Sandwich du Sud'),
(72, 242, 'FJ', 'FJI', 'Fiji', 'Fidji'),
(73, 246, 'FI', 'FIN', 'Finland', 'Finlande'),
(74, 248, 'AX', 'ALA', 'Åland Islands', 'Îles Åland'),
(75, 250, 'FR', 'FRA', 'France', 'France'),
(76, 254, 'GF', 'GUF', 'French Guiana', 'Guyane Française'),
(77, 258, 'PF', 'PYF', 'French Polynesia', 'Polynésie Française'),
(78, 260, 'TF', 'ATF', 'French Southern Territories', 'Terres Australes Françaises'),
(79, 262, 'DJ', 'DJI', 'Djibouti', 'Djibouti'),
(80, 266, 'GA', 'GAB', 'Gabon', 'Gabon'),
(81, 268, 'GE', 'GEO', 'Georgia', 'Géorgie'),
(82, 270, 'GM', 'GMB', 'Gambia', 'Gambie'),
(83, 275, 'PS', 'PSE', 'Occupied Palestinian Territory', 'Territoire Palestinien Occupé'),
(84, 276, 'DE', 'DEU', 'Germany', 'Allemagne'),
(85, 288, 'GH', 'GHA', 'Ghana', 'Ghana'),
(86, 292, 'GI', 'GIB', 'Gibraltar', 'Gibraltar'),
(87, 296, 'KI', 'KIR', 'Kiribati', 'Kiribati'),
(88, 300, 'GR', 'GRC', 'Greece', 'Grèce'),
(89, 304, 'GL', 'GRL', 'Greenland', 'Groenland'),
(90, 308, 'GD', 'GRD', 'Grenada', 'Grenade'),
(91, 312, 'GP', 'GLP', 'Guadeloupe', 'Guadeloupe'),
(92, 316, 'GU', 'GUM', 'Guam', 'Guam'),
(93, 320, 'GT', 'GTM', 'Guatemala', 'Guatemala'),
(94, 324, 'GN', 'GIN', 'Guinea', 'Guinée'),
(95, 328, 'GY', 'GUY', 'Guyana', 'Guyana'),
(96, 332, 'HT', 'HTI', 'Haiti', 'Haïti'),
(97, 334, 'HM', 'HMD', 'Heard Island and McDonald Islands', 'Îles Heard et Mcdonald'),
(98, 336, 'VA', 'VAT', 'Vatican City State', 'Saint-Siège (état de la Cité du Vatican)'),
(99, 340, 'HN', 'HND', 'Honduras', 'Honduras'),
(100, 344, 'HK', 'HKG', 'Hong Kong', 'Hong-Kong'),
(101, 348, 'HU', 'HUN', 'Hungary', 'Hongrie'),
(102, 352, 'IS', 'ISL', 'Iceland', 'Islande'),
(103, 356, 'IN', 'IND', 'India', 'Inde'),
(104, 360, 'ID', 'IDN', 'Indonesia', 'Indonésie'),
(105, 364, 'IR', 'IRN', 'Islamic Republic of Iran', 'République Islamique d''Iran'),
(106, 368, 'IQ', 'IRQ', 'Iraq', 'Iraq'),
(107, 372, 'IE', 'IRL', 'Ireland', 'Irlande'),
(108, 376, 'IL', 'ISR', 'Israel', 'Israël'),
(109, 380, 'IT', 'ITA', 'Italy', 'Italie'),
(110, 384, 'CI', 'CIV', 'Côte d''Ivoire', 'Côte d''Ivoire'),
(111, 388, 'JM', 'JAM', 'Jamaica', 'Jamaïque'),
(112, 392, 'JP', 'JPN', 'Japan', 'Japon'),
(113, 398, 'KZ', 'KAZ', 'Kazakhstan', 'Kazakhstan'),
(114, 400, 'JO', 'JOR', 'Jordan', 'Jordanie'),
(115, 404, 'KE', 'KEN', 'Kenya', 'Kenya'),
(116, 408, 'KP', 'PRK', 'Democratic People''s Republic of Korea', 'République Populaire Démocratique de Corée'),
(117, 410, 'KR', 'KOR', 'Republic of Korea', 'République de Corée'),
(118, 414, 'KW', 'KWT', 'Kuwait', 'Koweït'),
(119, 417, 'KG', 'KGZ', 'Kyrgyzstan', 'Kirghizistan'),
(120, 418, 'LA', 'LAO', 'Lao People''s Democratic Republic', 'République Démocratique Populaire Lao'),
(121, 422, 'LB', 'LBN', 'Lebanon', 'Liban'),
(122, 426, 'LS', 'LSO', 'Lesotho', 'Lesotho'),
(123, 428, 'LV', 'LVA', 'Latvia', 'Lettonie'),
(124, 430, 'LR', 'LBR', 'Liberia', 'Libéria'),
(125, 434, 'LY', 'LBY', 'Libyan Arab Jamahiriya', 'Jamahiriya Arabe Libyenne'),
(126, 438, 'LI', 'LIE', 'Liechtenstein', 'Liechtenstein'),
(127, 440, 'LT', 'LTU', 'Lithuania', 'Lituanie'),
(128, 442, 'LU', 'LUX', 'Luxembourg', 'Luxembourg'),
(129, 446, 'MO', 'MAC', 'Macao', 'Macao'),
(130, 450, 'MG', 'MDG', 'Madagascar', 'Madagascar'),
(131, 454, 'MW', 'MWI', 'Malawi', 'Malawi'),
(132, 458, 'MY', 'MYS', 'Malaysia', 'Malaisie'),
(133, 462, 'MV', 'MDV', 'Maldives', 'Maldives'),
(134, 466, 'ML', 'MLI', 'Mali', 'Mali'),
(135, 470, 'MT', 'MLT', 'Malta', 'Malte'),
(136, 474, 'MQ', 'MTQ', 'Martinique', 'Martinique'),
(137, 478, 'MR', 'MRT', 'Mauritania', 'Mauritanie'),
(138, 480, 'MU', 'MUS', 'Mauritius', 'Maurice'),
(139, 484, 'MX', 'MEX', 'Mexico', 'Mexique'),
(140, 492, 'MC', 'MCO', 'Monaco', 'Monaco'),
(141, 496, 'MN', 'MNG', 'Mongolia', 'Mongolie'),
(142, 498, 'MD', 'MDA', 'Republic of Moldova', 'République de Moldova'),
(143, 500, 'MS', 'MSR', 'Montserrat', 'Montserrat'),
(144, 504, 'MA', 'MAR', 'Morocco', 'Maroc'),
(145, 508, 'MZ', 'MOZ', 'Mozambique', 'Mozambique'),
(146, 512, 'OM', 'OMN', 'Oman', 'Oman'),
(147, 516, 'NA', 'NAM', 'Namibia', 'Namibie'),
(148, 520, 'NR', 'NRU', 'Nauru', 'Nauru'),
(149, 524, 'NP', 'NPL', 'Nepal', 'Népal'),
(150, 528, 'NL', 'NLD', 'Netherlands', 'Pays-Bas'),
(151, 530, 'AN', 'ANT', 'Netherlands Antilles', 'Antilles Néerlandaises'),
(152, 533, 'AW', 'ABW', 'Aruba', 'Aruba'),
(153, 540, 'NC', 'NCL', 'New Caledonia', 'Nouvelle-Calédonie'),
(154, 548, 'VU', 'VUT', 'Vanuatu', 'Vanuatu'),
(155, 554, 'NZ', 'NZL', 'New Zealand', 'Nouvelle-Zélande'),
(156, 558, 'NI', 'NIC', 'Nicaragua', 'Nicaragua'),
(157, 562, 'NE', 'NER', 'Niger', 'Niger'),
(158, 566, 'NG', 'NGA', 'Nigeria', 'Nigéria'),
(159, 570, 'NU', 'NIU', 'Niue', 'Niué'),
(160, 574, 'NF', 'NFK', 'Norfolk Island', 'Île Norfolk'),
(161, 578, 'NO', 'NOR', 'Norway', 'Norvège'),
(162, 580, 'MP', 'MNP', 'Northern Mariana Islands', 'Îles Mariannes du Nord'),
(163, 581, 'UM', 'UMI', 'United States Minor Outlying Islands', 'Îles Mineures Éloignées des États-Unis'),
(164, 583, 'FM', 'FSM', 'Federated States of Micronesia', 'États Fédérés de Micronésie'),
(165, 584, 'MH', 'MHL', 'Marshall Islands', 'Îles Marshall'),
(166, 585, 'PW', 'PLW', 'Palau', 'Palaos'),
(167, 586, 'PK', 'PAK', 'Pakistan', 'Pakistan'),
(168, 591, 'PA', 'PAN', 'Panama', 'Panama'),
(169, 598, 'PG', 'PNG', 'Papua New Guinea', 'Papouasie-Nouvelle-Guinée'),
(170, 600, 'PY', 'PRY', 'Paraguay', 'Paraguay'),
(171, 604, 'PE', 'PER', 'Peru', 'Pérou'),
(172, 608, 'PH', 'PHL', 'Philippines', 'Philippines'),
(173, 612, 'PN', 'PCN', 'Pitcairn', 'Pitcairn'),
(174, 616, 'PL', 'POL', 'Poland', 'Pologne'),
(175, 620, 'PT', 'PRT', 'Portugal', 'Portugal'),
(176, 624, 'GW', 'GNB', 'Guinea-Bissau', 'Guinée-Bissau'),
(177, 626, 'TL', 'TLS', 'Timor-Leste', 'Timor-Leste'),
(178, 630, 'PR', 'PRI', 'Puerto Rico', 'Porto Rico'),
(179, 634, 'QA', 'QAT', 'Qatar', 'Qatar'),
(180, 638, 'RE', 'REU', 'Réunion', 'Réunion'),
(181, 642, 'RO', 'ROU', 'Romania', 'Roumanie'),
(182, 643, 'RU', 'RUS', 'Russian Federation', 'Fédération de Russie'),
(183, 646, 'RW', 'RWA', 'Rwanda', 'Rwanda'),
(184, 654, 'SH', 'SHN', 'Saint Helena', 'Sainte-Hélène'),
(185, 659, 'KN', 'KNA', 'Saint Kitts and Nevis', 'Saint-Kitts-et-Nevis'),
(186, 660, 'AI', 'AIA', 'Anguilla', 'Anguilla'),
(187, 662, 'LC', 'LCA', 'Saint Lucia', 'Sainte-Lucie'),
(188, 666, 'PM', 'SPM', 'Saint-Pierre and Miquelon', 'Saint-Pierre-et-Miquelon'),
(189, 670, 'VC', 'VCT', 'Saint Vincent and the Grenadines', 'Saint-Vincent-et-les Grenadines'),
(190, 674, 'SM', 'SMR', 'San Marino', 'Saint-Marin'),
(191, 678, 'ST', 'STP', 'Sao Tome and Principe', 'Sao Tomé-et-Principe'),
(192, 682, 'SA', 'SAU', 'Saudi Arabia', 'Arabie Saoudite'),
(193, 686, 'SN', 'SEN', 'Senegal', 'Sénégal'),
(194, 690, 'SC', 'SYC', 'Seychelles', 'Seychelles'),
(195, 694, 'SL', 'SLE', 'Sierra Leone', 'Sierra Leone'),
(196, 702, 'SG', 'SGP', 'Singapore', 'Singapour'),
(197, 703, 'SK', 'SVK', 'Slovakia', 'Slovaquie'),
(198, 704, 'VN', 'VNM', 'Vietnam', 'Viet Nam'),
(199, 705, 'SI', 'SVN', 'Slovenia', 'Slovénie'),
(200, 706, 'SO', 'SOM', 'Somalia', 'Somalie'),
(201, 710, 'ZA', 'ZAF', 'South Africa', 'Afrique du Sud'),
(202, 716, 'ZW', 'ZWE', 'Zimbabwe', 'Zimbabwe'),
(203, 724, 'ES', 'ESP', 'Spain', 'Espagne'),
(204, 732, 'EH', 'ESH', 'Western Sahara', 'Sahara Occidental'),
(205, 736, 'SD', 'SDN', 'Sudan', 'Soudan'),
(206, 740, 'SR', 'SUR', 'Suriname', 'Suriname'),
(207, 744, 'SJ', 'SJM', 'Svalbard and Jan Mayen', 'Svalbard etÎle Jan Mayen'),
(208, 748, 'SZ', 'SWZ', 'Swaziland', 'Swaziland'),
(209, 752, 'SE', 'SWE', 'Sweden', 'Suède'),
(210, 756, 'CH', 'CHE', 'Switzerland', 'Suisse'),
(211, 760, 'SY', 'SYR', 'Syrian Arab Republic', 'République Arabe Syrienne'),
(212, 762, 'TJ', 'TJK', 'Tajikistan', 'Tadjikistan'),
(213, 764, 'TH', 'THA', 'Thailand', 'Thaïlande'),
(214, 768, 'TG', 'TGO', 'Togo', 'Togo'),
(215, 772, 'TK', 'TKL', 'Tokelau', 'Tokelau'),
(216, 776, 'TO', 'TON', 'Tonga', 'Tonga'),
(217, 780, 'TT', 'TTO', 'Trinidad and Tobago', 'Trinité-et-Tobago'),
(218, 784, 'AE', 'ARE', 'United Arab Emirates', 'Émirats Arabes Unis'),
(219, 788, 'TN', 'TUN', 'Tunisia', 'Tunisie'),
(220, 792, 'TR', 'TUR', 'Turkey', 'Turquie'),
(221, 795, 'TM', 'TKM', 'Turkmenistan', 'Turkménistan'),
(222, 796, 'TC', 'TCA', 'Turks and Caicos Islands', 'Îles Turks et Caïques'),
(223, 798, 'TV', 'TUV', 'Tuvalu', 'Tuvalu'),
(224, 800, 'UG', 'UGA', 'Uganda', 'Ouganda'),
(225, 804, 'UA', 'UKR', 'Ukraine', 'Ukraine'),
(226, 807, 'MK', 'MKD', 'The Former Yugoslav Republic of Macedonia', 'L''ex-République Yougoslave de Macédoine'),
(227, 818, 'EG', 'EGY', 'Egypt', 'Égypte'),
(228, 826, 'GB', 'GBR', 'United Kingdom', 'Royaume-Uni'),
(229, 833, 'IM', 'IMN', 'Isle of Man', 'Île de Man'),
(230, 834, 'TZ', 'TZA', 'United Republic Of Tanzania', 'République-Unie de Tanzanie'),
(231, 840, 'US', 'USA', 'United States', 'États-Unis'),
(232, 850, 'VI', 'VIR', 'U.S. Virgin Islands', 'Îles Vierges des États-Unis'),
(233, 854, 'BF', 'BFA', 'Burkina Faso', 'Burkina Faso'),
(234, 858, 'UY', 'URY', 'Uruguay', 'Uruguay'),
(235, 860, 'UZ', 'UZB', 'Uzbekistan', 'Ouzbékistan'),
(236, 862, 'VE', 'VEN', 'Venezuela', 'Venezuela'),
(237, 876, 'WF', 'WLF', 'Wallis and Futuna', 'Wallis et Futuna'),
(238, 882, 'WS', 'WSM', 'Samoa', 'Samoa'),
(239, 887, 'YE', 'YEM', 'Yemen', 'Yémen'),
(240, 891, 'CS', 'SCG', 'Serbia and Montenegro', 'Serbie-et-Monténégro'),
(241, 894, 'ZM', 'ZMB', 'Zambia', 'Zambie');

-- --------------------------------------------------------

--
-- Structure de la table `produit_c`
--

CREATE TABLE IF NOT EXISTS `produit_c` (
`id_produit_c` int(11) NOT NULL,
  `pc_nom` varchar(255) NOT NULL COMMENT 'Nom du produit',
  `pc_ref` varchar(255) NOT NULL COMMENT 'Reférence du produit',
  `pc_type_produit` int(11) NOT NULL COMMENT 'id du type de produit',
  `pc_image` varchar(255) NOT NULL COMMENT 'Image du produit',
  `pc_dernier_prix` float(11,2) NOT NULL COMMENT 'Prix de la dernière commande',
  `pc_derniere_date` date NOT NULL COMMENT 'Date de la dernière commande',
  `pc_derniere_quantite` int(11) NOT NULL COMMENT 'Dernière quantité commandé',
  `pc_description` text NOT NULL COMMENT 'Description du produit',
  `pc_commentaire` text NOT NULL COMMENT 'Commentaire sur le produit',
  `pc_dernier_fournisseur` int(11) NOT NULL COMMENT 'id du dernier fournisseur de la dernière commande'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf32 COMMENT='Produit consommable ';

--
-- Contenu de la table `produit_c`
--

INSERT INTO `produit_c` (`id_produit_c`, `pc_nom`, `pc_ref`, `pc_type_produit`, `pc_image`, `pc_dernier_prix`, `pc_derniere_date`, `pc_derniere_quantite`, `pc_description`, `pc_commentaire`, `pc_dernier_fournisseur`) VALUES
(1, 'Cabochon en verre 18mm', 'CABO18', 1, '', 3.30, '2015-01-05', 20, 'Cabochon en verre de taille 18mm', 'Très bon produit', 2);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `achats`
--
ALTER TABLE `achats`
 ADD PRIMARY KEY (`id_achat`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
 ADD PRIMARY KEY (`id_categorie`);

--
-- Index pour la table `configurations`
--
ALTER TABLE `configurations`
 ADD PRIMARY KEY (`id_config`);

--
-- Index pour la table `fournisseurs`
--
ALTER TABLE `fournisseurs`
 ADD PRIMARY KEY (`id_fournisseur`);

--
-- Index pour la table `historiques`
--
ALTER TABLE `historiques`
 ADD PRIMARY KEY (`id_h`);

--
-- Index pour la table `membres`
--
ALTER TABLE `membres`
 ADD PRIMARY KEY (`id_membre`);

--
-- Index pour la table `pays`
--
ALTER TABLE `pays`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `alpha2` (`alpha2`), ADD UNIQUE KEY `alpha3` (`alpha3`), ADD UNIQUE KEY `code_unique` (`code`);

--
-- Index pour la table `produit_c`
--
ALTER TABLE `produit_c`
 ADD PRIMARY KEY (`id_produit_c`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `achats`
--
ALTER TABLE `achats`
MODIFY `id_achat` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
MODIFY `id_categorie` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `configurations`
--
ALTER TABLE `configurations`
MODIFY `id_config` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `fournisseurs`
--
ALTER TABLE `fournisseurs`
MODIFY `id_fournisseur` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `historiques`
--
ALTER TABLE `historiques`
MODIFY `id_h` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT pour la table `membres`
--
ALTER TABLE `membres`
MODIFY `id_membre` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `pays`
--
ALTER TABLE `pays`
MODIFY `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=242;
--
-- AUTO_INCREMENT pour la table `produit_c`
--
ALTER TABLE `produit_c`
MODIFY `id_produit_c` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
