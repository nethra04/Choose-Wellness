-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 20, 2021 at 01:41 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id15874428_choosewelness`
--

-- --------------------------------------------------------

--
-- Table structure for table `autogenerate`
--

CREATE TABLE `autogenerate` (
  `employee_id` int(11) NOT NULL,
  `record_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `emp_fname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `emp_lname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `emp_department` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `emp_position` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `emp_gender` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `emp_email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `emp_phone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `emp_address` longtext COLLATE utf8_unicode_ci NOT NULL,
  `emp_bloodgroup` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `emp_password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `emp_regdate` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `medical_record`
--

CREATE TABLE `medical_record` (
  `rcd_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `emp_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `rcd_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `rcd_file` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `rcd_date` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `entry_date` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stats`
--

CREATE TABLE `stats` (
  `stat_id` int(50) NOT NULL,
  `emp_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sugar` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pressure1` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pressure2` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `heart_rate` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `oxygen` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `respiration` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `stat_date` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `autogenerate`
--
ALTER TABLE `autogenerate`
  ADD PRIMARY KEY (`employee_id`,`record_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `medical_record`
--
ALTER TABLE `medical_record`
  ADD PRIMARY KEY (`rcd_id`);

--
-- Indexes for table `stats`
--
ALTER TABLE `stats`
  ADD PRIMARY KEY (`stat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stats`
--
ALTER TABLE `stats`
  MODIFY `stat_id` int(50) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
