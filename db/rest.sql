-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2022 at 05:49 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rest1`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `product_name` varchar(40) NOT NULL,
  `product_price` varchar(40) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL,
  `total_price` varchar(12) NOT NULL,
  `product_code` varchar(16) NOT NULL,
  `ordered` varchar(10) NOT NULL,
  `customer_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `product_name`, `product_price`, `product_image`, `qty`, `total_price`, `product_code`, `ordered`, `customer_id`) VALUES
(6, 'yy', '6000', 'images/product-4.jpeg', 3, '18000', '', '1', 35205617),
(49, 'rounded dark sun glasses', '800', 'images/woman-posing-for-photo-shoot-1689731.jpg', 1, '800', 'qUkFOfOTpM', '1', 35205617),
(50, 'bolton', '4000', 'images/black-casual-classic-clothes-292999.jpg', 1, '4000', '9b4VwGgoym', '1', 35205617),
(51, 'dd', '1800', 'images/yellow-steel-bathtub-1630344.jpg', 1, '1800', 'GIXLesqA9g', '1', 35205617),
(52, 'ty', '88', 'images/product-1.jpeg', 1, '88', '1001f', '1', 35205617),
(53, 'dd5', '66', 'images/product-3.jpeg', 1, '66', 'p1001', '1', 35205617),
(54, 'ty', '88', 'images/product-1.jpeg', 1, '88', '1001f', '1', 35205617),
(55, 'hh', '89', 'images/product-2.jpeg', 1, '89', '1000d', '1', 35205617),
(57, 'hh', '89', 'images/product-2.jpeg', 1, '89', '1000d', '1', 35205617),
(59, 'ty', '88', 'images/product-1.jpeg', 1, '88', '1001f', '1', 35205617),
(60, 'ty', '555', 'images/product-7.jpeg', 1, '555', 'a000d', '1', 35205617),
(62, 'ty', '88', 'images/product-1.jpeg', 1, '88', '1001f', '1', 37532670),
(63, 'ui', '9000', 'images/product-5.jpeg', 3, '27000', 'asd2', '1', 37532670),
(64, 'ty', '88', 'images/product-1.jpeg', 1, '88', '1001f', '1', 87654321),
(65, 'hh', '89', 'images/product-2.jpeg', 1, '89', '1000d', '1', 87654321),
(66, 'dd5', '66', 'images/product-3.jpeg', 1, '66', 'p1001', '1', 87654321),
(68, 'grade', '345', 'images/classic-clothes-commerce-fashion-298863.jpg', 1, '345', '9876j', '1', 87654321),
(69, 'shoe1', '4000', 'images/shoe.jpg', 1, '4000', '7yurw6O5qW', '1', 87654321),
(70, 'shoe2', '2500', 'images/andres-jasso-PqbL_mxmaUE-unsplash.jpg', 1, '2500', 'Zma2XUaNEI', '1', 87654321),
(71, 'wertyuiop', '44444444', 'images/yellow-backpack-with-five-assorted-stickers-on-grey-metal-934673.jpg', 1, '44444444', 'V4R8658s94', '1', 35205617),
(72, 'ui', '9000', 'images/food1.jpg', 1, '9000', 'vh111', '1', 35205617),
(73, 'sony-headphones', '6100', 'images/sony-white-headphones-164710 (1).jpg', 1, '6100', 'wjnW3GcdEU', '1', 35205617),
(74, 'ty', '555', 'images/product-7.jpeg', 1, '555', 'a000d', '0', 35205617),
(77, 'cake', '111', 'a.jpg', 1, '111', 'fgh56', '1', 1),
(79, 'cake', '110', '234567.jpg', 1, '110', 'fgh57', '1', 1),
(82, 'cake', '111', 'a.jpg', 1, '111', 'fgh56', '1', 2),
(83, 'cake', '110', '234567.jpg', 1, '110', 'fgh57', '1', 2),
(84, 'vanilla cake', '1000', 'image-3.jpeg', 1, '1000', 'fgh58', '1', 1),
(85, 'cake milk', '1200', 'image-4.jpeg', 1, '1200', 'fgh59', '1', 1),
(86, 'stawberry', '1200', 'image-5.jpeg', 1, '1200', 'fgh60', '1', 1),
(87, 'vanilla cake', '1000', 'image-3.jpeg', 1, '1000', 'fgh58', '1', 1),
(88, 'cake milk', '1200', 'image-4.jpeg', 1, '1200', 'fgh59', '1', 1),
(89, 'cake', '111', 'image-2.jpeg', 1, '111', 'fgh56', '1', 1),
(90, 'cake', '110', 'image-1.jpeg', 1, '110', 'fgh57', '1', 1),
(91, 'cake', '110', 'image-1.jpeg', 1, '110', 'fgh57', '1', 1),
(92, 'cake', '111', 'image-2.jpeg', 1, '111', 'fgh56', '1', 1),
(100, 'cake', '110', 'image-1.jpeg', 1, '110', 'fgh57', '1', 1),
(101, 'cake', '111', 'image-2.jpeg', 1, '111', 'fgh56', '1', 1),
(102, 'cake', '110', 'image-1.jpeg', 1, '110', 'fgh57', '1', 1),
(103, 'vanilla cake', '1000', 'image-3.jpeg', 1, '1000', 'fgh58', '1', 1),
(104, 'cake', '111', 'image-2.jpeg', 1, '111', 'fgh56', '1', 1),
(105, 'cake', '111', 'image-2.jpeg', 1, '111', 'fgh56', '1', 1),
(106, 'cake', '110', 'image-1.jpeg', 1, '110', 'fgh57', '1', 1),
(107, 'cake', '110', 'image-1.jpeg', 1, '110', 'fgh57', '1', 1),
(108, 'cake milk', '1200', 'image-2.jpeg', 1, '1200', 'fgh59', '1', 1),
(109, 'cake', '111', 'image-10.jpg', 1, '111', 'fgh56', '1', 1),
(110, 'Noodles', '1234', 'image-12.jpg\n', 1, '1234', '3535df', '1', 1),
(111, 'Milk shake', '1222', 'image-15.jpg', 1, '1222', '1050ad', '1', 1),
(112, 'Nyama Choma', '111', 'image-10.jpg', 1, '111', 'fgh56', '0', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customers_id` int(11) NOT NULL,
  `firstname` varchar(12) NOT NULL,
  `lastname` varchar(12) NOT NULL,
  `id_number` int(12) NOT NULL,
  `phone_number` int(16) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(16) NOT NULL,
  `address` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customers_id`, `firstname`, `lastname`, `id_number`, `phone_number`, `email`, `password`, `address`) VALUES
