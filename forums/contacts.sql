-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2021 at 06:15 AM
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
-- Database: `contacts`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts_mizanur`
--

CREATE TABLE `contacts_mizanur` (
  `sno` int(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `concern` varchar(500) NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp(),
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts_mizanur`
--

INSERT INTO `contacts_mizanur` (`sno`, `email`, `concern`, `dt`, `name`) VALUES
(1, 'jameslev2001@gmail.com', 'Hello.. I am the owner of virtual World...', '2021-05-23 15:41:17', 'Mizanur Rahaman'),
(2, 'ssaikat226@gmail.com', 'For Teaching purpose....', '2021-05-24 12:10:51', 'Saikat Sarkar '),
(3, 'amina2002@gmail.com', 'I want to meat Mizanur regarding SQL server problem.... I am the CEO of Virtual  world  (Amina  Siddique)...\r\n', '2021-05-24 12:22:55', 'Amina Siddique'),
(4, 'rushadalamin1@gmail.com', 'I am the owner of NRG Company I want to meat Mizanur regarding Bigness Purpose....   ', '2021-05-24 12:26:17', 'Md. Rurhad al amin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts_mizanur`
--
ALTER TABLE `contacts_mizanur`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts_mizanur`
--
ALTER TABLE `contacts_mizanur`
  MODIFY `sno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
