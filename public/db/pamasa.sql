-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 30, 2021 at 01:38 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pamasa`
--

-- --------------------------------------------------------

--
-- Table structure for table `branche`
--

CREATE TABLE `branche` (
  `id` int(11) NOT NULL,
  `names` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `employeeId` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branche`
--

INSERT INTO `branche` (`id`, `names`, `location`, `description`, `employeeId`, `created_at`, `status`, `updated_at`) VALUES
(1, 'bUN-Oriantal', 'Bunia', 'Vet', 8, '2021-02-18 18:08:29', 1, '2021-04-08 03:23:05'),
(2, 'Mavivi', 'Beni', '', 2, '2021-02-18 12:24:16', 2, '2021-04-20 03:18:14');

-- --------------------------------------------------------

--
-- Table structure for table `brancheproduct`
--

CREATE TABLE `brancheproduct` (
  `id` int(11) NOT NULL,
  `infoId` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `usedQuantity` int(11) NOT NULL,
  `sellingprice` int(11) NOT NULL,
  `lastprice` double NOT NULL,
  `productId` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brancheproduct`
--

INSERT INTO `brancheproduct` (`id`, `infoId`, `quantity`, `usedQuantity`, `sellingprice`, `lastprice`, `productId`, `created_at`, `updated_at`) VALUES
(1, 1, 2000, 11, 50, 49, 1, '2021-04-09 11:01:38', '2021-04-20 03:21:36'),
(2, 1, 2000, 131, 53, 50, 2, '2021-04-09 11:02:27', '2021-04-20 03:21:30'),
(3, 1, 20, 18, 23, 20, 3, '2021-04-09 11:03:37', '2021-04-13 03:36:05'),
(4, 1, 200, 54, 4000, 3800, 4, '2021-04-09 11:04:16', '2021-04-20 03:21:18'),
(5, 1, 180, 38, 4050, 3900, 5, '2021-04-09 11:05:12', '2021-04-20 03:21:08'),
(6, 2, 100, 25, 150, 130, 9, '2021-04-13 03:56:20', '2021-04-21 06:49:43'),
(7, 2, 100, 35, 150, 130, 9, '2021-04-13 03:57:05', '2021-04-13 04:06:54'),
(8, 2, 1000, 23, 160, 140, 8, '2021-04-13 03:57:36', '2021-04-21 06:49:35'),
(9, 2, 1000, 40, 40, 40, 2, '2021-04-13 03:59:06', '2021-04-21 06:49:21'),
(10, 3, 70, 19, 200, 200, 10, '2021-04-13 04:54:44', '2021-04-13 04:55:50');

-- --------------------------------------------------------

--
-- Table structure for table `brancheproductinfo`
--

CREATE TABLE `brancheproductinfo` (
  `id` int(11) NOT NULL,
  `brancheId` int(11) NOT NULL,
  `createdBy` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brancheproductinfo`
--

INSERT INTO `brancheproductinfo` (`id`, `brancheId`, `createdBy`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 0, '2021-04-09 11:01:38', '2021-04-09 13:01:38'),
(2, 1, 1, 0, '2021-04-13 03:56:20', '2021-04-13 05:56:20'),
(3, 1, 1, 0, '2021-04-13 04:54:44', '2021-04-13 06:54:44');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `names` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `names`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Flacon', '', '2021-02-16 19:10:49', '2021-02-16 20:10:49'),
(2, 'Sachet', '', '2021-02-16 19:10:49', '2021-02-16 20:10:49'),
(3, 'Cartons', '', '2021-02-16 19:11:33', '2021-02-16 20:11:33'),
(4, 'Materiel', '', '2021-02-16 19:11:33', '2021-02-16 20:11:33');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `names` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL,
  `brancheId` int(11) NOT NULL,
  `createdBy` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `names`, `email`, `address`, `phone`, `brancheId`, `createdBy`, `created_at`, `updated_at`) VALUES
(1, 'client', '', 'goma', 977936966, 2, 9, '2021-04-09 11:15:42', '2021-04-09 13:15:42'),
(2, 'tresor vyambwera', 'tvyambwera@gmail.com', 'goma, katindo', 998571399, 1, 1, '2021-04-13 04:02:32', '2021-04-13 06:02:32');

-- --------------------------------------------------------

--
-- Table structure for table `infoinvoices`
--

