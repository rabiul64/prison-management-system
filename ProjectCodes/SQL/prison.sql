-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2018 at 04:11 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prison`
--

-- --------------------------------------------------------

--
-- Table structure for table `duty_officer`
--

CREATE TABLE `duty_officer` (
  `officer_id` int(10) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `rank` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `blood_group` varchar(255) NOT NULL,
  `salary` int(10) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `joining_date` date NOT NULL,
  `working_shift` varchar(255) NOT NULL,
  `contact_no` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `duty_officer`
--

INSERT INTO `duty_officer` (`officer_id`, `last_name`, `first_name`, `rank`, `gender`, `blood_group`, `salary`, `religion`, `joining_date`, `working_shift`, `contact_no`) VALUES
(3, 'fadsfas', 'asfasf', 'sdfasf', 'Male', 'AB Unknown', 0, 'Islam', '2018-11-16', 'sadfasf', 'safasf'),
(4, 'sdafsaf', 'safas', 'fasfdasf', 'Male', 'AB Unknown', 0, 'Islam', '2018-11-09', 'asdfasf', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employee_id` int(10) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `age` int(10) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `blood_group` varchar(255) NOT NULL,
  `department_name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `joining_date` date NOT NULL,
  `salary` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `last_name`, `first_name`, `gender`, `age`, `religion`, `blood_group`, `department_name`, `phone`, `joining_date`, `salary`) VALUES
(2, 'sdasd', 'asdas', 'Male', 2018, 'Islam', 'A Positive', 'asdasd', '123123', '0000-00-00', 1212);

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `id` int(15) NOT NULL,
  `names` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `exam` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`id`, `names`, `date`, `exam`) VALUES
(2, 'fahim hasan', '2017-12-16', 'honors'),
(3, 'adfksj', '2018-11-02', 'ssc'),
(4, 'dsafadsf', '2018-11-02', 'honors');

-- --------------------------------------------------------

--
-- Table structure for table `prisoner`
--

CREATE TABLE `prisoner` (
  `prisoner_id` int(10) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `age` int(10) NOT NULL,
  `blood_group` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `criminal_type` varchar(255) NOT NULL,
  `crime_type` varchar(255) NOT NULL,
  `arrival_date` date NOT NULL,
  `allocated_cell` varchar(255) NOT NULL,
  `case_no` varchar(255) NOT NULL,
  `cell` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prisoner`
--

INSERT INTO `prisoner` (`prisoner_id`, `last_name`, `first_name`, `gender`, `age`, `blood_group`, `address`, `criminal_type`, `crime_type`, `arrival_date`, `allocated_cell`, `case_no`, `cell`) VALUES
(9, 'hossain', 'Razib', 'Male', 23, 'A Positive', 'dhaka', 'New', 'Murder', '2017-04-01', 'a10', '20', ''),
(11, 'hasan', 'fahim', 'Male', 35, 'A Positive', 'Akbarshah railway housing society, pahartoli', 'New', 'Murder', '2017-12-21', '35', '200', ''),
(12, 'fahim', 'hasan', 'Male', 2017, 'A Positive', 'Akbarshah railway housing society, pahartoli', 'New', 'Murder', '2017-12-30', '569874', '999', 'Youth cell'),
(15, 'FAHAD', 'adsfasf', 'Male', 2018, 'A Positive', 'asdfasf', 'New', 'Murder', '2018-11-14', '12312', '123123', 'Youth cell'),
(17, 'sdafs', 'fsadfs', 'Others', 2018, 'A Positive', 'safasf', 'New', 'Murder', '2018-11-23', 'asfsa', 'sfs', 'General Population'),
(18, 'adfasf', 'safasfasf', 'Male', 2018, 'A Positive', '123213', 'New', 'Murder', '2018-11-02', '1231', '12321', 'General Population');

-- --------------------------------------------------------

--
-- Table structure for table `prison_doctor`
--

CREATE TABLE `prison_doctor` (
  `doctor_id` int(50) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `speciality` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `salary` int(50) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `blood_group` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `joining_date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prison_doctor`
--

INSERT INTO `prison_doctor` (`doctor_id`, `last_name`, `first_name`, `speciality`, `gender`, `salary`, `religion`, `blood_group`, `phone`, `joining_date`) VALUES
(7, 'asdff', 'asdfasf', 'dsfasf', 'Male', 0, 'Islam', 'A Positive', 'asdfsa', '2018-11-20'),
(9, '232213', '123123', '213123', 'Male', 12312, 'Islam', 'A Positive', '123213', '2018-11-17');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_type` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_type`, `username`, `password`) VALUES
('admin', 'robiul09', '01751164664');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `visitor_id` int(50) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `arrival_date` date NOT NULL,
  `arrival_time` varchar(255) NOT NULL,
  `visited_to` int(11) NOT NULL,
  `search_prisoner_ID` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`visitor_id`, `last_name`, `first_name`, `mobile`, `address`, `arrival_date`, `arrival_time`, `visited_to`, `search_prisoner_ID`) VALUES
(1, 'golder', 'sabuj', '234234', 'khulna', '2017-04-01', '23.42.34', 23, ''),
(2, 'hossain', 'sabuj', '234234', 'khulna', '2017-04-01', '23.42.34', 23, ''),
(3, 'fahim', 'hasan', '01676081282', 'Akbarshah railway housing society, pahartoli', '2017-12-01', '3:10', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `duty_officer`
--
ALTER TABLE `duty_officer`
  ADD PRIMARY KEY (`officer_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prisoner`
--
ALTER TABLE `prisoner`
  ADD PRIMARY KEY (`prisoner_id`);

--
-- Indexes for table `prison_doctor`
--
ALTER TABLE `prison_doctor`
  ADD PRIMARY KEY (`doctor_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_type`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`visitor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `duty_officer`
--
ALTER TABLE `duty_officer`
  MODIFY `officer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employee_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `prisoner`
--
ALTER TABLE `prisoner`
  MODIFY `prisoner_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `prison_doctor`
--
ALTER TABLE `prison_doctor`
  MODIFY `doctor_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `visitor_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
