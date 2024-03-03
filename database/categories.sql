-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2024 at 10:42 AM
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
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(8) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_description` varchar(255) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `category_description`, `created`) VALUES
(1, 'Python', 'Python is a general-purpose programming language. ', '2023-12-17 14:19:55'),
(2, 'JavaScript', 'JavaScript is one of the core technologies of the World Wide Web, alongside HTML and CSS. ', '2023-12-17 14:20:55'),
(3, 'Django', 'Django is a free and open-source, Python-based web framework that follows the model–template–views architectural pattern. It is maintained by the Django Software Foundation, an independent organization established in the US as a 501 non-profit.', '2023-12-22 15:16:42'),
(4, 'Flask', ' Flask is a micro web framework written in Python. It is classified as a microframework because it does not require particular tools or libraries.  ', '2023-12-22 15:17:28'),
(5, 'PHP', 'PHP is a general-purpose scripting language geared towards web development. It was originally created by Danish-Canadian programmer Rasmus Lerdorf in 1993 and released in 1995. ', '2024-01-04 14:47:49'),
(6, 'MongoDB', 'MongoDB is a source-available, cross-platform, document-oriented database program. Classified as a NoSQL database product, MongoDB utilizes JSON-like documents with optional schemas. MongoDB is developed by MongoDB Inc. and current versions are licensed u', '2024-01-08 14:54:24'),
(7, 'Artificial Intelligence', 'Artificial intelligence is the intelligence of machines or software, as opposed to the intelligence of humans or other animals.', '2024-01-13 12:05:32'),
(8, 'Node.js', 'Node.js is a cross-platform, open-source JavaScript runtime environment that can run on Windows, Linux, Unix, macOS, and more. ', '2024-01-13 12:11:28'),
(9, 'Ruby', 'Ruby is an interpreted, high-level, general-purpose programming language which supports multiple programming paradigms. ', '2024-01-13 12:14:53'),
(10, 'Java', 'Java is a high-level, class-based, object-oriented programming language that is designed to have as few implementation dependencies as possible.', '2024-01-16 18:03:38'),
(11, 'C#', 'C# is a general-purpose high-level programming language supporting multiple paradigms. C# encompasses static typing and component-oriented programming disciplines. ', '2024-01-16 18:03:38'),
(12, 'C++', 'C++ is a high-level, general-purpose programming language created by Danish computer scientist Bjarne Stroustrup.\r\n', '2024-01-16 18:06:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=203;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
