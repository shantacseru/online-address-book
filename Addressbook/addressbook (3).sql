-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2017 at 06:20 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `addressbook`
--

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `emailAddress` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phoneNumber` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`id`, `userId`, `firstName`, `lastName`, `emailAddress`, `address`, `phoneNumber`) VALUES
(4, 1, 'maruf', 'abdullah', 'maruf@gmail.com', 'teroghadia', '01675445689'),
(5, 1, 'maruf', 'abdullah', 'maruf@gmail.com', 'teroghadia', '01675445689'),
(6, 1, 'maruf', 'Abdullah ', 'maruf@gmail.com', 'teroghadia', '01675445689'),
(9, 7, 'maruf', 'abdullah', 'maruf@gmail.com', 'teroghadia', '01675445689'),
(12, 17, 'shamima', 'aktharaaa', 'shasho1245@yahoo.com', 'monnujan hall', '01752031531'),
(14, 17, 'shamima', 'akthar', 'shanta@gmail.com', 'monnujan hall', '01752031531'),
(17, 20, 'sazzadul', 'islam', 'shaon@gmail.com', 'khulna', '01752031531'),
(19, 20, 'shamima', 'akthar', 'shanta@gmail.com', 'monnujan hall', '01752031531'),
(22, 21, 'hosna', 'jahan', 'tumpa@gmail.com', 'rajshahi', '01752031531'),
(23, 22, 'rehana ', 'nasrin', 'rehana@gmail.com', 'dinajpur', '01752031531');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstName`, `lastName`, `email`, `password`) VALUES
(1, 'maruf', 'abdullah', 'maruf@gmail.com', '1234'),
(2, 'maruf', 'abdullah', 'maruf@gmail.com', '1234'),
(3, 'maruf', 'abdullah', 'maruf@gmail.com', '1234'),
(4, 'maruf', 'abdullah', 'maruf@gmail.com', '1234'),
(5, 'maruf', 'abdullah', 'maruf@gmail.com', '1234'),
(6, 'maruf', 'abdullah', 'maruf@gmail.com', '1234'),
(7, '', '', '', ''),
(8, 'maruf', 'abdullah', 'maruf@gmail.com', '1234'),
(9, 'maruf', 'abdullah', 'maruf@gmail.com', '1234'),
(10, 'maruf', 'abdullah', 'maruf@gmail.com', '1234'),
(11, 'maruf', 'abdullah', 'maruf@gmail.com', '1234'),
(12, 'maruf', 'abdullah', 'maruf@gmail.com', '1234'),
(13, 'maruf', 'abdullah', 'maruf@gmail.com', '1234'),
(14, 'maruf', 'abdullah', 'maruf@gmail.com', '1234'),
(15, 'maruf', 'abdullah', 'maruf@gmail.com', '1234'),
(16, 'maruf', 'abdullah', 'maruf@gmail.com', '1234'),
(17, 'shamima', 'akthar', 'shanta@gmail.com', '12345'),
(18, 'shamima', 'akthar', 'shanta@gmail.com', '12345'),
(19, 'shamima', 'akthar', 'shanta@gmail.com', '12345'),
(20, 'sazzadul', 'islam', 'shaon@gmail.com', '12345'),
(21, 'hosna', 'jahan', 'tumpa@gmail.com', '12345'),
(22, 'rehana ', 'nasrin', 'rehana@gmail.com', '12345'),
(23, 'shamima', 'akthar', 'shanta@gmail.com', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
