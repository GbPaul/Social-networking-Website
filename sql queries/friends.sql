-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2013 at 11:08 AM
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
-- Table structure for table `friends`
--

CREATE TABLE IF NOT EXISTS `friends` (
  `user` varchar(16) NOT NULL,
  `friend` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`user`, `friend`) VALUES
('paul', 'efosa'),
('efosa', 'paul'),
('user', 'efosa'),
('user', 'paul'),
('efosa', 'aderemi'),
('paul', 'aderemi'),
('user', 'aderemi'),
('paul', 'ernest'),
('aderemi', 'ernest'),
('efosa', 'ernest'),
('ernest', 'user'),
('user', 'tope'),
('rrrrr', 'tope'),
('daddy', 'tope'),
('daddy', 'daddy '),
('efosa', 'daddy '),
('aderemi', 'daddy '),
('user', 'daddy '),
('tope', 'daddy '),
('paul', 'tope'),
('efosa', 'tope'),
('ernest', 'efosa');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
