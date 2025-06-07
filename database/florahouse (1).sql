-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2025 at 08:36 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `florahouse`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(4) NOT NULL,
  `product_id` int(4) NOT NULL,
  `quantity` int(4) NOT NULL,
  `session_id` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `product_id`, `quantity`, `session_id`) VALUES
(55, 3, 1, '::1'),
(56, 4, 1, '::1'),
(57, 3, 1, '::1'),
(58, 3, 1, '::1'),
(59, 4, 1, '::1'),
(60, 1, 1, '::1'),
(61, 6, 1, '::1');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `sno` int(4) NOT NULL,
  `main_menuname` varchar(255) NOT NULL,
  `submenu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`sno`, `main_menuname`, `submenu`) VALUES
(1, 'plants', 'indoor plants'),
(2, 'plants', 'outdoor plants'),
(3, 'plants', 'Low Maintenance Plants'),
(4, 'plants', 'Air Purifying Plants'),
(5, 'plants', 'Low Light Plants'),
(6, 'plants', 'Hanging Plants'),
(7, 'plants', 'Medicinal and Aromatic Plants'),
(8, 'plants', 'Pet Friendly Plants'),
(9, 'plants', 'Fruit Plants'),
(10, 'plants', 'Flowering Plants'),
(11, 'seeds', 'Seeds Kits'),
(12, 'seeds', 'Fruit Seeds'),
(13, 'seeds', 'Flower Bulbs'),
(14, 'seeds', 'Herbal seeds'),
(15, 'seeds', 'Micro Green Seeds'),
(16, 'seeds', 'Vegitable Seeds'),
(17, 'Planters_and_pots', 'Plastic Pots'),
(18, 'Planters_and_pots', 'Ceramic Pots'),
(19, 'Planters_and_pots', 'Metal Planters'),
(20, 'Planters_and_pots', 'Wooder Planters'),
(21, 'Planters_and_pots', '3D Printing Pots'),
(22, 'Planters_and_pots', 'Hanging Planters'),
(23, 'Planters_and_pots', 'Plant Stands'),
(24, 'Planters_and_pots', 'Seedling Tray'),
(25, 'Planters_and_pots', 'Basket Planter'),
(26, 'Plant_care', 'Potting Mix and Fertilizer'),
(27, 'Plant_care', 'Garden Tools'),
(28, 'Plant_care', 'Watering Tools'),
(29, 'Plant_care', 'Garden Decor Accessories'),
(30, 'Plant_care', 'Pest Controll'),
(31, 'gifting', 'Womens Day Gift'),
(32, 'gifting', 'Corporate Gifting'),
(33, 'gifting', 'Personilized Gifting'),
(34, 'gifting', 'Gift Cards ');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_image` text NOT NULL,
  `price` int(12) NOT NULL,
  `product_des` text NOT NULL,
  `catogory` varchar(255) NOT NULL,
  `catogory_id` int(11) NOT NULL,
  `shop_by_cata` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_image`, `price`, `product_des`, `catogory`, `catogory_id`, `shop_by_cata`) VALUES
(1, 'Flamingo Plant', 'flamingo plant.jpg', 400, 'Light Requirements Place your Money Plant Golden in bright, indirect light for optimal growth. During the day, remember to shield it from the harsh afternoon sun. However, in the morning and evening, you can place it directly in the soft sunlight to make it happier! Additionally, the Golden Money Plant can also do well in low light conditions. So, if you are unable to give it some place that receives bright, indirect sunlight, placing it in a slightly shaded area will also do the trick.', 'indoor plants', 1, 'best_seller'),
(2, 'product 2', 'flamingo plant.jpg', 400, 'Light Requirements Place your Money Plant Golden in bright, indirect light for optimal growth. During the day, remember to shield it from the harsh afternoon sun. However, in the morning and evening, you can place it directly in the soft sunlight to make it happier! Additionally, the Golden Money Plant can also do well in low light conditions. So, if you are unable to give it some place that receives bright, indirect sunlight, placing it in a slightly shaded area will also do the trick.', 'Hanging Plants', 6, 'easy_to_care'),
(3, 'Flamingo Plant', 'flamingo plant.jpg', 400, 'Light Requirements Place your Money Plant Golden in bright, indirect light for optimal growth. During the day, remember to shield it from the harsh afternoon sun. However, in the morning and evening, you can place it directly in the soft sunlight to make it happier! Additionally, the Golden Money Plant can also do well in low light conditions. So, if you are unable to give it some place that receives bright, indirect sunlight, placing it in a slightly shaded area will also do the trick.', 'indoor plants', 1, 'xl_plant'),
(4, 'Flamingo Plant', 'flamingo plant.jpg', 400, 'Light Requirements Place your Money Plant Golden in bright, indirect light for optimal growth. During the day, remember to shield it from the harsh afternoon sun. However, in the morning and evening, you can place it directly in the soft sunlight to make it happier! Additionally, the Golden Money Plant can also do well in low light conditions. So, if you are unable to give it some place that receives bright, indirect sunlight, placing it in a slightly shaded area will also do the trick.', 'indoor plants', 1, 'ceramic_pots'),
(5, 'product 2', 'flamingo plant.jpg', 400, 'Light Requirements Place your Money Plant Golden in bright, indirect light for optimal growth. During the day, remember to shield it from the harsh afternoon sun. However, in the morning and evening, you can place it directly in the soft sunlight to make it happier! Additionally, the Golden Money Plant can also do well in low light conditions. So, if you are unable to give it some place that receives bright, indirect sunlight, placing it in a slightly shaded area will also do the trick.', 'Hanging Plants', 6, 'vegetable_seeds'),
(6, 'Flamingo Plant', 'flamingo plant.jpg', 400, 'Light Requirements Place your Money Plant Golden in bright, indirect light for optimal growth. During the day, remember to shield it from the harsh afternoon sun. However, in the morning and evening, you can place it directly in the soft sunlight to make it happier! Additionally, the Golden Money Plant can also do well in low light conditions. So, if you are unable to give it some place that receives bright, indirect sunlight, placing it in a slightly shaded area will also do the trick.', 'indoor plants', 1, 'fertilizers'),
(7, 'product 2', 'flamingo plant.jpg', 400, 'Light Requirements Place your Money Plant Golden in bright, indirect light for optimal growth. During the day, remember to shield it from the harsh afternoon sun. However, in the morning and evening, you can place it directly in the soft sunlight to make it happier! Additionally, the Golden Money Plant can also do well in low light conditions. So, if you are unable to give it some place that receives bright, indirect sunlight, placing it in a slightly shaded area will also do the trick.', 'Hanging Plants', 6, 'fertilizers'),
(8, 'Flamingo Plant', 'flamingo plant.jpg', 400, 'Light Requirements Place your Money Plant Golden in bright, indirect light for optimal growth. During the day, remember to shield it from the harsh afternoon sun. However, in the morning and evening, you can place it directly in the soft sunlight to make it happier! Additionally, the Golden Money Plant can also do well in low light conditions. So, if you are unable to give it some place that receives bright, indirect sunlight, placing it in a slightly shaded area will also do the trick.', 'indoor plants', 1, 'vegetable_seeds'),
(9, 'Flamingo Plant', 'flamingo plant.jpg', 400, 'Light Requirements Place your Money Plant Golden in bright, indirect light for optimal growth. During the day, remember to shield it from the harsh afternoon sun. However, in the morning and evening, you can place it directly in the soft sunlight to make it happier! Additionally, the Golden Money Plant can also do well in low light conditions. So, if you are unable to give it some place that receives bright, indirect sunlight, placing it in a slightly shaded area will also do the trick.', 'indoor plants', 1, 'vegetable_seeds'),
(10, 'product 2', 'flamingo plant.jpg', 400, 'Light Requirements Place your Money Plant Golden in bright, indirect light for optimal growth. During the day, remember to shield it from the harsh afternoon sun. However, in the morning and evening, you can place it directly in the soft sunlight to make it happier! Additionally, the Golden Money Plant can also do well in low light conditions. So, if you are unable to give it some place that receives bright, indirect sunlight, placing it in a slightly shaded area will also do the trick.', 'Hanging Plants', 6, 'xl_plant');

-- --------------------------------------------------------

--
-- Table structure for table `product_order`
--

CREATE TABLE `product_order` (
  `sno` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Address` text NOT NULL,
  `country` varchar(200) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_order`
--

INSERT INTO `product_order` (`sno`, `Name`, `Email`, `Address`, `country`, `product_id`) VALUES
(15, 'gaurav sharma', 'gauarvsharma@gmail.com', 'house no 98', 'united state california 110094', 4),
(16, 'gaurav sharma', 'gauarvsharma@gmail.com', 'house no 98', 'united state california 110094', 8),
(17, 'gaurav sharma', 'gauarvsharma@gmail.com', 'house no 98', 'united state california 110094', 5),
(18, 'gaurav sharma', 'gauarvsharma@gmail.com', 'house no 98', 'united state california 110094', 4),
(19, 'gaurav sharma', 'gauarvsharma@gmail.com', 'house no 98', 'united state california 110094', 8),
(20, 'gaurav sharma', 'gauarvsharma@gmail.com', 'house no 98', 'united state california 110094', 5),
(21, ' ', '', '', '  ', 3),
(22, ' ', '', '', '  ', 4),
(23, ' ', '', '', '  ', 3),
(24, ' ', '', '', '  ', 3),
(25, ' ', '', '', '  ', 4),
(26, ' ', '', '', '  ', 1),
(27, ' ', '', '', '  ', 6);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `sno` int(4) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` int(12) NOT NULL,
  `user` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`sno`, `email`, `mobile`, `user`, `password`) VALUES
(1, 'sharma1p9@gmail.com', 435345, 'Pawan', '123'),
(2, 'sharma1p9@gmail.com', 435345, 'dfgdg', '123'),
(3, 'pawansharma_mca23_25@its.edu.in', 1234, 'dfgdg', '123'),
(4, 'sharma1p@gmail.com', 434, 'sdd', '123'),
(5, 'gaurav@gmaill.com', 223455, 'gaurav', 'qwert');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_order`
--
ALTER TABLE `product_order`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `sno` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `product_order`
--
ALTER TABLE `product_order`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `sno` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
