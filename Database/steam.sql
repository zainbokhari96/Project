-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2019 at 12:25 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `steam`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `contact_id` int(100) NOT NULL,
  `con_name` varchar(200) NOT NULL,
  `con_email` varchar(200) NOT NULL,
  `con_phone` varchar(50) NOT NULL,
  `con_subject` varchar(100) NOT NULL,
  `con_messege` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`contact_id`, `con_name`, `con_email`, `con_phone`, `con_subject`, `con_messege`) VALUES
(2, 'Syed Zain Ali Bokhari', 'syedzainbokhari@outlook.com', '2147483647', 'service', 'Checking'),
(3, 'Syed Zain Ali Bokhari', 'syedzainbokhari@outlook.com', '2147483647', 'suggestions', 'Hello World'),
(4, 'Bokhari', 'syedzainbokhari@outlook.com', '03124141195', 'suggestions', 'phone correction'),
(5, 'shah', 'shah@gmail.com', '03154845616', 'suggestions', 'hi ! ');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `reg_id` int(100) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `confrim_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`reg_id`, `first_name`, `last_name`, `gender`, `dob`, `email`, `password`, `confrim_password`) VALUES
(1, 'Syed Zain Ali', 'Bokhari', 'Male', '1996-10-24', 'syedzainbokhari@outlook.com', 'test', 'test'),
(2, 'Zeeshan', 'Ali', 'Male', '1998-12-16', 'abc@outlook.com', 'passcode', 'passcode'),
(3, 'Daniyal', 'Jamshed', 'Male', '1996-06-15', 'oyedaniyal@gmail.com', 'dani', 'dani'),
(4, 'Hamza', 'butt', 'Male', '1995-12-12', 'hamzabutt@gmail.com', 'butt', 'butt');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`reg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `contact_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `reg_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
