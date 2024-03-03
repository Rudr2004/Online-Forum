-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2024 at 01:47 PM
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
-- Table structure for table `threads`
--

CREATE TABLE `threads` (
  `thread_id` int(8) NOT NULL,
  `thread_title` text NOT NULL,
  `thread_desc` varchar(200) NOT NULL,
  `thread_cat_id` int(8) NOT NULL,
  `thread_user_id` int(8) NOT NULL,
  `thread_timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `threads`
--

INSERT INTO `threads` (`thread_id`, `thread_title`, `thread_desc`, `thread_cat_id`, `thread_user_id`, `thread_timestamp`) VALUES
(1, 'Unable to install Pyaudio in windows', 'I can\'t able to install pyaudio in windows', 1, 4, '2023-12-29 16:42:30'),
(2, 'Start Journey in Python', 'What is the first step to learn in python?\r\n', 1, 2, '2023-12-29 16:42:41'),
(3, 'Fetch api not working', 'I am into trouble. My Fetch api is not working in Edge.', 2, 1, '2023-12-29 16:45:35'),
(4, 'Want to learn Django', 'How can i learn Django easily?', 3, 2, '2023-12-30 14:42:53'),
(5, 'Learn Flask', 'Please tell me that how can i learn flask easily? ', 4, 3, '2024-01-02 12:31:41'),
(7, 'What is Flask?', 'Tell me something about flask.', 4, 6, '2024-01-03 16:12:32'),
(8, 'About Django', 'Please tell me something about Django.', 3, 2, '2024-01-03 16:17:29'),
(9, 'About JavaScript', 'Please tell me something about JavaScript.', 2, 1, '2024-01-03 16:20:01'),
(10, 'Use of Python', 'What is the use of python?\r\n', 1, 2, '2024-01-03 16:23:55'),
(11, 'Knowledge About Other Languages', 'Which other language should i know to learn python?', 1, 5, '2024-01-03 16:54:58'),
(24, 'About Python', 'Is python easy?', 1, 4, '2024-01-03 22:09:52'),
(25, 'Use of Flask', 'Please tell me the use of flask.', 4, 1, '2024-01-03 22:39:31'),
(26, 'Use of Django', 'Please tell me the use of Django.', 3, 1, '2024-01-03 22:40:43'),
(27, 'What is Django?', 'Is it necessary to learn Django?', 3, 4, '2024-01-03 22:42:12'),
(28, 'Easy to Learn?', 'Is it easy to learn JavaScript in 15 days?', 2, 1, '2024-01-03 22:43:12'),
(29, 'About Php', 'Tell me something about php.', 5, 7, '2024-01-08 15:16:13'),
(30, 'About AI', 'Please tell me something about ai.', 7, 7, '2024-01-13 12:07:54'),
(31, 'Use of node.js', 'What is the use of node.js?', 8, 5, '2024-01-13 12:12:22'),
(32, 'Use of Ruby', 'What is the use of ruby?\r\n', 9, 8, '2024-01-13 12:28:23'),
(33, 'Use of Java', 'What is the use of java language?', 10, 4, '2024-01-16 18:08:59'),
(34, 'Use of C#', 'What is the use of c#?\r\n', 11, 5, '2024-01-16 18:09:46'),
(35, 'Use of C++', 'What is the use of C++?', 12, 8, '2024-01-16 18:11:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `threads`
--
ALTER TABLE `threads`
  ADD PRIMARY KEY (`thread_id`);
ALTER TABLE `threads` ADD FULLTEXT KEY `thread_title` (`thread_title`,`thread_desc`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `threads`
--
ALTER TABLE `threads`
  MODIFY `thread_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
