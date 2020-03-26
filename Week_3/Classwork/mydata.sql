-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2020 at 03:38 PM
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
-- Database: `mydata`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `Id` int(10) UNSIGNED NOT NULL,
  `Title` varchar(30) NOT NULL,
  `Date` date NOT NULL,
  `Type` varchar(30) NOT NULL,
  `Photo` varchar(50) NOT NULL,
  `Text` text NOT NULL,
  `Autor` varchar(30) NOT NULL,
  `Description` varchar(200) NOT NULL,
  `Meta_k` varchar(200) NOT NULL,
  `Meta_d` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`Id`, `Title`, `Date`, `Type`, `Photo`, `Text`, `Autor`, `Description`, `Meta_k`, `Meta_d`) VALUES
(1, 'Pirveli monacemi', '2020-03-25', 'Sxvanairi', 'ar aris', 'monacemis teqsti', 'Lasha', 'monacemis agwera', 'ar vici', 'ra'),
(2, 'Meore monacemi', '2020-03-26', 'Sul Sxvanairi', 'daikarga', 'teqstia teqsti', 'Lasha', 'agwera', 'radio ucnobi', 'ar vici'),
(3, 'Mesame monacemi', '2020-03-03', 'Dakarguli', 'ar girs', 'teqstnairi', 'Lasha', 'avgwere', 'info', 'unknown');

-- --------------------------------------------------------

--
-- Table structure for table `menu,`
--

CREATE TABLE `menu,` (
  `id` int(10) UNSIGNED NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Meta_k` varchar(200) NOT NULL,
  `Meta_d` varchar(200) NOT NULL,
  `Text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu,`
--

INSERT INTO `menu,` (`id`, `Title`, `Meta_k`, `Meta_d`, `Text`) VALUES
(1, 'Monacemta baza', '', '', 'Es aris chemi pirveli monacemebis cxrili'),
(2, 'Meore monacemi', 'ragaca ragaca', 'isev ragaca :D', 'meore monacemis teqsti'),
(3, 'Mesame monacemis satauri', 'Ucnobi inpormacia', 'Ucnobi inpormaciis dzma', '1 saati da 30 wuti darcha leqciis damtavrebamde');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(10) UNSIGNED NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Lastname` varchar(30) NOT NULL,
  `Age` int(11) NOT NULL,
  `BirthDay` date NOT NULL,
  `Reg_Date` date NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Gender` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `Name`, `Lastname`, `Age`, `BirthDay`, `Reg_Date`, `Password`, `Gender`) VALUES
(1, 'Lasha ', 'Tavlalashvili', 19, '2010-09-30', '2020-03-26', '2000 pirdapir ver avirchie :DD', 'Male'),
(2, 'Isev Lasha', 'Isev Tavlalashvili', 19, '2020-03-02', '2020-03-26', '**************', 'Male'),
(3, 'Lashacieli', 'Tavlala', 19, '2020-03-04', '2020-03-26', 'Daparuli paroli', 'Male!');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `menu,`
--
ALTER TABLE `menu,`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `Id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `menu,`
--
ALTER TABLE `menu,`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
