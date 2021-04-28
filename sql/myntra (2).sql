-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2021 at 06:22 AM
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

-- --------------------------------------------------------

--
-- Table structure for table `macc`
--

CREATE TABLE `macc` (
  `img_nam` varchar(255) NOT NULL,
  `img_path` varchar(255) NOT NULL,
  `title` varchar(100) NOT NULL,
  `price` int(10) NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `macc`
--

INSERT INTO `macc` (`img_nam`, `img_path`, `title`, `price`, `rating`) VALUES
('1', 'img_fashion/macc/1.png', 'Black and Orange Shoes', 1999, 4),
('10', 'img_fashion/macc/10.png', 'White Watch', 1999, 4),
('11', 'img_fashion/macc/11.png', 'Black Watch', 1999, 4),
('12', 'img_fashion/macc/12.png', 'Orange Watch', 1999, 4),
('13', 'img_fashion/macc/13.png', 'Black Watch', 1999, 4),
('14', 'img_fashion/macc/14.png', 'Blue Shoes', 1999, 4),
('15', 'img_fashion/macc/15.png', 'Black Shoes', 1999, 4),
('16', 'img_fashion/macc/16.png', 'Blue Shoes', 1999, 4),
('17', 'img_fashion/macc/17.png', 'Black Shoes', 1999, 4),
('18', 'img_fashion/macc/18.png', 'Orange Watch', 1999, 4),
('19', 'img_fashion/macc/19.png', 'Black Boots', 1999, 4),
('2', 'img_fashion/macc/2.png', 'White Shoes', 1999, 4),
('20', 'img_fashion/macc/20.png', 'Black Shoes', 1999, 4),
('21', 'img_fashion/macc/21.png', 'Blue Shoes', 1999, 4),
('22', 'img_fashion/macc/22.png', 'Brow Watch', 1999, 4),
('23', 'img_fashion/macc/23.png', 'Blue Shoes', 1999, 4),
('24', 'img_fashion/macc/24.png', 'Black Shoes', 1999, 4),
('25', 'img_fashion/macc/25.png', 'White Watch', 1999, 4),
('26', 'img_fashion/macc/26.png', 'Black Watch', 1999, 4),
('27', 'img_fashion/macc/27.png', 'Yellow Shoes', 1999, 4),
('28', 'img_fashion/macc/28.png', 'Orange Shoes', 1999, 4),
('3', 'img_fashion4/macc/3.png', 'Neyon Yellow Shoes', 1999, 4),
('4', 'img_fashion/macc/4.png', 'Black Shoes', 1999, 4),
('5', 'img_fashion/macc/5.png', 'Yellow Shoes', 1999, 4),
('6', 'img_fashion/macc/6.png', 'White Shoes', 1999, 4),
('7', 'img_fashion/macc/7.png', 'Blue Shoes', 1999, 4),
('8', 'img_fashion/macc/8.png', 'Green Shoes', 1999, 4),
('9', 'img_fashion/macc/9.png', 'Black Shoes', 1999, 4);

-- --------------------------------------------------------

--
-- Table structure for table `mclothes`
--

CREATE TABLE `mclothes` (
  `img_nam` varchar(255) NOT NULL,
  `img_path` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mclothes`
--

INSERT INTO `mclothes` (`img_nam`, `img_path`, `title`, `price`, `rating`) VALUES
('1', 'img_fashion/mclothes/1.png', 'White Full Sleeves Tshirt', 899, 4),
('10', 'img_fashion/mclothes/10.png', 'BLue Jacket', 999, 4),
('100', 'img_fashion/macc/1.png', 'Black and Orange Shoes', 1999, 4),
('101', 'img_fashion/macc/10.png', 'White Watch', 1999, 4),
('11', 'img_fashion/mclothes/11.png', 'Shorts', 299, 2),
('111', 'img_fashion/macc/11.png', 'Black Watch', 1999, 4),
('12', 'img_fashion/mclothes/12.png', 'BLue and Black T-shirt', 699, 2),
('121', 'img_fashion/macc/12.png', 'Orange Watch', 1999, 4),
('13', 'img_fashion/mclothes/13.png', 'Red Full Sleeves Tshirt', 899, 4),
('131', 'img_fashion/macc/13.png', 'Black Watch', 1999, 4),
('14', 'img_fashion/mclothes/14.png', 'Red T-Shirt', 499, 3),
('141', 'img_fashion/macc/14.png', 'Blue Shoes', 1999, 4),
('15', 'img_fashion/mclothes/15.png', 'Black Joggers', 399, 4),
('151', 'img_fashion/macc/15.png', 'Black Shoes', 1999, 4),
('16', 'img_fashion/mclothes/16.png', 'Black Puma', 699, 3),
('161', 'img_fashion/macc/16.png', 'Blue Shoes', 1999, 4),
('17', 'img_fashion/mclothes/17.png', 'White strips T-Shirt', 499, 3),
('171', 'img_fashion/macc/17.png', 'Black Shoes', 1999, 4),
('18', 'img_fashion/mclothes/18.png', 'Black Puma', 699, 4),
('181', 'img_fashion/macc/18.png', 'Orange Watch', 1999, 4),
('19', 'img_fashion/mclothes/19.png', 'Yellow Tshirt', 599, 4),
('191', 'img_fashion/macc/19.png', 'Black Boots', 1999, 4),
('2', 'img_fashion/mclothes/2.png', 'Blue and Black T-Shirt', 499, 3),
('20', 'img_fashion/mclothes/20.png', 'Nokia T-SHirt', 399, 2),
('200', 'img_fashion/macc/2.png', 'White Shoes', 1999, 4),
('201', 'img_fashion/macc/20.png', 'Black Shoes', 1999, 4),
('21', 'img_fashion/mclothes/21.png', 'Black T-Shirt', 599, 3),
('211', 'img_fashion/macc/21.png', 'Blue Shoes', 1999, 4),
('22', 'img_fashion/mclothes/22.png', 'Blue T-Shirt', 999, 4),
('221', 'img_fashion/macc/22.png', 'Brow Watch', 1999, 4),
('23', 'img_fashion/mclothes/23.png', 'Red Shirt', 399, 4),
('231', 'img_fashion/macc/23.png', 'Blue Shoes', 1999, 4),
('24', 'img_fashion/mclothes/24.png', 'Black T-shirt', 299, 3),
('241', 'img_fashion/macc/24.png', 'Black Shoes', 1999, 4),
('251', 'img_fashion/macc/25.png', 'White Watch', 1999, 4),
('261', 'img_fashion/macc/26.png', 'Black Watch', 1999, 4),
('271', 'img_fashion/macc/27.png', 'Yellow Shoes', 1999, 4),
('281', 'img_fashion/macc/28.png', 'Orange Shoes', 1999, 4),
('3', 'img_fashion/mclothes/3.png', 'Black T-Shirt', 399, 4),
('300', 'img_fashion4/macc/3.png', 'Neyon Yellow Shoes', 1999, 4),
('4', 'img_fashion/mclothes/4.png', 'Grey Track-pant', 699, 3),
('400', 'img_fashion/macc/4.png', 'Black Shoes', 1999, 4),
('5', 'img_fashion/mclothes/5.png', 'Black T-Shirt', 499, 3),
('500', 'img_fashion/macc/5.png', 'Yellow Shoes', 1999, 4),
('6', 'img_fashion/mclothes/6.png', 'Black Jeans', 599, 3),
('600', 'img_fashion/macc/6.png', 'White Shoes', 1999, 4),
('7', 'img_fashion/mclothes/7.png', 'Yellow Tshirt', 499, 3),
('700', 'img_fashion/macc/7.png', 'Blue Shoes', 1999, 4),
('8', 'img_fashion/mclothes/8.png', 'White T-Shirt', 599, 4),
('800', 'img_fashion/macc/8.png', 'Green Shoes', 1999, 4),
('9', 'img_fashion/mclothes/9.png', 'White and Yellow T-Shirt', 599, 3),
('900', 'img_fashion/macc/9.png', 'Black Shoes', 1999, 4);

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

-- --------------------------------------------------------

--
-- Table structure for table `wacc`
--

CREATE TABLE `wacc` (
  `img_nam` varchar(255) NOT NULL,
  `img_path` varchar(255) NOT NULL,
  `title` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wacc`
--

INSERT INTO `wacc` (`img_nam`, `img_path`, `title`, `price`, `rating`) VALUES
('1', 'img_fashion/wacc/1.png', 'Blue Watch', 299, 3),
('10', 'img_fashion/wacc/10.png', 'Golden Braclet', 1299, 3),
('11', 'img_fashion/wacc/11.png', 'Yellow Braclet', 199, 3),
('12', 'img_fashion/wacc/12.png', 'Pink Sandles', 2199, 4),
('13', 'img_fashion/wacc/13.png', 'Golden Necklace', 2999, 4),
('14', 'img_fashion/wacc/14.png', 'Black Sandles', 1299, 4),
('15', 'img_fashion/wacc/15.png', 'Yellow Earring', 999, 4),
('16', 'img_fashion/wacc/16.png', 'White Earring', 999, 4),
('17', 'img_fashion/wacc/17.png', 'Green Earring', 899, 4),
('18', 'img_fashion/wacc/18.png', 'Golden Earring', 899, 4),
('19', 'img_fashion/wacc/19.png', 'Golden Earring', 399, 4),
('2', 'img_fashion/wacc/2.png', 'Black Boots', 1299, 4),
('20', 'img_fashion/wacc/20.png', 'Black Sandles', 299, 3),
('21', 'img_fashion/wacc/21.png', 'Black and Golden Earring', 199, 3),
('22', 'img_fashion/wacc/22.png', 'Pink Sandles', 1299, 4),
('23', 'img_fashion/wacc/23.png', 'Pink and White Shoes', 1399, 4),
('24', 'img_fashion/wacc/24.png', 'Pink Sandles', 1299, 4),
('25', 'img_fashion/wacc/25.png', 'Red Braclet', 299, 3),
('26', 'img_fashion/wacc/26.png', 'Red Earring', 299, 4),
('27', 'img_fashion/wacc/27.png', 'Blue Braclet', 1399, 4),
('28', 'img_fashion/wacc/28.png', 'White Shoes', 1999, 4),
('29', 'img_fashion/wacc/29.png', 'Red Earring', 199, 4),
('3', 'img_fashion/wacc/3.png', 'Orange Sandles', 1399, 4),
('30', 'img_fashion/wacc/30.png', 'Red Necklace', 2999, 4),
('31', 'img_fashion/wacc/31.png', 'Red Necklace', 2299, 5),
('32', 'img_fashion/wacc/32.png', 'Blue Necklace', 1359, 4),
('33', 'img_fashion/wacc/33.png', 'Red Sandles', 1999, 4),
('34', 'img_fashion/wacc/34.png', 'Yellow Braclet', 299, 3),
('4', 'img_fashion/wacc/4.png', 'Pink Shoes', 1999, 4),
('5', 'img_fashion/wacc/5.png', 'Blue Shoes', 2199, 4),
('6', 'img_fashion/wacc/6.png', 'Grey Shoes', 999, 4),
('7', 'img_fashion/wacc/7.png', 'Golden Braclet', 2299, 5),
('8', 'img_fashion/wacc/8.png', 'Blue Boots', 1359, 4),
('9', 'img_fashion/wacc/9.png', 'Red and Yellow Braclet', 199, 3);

-- --------------------------------------------------------

--
-- Table structure for table `wclothes`
--

CREATE TABLE `wclothes` (
  `img_nam` varchar(100) NOT NULL,
  `img_path` varchar(200) NOT NULL,
  `title` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wclothes`
--

INSERT INTO `wclothes` (`img_nam`, `img_path`, `title`, `price`, `rating`) VALUES
('1', 'img_fashion/wclothes/1.png', 'Green Top', 499, 4),
('10', 'img_fashion/wclothes/10.png', 'White Top', 699, 4),
('100', 'img_fashion/wacc/1.png', 'Blue Watch', 299, 3),
('101', 'img_fashion/wacc/10.png', 'Golden Braclet', 1299, 3),
('11', 'img_fashion/wclothes/11.png', 'Floral Top', 799, 4),
('111', 'img_fashion/wacc/11.png', 'Yellow Braclet', 199, 3),
('12', 'img_fashion/wclothes/12.png', 'Lemon Green Top', 899, 4),
('121', 'img_fashion/wacc/12.png', 'Pink Sandles', 2199, 4),
('13', 'img_fashion/wclothes/13.png', 'Pink and White Saree', 1599, 4),
('131', 'img_fashion/wacc/13.png', 'Golden Necklace', 2999, 4),
('14', 'img_fashion/wclothes/14.png', 'Yellow Top', 599, 4),
('141', 'img_fashion/wacc/14.png', 'Black Sandles', 1299, 4),
('15', 'img_fashion/wclothes/15.png', 'Green and Red Saree', 1899, 4),
('151', 'img_fashion/wacc/15.png', 'Yellow Earring', 999, 4),
('16', 'img_fashion/wclothes/16.png', 'Black Top', 799, 4),
('161', 'img_fashion/wacc/16.png', 'White Earring', 999, 4),
('17', 'img_fashion/wclothes/17.png', 'White and Black Top', 699, 4),
('171', 'img_fashion/wacc/17.png', 'Green Earring', 899, 4),
('18', 'img_fashion/wclothes/18.png', 'Red Floral Top', 999, 4),
('181', 'img_fashion/wacc/18.png', 'Golden Earring', 899, 4),
('19', 'img_fashion/wclothes/19.png', 'Blue Saree', 2199, 4),
('191', 'img_fashion/wacc/19.png', 'Golden Earring', 399, 4),
('2', 'img_fashion/wclothes/1.png', 'Yellow Top', 499, 4),
('20', 'img_fashion/wclothes/20.png', 'Purpul Top', 699, 4),
('200', 'img_fashion/wacc/2.png', 'Black Boots', 1299, 4),
('201', 'img_fashion/wacc/20.png', 'Black Sandles', 299, 3),
('21', 'img_fashion/wclothes/21.png', 'Pink  Top', 799, 4),
('211', 'img_fashion/wacc/21.png', 'Black and Golden Earring', 199, 3),
('22', 'img_fashion/wclothes/22.png', 'Red Top', 699, 4),
('221', 'img_fashion/wacc/22.png', 'Pink Sandles', 1299, 4),
('23', 'img_fashion/wclothes/23.png', 'Yellow Top', 599, 4),
('231', 'img_fashion/wacc/23.png', 'Pink and White Shoes', 1399, 4),
('24', 'img_fashion/wclothes/24.png', 'Green Top', 599, 4),
('241', 'img_fashion/wacc/24.png', 'Pink Sandles', 1299, 4),
('25', 'img_fashion/wclothes/25.png', 'White Saree', 1799, 4),
('251', 'img_fashion/wacc/25.png', 'Red Braclet', 299, 3),
('26', 'img_fashion/wclothes/26.png', 'Green Top', 699, 4),
('261', 'img_fashion/wacc/26.png', 'Red Earring', 299, 4),
('27', 'img_fashion/wclothes/27.png', 'White Top', 599, 4),
('271', 'img_fashion/wacc/27.png', 'Blue Braclet', 1399, 4),
('28', 'img_fashion/wclothes/28.png', 'Blue Top', 599, 4),
('281', 'img_fashion/wacc/28.png', 'White Shoes', 1999, 4),
('291', 'img_fashion/wacc/29.png', 'Red Earring', 199, 4),
('3', 'img_fashion/wclothes/3.png', 'Yellow Saree', 1999, 4),
('300', 'img_fashion/wacc/3.png', 'Orange Sandles', 1399, 4),
('301', 'img_fashion/wacc/30.png', 'Red Necklace', 2999, 4),
('311', 'img_fashion/wacc/31.png', 'Red Necklace', 2299, 5),
('321', 'img_fashion/wacc/32.png', 'Blue Necklace', 1359, 4),
('331', 'img_fashion/wacc/33.png', 'Red Sandles', 1999, 4),
('341', 'img_fashion/wacc/34.png', 'Yellow Braclet', 299, 3),
('4', 'img_fashion/wclothes/4.png', 'Black Saree', 1599, 4),
('400', 'img_fashion/wacc/4.png', 'Pink Shoes', 1999, 4),
('5', 'img_fashion/wclothes/5.png', 'Red and White Saree', 1599, 4),
('511', 'img_fashion/wacc/5.png', 'Blue Shoes', 2199, 4),
('6', 'img_fashion/wclothes/6.png', 'Yellow Saree', 1499, 4),
('611', 'img_fashion/wacc/6.png', 'Grey Shoes', 999, 4),
('7', 'img_fashion/wclothes/7.png', 'Red Saree', 1399, 4),
('711', 'img_fashion/wacc/7.png', 'Golden Braclet', 2299, 5),
('8', 'img_fashion/wclothes/8.png', 'Blue and Yellow Dress', 1299, 4),
('811', 'img_fashion/wacc/8.png', 'Blue Boots', 1359, 4),
('9', 'img_fashion/wclothes/9.png', 'Red Top', 399, 4),
('911', 'img_fashion/wacc/9.png', 'Red and Yellow Braclet', 199, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `custompro`
--
ALTER TABLE `custompro`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `macc`
--
ALTER TABLE `macc`
  ADD PRIMARY KEY (`img_nam`);

--
-- Indexes for table `mclothes`
--
ALTER TABLE `mclothes`
  ADD PRIMARY KEY (`img_nam`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wacc`
--
ALTER TABLE `wacc`
  ADD PRIMARY KEY (`img_nam`);

--
-- Indexes for table `wclothes`
--
ALTER TABLE `wclothes`
  ADD PRIMARY KEY (`img_nam`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
