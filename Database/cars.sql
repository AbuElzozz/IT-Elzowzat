-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2023 at 10:55 PM
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
-- Database: `cars`
--

-- --------------------------------------------------------

--
-- Table structure for table `car_informations`
--

CREATE TABLE `car_informations` (
  `car_name` varchar(25) NOT NULL,
  `car_id` int(16) NOT NULL,
  `speed` varchar(10) NOT NULL,
  `price_per_day` varchar(15) NOT NULL,
  `version_date` date NOT NULL,
  `database_id` int(11) NOT NULL,
  `car_video_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `car_informations`
--

INSERT INTO `car_informations` (`car_name`, `car_id`, `speed`, `price_per_day`, `version_date`, `database_id`, `car_video_path`) VALUES
('BMW', 20220180, '29K', '$120.0/DAY', '2020-01-01', 1, 'BMW.mp4'),
('LAMBORGHINI', 20220179, '60K', '$200.0/DAY', '2023-10-06', 2, 'Lamborghini.mp4'),
('MERCEDES G63', 20220186, '28K', '$99.0/DAY', '2022-06-06', 3, 'Marchides.mp4'),
('AUDI', 20220181, '40K', '$130.0/DAY', '2023-02-06', 7, '20220181.mp4'),
('JEEP', 20220187, '55K', '$80.0/DAY', '2022-09-07', 8, 'Jeep (3).mp4'),
('FIAT', 20220191, '35K', '$150.0/DAY', '2023-05-08', 10, 'Electric Car (4).mp4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car_informations`
--
ALTER TABLE `car_informations`
  ADD PRIMARY KEY (`database_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `car_informations`
--
ALTER TABLE `car_informations`
  MODIFY `database_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
