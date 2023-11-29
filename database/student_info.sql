-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2022 at 03:48 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_info`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `user_pwd` varchar(255) DEFAULT NULL,
  `last_login` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `user_name`, `user_pwd`, `last_login`) VALUES
(1, 'rifat', '123', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `students_data`
--

CREATE TABLE `students_data` (
  `id` int(11) NOT NULL,
  `std_name` varchar(50) NOT NULL,
  `std_id` varchar(20) NOT NULL,
  `class_name` varchar(20) NOT NULL,
  `dept_name` char(50) NOT NULL,
  `catagory` char(50) NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `students_data`
--

INSERT INTO `students_data` (`id`, `std_name`, `std_id`, `class_name`, `dept_name`, `catagory`, `datetime`) VALUES
(1, 'refat', '193', 'rrrr', 'eeee', '', '2022-01-06 12:43:20'),
(6, 'refattt', '113', 'jhg', 'hjgjg', '', '2022-01-06 14:30:30'),
(10, 'refa', '23432', 'asdfasd', 'sdfasdf', '', '2022-01-10 13:22:33'),
(15, 'refat', '342', 'sf', 'SM select', '', '2022-01-11 12:24:06'),
(17, 'zdfg', 'dfg', 'dfg', 'Large select', '', '2022-01-11 12:31:43'),
(18, 'asdasd', 'fasdfdsra', 'sdfasda', 'Large select', '', '2022-01-12 12:22:58'),
(19, 'asdasd', 'asdasd', 'asdasdf', 'SSM select', 'catagory', '2022-01-12 12:48:27'),
(20, 'asdffas', 'dasdfasd', 'afsdfasd', 'SSM select', 'catagory', '2022-01-12 12:49:30'),
(21, 'asdasd', 'fasdfasd', 'fasdfasdf', 'SSM select', 'laptop', '2022-01-12 12:49:42'),
(23, 'nahin', '19300003', '1st', 'Large select', '', '2022-01-24 20:32:06'),
(24, 'tunisha', '123456', '12', 'SSM select', 'laptop', '2022-01-24 20:46:37'),
(25, 'tasniya', '1930053', '1', 'SM select', 'mobile', '2022-04-19 01:32:23'),
(26, 'refattttt', '1111', '111', 'SSM select', 'mobile', '2022-08-14 19:21:45'),
(27, 'babuuu', '199900', '12', 'SM select', 'mobile', '2022-08-14 20:34:46'),
(28, 'asif', '1234', '1234', 'SSM select', 'laptop', '2022-08-23 16:02:11'),
(29, 'asif', '1234', '1234', 'SSM select', 'laptop', '2022-08-23 16:02:41'),
(30, 'arif', '12345', '12345', 'SSM select', 'laptop', '2022-08-23 23:54:55'),
(31, 'arrif', '1234', '1234', 'SSM select', 'laptop', '2022-08-23 23:55:23'),
(32, 'rr', 'rr', 'rr', 'SSM select', 'laptop', '2022-08-24 00:28:24'),
(33, 'refatt', '12', '12', 'SSM select', 'laptop', '2022-08-24 13:12:02'),
(34, 'eee', '123', '123', 'SSM select', 'laptop', '2022-08-24 13:12:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students_data`
--
ALTER TABLE `students_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `students_data`
--
ALTER TABLE `students_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
