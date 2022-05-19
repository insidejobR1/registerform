-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2022 at 10:36 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userdetails`
--

-- --------------------------------------------------------

--
-- Table structure for table `ragister_form`
--

CREATE TABLE `ragister_form` (
  `id` int(11) NOT NULL,
  `name` varchar(15) NOT NULL,
  `email` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `address` varchar(15) NOT NULL,
  `image` varchar(15) NOT NULL,
  `hobby` varchar(15) NOT NULL,
  `country` varchar(15) NOT NULL,
  `state` varchar(15) NOT NULL,
  `city` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ragister_form`
--

INSERT INTO `ragister_form` (`id`, `name`, `email`, `password`, `contact`, `gender`, `address`, `image`, `hobby`, `country`, `state`, `city`) VALUES
(1, 'rahul', 'rahul@gmail.com', '222', '8516789067', 'gen', 'indore', 'sorry', '', 'India', 'Punjab', 'Abdalpur'),
(2, 'rahul', 'rahul@gmail.com', '222', '8516789067', 'gen', 'indore', 'sorry', 'Reading', 'India', 'Punjab', 'Abdalpur'),
(3, 'zoya', 'zoya@gmail.com', '222', '8516789067', 'gen', 'indore', 'sorry', 'Music', 'India', 'Haryana', 'Achina');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ragister_form`
--
ALTER TABLE `ragister_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ragister_form`
--
ALTER TABLE `ragister_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
