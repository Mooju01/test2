-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 31, 2020 at 03:37 AM
-- Server version: 5.6.37
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car`
--

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE IF NOT EXISTS `car` (
  `car_num` int(5) NOT NULL,
  `car_brand` text COLLATE utf8_unicode_ci NOT NULL,
  `car_model` text COLLATE utf8_unicode_ci NOT NULL,
  `car_color` text COLLATE utf8_unicode_ci NOT NULL,
  `car_mile` int(11) NOT NULL,
  `car_type` int(11) NOT NULL,
  `Cus_id` varchar(5) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `CUSTOMER`
--

CREATE TABLE IF NOT EXISTS `CUSTOMER` (
  `Cus_name` text COLLATE utf8_unicode_ci NOT NULL,
  `City` text COLLATE utf8_unicode_ci NOT NULL,
  `Country` text COLLATE utf8_unicode_ci NOT NULL,
  `Postalcode` text COLLATE utf8_unicode_ci NOT NULL,
  `Cus_id` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `cus_sex` text COLLATE utf8_unicode_ci NOT NULL,
  `cus_phone` text COLLATE utf8_unicode_ci NOT NULL,
  `cus_address` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `CUSTOMER`
--

INSERT INTO `CUSTOMER` (`Cus_name`, `City`, `Country`, `Postalcode`, `Cus_id`, `cus_sex`, `cus_phone`, `cus_address`) VALUES
('max', 'phuket', 'thai', '803660', 'c01', 'm', '191', 'ที่ใดดี'),
('noom', 'mexico ', 'mexico ', '05021', 'c02', '', '', ''),
('benz', 'phuket ', 'thai', '83000', 'c03', '', '', ''),
('por', 'berlin ', 'germany', '12209', 'c04', '', '', ''),
('JUnE', 'Nakhon Sri thamarag', 'bangkhan', '80360', 'c05', 'f', '0937203788', '5 10');

-- --------------------------------------------------------

--
-- Table structure for table `detail`
--

CREATE TABLE IF NOT EXISTS `detail` (
  `detail_no` int(11) NOT NULL,
  `job_id` int(4) NOT NULL,
  `pro_id` int(4) NOT NULL,
  `detail_use` int(11) NOT NULL,
  `memo` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE IF NOT EXISTS `job` (
  `job_id` int(4) NOT NULL,
  `car_num` int(12) NOT NULL,
  `job_date` date NOT NULL,
  `job_total` int(11) NOT NULL,
  `job_wage` int(11) NOT NULL,
  `job_status` int(11) NOT NULL,
  `job_repair` int(11) NOT NULL,
  `memo` text COLLATE utf8_unicode_ci NOT NULL,
  `jobr_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Pro`
--

CREATE TABLE IF NOT EXISTS `Pro` (
  `pro_id` int(4) NOT NULL,
  `pro_name` text COLLATE utf8_unicode_ci NOT NULL,
  `pro_cost` int(11) NOT NULL,
  `pro_balance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `TRANSACTIONS`
--

CREATE TABLE IF NOT EXISTS `TRANSACTIONS` (
  `id` int(5) NOT NULL,
  `Cus_id` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `Product_id` text COLLATE utf8_unicode_ci NOT NULL,
  `Total_price` int(20) NOT NULL,
  `Tran_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `TRANSACTIONS`
--

INSERT INTO `TRANSACTIONS` (`id`, `Cus_id`, `Product_id`, `Total_price`, `Tran_date`) VALUES
(1, 'c01', 'p01', 200, '2018-01-20'),
(2, 'c02', 'p05', 150, '2018-02-17'),
(3, 'c03', 'p04', 20, '2018-02-18'),
(4, 'c01', 'p05', 180, '2018-02-25'),
(5, 'c04', 'p01', 100, '2018-02-25'),
(6, 'c01', 'p02', 50, '2018-03-15'),
(7, 'c03', 'p01', 200, '2018-03-11'),
(8, 'c01', 'p02', 50, '2018-03-15'),
(9, 'c04', 'p05', 80, '2018-03-20'),
(10, 'c04', 'p02', 10, '2018-03-25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`car_num`);

--
-- Indexes for table `CUSTOMER`
--
ALTER TABLE `CUSTOMER`
  ADD PRIMARY KEY (`Cus_id`);

--
-- Indexes for table `detail`
--
ALTER TABLE `detail`
  ADD PRIMARY KEY (`detail_no`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `Pro`
--
ALTER TABLE `Pro`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `TRANSACTIONS`
--
ALTER TABLE `TRANSACTIONS`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail`
--
ALTER TABLE `detail`
  MODIFY `detail_no` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
