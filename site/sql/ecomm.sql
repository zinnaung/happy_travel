-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 27, 2020 at 04:19 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecomm`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `about` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=68 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `name`,`about`, `price`, `image`) VALUES
(31, 'car12', 'aaaaaaaaaaa','450', 'car12.jpg'),
(29, 'car10', 'aaaaaaaaaaa','300', 'car10.jfif'),
(30, 'car11', 'aaaaaaaaaaa','230', 'car11.jfif'),
(28, 'car9', 'aaaaaaaaaaa','198', 'car9.jfif'),
(27, 'car8', 'aaaaaaaaaaa','200', 'car8.jfif'),
(26, 'car7', 'aaaaaaaaaaa','580', 'car7.jfif'),
(25, 'car6', 'aaaaaaaaaaa','275', 'car6.jpg'),
(24, 'car5', 'aaaaaaaaaaa','360', 'car5.jpg'),
(23, 'car4', 'aaaaaaaaaaa','450', 'car4.jpg'),
(22, 'car3', 'aaaaaaaaaaa','398', 'car3.jpg'),
(21, 'car2', 'aaaaaaaaaaa','590', 'car2.jpg'),
(20, 'car1', 'aaaaaaaaaaa','680', 'car1.jpg'),
(32, 'car13','aaaaaaaaaaa','165', 'car13.jpg'),
(33, 'car14','aaaaaaaaaaa','980', 'car14.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
