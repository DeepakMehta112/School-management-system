-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2023 at 09:41 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(500) NOT NULL,
  `address` varchar(50) NOT NULL,
  `age` int(2) NOT NULL,
  `phone_no` varchar(10) NOT NULL,
  `position` varchar(50) NOT NULL,
  `salary` int(8) NOT NULL,
  `post` varchar(15) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `gmail` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `subject` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `address`, `age`, `phone_no`, `position`, `salary`, `post`, `gender`, `gmail`, `dob`, `subject`) VALUES
(1, 'prabin', 'brt', 20, '9814320115', 'HOD', 15000, 'teacher', 'male', 'pratik@gmail.com', '0000-00-00', 'computer science'),
(2, 'pratik', 'brt', 20, '9814320115', 'HOD', 15000, 'teacher', 'male', 'pratik@gmail.com', '2003-04-08', 'computer science'),
(4, 'prakriti', 'itahari', 20, '9842099668', 'HOD', 7000, 'Senior teacher', 'female', 'prakriti@gmail.com', '2003-07-14', 'science'),
(5, 'pragya', 'biratnagar', 21, '9842099668', 'HOD', 7000, 'senior teacher', 'female', 'pragya@gmail.com', '2003-10-13', 'computer'),
(6, 'prakriti', 'itahari', 20, '9842099668', 'HOD', 7000, 'Senior teacher', 'female', 'prakriti@gmail.com', '2003-07-14', 'science'),
(7, 'pragya', 'biratnagar', 21, '9842099668', 'HOD', 7000, 'senior teacher', 'female', 'pragya@gmail.com', '2003-10-13', 'computer'),
(9, 'krishna', 'jhapa', 21, '9845011235', 'hod', 8000, 'senior teacher', 'male', 'krishna@gmail.com', '0000-00-00', 'Information technology'),
(10, 'Radha', 'jhapa', 21, '9845011235', 'hod', 8000, 'senior teacher', 'male', 'krishna@gmail.com', '0000-00-00', 'Information technology');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
