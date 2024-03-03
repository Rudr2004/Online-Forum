-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2024 at 10:45 AM
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
-- Database: `rdiscuss`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sno` int(8) NOT NULL,
  `email` text NOT NULL,
  `password` varchar(15) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sno`, `email`, `password`, `timestamp`) VALUES
(1, 'Ram', '$2y$10$PfdL5vCb', '2024-01-02 11:44:16'),
(2, 'Rohan', '$2y$10$JjpCzktE', '2024-01-02 12:26:37'),
(3, 'Example', '1', '2024-01-02 12:39:51'),
(4, 'Drashti', '$2y$10$8RSw74kk', '2024-01-02 12:51:29'),
(5, 'Sakshi', '$2y$10$dvgD2jRK', '2024-01-02 15:02:13'),
(6, 'Mohit', '$2y$10$j.VWl3rD', '2024-01-02 15:09:01'),
(7, 'Rudra', '$2y$10$N.JGzK.h', '2024-01-04 11:37:54'),
(8, 'Harsh', '$2y$10$iK/p3ygh', '2024-01-07 15:39:34'),
(9, 'Uday', '$2y$10$46sYaapK', '2024-01-13 12:28:57'),
(10, 'Uday Shah', '$2y$10$ZfWbN9bf', '2024-01-23 18:34:26'),
(11, 'Aneri', '$2y$10$3KI4OQlg', '2024-01-23 22:52:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sno` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
