-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2023 at 01:13 PM
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
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) UNSIGNED NOT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `phoneno` int(10) DEFAULT NULL,
  `email` text DEFAULT NULL,
  `cdate` date DEFAULT NULL,
  `approval` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
  `REWARD` varchar(100) NOT NULL,
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
  `AGE` varchar(20) NOT NULL,
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
(1, 'Wally', 'c', 'bayola', 'CARAGA', 'WALLY', '3000000', '2015-136\r\n', '2023-05-01', 'L-2854, L-2855, L-2856, L-2857, L-2', 'Robbery; Grave Coercion; Murder (3 counts); Arson', 'RTC 11th JR, Br 28, Lianga, Surigao del Sur', 'Involved in the burning of ALCADEV building and the \r\nkilling of three (3) persons last September 21, 2015 in Sitio Han-ayan, Brgy \r\nDiatagon, Lianga, Surigao del Sur.', 'M', '5\'4', '140lbs', 'black', 'black', '', '', '38', '2013-05-01', 'Lianga Surigao del Sur', 'FILIPINO', '', '', 'Brgy Banahaw, Lianga, Surigao del \r\nSur', 'married', '', '', '', 'wally.jpg', 'C:\\Users\\Amano\\crimRec\\static\\uploads'),
(15, 'assa', 'sasa', 'sasa', 'sasa1', 'sasa', '10000', '2023-05-02', '2023-05-01', 'sasa21113', 'asas', 'asasa', 'asas', 'male', 'asa', 'asa', 'asa', '', '', '', '0', '0000-00-00', '', '', '', '', '', '', '', '', '', '345118003_6680481101975687_284725046693759231_n.jpg', 'C:\\Users\\Amano\\crimRec\\static\\uploads'),
(24, 'Eduardo', '', 'Iran', 'National', 'Boy Muslim', '1000000', '2023-05-10', '1993-05-10', '402; 32801; 30323; 30373; 3032; 3', '1Robbery/Hold-up/Kidnapping with Murder/Frustrated Murder/Attempted Murde', 'Robbery/Hold-up/Kidnapping with Murder/Frustrated Murder/Attempted Murde', 'Subject was convicted for killing of Ex-MSg Sesbreño on December 23, 1984 \r\nand escaped from detention on May 19, 1985. Responsible for killing of ExGov Evelio Javier of Antique at San Jose on Februa', 'm', '5\'6 1/2', '120 lbs', 'brown', 'black', 'dark1', 'ssss', '12', '1951-06-04', 'lucena, Iloilo', 'Filipino', 'Tomas Iran', 'Gloria Mationg', 'n/a', 'Married', 'Our Lady of Peace Academy - New Lucena', 'De Paul College,iloilo', 'De Paul College,iloilo1', 'wantd.png', 'C:\\Users\\Amano\\crimRec\\static\\uploads'),
(28, 'asas', 'asas', 'asas', 'asas', 'asas', '1212', 'sas', '2023-05-03', '1212 12', 'asas', 'asas', 'asas', 'asas', 'asas', 'asas', 'asas', 'asas', 'asas', 'asas', '121', '2023-05-30', 'asas', 'asas', 'asas', 'asas', 'asas', 'asas', 'asas', 'asas', 'asas', '343417593_573285891538339_1532766911579638379_n.jpg 5e6b5ba659976.png', 'C:\\Users\\Amano\\crimRec\\static\\uploads'),
(32, 'assa', 'sasa', 'sasa', 'sasa', 'asasa', '1212', 'sa1212', '2023-05-03', '1212asas', 'asas', 'asas', 'asas', 'asas', 'asas', 'asasas', 'asasas', 'asasas', 'asasasa', 'sasas', '212', '2023-05-02', 'asasa', 'sasas', 'asasas', 'a', 'sassas', 'asasas', 'asas', 'asasas', 'aasassa', '345451666_869052964807163_5666649391108300426_n.jpg 346150949_1335886693633153_1378837667140333069_n.png', 'C:\\Users\\Amano\\crimRec\\static\\uploads'),
(33, 'SALAMON', '', 'Fraser', 'National', 'Frazer/Abu Jarin', '850000000', '2005-97', '2005-03-02', '2794-4; 2796-6; 2795; 1014-5; 505-4', '2794-4; 2796-6; 2795; 1014-5; 505-4', 'RTC 9, Br 4, Isabela, Basilan; RTC 9, Br 5, Bongao, Tawi-tawi; RTC 9, Br 4, \r\nParang, Sulu; RTC NCR, Br 162, Pasig City', 'Subject was involved in the following crimes: kidnapping of Emilio Enriquez; \r\nkilling of Greg (LNU); massacre of 13 crew members of a fishing boat from \r\nPagadian City in the fishing grounds of Tapia', 'm', '5\'5\"', '', 'black', 'black', 'fair', '', '0', '2023-06-02', 'saassa', 'Filipino', 'Amon Hajan/Bariwa', '', 'Samal Village, Maluso, Basilan  Province', '', '', '', '', 'wanted2.png', 'C:\\Users\\Amano\\crimRec\\static\\uploads'),
(35, 'asas', 'as', 'assa', 'sasa', '', '0', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0', '0000-00-00', '', '', '', '', '', '', '', '', '', '344246560_1181242635957776_7797335308753134884_n.jpg', 'C:\\Users\\Amano\\crimRec\\static\\uploads'),
(36, 'sasa', 'as', 'sasa', 'asas', 'aasa', '121212', 'sasasas', '2023-06-05', 'sasa', 'assasa', 'assa', 'sasa', 'sasa', 'sasa', 'assa', 'sasa', 'sasa', 'sasa', 'asassa', '21', '2023-06-06', 'sasa', 'sasa', 'assa', 'sasa', 'sasa', 'sasa', 'assa', 'sasa', 'sasa', '346614879_1425473084866333_7911985099661788678_n.jpg', 'C:\\Users\\Amano\\crimRec\\static\\uploads'),
(37, 'sasa', 'asasa', 'assa', '', '', '0', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0', '0000-00-00', '', '', '', '', '', '', '', '', '', '349094065_1222936635091383_5374951204602119496_n.jpg', 'C:\\Users\\Amano\\crimRec\\static\\uploads'),
(38, 'sas', 'asas', 'asas', 'sasasa', '', '1000', 'asasas', '2023-06-07', 'asasasa', 'sasasa', 'sasasa', 'aasas', 'saas', '', '', '', '', '', '', '0', '2023-06-13', 'sasa', 'sasasa', '', '', '', '', '', '', '', 'pp_princess_snowwhite_static_mobile_20694_65502630.jpeg', 'C:\\Users\\Amano\\crimRec\\static\\uploads'),
(39, 'edited', 'asas', 'asas', 'sasa', '', '1000', 'sasasa', '2023-06-14', 'sasasa', 'sasasa', 'sasasa', 'sasa', 'asas', '', '', '', '', '', '', '', '2023-06-11', 'assaas', 'asasas', '', '', '', '', '', '', '', '348435350_10096109407073133_7840468358595817448_n.jpg', 'C:\\Users\\Amano\\crimRec\\static\\uploads'),
(40, 'EDITED', 'S', 'luz', 'SASA', 'SASA', '1212121', '21212', '2023-06-21', 'ASASA', 'SASASA', 'ASSA', 'SASASAassasa asas asas as as asasasasas  asa a asa aas a as asas as as as a as as as as as asasa asa as as asa asas as asasas asa asa sa', 'SASA', 'ASSA', 'ASSA', 'ASSA', 'ASSA', 'ASA', 'SASA', '21', '2023-06-14', 'ASAS', 'SASA', 'SAAS', 'ASSA', 'SASA', 'SASA', 'ASSA', 'SASA', 'SASA', '348823240_578593777470098_6080185348434693842_n.jpg 351451035_2131371573715254_921595173216374846_n.jpg 352192513_3680403742187830_7972232724613015407_n.jpg th.jfif', 'C:\\Users\\Amano\\crimRec\\static\\uploads');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `history_` varchar(100) NOT NULL,
  `login_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`history_`, `login_date`) VALUES
('admin Logged in', '2023-06-27 09:50:21'),
('admin Logged out', '2023-06-27 09:50:34'),
('admin Logged in', '2023-06-28 08:47:12'),
('admin Logged in', '2023-06-28 08:54:56'),
('admin Logged in', '2023-06-28 08:59:57'),
('admin Logged in', '2023-06-28 09:14:52'),
('admin Logged in', '2023-06-28 09:17:33'),
('admin Logged in', '2023-06-28 09:17:45'),
('admin Logged in', '2023-06-28 09:17:49'),
('admin Logged in', '2023-06-28 09:17:55'),
('admin Logged in', '2023-06-28 09:18:32'),
('admin Logged in', '2023-06-28 09:18:50'),
('admin Logged in', '2023-06-28 09:19:00'),
('admin Logged in', '2023-06-28 09:19:21'),
('admin Logged in', '2023-06-28 09:19:23'),
('admin Logged out', '2023-06-28 09:19:37'),
('admin Logged in', '2023-06-28 09:24:29'),
('admin Logged in', '2023-06-28 09:27:02'),
('admin Logged in', '2023-06-28 09:28:33'),
('admin Logged in', '2023-06-28 09:28:55'),
('admin Logged out', '2023-06-28 09:29:00'),
('admin Logged in', '2023-06-28 09:29:10'),
('admin Logged in', '2023-06-28 09:29:34'),
('admin Logged out', '2023-06-28 09:29:36'),
('admin Logged in', '2023-06-28 09:29:42'),
('admin Logged in', '2023-06-28 09:29:53'),
('admin Logged in', '2023-06-28 09:30:18'),
('admin Logged in', '2023-06-28 09:30:26'),
('admin Logged in', '2023-06-28 09:31:21'),
('admin Logged out', '2023-06-28 09:31:29'),
('admin Logged in', '2023-06-28 09:38:43'),
('admin Logged in', '2023-06-28 09:39:09'),
('admin Logged in', '2023-06-28 09:39:20'),
('admin Logged in', '2023-06-28 09:39:33'),
('admin Logged in', '2023-06-28 09:39:37'),
('admin Logged in', '2023-06-28 09:39:46'),
('admin Logged in', '2023-06-28 09:39:52'),
('admin Logged in', '2023-06-28 09:40:01'),
('admin Logged in', '2023-06-28 09:40:17'),
('admin Logged in', '2023-06-28 09:40:38'),
('admin Logged in', '2023-06-28 09:41:08'),
('admin Logged in', '2023-06-28 09:41:24'),
('admin Logged out', '2023-06-28 09:41:26'),
('admin Logged in', '2023-06-28 09:54:31'),
('admin Logged in', '2023-06-28 09:54:38'),
('admin Logged out', '2023-06-28 09:54:44'),
('ric Logged in', '2023-06-28 10:05:34'),
('ric Logged out', '2023-06-28 10:06:07'),
('ric Logged in', '2023-06-28 10:07:11'),
('ric Logged out', '2023-06-28 10:07:13'),
('ric Logged in', '2023-06-28 10:07:52'),
('ric Logged in', '2023-06-28 10:07:55'),
('ric Logged in', '2023-06-28 10:08:06'),
('ric Logged out', '2023-06-28 10:08:13'),
('cir Logged in', '2023-06-28 10:08:20');

-- --------------------------------------------------------

--
-- Table structure for table `img`
--

CREATE TABLE `img` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) UNSIGNED NOT NULL,
  `usname` varchar(30) DEFAULT NULL,
  `pass` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `usname`, `pass`) VALUES
(1, 'janobe', 'janobe');

-- --------------------------------------------------------

--
-- Table structure for table `newsletterlog`
--

CREATE TABLE `newsletterlog` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(52) DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `news` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `newsletterlog`
--

INSERT INTO `newsletterlog` (`id`, `title`, `subject`, `news`) VALUES
(1, 'asd', 'Send me an Email', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) DEFAULT NULL,
  `title` varchar(5) DEFAULT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `troom` varchar(30) DEFAULT NULL,
  `tbed` varchar(30) DEFAULT NULL,
  `nroom` int(11) DEFAULT NULL,
  `cin` date DEFAULT NULL,
  `cout` date DEFAULT NULL,
  `ttot` double(8,2) DEFAULT NULL,
  `fintot` double(8,2) DEFAULT NULL,
  `mepr` double(8,2) DEFAULT NULL,
  `meal` varchar(30) DEFAULT NULL,
  `btot` double(8,2) DEFAULT NULL,
  `noofdays` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `title`, `fname`, `lname`, `troom`, `tbed`, `nroom`, `cin`, `cout`, `ttot`, `fintot`, `mepr`, `meal`, `btot`, `noofdays`) VALUES
(2, 'Dr.', 'janobe', 'janobe', 'Superior Room', 'Single', 1, '2020-10-10', '2020-10-11', 320.00, 323.20, 0.00, 'Room only', 3.20, 1);

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
(13, '0_The-World-of-Banksy-The-Immersive-Experience-exhibition-in-Italy.jpg _125702576_gettyimages-1372532092.jpg ', 'sas', 'a', 'sasas', 'n/a', 'female', '2023-05-02', 'asas', 'asas', 'Missing', '2023-05-06', 21, '150 pounds and 6\\\\\\\\\\\\\\\\\\\'1', 'sdsd', 'sdsd', 'sdsd', 'sdsd', 'sdsd', 'sdsd', 'sdsd', 'sdsd', 'asas@gmail.com'),
(15, '', 'EDITED1', 'SASA', 'SASA', 'Jr.', 'female', '2023-06-29', 'SASA', 'SASA', 'Non-Family', '2023-06-24', 21, 'SASA', 'SASA', 'SASASA', 'SASASA', 'SASASA', 'SASA', 'SASAAS', 'SASASA', 'SASASA', 'asas@gmail.com'),
(16, '', 'poco', 'sdsdsasa', 'sdsdsasa', 'Jr.', 'female', '2023-05-13', 'asasassasa', 'asassa', 'Migrant', '2023-05-03', 21, 'sdsd as as a', 'ssdsa', 'sdsdasa as as as as as', 'sdsdas aas asas asa as a ass as as as as', 'sdsdasa asa as as as as', 'sdsdas as as as as as as as as as as as as s asa ', 'ssdsa as as as as as w1qw aad saasd ', 'sdsd ada rw  sd aasd asdasd', 'sdsd sd atsef sada adawd asdasd as aasd', 'family@gmail.com');

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
  `text_1` text NOT NULL,
  `text_2` text NOT NULL,
  `text_3` text NOT NULL,
  `text_4` text NOT NULL,
  `text_5` text NOT NULL,
  `text_6` text NOT NULL,
  `text_7` text NOT NULL,
  `gmail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `records_app`
--

INSERT INTO `records_app` (`id`, `images`, `name`, `middle_name`, `last_name`, `suffix`, `sex`, `missing_since`, `city`, `street`, `classification`, `birthday`, `age`, `height_weight`, `race`, `text_1`, `text_2`, `text_3`, `text_4`, `text_5`, `text_6`, `text_7`, `gmail`) VALUES
(22, '346614879_1425473084866333_7911985099661788678_n.jpg 348435350_10096109407073133_7840468358595817448_n.jpg ', 'Sponge', 'G', 'Bob', 'Jr.', 'female', '2023-06-16', 'Butan', 'Ambago', 'Missing', '2023-06-17', 21, 'sasa', 'Asian', 'sasa', 'asa', 'saas', 'sasa', 'sasa', 'sasa', 'sasa', 'madrasta@gmail.com'),
(42, '348435350_10096109407073133_7840468358595817448_n.jpg ', 'Black', '', 'Panter', 'n/a', 'male', '2023-06-16', 'Catskill', 'New York', 'Non-Family Abduction', '2023-06-09', 21, 'sasa', 'Cat', 'sassa', 'assasasasa', 'aassasa', 'assasa', 'sasasa', 'sasasasa', 'sasasa', 'madrasta@gmail.com'),
(45, 'MV5BYTNhYWQxZjAtNTYzMC00ODExLWJmNzctYTcwZDgxYjhkYTIwXkEyXkFqcGdeQXVyNTI5NjIyMw@@._V1_.jpg ', 'Robin', '', 'Padilla', 'Jr.', 'female', '2023-06-08', 'sasaas', 'sasasa', 'Missing', '2023-06-17', 21, 'sasaas', 'sasasa', 'sasasasasa as asa asas asa as as asasasa as asa asas asa as as asasasa as asa asas asa as as asasasa as asa asas asSunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.', 'sasasasasasa as asa asas asa as as asasasa as asa asas asa as as asasasa as asa asas asa as as asasasa as asa asas asa as as asasasa Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.', 'sasaassasasa as asa asas asa as as asasasa as asa asas asa as as asasasa as asa asas asa as as asasasa as asa asas asa as as asasasa as asa asas asa as as asasasa as asa asas asa as as asasasa as asa asas aSunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.', 'sasasasasasa as asa asas asa as as asasasa as asa asas asa as as asasasa as asa asas asa as as asasasa as asa asas asa as as asasasa as asa asas asa as as asasasa as asa Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.', 'sasasa as asa asas asa as as asasasa as asa asas asa as as asasasa as asa asas asa as as asasasa as asa asas asa as as asasasa as asa asas asa as as asasasa as asa asas asa as as asasasa as Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.', 'sasasasasa as asa asas asa as as asasaSunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.', 'sasasaSunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.', 'asas@gmail.com'),
(48, 'ms1.png ms2.png ms3.png ms4.png ms5.png ms6.png ms7.png', 'Rebecca', '', 'Gary', 'Sr.', 'male', '1970-01-01', 'Kansas', 'Hallmark', 'required/', '1956-05-27', 32, '5\\0 - 5\\4, 105 - 125 pounds', 'White', 'Caucasian female. Brown hair. Gary has a birthmark on her right leg near her knee and a tattoo on her right arm; the tattoo is of a lion, a lion\'s head or a Leo astrological sign. Her nickname is Becky.', 'n/a', 'n/a', 'n/a', 'Gary was last seen at her apartment in the 8300 block of Airline Highway in Baton Rouge, Lousiana on December 27, 1988. She called her sister that day and said things weren\'t working out and she wanted to move back to Shreveport, Louisiana, where she\'d lived before. She has never been heard from again.In the first week of January, Gary\'s apartment manager called her sister to say the rent was due and Gary wasn\'t answering the door. The manager left herself inside the apartment and found the lights and coffee maker on. The bathtub had been filled with water and there were two cups on the bar.Gary\'s driver\'s license, purse and car keys were in the bedroom. A packed suitcase was on the bed and family photos were spread across the bed. The manager wanted to put Gary\'s belongings out in the street because the rent hadn\'t been paid, but her sister asked her not to until the police came to investigate.\r\nWhen the manager checked a few weeks later, the lights were off but the suitcase and photographs were still on the bed. The rest of her clothes were hanging in the closet, and her car was parked in the parking lot. An autographed photograph of Louisiana governor Edwin Edwards was found torn up on a counter in her home.\r\nGary has never been heard from again. The police never did come to the apartment, and eventually Gary\'s brother went there to collect her things. She was reported as a missing person on January 20, 1989, three and a half weeks after she was last seen.\r\nGary\'s daughter, Jamie Williams, believes Edwards was involved in her mother\'s disappearance. She claims Gary was \"obsessed\" with Edwards and that the two of them had had an affair. Gary reportedly was planning to end the affair at the time she went missing.\r\nWhen he was questioned about Gary, Edwards said he had no involvement in her disappearance and also denied having had a romantic relationship with her. His office did turn over several letters Gary had written him.\r\nIn 2001, Edwards was convicted of unrelated charges of racketeering, money laundering and conspiracy and sentenced to ten years in prison.\r\nGary was employed as a waitress at the time of her disappearance. She lived with Williams and was raising her alone; her daughter\'s father was not a part of their lives. Gary had insisted Williams take a bus to spend the 1988 Christmas holidays with relatives in Shreveport. They had an argument about it at the bus station. This is the last time Williams saw her mother.\r\nAuthorities describe Gary\'s disappearance as suspicious. They stated her apartment appeared as if she had been packing to go somewhere and had been interrupted.\r\nFor about a year prior to going missing, Gary had carried a large manila envelope. She hid it under her bed and told her mother that if anything happened to her, her relatives should open the envelope and examine the contents. The envelope was missing from Gary\'s apartment after she vanished.\r\nWilliams is still searching for her mother and believes there is a possibility that she left voluntarily in 1988 and is still alive. Gary\'s case remains unsolved.', 'Baton Rouge Police Department 225-389-8617', 'sa asasasas as', 'Case is Still open'),
(49, '111111111111111111111111.png ', 'YES', 'sasaa', 'sassaas', 'Sr.', 'male', '1970-01-01', '', '', '', '2023-06-17', 21, 'sasasa', 'sasa', 'asasa', 'saa', 'asa', 'assasa', 'saas', 'saas', 'sasasasas11111', ''),
(50, 'asasas.png  ', 'EDITED222222222', 'assa11', 'saasa11', 'Sr.', 'male', '1970-01-01', '', '', 'ddsdsdsd111111111', '2023-06-01', 21, 'sasasa', 'asa', 'sasasa sd s sd', 'sasasasd sd sd', 'asaa sd sd ', 'asa ds sd sd s', 'aasa ds sd sd sd', 'assasa sd sd sd', 'sasa asas', ''),
(51, 'ss4.png ss3.png ss2.png ss1.png ss5.png ', 'Robin', 'Renea', 'Abrams', 'n/a', 'female', '1970-01-01', '', '', 'Endangered', '1962-08-08', 28, '5\\\'4, 170 pounds', 'white', 'Caucasian female. Brown hair, hazel eyes. Abrams\'s ears are pierced.', 'A white long-sleeved knit pullover, a black leather jacket, black slacks, black patent leather shoes and a gold pinky ring. Carrying a light beige patterned clutch purse.', 'n/a', 'A white long-sleeved knit pullover, a black leather jacket, black slacks, black patent leather shoes and a gold pinky ring. Carrying a light beige patterned clutch purse.', 'Abrams and her father waved to each other as they passed each other on Goodenow Road during the early evening of October 4, 1990 in her hometown of Beecher, Illinois. That\'s the last time he or anyone else saw her; she has never been heard from again.Abrams\'s vehicle, a red 1989 Dodge Daytona hatchback, turned up eleven hours later in Harvey, Illinois with the doors locked and keys still in the ignition. Her camera was in the car, but authorities located no trace of Abrams at the scene. A witness said two men in a tow truck dropped the car off at 10:00 p.m.At 3:00 a.m., a neighbor called the police to report someone breaking into the car. Investigators then linked the car to Abrams. Three days after Abrams vanished, her purse was found in a residential area three blocks away from the car\'s', 'Illinois State Police 815-726-6291', '2121212', ''),
(52, 'Start Load Preferences About Help Quit (2).png ', 'asas', 'asas', 'asas', 'Sr.', 'male', '1970-01-01', '', '', 'Family', '2023-06-01', 21, 'asas', 'asasa', 'sasasa', 'sasasa', 'asassa', 'sasasa', 'asassa', 'aaaassssssss1111', 'sasasasa', 'Case still open'),
(53, 'missing2.png ', 'Emmanuel', '', 'Almanzar', 'Sr.', 'male', '1992-12-12', 'Queens', 'New York', 'Missing', '1979-03-01', 34, '5\\\\\'6, 160 pounds', 'black', 'Hispanic male. Brown hair, brown eyes. Almanzar may have a mustache.', 'n/a', 'n/a', 'n/a', 'Almanzar was last seen at approximately 8:00 a.m. in the New York City borough of Queens on December 22, 1992. He was walking in the area of 25th Avenue at the time of his disappearance. He has never been heard from again. Few details are available in his case.', 'New York Police Department 646-610-6914', 'New York Police Department', 'Still the Case is Unsolved'),
(54, 'missing1.png ', 'Shannon', '', 'Arif', 'Sr.', 'male', '1998-07-17', 'New', 'Swill', 'Endangered', '1977-04-04', 20, ' 5\\4 - 5\\6, 90 - 100 pounds', 'white', 'Caucasian female. Blonde hair, blue eyes. Arif has a mole on her neck and a mole on the left side of her upper lip. She wears contact lenses and her ears are pierced.', 'A red and blue Tommy Hilfiger shirt, jogging pants and Nike sneakers', 'Caucasian female. Blonde hair, blue eyes. Arif has a mole on her neck and a mole on the left side of her upper lip. She wears contact lenses and her ears are pierced.', 'n/a', 'Arif was last seen in Clarksville, Tennessee on March 17, 1998. Her husband, a soldier stationed at nearby Fort Campbell, saw her before he left for work at 9:40 a.m.She was scheduled to work at Walmart from 4:30 p.m. to 9:15 p.m. that day, but she never showed up. After she didn\'t return home from work that evening, her husband went to Walmart and found her car in the parking lot, locked, with her purse still inside. He reported her missingArif has never been heard from again, and since she was last seen her bank account hasn\'t been touched. According to one coworker, she was having marital problems, and authorities looked into the possibility that she had simply left on her own, but they became suspicious after an extended time period passed with no indication of her whereabouts.A search', 'Texas Department of Public Safety\r\nNamUs\r\nMiddle Tennessee Mysteries\r\nWKRN', 'Clarksville Police Department 931-648-0656', 'Case Still open');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(15) DEFAULT NULL,
  `bedding` varchar(10) DEFAULT NULL,
  `place` varchar(10) DEFAULT NULL,
  `cusid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `type`, `bedding`, `place`, `cusid`) VALUES
(1, 'Superior Room', 'Single', 'Free', 0),
(2, 'Superior Room', 'Double', 'Free', NULL),
(3, 'Superior Room', 'Triple', 'Free', NULL),
(4, 'Single Room', 'Quad', 'Free', NULL),
(5, 'Superior Room', 'Quad', 'Free', NULL),
(6, 'Deluxe Room', 'Single', 'Free', NULL),
(7, 'Deluxe Room', 'Double', 'Free', NULL),
(8, 'Deluxe Room', 'Triple', 'Free', NULL),
(9, 'Deluxe Room', 'Quad', 'Free', NULL),
(10, 'Guest House', 'Single', 'Free', NULL),
(11, 'Guest House', 'Double', 'Free', NULL),
(12, 'Guest House', 'Quad', 'Free', NULL),
(13, 'Single Room', 'Single', 'Free', NULL),
(14, 'Single Room', 'Double', 'Free', NULL),
(15, 'Single Room', 'Triple', 'Free', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roombook`
--

CREATE TABLE `roombook` (
  `id` int(10) UNSIGNED NOT NULL,
  `Title` varchar(5) DEFAULT NULL,
  `FName` text DEFAULT NULL,
  `LName` text DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `National` varchar(30) DEFAULT NULL,
  `Country` varchar(30) DEFAULT NULL,
  `Phone` text DEFAULT NULL,
  `TRoom` varchar(20) DEFAULT NULL,
  `Bed` varchar(10) DEFAULT NULL,
  `NRoom` varchar(2) DEFAULT NULL,
  `Meal` varchar(15) DEFAULT NULL,
  `cin` date DEFAULT NULL,
  `cout` date DEFAULT NULL,
  `stat` varchar(15) DEFAULT NULL,
  `nodays` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
(50, '345889017_564300989105802_2495759701696545729_n.jpg ', 'maniqin', 'nmn', 'nmnm', 'Sr.', 'male', '1970-01-01', '', '', 'sasa1111', '2023-06-02', 21, 'nmn', 'mnm', 'nmnbm', 'bnmbnm', 'bnmbn', 'mbnmbnm as as as as ', 'bnmbnas a as as as as', 'mnbmas as as as as as', '', ''),
(55, '111111111111111111111111.png ', 'asssssssssssssss', 'asasa', 'sasasa', 'Jr.', 'female', '2023-06-22', 'asasas', 'asas', 'Missing', '2023-06-22', 21, 'sasasa', 'sasa', 'sasasa', 'sasasasasa', 'assasa', 'assasa', 'saasaa', 'saasa', 'asaasasas', '12435465'),
(56, 'ms7.png ', 'yess111111', 'sasasa', 'sasaassa', 'Sr.', 'male', '1970-01-01', '', '', 'sasasa', '2023-06-15', 21, 'assaa', 'saasa', 'sasasa', 'sasasa', 'sasasa', 'sasasaa', 'sasaa', 'sasaa', 'yesssssss', ''),
(58, 'ms5.png ', 'sasa', 'sasasa', 'assa', 'n/a', 'female', '1970-01-01', '', '', 'Lost/Injured Missing', '2023-06-09', 21, 'sasasa', 'saas', 'sasa', 'sasa', 'sasa', 'sasa', 'sasa', 'sasa', 'sasa', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `NAME` varchar(200) NOT NULL,
  `EMAIL` varchar(200) NOT NULL,
  `police_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `NAME`, `EMAIL`, `police_id`) VALUES
(16, 'admin', 'admin123', 'aaasas', 'mark@yahoo.com', '4345454545'),
(18, 'poco', 'newpass123', 'poco', 'pocoace@yahoo.com', '0976876766755');

-- --------------------------------------------------------

--
-- Table structure for table `users_approved`
--

CREATE TABLE `users_approved` (
  `id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `NAME` varchar(200) NOT NULL,
  `EMAIL` varchar(200) NOT NULL,
  `police_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users_approved`
--

INSERT INTO `users_approved` (`id`, `user_name`, `password`, `NAME`, `EMAIL`, `police_id`) VALUES
(15, 'admin', 'admin', 'ric', 'pocoace123@gmail.com', ''),
(21, 'test', 'test1', 'Ric Sivadac', 'Ric@yahoo.com', '99887118283712'),
(22, 'ric', '$2y$10$3Fjm3Uqh3IgZa1pNiUVYi.BVYJL6pA5q9zggmBkpjHQTUcii3pWby', 'Ric Si', 'pocoace123@gmail.com', '998900886678'),
(23, 'cir', '$2y$10$1W2A5ijGxdxrorF.LRbrp.cbP/ys6A9H2eV5KCDrJ06/Fhu60l7EO', 'Cir', 'Ric@yahoo.com', '88711173381');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crimrec`
--
ALTER TABLE `crimrec`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `img`
--
ALTER TABLE `img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletterlog`
--
ALTER TABLE `newsletterlog`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roombook`
--
ALTER TABLE `roombook`
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
-- Indexes for table `users_approved`
--
ALTER TABLE `users_approved`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `crimrec`
--
ALTER TABLE `crimrec`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `img`
--
ALTER TABLE `img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `newsletterlog`
--
ALTER TABLE `newsletterlog`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `records`
--
ALTER TABLE `records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `records_app`
--
ALTER TABLE `records_app`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `roombook`
--
ALTER TABLE `roombook`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users_approved`
--
ALTER TABLE `users_approved`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
