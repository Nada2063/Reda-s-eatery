-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2023 at 02:48 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reda eatery`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `fullname` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `phone` int(15) NOT NULL,
  `role` varchar(200) NOT NULL DEFAULT 'admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `fullname`, `email`, `password`, `phone`, `role`) VALUES
(1, 'ahmed', 'ahmed@miu.com', '123', 123456, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ID` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `price` int(11) NOT NULL,
  `description` varchar(500) NOT NULL,
  `prod_image` longblob NOT NULL,
  `category` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ID`, `title`, `price`, `description`, `prod_image`, `category`) VALUES
(1, 'BURGER', 200, 'AAAAAAAAAAAAA', '', 'lunch'),
(5, 'wings', 50, 'wings', '', 'dinner'),
(7, 'chocolate juice', 70, 'ay haga', 0x75706c6f6164732f61732e6a7067, 'drinks'),
(8, 'omlet', 150, 'omlet', 0x75706c6f6164732f6f6d656c657474652e6a7067, 'breakfast'),
(9, 'casser', 150, 'salad', 0x75706c6f6164732f6361737365722073616c61642e6a7067, 'lunch'),
(10, 'ice cream', 60, 'ice cream', 0x75706c6f6164732f6963652e6a7067, 'desserts');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `fullname` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `phone` int(15) NOT NULL,
  `role` varchar(200) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `fullname`, `email`, `password`, `phone`, `role`) VALUES
(1, 'mA', 'MA@miiu.com', '123', 0, 'user'),
(3, 'nadaa', 'nada@miu.com', '1234', 0, 'user'),
(6, 'donya', 'donya@gmail.com', '123', 123456789, 'user'),
(7, 'amgad', 'amgad@miu.com', '123', 0, 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
