-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2024 at 05:03 PM
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
-- Database: `book`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `page` varchar(255) NOT NULL,
  `format` varchar(255) NOT NULL,
  `isbn` varchar(255) NOT NULL,
  `language` varchar(255) NOT NULL,
  `dimension` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `bookid` varchar(255) NOT NULL,
  `buyer` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `title`, `author`, `price`, `page`, `format`, `isbn`, `language`, `dimension`, `category`, `image`, `quantity`, `bookid`, `buyer`, `status`) VALUES
(3, 'klpp', 'elsa wer', 889, '122', 'hard cover', '1234778', 'english', '789*88', 'action', 'images (8).jpg', 1, '1', '12345', 'pending'),
(4, '', '', 0, '', '', '', '', '', '', '', 1, '1', '', ''),
(5, '', '', 0, '', '', '', '', '', '', '', 1, '1', '', ''),
(6, 'new lie', 'mesa kea', 10, '133', 'pape', 'naknsak', 'enlish', '00mw ', 'acion', 'aoko', 1, '', '', ''),
(7, 'new lie', 'mesa kea', 10, '133', 'pape', 'naknsak', 'enlish', '00mw ', 'acion', 'aoko', 1, '', 'pp', 'pending'),
(8, 'new lie', 'mesa kea', 10, '133', 'pape', 'naknsak', 'enlish', '00mw ', 'acion', 'aoko', 1, '1', 'pp', 'pending'),
(9, 'klpp', 'elsa wer', 889, '122', 'hard cover', '1234778', 'english', '789*88', 'action', 'images (8).jpg', 1, '1', 'pp', 'pending'),
(10, 'klpp', 'elsa wer', 889, '122', 'hard cover', '1234778', 'english', '789*88', 'action', 'images (8).jpg', 1, '1', 'pp', 'pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
