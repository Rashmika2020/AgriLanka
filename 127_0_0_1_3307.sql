-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jun 30, 2021 at 09:06 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--
CREATE DATABASE IF NOT EXISTS `login` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `login`;

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` int(10) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `body` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `subject`, `body`) VALUES
(19, 'vegetable', '<div style=\"text-align: center;\"><span style=\"font-size: xx-large;\"><font face=\"Comic Sans MS\" color=\"#008000\">Pumpkins</font>&nbsp;are&nbsp;<font color=\"#ff0000\">Available</font>...</span></div><div style=\"text-align: center;\"><span style=\"font-size: xx-large;\"><br></span></div><div>&nbsp; &nbsp;<img src=\"http://localhost/agrilanka/advertisement/images/1372438667.jpg\">&nbsp; &nbsp; &nbsp;<img src=\"http://localhost/agrilanka/advertisement/images/1934080593.jpg\"></div><div><ul><li>From 5th April 2021</li><li>Rs:40/= per 1Kg</li><li>At Thissamaharama Market</li></ul></div>');

-- --------------------------------------------------------

--
-- Table structure for table `custinformation`
--

CREATE TABLE `custinformation` (
  `CustRegistNum` int(11) NOT NULL,
  `CustFullName` varchar(50) NOT NULL,
  `CustPhoneNumber` varchar(12) NOT NULL,
  `CustEmail` varchar(50) NOT NULL,
  `CustMessage` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `custinformation`
--

INSERT INTO `custinformation` (`CustRegistNum`, `CustFullName`, `CustPhoneNumber`, `CustEmail`, `CustMessage`) VALUES
(3, 'Wishmi Kaveesha', '0719307077', 'Wishmikaveesha54@gmail.com', 'Can I get more details about the seeds available? ');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `Register_Number` int(11) NOT NULL,
  `Customer_name` varchar(50) NOT NULL,
  `Question` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`Register_Number`, `Customer_name`, `Question`) VALUES
(2, 'Wishmi Kaveesha', 'Do online delivery services are available? ');

-- --------------------------------------------------------

--
-- Table structure for table `fertilizer_table`
--

CREATE TABLE `fertilizer_table` (
  `Id` int(20) NOT NULL,
  `type` varchar(25) NOT NULL,
  `unit_price` int(5) NOT NULL,
  `amount` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fertilizer_table`
--

INSERT INTO `fertilizer_table` (`Id`, `type`, `unit_price`, `amount`) VALUES
(2, 'yuriya', 50, 150),
(3, 'flow', 80, 60);

-- --------------------------------------------------------

--
-- Table structure for table `plants_table`
--

CREATE TABLE `plants_table` (
  `Id` int(20) NOT NULL,
  `type` varchar(25) NOT NULL,
  `unit_price` int(5) NOT NULL,
  `amount` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plants_table`
--

INSERT INTO `plants_table` (`Id`, `type`, `unit_price`, `amount`) VALUES
(1, 'coconut', 300, 20),
(2, 'mango', 160, 60);

-- --------------------------------------------------------

--
-- Table structure for table `seed_table`
--

CREATE TABLE `seed_table` (
  `Id` int(20) NOT NULL,
  `type` varchar(25) NOT NULL,
  `unit_price` int(5) NOT NULL,
  `amount` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seed_table`
--

INSERT INTO `seed_table` (`Id`, `type`, `unit_price`, `amount`) VALUES
(1, 'Carrot', 50, 100),
(2, 'tomatoo', 40, 60);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(40) NOT NULL,
  `code` varchar(8) NOT NULL,
  `type` enum('Farmer','Officer') NOT NULL,
  `last_login` datetime NOT NULL,
  `is_deleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `code`, `type`, `last_login`, `is_deleted`) VALUES
(28, 'Chinthaka ', 'Chinthaka@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '001', 'Officer', '2021-06-30 12:07:18', 0),
(29, 'Wishmi', 'Wishmi@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '003', 'Farmer', '2021-06-30 12:08:34', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `custinformation`
--
ALTER TABLE `custinformation`
  ADD PRIMARY KEY (`CustRegistNum`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`Register_Number`);

--
-- Indexes for table `fertilizer_table`
--
ALTER TABLE `fertilizer_table`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `plants_table`
--
ALTER TABLE `plants_table`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `seed_table`
--
ALTER TABLE `seed_table`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `custinformation`
--
ALTER TABLE `custinformation`
  MODIFY `CustRegistNum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `Register_Number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `fertilizer_table`
--
ALTER TABLE `fertilizer_table`
  MODIFY `Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `plants_table`
--
ALTER TABLE `plants_table`
  MODIFY `Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `seed_table`
--
ALTER TABLE `seed_table`
  MODIFY `Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
