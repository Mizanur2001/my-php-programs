-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2021 at 04:54 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bahmrs`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `sl_no` int(10) NOT NULL,
  `roll_no` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `bengali` int(10) NOT NULL,
  `be_s1_p` int(10) NOT NULL,
  `be_s2_w` int(10) NOT NULL,
  `be_s2_p` int(10) NOT NULL,
  `be_s3_w` int(10) NOT NULL,
  `be_s3_p` int(10) NOT NULL,
  `english` int(10) NOT NULL,
  `en_s1_p` int(10) NOT NULL,
  `en_s2_w` int(10) NOT NULL,
  `en_s2_p` int(10) NOT NULL,
  `en_s3_w` int(10) NOT NULL,
  `en_s3_p` int(10) NOT NULL,
  `history` int(10) NOT NULL,
  `hi_s1_p` int(10) NOT NULL,
  `hi_s2_w` int(10) NOT NULL,
  `hi_s2_p` int(10) NOT NULL,
  `hi_s3_w` int(10) NOT NULL,
  `hi_s3_p` int(10) NOT NULL,
  `geography` int(10) NOT NULL,
  `ge_s1_p` int(10) NOT NULL,
  `ge_s2_w` int(10) NOT NULL,
  `ge_s2_p` int(10) NOT NULL,
  `ge_s3_w` int(10) NOT NULL,
  `ge_s3_p` int(10) NOT NULL,
  `mathematics` int(10) NOT NULL,
  `ma_s1_p` int(10) NOT NULL,
  `ma_s2_w` int(10) NOT NULL,
  `ma_s2_p` int(10) NOT NULL,
  `ma_s3_w` int(10) NOT NULL,
  `ma_s3_p` int(10) NOT NULL,
  `physics` int(10) NOT NULL,
  `ph_s1_p` int(10) NOT NULL,
  `ph_s2_w` int(10) NOT NULL,
  `ph_s2_p` int(10) NOT NULL,
  `ph_s3_w` int(10) NOT NULL,
  `ph_s3_p` int(10) NOT NULL,
  `l.science` int(10) NOT NULL,
  `li_s1_p` int(10) NOT NULL,
  `li_s2_w` int(10) NOT NULL,
  `li_s2_p` int(10) NOT NULL,
  `li_s3_w` int(10) NOT NULL,
  `li_s3_p` int(10) NOT NULL,
  `islam_parichay` int(10) NOT NULL,
  `is_s1_p` int(10) NOT NULL,
  `is_s2_w` int(10) NOT NULL,
  `is_s2_p` int(10) NOT NULL,
  `is_s3_w` int(10) NOT NULL,
  `is_s3_p` int(10) NOT NULL,
  `arabic` int(10) NOT NULL,
  `ar_s1_p` int(10) NOT NULL,
  `ar_s2_w` int(10) NOT NULL,
  `ar_s2_p` int(10) NOT NULL,
  `ar_s3_w` int(10) NOT NULL,
  `ar_s3_p` int(10) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp(),
  `desc(only for database)` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`sl_no`, `roll_no`, `name`, `bengali`, `be_s1_p`, `be_s2_w`, `be_s2_p`, `be_s3_w`, `be_s3_p`, `english`, `en_s1_p`, `en_s2_w`, `en_s2_p`, `en_s3_w`, `en_s3_p`, `history`, `hi_s1_p`, `hi_s2_w`, `hi_s2_p`, `hi_s3_w`, `hi_s3_p`, `geography`, `ge_s1_p`, `ge_s2_w`, `ge_s2_p`, `ge_s3_w`, `ge_s3_p`, `mathematics`, `ma_s1_p`, `ma_s2_w`, `ma_s2_p`, `ma_s3_w`, `ma_s3_p`, `physics`, `ph_s1_p`, `ph_s2_w`, `ph_s2_p`, `ph_s3_w`, `ph_s3_p`, `l.science`, `li_s1_p`, `li_s2_w`, `li_s2_p`, `li_s3_w`, `li_s3_p`, `islam_parichay`, `is_s1_p`, `is_s2_w`, `is_s2_p`, `is_s3_w`, `is_s3_p`, `arabic`, `ar_s1_p`, `ar_s2_w`, `ar_s2_p`, `ar_s3_w`, `ar_s3_p`, `time`, `desc(only for database)`) VALUES
(1, 1, 'Mizanur Rahaman', 33, 8, 37, 9, 78, 10, 35, 9, 37, 10, 75, 10, 29, 7, 28, 9, 78, 10, 33, 9, 35, 10, 79, 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2021-10-09 18:50:04', ''),
(2, 2, 'James Lev', 29, 7, 35, 10, 82, 6, 37, 9, 29, 7, 71, 10, 28, 8, 30, 9, 81, 9, 37, 10, 29, 8, 82, 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2021-10-09 18:50:20', ''),
(3, 3, 'Sruti dey', 32, 8, 28, 10, 87, 5, 31, 10, 25, 8, 68, 10, 26, 7, 25, 8, 75, 10, 38, 9, 29, 10, 83, 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2021-10-09 18:50:32', ''),
(4, 4, 'Rushad-Al-Amin', -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2021-10-09 18:50:49', ''),
(5, 5, 'Saikat Sarker ', -2, -2, -2, -2, -2, -2, -2, -2, -2, -2, -2, -2, -2, -2, -2, -2, -2, -2, -2, -2, -2, -2, -2, -2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2021-10-09 18:50:59', '');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `sl_no` int(10) NOT NULL,
  `name` varchar(60) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `u_name` varchar(80) NOT NULL,
  `password` varchar(50) NOT NULL,
  `desc(only for database)` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`sl_no`, `name`, `subject`, `u_name`, `password`, `desc(only for database)`) VALUES
(1, 'Md Akher Ali(@ct)', 'English-ct', '@ct', '123', 'Sl_no 1 is only for class teacher '),
(2, 'Nilesh Roy', 'Bengali', '@be', '123', ' Sl_no 2 is reserved for bengali'),
(3, 'Md Akher Ali', 'English', '@en', '123', ' Sl_no 3 is reserved for English '),
(4, 'Shramana Roy', 'History', '@hi', '123', ' Sl_no 4 is reserved for History'),
(5, 'Asad Ali', 'Geography', '@ge', '123', ' Sl_no 5 is reserved for Geography'),
(6, 'Kushal Mondal', 'Mathematics', '@ma', '123', ' Sl_no 6 is reserved for Mathematics'),
(7, 'Mizanur Rahaman', 'Physics', '@ph', '123', ' Sl_no 7 is reserved for Physics'),
(8, 'sruti Dey', 'L.Science', '@li', '123', ' Sl_no 8 is reserved for l.sciencs'),
(9, 'Md Rushad Al Amin', 'Islam parichay', '@is', '123', ' Sl_no 9 is reserved for islam parichya'),
(10, 'Md Auranzeb', 'Arabic', '@ar', '123', ' Sl_no 10 is reserved for arabic'),
(11, 'N/A', 'N/A', '@ms', '123', 'Sl_no 11 is only for marksheet access  '),
(12, 'N/A', 'N/A', '@tb', '123', 'Sl_no 12 is only for tabulation access  ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`sl_no`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`sl_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `sl_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `sl_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
