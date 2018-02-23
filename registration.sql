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
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`firstName`, `lastName`, `position`, `username`, `email`, `password`) VALUES
('Saurabh', 'Bhagwat', 'Manager', 'saurabh_9995', 'saurabhbhagwat.sb@gmail.com', '133057facf49cbe6520b15a4d96ee395'),
('Saurabh', 'Bhagwat', 'Manager', 'saurabh_9995', 'saurabhbhagwat.sb@gmail.com', '133057facf49cbe6520b15a4d96ee395'),
('Abhijeet', 'Mutha', 'manager', 'abhi', 'abhi@gmail.com', 'abhi'),
('Saurabh', 'Bhagwat', 'Manager', 'saurabh', 'saurabhbhagwat.sb@gmail.com', 'saurabh');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
