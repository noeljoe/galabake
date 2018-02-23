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
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `additions`
--

CREATE TABLE `additions` (
  `receipe` varchar(50) NOT NULL,
  `cogs` int(50) NOT NULL,
  `servings` int(50) NOT NULL,
  `yield` int(50) NOT NULL,
  `target` int(50) NOT NULL,
  `currentsalesprice` int(50) NOT NULL,
  `weekly` int(50) NOT NULL,
  `overheadrate` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `additions`
--

INSERT INTO `additions` (`receipe`, `cogs`, `servings`, `yield`, `target`, `currentsalesprice`, `weekly`, `overheadrate`) VALUES
('cake', 4, 4, 4, 4, 4, 4, 4),
('cake', 6, 6, 6, 6, 6, 6, 6),
('tortilla', 5, 5, 5, 5, 5, 5, 5),
('prawns', 5, 5, 5, 5, 5, 5, 5),
('tortilla', 5, 5, 5, 5, 5, 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `allergens`
--

CREATE TABLE `allergens` (
  `a1` int(50) NOT NULL,
  `a2` int(50) NOT NULL,
  `a3` int(50) NOT NULL,
  `a4` varchar(50) DEFAULT NULL,
  `a5` varchar(50) DEFAULT NULL,
  `a6` varchar(50) DEFAULT NULL,
  `a7` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `allergens1`
--

CREATE TABLE `allergens1` (
  `ingredients` varchar(50) NOT NULL,
  `a1` int(10) DEFAULT NULL,
  `a2` int(10) DEFAULT NULL,
  `a3` int(10) DEFAULT NULL,
  `a7` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `allergens1`
--

INSERT INTO `allergens1` (`ingredients`, `a1`, `a2`, `a3`, `a7`) VALUES
('sauce', 1, NULL, NULL, NULL),
('sauce', NULL, NULL, 1, NULL),
('salt', 1, NULL, NULL, NULL),
('salt', NULL, 1, NULL, NULL),
('salt', NULL, NULL, NULL, NULL),
('salt', NULL, NULL, NULL, NULL),
('bread', NULL, NULL, NULL, NULL),
('bread', NULL, NULL, NULL, NULL),
('bread', NULL, NULL, NULL, NULL),
('bread', NULL, NULL, NULL, 'a7');

-- --------------------------------------------------------

--
-- Table structure for table `ingredients`
--

CREATE TABLE `ingredients` (
  `name` varchar(50) NOT NULL,
  `supplier` varchar(50) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `quantity` int(50) NOT NULL,
  `cost` int(50) NOT NULL,
  `calories` int(20) NOT NULL,
  `time_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ingredients`
--

INSERT INTO `ingredients` (`name`, `supplier`, `unit`, `quantity`, `cost`, `calories`, `time_updated`) VALUES
('salt', 'aldi', 'kg', 20, 20, 0, '2018-02-08 11:13:05'),
('sauce', 'aldi', 'kg', 10, 10, 100, '2018-02-18 17:42:07'),
('bread', 'aldi', 'kg', 30, 40, 120, '2018-02-07 23:55:48'),
('cheese', 'lidl', 'kg', 10, 50, 150, '2018-02-07 23:56:49'),
('sugar', 'tesco', 'kg', 1, 1, 1, '2018-02-18 18:28:08'),
('sugar', 'aldi', 'kg', 3, 3, 2, '2018-02-18 18:28:37'),
('sugar', 'dunnes', 'kg', 2, 2, 2, '2018-02-19 14:18:31');

-- --------------------------------------------------------

--
-- Table structure for table `ingredientssupplier`
--

CREATE TABLE `ingredientssupplier` (
  `ingredients` varchar(50) NOT NULL,
  `supplier` varchar(50) NOT NULL,
  `cost` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='chosen supplier for ingredient';

--
-- Dumping data for table `ingredientssupplier`
--

INSERT INTO `ingredientssupplier` (`ingredients`, `supplier`, `cost`) VALUES
('salt', 'aldi', 20);

-- --------------------------------------------------------

--
-- Table structure for table `labour`
--

CREATE TABLE `labour` (
  `type` varchar(50) NOT NULL,
  `rate` int(50) NOT NULL,
  `labourtime` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `labour`
--

INSERT INTO `labour` (`type`, `rate`, `labourtime`) VALUES
('Head Chef', 20, 40),
('Sub Chef', 15, 35),
('Waiter', 11, 40);

-- --------------------------------------------------------

--
-- Table structure for table `outputs`
--

CREATE TABLE `outputs` (
  `receipe` varchar(50) NOT NULL,
  `labour2` float NOT NULL,
  `ingredient2` float NOT NULL,
  `cogs2` float NOT NULL,
  `totalcost2` float NOT NULL,
  `costperserving2` float NOT NULL,
  `costyield2` float NOT NULL,
  `thresholdsales2` float NOT NULL,
  `grossmargin2` float NOT NULL,
  `grossmarginperserving2` float NOT NULL,
  `weekly2` float NOT NULL,
  `overheadallowance2` float NOT NULL,
  `weeklynet2` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `outputs`
--

INSERT INTO `outputs` (`receipe`, `labour2`, `ingredient2`, `cogs2`, `totalcost2`, `costperserving2`, `costyield2`, `thresholdsales2`, `grossmargin2`, `grossmarginperserving2`, `weekly2`, `overheadallowance2`, `weeklynet2`) VALUES
('tortilla', 3, 0, 10, 5, 1, 0, 0, 1, 5, 20, 125, -105),
('tortilla', 3, 0, 10, 5, 1, 0, 0, 1, 7, 42, 343, -301),
('tortilla', 3.6667, 0, 10, 3, 0.375, 0.046875, -0.00669643, 0.994141, 7.95312, 63.625, 512, -448.375),
('prawns', 1.4333, 20, 2, 3, 1.5, 0.75, -0.75, 0.625, 1.25, 2.5, 8, -5.5),
('tortilla', 3.6667, 0, 10, 3, 1, 0.333333, -0.166667, 0.888889, 2.66667, 8, 27, -19),
('tortilla', 3.6667, 0, 10, 3, 1.5, 0.75, -0.75, 0.625, 1.25, 2.5, 8, -5.5),
('cake', 0, 69, 2, 2, 1, 0.5, -0.5, 0.75, 1.5, 3, 8, -5),
('cake', 0, 69, 2, 2, 0.666667, 0.222222, -0.111111, 0.925926, 2.77778, 8.33333, 27, -18.6667),
('cake', 0, 69, 4, 2, 0.5, 0.125, -0.0416667, 0.96875, 3.875, 15.5, 64, -48.5),
('cake', 3.4783, 69, 4, 3, 0.5, 0.0833333, -0.0166667, 0.986111, 5.91667, 35.5, 216, -180.5),
('tortilla', 0, 0, 5, 2, 0.4, 0.08, -0.02, 0.98, 4.92, 24.6, 125, -100.4),
('prawns', 7.6739, 20, 5, 3, 0.6, 0.12, -0.03, 0.98, 4.88, 24.4, 125, -100.6),
('tortilla', 11.5109, 0, 5, 3, 0.6, 0.12, -0.03, 0.98, 4.88, 24.4, 125, -100.6);

-- --------------------------------------------------------

--
-- Table structure for table `receipelabourcost`
--

CREATE TABLE `receipelabourcost` (
  `receipe` varchar(50) NOT NULL,
  `labourtimereceipe` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `receipelabourcost`
--

INSERT INTO `receipelabourcost` (`receipe`, `labourtimereceipe`) VALUES
('cake', 1),
('prawns', 30),
('tortilla', 45);

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `receipe` varchar(50) NOT NULL,
  `costprice1` float NOT NULL,
  `salesprice1` float NOT NULL,
  `target1` float NOT NULL,
  `currentgross1` float NOT NULL,
  `delta1` float NOT NULL,
  `weekly1` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`receipe`, `costprice1`, `salesprice1`, `target1`, `currentgross1`, `delta1`, `weekly1`) VALUES
('prawns', 1, 2, 2, 1, -138, 3),
('tortilla', 0, 3, 3, 1, -211, 8),
('tortilla', 0.75, 2, 2, 0.625, -137.5, 2.5),
('cake', 0.5, 2, 2, 0.75, -125, 3),
('cake', 0.222222, 3, 3, 0.925926, -207.407, 8.33333),
('cake', 0.125, 4, 4, 0.96875, -303.125, 15.5),
('cake', 0.0833333, 6, 6, 0.986111, -501.389, 35.5),
('tortilla', 0.08, 5, 5, 0.98, -402, 24.6),
('prawns', 0.12, 5, 5, 0.98, -402, 24.4),
('tortilla', 0.12, 5, 5, 0.98, -402, 24.4);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
