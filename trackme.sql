-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2019 at 10:34 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trackme`
--

-- --------------------------------------------------------

--
-- Table structure for table `fieldeng`
--

CREATE TABLE `fieldeng` (
  `engcode` int(10) NOT NULL,
  `eng_username` varchar(40) NOT NULL,
  `eng_password` text NOT NULL,
  `eng_email` varchar(40) NOT NULL,
  `eng_phone` text NOT NULL,
  `eng_address` varchar(70) NOT NULL,
  `eng_city` varchar(60) NOT NULL DEFAULT 'Kolkata',
  `eng_state` varchar(50) NOT NULL DEFAULT 'West Bengal',
  `eng_country` varchar(50) NOT NULL DEFAULT 'India',
  `registration_date` datetime NOT NULL DEFAULT current_timestamp(),
  `Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fieldeng`
--

INSERT INTO `fieldeng` (`engcode`, `eng_username`, `eng_password`, `eng_email`, `eng_phone`, `eng_address`, `eng_city`, `eng_state`, `eng_country`, `registration_date`, `Name`) VALUES
(1, 'anil', 'anil', 'anil150875@gmail.com', '9674843234', 'Aruna abasan D Block Hatiyara', 'Kolkata', 'West Bengal', 'India', '2019-11-28 04:43:22', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fieldeng`
--
ALTER TABLE `fieldeng`
  ADD PRIMARY KEY (`engcode`),
  ADD UNIQUE KEY `eng_username` (`eng_username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fieldeng`
--
ALTER TABLE `fieldeng`
  MODIFY `engcode` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
