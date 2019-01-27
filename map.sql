-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2018 at 05:41 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `map`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `image`) VALUES
(1, 'A R Rubel', 'r@gmail.com', 'r', 'arrubel.jpg'),
(2, 'MD Miraj Hossain', 'm@gmail.com', 'm', 'miraj.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `id` int(11) NOT NULL,
  `bus_name` varchar(250) NOT NULL,
  `type` varchar(100) NOT NULL,
  `image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`id`, `bus_name`, `type`, `image`) VALUES
(35, 'Bihonggo', 'Sitting', 'bihonggo.jpg'),
(36, 'Ashirbad', 'Sitting', 'asirbad.jpg'),
(37, 'Tanzil', 'Sitting', 'tanzil.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cost`
--

CREATE TABLE `cost` (
  `id` int(11) NOT NULL,
  `start` varchar(250) NOT NULL,
  `end` varchar(250) NOT NULL,
  `bus_id` int(11) NOT NULL,
  `cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cost`
--

INSERT INTO `cost` (`id`, `start`, `end`, `bus_id`, `cost`) VALUES
(45, 'Duaripara Bus Stoppage, Rupnagar Road, Dhaka, Bangladesh', 'Technical Bus Stop, Principal Abul Kashem Road, Dhaka, Bangladesh', 35, 8),
(46, 'Duaripara Bus Stoppage, Rupnagar Road, Dhaka, Bangladesh', 'Azimpur Bus Stop, Dhaka, Bangladesh', 35, 25),
(47, 'Mirpur-1, Dhaka, Bangladesh', 'Azimpur Bus Stop, Dhaka, Bangladesh', 35, 16),
(52, 'Technical Bus Stop, Principal Abul Kashem Road, Dhaka, Bangladesh', 'Azimpur Bus Stop, Dhaka, Bangladesh', 35, 16),
(53, 'Bangladesh National Zoo, Dhaka, Bangladesh', 'Mirpur-1, Dhaka, Bangladesh', 37, 5),
(54, 'Bangladesh National Zoo, Dhaka, Bangladesh', 'Technical Bus Stop, Wasa Road, Dhaka, Bangladesh', 37, 10),
(55, 'Bangladesh National Zoo, Dhaka, Bangladesh', 'College Gate Bus Stop, Mirpur Road, Dhaka, Bangladesh', 37, 12),
(56, 'Bangladesh National Zoo, Dhaka, Bangladesh', 'Farmgate Bus Stop, Dhaka, Bangladesh', 37, 15),
(57, 'Bangladesh National Zoo, Dhaka, Bangladesh', 'Shahbagh, Dhaka, Bangladesh', 37, 20);

-- --------------------------------------------------------

--
-- Table structure for table `stopage`
--

CREATE TABLE `stopage` (
  `id` int(11) NOT NULL,
  `bus_id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `stopage_id` int(11) NOT NULL,
  `rent` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `stopage`
--

INSERT INTO `stopage` (`id`, `bus_id`, `name`, `stopage_id`, `rent`) VALUES
(36, 35, 'Duaripara Bus Stoppage, Rupnagar Road, Dhaka, Bangladesh', 1, 0),
(39, 35, 'Technical Bus Stop, Principal Abul Kashem Road, Dhaka, Bangladesh', 0, 8),
(40, 35, 'Azimpur Bus Stop, Dhaka, Bangladesh', 0, 16),
(49, 35, 'Abashik More Bus Stop, Road Number 9, Dhaka, Bangladesh', 0, 0),
(50, 36, 'Mirpur-1, Dhaka, Bangladesh', 0, 0),
(51, 35, 'Mirpur 2 Bus Stop, Mirpur Road, Dhaka, Bangladesh', 0, 0),
(52, 37, 'Bangladesh National Zoo, Dhaka, Bangladesh', 0, 0),
(53, 37, 'Mirpur-1, Dhaka, Bangladesh', 0, 0),
(54, 37, 'Technical Bus Stop, Wasa Road, Dhaka, Bangladesh', 0, 0),
(55, 37, 'College Gate Bus Stop, Mirpur Road, Dhaka, Bangladesh', 0, 0),
(56, 37, 'Farmgate Bus Stop, Dhaka, Bangladesh', 0, 0),
(57, 37, 'Shahbagh, Dhaka, Bangladesh', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `name`, `email`, `password`) VALUES
(1, 'm', 'm@gmail.com', 'm'),
(2, 'sumi', 's@gmail.com', 's'),
(3, 'miraz', 'miraz@gmail.com', 'm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `bus_name` (`bus_name`);

--
-- Indexes for table `cost`
--
ALTER TABLE `cost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stopage`
--
ALTER TABLE `stopage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bus`
--
ALTER TABLE `bus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `cost`
--
ALTER TABLE `cost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `stopage`
--
ALTER TABLE `stopage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
