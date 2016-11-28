-- phpMyAdmin SQL Dump
-- version 3.3.7deb7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Erstellungszeit: 22. November 2013 um 10:47
-- Server Version: 5.1.72
-- PHP-Version: 5.3.15-1~dotdeb.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `kamerascheu`
--
USE `kamerascheu`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `unterzeichner`
--

CREATE TABLE IF NOT EXISTS `unterzeichner` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `ort` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `land` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `anonym` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;
