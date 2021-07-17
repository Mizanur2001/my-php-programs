-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2021 at 06:32 PM
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
-- Database: `r_shole`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(10) NOT NULL,
  `comment_content` text NOT NULL,
  `thread_id` int(10) NOT NULL,
  `comment_by` int(10) NOT NULL,
  `comment_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_content`, `thread_id`, `comment_by`, `comment_time`) VALUES
(1, 'this is admin comment', 1, 1, '2021-06-12 21:19:34');

-- --------------------------------------------------------

--
-- Table structure for table `forums`
--

CREATE TABLE `forums` (
  `category_id` int(10) NOT NULL,
  `category_name` varchar(200) NOT NULL,
  `category_description` varchar(500) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `forums`
--

INSERT INTO `forums` (`category_id`, `category_name`, `category_description`, `created`) VALUES
(1, 'Rose', 'A rose is a woody perennial flowering plant of the genus Rosa, in the family Rosaceae, or the flower it bears. There are over three hundred species and tens of thousands of cultivars. They form a group of plants that can be erect shrubs, climbing, or trailing, with stems that are often armed with sharp prickles.', '2021-06-12 20:51:36'),
(2, 'Lotus', 'Nelumbo nucifera, also known as Indian lotus, sacred lotus, or simply lotus, is one of two extant species of aquatic plant in the family Nelumbonaceae. It is often colloquially called a water lily. Lotus plants are adapted to grow in the flood plains of slow-moving rivers and delta areas.', '2021-06-12 21:03:20'),
(3, 'white lily', 'Lilies (Lilium species) are herbaceous flowering plants which grow from bulbs. ... Obviously the White Lily is white but lilies range in color from orange and red to purple, yellow and rose with an intense fragrance. The cultivars vary from eighteen inches to six feet tall for the White Oriental Lily', '2021-06-12 21:04:41'),
(4, 'Dahlia', 'Dahlia is a genus of bushy, tuberous, herbaceous perennial plants native to Mexico and Central America. A member of the Compositae family of dicotyledonous plants, its garden relatives thus include the sunflower, daisy, chrysanthemum, and zinnia. ', '2021-06-12 21:05:29'),
(5, 'Sunflower', 'Helianthus is a genus comprising about 70 species of annual and perennial flowering plants in the daisy family Asteraceae. Except for three South American species, the species of Helianthus are native to North America and Central America.', '2021-06-12 21:08:44'),
(6, 'Marigold', 'Tagetes is a genus of annual or perennial, mostly herbaceous plants in the sunflower family Asteraceae. They are among several groups of plants known in English as marigolds. The genus Tagetes was described by Carl Linnaeus in 1753. ', '2021-06-12 21:10:58'),
(7, 'Pansy', 'The garden pansy is a type of large-flowered hybrid plant cultivated as a garden flower. It is derived by hybridization from several species in the section Melanium of the genus Viola, particularly Viola tricolor, a wildflower of Europe and western Asia known as heartsease.', '2021-06-12 21:12:19'),
(8, 'Hibiscus', 'Hibiscus is a genus of flowering plants in the mallow family, Malvaceae. The genus is quite large, comprising several hundred species that are native to warm temperate, subtropical and tropical regions throughout the world.', '2021-06-12 21:13:34'),
(9, 'Frangipani', 'Plumeria is a genus of flowering plants in the family Apocynaceae. Most species are deciduous shrubs or small trees. The species variously are endemic to Mexico, Central America and the Caribbean, and as far south as Brazil and north as Florida, but are grown as cosmopolitan ornamentals in warm regions.', '2021-06-12 21:14:35');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `thread_id` int(10) NOT NULL,
  `thread_title` varchar(400) NOT NULL,
  `thread_desc` varchar(600) NOT NULL,
  `thread_cat_id` int(10) NOT NULL,
  `thread_user_id` int(10) NOT NULL,
  `Time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`thread_id`, `thread_title`, `thread_desc`, `thread_cat_id`, `thread_user_id`, `Time`) VALUES
(1, 'This is admin', 'This is admin...', 1, 1, '2021-06-12 21:19:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sl_no` int(10) NOT NULL,
  `user_name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sl_no`, `user_name`, `email`, `password`, `time`) VALUES
(1, 'Admin', 'admin@admin.com', '12345678', '2021-06-12 21:18:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `forums`
--
ALTER TABLE `forums`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`thread_id`);
ALTER TABLE `question` ADD FULLTEXT KEY `thread_title` (`thread_title`,`thread_desc`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sl_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `forums`
--
ALTER TABLE `forums`
  MODIFY `category_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `thread_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sl_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
