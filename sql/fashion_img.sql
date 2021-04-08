-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2021 at 07:09 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myntra`
--

-- --------------------------------------------------------

--
-- Table structure for table `fashion_img`
--

CREATE TABLE `fashion_img` (
  `img_name` int(255) NOT NULL,
  `img_path` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `rating` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fashion_img`
--

INSERT INTO `fashion_img` (`img_name`, `img_path`, `title`, `price`, `rating`) VALUES
(1, 'fashion_img/1.jpg', 'White Full Sleeves Tshirt', 899, 4),
(2, 'fashion_img/2.jpg', 'Blue and Black T-Shirt', 499, 3),
(3, 'fashion_img/3.jpg', 'Black T-Shirt', 399, 4),
(4, 'fashion_img/4.jpg', 'White Top', 399, 3),
(5, 'fashion_img/5.jpg', 'Black T-Shirt', 499, 3),
(6, 'fashion_img/6.jpg', 'Black Jeans', 499, 3),
(7, 'fashion_img/7.jpg', 'Men\'s Yellow T-Shirt', 399, 3),
(8, 'fashion_img/8.jpg', 'Dress', 699, 4),
(9, 'fashion_img/9.jpg', 'White Full Sleeves Tshirt', 899, 4),
(10, 'fashion_img/10.jpg', 'White and BLue Sweat-Shirt', 599, 4),
(11, 'fashion_img/11.jpg', 'Black Shorts', 399, 4),
(12, 'fashion_img/12.jpg', 'Grey Pants', 499, 4),
(13, 'fashion_img/13.jpg', 'Red Full Sleeves T-Shirt', 699, 4),
(14, 'fashion_img/14.jpg', 'Women Black Shorts', 399, 4),
(15, 'fashion_img/15.jpg', 'Full Black Joggers', 1599, 4),
(16, 'fashion_img/16.jpg', 'Puma Black T-Shirt', 699, 4),
(17, 'fashion_img/17.jpg', 'White Top', 399, 3),
(18, 'fashion_img/18.jpg', 'Puma Green Black T-Shirt', 699, 4),
(19, 'fashion_img/19.jpg', 'Men\'s Yellow T-Shirt', 599, 5),
(20, 'fashion_img/20.jpg', 'KRK T-Shirt', 299, 3),
(21, 'fashion_img/21.jpg', 'Blue Shirt', 699, 4),
(22, 'fashion_img/22.jpg', 'Blue T-Shirt', 499, 3),
(23, 'fashion_img/23.jpg', 'Polo Neck Red T-Shirt', 499, 4),
(24, 'fashion_img/24.jpg', 'Women Denim Shorts', 599, 4),
(25, 'fashion_img/25.jpg', 'Grey Track-pant', 499, 3),
(26, 'fashion_img/26.jpg', 'Women White-Yellow Top', 399, 3),
(27, 'fashion_img/27.jpg', 'Polo Neck Black and Blue T-Shirt', 599, 4),
(28, 'fashion_img/28.jpg', 'Red Printed T-Shirt', 399, 3),
(29, 'fashion_img/29.jpg', 'Polo Neck White T-Shirt', 499, 4),
(30, 'fashion_img/30.jpg', 'Polo Neck Black T-Shirt', 499, 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
