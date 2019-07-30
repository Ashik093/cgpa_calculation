-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2019 at 05:05 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cgpa`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `user_name`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student_l3t1`
--

CREATE TABLE `tbl_student_l3t1` (
  `name` varchar(255) NOT NULL,
  `id` varchar(255) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `term` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cse_301` varchar(255) NOT NULL,
  `cse_302` varchar(255) NOT NULL,
  `cse_303` varchar(255) NOT NULL,
  `cse_304` varchar(255) NOT NULL,
  `cse_305` varchar(255) NOT NULL,
  `cse_306` varchar(255) NOT NULL,
  `cse_307` varchar(255) NOT NULL,
  `cse_308` varchar(255) NOT NULL,
  `cse_309` varchar(255) NOT NULL,
  `cgpa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_student_l3t1`
--

INSERT INTO `tbl_student_l3t1` (`name`, `id`, `dept`, `level`, `term`, `gender`, `phone`, `password`, `cse_301`, `cse_302`, `cse_303`, `cse_304`, `cse_305`, `cse_306`, `cse_307`, `cse_308`, `cse_309`, `cgpa`) VALUES
('Rakibul islam', '1103066', 'cse', '3', '1', '1', '017855622555', '1103066', '80', '76', '50', '89', '65', '71', '66', '88', '60', '3.48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_student_l3t1`
--
ALTER TABLE `tbl_student_l3t1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
