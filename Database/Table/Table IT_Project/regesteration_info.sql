-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2023 at 10:56 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `it_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `regesteration_info`
--

CREATE TABLE `regesteration_info` (
  `id` int(50) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phonenumber` int(11) NOT NULL,
  `password1` varchar(20) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `address1` varchar(100) NOT NULL,
  `Bio` varchar(150) NOT NULL,
  `img_name` varchar(100) NOT NULL,
  `Joining_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `regesteration_info`
--

INSERT INTO `regesteration_info` (`id`, `fullname`, `email`, `phonenumber`, `password1`, `gender`, `address1`, `Bio`, `img_name`, `Joining_date`) VALUES
(202201, 'Ziad Adel', 'ziad.adel@gmail.com', 1151617372, '123', 'male', '6 October City', 'Júnior in CS Helwan University', '644ec316bbc22.png', '2023-04-30'),
(202218, 'Ziad Tarek', 'ziad.tarek@gmail.com', 2147483647, '123', 'male', 'Egypt', 'Júnior in CS Helwan University', '644ec3d0403d4.png', '2023-04-30'),
(202219, 'Ziad Atef', 'ziad.atef@gmail.com', 1151645646, '123', 'male', 'Egypt', 'Júnior in CS Helwan University', '644ec3f320cb3.jpg', '2023-04-30'),
(202221, 'Ziad Hossam', 'ziad.hossam@gmail.com', 2147483647, '123', 'male', '6 October City', 'Júnior in CS Helwan University', '644ec433b8b4f.png', '2023-04-30'),
(202222, 'Ziad Essa', 'ziad.essa@gmail.com', 1141398855, '123', 'male', 'Egypt', 'Júnior in CS Helwan University', '644ec45152d07.png', '2023-04-30'),
(202223, 'yahia abo al5ayer', 'yahia@gmail.com', 15585885, '123456', 'male', 'Egypt', 'it evalouter', '644fa8c1bcef2.png', '2023-05-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `regesteration_info`
--
ALTER TABLE `regesteration_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `regesteration_info`
--
ALTER TABLE `regesteration_info`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202224;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
