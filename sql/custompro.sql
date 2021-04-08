-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2021 at 05:05 PM
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
-- Table structure for table `custompro`
--

CREATE TABLE `custompro` (
  `id` varchar(10) NOT NULL,
  `img` varchar(1000) NOT NULL,
  `price` int(200) NOT NULL,
  `drawarea-width` int(200) NOT NULL,
  `drawarea-height` int(200) NOT NULL,
  `pro-desc` varchar(500) NOT NULL,
  `title` varchar(200) NOT NULL,
  `rating` int(5) NOT NULL,
  `margin-top` int(200) NOT NULL,
  `margin-left` int(200) NOT NULL,
  `review` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `custompro`
--

INSERT INTO `custompro` (`id`, `img`, `price`, `drawarea-width`, `drawarea-height`, `pro-desc`, `title`, `rating`, `margin-top`, `margin-left`, `review`) VALUES
('m1', 'images op/m1.png', 499, 125, 200, '100% Original Products Free Delivery on order above Rs. 799 This item is not returnable. Items like inner-wear, personal care, make-up, socks and certain accessories do not come under our return policy. Read More. BEST OFFERS Best Price: Rs. 325 Applicable on: Orders above Rs. 1599 (only on first purchase) Coupon code: MYNTRA250 Coupon Discount: Rs. 250 off (check cart for final savings) ', 'Unisex Basic T-Shirt', 5, 100, -20, 100),
('m2', 'images op/m2.png', 599, 130, 200, '100% Original Products Free Delivery on order above Rs. 799 This item is not returnable. Items like inner-wear, personal care, make-up, socks and certain accessories do not come under our return policy. Read More. BEST OFFERS Best Price: Rs. 325 Applicable on: Orders above Rs. 1599 (only on first purchase) Coupon code: MYNTRA250 Coupon Discount: Rs. 250 off (check cart for final savings) ', 'Men\'s Long Sleeve Shirt', 4, 100, -15, 80),
('m3', 'images op/m3.png', 499, 135, 200, '100% Original Products Free Delivery on order above Rs. 799 This item is not returnable. Items like inner-wear, personal care, make-up, socks and certain accessories do not come under our return policy. Read More. BEST OFFERS Best Price: Rs. 325 Applicable on: Orders above Rs. 1599 (only on first purchase) Coupon code: MYNTRA250 Coupon Discount: Rs. 250 off (check cart for final savings) ', 'Men\'s Polo Neck Shirt', 3, 105, -20, 286),
('m4', 'images op/m4.png', 799, 135, 200, '100% Original Products Free Delivery on order above Rs. 799 This item is not returnable. Items like inner-wear, personal care, make-up, socks and certain accessories do not come under our return policy. Read More. BEST OFFERS Best Price: Rs. 325 Applicable on: Orders above Rs. 1599 (only on first purchase) Coupon code: MYNTRA250 Coupon Discount: Rs. 250 off (check cart for final savings) ', 'Men\'s Champion SweatShirt', 4, 105, -20, 39),
('w1', 'images op/w1.png', 499, 100, 200, '100% Original Products Free Delivery on order above Rs. 799 This item is not returnable. Items like inner-wear, personal care, make-up, socks and certain accessories do not come under our return policy. Read More. BEST OFFERS Best Price: Rs. 325 Applicable on: Orders above Rs. 1599 (only on first purchase) Coupon code: MYNTRA250 Coupon Discount: Rs. 250 off (check cart for final savings) ', 'Women\'s Fashion Fit T-Shirt', 3, 105, -10, 78),
('w2', 'images op/w2.png', 399, 120, 150, '100% Original Products Free Delivery on order above Rs. 799 This item is not returnable. Items like inner-wear, personal care, make-up, socks and certain accessories do not come under our return policy. Read More. BEST OFFERS Best Price: Rs. 325 Applicable on: Orders above Rs. 1599 (only on first purchase) Coupon code: MYNTRA250 Coupon Discount: Rs. 250 off (check cart for final savings) ', 'Women\'s Flowy Crop Top', 4, 120, -15, 160),
('w3', 'images op/w3.png', 499, 95, 220, '100% Original Products Free Delivery on order above Rs. 799 This item is not returnable. Items like inner-wear, personal care, make-up, socks and certain accessories do not come under our return policy. Read More. BEST OFFERS Best Price: Rs. 325 Applicable on: Orders above Rs. 1599 (only on first purchase) Coupon code: MYNTRA250 Coupon Discount: Rs. 250 off (check cart for final savings) ', 'Unisex Long Sleeve Shirt', 5, 120, -10, 104),
('w4', 'images op/w4.png', 799, 120, 200, '100% Original Products Free Delivery on order above Rs. 799 This item is not returnable. Items like inner-wear, personal care, make-up, socks and certain accessories do not come under our return policy. Read More. BEST OFFERS Best Price: Rs. 325 Applicable on: Orders above Rs. 1599 (only on first purchase) Coupon code: MYNTRA250 Coupon Discount: Rs. 250 off (check cart for final savings) ', 'Women\'s Crew Neck Sweatshirt', 4, 120, -10, 45);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `custompro`
--
ALTER TABLE `custompro`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
