-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2021 at 09:34 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webtech`
--

-- --------------------------------------------------------

--
-- Table structure for table `works`
--

CREATE TABLE `works` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `task` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `period` date NOT NULL,
  `location` varchar(100) NOT NULL,
  `salery` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `works`
--

INSERT INTO `works` (`id`, `username`, `task`, `email`, `period`, `location`, `salery`) VALUES
(4, 'rafiulshan1121', 'crop cutting', 'sami@mega.com', '2021-03-30', 'khulna', '1200'),
(5, 'rafiulshan1121', 'Machine crop cutting', '18-38321-2@student.aiub.edu', '2021-04-22', 'Rangpur', '5000'),
(7, 'rafiulshan1121', 'Machine Cutting Of Crops	', 'bravoarmy11@gmail.com', '2021-04-22', 'khulna', '3000'),
(11, 'Rat', 'Planting Crops', 'new@yahoo.com', '2021-04-10', 'Bogra', '700'),
(12, 'rafiulshan1121', 'Machine crop cutting', '18-38321-2@student.aiub.edu', '2021-03-31', 'Rangpur', '5000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `works`
--
ALTER TABLE `works`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
