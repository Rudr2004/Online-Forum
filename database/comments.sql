-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2024 at 01:46 PM
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
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(8) NOT NULL,
  `comment_content` varchar(255) NOT NULL,
  `thread_id` int(8) NOT NULL,
  `comment_by` int(8) NOT NULL,
  `comment_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_content`, `thread_id`, `comment_by`, `comment_time`) VALUES
(1, 'Make sure you have python/python3 installed on the windows.', 1, 5, '2023-12-29 21:51:01'),
(2, 'In Windows ,python -m pip install pyaudio. ', 1, 4, '2023-12-29 21:57:50'),
(3, 'First, you send a request to the desired URL using the fetch() method. Next, you handle the response with the . then() method. In this case, we\'re not doing anything with the code yet, but you could use this same code to parse HTML documents, send data ov', 3, 3, '2023-12-30 14:39:08'),
(4, 'Start with simple projects that reinforce the basics, and gradually take on more complex ones as your skills improve.', 2, 5, '2023-12-30 14:40:45'),
(5, 'Ensure Python is installed.', 4, 1, '2023-12-30 14:45:08'),
(6, 'Ensure Python is installed after that Create a directory for your project and then Create a virtual environment &  install Django.\r\n\r\n', 4, 2, '2023-12-30 14:50:38'),
(7, 'Ensure Python is installed after that Create a directory for your project and then Create a virtual environment &  install Django.\r\n\r\n', 4, 4, '2023-12-30 14:56:08'),
(8, 'Flask is a popular web development framework for Python, and there are many resources available to learn it. Here are a few of the best resources to learn Flask: The Flask documentation: The official Flask documentation is a great resource for getting sta', 5, 2, '2024-01-02 12:32:45'),
(9, 'you can easily use Python to play and record audio on a variety of platforms, such as GNU/Linux, Microsoft Windows.', 1, 5, '2024-01-03 15:49:12'),
(11, 'Flask is a small and lightweight Python web framework that provides useful tools and features that make creating web applications in Python easier. It gives developers flexibility and is a more accessible framework for new developers since you can build a', 6, 1, '2024-01-03 16:06:18'),
(12, 'Django is a challenging Python web framework to learn due to its complexities and many uses.Install Django to the virtual environment.\r\nVerify Django installation and operation.\r\nCreate a new project.', 4, 2, '2024-01-03 16:30:50'),
(13, 'Before learning Python, it is beneficial to have basic computer literacy, strong communication skills, and a foundation in HTML and CSS.', 11, 4, '2024-01-03 16:57:46'),
(14, 'Yes, python is easy to learn.', 24, 4, '2024-01-03 22:11:01'),
(15, 'JavaScript is a scripting language that enables you to create dynamically updating content, control multimedia, animate images, and pretty much everything else.', 9, 7, '2024-01-08 15:13:06'),
(16, 'PHP (recursive acronym for PHP: Hypertext Preprocessor ) is a widely-used open source general-purpose scripting language that is especially suited for web development and can be embedded into HTML.', 29, 4, '2024-01-08 15:17:07'),
(17, 'Artificial intelligence is the simulation of human intelligence processes by machines, especially computer systems. Specific applications of AI include expert systems, natural language processing, speech recognition and machine vision.\r\n', 30, 4, '2024-01-13 12:09:03'),
(18, 'Developers use Node. js to create server-side web applications, and it is perfect for data-intensive applications since it uses an asynchronous, event-driven model.', 31, 7, '2024-01-13 12:13:44'),
(19, 'The Ruby programming language is a highly portable general-purpose language that serves many purposes. Ruby is great for building desktop applications, static websites, data processing services, and even automation tools. ', 32, 9, '2024-01-13 12:31:09'),
(20, 'Java is a widely-used programming language for coding web applications. It has been a popular choice among developers for over two decades, with millions of Java applications in use today. Java is a multi-platform, object-oriented, and network-centric lan', 33, 7, '2024-01-20 10:53:08'),
(21, 'C# can be used to create a number of different programs and applications: mobile apps, desktop apps, cloud-based services, websites, enterprise software and games.\r\n', 34, 4, '2024-01-20 10:55:10'),
(22, 'C++ is used in developing browsers, operating systems, and applications, as well as in-game programming, software engineering, data structures, etc.\r\n', 35, 7, '2024-01-20 10:56:31'),
(23, 'Generally, it takes around six to 12 weeks to learn the basics of JavaScript. This includes understanding its syntax, data types, operators, and programming concepts.\r\n', 28, 7, '2024-01-23 17:59:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
