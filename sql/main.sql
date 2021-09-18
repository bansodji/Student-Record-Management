-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2021 at 08:24 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `students_data`
--

CREATE TABLE `students_data` (
  `id` int(255) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `age` int(2) NOT NULL,
  `department` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students_data`
--

INSERT INTO `students_data` (`id`, `fullname`, `age`, `department`) VALUES
(1, 'Ashish Bansod', 22, 'MCA'),
(3, 'Aman Verma', 20, 'EEE'),
(4, 'Abhishek Manikpuri', 22, 'ETNT'),
(12, 'Abhinav Talpade', 21, 'IT'),
(13, 'Mohit Jethmalani', 23, 'B.Com'),
(14, 'Vivek Dewangan', 22, 'MCA'),
(15, 'Palak Muchchal', 32, 'Music'),
(18, 'Bhawana Patel', 22, 'B.Sc'),
(20, 'Rupshree Chauhan', 21, 'B.Com'),
(21, 'Bhumika Joshi', 22, 'BBA'),
(22, 'Avantika Rathi', 21, 'MBBS'),
(23, 'Monisha Gaikward', 23, 'LLB'),
(24, 'Runjal singh Rajput', 22, 'B.Com'),
(25, 'Prakhar Srivastav', 21, 'BCA'),
(26, 'Rohit Pant', 23, 'B.Com'),
(27, 'Vaibhav Dewangan', 19, 'B.Sc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students_data`
--
ALTER TABLE `students_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students_data`
--
ALTER TABLE `students_data`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
