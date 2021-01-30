-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2021 at 09:39 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `generalstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id` int(11) NOT NULL,
  `itemnumber` int(255) NOT NULL,
  `title` varchar(11) NOT NULL,
  `description` varchar(11) NOT NULL,
  `price` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `itemnumber`, `title`, `description`, `price`) VALUES
(0, 1, '0', '0', '123'),
(0, 2, '0', '1', '120'),
(0, 4, 'Himalaya An', '1)Anti Dand', 'Rs.150'),
(0, 0, '', '', ''),
(0, 0, '', '', ''),
(0, 0, '', '', ''),
(0, 0, '', '', ''),
(0, 0, '', '', ''),
(0, 0, '', '', ''),
(0, 10, 'Himalaya An', 'frgveyrvtry', 'Rs.150'),
(0, 10, 'Himalaya An', 'frgveyrvtry', 'Rs.150'),
(0, 10, 'Himalaya An', 'frgveyrvtry', 'Rs.150'),
(0, 12, 'shampoo', 'ANTI dandru', 'Rs.250');

-- --------------------------------------------------------

--
-- Table structure for table `registratio`
--

CREATE TABLE `registratio` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registratio`
--

INSERT INTO `registratio` (`id`, `username`, `number`, `password`) VALUES
(2, 'Yash Bhardwaj', '9873472655', 'MTIzNDU2Nzg5MA=='),
(3, 'Yash Kumar', '8076347369', 'eWFzaDEyMyM='),
(4, 'Yash ', '1234567890', 'MTIzNA=='),
(5, 'yash kumar jha', '7838339591', 'eWFzaGJoYXJkd2FqMTIzIw=='),
(8, 'Harsh Kumar', '0987654321', 'cXdlcnR5dWlvcA=='),
(9, 'Harsh Kumar Jha', '23456789', 'emFx');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registratio`
--
ALTER TABLE `registratio`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registratio`
--
ALTER TABLE `registratio`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
