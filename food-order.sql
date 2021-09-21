-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 02, 2021 at 01:32 PM
-- Server version: 8.0.21
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food-order`
--

-- --------------------------------------------------------

--
-- Table structure for table `bl_admin`
--

DROP TABLE IF EXISTS `bl_admin`;
CREATE TABLE IF NOT EXISTS `bl_admin` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `full_name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bl_admin`
--

INSERT INTO `bl_admin` (`id`, `full_name`, `username`, `password`) VALUES
(19, 'chali', 'user', 'ee11cbb19052e40b07aac0ca060c23ee'),
(18, 'kan', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `fullName` varchar(50) NOT NULL,
  `pno` int NOT NULL,
  `orderName` varchar(50) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(150) NOT NULL,
  PRIMARY KEY (`pno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`fullName`, `pno`, `orderName`, `quantity`, `email`, `address`) VALUES
('hhhh', 0, 'burger', '5', 'bashu@gamil.comf', 'fghn'),
('Bishan', 761234, 'ggg', '5', 'bashu@gamil.com', 'tfgvc'),
('Bishan', 7616677, 'burger', '3', 'bashu@gamil.com', 'cfvv');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

DROP TABLE IF EXISTS `tbl_category`;
CREATE TABLE IF NOT EXISTS `tbl_category` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `featured` varchar(10) NOT NULL,
  `active` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `title`, `image_name`, `featured`, `active`) VALUES
(37, 'burger', 'Food_category_677.jpg', 'Yes', 'Yes'),
(36, 'eee', 'Food_category_740.jpeg', 'Yes', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_food`
--

DROP TABLE IF EXISTS `tbl_food`;
CREATE TABLE IF NOT EXISTS `tbl_food` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `category_id` int UNSIGNED NOT NULL,
  `featured` varchar(10) NOT NULL,
  `active` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_food`
--

INSERT INTO `tbl_food` (`id`, `title`, `description`, `price`, `image_name`, `category_id`, `featured`, `active`) VALUES
(24, 'sddd', 'ffff', '12345', 'Food-name_641.jpeg', 1, 'Yes', 'Yes'),
(25, 'fish burger', 'good food fish', '123', 'Food-name_847.jpg', 37, 'Yes', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

DROP TABLE IF EXISTS `tbl_order`;
CREATE TABLE IF NOT EXISTS `tbl_order` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `food` varchar(150) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `qty` int NOT NULL,
  `total` decimal(10,0) NOT NULL,
  `order_date` datetime NOT NULL,
  `status` varchar(50) NOT NULL,
  `customer_name` varchar(150) NOT NULL,
  `customer_contact` varchar(20) NOT NULL,
  `customer_email` varchar(150) NOT NULL,
  `customer_address` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(15) NOT NULL,
  `repassword` varchar(15) NOT NULL,
  `PNO` int NOT NULL,
  `dob` date NOT NULL,
  `gender` text NOT NULL,
  PRIMARY KEY (`PNO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`fname`, `lname`, `email`, `password`, `repassword`, `PNO`, `dob`, `gender`) VALUES
('', '', '', 'rr', 'rr', 0, '0000-00-00', ''),
('malith', 'sayuranga', 'e@gmail.com', 'q', 'q', 25, '0000-00-00', 'Male'),
('ma', 'li', 'l@gmail.com', 'w', 'w', 123, '0000-00-00', 'Male'),
('w', 'w', 'lhk@gmail.com', 'm', 'm', 125, '0000-00-00', 'Male'),
('t', 't', 'lhk@gmail.com', 'h', 'h', 225, '0000-00-00', 'female'),
('L', 'L', 'malith@gmail.com', 'l', 'l', 412536897, '0000-00-00', 'Male'),
('bashu', 'chalki', 'bashu@gamil.com', 'bashu1919', 'bashu1919', 761285175, '0000-00-00', 'female'),
('ggg', 'nimsara', 'Bishankan@1919', '1234567', '1234567', 761285177, '0000-00-00', ''),
('malitha', 'sayurangaa', 'lghmalith@gmail.com', 'r', 'r', 783252404, '2000-01-02', 'Female');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
