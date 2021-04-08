-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2021 at 10:09 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` text NOT NULL,
  `product_info` text NOT NULL,
  `product_price` float NOT NULL,
  `product_description` text NOT NULL,
  `ratings` int(11) NOT NULL,
  `review` int(11) NOT NULL,
  `color` text NOT NULL,
  `size` text NOT NULL,
  `product_image` text NOT NULL,
  `assests` text NOT NULL,
  `product_category` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_info`, `product_price`, `product_description`, `ratings`, `review`, `color`, `size`, `product_image`, `assests`, `product_category`) VALUES
(1, 'MAC', 'Powder color lipstick', 1700, 'Shade Name: Shocking Revelation\r\nShade number: 306\r\n\r\nDisclaimer: Please note that you can purchase a maximum of 6 units from a particular range per transaction. 12 units are allowed if the products are from different ranges.Please be aware ingredient listing may change and vary from time to time. Please refer to ingredient list on product package you receive for the most up to date list of ingredients.', 4, 10, 'Devoted to Chili-#A45A52,Cammine-#960018,Lasting Passion-#CD5C5C', '', 'png/products/mac-lipstick3.png', '', 'lipstic'),
(2, 'Just Herbs', 'Just Herbs Ayurvedic Lipstick Mini kit', 200, '100% Original Products\r\nFree Delivery on order above Rs. 799\r\nThis item is not returnable. Items like inner-wear, personal care, make-up, socks and certain accessories do not come under our return policy. Read More.\r\nBEST OFFERS \r\nBest Price: Rs. 325\r\nApplicable on: Orders above Rs. 1599 (only on first purchase)\r\nCoupon code: MYNTRA250\r\nCoupon Discount: Rs. 250 off (check cart for final savings)\r\nView Eligible Products\r\nGet Gift\r\nBuy worth Rs 575 and get Just Herbs Ayurvedic Body-Glow Essentials Trial Kit free', 3, 10, 'Brick red-#AA4A44,Bright red-#EE4B2B', '', 'png/products/mac-lipstick1.png', '', 'lipstic'),
(3, 'Miss Rose', 'Ultimatte Long Stay Matte Lipstick- Foxy', 549, 'What it is:\r\nCreamy Matte Shade 56 Kiss Me Stupid Bullet LipStick\r\nWhat it does:\r\nMiss Rose Bullet Lipstick Your perfect office Lipstylist is here! The versatile colors in the 18 Color Miss Rose Bullet LipStick the high-intensity Creamy Matte Finish Look give your eyes a defined finish. The radiant color Gives your Lips to that professional edge. Use the lighter shades for office wear and darker shades for your night look. creamy-smooth textured lipstick that gets you ready for your chic and stylish Look Miss Rosee brand offering a wide range of high-end, world-class colour Intense colour High coverage Long-wearing crme finish.', 2, 29, 'rose pink-#EA3C53,hibiscus-#B43757', '', 'png/products/rose-lipstick3.png', '', 'lipstic'),
(4, 'MyGlamm', 'Ultimatte Long Stay Matte Lipstick- Foxy', 399, '100% Original Products\r\nFree Delivery on order above Rs. 799\r\nThis item is not returnable. Items like inner-wear, personal care, make-up, socks and certain accessories do not come under our return policy.', 5, 17, 'Brown Bella-#5E1914', '', 'png/products/bb-lipstick3.png', '', 'lipstic'),
(5, 'MANGO', 'Gold-Toned Circular Hoop Earrings', 990, 'Gold-plated circular hoop earrings, gold-plated, has cubic zirconia\r\nSecured with a lever back, contains 3 sets of changeable studs.\r\n\r\nSize & Fit\r\nEarring Gross Weight :5.77 gms\r\nEarring Width : 1.651 cm\r\nEarring Length : 1.905 cm\r\n\r\nMaterial & Care\r\nMaterial: Brass\r\nStone Type: Cubic Zirconia', 3, 20, '', 'Onesize-OS', 'png/products/earing1.png', 'png/products/assests/earing11.png', 'earing'),
(6, 'Biba', 'Sea Green Contemporary Chandbalis', 1299, '100% Original Products\r\nFree Delivery on order above Rs. 799\r\nPay on delivery might be available\r\nEasy 15 days returns and exchanges\r\nTry & Buy might be available', 3, 27, '', 'Onesize-OS', 'png/products/earing2.png', 'png/products/assests/earing22.png', 'earing'),
(7, 'Quechua By Decathlon', 'Wayfarer MH140 Cat 3 Sunglasses', 1200, 'Our optical engineers developed these sunglasses for hiking. Ideal for occasional use in the mountains\r\nAnti-UV lenses block out 100% of the suns harmful rays and Category 3 protects you from glare\r\nThanks to their low weight and good retention, they provide excellent protection for hiking.\r\nLENS : Category 3: allows 8% to 18% of light through (protection in sunny weather - Standard: ISO 12312-1)100% ANTI-UV filter\r\nMaterial: impact-resistant polycarbonate\r\nGeometry: spherical shape - Base 6\r\n', 1, 5, '', 'Onesize-OS', 'png/products/sunglass.png', 'png/products/assests/sunglass.png', 'sunglass');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
