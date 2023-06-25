-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2021 at 06:25 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `model`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `CAL` ()  NO SQL
update control
 set reserved=(inflow)-(outflow)$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `username`, `password`) VALUES
(1, 'ADMINXYZ', 'admin@12.in', 'admin', 'admin'),
(2, 'PQRADMIN', 'pqradmin@yahoo', 'admin1', 'admin1');

-- --------------------------------------------------------

--
-- Table structure for table `mess`
--

CREATE TABLE `mess` (
  `day` varchar(8) NOT NULL,
  `breakfast` varchar(45) NOT NULL,
  `lunch` varchar(45) NOT NULL,
  `dinner` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mess`
--

INSERT INTO `mess` (`day`, `breakfast`, `lunch`, `dinner`) VALUES
('MONDAY', 'halwa', 'RICE, SABJI', 'puri'),
('TUESDAY', 'IDLI', 'RICE, DAL', 'FRIED RICE'),
('wed', 'dvesd', 'sefew', 'rfgeg');

-- --------------------------------------------------------

--
-- Table structure for table `scomplaint`
--

CREATE TABLE `scomplaint` (
  `sname` varchar(45) NOT NULL,
  `usn` varchar(15) NOT NULL,
  `mobile` bigint(20) UNSIGNED NOT NULL,
  `floor` int(2) NOT NULL,
  `room` int(3) NOT NULL,
  `cfor` varchar(20) NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scomplaint`
--

INSERT INTO `scomplaint` (`sname`, `usn`, `mobile`, `floor`, `room`, `cfor`, `details`) VALUES
('NITISH', '77', 7352374098, 1, 13, 'Transportation', 'timing should change');

-- --------------------------------------------------------

--
-- Table structure for table `sleave`
--

CREATE TABLE `sleave` (
  `sname` varchar(45) NOT NULL,
  `usn` varchar(15) NOT NULL,
  `mobile` bigint(20) UNSIGNED NOT NULL,
  `floor` int(2) NOT NULL,
  `room` int(3) NOT NULL,
  `departuredate` date NOT NULL,
  `arrivaldate` date NOT NULL,
  `place` text NOT NULL,
  `reason` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sleave`
--

INSERT INTO `sleave` (`sname`, `usn`, `mobile`, `floor`, `room`, `departuredate`, `arrivaldate`, `place`, `reason`) VALUES
('XYZPQR', '1MH17CS349', 2015469520, 1, 56, '2021-01-05', '2021-01-22', 'LA', 'TOUR');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `staffname` varchar(45) NOT NULL,
  `work` varchar(50) NOT NULL,
  `doj` date NOT NULL,
  `mobile` bigint(20) UNSIGNED NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `staffname`, `work`, `doj`, `mobile`, `address`) VALUES
(1, 'sqw', 'clean', '2023-04-08', 9620783685, 'maharastra');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `sname` varchar(45) NOT NULL,
  `usn` varchar(50) NOT NULL,
  `college` varchar(30) NOT NULL,
  `semester` int(2) DEFAULT NULL,
  `branch` varchar(50) NOT NULL,
  `state` varchar(15) DEFAULT NULL,
  `mobile` text,
  `file` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`sname`, `usn`, `college`, `semester`, `branch`, `state`, `mobile`, `file`) VALUES
('Ritesh J', '45', 'SVERI Engineering', 7, 'CSE', 'Maharastra', '9587542198', 'your_site_name_c65ed947fe67fb9b4b513454c2caad4f.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `number` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  `file` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `number`, `username`, `password`, `file`) VALUES
(3, 'USER1', 8766451185, 'team17', 'team17', 'your_site_name_6f42bebb85b2def5fcbbada858eab3ac.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mess`
--
ALTER TABLE `mess`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `scomplaint`
--
ALTER TABLE `scomplaint`
  ADD PRIMARY KEY (`usn`);

--
-- Indexes for table `sleave`
--
ALTER TABLE `sleave`
  ADD PRIMARY KEY (`usn`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`usn`),
  ADD UNIQUE KEY `name_2` (`usn`),
  ADD UNIQUE KEY `name_3` (`usn`),
  ADD UNIQUE KEY `name_4` (`usn`),
  ADD KEY `name` (`usn`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
