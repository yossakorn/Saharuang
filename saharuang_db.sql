-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: my57db-pj.sit.kmutt.ac.th:3306
-- Generation Time: May 24, 2017 at 10:19 PM
-- Server version: 5.7.18-0ubuntu0.16.04.1
-- PHP Version: 7.0.8-0ubuntu0.16.04.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saharuang_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('Admin', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(30) CHARACTER SET latin1 NOT NULL,
  `phone` varchar(10) CHARACTER SET latin1 NOT NULL,
  `address` varchar(100) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `phone`, `address`) VALUES
(1, 'jee', '0987654321', 'home'),
(3, 'ping', '0987654321', 'eiei'),
(4, 'park', '1234567890', 'muk'),
(5, 'amp', '7896543210', 'nooo'),
(27, 'bom', '3', '3232'),
(68, 'Ken', '024112345', 'bangkok'),
(69, 'Test', '09093123', 'asdasd'),
(70, 'Home', '2', '1'),
(71, 'Kitz', '0859673883', 'Thailand'),
(72, 'Giftgycanbealone', '024231234', 'Laos'),
(73, 'Chamonwan', '0853882438', '113');

-- --------------------------------------------------------

--
-- Table structure for table `record_order`
--

CREATE TABLE `record_order` (
  `id_order` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `sugar` int(11) DEFAULT '0',
  `molasses` int(11) DEFAULT '0',
  `order_date` date NOT NULL,
  `price` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `record_order`
--

INSERT INTO `record_order` (`id_order`, `id`, `sugar`, `molasses`, `order_date`, `price`) VALUES
(17, 1, 200, 20, '2017-05-13', NULL),
(18, 1, 200, 0, '2017-05-13', NULL),
(19, 1, 12, 32, '2017-05-13', NULL),
(20, 1, 22, 22, '2017-05-13', 14),
(21, 3, 30, 30, '2017-05-13', 19),
(22, 4, 50, 50, '2017-05-13', 31),
(23, 4, 13, 13, '2017-05-13', 8),
(24, 1, 13, 23, '2017-05-13', 12.06),
(25, 1, 200, 10, '2017-05-24', 48),
(26, 1, 10, 10, '2017-05-13', 6.2),
(27, 1, 10, 10, '2017-05-13', 6.2),
(28, 1, 10, 5, '2017-05-03', 4.2),
(29, 1, 123, 123, '2017-05-09', 76.26),
(44, 1, 500, 100, '2017-05-15', 6.2),
(45, 1, 1, 0, '2017-05-15', NULL),
(46, 1, 100, 0, '2017-05-15', NULL),
(47, 1, 11, 0, '2017-05-15', NULL),
(48, 1, 300, 100, '2017-05-15', NULL),
(49, 1, 10000, 5000, '2016-06-13', 62000),
(50, 1, 9000, 4300, '2015-06-16', 3700),
(51, 27, 3000, 1000, '2017-05-05', 1060),
(52, 73, 100, 0, '2017-05-16', NULL),
(53, 27, 100, 0, '2017-05-16', 22),
(54, 1, 100, 100, '2017-05-16', NULL),
(55, 1, 100, 100, '2017-05-16', NULL),
(56, 27, 100, 100, '2017-05-16', 62);

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `lot_sugarcane` int(11) NOT NULL,
  `sugar` int(11) NOT NULL,
  `molasses` int(11) NOT NULL,
  `bagasses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`lot_sugarcane`, `sugar`, `molasses`, `bagasses`) VALUES
(1, 0, 0, 123),
(2, 300, 870, 150),
(3, 1, 3, 1),
(4, 1, 3, 1),
(5, 1, 3, 1),
(6, 1, 3, 1),
(7, 100, 290, 50),
(8, 100, 290, 50),
(9, 1, 3, 1),
(10, 4, 12, 2),
(11, 5, 15, 3),
(12, 90, 261, 45),
(13, 1, 3, 1),
(14, 10, 29, 5),
(15, 100, 100, 100),
(16, 0, 1, 0),
(17, 1000, 50, 200),
(18, 100, 290, 50),
(19, 2000, 800, 1000),
(20, 2000, 800, 1000),
(21, 2000, 800, 1000),
(22, 10, 29, 5),
(23, 10, 29, 5),
(24, 100, 290, 50),
(25, 104, 580, 100),
(26, 100, 290, 50),
(27, 1000, 500, 500),
(28, 2, 6, 1),
(29, 2, 6, 1),
(30, 10, 29, 5),
(31, 10, 29, 5),
(32, 10, 29, 5),
(33, 10, 29, 5),
(34, 100, 290, 50),
(35, 100, 290, 50),
(36, 10, 29, 5),
(37, 100, 290, 50),
(38, 367, 150, 183),
(39, 10, 29, 5),
(40, 30, 87, 15),
(41, 100, 0, 50),
(42, 800, 900, 5),
(43, 30, 87, 15);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employee`
--

CREATE TABLE `tbl_employee` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `gender` varchar(10) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_employee`
--

INSERT INTO `tbl_employee` (`id`, `name`, `address`, `gender`, `designation`, `age`, `image`) VALUES
(1, 'Bruce Tom', '656 Edsel Road\r\nSherman Oaks, CA 91403', 'Male', 'Driver', 36, '1.jpg'),
(5, 'Clara Gilliam', '63 Woodridge Lane\r\nMemphis, TN 38138', 'Female', 'Programmer', 24, '2.jpg'),
(6, 'Barbra K. Hurley', '1241 Canis Heights Drive\r\nLos Angeles, CA 90017', 'Female', 'Service technician', 26, '3.jpg'),
(7, 'Antonio J. Forbes', '403 Snyder Avenue\r\nCharlotte, NC 28208', 'Male', 'Faller', 32, '4.jpg'),
(8, 'Charles D. Horst', '1636 Walnut Hill Drive\r\nCincinnati, OH 45202', 'Male', 'Financial investigator', 29, '5.jpg'),
(175, 'Ronald D. Colella', '1571 Bingamon Branch Road, Barrington, IL 60010', 'Male', 'Top executive', 32, '6.jpg'),
(174, 'Martha B. Tomlinson', '4005 Bird Spring Lane, Houston, TX 77002', 'Female', 'Systems programmer', 38, '7.jpg'),
(161, 'Glenda J. Stewart', '3482 Pursglove Court, Rossburg, OH 45362', 'Female', 'Cost consultant', 28, '8.jpg'),
(162, 'Jarrod D. Jones', '3827 Bingamon Road, Garfield Heights, OH 44125', 'Male', 'Manpower development advisor', 64, '9.jpg'),
(163, 'William C. Wright', '2653 Pyramid Valley Road, Cedar Rapids, IA 52404', 'Male', 'Political geographer', 33, '10.jpg'),
(178, 'Sara K. Ebert', '1197 Nelm Street\r\nMc Lean, VA 22102', 'Female', 'Billing machine operator', 50, ''),
(177, 'Patricia L. Scott', '1584 Dennison Street\r\nModesto, CA 95354', 'Female', 'Urban and regional planner', 54, ''),
(179, 'James K. Ridgway', '3462 Jody Road\r\nWayne, PA 19088', 'Female', 'Recreation leader', 41, ''),
(180, 'Stephen A. Crook', '448 Deercove Drive\r\nDallas, TX 75201', 'Male', 'Optical goods worker', 36, ''),
(181, 'Kimberly J. Ellis', '4905 Holt Street\r\nFort Lauderdale, FL 33301', 'Male', 'Dressing room attendant', 24, ''),
(182, 'Elizabeth N. Bradley', '1399 Randall Drive\r\nHonolulu, HI 96819', 'Female', ' Software quality assurance analyst', 25, ''),
(183, 'Steve John', '108, Vile Parle, CL', 'Male', 'Software Engineer', 29, ''),
(184, 'Marks Johnson', '021, Big street, NY', 'Male', 'Head of IT', 41, ''),
(185, 'Mak Pub', '1462 Juniper Drive\r\nBreckenridge, MI 48612', 'Male', 'Mental health counselor', 40, ''),
(186, 'Louis C. Charmis', '1462 Juniper Drive\r\nBreckenridge, MI 48612', 'Male', 'Mental health counselor', 40, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `record_order`
--
ALTER TABLE `record_order`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`lot_sugarcane`);

--
-- Indexes for table `tbl_employee`
--
ALTER TABLE `tbl_employee`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
--
-- AUTO_INCREMENT for table `record_order`
--
ALTER TABLE `record_order`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `lot_sugarcane` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `tbl_employee`
--
ALTER TABLE `tbl_employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=187;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
