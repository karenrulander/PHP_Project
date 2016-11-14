-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Nov 14, 2016 at 03:03 AM
-- Server version: 5.5.49-log
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `terry`
--

-- --------------------------------------------------------

--
-- Table structure for table `roster`
--

CREATE TABLE IF NOT EXISTS `roster` (
  `jerseynumber` int(11) NOT NULL,
  `firstName` char(25) NOT NULL,
  `lastName` char(25) NOT NULL,
  `address` char(35) NOT NULL,
  `city` char(35) NOT NULL,
  `state` char(2) NOT NULL DEFAULT 'CA',
  `zipcode` char(10) NOT NULL,
  `nameDad` char(35) NOT NULL,
  `cellPhoneDad` char(12) NOT NULL,
  `nameMom` char(35) NOT NULL,
  `cellPhoneMom` char(12) NOT NULL,
  `UniformSize` char(10) NOT NULL,
  `homePhoneDad` char(12) NOT NULL,
  `homePhoneMom` char(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='team roster';

--
-- Dumping data for table `roster`
--

INSERT INTO `roster` (`jerseynumber`, `firstName`, `lastName`, `address`, `city`, `state`, `zipcode`, `nameDad`, `cellPhoneDad`, `nameMom`, `cellPhoneMom`, `UniformSize`, `homePhoneDad`, `homePhoneMom`) VALUES
(8, 'Karen', 'Rulander', '100 Main Street', 'Louisville', 'KY', '40220', 'Dad', '502-454-4916', 'Mom', '502-454-4916', 'Small', '502-454-4916', '502-454-4916'),
(10, 'Theo', 'Ferg', '413 ROWLAND AVE', 'MODESTO', 'CA', '95354-1508', 'Terry', '209-123-4567', 'Meghan', '209-321-7654', 'Small', '209-111-22', '209-111-22'),
(11, 'Billy', 'Smith', '111 Main Street', 'Modesto', 'CA', '40211', '', '', '', '', 'Medium', '', ''),
(18, 'Isaac', 'Ferg', '413 ROWLAND AVE', 'MODESTO', 'CA', '95354-1508', 'Terry', '209-123-4567', 'Meghan', '209-321-7654', '', '', '');

--
-- Indexes for table `roster`
--
ALTER TABLE `roster`
  ADD PRIMARY KEY (`jerseynumber`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
