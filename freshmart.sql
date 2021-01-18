-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 18, 2021 at 05:17 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `freshmart`
--

-- --------------------------------------------------------

--
-- Table structure for table `doa`
--

CREATE TABLE `doa` (
  `Id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phonenumber` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doa`
--

INSERT INTO `doa` (`Id`, `firstname`, `lastname`, `email`, `phonenumber`, `username`, `password`) VALUES
(1, 'alex', 'jones', 'alex@gmail.com', 2342342, 'alex', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `farmer`
--

CREATE TABLE `farmer` (
  `id` int(11) NOT NULL,
  `nic` varchar(14) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `contact` varchar(12) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `farmer`
--

INSERT INTO `farmer` (`id`, `nic`, `firstname`, `lastname`, `contact`, `address`, `email`, `password`) VALUES
(1001, '1234567891', 'john', 'smith', '0776868134', 'colombo road, colombo', 'johnsmith@gmail.com', 'farmer@123');

-- --------------------------------------------------------

--
-- Table structure for table `keells`
--

CREATE TABLE `keells` (
  `Id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(150) NOT NULL,
  `branch` varchar(100) DEFAULT NULL,
  `email` varchar(150) NOT NULL,
  `phonenumber` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `keells`
--

INSERT INTO `keells` (`Id`, `firstname`, `lastname`, `branch`, `email`, `phonenumber`, `username`, `password`) VALUES
(1, 'john', 'smith', 'colombo', 'johnsmith@gmail.com', 774637812, 'john', '12345@john'),
(3, 'saman', 'jayawardana', 'gampaha', 'saman@gmail.com', 772134343, 'saman', 'saman');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pid` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `description` varchar(300) NOT NULL,
  `latitude` float NOT NULL,
  `longitude` float NOT NULL,
  `datetime` datetime NOT NULL,
  `price` float NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `type`, `description`, `latitude`, `longitude`, `datetime`, `price`, `image`) VALUES
(1, 'Fruit', 'da quis blandit turpis cursus in. Et netus et malesuada fames ac turpis egestas sed tempus. Turpis massa tincidunt dui ut. Ultrices tincidunt arcu non sodales neque sodales ut. Quam lacus suspendisse faucibus interdum posuere lor', 7.084, 80.0098, '2020-12-17 10:37:06', 100, '1.png'),
(2, 'vegetable', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Adipiscing diam donec adipiscing tristique risus nec feugiat in fermentum. Eget dolor morbi non arcu risus quis varius quam. ', 7.12441, 80.0238, '2020-11-12 02:02:07', 300, '21.jpg'),
(3, 'Pineapples', 'Amet porttitor eget dolor morbi. Purus viverra accumsan in nisl nisi scelerisque eu ultrices vitae. Sollicitudin tempor id eu nisl nunc mi. Sed odio morbi ', 7.12276, 79.9983, '2020-12-22 02:02:14', 200, 'pineapples.jpg'),
(6, '2', 'Sollicitudin ac orci phasellus egestas tellus rutrum tellus pellentesque eu. Viverra maecenas accumsan lacus vel facilisis volutpat est velit. Vitae congue eu consequat ac felis donec et odio pellentesque. ', 7.09273, 79.9906, '2021-01-01 02:02:27', 223, 'hu.jpg'),
(8, '2', ' Congue nisi vitae suscipit tellus mauris a diam maecenas sed. Varius morbi enim nunc faucibus a. Amet commodo nulla facilisi nullam vehicula ipsum', 7.13779, 80.0029, '2020-12-24 02:02:36', 223, 'dsd.jpg'),
(9, '2', 'Odio facilisis mauris sit amet massa vitae. Adipiscing at in tellus integer. Quis imperdiet massa tincidunt nunc pulvinar sapien et. Mattis rhoncus urna neque viverra justo nec ultrices dui.', 7.15422, 80.0285, '2020-12-16 02:02:44', 232, 'auberginew.jpg'),
(10, '2', ' proin sagittis nisl rhoncus. Sed arcu non odio euismod lacinia at quis. Felis bibendum ut tristique et egestas quis ipsum suspendisse. ', 7.13024, 80.0321, '2020-12-24 02:02:38', 2323, 'test.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `webmaster`
--

CREATE TABLE `webmaster` (
  `id` int(5) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `webmaster`
--

INSERT INTO `webmaster` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doa`
--
ALTER TABLE `doa`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `farmer`
--
ALTER TABLE `farmer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nic` (`nic`);

--
-- Indexes for table `keells`
--
ALTER TABLE `keells`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `webmaster`
--
ALTER TABLE `webmaster`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doa`
--
ALTER TABLE `doa`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `farmer`
--
ALTER TABLE `farmer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1002;

--
-- AUTO_INCREMENT for table `keells`
--
ALTER TABLE `keells`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `webmaster`
--
ALTER TABLE `webmaster`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
