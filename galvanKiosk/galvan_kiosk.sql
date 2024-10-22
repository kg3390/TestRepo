-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2024 at 04:59 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `galvan_kiosk`
--

-- --------------------------------------------------------

--
-- Table structure for table `archive`
--

CREATE TABLE `archive` (
  `product_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `price_per_unit` int(5) NOT NULL,
  `image_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `archive`
--

INSERT INTO `archive` (`product_id`, `name`, `unit`, `price_per_unit`, `image_url`) VALUES
(3, 'RX - 78', '3', 5000, 'RX-78.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `date_time` varchar(150) NOT NULL,
  `customer_contact` varchar(255) NOT NULL,
  `item_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `total_price`, `date_time`, `customer_contact`, `item_id`, `name`) VALUES
(28, 25000.00, '2024-10-20 14:04:39', '9773855719', 13, 'Kirk Galvan'),
(29, 5000.00, '2024-10-20 14:06:25', '123456789', 16, 'Kirk'),
(30, 25000.00, '2024-10-20 16:15:21', '96000000', 13, 'Angelika'),
(31, 10000.00, '2024-10-20 16:17:00', '1111111111', 13, 'Kirk'),
(32, 10000.00, '2024-10-20 16:17:35', '2', 13, '2'),
(33, 5000.00, '2024-10-20 16:18:10', '1', 13, '1'),
(34, 5000.00, '2024-10-20 16:18:24', '1', 13, '1'),
(35, 3000.00, '2024-10-20 16:19:05', '1', 14, '1'),
(36, 3000.00, '2024-10-20 16:23:00', '1', 14, '1'),
(37, 6000.00, '2024-10-20 16:23:42', '2', 14, '2'),
(38, 3000.00, '2024-10-20 16:24:45', '1', 14, '1'),
(39, 3000.00, '2024-10-20 16:25:01', '1', 14, '1'),
(40, 3000.00, '2024-10-20 16:25:33', '1', 14, '1'),
(41, 10000.00, '2024-10-20 16:25:57', '2', 16, '2'),
(42, 3000.00, '2024-10-20 16:27:02', '1', 14, '1'),
(43, 6000.00, '2024-10-20 16:27:24', '2', 14, '2'),
(44, 6000.00, '2024-10-20 16:29:36', '2', 14, '2'),
(45, 20000.00, '2024-10-20 16:51:39', '1234567496', 16, 'kirk'),
(46, 20000.00, '2024-10-20 16:53:18', '1234567496', 16, 'kirk');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `order_item_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` decimal(10,2) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`order_item_id`, `order_id`, `product_id`, `quantity`, `price`) VALUES
(3, 28, 13, 5.00, 25000.00),
(4, 29, 16, 1.00, 5000.00),
(5, 46, 16, 4.00, 20000.00);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `price_per_unit` decimal(10,2) NOT NULL,
  `image_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `name`, `unit`, `price_per_unit`, `image_url`) VALUES
(13, 'MG Strike Freedom', '1', 5000.00, 'MGEX Strike Freedom .jpg'),
(14, 'MG Aerial', '2', 3000.00, 'MG Aerial.jpg'),
(16, 'MG Wing Gundam Zero', '1', 5000.00, 'MG Wing Gundam Zero Custom.jpg'),
(17, 'RX - 78', '4', 2500.00, 'RX-78.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `ID` int(11) NOT NULL,
  `galvan_Fname` varchar(50) NOT NULL,
  `galvan_Lname` varchar(50) NOT NULL,
  `galvan_Email` varchar(50) NOT NULL,
  `galvan_Username` varchar(50) NOT NULL,
  `galvan_Password` varchar(50) NOT NULL,
  `galvan_ConfirmedPassword` varchar(50) NOT NULL,
  `galvan_type` varchar(10) NOT NULL DEFAULT '1',
  `galvan_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`ID`, `galvan_Fname`, `galvan_Lname`, `galvan_Email`, `galvan_Username`, `galvan_Password`, `galvan_ConfirmedPassword`, `galvan_type`, `galvan_status`) VALUES
(8, 'Kirk Ervin ', 'Galvan', 'test@test.com', 'admin', 'admin', 'admin', '1', '1'),
(10, 'Kurt', 'Galvan', 'test@gmail.com', 'user', 'user', 'user', '0', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `archive`
--
ALTER TABLE `archive`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`order_item_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `archive`
--
ALTER TABLE `archive`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `order_item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
