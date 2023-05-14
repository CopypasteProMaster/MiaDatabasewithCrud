-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2023 at 01:37 PM
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
-- Table structure for table `crimrec`
--

CREATE TABLE `crimrec` (
  `ID` int(11) NOT NULL,
  `FNAME` varchar(100) NOT NULL,
  `MIDNAME` varchar(100) NOT NULL,
  `LNAME` varchar(100) NOT NULL,
  `REGION` varchar(150) NOT NULL,
  `ALIAS` varchar(100) NOT NULL,
  `REWARD` int(11) NOT NULL,
  `AUTH` varchar(200) NOT NULL,
  `DATE_OF_MC` date NOT NULL,
  `CC` varchar(200) NOT NULL,
  `OFF` varchar(200) NOT NULL,
  `IC` varchar(200) NOT NULL,
  `SCO` varchar(200) NOT NULL,
  `SEX` varchar(10) NOT NULL,
  `H` varchar(100) NOT NULL,
  `W` varchar(100) NOT NULL,
  `EYES` varchar(50) NOT NULL,
  `HAIR` varchar(100) NOT NULL,
  `COMPLEX` varchar(100) NOT NULL,
  `OTHER` varchar(100) NOT NULL,
  `AGE` int(11) NOT NULL,
  `DOB` date NOT NULL,
  `POB` varchar(100) NOT NULL,
  `CITIZENSHIP` varchar(20) NOT NULL,
  `FATHER` varchar(100) NOT NULL,
  `MOTHER` varchar(100) NOT NULL,
  `ADDRESS` varchar(100) NOT NULL,
  `CS` varchar(30) NOT NULL,
  `ELEM` varchar(100) NOT NULL,
  `SECON` varchar(100) NOT NULL,
  `COLLEGE` varchar(100) NOT NULL,
  `filename` varchar(200) NOT NULL,
  `filepath` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `crimrec`
--

INSERT INTO `crimrec` (`ID`, `FNAME`, `MIDNAME`, `LNAME`, `REGION`, `ALIAS`, `REWARD`, `AUTH`, `DATE_OF_MC`, `CC`, `OFF`, `IC`, `SCO`, `SEX`, `H`, `W`, `EYES`, `HAIR`, `COMPLEX`, `OTHER`, `AGE`, `DOB`, `POB`, `CITIZENSHIP`, `FATHER`, `MOTHER`, `ADDRESS`, `CS`, `ELEM`, `SECON`, `COLLEGE`, `filename`, `filepath`) VALUES
(1, 'Wally', 'C', 'Bayola', 'CARAGA', 'WALLY', 3000000, '2015-136\r\n', '2023-05-01', 'L-2854, L-2855, L-2856, L-2857, L-2', 'Robbery; Grave Coercion; Murder (3 counts); Arson', 'RTC 11th JR, Br 28, Lianga, Surigao del Sur', 'Involved in the burning of ALCADEV building and the \r\nkilling of three (3) persons last September 21, 2015 in Sitio Han-ayan, Brgy \r\nDiatagon, Lianga, Surigao del Sur.', 'M', '5\'4', '140lbs', 'black', 'black', '', '', 38, '2013-05-01', 'Lianga Surigao del Sur', 'FILIPINO', '', '', 'Brgy Banahaw, Lianga, Surigao del \r\nSur', 'married', '', '', '', '345592126_906131163809728_4242439375601454087_n.jpg', 'C:\\Users\\Amano\\crimRec\\static\\uploads'),
(2, 'Ruben', 'B', 'ECLEO', 'National', '', 0, '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', 0, '0000-00-00', '', '', '', '', '', '', '', '', '', '346614879_1425473084866333_7911985099661788678_n.jpg 345889017_564300989105802_2495759701696545729_n.jpg', 'C:\\Users\\Amano\\crimRec');

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
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
-- Dumping data for table `records`
--

INSERT INTO `records` (`id`, `images`, `name`, `middle_name`, `last_name`, `suffix`, `sex`, `missing_since`, `city`, `street`, `classification`, `birthday`, `age`, `height_weight`, `race`, `text_1`, `text_2`, `text_3`, `text_4`, `text_5`, `text_6`, `text_7`, `gmail`) VALUES
(13, '0_The-World-of-Banksy-The-Immersive-Experience-exhibition-in-Italy.jpg _125702576_gettyimages-1372532092.jpg ', 'sas', 'a', 'sasas', 'n/a', 'female', '2023-05-02', 'asas', 'asas', 'Missing', '2023-05-06', 21, '150 pounds and 6\\\\\'1', 'sdsd', 'sdsd', 'sdsd', 'sdsd', 'sdsd', 'sdsd', 'sdsd', 'sdsd', 'asas@gmail.com');

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
(14, '0_The-World-of-Banksy-The-Immersive-Experience-exhibition-in-Italy.jpg _125702576_gettyimages-1372532092.jpg ', 'sas', 'a', 'sasas', 'n/a', 'female', '2023-05-02', 'asas', 'asas', 'Missing', '2023-05-06', 21, '150 pounds and 6\'1', 'sdsd', 'sdsd', 'sdsd', 'sdsd', 'sdsd', 'sdsd', 'sdsd', 'sdsd', 'asas@gmail.com'),
(15, 'download (1).jfif download.jfif pp_princess_snowwhite_static_mobile_20694_65502630.jpeg ', 'snow', 'w', 'white', 'n/a', 'female', '1974-03-14', 'kingdom', 'forest', 'Endangered Missing', '1946-03-01', 21, '150 pounds and 6\'2', 'white', 'shy,kind', 'red dress', 'n/a', 'none', 'she was picking flowers in the forest', 'drawfs', 'mirror mirror in the wall', 'madrasta@gmail.com'),
(16, '345889017_564300989105802_2495759701696545729_n.jpg 346614879_1425473084866333_7911985099661788678_n.jpg 345592126_906131163809728_4242439375601454087_n.jpg ', 'sasa', 'sasa', 'ssa', 'Jr.', 'female', '2023-05-03', 'saa', 'asa', 'Missing', '2023-05-03', 21, 'dsdsd150', 'sdss', 'fdff', 'dffd', 'ddffd', 'fdfd', 'dffd', 'dffd', 'dffd', 'asas@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `images` text NOT NULL,
  `name` varchar(200) NOT NULL,
  `middle_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `suffix` varchar(191) NOT NULL,
  `sex` varchar(191) NOT NULL,
  `missing_since` date NOT NULL,
  `city` varchar(200) NOT NULL,
  `street` varchar(200) NOT NULL,
  `classification` varchar(200) NOT NULL,
  `birthday` date NOT NULL,
  `age` int(11) NOT NULL,
  `height_weight` varchar(200) NOT NULL,
  `race` varchar(200) NOT NULL,
  `text_1` varchar(10000) NOT NULL,
  `text_2` varchar(500) NOT NULL,
  `text_3` varchar(500) NOT NULL,
  `text_4` varchar(800) NOT NULL,
  `text_5` varchar(800) NOT NULL,
  `text_6` varchar(800) NOT NULL,
  `text_7` varchar(800) NOT NULL,
  `gmail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `images`, `name`, `middle_name`, `last_name`, `suffix`, `sex`, `missing_since`, `city`, `street`, `classification`, `birthday`, `age`, `height_weight`, `race`, `text_1`, `text_2`, `text_3`, `text_4`, `text_5`, `text_6`, `text_7`, `gmail`) VALUES
(32, 'a30a8-99f18e_8dca5ca44aed4965827ee69ae9172b97mv2.jpg Banksy Slave Labour.jpg ', 'sdsd', 'sdsd', 'sdsd', 'Jr.', 'female', '2023-05-13', 'asas', 'asas', 'Migrant', '2023-05-03', 21, 'sdsd', 'ssd', 'sdsd', 'sdsd', 'sdsd', 'sdsd', 'ssd', 'sdsd', 'sdsd', 'family@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`) VALUES
(3, 'admin', 'admin'),
(6, 'admin', '10'),
(11, 'admin', 'admin123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crimrec`
--
ALTER TABLE `crimrec`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `records_app`
--
ALTER TABLE `records_app`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
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
-- AUTO_INCREMENT for table `crimrec`
--
ALTER TABLE `crimrec`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `records`
--
ALTER TABLE `records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `records_app`
--
ALTER TABLE `records_app`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
