-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2013 at 11:09 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `projectweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(30) unsigned NOT NULL AUTO_INCREMENT,
  `author` varchar(16) NOT NULL,
  `recip` varchar(16) NOT NULL,
  `pm` char(1) NOT NULL,
  `time` int(16) unsigned NOT NULL,
  `message` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `author`, `recip`, `pm`, `time`, `message`) VALUES
(1, 'efosa', 'efosa', '0', 1360252619, 'hey paul'),
(2, 'paul', 'paul', '1', 1360252773, 'hello efosa'),
(3, 'aderemi', 'aderemi', '0', 1361807645, 'hey'),
(4, 'ernest', 'ernest', '0', 1362066849, 'HEY paul'),
(5, 'paul', 'paul', '1', 1362067589, 'hello ,is anybody there?'),
(6, 'user', 'user', '0', 1362067739, 'I need someone to chat with'),
(7, 'tope', 'tope', '0', 1363700590, 'nobody knows'),
(8, 'tope', 'tope', '0', 1363710482, 'i dey here'),
(10, 'efosa', 'efosa', '1', 1363711266, 'hey user'),
(11, 'paul', 'aderemi', '0', 1363772409, 'hi'),
(12, 'paul', 'ernest', '0', 1363772436, 'hi'),
(13, 'paul', 'ernest', '1', 1363772461, 'check your email ');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
