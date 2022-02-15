-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2022 at 10:23 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banksystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Customer_ID` int(5) NOT NULL,
  `Customer_Name` text  NOT NULL,
  `Customer_Email` varchar(30) NOT NULL,
  `Customer_Balance` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Customer_ID`, `Customer_Name`, `Customer_Email`, `Customer_Balance`) VALUES
(1, 'Sara ', 'sara@gmail.com', 33100),
(2, 'Ali', 'ali@gmail.com', 9800),
(3, 'Omar', 'omar@gmail.com', 4590),
(4, 'Asmaa', 'asmaa@gmail.com', 460000),
(5, 'Marwa', 'marwa@gmail.com', 30990),
(6, 'Mona', 'mona@gmail.com', 91000),
(7, 'Nesma', 'nesma@gmail.com', 7000),
(8, 'Tamer', 'tamer@gmail.com', 12000),
(9, 'Noha', 'noha@gmail.com', 36000),
(10, 'Ahmed', 'ahmed@gmail.com', 46000);
COMMIT;

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `Transaction_ID` int(5) NOT NULL,
  `Sender` text  NOT NULL,
  `Receiver` text  NOT NULL,
  `Transaction_Balance` int(9) NOT NULL,
  `DateTime` DateTime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
