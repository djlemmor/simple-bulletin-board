-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2022 at 10:24 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bulletin_board`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `articles_id` int(11) NOT NULL,
  `articles_title` varchar(255) NOT NULL,
  `articles_content` varchar(255) NOT NULL,
  `articles_createdDate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`articles_id`, `articles_title`, `articles_content`, `articles_createdDate`) VALUES
(1, 'Article Title', 'Article Content Snippet', '2022-08-23 14:41:29'),
(2, 'Article Title', 'Article Content Snippet', '2022-08-23 14:41:35'),
(3, 'Article Title 2', 'Article Content Snippet 2', '2022-08-23 14:42:05'),
(4, 'Article Title 3', 'Article Content: 3', '2022-08-23 15:31:55'),
(5, 'Article Title 4', 'Article Content 4', '2022-08-23 15:35:33'),
(6, 'Article Title 5', 'Article Content 5', '2022-08-23 15:36:00'),
(7, 'Article Title Test', 'Article Content Test', '2022-08-23 15:46:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`articles_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `articles_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
