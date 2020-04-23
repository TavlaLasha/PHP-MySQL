-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2020 at 06:03 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `workout`
--

-- --------------------------------------------------------

--
-- Table structure for table `shenaxuli`
--

CREATE TABLE `shenaxuli` (
  `id` int(11) NOT NULL,
  `Dasaxeleba` text NOT NULL,
  `Ganmarteba` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shenaxuli`
--

INSERT INTO `shenaxuli` (`id`, `Dasaxeleba`, `Ganmarteba`) VALUES
(1, 'dfgdfs', 'dsfhgdsf'),
(2, 'fgjjjj', 'ffgdd'),
(3, '12222', 'dsg'),
(4, '443566', 'dfghhh'),
(5, 'sdgfh', 'dsfhgsd'),
(6, 'sagdfsh', 'sdagfasd'),
(7, 'sadfsadg', 'sdgasdg'),
(8, 'dfgdfs', 'dsfhgdsf');

-- --------------------------------------------------------

--
-- Table structure for table `varjishi`
--

CREATE TABLE `varjishi` (
  `id` int(11) NOT NULL,
  `Dasaxeleba` varchar(100) DEFAULT NULL,
  `Ganmarteba` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `varjishi`
--

INSERT INTO `varjishi` (`id`, `Dasaxeleba`, `Ganmarteba`) VALUES
(7, 'fgjjjj', 'ffgdd'),
(8, '12222', 'dsg'),
(9, '443566', 'dfghhh'),
(10, 'sdgfh', 'dsfhgsd'),
(11, 'sagdfsh', 'sdagfasd'),
(12, 'sadfsadg', 'sdgasdg'),
(15, 'dfgdfs', 'dsfhgdsf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shenaxuli`
--
ALTER TABLE `shenaxuli`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `varjishi`
--
ALTER TABLE `varjishi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `shenaxuli`
--
ALTER TABLE `shenaxuli`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `varjishi`
--
ALTER TABLE `varjishi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
