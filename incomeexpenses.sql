-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2022 at 11:26 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `curd`
--

-- --------------------------------------------------------

--
-- Table structure for table `incomeexpenses`
--

CREATE TABLE `incomeexpenses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `amount` double(8,2) NOT NULL,
  `details` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `incomeexpenses`
--

INSERT INTO `incomeexpenses` (`id`, `user_id`, `type`, `amount`, `details`, `date`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 2233.00, 'ddd', '2022-01-16', '2022-01-01 12:59:06', '2022-01-02 03:37:43', '2022-01-02 03:37:43'),
(2, 1, 1, 23.00, 'ss', '2022-01-29', '2022-01-01 13:07:42', NULL, NULL),
(3, 1, 2, 23.00, 'ss', '2022-01-29', '2022-01-01 13:08:12', '2022-01-02 03:09:24', NULL),
(4, 1, 2, 2233.00, 'sss', '2022-01-22', '2022-01-02 03:15:04', '2022-01-02 04:35:29', '2022-01-02 04:35:29'),
(5, 1, 2, 23.00, 'sss', '2022-01-02', '2022-01-02 03:15:15', NULL, NULL),
(6, 1, 1, 3278.00, 'sss', '2022-01-26', '2022-01-02 03:15:24', '2022-01-02 03:37:40', '2022-01-02 03:37:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `incomeexpenses`
--
ALTER TABLE `incomeexpenses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `incomeexpenses`
--
ALTER TABLE `incomeexpenses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
