-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2024 at 10:21 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chococo`
--
DROP DATABASE `chococo`;
CREATE DATABASE IF NOT EXISTS `chococo` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `chococo`;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `Product_id` int(11) NOT NULL,
  `Product_image` varchar(100) NOT NULL,
  `Product_price` float NOT NULL,
  `Product_name` varchar(100) NOT NULL,
  `type_produit` varchar(20) NOT NULL,
  `catalog_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`Product_id`, `Product_image`, `Product_price`, `Product_name`, `type_produit`, `catalog_id`) VALUES
(3, '../../assets/product_images/8f22cf4e9743685f072c4e763cdbad98(1).jpg', 10, 'testing', 'produit', 1),
(4, '../../assets/product_images/193a47a9-9eec-42fc-ad55-82fdb7102606.jpg', 20, 'testingooo', 'produit', 1),
(5, '../../assets/product_images/a6e3a88a55e24f91e90e30cfc2040cbc.jpg', 50, 'oh shit', 'produit', 1),
(6, '../../assets/product_images/pic.png', 300, 'nice', 'produit', 2),
(7, '../../assets/product_images/tetiana-bykovets-H22N-9s8AUw-unsplash.jpg', 10, 'yo bro', 'produit', 1),
(8, '../../assets/COFFRETS/test.jpg', 100, 'COFFRET1', 'coffret', NULL),
(9, '../../assets/COFFRETS/test.jpg', 200, 'COFFRET2', 'coffret', NULL),
(10, '../../assets/COFFRETS/test.jpg', 450, 'COFFRET3', 'coffret', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`Product_id`),
  ADD KEY `catalog_id` (`catalog_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `Product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`catalog_id`) REFERENCES `catalog` (`catalog_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
