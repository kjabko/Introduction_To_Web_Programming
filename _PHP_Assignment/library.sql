-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2014 at 09:50 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE IF NOT EXISTS `library` (
  `book_no` int(3) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(15) NOT NULL,
  `middle_name` varchar(15) DEFAULT NULL,
  `last_name` varchar(15) NOT NULL,
  `title` varchar(100) NOT NULL,
  `publisher` varchar(30) DEFAULT NULL,
  `isbn` int(13) NOT NULL,
  `pages` int(4) DEFAULT NULL,
  PRIMARY KEY (`book_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `library`
--

INSERT INTO `library` (`book_no`, `first_name`, `middle_name`, `last_name`, `title`, `publisher`, `isbn`, `pages`) VALUES
(1, 'George', NULL, 'Orwell', 'Nineteen Eighty-four', 'Penguin Classic', 2147483641, 368),
(2, 'Anthony', NULL, 'Burgess', 'A Clockwork Orange', 'Penguin Classic', 2147483642, 352),
(3, 'Ernest', NULL, 'Hemingway', 'The Old Man and the Sea', 'Arrow', 2147483643, 112),
(4, 'Ernest', NULL, 'Hemingway', 'A Farewell To Arms', 'Scribner', 2147483644, 332),
(5, 'Ernest', NULL, 'Hemingway', 'For Whom the Bell Tolls', 'Scribner', 2147483645, 480),
(6, 'Fyodor', NULL, 'Dostoyevski', 'Crime and Punishment', 'Dover Publications', 2147483646, 480),
(7, 'Fyodor', NULL, 'Dostoyevski', 'Notes from the Underground', 'Dover Publications', 2147483647, 96),
(8, 'Albert', NULL, 'Camus', 'The Stranger', 'Vintage', 2147466647, 123),
(9, 'Franz', NULL, 'Kafka', 'The Trial', 'Tribeca Books', 214748754, 160),
(10, 'Franz', NULL, 'Kafka', 'The Castle', 'Oxford University Press', 2147411147, 336),
(11, 'Franz', NULL, 'Kafka', 'The Metamorphosis and Other Stories', 'Oxford University Press', 2147483622, 208),
(12, 'Joseph', NULL, 'Conrad', 'Heart of Darkness and Other Tales', 'Oxford University Press', 2147483333, 272),
(13, 'William', NULL, 'Shakespeare', 'A Midsummer Nights Dream', 'Simon & Schuster', 1234567891, 256),
(14, 'William', NULL, 'Shakespeare', 'Othello', 'Simon & Schuster', 222333322, 368),
(15, 'William', NULL, 'Shakespeare', 'The Tempest', 'Simon & Schuster', 2147483621, 218),
(16, 'James', NULL, 'Joyce', 'Ulysses', 'Simon & Brown', 214748387, 564),
(17, 'Henry', 'David', 'Thoreau', 'Walden', 'Imperia Press', 214749876, 262),
(18, 'Ralph', 'Waldo', 'Emerson', 'Nature and Other Essays', 'Dover Publications', 2147480047, 176),
(19, 'Edgar', 'Allan', 'Poe', 'The Ravern and Other Favorite Poems', 'Dover Publications', 2147483090, 64),
(20, 'Jules', NULL, 'Verne', 'Twenty Thousand Leagues Under the Sea', 'Dover Publications', 214500647, 288);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
