-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2023 at 07:16 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `multiple`
--

-- --------------------------------------------------------

--
-- Table structure for table `records_app`
--

CREATE TABLE `records_app` (
  `id` int(11) NOT NULL,
  `images` text NOT NULL,
  `name` varchar(100) NOT NULL,
  `middle_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `suffix` varchar(40) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `missing_since` date NOT NULL,
  `city` varchar(50) NOT NULL,
  `street` varchar(50) NOT NULL,
  `classification` varchar(40) NOT NULL,
  `birthday` date NOT NULL,
  `age` int(11) NOT NULL,
  `height_weight` varchar(100) NOT NULL,
  `race` varchar(50) NOT NULL,
  `text_1` varchar(1000) NOT NULL,
  `text_2` varchar(1000) NOT NULL,
  `text_3` varchar(1000) NOT NULL,
  `text_4` varchar(1000) NOT NULL,
  `text_5` varchar(1000) NOT NULL,
  `text_6` varchar(1000) NOT NULL,
  `text_7` varchar(1000) NOT NULL,
  `gmail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `records_app`
--

INSERT INTO `records_app` (`id`, `images`, `name`, `middle_name`, `last_name`, `suffix`, `sex`, `missing_since`, `city`, `street`, `classification`, `birthday`, `age`, `height_weight`, `race`, `text_1`, `text_2`, `text_3`, `text_4`, `text_5`, `text_6`, `text_7`, `gmail`) VALUES
(14, '0_The-World-of-Banksy-The-Immersive-Experience-exhibition-in-Italy.jpg _125702576_gettyimages-1372532092.jpg ', 'sas', 'a', 'sasas', 'n/a', 'female', '2023-05-02', 'asas', 'asas', 'Missing', '2023-05-06', 21, '150 pounds and 6\'1', 'sdsd', 'sdsd', 'sdsd', 'sdsd', 'sdsd', 'sdsd', 'sdsd', 'sdsd', 'asas@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `records_app`
--
ALTER TABLE `records_app`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `records_app`
--
ALTER TABLE `records_app`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
