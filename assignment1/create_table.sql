-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 02, 2015 at 11:51 PM
-- Server version: 5.6.26
-- PHP Version: 5.5.9-1ubuntu4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `spoloju`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `Gender` enum('male','female') NOT NULL,
  `Title` varchar(4) NOT NULL,
  `First` varchar(12) NOT NULL,
  `Last` varchar(32) NOT NULL,
  `Street` varchar(38) NOT NULL,
  `City` varchar(30) NOT NULL,
  `State` varchar(38) NOT NULL,
  `Zip` varchar(16) NOT NULL,
  `Email` varchar(64) NOT NULL,
  `Username` varchar(21) NOT NULL,
  `Password` varchar(32) NOT NULL,
  `Dob` int(10) NOT NULL,
  `Phone` varchar(16) NOT NULL,
  `Picture` varchar(127) NOT NULL,
  PRIMARY KEY (`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
