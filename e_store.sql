-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2021 at 02:07 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `unit-price` int(11) NOT NULL,
  `unit_price_sale` int(11) NOT NULL,
  `top_selling` int(11) NOT NULL,
  `pic-path` varchar(150) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `unit-price`, `unit_price_sale`, `top_selling`, `pic-path`, `stock`) VALUES
(1, 'RELAXED FIT: HARPER – TREFTON', 100, 200, 1, 'img/prod1.jpg', 5),
(2, 'Nike free 5', 300, 200, 1, 'img/prod2.jpg', 28),
(3, 'Saucony Ride 7', 450, 150, 1, 'img/prod3.jpg', 15),
(4, 'Puma Ignite PWRCOOL', 1000, 700, 1, 'img/prod4.jpg', 3),
(5, 'Adidas Ultra Boost', 200, 0, 0, 'img/prod5.jpg', 2),
(6, 'Saucony Triumph ISO', 300, 0, 0, 'img/prod6.jpg', 45),
(7, 'Nike Air Pegasus Zoom', 450, 0, 0, 'img/prod7.jpg', 5),
(8, 'Adidas Adizero Adios Boost 2.0', 700, 0, 0, 'img/prod8.jpg', 1),
(11, 'Newton Gravity III', 560, 0, 0, 'img/prod9.jpg', 1),
(12, 'Saucony Virrata', 699, 399, 0, 'img/prod10.jpg', 5),
(13, 'Adidas Energy Boost 2', 455, 0, 0, 'img/prod11.jpg', 11);

-- --------------------------------------------------------

--
-- Table structure for table `sign_up`
--

CREATE TABLE `sign_up` (
  `id` int(11) NOT NULL,
  `name` varchar(70) NOT NULL,
  `email` varchar(80) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `pic-path` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `sign_up`
--

INSERT INTO `sign_up` (`id`, `name`, `email`, `pass`, `pic-path`) VALUES
(1, 'Ibrahi', '0', '4554365', 'img/account-pic.ico'),
(3, 'Ibrahim3zazy', 'I.3zazy@gmail.com', '01145452440a', 'img/me.png'),
(28, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_order`
--

CREATE TABLE `user_order` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total-price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `user_order`
--

INSERT INTO `user_order` (`id`, `user_id`, `product_id`, `quantity`, `total-price`) VALUES
(244, 1, 1, 1, 0),
(245, 1, 2, 0, 0),
(247, 1, 4, 0, 0),
(249, 1, 3, 0, 0),
(251, 3, 3, 0, 0),
(252, 3, 4, 0, 0),
(253, 3, 1, 2, 0),
(255, 3, 2, 5, 0),
(256, 28, 1, 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sign_up`
--
ALTER TABLE `sign_up`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user_order`
--
ALTER TABLE `user_order`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `sign_up`
--
ALTER TABLE `sign_up`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `user_order`
--
ALTER TABLE `user_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=257;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
