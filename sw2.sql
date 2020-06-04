-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2020 at 02:47 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sw2`
--

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `capacity` int(50) NOT NULL,
  `type` varchar(20) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `name`, `capacity`, `type`, `description`) VALUES
(1, 'mixCheader', 98, 'data', 'available for old customers'),
(2, 'hekaya', 2000, 'phone', 'available for active customers'),
(3, 'pro', 898, 'data', 'for no one'),
(4, 'baka', 55464, 'phone', 'for any one'),
(5, 'HELLO', 1000, 'phone', 'for no one');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(10) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `image` varchar(20) NOT NULL,
  `role` tinyint(1) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phonenumber` varchar(11) NOT NULL,
  `balance` float NOT NULL,
  `password` varchar(20) NOT NULL,
  `internetService` varchar(50) NOT NULL,
  `callService` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `image`, `role`, `email`, `phonenumber`, `balance`, `password`, `internetService`, `callService`) VALUES
(3, 'Aida', 'Ali', '', 0, 'aida1@gmail.com', '01454311204', 0, '147', '', ''),
(5, 'Nour', 'Saleh', '', 1, 'noursalehothman96@gmail.com', '01494666445', 0, '123', '', ''),
(8, 'hello', 'hhh', '', 0, 'noursale4@gmail.com', '01452369632', 0, '123', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `userservice`
--

CREATE TABLE `userservice` (
  `serviceId` int(10) NOT NULL,
  `userId` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `usertransaction`
--

CREATE TABLE `usertransaction` (
  `userId` int(10) NOT NULL,
  `transactionId` int(10) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`,`phonenumber`,`email`) USING BTREE,
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phonenumber` (`phonenumber`);

--
-- Indexes for table `userservice`
--
ALTER TABLE `userservice`
  ADD PRIMARY KEY (`serviceId`,`userId`),
  ADD KEY `C4` (`userId`);

--
-- Indexes for table `usertransaction`
--
ALTER TABLE `usertransaction`
  ADD PRIMARY KEY (`userId`,`transactionId`,`time`) USING BTREE,
  ADD KEY `C6` (`transactionId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1023;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `userservice`
--
ALTER TABLE `userservice`
  ADD CONSTRAINT `C3` FOREIGN KEY (`serviceId`) REFERENCES `service` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `C4` FOREIGN KEY (`userId`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `usertransaction`
--
ALTER TABLE `usertransaction`
  ADD CONSTRAINT `C5` FOREIGN KEY (`userId`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `C6` FOREIGN KEY (`transactionId`) REFERENCES `transaction` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
