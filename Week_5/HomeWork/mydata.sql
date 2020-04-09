-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2020 at 02:52 PM
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
(3, 'Mesame monacemi', '2020-03-03', 'Dakarguli', 'ar girs', 'teqstnairi', 'Lasha', 'avgwere', 'info', 'unknown'),
(4, 'Meotxe monacemi', '2020-04-08', 'Gachumebuli', '...', 'teqsti 4', 'Lasha', 'Meotxes agwera', 'k', 'd'),
(5, 'Mexute monacemi', '2020-04-08', 'Unknown', 'Photo 5', 'Text 5', 'Lasha', 'Description 5', 'kk', 'dd'),
(6, 'Meeqvse monacemi', '2020-04-08', 'Sxvanairi', 'daikarga', 'Text 6', 'Lasha', 'Description 6', 'k6', 'd6'),
(7, 'Meshvide monacemi', '2020-04-08', 'Unknown', 'Photo 7', 'Text 7', 'Lasha', 'Desc 7', 'k7', 'd7'),
(8, 'Merve monacemi', '2020-04-08', 'Sxvanairi', 'Photo 8', 'Text 8', 'Lasha', 'Desc 8', 'k8', 'd8'),
(9, 'Mecxre monacemi', '2020-04-08', 'Unknown', 'Photo 9', 'Text 9', 'Lasha ', 'Desc 9', 'k9', 'd9'),
(10, 'Meate monacemi', '2020-04-08', 'Dakarguli', 'Photo 10', 'Txt 10', 'Lasha', 'Desc 10', 'k10', 'd10'),
(11, 'Metertmete monacemi', '2020-04-08', 'Unknown', 'Photo 11', 'Txt 11', 'Lasha', 'Desc 11', 'k11', 'd11'),
(12, 'Metormete monacemi', '2020-04-08', 'Ucnobi', 'Photo 12', 'Txt 12', 'Lasha ', 'Desc 12', 'k12', 'd12');

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
(2, 'Meore striqoni', 'k1', 'd1', 'meore striqonis teqsti'),
(3, 'Mesame monacemis satauri', 'k3', 'd3', '1 saati da 30 wuti darcha leqciis damtavrebamde'),
(4, 'Bazis Shesaxeb', 'k4', 'd4', 'About base'),
(5, 'LogIn', 'k5', 'd5', 'Login Text');

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
(3, 'Lashacieli', 'Tavlala', 19, '2020-03-04', '2020-03-26', 'Daparuli paroli', 'Male!'),
(4, 'Cotne', 'Loladze', 19, '2020-04-08', '2020-04-08', 'cotnicieli', 'Male'),
(5, 'Misha', 'Arushaniani', 23, '2020-04-08', '2020-04-08', 'mishasparoli', 'Male');

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
  MODIFY `Id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `menu,`
--
ALTER TABLE `menu,`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
