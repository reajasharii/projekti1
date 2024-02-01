-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2024 at 08:07 PM
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
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` float(10,2) NOT NULL,
  `description` varchar(400) NOT NULL,
  `qty` int(11) NOT NULL,
  `images` text NOT NULL,
  `created_in` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `admin_id`, `title`, `price`, `description`, `qty`, `images`, `created_in`) VALUES
(15, 1, 'CARAMEL CAKE', 4.00, 'Indulgent layers of moist cake infused with rich caramel flavor, delivering a delightful and decadent dessert experience.', 6, '[\"download (5).jpg\"]', '2024-02-01 18:37:40'),
(16, 1, 'DONUTS', 1.80, 'A bakery celebrated for its delicious and visually captivating donuts, featuring a variety of flavors and dazzling designs that add a touch of glamour to each treat.', 12, '[\"download (13).jpg\"]', '2024-02-01 18:51:34'),
(17, 1, 'CHOCOLATE CAKE', 3.90, 'Savor our rich chocolate torte: pure indulgence in every bite, perfect for any occasion.', 15, '[\"download (6).jpg\"]', '2024-02-01 18:52:31'),
(18, 1, 'CUPCAKE', 1.90, 'A miniature delight of moist cake, often topped with creamy frosting or decorative elements, providing a delightful and portable sweet treat for indulgent moments', 20, '[\"images (11).jpg\"]', '2024-02-01 18:58:58'),
(19, 1, 'MOCHA', 3.70, 'Espresso with melted chocolate and milk, garnished with caramel drizzle and whipped cream.', 5, '[\"download (1).jpg\"]', '2024-02-01 19:03:38');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` tinyint(4) NOT NULL DEFAULT 0,
  `created_in` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`, `is_admin`, `created_in`) VALUES
(1, 'reajashari@gmail.com', 'reaa', '$2y$10$ECVycm7vBukPd9IxnK9Hye7YdF2cn9jaiEJngbJwLCgWM3.2LXTH6', 0, '2024-01-30 16:09:58'),
(2, 'rea@gmail.com', 'rea', '$2y$10$DCRmRTfKxa1YNdo2trQtkeRPyRf/pLiN1wMc3T5J.c/dBgo7GWxC6', 1, '2024-01-30 16:11:30'),
(3, 'elsa@hotmail.com', 'elsa1', '$2y$10$KkhNf1slL8dEAO0PJXubLOqdjRa2MQbVvUufUMf3ZvJLo9kvSNUwu', 0, '2024-01-30 18:57:55'),
(5, 'anisa@gmail.com', 'anisa', '$2y$10$yvGQB/iLnNDUS3765B9hhupI1Ej8HdGFyNsRZEWNsleDj7YU2rONq', 0, '2024-01-30 18:59:24'),
(6, 'reajashari04@gmail.com', 'rea1', '$2y$10$oHENFEL7EpvRULz.98fYvuzMxhUjpNsZYtCY4NzW1EFn5UmzuOAh.', 1, '2024-01-30 19:34:39'),
(7, 'rozafa@hotmail.com', 'roza', '$2y$10$wNJsFtOHFmG.cYOE2qJD.uZrvaX4dvMSEFv9OrukdTicyfFUd1HIq', 0, '2024-02-01 19:01:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