(1, 'bradox', 'Kamau', 12345678, 123456789, 'bradoxian254@gmail.com', '12345678', 'thika');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `Order_id` int(11) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `products` varchar(600) NOT NULL,
  `price` int(8) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` int(15) NOT NULL,
  `address` varchar(150) DEFAULT NULL,
  `name` text NOT NULL,
  `pmode` varchar(30) NOT NULL,
  `order_number` varchar(20) NOT NULL,
  `date` varchar(100) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`Order_id`, `customer_id`, `products`, `price`, `email`, `phone`, `address`, `name`, `pmode`, `order_number`, `date`, `status`) VALUES
(2, 1, 'vanilla cake(1),cake milk(1)', 2200, 'bradoxian254@gmail.com', 123456789, 'Nairobi CBD opp Imenti', 'bradox Kamau', 'paypal', 'rgM6EA78wsd', NULL, 'ordered'),
(3, 1, 'cake(1),cake(1)', 221, 'bradoxian254@gmail.com', 123456789, 'Nairobi CBD opp Imenti', 'bradox Kamau', 'paypal', 'EgD4LeXiuHj', '21-07-27', 'ordered'),
(4, 1, 'cake(1),cake(1)', 221, 'bradoxian254@gmail.com', 123456789, 'Nairobi CBD opp Imenti', 'bradox Kamau', 'm-pesa', 'iRSk7F3cXor', '2021-07-30', 'ordered'),
(19, 1, 'cake(1),cake(1)', 221, 'bradoxian254@gmail.com', 123456789, 'thika', 'bradox Kamau', 'cod', 'q95SZobUu3d', '2022-03-17', 'ordered'),
(20, 1, 'cake(1)', 110, 'bradoxian254@gmail.com', 123456789, 'thika', 'bradox Kamau', 'cod', 'RyF2OShdkvq', '2022-09-08', 'ordered'),
(21, 1, 'cake milk(1)', 1200, 'bradoxian254@gmail.com', 123456789, 'thika', 'bradox Kamau', 'paypal', 'S7UE8hp2Xeu', '2022-09-14', 'ordered'),
(22, 1, 'cake(1),Noodles(1),Milk shake(1)', 2567, 'bradoxian254@gmail.com', 123456789, 'thika', 'bradox Kamau', 'paypal', 'd4QGjEX52us', '2022-09-15', 'ordered');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(20) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_type` varchar(20) NOT NULL,
  `product_code` varchar(20) NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `unique_code` varchar(40) DEFAULT NULL,
  `status` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `product_price`, `product_type`, `product_code`, `product_image`, `unique_code`, `status`) VALUES
(1, 'Nyama Choma', 111, 'vanila', 'fgh56', 'image-10.jpg', NULL, NULL),
(2, 'Pizza', 110, 'vanila', 'fgh57', 'image-9.jpg', NULL, NULL),
(3, 'Fries', 1000, 'vanila', 'fgh58', 'image-13.jpg', NULL, NULL),
(4, 'Stew', 1200, 'vanila', 'fgh59', 'image-8.jpg', NULL, NULL),
(5, 'Toasted Bread', 1200, 'vanila', 'fgh60', 'image-11.jpg', NULL, NULL),
(6, 'vanilla cake', 1000, 'vanila', 'fgh61', 'image-2.jpeg', NULL, NULL),
(7, 'chicken wings', 1200, 'vanila', 'fgh62', 'image-14.jpg', NULL, NULL),
(18, 'Milk shake', 1222, 'chicken wings', '1050ad', 'image-15.jpg', NULL, NULL),
(19, 'Noodles', 1234, 'stach', '3535df', 'image-12.jpg\n', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `email` varchar(40) NOT NULL,
  `firstname` varchar(15) NOT NULL,
  `lastname` varchar(15) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` varchar(16) NOT NULL,
  `user_id` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email`, `firstname`, `lastname`, `username`, `password`, `user_id`) VALUES
('joyce@gmail.com', 'joyce', 'joyce', 'joyce', 'admin', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customers_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`Order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customers_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `Order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
