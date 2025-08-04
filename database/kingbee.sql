-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2024 at 02:18 AM
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
-- Database: `kingbee`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `CustomersID` int(4) NOT NULL,
  `City` varchar(20) DEFAULT NULL,
  `ContactNumber` int(11) DEFAULT NULL,
  `Age` date DEFAULT NULL,
  `Email` varchar(50) NOT NULL,
  `pass` varchar(150) DEFAULT NULL,
  `C_name` varchar(50) DEFAULT NULL,
  `user_type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`CustomersID`, `City`, `ContactNumber`, `Age`, `Email`, `pass`, `C_name`, `user_type`) VALUES
(7, 'Alexandria', 12343, '2024-01-06', 'ahmed1xdlol@gmail.co', '$2y$10$oJI4qqGBwJo39TzeBcIkX.e5E3c.KydgnwVQYdrYHL6KJIGSWkbSO', 'Tomato', 'admin'),
(8, 'Alexandria', 12343, '2023-12-22', 'ahmed@gmail.com', '$2y$10$vwawrXJTpaeOZOzxvdwO8fBawsREJ.QceNa8pw05uvOAG8CqvC', 'ahmedamrr', 'user'),
(9, 'Alexandria', 12343, '2024-01-13', 'tomato@gmail.com', '$2y$10$Oypt2SHXKOQHzVdu6BccrOfO.vpj4D8E8UqxFe/UT6OB4Q7HEC7ja', 'tom', 'user'),
(10, 'z', 12343, '2024-01-18', 'z@gmail.com', '$2y$10$ASoifNmq1wl79IfelZYiYOmviF0AsqOLQu3cmuh7ck/QY1VPMe/JG', 'z', 'user');


-- --------------------------------------------------------

--
-- Table structure for table `discounts`
--

CREATE TABLE `discounts` (
  `Porm_exp_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `ManagerID` int(4) NOT NULL,
  `Mname` varchar(20) DEFAULT NULL,
  `Mage` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `OrderID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ProductID` int(5) NOT NULL,
  `Pname` varchar(15) DEFAULT NULL,
  `Description` varchar(30) DEFAULT NULL,
  `Price` int(3) DEFAULT NULL,
  `Quantity` int(2) DEFAULT NULL,
  `Pphoto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ProductID`, `Pname`, `Description`, `Price`, `Quantity`, `Pphoto`) VALUES
(6, 'GOOD', 'AAA', 222, 33, 'ADDA'),
(8, 'aaaaaaaaaaaaa', '0', 30, 4, '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`CustomersID`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`ManagerID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ProductID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `CustomersID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ProductID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
