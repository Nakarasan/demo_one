-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2022 at 09:40 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fms`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_tbl`
--

CREATE TABLE `customer_tbl` (
  `id` int(15) NOT NULL,
  `customer_name` varchar(100) DEFAULT NULL,
  `nic_pass` varchar(30) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `mobile_no` int(10) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `vehicle_type` varchar(100) DEFAULT NULL,
  `chassis_no` varchar(100) DEFAULT NULL,
  `fuel_type` varchar(100) DEFAULT NULL,
  `vehicle_no` varchar(10) DEFAULT NULL,
  `customer_type` varchar(100) DEFAULT NULL,
  `eli_week` int(5) DEFAULT NULL,
  `bal_week` int(5) DEFAULT NULL,
  `document` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_tbl`
--

INSERT INTO `customer_tbl` (`id`, `customer_name`, `nic_pass`, `password`, `mobile_no`, `address`, `vehicle_type`, `chassis_no`, `fuel_type`, `vehicle_no`, `customer_type`, `eli_week`, `bal_week`, `document`) VALUES
(1, 'Kara', '65', NULL, 564854, '784857485748574', '598464', '4856485', 'Petrol(92 Octane)', '5454545', 'Normal Customer', 652, 56, NULL),
(2, 'Raji', 'byhjn', NULL, 1548555552, 'ijikjikjm', 'hjnijhijh', 'nhjjnkjikj', 'ijijijikjikj', '48', 'ujhiujij', 4565, 588, NULL),
(3, 'Thushigha', '997313518V', NULL, 775678832, 'Nallur', 'Bike', 'dfghjk522', 'dfghj', '4139', 'dfghjkl', 12, 52, NULL),
(7, 'Krishz', '641500771v', NULL, 771375995, 'Point Pedro', 'bike', '156465263', 'Petrol(95 Octane)', '500-2711', 'Normal Customer', 7, 5, NULL),
(10, 'Kobi', '54475854515', NULL, 772415841, 'Vaththanai', 'car', '4578566465', 'Diesel(Lanka Super Diesel 4 star)', 'AB-5447', 'Purposely Allocated Customer', 52, 24, NULL),
(11, '', '', '', 0, '', '0', '', '0', '', 'Normal Customer', 0, 0, ''),
(12, 'Thushigha', '', '', 0, '', '0', '', '0', '', 'Normal Customer', 0, 0, ''),
(13, '', 'hjkl', '', 0, '', '0', '', '0', '', 'Purposely Allocated Customer', 0, 0, ''),
(14, '', 'hjkl', 'bnjmn', 0, '', '0', '', '0', '', 'Purposely Allocated Customer', 0, 0, ''),
(15, '', 'hjkl', 'hbnjnjkn', 4659595, '', 'Car', '', 'Petrol(92 Octane)', '', 'Purposely Allocated Customer', 0, 0, ''),
(16, 'gfhgjhjk', 'fdghjk', '', 0, '', '0', '', '0', '', 'Normal Customer', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `fuel_tbl`
--

CREATE TABLE `fuel_tbl` (
  `id` int(10) NOT NULL,
  `fuel_type` varchar(100) DEFAULT NULL,
  `price` varchar(100) DEFAULT NULL,
  `last_update` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fuel_tbl`
--

INSERT INTO `fuel_tbl` (`id`, `fuel_type`, `price`, `last_update`) VALUES
(7, 'Petrol(92 Octane)', 'LKR 375.00', '2022-12-01'),
(8, 'Petrol(95 Octane)', 'LKR 410.00', '2022-12-01'),
(9, 'Diesel(Auto Diesel)', 'LKR 325.00', '2022-12-15'),
(10, 'Diesel(Super Diesel)', 'LKR 356.00', '2022-12-15');

-- --------------------------------------------------------

--
-- Table structure for table `station_tbl`
--

CREATE TABLE `station_tbl` (
  `id` int(10) NOT NULL,
  `station_name` varchar(10) DEFAULT NULL,
  `owner_name` varchar(100) DEFAULT NULL,
  `petrol_92` varchar(10) DEFAULT NULL,
  `petrol_95` varchar(10) DEFAULT NULL,
  `auto_diesel` varchar(10) DEFAULT NULL,
  `super_diesel` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `station_tbl`
--

INSERT INTO `station_tbl` (`id`, `station_name`, `owner_name`, `petrol_92`, `petrol_95`, `auto_diesel`, `super_diesel`) VALUES
(1, 'Lanka', 'kara', '10', '', '', ''),
(2, 'hgjhnjkml', 'jhnkm', '421', '', '', ''),
(3, 'hgbnjk', '', 'efe', '563', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `id` int(10) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile_no` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`id`, `full_name`, `user_name`, `password`, `email`, `mobile_no`) VALUES
(1, 'Krishnavel Nakarasan', 'Kara', 'kara1234', 'admin@admin.com', 765705081),
(3, 'vbjn', '6465', '', '', 123),
(5, 'kara', '6465', 'gbfgb', '', 0),
(6, 'kara', '6465', '', '', 0),
(7, 'kara', '6465', '', '', 0),
(8, 'kara', '6465', '', '', 0),
(9, 'kara', '6465', '', '', 0),
(10, 'kara', '6465', '', '', 0),
(11, 'kara', '6465', '', '', 0),
(12, 'kara', '6465', '', '', 0),
(13, 'kara', '123', '', '', 0),
(14, '', '', '', '', 0),
(15, 'rvdvd', '', '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_tbl`
--
ALTER TABLE `customer_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fuel_tbl`
--
ALTER TABLE `fuel_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `station_tbl`
--
ALTER TABLE `station_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_tbl`
--
ALTER TABLE `customer_tbl`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `fuel_tbl`
--
ALTER TABLE `fuel_tbl`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `station_tbl`
--
ALTER TABLE `station_tbl`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
