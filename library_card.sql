-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2016 at 08:40 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library_card`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `uname` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`uname`, `password`) VALUES
('Shiv_Tulsi', 'shiv@123');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `bk_name` varchar(200) NOT NULL,
  `sort_name` varchar(100) NOT NULL,
  `author` varchar(200) NOT NULL,
  `total` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`bk_name`, `sort_name`, `author`, `total`) VALUES
('basic computer', 'computer', 'arihant', '100'),
('compiler design', 'cd', 'shivani publication', '130'),
('operating system', 'os', 'kamal publication', '100'),
('python', 'python', 'shivani publication', '12');

-- --------------------------------------------------------

--
-- Table structure for table `cards`
--

CREATE TABLE `cards` (
  `crd_n` int(200) NOT NULL,
  `Roll_n` varchar(200) NOT NULL,
  `sts` varchar(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `branch` varchar(200) NOT NULL,
  `sem` varchar(200) NOT NULL,
  `addr` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `issuebooks`
--

CREATE TABLE `issuebooks` (
  `name` varchar(100) NOT NULL,
  `roll_n` varchar(200) NOT NULL,
  `crd_n` int(200) NOT NULL,
  `bk_number` int(200) NOT NULL,
  `bk_name` varchar(100) NOT NULL,
  `author` varchar(200) NOT NULL,
  `issue_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `new_book`
--

CREATE TABLE `new_book` (
  `book_name` varchar(100) NOT NULL,
  `sort_name` varchar(100) NOT NULL,
  `author` varchar(110) NOT NULL,
  `status` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `new_book`
--

INSERT INTO `new_book` (`book_name`, `sort_name`, `author`, `status`, `date`) VALUES
('php', 'php', 'E balagurusamy', 'upcomming', '2022-04-30');

-- --------------------------------------------------------

--
-- Table structure for table `submittedbooks`
--

CREATE TABLE `submittedbooks` (
  `name` varchar(100) NOT NULL,
  `roll_n` varchar(100) NOT NULL,
  `crd_n` int(100) NOT NULL,
  `book_num` int(200) NOT NULL,
  `bk_name` varchar(200) NOT NULL,
  `author` varchar(200) NOT NULL,
  `issue_d` date NOT NULL,
  `submit_d` date NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `submittedbooks`
--

INSERT INTO `submittedbooks` (`name`, `roll_n`, `crd_n`, `book_num`, `bk_name`, `author`, `issue_d`, `submit_d`, `status`) VALUES
('AR Vishal', '0601IT201901', 841346, 452623, 'operating system', 'shivani prakashan', '2022-04-03', '2016-07-15', 'Submitted');

-- --------------------------------------------------------

--
-- Table structure for table `s_details`
--

CREATE TABLE `s_details` (
  `name` varchar(200) NOT NULL,
  `father_name` varchar(200) NOT NULL,
  `Branch` varchar(100) NOT NULL,
  `Roll_no` varchar(200) NOT NULL,
  `admission_date` date NOT NULL,
  `sem` varchar(200) NOT NULL,
  `category` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(200) NOT NULL,
  `admission_round` varchar(200) NOT NULL,
  `clg_name` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `s_details`
--

INSERT INTO `s_details` (`name`, `father_name`, `Branch`, `Roll_no`, `admission_date`, `sem`, `category`, `address`, `mobile`, `email`, `dob`, `gender`, `admission_round`, `clg_name`, `status`) VALUES
('Shiv singh parihar', 'Parihar shab', 'IT', '0203IT203D06', '2022-12-01', 'VII', 'GEN', 'khamrehi nagod satna', '12345678910', 'shiv@gmail.com', '2022-12-01', 'Male', 'CLC', 'Hitkarini College of Engineering and Technology Jabalpur', 'Not Verified'),
('bhupendra AHIRWAR', 'xyzmmmm', 'IT', '0601IT203D02', '2016-07-14', 'VI', 'SC', 'khurai sagar MP', '6532684512', 'bhupendra@gmail.com', '2016-07-26', 'Male', 'clc', 'IGEC sagar MP(1981)', 'Not Verified'),
('raj', 'kumar', 'IT', '0601IT203d04', '0000-00-00', '6sem', 'obc', 'satna', '9516825336', 'raj@gmail.com', '2021-10-15', 'male', 'clc', 'IGEC(Indira gandhi engineering college sagar)', 'Verified'),
('shiv sambhu', 'puswa bunkar', 'Mech', '0601IT203D05', '2016-07-26', 'VI', 'SC', 'mediaRas Anuppur MP', '8956231245', 'shiv@gmail.com', '2016-07-13', 'Male', 'second', 'IGEC sagar MP(1981)', 'Verified'),
('vikash kumar kori', 'purushottam lal', 'IT', '0601IT203D06', '2016-07-15', 'VI', 'SC', 'chandkuiya nagod Satna MP', '9109484112', 'badshahh@gmail.com', '2000-06-04', 'Male', 'CLC', 'IGCE sagar MP(1981)', 'Verified');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`uname`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`bk_name`);

--
-- Indexes for table `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`crd_n`,`Roll_n`);

--
-- Indexes for table `issuebooks`
--
ALTER TABLE `issuebooks`
  ADD PRIMARY KEY (`bk_number`);

--
-- Indexes for table `new_book`
--
ALTER TABLE `new_book`
  ADD PRIMARY KEY (`book_name`);

--
-- Indexes for table `submittedbooks`
--
ALTER TABLE `submittedbooks`
  ADD PRIMARY KEY (`book_num`);

--
-- Indexes for table `s_details`
--
ALTER TABLE `s_details`
  ADD PRIMARY KEY (`Roll_no`,`mobile`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
