-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2018 at 03:39 PM
-- Server version: 5.7.20-log
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `receipe`
--

-- --------------------------------------------------------

--
-- Table structure for table `abc`
--

CREATE TABLE `abc` (
  `ingredients` varchar(50) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `unit` varchar(50) DEFAULT NULL,
  `supplier` varchar(50) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `calories` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `abc`
--

INSERT INTO `abc` (`ingredients`, `quantity`, `unit`, `supplier`, `price`, `calories`) VALUES
('sugar', 10, 'kg', 'aldi', 20, 0),
('salt', 1, 'kg', 'tesco', 20, 0),
('cheese', 55, 'kg', 'lidl', 50, 150),
('cheese', 2, 'kg', 'lidl', 10, 150);

-- --------------------------------------------------------

--
-- Table structure for table `cake`
--

CREATE TABLE `cake` (
  `ingredients` varchar(50) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `unit` varchar(50) DEFAULT NULL,
  `supplier` varchar(50) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `calories` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cake`
--

INSERT INTO `cake` (`ingredients`, `quantity`, `unit`, `supplier`, `price`, `calories`) VALUES
('bread', 9, 'kg', 'tesco', 40, 0),
('oil', 2, 'l', 'qwerty', 0, 0),
('oil', 1, 'l', 'qwerty', 0, 0),
('cheese', 30, 'kg', 'lidl', 50, 150);

-- --------------------------------------------------------

--
-- Table structure for table `cake2`
--

CREATE TABLE `cake2` (
  `ingredients` varchar(50) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `unit` varchar(50) DEFAULT NULL,
  `supplier` varchar(50) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `calories` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cakes`
--

CREATE TABLE `cakes` (
  `ingredients` varchar(50) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `unit` varchar(50) DEFAULT NULL,
  `supplier` varchar(50) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `calories` int(11) DEFAULT NULL,
  `labourtype` varchar(50) DEFAULT NULL,
  `labourcost` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cakes`
--

INSERT INTO `cakes` (`ingredients`, `quantity`, `unit`, `supplier`, `price`, `calories`, `labourtype`, `labourcost`) VALUES
('salt', 11, 'kg', 'XYZ', 20, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `chicken`
--

CREATE TABLE `chicken` (
  `ingredients` varchar(50) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `unit` varchar(50) DEFAULT NULL,
  `supplier` varchar(50) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `calories` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chicken`
--

INSERT INTO `chicken` (`ingredients`, `quantity`, `unit`, `supplier`, `price`, `calories`) VALUES
('salt', 1, 'kg', 'XYZ', 10, 0);

-- --------------------------------------------------------

--
-- Table structure for table `fries`
--

CREATE TABLE `fries` (
  `ingredients` varchar(50) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `unit` varchar(50) DEFAULT NULL,
  `supplier` varchar(50) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `calories` int(11) DEFAULT NULL,
  `labourtype` varchar(50) DEFAULT NULL,
  `labourcost` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `maggi`
--

CREATE TABLE `maggi` (
  `ingredients` varchar(50) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `unit` varchar(50) DEFAULT NULL,
  `supplier` varchar(50) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `calories` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `maggi`
--

INSERT INTO `maggi` (`ingredients`, `quantity`, `unit`, `supplier`, `price`, `calories`) VALUES
('sugar', 1, 'kg', 'abc', 1, 0),
('salt', 2, 'kg', 'XYZ', 20, 0),
('sauce', 3, 'kg', 'tesco', 8, 100);

-- --------------------------------------------------------

--
-- Table structure for table `milkshake`
--

CREATE TABLE `milkshake` (
  `ingredients` varchar(50) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `unit` varchar(50) DEFAULT NULL,
  `supplier` varchar(50) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `calories` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mmm`
--

CREATE TABLE `mmm` (
  `ingredients` varchar(50) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `unit` varchar(50) DEFAULT NULL,
  `supplier` varchar(50) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `calories` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `muffin`
--

CREATE TABLE `muffin` (
  `ingredients` varchar(50) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `unit` varchar(50) DEFAULT NULL,
  `supplier` varchar(50) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `calories` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `muffin`
--

INSERT INTO `muffin` (`ingredients`, `quantity`, `unit`, `supplier`, `price`, `calories`) VALUES
('sugar', 3, 'kg', 'abc', 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `muffinss`
--

CREATE TABLE `muffinss` (
  `ingredients` varchar(50) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `unit` varchar(50) DEFAULT NULL,
  `supplier` varchar(50) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `calories` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `muffinss`
--

INSERT INTO `muffinss` (`ingredients`, `quantity`, `unit`, `supplier`, `price`, `calories`) VALUES
('sugar', 10, 'kg', 'abc', 30, 0),
('sauce', 111, 'kg', 'aldi', 10, 25);

-- --------------------------------------------------------

--
-- Table structure for table `p`
--

CREATE TABLE `p` (
  `ingredients` varchar(50) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `unit` varchar(50) DEFAULT NULL,
  `supplier` varchar(50) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `calories` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pastry`
--

CREATE TABLE `pastry` (
  `ingredients` varchar(50) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `unit` varchar(50) DEFAULT NULL,
  `supplier` varchar(50) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `calories` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pastry`
--

INSERT INTO `pastry` (`ingredients`, `quantity`, `unit`, `supplier`, `price`, `calories`) VALUES
('bread', 2, 'kg', 'tesco', 40, 0);

-- --------------------------------------------------------

--
-- Table structure for table `prawns`
--

CREATE TABLE `prawns` (
  `ingredients` varchar(50) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `unit` varchar(50) DEFAULT NULL,
  `supplier` varchar(50) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `calories` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `prawns`
--

INSERT INTO `prawns` (`ingredients`, `quantity`, `unit`, `supplier`, `price`, `calories`) VALUES
('sugar', 10, 'kg', 'abc', 30, 0),
('sugar', 10, 'kg', 'abc', 30, 0);

-- --------------------------------------------------------

--
-- Table structure for table `res`
--

CREATE TABLE `res` (
  `ingredients` varchar(50) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `unit` varchar(50) DEFAULT NULL,
  `supplier` varchar(50) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `calories` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `res`
--

INSERT INTO `res` (`ingredients`, `quantity`, `unit`, `supplier`, `price`, `calories`) VALUES
('bread', 2, 'kg', 'tesco', 4, 0);

-- --------------------------------------------------------

--
-- Table structure for table `resss`
--

CREATE TABLE `resss` (
  `ingredients` varchar(50) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `unit` varchar(50) DEFAULT NULL,
  `supplier` varchar(50) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `calories` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `resss`
--

INSERT INTO `resss` (`ingredients`, `quantity`, `unit`, `supplier`, `price`, `calories`) VALUES
('cheese', 1, 'kg', 'lidl', 50, 150),
('sugar', 22, 'kg', 'aldi', 1, 2),
('sugar', 11, 'kg', '', 1, 2),
('cheese', 1111, 'kg', 'lidl', 50, 150),
('salt', 1, 'kg', 'aldi', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `s`
--

CREATE TABLE `s` (
  `ingredients` varchar(50) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `unit` varchar(50) DEFAULT NULL,
  `supplier` varchar(50) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `calories` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `s`
--

INSERT INTO `s` (`ingredients`, `quantity`, `unit`, `supplier`, `price`, `calories`) VALUES
('salt', 11, 'kg', 'XYZ', 110, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tortilla`
--

CREATE TABLE `tortilla` (
  `ingredients` varchar(50) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `unit` varchar(50) DEFAULT NULL,
  `supplier` varchar(50) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `calories` int(11) DEFAULT NULL,
  `labourtype` varchar(50) DEFAULT NULL,
  `labourcost` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
