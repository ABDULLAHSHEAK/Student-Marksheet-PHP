-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 26, 2023 at 01:35 PM
-- Server version: 8.0.35
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aizonepr_marksheet`
--

-- --------------------------------------------------------

--
-- Table structure for table `marksheet`
--

CREATE TABLE `marksheet` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `roll` int NOT NULL,
  `bangla` int NOT NULL,
  `math` int NOT NULL,
  `english` int NOT NULL,
  `islam` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `marksheet`
--

INSERT INTO `marksheet` (`id`, `name`, `roll`, `bangla`, `math`, `english`, `islam`) VALUES
(12, 'MD. AHAD ALI', 414534, 34, 56, 40, 90),
(13, 'MST. FATEMA KHATUN', 950585, 88, 78, 86, 78),
(15, 'MST. ATIYA KHATUN', 414534, 0, -255, -82, -86),
(18, 'kamal', 3434, 85, 98, 54, 87),
(19, 'user', 3434, 85, 85, 75, 95),
(20, 'user2', 3434, 5, 65, 56, 56),
(21, 'kamal', 3434, 34, 34, 34, 34),
(23, 'Shariful', 101388, 200, 200, 100, 0),
(24, 'Md Abdullah Shake', 414534, 34, 43, 34, 85),
(26, 'Prince Noman vai', 414534, 98, 43, 34, 85),
(33, 'Vicky Vou', 1, 0, 1, 2, 4),
(34, 'Nahid ', 40, 88, 90, 96, 99),
(35, 'Nothing ', 0, 25, 36, 55, 33),
(36, 'Ashik', 1235, 25, 30, 52, 26),
(37, 'Rajib Mridha', 0, 11, 11, 11, 11),
(38, 'kamal', 3434, 45, 45, 43, 54);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `email` text COLLATE utf8mb4_general_ci NOT NULL,
  `pass` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `pass`) VALUES
(34, 'Md Abdullah Shake', 'mdabdullahshake12@gmail.com', 'sfdsf'),
(36, 'doinikbatikrom@gmail.com', 'mdabdullahshake12@gmail.com', '2234'),
(37, '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `marksheet`
--
ALTER TABLE `marksheet`
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
-- AUTO_INCREMENT for table `marksheet`
--
ALTER TABLE `marksheet`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
