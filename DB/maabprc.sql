-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 24, 2018 at 11:20 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maabprc`
--

-- --------------------------------------------------------

--
-- Table structure for table `maablist`
--

DROP TABLE IF EXISTS `maablist`;
CREATE TABLE IF NOT EXISTS `maablist` (
  `IDNumber` varchar(255) NOT NULL,
  `memType` enum('Classic','Premier Bronze','Premier Silver','Premier Gold','Premier Platinum','Senior','Senior Plus') NOT NULL,
  `chapter` varchar(25) NOT NULL DEFAULT 'BAGUIO CITY',
  `lastName` varchar(50) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `middleName` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contactNumber` varchar(25) NOT NULL,
  `birthday` date NOT NULL,
  `age` int(3) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `status` enum('Single','Married','Widowed','Separated','Divorced') NOT NULL,
  `validDate` date NOT NULL,
  `expiryDate` date NOT NULL,
  `bloodGroup` enum('O+','O-','A+','A-','B+','B-','AB+','AB-') DEFAULT NULL,
  `remarks` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`IDNumber`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
