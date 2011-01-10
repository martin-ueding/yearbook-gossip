-- phpMyAdmin SQL Dump
-- version 3.3.7deb3
-- http://www.phpmyadmin.net
--
-- Erstellungszeit: 10. Januar 2011 um 20:42
-- Server Version: 5.1.49
-- PHP-Version: 5.3.3-6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `cvo2011`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `abi_jahre`
--

CREATE TABLE IF NOT EXISTS `abi_jahre` (
  `jahre_id` int(5) NOT NULL AUTO_INCREMENT,
  `jahre_an` int(5) NOT NULL,
  `jahre_text` varchar(200) COLLATE latin1_german2_ci NOT NULL,
  `jahre_von` int(5) NOT NULL,
  PRIMARY KEY (`jahre_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_german2_ci AUTO_INCREMENT=502 ;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `abi_leute`
--

CREATE TABLE IF NOT EXISTS `abi_leute` (
  `person_id` int(5) NOT NULL AUTO_INCREMENT,
  `modus` int(1) NOT NULL,
  `email` varchar(200) COLLATE latin1_german2_ci NOT NULL,
  `passwort` varchar(200) COLLATE latin1_german2_ci NOT NULL,
  `vorname` varchar(200) COLLATE latin1_german2_ci NOT NULL,
  `nachname` varchar(200) COLLATE latin1_german2_ci NOT NULL,
  PRIMARY KEY (`person_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_german2_ci AUTO_INCREMENT=54 ;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `abi_mottostimmen`
--

CREATE TABLE IF NOT EXISTS `abi_mottostimmen` (
  `mottostimmen_id` int(5) NOT NULL AUTO_INCREMENT,
  `mottostimmen_von` int(5) NOT NULL,
  `mottostimmen_fuer` int(5) NOT NULL,
  PRIMARY KEY (`mottostimmen_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_german2_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `abi_oton`
--

CREATE TABLE IF NOT EXISTS `abi_oton` (
  `oton_id` int(5) NOT NULL AUTO_INCREMENT,
  `oton_an` int(5) NOT NULL,
  `oton_text` varchar(200) COLLATE latin1_german2_ci NOT NULL,
  `oton_von` int(5) NOT NULL,
  PRIMARY KEY (`oton_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_german2_ci AUTO_INCREMENT=26 ;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `abi_stimmen`
--

CREATE TABLE IF NOT EXISTS `abi_stimmen` (
  `stimme_id` int(5) NOT NULL AUTO_INCREMENT,
  `stimmen_fuer` int(5) NOT NULL,
  `stimmen_wen` int(5) NOT NULL,
  `stimmen_von` int(5) NOT NULL,
  PRIMARY KEY (`stimme_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_german2_ci AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `abi_titel`
--

CREATE TABLE IF NOT EXISTS `abi_titel` (
  `titel_id` int(5) NOT NULL AUTO_INCREMENT,
  `titel_text` varchar(200) COLLATE latin1_german2_ci NOT NULL,
  PRIMARY KEY (`titel_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_german2_ci AUTO_INCREMENT=41 ;
