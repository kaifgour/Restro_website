-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2020 at 02:40 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wdl`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `Sr` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `seats` int(20) NOT NULL,
  `date` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`Sr`, `name`, `phone`, `seats`, `date`) VALUES
(1, 'siddhi kadam', 2147483647, 2, '2021-01-25'),
(2, 'abhishek Gupta', 989830221, 2, '2020-12-26'),
(3, 'kaif gour', 1234567890, 4, '2020-12-31'),
(4, 'Roshan Shinde', 986771234, 4, '2020-12-26'),
(5, 'abhijit Nambiar', 2147483647, 5, '2020-12-29'),
(6, 'sohan', 2147483647, 3, '2020-12-31'),
(7, 'sohan', 2147483647, 3, '2020-12-31'),
(8, 'hemant', 2147483647, 3, '2020-12-31'),
(9, 'kabir', 2147483647, 4, '2020-12-27'),
(10, 'Sahil', 123456789, 6, '2020-12-04'),
(11, 'Moiz', 2147483647, 1, '2020-12-19'),
(12, 'divya', 139039131, 3, '2020-11-13'),
(13, 'Nancy Mam', 827197319, 3, '2020-12-22'),
(14, 'Ritik Naik', 928381998, 3, '2020-12-25'),
(15, 'Danish', 23456421, 3, '2020-12-20'),
(16, 'kaif gour', 213422313, 5, '2021-01-02'),
(17, 'siddhi kadam', 2147483647, 3, '2021-01-25'),
(18, 'harry', 2147483647, 3, '2020-12-31'),
(19, 'siddhi kadam', 2147483647, 1, '2021-01-25'),
(20, 'kabir', 234242, 3, '2021-01-10'),
(21, 'harry', 123123, 4, '2020-12-27'),
(22, 'Nancy Mam', 827197319, 3, '2020-12-22'),
(23, 'abhishek Gupta', 989830221, 4, '2020-12-26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`Sr`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `Sr` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
