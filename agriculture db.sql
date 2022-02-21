-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2021 at 02:25 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agriculture`
--

-- --------------------------------------------------------

--
-- Table structure for table `farmer`
--

CREATE TABLE `farmer` (
  `fid` varchar(10) NOT NULL,
  `fname` varchar(40) DEFAULT NULL,
  `lname` varchar(40) NOT NULL,
  `homeno` varchar(15) NOT NULL,
  `village` varchar(20) NOT NULL,
  `faddress` varchar(50) DEFAULT NULL,
  `phone` varchar(14) DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `farmer`
--

INSERT INTO `farmer` (`fid`, `fname`, `lname`, `homeno`, `village`, `faddress`, `phone`, `location`, `password`) VALUES
('111111111V', 'Lasitha', 'Pramath', 'No 22,', 'Thissa road,', 'monaragala', '0711234567', ' 80.331645,7.259562', '11'),
('2222v', 'gunasena', 'pathirana', 'no 60,', 'welimada,', 'badulla', '0711234567', '81.050606,6.993647', '11');

-- --------------------------------------------------------

--
-- Table structure for table `harvest`
--

CREATE TABLE `harvest` (
  `fid` varchar(10) NOT NULL,
  `htype` varchar(20) NOT NULL,
  `hname` varchar(25) NOT NULL,
  `weight` int(5) NOT NULL,
  `photo` varchar(50) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `flag` varchar(20) DEFAULT 'black',
  `status` varchar(20) DEFAULT 'Not Evaluated',
  `hid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `harvest`
--

INSERT INTO `harvest` (`fid`, `htype`, `hname`, `weight`, `photo`, `date`, `flag`, `status`, `hid`) VALUES
('111111111V', 'vegetable', 'pumpkin', 1000, 'harvest/944h4.jpg', '2021-01-18', 'green', 'success', 36),
('2222v', 'vegetable', 'pumpkin', 200, 'harvest/489h3.jpg', '2021-01-18', 'red', 'waste', 37);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `fid` varchar(20) NOT NULL,
  `mfrom` varchar(10) NOT NULL,
  `msg` text NOT NULL,
  `reply` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`fid`, `mfrom`, `msg`, `reply`, `date`, `id`) VALUES
('111111111V', 'farmer', 'My harvest is ready.', 'So send it here', '2021-01-18 01:03:06', 37),
('2222v', 'farmer', 'I picked my harvest', 'where is it?', '2021-01-18 01:16:13', 38),
('2222v', 'staff', 'we want to see your product.', 'ok', '2021-01-18 01:17:14', 39);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `eid` varchar(10) NOT NULL,
  `efname` varchar(40) NOT NULL,
  `elname` varchar(20) NOT NULL,
  `eaddress` varchar(50) NOT NULL,
  `pnum` varchar(14) NOT NULL,
  `position` varchar(20) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`eid`, `efname`, `elname`, `eaddress`, `pnum`, `position`, `branch`, `password`) VALUES
('e1', 'Manuja', 'Hasaranga', 'sirigala', '07112341545', 'Deputy Manager', '', '11'),
('e2', 'Manuja', 'Abilasha', 'monaragala', '0711234567', 'Deputy Manager', '', '11'),
('e3', 'nimal', 'siripala', 'sirigala', '0771234567', 'manager', '', '11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `roll` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `password`, `roll`) VALUES
('111111111V', '11', 'farmer'),
('2222v', '11', 'farmer'),
('e1', '11', 'staff'),
('e2', '11', 'staff'),
('e3', '11', 'staff'),
('master', 'master', 'master');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `farmer`
--
ALTER TABLE `farmer`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `harvest`
--
ALTER TABLE `harvest`
  ADD PRIMARY KEY (`hid`),
  ADD KEY `fid` (`fid`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `harvest`
--
ALTER TABLE `harvest`
  MODIFY `hid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `harvest`
--
ALTER TABLE `harvest`
  ADD CONSTRAINT `foriegn` FOREIGN KEY (`fid`) REFERENCES `farmer` (`fid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
