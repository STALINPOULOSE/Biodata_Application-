-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2022 at 06:42 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biodata`
--

-- --------------------------------------------------------

--
-- Table structure for table `basic_detail`
--

CREATE TABLE `basic_detail` (
  `id` int(20) NOT NULL,
  `user_code` int(20) NOT NULL,
  `name` varchar(25) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(25) NOT NULL,
  `mobile` int(15) NOT NULL,
  `profile` varchar(300) NOT NULL,
  `objective` varchar(300) NOT NULL,
  `declaration` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `basic_detail`
--

INSERT INTO `basic_detail` (`id`, `user_code`, `name`, `address`, `email`, `mobile`, `profile`, `objective`, `declaration`) VALUES
(1, 23242, 'stalin', 'udhiynoor vilai', 'stalinpoulose25@gmail.com', 2147483647, 'developer', 'engineer', 'developing softwares'),
(2, 2242, 'lal', 'udhiynoor vilai', 'lal34@gmail.com', 2147483647, 'developer', 'engineer', 'developing softwares');

-- --------------------------------------------------------

--
-- Table structure for table `education_details`
--

CREATE TABLE `education_details` (
  `id` int(10) NOT NULL,
  `user_code` int(15) NOT NULL,
  `coursename` varchar(20) NOT NULL,
  `university` varchar(300) NOT NULL,
  `college` varchar(300) NOT NULL,
  `passyear` int(15) NOT NULL,
  `percentage` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `education_details`
--

INSERT INTO `education_details` (`id`, `user_code`, `coursename`, `university`, `college`, `passyear`, `percentage`) VALUES
(1, 12232, 'BE', 'anna university', 'maria college', 2019, 75);

-- --------------------------------------------------------

--
-- Table structure for table `experience_details`
--

CREATE TABLE `experience_details` (
  `id` int(10) NOT NULL,
  `user_code` int(15) NOT NULL,
  `organization_name` varchar(300) NOT NULL,
  `experience` varchar(400) NOT NULL,
  `role` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `experience_details`
--

INSERT INTO `experience_details` (`id`, `user_code`, `organization_name`, `experience`, `role`) VALUES
(1, 5555, 'inmakes', 'two years', 'developer');

-- --------------------------------------------------------

--
-- Table structure for table `personal_details`
--

CREATE TABLE `personal_details` (
  `id` int(10) NOT NULL,
  `user_code` varchar(10) NOT NULL,
  `personal_type` varchar(400) NOT NULL,
  `personal_detail` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personal_details`
--

INSERT INTO `personal_details` (`id`, `user_code`, `personal_type`, `personal_detail`) VALUES
(7, '5643', 'wdsfdsfdfd', 'sfsgtftgtht'),
(8, '5623', 'fbfbfb', 'btbttgbt'),
(9, '12324', 'sfdhfjghkjlk', 'hkujgfjfjdfjhf');

-- --------------------------------------------------------

--
-- Table structure for table `technology_details`
--

CREATE TABLE `technology_details` (
  `id` int(11) NOT NULL,
  `user_code` varchar(15) NOT NULL,
  `experience_type` varchar(200) NOT NULL,
  `experience_detail` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `technology_details`
--

INSERT INTO `technology_details` (`id`, `user_code`, `experience_type`, `experience_detail`) VALUES
(1, '42113', 'python', 'experience developer');

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE `userdetails` (
  `id` int(8) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobileno` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`id`, `name`, `username`, `password`, `email`, `mobileno`) VALUES
(1, 'GAVASKAR1', 'admin1', 'welcome', 'gavaskar07@gmail.com', '12345'),
(6, 'James Williams', 'stalin', 'stalin', 'stalinpoulose21@gmail.com', '436578');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `basic_detail`
--
ALTER TABLE `basic_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education_details`
--
ALTER TABLE `education_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experience_details`
--
ALTER TABLE `experience_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_details`
--
ALTER TABLE `personal_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `technology_details`
--
ALTER TABLE `technology_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userdetails`
--
ALTER TABLE `userdetails`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `basic_detail`
--
ALTER TABLE `basic_detail`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `education_details`
--
ALTER TABLE `education_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `experience_details`
--
ALTER TABLE `experience_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_details`
--
ALTER TABLE `personal_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `technology_details`
--
ALTER TABLE `technology_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `userdetails`
--
ALTER TABLE `userdetails`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
