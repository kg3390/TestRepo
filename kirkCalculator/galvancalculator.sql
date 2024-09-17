-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2024 at 12:03 PM
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
-- Database: `galvancalculator`
--

-- --------------------------------------------------------

--
-- Table structure for table `addition`
--

CREATE TABLE `addition` (
  `galvanNum1` int(11) NOT NULL,
  `galvanNum2` int(11) NOT NULL,
  `galvanNum3` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `galvan_Fname` varchar(255) NOT NULL,
  `galvan_Lname` varchar(255) NOT NULL,
  `galvan_Email` varchar(255) NOT NULL,
  `galvan_Username` varchar(255) NOT NULL,
  `galvan_Password` varchar(255) NOT NULL,
  `galvan_ConfirmPass` varchar(255) NOT NULL,
  `galvan_Area` int(255) NOT NULL,
  `galvan_Phone` int(255) NOT NULL,
  `galvan_Address` varchar(255) NOT NULL,
  `galvan_City` varchar(255) NOT NULL,
  `galvan_State` varchar(255) NOT NULL,
  `galvan_Zip` int(255) NOT NULL,
  `galvan_Country` varchar(255) NOT NULL,
  `galvan_Company` varchar(255) NOT NULL,
  `galvan_Attendee` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`galvan_Fname`, `galvan_Lname`, `galvan_Email`, `galvan_Username`, `galvan_Password`, `galvan_ConfirmPass`, `galvan_Area`, `galvan_Phone`, `galvan_Address`, `galvan_City`, `galvan_State`, `galvan_Zip`, `galvan_Country`, `galvan_Company`, `galvan_Attendee`) VALUES
('Kirk Ervin', 'Galvan', 'test@test.com', 'kg3390', 'pass3390', 'pass3390', 63, 2147483647, 'Blk 1 Lot 15 Serpens Street Ph 3b, St. Agatha', 'Malolos', 'Bulacan', 3000, 'Philippines', 'Tesda', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`galvan_Fname`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
