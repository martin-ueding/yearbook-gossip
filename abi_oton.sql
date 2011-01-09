-- phpMyAdmin SQL Dump
-- version 3.3.7deb1
-- http://www.phpmyadmin.net
--
-- Host: cvo2011.cv.funpicsql.de
-- Erstellungszeit: 16. Dezember 2010 um 21:47
-- Server Version: 5.1.49
-- PHP-Version: 5.3.3-4

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
-- Tabellenstruktur für Tabelle `abi_oton`
--

CREATE TABLE IF NOT EXISTS `abi_oton` (
  `oton_id` int(5) NOT NULL AUTO_INCREMENT,
  `oton_an` int(5) NOT NULL,
  `oton_text` varchar(200) COLLATE latin1_german2_ci NOT NULL,
  `oton_von` int(5) NOT NULL,
  PRIMARY KEY (`oton_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_german2_ci AUTO_INCREMENT=8 ;

--
-- Daten für Tabelle `abi_oton`
--

INSERT INTO `abi_oton` (`oton_id`, `oton_an`, `oton_text`, `oton_von`) VALUES
(5, 2, 'Hallo Thomas!', 1),
(4, 1, 'Hi', 1),
(7, 1, 'Hallo', 2);
