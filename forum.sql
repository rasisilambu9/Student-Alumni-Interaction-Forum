-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2021 at 07:04 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `forum`
--

-- --------------------------------------------------------

--
-- Table structure for table `alum_det`
--

CREATE TABLE `alum_det` (
  `regno` varchar(12) NOT NULL,
  `name` varchar(20) NOT NULL,
  `company` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `mail` varchar(20) NOT NULL,
  `phno` varchar(15) NOT NULL,
  `status` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alum_det`
--

INSERT INTO `alum_det` (`regno`, `name`, `company`, `dob`, `mail`, `phno`, `status`) VALUES
('820318205020', 'Raja', 'TCS', '2021-08-08', 'shan@gmail.com', '+919788781959', '1'),
('820318205030', 'ram', 'CTS', '2021-08-08', 'shan@gmail.com', '07358490838', '1'),
('bnk123', 'Silambarasan.R', 'css', '2021-08-01', 'shan@gmail.com', '9788781959', '1');

-- --------------------------------------------------------

--
-- Table structure for table `higher`
--

CREATE TABLE `higher` (
  `username` varchar(10) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Insti` varchar(20) NOT NULL,
  `instifut` varchar(30) NOT NULL,
  `course` varchar(20) NOT NULL,
  `specic` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `higher`
--

INSERT INTO `higher` (`username`, `Name`, `Insti`, `instifut`, `course`, `specic`) VALUES
('bnk123', 'Silambarasan.R', 'avcce', 'super', 'Cybersecurity', 'Real time applications describ');

-- --------------------------------------------------------

--
-- Table structure for table `inplant`
--

CREATE TABLE `inplant` (
  `username` varchar(10) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `company` varchar(20) NOT NULL,
  `posting` varchar(20) NOT NULL,
  `prerequiste` varchar(30) NOT NULL,
  `contact` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inplant`
--

INSERT INTO `inplant` (`username`, `Name`, `company`, `posting`, `prerequiste`, `contact`) VALUES
('', '', '', '', '', ''),
('18IT25', 'Silambarasan.R', 'பெரிய ஆலை தெரு திருவ', 'Developer', 'You need to develop a game app', '+919788781');

-- --------------------------------------------------------

--
-- Table structure for table `intern`
--

CREATE TABLE `intern` (
  `username` varchar(10) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `company` varchar(20) NOT NULL,
  `posting` varchar(20) NOT NULL,
  `prerequiste` varchar(30) NOT NULL,
  `contact` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `intern`
--

INSERT INTO `intern` (`username`, `Name`, `company`, `posting`, `prerequiste`, `contact`) VALUES
('bnk123', 'Silambarasan.R', 'TCS', 'Developer', 'work in person', '+91978878195'),
('18IT25', 'Silambarasan.R', 'we', 'Developer', 'work in person', '+91978878195');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `username` varchar(10) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `company` varchar(20) NOT NULL,
  `posting` varchar(20) NOT NULL,
  `desc` varchar(40) NOT NULL,
  `contact` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`username`, `Name`, `company`, `posting`, `desc`, `contact`) VALUES
('bnk123', 'Silambarasan.R', 'CTS', 'c++ developer', 'You need to develop a game application', '+919788781959');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `regno` varchar(15) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Request` varchar(30) NOT NULL,
  `reqid` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`regno`, `Name`, `Request`, `reqid`) VALUES
('bnk123', 'Silambarasan.R', 'You need to develop a game app', 0);

-- --------------------------------------------------------

--
-- Table structure for table `response`
--

CREATE TABLE `response` (
  `responsed` varchar(100) NOT NULL,
  `reqid` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `response`
--

INSERT INTO `response` (`responsed`, `reqid`) VALUES
('It is simple process', '0'),
('It is simple process', '0'),
('It is simple process', '0'),
('It is simple process', '0'),
('It is simple process', '0'),
('It is simple process', '0'),
('It is simple process', '0'),
('It is simple process', '0'),
('It is simple process', '0'),
('It is simple process', '0'),
('It is simple process', '0'),
('It is simple process', '0'),
('It is simple process', '0'),
('It is simple process', '0'),
('It is simple process', '0'),
('It is simple process', '0'),
('It is simple process', '0'),
('It is simple process', '0'),
('It is simple process', '0'),
('It is simple process', '0'),
('It is simple process', '0'),
('It is simple process', '0'),
('It is simple process', '0'),
('It is simple process', '0'),
('It is simple process', '0'),
('It is simple process', '0'),
('It is simple process', '0'),
('It is simple process', '0'),
('It is simple process', '0'),
('It is simple process', '0'),
('It is simple process', '0'),
('TCS selection process is simple', '0'),
('selection made you smile', '0'),
('selection made you smile', '0'),
('selection made you smile', '0'),
('selection made you smile', '0'),
('selection made you smile', '0'),
('selection made you smile', '0'),
('selection made you smile', '0'),
('selection made you smile', '0'),
('TCS selection process is simple', '0');

-- --------------------------------------------------------

--
-- Table structure for table `stud_det`
--

CREATE TABLE `stud_det` (
  `regno` varchar(15) NOT NULL,
  `name` varchar(30) NOT NULL,
  `academic` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `mail` varchar(20) NOT NULL,
  `phno` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stud_det`
--

INSERT INTO `stud_det` (`regno`, `name`, `academic`, `dob`, `mail`, `phno`) VALUES
('18', 'Silambarasan.R', '2001-2005', '2021-08-08', 'rasisilambu9@gmail.c', '+91978878195'),
('18IT26', 'Silambarasan.R', '2001-2005', '2021-08-08', 'rasisilambu9@gmail.c', '+91978878195');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`reqid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