CREATE TABLE `infoinvoices` (
  `id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `invoiceId` int(11) NOT NULL,
  `unitprice` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `infoinvoices`
--

INSERT INTO `infoinvoices` (`id`, `quantity`, `productId`, `invoiceId`, `unitprice`, `created_at`, `updated_at`) VALUES
(1, 17, 5, 1, 4050, '2021-04-09 11:05:50', '2021-04-09 13:05:50'),
(2, 15, 4, 1, 4000, '2021-04-09 11:06:52', '2021-04-09 13:06:52'),
(3, 5, 3, 1, 23, '2021-04-09 11:07:30', '2021-04-09 13:07:30'),
(4, 50, 2, 1, 53, '2021-04-09 11:08:38', '2021-04-09 13:08:38'),
(5, 50, 2, 1, 52, '2021-04-09 11:08:53', '2021-04-09 13:08:53'),
(7, 10, 5, 2, 4050, '2021-04-13 03:35:35', '2021-04-13 05:35:35'),
(8, 13, 4, 2, 4000, '2021-04-13 03:35:56', '2021-04-13 05:35:56'),
(9, 13, 3, 2, 23, '2021-04-13 03:36:05', '2021-04-13 05:36:05'),
(10, 20, 2, 2, 53, '2021-04-13 03:36:18', '2021-04-13 05:36:18'),
(11, 10, 9, 3, 40, '2021-04-13 04:04:32', '2021-04-13 06:04:32'),
(14, 15, 7, 3, 130, '2021-04-13 04:06:54', '2021-04-13 06:06:54'),
(15, 10, 10, 4, 200, '2021-04-13 04:55:34', '2021-04-13 06:55:34'),
(16, 9, 10, 4, 200, '2021-04-13 04:55:50', '2021-04-13 06:55:50'),
(17, 11, 5, 5, 4050, '2021-04-20 03:21:08', '2021-04-20 05:21:08'),
(18, 11, 4, 5, 4000, '2021-04-20 03:21:18', '2021-04-20 05:21:18'),
(19, 11, 2, 5, 53, '2021-04-20 03:21:30', '2021-04-20 05:21:30'),
(20, 11, 1, 5, 50, '2021-04-20 03:21:36', '2021-04-20 05:21:36'),
(21, 20, 9, 6, 40, '2021-04-21 06:49:21', '2021-04-21 08:49:21'),
(22, 23, 8, 6, 160, '2021-04-21 06:49:35', '2021-04-21 08:49:35'),
(23, 25, 6, 6, 150, '2021-04-21 06:49:43', '2021-04-21 08:49:43');

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` int(11) NOT NULL,
  `clientId` int(11) NOT NULL,
  `brancheId` int(11) NOT NULL,
  `createdBy` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `clientId`, `brancheId`, `createdBy`, `created_at`, `status`, `updated_at`) VALUES
(1, 1, 2, 9, '2021-04-09 11:05:50', 0, '2021-04-09 13:05:50'),
(2, 1, 2, 3, '2021-04-13 03:35:35', 0, '2021-04-13 05:35:35'),
(3, 2, 1, 1, '2021-04-13 04:04:32', 0, '2021-04-13 06:04:32'),
(4, 1, 1, 1, '2021-04-13 04:55:34', 0, '2021-04-13 06:55:34'),
(5, 1, 2, 9, '2021-04-20 03:21:08', 0, '2021-04-20 05:21:08'),
(6, 1, 1, 1, '2021-04-21 06:49:21', 0, '2021-04-21 08:49:21');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `barcode` varchar(20) NOT NULL,
  `names` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `purchasedprice` int(11) NOT NULL,
  `sellingPrice` int(11) NOT NULL,
  `usedQuantity` int(11) NOT NULL,
  `categoryId` int(11) NOT NULL,
  `description` varchar(500) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `createdBy` int(11) NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `barcode`, `names`, `quantity`, `purchasedprice`, `sellingPrice`, `usedQuantity`, `categoryId`, `description`, `created_at`, `createdBy`, `updated_at`) VALUES
