-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2023 at 10:24 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schoolmanagementsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `transport`
--

CREATE TABLE `transport` (
  `id` int(11) NOT NULL,
  `busno` varchar(1000) NOT NULL,
  `route` varchar(200) NOT NULL,
  `drivername` varchar(200) NOT NULL,
  `phoneno` varchar(200) NOT NULL,
  `fee` varchar(400) NOT NULL,
  `timetable` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transport`
--

INSERT INTO `transport` (`id`, `busno`, `route`, `drivername`, `phoneno`, `fee`, `timetable`) VALUES
(10, '', '', '', '', '', ''),
(11, '1', '1', '1', '1', '1', '11:11'),
(12, '1', '1', '1', '1', '1', '11:11'),
(13, '1', '1', '1', '1', '1', '11:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transport`
--
ALTER TABLE `transport`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transport`
--
ALTER TABLE `transport`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
