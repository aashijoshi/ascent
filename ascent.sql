-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2016 at 07:32 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ascent`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`) VALUES
(1, 'manoj', 'a1a9983bfbfb713ce08ab3961e93f741'),
(2, 'mukesh', 'a1a9983bfbfb713ce08ab3961e93f741'),
(3, 'aashi', 'a1a9983bfbfb713ce08ab3961e93f741');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `Mobile` int(10) NOT NULL,
  `message` varchar(2500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`first_name`, `last_name`, `email`, `Mobile`, `message`) VALUES
('aashi', 'joshi', 'aashi2309joshi@gmail.com', 2147483647, 'grt work by you aashi'),
('ritwik', 'joshi', 'jritwik3@gmail.com', 2147483647, 'it works');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE IF NOT EXISTS `enquiry` (
  `Name` text NOT NULL,
  `Father_name` text NOT NULL,
  `Course` int(3) NOT NULL,
  `Mobile` bigint(10) NOT NULL,
  `Email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`Name`, `Father_name`, `Course`, `Mobile`, `Email`) VALUES
('ritwik', 'ramesh', 1, 8290266803, 'jritwik3@gmail.com'),
('Aashi Joshi', 'Prashant Joshi', 1, 8058831925, 'aashi2309joshi@gmail.com'),
('aashi', 'cnakdjc', 1, 5565654684, 'casc@gvs.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
