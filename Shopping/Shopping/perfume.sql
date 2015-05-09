-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2015 at 08:38 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `perfume`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE IF NOT EXISTS `contactus` (
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`name`, `email`, `message`) VALUES
('', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `sale`
--

CREATE TABLE IF NOT EXISTS `sale` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `address` varchar(90) NOT NULL,
  `itemname` varchar(25) NOT NULL,
  `amount` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `sale`
--

INSERT INTO `sale` (`id`, `name`, `email`, `phone`, `address`, `itemname`, `amount`, `quantity`) VALUES
(14, 'Bruce Wayne', 'batman@hotmail.com', '03215455', 'alaska cut,LA.', 'JUCI', 10000, 1),
(21, 'Jamie Lannister', 'gameofthrones@hotmail.com', '0333233352', 'north,Alaska', 'GUCCI GUILTY', 5000, 1),
(20, 'Jamie Lannister', 'gameofthrones@hotmail.com', '0333233352', 'north,Alaska', 'JUCI', 10000, 1),
(17, 'Bruce Wayne', 'talha.ansar@hotmail.com', '03215455', 'alaska cut,LA.', 'GUCCI', 5000, 1),
(18, 'Bruce Wayne', 'talha.ansar@hotmail.com', '03215455', 'alaska cut,LA.', 'GUCCI GUILTY', 5000, 1),
(19, 'Sarah Khan', 'Sarah_khan@gmail.com', '03215455', 'alaska cut,LA.', 'JUCI', 10000, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
