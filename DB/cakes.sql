-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2021 at 03:03 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cakes`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `uname`, `pass`) VALUES
(1, 'admin', 'admin'),
(2, 'Julie', '!Qaz@Wsx');

-- --------------------------------------------------------

--
-- Table structure for table `cake`
--

CREATE TABLE `cake` (
  `cake_id` int(11) NOT NULL,
  `cake_name` varchar(255) NOT NULL,
  `cake_type` enum('sponge','chesse','ice cream') DEFAULT NULL,
  `image` text NOT NULL,
  `cake_cost` int(11) NOT NULL,
  `cake_flavour` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cake`
--

INSERT INTO `cake` (`cake_id`, `cake_name`, `cake_type`, `image`, `cake_cost`, `cake_flavour`, `status`) VALUES
(1, 'Vanilla Delight', 'sponge', 'cake1.jpeg', 49, 'Vanilla', 'Available'),
(2, 'Happy Kid', 'sponge', 'cake2.jpeg', 30, 'Blueberry', 'Available'),
(6, 'Purple Fusion', 'sponge', 'cake3.jpeg', 40, 'yam', 'Available'),
(8, 'Double Delight', 'ice cream', 'cake4.jpeg', 80, 'Banana', 'Available'),
(11, 'Lucky 13', 'sponge', 'cake5.jpeg', 45, 'Chocolate', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `client_id` int(11) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `cake_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `OTP` int(4) NOT NULL,
  `fullname` text NOT NULL,
  `transaction_id` varchar(255) NOT NULL,
  `Acc_Balance` int(11) NOT NULL,
  `dtime` varchar(255) NOT NULL,
  `hours` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `uname`, `email`, `pass`, `phone`, `address`, `gender`, `cake_id`, `status`, `OTP`, `fullname`, `transaction_id`, `Acc_Balance`, `dtime`, `hours`) VALUES
(10, 'John', 'hjohneny99@gmail.com', '!Qaz2wsx', 1939393, 'UNIGARDEN', 'Male', 0, 'Approved', 0, 'John Pie', '12566748', 15, '0000-00-00 00:00:00', 2023),
(14, 'Johnny', 'john@yahoo.com', '1q2w3e4r', 138363110, 'UNIGARDEN', 'Female', 3, 'Approved', 0, 'John', '0.80498400 1575950792', 0, '0000-00-00 00:00:00', 3),
(36, 'KA1123', 'ads@dad.com', '!Qaz2wsx', 137383631, '41, Kedandi 7, Tabuan Dusun', 'Male', 0, 'Processing Payment... Wait for Admin Approval', 0, 'Kirik Ackerman', '0.45340600 1610889318', 30, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `invoice_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `invoice_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `msg_id` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `time` datetime NOT NULL,
  `client_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`msg_id`, `message`, `status`, `time`, `client_email`) VALUES
(12, 'Birthday Party at Kenyalang Park Tuesday Afternoon', 'Read', '2019-12-06 05:25:30', '');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` int(11) NOT NULL,
  `admin_id` int(255) NOT NULL,
  `client_id` int(11) NOT NULL,
  `cake_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `dtime` datetime NOT NULL,
  `rtime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`order_id`, `admin_id`, `client_id`, `cake_id`, `status`, `dtime`, `rtime`) VALUES
(1, 1, 10, 6, 'Approved', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 1, 14, 8, 'Approved', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 1, 10, 8, 'Booked', '2019-12-11 07:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `cake`
--
ALTER TABLE `cake`
  ADD PRIMARY KEY (`cake_id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`) USING BTREE;

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`invoice_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`msg_id`) USING BTREE;

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `admin_id` (`admin_id`),
  ADD KEY `client_id` (`client_id`),
  ADD KEY `car_id` (`cake_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cake`
--
ALTER TABLE `cake`
  MODIFY `cake_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`),
  ADD CONSTRAINT `order_ibfk_2` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`),
  ADD CONSTRAINT `order_ibfk_3` FOREIGN KEY (`client_id`) REFERENCES `client` (`client_id`),
  ADD CONSTRAINT `order_ibfk_4` FOREIGN KEY (`cake_id`) REFERENCES `cake` (`cake_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