(1, '0', 'levamisole', 7065, 38, 41, 2000, 1, '', '2021-03-29 12:55:23', 1, '2021-04-09 13:01:38'),
(2, '0', 'leva', 15800, 25, 32, 4000, 1, '', '2021-03-29 12:56:26', 1, '2021-04-13 05:59:06'),
(3, '0', 'kilolina', 80, 7, 10, 40, 1, 'kilonina pour maison', '2021-03-31 12:59:37', 2, '2021-04-09 13:03:37'),
(4, '', 'multivitamin 500ml', 1000, 1100, 3000, 200, 3, '', '2021-04-02 11:30:57', 1, '2021-04-09 13:04:16'),
(5, '', 'penisprectin', 400, 1100, 2500, 180, 3, '', '2021-04-02 11:51:51', 1, '2021-04-09 13:05:12'),
(6, '', 'amproxcoque', 200, 100, 150, 0, 3, '', '2021-04-07 00:13:11', 1, '2021-04-08 07:00:20'),
(7, '6925955918382', 'oxycin 200ml', 1000, 100, 150, 0, 3, '', '2021-04-07 01:06:28', 1, '2021-04-07 03:41:58'),
(8, '4800318407739', 'oxycin', 1000, 100, 150, 1000, 3, '', '2021-04-07 01:11:55', 1, '2021-04-13 05:57:36'),
(9, '8901023013492', 'citronel', 1600, 100, 150, 200, 3, 'savon ctro', '2021-04-13 03:50:51', 3, '2021-04-13 05:57:05'),
(10, '324645452534647', 'sensodyne', 80, 100, 200, 70, 3, '', '2021-04-13 04:53:50', 1, '2021-04-13 06:54:44'),
(11, '24563767889879', 'sensondine', 200, 2300, 300, 0, 3, '', '2021-04-20 03:45:38', 9, '2021-04-20 05:45:38');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `names` varchar(100) NOT NULL,
  `address` varchar(100) CHARACTER SET latin1 NOT NULL,
  `phone` int(14) NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 NOT NULL,
  `password` varchar(100) CHARACTER SET latin1 NOT NULL,
  `priviledge` int(11) NOT NULL COMMENT '1.admin\r\n2.branch manager\r\n3. store keep',
  `status` int(11) NOT NULL,
  `brancheId` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) NOT NULL,
  `last_login` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `names`, `address`, `phone`, `email`, `password`, `priviledge`, `status`, `brancheId`, `created_at`, `created_by`, `last_login`, `updated_at`) VALUES
(1, 'Didi Kenza', 'Kigali', 783528579, 'admin@pamasa.com', '$2y$10$jgmZbBdcS0fm8bGvGAzjsuMWlZ6xf4RJ4v0bgOUWmqbIcavrPNmb6', 1, 1, 1, '2021-02-13 17:37:40', 0, 1, '2021-04-21 06:45:02'),
(2, 'Raha Faradja', '', 977936966, 'user@gmail.com', '$2y$10$jgmZbBdcS0fm8bGvGAzjsuMWlZ6xf4RJ4v0bgOUWmqbIcavrPNmb6', 2, 1, 1, '2021-02-18 12:03:33', 0, 0, '2021-04-08 03:50:49'),
(3, 'clovis', '', 783528579, 'clovis@gmail.com', '$2y$10$jgmZbBdcS0fm8bGvGAzjsuMWlZ6xf4RJ4v0bgOUWmqbIcavrPNmb6', 3, 1, 2, '2021-03-19 08:14:23', 0, 0, '2021-03-31 09:21:12'),
(6, 'Aisha', '', 977936966, 'aisha@gmail.com', '$2y$10$jgmZbBdcS0fm8bGvGAzjsuMWlZ6xf4RJ4v0bgOUWmqbIcavrPNmb6', 3, 1, 2, '2021-03-31 02:22:11', 0, 0, '2021-03-31 09:30:18'),
(8, 'zawadi', '', 977936966, 'zawadi@gmail.com', '$2y$10$b0A59He7LsFCGSzgcWhnre3pgwHorz5T7BW/Z.W22xtwuvvK6RMCi', 2, 2, 2, '2021-03-31 02:29:52', 0, 0, '2021-04-09 11:18:26'),
(9, 'kakule', '', 783528579, 'kakule@gmail.com', '$2y$10$diIRjdo/pyQ78054j0mU6..zYYfdFmqMjiFKW0RIyoFoG1DoxbG16', 3, 1, 2, '2021-04-09 02:25:08', 0, 0, '2021-04-09 02:25:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branche`
--
ALTER TABLE `branche`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brancheproduct`
--
ALTER TABLE `brancheproduct`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brancheproductinfo`
--
ALTER TABLE `brancheproductinfo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `brancheId` (`brancheId`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `infoinvoices`
--
ALTER TABLE `infoinvoices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branche`
--
ALTER TABLE `branche`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `brancheproduct`
--
ALTER TABLE `brancheproduct`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `brancheproductinfo`
--
ALTER TABLE `brancheproductinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `infoinvoices`
--
ALTER TABLE `infoinvoices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
