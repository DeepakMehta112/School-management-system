-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2023 at 09:40 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `std`
--

CREATE TABLE `std` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `address` varchar(150) NOT NULL,
  `age` int(3) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `class` varchar(5) NOT NULL,
  `parent` varchar(500) NOT NULL,
  `position` int(2) NOT NULL,
  `transport` varchar(5) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `std`
--

INSERT INTO `std` (`id`, `name`, `address`, `age`, `phone`, `class`, `parent`, `position`, `transport`, `gender`, `email`, `dob`) VALUES
(1, 'Ian Shrestha', 'Biratnagar-10', 5, '9874561231', 'LKG', 'Sajan Shrestha', 11, 'no', 'male', 'ian@gmail.com', '2018-06-19'),
(3, 'Aagya gautam', 'Dharan', 13, '984576123', '7', 'Madan Gautam', 13, 'yes', 'Female', 'a789@gmail.com', '2010-05-20'),
(10, 'Yami Limbu', 'Itahari', 18, '985641234', '10', 'Muskan Limbu', 15, 'yes', 'Female', 'yyyy@gmail.com', '2005-12-15'),
(11, 'Sova Raj', 'Lahan', 15, '986745120', '9', 'Rasi Raj', 6, 'yes', 'Female', 'sova23@gmail.com', '2008-07-23'),
(12, 'Nick Roy', 'Jhapa', 6, '986574123', 'UKG', 'Mina Roy', 10, 'no', 'Male', 'minn@gmail.com', '2017-03-11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `std`
--
ALTER TABLE `std`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `std`
--
ALTER TABLE `std`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
