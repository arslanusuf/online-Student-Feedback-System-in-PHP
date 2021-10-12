-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2020 at 09:33 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college-of-it`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(30) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `password` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `Name`, `admin_email`, `password`) VALUES
(1, 'Admin', 'admin@gmail.com', 'abc');

-- --------------------------------------------------------

--
-- Table structure for table `user_register_tbl`
--

CREATE TABLE `user_register_tbl` (
  `id` int(50) NOT NULL,
  `select_course` enum('BSCS','BSIT','BSSE','MCS','MIT') NOT NULL,
  `name` varchar(256) NOT NULL,
  `name_of_gardian` varchar(256) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `address` varchar(256) NOT NULL,
  `contact_no` int(11) NOT NULL,
  `Selectf` enum('1','2','3','4','5') NOT NULL,
  `Q1` enum('Strongly Agreed','Agreed','Good','Disagreed','Strongly Disagreed') NOT NULL,
  `Q2` enum('Strongly Agreed','Agreed','Good','Disagreed','Strongly Disagreed') NOT NULL,
  `Q3` enum('Strongly Agreed','Agreed','Good','Disagreed','Strongly Disagreed') NOT NULL,
  `Q4` enum('Strongly Agreed','Agreed','Good','Disagreed','Strongly Disagreed') NOT NULL,
  `Q5` enum('Strongly Agreed','Agreed','Good','Disagreed','Strongly Disagreed') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_register_tbl`
--

INSERT INTO `user_register_tbl` (`id`, `select_course`, `name`, `name_of_gardian`, `gender`, `email`, `password`, `address`, `contact_no`, `Selectf`, `Q1`, `Q2`, `Q3`, `Q4`, `Q5`) VALUES
(1, 'BSIT', 'sad', 'dasdas', 'Male', 'admin', 'admin', 'ajdahj', 2147483647, '', 'Strongly Agreed', 'Strongly Agreed', 'Strongly Agreed', 'Strongly Agreed', 'Strongly Agreed'),
(2, 'BSCS', '32', '33', 'Male', '32432', '32423', '4fgf', 2432, '', 'Strongly Agreed', 'Strongly Agreed', 'Strongly Agreed', 'Strongly Agreed', 'Strongly Agreed'),
(3, 'BSSE', '', 'dsad', '', 'akshds@hjdas.com	', '', 'dsadsak jlkasdrjhlehtkureh tyt34 4fjj', 2147483647, '', 'Strongly Agreed', 'Strongly Agreed', 'Strongly Agreed', 'Strongly Agreed', 'Strongly Agreed'),
(4, 'MCS', '', 'dsad', '', '', '', '', 0, '', 'Strongly Agreed', 'Strongly Agreed', 'Strongly Agreed', 'Strongly Agreed', 'Strongly Agreed'),
(5, 'MIT', 'dasd', 'asd', '', '', '', '', 0, '', 'Strongly Agreed', 'Strongly Agreed', 'Strongly Agreed', 'Strongly Agreed', 'Strongly Agreed'),
(6, 'BSCS', 'Adeel', 'Saeed', '', 'Adeel@admin.com', 'Admin', 'asdjklsdjkl', 433242, '', 'Strongly Agreed', 'Strongly Agreed', 'Strongly Agreed', 'Strongly Agreed', 'Strongly Agreed'),
(7, 'BSIT', 'Alii', 'AAAAA', 'Male', 'AAA@gmail.com', '123', 'gvaergvagva', 321564401, '1', 'Strongly Agreed', 'Strongly Agreed', 'Strongly Agreed', 'Strongly Agreed', 'Strongly Agreed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_register_tbl`
--
ALTER TABLE `user_register_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_register_tbl`
--
ALTER TABLE `user_register_tbl`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
