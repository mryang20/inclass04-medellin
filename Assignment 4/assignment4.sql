-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 06, 2018 at 04:14 PM
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
-- Database: `assignment4`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignment4tableform`
--

DROP TABLE IF EXISTS `assignment4tableform`;
CREATE TABLE IF NOT EXISTS `assignment4tableform` (
  `ID` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `EmailAddress` text NOT NULL,
  `PhoneNumber` text NOT NULL,
  `ProjectDescription` text NOT NULL,
  UNIQUE KEY `Assignment4Index` (`ID`,`Name`,`EmailAddress`(50),`PhoneNumber`(20),`ProjectDescription`(300))
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assignment4tableform`
--

INSERT INTO `assignment4tableform` (`ID`, `Name`, `EmailAddress`, `PhoneNumber`, `ProjectDescription`) VALUES
(0, 'abc', 'def', 'ghi', 'jkl'),
(1, 'hu', 'asa', 'ass', 'asas');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
