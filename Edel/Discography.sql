-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 14, 2014 at 10:50 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_artforblind`
--

-- --------------------------------------------------------

--
-- Table structure for table `Discography`
--

CREATE TABLE IF NOT EXISTS `Discography` (
  `artist` varchar(30) NOT NULL,
  `releaseName` varchar(40) NOT NULL,
  `catNo` int(3) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`catNo`),
  UNIQUE KEY `release` (`releaseName`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `Discography`
--

INSERT INTO `Discography` (`artist`, `releaseName`, `catNo`) VALUES
('Carson Wells', 'Wonderkid LP', 32),
('The #1s', 'self-titled EP', 33),
('Wolfbait', 'self-titled tape', 34),
('September Girls', 'Talking EP', 35),
('Plaids', 'self titled EP', 36),
('Pine Barrens', 'Kingmaker LP', 37),
('Broken Arm', 'Life is Short LP', 38),
('Plaids / No Action', 'Split tape', 39),
('Rory Francis O''Brien', 'The Eve of the Ides of March tape', 40);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
