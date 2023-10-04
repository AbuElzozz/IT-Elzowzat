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
-- Database: `it_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `model` int(10) NOT NULL,
  `motor` enum('Automatic','Manual') NOT NULL,
  `consumption` int(50) NOT NULL,
  `gps` enum('yes','no') NOT NULL,
  `bio` text NOT NULL,
  `img_name` varchar(50) NOT NULL,
  `location_1` date DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `name`, `model`, `motor`, `consumption`, `gps`, `bio`, `img_name`, `location_1`, `price`) VALUES
(1, 'MERCEDES BENZ GT\r\n', 2015, 'Automatic', 20, 'yes', 'The Mercedes-Benz AMG GT is a high-performance sports car that was first introduced in 2014. It is available in both coupe and convertible versions and is powered by a front-mounted, twin-turbocharged V8 engine that produces between 469 and 577 horsepower, depending on the model. The AMG GT is known for its sleek and aggressive design, as well as its exceptional handling and performance capabilities. It offers a luxurious interior with advanced technology features, making it a popular choice among car enthusiasts who seek both style and performance.', 'benz_gt', '2023-06-02', 150),
(2, 'BMW X6', 2020, 'Automatic', 10, 'yes', 'The BMW X6 2020 is a luxury mid-size SUV with a sleek and sporty design. It features a powerful turbocharged engine that delivers quick acceleration and a smooth ride, as well as a comfortable and spacious interior with high-quality materials and advanced technology. The X6 also comes with a range of advanced safety features such as forward collision warning, automatic emergency braking, and lane departure warning. With its combination of style, performance, and technology, the BMW X6 2020 is an impressive choice for drivers who want a luxurious and thrilling driving experience.', 'bmw_x6', '2023-05-05', 200),
(3, 'AUDI R8 V10', 2017, 'Automatic', 10, 'yes', 'The 2017 Audi R8 V10 is a high-performance sports car that combines stunning design with exceptional driving dynamics. It is powered by a naturally aspirated 5.2-liter V10 engine that produces 540 horsepower and 398 lb-ft of torque, paired with a seven-speed S tronic dual-clutch transmission and Audi\'s quattro all-wheel drive system. The R8 V10 features a lightweight aluminum and carbon fiber construction, an advanced suspension system, and high-performance brakes for agile handling and precise control. The interior of the R8 V10 is also designed with a driver-focused layout, featuring a digital instrument cluster, a large infotainment screen, and premium leather upholstery. Overall, the 2017 Audi R8 V10 is a powerful and luxurious sports car that offers exhilarating performance and a refined driving experience.', 'audi_r8', '2000-01-01', 230),
(4, 'AUDI SQ8', 2021, 'Automatic', 15, 'yes', 'The 2021 Audi SQ8 is a high-performance luxury SUV that offers impressive power and handling, along with a spacious and luxurious interior. It is powered by a 4.0-liter V8 engine that produces 500 horsepower and 568 lb-ft of torque, paired with an eight-speed automatic transmission and Audi\'s quattro all-wheel drive system. The SQ8 can accelerate from 0 to 60 mph in just 4.3 seconds. It also comes equipped with advanced technology features, including a virtual cockpit, a Bang & Olufsen premium sound system, and a suite of driver assistance features. Overall, the 2021 Audi SQ8 is a compelling option for those seeking a high-performance SUV with a premium feel.', 'audi_sq8', '2000-01-01', 100),
(5, 'MERCEDES BENZ AMG C43', 2023, 'Automatic', 13, 'yes', 'The 2023 Mercedes-AMG C43 is a high-performance variant of the C-Class sedan from Mercedes-Benz. It is powered by a 3.0-liter twin-turbocharged V6 engine that produces 385 horsepower and 384 lb-ft of torque, paired with a nine-speed automatic transmission and all-wheel drive. The C43 AMG also features an AMG-tuned suspension, upgraded brakes, and a sporty exterior styling with distinctive AMG accents. Inside, the C43 AMG comes with a luxurious cabin featuring premium materials, advanced technology, and comfortable seating for up to five passengers. It also boasts a host of standard and optional features, such as a digital instrument cluster, a large infotainment screen, a premium audio system, and advanced driver assistance systems. Overall, the 2023 Mercedes-AMG C43 is a stylish and powerful luxury sedan that offers a thrilling driving experience with impressive performance and comfort.', 'benz_c43', '2000-01-01', 580),
(6, 'KIA Forte', 2019, 'Automatic', 12, 'yes', 'The 2019 Kia Forte is a compact sedan with a sleek exterior design and a spacious, well-appointed interior. It is powered by a 2.0-liter four-cylinder engine that produces 147 horsepower and is paired with a six-speed manual or a continuously variable transmission (CVT). The Forte also features a range of advanced safety features, including forward collision warning, automatic emergency braking, and lane departure warning. Other notable features include a user-friendly infotainment system with a standard 8-inch touchscreen, Apple CarPlay and Android Auto compatibility, and optional features like a sunroof and a premium audio system. Overall, the 2019 Kia Forte offers a compelling combination of style, performance, and value.', 'kia_forte', '2000-01-01', 100);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `email` varchar(100) NOT NULL,
  `feedback` text NOT NULL,
  `feedback_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`email`, `feedback`, `feedback_date`) VALUES
('ziad.adel@gmail.com', 'thanks for elzowzat for this great work', '2023-04-30'),
('yahia@gmail.com', 'j,knjknljkljk.kln', '2023-05-01');

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

-- --------------------------------------------------------

--
-- Table structure for table `rentals`
--

CREATE TABLE `rentals` (
  `car_id` int(11) NOT NULL,
  `rental_date` date NOT NULL,
  `return_date` date NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rentals`
--

INSERT INTO `rentals` (`car_id`, `rental_date`, `return_date`, `price`) VALUES
(1, '2023-05-27', '2023-05-30', 450),
(1, '2023-05-30', '2023-06-02', 450),
(2, '2023-05-01', '2023-05-05', 800);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regesteration_info`
--
ALTER TABLE `regesteration_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `regesteration_info`
--
ALTER TABLE `regesteration_info`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202224;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
