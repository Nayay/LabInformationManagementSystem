-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 06, 2020 at 04:38 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `LIMS`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `newbatch`
--

CREATE TABLE `newbatch` (
  `batchid` int(11) NOT NULL,
  `receivedby` varchar(50) NOT NULL,
  `site` varchar(50) NOT NULL,
  `batchname` varchar(50) NOT NULL,
  `cocnumber` int(20) NOT NULL,
  `client` varchar(50) NOT NULL,
  `datetimereceived` varchar(10) NOT NULL,
  `ponumber` varchar(50) NOT NULL,
  `project` varchar(50) NOT NULL,
  `quote` varchar(50) NOT NULL,
  `submittedby` varchar(50) NOT NULL,
  `invoiceto` varchar(50) NOT NULL,
  `sampletype` varchar(50) NOT NULL,
  `prepcode` varchar(50) NOT NULL,
  `noofsamples` int(20) NOT NULL,
  `containers` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `specialinstructions` varchar(20) NOT NULL,
  `reportto` varchar(20) NOT NULL,
  `selectednames` varchar(50) NOT NULL,
  `addpackage` varchar(20) NOT NULL,
  `selectedpackages` varchar(20) NOT NULL,
  `addflag` varchar(20) NOT NULL,
  `selectedflags` varchar(20) NOT NULL,
  `duedate` varchar(10) NOT NULL,
  `shipper` varchar(20) NOT NULL,
  `shipperreference` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newbatch`
--

INSERT INTO `newbatch` (`batchid`, `receivedby`, `site`, `batchname`, `cocnumber`, `client`, `datetimereceived`, `ponumber`, `project`, `quote`, `submittedby`, `invoiceto`, `sampletype`, `prepcode`, `noofsamples`, `containers`, `status`, `specialinstructions`, `reportto`, `selectednames`, `addpackage`, `selectedpackages`, `addflag`, `selectedflags`, `duedate`, `shipper`, `shipperreference`) VALUES
(38, 'Aman', 'Canada', 'HAhhhhhh', 768787767, 'Two', '7678678', 'Two', 'Two', 'Two', 'Two', 'Two', 'St_Two', 'Two', 2, '2', 'Two', 'hiiii', 'Two', 'kjhkjnskjn hjhgu', 'Two', 'hfgjgjhkjh', 'Two', 'hghjgjhj', '7676787', 'Two', 'jgjhhk'),
(47, 'Nayayjeet Sharma', 'India', 'Neo', 757587, 'David', '2', 'One', 'P_One', 'Q_One', 'S_One', 'StOne', 'St_One', 'Pr_One', 3, '1', 'S_One', 'Store them in cool p', 'One', 'Prabhjot', 'Pac_One', 'Yes', 'F_One', 'Res', '3', 'S_One', '785875'),
(48, 'Prabhjot Kaur', 'Canada', '778578', 55867, 'Harry', '07/07/2020', 'One', 'P_One', 'Q_One', 'S_One', 'St_One', 'St_One', 'Pr_One', 2, '3', 'S_One', 'Handle with care', 'Re_One', 'No', 'Pac_One', '2', 'F_One', '3', '07/08/2020', 'S_One', '3435'),
(49, 'Kunal', 'Canada', 'BatchOne', 2147483647, 'Harry', '04/22/20', 'Two', 'P_One', 'Q_One', 'S_Three', 'St_One', 'St_One', 'Pr_One', 3, '5', 'S_One', 'htryutuikjh', 'Re_One', 'david, aman', 'Pac_One', 'pacone', 'F_One', 'flagone', '04/24/20', 'S_One', 'harry');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `gender` varchar(2) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `number` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `firstname`, `lastname`, `gender`, `email`, `password`, `number`) VALUES
(6, 'Aman', 'Kaur', 'f', 'aman@gmail.com', 'uuu', 687879),
(42, 'Prabh', 'Singh', 'Ma', 'p@gmail.com', 'ppp', 76576887),
(43, 'Nayayjeet', 'Sharma', 'm', 'snayay@gmail.com', 'test', 6477039080),
(44, 'Prabhjot', 'Kaur', 'f', 'prabhjotpannu78@gmail.com', 'test', 3652288211),
(45, 'kunal', 'gaba', 'm', 'kunalgaba44@gmail.com', 'test', 6477039080),
(46, 'Nayayjeet', 'Sharma', 'm', 'snayay@gmail.com', 'test', 6477039080);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `newbatch`
--
ALTER TABLE `newbatch`
  ADD PRIMARY KEY (`batchid`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `newbatch`
--
ALTER TABLE `newbatch`
  MODIFY `batchid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
