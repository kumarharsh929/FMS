-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2021 at 10:35 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `name` varchar(255) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`name`, `contact`, `email`, `message`) VALUES
('ROHIT KUMAR', '6205254809', 'rk98356@gmail.com', 'Hello World!'),
('Ankit Kumar', '9586546232', 'ak@gmail.com', 'Nice '),
('', '', '', ''),
('Harsh Kumar', '6205254848', 'harsh@gmail.com', 'Hello World!');

-- --------------------------------------------------------

--
-- Table structure for table `file_tb`
--

CREATE TABLE `file_tb` (
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `ext` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `umail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `file_tb`
--

INSERT INTO `file_tb` (`name`, `size`, `ext`, `path`, `umail`) VALUES
('jk.mp4', 2085287, 'mp4', 'uploads/jk.mp4', 'rk98356@gmail.com'),
('Vijay.mp4', 3012452, 'mp4', 'uploads/Vijay.mp4', 'rk98356@gmail.com'),
('ABCD.mp3', 3350656, 'mp3', 'uploads/ABCD.mp3', 'rk98356@gmail.com'),
('Penguins.jpg', 777835, 'jpg', 'uploads/Penguins.jpg', 'rk98356@gmail.com'),
('Pic By Rk.jpg', 3821224, 'jpg', 'uploads/Pic By Rk.jpg', 'rk98356@gmail.com'),
('Pic By Rk.jpg', 3821224, 'jpg', 'uploads/Pic By Rk.jpg', 'rk98356@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `name` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `mobileno` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`name`, `dob`, `mobileno`, `email`, `address`, `password`) VALUES
('ROHIT KUMAR', '1999-07-16', '6205254809', 'rk98356@gmail.com', 'Patna', '8d92908fa795171a54930bf6ec7ea424');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
